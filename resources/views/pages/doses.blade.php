@extends('layouts.app')

@section('title')
    Form Pendaftaran Vaskin
@endsection

@section('content')
    <div class="container">
        <div class="md:mx-28 my-10 pb-24 rounded-md bg-white">
            <div class="py-10">
                <p class="text-blue-500 text-center text-3xl font-bold ">Pilih Vaksin Keberapa</p>
                <p class="text-gray-500 text-center">Silahkan cek secara berkala pada website ini setiap harinya
                    pada jam 09.00 - 12.00 WIB untuk melakukan pendaftaran</p>
            </div>
           
            <div class="grid grid-cols-3 gap-10 mx-10">
                @if (DB::table('vaccines')->where('doses', '>=', 1)->count() >= 1)
                    <a href="{{ route('register-vaccine', 1) }}"
                        class="p-10 bg-green-400 hover:bg-green-500 text-white text-3xl rounded-md items-center flex justify-center h-40">1</a>
                @else
                <div class="grid p-10 bg-gray-500 rounded-md items-center h-40">
                    <p class="text-white text-3xl text-center">3</p>
                    <p class="text-sm text-center text-white">Dosis Pertama Belum Tersedia</p>
                </div>
                @endif

                @if (DB::table('vaccines')->where('doses', '>=', 2)->count() >= 1)
                <a href="{{ route('register-vaccine', 2) }}"
                class="p-10 bg-green-400 text-white hover:bg-green-500 text-3xl rounded-md items-center flex justify-center h-40">2</a>
                @else
                    <div class="grid p-10 bg-gray-500 rounded-md items-center h-40">
                        <p class="text-white text-3xl text-center">2</p>
                        <p class="text-sm text-center text-white">Dosis Kedua Belum Tersedia</p>
                    </div>
                @endif
                

                @if (DB::table('vaccines')->where('doses', '>=', 3)->count() >= 1)
                    <a href="{{ route('register-vaccine', 3) }}"
                        class="p-10 bg-green-400 text-white hover:bg-green-500 text-3xl rounded-md items-center flex justify-center h-40">3</a>
                @else
                    <div class="grid p-10 bg-gray-500 rounded-md items-center h-40">
                        <p class="text-white text-3xl text-center">3</p>
                        <p class="text-sm text-center text-white">Dosis Ketiga Belum Tersedia</p>
                    </div>
                @endif

            </div>
        </div>
    </div>
@endsection
