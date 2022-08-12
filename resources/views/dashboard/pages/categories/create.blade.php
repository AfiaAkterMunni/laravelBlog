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
                            <form>
                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <input type="text" class="form-control" value="">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- ./POSTS -->

        <!-- ACTIONS -->
        <section id="actions" class="py-4 mb-4">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 mr-auto">
                        <a href="#" class="btn btn-success btn-block">
                            <i class="fas fa-check"></i> Save
                        </a>
                    </div>
                </div>
            </div>
        </section><!-- ./ACTIONS -->
@endsection
