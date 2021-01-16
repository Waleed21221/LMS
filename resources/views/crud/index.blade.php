
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
    
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-9 col-md-9 announcement-bar-text-col">
          <center><h4>Add Programs</h4></center>
          
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
 <div align="left">
  <a href="{{route('crud.create')}}" class="btn btn-primary">Add Programs
      </a>     
    </div>
    <br>  

   <table class="table table-bordered table-striped" style="color: white;">
    <thead>
      <tr>
       <th>Name</th>
        <th>Code</th>
        <th>Description</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>
    </thead>
   <tbody>
        @foreach($crud as $row)
        <tr>
        <td>{{$row['name']}}</td>
        <td>{{$row['code']}}</td>
        <td>{{$row['description']}}</td>
         <td><a class="btn btn-warning" href="{{action('CrudController@edit',$row['id'])}}">Edit</a></td>
        <td>
            <form method="post" class="delete_form" action="{{action('CrudController@destroy',$row['id'])}}">
       {{csrf_field()}}
       <input type="hidden" name="_method" value="DELETE"/>
       <button type="submit" class="btn btn-danger">Delete</button>
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


@endsection

@include('partials.footer')