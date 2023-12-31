<div class="alert alert-danger alert-dismissible" role="alert" id="liveAlert">
    @if (count($errors) > 0)
    <strong>Something went wrong</strong>
    <br><br>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    @endif
</div>