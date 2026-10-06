<x-Statique-master title="AUTODESTION | LOGIN">

<div class="flex h-full">
  
  <!-- Left mechanic image with gradient overlay -->
  <div class="hidden lg:flex w-1/2 bg-cover bg-center relative"
       style="background-image: url('https://media.istockphoto.com/id/1347150429/photo/professional-mechanic-working-on-the-engine-of-the-car-in-the-garage.jpg?s=612x612&w=0&k=20&c=5zlDGgLNNaWsp_jq_L1AsGT85wrzpdl3kVH-75S-zTU=');">
    
    <!-- Dark gradient overlay -->
    <div class="absolute inset-0 bg-gradient-to-r from-black/70 via-black/40 to-transparent"></div>

    <!-- Left content -->
    <div class="relative z-10 p-12 text-white flex flex-col justify-center h-full">
      <h1 class="text-4xl font-bold mb-4 leading-tight">Welcome Back!</h1>
      <p class="text-lg text-blue-100">
        Manage repairs, stock, staff, and more in one place.
      </p>
    </div>
  </div>

  <!-- Right form side with divider -->
  <div class="w-full lg:w-1/2 flex items-center justify-center px-8 py-16 relative bg-white">
    
    <!-- Vertical soft border -->
    <div class="absolute left-0 top-0 bottom-0 w-px bg-gray-300"></div>

    <div class="max-w-md w-full">

      <!-- Welcome Title with Icon -->
      <div class="flex items-center gap-2 mb-8 justify-center">
        <iconify-icon icon="mdi:account-circle-outline" class="text-5xl text-blue-800"></iconify-icon>
        <h2 class="text-4xl font-bold text-blue-800">Welcome Back</h2>
      </div>

      <p class="text-gray-600 text-center mb-10 text-base">Log in to access your account</p>

      <!-- Login Form -->
      <form class="flex flex-col gap-6" action="{{ route('login.loginstore') }}" method="POST">
        @csrf

        <!-- Email Field -->
        <div class="flex flex-col gap-2">
          <label for="email" class="text-gray-700 text-sm font-medium">Email</label>
          <div class="relative">
            <iconify-icon icon="mdi:email-outline" class="absolute left-5 top-1/2 transform -translate-y-1/2 text-gray-400 text-3xl"></iconify-icon>
            <input
              type="email"
              id="email"
              name="email"
              placeholder="Enter your email"
              required
              class="w-full pl-16 pr-4 py-5 rounded-xl bg-gray-100 focus:outline-none focus:ring-2 focus:ring-blue-500 placeholder-gray-400 text-lg"
            >
          </div>
        </div>

        <!-- Password Field -->
        <div class="flex flex-col gap-2">
          <label for="password" class="text-gray-700 text-sm font-medium">Password</label>
          <div class="relative">
            <iconify-icon icon="mdi:lock-outline" class="absolute left-5 top-1/2 transform -translate-y-1/2 text-gray-400 text-3xl"></iconify-icon>
            <input
              type="password"
              id="password"
              name="password"
              placeholder="Enter your password"
              required
              class="w-full pl-16 pr-4 py-5 rounded-xl bg-gray-100 focus:outline-none focus:ring-2 focus:ring-blue-500 placeholder-gray-400 text-lg"
            >
          </div>
        </div>

        <!-- Forgot Password -->
        <div class="text-right text-sm">
          <a href="#" class="text-blue-600 hover:underline">Forgot password?</a>
        </div>

        <!-- Submit Button -->
        <button type="submit" 
                class="flex items-center justify-center gap-2 bg-blue-600 hover:bg-blue-700 text-white py-5 rounded-xl text-lg font-semibold transition w-full">
          <iconify-icon icon="mdi:login" class="text-3xl"></iconify-icon>
          Login
        </button>
      </form>

      <!-- Sign up -->
      <div class="text-center mt-8 text-sm text-gray-500">
        Don't have an account?
        <a href="#" class="text-blue-600 hover:underline font-semibold">Sign up</a>
      </div>

    </div>
  </div>

</div>

</x-Statique-master>
