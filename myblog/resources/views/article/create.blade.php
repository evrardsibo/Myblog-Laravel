@extends('incs.base')
@section('content')
    <div class="container">
        <h1 class="text-center mt-5">New Article</h1>
        <form method="POST" action="{{ route('adminstore')}}">
            @csrf
            <fieldset>
              <legend>Legend</legend>
              <div class="form-group">
                <label for="exampleInputEmail1" class="form-label mt-4">Title</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="exampleInputEmail1" name="title" placeholder="Title">
                @error('title')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{$message}}</strong>
                  </span>
                    
                @enderror
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1" class="form-label mt-4">Subtitle</label>
                <input type="text" class="form-control @error('subtitle') is-invalid @enderror" id="exampleInputPassword1" placeholder="Subtitle" name="subtitle">
                @error('subtitle')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{$message}}</strong>
                  </span>
                    
                @enderror
              </div>
              <div class="form-group">
                <label for="exampleTextarea" class="form-label mt-4">Content</label>
                <textarea class="form-control @error('content') is-invalid @enderror" id="exampleTextarea" rows="3" name="content"></textarea>
                @error('content')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{$message}}</strong>
                  </span>
                    
                @enderror
              </div>
              <button type="submit" class="btn btn-primary mt-2">Submit</button>
            </fieldset>
          </form>
    </div>
@endsection