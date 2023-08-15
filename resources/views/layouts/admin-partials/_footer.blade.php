{{-- SB Admin Scripts --}}
    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    {{-- <script src="{{ asset('js/sb-admin-2.min.js') }}"></script> --}}

    {{-- LightBox --}}
    <script src="{{ asset('js/lightbox.js') }}"></script>

    {{-- DataTables --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>


   {{--  <script>
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
    {{-- TinyMCE Script --}}
    <script>
        tinymce.init({
          selector: 'textarea',
          plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
          toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
        });
      </script>
</body>
</html>
