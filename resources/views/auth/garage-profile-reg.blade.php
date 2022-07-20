@extends('layouts.auth.app')

@section('content')
@if($errors->any())
    {!! implode('', $errors->all('<div>:message</div>')) !!}
@endif
    <section id="signup">
        <div class="container">
      <div class="card my-5">
        <div class="card-body">
          <div class="row">
            <div class="col-md-6">
              
              <div class="d-block d-sm-none">
                <img
                  src="img/signup.png"
                  style="width: 90%; height: auto"
                  id="signupImage"
                  alt="Signup image"
                />
              </div>

              <div>
                <form class="ml-2" method="POST" action="{{ route('profile.store') }}">
                  @csrf
                  <div class="row mb-4">
                    <div class="col-md-1">
                      <i class="fas fa-user fa-lg mt-3 d-none d-md-block"></i>
                    </div>
                    <div class="col-md-10">
                      <input
                        type="text"
                        name="garage_name"
                        class="form-control"
                        placeholder="Garage Name"
                      />
                    </div>
                  </div>

                  <div class="row mb-4">
                    <div class="col-md-1">
                      <i class="fas fa-phone fa-lg mt-3 d-none d-md-block"></i>
                    </div>
                    <div class="col-md-10">
                      <input
                        type="text"
                        name="garage_mobno"
                        class="form-control"
                        placeholder="Garage Contact Number"
                      />
                    </div>
                  </div>

					<div class="row mb-4">
						<div class="col-md-1">
							<i class="fas fa-envelope fa-lg mt-3 d-none d-md-block"></i>
						</div>
						<div class="col-md-10">
							<input type="email" name="garage_email" class="form-control" placeholder="Garage Email"/>
						</div>
					</div>

					<div class="row mb-4">
						<div class="col-md-1">
							<i class="fas fa-location fa-lg mt-3 d-none d-md-block"></i>
						</div>
						<div class="col-md-10"> 
							<input type="text" name="location" id="autocomplete" class="form-control" placeholder="Select Location/city"/>
							<input type="hidden" name="latitude" id="latitude" class="form-control">
							<input type="hidden" name="longtitude" id="longitude" class="form-control">
						</div>
					</div>

                  {{-- <div class="row mb-4">
                    <div class="col-md-1">
                      <i class="fas fa-location fa-lg mt-3 d-none d-md-block"></i>
                    </div>
                    <div class="col-md-6">
                      <input
                        type="text"
                        name="location"
                        class="form-control"
                        placeholder="Garage Location"
                      />
                    </div>
                    <div class="d-block d-sm-none"><br /></div>
                    <div class="col-md-4">
                      <button type="button" class="btn btn-success btn-md w-100">
                        Set Location
                      </button>
                    </div>
                  </div> --}}

                  <div class="row mb-4">
                    <div class="col-md-1">
                      <i class="fas fa-info-circle fa-lg mt-3 d-none d-md-block"></i>
                    </div>
                    <div class="col-md-10 form-group">
                      <textarea class="form-control" name="bio" id="bio" rows="3" placeholder="Bio"></textarea>
                    </div>
                  </div>

                    <div class="row mb-1">
                        <div class="col-md-1"></div>
                        <div class="col-md-10 text-center text-left">
                        <h5 class=" py-1 bg-secondary text-white rounded">Select Your Vehicle Type</h5>
                        </div>
                    </div>

                    <div class="mb-4 row">
                        <div class="col-md-1"></div>
                        
                        @php
                            $first_part = round(count($vehicle_types) / 2);
                            $second_part = count($vehicle_types) - $first_part;
                        @endphp
                        <div class="col-md-4">
                            @for ($i = 0; $i < $first_part; $i++)
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="{{ $vehicle_types[$i]->id }}" name="vehicle_types[]" id="vehicle_types{{$i}}">
                                    <label class="form-check-label" for="vehicle_types{{$i}}">{{ $vehicle_types[$i]->type }} </label>
                                </div>
                            @endfor
                        </div>

                        <div class="col-md-4">
                            @for ($i = $second_part; $i < count($vehicle_types); $i++)
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="{{ $vehicle_types[$i]->id }}" name="vehicle_types[]" id="vehicle_types{{$i}}">
                                    <label class="form-check-label" for="vehicle_types{{$i}}">{{ $vehicle_types[$i]->type }} </label>
                                </div>
                            @endfor

                        </div>
                    </div>

                    <hr style="width: 85%;">

                    <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                        <button type="submit" class="btn btn-primary btn-md">
                            Register
                        </button>
                    </div>
                </form>
              </div>

            </div>
            <div class="col-md-6">
              <img
                src="{{ asset('assets/img/signup.png') }}"
                style="width: 90%; height: auto"
                class="d-none d-md-block"
                id="signupImage"
                alt="Signup image"
              />
                </div>
            </div>
            </div>
        </div>
        </div>
    </section>

    <script src="https://maps.google.com/maps/api/js?key=AIzaSyDuRQucFhV9dLb9TBAp1yEnJgGCFnytOhQ&libraries=places&callback=initAutocomplete" type="text/javascript"></script>
    
    <script>
        google.maps.event.addDomListener(window, 'load', initialize);
        function initialize() {
            var input = document.getElementById('autocomplete');
            var autocomplete = new google.maps.places.Autocomplete(input);
            autocomplete.addListener('place_changed', function() {
            	var place = autocomplete.getPlace();
                $('#latitude').val(place.geometry['location'].lat());
                $('#longitude').val(place.geometry['location'].lng());
            });
        }
    </script>
  @endsection