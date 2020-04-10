@extends('database.index');

@section('content')
    <div style="">
        <h1 class="text-center" style="color:white;margin-top:1em;margin-bottom:1em;font-weight:bold">Edit About</h1>
    </div>
    <form action="/about/{{$abouts->id}}/update" method="post">
        @csrf
        <label for="">{{$abouts->img_path}}</label><br>
        <input type="text" value="{{$abouts->img_path}}" name="img_path" style="width: 500px;">
        <button type="submit" class="btn btn-primary">Edit</button>
    </form>
@endsection 