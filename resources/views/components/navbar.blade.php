<nav class="flex space-x-4">
    <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
    <x-nav-link href="/" :active="request()->is('/')">Inicio</x-nav-link>
    <x-nav-link href="/productos" :active="request()->is('/productos')">Productos</x-nav-link>
    <x-nav-link href="/ubicacion" :active="request()->is('/ubicacion')" >Ubicacion</x-nav-link>
    <x-nav-link href="/nosotros" :active="request()->is('/nosotros')" >Calendar</x-nav-link>
  </nav>