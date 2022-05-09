<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\travelPackage;
use App\Http\Requests\TravelPackagesStoreRequest;
use Illuminate\Support\Facades\Storage;

class TravelPackageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $travelpackages = travelPackage::all();
        return view('admin.travelpackages.index', compact('travelpackages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.travelpackages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TravelPackagesStoreRequest $request)
    {
        $image = $request->file('image')->store('public/travelpackages');

        travelPackage::create([
            'name' => $request->name,
            'description' => $request->description,
            'image' => $image,
            'price' => $request->price
        ]);

        return to_route('admin.travelpackages.index')->with('success', 'Travel Package created successfully');

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
    public function edit(travelPackage $travelpackage)
    {
        return view('admin.travelpackages.edit', compact('travelpackage'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, travelPackage $travelpackage)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required'
        ]);
        $image = $travelpackage->image;
        if($request->hasFile('image')){
            Storage::delete($travelpackage->image);
            $image = $request->file('image')->store('public');
        }

        $travelpackage->update([
            'name' => $request->name,
            'description' => $request->description,
            'image' => $image,
            'price' => $request->price
        ]);

        return to_route('admin.travelpackages.index')->with('success', 'Travel Package updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(travelPackage $travelpackage)
    {
        Storage::delete($travelpackage->image);
        $travelpackage->delete();

        return to_route('admin.travelpackages.index')->with('danger', 'Travel Package deleted successfully');

    }
}
