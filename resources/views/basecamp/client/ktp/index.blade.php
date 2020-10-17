@extends('basecamp._components.master')
@section('content')
@include('basecamp._components.side_nav')
<div class="main-content p-3 bg-light" style="margin-left: 250px">
    @include('basecamp.client._components.header')
    <div class="container-fluid">
        <div class="row d-flex align-items-stretch">
            <div class="col-12 col-xl-12">
                <div class="card" id="clientKtpContainer">
                    <div class="card-header">
                        <form>
                            <div class="input-group input-group-flush mb-3">
                                <span class="input-group-text" id="basic-addon1">@</span>
                                <input type="text" class="form-control form-control-flush" placeholder="Search"aria-label="search" aria-describedby="basic-addon1">
                            </div>
                        </form>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-sm table-nowrap card-table">
                            <thead>
                                <tr>
                                    <th>
                                        <a href="#" class="text-muted list-sort" data-sort="orders-order">
                                            Nama
                                        </a>
                                    </th>
                                    <th>
                                        <a href="#" class="text-muted list-sort" data-sort="orders-product">
                                            Alamat
                                        </a>
                                    </th>
                                    <th>
                                        <a href="#" class="text-muted list-sort" data-sort="orders-total">
                                            No.KTP
                                        </a>
                                    </th>
                                    <th>
                                        <a href="#" class="text-muted list-sort" data-sort="orders-date">
                                            File KTP
                                        </a>
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="list">
                                <tr v-for="client in clients">
                                    <td class="orders-order">
                                        @{{ client.name }}
                                    </td>
                                    <td class="orders-product">
                                        @{{ client.jalan+', '+client.kelurahan+', '+client.kecamatan+', '+client.kabupaten+', '+client.kodepos }}
                                    </td>
                                    <td class="orders-total">
                                        @{{ client.ktp }}
                                    </td>
                                    <td>
                                        <a class="btn btn-sm btn-success" :href="'/basecamp/client/ktp/'+client.ktp">Detail</a>
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
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <img src="" alt="" srcset="">
            </div>
        </div>
    </div>
</div>
@endsection
@section('bottom-script')
    <script>
        var _base = document.querySelector('base').getAttribute('href');
        var usersKtp = new Vue({
            el: '#clientKtpContainer',
            data(){
                return {
                    loading: true,
                    clients: [],
                    page: 1
                }
            },
            mounted(){
                this.load()
            },
            methods: {
                load: function(){
                    this.loading = true;
                    axios.get(_base+'/basecamp/v1/_client')
                    .then(
                        response => {
                            response.data.map(
                                data => {
                                    this.clients.push(data)
                                }
                            )
                        }
                    )
                    .finally( () => {
                        this.page = this.page + 1;
                        this.loading = false
                        console.log(this.clients)
                    });
                }
            }
        });
    </script>
@endsection