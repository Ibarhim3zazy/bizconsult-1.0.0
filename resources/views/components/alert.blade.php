@if (Session::has($type))
<div class="alert alert-{{ $type }} w-100 mt-3 text-center">
    {{ Session::get($type) }}
</div>
@endif