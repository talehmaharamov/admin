<td class="text-center">
    <div class="dropdown">
        <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="fas fa-cog"></i>
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="">
            <div class="d-flex justify-content-center align-items-center">
                <a href="{{ route('backend.selectionStatus',['id'=>$selection->id]) }}"
                   title="@lang('backend.status')">
                    <input type="checkbox" id="switch"
                           switch="primary" {{ $selection->status == 1 ? 'checked' : '' }} />
                    <label for="switch4"></label>
                </a>
            </div>
            <a class="dropdown-item" href="{{ route('backend'.$selection.'edit',[$selection=>$selection->id]) }}">@lang('backend.edit')</a>
            <a class="dropdown-item text-red"
               href="{{ route('backend.'.$selection.'Delete',['id'=>$selection->id]) }}">@lang('backend.delete')</a>
        </div>
    </div>
</td>
