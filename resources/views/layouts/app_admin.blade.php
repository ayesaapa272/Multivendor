<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{ asset('adminAsset/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{ asset('adminAsset/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('adminAsset/dist/css/adminlte.min.css') }}">

    <!-- Select css -->
    <link rel="stylesheet" href="{{ asset('adminAsset/plugins/select2/css/select2.min.css') }}">

    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="{{ asset('adminasset/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css') }}">

    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('adminAsset/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('adminAsset/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('adminAsset/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">

@include('layouts.admin_sidebar')

@yield('content')

    <!-- Main Footer -->
    <footer class="main-footer">
        <strong>Copyright &copy; 2014-2020 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
        All rights reserved.
        <div class="float-right d-none d-sm-inline-block">
            <b>Version</b> 3.1.0-rc
        </div>
    </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="{{ asset('adminAsset/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap -->
<script src="{{ asset('adminAsset/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- overlayScrollbars -->
<script src="{{ asset('adminAsset/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('adminAsset/dist/js/adminlte.js') }}"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="{{ asset('adminAsset/plugins/jquery-mousewheel/jquery.mousewheel.js') }}"></script>
<script src="{{ asset('adminAsset/plugins/raphael/raphael.min.js') }}"></script>
<script src="{{ asset('adminAsset/plugins/jquery-mapael/jquery.mapael.min.js') }}"></script>
<script src="{{ asset('adminAsset/plugins/jquery-mapael/maps/usa_states.min.js') }}"></script>

<!-- DataTables  & Plugins -->
<script src="{{ asset('adminAsset/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('adminAsset/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('adminAsset/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('adminAsset/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
<script src="{{ asset('adminAsset/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('adminAsset/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset('adminAsset/plugins/jszip/jszip.min.js') }}"></script>
<script src="{{ asset('adminAsset/plugins/pdfmake/pdfmake.min.js') }}"></script>
<script src="{{ asset('adminAsset/plugins/pdfmake/vfs_fonts.js') }}"></script>
<script src="{{ asset('adminAsset/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
<script src="{{ asset('adminAsset/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
<script src="{{ asset('adminAsset/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>

<!-- Select2 -->
<script src="{{ asset('adminAsset/plugins/select2/js/select2.full.min.js') }}"></script>

<script src="{{ asset('adminAsset/plugins/sweetalert2/sweetalert2.min.js') }}"></script>

<!-- ChartJS -->
<script src="{{ asset('adminAsset/plugins/chart.js/Chart.min.js') }}"></script>

<!-- AdminLTE for demo purposes -->
<script src="{{ asset('adminAsset/dist/js/demo.js') }}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset('adminAsset/dist/js/pages/dashboard2.js') }}"></script>
<script>
    $(function () {
        $("#example1").DataTable({
            "responsive": true,
            "lengthChange": false,
            "autoWidth": false,
            "ordering": true,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });
    });
    $('.select2').select2()
</script>
<script>
    var Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000
    });

    @if(Session::has('success'))
        Toast.fire({
            icon: 'success',
            title: "{{Session::get('success')}}"
        });
    @endif

    @if(Session::has('error'))
        Toast.fire({
            icon: 'error',
            title: "{{Session::get('error')}}"
        });
    @endif
</script>

<script>
    // Manage Orders
    $(document).on('click', '#submitBtn', function (e) {
        var id = (this.getAttribute('data-target'))
        var moda = $('#exampleModal' + $('#submitBtn').attr('data-target'));
        var modalTableBody = $("#modalTableBody");

        moda.modal('show');
        modalTableBody.empty();
        $(".modal-dialog")[0].style = "max-width: 1000px !important";


        $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: window.location.origin +'/admin/orders/' + id,
                method: 'get',
                // dataType:'json',
                // data: $('#submitBtn').attr('data-target'),// full data for the campain to be created


                success: function (response) {
                    response.forEach((value, index) => {
                        console.log(value);
                        let tr = createElement('tr');
                        let unique_id = createElement('td');
                        let order_date = createElement('td');
                        let quantity = createElement('td');
                        let product_name = createElement('td');
                        let product_image = createElement('td');
                        let product_model = createElement('td');
                        let product_total_price = createElement('td');
                        let product_size = createElement('td');
                        let action = createElement('td');
                        let anchor = createElement('a');
                        let url = window.location.origin + '/admin/orders/' + value.id + '/edit';
                        anchor.setAttribute('href', url);
                        action.appendChild(anchor);
                        anchor.innerText = "Mark as Shifted";
                        anchor.className = "btn btn-info";


                        let image = createElement('img');
                        let src = window.location.origin + "/images/" + value.products[0].feature_image;
                        image.setAttribute('src', src);
                        image.setAttribute('alt', value.products[0].product_name);
                        image.setAttribute('width', 80);

                        product_image.appendChild(image);

                        unique_id.innerText = value.unique_id;
                        order_date.innerText = value.created_at;
                        quantity.innerText = value.quantity;
                        product_name.innerText = value.products[0].product_name;
                        product_model.innerText = value.products[0].model;
                        product_total_price.innerText = parseInt(value.products[0].product_price) * parseInt(value.quantity);
                        product_size.innerText = value.products[0].size;

                        tr.appendChild(unique_id);
                        tr.appendChild(order_date);
                        tr.appendChild(product_name);
                        tr.appendChild(product_image);
                        tr.appendChild(product_model);
                        tr.appendChild(quantity);
                        tr.appendChild(product_total_price);
                        tr.appendChild(product_size);
                        tr.appendChild(action);
                        modalTableBody.append(tr);
                    })
                },
                error:function(response)
                {
                    console.warn(response);
                }
            });


    });

    // Manage All Orders
    $(document).on('click', '#submitBtnn', function (e) {
        var id = (this.getAttribute('data-target'))
        var moda = $('#exampleModal' + $('#submitBtnn').attr('data-target'));
        var modalTableBody = $("#modalTableBody");

        moda.modal('show');
        modalTableBody.empty();
        $(".modal-dialog")[0].style = "max-width: 1000px !important";


        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: window.location.origin +'/admin/allOrders/' + id,
            method: 'get',
            // dataType:'json',
            // data: $('#submitBtn').attr('data-target'),// full data for the campain to be created


            success: function (response) {
                response.forEach((value, index) => {
                    console.log(value);
                    let tr = createElement('tr');
                    let unique_id = createElement('td');
                    let order_date = createElement('td');
                    let quantity = createElement('td');
                    let product_name = createElement('td');
                    let product_image = createElement('td');
                    let product_model = createElement('td');
                    let product_total_price = createElement('td');
                    let product_size = createElement('td');
                    let action = createElement('td');
                    let anchor = createElement('a');
                    let url = window.location.origin + '/admin/orders/' + value.id + '/edit';
                    anchor.setAttribute('href', url);
                    action.appendChild(anchor);
                    anchor.innerText = "Mark as Shifted";
                    anchor.className = "btn btn-info";


                    let image = createElement('img');
                    let src = window.location.origin + "/images/" + value.products[0].feature_image;
                    image.setAttribute('src', src);
                    image.setAttribute('alt', value.products[0].product_name);
                    image.setAttribute('width', 80);

                    product_image.appendChild(image);

                    unique_id.innerText = value.unique_id;
                    order_date.innerText = value.created_at;
                    quantity.innerText = value.quantity;
                    product_name.innerText = value.products[0].product_name;
                    product_model.innerText = value.products[0].model;
                    product_total_price.innerText = parseInt(value.products[0].product_price) * parseInt(value.quantity);
                    product_size.innerText = value.products[0].size;

                    tr.appendChild(unique_id);
                    tr.appendChild(order_date);
                    tr.appendChild(product_name);
                    tr.appendChild(product_image);
                    tr.appendChild(product_model);
                    tr.appendChild(quantity);
                    tr.appendChild(product_total_price);
                    tr.appendChild(product_size);
                    tr.appendChild(action);
                    modalTableBody.append(tr);
                })
            },
            error:function(response)
            {
                console.warn(response);
            }
        });


    });

    function createElement(element) {
        return document.createElement(element);
    }
</script>

</body>
</html>

