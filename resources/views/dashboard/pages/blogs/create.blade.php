@extends('dashboard.layouts.master')
@section('title', 'Blog | Create')
@section('content')


    <!-- HEADER -->
    <header id="main-header" class="py-2 bg-primary text-white">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1>Create A New Blog</h1>
                </div>
            </div>
        </div>
    </header><!-- ./HEADER -->


    <!-- POSTS -->
    <section id="posts" class="mt-4">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-header">
                            <h4>Add Blog</h4>
                        </div>
                        <div class="card-body">
                            @if (session('createBlog'))
                            <div class="alert alert-success alert-dismissible fade show">
                                <button type="button" class="close" data-bs-dismiss="alert">&times;</button>
                                {{session('createBlog')}}
                              </div>
                            <div class="alert-box--success" id="successBox">
                            </div>
                            @endif
                            <form action="{{route('blogs.store')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <input type="text" class="form-control" name="title">
                                    @error('title')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="category">Category</label>
                                    <select class="form-control" name="category" type="text">
                                        <option disabled selected> -- select an option -- </option>
                                        @foreach ($categories as $category)
                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                        @endforeach
                                    </select>
                                    @error('category')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="file">Image Upload</label>
                                    <input type="file" class="form-control-file" name="image">
                                    @error('image')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="body">Description</label>
                                    <textarea name="editor1" class="form-control"></textarea>
                                    @error('editor1')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="col-md-3 mr-auto">
                                    <button type="submit" class="btn btn-success btn-block">
                                        <i class="fas fa-check"></i> Save
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- ./POSTS -->


@endsection
