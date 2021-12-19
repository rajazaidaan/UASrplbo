<?php

namespace App\Http\Controllers;

use App\Models\Participant;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    public function index()
    {   
        return view('pages.schedule');
    }

    public function getSchedule(Request $request)
    {

        $item = Participant::with(['vaccines', 'schedules'])->where('nik', $request->nik)->where('vaccine_doses', $request->vaccine_doses)->firstOrFail();

        return view('pages.show-schedule', [
            'item' => $item
        ]);
    }
}
