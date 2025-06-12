document.addEventListener('DOMContentLoaded', 
    function () {
        const toggle = document.getElementById('menu-toggle');
        const menu = document.getElementById('main-menu');

        if (!toggle || !menu) return;

        let isOpen = false;

        toggle.classList.add('fa-bars');
        toggle.classList.remove('fa-xmark');
        
    
        toggle.addEventListener('click', function () {
            isOpen = !isOpen;
            menu.style.display = isOpen ? 'block' : 'none';
    
                toggle.classList.toggle('fa-bars', !isOpen);
                toggle.classList.toggle('fa-xmark', isOpen);
        });
    });
