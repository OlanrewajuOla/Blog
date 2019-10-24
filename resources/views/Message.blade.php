@extends('layouts.app')

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">

        @if(Session::has('Success'))

            <div class="alert alert-success">
                {{Session::get('Success')}}
            </div>

        @endif

        @if(Session::has('error'))

            <div class="alert alert-danger">
                {{Session::get('error')}}
            </div>

        @endif
    

        <div class="panel panel-primary">
            
            <div class="panel-heading">
                <h2>All messages</h2>
            </div>
            
            <div class="panel-body">
                
                <table class="table">
                    <tr>
                        <td class="col-span-3"><center><a href="{{url('addmessage')}}">Create</a></center></td>
                    </tr>
                    <tr>
                        <th> title</th>
                         <th> body</th>
                          <th> created_at</th>
                          <th> </th>
                          <th> </th>
                    </tr>

                @foreach($data as $datas)
                    <tr>
                       
                        <td> {{$datas->title}}</td>
                        <td> {{$datas->body}}</td>
                        <td> {{$datas->created_at}}</td>
                        <td><a href="{{url('edit/'.$datas->id)}}"><i class="fa fa-edit"></i></a></td>
                        <td><a href="{{url('delete/'.$datas->id)}}"><i class="fa fa-trash btn btn-danger"></i></a></td>
                       
                    </tr>
                @endforeach
                </table>

            </div>


        </div>


    </div>
</div>


@endsection
