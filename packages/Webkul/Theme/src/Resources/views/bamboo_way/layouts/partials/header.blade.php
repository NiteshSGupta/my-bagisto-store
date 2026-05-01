<!-- header start -->
<header class="main-header">
  <nav class="bg-white shadow px-2">
    <div class="container mx-auto flex items-center justify-between py-4">
      
      <!-- Logo -->
      <a href="{{ route('shop.home.index') }}" class="flex items-center">
        <img src="{{ asset('themes/shop/frontend_assets/img/header-logo.png') }}" alt="Logo" class="w-16">
      </a>       

      <!-- Menu -->
      <div id="menu" class="hidden lg:flex lg:items-center lg:w-[90%] lg:justify-evenly me-5">
        <a href="new-arrivals.html" class="text-green font-medium hover:text-darkgreen text-[18px] md:text-[20px] xl:text-[23px] px-3 py-2 lg:border-b-0 border-b border-darkcream hover:underline">New Arrivals</a>

        <!-- Shop Dropdown -->
        <div class="relative group">
          <button class="dropdown-btn flex items-center text-green font-medium hover:text-darkgreen text-[18px] md:text-[20px] xl:text-[23px] px-3 py-2 lg:border-b-0 border-b border-darkcream hover:underline w-full justify-between">
            Shop <i class="fa-solid fa-chevron-down ml-1 text-xs"></i>
          </button>
          <ul class="dropdown-menu lg:absolute lg:left-0 lg:w-40 bg-white shadow-md rounded hidden lg:group-hover:block py-2 z-10">
            <li><a href="shop-Interior.html" class="text-green xl:text-[18px] block px-4 py-1 hover:underline hover:text-darkgreen">Interior</a></li>
            <li><a href="shop-furniture.html" class="text-green xl:text-[18px] block px-4 py-1 hover:underline hover:text-darkgreen">Furniture</a></li>
            <li><a href="shop-architecture.html" class="text-green xl:text-[18px] block px-4 py-1 hover:underline hover:text-darkgreen">Architecture</a></li>
          </ul>
        </div>

        <a href="gifting.html" class="text-green font-medium hover:text-darkgreen text-[18px] md:text-[20px] xl:text-[23px] px-3 py-2 lg:border-b-0 border-b border-darkcream hover:underline">Gifting</a>
        <a href="craft.html" class="text-green font-medium hover:text-darkgreen text-[18px] md:text-[20px] xl:text-[23px] px-3 py-2 lg:border-b-0 border-b border-darkcream hover:underline">Explore the Craft</a>
        <a href="our-story.html" class="text-green font-medium hover:text-darkgreen text-[18px] md:text-[20px] xl:text-[23px] px-3 py-2 lg:border-b-0 border-b border-darkcream hover:underline">Our Story</a>
      </div>

      <!-- Account / Search / Cart -->
      <div class="flex items-center space-x-4 sm:space-x-6 xl:space-x-10 text-2xl xl:text-3xl ms-auto">
        <a href="#" class="text-green hover:text-darkgreen"><i class="fa-solid fa-magnifying-glass"></i></a>
        <a href="profile.html" class="text-green hover:text-darkgreen"><i class="fa-regular fa-circle-user"></i></a>
        <a href="cart.html" class="text-green hover:text-darkgreen"><i class="fa-solid fa-bag-shopping"></i></a>
      </div>

      <!-- Hamburger Menu (Mobile) -->
      <div class="lg:hidden ms-5">
        <button id="menu-toggle" class="text-green focus:outline-none">
          <i class="fa-solid fa-bars fa-lg text-3xl"></i>
        </button>
      </div>
    </div>
  </nav>
</header>
<!-- Offcanvas Overlay -->
<div id="offcanvas-overlay" class="fixed inset-0 bg-black/50 z-40 hidden"></div>
<div id="offcanvas" class="fixed top-0 left-0 h-full w-[80%] max-w-sm bg-white z-50 transform -translate-x-full transition-transform duration-300 lg:hidden pb-4">
  <!-- Close Button -->
  <button id="offcanvas-close" class="text-green text-3xl flex ms-auto py-4 px-2">
    <i class="fa-solid fa-xmark"></i>
  </button>
</div>
<!-- header end -->
