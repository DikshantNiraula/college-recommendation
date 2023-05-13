<?php

namespace App\Http\Controllers;

use App\Models\InfoCounter;
use Illuminate\Http\Request;

class InfoCounterController extends Controller
{
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\InfoCounter  $infoCounter
     * @return \Illuminate\Http\Response
     */
    public function edit(InfoCounter $infocounter)
    {
        // Show the edit form for the specified InfoCounter
        return view('admin.infocounter.edit', compact('infocounter'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\InfoCounter  $infoCounter
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'count1' => 'required|integer',
            'count2' => 'required|integer',
            'count3' => 'required|integer',
            'count4' => 'required|integer',
        ]);
        $infoCounter = InfoCounter::first();
        // Update the InfoCounter record with the validated data
        $infoCounter->update($validatedData);

        // Redirect to the appropriate view or route
        return redirect()->back()
            ->with('success', 'Info Counter updated successfully.');
    }
}
