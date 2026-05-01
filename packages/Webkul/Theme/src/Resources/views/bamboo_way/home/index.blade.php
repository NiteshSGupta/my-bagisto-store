@extends('shop::layouts.master')

@section('page_title')
    The Bamboo Way
@stop

@section('content-wrapper')
      <!-- main section start -->
      <main class="home-main">
        <div class="home-banner">
          <div class="owl-carousel owl-theme">
            <div class="item relative"> 
              <!-- Banner Image -->
              <img src="{{ asset('themes/shop/frontend_assets/img/home-banner-img1.png') }}" alt="" class="w-full h-[400px] object-cover object-center sm:h-auto">
              <!-- Overlay Content -->
              <div class="slider-content absolute inset-0 flex items-center">
                <div class="container w-full mx-auto px-3">                 
                  <div class="max-w-full">
                    <div class="bg-gradient-to-l from-[#0f2a07d4] to-[#0f2a07db] text-darkcream py-10 px-5 w-full sm:w-8/12 lg:w-7/12 xl:w-6/12 2xl:w-5/12">
                      <h1 class="font-header font-medium text-4xl md:text-5xl lg:text-6xl xl:text-7xl">
                        A Way of Living with Bamboo
                      </h1>
                      <h4 class="py-3 font-normal text-md md:text-lg lg:text-xl xl:text-2xl">
                        Bamboo shaped by memory and regional wisdom, handcrafted for
                        everyday modern living.
                      </h4>
                      <a href="#">
                        <button class="mt-2 md:mt-3 bg-cream text-green border border-darkcream rounded-3xl capitalize font-bold px-[14px] py-[6px] 
                          text-base lg:px-5 lg:py-2 lg:text-lg outline-none hover:bg-transparent hover:text-cream transition-all duration-300">
                          Explore the Collection
                        </button>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="item relative"> 
              <!-- Banner Image -->
              <img src="{{ asset('themes/shop/frontend_assets/img/home-banner-img2.png') }}" alt="" class="w-full h-[400px] object-cover object-center sm:h-auto">
              <!-- Overlay Content -->
              <div class="slider-content absolute inset-0 flex items-center">
                <div class="container w-full mx-auto px-3">                 
                  <div class="max-w-full">
                    <div class="bg-gradient-to-l from-[#0f2a07d4] to-[#0f2a07db] text-darkcream py-10 px-5 w-full sm:w-8/12 lg:w-7/12 xl:w-6/12 2xl:w-5/12">
                      <h1 class="font-header font-medium text-4xl md:text-5xl lg:text-6xl xl:text-7xl">
                        A Way of Living with Bamboo
                      </h1>
                      <h4 class="py-3 font-normal text-md md:text-lg lg:text-xl xl:text-2xl">
                        Bamboo shaped by memory and regional wisdom, handcrafted for
                        everyday modern living.
                      </h4>
                      <a href="#">
                        <button class="mt-2 md:mt-3 bg-cream text-green border border-darkcream rounded-3xl capitalize font-bold px-[14px] py-[6px] 
                          text-base lg:px-5 lg:py-2 lg:text-lg outline-none hover:bg-transparent hover:text-cream transition-all duration-300">
                          Explore the Collection
                        </button>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="item relative"> 
              <!-- Banner Image -->
              <img src="{{ asset('themes/shop/frontend_assets/img/home-banner-img3.png') }}" alt="" class="w-full h-[400px] object-cover object-center sm:h-auto">
              <!-- Overlay Content -->
              <div class="slider-content absolute inset-0 flex items-center">
                <div class="container w-full mx-auto px-3">                 
                  <div class="max-w-full">
                    <div class="bg-gradient-to-l from-[#0f2a07d4] to-[#0f2a07db] text-darkcream py-10 px-5 w-full sm:w-8/12 lg:w-7/12 xl:w-6/12 2xl:w-5/12">
                      <h1 class="font-header font-medium text-4xl md:text-5xl lg:text-6xl xl:text-7xl">
                        A Way of Living with Bamboo
                      </h1>
                      <h4 class="py-3 font-normal text-md md:text-lg lg:text-xl xl:text-2xl">
                        Bamboo shaped by memory and regional wisdom, handcrafted for
                        everyday modern living.
                      </h4>
                      <a href="#">
                        <button class="mt-2 md:mt-3 bg-cream text-green border border-darkcream rounded-3xl capitalize font-bold px-[14px] py-[6px] 
                          text-base lg:px-5 lg:py-2 lg:text-lg outline-none hover:bg-transparent hover:text-cream transition-all duration-300">
                          Explore the Collection
                        </button>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="item relative"> 
              <!-- Banner Image -->
              <img src="{{ asset('themes/shop/frontend_assets/img/home-banner-img4.png') }}" alt="" class="w-full h-[400px] object-cover object-center sm:h-auto">
              <!-- Overlay Content -->
              <div class="slider-content absolute inset-0 flex items-center">
                <div class="container w-full mx-auto px-3">                 
                  <div class="max-w-full">
                    <div class="bg-gradient-to-l from-[#0f2a07d4] to-[#0f2a07db] text-darkcream py-10 px-5 w-full sm:w-8/12 lg:w-7/12 xl:w-6/12 2xl:w-5/12">
                      <h1 class="font-header font-medium text-4xl md:text-5xl lg:text-6xl xl:text-7xl">
                        A Way of Living with Bamboo
                      </h1>
                      <h4 class="py-3 font-normal text-md md:text-lg lg:text-xl xl:text-2xl">
                        Bamboo shaped by memory and regional wisdom, handcrafted for
                        everyday modern living.
                      </h4>
                      <a href="#">
                        <button class="mt-2 md:mt-3 bg-cream text-green border border-darkcream rounded-3xl capitalize font-bold px-[14px] py-[6px] 
                          text-base lg:px-5 lg:py-2 lg:text-lg outline-none hover:bg-transparent hover:text-cream transition-all duration-300">
                          Explore the Collection
                        </button>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="category py-5 lg:py-10">
          <div class="container mx-auto px-3">
            <div class="h-txt text-darkgreen mb-3 lg:mb-4">
              <h1 class="green-header">Shop by Category</h1>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 xl:gap-10">
              <div class="border-2 border-green group relative overflow-hidden">
                <img src="{{ asset('themes/shop/frontend_assets/img/category-img1.png') }}" class="w-full transition-opacity duration-500 ease-in-out group-hover:opacity-0" alt="">
                <img src="{{ asset('themes/shop/frontend_assets/img/category-img1-1.png') }}" class="absolute inset-0 w-full  object-cover opacity-0 transition-opacity duration-500 ease-in-out group-hover:opacity-100" alt="">
                <div class="w-full bg-green text-darkcream p-4 xl:p-7 text-lg xl:text-xl font-medium text-center">
                  <p>Interior</p>
                </div>
              </div>
              <div class="border-2 border-green group relative overflow-hidden">
                <img src="{{ asset('themes/shop/frontend_assets/img/category-img2.png') }}" class="w-full transition-opacity duration-500 ease-in-out group-hover:opacity-0" alt="">
                <img src="{{ asset('themes/shop/frontend_assets/img/category-img2-2.png') }}" class="absolute inset-0 w-full  object-cover opacity-0 transition-opacity duration-500 ease-in-out group-hover:opacity-100" alt="">
                <div class="w-full bg-green text-darkcream p-4 xl:p-7 text-lg xl:text-xl font-medium text-center">
                  <p>Furniture</p>
                </div>
              </div>
              <div class="border-2 border-green group relative overflow-hidden">
                <img src="{{ asset('themes/shop/frontend_assets/img/category-img3.png') }}" class="w-full transition-opacity duration-500 ease-in-out group-hover:opacity-0" alt="">
                <img src="{{ asset('themes/shop/frontend_assets/img/category-img3-3.png') }}" class="absolute inset-0 w-full  object-cover opacity-0 transition-opacity duration-500 ease-in-out group-hover:opacity-100" alt="">
                <div class="w-full bg-green text-darkcream p-4 xl:p-7 text-lg xl:text-xl font-medium text-center">
                  <p>Gifting</p>
                </div>
              </div>
              <div class="border-2 border-green group relative overflow-hidden">
                <img src="{{ asset('themes/shop/frontend_assets/img/category-img4.png') }}" class="w-full transition-opacity duration-500 ease-in-out group-hover:opacity-0" alt="">
                <img src="{{ asset('themes/shop/frontend_assets/img/category-img4-4.png') }}" class="absolute inset-0 w-full  object-cover opacity-0 transition-opacity duration-500 ease-in-out group-hover:opacity-100" alt="">
                <div class="w-full bg-green text-darkcream p-4 xl:p-7 text-lg xl:text-xl font-medium text-center">
                  <p>Architecture</p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="we-stand py-2 md:py-5">
          <div class="container mx-auto px-3">
            <div class="h-txt text-darkgreen mb-3 lg:mb-4">
              <h1 class="green-header">What we stand for</h1>
            </div>
            <div class="owl-carousel custom-owl">
              <div class="item justify-items-center text-center">
                <img src="{{ asset('themes/shop/frontend_assets/img/we-stand-img.png') }}" alt="" class="px-5 !w-auto">
                <div class="text-green mt-2 lg:mt-3">
                  <h2 class="font-semibold text-lg lg:text-xl mb-1">Purposeful Craft</h2>
                  <p>Functional design grounded in cultural meaning.</p>
                </div>
              </div>
              <div class="item justify-items-center text-center">
                <img src="{{ asset('themes/shop/frontend_assets/img/we-stand-img.png') }}" alt="" class="px-5 !w-auto">
                <div class="text-green mt-2 lg:mt-3">
                  <h2 class="font-semibold text-lg lg:text-xl mb-1">Regional Rootedness</h2>
                  <p>Inspired by India’s living bamboo craft traditions.</p>
                </div>
              </div>
              <div class="item justify-items-center text-center">
                <img src="{{ asset('themes/shop/frontend_assets/img/we-stand-img.png') }}" alt="" class="px-5 !w-auto">
                <div class="text-green mt-2 lg:mt-3">
                  <h2 class="font-semibold text-lg lg:text-xl mb-1">Conscious Design</h2>
                  <p>Sustainable by intent, refined in form and use.</p>
                </div>
              </div>
              <div class="item justify-items-center text-center">
                <img src="{{ asset('themes/shop/frontend_assets/img/we-stand-img.png') }}" alt="" class="px-5 !w-auto">
                <div class="text-green mt-2 lg:mt-3">
                  <h2 class="font-semibold text-lg lg:text-xl mb-1">Timeless Versatility</h2>
                  <p>Made to adapt beyond trends and spaces.</p>
                </div>
              </div>
              <div class="item justify-items-center text-center">
                <img src="{{ asset('themes/shop/frontend_assets/img/we-stand-img.png') }}" alt="" class="px-5 !w-auto">
                <div class="text-green mt-2 lg:mt-3">
                  <h2 class="font-semibold text-lg lg:text-xl mb-1">Material Honesty</h2>
                  <p>Honoring bamboo’s natural strength and fluidity.</p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="crafted py-5 lg:py-10">
          <div class="container mx-auto px-3">
            <div class="crafted-bg">
              <!-- content -->
              <div class="p-5 md:p-10 lg:px-20">
                <div class="h-txt text-darkcream mb-3 lg:mb-4">
                  <h1 class="green-header">Crafted Across Regions</h1>
                </div>

                <div class="owl-carousel custom-owl pt-2 lg:pt-4">
                  <div class="item text-center text-darkcream font-medium border-2 border-darkcream rounded-full p-2 w-28 h-28 lg:w-32 lg:h-32 xl:w-40 xl:h-40 bg-[#3b2e105e]
                      flex flex-col gap-1 justify-center items-center justify-self-center">
                    <div class="w-2/3 h-2/3 flex justify-center items-center">
                      <img src="{{ asset('themes/shop/frontend_assets/img/crafted-icon1.png') }}" alt="">
                    </div>
                    <p class="text-sm xl:text-lg">Assam</p>
                  </div>
                  <div class="item text-center text-darkcream font-medium border-2 border-darkcream rounded-full p-2 w-28 h-28 lg:w-32 lg:h-32 xl:w-40 xl:h-40 bg-[#3b2e105e]
                      flex flex-col gap-1 justify-center items-center justify-self-center">
                    <div class="w-1/2 h-2/3 flex justify-center">
                      <img src="{{ asset('themes/shop/frontend_assets/img/crafted-icon2.png') }}" alt="">
                    </div>
                    <p class="text-sm xl:text-lg">Manipur</p>
                  </div>
                  <div class="item text-center text-darkcream font-medium border-2 border-darkcream rounded-full p-2 w-28 h-28 lg:w-32 lg:h-32 xl:w-40 xl:h-40 bg-[#3b2e105e]
                      flex flex-col gap-1 justify-center items-center justify-self-center">
                    <div class="w-1/2 h-2/3 flex justify-center">
                      <img src="{{ asset('themes/shop/frontend_assets/img/crafted-icon3.png') }}" alt="">
                    </div>
                    <p class="text-sm xl:text-lg">Mizoram</p>
                  </div>
                  <div class="item text-center text-darkcream font-medium border-2 border-darkcream rounded-full p-2 w-28 h-28 lg:w-32 lg:h-32 xl:w-40 xl:h-40 bg-[#3b2e105e]
                      flex flex-col gap-1 justify-center items-center justify-self-center">
                    <div class="w-1/2 h-2/3 flex justify-center">
                      <img src="{{ asset('themes/shop/frontend_assets/img/crafted-icon4.png') }}" alt="">
                    </div>
                    <p class="text-sm xl:text-lg">Tripura</p>
                  </div>
                  <div class="item text-center text-darkcream font-medium border-2 border-darkcream rounded-full p-2 w-28 h-28 lg:w-32 lg:h-32 xl:w-40 xl:h-40 bg-[#3b2e105e]
                      flex flex-col gap-1 justify-center items-center justify-self-center">
                    <div class="w-1/2 h-2/3 flex justify-center">
                      <img src="{{ asset('themes/shop/frontend_assets/img/crafted-icon5.png') }}" alt="">
                    </div>
                    <p class="text-sm xl:text-lg">Kerala</p>
                  </div>
                </div>

                <div class="text-darkcream py-6 lg:py-10 xl:text-lg text-center">
                  <p>Across India’s bamboo heartlands - Assam, Mizoram, Manipur, Tripura, and Kerala, craft takes on many forms. Each region carries its own way of working with bamboo, shaped by climate, culture, and everyday life. What emerges is not one style, but many, distinct yet connected.</p>
                  <p>At The Bamboo Way, our products are born from these craft clusters. Every weave, bend, and knot reflects the place it comes from, whether it’s the rhythm of Assam’s bamboo traditions or the functional elegance of Kerala’s everyday tools. These pieces are structured yet organic, familiar yet quietly expressive.</p>
                  <p>Together, they form a living map of regional knowledge, bringing diverse techniques into a shared language that fits seamlessly into contemporary spaces.</p>
                </div>
                <hr class="border-darkcream"></hr>
                <div class="flex justify-center pt-6 lg:pt-10">
                  <img src="{{ asset('themes/shop/frontend_assets/img/icon.png') }}" class="w-16" alt="">
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="new-arrival py-2 md:py-5">
          <div class="container mx-auto px-3">
            <div class="h-txt text-darkgreen mb-3 lg:mb-4">
              <h1 class="green-header">New Arrivals</h1>
            </div>
            <!-- Tabs -->
            <div class="flex justify-center flex-wrap gap-3 xl:gap-6 mb-6 lg:mb-10">
              <a href="new-arrivals.html">
                <button class="tab-btn min-w-28 lg:min-w-36 rounded-3xl capitalize font-bold px-[14px] py-[6px] text-base text-darkgreen border border-darkgreen bg-transparent
                transition-all duration-300 lg:px-5 lg:py-2 lg:text-lg outline-none active" data-tab="tab1">All</button>
              </a>  
              <a href="shop-Interior.html">
                <button class="tab-btn min-w-28 lg:min-w-36 rounded-3xl capitalize font-bold px-[14px] py-[6px] text-base text-darkgreen border border-darkgreen bg-transparent
                transition-all duration-300 lg:px-5 lg:py-2 lg:text-lg outline-none" data-tab="tab2">Interior</button>
              </a>
              <a href="shop-furniture.html">
                <button class="tab-btn min-w-28 lg:min-w-36 rounded-3xl capitalize font-bold px-[14px] py-[6px] text-base text-darkgreen border border-darkgreen bg-transparent
                transition-all duration-300 lg:px-5 lg:py-2 lg:text-lg outline-none" data-tab="tab3">Furniture</button>
              </a>
              <a href="shop-architecture.html">
                <button class="tab-btn min-w-28 lg:min-w-36 rounded-3xl capitalize font-bold px-[14px] py-[6px] text-base text-darkgreen border border-darkgreen bg-transparent
                transition-all duration-300 lg:px-5 lg:py-2 lg:text-lg outline-none" data-tab="tab4">Architecture</button>
              </a>
            </div>

            <!-- Tab Contents -->
            <div id="tab1" class="tab-content">
              <div class="grid grid-cols-1 md:grid-cols-2 gap-4 xl:gap-10">
                <div class="border-2 border-green rounded-b-xl overflow-hidden">
                  <div class="filter brightness-75 overflow-hidden">
                    <img src="{{ asset('themes/shop/frontend_assets/img/home-tab-img1.png') }}" alt="" class="w-full transform transition-transform duration-500 hover:scale-110">
                  </div>       
                  <div class="p-3 sm:p-5 text-darkgreen">
                    <h2 class="font-bold text-xl lg:text-2xl xl:text-3xl mb-1">Side Table</h2>
                    <p class="lg:text-lg xl:text-xl">Side table with concealed storage, adding warmth and function to any space.</p>
                    <div class="flex items-center justify-between gap-3 my-3">
                      <p class="font-bold text-lg xl:text-xl">Rs.4000</p>
                      <button class="bg-darkgreen text-cream border border-darkgreen rounded-3xl capitalize font-bold px-[14px] py-[6px] 
                        lg:px-5 lg:py-2 outline-none hover:bg-transparent hover:text-darkgreen transition-all duration-300 text-sm">
                        Add to cart
                      </button>
                    </div>
                    <div class="flex items-center justify-between gap-3">
                      <div class="flex flex-row-reverse gap-1 rating">
                        <input type="radio" id="star5" name="rating" class="hidden">
                        <label for="star5" class="cursor-pointer flex aligns-center">
                          <i class="fa-regular fa-star text-yellow-400 text-xl"></i>
                        </label>

                        <input type="radio" id="star4" name="rating" class="hidden">
                        <label for="star4" class="cursor-pointer flex aligns-center">
                          <i class="fa-regular fa-star text-yellow-400 text-xl"></i>
                        </label>

                        <input type="radio" id="star3" name="rating" class="hidden">
                        <label for="star3" class="cursor-pointer flex aligns-center">
                          <i class="fa-regular fa-star text-yellow-400 text-xl"></i>
                        </label>

                        <input type="radio" id="star2" name="rating" class="hidden">
                        <label for="star2" class="cursor-pointer flex aligns-center">
                          <i class="fa-regular fa-star text-yellow-400 text-xl"></i>
                        </label>

                        <input type="radio" id="star1" name="rating" class="hidden">
                        <label for="star1" class="cursor-pointer flex aligns-center">
                          <i class="fa-regular fa-star text-yellow-400 text-xl"></i>
                        </label>
                      </div>
                      <a href="product-detail.html" class="xl:text-lg underline">See More</a>
                    </div>
                  </div>
                </div>
                <div class="border-2 border-green rounded-b-xl overflow-hidden">
                  <div class="filter brightness-75 overflow-hidden">
                    <img src="{{ asset('themes/shop/frontend_assets/img/home-tab-img2.png') }}" alt="" class="w-full transform transition-transform duration-500 hover:scale-110">
                  </div>
                  <div class="p-3 sm:p-5 text-darkgreen">
                    <h2 class="font-bold text-xl lg:text-2xl xl:text-3xl mb-1">Rocking Basket</h2>
                    <p class="lg:text-lg xl:text-xl">A bamboo dining basket for serving and tabletop organization with natural elegance.</p>
                    <div class="flex items-center justify-between gap-3 my-3">
                      <p class="font-bold text-lg xl:text-xl">Rs.1500</p>
                      <button class="bg-darkgreen text-cream border border-darkgreen rounded-3xl capitalize font-bold px-[14px] py-[6px] 
                        lg:px-5 lg:py-2 outline-none hover:bg-transparent hover:text-darkgreen transition-all duration-300 text-sm">
                        Add to cart
                      </button>
                    </div>
                    <div class="flex items-center justify-between gap-3">
                      <div class="flex flex-row-reverse gap-1 rating">
                        <input type="radio" id="star5" name="rating" class="hidden">
                        <label for="star5" class="cursor-pointer flex aligns-center">
                          <i class="fa-regular fa-star text-yellow-400 text-xl"></i>
                        </label>

                        <input type="radio" id="star4" name="rating" class="hidden">
                        <label for="star4" class="cursor-pointer flex aligns-center">
                          <i class="fa-regular fa-star text-yellow-400 text-xl"></i>
                        </label>

                        <input type="radio" id="star3" name="rating" class="hidden">
                        <label for="star3" class="cursor-pointer flex aligns-center">
                          <i class="fa-regular fa-star text-yellow-400 text-xl"></i>
                        </label>

                        <input type="radio" id="star2" name="rating" class="hidden">
                        <label for="star2" class="cursor-pointer flex aligns-center">
                          <i class="fa-regular fa-star text-yellow-400 text-xl"></i>
                        </label>

                        <input type="radio" id="star1" name="rating" class="hidden">
                        <label for="star1" class="cursor-pointer flex aligns-center">
                          <i class="fa-regular fa-star text-yellow-400 text-xl"></i>
                        </label>
                      </div>
                      <a href="" class="xl:text-lg underline">See More</a>
                    </div>
                  </div>
                </div>
                <div class="border-2 border-green rounded-b-xl overflow-hidden">
                  <div class="filter brightness-75 overflow-hidden">
                    <img src="{{ asset('themes/shop/frontend_assets/img/home-tab-img3.png') }}" alt="" class="w-full transform transition-transform duration-500 hover:scale-110">
                  </div>
                  <div class="p-3 sm:p-5 text-darkgreen">
                    <h2 class="font-bold text-xl lg:text-2xl xl:text-3xl mb-1">Armchair</h2>
                    <p class="lg:text-lg xl:text-xl">A lightweight armchair with woven detailing, designed for relaxed indoor or outdoor seating.</p>
                    <div class="flex items-center justify-between gap-3 my-3">
                      <p class="font-bold text-lg xl:text-xl">Rs.8000</p>
                      <button class="bg-darkgreen text-cream border border-darkgreen rounded-3xl capitalize font-bold px-[14px] py-[6px] 
                        lg:px-5 lg:py-2 outline-none hover:bg-transparent hover:text-darkgreen transition-all duration-300 text-sm">
                        Add to cart
                      </button>
                    </div>
                    <div class="flex items-center justify-between gap-3">
                      <div class="flex flex-row-reverse gap-1 rating">
                        <input type="radio" id="star5" name="rating" class="hidden">
                        <label for="star5" class="cursor-pointer flex aligns-center">
                          <i class="fa-regular fa-star text-yellow-400 text-xl"></i>
                        </label>

                        <input type="radio" id="star4" name="rating" class="hidden">
                        <label for="star4" class="cursor-pointer flex aligns-center">
                          <i class="fa-regular fa-star text-yellow-400 text-xl"></i>
                        </label>

                        <input type="radio" id="star3" name="rating" class="hidden">
                        <label for="star3" class="cursor-pointer flex aligns-center">
                          <i class="fa-regular fa-star text-yellow-400 text-xl"></i>
                        </label>

                        <input type="radio" id="star2" name="rating" class="hidden">
                        <label for="star2" class="cursor-pointer flex aligns-center">
                          <i class="fa-regular fa-star text-yellow-400 text-xl"></i>
                        </label>

                        <input type="radio" id="star1" name="rating" class="hidden">
                        <label for="star1" class="cursor-pointer flex aligns-center">
                          <i class="fa-regular fa-star text-yellow-400 text-xl"></i>
                        </label>
                      </div>
                      <a href="" class="xl:text-lg underline">See More</a>
                    </div>
                  </div>
                </div>
                <div class="border-2 border-green rounded-b-xl overflow-hidden">
                  <div class="filter brightness-75 overflow-hidden">
                    <img src="{{ asset('themes/shop/frontend_assets/img/home-tab-img4.png') }}" alt="" class="w-full transform transition-transform duration-500 hover:scale-110">
                  </div>
                  <div class="p-3 sm:p-5 text-darkgreen">
                    <h2 class="font-bold text-xl lg:text-2xl xl:text-3xl mb-1">Bed Tray</h2>
                    <p class="lg:text-lg xl:text-xl">A handcrafted bamboo bed tray designed for comfortable work, reading, or dining in bed.</p>
                    <div class="flex items-center justify-between gap-3 my-3">
                      <p class="font-bold text-lg xl:text-xl">Rs.2500</p>
                      <button class="bg-darkgreen text-cream border border-darkgreen rounded-3xl capitalize font-bold px-[14px] py-[6px] 
                        lg:px-5 lg:py-2 outline-none hover:bg-transparent hover:text-darkgreen transition-all duration-300 text-sm">
                        Add to cart
                      </button>
                    </div>
                    <div class="flex items-center justify-between gap-3">
                      <div class="flex flex-row-reverse gap-1 rating">
                        <input type="radio" id="star5" name="rating" class="hidden">
                        <label for="star5" class="cursor-pointer flex aligns-center">
                          <i class="fa-regular fa-star text-yellow-400 text-xl"></i>
                        </label>

                        <input type="radio" id="star4" name="rating" class="hidden">
                        <label for="star4" class="cursor-pointer flex aligns-center">
                          <i class="fa-regular fa-star text-yellow-400 text-xl"></i>
                        </label>

                        <input type="radio" id="star3" name="rating" class="hidden">
                        <label for="star3" class="cursor-pointer flex aligns-center">
                          <i class="fa-regular fa-star text-yellow-400 text-xl"></i>
                        </label>

                        <input type="radio" id="star2" name="rating" class="hidden">
                        <label for="star2" class="cursor-pointer flex aligns-center">
                          <i class="fa-regular fa-star text-yellow-400 text-xl"></i>
                        </label>

                        <input type="radio" id="star1" name="rating" class="hidden">
                        <label for="star1" class="cursor-pointer flex aligns-center">
                          <i class="fa-regular fa-star text-yellow-400 text-xl"></i>
                        </label>
                      </div>
                      <a href="" class="xl:text-lg underline">See More</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="flex justify-center mt-6 lg:mt-10">
                <a href="new-arrivals.html">
                  <button class="bg-darkgreen text-cream border border-darkgreen rounded-3xl capitalize font-bold px-[14px] py-[6px] text-base
                    lg:px-5 lg:py-2 lg:text-lg outline-none hover:bg-transparent hover:text-darkgreen transition-all duration-300">
                    View More
                  </button>
                </a>
              </div>
            </div>
          </div>
        </div>

        <div class="gifting py-5 lg:py-10">
          <div class="container mx-auto px-3">
            <div class="h-txt text-darkgreen mb-1 lg:mb-2">
              <h1 class="green-header">Gifting</h1>
            </div>
            <div class="text-green text-center lg:text-lg xl:text-xl mb-4 lg:mb-6">
              <p>Designed for moments that matter, our gifting solutions bring together conscious materials, regional craft, and refined design.</p> 
              <p>Whether you’re gifting at scale or creating something bespoke, each piece is crafted to be kept, used, and remembered.</p>
            </div>
            <div class="relative overflow-hidden flex justify-center items-center">
              <div class="relative">
                <img src="{{ asset('themes/shop/frontend_assets/img/gifting-img1-bg.png') }}" alt="" class="w-full h-96 lg:h-auto object-cover object-center">
                <div class="absolute inset-0 bg-gradient-to-l from-[#745740] to-[#411E03] opacity-75"></div>
              </div>
              <div class="absolute p-3 lg:p-10 xl:p-20 text-center text-darkcream">
                <div class="inline-flex justify-center items-center border-2 border-darkcream rounded-full p-2 w-20 h-20 lg:w-32 lg:h-32 xl:w-40 xl:h-40 mb-3 lg:mb-5 xl:mb-8 bg-[#3b2e105e]">
                  <i class="fa-solid fa-boxes-stacked text-4xl lg:text-6xl xl:text-7xl"></i>
                </div>
                <h2 class="font-bold text-2xl lg:text-3xl xl:text-4xl">Bulk Gifting</h2>
                <div class="lg:text-lg xl:text-2xl my-1 lg:my-3 xl:my-5">
                  <p>Ideal for festivals, corporate milestones, hospitality, events, and large-scale requirements.</p> 
                  <p>Choose from our curated range of bamboo products, thoughtfully packaged and ready for meaningful gifting at volume, without compromising on quality or values.</p>
                </div>
                <a href="">
                  <button class="bg-cream text-green border border-darkcream rounded-3xl capitalize font-bold px-[14px] py-[6px] 
                    text-base lg:px-5 lg:py-2 lg:text-lg outline-none hover:bg-transparent hover:text-cream transition-all duration-300 mt-2">
                    Discover More
                  </button>
                </a>
              </div>
            </div>
            <div class="relative overflow-hidden flex justify-center items-center mt-3">
              <div class="relative">
                <img src="{{ asset('themes/shop/frontend_assets/img/gifting-img2-bg.png') }}" alt="" class="w-full h-96 lg:h-auto object-cover object-center">
                <div class="absolute inset-0 bg-gradient-to-l from-[#745740] to-[#411E03] opacity-75"></div>
              </div>
              <div class="absolute p-3 lg:p-10 xl:p-20 text-center text-darkcream">
                <div class="inline-flex justify-center items-center border-2 border-darkcream rounded-full p-2 w-20 h-20 lg:w-32 lg:h-32 xl:w-40 xl:h-40 mb-3 lg:mb-5 xl:mb-8 bg-[#3b2e105e]">
                  <i class="fa-solid fa-wand-sparkles text-4xl lg:text-6xl xl:text-7xl"></i>
                </div>
                <h2 class="font-bold text-2xl lg:text-3xl xl:text-4xl">Custom Gifting</h2>
                <div class="lg:text-lg xl:text-2xl my-1 lg:my-3 xl:my-5">
                  <p>For occasions that call for something personal.</p> 
                  <p>We work closely with you to curate, customise, and craft gifting experiences that reflect your brand, values, and intent, from product selection to packaging and messaging.</p>
                </div>
                <a href="">
                  <button class="bg-cream text-green border border-darkcream rounded-3xl capitalize font-bold px-[14px] py-[6px] 
                    text-base lg:px-5 lg:py-2 lg:text-lg outline-none hover:bg-transparent hover:text-cream transition-all duration-300 mt-2">
                    Discover More
                  </button>
                </a>
              </div>
            </div>
          </div>
        </div>

        <div class="experience py-2 md:py-5">
          <div class="container mx-auto">
            <div class="flex flex-wrap gap-y-4">
              <div class="w-full lg:w-7/12 px-3">
                <div class="h-txt lg:text-left text-darkgreen mb-1">
                  <h1 class="green-header">Experience and Visualise</h1>
                </div>
                <div class="lg:text-lg xl:text-xl text-center lg:text-left text-darkgreen mb-3 lg:mb-5">
                  <p>Experience the material before you commit.</p>
                  <p>Request curated samples of bamboo products to explore texture, finish, and scale, ideal for interior projects, hospitality spaces, and bulk gifting decisions.</p>
                  <p>Designed for architects, designers, and brands who value clarity, craftsmanship, and conscious material choices.</p>
                </div>
                <div class="grid sm:grid-cols-2 gap-4 xl:gap-8 2xl:pe-10">
                  <div class="exp-imgbg justify-items-center text-center p-8 xl:py-20">
                    <img src="{{ asset('themes/shop/frontend_assets/img/exp-icon1.png') }}" alt="" class="w-24 lg:w-32 xl:w-40 mb-5 xl:mb-10">
                    <a href="" class="text-cream font-bold text-lg md:text-xl xl:text-2xl">
                      <p>Book a Sample <i class="fa-regular fa-circle-right"></i></p>
                    </a>
                  </div>
                  <div class="exp-imgbg justify-items-center text-center p-8 xl:py-20">
                    <img src="{{ asset('themes/shop/frontend_assets/img/exp-icon2.png') }}" alt="" class="w-24 lg:w-32 xl:w-40 mb-5 xl:mb-10">
                    <a href="" class="text-cream font-bold text-lg md:text-xl xl:text-2xl">
                      <p>Talk to our Team <i class="fa-regular fa-circle-right"></i></p>
                    </a>
                  </div>
                </div>
              </div>
              <div class="w-full lg:w-5/12 xl:ps-9 px-3">
                <div class="owl-carousel custom-owl">    

                  <div class="item relative rounded-2xl overflow-hidden">
                    <img src="{{ asset('themes/shop/frontend_assets/img/exp-slider-img1.png') }}" class="filter brightness-75 rounded-2xl">
                    <!-- HOTSPOT 1 -->
                    <div class="hotspot absolute top-[25%] left-[35%] z-20">
                      <button class="hotspot-btn w-6 h-6 sm:w-8 sm:h-8 rounded-full bg-cream/80 flex items-center justify-center shadow-lg">
                        <span class="w-3 h-3 bg-green rounded-full"></span>
                      </button>
                      <a href="" class="hotspot-tooltip absolute opacity-0 scale-95 pointer-events-none bg-cream/80 text-darkgreen px-3 py-2 
                        rounded-full shadow-xl text-sm w-max transition flex items-center">
                        Bamboo Pendant Lamp <i class="fa-solid fa-angle-right"></i>
                      </a>
                    </div>
                    <!-- HOTSPOT 2 -->
                    <div class="hotspot absolute top-[16%] left-[12%] z-20">
                      <button class="hotspot-btn w-6 h-6 sm:w-8 sm:h-8 rounded-full bg-cream/80 flex items-center justify-center shadow-lg">
                        <span class="w-3 h-3 bg-green rounded-full"></span>
                      </button>
                      <a href="" class="hotspot-tooltip absolute opacity-0 scale-95 pointer-events-none bg-cream/80 text-darkgreen px-3 py-2 
                        rounded-full shadow-xl text-sm w-max transition flex items-center">
                        Bamboo Wall Cladding  <i class="fa-solid fa-angle-right"></i>
                      </a>
                    </div>
                    <!-- HOTSPOT 3 -->
                    <div class="hotspot absolute top-[8%] left-[80%] z-20">
                      <button class="hotspot-btn w-6 h-6 sm:w-8 sm:h-8 rounded-full bg-cream/80 flex items-center justify-center shadow-lg">
                        <span class="w-3 h-3 bg-green rounded-full"></span>
                      </button>
                      <a href="" class="hotspot-tooltip absolute opacity-0 scale-95 pointer-events-none bg-cream/80 text-darkgreen px-3 py-2 
                        rounded-full shadow-xl text-sm w-max transition flex items-center">
                        Bamboo Ceiling Elements  <i class="fa-solid fa-angle-right"></i>
                      </a>
                    </div>
                    <!-- HOTSPOT 4 -->
                    <div class="hotspot absolute top-[63%] left-[58%] z-20">
                      <button class="hotspot-btn w-6 h-6 sm:w-8 sm:h-8 rounded-full bg-cream/80 flex items-center justify-center shadow-lg">
                        <span class="w-3 h-3 bg-green rounded-full"></span>
                      </button>
                      <a href="" class="hotspot-tooltip absolute opacity-0 scale-95 pointer-events-none bg-cream/80 text-darkgreen px-3 py-2 
                        rounded-full shadow-xl text-sm w-max transition flex items-center">
                        Bamboo Counter Facade  <i class="fa-solid fa-angle-right"></i>
                      </a>
                    </div>
                    <!-- BOTTOM TEXT -->
                    <a href="" class="bg-darkgreen/60 absolute bottom-0 left-0 w-full text-center py-4 sm:py-6">
                      <h3 class="text-darkcream text-3xl sm:text-4xl xl:text-5xl font-header">
                        Shop this look
                      </h3>
                    </a>
                  </div>

                  <div class="item relative rounded-2xl overflow-hidden">
                    <img src="{{ asset('themes/shop/frontend_assets/img/exp-slider-img2.png') }}" class="filter brightness-75 rounded-2xl">
                    <!-- HOTSPOT 1 -->
                    <div class="hotspot absolute top-[20%] left-[46%] z-20">
                      <button class="hotspot-btn w-6 h-6 sm:w-8 sm:h-8 rounded-full bg-cream/80 flex items-center justify-center shadow-lg">
                        <span class="w-3 h-3 bg-green rounded-full"></span>
                      </button>
                      <a href="" class="hotspot-tooltip absolute opacity-0 scale-95 pointer-events-none bg-cream/80 text-darkgreen px-3 py-2 
                        rounded-full shadow-xl text-sm w-max transition flex items-center">
                        Bamboo Paneling <i class="fa-solid fa-angle-right"></i>
                      </a>
                    </div>
                    <!-- BOTTOM TEXT -->
                    <a href="" class="bg-darkgreen/60 absolute bottom-0 left-0 w-full text-center py-4 sm:py-6">
                      <h3 class="text-cream text-3xl sm:text-4xl xl:text-5xl font-header">
                        Shop this look
                      </h3>
                    </a>
                  </div>

                  <div class="item relative rounded-2xl overflow-hidden">
                    <img src="{{ asset('themes/shop/frontend_assets/img/exp-slider-img3.png') }}" class="filter brightness-75 rounded-2xl">
                    <!-- HOTSPOT 1 -->
                    <div class="hotspot absolute top-[40%] left-[35%] z-20">
                      <button class="hotspot-btn w-6 h-6 sm:w-8 sm:h-8 rounded-full bg-cream/80 flex items-center justify-center shadow-lg">
                        <span class="w-3 h-3 bg-green rounded-full"></span>
                      </button>
                      <a href="" class="hotspot-tooltip absolute opacity-0 scale-95 pointer-events-none bg-cream/80 text-darkgreen px-3 py-2 
                        rounded-full shadow-xl text-sm w-max transition flex items-center">
                        Bamboo Swing Armchair <i class="fa-solid fa-angle-right"></i>
                      </a>
                    </div>
                    <!-- BOTTOM TEXT -->
                    <a href="" class="bg-darkgreen/60 absolute bottom-0 left-0 w-full text-center py-4 sm:py-6">
                      <h3 class="text-cream text-3xl sm:text-4xl xl:text-5xl font-header">
                        Shop this look
                      </h3>
                    </a>
                  </div>

                  <div class="item relative rounded-2xl overflow-hidden">
                    <img src="{{ asset('themes/shop/frontend_assets/img/exp-slider-img4.png') }}" class="filter brightness-75 rounded-2xl">
                    <!-- HOTSPOT 1 -->
                    <div class="hotspot absolute top-[35%] left-[40%] z-20">
                      <button class="hotspot-btn w-6 h-6 sm:w-8 sm:h-8 rounded-full bg-cream/80 flex items-center justify-center shadow-lg">
                        <span class="w-3 h-3 bg-green rounded-full"></span>
                      </button>
                      <a href="" class="hotspot-tooltip absolute opacity-0 scale-95 pointer-events-none bg-cream/80 text-darkgreen px-3 py-2 
                        rounded-full shadow-xl text-sm w-max transition flex items-center">
                        Bamboo Wardrobe Unit <i class="fa-solid fa-angle-right"></i>
                      </a>
                    </div>
                    <!-- BOTTOM TEXT -->
                    <a href="" class="bg-darkgreen/60 absolute bottom-0 left-0 w-full text-center py-4 sm:py-6">
                      <h3 class="text-cream text-3xl sm:text-4xl xl:text-5xl font-header">
                        Shop this look
                      </h3>
                    </a>
                  </div>
                  
                </div>   
              </div>
            </div>
          </div>
        </div>  
      </main>
      <!-- main section end -->
@stop
