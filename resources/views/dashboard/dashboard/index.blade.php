 @extends('layout.app')

 @section('content')
     <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

     <div class="p-6">

         {{-- Card total mobil --}}
         <div class="mb-6">
             <div class="mt-4 p-4 bg-blue-600 text-white rounded-lg shadow">
                 <h3 class="text-lg">Total Mobil Tersedia</h3>
                 <h1 class="text-3xl font-bold">{{ $carCount }}</h1>
             </div>
         </div>

         <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
             <div class="row my-3">
                 <div class="col-md-6">
                     {{-- Distribusi Tipe Mobil --}}
                     <div class="p-4 bg-white rounded-lg shadow">
                         <h3 class="mb-4 font-semibold">Distribusi Tipe Mobil</h3>
                         <canvas id="typeChart"></canvas>
                     </div>
                 </div>
                 <div class="col-md-6">
                     {{-- Distribusi Fuel Type --}}
                     <div class="p-4 bg-white rounded-lg shadow">
                         <h3 class="mb-4 font-semibold">Distribusi Bahan Bakar</h3>
                         <canvas id="fuelChart"></canvas>
                     </div>
                 </div>
             </div>


             {{-- Rata-rata Statistik --}}
             <div class="p-4 bg-white rounded-lg shadow col-span-1 md:col-span-2 my-3">
                 <h3 class="mb-4 font-semibold">Rata-rata Atribut Mobil</h3>
                 <canvas id="avgStatsChart"></canvas>
             </div>

             {{-- Tren Mobil per Tahun --}}
             <div class="p-4 bg-white rounded-lg shadow col-span-1 md:col-span-2 my-3">
                 <h3 class="mb-4 font-semibold">Jumlah Mobil per Tahun Rilis</h3>
                 <canvas id="carsPerYearChart"></canvas>
             </div>
         </div>
     </div>
 @endsection

 @push('scripts')
     <script>
         // Chart Distribusi Tipe Mobil
         new Chart(document.getElementById('typeChart'), {
             type: 'pie',
             data: {
                 labels: {!! json_encode($typeDistribution->keys()) !!},
                 datasets: [{
                     data: {!! json_encode($typeDistribution->values()) !!},
                     backgroundColor: ['#3b82f6', '#10b981', '#f59e0b', '#ef4444', '#8b5cf6']
                 }]
             }
         });

         // Chart Distribusi Fuel Type
         new Chart(document.getElementById('fuelChart'), {
             type: 'doughnut',
             data: {
                 labels: {!! json_encode($fuelDistribution->keys()) !!},
                 datasets: [{
                     data: {!! json_encode($fuelDistribution->values()) !!},
                     backgroundColor: ['#f59e0b', '#10b981', '#3b82f6', '#ef4444']
                 }]
             }
         });

         // Chart Rata-rata Atribut
         new Chart(document.getElementById('avgStatsChart'), {
             type: 'bar',
             data: {
                 labels: Object.keys(@json($averageStats)),
                 datasets: [{
                     label: 'Rata-rata',
                     data: Object.values(@json($averageStats)),
                     backgroundColor: '#3b82f6'
                 }]
             },
             options: {
                 scales: {
                     y: {
                         beginAtZero: true
                     }
                 }
             }
         });

         // Chart Mobil per Tahun Rilis
         new Chart(document.getElementById('carsPerYearChart'), {
             type: 'line',
             data: {
                 labels: {!! json_encode($carsPerYear->keys()) !!},
                 datasets: [{
                     label: 'Jumlah Mobil',
                     data: {!! json_encode($carsPerYear->values()) !!},
                     fill: false,
                     borderColor: '#10b981',
                     tension: 0.3
                 }]
             }
         });
     </script>
 @endpush
