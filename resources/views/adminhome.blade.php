@extends('layouts.app1')

@section('content')
<h1 style="text-align: center;">Users</h1>
<h1 style="text-align: left;" class="m-5">role =><br> 0 = Blood Doner <br> 1 = Blood Needer <br> 2 = Admin</h1>

<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="col-md-12" style="border:solid 2px; border-radius: 20px; background-color:rgb(33,37,41); ">
                <table class="table table-dark table-hover" >
                    <thead>
                      <tr>
                        <th scope="col">User Id</th>
                        <th scope="col">User Name</th>
                        <th scope="col">User role</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
@foreach ($posts as $post)
                      <tr>
                        <td>{{$post->id}}</td>
                        <td>{{$post->name}}</td>
                        <td>{{$post->role}}</td>
                        <td><a href="{{route('delete',$post->id)}}" style="width:100%;" type="button" class="btn btn-primary btn-sm mb-2" data-toggle="modal" data-target="#bd-example-modal-lg">Delete</a></td>
                    </tr>
@endforeach
                    </tbody>
                  </table>
                </div>
        </div>
    </div>
</div>



@endsection
