<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\VaccineRequest;
use App\Models\Vaccine;
use Illuminate\Http\Request;

class VaccineController extends Controller
{
    public function index()
    {
        $items = Vaccine::all();
        return view('pages.admin.vaccine.index',[
            'items' => $items
        ]);
    }

    public function create()
    {
        return view('pages.admin.vaccine.create');
    }

    public function store(VaccineRequest $request)
    {
        $data = $request->validated();
        $data = $request->all();

        Vaccine::create($data);
        return redirect()->route('vaccine.index');
    }

    public function edit($id)
    {
        $item = Vaccine::findOrFail($id);

        return view('pages.admin.vaccine.edit',[
            'item' => $item
        ]);
    }

    public function update(VaccineRequest $request, $id)
    {
        $data = $request->all();
        $item = Vaccine::findOrFail($id);

        $item->update($data);
        return redirect()->route('vaccine.index');
    }

    public function destroy($id)
    {
        $item = Vaccine::findorFail($id);
        $item->delete();

        return redirect()->route('vaccine.index');

    }
}
