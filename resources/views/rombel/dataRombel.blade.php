@extends('rombel.mainRombel')

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
<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#inputrombel">
  <i class="fa fa-plus-circle" aria-hidden="true"></i> Add New
</button>

<!-- Modal -->
<div class="modal fade" id="inputrombel" tabindex="-1" role="dialog" aria-labelledby="inputrombellabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
    		<div class="modal-header">
    		<h5 class="modal-title" id="inputrombellabel">Input Data Rombel</h5>
	    		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
	    			<span aria-hidden="true">&times;</span>
	    		</button>
    		</div>

    		<div class="modal-body">
    			<form  method="post" action="/rombel/add">
				@csrf

				<!-- rombel -->
				<div class="form-group">
					<label>Rombel :</label>
					<input type="text" name="rombel" class="form-control">
				</div>

				<!-- laboran -->
				<div class="form-group">
					<label>Laboran :</label>
					<input type="text" name="laboran" class="form-control">
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

<br/><br>

<!-- table rombel -->
<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>#</th>
			<th>Rombel</th>
			<th>Laboran</th>
			<th>Action</th>
		</tr>
	</thead>

	<tbody>
		@foreach ($rombel as $s)

		<tr>
			<td>{{ $loop->iteration }}</td>
			<td>{{ $s->rombel }}</td>
			<td>{{ $s->laboran }}</td>
			<td>
				<a href="/rombel/edit/{{ $s->id }}" class="btn btn-warning btn-sm"><i class="fa fa-pencil" aria-hidden="true"></i>Edit</a> |
				<a href="/rombel/delete/{{ $s->id }}" class="btn btn-danger btn-sm"><i class="fa fa-trash" aria-hidden="true"></i>Delete</a>
			</td>
		</tr>
		@endforeach

	</tbody>
</table>

{{$rombel->links()}}
@stop