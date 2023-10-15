@extends('dashlayout.master')
@section('title','createadmin')
	@section('content')

<div class="admin-container">
    <h2>Add Admin</h2>
    <form class="admin-form" action="#" method="post">
        <div class="admin-form-group">
            <label class="admin-label" for="name">Name:</label>
            <input class="admin-input" type="text" id="name" name="name" required>
        </div>
        <div class="admin-form-group">
            <label class="admin-label" for="email">Email:</label>
            <input class="admin-input" type="email" id="email" name="email" required>
        </div>
        <div class="admin-form-group">
            <label class="admin-label" for="password">Password:</label>
            <input class="admin-input" type="password" id="password" name="password" required>
        </div>
        <div class="admin-form-group">
            <input class="admin-submit" type="submit" value="Add Admin">
        </div>
    </form>
</div>
<br><br>
@endsection