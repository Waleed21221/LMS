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
  
<!-- 
  <div class="announcement-bar-parent">
    
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-2 col-md-3 announcement-bar-img-col">
          <img src="/images/dashboard/announcemen-icon.png" class="img-fluid" />
        </div>
        <div class="col-lg-9 col-md-9 announcement-bar-text-col">
          <h4>Admin Dashboard</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
        </div>
         
        </div>
      </div>
    </div>
  </div> -->

 
  <div class="container">
<div class="row">
    <div class="col-md-12">
    <br />
    <!-- <div class="flip"><a class="btn btn-info btn-lg" href="csv_degree"><h3 aling="center" style="color: white;">Upload Bulk Record</h3></a>
</div> <br /> -->
     <div class="flip"> <button class="btn btn-info btn-md"> Edit Program</button>
</div><br />


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
  
    <div class="flip">
    <form method="post" action="{{ action('CourseController@update', $course->id) }}">
    @csrf
   @method('PATCH')
   <div class="form-group">
      <select 
      style="width:100%; padding:8px; border-radius: 40px; border: 1px solid #4b5069; background-color: #252936; color: #757575;" 
      name="degree_code">
         
          @foreach($degrees as $degree)
            <option>{{$degree->degree_code}}</option>
            @endforeach
</select>
    </div>

        <div class="form-group">
            <input type="text" name="course_code" value="{{$course->course_code}}"> 
        </div>

        <div class="form-group">
            <input type="text" name="course_name" value="{{$course->course_name}}"> 
        </div>
        
        <div class="form-group">
            <button type="submit" class="btn btn-primary styl" >Update</button >
        </div>
    </form>
    </div>
</div>
</div>
</div>

</section>


<!---------------------------------- MID CONTENT - CLOSED --------------------------------->

@include('partials.footer')
@endsection

