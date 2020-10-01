@extends('basecamp._components.master')
@section('content')
    @include('basecamp._components.side_nav')
    <div class="main-content p-3 bg-light" style="margin-left: 250px">
        <div class="header mb-3" style="border-bottom:1px solid rgb(227, 235, 246)">
            <div class="container-fluid">
                <div class="header-body py-3">
                    <div class="row d-flex align-items-end">
                        <div class="col">
                            <h6 class="mb-0">BASECAMP</h6>
                            <h1>Dashboard</h1>
                        </div>
                        <div class="col-auto">
                            <button class="btn btn-success">Report</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="conainer-fluid">
            <div class="row mb-4">
                <div class="col-12 col-lg-6 col-xl">
                    <div class="card">
                        <div class="card-body">
                            <div class="row d-flex align-items-center">
                                <div class="col">
                                    <h6 class="mb-0">User Baru</h6>
                                    <span class="h2">2.000</span>
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
                                    <h6 class="mb-0">User Terdaftar</h6>
                                    <span class="h2">2.000</span>
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
                                    <h6 class="mb-0">Transaksi Funding</h6>
                                    <span class="h2">Rp2.000</span>
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
                                    <h6 class="mb-0">Transaksi Market</h6>
                                    <span class="h2">Rp2.000</span>
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
                <div class="col-12 col-xl-8">
                    <div class="card">
                        <div class="card-header d-flex flex-row align-items-center">
                            <h4 class="mb-0 mr-auto">Transaksi Trakhir</h4>
                            <ul class="nav nav-tabs card-header-tabs" id="transactionTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                  <a class="nav-link active" id="fund-tab" data-toggle="tab" href="#fund" role="tab" aria-controls="fund" aria-selected="true">Client</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                  <a class="nav-link" id="market-tab" data-toggle="tab" href="#market" role="tab" aria-controls="market" aria-selected="false">Transaksi</a>
                                </li>
                            </ul>
                        </div>
                        <div class="card-body">
                            <div class="tab-content" id="transactionTabContent"  style="min-height: 340px">
                                <div class="tab-pane fade show active" id="fund" role="tabpanel" aria-labelledby="fund-tab">
                                    <canvas id="myChart" width="627" height="300"></canvas>
                                    <script>
                                        var ctx = document.getElementById('myChart').getContext('2d');
                                        var myChart = new Chart(ctx, {
                                            type: 'bar',
                                            data: {
                                                labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
                                                datasets: [{
                                                    label: '# of Votes',
                                                    data: [12, 19, 3, 5, 2, 3],
                                                    backgroundColor: '#00e676',
                                                    borderColor: '#00e676',
                                                    borderWidth: 1
                                                }]
                                            },
                                            options: {
                                                scales: {
                                                    xAxes: [{
                                                        gridLines: {
                                                            display: false,
                                                            borderDash: [1, 0],
                                                        },
                                                        barPercentage: 0.1
                                                    }],
                                                    yAxes: [{
                                                        gridLines: {
                                                            color: "rgb(227, 235, 246)",
                                                            borderDash: [2, 2],
                                                            drawBorder: false,
                                                        },
                                                        ticks: {
                                                            beginAtZero: true
                                                        }
                                                    }]
                                                }
                                            }
                                        });
                                    </script>
                                </div>
                                <div class="tab-pane fade" id="market" role="tabpanel" aria-labelledby="market-tab">
                                    <canvas id="myChart3" width="627" height="300"></canvas>
                                    <script>
                                        var ctx3 = document.getElementById('myChart3').getContext('2d');
                                        var myChart = new Chart(ctx3, {
                                            type: 'bar',
                                            data: {
                                                labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
                                                datasets: [{
                                                    label: '# of Votes',
                                                    data: [12, 19, 3, 5, 2, 3],
                                                    backgroundColor: '#00e676',
                                                    borderColor: '#00e676',
                                                    borderWidth: 1
                                                }]
                                            },
                                            options: {
                                                scales: {
                                                    xAxes: [{
                                                        gridLines: {
                                                            display: false,
                                                            borderDash: [1, 0],
                                                        },
                                                        barPercentage: 0.1
                                                    }],
                                                    yAxes: [{
                                                        gridLines: {
                                                            color: "rgb(227, 235, 246)",
                                                            borderDash: [2, 2],
                                                            drawBorder: false,
                                                        },
                                                        ticks: {
                                                            beginAtZero: true
                                                        }
                                                    }]
                                                }
                                            }
                                        });
                                    </script>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-xl-4">
                    <div class="card h-100">
                        <div class="card-header d-flex flex-row align-items-center">
                            <h4 class="mb-0 mr-auto">Last 10</h4>
                            <ul class="nav nav-tabs card-header-tabs" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                  <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Client</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                  <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Transaksi</a>
                                </li>
                            </ul>
                        </div>
                        <div class="card-body">
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                    <div class="list-group list-group-flush list-group-focus">
                                        <a class="list-group-item" href="../team-overview.html">
                                            <div class="row align-items-center">
                                              <div class="col-auto">
                                                <div class="avatar">
                                                  <img src="../assets/img/avatars/teams/team-logo-1.jpg" alt="..." class="avatar-img rounded">
                                                </div>
                                              </div>
                                              <div class="col ml-n2">
                                                <h4 class="text-body text-focus mb-1 name">
                                                  Airbnb
                                                </h4>
                                                <p class="small text-muted mb-0">
                                                  <span class="fe fe-clock"></span> <time datetime="2018-05-24">Updated 2hr ago</time>
                                                </p>
                                              </div>
                                            </div>
                                          </a>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">...</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection