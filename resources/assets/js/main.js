var Vue = require('vue');

var vm = new Vue({
    el: '#emailFormGroup',
    data: {
        exists: false
    },
    methods: {
        checkEmailExists: function (event) {
            alert('Xivato');
            this.exists=true;
        }
    }
});