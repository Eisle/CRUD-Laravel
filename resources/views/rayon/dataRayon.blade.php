@extends('rayon.mainRayon')

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
<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#inputrayon">
  <i class="fa fa-plus-circle" aria-hidden="true"></i> Add New
</button>

<!-- Modal -->
<div class="modal fade" id="inputrayon" tabindex="-1" role="dialog" aria-labelledby="inputrayonlabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
    		<div class="modal-header">
    		<h5 class="modal-title" id="inputrayonlabel">Input Data Rayon</h5>
	    		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
	    			<span aria-hidden="true">&times;</span>
	    		</button>
    		</div>

    		<div class="modal-body">
    			<form  method="post" action="/rayon/add">
				@csrf

				<!-- rayon -->
				<div class="form-group">
					<label>Rayon :</label>
					<input type="text" name="rayon" class="form-control">
				</div>

				<!-- mentor -->
				<div class="form-group">
					<label>Mentor :</label>
					<input type="text" name="mentor" class="form-control">
				</div>

                <!-- room -->
				<div class="form-group">
					<label>Room :</label>
					<input type="text" name="room" class="form-control">
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

<!-- table rayon -->
<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>#</th>
			<th>Rayon</th>
			<th>Mentor</th>
            <th>Room</th>
			<th>Action</th>
		</tr>
	</thead>

	<tbody>
		@foreach ($rayon as $s)

		<tr>
			<td>{{ $loop->iteration }}</td>
			<td>{{ $s->rayon }}</td>
			<td>{{ $s->mentor }}</td>
            <td>{{ $s->room }}</td>
			<td>
				<a href="/rayon/edit/{{ $s->id }}" class="btn btn-warning btn-sm"><i class="fa fa-pencil" aria-hidden="true"></i>Edit</a> |
				<a href="/rayon/delete/{{ $s->id }}" class="btn btn-danger btn-sm"><i class="fa fa-trash" aria-hidden="true"></i>Delete</a>
			</td>
		</tr>
		@endforeach

	</tbody>
</table>

{{$rayon->links()}}
@stop