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
				<img src="{{url ('images/dashboard/user.png')}}" class="img-fluid" width="75">
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
		<!-- <div class="dashboard-unimarket-link">
			<a href="#">UNIMARKET <img src="images/dashboard/unimarket-icon.png" class="img-fluid" /></a>
		</div> -->
	</div>
</div>

</section>

<!---------------------------------- LEFT SIDEBAR - CLOSED --------------------------------->