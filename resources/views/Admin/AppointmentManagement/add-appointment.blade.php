<x-Admin-master>
    <form action="{{ route('admin.store_appointment') }}" method="post">
        @csrf
        <!-- Header -->
        <div class="bg-blue-700 text-white px-6 py-4 rounded-t-lg">
            <h2 class="text-xl font-bold flex items-center gap-2">
                <iconify-icon icon="mdi:car-wrench" class="text-white text-2xl"></iconify-icon>
                Add New Repair
            </h2>
            <div class="flex items-center gap-2 text-gray-200 text-sm font-medium mt-1">
                <iconify-icon icon="mdi:form-textbox" width="18" height="18"></iconify-icon>
                <span>Register a new vehicle repair job</span>
            </div>
        </div>

        <div class="mx-6 mb-2">
            <!-- Client Information -->
            <div class="mb-6">
                <h2 class="font-bold mb-2 mt-2">Client Information</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 ml-2">
                    <div>
                        <label class="block mb-1 text-sm font-medium text-gray-700">Client Name<span class="text-red-500">*</span></label>
                        <div class="relative">
                            <iconify-icon icon="mdi:account-outline" class="absolute left-3 top-1/2 -translate-y-1/2 text-gray-400"></iconify-icon>
                            <input type="text" name="client_name" value="{{ old('client_name') }}" placeholder="Enter client's full name"
                                class="pl-10 w-full border bg-gray-100 border-gray-300 rounded-md p-2 focus:outline-none focus:ring-2 focus:ring-blue-500 
                                @error('client_name') border-red-500 @enderror" />
                        </div>
                        @error('client_name')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label class="block mb-1 text-sm font-medium text-gray-700">Phone Number<span class="text-red-500">*</span></label>
                        <div class="relative">
                            <iconify-icon icon="mdi:phone-outline" class="absolute left-3 top-1/2 -translate-y-1/2 text-gray-400"></iconify-icon>
                            <input type="text" name="client_phone" value="{{ old('client_phone') }}" placeholder="Enter client's phone number"
                                class="pl-10 bg-gray-100 w-full border border-gray-300 rounded-md p-2 focus:outline-none focus:ring-2 focus:ring-blue-500
                                @error('client_phone') border-red-500 @enderror" />
                        </div>
                        @error('client_phone')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
            </div>

            <!-- HR -->
            <hr class="my-6 border-black" />

            <!-- Vehicle Information -->
            <div class="mb-6">
                <h2 class="font-bold mb-2 mt-2">Vehicle Information</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 ml-2">
                    <div>
                        <label class="block mb-1 text-sm font-medium text-gray-700">Brand<span class="text-red-500">*</span></label>
                        <div class="relative">
                            <iconify-icon icon="mdi:car-outline" class="absolute left-3 top-1/2 -translate-y-1/2 text-gray-400"></iconify-icon>
                            <input type="text" name="brand" value="{{ old('brand') }}" placeholder="e.g. Toyota, Ford, BMW"
                                class="bg-gray-100 pl-10 w-full border border-gray-300 rounded-md p-2 focus:outline-none focus:ring-2 focus:ring-blue-500
                                @error('brand') border-red-500 @enderror" />
                        </div>
                        @error('brand')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <input type="hidden" name="status" value="pending" />
                    <div>
                        <label class="block mb-1 text-sm font-medium text-gray-700">Model<span class="text-red-500">*</span></label>
                        <div class="relative">
                            <input type="text" name="model" value="{{ old('model') }}" placeholder="e.g. Corolla, F-150, X5"
                                class="bg-gray-100 pl-4 w-full border border-gray-300 rounded-md p-2 focus:outline-none focus:ring-2 focus:ring-blue-500
                                @error('model') border-red-500 @enderror" />
                        </div>
                        @error('model')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label class="block mb-1 text-sm font-medium text-gray-700">License Plate<span class="text-red-500">*</span></label>
                        <div class="relative">
                            <iconify-icon icon="mdi:card-text-outline" class="absolute left-3 top-1/2 -translate-y-1/2 text-gray-400"></iconify-icon>
                            <input type="text" name="license_plate" value="{{ old('license_plate') }}" placeholder="Enter vehicle license plate"
                                class="bg-gray-100 pl-10 w-full border border-gray-300 rounded-md p-2 focus:outline-none focus:ring-2 focus:ring-blue-500
                                @error('license_plate') border-red-500 @enderror" />
                        </div>
                        @error('license_plate')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
            </div>

            <!-- HR -->
            <hr class="my-6 border-black" />

            <!-- Repair Details -->
            <div class="mb-6">
                <h2 class="font-bold my-2">Repair Details</h2>
                <div class="mb-4 ml-2">
                    <label class="block mb-1 text-sm font-medium text-gray-700">Probelm Description</label>
                    <textarea rows="4" name="description" placeholder="Enter detailed description of the repair needed"
                        class="bg-gray-100 w-full border border-gray-300 rounded-md p-2 focus:outline-none focus:ring-2 focus:ring-blue-500
                        @error('description') border-red-500 @enderror">{{ old('description') }}</textarea>
                    @error('description')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 ml-2">
                    <div>
                        <label class="block mb-1 text-sm font-medium text-gray-700">Assigned To</label>
                        <select name="assigned_to" class="bg-gray-100 w-full border border-gray-300 rounded-md p-2 focus:outline-none focus:ring-2 focus:ring-blue-500
                        @error('assigned_to') border-red-500 @enderror">
                            <option Hidden>Select mechanic</option>

                            @foreach ($mechanics as $employe)
                                <option value="{{ $employe->id }}">{{ $employe->name }}</option>
                            @endforeach

                            <!-- Add your mechanics here -->
                        </select>
                        @error('assigned_to')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label class="block mb-1 text-sm font-medium text-gray-700">Appointment Start</label>
                        <div class="relative">
                            <input type="date" name="started_at" value="{{ old('started_at') }}" placeholder="jj/mm/aaaa --:--"
                                class="bg-gray-100 w-full pl-4 border border-gray-300 rounded-md p-2 focus:outline-none focus:ring-2 focus:ring-blue-500
                                @error('started_at') border-red-500 @enderror" />
                        </div>
                        @error('started_at')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
            </div>

            <!-- Buttons -->
            <div class="flex justify-end gap-3">
                <button type="button" class="px-4 py-2 bg-gray-200 text-gray-700 rounded-md hover:bg-gray-300 transition">Cancel</button>
                <button type="submit" class="px-6 py-2 bg-blue-800 text-white rounded-md hover:bg-blue-700 transition">+ Add Repair</button>
            </div>
        </div>
    </form>
</x-Admin-master>
