<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Report;

class ReportsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()

    {
        //
        $reports = Report::all();
        //return $reports;
        return view('reports.index')->with('reports', $reports);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('reports.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $request->validate(['title'=>'required|max:150',
       'description'=>'required',]);
       $report = new Report;
       $report->title = $request->title;
       $report->descriptions = $request->description;
       $report->priority = $request->priority;
       $report->save();
       return redirect('/reports');
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $report= Report::find($id);
        return view('reports.show')->with
        ('report',$report);
    }
    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $report = Report::find($id);
        return view('reports.edit')->with('report',
        $report);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
       $report = Report::find($id);
       $report->title = $request->title;
       $report->descriptions = 
       $request->description;
       $report->priority = $request->priority;
       $report->Update();
       return redirect('/reports');
    }//sy tambah
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $report = Report::find($id);
        $report->delete();
        return redirect('/reports');
    }
}
