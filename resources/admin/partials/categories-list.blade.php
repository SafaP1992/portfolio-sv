@foreach ($categories as $sub_cats)
    <tr>
        <td>
            <h5>{{str_repeat(' -- ', $level)}}{{ $sub_cats->title }}</h5>
        </td>
        <td>
            <h4>
                <code>{{ $sub_cats->slug }}</code>
            </h4>
        </td>
        <td>
            <div class="btn_tbl">
                <a href="{{ route('admin.category.edit',$sub_cats->id) }}" class="btn_tbl_edit">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20px" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                    </svg>
                </a>
                <button class="btn_tbl_delete show_confirm" data-deleteID="{{$sub_cats->id}}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20px" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                    </svg>
                </button>
            </div>
        </td>
    </tr>
    @if (count($sub_cats->childrenRecursive) > 0)
        @include('admin.partials.categories-list', ['categories' => $sub_cats->childrenRecursive, 'level' => $level+1])
    @endif
@endforeach
