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
                    <a href="" class="text-danger text-decoration-none">Reset All</a>
                </h6>
                </div>
            </div>
            </div> <!-- filter section - Filter and Reset Button -->

        </div>
        <!-- filter section - form with selectors -->
        <div>
            <form action=""> <!-- form start -->
            <!-- Vehicle Type selector -->
            <div class="form-group">
                <label for="inputState">
                <h6 class="font-weight-bold text-muted mt-3"> Vehicle Type</h6>
                </label>
                <select id="inputState" class="form-control">
                <option selected>Choose...</option>
                <option>Car</option>
                <option>Bus</option>
                <option>Van</option>
                <option>Bicycle</option>
                </select>
            </div> <!-- Vehicle Type selector end -->
            
            <!-- District selector -->
            <div class="form-group">
                <label for="inputDistrict">
                <h6 class="font-weight-bold text-muted mt-3"> District</h6>
                </label>
                <select id="inputDistrict" class="form-control">
                <option selected>Choose...</option>
                <option>Colombo</option>
                <option>Gampaha</option>
                <option>Kalutara</option>
                </select>
            </div> <!-- District selector end-->

            <!-- City selector -->
            <div class="form-group">
                <label for="inputCity">
                <h6 class="font-weight-bold text-muted mt-3"> City</h6>
                </label>
                <select id="inputCity" class="form-control">
                <option selected>Choose...</option>
                <option>Kaduwela</option>
                <option>Malabe</option>
                <option>Hanwella</option>
                <option>Angoda</option>
                </select>
            </div> <!-- Province selector end-->

            <!-- Search Button-->
            <div>
                <button class="btn btn-md btn-success w-100" type="button" >Search</button>
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
    <form action=""> <!-- form start -->
        
        <!-- Vehicle Type selector -->
        <div class="form-group" style="width: 85%;">
        <label for="inputState">
            <h6 class="font-weight-bold text-muted mt-3"> Vehicle Type</h6>
        </label>
        <select id="inputState" class="form-control">
            <option selected>Choose...</option>
            <option>Car</option>
            <option>Bus</option>
            <option>Van</option>
            <option>Bicycle</option>
        </select>
        </div> <!-- Vehicle Type selector end -->
        
        <!-- Province selector -->
        <div class="form-group" style="width: 85%;">
        <label for="inputState">
            <h6 class="font-weight-bold text-muted mt-3"> Province</h6>
        </label>
        <select id="inputState" class="form-control">
            <option selected>Choose...</option>
            <option>Western Province</option>
            <option>Eastern Province</option>
            <option>North Province</option>
            <option>South Province</option>
        </select>
        </div> <!-- Province selector end-->

        <!-- District selector -->
        <div class="form-group" style="width: 85%;">
        <label for="inputState">
            <h6 class="font-weight-bold text-muted mt-3"> District</h6>
        </label>
        <select id="inputState" class="form-control">
            <option selected>Choose...</option>
            <option>Colombo</option>
            <option>Gampaha</option>
            <option>Kalutara</option>
        </select>
        </div> <!-- District selector end-->

        <!-- City selector -->
        <div class="form-group" style="width: 85%;">
        <label for="inputState">
            <h6 class="font-weight-bold text-muted mt-3"> City</h6>
        </label>
        <select id="inputState" class="form-control">
            <option selected>Choose...</option>
            <option>Kaduwela</option>
            <option>Hanwella</option>
            <option>Malabe</option>
            <option>Angoda</option>
        </select>
        </div> <!-- City selector end-->

    </form> <!-- form end -->
    </div>

    <!-- Search and Reset Button -->
    <div class="text-right mr-2">
    <button class="btn btn-md btn-danger mr-1" type="reset">
        Reset All
    </button>
    <button class="btn btn-md btn-success mr-5" type="button">
        Search
    </button>
    </div><!-- Search and Reset Button end -->
</div> <!-- ********************** Post section mobile view - sidenav end ********************** -->
