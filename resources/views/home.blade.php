@extends('layouts.app')

@section('content')
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                  
<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Collectives - Login Page</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<!-- <link rel="stylesheet" type="text/css" href="css/color-switcher.css"> -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<!-- <link href="https://fonts.googleapis.com/css?family=Philosopher:400,700" rel="stylesheet"> -->
	
</head>
<body>

<!---------------------------------- DASHBOARD HEADER - OPEN --------------------------------->

<section>
	
	<div class="dashboard-header mb-4">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-2 col-md-2 text-center m-auto">
					<a href="#"><img src="images/logo.png" class="img-fluid dash-logo-mob-size" width="140" /></a>
				</div>
				<div class="col-lg-7 col-md-7 dashboard-header-search-col">
					<form>
						<div class="form-group mb-0">
							<input type="search" name="" placeholder="Search, Classes, Groups, Messages ....">
							<button type="submit"><i class="fas fa-search"></i></button>
						</div>
					</form>
				</div>
				<div class="col-lg-3 col-md-3 dashboard-header-notify-col">
					<div class="notify-parent-box">
						<div class="container-fluid">
							<div class="row">
								<div class="mt-3 notify-btn-parent">
									<button type="button" class="mr-4">
										<i class="far fa-bell"></i>
										<label class="notify-count">12</label>
									</button>	
								</div>
								<div class="calendar-icon-parent">
									<i class="far fa-calendar-alt mt-3 mr-2"></i>
									<label class="mr-3 mt-3">28 NOV 2020</label>
								</div>
								<div class="signout-icon-parent">
									<a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    <i class="fas fa-sign-out-alt"></i><label>LOGOUT</label></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
</section>


<!---------------------------------- DASHBOARD HEADER - CLOSED --------------------------------->	

<section>
	
<!---------------------------------- LEFT SIDEBAR - OPEN --------------------------------->
	<div class="left-sidebar-button" id="left-sidebar-button-id">
		<button class="openbtn" onclick="openLeftPanel()"><i class="fas fa-angle-right"></i></button>
	</div>
	<div class="container-fluid">
		<div class="left-sidebar" id="left-sidebar-panel">
			<a href="javascript:void(0)" class="closebtn left-sidebar-close-btn" onclick="closeLeftPanel()">×</a>
			<div class="person-header">
				<img src="images/dashboard/user.png" class="img-fluid" width="75">
				<div class="person-text">
					<h6>JOHN PARKER</h6>
					<p>ECONOMICS GRADUATE</p>
					<a href="#">VIEW PROFILE <i class="fas fa-caret-right ml-1"></i></a>
				</div>
				<div class="color-switcher-link">
					<button type="button" id="color-switcher-light-btn">Light Mode</button>
					<button type="button" id="color-switcher-dark-btn">Dark Mode</button>
				</div>
			</div>
			<div class="dashboard-links">
				<ul>
					<li><a href="#" class="home-icon dash-icons">DASHBOARD</a></li>
					<li><a href="#" class="classes-icon dash-icons">CLASSES</a></li>
					<li><a href="#" class="groups-icon dash-icons">GROUPS</a></li>
					<li><a href="#" class="msg-center-icon dash-icons">MESSAGE CENTER</a></li>
					<li><a href="#" class="settings-icon dash-icons">SETTINGS</a></li>
				</ul>
			</div>
			<div class="dashboard-resources">
				<h5>RESOURCES</h5>
					<!--Accordion wrapper-->
					<div class="accordion md-accordion accordion-4" id="accordionEx2" role="tablist" aria-multiselectable="true">

					  <!-- Accordion card -->
					  <div class="card">

					    <!-- Card header -->
					    <div class="card-header z-depth-1 teal lighten-4 newsletter-card-header" role="tab" id="heading10">
					      <a data-toggle="collapse" data-parent="#accordionEx2" href="#collapse10" aria-expanded="true"
					        aria-controls="collapse10">
					        <h4 class="mb-0 text-uppercase newsletter-icon">
					          NEWSLETTER<i class="fas fa-sort-down"></i>
					        </h4>
					      </a>
					    </div>

					    <!-- Card body -->
					    <div id="collapse10" class="collapse show" role="tabpanel" aria-labelledby="heading10"
					      data-parent="#accordionEx2">
					      <div class="card-body rgba-teal-strong white-text">
					      	<div class="dashboard-resources-accordion-links">
					        <ul>
					        	<li><a href="#">Support your Guild</a></li>
					        	<li><a href="#">Latest Intern Openings</a></li>
					        	<li><a href="#">Weekly LMS Updates</a></li>
					        </ul>
					      </div>
					    </div>
					  </div>
					  <!-- Accordion card -->

					  <!-- Accordion card -->
					  <div class="card">

					    <!-- Card header -->
					    <div class="card-header z-depth-1 teal lighten-3 newsletter-card-header" role="tab" id="heading11">
					      <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx2" href="#collapse11"
					        aria-expanded="false" aria-controls="collapse11">
					        <h4 class="mb-0 text-uppercase events-icon">
					          EVENTS
					        </h4>
					      </a>
					    </div>

					    <!-- Card body -->
					    <div id="collapse11" class="collapse" role="tabpanel" aria-labelledby="heading11"
					      data-parent="#accordionEx2">
					      <div class="card-body rgba-teal-strong white-text">
					        <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3
					          wolf moon officia aute,
					          non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch
					          3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda
					          shoreditch et.</p>

					        <p>Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt
					          sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer
					          farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them
					          accusamus labore.</p>
					      </div>
					    </div>
					  </div>
					  <!-- Accordion card -->


					</div>
					<!--/.Accordion wrapper-->
			</div>
		</div>
		<div class="dashboard-unimarket-link">
			<a href="#">UNIMARKET <img src="images/dashboard/unimarket-icon.png" class="img-fluid" /></a>
		</div>
	</div>
</div>

</section>

<!---------------------------------- LEFT SIDEBAR - CLOSED --------------------------------->

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
					<h4>TO ALL FALL EROLLED STUDENTS 2020</h4>
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

<!---------------------------------- RIGHT SIDEBAR - OPEN --------------------------------->

<section>

<div class="container-fluid">
	<div class="right-sidebar-button" id="right-sidebar-button-id">
		<button class="openbtn" onclick="openRightPanel()"><i class="fas fa-angle-left"></i></i></button>
	</div>
	<div class="right-sidebar-parent" id="right-sidebar-panel">
		<a href="javascript:void(0)" class="closebtn right-sidebar-close-btn" onclick="closeRightPanel()">×</a>
		<div class="create-post-btn">
			<button type="submit">CREATE POST <img src="images/dashboard/create-post-icon.png" class="img-fluid" width="24" /></button>
		</div>
		<div class="right-sidebar">
			<div class="my-assignments-header">
				<h5>MY ASSIGNMENTS <img src="images/dashboard/my-assignments-icon.png" class="img-fluid ml-3"  width="46" /></h5>
			</div>
			<div class="my-assignments-body">
				<form>
					<div class="form-check">
					    <input type="checkbox" id="c1" name="cb">
				      	<label for="c1">Submit CS-302 Assignment</label>
					</div>
					<div class="form-check">
					   	<input type="checkbox" id="c2" name="cb">
				      	<label for="c2">Review Class PDF</label>
					</div>
					<div class="form-check">
					    <input type="checkbox" id="c3" name="cb">
				      	<label for="c3">Add notes to completed classes</label>
					</div>
					<div class="form-check">
					    <input type="checkbox" id="c4" name="cb">
				      	<label for="c4">Share class documents</label>
					</div>
				</form>
			</div>

			<div class="class-schedule-header">
				<h5>CLASS SCHEDULE <img src="images/dashboard/class-schedule-icon.png" class="img-fluid ml-3"  width="46" /></h5>
			</div>
			<div class="class-schedule-body">
				<div class="class-schedule-subjects sub-chem mb-2">
					<p>CHEM 306</p>
					<label>2:00pm - 4:30pm</label>
				</div>
				<div class="class-schedule-subjects sub-bio mb-2">
					<p>BIO-ENGINEERING</p>
					<label>5:00pm - 7:30pm</label>
				</div>
				<div class="class-schedule-subjects sub-cs mb-2">
					<p>CS 609</p>
					<label>8:00am - 10:30am</label>
				</div>
				<div class="class-schedule-subjects sub-bizcom">
					<p>Biz-comm</p>
					<label>10:00am - 1:30pm</label>
				</div>
			</div>

			<div class="my-groups-header">
				<h5>MY GROUPS <img src="images/dashboard/my-groups-icon.png" class="img-fluid ml-3"  width="46" /></h5>
			</div>
			<div class="my-groups-body">
				<ul>
					<li class="mb-3 mt-3">
						<img src="images/dashboard/my-groups-icon-1.png" class="img-fluid mr-1"  width="46" />
						<a href="#">ASSIGNMENT HELP & GUIDES</a>
					</li>
					<li class="mb-3 mt-3">
						<img src="images/dashboard/my-groups-icon-2.png" class="img-fluid mr-1"  width="46" />
						<a href="#">CS 406 - WORK GROUP</a>
					</li>
					<li class="mb-3 mt-3">
						<img src="images/dashboard/my-groups-icon-3.png" class="img-fluid mr-1"  width="46" />
						<a href="#">STUDENT PROJECT DISCUSSION</a>
					</li>
				</ul>
			</div>

		</div>
	</div>
</div>
</section>

<!---------------------------------- RIGHT SIDEBAR - CLOSED --------------------------------->

















<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>

<script>

function openLeftPanel() {
  document.getElementById("left-sidebar-panel").style.width = "100%";
}

function closeLeftPanel() {
  document.getElementById("left-sidebar-panel").style.width = "0";
}

function openRightPanel() {
  document.getElementById("right-sidebar-panel").style.width = "100%";
}

function closeRightPanel() {
  document.getElementById("right-sidebar-panel").style.width = "0";
}

</script>

<script type="text/javascript">
	
	$(document).ready(function(){
	  $("#left-sidebar-button-id").click(function(){
	    $(".left-sidebar").show();
	  });

	  $("#right-sidebar-button-id").click(function(){
	    $(".right-sidebar-parent").show();
	  });

	  $("#color-switcher-light-btn").click(function(){
	    $('head').append('<link rel="stylesheet" href="css/color-switcher.css" type="text/css" />');
	  });

	  $("#color-switcher-dark-btn").click(function(){
	    $('link[href*="color-switcher.css"]').attr("disabled", "true");
	  });

	  $(".announcement-bar-close-btn").click(function(){
	    $(".announcement-bar-parent").fadeOut();
	  });

	});

</script>
</body>
</html>
@endsection
