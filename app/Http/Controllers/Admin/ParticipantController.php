<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Participant;
use App\Models\Schedule;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ParticipantController extends Controller
{
    public function index()
    {
        $items = Participant::with(['vaccines', 'schedules'])->get();
        return view('pages.admin.participant.index',[
            'items' => $items
        ]);
    }

    public function destroy($id)
    {
        $item = Participant::findorFail($id);
        $schedule = DB::table('schedules')->where('participant_id', $id)->update(['deleted_at' => Carbon::now()]);
        $item->delete();

        return redirect()->route('participant.index');

    }
}
