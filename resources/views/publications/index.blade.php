@extends('layouts.master')
@section('content')

			<div class="col-md-8">
				<div class="page-header">
					<h1>Publications</h1>
				</div>
				<ul class="list-group">
					@foreach ($publications as $publication)
						<li class="list-group-item">
							<h2 class="list-group-item-heading">Market: {{ $publication->market->market_abbr }}</h2
							<p class="list-group-item-text">Year: {{ $publication->year }}<br>
							Type: {{ $publication->publicationType->type }}<br>
							Print: {{ $publication->print }}<br>
							Cover: {{ $publication->cover }}</p>
						</li>
					@endforeach
				</ul>
			</div>
@endsection