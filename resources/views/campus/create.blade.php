@include('partials.head')
@include('partials.navbar')
@include('partials.asidebar')
<!---------------------------------- LARGE SIDE AREA CONTENT - OPEN --------------------------------->

<section id="lrg-side-area-parent">

<div class="tbl-form-sec mb-5 mt-4">
			<div class="upld-blk-rec">
				<button type="submit"  id="add_new_prog">Upload Bulk Record</button>
				<form class="mt-4" id="add_prog_form" method="post" action="{{ route('campus') }}" enctype="multipart/form-data">
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
        <button type="submit" id="add_new_prog">Add New Campus</button>
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

				<form class="mt-4" id="add_prog_form" method="post" action="{{ action('CampusController@store') }}">
        {{csrf_field()}}>
					<div class="form-group">
						<input type="text" name="name" placeholder="Name" />
					</div>
					<div class="form-group">
						<input type="number" name="phone" placeholder="Phone" />
          </div>
          <div class="form-group">
						<input type="text" name="fax" placeholder="Fax" />
					</div>
					<div class="form-group">
						<input type="email" name="email" placeholder="Email" />
          </div>
         <div class="form-group">
						<input type="text" name="address" placeholder="address" />
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
		      <th scope="col">Name<i class="fas fa-sort-down"></i></th>
          <th scope="col">Phone<i class="fas fa-sort-down"></i></th>
          <th scope="col">Fax<i class="fas fa-sort-down"></i></th>
          <th scope="col">Email<i class="fas fa-sort-down"></i></th>
          <th scope="col">Address<i class="fas fa-sort-down"></i></th>
          <th scope="col">Action<i class="fas fa-sort-down"></i></th>

		</tr>
		  </thead>
		  <tbody>
      @foreach($campuses as $campus)
		    <tr>
		      <td>{{$campus->name}}</td>
          <td>{{$campus->phone}}</td>
          <td>{{$campus->fax}}</td>
		      <td>{{$campus->email}}</td>
          <td>{{$campus->address}}</td>
		      <td>
          <form action="{{ route('campuses.destroy',$campus->id) }}" method="POST">
		  @csrf
            @method('DELETE')
			<a href="#" class="green"><i class="far fa-eye mr-3"></i></a>
		    <a href="{{ route('campuses.edit', $campus->id) }}" class="green"><i class="fas fa-pen mr-3"></i></a>
           <button class="red" onclick="return confirm('Are you sure?')" ><i class="fas fa-trash-alt"></i></button>
			
		      </td>
		    </tr>
		  @endforeach
		  </tbody>
		
		</table>
		<br><br>
		
		
		</form>

		<div class="tbl-pagination">
			<ul class="pagination">
			  <!-- <li class="page-item"><a  href="#"><i class="fas fa-arrow-left"></i></a></li> -->
			  <li class="page-item">{{$campuses}}</li>
			 <!-- <li class="page-item"><a  href="#"><i class="fas fa-arrow-right"></i></a></li> -->
			</ul>
		</div>	
	

	</div>
	
</section>


<!---------------------------------- LARGE SIDE AREA CONTENT - OPEN --------------------------------->




@include('partials.footer')
