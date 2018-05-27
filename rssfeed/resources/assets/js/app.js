window.onload = function () {
    /**
     * First we will load all of this project's JavaScript dependencies which
     * includes Vue and other libraries. It is a great starting point when
     * building robust, powerful web applications using Vue and Laravel.
     */

    require('./bootstrap');

    window.Vue = require('vue');


    var v1 = new Vue({
        el: '#app',
        data: {
            userEmail: ""
        },
        methods: {
            saveUser: function (form) {
                console.log(v1.userEmail);
            }
        }
    });
};
