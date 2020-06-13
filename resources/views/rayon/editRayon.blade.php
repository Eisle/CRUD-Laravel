@extends('rayon.mainRayon')

@section('kontent')

<form action="/rayon/update/{{$rayon->id}}" method="post">
	@csrf

	<div class="col-md-4">

	<!-- rayon -->
	<div class="form-group">
		<label>Rayon :</label>
		<input type="text" name="rayon" class="form-control" value="{{ $rayon->rayon }}">
	</div>

	<!-- mentor -->
	<div class="form-group">
		<label>Mentor :</label>
		<input type="text" name="mentor" class="form-control" value="{{ $rayon->mentor }}">
    </div>
    
    <!-- room -->
	<div class="form-group">
		<label>Room :</label>
		<input type="text" name="room" class="form-control" value="{{ $rayon->room }}">
	</div>
	
	</div>

	<br>

	<div class="form-inline">
		<div class="col-md-2">
			<a href="/rayon" class="btn btn-danger btn-block">Cancel</a>
		</div>

		<div class="col-md-2">
			<input type="submit" value="Update" class="btn btn-primary btn-block">
		</div>

	</div>
</form>
@stop