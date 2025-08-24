<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="{{ asset('laravel-dashboard/css/laravel-dashboard.css') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 font-sans">
    <div id="dashboard" class="flex h-screen">
        <div id="sidebar" class="w-64 bg-blue-800 text-white sidebar-transition relative h-full">
            <div class="p-4 flex items-center justify-between border-b border-blue-700">
                <div id="sidebar-title" class="flex items-center space-x-2 fade-in">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M2 11a1 1 0 011-1h2a1 1 0 011 1v5a1 1 0 01-1 1H3a1 1 0 01-1-1v-5zM8 7a1 1 0 011-1h2a1 1 0 011 1v9a1 1 0 01-1 1H9a1 1 0 01-1-1V7zM14 4a1 1 0 011-1h2a1 1 0 011 1v12a1 1 0 01-1 1h-2a1 1 0 01-1-1V4z"/>
                    </svg>
                    <span class="text-xl font-bold">Dashboard</span>
                </div>   
             <div id="sidebar-icon" class="justify-center w-full hidden">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M2 11a1 1 0 011-1h2a1 1 0 011 1v5a1 1 0 01-1 1H3a1 1 0 01-1-1v-5zM8 7a1 1 0 011-1h2a1 1 0 011 1v9a1 1 0 01-1 1H9a1 1 0 01-1-1V7zM14 4a1 1 0 011-1h2a1 1 0 011 1v12a1 1 0 01-1 1h-2a1 1 0 01-1-1V4z"/>
                    </svg>
                </div>
            </div>
            <nav class="mt-6 sidebar-nav">
                <div class="relative group nav-item">
                    <a href="/dashboard"
                        class="px-4 py-2 flex items-center text-blue-100 hover:bg-blue-700 cursor-pointer block">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"/>
                        </svg>
                        <span class="nav-text ml-3">Dashboard</span>
                    </a>
                    <div class="tooltip absolute left-12 top-0 bg-white text-gray-800 rounded-lg shadow-xl border border-gray-200 z-50 min-w-max overflow-hidden hidden">
                        <a href="/dashboard"
                            class="flex items-center px-4 py-3 hover:bg-gray-50 cursor-pointer transition-colors block">
                            <svg class="w-4 h-4 text-blue-600 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"/>
                            </svg>
                            <span class="font-medium">Dashboard</span>
                        </a>
                    </div>
                </div>
                <div class="mt-2 relative group nav-item dropdown-item">
                    <div class="dropdown-trigger px-4 py-2 flex items-center justify-between text-blue-100 hover:bg-blue-700 cursor-pointer">
                        <div class="flex items-center">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"/>
                                <path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"/>
                            </svg>
                            <span class="nav-text ml-3">Reports</span>
                        </div>
                        <svg class="dropdown-arrow w-3 h-3 transition-transform nav-text" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"/>
                        </svg>
                    </div>
                    <div class="dropdown-menu ml-6 mt-2 space-y-2 hidden">
                        <a href="/reports/sales"
                            class="px-4 py-2 text-blue-100 hover:bg-blue-700 cursor-pointer block">Sales</a>
                        <a href="/reports/analytics"
                            class="px-4 py-2 text-blue-100 hover:bg-blue-700 cursor-pointer block">Analytics</a>
                        <a href="/reports/export"
                            class="px-4 py-2 text-blue-100 hover:bg-blue-700 cursor-pointer block">Export</a>
                    </div>
                    <div class="tooltip absolute left-12 top-0 bg-white text-gray-800 rounded-lg shadow-xl border border-gray-200 z-50 min-w-max overflow-hidden hidden">
                        <div>
                            <div class="flex items-center px-4 py-3 border-b border-gray-100">
                                <svg class="w-4 h-4 text-blue-600 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"/>
                                    <path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"/>
                                </svg>
                                <span class="font-medium">Reports</span>
                            </div>
                            <div class="py-1">
                                <a href="/reports/sales"
                                    class="flex items-center px-4 py-2 hover:bg-gray-50 cursor-pointer transition-colors">
                                    <svg class="w-4 h-4 text-green-600 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M8.433 7.418c.155-.103.346-.196.567-.267v1.698a2.305 2.305 0 01-.567-.267C8.07 8.34 8 8.114 8 8c0-.114.07-.34.433-.582zM11 12.849v-1.698c.22.071.412.164.567.267.364.243.433.468.433.582 0 .114-.07.34-.433.582a2.305 2.305 0 01-.567.267z"/>
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-13a1 1 0 10-2 0v.092a4.535 4.535 0 00-1.676.662C6.602 6.234 6 7.009 6 8c0 .99.602 1.765 1.324 2.246.48.32 1.054.545 1.676.662v1.941c-.391-.127-.68-.317-.843-.504a1 1 0 10-1.51 1.31c.562.649 1.413 1.076 2.353 1.253V15a1 1 0 102 0v-.092a4.535 4.535 0 001.676-.662C13.398 13.766 14 12.991 14 12c0-.99-.602-1.765-1.324-2.246A4.535 4.535 0 0011 9.092V7.151c.391.127.68.317.843.504a1 1 0 101.511-1.31c-.563-.649-1.413-1.076-2.354-1.253V5z" clip-rule="evenodd"/>
                                    </svg>
                                    <span class="text-sm">Sales</span>
                                </a>
                                <a href="/reports/analytics"
                                    class="flex items-center px-4 py-2 hover:bg-gray-50 cursor-pointer transition-colors">
                                    <svg class="w-4 h-4 text-purple-600 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M2 11a1 1 0 011-1h2a1 1 0 011 1v5a1 1 0 01-1 1H3a1 1 0 01-1-1v-5zM8 7a1 1 0 011-1h2a1 1 0 011 1v9a1 1 0 01-1 1H9a1 1 0 01-1-1V7zM14 4a1 1 0 011-1h2a1 1 0 011 1v12a1 1 0 01-1 1h-2a1 1 0 01-1-1V4z"/>
                                    </svg>
                                    <span class="text-sm">Analytics</span>
                                </a>
                                <a href="/reports/export"
                                    class="flex items-center px-4 py-2 hover:bg-gray-50 cursor-pointer transition-colors">
                                    <svg class="w-4 h-4 text-orange-600 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M3 17a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm3.293-7.707a1 1 0 011.414 0L9 10.586V3a1 1 0 112 0v7.586l1.293-1.293a1 1 0 111.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z" clip-rule="evenodd"/>
                                    </svg>
                                    <span class="text-sm">Export</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div> 
                <div class="mt-2 relative group nav-item">
                    <a href="/team"
                        class="px-4 py-2 flex items-center text-blue-100 hover:bg-blue-700 cursor-pointer block">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z"/>
                        </svg>
                        <span class="nav-text ml-3">Team</span>
                    </a>
                    <div class="tooltip absolute left-12 top-0 bg-white text-gray-800 rounded-lg shadow-xl border border-gray-200 z-50 min-w-max overflow-hidden hidden">
                        <a href="/team"
                            class="flex items-center px-4 py-3 hover:bg-gray-50 cursor-pointer transition-colors block">
                            <svg class="w-4 h-4 text-green-600 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z"/>
                            </svg>
                            <span class="font-medium">Team</span>
                        </a>
                    </div>
                </div>
                <div class="mt-2 relative group nav-item dropdown-item">
                    <div class="dropdown-trigger px-4 py-2 flex items-center justify-between text-blue-100 hover:bg-blue-700 cursor-pointer">
                        <div class="flex items-center">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 2L3 7v11a1 1 0 001 1h3a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1h3a1 1 0 001-1V7l-7-5z" clip-rule="evenodd"/>
                            </svg>
                            <span class="nav-text ml-3">Products</span>
                        </div>
                        <svg class="dropdown-arrow w-3 h-3 transition-transform nav-text" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"/>
                        </svg>
                    </div>
                    <div class="dropdown-menu ml-6 mt-2 space-y-2 hidden">
                        <a href="/products/inventory"
                            class="px-4 py-2 text-blue-100 hover:bg-blue-700 cursor-pointer block">Inventory</a>
                        <a href="/products/categories"
                            class="px-4 py-2 text-blue-100 hover:bg-blue-700 cursor-pointer block">Categories</a>
                        <a href="/products/suppliers"
                            class="px-4 py-2 text-blue-100 hover:bg-blue-700 cursor-pointer block">Suppliers</a>
                        <a href="/products/pricing"
                            class="px-4 py-2 text-blue-100 hover:bg-blue-700 cursor-pointer block">Pricing</a>
                    </div>
                    <div class="tooltip absolute left-12 top-0 bg-white text-gray-800 rounded-lg shadow-xl border border-gray-200 z-50 min-w-max overflow-hidden hidden">
                        <div>
                            <div class="flex items-center px-4 py-3 border-b border-gray-100">
                                <svg class="w-4 h-4 text-blue-600 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 2L3 7v11a1 1 0 001 1h3a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1h3a1 1 0 001-1V7l-7-5z" clip-rule="evenodd"/>
                                </svg>
                                <span class="font-medium">Products</span>
                            </div>
                            <div class="py-1">
                                <a href="/products/inventory"
                                    class="flex items-center px-4 py-2 hover:bg-gray-50 cursor-pointer transition-colors">
                                    <svg class="w-4 h-4 text-green-600 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M4 3a2 2 0 100 4h12a2 2 0 100-4H4z"/>
                                        <path fill-rule="evenodd" d="M3 8h14v7a2 2 0 01-2 2H5a2 2 0 01-2-2V8zm5 3a1 1 0 011-1h2a1 1 0 110 2H9a1 1 0 01-1-1z" clip-rule="evenodd"/>
                                    </svg>
                                    <span class="text-sm">Inventory</span>
                                </a>
                                <a href="/products/categories"
                                    class="flex items-center px-4 py-2 hover:bg-gray-50 cursor-pointer transition-colors">
                                    <svg class="w-4 h-4 text-purple-600 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M17.707 9.293a1 1 0 010 1.414l-7 7a1 1 0 01-1.414 0l-7-7A.997.997 0 012 10V5a3 3 0 013-3h5c.256 0 .512.098.707.293l7 7zM5 6a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"/>
                                    </svg>
                                    <span class="text-sm">Categories</span>
                                </a>
                                <a href="/products/suppliers"
                                    class="flex items-center px-4 py-2 hover:bg-gray-50 cursor-pointer transition-colors">
                                    <svg class="w-4 h-4 text-orange-600 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M8 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM15 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0z"/>
                                        <path d="M3 4a1 1 0 00-1 1v10a1 1 0 001 1h1.05a2.5 2.5 0 014.9 0H10a1 1 0 001-1V5a1 1 0 00-1-1H3zM14 7a1 1 0 00-1 1v6.05A2.5 2.5 0 0115.95 16H17a1 1 0 001-1V8a1 1 0 00-.293-.707L15 4.586A1 1 0 0014.414 4H14v3z"/>
                                    </svg>
                                    <span class="text-sm">Suppliers</span>
                                </a>
                                <a href="/products/pricing"
                                    class="flex items-center px-4 py-2 hover:bg-gray-50 cursor-pointer transition-colors">
                                    <svg class="w-4 h-4 text-yellow-600 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M8.433 7.418c.155-.103.346-.196.567-.267v1.698a2.305 2.305 0 01-.567-.267C8.07 8.34 8 8.114 8 8c0-.114.07-.34.433-.582zM11 12.849v-1.698c.22.071.412.164.567.267.364.243.433.468.433.582 0 .114-.07.34-.433.582a2.305 2.305 0 01-.567.267z"/>
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-13a1 1 0 10-2 0v.092a4.535 4.535 0 00-1.676.662C6.602 6.234 6 7.009 6 8c0 .99.602 1.765 1.324 2.246.48.32 1.054.545 1.676.662v1.941c-.391-.127-.68-.317-.843-.504a1 1 0 10-1.51 1.31c.562.649 1.413 1.076 2.353 1.253V15a1 1 0 102 0v-.092a4.535 4.535 0 001.676-.662C13.398 13.766 14 12.991 14 12c0-.99-.602-1.765-1.324-2.246A4.535 4.535 0 0011 9.092V7.151c.391.127.68.317.843.504a1 1 0 101.511-1.31c-.563-.649-1.413-1.076-2.354-1.253V5z" clip-rule="evenodd"/>
                                    </svg>
                                    <span class="text-sm">Pricing</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>        
                <div class="mt-2 relative group nav-item">
                    <a href="/settings"
                        class="px-4 py-2 flex items-center text-blue-100 hover:bg-blue-700 cursor-pointer block">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd"/>
                        </svg>
                        <span class="nav-text ml-3">Settings</span>
                    </a>
                    <div class="tooltip absolute left-12 top-0 bg-white text-gray-800 rounded-lg shadow-xl border border-gray-200 z-50 min-w-max overflow-hidden hidden">
                        <a href="/settings"
                            class="flex items-center px-4 py-3 hover:bg-gray-50 cursor-pointer transition-colors block">
                            <svg class="w-4 h-4 text-gray-600 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd"/>
                            </svg>
                            <span class="font-medium">Settings</span>
                        </a>
                    </div>
                </div>
                <div class="mt-2 relative group nav-item">
                    <a href="/help"
                        class="px-4 py-2 flex items-center text-blue-100 hover:bg-blue-700 cursor-pointer block">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"/>
                        </svg>
                        <span class="nav-text ml-3">Help</span>
                    </a>
                    <div class="tooltip absolute left-12 top-0 bg-white text-gray-800 rounded-lg shadow-xl border border-gray-200 z-50 min-w-max overflow-hidden hidden">
                        <a href="/help"
                            class="flex items-center px-4 py-3 hover:bg-gray-50 cursor-pointer transition-colors block">
                            <svg class="w-4 h-4 text-indigo-600 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"/>
                            </svg>
                            <span class="font-medium">Help</span>
                        </a>
                    </div>
                </div>
            </nav>
        </div>
        <div class="flex-1 flex flex-col overflow-hidden">
            <header class="bg-white shadow-sm z-10">
                <div class="flex items-center justify-between p-4">
                    <button id="sidebar-toggle" class="text-gray-500 focus:outline-none cursor-pointer">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"/>
                        </svg>
                    </button>
                    <div class="relative">
                        <button id="profile-toggle" class="flex items-center space-x-2 focus:outline-none cursor-pointer">
                            <div class="h-8 w-8 rounded-full bg-blue-500 flex items-center justify-center text-white font-bold">JD</div>
                            <span class="text-gray-700">John Doe</span>
                            <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"/>
                            </svg>
                        </button>
                        <div id="profile-dropdown"
                            class="absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg py-1 z-20 hidden">
                            <a href="/profile"
                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Profile</a>
                            <a href="/settings"
                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Settings</a>
                            <a href="/notifications"
                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Notifications</a>
                            <div class="border-t border-gray-100"></div>
                            <a href="/logout" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Logout</a>
                        </div>
                    </div>
                </div>
            </header>          
           @yield('dashboard_content')
        </div>
    </div>
    <script src="{{ asset('laravel-dashboard/js/laravel-dashboard.js') }}"></script>
</body>
</html>