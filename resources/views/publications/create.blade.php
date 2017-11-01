@extends('layouts.master')
@section('content')
<div class="col-sm-8">
	<h1>Create a Publication</h1>
	<hr>

	<form method="POST" action="/publications">
		{{ csrf_field() }}

		<div class="form-group">
			<label for="market">Market</label>
			<select class="form-control" id="market">
				<option value="market_id">Select Market Name</option>
			</select>
		</div>
		<div class="form-group">
			<label for="year">Year</label>
			<select class="form-control" id="year">
				<option value="year">Select Year</option>
			</select>
		</div>

		<div class="form-group">
			<legend class="col-form-legend">Publication Type</legend>
			<div class="form-check">
				<label class="form-check-label">
					<input class="form-check-input" type="radio" name="publicationTypes" id="1" value="1">
					Guide
				</label>
			</div>
			<div class="form-check">
				<label class="form-check-label">
					<input class="form-check-input" type="radio" name="publicationTypes" id="2" value="1">
					Coupon Book
				</label>
			</div>
			<div class="form-check">
				<label class="form-check-label">
					<input class="form-check-input" type="radio" name="publicationTypes" id="3" value="1">
					Map
				</label>
			</div>
		</div>

		<div class="form-group">
			<legend class="col-form-legend">Printing</legend>
			<div class="form-check">
				<label class="form-check-label">
					<input class="form-check-input" type="radio" name="printing" id="1" value="1">
					1
				</label>
			</div>
			<div class="form-check">
				<label class="form-check-label">
					<input class="form-check-input" type="radio" name="printing" id="2" value="2">
					2
				</label>
			</div>			
		</div>

		<div class="form-group">
			<label for="cover">Special Cover</label>
			<input type="text" class="form-control" id="cover" name="cover">
		</div>

		<div class="form-group">
		<button type="submit" class="btn btn-primary">Submit</button>
		</div>

	</form>
</div>
@endsection