<x-layout>
    <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
        <section class="md:col-span-3">
            <div class="rounded-lg shadow-md bg-white p-3">
                <div class="flex justify-between items-center">
                    <a
                        class="block p-4 text-orange-700"
                        href="{{ route('vehicles.index') }}"
                    >
                        <i class="fa fa-arrow-alt-circle-left"></i>
                        Back To All Vehicles
                    </a>
                    <div class="flex space-x-3 ml-4">
                        <form
                            method="POST"
                            action="{{ route('vehicles.destroy', $vehicle->id) }}"
                            onsubmit="return confirm('Are you sure you want to delete this vehicle?');"
                        >
                        @csrf @method('DELETE')
                        <button
                            type="submit"
                            class="px-4 py-2 bg-red-500 hover:bg-red-600 text-white rounded"
                        >
                            Delete
                        </button>
                        </form>
                    </div>
                </div>
                <div class="p-4">
                    <h2 class="text-xl font-semibold">
                        Vehicle details
                    </h2>
                    <ul class="my-4 bg-gray-100 p-4 rounded">
                        <li class="mb-2">
                            <strong>Year:</strong> {{$vehicle->year}}
                        </li>
                        <li class="mb-2">
                            <strong>License Plate:</strong> {{$vehicle->license_plate}}
                        </li>
                        <li class="mb-2">
                            <strong>Version:</strong> {{$vehicle->version}}
                        </li>
                        <li class="mb-2">
                            <strong>Sub-model:</strong> {{$vehicle->submodel}}
                        </li>
                        <li class="mb-2">
                            <strong>Color:</strong> {{ucfirst(trans($vehicle->color))}}
                        </li>
                        <li class="mb-2">
                            <strong>Doors:</strong> {{$vehicle->doors}}
                        </li>
                        <li class="mb-2">
                            <strong>Engine Power:</strong> {{$vehicle->engine_power}}
                        </li>
                        <li class="mb-2">
                            <strong>Traction:</strong> {{$vehicle->traction}}
                        </li>
                        <li class="mb-2">
                            <strong>Gearbox:</strong> {{$vehicle->gearbox}}
                        </li>
                        <li class="mb-2">
                            <strong>Fuel:</strong> {{$vehicle->fuel}}
                        </li>
                        <li class="mb-2">
                            <strong>Color type:</strong> {{$vehicle->color_type}}
                        </li>
                        <li class="mb-2">
                            <strong>Vehicle class:</strong> {{$vehicle->vehicle_class}}
                        </li>
                    </ul>
                </div>
            </div>
        </section>


        <aside class="flex flex-col justify-center content-center items-center bg-white rounded-lg shadow-md p-3">
            <img
                src="{{$vehicle->vehicle_logo}}"
                alt="Vehicle Image"
                class="w-full rounded-lg mb-4"
            />
            <h3 class="text-xl text-center mb-4 font-bold">
                {{$vehicle->brand}} {{$vehicle->model}}
            </h3>
        
            <div class="p-4">
                <button 
                    id="open-modal"
                    class="px-4 py-2 bg-green-500 hover:bg-green-600 text-white rounded">
                    Add Driver
                </button>
        
                <div 
                    id="add-driver-modal"
                    class="hidden fixed inset-0 bg-black bg-opacity-70 flex items-center justify-center"
                    data-vehicle-plate="{{ $vehicle->license_plate }}">
                    <div class="bg-neutral-200 p-6 rounded shadow-lg w-1/3">
                        <h2 class="text-xl font-bold mb-4">Add Driver</h2>
                        <form id="add-driver-form">
                            @csrf
                            <input type="hidden" name="vehiclePlate" value="{{ $vehicle->license_plate }}">
        
                            <div class="mb-4">
                                <label for="name" class="block text-gray-700">Driver Name:</label>
                                <input 
                                    type="text" 
                                    id="name" 
                                    name="name" 
                                    placeholder="Enter driver name"
                                    class="w-full bg-neutral-100 rounded-md" 
                                    required>
                            </div>

                            <div class="mb-4">
                                <label for="worker-id" class="block text-gray-700">Worker ID:</label>
                                <input 
                                    type="text" 
                                    id="worker-id" 
                                    name="worker-id"
                                    placeholder="Enter worker id" 
                                    class="w-full bg-neutral-100 rounded-md" 
                                    required>
                            </div>
        
                            <div class="mb-4">
                                <label for="driving_date_started" class="block text-gray-700">Driving Start Date:</label>
                                <input 
                                    type="date" 
                                    id="driving-date-started" 
                                    name="driving_date_started" 
                                    class="w-full bg-neutral-100 rounded-md" 
                                    required>
                            </div>
                            
                            <div class="mb-4">
                                <label for="driving_date_ended" class="block text-gray-700">Driving End Date:</label>
                                <input 
                                    type="date" 
                                    id="driving-date-ended" 
                                    name="driving_date_ended" 
                                    class="w-full bg-neutral-100 rounded-md" 
                                    required>
                            </div>
        
                            <div class="mb-4">
                                <label for="start_mileage" class="block text-gray-700">Start Mileage:</label>
                                <input 
                                    type="number" 
                                    id="start-mileage" 
                                    name="start_mileage" 
                                    placeholder="Enter started mileage"
                                    class="w-full bg-neutral-100 rounded-md" 
                                    required>
                            </div>
        
                            <div class="mb-4">
                                <label for="end_mileage" class="block text-gray-700">End Mileage:</label>
                                <input 
                                    type="number" 
                                    id="end-mileage" 
                                    name="end_mileage" 
                                    placeholder="Enter ended mileage"
                                    class="w-full bg-neutral-100 rounded-md" 
                                    required>
                            </div>
        
                            <div id="error-message" class="hidden text-red-500 text-sm mb-4"></div>
        
                            <div class="flex justify-end space-x-3">
                                <button 
                                    type="button" 
                                    id="cancel-button"
                                    class="px-4 py-2 bg-gray-500 hover:bg-gray-600 text-white rounded">
                                    Cancel
                                </button>
                                <button 
                                    type="submit" 
                                    class="px-4 py-2 bg-green-500 hover:bg-green-600 text-white rounded">
                                    Create
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>            
        </aside>     
             
        <section class="md:col-span-4">
            <div class="rounded-lg shadow-md bg-white p-3">
                <div class="p-4 flex justify-center flex-col" x-data="{ showDrivers: false }">
                    
                    <button 
                        @click="showDrivers = !showDrivers"
                        :class="showDrivers ? 'bg-red-500 hover:bg-red-600' : 'bg-amber-700 hover:bg-amber-800'"
                        class="py-2 text-white rounded">
                        <span x-text="!showDrivers ? 'Show drivers' : 'Hide drivers'"></span>
                    </button>
                
                    <div x-show="showDrivers" x-transition>
                        <h2 class="my-6 text-xl font-semibold">Driver's Info</h2>

                        <div class="grid sm:grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-4">
                            @if(!empty($drivers))
                                @foreach($drivers as $driver)
                                    <div class="bg-orange-100 p-4 rounded-lg shadow-sm col-span-1">
                                        <ul>
                                            <li class="mb-2">
                                                <strong>Name:</strong> {{ $driver['name'] }}
                                            </li>
                                            <li class="mb-2">
                                                <strong>Worker ID:</strong> {{ $driver['workerId'] }}
                                            </li>
                                            <li class="mb-2">
                                                <strong>Vehicle Plate:</strong> {{ $driver['vehiclePlate'] }}
                                            </li>
                                            @if(!empty($driver['drivingHistory']))
                                                <li class="mb-2">
                                                    <strong class="text-xm bg-orange-200 rounded py-1">Driving History:</strong>
                                                    <ul id="driving-history">
                                                        @foreach($driver['drivingHistory'] as $drivingHistory)
                                                            <li><strong>Start Date:</strong> <span class="date-format">{{ $drivingHistory['dateInit'] }}</span></li>
                                                            <li><strong>End Date:</strong> <span class="date-format">{{ $drivingHistory['dateEnd'] }}</span></li>
                                                            <li><strong>Start Mileage:</strong> {{ $drivingHistory['startMileage'] }}</li>
                                                            <li><strong>End Mileage:</strong> {{ $drivingHistory['endMileage'] }}</li>
                                                        @endforeach
                                                    </ul>
                                                </li>
                                            @else
                                                <li class="text-red-500">No driving history available.</li>
                                            @endif
                                        </ul>
                                    </div>
                                @endforeach
                            @else
                                <p class="text-red-500 col-span-5">No drivers found for this vehicle plate.</p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>    
</x-layout>
