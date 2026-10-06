<x-Employes-master>
  
      <!-- Repair Details Section -->
      <main class="p-6">
  <div class="max-w-4xl mx-auto p-6 mt-4 bg-white rounded-lg shadow">
    <h2 class="text-xl font-bold text-gray-800 mb-4">
      <iconify-icon icon="mdi:car-wrench" class="inline-block text-blue-600 mr-2"></iconify-icon>
      Informations de Réparation
    </h2>

    <!-- Informations de la réparation -->
    <div class="space-y-4">
      <div class="flex justify-between">
        <p>
          <iconify-icon icon="mdi:account" class="inline-block text-gray-500 mr-1"></iconify-icon>
          <span class="font-semibold text-gray-700">Nom du client:</span> {{ $repairs->client_name }}
        </p>
        <p>
          <iconify-icon icon="mdi:barcode-scan" class="inline-block text-gray-500 mr-1"></iconify-icon>
          <span class="font-semibold text-gray-700">Code de suivi:</span> {{ $repairs->status_code }}
        </p>
      </div>
      <div class="flex justify-between">
        <p>
          <iconify-icon icon="mdi:car" class="inline-block text-gray-500 mr-1"></iconify-icon>
          <span class="font-semibold text-gray-700">Voiture:</span> {{ $repairs->brand }} {{ $repairs->model }}
        </p>
        <p>
          <iconify-icon icon="mdi:license" class="inline-block text-gray-500 mr-1"></iconify-icon>
          <span class="font-semibold text-gray-700">Immatriculation:</span> {{ $repairs->license_plate }}
        </p>
      </div>
      <div class="flex justify-between">
        <p>
          <iconify-icon icon="mdi:calendar-clock" class="inline-block text-gray-500 mr-1"></iconify-icon>
          <span class="font-semibold text-gray-700">Date de dépôt:</span> {{ $repairs->started_at }}
        </p>
        <p>
          <iconify-icon icon="mdi:progress-clock" class="inline-block text-yellow-600 mr-1"></iconify-icon>
          <span class="font-semibold text-gray-700">Statut:</span>
          <span class="text-yellow-600 font-semibold">{{ $repairs->status}}</span>
        </p>
      </div>
      <div>
        <p class="font-semibold text-gray-700 mb-1">
          <iconify-icon icon="mdi:alert-circle" class="inline-block text-red-500 mr-1"></iconify-icon>
          Problème signalé:
        </p>
        <p class="text-gray-600 bg-gray-50 p-3 rounded">
          {{ $repairs->description }}
        </p>
      </div>
      <div>
        <p class="font-semibold text-gray-700 mb-1">
          <iconify-icon icon="mdi:tools" class="inline-block text-green-600 mr-1"></iconify-icon>
          Interventions prévues:
        </p>
        <ul class="list-disc pl-5 text-gray-600 space-y-1">
          <li>Diagnostic moteur</li>
          <li>Remplacement de la courroie</li>
          <li>Vérification des bougies</li>
        </ul>
      </div>
    </div>

    <!-- Bouton terminer la réparation -->
    <div class="mt-6 text-right">
      <a href="{{route('employe.facturation',$repairs->id) }}" class="inline-block bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-700 transition duration-300">
        <iconify-icon icon="mdi:check-circle-outline" class="inline-block text-white mr-1"></iconify-icon>
        Terminer le travail
      </a>
    </div>
  </div>
</main>







</x-Employes-master>