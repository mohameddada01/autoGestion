<footer class="bg-white border-t border-gray-200 ">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 grid grid-cols-1 md:grid-cols-4 gap-8">

    <!-- Logo + Description + Socials -->
    <div>
      <div class="flex items-center mb-4">
        <iconify-icon icon="lucide:wrench" width="24" height="24" class="text-blue-600"></iconify-icon>
        <span class="ml-2 text-gray-900 text-lg font-bold">AutoFix Mechanics</span>
      </div>
      <p class="text-gray-600 mb-4">
        Professional automotive repair services with over 15 years of experience.
      </p>
      <div class="flex space-x-4">
        <a href="#" class="text-blue-600 hover:text-blue-800">
          <iconify-icon icon="mdi:facebook" width="24" height="24"></iconify-icon>
        </a>
        <a href="#" class="text-blue-600 hover:text-blue-800">
          <iconify-icon icon="mdi:twitter" width="24" height="24"></iconify-icon>
        </a>
        <a href="#" class="text-blue-600 hover:text-blue-800">
          <iconify-icon icon="mdi:instagram" width="24" height="24"></iconify-icon>
        </a>
      </div>
    </div>

    <!-- Quick Links -->
    <div>
      <h4 class="text-gray-900 font-semibold mb-4">Quick Links</h4>
      <ul class="space-y-2 text-gray-600">
        <li><a href="{{ route('homepage') }}" class="hover:text-blue-600">Home</a></li>
        <li><a href="{{ route('about') }}" class="hover:text-blue-600">About Us</a></li>
        <li><a href="" class="hover:text-blue-600">Services</a></li>
        <li><a href="{{ route('Tracking') }}" class="hover:text-blue-600">Track Your Repair</a></li>
        <li><a href="{{ route('contact') }}" class="hover:text-blue-600">Contact Us</a></li>
      </ul>
    </div>

    <!-- Our Services -->
    <div>
      <h4 class="text-gray-900 font-semibold mb-4">Our Services</h4>
      <ul class="space-y-2 text-gray-600">
        <li><a href="#" class="hover:text-blue-600">Engine Repair</a></li>
        <li><a href="#" class="hover:text-blue-600">Brake Service</a></li>
        <li><a href="#" class="hover:text-blue-600">Oil Change</a></li>
        <li><a href="#" class="hover:text-blue-600">Tire Replacement</a></li>
        <li><a href="#" class="hover:text-blue-600">Diagnostics</a></li>
      </ul>
    </div>

    <!-- Contact Us -->
    <div>
      <h4 class="text-gray-900 font-semibold mb-4">Contact Us</h4>
      <ul class="space-y-4 text-gray-600">
        <li class="flex items-start">
          <iconify-icon icon="lucide:map-pin" class="text-blue-600 mr-2" width="20" height="20"></iconify-icon>
          <span>123 Repair Street, Mechanic City, MC 12345</span>
        </li>
        <li class="flex items-start">
          <iconify-icon icon="lucide:phone" class="text-blue-600 mr-2" width="20" height="20"></iconify-icon>
          <span>(555) 123-4567</span>
        </li>
        <li class="flex items-start">
          <iconify-icon icon="lucide:mail" class="text-blue-600 mr-2" width="20" height="20"></iconify-icon>
          <span>info@autofixmechanics.com</span>
        </li>
        <li class="flex items-start">
          <iconify-icon icon="lucide:clock" class="text-blue-600 mr-2" width="20" height="20"></iconify-icon>
          <span>Mon-Fri: 8AM-6PM, Sat: 9AM-4PM</span>
        </li>
      </ul>
    </div>

  </div>

  <!-- Bottom Footer -->
  <div class="border-t border-gray-200 py-6">
    <div class="max-w-7xl mx-auto px-4 flex flex-col sm:flex-row justify-between items-center text-gray-600 text-sm">
      <p>© 2025 AutoFix Mechanics. All rights reserved.</p>
      <div class="flex space-x-6 mt-4 sm:mt-0">
        <a href="#" class="hover:text-blue-600">Privacy Policy</a>
        <a href="#" class="hover:text-blue-600">Terms of Service</a>
        <a href="#" class="hover:text-blue-600">Sitemap</a>
      </div>
    </div>
  </div>
</footer>

<!-- Iconify Script -->
<script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
