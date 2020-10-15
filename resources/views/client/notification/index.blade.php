@extends('client._components.master')
@section('title') Portofolio @endsection
@section('top-script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prettydate/0.1.0/prettydate.min.js"></script>
@endsection
@section('content')
    @include('client._components.top_nav')
    <div class="container mb-5">
        <div class="row mt-3">
            <div class="col-12 p-2">
                <header class="row border-bottom">
                    <div class="col-12 col-md-6">
                        <h4 class="text-uppercase">Notifikasi</h4>
                    </div>
                </header>
            </div>
        </div>
        <div class="card bg-white shadow mt-3" id="notification-container" style="height: 600px">
            <div class="row">
                <div class="col-12 col-md-4" style="overflow-y: scroll">
                    <div class="p-3">
                        <ul class="list-group list-group-flush">
                            <a v-for="notification in notifications" class="list-group-item text-dark" @click="open(notification.id)">
                                <h6>@{{ notification.title }}</h6>
                                <p class="mb-0">@{{ notification.body }}</p>
                                <small>@{{ notification.timestamp }}</small>
                            </a>
                            <li v-show="!is_endpage" class="mt-3">
                                <button class="btn btn-success btn-sm w-100">Lebih banyak</button>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-md-8 p-4" :class="(message_loading) && bg-dark">
                    {{-- <div class="p-3">
                        <h4>@{{ message.title }}</h4>
                        <small>@{{ message.timestamp }}</small>
                        <hr>
                        <div>@{{ message.body }}</div>
                    </div> --}}
                    <div class="bg-dark" style="height: 100%">&nbsp;</div>
                </div>
            </div>
        </div>
    </div>
    @include('client._components.footer')
@endsection
@section('bottom-script')
<script>
    $(".prettydate").prettydate();
</script>
<script>
    var _base = document.querySelector("base").getAttribute('href');
    var _token = document.querySelector("meta[name='_token']").getAttribute('content');
    var notification = new Vue({
        el: '#notification-container',
        data(){
            return{
                loading: true,
                notifications: [],
                message: '',
                message_loading: true,
                page: 0,
                is_endpage: false,
            }
        },
        mounted(){
            this.load()
        },
        methods:{
            load: function(){
                this.loading = true;
                axios.get(_base+'/v1/notification', {
                    params: {
                        page: this.page
                    }
                })
                .then(response => {
                    (response.data.length < 6 ) ? this.is_endpage = true : this.is_endpage = false;
                    response.data.map(data => this.notifications.push(data))
                })
                .finally(() => {
                    this.loading = false;
                    this.page = this.page + 1
                })
            },
            open: function(id){
                this.message_loading = true;
                axios.get('http://127.0.0.1:8000/v1/notification/'+id)
                .then(response => {
                    this.message = response.data
                })
                .finally(() => {
                    this.message_loading = false;
                })
            }
        }
    });
</script>
@endsection