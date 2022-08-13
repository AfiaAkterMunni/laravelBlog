@extends('dashboard.layouts.master')
@section('title', 'Category | Create')
@section('content')


    <!-- HEADER -->
    <header id="main-header" class="py-2 bg-primary text-white">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1>Create A New Category</h1>
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
                            <h4>Add Category</h4>
                        </div>
                        <div class="card-body">
                            @if (session('category'))
                                <div class="alert alert-success alert-dismissible fade show">
                                    <button type="button" class="close" data-bs-dismiss="alert">&times;</button>
                                    {{ session('category') }}
                                </div>
                                <div class="alert-box--success" id="successBox">
                                </div>
                            @endif
                            <form action="{{ route('category.store') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <input type="text" class="form-control" name="category_name">
                                    @error('category_name')
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
