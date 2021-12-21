    @if ($message = Session::get('success'))

        <div class="alert alert-success alert-block">
            <button type="button" class="btn-close" aria-label="Close"></i></button>
            <strong>{{ $message }}</strong>
        </div>
    @endif