import './bootstrap';

import Alpine from 'alpinejs';

import { Loading } from 'notiflix/build/notiflix-loading-aio';
Loading.init({
    backgroundColor: 'rgba(0, 0, 0, 1)' // Pure black background
});

Loading.dots();

// Hide Notiflix Loader & Remove Preloader when page is ready
window.addEventListener('load', () => {
    Loading.remove(); // Hide Notiflix Loader
    document.getElementById('preload').style.display = 'none'; // Hide Preloader
});



window.Alpine = Alpine;

Alpine.start();
// Initialize Notiflix with a black background
