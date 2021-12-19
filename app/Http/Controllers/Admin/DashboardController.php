<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Participant;
use App\Models\Vaccine;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        // SELECT SUM() AS jumlah FROM profile;
       $participant = Participant::count();
       $vaccine = Vaccine::count();
       $doses =  Vaccine::all();
        return view('pages.admin.dashboard', [
            'participant' => $participant,
            'vaccine' => $vaccine,
            'doses' => $doses
        ]);
    }

    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }
}
