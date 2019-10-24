@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">

    	@if(Session::has('Success'))

    		<div class="alert alert-success">
    			{{Session::get('Success')}}
    		</div>

    	@endif
    </div>
</div>
@endsection
