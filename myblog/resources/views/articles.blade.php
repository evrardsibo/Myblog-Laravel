    @extends('incs.base')
    @section('content')
        <div class="p-5 mb-4 bg-light rounded-3">
            @dump($article->comments)
            <h2 class="dislpay-4 text-center">{{ $article->title }}</h2>
            <div class="d-flex justify-content-center my-5">
                <a href="{{ route('articles')}}" class="btn btn-primary">
                    <i class="fas fa-arrow-left"></i>
                    Retour
                </a>
            </div>
            <h5 class="dislpay-4 text-center">{{ $article->subtitle }}</h5>
            <div class="d-flex justify-content-center">
                <span class="badge bg-info">{{$article->id}}</span>
            </div>
        </div>
        <div class="container">
            <p class="text-center row justify-content-center">
                <img src="{{ Voyager::image($article->image ) }}" alt="" class="w-25 my-5">
                {{-- {!!$article->content !!} --}}
                {{ Markdown::parse($article->content)}}
            </p>

        </div>
    @endsection