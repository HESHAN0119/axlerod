@extends('layouts.app')

@section('content')
    <div class="mt-4"></div> <!-- Space after the navigation bar -->


    <!-- ######################################## ^^^ Timeline Section ^^^ ######################################## -->
    <section id="timeline">
        <div class="mx-md-5">
            <div class="container">
                <div class="row">

                    <!-- ###################################  Filter section ################################### -->
                    <x-posts-filter-section :vehicletypes="$vehicle_types"/>
                    <!-- ###################################  Filter section end ################################### -->



                    <!-- ###################################  Garager View section ################################### -->
                    <div class="col-md-9" id="post-section">

                        <!-- ++++++++++++++++++++++++++++ Post section - First Post ++++++++++++++++++++++++++++ -->
                        <div class="mt-3 mt-md-5 mt-lg-5 mt-xl-5 mb-2">
                            <div class="card gPropView">
                                <div class="card-body">

                                    <div class="row mt-2 align-items-center">
                                        
                                        <div class="col-md-3 text-center">
                                            <img src="{{ asset('assets/img/pro.png') }}" alt="profile image" class="img-fluid">
                                        </div>

                                        <div class="col-md-4 mbView">
                                            <div class="mb-2">
                                                @if ($garage_profile->status == 1)
                                                    <small class="bg-success px-2 text-white" style="border-radius:20px;" >Verified</small>
                                                @else
                                                    <small class="bg-warning px-2 text-white" style="border-radius:20px;" >Not Verified</small>
                                                @endif
                                                
                                            </div>
                                            
                                            <h6><b>Name:</b> {{ $garage_profile->garage_name }} </h6>
                                            <h6><b>Location:</b> {{ $garage_profile->location }}</h6>
                                            <h6><b>Views:</b> {{ $garage_profile->views }}</h6>
                                        </div>

                                        <div class="col-md-1"></div>
                                        <div class="col-md-4">
                                            <div>
                                                <a href="#" class="btn btn-sm py-2 bg-success text-white w-100">
                                                <i class="fas fa-calendar-check"></i> Make an Appointment</a>
                                            </div>
                                            <div class="mt-3 mx-4 row justify-content-between" >
                                                <div>
                                                    <a href="https://msng.link/o/?{{ $garage_profile->garage_mobno }}=wa" target="_blank" class="btn btn-md bg-white" style="width: 50px; height: 50px; border-radius: 60px;">
                                                        <img src="{{ asset('assets/img/wp.png') }}" style="width: 45px; height: 45px; margin-left: -10px; margin-top: -5px;"  alt="" >
                                                    </a>
                                                </div>

                                                <div>
                                                    <a href="mailto:{{ $garage_profile->garage_email }}" class="btn btn-md" style=" width: 50px; height: 50px; border-radius: 60px;">
                                                        <img src="{{ asset('assets/img/gm.png') }}" style="width: 30px; margin-left: -3px; margin-top:4px;"  alt="" >
                                                    </a>
                                                </div>

                                                <div>
                                                    <a href="" class="btn btn-md bg-white" style="width: 50px; height: 50px; border-radius: 60px;">
                                                        <img src="{{ asset('assets/img/fb.png') }}" style="width: 40px; height: 40px; margin-left: -7px; margin-top: -2px;"  alt="" >
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mt-3">
                                        <div class="col-md-7">

                                            <div class="p-3 gProPara">
                                                <h6><b>Email:</b> {{ $garage_profile->garage_email }}</h6>
                                                <h6><b>Mobile:</b> {{ $garage_profile->garage_mobno }}</h6>
                                                {{-- <h6><b>Address:</b> No.201, Daham pasal mawatha, Pahala bomiriya, Kaduwela</h6> --}}
                                                <br>
                                                <h6><b>Why Choose Us:</b></h6>

                                                <p class="text-justify ">{{ $garage_profile->bio }}</p>
                                            </div>
                                        
                                        </div>
                                        <div class="col-md-5">
                                            <!--Google map-->
                                            <div class="map-responsive" id="map" style="width: 100%;height:340px;"></div>
                                            <!--Google Maps-->
                                        </div>
                                    </div>

                                    <div class="row mt-4 mb-2 mt-md-2 mt-lg-2 mt-xl-2">
                                        <div class="col-12">
                                            <h5 class="text-center p-1 rounded" style="border: 1px solid rgb(122, 122, 122);">Services</h5>
                                        </div>
                                    </div>

                                    <div class="row mb-3 mb-md-5 mb-lg-5 mb-xl-5">
                                        <div class="col-md-4">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h5 class="card-title">
                                                        <i class="fa fa-check-circle" style="font-size: 17px;"></i> Service 01
                                                    </h5>
                                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                    <p class="text-muted">Rs.1000 per 1hr</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h5 class="card-title">
                                                        <i class="fa fa-check-circle" style="font-size: 17px;"></i> Service 02
                                                    </h5>
                                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                    <p class="text-muted">Rs.1000 per 1hr</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h5 class="card-title">
                                                        <i class="fa fa-check-circle" style="font-size: 17px;"></i> Service 03
                                                    </h5>
                                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                    <p class="text-muted">Rs.1000 per 1hr</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mt-2">
                                        <div class="col-12">
                                            <h5 class="text-center p-1 rounded" style="border: 1px solid rgb(122, 122, 122);">Sample Works</h5>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="p-3">
                                            <div id="carouselControl" class="carousel slide" data-ride="carousel">
                                                <div class="carousel-inner">
                                                    <div class="carousel-item active">
                                                        <img class="d-block w-100" src="{{ asset('assets/img/p6.jpg') }}" alt="First slide">
                                                    </div>
                                                    <div class="carousel-item">
                                                        <img class="d-block w-100" src="{{ asset('assets/img/p6.jpg') }}" alt="Second slide">
                                                    </div>
                                                    <div class="carousel-item">
                                                        <img class="d-block w-100" src="{{ asset('assets/img/p6.jpg') }}" alt="Third slide">
                                                    </div>
                                                </div>
                                                <a class="carousel-control-prev" href="#carouselControls" role="button" data-slide="prev">
                                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                    <span class="sr-only">Previous</span>
                                                </a>
                                                <a class="carousel-control-next" href="#carouselControls" role="button" data-slide="next">
                                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                    <span class="sr-only">Next</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div> <!-- ++++++++++++++++++++++++++++ Post section - First Post end ++++++++++++++++++++++++++++ -->
                    
                    </div> <!-- ###################################  Post section End ################################### -->

                </div>
            </div>
        </div>
       
        <script>
            const latitude = parseFloat("{{ $garage_profile->latitude }}")
            const longtitude = parseFloat("{{ $garage_profile->longtitude }}")
            function initMap(){
                var options = {
                    zoom:15,
                    center:{lat:latitude,lng:longtitude}
                }

                var map = new google.maps.Map(document.getElementById('map'), options);
            
                var marker = new google.maps.Marker({
                    position:{lat:latitude,lng:longtitude},
                    map:map,
                    // icon:'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png'
                });
            
                var infoWindow = new google.maps.InfoWindow({
                    content:'<h6>{{ $garage_profile->garage_name }}</h6>'
                });
            
                marker.addListener('click', function(){
                    infoWindow.open(map, marker);
                });
            }
        </script>
        <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDuRQucFhV9dLb9TBAp1yEnJgGCFnytOhQ&callback=initMap"></script>
    </section> <!-- ######################################## ^^^ Timeline Section end ^^^ ######################################## -->

@endsection