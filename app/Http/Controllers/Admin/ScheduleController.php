<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ScheduleRequest;
use App\Models\Participant;
use App\Models\Schedule;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    public function addSchedule($id)
    {
        $item = Participant::findOrFail($id);
        return view('pages.admin.participant.schedule',[
            'item' => $item,
        ]);
    }

    public function store(ScheduleRequest $request)
    {
        $data = $request->validated();
        $data = $request->all();
        $data['vaccine_date'] = Carbon::parse($request->date_of_birth)->format('Y-m-d');

        Schedule::create($data);
        return redirect()->route('participant.index');
    }
}
