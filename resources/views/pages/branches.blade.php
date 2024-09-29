@extends('layout')

@section('content')
    <div class="container px-0 py-6 mx-auto">
        <div class="w-full mt-8 overflow-hidden sm:p-4 p-3 md:ms-0 md:rounded-lg">
            <nav class="flex my-2 items-center" aria-label="Breadcrumb">
                <ol role="list" class="flex items-center md:space-x-2">
                    <li>
                        <div><a href="/" class="text-gray-400 hover:text-gray-500"><svg
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                    aria-hidden="true" class="h-5 w-5 flex-shrink-0">
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
                                class="md:ms-2 ms-1 text-sm font-medium text-gray-500 hover:text-gray-700 text-primary font-semibold">اوقات
                                العمل</a></div>
                    </li>
                </ol>
            </nav>
            <div>
                <div class="mb-5 ql-editor pouse">
                    <!-- <h2 class="text-2xl mt-12 text-start " dir="rtl">اوقات العمل</h2> -->
                    <div id="editor-container  w-full " data-readonly="true">
                        <h2 class="ql-align-right"><u>🚘</u> أوقات العمل&nbsp;:</h2>
                        <p class="ql-align-right"><br></p>
                        <p class="ql-align-right">جميع أيام الأسبوع: الأحد - الإثنين - الثلاثاء - الاربعاء - الخميس - الجمعة
                            - السبت .</p>
                        <p class="ql-align-right"><br></p>
                        <p class="ql-align-right">من الساعة ٤ عصراً إلى ١ صباحاً بعد منتصف الليل . </p>
                        <p class="ql-align-right"><br></p>
                        <p class="ql-align-right"><br></p>
                    </div>
                </div>
@endsection
