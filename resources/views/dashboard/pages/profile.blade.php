@extends('dashboard.layouts.master')
@section('title', 'Profile | abc')
@section('content')


    <!-- HEADER -->
    <header id="main-header" class="py-2 bg-primary text-white mb-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1><i class="fas fa-user-circle"></i> Edit Profile</h1>
                </div>
            </div>
        </div>
    </header><!-- ./HEADER -->



    <!-- PROFILE EDIT -->
    <section id="profile">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="card">
                        <div class="card-header">
                            <h4>Edit Profile</h4>
                        </div>
                        <div class="card-body">
                            <form>
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control" value="Istiak Hossain Tushar">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" value="test@test.com">
                                </div>
                                <div class="form-group">
                                    <label for="formFile" class="form-label">Image</label>
                                    <input class="form-control" type="file" id="formFile">
                                  </div>
                                <div class="form-group">
                                    <label for="body">Bio</label>
                                    <textarea name="editor1" class="form-control">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae aut repellat qui dolores asperiores possimus, ipsum laborum illum natus voluptates dignissimos sapiente, voluptatem repudiandae ab unde? Ad esse quidem omnis.
                                    </textarea>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <h3>Your Image</h3>
                    <img src="images/avatar.jpg" alt="avatar" class="d-block img-fluid mb-3">
                </div>
            </div>
        </div>
    </section><!-- ./POSTS -->

    <section id="actions" class="py-4 mb-4">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href="#" class="btn btn-success btn-block">
                        <i class="fas fa-check pr-2"></i> Save
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="#" class="btn btn-success btn-block" data-toggle="modal" data-target="#passwordModal">
                        <i class="fas fa-lock pr-2"></i> Change Password</a>
                </div>

            </div>
        </div>
    </section>

    <!-- PASSWORD MODAL -->
    <div class="modal fade" id="passwordModal">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title">Change Password</h5>
                    <button class="close text-white" data-dismiss="modal"><span>&times;</span></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="password">Older Password</label>
                            <input type="password" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="password">New Password</label>
                            <input type="password" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="password">Confirm New Password</label>
                            <input type="password" class="form-control">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button class="btn btn-primary" data-dismiss="modal">Update Password</button>
                </div>
            </div>
        </div>
    </div><!-- ./PASSWORD MODAL -->
@endsection


