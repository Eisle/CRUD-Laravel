@extends('student.mainStudent')

@section('kontent')

<!-- alert simpan & update -->
@if(session('sukses'))
	<div class="alert alert-success" role="alert">
		{{session('sukses')}}	
	</div>
@endif

<!-- alert delete -->
@if(session('delete'))
	<div class="alert alert-danger" role="alert">
		{{session('delete')}}	
	</div>
@endif

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#inputStudent">
  <i class="fa fa-plus-circle" aria-hidden="true"></i> New student
</button>

<!-- Modal -->
<div class="modal fade" id="inputStudent" tabindex="-1" role="dialog" aria-labelledby="inputStudentLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
    		<div class="modal-header">
    		<h5 class="modal-title" id="inputStudentLabel">Input Student</h5>
	    		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
	    			<span aria-hidden="true">&times;</span>
	    		</button>
    		</div>

    		<div class="modal-body">
    			<form  method="post" action="/student/add">
					@csrf

					<!-- nis -->
					<div class="form-group">
						<label>Nis :</label>
						<input type="text" name="nis" class="form-control">
					</div>

					<!-- name -->
					<div class="form-group">
						<label>Name :</label>
						<input type="text" name="name" class="form-control">
					</div>

					<!-- rombel -->
					<div class="form-group">
						<label>Rombel :</label>
						<select class="form-control" name="rombel" class="selectpicker" data-live-search="true">
							<option disabled selected="">Choose ur Rombel</option>
							@foreach($selectRombel as $s)
							<option value="{{$s}}">{{$s}}</option>
							@endforeach
						</select>
					</div>
					
					<!-- rayon -->
					<div class="form-group">
						<label>Rayon :</label>
						<select class="form-control" name="rayon">
							<option disabled selected="">Choose ur Rayon</option>
							@foreach($selectRayon as $s)
							<option value="{{$s}} ">{{$s}}</option>
							@endforeach
						</select>
					</div>
    		</div>
    		<div class="modal-footer">
    			<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
    			<button type="submit" class="btn btn-primary">Save</button>
    		</div>
    		</form>
    	</div>
    </div>
</div>


<br><br>
<!-- table student -->
<table id="datatable" class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>#</th>
			<th>NIS</th>
			<th>Name</th>
			<th>Rombel</th>
			<th>Rayon</th>
			<th>Action</th>
		</tr>
	</thead>

	<tbody>
		@foreach ($student as $s)

		<tr>
			<td>{{ $loop->iteration }}</td>
			<td>{{ $s->nis }}</td>
			<td>{{ $s->name}}</td>
			<td>{{ $s->rombel }}</td>
			<td>{{ $s->rayon }}</td>
			<td>
				<a href="/student/edit/{{$s->id}}" class="btn btn-warning btn-sm"><i class="fa fa-pencil" aria-hidden="true"></i> Edit</a>
				<a href="/student/delete/{{$s->id}}" class="btn btn-danger btn-sm"><i class="fa fa-trash" aria-hidden="true"></i> Delete</a>
			</td>
		</tr>
		@endforeach

	</tbody>
</table>

{{$student->links()}}

@stop