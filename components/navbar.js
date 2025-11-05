// navbar.js
document.addEventListener('DOMContentLoaded', function() {
    const mobileMenuButton = document.getElementById('mobileMenuButton');
    const closeMobileMenu = document.getElementById('closeMobileMenu');
    const mobileMenu = document.getElementById('mobileMenu');
    
    if (mobileMenuButton && mobileMenu && closeMobileMenu) {
        // Open mobile menu
        mobileMenuButton.addEventListener('click', function() {
            mobileMenu.classList.remove('-translate-x-full');
            document.body.style.overflow = 'hidden';
        });
        
        // Close mobile menu
        closeMobileMenu.addEventListener('click', function() {
            mobileMenu.classList.add('-translate-x-full');
            document.body.style.overflow = '';
        });
        
        // Close menu when clicking on links
        const mobileLinks = mobileMenu.querySelectorAll('a');
        mobileLinks.forEach(link => {
            link.addEventListener('click', function() {
                mobileMenu.classList.add('-translate-x-full');
                document.body.style.overflow = '';
            });
        });
        
        // Close menu when clicking outside
        mobileMenu.addEventListener('click', function(e) {
            if (e.target === mobileMenu) {
                mobileMenu.classList.add('-translate-x-full');
                document.body.style.overflow = '';
            }
        });
        
        // Close menu with Escape key
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape' && !mobileMenu.classList.contains('-translate-x-full')) {
                mobileMenu.classList.add('-translate-x-full');
                document.body.style.overflow = '';
            }
        });
    }
    
    // Highlight current page in navigation
    function highlightCurrentPage() {
        const currentPage = window.location.pathname.split('/').pop() || 'index.html';
        const navLinks = document.querySelectorAll('nav a, .nav-links a');
        
        navLinks.forEach(link => {
            const linkHref = link.getAttribute('href');
            if (linkHref === currentPage) {
                link.classList.add('text-primary', 'dark:text-primary-dark', 'font-bold');
                link.classList.remove('text-on-surface', 'dark:text-on-surface-dark', 'font-medium');
            }
        });
    }
    
    highlightCurrentPage();
});