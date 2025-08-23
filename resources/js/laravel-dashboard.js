 // Dashboard state
let sidebarOpen = true;

// DOM elements
const sidebar = document.getElementById('sidebar');
const sidebarTitle = document.getElementById('sidebar-title');
const sidebarIcon = document.getElementById('sidebar-icon');
const sidebarToggle = document.getElementById('sidebar-toggle');
const profileToggle = document.getElementById('profile-toggle');
const profileDropdown = document.getElementById('profile-dropdown');
const navTexts = document.querySelectorAll('.nav-text');
const navItems = document.querySelectorAll('.nav-item');
const dropdownItems = document.querySelectorAll('.dropdown-item');

function toggleSidebar() {
    sidebarOpen = !sidebarOpen;
    
    if (sidebarOpen) {
        sidebar.classList.remove('w-12');
        sidebar.classList.add('w-64');
        sidebarTitle.classList.remove('hidden');
        sidebarIcon.classList.add('hidden');
        navTexts.forEach(text => text.classList.remove('hidden'));
    } else {
        sidebar.classList.remove('w-64');
        sidebar.classList.add('w-12');
        sidebarTitle.classList.add('hidden');
        sidebarIcon.classList.remove('hidden');
        sidebarIcon.classList.add('flex');
        navTexts.forEach(text => text.classList.add('hidden'));
        
        // Close all dropdowns when sidebar collapses
        dropdownItems.forEach(item => {
            const menu = item.querySelector('.dropdown-menu');
            const arrow = item.querySelector('.dropdown-arrow');
            menu.classList.add('hidden');
            arrow.classList.remove('rotate-180');
        });
    }
}

sidebarToggle.addEventListener('click', toggleSidebar);

profileToggle.addEventListener('click', function(e) {
    e.stopPropagation();
    profileDropdown.classList.toggle('hidden');
});

document.addEventListener('click', function(e) {
    if (!profileToggle.contains(e.target) && !profileDropdown.contains(e.target)) {
        profileDropdown.classList.add('hidden');
    }
});

dropdownItems.forEach(item => {
    const trigger = item.querySelector('.dropdown-trigger');
    const menu = item.querySelector('.dropdown-menu');
    const arrow = item.querySelector('.dropdown-arrow');
    
    trigger.addEventListener('click', function() {
        if (sidebarOpen) {
            menu.classList.toggle('hidden');
            arrow.classList.toggle('rotate-180');
        }
    });
});

navItems.forEach(item => {
    const tooltip = item.querySelector('.tooltip');
    let timeoutId;
    
    item.addEventListener('mouseenter', function() {
        if (!sidebarOpen && tooltip) {
            clearTimeout(timeoutId);
            tooltip.classList.remove('hidden');
        }
    });
    
    item.addEventListener('mouseleave', function() {
        if (!sidebarOpen && tooltip) {
            timeoutId = setTimeout(() => {
                tooltip.classList.add('hidden');
            }, 300);
        }
    });
});