@extends('database.index')

@section('content')
    <form action="{{route('about.store')}}" method="post">
        @csrf
        <div class="form-group">
            <label for="">Url Image</label><br>
            <input type="text" name="img_path" style="width: 500px;">
            <button type="submit" class="btn btn-primary">Create</button>
        </div>
    </form>

    
@endsection