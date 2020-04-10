@extends('database.index')


@section('content')
    <div style="">
        <h1 class="text-center" style="color:white;margin-top:1em;margin-bottom:1em;font-weight:bold">Service</h1>
    </div>
    <div class="container">
        @foreach ($services as $service)
        <div class="row" style="display:flex">

            <div class="col-lg-6">
                <h2>{{$service->name}}</h2>
                <p>{{$service->description}}</p>
            </div>

            <div class="col-lg-6" style="display: flex;flex-direction: column;justify-content: center;align-items: center">
                <a href="" class="btn btn-warning btn-lg" style="width: max-content;margin-bottom:5px">Edit</a>
                <a href="/service/{{$service->id}}/destroy" class="btn btn-danger btn-lg" style="width: max-content;">Delete</a>
            </div>
            
        </div>
        @endforeach
    </div>
@endsection