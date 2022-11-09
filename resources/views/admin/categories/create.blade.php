@extends('layouts.master')

@section('asset-css')
    <!-- Plugins css -->
    <link href="{{asset('assets/libs/mohithg-switchery/switchery.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/libs/multiselect/css/multi-select.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/libs/select2/css/select2.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/libs/selectize/css/selectize.bootstrap3.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css')}}" rel="stylesheet" type="text/css" />
@endsection

@section('breadcumb-title')
    {{ __('titles.add_category') }}
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    {{-- <h4 class="header-title">Input Types</h4>
                    <p class="sub-header">
                        Most common form control, text-based input fields. Includes support for all HTML5 types: <code>text</code>, <code>password</code>, <code>datetime</code>, <code>datetime-local</code>, <code>date</code>, <code>month</code>, <code>time</code>, <code>week</code>, <code>number</code>, <code>email</code>, <code>url</code>, <code>search</code>, <code>tel</code>, and <code>color</code>.
                    </p> --}}

                    @if(session('success'))
                        <div class="alert alert-success" dir="rtl">
                            <p>{{ session('success') }}</p>
                        </div>
                    @endif

                    <div class="row">
                        <div class="col-12">
                            <div class="p-2">
                                <form class="form-horizontal" role="form" method="POST" action="{{route('admin.category.store')}}">
                                    @csrf

                                    <div class="mb-2 row">
                                        <label class="col-md-2 col-form-label" for="title">عنوان</label>
                                        <div class="col-md-10">
                                            <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" placeholder="عنوان را وارد کنید...">
                                        </div>
                                        @error('title')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="mb-2 row">
                                        <label class="col-md-2 col-form-label" for="slug">نشانی اینترنتی</label>
                                        <div class="col-md-10">
                                            <input type="text" id="slug" name="slug" class="form-control" value="" placeholder="نشانی اینترنتی را وارد کنید...">
                                        </div>
                                        @error('slug')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="mb-2 row">
                                        <label class="col-md-2 col-form-label" for="category_parent">مادر دسته بندی</label>
                                        <div class="col-md-10">
                                            <select class="form-control category-select2" name="category_parent">
                                                <option value="">بدون والد</option>
                                                @foreach($categories as $category)
                                                    <option value="{{$category->id}}">{{$category->title}}</option>
                                                    @if (count($category->childrenRecursive) > 0)
                                                        @include('admin.partials.categories', ['categories' => $category->childrenRecursive, 'level'=>1])
                                                    @endif
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>


                                    <div class="mb-2 row">
                                        <label class="col-md-2 col-form-label" for="formFile">آپلود عکس</label>
                                        <div class="col-md-10">
                                            <input class="form-control" name="image" type="file" id="formFile" onchange="previewFile()">
                                            <div class="preview-img hide">
                                                <img src="{{asset('assets/images/template.png')}}" class="image_to_upload img-fluid"/>
                                            </div>

                                        </div>
                                    </div>


                                    <div class="mb-2 row">
                                        <label class="col-md-2 col-form-label" for="meta_title">عنوان متا (سئو)</label>
                                        <div class="col-md-10">
                                            <input type="text" name="meta_title" id="meta_title" class="form-control" value="{{old('meta_title')}}" placeholder="عنوان سئو را وارد کنید">
                                        </div>
                                        @error('meta_title')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>

                                    
                                    <div class="mb-2 row">
                                        <label class="col-md-2 col-form-label" for="meta_description">توضیحات متا (سئو)</label>
                                        <div class="col-md-10">
                                            <textarea id="textarea" name="meta_description" class="form-control" maxlength="225" rows="3" placeholder="...">{{old('meta_description')}}</textarea>
                                        </div>
                                    </div>

                                    <div class="mb-2 row">
                                        <label class="col-md-2 col-form-label" for="meta_keyword">کلمه کلیدی</label>
                                        
                                        <div class="col-md-10">
                                            <input type="text" id="selectize-tags" name="meta_keyword" value="">
                                        </div>
                                        @error('meta_keyword')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>

                                    
                                    <div class="mb-2 row">
                                        <label class="col-md-2 col-form-label" for="preview">پیش نمایش گوگل</label>
                                        <div class="preview">
                                            <span id="titlePreview">عنوان سئو</span>
                                            <br>
                                            <span id="URL">https://shahcode.com/site-url-perview</span>
                                            <br>
                                            <span id="descPreview"></span>
                                        </div>

                                    </div>
                                    

                                    <button type="submit" class="btn btn-primary rounded">{{ __('titles.add') }}</button>
                                </form>
                            </div>
                        </div>

                    </div>
                    <!-- end row -->
                </div>
            </div> <!-- end card -->
        </div><!-- end col -->
    </div>
@endsection

@section('asset-js')
    <!-- Plugins Js -->
    <script src="{{asset('assets/libs/selectize/js/standalone/selectize.min.js')}}"></script>
    <script src="{{asset('assets/libs/mohithg-switchery/switchery.min.js')}}"></script>
    <script src="{{asset('assets/libs/multiselect/js/jquery.multi-select.js')}}"></script>
    <script src="{{asset('assets/libs/jquery.quicksearch/jquery.quicksearch.min.js')}}"></script>
    <script src="{{asset('assets/libs/select2/js/select2.min.js')}}"></script>
    <script src="{{asset('assets/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js')}}"></script>
    <script src="{{asset('assets/libs/bootstrap-maxlength/bootstrap-maxlength.min.js')}}"></script>

    <!-- init js -->
    <script src="{{asset('assets/js/pages/form-advanced.init.js')}}"></script>
@endsection