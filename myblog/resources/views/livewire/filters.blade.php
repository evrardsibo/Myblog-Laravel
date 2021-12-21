<div>
    <div class="row">
        <div class="col-10">
            <div class="articles row justify-content-center">
                @foreach ($articles as $article)
                    <div class="col-md-6">
                        <div class="card my-3">
                            <div class="card-body">
                                <h5 class="card-title">{{ $article->title }}</h5>
                                <span class="badge bg-info">{{$article->id}}</span>
                                <h5 class="card-text">{{ $article->subtitle }}</h5>
                                 <a href="{{ route('article', $article->slug) }}" class="btn btn-primary">
                                lire la suite
                                <i class="fas fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="col-2 pt-3">
            @foreach ($comments as $comment)
                <div class="form-group">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" name="" id="{{$comment->id}}" class="custom-control-input" wire:model="filterIsActif.{{$comment->id}}">
                        <label for="{{$comment->id}}">
                            <i class="fas fa-{{$comment->icon}}"></i>
                            {{$comment->label}}</label>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
