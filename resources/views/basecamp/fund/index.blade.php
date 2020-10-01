@extends('basecamp._components.master')
@section('content')
@include('basecamp._components.side_nav')
<div class="main-content p-3 bg-light" style="margin-left: 250px">
    @include('basecamp.fund._components.header')    
    <div class="conainer-fluid">
        <div class="row mb-4">
            <div class="col-12 col-lg-6 col-xl">
                <div class="card">
                    <div class="card-body">
                        <div class="row d-flex align-items-center">
                            <div class="col">
                                <h6 class="mb-0">Funding Total</h6>
                                <span class="h2">Rp.2.000</span>
                                <span class="h6 text-success">+2%</span>
                            </div>
                            <div class="col-auto">
                                <span class="h2">M</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6 col-xl">
                <div class="card">
                    <div class="card-body">
                        <div class="row d-flex align-items-center">
                            <div class="col">
                                <h6 class="mb-0">Pendapatan</h6>
                                <span class="h2">Rp2.000</span>
                                <span class="h6 text-success">+2%</span>
                            </div>
                            <div class="col-auto">
                                <span class="h2">M</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6 col-xl">
                <div class="card">
                    <div class="card-body">
                        <div class="row d-flex align-items-center">
                            <div class="col">
                                <h6 class="mb-0">Funding Aktif</h6>
                                <span class="h2">20</span>
                                <span class="h6 text-success">+2%</span>
                            </div>
                            <div class="col-auto">
                                <span class="h2">C</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6 col-xl">
                <div class="card">
                    <div class="card-body">
                        <div class="row d-flex align-items-center">
                            <div class="col">
                                <h6 class="mb-0">User Aktif Funding</h6>
                                <span class="h2">20</span>
                                <span class="h6 text-success">+2%</span>
                            </div>
                            <div class="col-auto">
                                <span class="h2">C</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row d-flex align-items-stretch">
            <div class="col-12 col-xl-4">
                <div class="card-adjust-xl">
                    <div class="card">
                        <div class="card-header d-flex flex-row align-items-center">
                            <h4 class="mb-0 mr-auto">Aktivitas Terakhir</h4>
                            <small class="mb-0">Lihat semua</small>
                        </div>
                        <div class="card-body" style="overflow-y: auto; height: 400px">
                            <div class="list-group list-group-flush list-group-activity my-n3">
                                <div class="list-group-item">
                                    <div class="row">
                                        <div class="col-auto">
                                            <div class="avatar avatar-sm">
                                                <img src="./assets/img/avatars/profiles/avatar-1.jpg" alt="..."
                                                    class="avatar-img rounded-circle">
                                            </div>

                                        </div>
                                        <div class="col ml-n2">

                                            <!-- Content -->
                                            <div class="small">
                                                <strong>Dianna Smiley</strong> shared your post with Ab Hadley, Adolfo
                                                Hess, and 3 others.
                                            </div>

                                            <!-- Time -->
                                            <small class="text-muted">
                                                2m ago
                                            </small>

                                        </div>
                                    </div> <!-- / .row -->
                                </div>
                                <div class="list-group-item">
                                    <div class="row">
                                        <div class="col-auto">

                                            <!-- Avatar -->
                                            <div class="avatar avatar-sm">
                                                <img src="./assets/img/avatars/profiles/avatar-2.jpg" alt="..."
                                                    class="avatar-img rounded-circle">
                                            </div>

                                        </div>
                                        <div class="col ml-n2">

                                            <!-- Content -->
                                            <div class="small">
                                                <strong>Ab Hadley</strong> reacted to your post with a 😍
                                            </div>

                                            <!-- Time -->
                                            <small class="text-muted">
                                                2m ago
                                            </small>

                                        </div>
                                    </div> <!-- / .row -->
                                </div>
                                <div class="list-group-item">
                                    <div class="row">
                                        <div class="col-auto">

                                            <!-- Avatar -->
                                            <div class="avatar avatar-sm">
                                                <img src="./assets/img/avatars/profiles/avatar-3.jpg" alt="..."
                                                    class="avatar-img rounded-circle">
                                            </div>

                                        </div>
                                        <div class="col ml-n2">

                                            <!-- Content -->
                                            <div class="small">
                                                <strong>Adolfo Hess</strong> commented
                                                <blockquote class="mb-0">
                                                    “I don’t think this really makes sense to do without approval from
                                                    Johnathan since he’s the one...”
                                                </blockquote>
                                            </div>

                                            <!-- Time -->
                                            <small class="text-muted">
                                                2m ago
                                            </small>

                                        </div>
                                    </div> <!-- / .row -->
                                </div>
                                <div class="list-group-item">
                                    <div class="row">
                                        <div class="col-auto">

                                            <!-- Avatar -->
                                            <div class="avatar avatar-sm">
                                                <img src="./assets/img/avatars/profiles/avatar-4.jpg" alt="..."
                                                    class="avatar-img rounded-circle">
                                            </div>

                                        </div>
                                        <div class="col ml-n2">

                                            <!-- Content -->
                                            <div class="small">
                                                <strong>Daniela Dewitt</strong> subscribed to you.
                                            </div>

                                            <!-- Time -->
                                            <small class="text-muted">
                                                2m ago
                                            </small>

                                        </div>
                                    </div> <!-- / .row -->
                                </div>
                                <div class="list-group-item">
                                    <div class="row">
                                        <div class="col-auto">

                                            <!-- Avatar -->
                                            <div class="avatar avatar-sm">
                                                <img src="./assets/img/avatars/profiles/avatar-5.jpg" alt="..."
                                                    class="avatar-img rounded-circle">
                                            </div>

                                        </div>
                                        <div class="col ml-n2">

                                            <!-- Content -->
                                            <div class="small">
                                                <strong>Miyah Myles</strong> shared your post with Ryu Duke, Glen Rouse,
                                                and 3 others.
                                            </div>

                                            <!-- Time -->
                                            <small class="text-muted">
                                                2m ago
                                            </small>

                                        </div>
                                    </div> <!-- / .row -->
                                </div>
                                <div class="list-group-item">
                                    <div class="row">
                                        <div class="col-auto">

                                            <!-- Avatar -->
                                            <div class="avatar avatar-sm">
                                                <img src="./assets/img/avatars/profiles/avatar-6.jpg" alt="..."
                                                    class="avatar-img rounded-circle">
                                            </div>

                                        </div>
                                        <div class="col ml-n2">

                                            <!-- Content -->
                                            <div class="small">
                                                <strong>Ryu Duke</strong> reacted to your post with a 😍
                                            </div>

                                            <!-- Time -->
                                            <small class="text-muted">
                                                2m ago
                                            </small>

                                        </div>
                                    </div> <!-- / .row -->
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-xl-8">
                <div class="card">
                    <div class="card-header d-flex flex-row align-items-center">
                        <h4 class="mb-0 mr-auto">Best seller</h4>
                    </div>
                    <div class="table-responsive mb-0"
                        data-list="{&quot;valueNames&quot;: [&quot;products-product&quot;, &quot;products-stock&quot;, &quot;products-price&quot;, &quot;products-sales&quot;]}"
                        id="productsList" style="overflow-y: auto; height: 400px">
                        <table class="table table-sm table-nowrap table-hover card-table">
                            <thead>
                                <tr>
                                    <th>
                                        <a href="#" class="text-muted list-sort" data-sort="products-product">
                                            Product
                                        </a>
                                    </th>
                                    <th>
                                        <a href="#" class="text-muted list-sort asc" data-sort="products-stock">
                                            Stock
                                        </a>
                                    </th>
                                    <th>
                                        <a href="#" class="text-muted list-sort" data-sort="products-price">
                                            Price
                                        </a>
                                    </th>
                                    <th colspan="2">
                                        <a href="#" class="text-muted list-sort" data-sort="products-sales">
                                            Monthly Sales
                                        </a>
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="list">
                                <tr>
                                    <td class="products-product">
                                        <div class="d-flex align-items-center">

                                            <!-- Image -->
                                            <div class="avatar">
                                                <img class="avatar-img rounded mr-3"
                                                    src="assets/img/avatars/products/product-1.jpg" alt="...">
                                            </div>

                                            <div class="ml-3">

                                                <!-- Heading -->
                                                <h4 class="font-weight-normal mb-1">Sketchpad</h4>

                                                <!-- Text -->
                                                <small class="text-muted">3" x 5" Size</small>

                                            </div>

                                        </div>
                                    </td>
                                    <td class="products-stock">

                                        <!-- Badge -->
                                        <span class="badge badge-soft-success">Available</span>

                                    </td>
                                    <td class="products-price">
                                        $14.99
                                    </td>
                                    <td class="products-sales">
                                        $3,145.23
                                    </td>
                                    <td class="text-right">

                                        <!-- Dropdown -->
                                        <div class="dropdown">
                                            <a href="#" class="dropdown-ellipses dropdown-toggle" role="button"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fe fe-more-vertical"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right" style="">
                                                <a href="#!" class="dropdown-item">
                                                    Action
                                                </a>
                                                <a href="#!" class="dropdown-item">
                                                    Another action
                                                </a>
                                                <a href="#!" class="dropdown-item">
                                                    Something else here
                                                </a>
                                            </div>
                                        </div>

                                    </td>
                                </tr>
                                <tr>
                                    <td class="products-product">
                                        <div class="d-flex align-items-center">

                                            <!-- Image -->
                                            <div class="avatar">
                                                <img class="avatar-img rounded mr-3"
                                                    src="assets/img/avatars/products/product-3.jpg" alt="...">
                                            </div>

                                            <div class="ml-3">

                                                <!-- Heading -->
                                                <h4 class="font-weight-normal mb-1">Nike "Go Bag"</h4>

                                                <!-- Text -->
                                                <small class="text-muted">Leather + Gortex</small>

                                            </div>

                                        </div>
                                    </td>
                                    <td class="products-stock">

                                        <!-- Badge -->
                                        <span class="badge badge-soft-success">Available</span>

                                    </td>
                                    <td class="products-price">
                                        $149.99
                                    </td>
                                    <td class="products-sales">
                                        $2,372.19
                                    </td>
                                    <td class="text-right">

                                        <!-- Dropdown -->
                                        <div class="dropdown">
                                            <a href="#" class="dropdown-ellipses dropdown-toggle" role="button"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fe fe-more-vertical"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a href="#!" class="dropdown-item">
                                                    Action
                                                </a>
                                                <a href="#!" class="dropdown-item">
                                                    Another action
                                                </a>
                                                <a href="#!" class="dropdown-item">
                                                    Something else here
                                                </a>
                                            </div>
                                        </div>

                                    </td>
                                </tr>
                                <tr>
                                    <td class="products-product">
                                        <div class="d-flex align-items-center">

                                            <!-- Image -->
                                            <div class="avatar">
                                                <img class="avatar-img rounded mr-3"
                                                    src="assets/img/avatars/products/product-4.jpg" alt="...">
                                            </div>

                                            <div class="ml-3">

                                                <!-- Heading -->
                                                <h4 class="font-weight-normal mb-1">Swell Bottle</h4>

                                                <!-- Text -->
                                                <small class="text-muted">Bone Clay White</small>

                                            </div>

                                        </div>
                                    </td>
                                    <td class="products-stock">

                                        <!-- Badge -->
                                        <span class="badge badge-soft-success">Available</span>

                                    </td>
                                    <td class="products-price">
                                        $24.99
                                    </td>
                                    <td class="products-sales">
                                        $1,145.23
                                    </td>
                                    <td class="text-right">

                                        <!-- Dropdown -->
                                        <div class="dropdown">
                                            <a href="#" class="dropdown-ellipses dropdown-toggle" role="button"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fe fe-more-vertical"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a href="#!" class="dropdown-item">
                                                    Action
                                                </a>
                                                <a href="#!" class="dropdown-item">
                                                    Another action
                                                </a>
                                                <a href="#!" class="dropdown-item">
                                                    Something else here
                                                </a>
                                            </div>
                                        </div>

                                    </td>
                                </tr>
                                <tr>
                                    <td class="products-product">
                                        <div class="d-flex align-items-center">

                                            <!-- Image -->
                                            <div class="avatar">
                                                <img class="avatar-img rounded mr-3"
                                                    src="assets/img/avatars/products/product-2.jpg" alt="...">
                                            </div>

                                            <div class="ml-3">

                                                <!-- Heading -->
                                                <h4 class="font-weight-normal mb-1">Turtleshell Shades</h4>

                                                <!-- Text -->
                                                <small class="text-muted">UV + Blue Light</small>

                                            </div>

                                        </div>
                                    </td>
                                    <td class="products-stock">

                                        <!-- Badge -->
                                        <span class="badge badge-soft-warning">Unavailable</span>

                                    </td>
                                    <td class="products-price">
                                        $39.99
                                    </td>
                                    <td class="products-sales">
                                        $2,611.82
                                    </td>
                                    <td class="text-right">

                                        <!-- Dropdown -->
                                        <div class="dropdown">
                                            <a href="#" class="dropdown-ellipses dropdown-toggle" role="button"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fe fe-more-vertical"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a href="#!" class="dropdown-item">
                                                    Action
                                                </a>
                                                <a href="#!" class="dropdown-item">
                                                    Another action
                                                </a>
                                                <a href="#!" class="dropdown-item">
                                                    Something else here
                                                </a>
                                            </div>
                                        </div>

                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>
</div>
@endsection
