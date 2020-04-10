@extends('database.index')

@section('content')
    <div class="container">
        <div class="row">
            <h1 class="text-center" style="color:white;margin-top:1em;margin-bottom:1em;font-weight:bold">About</h1>
            <a class="btn btn-sm btn-danger" href="{{route('about.create')}}">Create</a>
        </div>
    </div>
    <div class="container">
        {{-- //about img --}}
        @foreach ($abouts as $abouts)
        <div class="row" style="display:flex">
            <div class="col-lg-8">
                <img src="{{$abouts->img_path}}" style="border:solid 1px white" alt="">
            </div>
            <div class="col-lg-3" style="display: flex;flex-direction: column;justify-content: center;align-items: center">
                <a href="/about/{{$abouts->id}}/edit" class="btn btn-warning btn-lg" style="width: max-content;margin-bottom:5px">Edit</a>
                <a href="/about/{{$abouts->id}}/destroy" class="btn btn-danger btn-lg" style="width: max-content;">Delete</a>
            </div>
        </div>
        @endforeach
    </div>
@endsection