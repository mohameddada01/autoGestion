<x-Admin-master title="Add To stock">
  <form action="{{route('admin.store_item')}}" method="post">
    @csrf
      <!-- Header -->
      <div class="bg-blue-700 text-white px-6 py-4 rounded-t-lg mb-2">
        <h2 class="text-xl font-bold flex items-center gap-2">
          <iconify-icon icon="mdi:warehouse" class="text-3xl"></iconify-icon>
          Add New part
        </h2>
        <div class="flex items-center gap-2 text-gray-200 text-sm font-medium mt-1">
          <iconify-icon icon="mdi:form-textbox" width="18" height="18"></iconify-icon>
          <span>Enter part details below</span>
        </div>
      </div>
      <div class="overflow-hidden mx-6">
      <!-- Form -->
      <form class="p-8 space-y-6">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
          <!-- Category Select -->
          <div>
            <label class="block text-sm font-semibold mb-1">
              Category <span class="text-red-500">*</span>
            </label>
            <div class="flex gap-2">
              <select name="category_id" class="w-full bg-gray-50 border border-gray-300 rounded-md p-2 bg-gray-100 focus:border-blue-500 focus:ring-2 focus:ring-blue-500 outline-none 
                @error('category_id') border-red-500 @enderror">
                <option value="" hidden>Select a category</option>
                @foreach($categories as $categorie)
                  <option value="{{$categorie->id}}" {{ old('category_id') == $categorie->id ? 'selected' : '' }}>{{$categorie->name}}</option>
                @endforeach
              </select>
              
              <button type="button" onclick="openModal()" class="bg-blue-600 hover:bg-blue-700 text-white rounded-md px-3 py-2 transition">
                <iconify-icon icon="mdi:plus-circle" class="text-xl"></iconify-icon>
              </button>
              
            </div>
            @error('category_id')
                <span class="text-red-500 text-xs">{{ $message }}</span>
              @enderror
          </div>

          <!-- Part Name -->
          <div>
            <label class="block text-sm font-semibold mb-1">
              Part Name <span class="text-red-500">*</span>
            </label>
            <input
              type="text"
              placeholder="Enter part name"
              class="w-full bg-gray-100 border border-gray-300 rounded-md p-2 focus:border-blue-500 focus:ring-2 focus:ring-blue-500 outline-none
                @error('part_name') border-red-500 @enderror"
              name="part_name"
              value="{{ old('part_name') }}"
            />
            @error('part_name')
              <span class="text-red-500 text-xs">{{ $message }}</span>
            @enderror
          </div>

          <!-- Quantity -->
          <div>
            <label class="block text-sm font-semibold mb-1">
              Quantity <span class="text-red-500">*</span>
            </label>
            <input
              type="number"
              placeholder="Quantity"
              class="w-full bg-gray-100 border border-gray-300 rounded-md p-2 focus:border-blue-500 focus:ring-2 focus:ring-blue-500 outline-none
                @error('quantity') border-red-500 @enderror"
              name="quantity"
              value="{{ old('quantity') }}"
            />
            @error('quantity')
              <span class="text-red-500 text-xs">{{ $message }}</span>
            @enderror
          </div>

          <!-- Price -->
          <div>
            <label class="block text-sm font-semibold mb-1">
              Price <span class="text-red-500">*</span>
            </label>
            <input
              type="number"
              placeholder="Price"
              class="w-full bg-gray-100 border border-gray-300 rounded-md p-2 focus:border-blue-500 focus:ring-2 focus:ring-blue-500 outline-none
                @error('price') border-red-500 @enderror"
              name="price"
              value="{{ old('price') }}"
            />
            @error('price')
              <span class="text-red-500 text-xs">{{ $message }}</span>
            @enderror
          </div>

          <!-- Supplier -->
          <div class="md:col-span-2">
            <label class="block text-sm font-semibold mb-1">
              Supplier <span class="text-red-500">*</span>
            </label>
            <input
              type="text"
              placeholder="Enter supplier name"
              class="w-full bg-gray-100 border border-gray-300 rounded-md p-2 focus:border-blue-500 focus:ring-2 focus:ring-blue-500 outline-none
                @error('supplier') border-red-500 @enderror"
              
              name="supplier"
              value="{{ old('supplier') }}"
            />
            @error('supplier')
              <span class="text-red-500 text-xs">{{ $message }}</span>
            @enderror
          </div>
        </div>

        <!-- Description -->
        <div>
          <label class="block text-sm font-semibold mb-1">
            Description
          </label>
          <textarea
            name="description"
            rows="4"
            placeholder="Optional description..."
            class="w-full bg-gray-100 border border-gray-300 rounded-md p-2 focus:border-blue-500 focus:ring-2 focus:ring-blue-500 outline-none
              @error('description') border-red-500 @enderror"
          >{{ old('description') }}</textarea>
          @error('description')
            <span class="text-red-500 text-xs">{{ $message }}</span>
          @enderror
        </div>

        <!-- Buttons -->
        <div class="flex justify-end gap-4">
          <button type="reset" class="bg-gray-200 hover:bg-gray-300 text-gray-800 px-4 py-2 rounded-md">
            Reset
          </button>
          <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-md">
            Save Part
          </button>
        </div>
      </form>
    </div>

    <!-- Modal -->
    <form action="{{ route('admin.store_category')}}" method="post">
      @csrf
      <div id="modal" class="fixed inset-0 bg-black bg-opacity-40 flex items-center justify-center hidden z-50">
        <div class="bg-white p-6 rounded-lg shadow-lg w-full max-w-md">
          <h2 class="text-xl font-semibold mb-4 flex items-center gap-2">
            <iconify-icon icon="mdi:shape-plus-outline" class="text-2xl text-blue-600"></iconify-icon>
            Add New Category
          </h2>
          <div class="space-y-4">
            <input type="text" name="name" placeholder="Category Name" class="w-full bg-gray-50 border border-gray-300 rounded-md p-2 focus:border-blue-500 focus:ring-2 focus:ring-blue-500 outline-none" />
            <textarea  name="description" placeholder="Category Description" rows="3" class="w-full bg-gray-50 border border-gray-300 rounded-md p-2 focus:border-blue-500 focus:ring-2 focus:ring-blue-500 outline-none"></textarea>
          </div>
          <div class="flex justify-end gap-2 pt-4">
            <button onclick="closeModal()" class="px-4 py-2 text-gray-600 rounded-md hover:bg-gray-100 flex items-center gap-2">
              <iconify-icon icon="mdi:close" class="text-xl"></iconify-icon>
              Cancel
            </button>
            <button  type="submit" class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 flex items-center gap-2">
              Add Category
            </button>
          </div>
        </div>
      </div>
    </form>
  </form>

  <script>
    function openModal() {
      document.getElementById("modal").classList.remove("hidden");
    }

    function closeModal() {
      document.getElementById("modal").classList.add("hidden");
    }
  </script>
</x-Admin-master>
