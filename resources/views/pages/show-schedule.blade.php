@extends('layouts.app')

@section('title')
    Jadwal Vaksin
@endsection

@section('content')

    <div class="container">
        <div class="md:mx-20 mx-10 justify-center my-10">
            <div class="border border-gray-400 rounded-md bg-white ">
                <div class="grid gap-3 mb-5 space-y-2">
                    <h1 class="text-center text-xl font-semibold border-b py-3">Jadwal Vaksin Anda</h1>
                    @if ($item->schedules == null)
                        <p class="p-5 text-xl text-center">Silahkan cek secara berkala pada website ini setiap harinya </br>
                            pada jam 15.00 - 17.00 WIB untuk melihat jadwal </p>
                    @else
                        <div class="grid md:grid-cols-2 px-5">
                            <div class="grid grid-cols-5">
                                <p class="font-medium">Nama</p>
                                <p>:</p>
                                <p class="col-span-3 text-left">{{ $item->fullname }}</p>
                            </div>
                        </div>
                        <div class="grid md:grid-cols-2 px-6">
                            <div class="grid grid-cols-5">
                                <p class="font-medium">NIK</p>
                                <p>:</p>
                                <p class="col-span-3 text-left">{{ $item->nik }}</p>
                            </div>
                        </div>
                        <div class="grid md:grid-cols-2 px-5">
                            <div class="grid grid-cols-5">
                                <p class="font-medium">Vaksin</p>
                                <p>:</p>
                                <p class="col-span-3 text-left">{{ $item->vaccines->name }}</p>
                            </div>
                        </div>
                        <div class="grid md:grid-cols-2 px-5">
                            <div class="grid grid-cols-5">
                                <p class="font-medium">Vaksin Ke</p>
                                <p>:</p>
                                <p class="col-span-3 text-left">{{ $item->vaccine_doses }}</p>
                            </div>
                        </div>
                        <div class="grid gap-3 px-5">
                            <p class="text-xl text-center">Jadwal vaksin anda :
                                {{ Carbon\Carbon::parse($item->schedules->vaccine_date)->format('d M Y') }}, Pukul : 10:00
                                - 11:00 WIB</p>
                                <p class="text-xl text-center">Silahkan Screenshoot halaman ini atau print bukti jadwal vaksin anda untuk dibawa saat vaksin</p>
                        </div>
                    @endif


                </div>


            </div>
        </div>
    </div>
@endsection
