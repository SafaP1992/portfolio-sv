@extends('layouts.master')

@section('breadcumb-title')
    {{ __('titles.users') }}
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="fileupload btn btn-success waves-effect waves-light mb-3">
                        <span><i class="mdi mdi-cloud-upload me-1"></i> Upload Files</span>
                        <input type="file" class="upload">
                    </div>
                    <div class="table-responsive">
                        <table class="table table-centered  table-nowrap mb-0">
                            <thead class="table-light">
                            <tr>
                                <th scope="col">File Name</th>
                                <th scope="col">Date Modified</th>
                                <th scope="col">Size</th>
                                <th scope="col">Contributors</th>
                                <th scope="col" class="text-center" style="width: 125px;">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($media as $file)
                                <tr>
                                    <td>
                                        <img src="{{$file->type}}" height="30" alt="icon" class="me-2">
                                        <a href="javascript:void(0);" class="text-dark">{{$file->title}}</a>
                                    </td>
                                    <td class="font-13">{{$file->created_at}}</td>
                                    <td>3.89 MB</td>
                                    <td>
                                        <img src="{{asset('assets/images/users/avatar-5.jpg')}}" alt="task-user" class="avatar-sm img-thumbnail rounded-circle">
                                    </td>
                                    <td>
                                        <ul class="list-inline table-action m-0">
                                            <li class="list-inline-item">
                                                <a href="javascript:void(0);" class="action-icon px-1"> <i class="mdi mdi-pencil"></i></a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="javascript:void(0);" class="action-icon px-1"> <i class="mdi mdi-delete"></i></a>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div> <!-- end col -->
    </div>
    <!-- end row -->
@endsection
