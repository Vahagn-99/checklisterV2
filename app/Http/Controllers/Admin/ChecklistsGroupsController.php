<?php

namespace App\Http\Controllers\Admin;

use App\Models\ChecklistsGroup;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreChecklistsGroupRequest;
use App\Http\Requests\UpdateChecklistsGroupRequest;

class ChecklistsGroupsController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.checklist_groups.index', [
            'checklists_groups' => ChecklistsGroup::withCount(
                'checklists'
            )->get(),
        ]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.checklist_groups.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreChecklistsGroupRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreChecklistsGroupRequest $request)
    {
        ChecklistsGroup::create($request->validated());
        return redirect()->route('admin.home');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ChecklistsGroup  $checklistsGroup
     * @return \Illuminate\Http\Response
     */
    public function edit(ChecklistsGroup $checklistsGroup)
    {
        return view('admin.checklists.create', compact('checklistsGroup'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateChecklistsGroupRequest  $request
     * @param  \App\Models\ChecklistsGroup  $checklistsGroup
     * @return \Illuminate\Http\Response
     */
    public function update(
        UpdateChecklistsGroupRequest $request,
        ChecklistsGroup $checklistsGroup
    ) {
        $checklistsGroup->create($request->validated());
        return redirect()->route('admin.home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ChecklistsGroup  $checklistsGroup
     * @return \Illuminate\Http\Response
     */
    public function destroy(ChecklistsGroup $checklistsGroup)
    {
        $checklistsGroup->delete();
        return redirect()->route('admin.home');
    }
}
