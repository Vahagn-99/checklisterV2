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
     * @param  \App\Models\ChecklistsGroup $checklistsGroup
     * @return \Illuminate\Http\Response
     */
    public function create(ChecklistsGroup $checklistsGroup)
    {
        return view('admin.checklists.create', compact('checklistsGroup'));
    }

    /**
     * Store a newly created resource in storage.
     * @param  \App\Models\Checklist  $checklist
     * @param  \App\Models\ChecklistsGroup $checklistsGroup
     * @param  \App\Http\Requests\StoreChecklistRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(
        StoreChecklistRequest $request,
        ChecklistsGroup $checklistsGroup
    ) {
        $checklistsGroup->checklists()->create($request->validated());
        return redirect()->route('admin.home');
    }

    /**
     * Show the form for editing the specified resource.
     * @param  \App\Models\ChecklistsGroup $checklistsGroup
     * @param  \App\Models\Checklist  $checklist
     * @return \Illuminate\Http\Response
     */
    public function edit(ChecklistsGroup $checklistsGroup, Checklist $checklist)
    {
        return view('admin.checklists', compact('checklistsGroup,checklist'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateChecklistRequest  $request
     * @param  \App\Models\ChecklistsGroup $checklistsGroup
     * @param  \App\Models\Checklist  $checklist
     * @return \Illuminate\Http\Response
     */
    public function update(
        UpdateChecklistRequest $request,
        ChecklistsGroup $checklistsGroup,
        Checklist $checklist
    ) {
        $checklist->update($request->validated());
        return redirect()->route('admin.home');
    }

    /**
     * Remove the specified resource from storage.
     * @param  \App\Models\ChecklistsGroup $checklistsGroup
     * @param  \App\Models\Checklist  $checklist
     * @return \Illuminate\Http\Response
     */
    public function destroy(
        ChecklistsGroup $checklistsGroup,
        Checklist $checklist
    ) {
        $checklist->delete();
        return redirect()->route('admin.home');
    }
}
