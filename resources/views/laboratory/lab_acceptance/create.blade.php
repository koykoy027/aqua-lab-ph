@extends('layouts.app')
@section('title', 'Lab Acceptance Form')
@section('content')

    <form action="{{ route('laboratory.lab-acceptance.store', ['analysis_id' => $requests->analysis_id]) }}" method="POST">
        @csrf
        <input type="hidden" name="analysis_id" value="{{ $requests->analysis_id }}">

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
