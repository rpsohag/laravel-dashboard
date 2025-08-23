@extends('LaravelDashboard::dashboard.layouts.master')
@section('dashboard_content')
 <main class="flex-1 overflow-y-auto p-6 bg-gray-100">
                <div class="w-full px-4 sm:px-6 lg:px-8">
                    <h1 class="text-2xl font-bold text-gray-900 mb-6">Dashboard Overview</h1>

                    <!-- Stats Grid -->
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 xl:grid-cols-6 gap-6 mb-8">
                        <div
                            class="bg-white rounded-lg shadow p-6 stats-card hover:shadow-lg transition-all duration-300">
                            <div class="flex items-center justify-between">
                                <div>
                                    <p class="text-sm font-medium text-gray-600">Total Revenue</p>
                                    <p class="text-2xl font-semibold text-gray-900">$45,231.89</p>
                                    <p class="text-xs text-green-600 mt-1">↗ +12.5% from last month</p>
                                </div>
                                <div class="p-3 rounded-full bg-blue-100 text-blue-600">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M4 4a2 2 0 00-2 2v1h16V6a2 2 0 00-2-2H4zM18 9H2v5a2 2 0 002 2h12a2 2 0 002-2V9zM4 13a1 1 0 011-1h1a1 1 0 110 2H5a1 1 0 01-1-1zm5-1a1 1 0 100 2h1a1 1 0 100-2H9z"/>
                                    </svg>
                                </div>
                            </div>
                        </div>

                        <div
                            class="bg-white rounded-lg shadow p-6 stats-card hover:shadow-lg transition-all duration-300">
                            <div class="flex items-center justify-between">
                                <div>
                                    <p class="text-sm font-medium text-gray-600">New Customers</p>
                                    <p class="text-2xl font-semibold text-gray-900">2,345</p>
                                    <p class="text-xs text-green-600 mt-1">↗ +8.2% from last month</p>
                                </div>
                                <div class="p-3 rounded-full bg-green-100 text-green-600">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z"/>
                                    </svg>
                                </div>
                            </div>
                        </div>

                        <div
                            class="bg-white rounded-lg shadow p-6 stats-card hover:shadow-lg transition-all duration-300">
                            <div class="flex items-center justify-between">
                                <div>
                                    <p class="text-sm font-medium text-gray-600">Sales Growth</p>
                                    <p class="text-2xl font-semibold text-gray-900">+12.5%</p>
                                    <p class="text-xs text-green-600 mt-1">↗ Above target by 2.5%</p>
                                </div>
                                <div class="p-3 rounded-full bg-yellow-100 text-yellow-600">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M2 11a1 1 0 011-1h2a1 1 0 011 1v5a1 1 0 01-1 1H3a1 1 0 01-1-1v-5zM8 7a1 1 0 011-1h2a1 1 0 011 1v9a1 1 0 01-1 1H9a1 1 0 01-1-1V7zM14 4a1 1 0 011-1h2a1 1 0 011 1v12a1 1 0 01-1 1h-2a1 1 0 01-1-1V4z"/>
                                    </svg>
                                </div>
                            </div>
                        </div>

                        <div
                            class="bg-white rounded-lg shadow p-6 stats-card hover:shadow-lg transition-all duration-300">
                            <div class="flex items-center justify-between">
                                <div>
                                    <p class="text-sm font-medium text-gray-600">Total Orders</p>
                                    <p class="text-2xl font-semibold text-gray-900">1,234</p>
                                    <p class="text-xs text-red-600 mt-1">↘ -3.1% from last month</p>
                                </div>
                                <div class="p-3 rounded-full bg-red-100 text-red-600">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 2a4 4 0 00-4 4v1H5a1 1 0 00-.994.89l-1 9A1 1 0 004 18h12a1 1 0 00.994-1.11l-1-9A1 1 0 0015 7h-1V6a4 4 0 00-4-4zm2 5V6a2 2 0 10-4 0v1h4zm-6 3a1 1 0 112 0 1 1 0 01-2 0zm7-1a1 1 0 100 2 1 1 0 000-2z" clip-rule="evenodd"/>
                                    </svg>
                                </div>
                            </div>
                        </div>

                        <div
                            class="bg-white rounded-lg shadow p-6 stats-card hover:shadow-lg transition-all duration-300">
                            <div class="flex items-center justify-between">
                                <div>
                                    <p class="text-sm font-medium text-gray-600">Conversion Rate</p>
                                    <p class="text-2xl font-semibold text-gray-900">3.24%</p>
                                    <p class="text-xs text-green-600 mt-1">↗ +0.8% from last month</p>
                                </div>
                                <div class="p-3 rounded-full bg-purple-100 text-purple-600">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M3 4a1 1 0 011-1h4a1 1 0 010 2H6.414l2.293 2.293a1 1 0 01.293.707V12a1 1 0 01-.293.707L6.414 15H8a1 1 0 010 2H4a1 1 0 01-.707-.293l-3-3a1 1 0 010-1.414l3-3A1 1 0 014 9h4a1 1 0 010 2H6.414l-1.707 1.707L6.414 11H8a1 1 0 010-2H4a1 1 0 01-.707-.293l-3-3a1 1 0 010-1.414l3-3A1 1 0 014 3z" clip-rule="evenodd"/>
                                    </svg>
                                </div>
                            </div>
                        </div>

                        <div
                            class="bg-white rounded-lg shadow p-6 stats-card hover:shadow-lg transition-all duration-300">
                            <div class="flex items-center justify-between">
                                <div>
                                    <p class="text-sm font-medium text-gray-600">Active Users</p>
                                    <p class="text-2xl font-semibold text-gray-900">8,492</p>
                                    <p class="text-xs text-green-600 mt-1">↗ +15.3% from last month</p>
                                </div>
                                <div class="p-3 rounded-full bg-indigo-100 text-indigo-600">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"/>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>        
            <!-- Quick Actions -->
                    <div class="bg-white rounded-lg shadow p-6 mb-8">
                        <h2 class="text-lg font-semibold text-gray-900 mb-4">Quick Actions</h2>
                        <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-4">
                            <button
                                class="flex flex-col items-center p-4 bg-blue-50 hover:bg-blue-100 rounded-lg transition-colors duration-200">
                                <svg class="w-6 h-6 text-blue-600 mb-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11a1 1 0 10-2 0v2H7a1 1 0 100 2h2v2a1 1 0 102 0v-2h2a1 1 0 100-2h-2V7z" clip-rule="evenodd"/>
                                </svg>
                                <span class="text-sm font-medium text-gray-700">Add Product</span>
                            </button>
                            <button
                                class="flex flex-col items-center p-4 bg-green-50 hover:bg-green-100 rounded-lg transition-colors duration-200">
                                <svg class="w-6 h-6 text-green-600 mb-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M8 9a3 3 0 100-6 3 3 0 000 6zM8 11a6 6 0 016 6H2a6 6 0 016-6zM16 7a1 1 0 10-2 0v1h-1a1 1 0 100 2h1v1a1 1 0 102 0v-1h1a1 1 0 100-2h-1V7z"/>
                                </svg>
                                <span class="text-sm font-medium text-gray-700">New Customer</span>
                            </button>
                            <button
                                class="flex flex-col items-center p-4 bg-purple-50 hover:bg-purple-100 rounded-lg transition-colors duration-200">
                                <svg class="w-6 h-6 text-purple-600 mb-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M4 4a2 2 0 012-2h8a2 2 0 012 2v12a1 1 0 110 2h-3a1 1 0 01-1-1v-2a1 1 0 00-1-1H9a1 1 0 00-1 1v2a1 1 0 01-1 1H4a1 1 0 110-2V4zm3 1h2v2H7V5zm2 4H7v2h2V9zm2-4h2v2h-2V5zm2 4h-2v2h2V9z" clip-rule="evenodd"/>
                                </svg>
                                <span class="text-sm font-medium text-gray-700">Create Invoice</span>
                            </button>
                            <button
                                class="flex flex-col items-center p-4 bg-orange-50 hover:bg-orange-100 rounded-lg transition-colors duration-200">
                                <svg class="w-6 h-6 text-orange-600 mb-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"/>
                                    <path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"/>
                                </svg>
                                <span class="text-sm font-medium text-gray-700">View Reports</span>
                            </button>
                            <button
                                class="flex flex-col items-center p-4 bg-red-50 hover:bg-red-100 rounded-lg transition-colors duration-200">
                                <svg class="w-6 h-6 text-red-600 mb-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                                </svg>
                                <span class="text-sm font-medium text-gray-700">Alerts</span>
                            </button>
                            <button
                                class="flex flex-col items-center p-4 bg-indigo-50 hover:bg-indigo-100 rounded-lg transition-colors duration-200">
                                <svg class="w-6 h-6 text-indigo-600 mb-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd"/>
                                </svg>
                                <span class="text-sm font-medium text-gray-700">Settings</span>
                            </button>
                        </div>
                    </div>

                    <!-- Charts and Analytics -->
                    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-8">
                        <div class="lg:col-span-2 bg-white rounded-lg shadow p-6">
                            <div class="flex items-center justify-between mb-4">
                                <h2 class="text-lg font-semibold text-gray-900">Sales Overview</h2>
                                <div class="flex space-x-2">
                                    <button class="px-3 py-1 text-xs bg-blue-100 text-blue-600 rounded-full">7D</button>
                                    <button
                                        class="px-3 py-1 text-xs bg-gray-100 text-gray-600 rounded-full">30D</button>
                                    <button
                                        class="px-3 py-1 text-xs bg-gray-100 text-gray-600 rounded-full">90D</button>
                                </div>
                            </div>
                            <div class="h-64 bg-gray-50 rounded-lg flex items-center justify-center">
                                <p class="text-gray-500">Chart placeholder - Sales data visualization</p>
                            </div>
                        </div>

                        <div class="bg-white rounded-lg shadow p-6">
                            <h2 class="text-lg font-semibold text-gray-900 mb-4">Recent Activity</h2>
                            <div class="space-y-4">
                                <div class="flex items-center space-x-3">
                                    <div class="w-2 h-2 bg-green-500 rounded-full"></div>
                                    <div class="flex-1">
                                        <p class="text-sm font-medium text-gray-900">New order received</p>
                                        <p class="text-xs text-gray-500">2 minutes ago</p>
                                    </div>
                                </div>
                                <div class="flex items-center space-x-3">
                                    <div class="w-2 h-2 bg-blue-500 rounded-full"></div>
                                    <div class="flex-1">
                                        <p class="text-sm font-medium text-gray-900">Customer registered</p>
                                        <p class="text-xs text-gray-500">5 minutes ago</p>
                                    </div>
                                </div>
                                <div class="flex items-center space-x-3">
                                    <div class="w-2 h-2 bg-yellow-500 rounded-full"></div>
                                    <div class="flex-1">
                                        <p class="text-sm font-medium text-gray-900">Payment processed</p>
                                        <p class="text-xs text-gray-500">10 minutes ago</p>
                                    </div>
                                </div>
                                <div class="flex items-center space-x-3">
                                    <div class="w-2 h-2 bg-purple-500 rounded-full"></div>
                                    <div class="flex-1">
                                        <p class="text-sm font-medium text-gray-900">Report generated</p>
                                        <p class="text-xs text-gray-500">15 minutes ago</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> 
                   <!-- Recent Orders Table -->
                    <div class="bg-white rounded-lg shadow overflow-hidden">
                        <div class="px-6 py-4 border-b border-gray-200">
                            <h2 class="text-lg font-semibold text-gray-900">Recent Orders</h2>
                        </div>
                        <div class="overflow-x-auto">
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-gray-50">
                                    <tr>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Order ID</th>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Customer</th>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Amount</th>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date</th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">#12345</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">John Smith</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">$299.99</td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <span class="inline-flex px-2 py-1 text-xs font-semibold rounded-full bg-green-100 text-green-800">Completed</span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">2024-01-15</td>
                                    </tr>
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">#12344</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Jane Doe</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">$149.50</td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <span class="inline-flex px-2 py-1 text-xs font-semibold rounded-full bg-yellow-100 text-yellow-800">Processing</span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">2024-01-15</td>
                                    </tr>
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">#12343</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Bob Johnson</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">$89.99</td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <span class="inline-flex px-2 py-1 text-xs font-semibold rounded-full bg-red-100 text-red-800">Cancelled</span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">2024-01-14</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </main>
@endsection