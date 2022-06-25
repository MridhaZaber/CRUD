@extends('master')


@section('title')
    Manage Blog Page
@endsection
@section('body')

    <section>
        <div class="py-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card ">
                            <div class="card-header">All Blog Info</div>
                            <h4 class="text-center text-success"> {{Session::get('message')}}</h4>
                            <div class="card-body">
                                <table class="table table-bordered table table-hover">
                                    <thead>
                                    <tr>
                                        <th>SL</th>
                                        <th>Blog Title</th>
                                        <th>Author Name</th>
                                        <th>Blog Description</th>
                                        <th>Blog Image</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($blogs as $blog)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$blog->title}}</td>
                                        <td>{{$blog->author}}</td>
                                        <td>{{$blog->description}}</td>
                                        <td><img src="{{asset($blog->image)}}" alt="" height="60" width="70"></td>

                                        <td>
                                            <a href="{{route('blog.edit', ['id'=>$blog->id])}}" class="btn btn-success btn-sm">Edit</a>
                                            <a href="{{route('blog.delete',['id'=>$blog->id])}}" class="btn btn-danger btn-sm" onclick="return confirm('Are You Sure To Delete This!!!');">Delete</a>

                                        </td>
                                    </tr>
                                    @endforeach
                                    </tbody>

                                </table>
                            </div>




                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
