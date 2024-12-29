@props(['vehicle'])

<div class="rounded-lg shadow-md bg-white p-4 mx-2">
    <div class="flex items-center space-between gap-4">
        <div class="flex flex-column">
            <img src="{{$vehicle->vehicle_logo}}" alt="Car image" class="w-full h-48 object-cover">
        </div>
    </div>

    <ul class="my-4 bg-gray-100 p-4 rounded">
        <li class="mb-2"><strong>Car:</strong> {{$vehicle->brand}} {{$vehicle->model}}</li>
        <li class="mb-2"><strong>License Plate:</strong> {{$vehicle->license_plate}}</li>
        <li class="mb-2">
            <strong>Id:</strong> {{$vehicle->id}}
        </li>
    </ul>
    <a
        href="{{route('vehicles.show', $vehicle->id)}}"
        class="block w-full text-center px-5 py-2.5 shadow-sm rounded border text-base font-medium text-orange-700 bg-orange-200 hover:bg-orange-300"
    >
        Details
    </a>
</div>