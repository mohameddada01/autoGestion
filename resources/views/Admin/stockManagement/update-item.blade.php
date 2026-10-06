<x-Admin-master title="update  item">
<!-- resources/views/stock/edit.blade.php -->

<div class="max-w-4xl  mx-2 ml-20 mt-6 p-6 bg-white rounded-xl shadow-md">
   
    <h2 class="text-2xl font-bold mb-2 flex items-center gap-2">
        <span class="iconify text-blue-600" data-icon="mdi:package-variant-closed" data-inline="false"></span>
        Update Stock Item
    </h2>
    <p class="text-gray-500 mb-6">Update item details and inventory</p>

    <form action="{{ route('admin.update_item', $item->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <!-- Category -->
            <div>
                <label class="block text-sm font-medium text-gray-700">Category</label>
                <div class="relative mt-1">
                    <span class="iconify absolute left-3 top-3 text-gray-400" data-icon="mdi:shape-outline"></span>
                    <select name="category_id"
                        class="pl-10 pr-4 py-2 w-full border rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                        <option value="">Select Category</option>
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}" {{ old('category_id', $item->category_id) == $category->id ? 'selected' : '' }}>
                                {{ $category->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
                @error('category_id')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Part Name -->
            <div>
                <label class="block text-sm font-medium text-gray-700">Part Name</label>
                <div class="relative mt-1">
                    <span class="iconify absolute left-3 top-3 text-gray-400" data-icon="mdi:label-outline"></span>
                    <input type="text" name="part_name" value="{{ old('part_name', $item->part_name) }}"
                        class="pl-10 pr-4 py-2 w-full border rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                </div>
                @error('part_name')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Quantity -->
            <div>
                <label class="block text-sm font-medium text-gray-700">Quantity</label>
                <div class="relative mt-1">
                    <span class="iconify absolute left-3 top-3 text-gray-400" data-icon="mdi:counter"></span>
                    <input type="number" name="quantity" value="{{ old('quantity', $item->quantity) }}"
                        class="pl-10 pr-4 py-2 w-full border rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                </div>
                @error('quantity')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Price -->
            <div>
                <label class="block text-sm font-medium text-gray-700">Price</label>
                <div class="relative mt-1">
                    <span class="iconify absolute left-3 top-3 text-gray-400" data-icon="mdi:currency-usd"></span>
                    <input type="text" name="price" value="{{ old('price', $item->price) }}"
                        class="pl-10 pr-4 py-2 w-full border rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                </div>
                @error('price')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Supplier -->
            <div>
                <label class="block text-sm font-medium text-gray-700">Supplier</label>
                <div class="relative mt-1">
                    <span class="iconify absolute left-3 top-3 text-gray-400" data-icon="mdi:truck-outline"></span>
                    <input type="text" name="supplier" value="{{ old('supplier', $item->supplier) }}"
                        class="pl-10 pr-4 py-2 w-full border rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                </div>
                @error('supplier')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Description -->
            <div class="md:col-span-2">
                <label class="block text-sm font-medium text-gray-700">Description</label>
                <div class="relative mt-1">
                    <span class="iconify absolute left-3 top-3 text-gray-400" data-icon="mdi:text-box-outline"></span>
                    <textarea name="description" rows="3"
                        class="pl-10 pr-4 py-2 w-full border rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">{{ old('description', $item->description) }}</textarea>
                </div>
                @error('description')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>
        </div>

        <div class="mt-6 flex justify-end space-x-2">
            <a href="{{}}"
               class="bg-gray-200 hover:bg-gray-300 text-gray-700 px-4 py-2 rounded">Cancel</a>
            <button type="submit"
                    class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded">Update Item</button>
        </div>
    </form>
</div>




</x-Admin-master >

