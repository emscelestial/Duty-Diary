@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-6 col-12">
                    <i class="fas fa-solid fa-users"></i>
                    Users
                </div>
                {{-- <div class="col-md-6 col-12 text-right">

                </div> --}}
            </div>
        </div>
        <div class="card-body p-1">
            <table class="table table-sm table-hover mb-0" id="users-table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Role</th>
                        <th scope="col">Action</th> <!-- Moved action column to the last -->
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
    </div>
  {{--   <script>
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
                title: 'Are you sure you want to delete?',
                imageUrl: "{{asset("assets/uploads/a.jpg") }}",
                imageheight:1,

                showCancelButton: true,
                confirmButtonText: 'Yes, Delete!',
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
    </script> --}}

    @include('admin.users.partials._datatables-scripts')
@endsection
