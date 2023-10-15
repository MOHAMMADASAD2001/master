@extends('dashlayout.master')
@section('title','userdash')
	@section('content')
    <div class="content-wrapper">
        <section class="user-section">
          <h2>User lists</h2>
          <button class="add-user-button">Add User</button>
        </section>
      
        <table class="table">
          <thead>
            <tr>
              <th>User ID</th>
              <th>User Name</th>
              <th>User email</th>
              <th> password</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>h</td>
              <td>Devices</td>
              <td>lorem ipusm dolo</td>
              <td class="action-buttons">
                <button class="delete-button">Delete</button>
                <button class="edit-button">Edit</button>
              </td>
            </tr>
            <tr>
                <td>2</td>
                <td>John Doe</td>
                <td>john@example.com</td>
                <td>123-456-7890</td>
                <td class="action-buttons">
                  <button class="delete-button">Delete</button>
                  <button class="edit-button">Edit</button>
                </td>
              </tr>
              <tr>
                <td>1</td>
                <td>John Doe</td>
                <td>john@example.com</td>
                <td>123-456-7890</td>
                <td class="action-buttons">
                  <button class="delete-button">Delete</button>
                  <button class="edit-button">Edit</button>
                </td>
              </tr>
            <!-- Add more rows here -->
          </tbody>
        </table>
        
      </div>
    
    
@endsection    