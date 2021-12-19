@extends('layouts.app')

@section('content')
    <section>
        <div class="container bg-white">
            <div class="md:mx-20 py-10">
                <div class="grid grid-cols-5">
                    <div class="col-span-3 items-center flex">
                        <p></p>
                        <a href="" class="text-white bg bg-green-400 hover:bg-green-500 p-3 rounded-sm">Daftar Vaksin Sekarang</a>
                    </div>
                    <div class="col-span-2">
                        <img src="{{ url('/frontend/images/vaccine.png') }}" alt="" class="">
                    </div>
                </div>
            </div>
        </div>
    </section> <!-- end about section -->

    <section id="portfolio">
        <div class="container text-center">
            <div class="portfolio-items">
                <h2 class="section-heading logo">Portfolio</h2>
                <div class="row">
                    <div class="col-sm-4 col-md-4">
                        <div class="thumbnail">
                            <img class="img-responsive"
                                src="data:image/jpeg;base64,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"
                                alt="item 1">
                            <div class="caption">
                                <p>Your Website Here</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4 col-md-4">
                        <div class="thumbnail">
                            <img class="img-responsive"
                                src="https://cdn.theculturetrip.com/wp-content/uploads/2015/12/cj3.jpg" alt="item 2">
                            <div class="caption">
                                <p>Your Website Here</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4 col-md-4">
                        <div class="thumbnail">
                            <img class="img-responsive"
                                src="http://wallstreetinsanity.com/wp-content/uploads/7-So-Called-Negative-Behaviors-That-Are-Actually-Healthy.jpg"
                                alt="item 3">
                            <div class="caption">
                                <p>Your Website Here</p>
                            </div>
                        </div>
                    </div>
                </div> <!-- end row -->

                <div class="row">
                    <div class="col-sm-4 col-md-4">
                        <div class="thumbnail">
                            <img class="img-responsive"
                                src="http://wefunction.com/wordpress/wp-content/uploads/2013/10/tumblr_ms9mpnB2o61st5lhmo1_1280.jpg"
                                alt="item 4">
                            <div class="caption">
                                <p>Your Website Here</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4 col-md-4">
                        <div class="thumbnail">
                            <img class="img-responsive"
                                src="data:image/jpeg;base64,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"
                                alt="item 5">
                            <div class="caption">
                                <p>Your Website Here</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4 col-md-4">
                        <div class="thumbnail">
                            <img class="img-responsive"
                                src="https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcQ8trj3mC0OmqSZOKb3WDlxL-pzBoftwaP-cbxGc6tD5I4v4TYd"
                                alt="item 6">
                            <div class="caption">
                                <p>Your Website Here</p>
                            </div>
                        </div>
                    </div>
                </div> <!-- end row -->
            </div> <!-- end portfolio-items -->
        </div>
    </section> <!-- end portfolio -->

    <section id="contact">
        <div class="container text-center">
            <div class="contact-form white-section">
                <h2 class="section-heading">Contact <strong>Me</strong></h2>
                <hr class="heading-border" />
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        &nbsp;
                        <form>
                            <div class="row">
                                <div class="col-md-6 col-sm-12">
                                    <!-- First name field -->
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="First Name" required>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <!-- Last name field -->
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Last Name">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <!-- Phone field -->
                                    <div class="form-group">
                                        <input type="tel" class="form-control" placeholder="Phone Number">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <!-- Email field -->
                                    <div class="form-group">
                                        <input type="email" class="form-control" placeholder="Email Address" required>
                                    </div>
                                </div>
                            </div> <!-- end row -->

                            <div class="form-group">
                                <!-- Message field -->
                                <!-- hight inline styled for priority causes -->
                                <textarea class="form-control" placeholder="Write your message here..."
                                    style="height:300px;"></textarea>
                            </div>
                            <button type="submit" class="btn btn-default sub">Submit</button>
                        </form>
                    </div> <!-- end form section -->

                    <div class="col-xs-12 col-sm-6 col-md-6 social-media">
                        <h3>Find me on</h3>
                        <ul>
                            <li id="linkedIn">
                                <a href="https://www.linkedin.com/in/luique-cruz" target="_blank">
                                    <i class="fa fa-linkedin-square fa-3x"></i>
                                </a>
                            </li>
                            <li id="twitter">
                                <a href="https://twitter.com/luiquecruz" target="_blank">
                                    <i class="fa fa-twitter-square fa-3x"></i>
                                </a>
                            </li>
                            <li id="gitHub">
                                <a href="https://github.com/Luiquecruz" target="_blank">
                                    <i class="fa fa-github-square fa-3x"></i>
                                </a>
                            </li>
                        </ul>
                        <div class="well well-sm">
                            <blockquote class="text-justify">
                                <p>for giving prudence to those who are simple, knowledge and discretion to the young let
                                    the wise listen and add to their learning, and let the discerning get guidance for
                                    understanding proverbs and parables, the sayings and riddles of the wise. The fear of
                                    the LORD is the beginning of knowledge, but fools despise wisdom and instruction.</p>
                                <footer>Poverbs <cite title="Source Title">1:4-7</cite></footer>
                            </blockquote>
                        </div>
                    </div> <!-- end social media section -->
                </div> <!-- end row -->
            </div>
        </div>
    </section>
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
