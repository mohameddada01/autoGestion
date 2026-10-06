<x-Admin-master title="Welcome back Mohamed !!">
     <!-- Main -->
     <main class="p-6 space-y-8">

<!-- Stat Cards -->
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
  <div class="relative bg-white shadow rounded-lg p-5">
    <a href="/reparations" class="absolute top-2 right-2 text-sm text-blue-500 hover:underline">Voir plus</a>
    <div class="flex items-center">
      <iconify-icon icon="mdi:tools" class="text-2xl text-blue-500 mr-4"></iconify-icon>
      <div>
        <p class="text-sm text-gray-500">Réparations en cours</p>
        <p class="text-2xl font-bold text-gray-800">12</p>
      </div>
    </div>
  </div>

  <div class="relative bg-white shadow rounded-lg p-5">
    <a href="/rendez-vous" class="absolute top-2 right-2 text-sm text-green-500 hover:underline">Voir plus</a>
    <div class="flex items-center">
      <iconify-icon icon="mdi:calendar-today" class="text-2xl text-green-500 mr-4"></iconify-icon>
      <div>
        <p class="text-sm text-gray-500">Rendez-vous aujourd'hui</p>
        <p class="text-2xl font-bold text-gray-800">8</p>
      </div>
    </div>
  </div>

  <div class="relative bg-white shadow rounded-lg p-5">
    <a href="/stock" class="absolute top-2 right-2 text-sm text-yellow-500 hover:underline">Voir plus</a>
    <div class="flex items-center">
      <iconify-icon icon="mdi:cube" class="text-2xl text-yellow-500 mr-4"></iconify-icon>
      <div>
        <p class="text-sm text-gray-500">Pièces en stock</p>
        <p class="text-2xl font-bold text-gray-800">234</p>
      </div>
    </div>
  </div>

  <div class="relative bg-white shadow rounded-lg p-5">
    <a href="/factures" class="absolute top-2 right-2 text-sm text-pink-500 hover:underline">Voir plus</a>
    <div class="flex items-center">
      <iconify-icon icon="mdi:file-alert" class="text-2xl text-pink-500 mr-4"></iconify-icon>
      <div>
        <p class="text-sm text-gray-500">Factures en attente</p>
        <p class="text-2xl font-bold text-gray-800">5</p>
      </div>
    </div>
  </div>
</div>

<!-- Charts Section -->
<div class="grid grid-cols-1 md:grid-cols-2 gap-6">
  <div class="bg-white shadow rounded-xl p-6">
    <div class="flex justify-between items-center mb-4">
      <h2 class="text-lg font-semibold text-gray-800">Weekly Revenue</h2>
      <span class="text-green-600 text-sm font-medium flex items-center gap-1">
        <iconify-icon icon="mdi:trending-up" class="text-base"></iconify-icon>
        +12.5% from last week
      </span>
    </div>
    <canvas id="revenueChart" class="w-full h-64"></canvas>
  </div>

  <div class="bg-white shadow rounded-xl p-6">
    <div class="flex justify-between items-center mb-4">
      <h2 class="text-lg font-semibold text-gray-800">Service Distribution</h2>
      <select class="bg-gray-100 text-sm rounded px-2 py-1">
        <option>This Week</option>
      </select>
    </div>
    <canvas id="serviceChart" class="w-full h-64"></canvas>
  </div>
</div>

<!-- Recent Activities -->
<div class="bg-white rounded-xl shadow p-6">
  <div class="flex justify-between items-center mb-4">
    <h2 class="text-xl font-semibold text-gray-800">Activités Récentes</h2>
    <a href="#" class="text-blue-600 text-sm flex items-center gap-1 hover:underline">
      Voir tout <iconify-icon icon="mdi:arrow-right"></iconify-icon>
    </a>
  </div>

  <div class="space-y-3">
    <div class="bg-gray-50 rounded-lg p-4 flex justify-between items-center">
      <div class="flex items-start gap-3">
        <iconify-icon icon="mdi:tools" class="text-green-500 text-xl mt-1"></iconify-icon>
        <div>
          <p class="font-medium text-sm text-gray-800">Engine repair completed</p>
          <p class="text-sm text-gray-600">John Doe</p>
          <p class="text-xs text-gray-400">il y a 2 heures</p>
        </div>
      </div>
      <span class="text-sm text-green-600 font-medium">terminé</span>
    </div>

    <div class="bg-gray-50 rounded-lg p-4 flex justify-between items-center">
      <div class="flex items-start gap-3">
        <iconify-icon icon="mdi:oil" class="text-yellow-500 text-xl mt-1"></iconify-icon>
        <div>
          <p class="font-medium text-sm text-gray-800">Oil change service</p>
          <p class="text-sm text-gray-600">Alice Smith</p>
          <p class="text-xs text-gray-400">il y a 3 heures</p>
        </div>
      </div>
      <span class="text-sm text-yellow-600 font-medium">en cours</span>
    </div>

    <div class="bg-gray-50 rounded-lg p-4 flex justify-between items-center">
      <div class="flex items-start gap-3">
        <iconify-icon icon="mdi:magnify" class="text-orange-500 text-xl mt-1"></iconify-icon>
        <div>
          <p class="font-medium text-sm text-gray-800">Vehicle diagnostic</p>
          <p class="text-sm text-gray-600">Bob Johnson</p>
          <p class="text-xs text-gray-400">il y a 5 heures</p>
        </div>
      </div>
      <span class="text-sm text-orange-600 font-medium">en attente</span>
    </div>
  </div>
</div>

</main>
</div>
</div>

<!-- Chart.js Configuration -->
<script>
const revenueChart = new Chart(document.getElementById('revenueChart'), {
  type: 'line',
  data: {
    labels: @json($labels), // ['Mon', 'Tue', ..., 'Sun']
    datasets: [{
      label: 'Revenue',
      data: @json($totals), // [0, 1200, 0, 3400, 0, 0, 800]
      borderColor: '#3B82F6',
      backgroundColor: 'rgba(59, 130, 246, 0.1)',
      fill: true,
      tension: 0.4
    }]
  },
  options: {
    scales: {
      y: {
        beginAtZero: true
      }
    },
    plugins: {
      legend: { display: false }
    }
  }
});


const serviceChart = new Chart(document.getElementById('serviceChart'), {
type: 'bar',
data: {
labels: ['Maintenance', 'Repairs', 'Tire Service', 'Other'],
datasets: [{
  label: 'Services',
  data: [36, 25, 20, 6],
  backgroundColor: '#3B82F6'
}]
},
options: {
scales: {
  y: {
    beginAtZero: true
  }
},
plugins: {
  legend: { display: false }
}
}
});
</script>





</x-Admin-master>