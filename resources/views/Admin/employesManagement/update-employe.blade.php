<x-Admin-master title="update employee">
  <div class="min-h-screen p-8">
    <div class="bg-white rounded-xl shadow max-w-3xl mx-auto p-8">
      <form class="space-y-6" method="POST" action="{{ route('admin.update_employe', $employe->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <!-- Header -->
        <div class="flex items-center gap-4 mb-6">
          <div class="relative">
            <img src="{{ asset('storage/'.$employe->image) }}" class="w-20 h-20 rounded-full border-4 border-blue-500" />
            <label for="image-upload" class="absolute bottom-0 right-0 bg-blue-600 p-1 rounded-full cursor-pointer">
              <iconify-icon icon="lucide:camera" class="text-white w-4 h-4"></iconify-icon>
              <input id="image-upload" type="file" class="hidden" name="image" value="{{ $employe->image }}" />
            </label>
          </div>
          <div>
            <h1 class="text-2xl font-bold">Update Employee Information</h1>
            <p class="text-gray-500">Update employee details and credentials</p>
          </div>
        </div>

        <!-- Form -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
          <!-- Full Name -->
          <div>
            <label class="block text-sm font-medium mb-1">Full Name</label>
            <div class="flex items-center border rounded px-3 py-2 @error('name') border-red-500 @enderror">
              <iconify-icon icon="lucide:user" class="text-gray-400 mr-2"></iconify-icon>
              <input type="text" placeholder="Enter full name" class="w-full outline-none" name="name" value="{{ old('name', $employe->name) }}" />
            </div>
            @error('name')
              <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
            @enderror
          </div>

          <!-- Email -->
          <div>
            <label class="block text-sm font-medium mb-1">Email</label>
            <div class="flex items-center border rounded px-3 py-2 @error('email') border-red-500 @enderror">
              <iconify-icon icon="lucide:mail" class="text-gray-400 mr-2"></iconify-icon>
              <input type="email" placeholder="Enter email address" class="w-full outline-none" name="email" value="{{ old('email', $employe->email) }}" />
            </div>
            @error('email')
              <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
            @enderror
          </div>

          <!-- Password -->
          <div>
            <label class="block text-sm font-medium mb-1">Password</label>
            <div class="flex items-center border rounded px-3 py-2 @error('password') border-red-500 @enderror">
              <iconify-icon icon="lucide:lock" class="text-gray-400 mr-2"></iconify-icon>
              <input type="password" placeholder="Enter new password" class="w-full outline-none" name="password" value="{{ old('password', $employe->password) }}" />
            </div>
            @error('password')
              <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
            @enderror
          </div>

          <!-- Phone -->
          <div>
            <label class="block text-sm font-medium mb-1">Phone</label>
            <div class="flex items-center border rounded px-3 py-2 @error('phone') border-red-500 @enderror">
              <iconify-icon icon="lucide:phone" class="text-gray-400 mr-2"></iconify-icon>
              <input type="tel" placeholder="Enter phone number" class="w-full outline-none" name="phone" value="{{ old('phone', $employe->phone) }}" />
            </div>
            @error('phone')
              <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
            @enderror
          </div>

          <!-- Position -->
          <div>
            <label class="block text-sm font-medium mb-1">Position</label>
            <div class="flex items-center border rounded px-3 py-2 @error('position') border-red-500 @enderror">
              <iconify-icon icon="lucide:badge" class="text-gray-400 mr-2"></iconify-icon>
              <input type="text" placeholder="Enter position" class="w-full outline-none" name="position" value="{{ old('position', $employe->position) }}" />
            </div>
            @error('position')
              <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
            @enderror
          </div>

          <!-- Salary -->
          <div>
            <label class="block text-sm font-medium mb-1">Salary Amount</label>
            <div class="flex items-center border rounded px-3 py-2 @error('salary_amount') border-red-500 @enderror">
              <iconify-icon icon="lucide:dollar-sign" class="text-gray-400 mr-2"></iconify-icon>
              <input type="number" placeholder="Enter salary amount" class="w-full outline-none" name="salary_amount" value="{{ old('salary_amount', $employe->salary_amount) }}" />
            </div>
            @error('salary_amount')
              <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
            @enderror
          </div>

          <!-- Hire Date -->
          <div>
            <label class="block text-sm font-medium mb-1">Hire Date</label>
            <input type="date" class="w-full border rounded px-3 py-2 @error('hire_date') border-red-500 @enderror" name="hire_date" value="{{ old('hire_date', $employe->hire_date) }}" />
            @error('hire_date')
              <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
            @enderror
          </div>
        </div>

        <!-- Hidden Status -->
        <input type="hidden" name="status" value="{{$employe->status}}" />

        <!-- Buttons -->
        <div class="flex justify-end gap-4 mt-8">
          <button type="button" class="px-4 py-2 bg-gray-300 text-gray-800 rounded hover:bg-gray-400">Cancel</button>
          <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">Update Employee</button>
        </div>
      </form>
    </div>
  </div>
</x-Admin-master>
