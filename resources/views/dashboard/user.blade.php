@extends('dashlayout.master')
@section('title', 'userdash')
@section('content')
    <div class="content-wrapper">
        <section class="user-section">
            <h2>User lists</h2>
            <a href="{{ route('userdash.create') }}" class="add-user-button">Add User</a>
        </section>

        <table class="table display" id="datatable">
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
                @foreach ($user as $item)
                    <tr>
                        <td>{{ $item->id }}</td>

                        <td>
                            {{-- <img src="/assets/img/.{{ $item->image}}" alt="{{ $item->name }} Image" width="100"> --}}
                            <img src="{{ asset($item->image) }}" alt="{{ $item->name }} Image" width="100">
                            {{-- <img src="images/{{ $item->image }}" alt="{{ $item->name }} Image" width="100"> --}}

                        </td>
                        </td>

                        <td>{{ $item->name }}</td>
                        <td>{{ $item->email }}</td>
                        <td class="action-buttons">
                            <form method="POST" action="{{ url('/userdash' . '/' . $item->id) }}"
                                style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-m"
                                    onclick="return confirm('Confirm Delete?')">Delete</button>
                            </form>
                            <a class="btn btn-success" href="{{ route('userdash.edit', $item->id) }}"> Edit </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>
    {{-- <div class="content-wrapper">
        <div class="container">
            <div class="card">
                <div class="card-header">Manage Users</div>
                <div class="card-body">
                    {{ $dataTable->table() }}
                </div>
            </div>
        </div>
    </div> --}}

@endsection
