<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
<body dir="{{ session()->get('locale') === 'ar' ? 'rtl' : 'ltr' }}" >
    <header class="fixed top-0 z-50 w-full bg-white" style="height: 74px;">
        <nav id="main-nav" class="h-full">
            <div class="container h-full mx-auto">
                <div class="flex items-center justify-between h-full px-4 lg:px-0">
                    <div class="flex items-center">
                        <!-- Mobile menu button -->
                        <button class="inline-flex items-center justify-center p-2 text-gray-400 rounded-md hover:text-gray-500 lg:hidden" aria-expanded="false" aria-controls="mobile-menu">
                            <span class="sr-only">افتح القائمة الرئيسية</span>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                <path fill-rule="evenodd" d="M3 6.75A.75.75 0 013.75 6h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 6.75zM3 12a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 12zm0 5.25a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75a.75.75 0 01-.75-.75z" clip-rule="evenodd"></path>
                            </svg>
                        </button>

                        <!-- Logo -->
                        <a href="/" class="flex items-center ltr:mr-12 rtl:ml-12">
                            <span class="sr-only">appName</span>
                            <img src="https://img.mahjoz.io/rtsq4abl/BookingPages/0IwbUuI40iHeBISzxzwTH1OCCJfdmNHpPCkFzixp.jpg?h=65&amp;ixlib=php-4.1.0&amp;w=250" alt="logo" class="h-auto max-h-12 w-auto max-w-[170px]" />
                        </a>

                        <!-- Desktop menu -->
                        <ul class="hidden space-x-8 space-x-reverse lg:flex">
                            <li><a href="{{ route('home')}}" class="px-2 text-primary">الرئيسية</a></li>
                            <li><a href="{{route('reviews')}}" class="text-gray-500 hover:text-blue-500">آراء العملاء</a></li>
                            <li><a href="{{route('gallery')}}" class="text-gray-500 hover:text-blue-500">معرض الصور</a></li>
                            <li><a href="{{route('branches')}}" class="text-gray-500 hover:text-blue-500">الفروع</a></li>
                            <li><a href="{{route('terms_and_conditions')}}" class="text-gray-500 hover:text-blue-500">الشروط والأحكام</a></li>
                        </ul>
                    </div>
                    
                    <div class="flex items-center space-x-4 rtl:space-x-reverse">
                        <!-- User profile -->
                        <div class="relative">
                          <button id="profile-menu-button" type="button" aria-haspopup="menu" aria-expanded="false" class="flex flex-row items-center justify-center w-full text-sm font-medium text-gray-700 sm:gap-5">
                            <svg width="16" height="16" viewBox="0 0 31 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path fill-rule="evenodd" clip-rule="evenodd" d="M15.5003 18.9689C8.74059 18.9689 3.26074 24.4488 3.26074 31.2085V34.6356H0.323242V31.2085C0.323242 22.8264 7.11825 16.0314 15.5003 16.0314C23.8824 16.0314 30.6774 22.8264 30.6774 31.2085V34.6356H27.7399V31.2085C27.7399 24.4488 22.2601 18.9689 15.5003 18.9689Z" fill="#14171C"></path>
                              <path fill-rule="evenodd" clip-rule="evenodd" d="M15.5003 3.30225C11.9853 3.30225 9.13574 6.15177 9.13574 9.66683C9.13574 13.1819 11.9853 16.0314 15.5003 16.0314C19.0154 16.0314 21.8649 13.1819 21.8649 9.66683C21.8649 6.15177 19.0154 3.30225 15.5003 3.30225ZM6.19824 9.66683C6.19824 4.52943 10.3629 0.364746 15.5003 0.364746C20.6377 0.364746 24.8024 4.52943 24.8024 9.66683C24.8024 14.8042 20.6377 18.9689 15.5003 18.9689C10.3629 18.9689 6.19824 14.8042 6.19824 9.66683Z" fill="#14171C"></path>
                          </svg>
                          </button>
                            <div id="profile-menu" role="menu" tabindex="0" class="hidden absolute mt-2 divide-y divide-gray-100 rounded-lg shadow-lg bg-white w-56 sm:right-0 ring-1 ring-black ring-opacity-5 focus:outline-none z-10 rtl:!left-0 rtl:!right-auto ltr:!right-0 ltr:!left-auto">
                            <div class="text-gray-700 cursor-pointer hover:bg-zinc-300 hover:font-semibold transition-all flex flex-row items-center gap-3 px-3 py-2 text-sm sm:px-4 group" role="menuitem" tabindex="-1">
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="h-5 w-5">
                              <g id="vuesax_bulk_profile" data-name="vuesax/bulk/profile" transform="translate(-108 -252)">
                                <g id="profile">
                                <path id="Vector" d="M4.75,0a4.746,4.746,0,0,0-.12,9.49.807.807,0,0,1,.22,0h.07A4.746,4.746,0,0,0,4.75,0Z" transform="translate(115.25 254)" fill="#666" opacity="0.4"></path>
                                <path id="Vector-2" data-name="Vector" d="M12.12,1.395a9.929,9.929,0,0,0-10.15,0A3.947,3.947,0,0,0,0,4.625a3.914,3.914,0,0,0,1.96,3.21,9.239,9.239,0,0,0,5.08,1.41,9.239,9.239,0,0,0,5.08-1.41,3.945,3.945,0,0,0,1.96-3.23A3.937,3.937,0,0,0,12.12,1.395Z" transform="translate(112.96 264.755)" fill="#666"></path>
                                <path id="Vector-3" data-name="Vector" d="M0,0H24V24H0Z" transform="translate(108 252)" fill="none" opacity="0"></path>
                                </g>
                              </g>
                              </svg>
                              <a href="{{ route('profile')}}">My Profile</a>
                            </div>
                            <div class="text-gray-700 cursor-pointer hover:bg-zinc-300 hover:font-semibold transition-all flex flex-row items-center gap-3 px-3 py-2 text-sm sm:px-4 group" role="menuitem" tabindex="-1">
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="h-5 w-5">
                              <g id="vuesax_bulk_profile" data-name="vuesax/bulk/profile" transform="translate(-108 -252)">
                                <g id="profile">
                                <path id="Vector" d="M4.75,0a4.746,4.746,0,0,0-.12,9.49.807.807,0,0,1,.22,0h.07A4.746,4.746,0,0,0,4.75,0Z" transform="translate(115.25 254)" fill="#666" opacity="0.4"></path>
                                <path id="Vector-2" data-name="Vector d="M12.12,1.395a9.929,9.929,0,0,0-10.15,0A3.947,3.947,0,0,0,0,4.625a3.914,3.914,0,0,0,1.96,3.21,9.239,9.239,0,0,0,5.08,1.41,9.239,9.239,0,0,0,5.08-1.41,3.945,3.945,0,0,0,1.96-3.23A3.937,3.937,0,0,0,12.12,1.395Z" transform="translate(112.96 264.755)" fill="#666"></path>
                                <path id="Vector-3" data-name="Vector" d="M0,0H24V24H0Z" transform="translate(108 252)" fill="none" opacity="0"></path>
                                </g>
                              </g>
                              </svg>
                              <a href="{{ route('my-orders')}}"> My Orders</a>
                            </div>
                            <div class="text-gray-700 cursor-pointer hover:bg-zinc-300 hover:font-semibold transition-all flex flex-row items-center gap-3 px-3 py-2 text-sm sm:px-4 group" role="menuitem" tabindex="-1">
                              <svg fill="#000" xmlns="http://www.w3.org/2000/svg" shape-rendering="geometricPrecision" text-rendering="geometricPrecision" image-rendering="optimizeQuality" fill-rule="evenodd" clip-rule="evenodd" viewBox="0 0 403 512.4" class="h-5 w-5">
                              <path fill-rule="nonzero" d="M18.67 114.75h85.03v-17.3c0-26.81 10.97-51.18 28.62-68.83S174.33 0 201.15 0c26.81 0 51.19 10.97 68.84 28.62 17.65 17.65 28.61 42.02 28.61 68.83v17.3h85.73c5.15 0 9.81 2.13 13.17 5.49l.91 1.02c2.86 3.3 4.59 7.59 4.59 12.16v311.99c0 18.39-7.55 35.15-19.7 47.29-12.14 12.14-28.9 19.7-47.29 19.7H66.98c-18.35 0-35.12-7.56-47.28-19.72C7.55 480.58 0 463.83 0 445.41V133.42c0-5.14 2.11-9.83 5.48-13.19 3.36-3.37 8.05-5.48 13.19-5.48zm115.52 235.64c-5.29-4.65-5.8-12.72-1.15-18.01 4.65-5.29 12.72-5.8 18.01-1.15l31.18 27.46 68.86-73.42c4.82-5.12 12.89-5.37 18.01-.55 5.13 4.82 5.38 12.89.56 18.02l-77.02 82.12c-4.65 5.29-12.72 5.8-18.01 1.15l-40.44-35.62zm-6.73-235.64h147.38v-17.3c0-20.25-8.29-38.68-21.65-52.03-13.36-13.36-31.79-21.66-52.04-21.66s-38.68 8.3-52.03 21.66c-13.36 13.35-21.66 31.78-21.66 52.03v17.3zm-23.76 46.09v-22.31H23.78v306.88c0 11.86 4.88 22.65 12.71 30.48 7.81 7.87 18.62 12.72 30.49 12.72h269.03c11.83 0 22.64-4.89 30.48-12.72 7.84-7.84 12.73-18.65 12.73-30.48V138.53H298.6v22.56c8.82 4.48 14.86 13.64 14.86 24.21 0 14.99-12.15 27.15-27.15 27.15-14.99 0-27.15-12.16-27.15-27.15 0-10.9 6.42-20.29 15.68-24.62v-22.15H127.46v22.4c8.99 4.42 15.18 13.67 15.18 24.37 0 14.99-12.15 27.15-27.14 27.15-15 0-27.15-12.16-27.15-27.15 0-10.77 6.26-20.07 15.35-24.46z"></path>
                              </svg>
                              <a  href="{{ route('my-packages')}}">My Packages</a>
                            </div>
                            <div class="text-gray-700 cursor-pointer hover:bg-zinc-300 hover:font-semibold transition-all flex flex-row items-center gap-3 px-3 py-2 text-sm sm:px-4 group" role="menuitem" tabindex="-1">
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="h-5 w-5">
                              <g id="logout" transform="translate(-748 -444)">
                                <path id="Vector" d="M0,5.2v9.59A4.835,4.835,0,0,0,5.2,20H7.79a4.832,4.832,0,0,0,5.2-5.2V5.2A4.819,4.819,0,0,0,7.8,0H5.2A4.832,4.832,0,0,0,0,5.2Z" transform="translate(757 446)" fill="#666" opacity="0.4"></path>
                                <path id="Vector-2" data-name="Vector" d="M3.568.225.218,3.575a.754.754,0,0,0,0,1.06l3.35,3.35a.75.75,0,1,0,1.06-1.06l-2.07-2.07h10.69a.75.75,0,0,0,0-1.5H2.557l2.07-2.07a.742.742,0,0,0,.22-.53.725.725,0,0,0-.22-.53A.737.737,0,0,0,3.568.225Z" transform="translate(750.003 451.895)" fill="#666"></path>
                                <path id="Vector-3" data-name="Vector" d="M0,0H24V24H0Z" transform="translate(748 444)" fill="none" opacity="0"></path>
                              </g>
                              </svg>
                              <p>Sign out</p>
                            </div>
                            </div>
                        </div>
    
                        <script>
                          document.getElementById('profile-menu-button').addEventListener('click', function() {
                            var menu = document.getElementById('profile-menu');
                            menu.classList.toggle('hidden');
                          });
                        </script>

                        <!-- Language switcher -->
                        <div class="relative hidden lg:block">
                            <a href="" class="px-2 font-semibold text-primary" onclick="event.preventDefault(); document.getElementById('set-locale-en').submit();">ENG </a>
                            <span class="px-2 font-semibold text-primary">|</span>
                            <a href="" class="px-2 font-semibold text-primary" onclick="event.preventDefault(); document.getElementById('set-locale-ar').submit();">عربي</a>
                            <form id="set-locale-ar" action="{{ route('setlocale', ['locale' => 'ar']) }}" method="POST" style="display: none;">
                              @csrf
                            </form>
                            <form id="set-locale-en" action="{{ route('setlocale', ['locale' => 'en']) }}" method="POST" style="display: none;">
                              @csrf
                            </form>
                        </div>

                        <!-- Cart -->
                        <a href="{{route('cart')}}" class="items-center hidden px-4 py-2 space-x-2 rounded-md btn--gray lg:flex rtl:space-x-reverse">
                            <svg width="16" height="16" viewBox="0 0 47 47" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6">
                                <path d="M38.1875 43.0835C39.8098 43.0835 41.125 41.7683 41.125 40.146C41.125 38.5237 39.8098 37.2085 38.1875 37.2085C36.5652 37.2085 35.25 38.5237 35.25 40.146C35.25 41.7683 36.5652 43.0835 38.1875 43.0835Z" fill="#14171C" stroke="#14171C" stroke-width="2" stroke-linecap="square" stroke-linejoin="bevel"></path>
                                <path d="M18.6045 43.0835C20.2268 43.0835 21.542 41.7683 21.542 40.146C21.542 38.5237 20.2268 37.2085 18.6045 37.2085C16.9822 37.2085 15.667 38.5237 15.667 40.146C15.667 41.7683 16.9822 43.0835 18.6045 43.0835Z" fill="#14171C" stroke="#14171C" stroke-width="2" stroke-linecap="square" stroke-linejoin="bevel"></path>
                                <path d="M32.3128 7.8335H43.0837L39.167 29.3752H30.3545M32.3128 7.8335L30.3545 29.3752M32.3128 7.8335H21.0524M30.3545 29.3752H22.5212M21.0524 7.8335H9.79199L13.7087 29.3752H22.5212M21.0524 7.8335L22.5212 29.3752" stroke="#14171C" stroke-width="2" stroke-linecap="square" stroke-linejoin="bevel"></path>
                                <path d="M9.79199 7.83317C9.4656 6.52761 7.83366 3.9165 3.91699 3.9165" stroke="#14171C" stroke-width="2" stroke-linecap="square" stroke-linejoin="bevel"></path>
                                <path d="M39.1663 29.375H13.708H10.2433C6.749 29.375 4.89551 30.9049 4.89551 33.2917C4.89551 35.6784 6.749 37.2083 10.2433 37.2083H38.1872" stroke="#14171C" stroke-width="2" stroke-linecap="square" stroke-linejoin="bevel"></path>
                            </svg>
                            <span class="font-bold" dir="auto">‏0٫00&nbsp;ر.س.‏</span>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Mobile menu -->
            <div class="lg:hidden" id="mobile-menu">
                <ul class="px-2 pt-2 pb-3 space-y-1">
                    <li><a href="{{route('home')}}" class="block px-3 py-2 rounded-md text-primary">الرئيسية</a></li>
                    <li><a href="route('reviews')" class="block px-3 py-2 text-gray-500 rounded-md hover:text-blue-500">آراء العملاء</a></li>
                    <li><a href="route('gallery')" class="block px-3 py-2 text-gray-500 rounded-md hover:text-blue-500">معرض الصور</a></li>
                    <li><a href="route('branches')" class="block px-3 py-2 text-gray-500 rounded-md hover:text-blue-500">الفروع</a></li>
                    <li><a href="route('terms_and_conditions')" class="block px-3 py-2 text-gray-500 rounded-md hover:text-blue-500">الشروط والأحكام</a></li>
                </ul>
            </div>
        </nav>
    </header>
  
    <div class="gap-y-3">
        @yield('content')
    </div>
    
    <footer class=" w-full bg-white ">
        <!-- Separator Line -->
        <span class="block w-full h-px bg-gray-200"></span>

        <!-- Footer Content Section -->
        <section class="container px-4 py-5 mx-auto">
          <div
            class="grid gap-10 sm:gap-5 sm:grid-cols-1 xl:grid-cols-3 justify-items-center"
          >
            <!-- Important Links -->
            <div class="flex flex-col w-full sm:justify-start">
              <h3
                class="px-3 mb-3 text-base font-semibold text-primary border-primary border-s-4 sm:text-lg"
              >
                روابط مهمة
              </h3>
              <nav
                class="flex flex-col gap-2 px-3 py-2 text-sm text-gray-400 hover:text-blue-500"
              >
                <a
                  href="{{route('home')}}"
                  class="py-2 rounded-md cursor-pointer hover:text-blue-500"
                  >الرئيسية</a
                >
                <a
                  href="{{route('reviews')}}"
                  class="py-2 rounded-md cursor-pointer hover:text-blue-500"
                  >آراء العملاء</a
                >
                <a
                  href="{{route('gallery')}}"
                  class="py-2 rounded-md cursor-pointer hover:text-blue-500"
                  >معرض الصور</a
                >
                <a
                  href="{{route('branches')}}"
                  class="py-2 rounded-md cursor-pointer hover:text-blue-500"
                  >الفروع</a
                >
                <a
                  href="{{route('terms_and_conditions')}}"
                  class="py-2 rounded-md cursor-pointer hover:text-blue-500"
                  >الشروط والأحكام</a
                >
              </nav>
            </div>

            <!-- About Us -->
            <div class="flex flex-col w-full sm:justify-start">
              <h3
                class="px-3 mb-3 text-base font-semibold text-primary border-primary border-s-4 sm:text-lg"
              >
                من نحن
              </h3>
              <p class="px-3 text-sm text-gray-500">
                رغوة شركة سعودية في مجال غسيل السيارات المرن، انطلقت في عام
                2024م.
              </p>
              <div class="flex gap-3 mt-3">
                <a
                  href="https://www.instagram.com/ragwah_sa/"
                  target="_blank"
                  class="text-gray-400 hover:text-gray-500"
                  title="Instagram"
                >
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                    fill="#3b71fe"
                    fill-opacity="0.4"
                  >
                    <!-- Instagram Icon SVG Code -->
                  </svg>
                </a>
                <a
                  href="https://www.tiktok.com/@ragwah_sa?_t=8m82nBKG19p&_r=1"
                  target="_blank"
                  class="text-gray-400 hover:text-gray-500"
                  title="Tiktok"
                >
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                    fill="#3b71fe"
                    fill-opacity="0.4"
                  >
                    <!-- Tiktok Icon SVG Code -->
                  </svg>
                </a>
              </div>
            </div>

            <!-- Contact Us -->
            <div class="flex flex-col w-full sm:justify-start">
              <h3
                class="px-3 mb-3 text-base font-semibold text-primary border-primary border-s-4 sm:text-lg"
              >
                تواصل معنا
              </h3>
              <div class="flex flex-col gap-4 mt-3">
                <!-- WhatsApp -->
                <a
                  href="https://wa.me/+000000000000"
                  class="flex items-center gap-2 text-gray-400 hover:text-blue-500"
                >
                  <p>+000000000000</p>
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                  >
                    <!-- WhatsApp Icon SVG Code -->
                  </svg>
                </a>
                <!-- Phone -->
                <a
                  href="tel:+000000000000"
                  class="flex items-center gap-2 text-gray-400 hover:text-blue-500"
                >
                  <p>+000000000000</p>
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                  >
                    <!-- Phone Icon SVG Code -->
                  </svg>
                </a>
              </div>
            </div>
          </div>

          <!-- Payment Icons -->
          <div class="flex justify-end gap-3 mt-5">
            <img
              src="{{ asset('/images/mada.webp') }}"
              alt="Mada"
              class="w-auto max-h-auto"
              width="65"
              height="40"
            />
            <img
              src="{{ asset('/images/visa.webp') }}"
              alt="Visa"
              class="w-auto max-h-auto"
              width="65"
              height="40"
            />
            <img
              src="/images/back.webp"
              alt="Back"
              class="w-auto max-h-auto"
              width="65"
              height="40"
            />
            <img
              src="{{ asset('/images/applepay.webp') }}"
              alt="Apple Pay"
              class="w-auto max-h-auto"
              width="65"
              height="40"
            />
            <img
              src="{{ asset('/images/on-arrival.webp') }}"
              alt="On Arrival"
              class="w-auto max-h-auto"
              width="65"
              height="40"
            />
            <img
              src="{{ asset('/images/bank_transfer.webp') }}"
              alt="Bank Transfer"
              class="w-auto max-h-auto"
              width="65"
              height="40"
            />
          </div>
          <!-- Separator Line -->
          <div class="h-px my-4 bg-gray-200"></div>

          <!-- Footer Credit -->
          <div class="text-center">
            <p>
              صنع بإتقان بواسطة
              <a
                href="https://mahjoz.io"
                target="_blank"
                class="font-bold text-primary"
                >محجوز</a
              >
            </p>
          </div>
        </section>
      </footer>
</body>
</html>