@extends('student.mainStudent')

@section('kontent')

<form action="/student/update/{{$student->id}}" method="post">
	@csrf

	<div class="col-md-4">

	<!-- nis -->
	<div class="form-group">
		<label>nis :</label>
		<input type="text" name="nis" class="form-control" value="{{ $student->nis }}">
	</div>

	<!-- name -->
	<div class="form-group">
		<label>Name :</label>
		<input type="text" name="name" class="form-control" value="{{ $student->name }}">
    </div>
    
    <!-- rayon -->
	<div class="form-group">
		<label>Rayon :</label>
		<select class="form-control" name="rombel" value="{{ $student->rayon }}">
			<option disabled selected="" value="{{ $student->rayon }}">{{ $student->rayon }}</option>
			@foreach($selectRayon as $s)
				<option value="{{$s}}">{{$s}}</option>
			@endforeach
		</select>
	</div>

	<!-- rombel -->
	<div class="form-group">
		<label>Rombel :</label>
		<select class="form-control" name="rombel" value="{{ $student->rombel }}">
			<option disabled selected="" value="{{ $student->rombel }}">{{ $student->rombel }}</option>
			@foreach($selectRombel as $s)
				<option value="{{$s}}">{{$s}}</option>
			@endforeach
		</select>
	</div>
	
	</div>

	<br>

	<div class="form-inline">
		<div class="col-md-2">
			<a href="/student" class="btn btn-danger btn-block">Cancel</a>
		</div>

		<div class="col-md-2">
			<input type="submit" value="Update" class="btn btn-primary btn-block">
		</div>

	</div>
</form>
@stop