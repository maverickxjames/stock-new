import './bootstrap';

import Alpine from 'alpinejs';

import { Loading } from 'notiflix/build/notiflix-loading-aio';
Loading.init({
    backgroundColor: 'rgba(0, 0, 0, 1)' // Pure black background
});
// Example Usage of Notiflix Loading
Loading.dots(); // Show loading spinner
setTimeout(() => Loading.remove(), 1000); // Remove after 2 seconds
window.Alpine = Alpine;

Alpine.start();
// Initialize Notiflix with a black background
