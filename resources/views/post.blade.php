@extends('layouts.app')

@section('content')
    <!-- ######################################## ^^^ Timeline Section ^^^ ######################################## -->
    <section id="timeline">
        <div class="mx-md-5">
          <div class="container">
            <div class="row">
  
              <!-- ###################################  Filter section ################################### -->
              <div class="col-md-3 d-none d-md-block" id="filter-section">
                <div class="card mt-5 position-fixed" style="height: 88vh; width: 17%;">
                  <div class="card-body bg-white">
                    
                    <div class="text-center"> <!-- Profile icon --> 
                      <img class="mr-3 rounded-circle w-50 " src="{{ asset('assets/img/pro.png') }}" alt="profile_name" />
                      <h5 class="text-muted mt-2">{{ $post->user->fname.' '.$post->user->lname }}</h5>
                      <p class="text-muted">since | 2022 </p>
                    </div><!-- Profile icon end-->
                    
                  </div> <!-- card body end -->
                </div> <!-- card end -->
              </div> <!-- ###################################  Filter section end ################################### -->
  
  
  
              <!-- ###################################  Post section ################################### -->
              <div class="col-md-6" id="post-section">
  
                <!-- Top head background image section -->
                <div class="imageBack mt-5 mb-2">
                  <div class="card">
                    <div class="card-body">
                      <img src="{{ asset('assets/img/gb1.png') }}" class="w-100" alt="Service Center Image" />
                    </div>
                  </div>
                </div><!-- Top head background image section end-->
  
                <!-- ++++++++++++++++++++++++++++ Post section - detail Post ++++++++++++++++++++++++++++ -->
                <div class="my-2">
                  <div class="card roundedBox">
                    <div class="container mt-3">
  
                      <div class="d-flex">  <!-- Post section - detail Post profile icon and name div combine tag -->
                        <div><!-- Profile icon div -->
                          <img class="mr-2 rounded-circle userProfImg" src="{{ asset('assets/img/pro.png') }}" alt="profile_name"/>
                        </div> <!-- Profile icon div end-->
  
                        <div> <!-- Name and time include tag -->
                          <div class="userTopName">
                            {{ $post->user->fname.' '.$post->user->lname }} <i class="fas fa-circle greenState"></i><br />
                            5h ago
                          </div>
                        </div> <!-- Name and time include tag end -->
  
                        
                        <div class="ml-auto"> <!-- Three dots included button -->
                          <div class="dropdown">
  
                            <button class="btn btn-sm dotIcon" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <i class="fas fa-ellipsis-h" style="vertical-align: top"></i>
                            </button>
  
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton" > <!-- Three dots functionality  -->
                              <a class="dropdown-item" href="#" ><i class="fas fa-pen mr-2"></i> Edit Post</a>
                              <a class="dropdown-item" href="#" ><i class="fas fa-eye-slash mr-2"></i>Hide Post</a>
                              <a class="dropdown-item" href="#" ><i class="fas fa-trash mr-2"></i>Delete Post</a>
                            </div> <!-- Three dots functionality end -->
                          
                          </div>
                        </div> <!-- Three dots included button -->
                      </div> <!-- Post section - detail Post profile icon and name div combine tag end-->

                      <div class="mt-4"> <!-- Post Body  -->
											<div style="border-left: 10px solid lightgreen">
												<span class="ml-2" style="font-size: 30px; ">{{ $post->title }}</span>
												<br>
												<small class="text-muted ml-2">Bike | Colombo | Kaduwela</small>
                      </div>
                      <a href="" class="btn btn-md btn-success mt-2 mb-1">
											<i class="fas fa-tty mr-2 "></i> <small class="text-white">Garager Name | 0123456789</small>
											</a>
											<p>{{ Str::limit($post->problem, 150) }}</p>
										</div> <!-- Post Body end -->
  
  
                      	<div class="card mt-2 detailsBack"> <!-- Post Detils Card Section -->
							<!-- Problem,Location,Feedback Details table -->
							<table class="table table-borderless text-justify">
								@if ($post->post_type->type == "Feedback")
									<tr>
										<td>Problem</td>
										<td><i class="fas fa-chevron-circle-right"></i></td>
										<td>{{ $post->problem }}</td>
									</tr>
									<tr>
										<td>Feedback</td>
										<td><i class="fas fa-chevron-circle-right"></i></td>
										<td>{{ $post->feedback }}</td>
									</tr>
								@elseif($post->post_type->type == "Need Help")
									<tr>
										<td>Problem</td>
										<td><i class="fas fa-chevron-circle-right"></i></td>
										<td>{{ $post->problem }}</td>
									</tr>
								@else
									yellow
								@endif
                  	<div class="card roundedBox">
						<div class="container mt-3">
	
						<div class="d-flex">  <!-- Post section - detail Post profile icon and name div combine tag -->
							<div><!-- Profile icon div -->
							<img class="mr-2 rounded-circle userProfImg" src="{{ asset('assets/img/pro.png') }}" alt="profile_name"/>
							</div> <!-- Profile icon div end-->
	
							<div> <!-- Name and time include tag -->
							<div class="userTopName">
								{{ $post->user->fname.' '.$post->user->lname }} <i class="fas fa-circle greenState"></i><br />
								5h ago
							</div>
							</div> <!-- Name and time include tag end -->
	
							
							<div class="ml-auto"> <!-- Three dots included button -->
							<div class="dropdown">
	
								<button class="btn btn-sm dotIcon" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="fas fa-ellipsis-h" style="vertical-align: top"></i>
								</button>
	
								<div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton" > <!-- Three dots functionality  -->
								<a class="dropdown-item" href="#" ><i class="fas fa-pen mr-2"></i> Edit Post</a>
								<a class="dropdown-item" href="#" ><i class="fas fa-eye-slash mr-2"></i>Hide Post</a>
								<a class="dropdown-item" href="#" ><i class="fas fa-trash mr-2"></i>Delete Post</a>
								</div> <!-- Three dots functionality end -->
							
							</div>
							</div> <!-- Three dots included button -->
						</div> <!-- Post section - detail Post profile icon and name div combine tag end-->

						<div class="mt-4"> <!-- Post Body  -->
							<div style="border-left: 10px solid 
                @if ($post->post_type->type == "Feedback")
                  lightgreen
                @elseif($post->post_type->type == "Need Help")
                  red
                @else
                  yellow
                @endif">
								<span class="ml-2" style="font-size: 30px; ">{{ $post->title }}</span>
								<br>
								<small class="text-muted ml-2">{{ $post->vehicle_type->type }} | {{ $post->city }} | {{ $post->district }}</small>
							</div>
              @if ($post->post_type->type == "Feedback")
                <a href="" class="btn btn-sm btn-success mt-2 mb-1">
                  <i class="fas fa-tty mr-2 "></i> <small class="text-white">Garager Name | 0123456789</small>
                </a>
              @endif
						</div> <!-- Post Body end -->
	
	
							<div class="card mt-2 detailsBack"> <!-- Post Detils Card Section -->
								<!-- Problem,Location,Feedback Details table -->
								<table class="table table-borderless text-justify">
									@if ($post->post_type->type == "Feedback")
										<tr>
											<td>Problem</td>
											<td><i class="fas fa-chevron-circle-right"></i></td>
											<td>{{ $post->problem }}</td>
										</tr>
										<tr>
											<td>Feedback</td>
											<td><i class="fas fa-chevron-circle-right"></i></td>
											<td>{{ $post->feedback }}</td>
										</tr>
									@elseif($post->post_type->type == "Need Help")
										<tr>
											<td>Problem</td>
											<td><i class="fas fa-chevron-circle-right"></i></td>
											<td>{{ $post->problem }}</td>
										</tr>
									@else
										yellow
									@endif
								
								</table>
							</div> <!-- Post Detils Card Section end -->
	
							<div class="text-center"><!-- Feedback images -->
								<img src="{{ asset('assets/img/service1.png') }}" alt="service1 image"  class="my-2" style="width: 99%; height: auto"/>
							</div><!-- Feedback images end-->
	
							<!-- User Comment Section -->
							<div class="mt-4">
	
								<!-- User Add comment Section -->
								<div class="media my-3">
									<img class="mr-3 rounded-circle userProfImg" src="{{ asset('assets/img/pro.png') }}" alt="profile_name" />
									<div class="media-body"> <!-- User add comment section - Input field,Send and cancel button -->
										<form action="{{ route('comment.store') }}" method="POST">
											@csrf
											<input type="hidden" name="post_id" value="{{ $post->id }}">
											<textarea class="form-control border-dark addCommentInput" name="comment" placeholder="Your Comment ..."  cols="30" rows="3"></textarea>
											<button class="btn btn-sm btn-primary addCommentButton" type="submit" > Send </button>
											<button class="btn btn-sm btn-danger addCommentButton" type="button" > Cancel </button>
										</form>
									</div> <!-- User add comment section - Input field,Send and cancel button end -->
								</div> <!-- User Add comment Section end -->
		
								<!-- USer comment sample 1 -->
								@foreach ($post->comments as $comment)
									<div class="media my-2">
										<img class="mr-3 rounded-circle userImageSize" src="{{ asset('assets/img/pro1.jpg') }}" alt="profile_name" />
										<div class="media-body">
											<span class="mt-0">{{ $comment->user->fname.' '.$comment->user->lname }}</span>
											<p class="text-justify" style="line-height: 1.2rem">{{ $comment->comment }}</p>
										</div>
									</div><!-- USer comment sample 1 - end -->
								@endforeach
	
							</div> <!-- User Comment Section - end -->
						</div>
                  	</div>
                </div> <!-- ++++++++++++++++++++++++++++ Post section - detail Post end ++++++++++++++++++++++++++++ -->
  

                <!-- ++++++++++++++++++++++++++++ Post section - Sixth Post ++++++++++++++++++++++++++++ -->
                {{-- <div class="my-2">
                  <div class="card roundedBox">
                    <div class="container mt-2">
  
                      <div class="d-flex">  <!-- Post section - Sixth Post profile icon and name div combine tag -->
                        <div><!-- Profile icon div -->
                          <img class="mr-2 rounded-circle userProfImg" src="{{ asset('assets/img/pro.png') }}" alt="profile_name"/>
                        </div> <!-- Profile icon div end-->
  
                        <div> <!-- Name and time include tag -->
                          <div class="userTopName">
                            Sachindu Malshan <i class="fas fa-circle yellowState"></i><br />
                            5h ago
                          </div>
                        </div> <!-- Name and time include tag end -->
  
                        
                        <div class="ml-auto"> <!-- Three dots included button -->
                          <div class="dropdown">
  
                            <button class="btn btn-sm dotIcon" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <i class="fas fa-ellipsis-h" style="vertical-align: top"></i>
                            </button>
  
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton" > <!-- Three dots functionality  -->
                              <a class="dropdown-item" href="#" ><i class="fas fa-pen mr-2"></i> Edit Post</a>
                              <a class="dropdown-item" href="#" ><i class="fas fa-eye-slash mr-2"></i>Hide Post</a>
                              <a class="dropdown-item" href="#" ><i class="fas fa-trash mr-2"></i>Delete Post</a>
                            </div> <!-- Three dots functionality end -->
                          
                          </div>
                        </div> <!-- Three dots included button -->
                      </div> <!-- Post section - Sixth Post profile icon and name div combine tag end-->
  
                      <div class="mt-4"> <!-- Post Body  -->
                        <h2 style="border-left: 10px solid yellow">
                          <span class="ml-2">Overheating</span>
                        </h2>
                      </div> <!-- Post Body end -->
  
  
                      <div class="card roundedBox mt-2 detailsBack"> <!-- Post Detils Card Section -->
                        <!-- Problem,Location,Feedback Details table -->
                        <table class="table table-borderless text-justify">
                          <tr>
                            <td>Description</td>
                            <td><i class="fas fa-chevron-circle-right"></i></td>
                            <td>
                              Lorem ipsum dolor sit, amet consectetur adipisicing
                              elit. Laudantium saepe modi voluptatibus quidem hic
                              tempora repudiandae, fugit magni! Iste, maxime.
                            </td>
                          </tr>
                        </table>
                      </div> <!-- Post Detils Card Section end -->
  
                      <div class="text-center"><!-- Feedback images -->
                        <img src="{{ asset('assets/img/service1.png') }}" alt="service1 image"  class="my-2" style="width: 99%; height: auto"/>
                      </div><!-- Feedback images end-->
  
                      <!-- Post Bottom Section -->
                      <div class="mt-4">
                        <div class="dropdown-divider"></div>
                        <div class="row text-center mb-2"><!-- view,comment,share section -->
                          <div class="col-4">
                            <a href="" class="btn btn-sm"><i class="fas fa-eye"></i> view</a>
                          </div>
                          <div class="col-4">
                            <a href="" class="btn btn-sm"><i class="far fa-comment-dots"></i> comment</a>
                          </div>
                          <div class="col-4">
                            <a href="" class="btn btn-sm"><i class="fa fa-share"></i> share</a>
                          </div>
                        </div><!-- view,comment,share section end-->
                      </div><!-- Post Bottom Section end-->
  
                      <!-- User Comment Section -->
                      <div class="mt-4">
  
                        <!-- User Add comment Section -->
                        <div class="media my-3">
                          <img class="mr-3 rounded-circle userProfImg" src="{{ asset('assets/img/pro.png') }}" alt="profile_name" />
                          <div class="media-body"> <!-- User add comment section - Input field,Send and cancel button -->
                            <form action="">
                              <input class="form-control border-dark addCommentInput" type="text" name="comment" placeholder="Your Comment ..." />
                              <button class="btn btn-sm btn-primary addCommentButton" type="button" > Send </button>
                              <button class="btn btn-sm btn-danger addCommentButton" type="button" > Cancel </button>
                            </form>
                          </div> <!-- User add comment section - Input field,Send and cancel button end -->
                        </div> <!-- User Add comment Section end -->
  
                        <!-- USer comment sample 1 -->
                        <div class="media my-2">
                          <img class="mr-3 rounded-circle userImageSize" src="{{ asset('assets/img/pro1.jpg') }}" alt="profile_name" />
                          <div class="media-body">
                            <span class="mt-0">Sachindu Malshan</span>
                            <p class="text-justify" style="line-height: 1.2rem">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio.</p>
                          </div>
                        </div><!-- USer comment sample 1 - end -->
  
                        <!-- USer comment sample 2 -->
                        <div class="media my-2">
                          <img class="mr-3 rounded-circle userImageSize" src="{{ asset('assets/img/pro2.jpg') }}" alt="profile_name" />
                          <div class="media-body">
                            <span class="mt-0">Sachindu Malshan</span>
                            <p class="text-justify" style="line-height: 1.2rem">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio.</p>
                          </div>
                        </div><!-- USer comment sample 2 - end -->
  
                      </div> <!-- User Comment Section - end -->
                    </div>
                  </div>
                </div> 
				<!-- ++++++++++++++++++++++++++++ Post section - Sixth Post end ++++++++++++++++++++++++++++ --> --}}
  
              </div> <!-- ###################################  Post section End ################################### -->
  
  
  
              <!-- ####  Booking details side menu section #### -->
              <x-bookings-sidenav></x-bookings-sidenav>
              <!-- ####  Booking details side menu section end #### -->  
  
              
            </div>
          </div>
        </div>
    </section> 
    {{-- <x-needhelp-modal></x-needhelp-modal>
    <x-feedback-modal></x-feedback-modal>   --}}
    <!-- ######################################## ^^^ Timeline Section end ^^^ ######################################## -->
@endsection