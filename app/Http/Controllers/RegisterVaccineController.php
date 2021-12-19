<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterVaccineRequest;
use App\Models\Participant;
use App\Models\Vaccine;
use Carbon\Carbon;
use Illuminate\Http\Request;

class RegisterVaccineController extends Controller
{
    public function index($doses)
    {   
        $vaccines = Vaccine::all()->where('doses', '>=' , $doses);
        return view('pages.register-vaccine',[
            'vaccines' => $vaccines ,
            'doses' => $doses
        ]);
    }

    public function doses()
    {
        return view('pages.doses');
    }

    public function create()
    {
        $participants = Participant::all();
        $vaccines = Vaccine::all();
        return view('pages.register-vaccine',[
            'participants' => $participants,
            'vaccines' => $vaccines,
        ]);
    }

    public function store(RegisterVaccineRequest $request)
    {

        $data = $request->validated();
        $data = $request->all();
        $data['date_of_birth'] = Carbon::parse($request->date_of_birth)->format('Y-m-d');


        $total = Vaccine::find($request->vaccine_id);
        $total->update(['amount' => $total->quantity - 1 ]);
        

        Participant::create($data);
        return redirect()->route('schedule');
    }
}
