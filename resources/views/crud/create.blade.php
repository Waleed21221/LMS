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
  

  <div class="announcement-bar-parent">
    <div class="announcement-bar-close-btn">
      <label>x</label>
    </div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-2 col-md-3 announcement-bar-img-col">
          <img src="../images/dashboard/announcemen-icon.png" class="img-fluid" />
        </div>
        <div class="col-lg-9 col-md-9 announcement-bar-text-col">
          <h4>Admin Dashboard</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
        </div>
      </div>
    </div>
  </div>

  <div class="container">
<div class="row">
    <div class="col-md-12">
     <br />
     <h3 aling="center" style="color: white;">Add Program</h3>
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
    <form method="post" action="{{url('crud')}}">
        {{csrf_field()}}
        <div class="form-group">
            <input type="text" name="name" class="form-control" placeholder="Enter Name"> 
        </div>
        <div class="form-group">
            <input type="text" name="code" class="form-control" placeholder="Enter Code"> 
        </div>
        <div class="form-group">
            <input type="text" name="description" class="form-control" placeholder="Enter Description"> 
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-primary" > 
        </div>
    </form>
    </div>
</div>
</div>

</section>


<!---------------------------------- MID CONTENT - CLOSED --------------------------------->


@endsection
@include('partials.footer')