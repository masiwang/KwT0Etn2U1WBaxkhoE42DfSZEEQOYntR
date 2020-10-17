<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <base href="http://127.0.0.1:8000" target="_self">
        <meta name="_token" content="{{ csrf_token() }}">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
        <title>Hello, world!</title>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
        <style>
            body, html{
                font-family: 'Poppins', sans-serif;
                color: #12263f;
                height: 100%
            }
            h1{
                font-size:1.625rem;
            }
            h4{
                font-size:.9375rem
            }
            h6{
                font-size: .625rem;
            }
            .h4{
                font-size:.9375rem
            }
            .h2{
                font-size: 1.25rem;
            }
            .card{
                border-color: #edf2f9;
                box-shadow: 0 0.75rem 1.5rem rgba(18,38,63,.03)
            }
            .text-success{
                color: #00e676!important;
            }
            .btn-success{
                background-color: #00e676;
                border: 0px;
                box-shadow: 0 0.75rem 1.5rem rgba(18,38,63,.03)
            }
            .card-header{
                height: 60px;
                background-color: white;
                border-bottom: 1px solid  #edf2f9;
            }
            .nav-tabs .nav-link.active{
                border-color: transparent transparent #2c7be5;
            }
            .card-header-tabs .nav-link{
                font-size: .75rem;
                padding-top: calc((70px - 1em * 2.5)/ 2)!important;
                padding-bottom: calc((70px - 1em * 2.5)/ 2)!important;
                margin-top:-8px
            }
            .side-nav .nav-link-child{
                padding-left: 2rem;
                font-size: .8rem
            }
            label{
                font-size: .85rem;
                margin-bottom: .5rem
            }
            .form-control{
                border: 1px solid #d2ddec;
                font-size: .8rem;
                padding: .5rem .75rem
            }
            small{
                font-size: .75rem
            }
            .small{
                font-size: .75rem
            }
            .subtitle{
                font-weight: 600;
                color: #95aac9 
            }
            .btn{
                font-size:.8rem;
                padding: .5rem .75rem
            }
            th{
                font-size: .625rem;
                vertical-align: middle;
                background-color: #f9fbfd!important;
                text-transform: uppercase;
                font-weight: 600;
                letter-spacing: .08em;
                color: #95aac9;
                border-bottom-width: 1px;
                white-space: nowrap;
                padding: 1rem!important;
                border-top: 1px solid #edf2f9;
            }
            td{
                vertical-align: middle;
                padding: 1rem!important;
            }
            td:first-child, th:first-child {
                padding-left: 1.5rem!important;
            }
            td:last-child, th:last-child {
                padding-right: 1.5rem!important;
            }
            th a{
                text-decoration: none;
            }
            .badge-soft-success{
                color: #00d97e;
                background-color: #ccf7e5;
            }
            .badge-soft-warning {
                color: #f6c343;
                background-color: #fdf3d9;
            }
            .badge{
                font-size: 80%;
            }
            .dropdown-menu{
                font-size: .9rem;
                border: 1px solid rgba(18,38,63,.1);
            }
            .dropdown-item {
                display: block;
                width: 100%;
                padding: .375rem 1.5rem;
                clear: both;
                font-weight: 400;
                color: #6e84a3;
                text-align: inherit;
                white-space: nowrap;
                background-color: transparent;
                border: 0;
            }
            .table-sm{
                font-size: .8125rem;
            }
            .nav-link.active{
                background-color: transparent!important
            }
            .input-group-flush .form-control{
                border: 0px
            }
            .input-group-flush .input-group-text{
                background-color: transparent;
                border: 0;
            }
            input:focus, textarea:focus, select:focus{
                outline: none;
            }
            .form-control[readonly] {
                background-color: white;
                opacity: 1;
            }
        </style>
        <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
    </head>
    <body>
        @yield('content')
        @yield('bottom-script')
        <script src="/Chart.extension.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
        <script>
            $(".flatpickr-input").flatpickr();
        </script>
        <script src="https://cdn.jsdelivr.net/npm/@shopify/draggable@1.0.0-beta.6/lib/draggable.bundle.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tablesort/5.2.1/tablesort.min.js"></script>
    </body>
</html>