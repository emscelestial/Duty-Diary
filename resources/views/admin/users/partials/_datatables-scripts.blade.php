<script>
    function confirmDelete(id) {
        event.preventDefault();
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            showCancelButton: true,
            imageUrl: "{{asset("assets/uploads/a.jpg") }}",
            imageHeight: 200,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#005',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                // Send an AJAX request to delete the user
                axios.delete(`/users/${id}`)
                    .then(response => {
                        // Handle the success response from the server
                        Swal.fire(
                            'Deleted!',
                            'Your file has been deleted.',
                            'success'
                        );
                        // Optionally, you can update the UI or reload the page after successful deletion
                        setTimeout(function(){
                            location.reload();
                        }, 2000);

                    })
                    .catch(error => {
                        // Handle the error response from the server
                        Swal.fire(
                            'Error!',
                            'An error occurred while deleting the user.',
                            'error'
                        );
                    });
            }
        });
    }
</script>



 <script>
    $(document).ready( function () {
        $('#users-table').DataTable({
            initComplete: function(){
                $('.dataTables_filter ').append('<a href="{{ route("users.create") }}" class="btn btn-sm btn-primary ml-3">New User</a>');
            },
            processing: true,
            serverSide: true,
            ajax: '{{ route('users.index') }}',
            columns: [
                {
                    data: 'DT_RowIndex',
                    name: 'index'
                },

                {
                    data: 'name',
                    name: 'name'
                },
                {
                    data: 'email',
                    name: 'email'
                },
                {
                    data: 'role',
                    name: 'role'
                },
                {
                    data: 'action',
                    name: 'action',
                    orderable: false
                },

            ],
            "order": [[ 3, 'asc']]

        });
    } );
    </script>

