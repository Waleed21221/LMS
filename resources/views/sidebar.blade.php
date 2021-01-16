@include('layouts.app')

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
	<title>Collectives - Admin Page</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/color-switcher.css">
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
									<label class="mr-3 mt-3">{{$date1}}</label>
								</div>
								<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
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


<!------------- --------------------- DASHBOARD HEADER - CLOSED --------------------------------->	

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
					<h6>{{$users -> name}}</h6>
					<p>{{$users -> designation}}</p>
					<a href="">VIEW PROFILE <i class="fas fa-caret-right ml-1"></i></a>
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