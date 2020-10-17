// $("#datepicker").flatpickr();
var _token = document.querySelector("meta[name='_token']").getAttribute('content');
var _base = document.querySelector("base").getAttribute('href');
var profileIndex = new Vue({
    el: '#profileIndexContainer',
    data() {
        return {
            loading: true,
            user: '',
            transactions: []
        }
    },
    mounted() {
        this.load()
        this.transaction()
    },
    methods: {
        load: function () {
            axios.get(_base+'/v1/user')
                .then(response => {
                    this.user = response.data
                })
                .finally(() => {
                    this.loading = false;
                })
        },
        transaction: function(){
            axios.get(_base+'/v1/transaction')
                .then(
                    response => response.data.map(
                            data => {
                                this.transactions.push(data)
                            }
                        )
                )
        }
    }
})