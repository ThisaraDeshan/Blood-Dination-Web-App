@extends('layouts.my')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 style="text-shadow: 4px 4px 10px #000000;">Notifications</h1>
        </div>
        <div class="col-12">
            <table class="table table-hover" style="background: linear-gradient(245.59deg, #ED213A 28.53%, #93291E 75.52%);">
                <thead>
                  <tr>
                    <th style="text-align: center; color:#fff;" scope="col">Needer Name</th>
                    <th style="text-align: center; color:#fff;" scope="col">Needer Message</th>
                    <th style="text-align: center; color:#fff;" scope="col">Date & Time</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($rows as $row)
                        <tr>
                            <td style="text-align: center; color:#fff;">{{$row->needername}}</td>
                            <td style="text-align: center; color:#fff;">{{$row->needermessage}}</td>
                            <td style="text-align: center; color:#fff;">{{$row->updated_at}}</td>
                        </tr>
                    @endforeach
                </tbody>
              </table>
        </div>
    </div>
</div>

@endsection
