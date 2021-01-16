@extends('layouts.app')
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
									<a href="#"><i class="fas fa-sign-out-alt"></i><label>LOGOUT</label></a>
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

<!---------------------------------- LEFT SIDEBAR - OPEN --------------------------------->

<div id="the-parent">

<section>

	<div class="left-sidebar-button" id="left-sidebar-button-id">
		<button class="openbtn" onclick="openLeftPanel()"><i class="fas fa-angle-right"></i></button>
	</div>
	<div class="container-fluid">
		<div class="left-sidebar" id="left-sidebar-panel">
			<a href="javascript:void(0)" class="closebtn left-sidebar-close-btn" onclick="closeLeftPanel()">×</a>
			<div class="person-header">
				<img src="images/dashboard/user.png" class="img-fluid" width="75">
				<div class="person-text">
					<h6>{{Auth::user()->name}}</h6>
					<!-- <p>{{$user->staff_code}}</p> -->
				
					<a href="#">VIEW PROFILE <i class="fas fa-caret-right ml-1"></i></a>
				</div>
				<div class="color-switcher-link">
					<button type="button" id="color-switcher-light-btn">Light Mode</button>
					<button type="button" id="color-switcher-dark-btn">Dark Mode</button>
				</div>
			</div>
			<div class="dashboard-links">
				<ul>
				<li><a href="/admin" class="home-icon dash-icons">DASHBOARD</a></li>
					<li><a href="#" class="classes-icon dash-icons">CLASSES</a></li>
					<li><a href="#" class="groups-icon dash-icons">GROUPS</a></li>
					<li><a href="{{route('degree')}}" class="groups-icon dash-icons">DEGREE</a></li>
					<li><a href="" class="groups-icon dash-icons">SEMESTER</a></li>
					<li><a href="{{route('course')}}" class="groups-icon dash-icons">COURSE</a></li>
					<!-- <li><a href="csv_course" class="groups-icon dash-icons"></a></li> -->
					<li><a href="{{route('campus')}}" class="groups-icon dash-icons"> CAMPUS</a></li>
					<li><a href="{{route('teacher')}}" class="groups-icon dash-icons">FACULTY </a></li>
					<li><a href="{{route('student')}}" class="groups-icon dash-icons"> STUDENT </a></li>
					<li><a href="#" class="msg-center-icon dash-icons">MESSAGE CENTER</a></li>
					<li><a href="#" class="settings-icon dash-icons">SETTINGS</a></li>				</ul>
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
					          NEWSLETTER<i class="fas fa-sort-up fa-sort-up-nwsltr"></i>
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
					    <div class="card-header z-depth-1 teal lighten-3 events-card-header" role="tab" id="heading11">
					      <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx2" href="#collapse11"
					        aria-expanded="false" aria-controls="collapse11">
					        <h4 class="mb-0 text-uppercase events-icon">
					          EVENTS<i class="fas fa-sort-down fa-sort-up-events"></i>
					        </h4>
					      </a>
					    </div>

					    <!-- Card body -->
					    <div id="collapse11" class="collapse" role="tabpanel" aria-labelledby="heading11"
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
					  </div>
					  <!-- Accordion card -->


					</div>
					<!--/.Accordion wrapper-->
			</div>
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
					<h4>TO ALL NEW FACULTY MEMBERS</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>
				</div>
			</div>
		</div>
	</div>

	<div class="mid-area-sections-headings mt-4">
		<h5>PINNED CLASS</h5>
		<div class="line"></div>
	</div>

	<div class="mid-area-box-parent">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-5 pinned-class-sub-col">
					<div class="recent-class-sub-heading pinned-class-h">
						<h4>CHEMISTRY</h4>
						<p>WEEK 6 - IN-PROGRESS</p>
					</div>
					<div class="pinned-class-tags-parent">
						<ul>
							<li><a href="#">DATA</a></li>
							<li><a href="#">ADVANCE</a></li>
							<li><a href="#">ANALYTICS</a></li>
							<li><a href="#">BI INTELIIGENCE</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 pinned-class-circle-progress-col">
					<div class="circle-progress mx-auto" data-value='60'>
			          <span class="progress-left">
			                        <span class="circle-progress-bar"></span>
			          </span>
			          <span class="progress-right">
			                        <span class="circle-progress-bar"></span>
			          </span>
			          <div class="progress-value w-100 h-100 rounded-circle">
			            <div class="h2 font-weight-bold">60%</div>
			            <p>Completed</p>
			          </div>
			        </div>
				</div>
				<div class="col-lg-4 pinned-class-act-col">
					<div class="tchr-pinned-class-insights-btn-col">
						<ul>
							<li><span>32</span><label>REGISTERED STUDENTS</label></li>
							<li><span>32</span><label>ASSIGNMENTS</label></li>
							<li><span>32</span><label>TEST - REPORT</label></li>
						</ul>
						<div class="resume-class-btn pinned-class-btn">
							<button type="submit">RESUME CLASS</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="mid-area-sections-headings mt-4">
		<h5>CLASS PROGRESS</h5>
		<div class="line"></div>
	</div>

	<div class="mid-area-box-parent position-relative">
		<div class="container-fluid">
			<!-- <div class="row">
				<div class="col-lg-8">
					<figure class="highcharts-figure">
					    <div id="container"></div>
					    <p class="highcharts-description">
					    </p>
					</figure>
				</div>
				<div class="col-lg-4">
				</div>
			</div> -->

			<div id="chartContainer" style="height: 300px; max-width: 920px; margin: 0px auto;"></div>
			<div class="chrt-btm-lbls-hide">
				<div class="left">
				</div>
				<div class="mid">
				</div>
				<div class="right">
				</div>
			</div>

			<!-- <div class="chrt-sec-prnt">
				<div class="chrt-lft">
					<div class="chrt-h">
						<h3>ASSIGNMENT SUBMISSION</h3>
					</div>
					<div class="chrt-prnt mt-4">
						<div class="chrt-score-txt my-auto">
							<p>SCORE</p>
						</div>
						<div class="chr-body">
							<div class="chrt-col-first">
								<p>100</p>
								<p>75</p>
								<p>50</p>
								<p>25</p>
								<p>EXAM</p>
							</div>
							<div class="chrt-col">
								<div class="chart-bar-prnt">
									<div class="chart-bar1">
									</div>
									<div class="chart-bar2">
									</div>
								</div>
								<p>WEEK 1</p>
							</div>
							<div class="chrt-col">
								<div class="chart-bar-prnt">
									<div class="chart-bar2">
									</div>
									<div class="chart-bar1">
									</div>
								</div>
								<p>WEEK 2</p>
							</div>
							<div class="chrt-col">
								<div class="chart-bar-prnt">
									<div class="chart-bar1">
									</div>
									<div class="chart-bar2">
									</div>
								</div>
								<p>WEEK 3</p>
							</div>
							<div class="chrt-line">
							</div>
						</div>
					</div>
				</div>
				<div class="chrt-right">
				</div>
			</div> -->

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
		<div class="container-fluid work-discussion-expand" id="work-discussion-expand-box">
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
		<!-- <button onclick="expandWorkDiscussionBox()" id="work-discussion-expand-box-arrow"><i class="fas fa-sort-down"></i></button> -->

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

<!-- <div class="column1"><p>:Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.:Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.:Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p></div>
<div class="column2">:Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.:Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.:Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div> -->

<!---------------------------------- MID CONTENT - CLOSED --------------------------------->

<!---------------------------------- RIGHT SIDEBAR - OPEN --------------------------------->

<section>

<div class="container-fluid">
	<div class="right-sidebar-button" id="right-sidebar-button-id">
		<button class="openbtn" onclick="openRightPanel()"><i class="fas fa-angle-left"></i></i></button>
	</div>
	<div class="right-sidebar-parent" id="right-sidebar-panel">
		<a href="javascript:void(0)" class="closebtn right-sidebar-close-btn" onclick="closeRightPanel()">×</a>
		<div class="right-top-btns">
			<button type="submit" class="create-post-btn">CREATE POST <img src="images/dashboard/create-post-icon.png" class="img-fluid" width="24" /></button>
		</div>
		<div class="right-sidebar">
			<!-- <div class="my-assignments-header">
				<h5>MY ASSIGNMENTS <img src="images/dashboard/my-assignments-icon.png" class="img-fluid ml-3"  width="46" /></h5>
			</div> -->
			
			<div class="my-assignments-header mt-2">
				<h5 class="green">CLASS SCHEDULE</h5>
				<img src="images/dashboard/class-schedule-icon.png" class="img-fluid ml-3" width="46">
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

			<div class="my-assignments-header mt-4">
				<h5 class="blue">MY TASKS</h5>
				<img src="images/dashboard/my-assignments-icon.png" class="img-fluid ml-3" width="46">
			</div>
			<div class="my-assignments-body">
				<form>
					<div class="form-check">
					    <input type="checkbox" id="c1" name="cb" onclick="rightPanelFirstCheckbox()">
				      	<label for="c1" id="label1">Submit CS-302 Assignment</label>
					</div>
					<div class="form-check">
					   	<input type="checkbox" id="c2" name="cb" onclick="rightPanelSecondCheckbox()">
				      	<label for="c2" id="label2">Review Class PDF</label>
					</div>
					<div class="form-check">
					    <input type="checkbox" id="c3" name="cb" onclick="rightPanelThirdCheckbox()">
				      	<label for="c3" id="label3">Add notes to completed classes</label>
					</div>
					<div class="form-check">
					    <input type="checkbox" id="c4" name="cb" onclick="rightPanelFourthCheckbox()">
				      	<label for="c4" id="label4">Share class documents</label>
					</div>
				</form>
			</div>
			<div class="mygroups-btns-rightbar">
				<button class="crt-grp-btn"><i class="fas fa-plus mr-1"></i>ADD TASK</button>
			</div>

			
			<div class="my-assignments-header mt-4">
				<h5 class="orange" style="width: 175px;">LATEST ASSESSMENT SUBMISSIONS</h5>
				<img src="images/dashboard/my-assignments-icon.png" class="img-fluid ml-3" width="46">
			</div>
			<div class="ltst-assmnt-subs-prnt">
				<div class="ltst-assmnt-subs-row">
					<div class="ltst-assmnt-subs-left">
						<p class="mb-0">Week 01 - Test</p>
						<label>Richard Martin</label>
					</div>
					<div class="ltst-assmnt-subs-right">
						<p>30 AUG 2020</p>
						<a href="#">View Submissions</a>
					</div>
				</div>
				<div class="ltst-assmnt-subs-row">
					<div class="ltst-assmnt-subs-left">
						<p class="mb-0">Week 01 - Test</p>
						<label>Richard Martin</label>
					</div>
					<div class="ltst-assmnt-subs-right">
						<p>30 AUG 2020</p>
						<a href="#">View Submissions</a>
					</div>
				</div>
			</div>

			<div class="my-assignments-header mt-1">
				<h5 class="blue" style="width: 175px;">MY GROUPS</h5>
				<img src="images/dashboard/my-groups-icon.png" class="img-fluid ml-3" width="46">
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
<!-- <script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script> -->
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>

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

function rightPanelFirstCheckbox() {
	var rightBarCheckbox1 = document.getElementById("c1");
	var rightBarLabel1 = document.getElementById("label1");

	if (rightBarCheckbox1.checked == true) {
		rightBarLabel1.style.textDecoration = "line-through";
	} else {
		rightBarLabel1.style.textDecoration = "none";
	}
}

function rightPanelSecondCheckbox() {
	var rightBarCheckbox2 = document.getElementById("c2");
	var rightBarLabel2 = document.getElementById("label2");

	if (rightBarCheckbox2.checked == true) {
		rightBarLabel2.style.textDecoration = "line-through";
	} else {
		rightBarLabel2.style.textDecoration = "none";
	}
}

function rightPanelThirdCheckbox() {
	var rightBarCheckbox3 = document.getElementById("c3");
	var rightBarLabel3 = document.getElementById("label3");

	if (rightBarCheckbox3.checked == true) {
		rightBarLabel3.style.textDecoration = "line-through";
	} else {
		rightBarLabel3.style.textDecoration = "none";
	}
}

function rightPanelFourthCheckbox() {
	var rightBarCheckbox4 = document.getElementById("c4");
	var rightBarLabel4 = document.getElementById("label4");

	if (rightBarCheckbox4.checked == true) {
		rightBarLabel4.style.textDecoration = "line-through";
	} else {
		rightBarLabel4.style.textDecoration = "none";
	}
}

function expandWorkDiscussionBox() {
	var workDiscussionBoxArrow = document.getElementById("work-discussion-expand-box-arrow");
	var workDiscussionBox = document.getElementById("work-discussion-expand-box");

	if (workDiscussionBoxArrow.style.height === "80px") {
		workDiscussionBox.style.height = "auto";
	} else {
		workDiscussionBox.style.height = "80px"
	}
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


	  	$('#mid-content-area-parent').on('mouseenter', function(){ 
	        $('#mid-content-area-parent').on('scroll', function () {
	            $('.right-sidebar').scrollTop($(this).scrollTop());
	        });
	    });
	    $('#mid-content-area-parent').on('mouseleave', function(){ 
	        $('#mid-content-area-parent').off('scroll');
	        $('.right-sidebar').off('scrollTop');
	    });
	    
	    $('.right-sidebar').on('mouseenter',function(){ 
	        $('.right-sidebar').on('scroll', function () {
	            $('#mid-content-area-parent').scrollTop($(this).scrollTop());
	        });
	    }); 
	    $('.right-sidebar').on('mouseleave', function(){ 
	        $('.right-sidebar').off('scroll');
	        $('#mid-content-area-parent').off('scrollTop');
	    });


	    $(".newsletter-card-header").click(function(){
	    	$(".fa-sort-up-nwsltr").toggleClass("fa-sort-down-nwsltr");
	  	});

	  	$(".events-card-header").click(function(){
	    	$(".fa-sort-up-events").toggleClass("fa-sort-down-events");
	  	});


	});

$(function() {

  $(".circle-progress").each(function() {

    var value = $(this).attr('data-value');
    var left = $(this).find('.progress-left .circle-progress-bar');
    var right = $(this).find('.progress-right .circle-progress-bar');

    if (value > 0) {
      if (value <= 50) {
        right.css('transform', 'rotate(' + percentageToDegrees(value) + 'deg)')
      } else {
        right.css('transform', 'rotate(180deg)')
        left.css('transform', 'rotate(' + percentageToDegrees(value - 50) + 'deg)')
      }
    }

  })

  function percentageToDegrees(percentage) {

    return percentage / 100 * 360

  }



  var chart = Highcharts.chart('container', {

    chart: {
        type: 'column'
    },

    title: {
        text: 'Highcharts responsive chart'
    },

    subtitle: {
        text: 'Resize the frame or click buttons to change appearance'
    },

    legend: {
        align: 'right',
        verticalAlign: 'middle',
        layout: 'vertical'
    },

    xAxis: {
        categories: ['Apples', 'Oranges', 'Bananas'],
        labels: {
            x: -10
        }
    },

    yAxis: {
        allowDecimals: false,
        title: {
            text: 'Amount'
        }
    },

    series: [{
        name: 'Christmas Eve',
        data: [1, 4, 3]
    }, {
        name: 'Christmas Day before dinner',
        data: [6, 4, 2]
    }, {
        name: 'Christmas Day after dinner',
        data: [8, 4, 3]
    }],

    responsive: {
        rules: [{
            condition: {
                maxWidth: 500
            },
            chartOptions: {
                legend: {
                    align: 'center',
                    verticalAlign: 'bottom',
                    layout: 'horizontal'
                },
                yAxis: {
                    labels: {
                        align: 'left',
                        x: 0,
                        y: -5
                    },
                    title: {
                        text: null
                    }
                },
                subtitle: {
                    text: null
                },
                credits: {
                    enabled: false
                }
            }
        }]
    }
});

document.getElementById('small').addEventListener('click', function () {
    chart.setSize(400);
});

document.getElementById('large').addEventListener('click', function () {
    chart.setSize(600);
});

document.getElementById('auto').addEventListener('click', function () {
    chart.setSize(null);
});


});
	

</script>

<script>
window.onload = function () {

var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	backgroundColor: "#2c3040",
	title:{
		text: "ASSIGNMENT SUBMISSION",
		fontColor: '#fff'
	},	
	axisY: {
		title: "Score",
		titleFontColor: "#8289ae",
		lineColor: "#8289ae",
		labelFontColor: "#8289ae",
		tickColor: "#8289ae"
	},
	axisY2: {
		title: "Millions of Barrels/day",
		titleFontColor: "#8289ae",
		lineColor: "#8289ae",
		labelFontColor: "#8289ae",
		tickColor: "#8289ae"
	},	
	toolTip: {
		shared: true
	},
	legend: {
		cursor:"pointer",
		itemclick: toggleDataSeries,
		fontColor: '#fff'
	},
	data: [{
		type: "column",
		name: "Report 1",
		legendText: "Report 1",
		showInLegend: true,
		fontColor: '#fff',
		titleFontColor: "#fff",
		lineColor: "#fff",
		labelFontColor: "#fff",
		backgroundColor: "#2c3040",
		tickColor: "#fff",
		dataPoints:[
			{ label: "WEEK 1", y: 666.21 },
			{ label: "WEEK 2", y: 302.25 },
			{ label: "WEEK 3", y: 157.20 }
		]
	},
	{
		type: "column",	
		name: "Report 2",
		legendText: "Report 2",
		axisYType: "secondary",
		showInLegend: true,
		fontColor: '#fff',
		titleFontColor: "#fff",
		lineColor: "#fff",
		labelFontColor: "#fff",
		tickColor: "#fff",
		backgroundColor: "#2c3040",
		dataPoints:[
			{ label: "WEEK 1", y: 350.46 },
			{ label: "WEEK 2", y: 2.27 },
			{ label: "WEEK 3", y: 3.99 }
		] 
	}]
});
chart.render();

function toggleDataSeries(e) {
	if (typeof(e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
		e.dataSeries.visible = false;
	}
	else {
		e.dataSeries.visible = true;
	}
	chart.render();
}

}
</script>
</body>
</html>