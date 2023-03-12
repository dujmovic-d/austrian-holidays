<?php

namespace App\Http\Controllers;

use App\Models\Holiday;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class HolidayController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $holidays = Holiday::all();
        return view('holidays.index', [
            'holidays' => $holidays
        ]);
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('holidays.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $date = explode('-', $request->holidayDate);
        $holiday = new Holiday([
            'name' => htmlentities($request->holidayName),
            'date' => [
                'd' => $date[0],
                'm' => $date[1],
                'y' => $date[2]
            ]
        ]);
        $holiday->save();
        return redirect(route('holidays.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Holiday  $holiday
     * @return \Illuminate\Http\Response
     */
    public function show(Holiday $holiday)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Holiday  $holiday
     * @return \Illuminate\Http\Response
     */
    public function edit(Holiday $holiday)
    {
        return view('holidays.edit', ['holiday' => $holiday]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Holiday  $holiday
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Holiday $holiday): RedirectResponse
    {
        $holiday->name = $request->holidayName;
        $date = explode('-', $request->holidayDate);
        $holiday->date = [
            'd' => $date[0],
            'm' => $date[1],
            'y' => $date[2]
        ];
        $holiday->save();

        return redirect(route('holidays.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Holiday  $holiday
     * @return \Illuminate\Http\Response
     */
    public function destroy(Holiday $holiday): RedirectResponse
    {
        $holiday->delete();
        return redirect(route('holidays.index'));
    }
}
