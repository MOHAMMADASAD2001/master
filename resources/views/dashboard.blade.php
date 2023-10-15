@section('css', 'css/userprofile.css')

@section('title', 'UserProfile')

@extends('layout.master')
@section('content')

    <div class="container emp-profile">
        <form action="{{route("changephoto")}}"  method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-4">
                    <div class="profile-img">
                        <img src="{{asset(url('images/' . Auth::user()->image))}}" alt="Profile Image">
                        <div class="file btn btn-lg btn-primary">
                            Change Photo
                            <input type="file" name="image" onchange="form.submit()">
                            <input value="{{Auth::id()}}" type="hidden" name="userID" id="">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="profile-head">
                        <h5>
                            {{ Auth::user()->name }}
                        </h5>
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
                                    aria-controls="home" aria-selected="true">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                                    aria-controls="profile" aria-selected="false">Order</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-2">
                    {{-- <input type="submit" class="profile-edit-btn" name="btnAddMore" value="Edit Profile"> --}}
                    <a href="{{ route('profile.edit') }}" class="profile-edit-btn">Edit Profile</a>

                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="tab-content profile-tab" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Name</label>
                                </div>
                                <div class="col-md-6">
                                    <p>{{ Auth::user()->name }}</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 color">
                                    <label>Email</label>
                                </div>
                                <div class="col-md-6 color">
                                    <p>{{ Auth::user()->email }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <div class="container">
                                <div class="table-container">
                                    <h2>Order Table</h2>

                                    <table class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>Product</th>
                                                <th>Quantity</th>
                                                <th>Total</th>
                                                {{-- <th>Status</th> --}}
                                            </tr>
                                        </thead>
                                        <tbody>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

@endsection


<script>
    document.getElementById('fileInput').addEventListener('change', function() {
        document.getElementById('uploadForm').submit();
    });
</script>