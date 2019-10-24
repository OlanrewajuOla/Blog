@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">

    	<form action="{{url('/submitmessage')}}" method="POST">

    		@csrf

    		@if ($errors->any())
    		<div class=" alert alert-danger">
    			@foreach ($errors->all() as $error)
    			<li>{{$error}}</li>
    			@endforeach
    		</div>
    		@endif

    		<div class="col-lg-6">

    		<div class="form-group ">
    			<label> Title</label>
    			<input type="text" name="title" class="form-control">
    		</div>
    		
    		<div class="form-group">
    			<label> Body</label>
    			<input type="text" name="body" class="form-control">
    		</div>

    		<input  type="submit" name="Submit" class="btn btn-primary"> 

    	</div>

    	</form>

    </div>
</div>
@endsection
