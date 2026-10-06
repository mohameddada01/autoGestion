<x-Statique-master title="AUTO-GETION | HOME">
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Mechanic Garage</title>
  <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-white text-gray-800">

<!-- Hero Section -->
<section class="relative bg-gray-900 text-white">
  <div class="absolute inset-0">
    <img src="https://img.heroui.chat/image/places?w=1920&h=1080&u=mechanic-garage" alt="Mechanic garage" class="w-full h-full object-cover">
    <div class="absolute inset-0 bg-gradient-to-r from-black/70 to-black/40"></div>
  </div>
  <div class="relative z-10 max-w-7xl mx-auto px-4 py-24 md:py-32 flex flex-col items-start">
    <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-6 max-w-3xl">Professional Auto Repair & Maintenance Services</h1>
    <p class="text-white/90 text-lg md:text-xl mb-8 max-w-2xl">
      Keep your vehicle running smoothly with our expert mechanics and state-of-the-art equipment. Quality service you can trust.
    </p>
    <div class="flex flex-col sm:flex-row gap-4">
      <a href="#" class="bg-blue-600 hover:bg-blue-700 text-white font-medium py-3 px-6 rounded-lg flex items-center gap-2">
        Book Appointment
        <iconify-icon icon="lucide:calendar" width="20"></iconify-icon>
      </a>
      <a href="#" class="bg-white/20 hover:bg-white/30 text-white font-medium py-3 px-6 rounded-lg flex items-center gap-2">
        Call Us Now
        <iconify-icon icon="lucide:phone" width="20"></iconify-icon>
      </a>
    </div>
    <div class="flex items-center gap-6 mt-12">
      <div class="flex -space-x-2">
        <img class="w-10 h-10 rounded-full border-2 border-white object-cover" src="https://img.heroui.chat/image/avatar?w=80&h=80&u=mechanic-1" alt="Mechanic 1">
        <img class="w-10 h-10 rounded-full border-2 border-white object-cover" src="https://img.heroui.chat/image/avatar?w=80&h=80&u=mechanic-2" alt="Mechanic 2">
        <img class="w-10 h-10 rounded-full border-2 border-white object-cover" src="https://img.heroui.chat/image/avatar?w=80&h=80&u=mechanic-3" alt="Mechanic 3">
        <img class="w-10 h-10 rounded-full border-2 border-white object-cover" src="https://img.heroui.chat/image/avatar?w=80&h=80&u=mechanic-4" alt="Mechanic 4">
      </div>
      <div>
        <div class="flex gap-1">
          <iconify-icon icon="lucide:star" class="text-yellow-400"></iconify-icon>
          <iconify-icon icon="lucide:star" class="text-yellow-400"></iconify-icon>
          <iconify-icon icon="lucide:star" class="text-yellow-400"></iconify-icon>
          <iconify-icon icon="lucide:star" class="text-yellow-400"></iconify-icon>
          <iconify-icon icon="lucide:star" class="text-yellow-400"></iconify-icon>
        </div>
        <p class="text-white/90 text-sm">Trusted by 10,000+ happy customers</p>
      </div>
    </div>
  </div>
</section>

<!-- Car Status Check -->
<section class="py-24 mx-auto">
  <!-- Title Section -->
  <div class="text-center mb-10">
    <h1 class="text-3xl font-bold text-gray-900 mb-2">Check Your Car Status</h1>
    <p class="text-gray-600 max-w-xl mx-auto">
      Enter your license plate number to check your car's service history, upcoming maintenance, and current status.
    </p>
  </div>

  <!-- Search Box -->
  <div class="bg-white shadow-lg rounded-xl p-6 w-full max-w-3xl mx-auto">
    <div class="flex items-center gap-2 mb-8">
      <input 
        type="text" 
        placeholder="Enter your license plate" 
        class="flex-1 bg-gray-100 p-3 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400" 
      />
      <button class="bg-blue-600 hover:bg-blue-700 text-white p-3 rounded-md flex items-center gap-2">
        Check Status
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" 
             viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
          <path stroke-linecap="round" stroke-linejoin="round" 
                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
        </svg>
      </button>
    </div>

    <!-- Info Cards -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 text-center">
      <!-- Service History Card -->
      <div class="flex flex-col items-center">
        <div class="bg-blue-100 p-4 rounded-full mb-3">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-blue-600" fill="none" 
               viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" 
                  d="M3 10h2l1 2h13l1-2h2m-3 8H6a2 2 0 01-2-2V7a2 2 0 012-2h3.5a2 2 0 011.7 1l1.6 3.2a2 2 0 001.7 1H18a2 2 0 012 2v5a2 2 0 01-2 2z" />
          </svg>
        </div>
        <h3 class="font-semibold text-gray-800 mb-2">Service History</h3>
        <p class="text-gray-500 text-sm">
          View all past services and repairs performed on your vehicle.
        </p>
      </div>

      <!-- Upcoming Maintenance Card -->
      <div class="flex flex-col items-center">
        <div class="bg-blue-100 p-4 rounded-full mb-3">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-blue-600" fill="none" 
               viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" 
                  d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
          </svg>
        </div>
        <h3 class="font-semibold text-gray-800 mb-2">Upcoming Maintenance</h3>
        <p class="text-gray-500 text-sm">
          See recommended maintenance based on your vehicle's mileage and age.
        </p>
      </div>

      <!-- Recall Alerts Card -->
      <div class="flex flex-col items-center">
        <div class="bg-blue-100 p-4 rounded-full mb-3">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-blue-600" fill="none" 
               viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" 
                  d="M12 9v2m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
          </svg>
        </div>
        <h3 class="font-semibold text-gray-800 mb-2">Recall Alerts</h3>
        <p class="text-gray-500 text-sm">
          Check if your vehicle has any outstanding manufacturer recalls.
        </p>
      </div>
    </div>
  </div>

</section>

<!-- Services Offered -->
<section class="py-12">
  <div class="text-center mb-12">
    <h2 class="text-3xl font-bold">Our Services</h2>
    <p class="text-gray-600 mt-2">We offer a comprehensive range of automotive services to keep your vehicle in optimal condition.</p>
  </div>

  <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 px-4">
    
    <!-- Service Card -->
    <div class="bg-white rounded-xl shadow-md p-6 hover:shadow-lg transition">
      <div class="bg-blue-100 p-3 rounded-full w-fit mb-4">
        <iconify-icon icon="mdi:oil" class="text-blue-500 text-3xl"></iconify-icon>
      </div>
      <h3 class="text-xl font-semibold mb-2">Oil Change</h3>
      <p class="text-gray-600 mb-4">Regular oil changes to keep your engine running smoothly and extend its life.</p>
      <p class="text-blue-600 font-semibold mb-4">From $29.99</p>
      <button class="bg-blue-100 text-blue-600 text-sm px-4 py-2 rounded hover:bg-blue-200 transition">Learn More ➔</button>
    </div>

    <!-- Service Card -->
    <div class="bg-white rounded-xl shadow-md p-6 hover:shadow-lg transition">
      <div class="bg-blue-100 p-3 rounded-full w-fit mb-4">
        <iconify-icon icon="mdi:car-brake-alert" class="text-blue-500 text-3xl"></iconify-icon>
      </div>
      <h3 class="text-xl font-semibold mb-2">Brake Service</h3>
      <p class="text-gray-600 mb-4">Inspection and replacement of brake pads, rotors, and brake fluid as needed.</p>
      <p class="text-blue-600 font-semibold mb-4">From $89.99</p>
      <button class="bg-blue-100 text-blue-600 text-sm px-4 py-2 rounded hover:bg-blue-200 transition">Learn More ➔</button>
    </div>

    <!-- Service Card -->
    <div class="bg-white rounded-xl shadow-md p-6 hover:shadow-lg transition">
      <div class="bg-blue-100 p-3 rounded-full w-fit mb-4">
        <iconify-icon icon="mdi:engine" class="text-blue-500 text-3xl"></iconify-icon>
      </div>
      <h3 class="text-xl font-semibold mb-2">Engine Diagnostics</h3>
      <p class="text-gray-600 mb-4">Computer diagnostics to identify and fix engine problems and warning lights.</p>
      <p class="text-blue-600 font-semibold mb-4">From $49.99</p>
      <button class="bg-blue-100 text-blue-600 text-sm px-4 py-2 rounded hover:bg-blue-200 transition">Learn More ➔</button>
    </div>

    <!-- Service Card -->
    <div class="bg-white rounded-xl shadow-md p-6 hover:shadow-lg transition">
      <div class="bg-blue-100 p-3 rounded-full w-fit mb-4">
        <iconify-icon icon="mdi:car-tire-alert" class="text-blue-500 text-3xl"></iconify-icon>
      </div>
      <h3 class="text-xl font-semibold mb-2">Tire Services</h3>
      <p class="text-gray-600 mb-4">Rotation, balancing, alignment, and replacement of tires for optimal performance.</p>
      <p class="text-blue-600 font-semibold mb-4">From $39.99</p>
      <button class="bg-blue-100 text-blue-600 text-sm px-4 py-2 rounded hover:bg-blue-200 transition">Learn More ➔</button>
    </div>

    <!-- Service Card -->
    <div class="bg-white rounded-xl shadow-md p-6 hover:shadow-lg transition">
      <div class="bg-blue-100 p-3 rounded-full w-fit mb-4">
        <iconify-icon icon="mdi:car-battery" class="text-blue-500 text-3xl"></iconify-icon>
      </div>
      <h3 class="text-xl font-semibold mb-2">Battery Service</h3>
      <p class="text-gray-600 mb-4">Testing, charging, and replacement of batteries to prevent unexpected breakdowns.</p>
      <p class="text-blue-600 font-semibold mb-4">From $59.99</p>
      <button class="bg-blue-100 text-blue-600 text-sm px-4 py-2 rounded hover:bg-blue-200 transition">Learn More ➔</button>
    </div>

    <!-- Service Card -->
    <div class="bg-white rounded-xl shadow-md p-6 hover:shadow-lg transition">
      <div class="bg-blue-100 p-3 rounded-full w-fit mb-4">
        <iconify-icon icon="mdi:air-conditioner" class="text-blue-500 text-3xl"></iconify-icon>
      </div>
      <h3 class="text-xl font-semibold mb-2">A/C Service</h3>
      <p class="text-gray-600 mb-4">Inspection, recharge, and repair of air conditioning systems for your comfort.</p>
      <p class="text-blue-600 font-semibold mb-4">From $79.99</p>
      <button class="bg-blue-100 text-blue-600 text-sm px-4 py-2 rounded hover:bg-blue-200 transition">Learn More ➔</button>
    </div>

  </div>

  <div class="text-center mt-12">
    <button class="bg-blue-600 text-white text-sm px-6 py-3 rounded-full hover:bg-blue-700 transition">View All Services ☰</button>
  </div>
</section>
<!-- Why Choose Us -->
<section class="py-12">
  <div class="text-center mb-12">
    <h2 class="text-3xl font-bold">Why Choose Us</h2>
    <p class="text-gray-600 mt-2">We're committed to providing exceptional service and building long-term relationships with our customers.</p>
  </div>

  <div class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-2 gap-8 items-center px-4">
    
    <!-- Image -->
    <div>
      <img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?ixlib=rb-4.0.3&auto=format&fit=crop&w=934&q=80" alt="Interior" class="rounded-xl w-full object-cover">
    </div>

    <!-- Text Content -->
    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">

      <!-- Card -->
      <div class="bg-white border border-gray-200 p-4 rounded-xl shadow-md hover:shadow-lg transition">
        <div class="flex items-center justify-center bg-blue-100 w-10 h-10 rounded-full mb-3">
          <iconify-icon icon="ph:wrench-bold" class="text-blue-500 text-lg"></iconify-icon>
        </div>
        <h3 class="font-semibold text-base mb-1">Expert Mechanics</h3>
        <p class="text-gray-600 text-sm">Top certified technicians with years of expertise.</p>
      </div>

      <!-- Card -->
      <div class="bg-white border border-gray-200 p-4 rounded-xl shadow-md hover:shadow-lg transition">
        <div class="flex items-center justify-center bg-blue-100 w-10 h-10 rounded-full mb-3">
          <iconify-icon icon="mdi:timer-sand" class="text-blue-500 text-lg"></iconify-icon>
        </div>
        <h3 class="font-semibold text-base mb-1">Fast Turnaround</h3>
        <p class="text-gray-600 text-sm">Quick diagnostics and services to save your time.</p>
      </div>

      <!-- Card -->
      <div class="bg-white border border-gray-200 p-4 rounded-xl shadow-md hover:shadow-lg transition">
        <div class="flex items-center justify-center bg-blue-100 w-10 h-10 rounded-full mb-3">
          <iconify-icon icon="mdi:shield-lock-outline" class="text-blue-500 text-lg"></iconify-icon>
        </div>
        <h3 class="font-semibold text-base mb-1">Secure Warranty</h3>
        <p class="text-gray-600 text-sm">Reliable warranty coverage on all repairs.</p>
      </div>

      <!-- Card -->
      <div class="bg-white border border-gray-200 p-4 rounded-xl shadow-md hover:shadow-lg transition">
        <div class="flex items-center justify-center bg-blue-100 w-10 h-10 rounded-full mb-3">
          <iconify-icon icon="mdi:currency-usd" class="text-blue-500 text-lg"></iconify-icon>
        </div>
        <h3 class="font-semibold text-base mb-1">Affordable Pricing</h3>
        <p class="text-gray-600 text-sm">Competitive, transparent pricing with no surprises.</p>
      </div>

      <!-- Highlight Card -->
      <div class="bg-blue-600 text-white p-5 rounded-xl shadow-lg sm:col-span-2">
        <h3 class="font-semibold text-base mb-2">Customer-First Service</h3>
        <p class="text-sm mb-3">Our priority is your satisfaction — clear communication and expert advice guaranteed.</p>
        <div class="flex items-center gap-2">
          <span class="font-bold">4.9/5</span>
          <div class="flex gap-1 text-yellow-400">
            <iconify-icon icon="mdi:star" width="16"></iconify-icon>
            <iconify-icon icon="mdi:star" width="16"></iconify-icon>
            <iconify-icon icon="mdi:star" width="16"></iconify-icon>
            <iconify-icon icon="mdi:star" width="16"></iconify-icon>
            <iconify-icon icon="mdi:star-half-full" width="16"></iconify-icon>
          </div>
          <span class="text-sm">(500+ reviews)</span>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- Client Testimonials -->
<section class="py-16">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">

    <!-- Title -->
    <h2 class="text-3xl font-bold text-gray-900 mb-4">What Our Clients Say</h2>
    <p class="text-gray-600 mb-12 max-w-2xl mx-auto">
      Don't just take our word for it. Here's what our satisfied customers have to say about our services.
    </p>

    <!-- Testimonials Carousel -->
    <div class="relative">
      <!-- Left Arrow -->
      <button class="absolute left-0 top-1/2 transform -translate-y-1/2 bg-white rounded-full shadow p-2">
        <iconify-icon icon="ic:round-chevron-left" class="text-gray-600" width="24" height="24"></iconify-icon>
      </button>

      <!-- Testimonials -->
      <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

        <!-- Testimonial 1 -->
        <div class="bg-white p-6 rounded-lg shadow hover:shadow-lg transition">
          <div class="flex items-center mb-4">
            <img src="https://randomuser.me/api/portraits/women/1.jpg" alt="Sarah Johnson" class="w-12 h-12 rounded-full mr-3">
            <div class="text-left">
              <h4 class="font-bold text-gray-900">Sarah Johnson</h4>
              <p class="text-gray-500 text-sm">Toyota Owner</p>
            </div>
          </div>
          <div class="flex mb-4">
            <iconify-icon icon="ic:round-star" class="text-yellow-400" width="20" height="20"></iconify-icon>
            <iconify-icon icon="ic:round-star" class="text-yellow-400" width="20" height="20"></iconify-icon>
            <iconify-icon icon="ic:round-star" class="text-yellow-400" width="20" height="20"></iconify-icon>
            <iconify-icon icon="ic:round-star" class="text-yellow-400" width="20" height="20"></iconify-icon>
            <iconify-icon icon="ic:round-star" class="text-yellow-400" width="20" height="20"></iconify-icon>
          </div>
          <p class="text-gray-600 text-sm">
            "The team at MechPro did an excellent job diagnosing and fixing the issue with my car's transmission. Fast, professional, and reasonably priced!"
          </p>
        </div>

        <!-- Testimonial 2 -->
        <div class="bg-white p-6 rounded-lg shadow hover:shadow-lg transition">
          <div class="flex items-center mb-4">
            <img src="https://randomuser.me/api/portraits/men/2.jpg" alt="Michael Rodriguez" class="w-12 h-12 rounded-full mr-3">
            <div class="text-left">
              <h4 class="font-bold text-gray-900">Michael Rodriguez</h4>
              <p class="text-gray-500 text-sm">Honda Owner</p>
            </div>
          </div>
          <div class="flex mb-4">
            <iconify-icon icon="ic:round-star" class="text-yellow-400" width="20" height="20"></iconify-icon>
            <iconify-icon icon="ic:round-star" class="text-yellow-400" width="20" height="20"></iconify-icon>
            <iconify-icon icon="ic:round-star" class="text-yellow-400" width="20" height="20"></iconify-icon>
            <iconify-icon icon="ic:round-star" class="text-yellow-400" width="20" height="20"></iconify-icon>
            <iconify-icon icon="ic:round-star-border" class="text-yellow-400" width="20" height="20"></iconify-icon>
          </div>
          <p class="text-gray-600 text-sm">
            "I've been bringing my vehicles here for years. Their attention to detail and honest recommendations have made me a loyal customer."
          </p>
        </div>

        <!-- Testimonial 3 -->
        <div class="bg-white p-6 rounded-lg shadow hover:shadow-lg transition">
          <div class="flex items-center mb-4">
            <img src="https://randomuser.me/api/portraits/women/3.jpg" alt="Emily Chen" class="w-12 h-12 rounded-full mr-3">
            <div class="text-left">
              <h4 class="font-bold text-gray-900">Emily Chen</h4>
              <p class="text-gray-500 text-sm">BMW Owner</p>
            </div>
          </div>
          <div class="flex mb-4">
            <iconify-icon icon="ic:round-star" class="text-yellow-400" width="20" height="20"></iconify-icon>
            <iconify-icon icon="ic:round-star" class="text-yellow-400" width="20" height="20"></iconify-icon>
            <iconify-icon icon="ic:round-star" class="text-yellow-400" width="20" height="20"></iconify-icon>
            <iconify-icon icon="ic:round-star" class="text-yellow-400" width="20" height="20"></iconify-icon>
            <iconify-icon icon="ic:round-star-border" class="text-yellow-400" width="20" height="20"></iconify-icon>
          </div>
          <p class="text-gray-600 text-sm">
            "As someone who knows very little about cars, I appreciate how they take the time to explain everything. Never felt pressured or overcharged."
          </p>
        </div>

      </div>

      <!-- Right Arrow -->
      <button class="absolute right-0 top-1/2 transform -translate-y-1/2 bg-white rounded-full shadow p-2">
        <iconify-icon icon="ic:round-chevron-right" class="text-gray-600" width="24" height="24"></iconify-icon>
      </button>
    </div>
  </div>

  <!-- CTA Section -->
  <!-- CTA Section -->
<div class="mt-16 px-4">
  <div class="max-w-4xl mx-auto bg-gradient-to-r from-blue-600 via-blue-700 to-blue-800 text-white rounded-xl py-9 px-4 ">
    <h3 class="text-3xl font-bold mb-6">Ready to Experience Our Service?</h3>
    <p class="mb-8 text-blue-100">Join our satisfied customers and discover the difference with our top-notch auto care services.</p>
    <div class="flex flex-col sm:flex-row justify-center items-center gap-4">
      <a href="#"
        class="inline-flex items-center justify-center bg-white text-blue-600 font-semibold px-8 py-4 rounded-lg hover:bg-gray-100 transition transform hover:scale-105">
        <iconify-icon icon="ic:round-event" class="mr-2" width="20" height="20"></iconify-icon>
        Book Appointment
      </a>
      <a href="#"
        class="inline-flex items-center justify-center bg-blue-900 hover:bg-blue-800 font-semibold px-8 py-4 rounded-lg transition transform hover:scale-105">
        <iconify-icon icon="ic:round-phone" class="mr-2" width="20" height="20"></iconify-icon>
        Contact Us
      </a>
    </div>
  </div>
</div>


</section>

</body>
</html>

 

  







</x-Statique-master>