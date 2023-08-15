@push('styles')
<link href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.min.css" rel="stylesheet">
@endpush

@push('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.min.js"></script>

<script>
    // Initialize Dropify plugin on the input field
    $(document).ready(function () {
        $('.dropify').dropify({
            messages: {
                default: 'Upload your photo',
                replace: 'Drag and drop or click to replace',
                remove: 'Remove',
                error: 'An error occurred'
            }
        });
    });
</script>

<script>

$('#submit-doc').click(function(event) {
    event.preventDefault();

    var form = $('#documentation-upload');

    var formData = new FormData(form[0]);

    $.ajax({
        url: form.attr('action'),
        type: 'POST',
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        data: formData,
        cache: false,
        contentType: false,
        processData: false,
        success: function(response) {
            Swal.fire({
                title: 'Success',
                text: "File successfully uploaded!",
                icon: 'success',
                showCancelButton: false,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Okay'
            })
            .then((result) => {
                if (result.isConfirmed) {
                    location.reload();
                }
            })
        },
        error: function(xhr, status, error) {
            console.error('Request failed with status: ' + status);
        }
    });
});

</script>
@endpush
