<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreChecklistsGroupRequest;
use App\Http\Requests\UpdateChecklistsGroupRequest;
use App\Models\ChecklistsGroup;

class ChecklistsGroupController extends Controller
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
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreChecklistsGroupRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreChecklistsGroupRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ChecklistsGroup  $checklistsGroup
     * @return \Illuminate\Http\Response
     */
    public function show(ChecklistsGroup $checklistsGroup)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ChecklistsGroup  $checklistsGroup
     * @return \Illuminate\Http\Response
     */
    public function edit(ChecklistsGroup $checklistsGroup)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateChecklistsGroupRequest  $request
     * @param  \App\Models\ChecklistsGroup  $checklistsGroup
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateChecklistsGroupRequest $request, ChecklistsGroup $checklistsGroup)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ChecklistsGroup  $checklistsGroup
     * @return \Illuminate\Http\Response
     */
    public function destroy(ChecklistsGroup $checklistsGroup)
    {
        //
    }
}
