@extends('layouts.app1')

@section('content')

<h1 style="text-align: center;">Doner Posts</h1>

<div class="container">
    <div class="row">
        <div class="col-md-12" style="border:solid 2px; border-radius: 20px; background-color:rgb(33,37,41); ">
            <table class="table table-dark table-hover" >
                <thead>
                  <tr>
                    <th scope="col">Doner Post Id</th>
                    <th scope="col">Doner Name</th>
                    <th scope="col">Doner Blood Type</th>
                    <th scope="col">Doner Address</th>
                    <th scope="col">Doner Post title</th>
                    <th scope="col">Doner Description</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($posts as $post)
                  <tr>
                    <td>{{$post->id}}</td>
                    <td>{{$post->donername}}</td>
                    <td>{{$post->donerbloodtype}}</td>
                    <td>{{$post->doneraddress}}</td>
                    <td>{{$post->donerposttitle}}</td>
                    <td>{{$post->donerpostdescription}}</td>
                    <td><a href="{{route('postdelete',$post->id)}}" style="width:100%;" type="button" class="btn btn-primary btn-sm mb-2" data-toggle="modal" data-target="#bd-example-modal-lg">Delete</a></td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
    </div>
</div>

@endsection
