{{-- <script>
    function confirmDeleteDiary(id) {
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
                axios.delete(`/diaries/${id}`)
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
        $('#diaries-table').DataTable({
            initComplete: function(){
                $('.dataTables_filter ').append('<a href="{{ route("diaries.create") }}" class="btn btn-sm btn-info ml-3">New Diary</a>');
            },
            processing: true,
            serverSide: true,
            ajax: '{{ route('diaries.index') }}',
            columns: [
                {
                    data: 'DT_RowIndex',
                    name: 'index'
                },

                {
                    data: 'title',
                    name: 'title'
                },
                {
                    data: 'status',
                    name: 'status'
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
    </script> --}}

<script>
    function confirmDeleteDiary(id) {
        event.preventDefault();
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            showCancelButton: true,
            imageUrl: "{{ asset('assets/uploads/a.jpg') }}",
            imageHeight: 200,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#005',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                // Send an AJAX request to delete the diary
                axios.delete(`/diaries/${id}`)
                    .then(response => {
                        // Handle the success response from the server
                        Swal.fire(
                            'Deleted!',
                            'The diary has been deleted.',
                            'success'
                        );
                        // Optionally, you can update the DataTable or reload the page
                        $('#diaries-table').DataTable().ajax.reload();
                    })
                    .catch(error => {
                        // Handle the error response from the server
                        Swal.fire(
                            'Error!',
                            'An error occurred while deleting the diary.',
                            'error'
                        );
                    });
            }
        });
    }

    $(document).ready(function () {
        $('#diaries-table').DataTable({
            initComplete: function () {
                $('.dataTables_filter ').append('<a href="{{ route("diaries.create") }}" class="btn btn-sm btn-info ml-3">New Diary</a>');
            },
            processing: true,
            serverSide: true,
            ajax: '{{ route('diaries.index') }}',
            columns: [
                {
                    data: 'DT_RowIndex',
                    name: 'index'
                },
                {
                    data: 'title',
                    name: 'title'
                },
                {
                    data: 'status',
                    name: 'status'
                },
                {
                    data: 'action',
                    name: 'action',
                    orderable: false,
                    searchable: false // Add this to prevent search on this column
                },
            ],
            "order": [[3, 'asc']]
        });
    });
</script>

