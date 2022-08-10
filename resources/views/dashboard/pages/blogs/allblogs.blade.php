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
                <a class="btn btn-success" href="{{route('singleBlog')}}">Add New Blog</a>
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
                            <tr>
                                <td scope="row">1</td>
                                <td>Post One</td>
                                <td>Web Development</td>
                                <td></td>
                                <td>July 01, 2019</td>
                                <td></td>
                                <td>
                                    <a href="details.html" class="btn btn-warning">Update</a>
                                    <a href="details.html" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                            <tr>
                                <td scope="row">2</td>
                                <td>Post Two</td>
                                <td>Tech Gadgets</td>
                                <td></td>
                                <td>July 02, 2019</td>
                                <td></td>
                                <td>
                                    <a href="details.html" class="btn btn-warning">Update</a>
                                    <a href="details.html" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                            <tr>
                                <td scope="row">3</td>
                                <td>Post Three</td>
                                <td>Web Design</td>
                                <td></td>
                                <td>July 03, 2019</td>
                                <td></td>
                                <td>
                                    <a href="details.html" class="btn btn-warning">Update</a>
                                    <a href="details.html" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                            <tr>
                                <td scope="row">4</td>
                                <td>Post Four</td>
                                <td>Business</td>
                                <td></td>
                                <td>July 04, 2019</td>
                                <td></td>
                                <td>
                                    <a href="details.html" class="btn btn-warning">Update</a>
                                    <a href="details.html" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                            <tr>
                                <td scope="row">5</td>
                                <td>Post Five</td>
                                <td>Graphics Design</td>
                                <td></td>
                                <td>July 05, 2019</td>
                                <td></td>
                                <td>
                                    <a href="details.html" class="btn btn-warning">Update</a>
                                    <a href="details.html" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                            <tr>
                                <td scope="row">6</td>
                                <td>Post Six</td>
                                <td>Health &amp; Wellness</td>
                                <td></td>
                                <td>July 06, 2019</td>
                                <td></td>
                                <td>
                                    <a href="details.html" class="btn btn-warning">Update</a>
                                    <a href="details.html" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <nav class="ml-4">
                        <ul class="pagination">
                            <li class="page-item disabled"><a href="#" class="page-link">Previous</a></li>
                            <li class="page-item active"><a href="#" class="page-link">1</a></li>
                            <li class="page-item"><a href="#" class="page-link">2</a></li>
                            <li class="page-item"><a href="#" class="page-link">3</a></li>
                            <li class="page-item"><a href="#" class="page-link">Next</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section><!-- ./POSTS -->

@endsection
