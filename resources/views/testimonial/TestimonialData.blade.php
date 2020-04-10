@extends('database.index')

@section('content')

<div class="row">
    @foreach ($testimonials as $testimonial)

        <div class="col-md-6">
            <div class="">
                <div class=""><img src="{{$testimonial->img_path}}" alt=""></div>
                <h4>{{$testimonial->name}}</h4>
                <span>{{$testimonial->description}}</span>
                <a href="" class="btn btn-warning btn-lg" style="width: max-content;margin-bottom:5px">Edit</a>
                <a href="/testimonial/{{$testimonial->id}}/destroy" class="btn btn-danger btn-lg" style="width: max-content;">Delete</a>
            </div>
        </div>

    @endforeach
</div>
@endsection