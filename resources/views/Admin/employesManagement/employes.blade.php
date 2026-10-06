<x-Admin-master title="Employes Management">

  <div class="max-w-7xl mx-6 py-8">
    <div class="flex justify-between items-center mb-6">
      <div>
        <h1 class="text-2xl font-bold">Our Mechanics</h1>
        <span class="text-gray-500"><b class="text-black">{{$total}}</b> employees</span>
      </div>
      <!-- Add Employee Button -->
      <a href="{{ route('admin.create_employe') }}"
         class="inline-flex items-center gap-2 bg-blue-600 hover:bg-blue-700 text-white text-sm font-medium px-4 py-2 rounded-xl shadow transition">
        <span class="iconify" data-icon="mdi:plus-circle-outline"></span>
        Add Employee
      </a>
    </div>

    <div class="grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
   
     <!-- LIST OF EMLOYEES  -->
    @foreach($employes as $employe)

      <a href="{{route('admin.edit_employe',$employe->id)}}" class="block bg-white shadow-md rounded-2xl p-4 border hover:shadow-lg transition">
        <div class="flex items-center gap-4">
          <img src="{{ asset('storage/' . $employe->image)}}" class="w-14 h-14 rounded-full object-cover" />
          <div>
            <h2 class="font-semibold text-lg">{{$employe->name}}</h2>
            <p class="text-sm text-gray-500">@if($employe->status == 1) <span class="text-green-700">Active</span> @else  <span class="text-red-700">Off</span>@endif</p>
          </div>
        </div>
        <div class="mt-2 text-sm text-gray-600 flex gap-2 items-center">
          <span class="iconify" data-icon="mdi:wrench-clock"></span>
          {{$employe->position}}
        </div>
        <div class="flex justify-between mt-2 text-sm text-gray-600">
          <div class="flex items-center gap-1">
            <span class="iconify text-green-500" data-icon="mdi:check-circle-outline"></span>
            {{$employe->repairs_count}} Jobs
          </div>

          <form action="{{ route('admin.destroy_employe',$employe->id)}}" method="POST" >
              @method('DELETE')
              @csrf
            <button type="submit" class="flex items-center gap-1 text-red-600 hover:text-red-800 text-sm font-medium" onclick="event.stopPropagation()">
               <span class="iconify" data-icon="mdi:delete-outline"></span>
              Delete
            </button>
          </form>
          
        </div>
      </a>

      @endforeach

     
    
  </div>
  <div class="mt-6  justify-center">
    <div class=" items-center space-x-6 bg-white px-6 py-2 rounded-lg shadow border border-gray-200">
      {{$employes->links()}}
    </div>
  </div>

 

</x-Admin-master>
