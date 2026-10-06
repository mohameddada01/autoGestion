<x-Admin-master title="Stock Management">

  <!-- Header -->
  <div class="flex justify-between items-center my-6 mx-6">
    <h1 class="text-2xl font-semibold"></h1>
    <a href="{{route('admin.create_item')}}" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg text-sm">
      <iconify-icon icon="mdi:plus" class="mr-1"></iconify-icon>
      Add New Item
    </a>
  </div>

  <!-- Overview & Alerts -->
  <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-6 mx-6">
    <!-- Stock Overview -->
    <div class="bg-white p-4 rounded-xl shadow-sm border">
      <div class="flex items-center mb-3 text-sm text-gray-500">
        <iconify-icon icon="mdi:chart-box-outline" class="text-xl mr-2 text-gray-600"></iconify-icon>
        <span>Stock Overview</span>
      </div>
      <div class="grid grid-cols-3 gap-4 text-center">
        <div>
          <p class="text-2xl font-bold">{{ $item_count}}</p>
          <p class="text-sm text-gray-500">Total Items</p>
        </div>
        <div>
          <p class="text-2xl font-bold">{{$totalStockValue}} MAD</p>
          <p class="text-sm text-gray-500">Total Value</p>
        </div>
        <div>
          <p class="text-2xl font-bold">{{ $category_count }}</p>
          <p class="text-sm text-gray-500">Categories</p>
        </div>
      </div>
    </div>

    <!-- Low Stock Alert -->
    <div class=" p-4 rounded-xl shadow-sm border {{ $stocks_alert->count() > 0 ? 'bg-white' : 'bg-green-100' }}">
  <div class="flex items-center mb-3 text-sm font-medium
      {{ $stocks_alert->count() > 0 ? 'text-yellow-600' : 'text-green-700' }}">
    <iconify-icon icon="{{ $stocks_alert->count() > 0 ? 'mdi:alert-circle-outline' : 'mdi:check-circle-outline' }}"
      class="text-xl mr-2"></iconify-icon>
    <span>{{ $stocks_alert->count() > 0 ? 'Low Stock Alerts' : 'Stock is Good' }}</span>
  </div>

  @if ($stocks_alert->count() > 0)
    <div class="bg-red-100 p-4 rounded-lg flex justify-between items-center">
      <div>
        <p class="font-semibold">{{ $stocks_alert[0]->part_name }}</p>
        <p class="text-sm text-gray-500">{{ $stocks_alert[0]->name}}</p>
      </div>
      <div class="flex items-center space-x-4">
        <span class="text-red-600 font-bold"> {{$stocks_alert[0]->quantity }} left</span>
        <a href="{{route('admin.alert_item')}}" class="bg-indigo-200 hover:bg-indigo-300 text-sm text-indigo-700 px-3 py-1 rounded-lg">See <b>{{ $stocks_alert->count() - 1}}</b> More !!</a>
      </div>
    </div>
  @else
    <div class="bg-green-100 p-4 rounded-lg flex justify-between items-center">
      <div class="text-green-700 font-semibold">
        All stock levels are good! ✅
      </div>
    </div>
  @endif
</div>

   
  </div>

  <!-- Search & Filter -->
  <div class="flex flex-col md:flex-row items-center justify-between bg-white p-4 rounded-xl shadow-sm border mb-4 mx-6">
    <div class="w-full md:w-2/3 mb-3 md:mb-0">
      <input type="text" placeholder="Search parts..." class="w-full border rounded-lg px-4 py-2 focus:outline-none focus:ring focus:ring-blue-200">
    </div>
    <button class="ml-0 md:ml-4 bg-gray-200 hover:bg-gray-300 px-4 py-2 rounded-lg flex items-center">
      <iconify-icon icon="mdi:filter-variant" class="text-lg mr-1"></iconify-icon> Filter
    </button>
  </div>

  <!-- Parts Table -->
  <div class="bg-white p-4 rounded-xl shadow-sm border overflow-x-auto mx-6">
    <table class="min-w-full text-sm">
      <thead>
        <tr class="text-left text-gray-600 border-b">
          <th class="py-2">Part Name</th>
          <th class="py-2">Category</th>
          <th class="py-2">Quantity</th>
          <th class="py-2">Price</th>
          <th class="py-2">Status</th>
          <th class="py-2">Actions</th>
        </tr>
      </thead>
      <tbody>
        @foreach($data as $d)
        <!-- Row 1 -->
        <tr class="border-b hover:bg-gray-50">
          <td class="py-2">{{ $d->part_name}}</td>
          <td>Brakes {{ $d->name}}</td>
          <td>{{$d->quantity}}</td>
          <td>{{$d->price}} MAD</td>
         @if($d->quantity > 70 )  <td class="text-green-600">In Stock</td> @elseif($d->quantity >=10 and $d->quantity < 70  ) <td class="text-yellow-600">Medium Stock</td> @else <td class="text-red-600">Low Stock</td> @endif
          
         <td class="flex items-center space-x-2">
          <a href="{{ route('admin.edit_item',$d->id) }}">
            <iconify-icon icon="mdi:pencil-outline" class="text-2xl text-gray-600 hover:text-blue-500 cursor-pointer"></iconify-icon>
          </a>

          <form action="{{ route('admin.destroy_item', $d->id) }}" method="POST" class="inline-flex items-center">
               @csrf
               @method("DELETE")
            <button type="submit" class="flex items-center justify-center">
               <iconify-icon icon="mdi:delete-outline" class="text-2xl text-red-500 hover:text-red-600 cursor-pointer"></iconify-icon>
            </button>
           </form>
        </td>



        </tr>
         
        @endforeach
        <!-- Row 2 -->
  
      </tbody>
    </table>
    </div>
    <div class="mt-6 mx-2 justify-center">
      <div class=" mx-4 items-center space-x-6 bg-white px-6 py-2 rounded-lg shadow border border-gray-200">
        {{$data->links()}}
      </div>
  
   

  </div>
 




</x-Admin-master>