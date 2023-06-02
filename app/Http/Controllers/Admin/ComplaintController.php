<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Complaint;
use Illuminate\Http\Request;

class ComplaintController extends Controller
{
    
    public function index()
    {
        $complaints = Complaint::orderBy('id', 'DESC')->paginate(6);
        return view('admin.complaints.index', compact('complaints'));
    }

    
    public function create()
    {
        return view('admin.complaints.create');
    }

    
    public function store(Request $request)
    {
        $requestData = $request->all();
        Complaint::create($requestData);
        return redirect()->route('admin.complaints.index');
    }

    
    public function show(Complaint $complaint)
    {
        return view('admin.complaints.show', compact('complaint'));
    }

    
    public function edit(Complaint $complaint)
    {
        return view('admin.complaints.edit', compact('complaint'));
    }

    
    public function update(Request $request, Complaint $complaint)
    {
        $requestData = $request->all();
        $complaint->update($requestData);
        return redirect()->route('admin.complaints.index');
    }

    
    public function destroy(Complaint $complaint)
    {
        $complaint->delete();
        return redirect()->route('admin.complaints.index');
    }
}
