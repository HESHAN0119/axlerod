@extends('layouts.app')

@section('content')
    <!-- SHOWCASE -->
    <section id="showcase" >

        <div class="context col text-center text-white" style="z-index: 101;">
          <h1>Essence of perfection</h1>
          <p class="lead">A clean basement, garage and attic are signs of an empty life</p>
          <a href="#" class="btn btn-lg" style="background-color: #fff;color: #2f98ef;"><b><i class="fas fa-engine-warning mr-2"></i> Emergency</b></a>
        </div>
  
        <div class="area">
          <div class="car mt-5">  
            <div class="car__top"></div>  
            <div class="car__body">  
              <div class="car__bulb"></div>  
              <div class="car__bulb car__bulb--back"></div>  
              <div class="car__center"></div>  
            </div>  
            <div class="car__wheels">  
              <div class="car__wheel car__wheel--1">  
                <div class="wheel__circle"></div>  
                <div class="wheel__rect wheel__rect--1"></div>  
                <div class="wheel__rect wheel__rect--2"></div>  
                <div class="wheel__rect wheel__rect--3"></div>  
                <div class="wheel__rect wheel__rect--4"></div>  
                <div class="wheel__rect wheel__rect--5"></div>  
                <div class="wheel__rect wheel__rect--6"></div>  
              </div>  
              <div class="car__wheel car__wheel--2">  
                <div class="wheel__circle"></div>  
                <div class="wheel__rect wheel__rect--1"></div>  
                <div class="wheel__rect wheel__rect--2"></div>  
                <div class="wheel__rect wheel__rect--3"></div>  
                <div class="wheel__rect wheel__rect--4"></div>  
                <div class="wheel__rect wheel__rect--5"></div>  
                <div class="wheel__rect wheel__rect--6"></div>  
              </div>  
            </div>  
          </div>
  
          <!-- <div class="cloud" style="--delay:1s;--top:10vmin"></div>  
          <div class="cloud" style="--delay:3s;--top:20vmin"></div>  
          <div class="cloud" style="--delay:7s;--top:10vmin"></div> -->
  
        </div>
  
      </section>
  
      <!-- ### BOXES ###-->
      <section id="boxes" class="py-5" style="background-color: #f3f6f9;"">
        <div class="container">
        <div class="row">
  
            <div class="col-md-3">
              <div class="card text-center mb-resp mb-2" style="border:2px #2f98ef solid;">
                  <div class="card-body">
                    <span class="text-dark mt-2"> How to find a <h2 class="text" style="color:#2f98ef;"> Garage</h2></span>
                    <a href="read.html" class="btn btn-sm text-white mt-3" style="background-color: #2f98ef;">Guideline</a>
                </div>
              </div>
              </div>
  
            <div class="col-md-3">
            <div class="card text-center mb-resp mb-2" style="border:2px #2f98ef solid;">
                <div class="card-body">
                    <span class="text-dark mt-2"> How to Register as a <h2 class="text" style="color:#2f98ef;"> User</h2></span>
                    <a href="read.html" class="btn btn-sm text-white mt-3" style="background-color: #2f98ef;">Guideline</a>
                </div>
            </div>
            </div>
  
            <div class="col-md-3">
            <div class="card text-center mb-resp mb-2" style="border:2px #2f98ef solid;">
                <div class="card-body">
                  <span class="text-dark mt-2"> How to Register as a <h2 class="text" style="color:#2f98ef;"> Mechanic</h2></span>
                  <a href="read.html" class="btn btn-sm text-white mt-3" style="background-color: #2f98ef;">Guideline</a>
              </div>
            </div>
            </div>
  
            
  
            <div class="col-md-3">
            <div class="card text-center mb-resp" style="border:2px #2f98ef solid;">
                <div class="card-body">
                  <span class="text-dark mt-2"> How to make a <h2 class="text" style="color:#2f98ef;"> Post</h2></span>
                  <a href="read.html" class="btn btn-sm text-white mt-3" style="background-color: #2f98ef;">Guideline</a>
              </div>  
            </div>
            </div>
        </div>
        </div>
    </section>
  
      <!-- ### WELCOME Head Section ### -->
      <section id="welcome-section" class="text-white" style="background-color: #2f98ef;">
        <div class="container">
            <div class="row">
                <div class="col text-center py-5 " >
                    <h1 class="display-4">Welcome to AxleRod</h1>
                    <p class="lead">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fuga alias totam quisquam, voluptatum quo blanditiis?   <br>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate eius earum aliquid, quas inventore quibusdam. Quod earum, <br>Lorem ipsum dolor sit amet consectetur.</p>
  
                </div>
            </div>
        </div>
    </section>
  
  
    <!-- ### Explore Section ### -->
    <section id="explore-section" class="text-muted py-4" style="background-color: #f3f6f9;">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center">
                    <img src="{{ asset('assets/img/hg2.jpg') }}" alt="" class="img-fluid mt-2 mb-3" style="max-width: 80%;">
                </div>
                <div class="col-md-6">
                     <h3>Do You Need a Repair?</h3>
                     <p>Service Technicians fixes vehicles and replaces their parts for customers. Their duties include inspecting the vehicle’s mechanical components and its engine, diagnosing problems. </p>
                     <div class="d-flex">
                         <div class="p-4 align-self-start">
                             <i class="fas fa-check fa-2x"></i>
                         </div>
                         <div class="p-4 align-self-end">
                          Using manual and computerized diagnostic methods to identify potential problems in a vehicle
                         </div>
                     </div>
                     <div class="d-flex">
                        <div class="p-4 align-self-start">
                            <i class="fas fa-check fa-2x"></i>
                        </div>
                        <div class="p-4 align-self-end">
                          Planning work and testing procedures using charts, experience and other organizational methods
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
  
    <section id="explore-section" class="text-muted py-5" style="background-color: #f3f6f9;">
        <div class="container">
            <div class="row">
                
                <div class="col-md-6 d-sm-none text-center">
                    <img src="{{ asset('assets/img/hg1.jpg') }}" alt="" class="img-fluid mb-3" >
                </div>
  
                <div class="col-md-6">
                     <h3>Do You Run a Garage?</h3>
                     <p>Whether you run a garage or you’re a mobile mechanic, get started today and gain instant access to 1000s of potential customers</p>
                     <div class="d-flex">
                         <div class="p-4 align-self-start">
                             <i class="fas fa-check fa-2x"></i>
                         </div>
                         <div class="p-4 align-self-end">
                          We connect you to more clients around the Sri Lanka with garages every day. 
                         </div>
                     </div>
                     <div class="d-flex">
                        <div class="p-4 align-self-start">
                            <i class="fas fa-check fa-2x"></i>
                        </div>
                        <div class="p-4 align-self-end">
                            You can reach more engament through the website and able earn more for a day.
                        </div>
                    </div>
                </div>
                <div class="col-md-6 text-center d-none d-sm-block">
                    <img src="img/hg1.jpg" alt="" class="w-75 img-fluid mb-3" >
                </div>
  
            </div>
        </div>
    </section>
  
    <!--GEAR ICON SECTION  -->
    <section id="gear-icons" class="py-5 ">
      <div class="container">
        <div class="row">
          <div class="col-md-4 mb-2 text-center">
              <i class="fas fa-tools fa-3x mb-2"></i>
            <h3>Renovate</h3>
            <p>Make your vehicle with brighter and prettier condition</p>
          </div>
          <div class="col-md-4 mb-2 text-center">
            <i class="fas fa-clock fa-3x mb-2"></i>
            <h3>Save Time</h3>
            <p>Find nearest garage around you with minimal effort</p>
          </div>
          <div class="col-md-4 mb-2 text-center">
              <i class="fa fa-toolbox fa-3x mb-2"></i>
            <h3>Upkeep</h3>
            <p>Formal way of referring to the condition of your vehicle</p>
          </div>
        </div>
      </div>
    </section>
@endsection