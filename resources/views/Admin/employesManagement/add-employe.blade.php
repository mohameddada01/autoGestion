<x-Admin-master title="Create New Employe">
  <div class="bg-gray">
    <!-- Header -->
    <div class="bg-blue-700 text-white px-6 py-4 rounded-t-lg">
      <h2 class="text-xl font-bold flex items-center gap-2">
        <iconify-icon icon="mdi:account-wrench" width="24" height="24"></iconify-icon>
        Add New Mechanic
      </h2>
      <div class="flex items-center gap-2 text-gray-200 text-sm font-medium mt-1">
        <iconify-icon icon="mdi:form-textbox" width="18" height="18"></iconify-icon>
        <span>Enter mechanic details below</span>
      </div>
    </div>

    <!-- Form Body -->
    <form class="p-6 grid grid-cols-1 md:grid-cols-2 gap-4" action="{{route('admin.store_employe')}}" method="POST" enctype="multipart/form-data">
      @csrf

      <!-- Full Name -->
      <div>
        <label class="block text-sm font-medium text-gray-700">Full Name<span class="text-red-500">*</span></label>
        <input type="text" name="name" placeholder="Enter full name" class="w-full mt-1 p-2 border rounded-md bg-gray-100 @error('name') border-red-500 @enderror" value="{{ old('name') }}">
        @error('name') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
      </div>

      <!-- Email -->
      <div>
        <label class="block text-sm font-medium text-gray-700">Email<span class="text-red-500">*</span></label>
        <input type="email" name="email" placeholder="Enter email address" class="w-full mt-1 p-2 border rounded-md bg-gray-100 @error('email') border-red-500 @enderror" value="{{ old('email') }}">
        @error('email') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
      </div>

      <!-- Password -->
      <div>
        <label class="block text-sm font-medium text-gray-700">Password<span class="text-red-500">*</span></label>
        <input type="password" name="password" placeholder="Enter password" class="w-full mt-1 p-2 border rounded-md bg-gray-100 @error('password') border-red-500 @enderror">
        @error('password') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
      </div>

      <!-- Role -->
      <div>
        <label class="block text-sm font-medium text-gray-700">Role<span class="text-red-500">*</span></label>
        <select name="role" class="w-full mt-1 p-2 border rounded-md bg-gray-100 @error('role') border-red-500 @enderror">
          <option value="">Select role</option>
          <option value="admin" {{ old('role') == 'admin' ? 'selected' : '' }}>Admin</option>
          <option value="employee" {{ old('role') == 'employe' ? 'selected' : '' }}>Employe</option>
        </select>
        @error('role') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
      </div>

      <!-- Phone -->
      <div>
        <label class="block text-sm font-medium text-gray-700">Phone</label>
        <input type="text" name="phone" placeholder="Enter phone number" class="w-full mt-1 p-2 border rounded-md bg-gray-100 @error('phone') border-red-500 @enderror" value="{{ old('phone') }}">
        @error('phone') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
      </div>

      <!-- Position -->
      <div>
        <label class="block text-sm font-medium text-gray-700">Position<span class="text-red-500">*</span></label>
        <input type="text" name="position" placeholder="e.g. Senior Mechanic, Brake Specialist" class="w-full mt-1 p-2 border rounded-md bg-gray-100 @error('position') border-red-500 @enderror" value="{{ old('position') }}">
        @error('position') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
      </div>

      <!-- Salary -->
      <div>
        <label class="block text-sm font-medium text-gray-700">Salary Amount<span class="text-red-500">*</span></label>
        <input type="number" name="salary_amount" placeholder="Enter salary amount" class="w-full mt-1 p-2 border rounded-md bg-gray-100 @error('salary') border-red-500 @enderror" value="{{ old('salary') }}">
        @error('salary') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
      </div>

      <!-- Hire Date -->
      <div>
        <label class="block text-sm font-medium text-gray-700">Hire Date</label>
        <input type="date" name="hire_date" class="w-full mt-1 p-2 border rounded-md bg-gray-100 @error('hire_date') border-red-500 @enderror" value="{{ old('hire_date', date('Y-m-d')) }}">
        @error('hire_date') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
      </div>

      <!-- Profile Image -->
      <div class="md:col-span-2">
        <label class="block text-sm font-medium text-gray-700 mb-2">Profile Image</label>
        <div class="flex items-center justify-between bg-gray-50 border-2 border-dashed rounded-md p-4">
          <input type="file" name="image" class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-md file:border-0 file:bg-blue-700 file:text-white hover:file:bg-blue-800 @error('profile_image') border-red-500 @enderror">
        </div>
        @error('profile_image') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
      </div> 
      
      <!-- Hidden Field -->
      <input type="hidden" name="status" value="0">

      <!-- Buttons -->
      <div class="md:col-span-2 flex justify-end space-x-4 mt-4">
        <button type="reset" class="px-4 py-2 bg-gray-300 text-gray-700 rounded-md hover:bg-gray-400">Reset</button>
        <button type="submit" class="px-4 py-2 bg-blue-700 text-white rounded-md hover:bg-blue-800">Add Mechanic</button>
      </div>

     
    </form>
  </div>
</x-Admin-master>
