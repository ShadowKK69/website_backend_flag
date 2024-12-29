<header class="bg-white border-gray-200 drop-shadow-lg dark:bg-amber-950" x-data="{open: false}">
    <div class="container mx-auto flex justify-between items-center">
        <h1 class="flex items-center p-3 space-x-3 rtl:space-x-reverse text-3xl font-semibold">
            <a class="dark:text-white" href="{{url('/')}}">Fofinhos SA</a>
        </h1>
        <nav class="hidden md:flex items-center space-x-4">
            <x-nav-link url="/" :active="request()->is('/')">Home</x-nav-link>
            <x-nav-link url="/vehicles" :active="request()->is('vehicles')">All Vehicles</x-nav-link>
            <x-button-link url="/vehicles/create" :active="request()->is('vehicles/create')">Create Vehicle</x-button-link>
        </nav>
        <button @click="open = !open" id="hamburger" class="text-white md:hidden flex items-center">
            <i class="fa fa-bars text-2xl"></i>
        </button>
    </div>

    <nav x-show="open" @click.away="open = false" id="mobile-menu" class="md:hidden bg-yellow-900 text-white mt-5 pb-4 space-y-2">
        <x-nav-link url="/" :active="request()->is('/')" :mobile="true">Home</x-nav-link>
        <x-nav-link url="/vehicles" :active="request()->is('vehicles')" :mobile="true">All Vehicles</x-nav-link>
        <x-button-link url="/vehicles/create" :active="request()->is('vehicles/create')" :block="true">Create Vehicle</x-button-link>
    </nav>
</header>