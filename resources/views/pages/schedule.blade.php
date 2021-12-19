@extends('layouts.app')

@section('title')
    Lihat Jadwal Vaksin
@endsection

@section('content')

    <div class="container">
        <div class="md:mx-20 justify-center my-10">
            <div class="border border-gray-400 rounded-md bg-white ">
                <div class="mb-5 space-y-2">
                    <h1 class="text-center text-lg font-semibold border-b py-3">Cek Jadwal Vaksin Anda</h1>
                    <form action="{{ route('get-schedule') }}" method="get" class="grid m-5 space-y-3">
                        @csrf
                        <div class="grid">
                            <label for="nik">Nomor Induk Kependudukan / NIK</label>
                            <input type="text" name="nik" id="nik" placeholder="NIK"
                                class="w-full border outline-none focus:border-green-400  rounded-sm p-2 border-gr ">
                        </div>

                        <div class="grid">
                            <label for="vaccine_doses">Vaksin Ke Berapa ?</label>
                            <select name="vaccine_doses" id="vaccine_doses"
                                class="w-full border outline-none focus:border-green-400 rounded-sm p-2 ">
                                <option value="">-</option>
                                <option value="1">Pertama</option>
                                <option value="2">Kedua</option>
                                <option value="3">Ketiga</option>
                            </select>
                        </div>

                        <div class="grid md:grid-cols-3">
                            <button class="w-full text-white text-lg py-2 outline-none rounded-sm bg-green-400 text-center"
                                type="submit">
                                Cek Jadwal Vaksin Anda
                            </button>
                        </div>
                    </form>
                </div>


            </div>
        </div>
    </div>
@endsection
