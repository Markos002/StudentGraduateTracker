
@if(session('success'))
    <script>
        Swal.fire({
            title: "Good job!",
            text: "{{ session('success') }}",
            icon: "success",
            confirmButtonText: "Okay"
        });
    </script>
@endif