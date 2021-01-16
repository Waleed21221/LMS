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
        <div class="col-lg-2 col-md-3 announcement-bar-img-col">
          <img src="../../images/dashboard/announcemen-icon.png" class="img-fluid" />
        </div>
        <div class="col-lg-9 col-md-9 announcement-bar-text-col">
          <h4>Edit Program</h4>
         
        </div>
      </div>
    </div>
  </div>

  <div class="container">
<div class="row">
    <div class="col-md-12">
     <br />
     
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
    <form method="post" action="{{action('CrudController@update',$id)}}">
        {{csrf_field()}}
        <input type="hidden" name="_method" value="PATCH"> 
        <div class="form-group">
        <input type="text" name="name" value="{{$crud->name}}" class="form-control" placeholder="Enter First Name"> 
        </div>
        <div class="form-group">
            <input type="text" name="code" value="{{$crud->code}}" class="form-control" placeholder="Enter Last Name"> 
        </div>
        <div class="form-group">
            <input type="text" name="description" value="{{$crud->description}}" class="form-control" placeholder="Enter Last Name"> 
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-primary" value="Edit"> 
        </div>
    </form>
    </div>
</div>
</div>

</section>


<!---------------------------------- MID CONTENT - CLOSED --------------------------------->


@endsection

@include('partials.footer')