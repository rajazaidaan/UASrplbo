<nav class="bg-blue-600">
    <div class="max-w-6xl mx-auto px-4 py-3 flex justify-between">
        <div class="flex">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="{{ route('home') }}" class="flex items-center text-white font-bold text-2xl cursor-pointer">VACCINE</a>
            {{-- <div class="flex items-center text-white font-bold text-2xl cursor-pointer"
                onclick="location.href='{{ route('home') }}'; ">VACCINE
            </div> --}}
        </div>
        <div id="navbar" class="navbar-collapse">
            <ul class="hidden md:flex items-center font-medium font-sans space-x-1">
                @if (Route::current()->getName() == 'home')
                    <li class="py-5 px-3"><a href="#home" class="text-white hover:text-green-400">Beranda</a></li>
                    <li class="py-5 px-3"><a href="#tatacara" class=" text-white hover:text-green-400">Cara
                            Pendaftaran</a></li>
                @else
                <li class="py-5 px-3"><a href="{{ route('home') }}" class="text-white hover:text-green-400">Beranda</a></li>
                
                @endif
                <li class="py-5 px-3"><a href="{{ route('schedule') }}" class="text-white hover:text-green-400">Cek Jadwal Vaksin</a></li>
                {{-- <li class="py-5 px-3"><a href="#portfolio" class="text-white hover:text-green-400">Portfolio</a> --}}
                </li>
                <li class="py-5 px-3"><a href="{{ url('register-vaccine') }}"
                        class="px-6 py-2 text-white font-medium bg-green-400 hover:bg-green-500 border-transparent rounded-md">Daftar
                        Vaksin</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
