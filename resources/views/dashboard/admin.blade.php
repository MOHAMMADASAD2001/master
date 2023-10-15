@extends('dashlayout.master')
@section('title','admindash')
	@section('content')
    <div class="content-wrapper">
        <section class="user-section">
          <h2>Admin lists</h2>
          <button class="add-user-button">Add Admin</button>
        </section>
      
        <table class="table">
          <thead>
            <tr>
              <th>Admin ID</th>
              <th>Admin Name</th>
              <th>Admin email</th>
              <th>Admin password</th>
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