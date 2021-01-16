
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
          <img src="images/dashboard/announcemen-icon.png" class="img-fluid" />
        </div>
        <div class="col-lg-9 col-md-9 announcement-bar-text-col">
          <h4>Admin Dashboard</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
        </div>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="col-md-12">
  <h2>Programs Table</h2>
  <br>
   @if($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{$message}}</p></div>
        @endif
  <div>
    
  <a href="{{route('createsemester')}}" class="btn btn-primary">Add Semester
      </a>      
    </div>
    <br>  
  <table class="table table-striped tbl-prog" style="color: white;">
    <thead>
      <tr>
        <th>Programe</th>
        <th>Semester</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>
    </thead>
    <tbody>
        @foreach($crud as $row)
        <tr>
          <td>{{$row->name}}</td>
        <td>{{$row->semester}}</td>
         <td><a class="btn btn-warning" href="#">Edit</a></td>
        <td>
            <form method="post" class="delete_form btn">
       {{csrf_field()}}
       <input type="hidden" name="_method" value="DELETE"/>
       <button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i>Delete</button>
       
            </form>
    </td>      
    </tr>
        @endforeach 
    </tbody>
  </table>
</div>
</div>

</section>


<!---------------------------------- MID CONTENT - CLOSED --------------------------------->

@include('partials.footer')

@endsection
    