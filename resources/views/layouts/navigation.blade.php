<nav class="sticky top-0 z-10 bg-white border-gray-200">
    <div class="flex flex-wrap items-center justify-between max-w-screen-xl p-4 mx-auto">
        <a href="{{ url('/') }}" class="flex items-center">
            <img src="{{ asset('image/branding.png') }}" class="mr-3 w-44" alt="AQUALAB PH" />
        </a>
        <div class="flex items-center md:order-2">
            <!-- User menu button -->
            <button type="button"
                class="flex px-2 py-1 mr-3 text-sm text-white bg-blue-700 rounded-full focus:ring-4 focus:ring-gray-300 md:mr-0"
                id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown"
                data-dropdown-placement="bottom">
                <span class="sr-only">Open user menu</span>
                {{ Auth::user()->name }}
                {{-- <img class="w-8 h-8 rounded-full" src="/docs/images/people/profile-picture-3.jpg" alt="user photo"> --}}
            </button>
            <!-- User dropdown menu -->
            <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow"
                id="user-dropdown">
                <div class="px-4 py-3">
                    <span class="block text-sm text-gray-900">{{ Auth::user()->role }}</span>
                    <span class="block text-sm text-gray-500 truncate">{{ Auth::user()->email }}</span>
                </div>
                <ul class="py-2" aria-labelledby="user-menu-button">
                    <li>
                        <a href="{{ route('profile.edit') }}"
                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Profile</a>
                    </li>
                    <li>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
                            data-modal-target="logout-modal" data-modal-toggle="logout-modal">Sign out</a>
                    </li>
                </ul>
            </div>
            <!-- Mobile menu button -->
            <button data-collapse-toggle="mobile-menu-2" type="button"
                class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 md:hidden"
                aria-controls="mobile-menu-2" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                        clip-rule="evenodd"></path>
                </svg>
            </button>
        </div>
        <!-- Main menu -->
        <div class="items-center justify-between hidden w-full md:order-1 md:flex md:w-auto" id="mobile-menu-2">
            <ul
                class="flex flex-col p-4 mt-4 font-medium border border-gray-100 rounded-lg bg-gray-50 md:mt-0 md:flex-row md:space-x-8 md:border-0 md:bg-white md:p-0">
                <li>
                    <a href="{{ url('/') }}"
                        class="@php if (url()->current() === url('/')): @endphp @php endif; @endphp block rounded bg-blue-700 py-2 pl-3 pr-4 text-gray-700 text-white md:bg-transparent md:p-0 md:text-blue-700">
                        Dashboard
                    </a>
                </li>
                @if (Auth::user()->role === 'Super Admin' or
                        Auth::user()->role === 'Admin Asstistant' or
                        Auth::user()->role === 'FSR' or
                        Auth::user()->role === 'Service Coordinator' or
                        Auth::user()->role === 'Marketing Manager' or
                        Auth::user()->role === 'Sales Manager')
                    <li>
                        <button id="dropdownNavbarLink" data-dropdown-toggle="service"
                            class="flex items-center justify-between w-full py-2 pl-3 pr-4 text-gray-700 border-b border-gray-100 hover:bg-gray-50 md:w-auto md:border-0 md:p-0 md:hover:bg-transparent md:hover:text-blue-700">
                            Service <svg class="w-5 h-5 ml-1" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
                        <!-- Dropdown menu -->
                        <div id="service"
                            class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44">
                            <ul class="py-2 text-sm text-gray-700" aria-labelledby="dropdownLargeButton">
                                @if (Auth::user()->role === 'Super Admin' or
                                        Auth::user()->role === 'Admin Asstistant' or
                                        Auth::user()->role === 'FSR' or
                                        Auth::user()->role === 'Service Coordinator' or
                                        Auth::user()->role === 'Marketing Manager' or
                                        Auth::user()->role === 'Sales Manager')
                                    <li>
                                        <a href="{{ route('service.add-client-account.create') }}"
                                            class="block px-4 py-2 hover:bg-gray-100">Add Client Account</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('service.add-analysis-request.create') }}"
                                            class="block px-4 py-2 hover:bg-gray-100">Analysis Request</a>
                                    </li>
                                @endif
                                <li>
                                    <a href="{{ route('record-and-report.lab-result.table') }}"
                                        class="block px-4 py-2 hover:bg-gray-100">Generate Report</a>
                                </li>
                                <li>
                                    <a href="{{ route('service.schedule-and-sample-information.clientTable') }}"
                                        class="block px-4 py-2 hover:bg-gray-100">Schedule and Sample Information</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                @endif
                @if (Auth::user()->role !== 'Service Coordinator')
                    <li>
                        <!-- Laboratory dropdown menu -->
                        <button id="dropdownNavbarLink" data-dropdown-toggle="laboratory"
                            class="flex items-center justify-between w-full py-2 pl-3 pr-4 text-gray-700 border-b border-gray-100 hover:bg-gray-50 md:w-auto md:border-0 md:p-0 md:hover:bg-transparent md:hover:text-blue-700">
                            Laboratory <svg class="w-5 h-5 ml-1" aria-hidden="true" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
                        <!-- Dropdown menu -->
                        <div id="laboratory"
                            class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44">
                            <ul class="py-2 text-sm text-gray-700" aria-labelledby="dropdownLargeButton">
                                <li aria-labelledby="dropdownNavbarLink">
                                    <button id="doubleDropdownButton" data-dropdown-toggle="labAcceptance"
                                        data-dropdown-placement="right-start" type="button"
                                        class="flex items-center justify-between w-full px-4 py-2 hover:bg-gray-100 ">
                                        Lab Acceptance
                                        <svg class="ml-2.5 h-2.5 w-2.5" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" d="m1 1 4 4 4-4" />
                                        </svg>
                                    </button>
                                    <div id="labAcceptance"
                                        class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44">
                                        <ul class="py-2 text-sm text-gray-700" aria-labelledby="doubleDropdownButton">
                                            @if (Auth::user()->role !== 'Pchem Manager' && Auth::user()->role !== 'Pchem Analyst')
                                                <li>
                                                    <a href="{{ route('service.lab-result-status.micro') }}"
                                                        class="block px-4 py-2 hover:bg-gray-100">
                                                        Micro Parameters
                                                    </a>
                                                </li>
                                            @endif
                                            @if (Auth::user()->role !== 'Micro Manager' && Auth::user()->role !== 'Micro Analyst')
                                                <li>
                                                    <a href="{{ route('service.lab-result-status.pychem') }}"
                                                        class="block px-4 py-2 hover:bg-gray-100">
                                                        Phy-Chem Parameters
                                                    </a>
                                                </li>
                                            @endif
                                        </ul>
                                    </div>
                                </li>

                                <li aria-labelledby="dropdownNavbarLink">
                                    <button id="doubleDropdownButton" data-dropdown-toggle="labWorkOrder"
                                        data-dropdown-placement="right-start" type="button"
                                        class="flex items-center justify-between w-full px-4 py-2 hover:bg-gray-100 ">
                                        Lab Work Order
                                        <svg class="ml-2.5 h-2.5 w-2.5" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                            <path stroke="currentColor" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                                        </svg>
                                    </button>
                                    <div id="labWorkOrder"
                                        class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44">
                                        <ul class="py-2 text-sm text-gray-700" aria-labelledby="doubleDropdownButton">
                                            @if (Auth::user()->role !== 'Pchem Manager' && Auth::user()->role !== 'Pchem Analyst')
                                                <li>
                                                    <a href="{{ route('laboratory.lab-lab-work-order.micro') }}"
                                                        class="block px-4 py-2 hover:bg-gray-100">
                                                        Micro Parameters
                                                    </a>
                                                </li>
                                            @endif
                                            @if (Auth::user()->role !== 'Micro Manager' && Auth::user()->role !== 'Micro Analyst')
                                                <li>
                                                    <a href="{{ route('laboratory.lab-lab-work-order.pychem') }}"
                                                        class="block px-4 py-2 hover:bg-gray-100">
                                                        Phy-Chem Parameters
                                                    </a>
                                                </li>
                                            @endif
                                        </ul>
                                    </div>
                                </li>

                                <li aria-labelledby="dropdownNavbarLink">
                                    <button id="doubleDropdownButton" data-dropdown-toggle="labApproval"
                                        data-dropdown-placement="right-start" type="button"
                                        class="flex items-center justify-between w-full px-4 py-2 hover:bg-gray-100 ">
                                        Lab Approval
                                        <svg class="ml-2.5 h-2.5 w-2.5" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                            <path stroke="currentColor" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                                        </svg>
                                    </button>
                                    <div id="labApproval"
                                        class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44">
                                        <ul class="py-2 text-sm text-gray-700" aria-labelledby="doubleDropdownButton">
                                            @if (Auth::user()->role !== 'Pchem Manager' && Auth::user()->role !== 'Pchem Analyst')
                                                <li>
                                                    <a href="{{ route('laboratory.lab_approval.micro') }}"
                                                        class="block px-4 py-2 hover:bg-gray-100">
                                                        Micro Parameters
                                                    </a>
                                                </li>
                                            @endif
                                            @if (Auth::user()->role !== 'Micro Manager' && Auth::user()->role !== 'Micro Analyst')
                                                <li>
                                                    <a href="{{ route('laboratory.lab_approval.phyChem') }}"
                                                        class="block px-4 py-2 hover:bg-gray-100">
                                                        Phy-Chem Parameters
                                                    </a>
                                                </li>
                                            @endif
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>
                @endif
                @if (Auth::user()->role === 'Super Admin' or
                        Auth::user()->role === 'Admin Asstistant' or
                        Auth::user()->role === 'FSR' or
                        Auth::user()->role === 'Marketing Manager' or
                        Auth::user()->role === 'Sales Manager')
                    <li>
                        <!-- Records & Reports dropdown menu -->
                        <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar"
                            class="flex items-center justify-between w-full py-2 pl-3 pr-4 text-gray-700 border-b border-gray-100 hover:bg-gray-50 md:w-auto md:border-0 md:p-0 md:hover:bg-transparent md:hover:text-blue-700">
                            Records & Reports <svg class="w-5 h-5 ml-1" aria-hidden="true" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
                        <!-- Dropdown menu -->
                        <div id="dropdownNavbar"
                            class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44">
                            <ul class="py-2 text-sm text-gray-700" aria-labelledby="dropdownLargeButton">
                                {{-- <li>
                                    <a href="{{ route('record-and-report.analysis-request.index') }}"
                                        class="block px-4 py-2 hover:bg-gray-100">Analysis Request</a>
                                </li> --}}
                                <li>
                                    <a href="{{ route('record-and-report.lab-acceptance.index') }}"
                                        class="block px-4 py-2 hover:bg-gray-100">Lab Acceptance</a>
                                </li>
                                <li>
                                    <a href="{{ route('record-and-report.lab-result.table') }}"
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
                @endif
                @if (Auth::user()->role === 'Super Admin' or Auth::user()->role === 'Admin Asstistant')
                    <li>
                        <!-- User Management dropdown menu -->
                        <button id="dropdownNavbarLink" data-dropdown-toggle="userManagement"
                            class="flex items-center justify-between w-full py-2 pl-3 pr-4 text-gray-700 border-b border-gray-100 hover:bg-gray-50 md:w-auto md:border-0 md:p-0 md:hover:bg-transparent md:hover:text-blue-700">
                            User Management <svg class="w-5 h-5 ml-1" aria-hidden="true" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
                        <!-- Dropdown menu -->
                        <div id="userManagement"
                            class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44">
                            <ul class="py-2 text-sm text-gray-700" aria-labelledby="dropdownLargeButton">
                                <li>
                                    <a href="{{ url('user-management/user-lists') }}"
                                        class="block px-4 py-2 hover:bg-gray-100">User Lists</a>
                                </li>
                                {{-- <li>
                                    <a href="{{ route('user-management.role-lists.index') }}" class="block px-4 py-2 hover:bg-gray-100">Roles</a>
                                </li> --}}
                            </ul>
                        </div>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>
