<x-Admin-master title="Appointment Management">
   
<div class="max-w-7xl mx-6 mt-6">
    <div class="mb-6">
      <h1 class="text-3xl font-bold">Appointment Management</h1>
      <p class="text-gray-500">Manage and track service appointments</p>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 mb-6">
      <div class="bg-white shadow-md rounded-xl p-4 flex items-center space-x-4">
        <div class="bg-blue-100 text-blue-600 p-3 rounded-full">
          <iconify-icon icon="mdi:calendar-today"></iconify-icon>
        </div>
        <div>
          <p class="text-sm text-gray-500">Today's Appointments</p>
          <p class="text-xl font-semibold">8</p>
        </div>
      </div>

      <div class="bg-white shadow-md rounded-xl p-4 flex items-center space-x-4">
        <div class="bg-purple-100 text-purple-600 p-3 rounded-full">
          <iconify-icon icon="mdi:calendar-week"></iconify-icon>
        </div>
        <div>
          <p class="text-sm text-gray-500">This Week</p>
          <p class="text-xl font-semibold">42</p>
        </div>
      </div>

      <div class="bg-white shadow-md rounded-xl p-4 flex items-center space-x-4">
        <div class="bg-green-100 text-green-600 p-3 rounded-full">
          <iconify-icon icon="mdi:check-circle-outline"></iconify-icon>
        </div>
        <div>
          <p class="text-sm text-gray-500">Confirmed</p>
          <p class="text-xl font-semibold">28</p>
        </div>
      </div>

      <div class="bg-white shadow-md rounded-xl p-4 flex items-center space-x-4">
        <div class="bg-yellow-100 text-yellow-600 p-3 rounded-full">
          <iconify-icon icon="mdi:clock-outline"></iconify-icon>
        </div>
        <div>
          <p class="text-sm text-gray-500">Pending</p>
          <p class="text-xl font-semibold">14</p>
        </div>
      </div>
    </div>

    <div class="flex flex-wrap justify-between items-center mb-4 gap-2">
      <input type="text" placeholder="Search customer or vehicle..." class="flex-1 p-2 rounded-lg border border-gray-300">
      <a  href="{{ route('admin.create_appointment')}}" class="bg-blue-600 text-white px-4 py-2 rounded-lg font-medium ml-auto">
        + New Appointment
      </a>
    </div>

    <div class="table-wrapper bg-white shadow-md rounded-xl">
      <table class="w-full text-left min-w-max">
        <thead>
          <tr class="bg-gray-100 text-gray-600 uppercase text-sm">
            <th class="p-4">Customer & Vehicle</th>
            <th class="p-4">Service</th>
            <th class="p-4">Mechanic</th>
            <th class="p-4">Start Date</th>
            <th class="p-4">Status</th>
            <th class="p-4">Actions</th>
          </tr>
        </thead>
        <tbody class="text-gray-700">
          @foreach($repairs as $repair)
          <tr>
            <td class="p-4">
              <p class="font-semibold">{{ $repair->client_name }}</p>
              <p class="text-sm text-gray-500"> {{ $repair->model }} {{ $repair->brand }} • {{ $repair->status_code}}</p>
            </td>
            <td class="p-4">{{ $repair->description}}</td>
            <td class="p-4 flex items-center gap-2">
              <img src="{{ asset('storage/' . $repair->user->image)}}" alt="Robert Wilson" class="w-8 h-8 rounded-full">
              {{ $repair->user->name }}
            </td>
            <td class="p-4">{{ $repair->started_at}}</td>
            <td class="p-4">
            @if ($repair->status === 'Not Started')
              <span class="bg-gray-100 text-gray-700 text-xs px-3 py-1 rounded-full">{{ $repair->status }}</span>
            @elseif ($repair->status === 'in_progress') <span class="bg-yellow-100 text-yellow-700 text-xs px-3 py-1 rounded-full"> {{ $repair->status }} </span>
            @else<span class="bg-green-100 text-green-700 text-xs px-3 py-1 rounded-full">{{ $repair->status }} </span>@endif

            </td>
            <td class="p-4 space-x-2 text-xl">
              <button class="text-blue-500"><iconify-icon icon="mdi:eye-outline"></iconify-icon></button>
              <button class="text-blue-500"><iconify-icon icon="mdi:pencil-outline"></iconify-icon></button>
              @if ($repair->facture === null)
              <button class="text-red-500">
                 <iconify-icon icon="mdi:file-cancel-outline"></iconify-icon> <!-- Icon indicating no facture -->
              </button>
              @else
              <button class="text-green-500">
                 <a href="{{ route('factures.pdf',$repair->id)}}"><iconify-icon icon="mdi:file-document-outline"></iconify-icon></a> <!-- Icon indicating facture exists -->
               </button>
              @endif

            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
      {{ $repairs->links() }}
    </div>
  </div>
    


</x-Admin-master>