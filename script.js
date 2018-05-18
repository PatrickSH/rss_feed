//$(document).ready(function(){
    var feeds = JSON.parse(feed);
    console.log(feeds,feed);
    var app = new Vue({
        el: '#app',
        data: {
            message: 'Hello Vue!'
        }
    });
//});