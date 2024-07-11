<div class="dropdown">
    <button class="btn btn-sm dropdown-toggle" type="button" id="dr1" data-toggle="dropdown" aria-haspopup="true"
        aria-expanded="false">
        <span class="text-muted sr-only">Action</span>
    </button>
    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dr1">
        @if($hrefShow !== "false")
        <a class="dropdown-item" href="{{ $hrefShow }}">{{
            __('keywords.show') }}</a>
        @endif
        @if($hrefEdit !== "false")
        <a class="dropdown-item" href="{{ $hrefEdit }}">{{
            __('keywords.edit') }}</a>
        @endif
        @if($hrefDelete !== "false")
        <form action="{{ $hrefDelete }}" method="POST">
            @csrf
            @method('DELETE')
            <button class="dropdown-item text-danger"
                onclick="return confirm('{{ __('keywords.are_you_sure_to_delete_this_record') }}')">{{
                __('keywords.remove') }}</button>
        </form>
        @endif
    </div>
</div>