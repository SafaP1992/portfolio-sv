@extends('layouts.master')

@section('breadcumb-title')
    {{ __('titles.posts') }}
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
                                <th>تصویر</th>
                                <th>عنوان</th>
                                <th>نویسنده</th>
                                <th>وضعیت</th>
{{--                                <th>تاریخ ایجاد</th>--}}
                                <th>تعداد بازدید</th>
                                <th>عملیات</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $product)
                                <tr>
                                    @if ($product->photo_id)
                                        <td><img src="{{asset(Storage::url($product->photo->path))}}" class="img-fluid img-thumb rounded shadow"/></td>
                                    @else
                                        <td><img src="{{ asset('assets/images/users/avatar-2.jpg') }}" class="img-thumb rounded shadow" /></td>
                                    @endif
                                    <td><a href="{{ route('admin.product.edit', $product) }}">{{ $product->title }}</a></td>
                                    <td>{{ $product->user?->name }}</td>
                                    @if ($product->status == 0)
                                        <td><span class="badge badge-danger">عدم انتشار</span></td>
                                    @else
                                        <td><span class="badge badge-success">انتشار</span></td>
                                    @endif
{{--                                    <td>{{ Hekmatinasser\Verta\Verta::instance($product->created_at)->format('%d %B، %Y - ساعت: H:i') }}</td>--}}

                                    <td>{{ $post->vzt()->count(); }}</td>

                                    <td>
                                        <a href="{{route('admin.product.edit', $product)}}" class="btn btn-danger rounded">
                                            <svg xmlns="http://www.w3.org/2000/svg" style="width: 20px; height: 20px;" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                            </svg>
                                        </a>
                                        <a href="{{route('admin.product.delete', $product)}}" class="btn btn-warning rounded">
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
                    {{$products->links()}}
                </div>
            </div>
        </div> <!-- end card -->
    </div>
</div>
@endsection
