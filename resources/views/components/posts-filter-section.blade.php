<div class="col-md-3 d-none d-md-block " id="filter-section">
    <div class="card mt-5 position-fixed" style="height: 88vh; width: 17%;">
        <div class="card-body bg-white ">
            <div class="mt-1">

                <!-- filter section - Filter and Reset Button -->
                <div class="row justify-content-between mx-1">
                <div>
                    <h5 class="font-weight-bold text-muted">Filters</h5>
                </div>
                <div class="mt-1">
                    <div class="form-group">
                    <h6 class="text-muted">
                        <a href="{{ route('home') }}" class="text-danger text-decoration-none">Reset All</a>
                    </h6>
                    </div>
                </div>
                </div> <!-- filter section - Filter and Reset Button -->

            </div>
            <!-- filter section - form with selectors -->
            <div>
                <form action="{{ route('filter_posts') }}" method="POST">
                    @csrf
                    <!-- Vehicle Type selector -->
                    <div class="form-group">
                        <label for="inputState"> <h6 class="font-weight-bold text-muted mt-3"> Vehicle Type</h6> </label>
                        <select name="vehicle_type_id" class="form-control">
                            <option value="">Choose...</option>
                            @foreach ($vehicletypes as $vehicle_type)
                                <option value="{{ $vehicle_type->id }}">{{ $vehicle_type->type }}</option>
                            @endforeach
                        </select>
                    </div> <!-- Vehicle Type selector end -->
                    

                    <!-- Province selector -->
                    <div class="form-group">
                        <label for="inputState"> <h6 class="font-weight-bold text-muted mt-3"> City</h6> </label>
                        <input type="text" name="city" id="" class="form-control" placeholder="City">
                    </div> <!-- Province selector end-->

                    <!-- District selector -->
                    <div class="form-group">
                        <label for="inputState"> <h6 class="font-weight-bold text-muted mt-3"> District</h6> </label>
                        <select id="inputState" class="form-control" name="district">
                            <option value="">Choose...</option>
                            <option value="Colombo">Colombo</option>
                            <option value="Gampaha">Gampaha</option>
                            <option value="Kalutara">Kalutara</option>
                        </select>
                    </div> <!-- District selector end-->

                    <!-- Search Button-->
                    <div>
                        <button class="btn btn-md btn-success w-100" type="submit" >Search</button>
                    </div> <!-- Search Button end-->
                </form> <!-- form end -->

                <hr> <!-- divider-->

                <!-- Post Status indication text set -->
                <div id="buttonStatus">
                    <h6 class="font-weight-bold text-muted mt-3">Post Status</h6>
                    <div class="ml-1">
                        <i class="fas fa-circle greenState"></i> Feedback <br />
                        <i class="fas fa-circle redState"></i> Need Help <br />
                        <i class="fas fa-circle yellowState"></i> Mechanic Ads
                    </div>
                </div><!-- Post Status indication text set end -->
            </div><!-- filter section - form with selectors -->
        </div> <!-- card body end -->
    </div> <!-- card end -->
</div> 	


<!-- ********************** Post section mobile view - sidenav ********************** -->
<div id="mySidenav" class="sidenav d-lg-none">
    <button type="button" class="closebtn btn mt-5" onclick="closeNav()">&times;</button>

    <div class="ml-4 mt-4">
        <form action="{{ route('filter_posts') }}" method="POST">
            @csrf
            
            <!-- Vehicle Type selector -->
            <div class="form-group" style="width: 85%;">
                <label for="inputState"> <h6 class="font-weight-bold text-muted mt-3"> Vehicle Type</h6> </label>
                <select name="vehicle_type_id" class="form-control">
                    <option value="">Choose...</option>
                    @foreach ($vehicletypes as $vehicle_type)
                        <option value="{{ $vehicle_type->id }}">{{ $vehicle_type->type }}</option>
                    @endforeach
                </select>
            </div> <!-- Vehicle Type selector end -->
            
            <!-- Province selector -->
            <div class="form-group" style="width: 85%;">
                <label for="inputState"> <h6 class="font-weight-bold text-muted mt-3"> City</h6> </label>
                <input type="text" name="city" id="" class="form-control" placeholder="City">
            </div> <!-- Province selector end-->

            <!-- District selector -->
            <div class="form-group" style="width: 85%;">
                <label for="inputState"> <h6 class="font-weight-bold text-muted mt-3"> District</h6> </label>
                <select id="inputState" class="form-control" name="district">
                    <option selected>Choose...</option>
                    <option value="Colombo">Colombo</option>
                    <option value="Gampaha">Gampaha</option>
                    <option value="Kalutara">Kalutara</option>
                </select>
            </div> <!-- District selector end-->
            <!-- Search Button-->
            <div>
                <button class="btn btn-md btn-success w-100" type="submit" >Search</button>
            </div> <!-- Search Button end-->
        </form> <!-- form end -->
    </div>
</div> <!-- ********************** Post section mobile view - sidenav end ********************** -->
