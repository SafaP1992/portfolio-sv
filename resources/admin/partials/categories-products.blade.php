@if(isset($selected_category))
    @foreach($categories as $sub_cats)
        @if(isset($filmsCategories))
            <option value="{{$sub_cats->id}}" {{ in_array($sub_cats->id, $filmsCategories) ? "selected" : "" }}>{{str_repeat('-----', $level)}} {{$sub_cats->title}}</option>
        @endif
        @if(isset($categories))
            <option value="{{$sub_cats->id}}" {{ $sub_cats->id === $categories ? 'selected' : '' }}>{{str_repeat('-----', $level)}} {{$sub_cats->title}}</option>
        @endif
{{--        <option value="{{$sub_cats->id}}">{{str_repeat('-----', $level)}} {{$sub_cats->title}}</option>--}}
        @if (count($sub_cats->childrenRecursiveProducts) > 0)
            @include('backend.partials.categories', ['categories' => $sub_cats->childrenRecursiveProducts, 'level' => $level+1, 'selected_category'=>$selected_category])
        @endif
    @endforeach
@else
    @foreach ($categories as $sub_cats)
        <option value="{{$sub_cats->id}}">{{str_repeat('-- ', $level)}}{{$sub_cats->title}}</option>
        @if (count($sub_cats->childrenRecursiveProducts) > 0)
            @include('admin.partials.categories', ['categories' => $sub_cats->childrenRecursiveProducts, 'level' => $level+1])
        @endif
    @endforeach
@endif
