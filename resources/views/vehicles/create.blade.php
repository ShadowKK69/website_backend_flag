<x-layout>
    <x-slot name="title">Fofinhos SA | Create Vehicle</x-slot>
    
        <div
            class="bg-white mx-auto p-8 rounded-lg shadow-md w-full md:max-w-3xl"
        >
        <h2 class="text-4xl text-center font-bold mb-4">
            Insert New Vehicle
        </h2>
        <form
        method="POST"
        action="{{ route('vehicles.store') }}"
        enctype="multipart/form-data"
    >
        @csrf
    
        <h2 class="text-2xl font-bold mb-6 text-center text-gray-500">
            Vehicle Info
        </h2>
    
        <div class="mb-4">
            <label class="block text-gray-700" for="year">Year</label>
            <input
                id="year"
                type="number"
                name="year"
                class="w-full px-4 py-2 border rounded focus:outline-none"
                placeholder="Enter vehicle year"
                value="{{ old('year') }}"
            />
            @error('year')
                <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>
            @enderror
        </div>
    
        <div class="mb-4">
            <label class="block text-gray-700" for="license_plate">License Plate</label>
            <input
                id="license_plate"
                type="text"
                name="license_plate"
                class="w-full px-4 py-2 border rounded focus:outline-none"
                placeholder="Enter license plate"
                value="{{ old('license_plate') }}"
            />
            @error('license_plate')
                <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>
            @enderror
        </div>
    
        <div class="mb-4">
            <label class="block text-gray-700" for="brand">Brand</label>
            <input
                id="brand"
                type="text"
                name="brand"
                class="w-full px-4 py-2 border rounded focus:outline-none"
                placeholder="Enter brand"
                value="{{ old('brand') }}"
            />
            @error('brand')
                <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>
            @enderror
        </div>
    
        <div class="mb-4">
            <label class="block text-gray-700" for="model">Model</label>
            <input
                id="model"
                type="text"
                name="model"
                class="w-full px-4 py-2 border rounded focus:outline-none"
                placeholder="Enter model"
                value="{{ old('model') }}"
            />
            @error('model')
                <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>
            @enderror
        </div>
    
        <div class="mb-4">
            <label class="block text-gray-700" for="version">Version</label>
            <input
                id="version"
                type="text"
                name="version"
                class="w-full px-4 py-2 border rounded focus:outline-none"
                placeholder="Enter version"
                value="{{ old('version') }}"
            />
            @error('version')
                <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>
            @enderror
        </div>
    
        <div class="mb-4">
            <label class="block text-gray-700" for="submodel">Submodel</label>
            <input
                id="submodel"
                type="text"
                name="submodel"
                class="w-full px-4 py-2 border rounded focus:outline-none"
                placeholder="Enter submodel"
                value="{{ old('submodel') }}"
            />
            @error('submodel')
                <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>
            @enderror
        </div>
    
        <div class="mb-4">
            <label class="block text-gray-700" for="color">Color</label>
            <input
                id="color"
                type="text"
                name="color"
                class="w-full px-4 py-2 border rounded focus:outline-none"
                placeholder="Enter color"
                value="{{ old('color') }}"
            />
            @error('color')
                <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>
            @enderror
        </div>
    
        <div class="mb-4">
            <label class="block text-gray-700" for="vehicle_logo">Vehicle Logo</label>
            <input
                id="vehicle_logo"
                type="text"
                name="vehicle_logo"
                placeholder="Enter url image"
                class="w-full px-4 py-2 border rounded focus:outline-none"
            />
            @error('vehicle_logo')
                <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>
            @enderror
        </div>
    
        <div class="mb-4">
            <label class="block text-gray-700" for="doors">Doors</label>
            <input
                id="doors"
                type="number"
                name="doors"
                class="w-full px-4 py-2 border rounded focus:outline-none"
                placeholder="Enter number of doors"
                value="{{ old('doors') }}"
            />
            @error('doors')
                <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>
            @enderror
        </div>
    
        <div class="mb-4">
            <label class="block text-gray-700" for="engine_power">Engine Power</label>
            <input
                id="engine_power"
                type="number"
                name="engine_power"
                class="w-full px-4 py-2 border rounded focus:outline-none"
                placeholder="Enter engine power"
                value="{{ old('engine_power') }}"
            />
            @error('engine_power')
                <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>
            @enderror
        </div>
    
        <div class="mb-4">
            <label class="block text-gray-700" for="traction">Traction</label>
            <select
                id="traction"
                name="traction"
                class="w-full px-4 py-2 border rounded focus:outline-none"
            >
                <option value="">Select traction</option>
                <option value="FWD" {{ old('traction') == 'FWD' ? 'selected' : '' }}>FWD</option>
                <option value="RWD" {{ old('traction') == 'RWD' ? 'selected' : '' }}>RWD</option>
                <option value="AWD" {{ old('traction') == 'AWD' ? 'selected' : '' }}>AWD</option>
                <option value="4WD" {{ old('traction') == '4WD' ? 'selected' : '' }}>4WD</option>
            </select>
            @error('traction')
                <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>
            @enderror
        </div>
    
        <div class="mb-4">
            <label class="block text-gray-700" for="gearbox">Gearbox</label>
            <select
                id="gearbox"
                name="gearbox"
                class="w-full px-4 py-2 border rounded focus:outline-none"
            >
                <option value="Manual" {{ old('gearbox') == 'Manual' ? 'selected' : '' }}>Manual</option>
                <option value="Semi-Automatic" {{ old('gearbox') == 'Semi-Automatic' ? 'selected' : '' }}>Semi-Automatic</option>
                <option value="Automatic" {{ old('gearbox') == 'Automatic' ? 'selected' : '' }}>Automatic</option>
            </select>
            @error('gearbox')
                <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>
            @enderror
        </div>
    
        <div class="mb-4">
            <label class="block text-gray-700" for="fuel">Fuel</label>
            <select
                id="fuel"
                name="fuel"
                class="w-full px-4 py-2 border rounded focus:outline-none"
            >
                <option value="Petrol" {{ old('fuel') == 'Petrol' ? 'selected' : '' }}>Petrol</option>
                <option value="Diesel" {{ old('fuel') == 'Diesel' ? 'selected' : '' }}>Diesel</option>
                <option value="Electric" {{ old('fuel') == 'Electric' ? 'selected' : '' }}>Electric</option>
                <option value="Hybrid" {{ old('fuel') == 'Hybrid' ? 'selected' : '' }}>Hybrid</option>
            </select>
            @error('fuel')
                <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>
            @enderror
        </div>
    
        <div class="mb-4">
            <label class="block text-gray-700" for="color_type">Color Type</label>
            <select
                id="color_type"
                name="color_type"
                class="w-full px-4 py-2 border rounded focus:outline-none"
            >
                <option value="Solid" {{ old('color_type') == 'Solid' ? 'selected' : '' }}>Solid</option>
                <option value="Metallic" {{ old('color_type') == 'Metallic' ? 'selected' : '' }}>Metallic</option>
                <option value="Matte" {{ old('color_type') == 'Matte' ? 'selected' : '' }}>Matte</option>
                <option value="Pearl" {{ old('color_type') == 'Pearl' ? 'selected' : '' }}>Pearl</option>
            </select>
            @error('color_type')
                <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>
            @enderror
        </div>
    
        <div class="mb-4">
            <label class="block text-gray-700" for="vehicle_class">Vehicle Class</label>
            <select
                id="vehicle_class"
                name="vehicle_class"
                class="w-full px-4 py-2 border rounded focus:outline-none"
            >
                <option value="Class 1" {{ old('vehicle_class') == 'Class 1' ? 'selected' : '' }}>Class 1</option>
                <option value="Class 2" {{ old('vehicle_class') == 'Class 2' ? 'selected' : '' }}>Class 2</option>
                <option value="Class 3" {{ old('vehicle_class') == 'Class 3' ? 'selected' : '' }}>Class 3</option>
                <option value="Class 4" {{ old('vehicle_class') == 'Class 4' ? 'selected' : '' }}>Class 4</option>
            </select>
            @error('vehicle_class')
                <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>
            @enderror
        </div>
    
        <button
            type="submit"
            class="w-full bg-green-500 hover:bg-green-600 text-white px-4 py-2 my-3 rounded focus:outline-none"
        >
            Save
        </button>
    </form>
        

    </div>
</x-layout>
