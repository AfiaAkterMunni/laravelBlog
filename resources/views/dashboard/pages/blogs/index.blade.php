@extends('dashboard.layouts.master')
@section('title', 'All Blogs')
@section('content')

<!-- HEADER -->
<header id="main-header" class="py-2 bg-primary text-white">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1><i class="fas fa-pencil-alt"></i> All Blogs</h1>
            </div>
        </div>
    </div>
</header><!-- ./HEADER -->

<!-- ACTIONS -->
<section id="actions" class="py-4 mb-4 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <a class="btn btn-success" href="{{route('blogs.create')}}"><i class="fas fa-plus"></i> Add New Blog</a>
            </div>
            <div class="col-md-6 ml-auto">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search">
                    <span class="input-group-btn">
                        <button class="btn btn-primary">Search</button>
                    </span>
                </div>
            </div>
        </div>
    </div>
</section><!-- ./ACTIONS -->

<!-- POSTS -->
<section id="posts">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h4>Latest Blogs</h4>
                    </div>
                    <table class="table table-striped">
                        <thead class="thead-dark">
                            <tr>
                                <th>#</th>
                                <th>Title</th>
                                <th>Category</th>
                                <th>Image</th>
                                <th>Date Posted</th>
                                <th>Views</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($blogs as $key => $blog)
                            <tr>
                                <td scope="row">{{$blog->id}}</td>
                                <td>{{$blog->title}}</td>
                                <td>{{$blog->category->name}}</td>
                                <td>
                                    <img src="{{asset('uploads/blogs/'.$blog->image)}}" width="50" height="50">
                                </td>
                                <td>{{$blog->created_at->format('M d, Y')}}</td>
                                <td></td>
                                <td>
                                    <a href="{{route('blogs.edit')}}" class="btn btn-warning">Update</a>
                                    <a href="#" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $blogs->links() }}
                </div>
            </div>
        </div>
    </div>
</section><!-- ./POSTS -->

@endsection
