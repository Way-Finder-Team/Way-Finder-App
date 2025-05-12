document.addEventListener('DOMContentLoaded', 
    function () {
        const toggle = document.getElementById('menu-toggle');
        const menu = document.getElementById('main-menu');

        if (!toggle || !menu) return;

        let isOpen = false;

        toggle.addEventListener('click', function () {
            isOpen = !isOpen;
            menu.style.display = isOpen ? 'block' : 'none';
            toggle.textContent = isOpen ? '✖' : '☰';
        });
    }
);
