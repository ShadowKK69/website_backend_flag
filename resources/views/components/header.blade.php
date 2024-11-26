<header class="bg-blue-900 text-white p-4">
    <div class="container mx-auto flex justify-between items-center">
        <h1 class="text-3xl font-semibold">
            <a href="{{url('/')}}">Fofinhos SA</a>
        </h1>
        <nav class="hidden md:flex items-center space-x-4">
            <x-nav-link url="/" :active="request()->is('/')">Home</x-nav-link>
            <x-nav-link url="/vehicles" :active="request()->is('vehicles')">All Vehicles</x-nav-link>
            <x-button-link url="/vehicles/create" :active="request()->is('vehicles/create')">Create Vehicle</x-button-link>
        </nav>
        <button
            id="hamburger"
            class="text-white md:hidden flex items-center"
        >
            <i class="fa fa-bars text-2xl"></i>
        </button>
    </div>
    <!-- Mobile Menu -->
    <nav id="mobile-menu" class="hidden md:hidden bg-blue-900 text-white mt-5 pb-4 space-y-2">
        <x-nav-link url="/" :active="request()->is('/')" :mobile="true">Home</x-nav-link>
        <x-nav-link url="/vehicles" :active="request()->is('vehicles')" :mobile="true">All Vehicles</x-nav-link>
        <x-button-link url="/vehicles/create" :active="request()->is('vehicles/create')" :block="true">Create Vehicle</x-button-link>
    </nav>
</header>