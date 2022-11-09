@extends('layouts.master')

@section('breadcumb-title')
    {{ __('titles.categories') }}
@endsection

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">

                @if(session('success'))
                    <div class="alert alert-success" dir="rtl">
                        <p>{{ session('success') }}</p>
                    </div>
                @endif

                <div class="table-responsive">
                    <table class="table table-hover mb-0">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>عنوان</th>
                                <th>نشانی اینترنتی</th>
                                <th>مادر دسته بندی</th>
{{--                                <th>توضیحات متا</th>--}}
{{--                                <th>عنوان متا</th>--}}
{{--                                <th>کلمات کلیدی</th>--}}
                                <th>تصویر شاخص</th>
                                <th>اقدام</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $key => $category)
                                <tr>
                                    <td>{{$key}}</td>
                                    <td>{{$category->title}}</td>
                                    <td>{{$category->slug}}</td>
                                    <td>{{$category->parent_id}}</td>
                                    {{-- <td>{{$category->childrenRecursive}}</td> --}}

                                    {{-- @if (count($category->childrenRecursive) > 0)
                                        @include('admin.partials.categories-list', ['categories' => $category->childrenRecursive, 'level'=>1])
                                    @endif --}}

{{--                                    <td>{{$category->meta_title}}</td>--}}
{{--                                    <td>{{$category->meta_description}}</td>--}}
{{--                                    <td>{{$category->meta_keyword}}</td>--}}
                                    <td>{{$category->photo_id}}</td>
                                    <td>
                                        <a href="{{route('admin.category.edit', $category)}}" class="btn btn-danger rounded">
                                            <svg xmlns="http://www.w3.org/2000/svg" style="width: 20px; height: 20px;" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                            </svg>
                                        </a>
                                        <a href="{{route('admin.category.delete', $category)}}" class="btn btn-warning rounded">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" style="width: 20px; height: 20px;" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                            </svg>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div> <!-- end table-responsive-->
                <div class="mt-3">
                    {{$categories->links()}}
                </div>
            </div>
        </div> <!-- end card -->
    </div>
</div>
@endsection
