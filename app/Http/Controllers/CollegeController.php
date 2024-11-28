<?php

namespace App\Http\Controllers;

use App\Models\College;
use Illuminate\Http\Request;
use App\Http\Requests\CollegeRequest;

class CollegeController extends Controller
{
    /**
     * Display a listing of the college.
     */
    public function index()
    {
        $colleges = College::query()->get();
        return view('locator.index',[
            'colleges' => $colleges,
        ]);
    }

    /**
     * Show the form for creating a new college.
     */
    public function create()
    {
        return view('locator.create');
    }

    /**
     * Store a newly created college in storage.
     */
    public function store(CollegeRequest $request)
    {

        //Create New College Record
        College::query()->create([
            'name' => $request->name,
            'address' => $request->address,
            'latitude' => $request->latitude,
            'longitude' => $request->longitude,
            'website' => $request->website,
            'contact_number' => $request->contact_number,
        ]);
        return redirect('/locator/create')->with('message', 'Successfully Created a New College Record.');;
    }

    /**
     * Display the specified college.
     */
    public function show(College $college)
    {
        //
    }

    /**
     * Show the form for editing the specified college.
     */
    public function edit(string $id)
    {

        //Edit College Record
        $college = College::query()->find($id);
        return view('locator.edit', [
            'college' => $college,
        ]);
    }

    /**
     * Update the specified college in storage.
     */
    public function update(CollegeRequest $request, string $id)
    {
        //Update form Here
        $college = College::query()->find($id);
        $college->update([
            'name' => $request->name,
            'address' => $request->address,
            'latitude' => $request->latitude,
            'longitude' => $request->longitude,
            'website' => $request->website,
            'contact_number' => $request->contact_number,
        ]);

        return redirect()->back()->withInput()->with('message', 'Successfully Updated College Details.');
    }

    /**
     * Remove the specified college from storage.
     */
    public function destroy(string $id)
    {
        //Delete College Record
        $college = College::query()->find($id)->delete();
        return redirect()->back();
    }
}
