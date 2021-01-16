

 @extends('layouts.app')

@section('content')
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

         
  @include('partials.head')
@include('partials.navbar')
@include('partials.asidebar')

<!---------------------------------- MID CONTENT - OPEN --------------------------------->
<section id="mid-content-area-parent">
  

<center><h2 class="profile">VIEW PROFILE</h2></center>
<form action="/action_page.php" method="post">
  <div class="imgcontainer">
    <img src="images/dashboard/user.png" alt="Avatar" class="avatar">
  </div>
  <div class="form-group">
    <label class="profile">Name</label>
        <input type="text" name="name" value="{{$users -> name}}" readonly=""> 
        </div>
        
        <label class="profile">Designation</label>
        <input type="text" name="designation" value="{{$users -> designation}}" readonly=""> > 
        
        <label class="profile">Contact No</label>
        <input type="text" name="phn_no" value="{{$users -> phn_no}}" readonly="">

        <label class="profile">Address</label>
        <input type="text" name="address" value="{{$users -> address}}" > 
        

        <label class="profile">City</label>
        <input type="text" name="city" value="{{$users -> city}}" readonly="">
        
       <br><br><br>

  <div class="form-group">
            <input type="submit" class="btn btn-primary styl" value="Save"> 
        </div>
</form>

</section>

<!---------------------------------- MID CONTENT - CLOSE --------------------------------->

<!---------------------------------- RIGHT SIDEBAR - OPEN --------------------------------->

<section>

<div class="container-fluid">
  <div class="right-sidebar-button" id="right-sidebar-button-id">
    <button class="openbtn" onclick="openRightPanel()"><i class="fas fa-angle-left"></i></button>
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

@include('partials.footer')