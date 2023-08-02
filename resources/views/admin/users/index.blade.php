@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-6 col-12">
                    <i class="fas fa-solid fa-users"></i>
                    Users
                </div>
                <div class="col-md-6 col-12 text-right">
                    <a href="{{ route('users.create') }}" class="btn btn-sm btn-primary">Add New User</a>
                </div>
            </div>
        </div>
        <div class="card-body p-0">
            <table class="table table-sm table-hover mb-0">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Action</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Role</th>
                  </tr>
                </thead>
                <tbody>
                  @if(isset($users) && $users->count() > 0)
                    @foreach ($users as $index => $user)
                    <tr>
                      <th scope="row">{{ $index + 1 }}</th>
                      <td>
                          <a href="{{ route('users.edit',$user->id) }}" class="btn btn-sm btn-success">Edit</a>
                          <button onclick="confirmDelete({{ $user->id }})" class="btn btn-sm btn-danger">Delete</button>
                      </td>
                      <td>{{ $user->name }}</td>
                      <td>{{ $user->email }}</td>
                      <td>
                        @if($user->role == 1)
                          <span class="badge badge-info">Administrator</span>
                        @elseif($user->role == 2)
                          <span class="badge badge-warning">Supervisor</span>
                        @else
                          <span class="badge badge-secondary">Trainee</span>
                        @endif
                      </td>
                    </tr>
                    @endforeach
                  @else
                    <tr>
                      <td colspan="5">
                        <div class="alert alert-danger">User's not found</div>
                      </td>
                    </tr>
                  @endif
                </tbody>
              </table>
              @if(isset($user_name))
                <div class="alert alert-success mb-0">
                  <strong>Success!</strong> {{ $user_name }} user's  updated successfully.
                </div>
              @endif
        </div>
    </div>

    <script>
        function confirmDelete(id){
            let userId = id;
            const swalWithBootstrapButtons = Swal.mixin({
                customClass: {
                    confirmButton: 'btn btn-success',
                    cancelButton: 'btn btn-danger'
                },
                buttonsStyling: false
            })

            swalWithBootstrapButtons.fire({
                title: 'Are you sure you delete?',
                imageUrl: "{{asset("assets/uploads/a.jpg") }}",
                imageheight:1,

                showCancelButton: true,
                confirmButtonText: 'Yes Delete!',
                cancelButtonText: 'Not now!',
                reverseButtons: true
                }).then((result) => {
                    if (result.isConfirmed) {
                        fetch(`/users/${userId}`, {
                        method: 'DELETE',
                        headers: {
                            'X-CSRF-TOKEN': '{{ csrf_token() }}',
                            'Content-Type': 'application/json'
                        }
                    })
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Network response was not ok');
                    }

                    Swal.fire({
                        title: 'Deleted',
                        text: "Deleted successfully.",
                        icon: 'success',
                        showCancelButton: false,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Okay'
                        }).then((result) => {
                        if (result.isConfirmed) {
                            location.reload();
                        }
                    })
            })
            .catch(error => {
                console.error('Error:', error);
                // Handle any errors if necessary
            });

            } else if (
                /* Read more about handling dismissals below */
                result.dismiss === Swal.DismissReason.cancel
            ) {
                swalWithBootstrapButtons.fire(
                ' cancel',

                )
            }
            })
        }
    </script>
@endsection
