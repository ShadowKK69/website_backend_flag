<x-layout>
    <h2 class="text-center text-3xl mb-4 font-bold border border-gray-300 p-3">Home Page</h2>
    <div class="mb-6 flex justify-center">
        @forelse($vehicles as $vehicle)
            <x-vehicle-card :vehicle="$vehicle" />
        {{-- <li><a href="{{route('vehicles.show', $vehicle->id)}}">{{$vehicle->brand}} - {{$vehicle->model}} - {{$vehicle->license_plate}} - {{$vehicle->id}}</a></li> --}}
        @empty
        <div class="text-xl">No vehicles available</div>
        @endforelse    
    </div> 

    <a href="{{route('vehicles.index')}}" class="block w-30 h-30 text-xl text-center border border-gray-500 p-3 rounded">
        Show All Vehicles
    </a>
    <x-bottombanner />
</x-layout>