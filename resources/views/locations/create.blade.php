@extends ('layouts.master')
@section('title', 'Create a Distribution Location')


@section ('content')
<div class="col-sm-8 blog-main">
	<h1>Create a Distribution Location</h1>
	<hr>

	<form method="POST" action="/locations">
		{{ csrf_field() }}

		<div class="form-group">
			<label for="name">Location:</label>
			<input type="text" class="form-control" id="name" name="name">
		</div>

		<div class="form-group">
			<label for="note">Notes:</label>
			<textarea id="note" name="note" class="form-control"></textarea>
		</div>

		<div class="form-check form-check-inline">
			<label class="form-check-label">
			<input type="checkbox" class="form-check-input" name="advertiser_status" value="false">
			Is SDG Advertiser
			</label>
		</div>

		<div class="form-check form-check-inline">
			<label class="form-check-label">
			<input type="checkbox" class="form-check-input" name="lodging_status" value="false">
			Has SDG.com Lodging Listing
			</label>
		</div>		

		<div class="form-group">
		<button type="submit" class="btn btn-primary">Submit</button>
		</div>
		@include ('layouts.errors')

	</form>

</div>
@endsection