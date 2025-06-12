window.addEventListener('load', function () {
    const title = document.getElementById('welcome-title');
    if (!title) return;

    if (sessionStorage.getItem('welcomeShown') === 'true') {
        title.classList.add('hidden');
    } else {
        setTimeout(function () {
            title.classList.add('hidden');
            sessionStorage.setItem('welcomeShown', 'true');
        }, 7000);
    }
});
