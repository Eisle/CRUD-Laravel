@extends('rombel.mainRombel')

@section('kontent')

<form action="/rombel/update/{{$rombel->id}}" method="post">
	@csrf

	<div class="col-md-4">

	<!-- rombel -->
	<div class="form-group">
		<label>rombel :</label>
		<input type="text" name="rombel" class="form-control" value="{{ $rombel->rombel }}">
	</div>

	<!-- laboran -->
	<div class="form-group">
		<label>Laboran :</label>
		<input type="text" name="laboran" class="form-control" value="{{ $rombel->laboran }}">
	</div>
	
	</div>

	<br>

	<div class="form-inline">
		<div class="col-md-2">
			<a href="/rombel" class="btn btn-danger btn-block">Cancel</a>
		</div>

		<div class="col-md-2">
			<input type="submit" value="Update" class="btn btn-primary btn-block">
		</div>

	</div>
</form>
@stop