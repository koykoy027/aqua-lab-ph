@extends('layouts.app')
@section('title', 'Lab Acceptance Form')
@section('content')

    <form action="{{ route('laboratory.lab-acceptance.store', ['analysis_id' => $requests->analysis_id]) }}" method="POST">
        @csrf
        <input name="analysis_id" type="hidden" value="{{ $requests->analysis_id }}">

        <div class="card mb-3 bg-white">
            <label>@yield('title')</label>

            <div class="sm:gid-cols-1 grid gap-4 lg:grid-cols-3">
                <div class="mb-3">
                    <label for="evaluated_by">Evaluated By</label>
                    <input autocomplete="evaluated_by" autofocus id="evaluated_by" name="evaluated_by" required type="text" value="{{ $acceptance->evaluated_by }}">
                    @error('evaluated_by')
                        <span class="invalid" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="date_evaluated">Date Evaluated</label>
                    <input autocomplete="date_evaluated" autofocus id="date_evaluated" name="date_evaluated" required type="date" value="{{ $acceptance->date_evaluated }}">
                    @error('date_evaluated')
                        <span class="invalid" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="time_evaluated">Time Evaluated</label>
                    <input autocomplete="time_evaluated" autofocus id="time_evaluated" name="time_evaluated" required type="time" value="{{ $acceptance->time_evaluated }}">
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
                        <input class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-blue-600 focus:ring-blue-500" id="complies_with_the_requirement" name="sample_condition" type="checkbox" value="Complies with the requirement">
                        <label class="ml-2 text-sm font-medium text-gray-900" for="complies_with_the_requirement">Complies
                            with the requirement</label>
                    </div>
                    <div class="mb-4 flex items-center">
                        <input class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-blue-600 focus:ring-blue-500" id="leaking_or_with_wet_caps" name="sample_condition" type="checkbox" value="Leaking of with wet caps">
                        <label class="ml-2 text-sm font-medium text-gray-900" for="leaking_or_with_wet_caps">Leaking of with
                            wet caps</label>
                    </div>
                    <div class="mb-4 flex items-center">
                        <input class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-blue-600 focus:ring-blue-500" id="in_another_container" name="sample_condition" type="checkbox" value="In another container">
                        <label class="ml-2 text-sm font-medium text-gray-900" for="in_another_container">In another
                            container</label>
                    </div>
                    <div class="mb-4 flex items-center">
                        <input class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-blue-600 focus:ring-blue-500" id="below_required_volume" name="sample_condition" type="checkbox" value="Below required volume">
                        <label class="ml-2 text-sm font-medium text-gray-900" for="below_required_volume">Below required
                            volume</label>
                    </div>
                    <div class="mb-4 flex items-center">
                        <input class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-blue-600 focus:ring-blue-500" id="expired" name="sample_condition" type="checkbox" value="Expired">
                        <label class="ml-2 text-sm font-medium text-gray-900" for="expired">Expired</label>
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
                            <input class="h-4 w-4 border-gray-300 bg-gray-100 text-blue-600 focus:ring-blue-500" id="remarksAccepted" name="remarks" type="radio" value="Accepted" onchange="test(this.value)">
                            <label class="ml-2 text-sm font-medium text-gray-900" for="remarksAccepted">Accepted</label>
                        </div>
                        <div class="mr-4 flex items-center">
                            <input class="h-4 w-4 border-gray-300 bg-gray-100 text-blue-600 focus:ring-blue-500" id="remarksConditionallyAccepted" name="remarks" type="radio" value="Conditionally Accepted" onchange="test(this.value)">
                            <label class="ml-2 text-sm font-medium text-gray-900" for="remarksConditionallyAccepted">Conditionally Accepted</label>
                        </div>
                        <div class="mr-4 flex items-center">
                            <input class="h-4 w-4 border-gray-300 bg-gray-100 text-blue-600 focus:ring-blue-500" id="remarksRejected" name="remarks" type="radio" value="Rejected" onchange="test(this.value)">
                            <label class="ml-2 text-sm font-medium text-gray-900" for="remarksRejected">Rejected</label>
                        </div>
                    </div>
                    @error('remarks')
                        <span class="invalid" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <div class="mb-3">
                        <label for="if_remarks_are_rejected">If remarks are rejected</label>
                        <input autocomplete="if_remarks_are_rejected" autofocus id="if_remarks_are_rejected" name="if_remarks_are_rejected" readonly required type="text" value="{{ $acceptance->if_remarks_are_rejected }}">
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
