import React from 'react';
import { Head, Link } from '@inertiajs/react';

interface Props {
    auth: {
        user: any;
    };
    laravelVersion: string;
    phpVersion: string;
}

export default function Welcome({ auth, laravelVersion, phpVersion }: Props) {
    return (
        <>
            <Head title="Welcome" />
            <div className="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 selection:bg-red-500 selection:text-white">
                <div className="max-w-7xl mx-auto p-6 lg:p-8">
                    <div className="flex justify-center">
                        <svg className="w-16 h-16 text-red-500" viewBox="0 0 62 65" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="m61.1409 13.1356c0 2.4138-2.016 4.3712-4.5052 4.3712s-4.5052-1.9574-4.5052-4.3712 2.016-4.3712 4.5052-4.3712 4.5052 1.9574 4.5052 4.3712" fill="currentColor"/>
                            <path d="m33.0545 0c-2.2448 0-4.0635 1.8187-4.0635 4.0635v13.0698c0 2.2448 1.8187 4.0635 4.0635 4.0635s4.0635-1.8187 4.0635-4.0635v-13.0698c0-2.2448-1.8187-4.0635-4.0635-4.0635" fill="currentColor"/>
                            <path d="m33.0545 43.8013c-2.2448 0-4.0635 1.8187-4.0635 4.0635v13.0698c0 2.2448 1.8187 4.0635 4.0635 4.0635s4.0635-1.8187 4.0635-4.0635v-13.0698c0-2.2448-1.8187-4.0635-4.0635-4.0635" fill="currentColor"/>
                            <path d="m47.8338 7.626c-1.5873-1.5873-4.1605-1.5873-5.7478 0l-9.2415 9.2415c-1.5873 1.5873-1.5873 4.1605 0 5.7478s4.1605 1.5873 5.7478 0l9.2415-9.2415c1.5873-1.5873 1.5873-4.1605 0-5.7478" fill="currentColor"/>
                            <path d="m24.0192 42.3847c-1.5873-1.5873-4.1605-1.5873-5.7478 0l-9.2415 9.2415c-1.5873 1.5873-1.5873 4.1605 0 5.7478s4.1605 1.5873 5.7478 0l9.2415-9.2415c1.5873-1.5873 1.5873-4.1605 0-5.7478" fill="currentColor"/>
                            <path d="m18.2714 13.1356c0-2.4138 2.016-4.3712 4.5052-4.3712s4.5052 1.9574 4.5052 4.3712-2.016 4.3712-4.5052 4.3712-4.5052-1.9574-4.5052-4.3712" fill="currentColor"/>
                            <path d="m5.7478 7.626c1.5873-1.5873 4.1605-1.5873 5.7478 0l9.2415 9.2415c1.5873 1.5873 1.5873 4.1605 0 5.7478s-4.1605 1.5873-5.7478 0l-9.2415-9.2415c-1.5873-1.5873-1.5873-4.1605 0-5.7478" fill="currentColor"/>
                            <path d="m42.0318 42.3847c1.5873-1.5873 4.1605-1.5873 5.7478 0l9.2415 9.2415c1.5873 1.5873 1.5873 4.1605 0 5.7478s-4.1605 1.5873-5.7478 0l-9.2415-9.2415c-1.5873-1.5873-1.5873-4.1605 0-5.7478" fill="currentColor"/>
                        </svg>
                    </div>

                    <div className="mt-16">
                        <div className="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8">
                            <div className="scale-100 p-6 bg-white from-gray-700/50 via-transparent rounded-lg shadow-2xl shadow-gray-500/20 flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                                <div>
                                    <div className="h-16 w-16 bg-red-50 flex items-center justify-center rounded-full">
                                        <svg className="w-7 h-7 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C20.832 18.477 19.246 18 17.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                                        </svg>
                                    </div>

                                    <h2 className="mt-6 text-xl font-semibold text-gray-900">Documentation</h2>

                                    <p className="mt-4 text-gray-500 text-sm leading-relaxed">
                                        Laravel has wonderful documentation covering every aspect of the framework. Whether you are new to the framework or have previous experience with Laravel, we recommend reading all of the documentation from beginning to end.
                                    </p>
                                </div>

                                <svg className="w-6 h-6 text-gray-500 ml-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                </svg>
                            </div>

                            <div className="scale-100 p-6 bg-white from-gray-700/50 via-transparent rounded-lg shadow-2xl shadow-gray-500/20 flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                                <div>
                                    <div className="h-16 w-16 bg-red-50 flex items-center justify-center rounded-full">
                                        <svg className="w-7 h-7 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path>
                                        </svg>
                                    </div>

                                    <h2 className="mt-6 text-xl font-semibold text-gray-900">React + Inertia.js</h2>

                                    <p className="mt-4 text-gray-500 text-sm leading-relaxed">
                                        This application is powered by Laravel 11 with React and Inertia.js, providing a modern full-stack development experience with the best of both Laravel's backend capabilities and React's frontend power.
                                    </p>
                                </div>

                                <svg className="w-6 h-6 text-gray-500 ml-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                </svg>
                            </div>
                        </div>
                    </div>

                    <div className="flex justify-center mt-16 px-0 sm:items-center sm:justify-between">
                        <div className="text-center text-sm text-gray-500 sm:text-left">
                            <div className="flex items-center gap-4">
                                <a href="https://github.com/sponsors/taylorotwell" className="group inline-flex items-center hover:text-gray-700 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">
                                    <svg className="w-5 h-5 fill-gray-400 group-hover:fill-gray-600" viewBox="0 0 20 20" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fillRule="evenodd" d="M10 2C5.58 2 2 5.58 2 10c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.013 8.013 0 0018 10c0-4.42-3.58-8-8-8z"></path>
                                    </svg>
                                    Sponsor
                                </a>
                            </div>
                        </div>

                        <div className="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
                            Laravel v{laravelVersion} (PHP v{phpVersion})
                        </div>
                    </div>
                </div>
            </div>
        </>
    );
}
