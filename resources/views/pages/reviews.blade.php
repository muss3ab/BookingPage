@extends('layout')

@section('content')

<div class="container px-0 py-12 mx-auto">
    <div class="w-full mt-8 overflow-hidden md:ms-0 md:rounded-lg">
      <nav class="flex my-2 items-center" aria-label="Breadcrumb">
        <ol role="list" class="flex items-center md:space-x-2">
          <li>
            <div>
              <a href="/" class="text-gray-400 hover:text-gray-500"
                ><svg
                  xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 20 20"
                  fill="#3b71fe"
                  aria-hidden="true"
                  class="h-5 w-5 flex-shrink-0"
                >
                  <path
                    fill-rule="evenodd"
                    d="M9.293 2.293a1 1 0 011.414 0l7 7A1 1 0 0117 11h-1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-3a1 1 0 00-1-1H9a1 1 0 00-1 1v3a1 1 0 01-1 1H5a1 1 0 01-1-1v-6H3a1 1 0 01-.707-1.707l7-7z"
                    clip-rule="evenodd"
                  ></path></svg
                ><span class="sr-only">الرئيسية</span></a
              >
            </div>
          </li>
          <li>
            <div class="flex items-center">
              <svg
                class="h-5 w-5 flex-shrink-0 text-gray-300"
                fill="#3b71fe"
                viewBox="0 0 20 20"
                aria-hidden="true"
              >
                <path
                  d="M5.555 17.776l8-16 .894.448-8 16-.894-.448z"
                ></path></svg
              ><a
                href="#"
                class="md:ms-2 ms-1 text-sm font-medium text-gray-500 hover:text-gray-700 text-primary font-semibold"
                >آراء العملاء</a
              >
            </div>
          </li>
        </ol>
      </nav>
      <div class="py-8 sm:py-16 sm:px-6">
        <div class="lg:mt-0 lg:col-start-6 lg:col-span-7">
          <h3 class="sr-only">التقييمات الأخيرة</h3>
          <div class="flow-root">
            <div class="-my-12 divide-y divide-gray-200">
              <div class="py-6">
                <div class="flex items-center">
                  <span
                    class="inline-block w-8 h-8 overflow-hidden bg-gray-100 rounded-full sm:h-12 sm:w-12"
                    ><svg
                      class="w-full h-full text-gray-300"
                      fill="#3b71fe"
                      viewBox="0 0 24 24"
                    >
                      <path
                        d="M24 20.993V24H0v-2.996A14.977 14.977 0 0112.004 15c4.904 0 9.26 2.354 11.996 5.993zM16.002 8.999a4 4 0 11-8 0 4 4 0 018 0z"
                      ></path></svg
                  ></span>
                  <div class="w-full ms-4">
                    <div class="flex justify-between">
                      <h4 class="text-sm font-bold text-gray-900">
                        روان الحسني
                      </h4>
                      <span class="text-xs text-gray-400">منذ أسبوع</span>
                    </div>
                    <div class="flex items-center mt-1">
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 24 24"
                        fill="#3b71fe"
                        class="flex-shrink-0 w-12 h-12 hover:text-blue-500/80 text-primary"
                      >
                        <path
                          fill-rule="evenodd"
                          d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z"
                          clip-rule="evenodd"
                        ></path></svg
                      ><svg
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 24 24"
                        fill="#3b71fe"
                        class="flex-shrink-0 w-12 h-12 hover:text-blue-500/80 text-primary"
                      >
                        <path
                          fill-rule="evenodd"
                          d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z"
                          clip-rule="evenodd"
                        ></path></svg
                      ><svg
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 24 24"
                        fill="#3b71fe"
                        class="flex-shrink-0 w-12 h-12 hover:text-blue-500/80 text-primary"
                      >
                        <path
                          fill-rule="evenodd"
                          d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z"
                          clip-rule="evenodd"
                        ></path></svg
                      ><svg
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 24 24"
                        fill="#3b71fe"
                        class="flex-shrink-0 w-12 h-12 hover:text-blue-500/80 text-primary"
                      >
                        <path
                          fill-rule="evenodd"
                          d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z"
                          clip-rule="evenodd"
                        ></path></svg
                      ><svg
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 24 24"
                        fill="#3b71fe"
                        class="flex-shrink-0 w-12 h-12 hover:text-blue-500/80 text-primary"
                      >
                        <path
                          fill-rule="evenodd"
                          d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z"
                          clip-rule="evenodd"
                        ></path>
                      </svg>
                    </div>
                    <p class="sr-only">5 من أصل 5 نجوم</p>
                  </div>
                </div>
                <div class="mt-4 space-y-6 text-base italic text-gray-600">
                  <div
                    class="text-sm text-justify text-gray-500 sm:text-md"
                  >
                    ما شاء الله التنظيف جدًا جميل ومن قلب يعطيكم الف عافية
                  </div>
                </div>
              </div>
              <div class="py-6">
                <div class="flex items-center">
                  <span
                    class="inline-block w-8 h-8 overflow-hidden bg-gray-100 rounded-full sm:h-12 sm:w-12"
                    ><svg
                      class="w-full h-full text-gray-300"
                      fill="#3b71fe"
                      viewBox="0 0 24 24"
                    >
                      <path
                        d="M24 20.993V24H0v-2.996A14.977 14.977 0 0112.004 15c4.904 0 9.26 2.354 11.996 5.993zM16.002 8.999a4 4 0 11-8 0 4 4 0 018 0z"
                      ></path></svg
                  ></span>
                  <div class="w-full ms-4">
                    <div class="flex justify-between">
                      <h4 class="text-sm font-bold text-gray-900">
                        حمزه طاهر
                      </h4>
                      <span class="text-xs text-gray-400">منذ أسبوع</span>
                    </div>
                    <div class="flex items-center mt-1">
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 24 24"
                        fill="#3b71fe"
                        class="flex-shrink-0 w-12 h-12 hover:text-blue-500/80 text-primary"
                      >
                        <path
                          fill-rule="evenodd"
                          d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z"
                          clip-rule="evenodd"
                        ></path></svg
                      ><svg
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 24 24"
                        fill="#3b71fe"
                        class="flex-shrink-0 w-12 h-12 hover:text-blue-500/80 text-primary"
                      >
                        <path
                          fill-rule="evenodd"
                          d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z"
                          clip-rule="evenodd"
                        ></path></svg
                      ><svg
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 24 24"
                        fill="#3b71fe"
                        class="flex-shrink-0 w-12 h-12 hover:text-blue-500/80 text-primary"
                      >
                        <path
                          fill-rule="evenodd"
                          d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z"
                          clip-rule="evenodd"
                        ></path></svg
                      ><svg
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 24 24"
                        fill="#3b71fe"
                        class="flex-shrink-0 w-12 h-12 hover:text-blue-500/80 text-primary"
                      >
                        <path
                          fill-rule="evenodd"
                          d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z"
                          clip-rule="evenodd"
                        ></path></svg
                      ><svg
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 24 24"
                        fill="#3b71fe"
                        class="flex-shrink-0 w-12 h-12 hover:text-blue-500/80 text-primary"
                      >
                        <path
                          fill-rule="evenodd"
                          d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z"
                          clip-rule="evenodd"
                        ></path>
                      </svg>
                    </div>
                    <p class="sr-only">5 من أصل 5 نجوم</p>
                  </div>
                </div>
                <div class="mt-4 space-y-6 text-base italic text-gray-600">
                  <div
                    class="text-sm text-justify text-gray-500 sm:text-md"
                  >
                    ممتازه صراحه يديكم الف عافيه
                  </div>
                </div>
              </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  

    
@endsection