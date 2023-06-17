<form action="{{ route('laboratory.lab-work-order-form.micro2', ['analysis_id' => $requests->analysis_id]) }}" method="POST">
    @csrf

    <div class="card mb-3 bg-white">
        <h1 class="mb-3">MICR2 - Thermotolerant Colifom Test</h1>
        <div class="sm:gid-cols-1 grid gap-4 lg:grid-cols-2">
            <div class="mb-3">
                <label for="micr2_tc_24">No. of Lauryl Tryptose Broth tube with (+) rxn after 24h</label>
                <input id="micr2_tc_24" type="number" name="micr2_tc_24" value="{{ old('micr2_tc_24') }}" required
                    autofocus autocomplete="micr2_tc_24" onchange="micro2()">
                @error('micr2_tc_24')
                    <span class="invalid" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="micr2_tc_48">No. of Lauryl Tryptose Broth tube with (+) rxn after 48h</label>
                <input id="micr2_tc_48" type="number" name="micr2_tc_48" value="{{ old('micr2_tc_48') }}" required
                    autofocus autocomplete="micr2_tc_48" onchange="micro2()">
                @error('micr2_tc_48')
                    <span class="invalid" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="micr2_tc_final_result">Final Result</label>
                <input id="micr2_tc_final_result" type="text" name="micr2_tc_final_result"
                    value="{{ old('micr2_tc_final_result') }}" required autofocus autocomplete="micr2_tc_final_result"
                    readonly>
                @error('micr2_tc_final_result')
                    <span class="invalid" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="micr2_tc_remarks">Remarks</label>
                <input id="micr2_tc_remarks" type="text" name="micr2_tc_remarks"
                    value="{{ old('micr2_tc_remarks') }}" required autofocus autocomplete="micr2_tc_remarks" readonly>
                @error('micr2_tc_remarks')
                    <span class="invalid" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="flex justify-end">
            <button class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>
