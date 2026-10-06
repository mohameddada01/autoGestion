<!-- Navbar -->
<nav class="bg-white border border-gray-200 shadow-sm">
    <div class="max-w-7xl  sm:px-6 lg:px-8">
      <div class="flex justify-between items-center h-16">

        <!-- Left: Brand -->
        <div class="flex items-center">
          <iconify-icon icon="lucide:wrench" width="24" height="24" class="text-blue-600"></iconify-icon>
          <span class="ml-1 text-gray-900 text-lg font-bold">AutoFix Mechanics</span>
        </div>

        <!-- Center: Navigation Links (hidden on mobile) -->
        <div class="hidden sm:flex space-x-8">
          <a href="{{ route('homepage') }}" class="text-lg text-gray-900 hover:text-blue-600 transition-colors">Home</a>
          <a href="{{ route('about') }}" class="text-lg text-gray-900 hover:text-blue-600 transition-colors">About</a>
          <a href="{{ route('contact') }}" class="text-lg text-gray-900 hover:text-blue-600 transition-colors">Contact</a>
          <a href="{{ route('Tracking') }}" class="text-lg text-gray-900 hover:text-blue-600 transition-colors">Tracking</a>
        </div>

        <!-- Right: Login Button (original style) -->
        <div class="hidden sm:flex ">
          <a href="{{ route('login.show') }}" class="flex items-center space-x-2 bg-blue-700 text-white px-4 py-2 rounded-lg hover:bg-blue-600 transition">
            <iconify-icon icon="lucide:log-in" width="18" height="18"></iconify-icon>
            <span>Login</span>
          </a>
        </div>

        <!-- Mobile Menu Button -->
        <div class="sm:hidden flex items-center">
          <button id="menu-toggle" class="text-gray-700 focus:outline-none">
            <iconify-icon icon="lucide:menu" width="30" height="30"></iconify-icon>
          </button>
        </div>

      </div>
    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="sm:hidden hidden px-4 pt-4 pb-6 space-y-6 bg-white">
      <a href="{{ route('homepage') }}" class="block text-lg text-gray-900 hover:text-blue-600">Home</a>
      <a href="{{ route('about') }}" class="block text-lg text-gray-900 hover:text-blue-600">About</a>
      <a href="{{ route('contact') }}" class="block text-lg text-gray-900 hover:text-blue-600">Contact</a>
      <a href="{{ route('Tracking') }}" class="block text-lg text-gray-900 hover:text-blue-600">Tracking</a>
      <a href="{{ route('login.show') }}" class="block text-lg text-blue-600 bg-blue-100 rounded-lg px-4 py-3 text-center hover:bg-blue-200">Login</a>
    </div>

  </nav>

  <!-- JavaScript for Mobile Menu -->
  <script>
    const toggleButton = document.getElementById('menu-toggle');
    const mobileMenu = document.getElementById('mobile-menu');

    toggleButton.addEventListener('click', () => {
      mobileMenu.classList.toggle('hidden');
    });
  </script>
