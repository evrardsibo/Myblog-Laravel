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
                            <a href="" class="btn btn-warning mx-3">Edit</a>
                            <a href="" class="btn btn-danger mx-3">Delete</a>
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