@extends('master')


@section('title')
   Edit Blo Page
@endsection
@section('body')

    <section>
        <div class="py-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card ">
                            <div class="card-header">
                                Edit Blog Form
                            </div>
                            <div class="card-body">

                                <form action="{{route('blog.update',['id'=>$blog->id])}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row mb-3">
                                        <label for="" class="col-md-3">Blog Title</label>
                                        <div class="col-md-9">
                                            <input type="text" value="{{$blog->title}}" class="form-control" name="title">
                                        </div>

                                    </div>

                                    <div class="row mb-3">
                                        <label for="" class="col-md-3">Author Name</label>
                                        <div class="col-md-9">
                                            <input type="text" value="{{$blog->author}}" class="form-control" name="author">
                                        </div>

                                    </div>
                                    <div class="row mb-3">
                                        <label for="" class="col-md-3">Description</label>
                                        <div class="col-md-9">
                                            <textarea type="text" class="form-control" name="description">{{$blog->description}}</textarea>
                                        </div>

                                    </div>
                                    <div class="row mb-3">
                                        <label for="" class="col-md-3">Blog Image</label>
                                        <div class="col-md-9">
                                            <input type="file" class="form-control" name="image">
                                            <img src="{{asset($blog->image)}}" alt="" height="100" width="130"/>
                                        </div>

                                    </div>
                                    <div class="row mb-3">
                                        <label for="" class="col-md-3"></label>
                                        <div class="col-md-9">
                                            <input type="submit" class="btn btn-success" value="Update Blog Info">
                                        </div>

                                    </div>


                                </form>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

