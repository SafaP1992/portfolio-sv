@extends('layouts.master')

@section('breadcumb-title')
    {{ __('titles.add_user') }}
@endsection


@section('content')


<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                {{-- <h4 class="header-title">Input Types</h4> --}}
                {{-- <p class="sub-header">
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
                            <form class="form-horizontal" role="form" method="POST" action="{{route('admin.media.store')}}" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-2 row">
                                    <label class="col-md-2 col-form-label" for="file">Files</label>
                                    <div class="col-md-10">
                                        <input type="file" id="file" name="file" accept=".jpg,.png" class="form-control" value="" multiple/>
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
