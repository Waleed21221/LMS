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
  			<a href="{{route('degree')}}" class="btn">View Programs <img src="images/dashboard/create-post-icon.png" class="img-fluid" width="24" />  </a>
  			   
    	</div>
	</div>
	</div>
</section>


<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/form.js"></script>

<script>

$("#upld_blk-btn").click(function(){
		$("#upld_blk_form").slideToggle();
	});

	$("#upld_blk_form").hide();

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

