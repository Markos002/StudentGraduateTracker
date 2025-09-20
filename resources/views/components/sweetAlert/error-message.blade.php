@if(session('error'))
    <script>
        Swal.fire({
            title: "Error occurred",
            text: "{{ session('error') }}",
            icon: "error",
            confirmButtonText: "Okay"
        });
    </script>
@endif