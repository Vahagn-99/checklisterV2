<?php

namespace App\Http\Controllers\Admin;

use App\Models\Checklist;
use App\Models\ChecklistsGroup;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreChecklistRequest;
use App\Http\Requests\UpdateChecklistRequest;

class ChecklistsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.checklists.create');
    }

    /**
     * Store a newly created resource in storage.
     * @param  \App\Models\Checklist  $checklist
     * @param  \App\Http\Requests\StoreChecklistRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(
        StoreChecklistRequest $request,
    ) {
        Checklist::create($request->validated());
        return redirect()->route('admin.home');
    }

    /**
     * Show the form for editing the specified resource.
     * @param  \App\Models\Checklist  $checklist
     * @return \Illuminate\Http\Response
     */
    public function edit(Checklist $checklist)
    {
        return view('admin.checklists', compact('checklist'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateChecklistRequest  $request
     * @param  \App\Models\Checklist  $checklist
     * @return \Illuminate\Http\Response
     */
    public function update(
        UpdateChecklistRequest $request,
        Checklist $checklist
    ) {
        $checklist->update($request->validated());
        return redirect()->route('admin.home');
    }

    /**
     * Remove the specified resource from storage.
     * @param  \App\Models\Checklist  $checklist
     * @return \Illuminate\Http\Response
     */
    public function destroy(
        Checklist $checklist
    ) {
        $checklist->delete();
        return redirect()->route('admin.home');
    }
}
