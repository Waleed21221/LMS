<section>

<div class="container-fluid">
	<div class="right-sidebar-button" id="right-sidebar-button-id">
		<button class="openbtn" onclick="openRightPanel()"><i class="fas fa-angle-left"></i></button>
	</div>
	<div class="right-sidebar-parent" id="right-sidebar-panel">
		<a href="javascript:void(0)" class="closebtn right-sidebar-close-btn" onclick="closeRightPanel()">×</a>
		<!-- <div class="create-post-btn">
			<button href="{{route('degree')}}">View Programs <img src="images/dashboard/create-post-icon.png" class="img-fluid" width="24" /></button>
		</div> -->
		<div align="right" class="create-btn"> 
  			<a href="{{route('degree')}}" class="btn">View Programs <img src="{{url('images/dashboard/create-post-icon.png')}}" class="img-fluid" width="24" />  </a>
  			   
    	</div>
	</div>
	</div>
</section>


<script src="{{url('js/jquery.min.js')}}"></script>
<script src="{{url ('js/bootstrap.min.js')}}"></script>
<script src="{{url ('js/jquerylms.js')}}"></script>

<script src="{{url ('js/lmsjavascript.js')}}"></script>
</body>
</html>