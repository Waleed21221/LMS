@include('partials.head')
@include('partials.navbar')
@include('partials.asidebar')

<!---------------------------------- LARGE SIDE AREA CONTENT - OPEN --------------------------------->

<section id="lrg-side-area-parent">





	<div class="tbl-form-sec mb-5 mt-4">
			<div class="upld-blk-rec">
				<button type="submit" id="upld_blk-btn">Upload Bulk Record</button>
				<form id="upld_blk_form" method="post" action="{{ action('DegreeController@store') }}">
					<div class="box text-left">
						<input type="file" name="file-5[]" id="file-5" class="inputfile inputfile-4" data-multiple-caption="{count} files selected" multiple />
						<label for="file-5"><figure><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/></svg></figure> <span>Choose a file&hellip;</span></label>
					</div>
				</form>
			</div>
			<div class="add-new-prog mt-4">
				<button type="submit" id="add_new_prog">Add New Degree</button>
			<div class="mt-4" id="add_prog_form">
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

				<form class="mt-4" id="add_prog_form" method="post" action="{{ action('DegreeController@store') }}">
        {{csrf_field()}}
					<div class="form-group">
						<input type="text" name="degree_code" placeholder="Degree Code" />
					</div>
					<div class="form-group">
						<input type="text" name="degree_name" placeholder="Degree Name" />
					</div>
					<div class="form-submit">
						<button type="submit">Save</button>
						<button type="submit">Cancel</button>
					</div>
				</form>
			</div>

			

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
			<form action="{{ route('campus') }}" method="GET" role="search">
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
		      <th scope="col">Degree Name<i class="fas fa-sort-down"></i></th>
			  <th scope="col">Action<i class="fas fa-sort-down"></i></th>

		</tr>
		  </thead>
		  <tbody>
      @foreach($degrees as $degree)
		    <tr>
		      <td>{{$degree->degree_code}}</td>
		      <td>{{$degree->degree_name}}</td>
		    
		      <td>
          <form action="{{ route('degrees.destroy',$degree->id) }}" method="POST">
		  @csrf
            @method('DELETE')
			<a class="green" href="#"><i class="far fa-eye mr-3"></i></a>
		    <a class="green" href="{{ route('degrees.edit', $degree->id) }}"><i class="fas fa-pen mr-3"></i></a>
		   
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
			<li class="page-item">{{$degrees}}</li>
			<!-- <li class="page-item"><a  href="#"><i class="fas fa-arrow-right"></i></a></li> -->
		</ul>
	</div>	
		

    
	</div>

</section>


<!---------------------------------- LARGE SIDE AREA CONTENT - OPEN --------------------------------->





@include('partials.footer')