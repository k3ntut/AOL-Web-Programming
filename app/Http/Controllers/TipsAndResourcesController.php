<?php

namespace App\Http\Controllers;

use App\Models\TipsAndResources;
use App\Http\Requests\StoreTipsAndResourcesRequest;
use App\Http\Requests\UpdateTipsAndResourcesRequest;

class TipsAndResourcesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tnr = TipsAndResources::paginate();
        return view('tnr.index', ['tipsandresources' => $tnr]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTipsAndResourcesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($tipsAndResources)
    {
        $tip = TipsAndResources::findOrFail($tipsAndResources);
        return view('tnr.index_detail', ['tip' => $tip]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TipsAndResources $tipsAndResources)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTipsAndResourcesRequest $request, TipsAndResources $tipsAndResources)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TipsAndResources $tipsAndResources)
    {
        //
    }
}
