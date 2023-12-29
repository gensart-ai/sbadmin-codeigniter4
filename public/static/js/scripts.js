window.addEventListener('DOMContentLoaded', event => {

    // To close the sidebar when clicking outside sidebar itself
    // Only for mobile
    document.getElementById('layoutSidenav_content').addEventListener('click', _ => {
        const isMobile = window.matchMedia('(max-width: 768px)').matches
        const isNavOpened = document.body.classList.contains('sb-sidenav-toggled');
        if (isMobile && isNavOpened) {
            document.body.classList.toggle('sb-sidenav-toggled');
        }
    })

    // Toggle the side navigation
    const sidebarToggle = document.body.querySelector('#sidebarToggle');
    if (sidebarToggle) {
        if (localStorage.getItem('sb|sidebar-toggle') == 'true') {
            document.body.classList.toggle('sb-sidenav-toggled');
        }
        sidebarToggle.addEventListener('click', event => {
            event.preventDefault();
            document.body.classList.toggle('sb-sidenav-toggled');
            localStorage.setItem('sb|sidebar-toggle', document.body.classList.contains('sb-sidenav-toggled'));
        });
    }

});
