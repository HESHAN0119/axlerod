@extends('layouts.app')

@section('content')
    <!-- ########## ^^^ Timeline Section ^^^ ########## -->
    <section id="timeline">
		<div class="mx-md-5">
			<div class="container">
				<div class="row">
					<!-- #####  Filter section ##### -->
					
					<x-posts-filter-section :vehicletypes="$vehicle_types"/>
					<!-- #####  Filter section end ##### -->

					<!--   Post section ##### -->
					<div class="col-md-6" id="post-section">

						<!-- Top head background image section -->
						<div class="imageBack mt-5 mb-2">
							<div class="card">
							<div class="card-body">
								<img src="{{ asset('assets/img/gb1.png') }}" class="w-100" alt="Service Center Image" />
							</div>
							</div>
						</div><!-- Top head background image section end-->

						<!-- Post section button set-->
						<x-post-section-buttons></x-post-section-buttons>
						<!-- Post section button set end-->


						@foreach ($posts as $post)
							<div class="my-2">
								<div class="card roundedBox">
									<div class="container mt-3">

										<div class="d-flex">  <!-- Post section - First Post profile icon and name div combine tag -->
											<div><!-- Profile icon div -->
												<img class="mr-2 rounded-circle userProfImg" src="{{ asset('assets/img/pro.png') }}" alt="profile_name"/>
											</div> <!-- Profile icon div end-->

											<div> <!-- Name and time include tag -->
												<div class="userTopName">
													{{ $post->user->fname.' '.$post->user->lname }} 
													@if ($post->post_type->type == "Feedback")
														<i class="fas fa-circle greenState"></i><br />
													@elseif($post->post_type->type == "Need Help")
														<i class="fas fa-circle redState"></i><br />
													@else
														<i class="fas fa-circle yellowState"></i><br />
													@endif
													<span class="small"> 
														{{ $post->created_at }}
													</span>
												</div>
											</div> <!-- Name and time include tag end -->

											
											<div class="ml-auto"> <!-- Three dots included button -->
												<div class="dropdown">

												<button class="btn btn-sm dotIcon" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
													<i class="fas fa-ellipsis-h" style="vertical-align: top"></i>
												</button>

												<div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton" > <!-- Three dots functionality  -->
													@if ($post->user->id == auth()->user()->id)
														<a class="dropdown-item" href="#" ><i class="fas fa-pen mr-2"></i> Edit Post</a>
														<a class="dropdown-item" href="#" ><i class="fas fa-eye-slash mr-2"></i>Hide Post</a>
														<a class="dropdown-item" href="#" ><i class="fas fa-trash mr-2"></i>Delete Post</a>
													@else
														<a class="dropdown-item" href="#" ><i class="fas fa-pen mr-2"></i> View Post</a>
														<a class="dropdown-item" href="#" ><i class="fas fa-eye-slash mr-2"></i>Hide Post</a>
													@endif
													
												</div> <!-- Three dots functionality end -->
												
												</div>
											</div> <!-- Three dots included button -->
										</div> <!-- Post section - First Post profile icon and name div combine tag end-->

										<div class="mt-4"> <!-- Post Body  -->
											<div style="border-left: 10px solid
													@if ($post->post_type->type == "Feedback")
														lightgreen
													@elseif($post->post_type->type == "Need Help")
														red
													@else
														yellow
													@endif
												">
												
												<span class="ml-2" style="font-size: 30px; ">{{ $post->title }}</span>
												<br>
												<small class="text-muted ml-2">{{ $post->vehicle_type->type }} | {{ $post->city }} | {{ $post->district }}</small>
											</div>
											<br>
											<p>{{ Str::limit($post->problem, 120) }}</p>
										</div> <!-- Post Body end -->

										<!-- Post Bottom Section -->
										<div class="mt-4">
											<div class="text-muted"> <!-- Comment Text -->
												<span class="small">{{ $post->views }} views</span>
												<span class="ml-2 small">{{ count($post->comments) }} comments</span>
											</div> <!-- Comment Text end -->

											<div class="dropdown-divider"></div>

											
											<div class="row text-center mb-2"><!-- view,comment,share section -->
												<div class="col-4">
													<a href="{{ route('post.show', $post->id) }}" class="btn btn-sm"><i class="fas fa-eye"></i> view</a>
												</div>
												<div class="col-4">
													<a href="{{ route('post.show', $post->id) }}" class="btn btn-sm"><i class="far fa-comment-dots"></i> comment</a>
												</div>
												<div class="col-4">
													<a href="postdetails.html" class="btn btn-sm"><i class="fa fa-share"></i> share</a>
												</div>
											</div><!-- view,comment,share section end-->
										</div><!-- Post Bottom Section end-->

									</div>
								</div>
							</div> 
						@endforeach

					</div> 
					<!-- #####  Post section End ##### -->

					<!-- ####  Booking details side menu section #### -->
					<x-bookings-sidenav></x-bookings-sidenav>
					<!-- ####  Booking details side menu section end #### -->
				</div>
			</div>
		</div>
		 
    </section> <!-- ######### ^^^ Timeline Section end ^^^ ######### -->



	<x-needhelp-modal :vehicletypes="$vehicle_types"/>
    <x-feedback-modal :vehicletypes="$vehicle_types"/>
	

@endsection