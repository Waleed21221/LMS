@include('partials.head')
@include('partials.navbar')
@include('partials.asidebar')
@section('content')
<!---------------------------------- MID CONTENT - OPEN --------------------------------->

<section id="mid-content-area-parent">
	

	<div class="announcement-bar-parent">
		<div class="announcement-bar-close-btn">
			<label>x</label>
		</div>
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-2 col-md-3 announcement-bar-img-col">
					<img src="images/dashboard/announcemen-icon.png" class="img-fluid" />
				</div>
				<div class="col-lg-9 col-md-9 announcement-bar-text-col">
					<h4>Admin Dashboard</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
				</div>
			</div>
		</div>
	</div>

	<div class="mid-area-sections-headings mt-4">
		<h5>RECENT CLASS</h5>
		<div class="line"></div>
	</div>

	<div class="mid-area-box-parent">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-8 col-12 recent-class-img-heading-col">

					<div class="container-fluid">
						<div class="row">
							<div class="col-lg-5 col-12 recent-class-img-col">
								<div class="recent-class-image">
									<p>ADV GEO <br/> TRI - 402</p>
								</div>
							</div>
							<div class="col-lg-7 col-12 recent-class-heading-col">
								<div class="recent-class-sub-heading">
									<h4>ADVANCE GEOMETRY <br/> & TRIGONOMETRY</h4>
									<p>INSTRUCTOR : GERALD GREEN</p>
								</div>
								<div class="recent-class-progress-bar-parent">
									<p>WEEK 6 - IN-PROGRESS</p>
									<div class="progress">
								  		<div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
									<label>60% Completed</label>
								</div>
							</div>
						</div>
					</div>

				</div>

				<div class="col-lg-4 col-12 recent-class-tags-btn-col">
					<div class="recent-class-tags-parent">
						<ul>
							<li><a href="#" class="tag-1-bg">MATHS</a></li>
							<li><a href="#" class="tag-2-bg">ADVANCE</a></li>
							<li><a href="#" class="tag-3-bg">GEOMETRIC</a></li>
						</ul>
					</div>
					<div class="resume-class-btn">
						<button type="submit">RESUME CLASS</button>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="mid-area-sections-headings mt-4">
		<h5>RECENT POST</h5>
		<div class="line"></div>
	</div>

	<div class="mid-area-box-parent">
		<div class="mid-area-boxes-header">
			<div class="container-fluid">
				<div class="row mid-area-boxes-header-row">
					<div class="col-lg-4 col-md-4 col-sm-4 col-12">
						<div class="person-img-name">
							<img src="images/dashboard/recent-post-person-img.png" class="img-fluid">
							<h5>JENNY MAY</h5>
							<p>23 MARCH 2020</p>
						</div>
					</div>
					<div class="col-lg-5 col-md-5 col-sm-5 col-12 m-auto">
						<div class="testscore-review">
							<h5>TEST SCORE REVIEW</h5>
						</div>
					</div>
					<div class="col-lg-3 col-md-3 col-sm-3 col-12 m-auto">
						<div class="person-post">
							<img src="images/dashboard/recent-post-instructor-icon.png" class="img-fluid" />
							<label>INSTRUCTOR</label>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="container">
			<div class="recent-post-header-text">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo con</p>
			</div>
		</div>

		<div class="container">
			<div class="social-actions-parent">
				<div class="row">
					<div class="col-lg-4 col-12 social-actions-btns-col">
						<div class="social-btns-parent">
							<button type="button" class="thumbs-up-btn mr-1"><i class="far fa-thumbs-up"></i><label>THUMBS UP</label></button>
							<button type="button" class="follow-btn"><i class="fas fa-plus"></i><label>FOLLOW</label></button>
						</div>
					</div>
					<div class="col-lg-4 col-12 social-actions-search-col">
						<div class="social-commentbar-parent">
							<form>
								<input type="text" name="" placeholder="Share your thoughts..." />
								<button type="submit">COMMENT</button>
							</form>
						</div>
					</div>
					<div class="col-lg-4 col-12 social-actions-comments-count-col">
						<div class="social-comments-count-parent">
							<p>12 comments</p>
							<a href="#">view all comments</a>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="recent-post-comments-body">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-3 col-md-3 col-sm-3 col-12 m-auto">
						<div class="commentor-info">
							<img src="images/dashboard/commentor-img.png" class="img-fluid" />
							<p>23 MARCH 2020</p>
						</div>
					</div>
					<div class="col-lg-9 col-md-9 col-sm-9 col-12 m-auto">
						<div class="commentor-text">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="recent-post-comments-body">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-3 col-md-3 col-sm-3 col-12 m-auto">
						<div class="commentor-info">
							<img src="images/dashboard/commentor-img.png" class="img-fluid" />
							<p>23 MARCH 2020</p>
						</div>
					</div>
					<div class="col-lg-9 col-md-9 col-sm-9 col-12 m-auto">
						<div class="commentor-text">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="mid-area-box-parent mt-4">
		<div class="mid-area-boxes-header">
			<div class="container-fluid">
				<div class="row mid-area-boxes-header-row">
					<div class="col-lg-4 col-md-4 col-sm-4 col-12">
						<div class="person-img-name">
							<img src="images/dashboard/recent-post-person-img.png" class="img-fluid">
							<h5>JOHNATHAN RICK</h5>
							<p>23 MARCH 2020</p>
						</div>
					</div>
					<div class="col-lg-5 col-md-5 col-sm-5 col-12 m-auto">
						<div class="testscore-review">
							<h5>VIDEO TUTORIAL ON USING COLLECTIVES LMS NEW FEATURES</h5>
						</div>
					</div>
					<div class="col-lg-3 col-md-3 col-sm-3 col-12 m-auto">
						<div class="person-post">
							<img src="images/dashboard/recent-post-instructor-icon.png" class="img-fluid" />
							<label>INSTRUCTOR</label>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="video-tutorial-body">
				<video controls>
				  <source src="video/video-tutorial.mp4" type="video/mp4">
				  Your browser does not support the video tag.
				</video>
			</div>
		</div>

		<div class="container">
			<div class="social-actions-parent mt-4">
				<div class="row">
					<div class="col-lg-4 col-12 social-actions-btns-col">
						<div class="social-btns-parent">
							<button type="button" class="thumbs-up-btn mr-1"><i class="far fa-thumbs-up"></i></i><label>THUMBS UP</label></button>
							<button type="button" class="follow-btn"><i class="fas fa-plus"></i></i><label>FOLLOW</label></button>
						</div>
					</div>
					<div class="col-lg-4 col-12 social-actions-search-col">
						<div class="social-commentbar-parent">
							<form>
								<input type="text" name="" placeholder="Share your thoughts..." />
								<button type="submit">COMMENT</button>
							</form>
						</div>
					</div>
					<div class="col-lg-4 col-12 social-actions-comments-count-col">
						<div class="social-comments-count-parent">
							<p>12 comments</p>
							<a href="#">view all comments</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="mid-area-box-parent mt-4">
		<div class="mid-area-boxes-header">
			<div class="container-fluid">
				<div class="row mid-area-boxes-header-row">
					<div class="col-lg-4 col-md-4 col-sm-4 col-12">
						<div class="person-img-name">
							<img src="images/dashboard/recent-post-person-img.png" class="img-fluid">
							<h5>JOHNATHAN RICK</h5>
							<p>23 MARCH 2020</p>
						</div>
					</div>
					<div class="col-lg-5 col-md-5 col-sm-5 col-12 m-auto">
						<div class="testscore-review">
							<h5>CS 203 - WEEK 04 CLASS WORK DISCUSSION</h5>
						</div>
					</div>
					<div class="col-lg-3 col-md-3 col-sm-3 col-12 m-auto">
						<div class="person-post">
							<img src="images/dashboard/recent-post-instructor-icon.png" class="img-fluid" />
							<label>INSTRUCTOR</label>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="courses-should-add-body">
			<div class="progress-bar-parent mt-4">
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-11 col-11 courses-should-add-progress-bar-col">
							<label class="m-0">ADVANCE ROBOTICS</label>
							<div class="progress mt-1">
						  		<div class="progress-bar" role="progressbar" style="width: 40%; background-color: #00b986;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
						</div>
						<div class="col-lg-1 col-md-1 col-sm-1 col-1">
							<h5 class="green-progress">40%</h5>
						</div>
					</div>
				</div>
			</div>

			<div class="progress-bar-parent mt-4">
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-11 col-11 courses-should-add-progress-bar-col">
							<label class="m-0">MACHINE LEARNING</label>
							<div class="progress mt-1">
						  		<div class="progress-bar" role="progressbar" style="width: 10%; background-color: #0cbbe6;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
						</div>
						<div class="col-lg-1 col-md-1 col-sm-1 col-1">
							<h5 class="blue-progress">10%</h5>
						</div>
					</div>
				</div>
			</div>

			<div class="progress-bar-parent mt-4">
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-11 col-11 courses-should-add-progress-bar-col">
							<label class="m-0">BIG DATA</label>
							<div class="progress mt-1">
						  		<div class="progress-bar" role="progressbar" style="width: 30%; background-color: #f0b888;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
						</div>
						<div class="col-lg-1 col-md-1 col-sm-1 col-1">
							<h5 class="orange-progress">30%</h5>
						</div>
					</div>
				</div>
			</div>

			<div class="progress-bar-parent mt-4">
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-11 col-11 courses-should-add-progress-bar-col">
							<label class="m-0">AI BASIC PROGRAMMING</label>
							<div class="progress mt-1">
						  		<div class="progress-bar" role="progressbar" style="width: 20%; background-color: #99cdcd;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
						</div>
						<div class="col-lg-1 col-md-1 col-sm-1 col-1">
							<h5 class="skyblue-progress">20%</h5>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="social-actions-parent mt-4">
				<div class="row">
					<div class="col-lg-4 col-12 social-actions-btns-col">
						<div class="social-btns-parent">
							<button type="button" class="thumbs-up-btn mr-1"><i class="far fa-thumbs-up"></i></i><label>THUMBS UP</label></button>
							<button type="button" class="follow-btn"><i class="fas fa-plus"></i></i><label>FOLLOW</label></button>
						</div>
					</div>
					<div class="col-lg-4 col-12 social-actions-search-col">
						<div class="social-commentbar-parent">
							<form>
								<input type="text" name="" placeholder="Share your thoughts..." />
								<button type="submit">COMMENT</button>
							</form>
						</div>
					</div>
					<div class="col-lg-4 col-12 social-actions-comments-count-col">
						<div class="social-comments-count-parent">
							<p>12 comments</p>
							<a href="#">view all comments</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="mid-area-box-parent mt-4">
		<div class="mid-area-boxes-header">
			<div class="container-fluid">
				<div class="row mid-area-boxes-header-row">
					<div class="col-lg-4 col-md-4 col-sm-4 col-12">
						<div class="person-img-name">
							<img src="images/dashboard/recent-post-person-img.png" class="img-fluid">
							<h5>JENNY MAY</h5>
							<p>23 MARCH 2020</p>
						</div>
					</div>
					<div class="col-lg-5 col-md-5 col-sm-5 col-12 m-auto">
						<div class="testscore-review">
							<h5>CS 203 - WEEK 04 CLASS WORK DISCUSSION</h5>
						</div>
					</div>
					<div class="col-lg-3 col-md-3 col-sm-3 col-12 m-auto">
						<div class="person-post">
							<img src="images/dashboard/recent-post-instructor-icon.png" class="img-fluid" />
							<label>INSTRUCTOR</label>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="container">
			<div class="recent-post-header-text">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo con</p>
			</div>
		</div>

		<div class="work-discussion-main-box">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-md-4 col-12 m-auto">
						<div class="disc-info">
							<h5>MORRIS ALBA  |  STUDENT</h5>
							<p>23 MARCH 2020</p>
						</div>
					</div>
					<div class="col-lg-8 col-md-8 col-md-8 col-12 m-auto">
						<div class="disc-text">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container-fluid">
			<div class="work-discussion-inner-box">
				<div class="row">
					<div class="col-lg-4 col-12 m-auto">
						<div class="work-disc-replier-info">
							<h5>MORRIS ALBA  |  STUDENT</h5>
							<p>23 MARCH 2020</p>
						</div>
					</div>
					<div class="col-lg-8 col-12 m-auto">
						<div class="work-disc-replier-text">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim</p>
						</div>
					</div>
				</div>
			</div>
			<div class="work-discussion-inner-box">
				<div class="row">
					<div class="col-lg-4 col-12 m-auto">
						<div class="work-disc-replier-info">
							<h5>MORRIS ALBA  |  STUDENT</h5>
							<p>23 MARCH 2020</p>
						</div>
					</div>
					<div class="col-lg-8 col-12 m-auto">
						<div class="work-disc-replier-text">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim</p>
						</div>
					</div>
				</div>
			</div>
			<div class="work-discussion-inner-box">
				<div class="row">
					<div class="col-lg-4 col-12 m-auto">
						<div class="work-disc-replier-info">
							<h5>MORRIS ALBA  |  STUDENT</h5>
							<p>23 MARCH 2020</p>
						</div>
					</div>
					<div class="col-lg-8 col-12 m-auto">
						<div class="work-disc-replier-text">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim</p>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="social-actions-parent mt-4">
				<div class="row">
					<div class="col-lg-4 col-12 social-actions-btns-col">
						<div class="social-btns-parent">
							<button type="button" class="thumbs-up-btn mr-1"><i class="far fa-thumbs-up"></i></i><label>THUMBS UP</label></button>
							<button type="button" class="follow-btn"><i class="fas fa-plus"></i></i><label>FOLLOW</label></button>
						</div>
					</div>
					<div class="col-lg-4 col-12 social-actions-search-col">
						<div class="social-commentbar-parent">
							<form>
								<input type="text" name="" placeholder="Share your thoughts..." />
								<button type="submit">COMMENT</button>
							</form>
						</div>
					</div>
					<div class="col-lg-4 col-12 social-actions-comments-count-col">
						<div class="social-comments-count-parent">
							<p>12 comments</p>
							<a href="#">view all comments</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


<!---------------------------------- MID CONTENT - CLOSED --------------------------------->


@endsection
@include('partials.footer')