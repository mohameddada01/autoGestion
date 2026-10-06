<x-Employes-master>
  <!-- Form Container -->
  <div class="max-w-4xl mx-auto mt-10 bg-white p-8 shadow-lg rounded-lg">
    <h2 class="text-2xl font-bold text-gray-800 mb-6">Créer une Facture</h2>

    <form id="invoice-form" action="{{ route('employe.store_facture') }}" method="POST">
      @csrf
    <input type="hidden" name="repair_id" value="{{ $repairs }}">
      <!-- Template for Part Row -->
      <template id="part-row-template">
        <div class="grid grid-cols-1 sm:grid-cols-5 gap-4 items-end part-row bg-gray-50 p-4 rounded-lg shadow-md">
          <div>
            <label class="block mb-1 font-medium text-gray-700">Pièce</label>
            <div class="relative">
              <select class="w-full border-2 border-gray-300 rounded-lg p-2 shadow-sm focus:ring-2 focus:ring-blue-500 focus:border-transparent part-select" data-name-prefix="part">
                <option value="" data-price="0">Sélectionnez une pièce</option>
                @foreach($stocks as $stock)
                  <option value="{{ $stock->id }}" data-price="{{ $stock->price }}">{{ $stock->part_name }}</option>
                @endforeach
              </select>
              <iconify-icon icon="mdi:car-brake" class="absolute top-1/2 right-3 transform -translate-y-1/2 text-gray-500"></iconify-icon>
            </div>
          </div>
          <div>
            <label class="block mb-1 font-medium text-gray-700">Prix unitaire (€)</label>
            <div class="relative">
              <input type="text" class="w-full border-2 border-gray-300 rounded-lg p-2 shadow-sm focus:ring-2 focus:ring-blue-500 focus:border-transparent price-input" readonly value="0.00" data-name-prefix="price"/>
              <iconify-icon icon="mdi:currency-eur" class="absolute top-1/2 right-3 transform -translate-y-1/2 text-gray-500"></iconify-icon>
            </div>
          </div>
          <div>
            <label class="block mb-1 font-medium text-gray-700">Quantité</label>
            <div class="relative">
              <input type="number" class="w-full border-2 border-gray-300 rounded-lg p-2 shadow-sm focus:ring-2 focus:ring-blue-700 focus:border-transparent quantity-input" min="1" value="1" data-name-prefix="quantity"/>
              <iconify-icon icon="mdi:numeric" class="absolute top-1/2 right-3 transform -translate-y-1/2 text-gray-500"></iconify-icon>
            </div>
          </div>
          <div>
            <label class="block mb-1 font-medium text-gray-700">Total (€)</label>
            <div class="relative">
              <input type="text" class="w-full border-2 border-gray-300 rounded-lg p-2 shadow-sm focus:border-blue-600 focus:ring-2 focus:ring-blue-500 focus:border-transparent total-input" readonly value="0.00" data-name-prefix="total"/>
              <iconify-icon icon="mdi:currency-eur" class="absolute top-1/2 right-3 transform -translate-y-1/2 text-gray-500"></iconify-icon>
            </div>
          </div>
          <div class="text-right">
            <button type="button" class="delete-btn text-red-500 hover:text-red-700">
              <iconify-icon icon="mdi:trash-can-outline" class="text-xl"></iconify-icon>
            </button>
          </div>
        </div>
      </template>

      <!-- Parts Section -->
      <div id="parts-section" class="space-y-4"></div>

      <!-- Add Part Button -->
      <div>
        <button type="button" id="add-part-btn" class="bg-blue-600 hover:bg-blue-700 text-white font-semibold px-4 py-2 rounded-md shadow inline-flex items-center">
          <iconify-icon icon="mdi:plus" class="mr-2"></iconify-icon> Ajouter une autre pièce
        </button>
      </div>

      <!-- Service Price & Invoice Total -->
      <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
        <div>
          <label class="block mb-1 font-medium text-gray-700">Prix Service (€)</label>
          <div class="relative">
            <input type="number" id="service-price" name="service_price" class="w-full border-2 border-gray-300 rounded-lg p-2 shadow-sm focus:ring-2 focus:ring-blue-2 focus:border-transparent" min="0" value="0"/>
            <iconify-icon icon="mdi:cash" class="absolute top-1/2 right-3 transform -translate-y-1/2 text-gray-500"></iconify-icon>
          </div>
        </div>
        <div>
          <label class="block mb-1 font-medium text-gray-700">Total Facture (€)</label>
          <input type="text" id="invoice-total" name="invoice_total" class="w-full border-2 border-gray-300 rounded-lg p-2 shadow-sm focus:ring-2 focus:ring-blue-500 focus:border-transparent" readonly value="0.00"/>
        </div>
      </div>

      <!-- Submit Button -->
      <div class="text-right">
        <button type="submit" class="bg-green-600 hover:bg-green-700 text-white font-semibold px-6 py-2 rounded-md shadow">
          <iconify-icon icon="mdi:check-circle" class="mr-2"></iconify-icon> Enregistrer la Facture
        </button>
      </div>
    </form>
  </div>

  <script>
    let partCount = 0;
    const partsSection = document.getElementById('parts-section');
    const template = document.getElementById('part-row-template').content;

    function updateRowTotal(row) {
      const price = parseFloat(row.querySelector('.price-input').value) || 0;
      const qty = parseInt(row.querySelector('.quantity-input').value) || 0;
      row.querySelector('.total-input').value = (price * qty).toFixed(2);
    }

    function updateInvoiceTotal() {
      let sum = 0;
      partsSection.querySelectorAll('.part-row').forEach(r => {
        sum += parseFloat(r.querySelector('.total-input').value) || 0;
      });
      const service = parseFloat(document.getElementById('service-price').value) || 0;
      document.getElementById('invoice-total').value = (sum + service).toFixed(2);
    }

    function bindRowEvents(row) {
      const sel = row.querySelector('.part-select');
      const priceInp = row.querySelector('.price-input');
      const qtyInp = row.querySelector('.quantity-input');
      const delBtn = row.querySelector('.delete-btn');

      sel.addEventListener('change', () => {
        const price = parseFloat(sel.selectedOptions[0].dataset.price) || 0;
        priceInp.value = price.toFixed(2);
        updateRowTotal(row);
        updateInvoiceTotal();
      });
      qtyInp.addEventListener('input', () => { updateRowTotal(row); updateInvoiceTotal(); });
      delBtn.addEventListener('click', () => { 
        row.remove(); 
        updateInvoiceTotal(); 
      });
    }

    document.getElementById('add-part-btn').addEventListener('click', () => {
      partCount++;
      const clone = document.importNode(template, true);
      // Rename inputs
      ['part','price','quantity','total'].forEach(field => {
        const inp = clone.querySelector(`[data-name-prefix="${field}"]`);
        inp.name = `${field}${partCount}`;
      });
      partsSection.appendChild(clone);
      const newRow = partsSection.lastElementChild;
      bindRowEvents(newRow);
      updateInvoiceTotal();
    });

    

    // Initialize with one row
    document.getElementById('add-part-btn').click();
  </script>
</x-Employes-master>
