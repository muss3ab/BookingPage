@extends('layout')

@section('content')
<div class="container px-0 py-12 mx-auto">
    <div class="">
        <nav  class="flex my-2 items-center" aria-label="Breadcrumb">
            <ol role="list" class="flex items-center md:space-x-2">
                <li>
                    <div><a href="/" class="text-gray-400 hover:text-gray-500"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"
                                class="h-5 w-5 flex-shrink-0">
                                <path fill-rule="evenodd"
                                    d="M9.293 2.293a1 1 0 011.414 0l7 7A1 1 0 0117 11h-1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-3a1 1 0 00-1-1H9a1 1 0 00-1 1v3a1 1 0 01-1 1H5a1 1 0 01-1-1v-6H3a1 1 0 01-.707-1.707l7-7z"
                                    clip-rule="evenodd"></path>
                            </svg><span class="sr-only">الرئيسية</span></a></div>
                </li>
                <li>
                    <div class="flex items-center"><svg class="h-5 w-5 flex-shrink-0 text-gray-300" fill="currentColor"
                            viewBox="0 0 20 20" aria-hidden="true">
                            <path d="M5.555 17.776l8-16 .894.448-8 16-.894-.448z"></path>
                        </svg><a href="#"
                            class="md:ms-2 ms-1 text-sm font-medium text-gray-500 hover:text-gray-700 text-primary font-semibold">معرض
                            الصور</a></div>
                </li>
            </ol>
        </nav>
        <div  class="py-4 sm:py-6 sm:px-0 md:mx-12 mx-12 mt-4">
            <div  class="bg-white py-0 sm:py-6">
                <div  class="px-8 lg:px-32">
                    <div 
                        class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 2xl:grid-cols-4 gap-10 justify-items-center w-full">
                        <div  class="h-[470px] overflow-hidden rounded-xl cursor-pointer"><img
                                
                                src="https://img.mahjoz.io/rtsq4abl/Gallery/18n4pT2Zf53q9VSEM5EzfUoHQiJjJJrenNXpbEVC.jpg?h=350&amp;ixlib=php-4.1.0&amp;w=350"
                                class="h-full object-cover object-center hover:transform hover:scale-110 transition duration-300 ease-in-out"
                                data-opt-lazy-loaded="false"></div>
                        <div  class="h-[470px] overflow-hidden rounded-xl cursor-pointer"><img
                                
                                src="https://img.mahjoz.io/rtsq4abl/Gallery/88ehqsQs70UBQkEZYHGYY6KoNGWCYOU8KzxbU8y6.jpg?h=350&amp;ixlib=php-4.1.0&amp;w=350"
                                class="h-full object-cover object-center hover:transform hover:scale-110 transition duration-300 ease-in-out"
                                data-opt-lazy-loaded="false"></div>
                        <div  class="h-[470px] overflow-hidden rounded-xl cursor-pointer"><img
                                
                                src="https://img.mahjoz.io/rtsq4abl/Gallery/4If1ONsFILYGmqU4M5Zy66XNuvbuHKnYllbglwxN.jpg?h=350&amp;ixlib=php-4.1.0&amp;w=350"
                                class="h-full object-cover object-center hover:transform hover:scale-110 transition duration-300 ease-in-out"
                                data-opt-lazy-loaded="false"></div>
                        <div  class="h-[470px] overflow-hidden rounded-xl cursor-pointer"><img
                                
                                src="https://img.mahjoz.io/rtsq4abl/Gallery/mkKTXbYGACIJs8CCnXDIWGX445VRtX1eouOq8fAP.jpg?h=350&amp;ixlib=php-4.1.0&amp;w=350"
                                class="h-full object-cover object-center hover:transform hover:scale-110 transition duration-300 ease-in-out"
                                data-opt-lazy-loaded="false"></div>
                        <div  class="h-[470px] overflow-hidden rounded-xl cursor-pointer"><img
                                
                                src="https://img.mahjoz.io/rtsq4abl/Gallery/EjZPRSg7CZcGJAeMEaAE06JMRZ4ePuyXaKZnmjB4.jpg?h=350&amp;ixlib=php-4.1.0&amp;w=350"
                                class="h-full object-cover object-center hover:transform hover:scale-110 transition duration-300 ease-in-out"
                                data-opt-lazy-loaded="false"></div>
                        <div  class="h-[470px] overflow-hidden rounded-xl cursor-pointer"><img
                                
                                src="https://img.mahjoz.io/rtsq4abl/Gallery/m4KBrGUGOTrgXFFJgSqXedGIolRb0E3YY7r4cD28.webp?h=350&amp;ixlib=php-4.1.0&amp;w=350"
                                class="h-full object-cover object-center hover:transform hover:scale-110 transition duration-300 ease-in-out"
                                data-opt-lazy-loaded="false"></div>
                        <div  class="h-[470px] overflow-hidden rounded-xl cursor-pointer"><img
                                
                                src="https://img.mahjoz.io/rtsq4abl/Gallery/Gjiub5tDDy8a30tCXctb34cID49u8ivxXCN8AunL.jpg?h=350&amp;ixlib=php-4.1.0&amp;w=350"
                                class="h-full object-cover object-center hover:transform hover:scale-110 transition duration-300 ease-in-out"
                                data-opt-lazy-loaded="false"></div>
                        <div  class="h-[470px] overflow-hidden rounded-xl cursor-pointer"><img
                                
                                src="https://img.mahjoz.io/rtsq4abl/Gallery/qCZhRvzjrRZkWOt2Ylv7C3KQl2ZikztU6RI2JnOQ.jpg?h=350&amp;ixlib=php-4.1.0&amp;w=350"
                                class="h-full object-cover object-center hover:transform hover:scale-110 transition duration-300 ease-in-out"
                                data-opt-lazy-loaded="false"></div>
                    </div>
                </div>
            </div>
        </div>
    </div><!---->
</div>
@endsection