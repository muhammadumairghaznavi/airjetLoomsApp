@if ($message = Session::get('success'))
<div class="alert alert-success alert-dismissible show fade">
    {{ $message }}
    <button type="button" class="btn-close" data-bs-dismiss="alert"
        aria-label="Close"></button>
</div>
@endif


@if ($message = Session::get('error'))
<div class="alert alert-danger alert-dismissible show fade">
    {{ $message }}
    <button type="button" class="btn-close" data-bs-dismiss="alert"
        aria-label="Close"></button>
</div>
@endif

@if ($message = Session::get('warning'))
<div class="alert alert-warning alert-dismissible show fade">
    {{ $message }}
    <button type="button" class="btn-close" data-bs-dismiss="alert"
        aria-label="Close"></button>
</div>
@endif

@if ($message = Session::get('info'))
<div class="alert alert-info alert-dismissible show fade">
    {{ $message }}
    <button type="button" class="btn-close" data-bs-dismiss="alert"
        aria-label="Close"></button>
</div>
@endif

@if ($errors->any())
<div class="alert alert-danger alert-dismissible show fade">
    {{ $message }}
    <button type="button" class="btn-close" data-bs-dismiss="alert"
        aria-label="Close"></button>
</div>
@endif
