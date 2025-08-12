<x-layouts.app :title="__('Users')">
    <div class="mb-8">
        <!-- Header Section -->
        <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4 mb-6">
            <div>
                <flux:heading class="text-gray-900 dark:text-white font-bold" size="xl" level="1">
                    {{ __('User Management') }}
                </flux:heading>
                <flux:subheading class="text-gray-600 dark:text-gray-300" size="lg">
                    {{ __('Manage system users and permissions') }}
                </flux:subheading>
            </div>
            @can('users.create')
                <div class="flex-shrink-0">
                    <flux:modal.trigger name="create-user">
                        <flux:button class="flex items-center gap-2" variant="primary">
                            <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M8 9a3 3 0 100-6 3 3 0 000 6zM8 11a6 6 0 016 6H2a6 6 0 016-6z" />
                                <path fill-rule="evenodd"
                                    d="M13 5a1 1 0 011 1v1h1a1 1 0 110 2h-1v1a1 1 0 11-2 0v-1h-1a1 1 0 110-2h1V6a1 1 0 011-1z"
                                    clip-rule="evenodd" />
                            </svg>
                            {{ __('Create User') }}
                        </flux:button>
                    </flux:modal.trigger>
                </div>
            @endcan
        </div>

        <!-- Divider -->
        <flux:separator class="my-4" />

        <!-- Content Section -->
        <div
            class="bg-white dark:bg-gray-800 rounded-lg shadow-sm border border-gray-200 dark:border-gray-700 overflow-hidden">
            <div class="p-6 text-center text-gray-500 dark:text-gray-400">
                @can('users.create')
                    <livewire:user.create />
                @endcan
                @can('users.edit')
                    <livewire:user.edit />
                @endcan
                @can('users.view')
                    <livewire:user.index />
                @endcan
                @can('user.single.view')
                    <livewire:user.show />
                @endcan
            </div>
        </div>
    </div>
</x-layouts.app>