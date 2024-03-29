<div class="mb-3 bg-white card">
    <h1 class="mb-3">MICR2 - Thermotolerant Colifom Test</h1>
    <div class="grid gap-4 sm:gid-cols-1 lg:grid-cols-2">
        @foreach ($micro2 as $micro2s)
            <div class="mb-3">
                <label for="micr2_tc_24">No. of Lauryl Tryptose Broth tube with (+) rxn after 24h</label>
                <input id="micr2_tc_24" type="number" step="any" min="0" max="5" name="micr2_tc_24" value="{{ $micro2s->micr2_tc_24 }}"
                    required autofocus autocomplete="micr2_tc_24" onchange="micro2()">
                @error('micr2_tc_24')
                    <span class="invalid" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="micr2_tc_48">No. of Lauryl Tryptose Broth tube with (+) rxn after 48h</label>
                <input id="micr2_tc_48" type="number" step="any" min="0" max="5" name="micr2_tc_48"
                    value="{{ $micro2s->micr2_tc_48 }}" required autofocus autocomplete="micr2_tc_48"
                    onchange="micro2()">
                @error('micr2_tc_48')
                    <span class="invalid" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>


            <div class="mb-3">
                <label for="micr2_ec_24">No. of EC Broth tubes with (+) rxn after 24h</label>
                <input id="micr2_ec_24" type="number" step="any" name="micr2_ec_24"
                    value="{{ $micro2s->micr2_ec_24 }}" required autofocus autocomplete="micr2_ec_24"
                    onchange="micro2()">
                @error('micr2_ec_24')
                    <span class="invalid" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="micr2_tc_final_result">Final Result</label>
                <input id="micr2_tc_final_result" type="text" name="micr2_tc_final_result"
                    value="{{ $micro2s->micr2_tc_final_result }}" required autofocus
                    autocomplete="micr2_tc_final_result" readonly>
                @error('micr2_tc_final_result')
                    <span class="invalid" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="micr2_tc_remarks">Remarks</label>
                <input id="micr2_tc_remarks" type="text" name="micr2_tc_remarks"
                    value="{{ $micro2s->micr2_tc_remarks }}" required autofocus autocomplete="micr2_tc_remarks"
                    readonly>
                @error('micr2_tc_remarks')
                    <span class="invalid" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        @endforeach
    </div>
    {{-- <div class="flex justify-end gap-2">
        <button class="btn btn-primary" name="remarks" value="Testing on-going">Save</button>
        <button class="btn btn-primary" name="remarks" value="For approval">Save and Exit</button>
        <button class="btn btn-primary" name="remarks" value="For releasing">Save and Submit</button>
    </div> --}}

</div>
