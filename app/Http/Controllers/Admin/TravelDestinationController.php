<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\travelDestination;
use App\Http\Requests\TravelDestinationsStoreRequest;
use Illuminate\Support\Facades\Storage;


class TravelDestinationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $traveldestinations = travelDestination::all();
        return view('admin.traveldestinations.index', compact('traveldestinations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.traveldestinations.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TravelDestinationsStoreRequest $request)
    {
        $image = $request->file('image')->store('public/traveldestination');

        travelDestination::create([
            'name' => $request->name,
            'description' => $request->description,
            'image' => $image,
            'price' => $request->price
        ]);

        return to_route('admin.traveldestinations.index')->with('success', 'Travel Destination created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(travelDestination $traveldestination)
    {
        return view('admin.traveldestinations.edit', compact('traveldestination'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, travelDestination $traveldestination)
    {   
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required'
        ]);
        $image = $traveldestination->image;
        if($request->hasFile('image')){
            Storage::delete($traveldestination->image);
            $image = $request->file('image')->store('public');
        }

        $traveldestination->update([
            'name' => $request->name,
            'description' => $request->description,
            'image' => $image,
            'price' => $request->price
        ]);

        return to_route('admin.traveldestinations.index')->with('success', 'Travel Destination updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(travelDestination $traveldestination)
    {
        Storage::delete($traveldestination->image);
        $traveldestination->delete();

        return to_route('admin.traveldestinations.index')->with('danger', 'Travel Destination deleted successfully');

    }
}
