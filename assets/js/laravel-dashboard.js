let sidebarOpen = true;

const sidebar = document.getElementById('sidebar');
const sidebarTitle = document.getElementById('sidebar-title');
const sidebarIcon = document.getElementById('sidebar-icon');
const sidebarToggle = document.getElementById('sidebar-toggle');
const profileToggle = document.getElementById('profile-toggle');
const profileDropdown = document.getElementById('profile-dropdown');
const navTexts = document.querySelectorAll('.nav-text');
const navItems = document.querySelectorAll('.nav-item');
const dropdownItems = document.querySelectorAll('.dropdown-item');
const nav = document.querySelector('.sidebar-nav');

function initializeSidebar() {
    if (sidebarOpen) {
        nav.classList.add('h-[calc(100vh-80px)]', 'overflow-y-auto', 'overflow-x-hidden', '[scrollbar-width:thin]', '[scrollbar-color:rgba(255,255,255,0.3)_rgba(0,0,0,0.1)]', '[&::-webkit-scrollbar]:w-[2px]', '[&::-webkit-scrollbar]:h-[2px]');
    }
}

function toggleSidebar() {
    sidebarOpen = !sidebarOpen;
    
    if (sidebarOpen) {
        sidebar.classList.remove('w-12');
        sidebar.classList.add('w-64');
        sidebarTitle.classList.remove('hidden');
        sidebarIcon.classList.add('hidden');
        navTexts.forEach(text => text.classList.remove('hidden'));
        nav.classList.add('h-[calc(100vh-80px)]', 'overflow-y-auto', 'overflow-x-hidden', '[scrollbar-width:thin]', '[scrollbar-color:rgba(255,255,255,0.3)_rgba(0,0,0,0.1)]', '[&::-webkit-scrollbar]:w-[2px]', '[&::-webkit-scrollbar]:h-[2px]');
    } else {
        sidebar.classList.remove('w-64');
        sidebar.classList.add('w-12');
        sidebarTitle.classList.add('hidden');
        sidebarIcon.classList.remove('hidden');
        sidebarIcon.classList.add('flex');
        navTexts.forEach(text => text.classList.add('hidden'));
        nav.classList.remove('h-[calc(100vh-80px)]', 'overflow-y-auto', 'overflow-x-hidden', '[scrollbar-width:thin]', '[scrollbar-color:rgba(255,255,255,0.3)_rgba(0,0,0,0.1)]', '[&::-webkit-scrollbar]:w-[2px]', '[&::-webkit-scrollbar]:h-[2px]');
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

function initializeProfileTabs() {
    const tabButtons = document.querySelectorAll('.tab-button');
    const tabContents = document.querySelectorAll('.tab-content');
    
    if (tabButtons.length > 0) {
        tabButtons.forEach(button => {
            button.addEventListener('click', () => {
                const tabId = button.getAttribute('data-tab');
                
                tabContents.forEach(content => {
                    content.classList.add('hidden');
                });
                
                tabButtons.forEach(btn => {
                    btn.classList.remove('border-blue-500', 'text-blue-600');
                    btn.classList.add('border-transparent', 'text-gray-500', 'hover:text-gray-700', 'hover:border-gray-300');
                });
                
                const selectedTab = document.getElementById(`${tabId}-tab`);
                if (selectedTab) {
                    selectedTab.classList.remove('hidden');
                }
                
                button.classList.remove('border-transparent', 'text-gray-500', 'hover:text-gray-700', 'hover:border-gray-300');
                button.classList.add('border-blue-500', 'text-blue-600');
            });
        });
    }
}

// Initialize sidebar and tabs on page load
initializeSidebar();
initializeProfileTabs();