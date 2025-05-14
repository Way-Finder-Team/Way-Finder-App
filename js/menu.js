document.addEventListener('DOMContentLoaded', 
    function () {
        const toggle = document.getElementById('menu-toggle');
        const menu = document.getElementById('main-menu');

        if (!toggle || !menu) return;

        let isOpen = false;

        toggle.classList.remove('fa-xmark');
        toggle.classList.add('fa-bars');
    
        toggle.addEventListener('click', function () {
            isOpen = !isOpen;
            menu.style.display = isOpen ? 'block' : 'none';
    
            if (isOpen) {
                toggle.classList.remove('fa-bars');
                toggle.classList.add('fa-xmark');
            } else {
                toggle.classList.remove('fa-xmark');
                toggle.classList.add('fa-bars');
            }
        });
    });
