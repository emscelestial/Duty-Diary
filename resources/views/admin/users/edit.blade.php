@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
            Edit User
        </div>
        <form action="{{ route('users.update', $user->id) }}" method="POST">
            @csrf
            <!-- Move the @method('PUT') outside the form -->
            @method('PUT')
            <div class="card-body">
                <div class="form-row">
                    <div class="form-group col-md-8">
                        <label for="inputName">Name</label>
                        <input type="text" class="form-control" id="inputName" placeholder="Name" name="name" required value="{{ $user->name }}">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputRole">Role</label>
                        <select name="role" id="inputRole" class="form-control">
                            <option value="" enableds>Select a Role</option>
                            <option value="1" {{ $user->role === 1 ? 'selected' : '' }}>Administrator</option>
                            <option value="2" {{ $user->role === 2 ? 'selected' : '' }}>Supervisor</option>
                            <option value="3" {{ $user->role === 3 ? 'selected' : '' }}>Trainee</option>
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputEmail">Email</label>
                        <input type="email" class="form-control" id="inputEmail" placeholder="Email" name="email" required value="{{ $user->email }}">
                    </div>
                </div>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul class="p-0 m-0">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
            <div class="card-footer">
                <!-- Add ID to the "Update" button -->
                <button type="submit" class="btn btn-success btn-sm" id="updateBtn">Update</button>
                <!-- Add action URL to the "Cancel" button -->
                <a href="{{ route('users.index') }}" class="btn btn-secondary btn-sm">Cancel</a>
            </div>
        </form>
    </div>






@endsection
