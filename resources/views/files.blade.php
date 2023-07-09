<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Files') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                <div>
                    {{-- Search and buttons --}}
                    <div class="flex flex-wrap items-center justify-between mb-4">
                        <div class="flex-grow md:mr-3 mt-4 md:mt-0 w-full md:w-auto order-3 md:order-1">
                            <input type="search" placeholder="Search files and folders"
                                   class="w-full px-3 h-12 border-gray-300 border-2 rounded-lg shadow-sm">
                        </div>
                        <div class="order-2">
                            <div>
                                <button style="background-color: #3490dc; color: white; border-radius: 0.25rem; padding: 0.75rem 1.5rem; margin-right: 0.5rem; transition: background-color 0.2s ease-in-out;"
                                        onmouseover="this.style.backgroundColor='#2779bd'"
                                        onmouseout="this.style.backgroundColor='#3490dc'">
                                    Create Folder
                                </button>
                                <button style="background-color: #38c172; color: white; border-radius: 0.25rem; padding: 0.75rem 1.5rem; margin-right: 0.5rem; transition: background-color 0.2s ease-in-out;"
                                        onmouseover="this.style.backgroundColor='#2d995b'"
                                        onmouseout="this.style.backgroundColor='#38c172'">
                                    Upload Files
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="border-2 border-gray-300 rounded-lg shadow-sm">
                        {{-- breadcrumbs --}}
                        <div class="py-2 px-3">
                            <div class="flex items-center">
                                <a href="" class="font-bold text-gray-400">File Path</a>

                                <svg class="text-gray-300 w-5 h-5 mx-1" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                          d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                          clip-rule="evenodd"></path>
                                </svg>
                            </div>
                        </div>

                        {{-- Table --}}
                        <div class="overflow-auto">
                            <table class="w-full table-fixed">
                                <thead class="bg-gray-100">
                                <tr>
                                    <th class="text-left py-2 px-3">Name</th>
                                    <th class="text-left py-2 px-3 w-2/12">Size</th>
                                    <th class="text-left py-2 px-3 w-2/12">Created</th>
                                    <th class="p-2 w-2/12"></th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr class="border-gray-100 border-b-2 hover:bg-gray-100">
                                    <td class="py-2 px-3 flex items-center">
                                        <svg class="w-6 h-6 text-blue-700" fill="none" stroke="currentColor"
                                             viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                  d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                                        </svg>

                                        <svg class="w-6 h-6 text-blue-700" fill="none" stroke="currentColor"
                                             viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                  d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z"></path>
                                        </svg>
                                        <a href="" class="p-2 font-bold text-blue-600 flex-grow">File/Folder name</a>
                                    </td>
                                    <td class="py-2 px-3">
                                        &mdash;
                                    </td>
                                    <td class="py-2 px-3">
                                        Created at
                                    </td>
                                    <td class="py-2 px-3">
                                        <div class="flex justify-end items-center">
                                            <ul class="flex items-center">
                                            <li class="mr-4">
                                                    <button style="color: #6b7280; font-weight: bold; transition: color 0.2s ease-in-out; margin-right: 1rem;"
                                                            onmouseover="this.style.color='#4b5563'"
                                                            onmouseout="this.style.color='#6b7280'">
                                                        Rename
                                                    </button>
                                                </li>
                                                <li>
                                                    <button style="color: #ef4444; font-weight: bold; transition: color 0.2s ease-in-out;"
                                                            onmouseover="this.style.color='#dc2626'"
                                                            onmouseout="this.style.color='#ef4444'">
                                                        Delete
                                                    </button>
                                                </li>

                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>

                        {{-- Empty state --}}
                        <div class="p-3 text-gray-700">
                            This folder is empty
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
