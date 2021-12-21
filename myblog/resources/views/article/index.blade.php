    @extends('incs.base')
    @section('content')
       
        <div class="container">
            <h1 class="text-center my-5">Articles</h1>
            <div class="d-grid gap-2">
                <a href="{{route('create') }}" class="btn btn-lg btn-info my-3">
                    <i class="far fa-file-alt"></i>
                    Create Article</a>
            </div>
            <table class="table table-hover">
                <thead>
                    <tr class="table-active">
                        <th scope="col">ID</th>
                        <th scope="col">Title</th>
                        <th scope="col">created_at</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($articles as $article)
                    <tr>
                        <th>{{$article->id}}</th>
                        <td>{{$article->title}}</td>
                        <td>{{$article->dateFormated()}}</td>
                        <td class="d-flex">
                            <a href="{{ route('edit', $article->id) }}" class="btn btn-warning mx-3">Edit</a>
                            <button type="button" class="btn btn-danger mx-3" onclick="document.getElementById('model-open-{{$article->id}}').style.display='block'">Delete</button>
                            <form action="{{ route('delete', $article->id)}}" method="post">
                                @method('DELETE')
                                @csrf
                                <div class="modal" id="model-open-{{ $article->id}}">
                                    <div class="modal-dialog" role="document">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h5 class="modal-title">Delete</h5>
                                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" onclick="document.getElementById('model-open-{{ $article->id }}').style.display='none'"  >
                                            <span aria-hidden="true"></span>
                                          </button>
                                        </div>
                                        <div class="modal-body">
                                          <p>la suppression est definitive.</p>
                                        </div>
                                        <div class="modal-footer">
                                          <button type="submit" class="btn btn-primary">Delete</button>
                                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" onclick="document.getElementById('model-open-{{$article->id}}').style.display='none'">Close</button>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                            </form>
                        </td>
                    </tr>
                        
                    @endforeach
                </tbody>
            </table>
            <div class="d-flex justify-content-center mt-5">
                {{ $articles->links('vandor.pagination.custom') }}
            </div>
        </div>
    @endsection