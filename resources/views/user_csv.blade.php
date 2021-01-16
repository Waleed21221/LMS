@include('partials.head')
@include('partials.navbar')
@include('partials.asidebar')

<!---------------------------------- MID CONTENT - OPEN --------------------------------->

<section id="mid-content-area-parent">
  

  <!-- <div class="announcement-bar-parent"> -->
    
    <!-- <div class="container-fluid">
      <div class="row">
        <div class="col-lg-9 col-md-9 announcement-bar-text-col">
          <center><h4>Add Programs</h4></center>
          
        </div> 
      </div>
    </div> -->
  <!-- </div> -->

  <div class="container">
<div class="row">
    <div class="col-md-12">
     <br />
     <h3 aling="center" style="color: white;">Upload Degree CSV</h3>
     <br />
     
     @if(count($errors) > 0)
     <div class="alert alert-danger">
      <ul>
      @foreach($errors->all() as $error)
       <li>{{$error}}</li>
      @endforeach
      </ul>
     </div>
     @endif
     @if(\Session::has('success'))
     <div class="alert alert-success">
      <p>{{ \Session::get('success') }}</p>
     </div>
     @endif

    <form method="post" action="{{ route('user_csv') }}" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="form-group">
            <input style="height:48px;" type="file" name="file" class="form-control"> 
        </div>
      <div class="form-group">
            <button type="submit" class="btn btn-primary"> UPLOAD </button> 
        </div>
    </form>
    </div>
</div>
</div>

</section>


<!---------------------------------- MID CONTENT - CLOSED --------------------------------->

<!---------------------------------- RIGHT SIDEBAR - OPEN --------------------------------->

<section>

<div class="container-fluid">
  <div class="right-sidebar-button" id="right-sidebar-button-id">
    <button class="openbtn" onclick="openRightPanel()"><i class="fas fa-angle-left"></i></button>
  </div>
  <div class="right-sidebar-parent" id="right-sidebar-panel">
    <a href="javascript:void(0)" class="closebtn right-sidebar-close-btn" onclick="closeRightPanel()">×</a>
    <div class="create-post-btn">
      <button type="submit">CREATE POST <img src="images/dashboard/create-post-icon.png" class="img-fluid" width="24" /></button>
    </div>

  </div>
</div>
</section>

@include('partials.footer')