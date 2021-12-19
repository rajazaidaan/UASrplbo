@extends('layouts.app')

@section('title')
    Form Pendaftaran Vaskin
@endsection

@section('content')
    <div class="container">
        <div class="md:mx-28 my-10 border border-gray-200 rounded-md bg-white">
            <p class="text-blue-500 text-center text-3xl font-bold py-10">Form Pendaftaran Vaksin</p>
            <form action="{{ route('post-register') }}" method="post" class="grid gap-5 m-5">
                @csrf
                @error('vaccine_doses')
                    <span class="bg-red-600 text-white text-base p-2 text-center" role="alert">
                        <p>{{ $message }}</p>
                    </span>
                @enderror
                <input type="hidden" value="{{ $doses }}" name="vaccine_doses">
                <div class="grid grid-cols-2 gap-5">
                    <div class="form-group col-span-2">
                        <label class="font-medium" for="vaccine">Jenis Vaskin</label>
                        <div class="">
                            <select
                                class="px-2 py-2 w-full border border-gray-200 rounded-md outline-none focus:border-blue-400"
                                name="vaccine_id" id="vaccine_id" placeholder="Pilih Jenis Vaksin">
                                <option value="" class="">Pilih Jenis Vaksin</option>
                                @foreach ($vaccines as $vaccine)
                                    {{-- @if ($vaccine->doses >= $doses) --}}
                                    <option class="text-black" value="{{ $vaccine->id }}">
                                        {{ $vaccine->name }}
                                    </option>
                                    {{-- @endif --}}

                                @endforeach
                            </select>
                        </div>
                        @error('vaccine_id')
                            <span class="text-red-600 text-sm font-light" role="alert">
                                <p>*{{ $message }}</p>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="font-medium" for="fullname">Nama Lengkap</label>
                        <div class="flex flex-wrap">
                            <input
                                class="px-2 py-2 w-full border border-gray-200 rounded-md outline-none focus:border-blue-400"
                                type="text" name="fullname" id="fullname" placeholder="Nama Lengkap"
                                value="{{ old('fullname') }}">
                        </div>
                        @error('fullname')
                            <span class="text-red-600 text-sm font-light" role="alert">
                                <p>*{{ $message }}</p>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="font-medium" for="email">Email</label>
                        <div class="flex flex-wrap">
                            <input
                                class="px-2 py-2 w-full border border-gray-200 rounded-md outline-none focus:border-blue-400"
                                type="text" name="email" id="email" placeholder="Email" value="{{ old('email') }}">
                        </div>
                        @error('email')
                            <span class="text-red-600 text-sm font-light" role="alert">
                                <p>*{{ $message }}</p>
                            </span>
                        @enderror
                    </div>


                    <div class="form-group">
                        <label class="font-medium" for="nik">NIK</label>
                        <div class="flex flex-wrap">
                            <input
                                class="px-2 py-2 w-full border border-gray-200 rounded-md outline-none focus:border-blue-400"
                                type="text" name="nik" id="nik" placeholder="NIK" value="{{ old('nik') }}">
                        </div>
                        @error('nik')
                            <span class="text-red-600 text-sm font-light" role="alert">
                                <p>*{{ $message }}</p>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="font-medium" for="phone_number">No. Whatsapp</label>
                        <div class="flex flex-wrap">
                            <input
                                class="px-2 py-2 w-full border border-gray-200 rounded-md outline-none focus:border-blue-400"
                                type="text" name="phone_number" id="phone_number" placeholder="No. Whatsapp"
                                value="{{ old('phone_number') }}">
                        </div>
                        @error('phone_number')
                            <span class="text-red-600 text-sm font-light" role="alert">
                                <p>*{{ $message }}</p>
                            </span>
                        @enderror
                    </div>


                    <div class="form-group grid gap-2">
                        <p class="font-medium">Jenis Kelamin</p>
                        <div class="">
                            <input class="form-radio " type="radio" name="sex" id="sex" placeholder="Jenis Kelamin"
                                value="m">
                            <label class="" for="sex">Laki-laki</label>
                        </div>
                        <div class="">
                            <input class="form-radio" type="radio" name="sex" id="sex" placeholder="Jenis Kelamin"
                                value="f">
                            <label class="" for="sex">Perempuan</label>
                        </div>
                        @error('sex')
                            <span class="text-red-600 text-sm font-light" role="alert">
                                <p>*{{ $message }}</p>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="font-medium" for="date_of_birth">Tanggal Lahir</label>
                        <div class="flex flex-wrap">
                            <input
                                class="px-2 py-2 w-full border border-gray-200 rounded-md outline-none focus:border-blue-400"
                                type="date" name="date_of_birth" id="date_of_birth" placeholder="Tanggal Lahir">
                        </div>
                        @error('date_of_birth')
                            <span class="text-red-600 text-sm font-light" role="alert">
                                <p>*{{ $message }}</p>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="font-medium" for="address">Alamat</label>
                        <div class="flex">
                            <textarea
                                class="px-2 py-2 border w-full border-gray-200 rounded-md outline-none focus:border-blue-400"
                                name="address" id="address" placeholder="Alamat">{{ old('address') }}</textarea>
                        </div>
                        @error('address')
                            <span class="text-red-600 text-sm font-light" role="alert">
                                <p>*{{ $message }}</p>
                            </span>
                        @enderror
                    </div>

                    <button type="submit"
                        class="col-span-2 w-full bg-green-400 p-3 text-white font-medium hover:bg-green-500 rounded-sm">Daftar</button>

                </div>
            </form>
        </div>
    </div>
@endsection
