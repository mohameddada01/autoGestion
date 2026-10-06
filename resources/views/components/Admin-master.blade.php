@props(['title'])
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>AutoRepair Pro Dashboard</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://code.iconify.design/3/3.1.0/iconify.min.js"></script>
  <script src="https://code.iconify.design/iconify-icon/1.0.8/iconify-icon.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
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
<body class="bg-gray-50">

  

  <div class="flex min-h-screen">
  

    <!-- Sidebar -->
    <aside class="w-64 bg-white shadow-md hidden md:block">
      <div class="flex items-center gap-2 px-6 py-6 text-blue-600 text-xl font-semibold">
        <iconify-icon icon="mdi:wrench" class="text-2xl"></iconify-icon>
        AutoRepair Pro
      </div>

      <nav class="px-4 space-y-2">
      <a href="{{ route('admin.dashboard') }}"
   class="flex items-center px-4 py-3 rounded-lg 
          {{ request()->routeIs('admin.dashboard') ? 'bg-blue-100 text-blue-600 font-semibold' : 'text-gray-700 hover:bg-gray-100' }}">
   <iconify-icon icon="mdi:view-dashboard" class="mr-3 text-lg"></iconify-icon>
   Dashboard
</a>

<a href="{{ route('admin.stock') }}"
   class="flex items-center px-4 py-3 rounded-lg 
          {{ request()->routeIs('admin.stock') ? 'bg-blue-100 text-blue-600 font-semibold' : 'text-gray-700 hover:bg-gray-100' }}">
   <iconify-icon icon="mdi:package-variant" class="mr-3 text-lg"></iconify-icon>
   Gestion de Stock
</a>

<a href="{{ route('admin.employes') }}"
   class="flex items-center px-4 py-3 rounded-lg 
          {{ request()->routeIs('admin.employes') ? 'bg-blue-100 text-blue-600 font-semibold' : 'text-gray-700 hover:bg-gray-100' }}">
   <iconify-icon icon="mdi:account-group" class="mr-3 text-lg"></iconify-icon>
   Gestion des Employés
</a>

<a href="{{ route('admin.appointment') }}"
   class="flex items-center px-4 py-3 rounded-lg 
          {{ request()->routeIs('admin.appointment') ? 'bg-blue-100 text-blue-600 font-semibold' : 'text-gray-700 hover:bg-gray-100' }}">
   <iconify-icon icon="mdi:calendar-check" class="mr-3 text-lg"></iconify-icon>
   Rendez-vous
</a>

<a href="#" 
   class="flex items-center px-4 py-3 rounded-lg 
          {{ request()->routeIs('admin.factures') ? 'bg-blue-100 text-blue-600 font-semibold' : 'text-gray-700 hover:bg-gray-100' }}">
   <iconify-icon icon="mdi:file-document" class="mr-3 text-lg"></iconify-icon>
   Factures
</a>

      </nav>
    </aside>

    <!-- Main Content -->
    <div class="flex-1 flex flex-col">
    
    

      <!-- Header -->
      <header class="bg-white shadow px-6 py-4 flex items-center justify-between">
      <h1 class="text-xl font-semibold text-gray-800 flex items-center space-x-2">
       <span class="iconify text-blue-600 text-2xl" data-icon="mdi:hand-wave-outline"></span>
       <span>Welcome Back 
          <span class="ml-1 text-blue-600 font-bold">{{ Auth::user()->name }}</span> !!
       </span>
      </h1>


        <!-- Profile -->
        <div class="relative group">
          <button class="flex items-center space-x-3 focus:outline-none">
            <img src="{{ asset('storage/'.Auth::user()->image)}}" alt="avatar" class="w-10 h-10 rounded-full">
            <div class="text-left">
              <p class="text-sm font-semibold text-gray-800">{{ Auth::user()->name}}</p>
              <p class="text-xs text-gray-500">Administrateur</p>
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
      </header>

      <!-- here where to add the main part of the page -->
       
      @include('layouts.flashbag')
         {{$slot}}

         








    </body>
</html>
