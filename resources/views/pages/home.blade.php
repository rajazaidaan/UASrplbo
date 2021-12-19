@extends('layouts.app')

@section('content')
    <section>
        <div class="container bg-white">
            <div class="md:mx-20 py-20">
                <div class="grid grid-cols-1 md:grid-cols-5 md:mx-0 mx-10 gap-7 md:gap-0">
                    <div class="md:col-span-3 col-auto items-start flex flex-col space-y-5  md:my-20">
                        <p class="text-3xl font-bold text-blue-400 md:mr-40 mr-0">Lindungi diri dan sekitar dengan
                            berpartisipasi dalam program
                            Vaksinasi COVID-19
                        </p>

                        <a href="{{ route('doses') }}"
                            class="text-center md:text-left text-white bg bg-green-400 hover:bg-green-500 p-3 rounded-sm">Daftar
                            Vaksin Sekarang</a>

                    </div>
                    <div class="md:col-span-2 col-auto">
                        <img src="{{ url('/frontend/images/vaccine.png') }}" alt="" class="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="tentang">
        <div class="container">
            <div class="grid grid-cols-3 my-10 md:mx-20 gap-10">
                <div class="items-center">
                    <p class="text-lg">Tentang</p>
                    <p class="text-3xl font-bold text-blue-600">Vaksinasi COVID-19</p>
                </div>
                <div class="col-span-2">
                    Pada tahap awal, vaksinasi Covid-19 sudah berhasil diberikan kepada seluruh tenaga kesahatan, asisten
                    tenaga kesehatan, dan mahasiswa yang menjalankan pendidikan profesi kedokteran yang bekerja pada
                    fasilitas pelayanan kesehatan.
                    </br>
                    </br>
                    Vaksin tahap kedua juga sudah diberikan kepada lansia, pekerja sektor esensial, dan guru.
                    </br>
                    </br>
                    Pemerataan vaksinasi hingga saat ini dilanjutkan untuk masyarakat umum dan terus berjalan hingga
                    berhasil menjangkau seluruh warga negara Indonesia dan warga negara asing yang bertempat tinggal di
                    Indonesia.
                    </br>
                    </br>
                    Harapannya dengan upaya pemerataan vaksinasi ini, Indonesia dapat segera bangkit dan terbebas dari
                    penyebaran virus Covid-19.
                </div> <!-- end row -->
            </div> <!-- end portfolio-items -->
        </div>
    </section> <!-- end portfolio -->
@endsection

@push('addon-script')
    <script>
        $("document").ready(function() {
            //Add interaction to navbar on mouse hover it.
            $(".nav").on({
                mouseover: function() {
                    $("li:hover").addClass("active");
                },
                mouseout: function() {
                    $("li").removeClass("active");
                }
            });

            //Smooth scroll   
            $(".navbar-collapse ul li a[href^='#']").on('click', function(e) {

                // Prevent default anchor click behavior
                e.preventDefault();

                // Store hash
                var hash = this.hash;

                // Animation
                $("html, body").animate({
                    scrollTop: $(this.hash).offset().top - 50
                }, 400, function() {

                    // When done, add hash to url
                    // (default click behavior)
                    window.location.hash = hash;
                });
            });

            //Adds Smooth Scroll to arrow down
            $("#arrow a[href^='#']").on('click', function(e) {

                // Prevent default anchor click behavior
                e.preventDefault();

                // Store hash
                var hash = this.hash;

                // Animation
                $("html, body").animate({
                    scrollTop: $(this.hash).offset().top - 50
                }, 400, function() {

                    // When done, add hash to url
                    // (default click behavior)
                    window.location.hash = hash;
                });
            });

            //Adds Smooth Scrool to Back to Top button
            $("footer #btt a[href^='#']").on('click', function(e) {

                // Prevent default anchor click behavior
                e.preventDefault();

                // Store hash
                var hash = this.hash;

                // Animation
                $("html, body").animate({
                    scrollTop: $(this.hash).offset().top - 50
                }, 400, function() {

                    // When done, add hash to url
                    // (default click behavior)
                    window.location.hash = hash;
                });
            });

        });
    </script>
@endpush
