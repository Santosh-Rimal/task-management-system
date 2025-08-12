<x-layouts.app :title="__('Roles')">
    <div class="mb-8">
        <!-- Header Section -->
        <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4 mb-6">
            <div>
                <flux:heading class="text-gray-900 dark:text-white font-bold" size="xl" level="1">
                    {{ __('Role Management') }}
                </flux:heading>
                <flux:subheading class="text-gray-600 dark:text-gray-300" size="lg">
                    {{ __('Manage and configure system roles') }}
                </flux:subheading>
            </div>
            @can('roles.create')
                <div class="flex-shrink-0">
                    <flux:modal.trigger name="create-role">
                        <flux:button class="flex items-center gap-2" variant="primary">
                            <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                                    clip-rule="evenodd" />
                            </svg>
                            {{ __('Create Role') }}
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
                @can('roles.create')
                    <livewire:role.create />
                @endcan
                @can('roles.edit')
                    <livewire:role.edit />
                @endcan
                @can('roles.view')
                    <livewire:role.index />
                @endcan

                @can('role.single.view')
                    <livewire:role.show />
                @endcan
            </div>
        </div>
    </div>
</x-layouts.app>