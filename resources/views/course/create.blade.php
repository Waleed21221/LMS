@include('partials.head')
@include('partials.navbar')
@include('partials.asidebar')

<!---------------------------------- LARGE SIDE AREA CONTENT - OPEN --------------------------------->

<section id="lrg-side-area-parent">

<div class="tbl-form-sec mb-5 mt-4">
			<div class="upld-blk-rec">
				<button type="submit"  id="add_new_prog">Upload Bulk Record</button>
				<form class="mt-4" id="add_prog_form" method="post" action="{{ route('course') }}" enctype="multipart/form-data">
        {{csrf_field()}}
					<div class="form-group">
					@if ($failures ?? '')
                    <div class="alert alert-danger" role="alert">
                        <strong>Errors:</strong>
                        <ul>
                            @foreach ($failures ?? '' as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
						<input type="file" name="file">					
					</div>
				
					<div class="form-submit">
						<button type="submit">Save</button>
						<button type="submit">Cancel</button>
					</div>
				</form>
			</div>
			<div class="add-new-prog mt-4">
        <button type="submit" id="add_new_prog">Add New Course</button>
		<br> <br>
        
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

				<form class="mt-4" id="add_prog_form" method="post" action="{{ action('CourseController@store') }}">
        {{csrf_field()}}>
        <div class="form-group">
      <select 
      style="width:100%; padding:8px; border-radius: 40px; border: 1px solid #4b5069; background-color: #252936; color: #757575;" 
      name="degree_code">
          <option disabled selected> Degree Code </option>
          @foreach($degrees as $degree)
            <option>{{$degree->degree_code}}</option>
            @endforeach
</select>
    </div>
					<div class="form-group">
						<input type="text" name="course_code" placeholder="Course Code" />
          </div>
          <div class="form-group">
						<input type="text" name="course_name" placeholder="Course Name" />
					</div>
					<div class="form-submit">
						<button type="submit">Save</button>
						<button type="submit">Cancel</button>
					</div>
				</form>
			</div>

			

		</div>

		<div class="tbl-hdr">
			<div class="tbl-hdr-left">
				<div class="tbl-hdr-sbjct-h">
					<!-- <h4>PHYSICS 402</h4> -->
				</div>
				<!-- <div class="tbl-hdr-sbjct-txt">
					<ul>
						<li class="blue">|</li>
						<li class="blue">Week 1 Assignment</li>
						<li class="grey">|</li>
						<li>Case Study</li>
						<li class="grey">|</li>
						<li>Total Submissions - 34</li>
					</ul>
				</div> -->
				<div class="tbl-hdr-prnt-bar">
					<button type="button" id="prnt-exl-btn"><i class="far fa-file-excel"></i>EXCELL</button>
					<button type="button" id="prnt-pdf-btn"><i class="far fa-file-pdf"></i>PDF</button>
					<button type="button" id="prnt-btn-btn"><i class="fas fa-print"></i>PRINT</button>
				</div>
			</div>
			<!-- <div class="tbl-hdr-right my-auto">
				<div class="tbl-hdr-srch-prnt">
					<div class="tbl-hdr-srch-one">
						<input type="" name="" placeholder="Search By Name" class="mr-3" />
						<i class="fas fa-search"></i>
					</div>
					<div class="tbl-hdr-srch-two">
						<input type="" name="" placeholder="Search By File Name" />
						<i class="fas fa-search"></i>
					</div>
				</div>
				<div class="tbl-hdr-date-prnt">
					<div class="tbl-hdr-date-one">
						<label>Date</label>
						<input type="date" name="" class="mr-3" />
					</div>
					<div class="tbl-hdr-date-two">
						<input type="date" name="" />
					</div>
				</div>
			</div> -->

			<div class="tbl-hdr-right-srch my-auto">
			<form action="#" method="GET" role="search">
			{{ csrf_field() }}
				<input type="text" name="term" id="term" placeholder="Search.." />
				<button type="submit"><i class="fas fa-search"></i></button>
			</div>
		</div>

		<div class="tbl-body mt-4">

		<table class="table table-striped mb-0">
		  <thead>
		    <tr>
		      <th scope="col">Degree Code<i class="fas fa-sort-down"></i></th>
          <th scope="col">Course Code<i class="fas fa-sort-down"></i></th>  
          <th scope="col">Course Name<i class="fas fa-sort-down"></i></th>
			  <th scope="col">Action<i class="fas fa-sort-down"></i></th>

		</tr>
		  </thead>
		  <tbody>
      @foreach($courses as $course)
		    <tr>
		      <td>{{$course->degree_code}}</td>
          <td>{{$course->course_code}}</td>
          <td>{{$course->course_name}}</td>
		    
		      <td>
          <form action="{{ action('CourseController@destroy',$course->id) }}" method="POST">
		  @csrf
            @method('DELETE')
			<a class="green" href="#"><i class="far fa-eye mr-3"></i></a>
		    <a class="green" href="{{ route('courses.edit', $course->id) }}"><i class="fas fa-pen mr-3"></i></a>
           <button class="red" onclick="return confirm('Are you sure?')" ><i class="fas fa-trash-alt"></i></button>
			
		      </td>
		    </tr>
		  @endforeach
		  </tbody>
		</table>
		</form>
		<div class="tbl-pagination">
			<ul class="pagination">
			  <!-- <li class="page-item"><a  href="#"><i class="fas fa-arrow-left"></i></a></li> -->
			  <li class="page-item">{{$courses}}</li>
			 <!-- <li class="page-item"><a  href="#"><i class="fas fa-arrow-right"></i></a></li> -->
			</ul>
		</div>	
	</div>

</section>


<!---------------------------------- LARGE SIDE AREA CONTENT - OPEN --------------------------------->





@include('partials.footer')
