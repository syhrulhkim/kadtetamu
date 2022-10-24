@extends('layouts.app')
<div class="lg:px-44">
    <header class="bg-white dark:bg-white-900">
        <nav class="bg-white dark:bg-white-900">
            <div class="container p-6 mx-auto">
                <a class="block py-5 text-2xl font-bold text-center text-white-800 dark:text-black lg:text-3xl hover:text-white-700 dark:hover:text-white-300" href="#">KAD TETAMU</a>
                <div class="flex items-center justify-center mt-6 text-white-600 capitalize dark:text-white-300">
                    <a href="#" class="text-white-800 dark:text-white-200 border-b-2 border-blue-500 mx-1.5 sm:mx-6">home</a>
                    <a href="#" class="border-b-2 border-transparent hover:text-white-800 dark:hover:text-white-200 hover:border-blue-500 mx-1.5 sm:mx-6">features</a>
                    <a href="#" class="border-b-2 border-transparent hover:text-white-800 dark:hover:text-white-200 hover:border-blue-500 mx-1.5 sm:mx-6">pricing</a>
                    <a href="#" class="border-b-2 border-transparent hover:text-white-800 dark:hover:text-white-200 hover:border-blue-500 mx-1.5 sm:mx-6">blog</a>
                </div>
            </div>
        </nav>
        
    </header>

    <section>
        <div class="container gap-8 flex flex-col px-6 py-4 mx-auto lg:h-auto lg:py-16 lg:flex-row lg:items-center">
            <div class="flex items-center justify-center w-full h-full lg:w-1/2">
                <img class="object-cover w-full h-full max-w-2xl rounded-md" src="{{ asset('storage/card_template/wedding/kad_wed_1.png') }}" alt="card">
            </div>

            <div class="self-start max-w-2xl px-8 py-4 h-full bg-white dark:bg-gray-800"">
                <a href="#" class="mt-4 mb-10 text-5xl font-bold text-black dark:text-white hover:text-gray-600 dark:hover:text-gray-200 hover:underline" tabindex="0" role="link">#01 KAD KAHWIN</a>
                <div class="mb-3 flex items-center justify-between mt-2">
                    <a class="px-3 py-1 text-sm font-bold text-gray-100 transition-colors duration-300 transform bg-gray-600 rounded cursor-pointer hover:bg-gray-500" tabindex="0" role="button">Kahwin</a>
                </div>
                <div class="grid w-full mb-2">
                    <button class="flex justify-center text-center px-4 py-5 font-medium tracking-wide text-white capitalize transition-colors duration-300 transform bg-black rounded-md hover:bg-gray-600 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-80">
                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16"> 
                            <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/> 
                        </svg>
                        <span class="mx-1 text-2xl font-bold">Beli</span>
                    </button>
                </div>
                <div class="self-start max-w-2xl px-8 py-4 h-full bg-white rounded-lg shadow-lg dark:bg-gray-800">
                    <div class="mt-2">
                        <p class="mt-3 text-lg font-bold text-black dark:text-gray-800">Kandungan</p>
                            <div class="mt-2" >
                                <svg style="color: rgb(0, 0, 0); display:inline;" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="30" zoomAndPan="magnify" viewBox="0 0 30 30.000001" height="30" preserveAspectRatio="xMidYMid meet" version="1.0"><defs><clipPath id="id1"><path d="M 10 7 L 21.046875 7 L 21.046875 25.875 L 10 25.875 Z M 10 7 " clip-rule="nonzero" fill="#000000"></path></clipPath><clipPath id="id2"><path d="M 7 3.375 L 16 3.375 L 16 10 L 7 10 Z M 7 3.375 " clip-rule="nonzero" fill="#000000"></path></clipPath><clipPath id="id3"><path d="M 5.804688 6 L 12 6 L 12 15 L 5.804688 15 Z M 5.804688 6 " clip-rule="nonzero" fill="#000000"></path></clipPath><clipPath id="id4"><path d="M 11 3.375 L 21 3.375 L 21 14 L 11 14 Z M 11 3.375 " clip-rule="nonzero" fill="#000000"></path></clipPath></defs><g clip-path="url(#id1)"><path fill="#000000" d="M 19.820312 15.644531 L 19.828125 15.644531 C 19.828125 15.644531 17.777344 18.679688 16.050781 20.933594 C 14.5625 22.882812 14.125 24.550781 14 25.359375 C 13.953125 25.652344 13.714844 25.875 13.425781 25.875 C 13.136719 25.875 12.898438 25.652344 12.847656 25.359375 C 12.722656 24.550781 12.289062 22.882812 10.796875 20.933594 C 10.570312 20.632812 10.335938 20.320312 10.101562 20 L 15.730469 13.25 L 20.261719 7.828125 C 20.761719 8.886719 21.039062 10.074219 21.039062 11.332031 C 21.039062 12.921875 20.589844 14.398438 19.820312 15.644531 Z M 19.820312 15.644531 " fill-opacity="1" fill-rule="nonzero"></path></g><path fill="#000000" d="M 15.730469 13.25 L 10.101562 20 C 8.566406 17.925781 7.023438 15.644531 7.023438 15.644531 L 7.027344 15.644531 C 6.863281 15.378906 6.71875 15.113281 6.59375 14.832031 L 11.117188 9.410156 C 10.6875 9.929688 10.433594 10.601562 10.433594 11.332031 C 10.433594 13 11.769531 14.347656 13.425781 14.347656 C 14.355469 14.347656 15.1875 13.921875 15.730469 13.25 Z M 15.730469 13.25 " fill-opacity="1" fill-rule="nonzero"></path><g clip-path="url(#id2)"><path fill="#000000" d="M 15.816406 3.78125 L 11.15625 9.367188 L 7.589844 6.226562 C 8.980469 4.480469 11.082031 3.375 13.425781 3.375 C 14.261719 3.375 15.066406 3.515625 15.816406 3.78125 Z M 15.816406 3.78125 " fill-opacity="1" fill-rule="nonzero"></path></g><g clip-path="url(#id3)"><path fill="#000000" d="M 11.15625 9.367188 L 11.117188 9.410156 L 6.59375 14.832031 C 6.09375 13.773438 5.808594 12.585938 5.808594 11.332031 C 5.808594 9.386719 6.480469 7.605469 7.589844 6.226562 Z M 11.15625 9.367188 " fill-opacity="1" fill-rule="nonzero"></path></g><g clip-path="url(#id4)"><path fill="#000000" d="M 15.730469 13.25 C 16.160156 12.730469 16.417969 12.058594 16.417969 11.332031 C 16.417969 9.664062 15.078125 8.3125 13.425781 8.3125 C 12.496094 8.3125 11.664062 8.742188 11.117188 9.410156 L 15.816406 3.78125 C 17.769531 4.449219 19.371094 5.925781 20.261719 7.828125 Z M 15.730469 13.25 " fill-opacity="1" fill-rule="nonzero"></path></g>
                                    <span class="mt-2 text-gray-600 dark:text-gray-300">Google Maps @ Waze</span>
                                </svg>
                            </div>
                            <div class="">
                                <svg class="h-6 w-6"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256"><rect width="30" height="30" zoomAndPan="magnify" viewBox="0 0 30 30.000001" fill="none"/><path d="M210.3,56.3l-80-24a8.2,8.2,0,0,0-7.1,1.3A8.1,8.1,0,0,0,120,40V148.3A47.4,47.4,0,0,0,88,136a48,48,0,1,0,48,48V98.8l69.7,20.9a8.2,8.2,0,0,0,7.1-1.3A8.1,8.1,0,0,0,216,112V64A8.1,8.1,0,0,0,210.3,56.3Z"/>
                                    <span class="text-gray-600 dark:text-gray-300">Lagu Pilihan</span>
                                </svg>
                            </div>
                            <div class="" >
                                <svg style="color: rgb(0, 0, 0); display:inline;" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="30" zoomAndPan="magnify" viewBox="0 0 30 30.000001" height="30" preserveAspectRatio="xMidYMid meet" version="1.0"><defs><clipPath id="id1"><path d="M 10 7 L 21.046875 7 L 21.046875 25.875 L 10 25.875 Z M 10 7 " clip-rule="nonzero" fill="#000000"></path></clipPath><clipPath id="id2"><path d="M 7 3.375 L 16 3.375 L 16 10 L 7 10 Z M 7 3.375 " clip-rule="nonzero" fill="#000000"></path></clipPath><clipPath id="id3"><path d="M 5.804688 6 L 12 6 L 12 15 L 5.804688 15 Z M 5.804688 6 " clip-rule="nonzero" fill="#000000"></path></clipPath><clipPath id="id4"><path d="M 11 3.375 L 21 3.375 L 21 14 L 11 14 Z M 11 3.375 " clip-rule="nonzero" fill="#000000"></path></clipPath></defs><g clip-path="url(#id1)"><path fill="#000000" d="M 19.820312 15.644531 L 19.828125 15.644531 C 19.828125 15.644531 17.777344 18.679688 16.050781 20.933594 C 14.5625 22.882812 14.125 24.550781 14 25.359375 C 13.953125 25.652344 13.714844 25.875 13.425781 25.875 C 13.136719 25.875 12.898438 25.652344 12.847656 25.359375 C 12.722656 24.550781 12.289062 22.882812 10.796875 20.933594 C 10.570312 20.632812 10.335938 20.320312 10.101562 20 L 15.730469 13.25 L 20.261719 7.828125 C 20.761719 8.886719 21.039062 10.074219 21.039062 11.332031 C 21.039062 12.921875 20.589844 14.398438 19.820312 15.644531 Z M 19.820312 15.644531 " fill-opacity="1" fill-rule="nonzero"></path></g><path fill="#000000" d="M 15.730469 13.25 L 10.101562 20 C 8.566406 17.925781 7.023438 15.644531 7.023438 15.644531 L 7.027344 15.644531 C 6.863281 15.378906 6.71875 15.113281 6.59375 14.832031 L 11.117188 9.410156 C 10.6875 9.929688 10.433594 10.601562 10.433594 11.332031 C 10.433594 13 11.769531 14.347656 13.425781 14.347656 C 14.355469 14.347656 15.1875 13.921875 15.730469 13.25 Z M 15.730469 13.25 " fill-opacity="1" fill-rule="nonzero"></path><g clip-path="url(#id2)"><path fill="#000000" d="M 15.816406 3.78125 L 11.15625 9.367188 L 7.589844 6.226562 C 8.980469 4.480469 11.082031 3.375 13.425781 3.375 C 14.261719 3.375 15.066406 3.515625 15.816406 3.78125 Z M 15.816406 3.78125 " fill-opacity="1" fill-rule="nonzero"></path></g><g clip-path="url(#id3)"><path fill="#000000" d="M 11.15625 9.367188 L 11.117188 9.410156 L 6.59375 14.832031 C 6.09375 13.773438 5.808594 12.585938 5.808594 11.332031 C 5.808594 9.386719 6.480469 7.605469 7.589844 6.226562 Z M 11.15625 9.367188 " fill-opacity="1" fill-rule="nonzero"></path></g><g clip-path="url(#id4)"><path fill="#000000" d="M 15.730469 13.25 C 16.160156 12.730469 16.417969 12.058594 16.417969 11.332031 C 16.417969 9.664062 15.078125 8.3125 13.425781 8.3125 C 12.496094 8.3125 11.664062 8.742188 11.117188 9.410156 L 15.816406 3.78125 C 17.769531 4.449219 19.371094 5.925781 20.261719 7.828125 Z M 15.730469 13.25 " fill-opacity="1" fill-rule="nonzero"></path></g>
                                    <span class="mt-2 text-gray-600 dark:text-gray-300">Google Maps @ Waze</span>
                                </svg>
                            </div>
                        {{-- <p class="text-gray-600 dark:text-gray-300">Lagu pilihan</p> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-white dark:bg-white">
        <div class="container px-6 py-8 mx-auto">
            <h2 class="text-3xl font-semibold text-center text-gray-800 capitalize lg:text-4xl dark:text-black">Our Team</h2>
            <div class="grid gap-8 mt-8 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
                <div class="w-full max-w-xs text-center">
                    <img class="object-cover object-center w-full h-48 mx-auto rounded-lg" src="https://images.unsplash.com/photo-1493863641943-9b68992a8d07?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=739&q=80" alt="avatar" />
                </div>
                <div class="w-full max-w-xs text-center">
                    <img class="object-cover object-center w-full h-48 mx-auto rounded-lg" src="https://images.unsplash.com/photo-1516756587022-7891ad56a8cd?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=334&q=80" alt="avatar" />
                </div>
                <div class="w-full max-w-xs text-center">
                    <img class="object-cover object-center w-full h-48 mx-auto rounded-lg" src="https://images.unsplash.com/photo-1493863641943-9b68992a8d07?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=739&q=80" alt="avatar" />
                </div>
                <div class="w-full max-w-xs text-center">
                    <img class="object-cover object-center w-full h-48 mx-auto rounded-lg" src="https://images.unsplash.com/photo-1516756587022-7891ad56a8cd?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=334&q=80" alt="avatar" />
                </div>
                <div class="w-full max-w-xs text-center">
                    <img class="object-cover object-center w-full h-48 mx-auto rounded-lg" src="https://images.unsplash.com/photo-1493863641943-9b68992a8d07?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=739&q=80" alt="avatar" />
                </div>
                <div class="w-full max-w-xs text-center">
                    <img class="object-cover object-center w-full h-48 mx-auto rounded-lg" src="https://images.unsplash.com/photo-1516756587022-7891ad56a8cd?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=334&q=80" alt="avatar" />
                </div>
                <div class="w-full max-w-xs text-center">
                    <img class="object-cover object-center w-full h-48 mx-auto rounded-lg" src="https://images.unsplash.com/photo-1493863641943-9b68992a8d07?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=739&q=80" alt="avatar" />
                </div>
                <div class="w-full max-w-xs text-center">
                    <img class="object-cover object-center w-full h-48 mx-auto rounded-lg" src="https://images.unsplash.com/photo-1516756587022-7891ad56a8cd?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=334&q=80" alt="avatar" />
                </div>
            </div>
        </div>
    </section>

    <div class="bg-white dark:bg-gray-900">
        <div class="container px-6 py-8 mx-auto">
            <h1 class="text-3xl font-semibold text-center text-gray-800 capitalize lg:text-4xl dark:text-white">Simple pricing plan</h1>
            <p class="max-w-2xl mx-auto mt-4 text-center text-gray-500 xl:mt-6 dark:text-gray-300">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Alias quas magni libero consequuntur voluptatum velit amet id repudiandae ea, deleniti laborum in neque eveniet.
            </p>
            <div class="grid grid-cols-2 gap-8 mt-6 lg:row lg:px-5 xl:mt-12">
                <div class="flex items-center justify-between px-8 py-4 border cursor-pointer rounded-xl dark:border-gray-700">
                    <div class="flex flex-col items-center space-y-1">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-400 sm:h-7 sm:w-7" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                        </svg>
                        <h2 class="text-lg font-medium text-gray-700 sm:text-xl dark:text-gray-200">Basic</h2>
                    </div>
                    <h2 class="text-2xl font-semibold text-gray-500 sm:text-3xl dark:text-gray-300">Free</h2>
                </div>
                <div class="flex items-center justify-between px-8 py-4 border border-blue-500 cursor-pointer rounded-xl">
                    <div class="flex flex-col items-center space-y-1">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-blue-600 dark:text-blue-500 sm:h-7 sm:w-7" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                        </svg>
                        <h2 class="text-lg font-medium text-gray-700 sm:text-xl dark:text-gray-200">Standard</h2>
                    </div>
                    <div class="flex flex-col items-center space-y-1">
                        <div class="px-2 text-xs text-blue-500 bg-gray-100 rounded-full dark:text-blue-400 sm:px-4 sm:py-1 dark:bg-gray-700 ">
                            Save 30%
                        </div>
                        <h2 class="text-2xl font-semibold text-blue-600 dark:text-blue-500 sm:text-3xl">$99 <span class="text-base font-medium">/Yearly</span></h2>
                    </div>
                </div>
            </div>
            <div class="p-8 mt-8 space-y-8 bg-gray-100 dark:bg-gray-800 rounded-xl">
                <div class="flex items-center justify-between text-gray-800 dark:text-gray-200">
                    <p class="textlg sm:text-xl">Unlimited Links</p>
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-blue-500 sm:h-7 sm:w-7" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                    </svg>
                </div>
                <div class="flex items-center justify-between text-gray-800 dark:text-gray-200">
                    <p class="textlg sm:text-xl">Own analytics platfrom</p>
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-blue-500 sm:h-7 sm:w-7" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                    </svg>
                </div>
                <div class="flex items-center justify-between text-gray-800 dark:text-gray-200">
                    <p class="textlg sm:text-xl">Full Support with discussion</p>
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-blue-500 sm:h-7 sm:w-7" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                    </svg>
                </div>
                <div class="flex items-center justify-between text-gray-800 dark:text-gray-200">
                    <p class="textlg sm:text-xl">Optimize hashtags</p>
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-red-400 sm:h-7 sm:w-7" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M13.477 14.89A6 6 0 015.11 6.524l8.367 8.368zm1.414-1.414L6.524 5.11a6 6 0 018.367 8.367zM18 10a8 8 0 11-16 0 8 8 0 0116 0z" clip-rule="evenodd" />
                    </svg>
                </div>
                <div class="flex items-center justify-between text-gray-800 dark:text-gray-200">
                    <p class="textlg sm:text-xl">Mobile app</p>
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-blue-500 sm:h-7 sm:w-7" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                    </svg>
                </div>
                <div class="flex items-center justify-between text-gray-800 dark:text-gray-200">
                    <p class="textlg sm:text-xl">Unlimited users</p>
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-red-400 sm:h-7 sm:w-7" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M13.477 14.89A6 6 0 015.11 6.524l8.367 8.368zm1.414-1.414L6.524 5.11a6 6 0 018.367 8.367zM18 10a8 8 0 11-16 0 8 8 0 0116 0z" clip-rule="evenodd" />
                    </svg>
                </div>
            </div>
            <div class="flex justify-center mt-8">
                <button class="px-8 py-2 tracking-wide text-white capitalize transition-colors duration-300 transform bg-blue-600 rounded-md hover:bg-blue-500 focus:outline-none focus:bg-blue-500 focus:ring focus:ring-blue-300 focus:ring-opacity-80">
                    Choose Plan
                </button>
            </div>
        </div>
    </div>

    <section class="bg-white dark:bg-white">
        <div class="container max-w-4xl px-6 py-10 mx-auto">
            <h1 class="text-4xl font-semibold text-center text-black dark:text-black">Frequently asked questions</h1>
            <div class="mt-12 space-y-8">
                <div class="border-2 border-white-100 rounded-lg dark:border-gray-700">
                    <button class="flex items-center justify-between w-full p-8">
                        <h1 class="font-semibold text-black dark:text-black">How i can play for my appoinment ?</h1>
                        <span class="text-gray-400 bg-gray-200 rounded-full">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 12H6" />
                            </svg>
                        </span>
                    </button>
                    <hr class="border-gray-200 dark:border-gray-700">
                    <p class="p-8 text-sm text-black dark:text-black">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptas eaque nobis, fugit odit omnis fugiat deleniti animi ab maxime cum laboriosam recusandae facere dolorum veniam quia pariatur obcaecati illo ducimus?
                    </p>
                </div>
                <div class="border-2 border-gray-100 rounded-lg dark:border-gray-700">
                    <button class="flex items-center justify-between w-full p-8">
                        <h1 class="font-semibold text-black dark:text-black">Is the cost of the appoinment covered by private health insurance?</h1>
                        <span class="text-black bg-blue-500 rounded-full">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                            </svg>
                        </span>
                    </button>
                </div>
                <div class="border-2 border-gray-100 rounded-lg dark:border-gray-700">
                    <button class="flex items-center justify-between w-full p-8">
                        <h1 class="font-semibold text-black dark:text-black">Do i need a referral?</h1>
                        <span class="text-white bg-blue-500 rounded-full">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                            </svg>
                        </span>
                    </button>
                </div>
            </div>
        </div>
    </section>
</div>    
<footer class="flex flex-col items-center justify-between p-6 bg-white dark:bg-white sm:flex-row">
    <a href="#" class="text-xl font-bold text-black transition-colors duration-300 dark:text-black hover:text-black dark:hover:text-black">Brand</a>
    <p class="text-sm text-black dark:text-black">© Copyright 2021. All Rights Reserved.</p>
    <div class="flex -mx-2">
        <a href="#" class="mx-2 text-black transition-colors duration-300 dark:text-black hover:text-blue-500 dark:hover:text-blue-400" aria-label="Reddit">
            <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12C21.9939 17.5203 17.5203 21.9939 12 22ZM6.807 10.543C6.20862 10.5433 5.67102 10.9088 5.45054 11.465C5.23006 12.0213 5.37133 12.6558 5.807 13.066C5.92217 13.1751 6.05463 13.2643 6.199 13.33C6.18644 13.4761 6.18644 13.6229 6.199 13.769C6.199 16.009 8.814 17.831 12.028 17.831C15.242 17.831 17.858 16.009 17.858 13.769C17.8696 13.6229 17.8696 13.4761 17.858 13.33C18.4649 13.0351 18.786 12.3585 18.6305 11.7019C18.475 11.0453 17.8847 10.5844 17.21 10.593H17.157C16.7988 10.6062 16.458 10.7512 16.2 11C15.0625 10.2265 13.7252 9.79927 12.35 9.77L13 6.65L15.138 7.1C15.1931 7.60706 15.621 7.99141 16.131 7.992C16.1674 7.99196 16.2038 7.98995 16.24 7.986C16.7702 7.93278 17.1655 7.47314 17.1389 6.94094C17.1122 6.40873 16.6729 5.991 16.14 5.991C16.1022 5.99191 16.0645 5.99491 16.027 6C15.71 6.03367 15.4281 6.21641 15.268 6.492L12.82 6C12.7983 5.99535 12.7762 5.993 12.754 5.993C12.6094 5.99472 12.4851 6.09583 12.454 6.237L11.706 9.71C10.3138 9.7297 8.95795 10.157 7.806 10.939C7.53601 10.6839 7.17843 10.5422 6.807 10.543ZM12.18 16.524C12.124 16.524 12.067 16.524 12.011 16.524C11.955 16.524 11.898 16.524 11.842 16.524C11.0121 16.5208 10.2054 16.2497 9.542 15.751C9.49626 15.6958 9.47445 15.6246 9.4814 15.5533C9.48834 15.482 9.52348 15.4163 9.579 15.371C9.62737 15.3318 9.68771 15.3102 9.75 15.31C9.81233 15.31 9.87275 15.3315 9.921 15.371C10.4816 15.7818 11.159 16.0022 11.854 16C11.9027 16 11.9513 16 12 16C12.059 16 12.119 16 12.178 16C12.864 16.0011 13.5329 15.7863 14.09 15.386C14.1427 15.3322 14.2147 15.302 14.29 15.302C14.3653 15.302 14.4373 15.3322 14.49 15.386C14.5985 15.4981 14.5962 15.6767 14.485 15.786V15.746C13.8213 16.2481 13.0123 16.5208 12.18 16.523V16.524ZM14.307 14.08H14.291L14.299 14.041C13.8591 14.011 13.4994 13.6789 13.4343 13.2429C13.3691 12.8068 13.6162 12.3842 14.028 12.2269C14.4399 12.0697 14.9058 12.2202 15.1478 12.5887C15.3899 12.9572 15.3429 13.4445 15.035 13.76C14.856 13.9554 14.6059 14.0707 14.341 14.08H14.306H14.307ZM9.67 14C9.11772 14 8.67 13.5523 8.67 13C8.67 12.4477 9.11772 12 9.67 12C10.2223 12 10.67 12.4477 10.67 13C10.67 13.5523 10.2223 14 9.67 14Z">
                </path>
            </svg>
        </a>
        <a href="#" class="mx-2 text-black transition-colors duration-300 dark:text-black hover:text-blue-500 dark:hover:text-blue-400" aria-label="Facebook">
            <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M2.00195 12.002C2.00312 16.9214 5.58036 21.1101 10.439 21.881V14.892H7.90195V12.002H10.442V9.80204C10.3284 8.75958 10.6845 7.72064 11.4136 6.96698C12.1427 6.21332 13.1693 5.82306 14.215 5.90204C14.9655 5.91417 15.7141 5.98101 16.455 6.10205V8.56104H15.191C14.7558 8.50405 14.3183 8.64777 14.0017 8.95171C13.6851 9.25566 13.5237 9.68693 13.563 10.124V12.002H16.334L15.891 14.893H13.563V21.881C18.8174 21.0506 22.502 16.2518 21.9475 10.9611C21.3929 5.67041 16.7932 1.73997 11.4808 2.01722C6.16831 2.29447 2.0028 6.68235 2.00195 12.002Z">
                </path>
            </svg>
        </a>
        <a href="#" class="mx-2 text-black transition-colors duration-300 dark:text-black hover:text-blue-500 dark:hover:text-black" aria-label="Github">
            <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M12.026 2C7.13295 1.99937 2.96183 5.54799 2.17842 10.3779C1.395 15.2079 4.23061 19.893 8.87302 21.439C9.37302 21.529 9.55202 21.222 9.55202 20.958C9.55202 20.721 9.54402 20.093 9.54102 19.258C6.76602 19.858 6.18002 17.92 6.18002 17.92C5.99733 17.317 5.60459 16.7993 5.07302 16.461C4.17302 15.842 5.14202 15.856 5.14202 15.856C5.78269 15.9438 6.34657 16.3235 6.66902 16.884C6.94195 17.3803 7.40177 17.747 7.94632 17.9026C8.49087 18.0583 9.07503 17.99 9.56902 17.713C9.61544 17.207 9.84055 16.7341 10.204 16.379C7.99002 16.128 5.66202 15.272 5.66202 11.449C5.64973 10.4602 6.01691 9.5043 6.68802 8.778C6.38437 7.91731 6.42013 6.97325 6.78802 6.138C6.78802 6.138 7.62502 5.869 9.53002 7.159C11.1639 6.71101 12.8882 6.71101 14.522 7.159C16.428 5.868 17.264 6.138 17.264 6.138C17.6336 6.97286 17.6694 7.91757 17.364 8.778C18.0376 9.50423 18.4045 10.4626 18.388 11.453C18.388 15.286 16.058 16.128 13.836 16.375C14.3153 16.8651 14.5612 17.5373 14.511 18.221C14.511 19.555 14.499 20.631 14.499 20.958C14.499 21.225 14.677 21.535 15.186 21.437C19.8265 19.8884 22.6591 15.203 21.874 10.3743C21.089 5.54565 16.9181 1.99888 12.026 2Z">
                </path>
            </svg>
        </a>
    </div>
</footer>