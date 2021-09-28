import Vue from 'vue';

new Vue({
    el: '#app',
    data: {
        message: 'Hello Vue!'
    },
    mounted: function () {
        const url = new URL('https://127.0.0.1/.well-known/mercure');
        url.searchParams.append('topic', 'https://example.com/users/{username}');

        const eventSource = new EventSource(url, {
            withCredentials: true
        });

        // The callback will be called every time an update is published
        eventSource.onmessage = e => console.log(e); // do something with the payload
    }
})