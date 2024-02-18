@if (Session::get('failed'))
<div class="alert alert-danger">
    {{ Session::get('failed') }}
</div>
@endif
@if (Session::get('success'))
<div class="alert alert-success">
    {{ Session::get('success') }}
</div>
@endif
