<!doctype html>
<html lang="en">
    <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      {{-- <script src="https://kit.fontawesome.com/a88a65451c.js" crossorigin="anonymous"></script> --}}
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
      <link rel="stylesheet" href="{{ asset('style.css') }}">
      <link rel="stylesheet" href="{{ asset('css/landing.css') }}">
      <link rel="stylesheet" href="{{ asset('css/fab.css') }}">
    <link rel="shortcut icon" type="image/jpg" href="{{ asset('image/logo.ico')}}"/>
      <link href="https://fonts.googleapis.com/css2?family=Hind:wght@400;500;600;700&display=swap" rel="stylesheet"> 
        <style>
            body, html{
                font-family: 'Hind', sans-serif;
            }
        </style>
      <style>
        .card-title{
          font-size: 1rem;
          font-weight: 200;
          text-transform: uppercase
        }
        .product-title a{
          color: #333;
        }
        .product-title a:hover{
          color: #28a745;
        }
        .footer-link{
          padding-left: 0px;
        }
        .footer-link a{
          color: #bbb;
        }
        .footer-link a:hover{
          color: #fff;
        }
        .footer-link li{
          list-style-type: none;
          padding: .8rem 0;
        }
        .top-slide-list{
          padding-left: 0
        }
        .sidemenu ul{
          padding-left: .5rem;
          list-style-type: none;
        }
        .sidemenu-link{
          text-decoration: none;
          color: #333;
        }
        .sidemenu-link:hover{
          color:#28a745
        }
        .ma-link{
          padding: .5rem 1rem 2rem .5rem;
          color: #333;
          text-decoration: none;
          margin: 1rem
        }
        .ma-link:hover{
          color: #28a745
        }
        .ma-link.active{
          color: #28a745
        }
      </style>
      <title>Makarya</title>
      <script src="https://kit.fontawesome.com/453f770242.js" crossorigin="anonymous"></script>
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
      <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    </head>
    <body style="background-color: whitesmoke">
      @yield('content')
      <!-- Optional JavaScript -->
      <!-- Popper.js first, then Bootstrap JS -->
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
    </body>
</html>