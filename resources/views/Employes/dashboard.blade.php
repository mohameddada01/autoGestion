<x-Employes-master>
<main class="p-8">
    <h2 class="text-2xl font-bold mb-4">👋 Welcome Back, {{ Auth::user()->name }} !</h2>

    <h3 class="text-xl font-semibold mb-6">Today's Repairs : </h3>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
      <!-- Card 1 -->
      <div class="bg-white p-6 rounded-xl shadow-md relative">
        <span class="absolute top-4 right-4 text-xs bg-yellow-100 text-yellow-600 font-medium px-3 py-1 rounded-full">PENDING</span>
        <h4 class="text-lg font-semibold">Toyota Camry (2020)</h4>
        <p class="text-sm text-gray-500">ABC-123</p>
        <div class="flex items-center mt-2 text-gray-700">
          <iconify-icon icon="mdi:account-outline" class="mr-2 text-base"></iconify-icon>
          <span>John Smith</span>
        </div>
        <p class="mt-2">Engine Repair</p>
        <div class="mt-4 text-right">
          <button class="bg-blue-600 hover:bg-blue-700 text-white text-sm px-4 py-2 rounded-lg flex items-center space-x-1">
            <iconify-icon icon="mdi:play" class="text-white text-sm"></iconify-icon>
            <span><a href="{{ route('employe.task',1)}}">Start Repair</a></span>
          </button>
        </div>
      </div>

      <!-- Card 2 -->
       @foreach($repairs as $repair)
      <div class="bg-white p-6 rounded-xl shadow-md relative">
      @if ($repair->status === 'Not Started')
              <span class="absolute top-4 right-4 text-xs bg-gray-100 text-gray-600 font-medium px-3 py-1 rounded-full">{{ $repair->status }}</span>
            @elseif ($repair->status === 'In Progress') <span class="absolute top-4 right-4 text-xs bg-yellow-100 text-yellow-600 font-medium px-3 py-1 rounded-full "> {{ $repair->status }} </span>
            @else <span class="absolute top-4 right-4 text-xs bg-green-100 text-green-600 font-medium px-3 py-1 rounded-full">{{ $repair->status }} </span>
            @endif
       
        <h4 class="text-lg font-semibold">{{ $repair->brand}} ({{$repair->model}})</h4>
        <p class="text-sm text-gray-500">{{ $repair->status_code}}</p>
        <div class="flex items-center mt-2 text-gray-700">
          <iconify-icon icon="mdi:account-outline" class="mr-2 text-base"></iconify-icon>
          <span>{{ $repair->client_name}}</span>
        </div>
        <p class="mt-2">{{ $repair->description}}</p>
        <div class="mt-4 text-right">
        @if ($repair->status === 'Not Started')
        <button class="bg-blue-600 hover:bg-blue-700 text-white text-sm px-4 py-2 rounded-lg flex items-center space-x-1">
           <iconify-icon icon="mdi:play" class="text-white text-sm"></iconify-icon>
           <span><a href="{{ route('employe.task',$repair->id)}}">Start Repair</a></span>
        </button>
        @else
        <button class="bg-yellow-600 hover:bg-yellow-700 text-white text-sm px-4 py-2 rounded-lg flex items-center space-x-1">
          <iconify-icon icon="mdi:refresh" class="text-white text-sm"></iconify-icon>
          <span> <a href="{{ route('employe.task',$repair->id)}}">Continue Repair</a></span>
        </button>
        @endif

        </div>
      </div>
      @endforeach
    </div>
  </main>




</x-Employes-master>