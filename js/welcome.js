window.addEventListener('load', function () {
    const title = document.getElementById('welcome-title');

    if (sessionStorage.getItem('welcomeShown')) {
        title.classList.add('hidden');
    } else {
        setTimeout(function () {
            title.classList.add('hidden');
            sessionStorage.setItem('welcomeShown', 'true');
    }, 10000);
}
});
