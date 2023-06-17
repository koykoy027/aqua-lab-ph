<nav class="border-gray-200 bg-white sticky top-0 z-10"">
    <div class="mx-auto flex max-w-screen-xl flex-wrap items-center justify-between p-4">
        <a href="{{ url('/') }}" class="flex items-center">
            <img src="{{ asset('image/branding.png') }}" class="mr-3 w-44" alt="AQUALAB PH" />
            {{-- <span class="self-center whitespace-nowrap text-2xl font-semibold">
                {{ config('app.name') }}
            </span> --}}
        </a>
        <div class="flex items-center md:order-2">
            <button type="button"
                class="mr-3 flex rounded-full bg-gray-800 text-sm focus:ring-4 focus:ring-gray-300 md:mr-0"
                id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown"
                data-dropdown-placement="bottom">
                <span class="sr-only">Open user menu</span>
                <img class="h-8 w-8 rounded-full" src="/docs/images/people/profile-picture-3.jpg" alt="user photo">
            </button>
            <!-- Dropdown menu -->
            <div class="z-50 my-4 hidden list-none divide-y divide-gray-100 rounded-lg bg-white text-base shadow"
                id="user-dropdown">
                <div class="px-4 py-3">
                    <span class="block text-sm text-gray-900">{{ Auth::user()->name }}</span>
                    <span class="block truncate text-sm text-gray-500">{{ Auth::user()->email }}</span>
                </div>
                <ul class="py-2" aria-labelledby="user-menu-button">

                    <li>
                        <a href="{{ route('profile.edit') }}"
                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Profile</a>
                    </li>

                    {{-- <li>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Settings</a>
                    </li>

                    <li>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Earnings</a>
                    </li> --}}

                    <li>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
                            data-modal-target="logout-modal" data-modal-toggle="logout-modal">
                            Sign out
                        </a>
                    </li>

                </ul>
            </div>
            <button data-collapse-toggle="mobile-menu-2" type="button"
                class="ml-1 inline-flex items-center rounded-lg p-2 text-sm text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 md:hidden"
                aria-controls="mobile-menu-2" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="h-6 w-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                        clip-rule="evenodd"></path>
                </svg>
            </button>
        </div>
        <div class="hidden w-full items-center justify-between md:order-1 md:flex md:w-auto" id="mobile-menu-2">
            <ul
                class="mt-4 flex flex-col rounded-lg border border-gray-100 bg-gray-50 p-4 font-medium md:mt-0 md:flex-row md:space-x-8 md:border-0 md:bg-white md:p-0">

                <li>
                    <a href="{{ url('/') }}"
                        class="@php if (url()->current() === url('/')): @endphp @php endif; @endphp block rounded bg-blue-700 py-2 pl-3 pr-4 text-gray-700 text-white md:bg-transparent md:p-0 md:text-blue-700">
                        Dashboard
                    </a>
                </li>
                <li>
                    <button id="dropdownNavbarLink" data-dropdown-toggle="service"
                        class="flex w-full items-center justify-between border-b border-gray-100 py-2 pl-3 pr-4 text-gray-700 hover:bg-gray-50 md:w-auto md:border-0 md:p-0 md:hover:bg-transparent md:hover:text-blue-700">
                        Service <svg class="ml-1 h-5 w-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>
                    <!-- Dropdown menu -->
                    <div id="service"
                        class="z-10 hidden w-44 divide-y divide-gray-100 rounded-lg bg-white font-normal shadow">
                        <ul class="py-2 text-sm text-gray-700" aria-labelledby="dropdownLargeButton">
                            <li>
                                <a href="{{ route('service.add-client-account.create') }}"
                                    class="block px-4 py-2 hover:bg-gray-100">Add Client Account</a>
                            </li>

                            <li>
                                <a href="{{ route('service.add-analysis-request.create') }}"
                                    class="block px-4 py-2 hover:bg-gray-100">Add Analysis Request</a>
                            </li>
                            <li>
                                <a href="{{ route('service.lab-result-status.index') }}"
                                    class="block px-4 py-2 hover:bg-gray-100">Lab Result Status</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <button id="dropdownNavbarLink" data-dropdown-toggle="laboratory"
                        class="flex w-full items-center justify-between border-b border-gray-100 py-2 pl-3 pr-4 text-gray-700 hover:bg-gray-50 md:w-auto md:border-0 md:p-0 md:hover:bg-transparent md:hover:text-blue-700">
                        Laboratory <svg class="ml-1 h-5 w-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>
                    <!-- Dropdown menu -->
                    <div id="laboratory"
                        class="z-10 hidden w-44 divide-y divide-gray-100 rounded-lg bg-white font-normal shadow">
                        <ul class="py-2 text-sm text-gray-700" aria-labelledby="dropdownLargeButton">
                            {{-- <li>
                                <a href="{{ url('laboratory/lab-acceptance') }}" class="block px-4 py-2 hover:bg-gray-100">Lab Acceptance</a>
                            </li> --}}

                            <li>
                                <a href="{{ route('laboratory.lab-lab-work-order.labWorkOrder') }}"
                                    class="block px-4 py-2 hover:bg-gray-100">Lab Work Order</a>
                            </li>
                            <li>
                                <a href="{{ route('laboratory.lab_approval.index') }}"
                                    class="block px-4 py-2 hover:bg-gray-100">Lab Approval</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar"
                        class="flex w-full items-center justify-between border-b border-gray-100 py-2 pl-3 pr-4 text-gray-700 hover:bg-gray-50 md:w-auto md:border-0 md:p-0 md:hover:bg-transparent md:hover:text-blue-700">
                        Records & Reports <svg class="ml-1 h-5 w-5" aria-hidden="true" fill="currentColor"
                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>
                    <!-- Dropdown menu -->
                    <div id="dropdownNavbar"
                        class="z-10 hidden w-44 divide-y divide-gray-100 rounded-lg bg-white font-normal shadow">
                        <ul class="py-2 text-sm text-gray-700" aria-labelledby="dropdownLargeButton">
                            <li>
                                <a href="{{ route('record-and-report.analysis-request.index') }}"
                                    class="block px-4 py-2 hover:bg-gray-100">Analysis Request</a>
                            </li>
                            <li>
                                <a href="{{ route('record-and-report.lab-acceptance.index') }}"
                                    class="block px-4 py-2 hover:bg-gray-100">Lab Acceptance</a>
                            </li>
                            <li>
                                <a href="{{ url('record-and-report/lab-result') }}"
                                    class="block px-4 py-2 hover:bg-gray-100">Lab Results</a>
                            </li>
                            <li>
                                <a href="{{ url('record-and-report/facility') }}"
                                    class="block px-4 py-2 hover:bg-gray-100">Facility</a>
                            </li>
                            <li>
                                <a href="{{ route('record-and-report.record_and_report.client_list.index') }}"
                                    class="block px-4 py-2 hover:bg-gray-100">Client Lists</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li>
                    <button id="dropdownNavbarLink" data-dropdown-toggle="userManagement"
                        class="flex w-full items-center justify-between border-b border-gray-100 py-2 pl-3 pr-4 text-gray-700 hover:bg-gray-50 md:w-auto md:border-0 md:p-0 md:hover:bg-transparent md:hover:text-blue-700">
                        User Management <svg class="ml-1 h-5 w-5" aria-hidden="true" fill="currentColor"
                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>
                    <!-- Dropdown menu -->
                    <div id="userManagement"
                        class="z-10 hidden w-44 divide-y divide-gray-100 rounded-lg bg-white font-normal shadow">
                        <ul class="py-2 text-sm text-gray-700" aria-labelledby="dropdownLargeButton">
                            <li>
                                <a href="{{ url('user-management/user-lists') }}"
                                    class="block px-4 py-2 hover:bg-gray-100">User Lists</a>
                            </li>

                            <li>
                                <a href="{{ route('user-management.role-lists.index') }}"
                                    class="block px-4 py-2 hover:bg-gray-100">Roles</a>
                            </li>

                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>
