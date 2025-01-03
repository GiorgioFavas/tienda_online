<nav class="flex space-x-4">
    <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
    <nav-link href="/" :active="request()->is('/')">Inicio</nav-link>
    <nav-link href="/productos" :active="request()->is('/productos')">Productos</nav-link>
    <nav-link href="/ubicacion" :active="request()->is('/ubicacion')" >Ubicacion</nav-link>
    <nav-link href="/nosotros" :active="request()->is('/nosotros')" >Calendar</nav-link>
  </nav>