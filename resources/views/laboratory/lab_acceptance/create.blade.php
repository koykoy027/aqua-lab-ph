@extends('layouts.app')
@section('title', 'Lab Acceptance Form')
@section('content')
@if ($errors->any())
        <div id="alert-3" class="mb-4 flex rounded-lg bg-red-50 p-4 text-red-800" role="alert">
            <svg aria-hidden="true" class="h-5 w-5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                    clip-rule="evenodd"></path>
            </svg>
            <span class="sr-only">Info</span>
            <div class="ml-3 text-sm font-medium">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </div>
            <button type="button"
                class="-mx-1.5 -my-1.5 ml-auto inline-flex h-8 w-8 rounded-lg bg-red-50 p-1.5 text-red-500 hover:bg-red-200 focus:ring-2 focus:ring-green-400"
                data-dismiss-target="#alert-3" aria-label="Close">
                <span class="sr-only">Close</span>
                <svg aria-hidden="true" class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                        clip-rule="evenodd"></path>
                </svg>
            </button>
        </div>
    @endif

    @if (session()->has('message'))
        <div id="alert-3" class="mb-4 flex rounded-lg bg-green-50 p-4 text-green-800" role="alert">
            <svg aria-hidden="true" class="h-5 w-5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                    clip-rule="evenodd"></path>
            </svg>
            <span class="sr-only">Info</span>
            <div class="ml-3 text-sm font-medium">
                Success! {{ session('message') }}
            </div>
            <button type="button"
                class="-mx-1.5 -my-1.5 ml-auto inline-flex h-8 w-8 rounded-lg bg-green-50 p-1.5 text-green-500 hover:bg-green-200 focus:ring-2 focus:ring-green-400"
                data-dismiss-target="#alert-3" aria-label="Close">
                <span class="sr-only">Close</span>
                <svg aria-hidden="true" class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                        clip-rule="evenodd"></path>
                </svg>
            </button>
        </div>
    @endif

    <form action="{{ route('laboratory.lab-acceptance.store') }}" method="POST">
        @csrf
        <input type="hidden" name="sample_id" type="hidden" value="{{ $requests->analysis_id }}">

        <div class="card mb-3 bg-white">
            <label>@yield('title')</label>

            <div class="sm:gid-cols-1 grid gap-4 lg:grid-cols-3">
                <div class="mb-3">
                    <label for="evaluated_by">Evaluated By</label>
                    <input id="evaluated_by" type="text" name="evaluated_by" value="{{ old('evaluated_by') }}" required
                        autofocus autocomplete="evaluated_by">
                    @error('evaluated_by')
                        <span class="invalid" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="date_evaluated">Date Evaluated</label>
                    <input id="date_evaluated" type="date" name="date_evaluated" value="{{ old('date_evaluated') }}"
                        required autofocus autocomplete="date_evaluated">
                    @error('date_evaluated')
                        <span class="invalid" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="time_evaluated">Time Evaluated</label>
                    <input id="time_evaluated" type="time" name="time_evaluated" value="{{ old('time_evaluated') }}"
                        required autofocus autocomplete="time_evaluated">
                    @error('time_evaluated')
                        <span class="invalid" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="sm:gid-cols-1 grid gap-4 lg:grid-cols-3">
                <div class="mb-3">
                    <label>Sample Condition</label>

                    <div class="mb-4 flex items-center">
                        <input id="complies_with_the_requirement" name="sample_condition" type="checkbox"
                            value="Complies with the requirement"
                            class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-blue-600 focus:ring-blue-500">
                        <label for="complies_with_the_requirement" class="ml-2 text-sm font-medium text-gray-900">Complies
                            with the requirement</label>
                    </div>
                    <div class="mb-4 flex items-center">
                        <input id="leaking_or_with_wet_caps" name="sample_condition" type="checkbox"
                            value="Leaking of with wet caps"
                            class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-blue-600 focus:ring-blue-500">
                        <label for="leaking_or_with_wet_caps" class="ml-2 text-sm font-medium text-gray-900">Leaking of with
                            wet caps</label>
                    </div>
                    <div class="mb-4 flex items-center">
                        <input id="in_another_container" name="sample_condition" type="checkbox"
                            value="In another container"
                            class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-blue-600 focus:ring-blue-500">
                        <label for="in_another_container" class="ml-2 text-sm font-medium text-gray-900">In another
                            container</label>
                    </div>
                    <div class="mb-4 flex items-center">
                        <input id="below_required_volume" name="sample_condition" type="checkbox"
                            value="Below required volume"
                            class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-blue-600 focus:ring-blue-500">
                        <label for="below_required_volume" class="ml-2 text-sm font-medium text-gray-900">Below required
                            volume</label>
                    </div>
                    <div class="mb-4 flex items-center">
                        <input id="expired" name="sample_condition" type="checkbox" value="Expired"
                            class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-blue-600 focus:ring-blue-500">
                        <label for="expired" class="ml-2 text-sm font-medium text-gray-900">Expired</label>
                    </div>

                    @error('sample_condition')
                        <span class="invalid" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="remarks">Remarks</label>
                    <div class="flex flex-col">
                        <div class="mr-4 flex items-center">
                            <input id="remarksAccepted" type="radio" value="Accepted" name="remarks"
                                class="h-4 w-4 border-gray-300 bg-gray-100 text-blue-600 focus:ring-blue-500">
                            <label for="remarksAccepted" class="ml-2 text-sm font-medium text-gray-900">Accepted</label>
                        </div>
                        <div class="mr-4 flex items-center">
                            <input id="remarksConditionallyAccepted" type="radio" value="Conditionally Accepted"
                                name="remarks"
                                class="h-4 w-4 border-gray-300 bg-gray-100 text-blue-600 focus:ring-blue-500">
                            <label for="remarksConditionallyAccepted"
                                class="ml-2 text-sm font-medium text-gray-900">Conditionally Accepted</label>
                        </div>
                        <div class="mr-4 flex items-center">
                            <input id="remarksRejected" type="radio" value="Rejected" name="remarks"
                                class="h-4 w-4 border-gray-300 bg-gray-100 text-blue-600 focus:ring-blue-500" onclick="remarksRejected(this)">
                            <label for="remarksRejected" class="ml-2 text-sm font-medium text-gray-900">Rejected</label>
                        </div>
                    </div>
                    @error('remarks')
                        <span class="invalid" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <div class="mb-3">
                        <label for="if_remarks_are_rejected">If remarks are rejected</label>
                        <input id="if_remarks_are_rejected" type="text" name="if_remarks_are_rejected"
                            value="{{ old('if_remarks_are_rejected') }}" required autofocus
                            autocomplete="if_remarks_are_rejected" readonly>
                        @error('if_remarks_are_rejected')
                            <span class="invalid" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>


                </div>


            </div>
        </div>

        <div class="flex justify-end">
            <button class="btn btn-primary" type="submit">Submit</button>
        </div>
    </form>

@endsection
