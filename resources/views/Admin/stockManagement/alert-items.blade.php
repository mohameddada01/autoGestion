<x-Admin-master>

<div class="bg-gray-50 p-6">
  <div class="flex justify-between items-center mb-6">
    <h2 class="text-xl font-semibold text-gray-800 flex items-center gap-2">
      <span class="iconify text-yellow-500" data-icon="mdi:alert-circle-outline"></span>
      Low Stock Items
    </h2>
    <button class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-lg flex items-center text-sm">
      <span class="iconify mr-1" data-icon="lucide:download"></span>
      Export
    </button>
  </div>

  <div class="overflow-x-auto bg-white">
    <table class="w-full table-auto text-sm text-left">
      <thead class="rounded-lg shadow-sm">
        <tr>
          <th class="px-4 py-2">PART NAME</th>
          <th class="px-4 py-2">CATEGORY</th>
          <th class="px-4 py-2">STOCK LEVEL</th>
          <th class="px-4 py-2">STATUS</th>
          <th class="px-4 py-2">ACTIONS</th>
        </tr>
      </thead>
      <tbody class="divide-y">
        @foreach($stocks_alert as $stock)
        <tr>
          <td class="px-4 py-3 font-medium text-gray-800">{{ $stock->part_name }}</td>
          <td class="px-4 py-3">
            <span class="bg-gray-200 text-gray-700 px-2 py-1 rounded">{{ $stock->name }}</span>
          </td>
          <td class="px-4 py-3">
            <div class="flex flex-col gap-1">
              <div class="flex justify-between text-xs">
                <span>{{ $stock->quantity }} units</span>
                <span>{{ $stock->quantity * 10 }}%</span>
              </div>
              <div class="w-full bg-red-100 rounded-full h-2">
                <div class="bg-red-500 h-2 rounded-full" style="width: {{ $stock->quantity * 10 }}%"></div>
              </div>
            </div>
          </td>
          <td class="px-4 py-3">
            <span class="bg-red-100 text-red-600 px-2 py-1 rounded text-xs">low</span>
          </td>
          <td class="px-4 py-3 flex space-x-2">
            <button class="bg-blue-100 text-blue-700 px-3 py-1 rounded text-xs flex items-center gap-1">
              <span class="iconify" data-icon="lucide:shopping-cart"></span> Order
            </button>
            <button 
              class="bg-green-100 text-green-700 px-3 py-1 rounded text-xs flex items-center gap-1 add-to-stock-btn" 
              data-id="{{ $stock->id }}"
              data-part="{{ $stock->part_name }}">
              <span class="iconify" data-icon="lucide:plus-circle"></span> Add to Stock
            </button>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>

<!-- Overlay -->
<div id="overlay" class="fixed inset-0 bg-black opacity-50 hidden"></div>

<!-- Prompt for adding stock -->
<div id="stockPrompt" class="fixed inset-0 flex items-center justify-center hidden">
  <div class="bg-white p-6 rounded shadow-lg w-96">
    <h3 class="text-lg font-semibold mb-4" id="promptTitle">Add New Stock Quantity</h3>
    <form id="stockForm" method="POST">
      @csrf
      @method('PUT')
      <input id="newStockCount" name="quantity" type="number" placeholder="Enter quantity" class="border p-2 rounded mb-4 w-full" required />
      <div class="flex justify-end space-x-2">
        <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded">Add</button>
        <button type="button" id="cancelStock" class="bg-red-500 text-white px-4 py-2 rounded">Cancel</button>
      </div>
    </form>
  </div>
</div>

<script>
  const overlay = document.getElementById('overlay');
  const stockPrompt = document.getElementById('stockPrompt');
  const cancelStock = document.getElementById('cancelStock');
  const stockForm = document.getElementById('stockForm');
  const promptTitle = document.getElementById('promptTitle');
  
  // Target all "Add to Stock" buttons
  document.querySelectorAll('.add-to-stock-btn').forEach(button => {
    button.addEventListener('click', function() {
      const stockId = this.getAttribute('data-id');
      const partName = this.getAttribute('data-part');

      // Set the form action dynamically
      stockForm.action = `/admin/update_Stock_alert/${stockId}`;

      // Optional: change the title with the part name
      promptTitle.textContent = `Add Quantity for "${partName}"`;

      // Show overlay and prompt
      overlay.classList.remove('hidden');
      stockPrompt.classList.remove('hidden');
    });
  });

  // Close the prompt
  cancelStock.addEventListener('click', () => {
    overlay.classList.add('hidden');
    stockPrompt.classList.add('hidden');
  });
</script>

</x-Admin-master>
