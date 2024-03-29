@if (session('success'))
    <script>
        Swal.fire({
            title: 'Success!',
            text: '{{ session('success') }}',
            icon: 'success',
            timer: 3000,
            timerProgressBar: true,
            toast: true,
            showConfirmButton: false,
            padding: '1em'
        });
    </script>
@endif

@if (session('error'))
    <script>
        Swal.fire({
            title: 'Error!',
            text: '{{ session('error') }}',
            icon: 'error',
            timer: 3000,
            timerProgressBar: true,
            toast: true,
            showConfirmButton: false,
            padding: '1em'
        });
    </script>
@endif
