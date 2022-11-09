@foreach ($categories as $sub_cats)
    <tr>
        <td>{{str_repeat( ' -- ', $level)}}{{$sub_cats->title}}</td>
        <td>{{$sub_cats->slug}}</td>
        <td>{{$sub_cats->photo_id}}</td>
        <td>
            <a href="{{route('admin.categoryProduct.edit', $sub_cats)}}" class="btn btn-danger rounded">
                <svg xmlns="http://www.w3.org/2000/svg" style="width: 20px; height: 20px;" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                </svg>
            </a>
            <a href="{{route('admin.categoryProduct.delete', $sub_cats)}}" class="btn btn-warning rounded">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" style="width: 20px; height: 20px;" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                </svg>
            </a>
        </td>
    </tr>
    @if (count($sub_cats->childrenRecursiveProducts) > 0)
        @include('admin.partials.categories-list', ['categories' => $sub_cats->childrenRecursiveProducts, 'level' => $level+1])
    @endif
@endforeach
