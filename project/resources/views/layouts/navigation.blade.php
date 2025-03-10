<nav x-data="{ open: false }" class="bg-white border-b border-gray-100 mt-2 h-20">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="flex items-center justify-between bg-gray-900 p-4 rounded-lg shadow-md">
            <div class="flex items-center">
                <!-- Logo YouCode -->
                <div class="text-3xl font-bold">
                    <span class="text-blue-500">You</span><span class="text-white">Code</span>
                </div>
                <h2 class="font-semibold text-xl text-white leading-tight ml-4">
                    {{ __('Tableau de bord administrateur') }}
                </h2>
            </div>
            <div class="text-white flex items-center">
                <span class="mr-2">Bonjour {{ Auth::user()->first_name }} {{ Auth::user()->last_name }}</span>
                {{-- <button class="bg-blue-600 hover:bg-blue-700 text-white px-3 py-1 rounded-md text-sm transition duration-200"> --}}
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
        
                        <x-responsive-nav-link :href="route('logout')"
                                onclick="event.preventDefault();
                                            this.closest('form').submit();">
                            {{ __('Log Out') }}
                        </x-responsive-nav-link>
                    </form>
                {{-- </button> --}}
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="px-4">
                <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
            </div>

            <div class="mt-3 space-y-1">
                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>
</nav>
