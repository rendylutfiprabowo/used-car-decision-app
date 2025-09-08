  <div class="app-menu"
     style="height: 100%; min-height: 100vh !important;">

     <!-- Brand Logo -->
     <div class="logo-box text-center" style="height: 100pt">
     <!-- Brand Logo Light -->
     <a href="/" class="logo-light">
         <h2 class="mb-2">CDA</h2>
         <div class="d-flex justify-content-center">
             <img src="{{ asset('assets/images/logo-light.png') }}" alt="logo" class="logo-lg">
             <img src="{{ asset('assets/images/logo-sm.png') }}" alt="small logo" class="logo-sm">
         </div>
     </a>

     <!-- Brand Logo Dark -->
     <a href="/" class="logo-dark">
         <h2 class="mb-2">CDA</h2>
         <div class="d-flex justify-content-center">
             <img src="{{ asset('assets/images/logo-dark.png') }}" alt="dark logo" class="logo-lg">
             <img src="{{ asset('assets/images/logo-sm.png') }}" alt="small logo" class="logo-sm">
         </div>
     </a>
 </div>

 <!-- menu-left -->
 <!--- Menu -->
 <ul class="menu">
     <li class="menu-title">Dashboard</li>
     <li class="menu-item">
         <a href="{{ url('dashboard') }}" class="menu-link">
             <span class="menu-icon"><i data-feather="monitor"></i></span>
             <span class="menu-text"> Dashboard </span>
     </li>
     </a>

     <li class="menu-title">Master Data</li>
     <li class="menu-item">
         <a href="{{ url('dashboard/cars') }}" class="menu-link">
             <span class="menu-icon"><i data-feather="truck"></i></span>
             <span class="menu-text"> Mobil </span>
         </a>
     </li>
 </ul>
 <!--- End Menu -->

 </div>
