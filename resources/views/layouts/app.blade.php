<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('assets/bootstrap-4.1/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/sweetalert/sweetalert2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/datatables/dataTables.bootstrap4.min.css') }}">
    <title>@yield('title')</title>
</head>
<body>

    @yield('body')

    <script src="{{ asset('assets/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('assets/bootstrap-4.1/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/bootstrap-4.1/popper.min.js') }}"></script>
    <script src="{{ asset('assets/sweetalert/sweetalert2.min.js') }}"></script>
    <script src="{{ asset('assets/sweetalert/alert.js') }}"></script>
    <script src="{{ asset('assets/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/datatables/dataTables.bootstrap4.min.js') }}"></script>

    <script>
        $(document).ready(function(){
            $('#tableProfile').DataTable();
        });
    </script>

    <script>
        $(document).ready(function(){
            $('.btn-edit').click(function() {
                $('input').removeAttr('readonly');
                $('textarea').removeAttr('readonly');
                $('.btn-update').removeAttr('disabled');
                $('select').removeAttr('disabled');
                $('.btn-edit').hide();
            })
        })
    </script>
</body>
</html>
