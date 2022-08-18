@extends('dashboard.layouts.master')
@section('title', 'Update Blog')
@section('content')

    <!-- HEADER -->
    <header id="main-header" class="py-2 bg-primary text-white mb-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1>Update Your Blog Here...</h1>
                </div>
            </div>
        </div>
    </header><!-- ./HEADER -->

     <!-- POSTS -->
     <section id="posts">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-header">
                            <h4>Edit Blog</h4>
                        </div>
                        <div class="card-body">
                            @if (session('success'))
                            <div class="alert alert-success alert-dismissible fade show">
                                <button type="button" class="close" data-bs-dismiss="alert">&times;</button>
                                {{session('success')}}
                              </div>
                            <div class="alert-box--success" id="successBox">
                            </div>
                            @endif
                            <form action="{{route('blog.update', ['id' => $blog->id])}}" method="POST"  enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <input type="text" name="title" class="form-control" value="{{ old('title') ?? $blog->title}}">
                                    @error('title')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="category">Category</label>
                                    <select class="form-control" name="category">
                                        @foreach ( $categories as $category )
                                            <option value="{{$category->id}}" @if (old('category') == $category->id) selected @elseif ($blog->category_id == $category->id) selected @endif>{{$category->name}}</option>
                                        @endforeach
                                    </select>
                                    @error('category')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="file">Image Upload</label>
                                    <input type="file" name="image" class="form-control-file">
                                    @error('image')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="body">Description</label>
                                    <textarea name="editor1" class="form-control">
                                        {{ old('editor1') ?? $blog->description}}
                                    </textarea>
                                    @error('editor1')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="col-md-3 mr-auto">
                                    <button class="btn btn-success btn-block" type="submit">
                                        <i class="fas fa-check"></i> Update
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
