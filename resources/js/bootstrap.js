import axios from 'axios';
window.axios = axios;

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';


import Echo from 'laravel-echo';
import Pusher from 'pusher-js';


window.Pusher = Pusher;

window.Echo = new Echo({
    broadcaster: 'pusher',
    key: process.env.MIX_PUSHER_APP_KEY,
    cluster: process.env.MIX_PUSHER_APP_CLUSTER,
    wsHost: process.env.MIX_WS_HOST,
    wssHost: process.env.WSS_HOST,
    wsPort: process.env.MIX_WS_PORT,
    wssPort: process.env.MIX_WSS_PORT,
    forceTLS: JSON.parse(process.env.MIX_FORCE_TLS || 'false'),
    disableStats: true,
});


