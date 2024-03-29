@extends('dashboard.layouts.master')
@section('title', 'All Categories')
@section('content')

    <!-- HEADER -->
    <header id="main-header" class="py-2 bg-primary text-white">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1><i class="fas fa-pencil-alt"></i> All Categories</h1>
                </div>
            </div>
        </div>
    </header><!-- ./HEADER -->

    <!-- ACTIONS -->
    <section id="actions" class="py-4 mb-4 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href="{{ route('category.create') }}" class="btn btn-success btn-block">
                        <i class="fas fa-plus"></i> Add New Category
                    </a>
                </div>
                <div class="col-md-6 ml-auto">
                    <form action="{{route('category.search')}}" method="GET">
                        @csrf
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search" name="search">
                            <span class="input-group-btn">
                                <button class="btn btn-primary" type="submit">Search</button>
                            </span>
                        </div>
                        @error('search')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </form>
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
                            <h4>Latest Categories</h4>
                        </div>
                        @if (session('categoryDelete'))
                            <div class="alert alert-success alert-dismissible fade show">
                                <button type="button" class="close" data-bs-dismiss="alert">&times;</button>
                                {{ session('categoryDelete') }}
                            </div>
                            <div class="alert-box--success" id="successBox">
                            </div>
                        @endif
                        @if(count($categories) == 0)
                            <p class="lead text-center py-5" style="background-color:#d0ede470">No Category found!!!!</p>
                        @else
                        <table class="table table-striped">
                            <thead class="thead-dark">
                                <tr>
                                    <th>#</th>
                                    <th>Category</th>
                                    <th>Date Posted</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categories as $key => $category)
                                    <tr>
                                        <td scope="row">{{ $key + ($categories->perPage() * ($categories->currentPage() - 1)) + 1 }}</td>
                                        <td>{{ $category->name }}</td>
                                        <td>{{ $category->created_at->format('M d, Y') }}</td>
                                        <td>
                                            <a href="{{ route('category.edit', ['id' => $category->id]) }}"
                                                class="btn btn-warning">Update</a>
                                            <span style="display: inline-block">
                                                <form method="post"
                                                    action="{{ route('category.delete', ['id' => $category->id]) }}">
                                                    @csrf
                                                    <button type="submit" class="btn btn-danger">Delete</button>
                                                </form>
                                            </span>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        @endif
                        {{ $categories->links() }}
                    </div>
                </div>
            </div>
        </div>
    </section><!-- ./POSTS -->

    <!-- CATEGORY MODAL -->
    <div class="modal fade" id="addCategoryModal">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-success text-white">
                    <h5 class="modal-title">Add Category</h5>
                    <button class="close text-white" data-dismiss="modal"><span>&times;</span></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" class="form-control">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button class="btn btn-success" data-dismiss="modal">Save Changes</button>
                </div>
            </div>
        </div>
    </div><!-- ./CATEGORY MODAL -->

@endsection
