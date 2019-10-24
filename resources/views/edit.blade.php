@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">

        @foreach($data as $datas)

    	<form action="{{url('/updatemessage')}}" method="POST">

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
    			<input type="text" name="title" class="form-control" value="{{$datas->title}}">
    		</div>
    		
    		<div class="form-group">
    			<label> Body</label>
    			<input type="text" name="body" class="form-control" value="{{$datas->body}}">
    		</div>

            <input type="hidden" name="id" value="{{$datas->id}}">

    		<input  type="submit" name="Submit" class="btn btn-primary" > 



    	</div>

    	</form>
@endforeach
    </div>
</div>
@endsection
