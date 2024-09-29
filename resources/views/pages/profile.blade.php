@extends('layout')

@section('content')
    <div class="container px-0 py-6 mx-auto">
        <div class="container px-0 py-6 mx-auto">
            <div class="p-4 shadow bg-tertiary md:py-6 md:px-12 rounded-xl sm:rounded-lg">
                <h1 class="font-bold text-md md:text-xl text-center mb-4">Profile</h1>
                <div class="relative max-w-md mx-auto">
                    <div class="relative flex items-center justify-center mx-auto my-auto h-52 w-52">
                        <img width="100" height="100" class="rounded-full shadow mx-auto my-auto" src="https://shimaa.mahjoz.net/preview-file?file=profile%2F89615d03-e52f-4851-a32b-ff42505b8b11.png&amp;v=762" alt="profile picture">
                        <label for="dropzone-file" class="absolute top-0 flex items-center justify-center w-16 h-16 rounded-full shadow cursor-pointer bg-tertiary start-0">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-primary text-opacity-80" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                            <input id="dropzone-file" type="file" class="hidden" accept="image/*">
                        </label>
                    </div>
                    <div class="mt-10">
                        <form class="grid gap-y-6">
                            <div class="flex justify-between gap-2">
                                <div class="w-1/2">
                                    <label for="firstName" class="block text-sm font-medium text-gray-700">First Name</label>
                                    <div class="my-2">
                                        <input id="firstName" type="text" placeholder="First Name" class="block w-full px-4 py-3 text-sm border-gray-300 rounded-full shadow-sm focus:ring-primary/50 focus:border-primary/50">
                                        <div class="text-red-600 text-sm mt-2 p-1" style="display: none;"></div>
                                    </div>
                                </div>
                                <div class="w-1/2">
                                    <label for="lastName" class="block text-sm font-medium text-gray-700">Last Name</label>
                                    <div class="my-2">
                                        <input id="lastName" type="text" placeholder="Last Name" class="block w-full px-4 py-3 text-sm border-gray-300 rounded-full shadow-sm focus:ring-primary/50 focus:border-primary/50">
                                        <div class="text-red-600 text-sm mt-2 p-1" style="display: none;"></div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                                <div class="mt-1">
                                    <input id="email" disabled type="email" class="block w-full px-4 py-3 text-sm border-gray-300 rounded-full shadow-sm focus:ring-primary/50 focus:border-primary/50 disabled cursor-not-allowed disabled:bg-slate-50 disabled:text-slate-500 disabled:border-slate-200 disabled:shadow-none">
                                    <div class="text-red-600 text-sm mt-2 p-1" style="display: none;"></div>
                                </div>
                            </div>
                            <div>
                                <label for="phone-number" class="block text-sm font-medium text-gray-700">Enter Phone Number</label>
                                <div class="relative mt-1 rounded-md">
                                    <label for="country" class="shadow-none sr-only">Country</label>
                                    <div class="mt-1">
                                        <div class="vue-tel-input relative" dir="ltr" value="+201025125897">
                                            <div aria-label="Country Code Selector" aria-haspopup="listbox" aria-expanded="false" role="button" class="vti__dropdown" tabindex="0">
                                                <span class="vti__selection">
                                                    <span class="vti__flag eg"></span>
                                                    <span class="vti__dropdown-arrow">▼</span>
                                                </span>
                                            </div>
                                            <input type="tel" autocomplete="on" class="vti__input" id="" maxlength="25" name="telephone" placeholder="Enter a phone number" tabindex="0" aria-describedby="">
                                        </div>
                                        <div class="text-red-600 text-sm mt-2 p-1" style="display: none;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="flex justify-end">
                                <button type="submit" class="inline-flex justify-center py-3 text-base font-medium text-white border border-gray-300 rounded-full shadow-sm px-4 bg-primary sm:mt-0 w-fit sm:text-sm">
                                    <span class="flex items-center me-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 bg-indigo-300 rounded-full bg-secondary ms-1 rtl:hidden" viewBox="0 0 24 24">
                                            <path fill="#fff" d="M14.707 5.293a1 1 0 0 1 0 1.414L9.414 12l5.293 5.293a1 1 0 0 1-1.414 1.414l-6-6a1 1 0 0 1 0-1.414l6-6a1 1 0 0 1 1.414 0z"></path>
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 bg-indigo-300 rounded-full bg-secondary ms-1 ltr:hidden" viewBox="0 0 24 24">
                                            <path fill="#fff" d="M9.293 18.707a1 1 0 0 1 0-1.414L14.586 12L9.293 6.707a1 1 0 0 1 1.414-1.414l6 6a1 1 0 0 1 0 1.414l-6 6a1 1 0 0 1-1.414 0z"></path>
                                        </svg>
                                    </span>
                                    Save
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
