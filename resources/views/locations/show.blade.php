@extends ('layouts.master')
@section('title', $location->name)

@section ('content')
<div class="col-sm-8 blog-main">
	<h1>{{ $location->name }}</h1>
	{{ $location->notes }}

</div>	
@endsection