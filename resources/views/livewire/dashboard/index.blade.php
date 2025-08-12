    <div class="flex h-full w-full flex-1 flex-col gap-6 p-4">
        <!-- Stats Cards Row -->
        <div class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-5">
            <!-- Total Tasks Card -->
            <div class="rounded-lg border border-gray-200 bg-white p-6 shadow-sm dark:border-gray-700 dark:bg-gray-800">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm font-medium text-gray-500 dark:text-gray-400">Total Tasks</p>
                        <h3 class="mt-2 text-2xl font-bold text-gray-900 dark:text-white">
                            {{ $totaltasks ?? 'No task available now' }}</h3>
                    </div>
                    <div class="rounded-full bg-blue-100 p-3 dark:bg-blue-900">
                        <svg class="h-6 w-6 text-blue-600 dark:text-blue-400" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2">
                            </path>
                        </svg>
                    </div>
                </div>
            </div>

            <!-- Total Users Card -->
            <div class="rounded-lg border border-gray-200 bg-white p-6 shadow-sm dark:border-gray-700 dark:bg-gray-800">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm font-medium text-gray-500 dark:text-gray-400">Total Users</p>
                        <h3 class="mt-2 text-2xl font-bold text-gray-900 dark:text-white">
                            {{ $totalusers ?? 'Not users are added yet' }}</h3>
                    </div>
                    <div class="rounded-full bg-green-100 p-3 dark:bg-green-900">
                        <svg class="h-6 w-6 text-green-600 dark:text-green-400" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z">
                            </path>
                        </svg>
                    </div>
                </div>
            </div>

            <!-- Total Roles Card -->
            <div class="rounded-lg border border-gray-200 bg-white p-6 shadow-sm dark:border-gray-700 dark:bg-gray-800">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm font-medium text-gray-500 dark:text-gray-400">Total Roles</p>
                        <h3 class="mt-2 text-2xl font-bold text-gray-900 dark:text-white">
                            {{ $totalroles ?? 'roles are not created yet' }}</h3>
                    </div>
                    <div class="rounded-full bg-purple-100 p-3 dark:bg-purple-900">
                        <svg class="h-6 w-6 text-purple-600 dark:text-purple-400" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z">
                            </path>
                        </svg>
                    </div>
                </div>
            </div>

            <!-- Total Permissions Card -->
            <div class="rounded-lg border border-gray-200 bg-white p-6 shadow-sm dark:border-gray-700 dark:bg-gray-800">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm font-medium text-gray-500 dark:text-gray-400">Total Permissions</p>
                        <h3 class="mt-2 text-2xl font-bold text-gray-900 dark:text-white">{{ $totalpermissions ?? '0' }}
                        </h3>
                    </div>
                    <div class="rounded-full bg-yellow-100 p-3 dark:bg-yellow-900">
                        <svg class="h-6 w-6 text-yellow-600 dark:text-yellow-400" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z">
                            </path>
                        </svg>
                    </div>
                </div>
            </div>

            <!-- Total Likes Card -->
            {{-- <div class="rounded-lg border border-gray-200 bg-white p-6 shadow-sm dark:border-gray-700 dark:bg-gray-800">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm font-medium text-gray-500 dark:text-gray-400">Total Likes</p>
                        <h3 class="mt-2 text-2xl font-bold text-gray-900 dark:text-white">256</h3>
                        <p class="text-xs text-gray-500 dark:text-gray-400 mt-1">
                            Most liked: "Complete dashboard..." (32)
                        </p>
                    </div>
                    <div class="rounded-full bg-pink-100 p-3 dark:bg-pink-900">
                        <svg class="h-6 w-6 text-pink-600 dark:text-pink-400" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </div>
                </div>
            </div> --}}
        </div>

        <!-- Task Status and User Roles Section -->
        <div class="grid grid-cols-1 gap-6 lg:grid-cols-2">
            <!-- Task Status Chart -->
            <div class="rounded-lg border border-gray-200 bg-white p-6 shadow-sm dark:border-gray-700 dark:bg-gray-800">
                <h3 class="mb-4 text-lg font-semibold text-gray-900 dark:text-white">Task Status</h3>
                <div class="space-y-4">
                    <div>
                        <div class="mb-1 flex items-center justify-between">
                            <span class="text-sm font-medium text-gray-600 dark:text-gray-300">To Do</span>
                            <span
                                class="text-sm font-medium text-gray-600 dark:text-gray-300">{{ $todo }}</span>
                        </div>
                        <div class="h-2 w-full rounded-full bg-gray-200 dark:bg-gray-700">
                            <div class="h-2 rounded-full bg-blue-600" style="width: {{ $todo }}%"></div>
                        </div>
                    </div>
                    <div>
                        <div class="mb-1 flex items-center justify-between">
                            <span class="text-sm font-medium text-gray-600 dark:text-gray-300">In Progress</span>
                            <span
                                class="text-sm font-medium text-gray-600 dark:text-gray-300">{{ $inprogess }}</span>
                        </div>
                        <div class="h-2 w-full rounded-full bg-gray-200 dark:bg-gray-700">
                            <div class="h-2 rounded-full bg-yellow-500" style="width: {{ $inprogess }}%"></div>
                        </div>
                    </div>
                    <div>
                        <div class="mb-1 flex items-center justify-between">
                            <span class="text-sm font-medium text-gray-600 dark:text-gray-300">Done</span>
                            <span
                                class="text-sm font-medium text-gray-600 dark:text-gray-300">{{ $done }}</span>
                        </div>
                        <div class="h-2 w-full rounded-full bg-gray-200 dark:bg-gray-700">
                            <div class="h-2 rounded-full bg-green-600" style="width: {{ $done }}%"></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- User Roles Distribution -->
            <div class="rounded-lg border border-gray-200 bg-white p-6 shadow-sm dark:border-gray-700 dark:bg-gray-800">
                <h3 class="mb-4 text-lg font-semibold text-gray-900 dark:text-white">User Roles</h3>
                <div class="space-y-4">
                    <div>
                        <div class="mb-1 flex items-center justify-between">
                            <span class="text-sm font-medium text-gray-600 dark:text-gray-300">Admin</span>
                            <span
                                class="text-sm font-medium text-gray-600 dark:text-gray-300">{{ $admin }}</span>
                        </div>
                        <div class="h-2 w-full rounded-full bg-gray-200 dark:bg-gray-700">
                            <div class="h-2 rounded-full bg-red-600" style="width: {{ $admin }}%"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
