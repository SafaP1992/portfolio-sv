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
                            <form class="form-horizontal" role="form" method="POST" action="{{route('admin.user.store')}}">
                                @csrf
                                <div class="mb-2 row">
                                    <label class="col-md-2 col-form-label" for="name">Name</label>
                                    <div class="col-md-10">
                                        <input type="text" id="name" name="name" class="form-control" value="" placeholder="Enter your name">
                                    </div>
                                </div>
                                <div class="mb-2 row">
                                    <label class="col-md-2 col-form-label" for="email">Email</label>
                                    <div class="col-md-10">
                                        <input type="email" id="email" name="email" class="form-control" placeholder="Email">
                                    </div>
                                </div>
                                <div class="mb-2 row">
                                    <label class="col-md-2 col-form-label" for="password" name="password">Password</label>
                                    <div class="col-md-10">
                                        <div class="input-group input-group-merge">
                                            <input type="password" id="password" class="form-control" placeholder="Enter your password">
                                            <div class="input-group-text" data-password="false">
                                                <span class="password-eye"></span>
                                            </div>
                                        </div>
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