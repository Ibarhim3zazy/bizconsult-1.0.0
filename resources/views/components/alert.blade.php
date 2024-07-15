@if (Session::has($session))
<div class="alert alert-{{ $type }} w-100 mt-3 text-center">
    {{ Session::get($session) }}
</div>
@endif