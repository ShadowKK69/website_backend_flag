<x-layout>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-6">
        @forelse($vehicles as $vehicle)
        <x-vehicle-card :vehicle="$vehicle" />
        {{-- <li><a href="{{route('vehicles.show', $vehicle->id)}}">{{$vehicle->brand}} - {{$vehicle->model}} - {{$vehicle->license_plate}} - {{$vehicle->id}}</a></li> --}}
        @empty
        <div class="">No vehicles available</div>
        @endforelse    
    </div> 
</x-layout>