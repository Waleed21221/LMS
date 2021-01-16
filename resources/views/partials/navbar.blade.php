<body>

<!---------------------------------- DASHBOARD HEADER - OPEN --------------------------------->

<section>
	
	<div class="dashboard-header mb-4">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-2 col-md-2 text-center m-auto">
					<a href="#"><img src="{{url('images/logo.png')}}" class="img-fluid dash-logo-mob-size" width="140" /></a>
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


<!---------------------------------- DASHBOARD HEADER - CLOSED --------------------------------->