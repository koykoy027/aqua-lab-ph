<div class="card mb-3 bg-white">
    <h1 class="mb-3">MICR2 - Thermotolerant Colifom Test</h1>
    <div class="sm:gid-cols-1 grid gap-4 lg:grid-cols-2">
        @foreach ($micro2 as $micro2s)
            <div class="mb-3">
                <label for="micr2_tc_24">No. of Lauryl Tryptose Broth tube with (+) rxn after 24h</label>
                <input id="micr2_tc_24" type="text" name="micr2_tc_24" value="{{ $micro2s->micr2_tc_24 }}" readonly
                    autofocus autocomplete="micr2_tc_24">
            </div>
            <div class="mb-3">
                <label for="micr2_tc_48">No. of Lauryl Tryptose Broth tube with (+) rxn after 48h</label>
                <input id="micr2_tc_48" type="text" name="micr2_tc_48" value="{{ $micro2s->micr2_tc_48 }}" readonly
                    autofocus autocomplete="micr2_tc_48">
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
            </div>
            <div class="mb-3">
                <label for="micr2_tc_remarks">Remarks</label>
                <input id="micr2_tc_remarks" type="text" name="micr2_tc_remarks"
                    value="{{ $micro2s->micr2_tc_remarks }}" required autofocus autocomplete="micr2_tc_remarks"
                    readonly>
            </div>
        @endforeach
    </div>
</div>
