@extends('database.index')

@section('content')
    <div style="">
        <h1 class="text-center" style="color:white;margin-top:1em;margin-bottom:1em;font-weight:bold">Portfolio</h1>
    </div>
    <div class="container">
        <div class="row">
        @foreach ($portfolios as $portfolio)        
            <div class="col-md-3">
                <a class="portfolio-item">
                  <div class="details">
                    <h4>{{$portfolio->img_name}}</h4>
                    <span>{{$portfolio->description}}</span>
                  </div>
                </a>
                <a href="" class="btn btn-warning btn-lg" style="width: max-content;margin-bottom:5px">Edit</a>
                <a href="/portfolio/{{$portfolio->id}}/destroy" class="btn btn-danger btn-lg" style="width: max-content;">Delete</a>
            </div>

        @endforeach
        </div>
    </div>
@endsection