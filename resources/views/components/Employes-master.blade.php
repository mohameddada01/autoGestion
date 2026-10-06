<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AutoRepair Pro Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://code.iconify.design/iconify-icon/1.0.8/iconify-icon.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <style>
    .form-card {
      border-radius: 20px;
    }
    .form-floating > label {
      padding-left: 1rem;
    }
    .flash-alert {
      animation: slideDown 0.5s ease-out;
      border-radius: 12px;
      padding: 1rem 1.25rem;
      position: relative;
      overflow: hidden;
    }

    @keyframes slideDown {
      from {
        opacity: 0;
        transform: translateY(-20%);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    .alert-custom-success {
      background: linear-gradient(to right, #4caf50, #66bb6a);
      color: white;
      border: none;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
    }
    .alert-custom-danger {
      background: linear-gradient(to right, #f44336, #e57373);
      color: white;
      border: none;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
    }

    .alert-custom-success .btn-close {
      filter: invert(1);
    }
    .alert-timer-bar {
      content: '';
      position: absolute;
      bottom: 0;
      left: 0;
      height: 4px;
      background-color: rgba(255, 255, 255, 0.8);
      animation: timerProgress 5s linear forwards;
    }

    @keyframes timerProgress {
      from {
        width: 100%;
      }
      to {
        width: 0%;
      }
    }
  </style>
</head>

<body>
    
  <!-- Navbar -->
  <nav class="bg-white shadow px-6 py-4 flex items-center justify-between">
    <div class="flex items-center gap-2 px-6  text-blue-600 text-xl font-semibold">
      <iconify-icon icon="mdi:wrench" class="text-2xl"></iconify-icon>
      <a href="{{route('employe.dashboard')}}">AutoRepair Pro </a>
    </div>

    <!-- Profile Dropdown -->
    <div class="relative group">
      <button class="flex items-center space-x-3 focus:outline-none">
        <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="avatar" class="w-10 h-10 rounded-full">
        <div class="text-left">
          <p class="text-sm font-semibold text-gray-800">{{ Auth::user()->name }}</p>
          <p class="text-xs text-gray-500">{{ Auth::user()->role }}</p>
        </div>
        <iconify-icon icon="mdi:chevron-down" class="text-gray-500"></iconify-icon>
      </button>

      <!-- Dropdown -->
      <div class="absolute right-0 mt-2 w-48 bg-white border rounded-lg shadow-md hidden group-hover:block z-50">
        <a href="#" class="block px-4 py-2 hover:bg-gray-100 text-sm">
          <iconify-icon icon="mdi:account" class="mr-2"></iconify-icon>
          Profil
        </a>
        <a href="#" class="block px-4 py-2 hover:bg-gray-100 text-sm">
          <iconify-icon icon="mdi:cog" class="mr-2"></iconify-icon>
          Paramètres
        </a>
        <a href="{{ route('login.logout')}}" class="block px-4 py-2 hover:bg-gray-100 text-sm text-red-500">
          <iconify-icon icon="mdi:logout" class="mr-2"></iconify-icon>
          Déconnexion
        </a>
      </div>
    </div>
  </nav>
   
  @include('layouts.flashbag')
    {{$slot}}



    
</body>
</html>