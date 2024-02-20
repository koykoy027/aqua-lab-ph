{{-- same as micr1 --}}
<div class="mb-3 bg-white card">
    <h1 class="mb-3">MICR1 - Heterotrophic Plate Count (HPC)</h1>
    <div class="grid gap-4 sm:gid-cols-1 lg:grid-cols-2">
        <div class="mb-3">
            <label for="micr5b_hpc_plate_a">Plate A Colony Count</label>
            <input id="micr5b_hpc_plate_a" type="number" step="any" min="0" max="100000" name="micr5b_hpc_plate_a"
                value="{{ $micro5b->micr5b_hpc_plate_a }}" readonly autofocus autocomplete="micr5b_hpc_plate_a"
                onchange="micro5b()">
            @error('micr5b_hpc_plate_a')
                <span class="invalid" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="mb-3">
            <label for="micr5b_hpc_plate_b">Plate B Colony Count</label>
            <input id="micr5b_hpc_plate_b" type="number" step="any" min="0" max="100000" name="micr5b_hpc_plate_b"
                value="{{ $micro5b->micr5b_hpc_plate_b }}" readonly autofocus autocomplete="micr5b_hpc_plate_b"
                onchange="micro5b()">
            @error('micr5b_hpc_plate_b')
                <span class="invalid" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="mb-3">
            <label for="micr5b_hpc_average">Average Colony Count</label>
            <input id="micr5b_hpc_average" type="text" name="micr5b_hpc_average" value="{{ $micro5b->micr5b_hpc_average }}" 
                autofocus autocomplete="micr5b_hpc_average" readonly>
            @error('micr5b_hpc_average')
                <span class="invalid" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="mb-3">
            <label for="micr5b_hpc_difference">Difference</label>
            <input id="micr5b_hpc_difference" type="text" name="micr5b_hpc_difference"
                value="{{ $micro5b->micr5b_hpc_difference }}" required autofocus autocomplete="micr5b_hpc_difference"
                readonly>
            @error('micr5b_hpc_difference')
                <span class="invalid" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="mb-3">
            <label for="micr5b_hpc_final_result">Final Result</label>
            <input id="micr5b_hpc_final_result" type="text" name="micr5b_hpc_final_result"
                value="{{ $micro5b->micr5b_hpc_final_result }}" required autofocus autocomplete="micr5b_hpc_final_result"
                readonly>
            @error('micr5b_hpc_final_result')
                <span class="invalid" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="mb-3">
            <label for="micr5b_hpc_remarks">Remarks</label>
            <input id="micr5b_hpc_remarks" type="text" name="micr5b_hpc_remarks" value="{{ $micro5b->micr5b_hpc_remarks }}"
                required autofocus autocomplete="micr5b_hpc_remarks" readonly>
            @error('micr5b_hpc_remarks')
                <span class="invalid" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
</div>

{{-- Total Coliform - SMEWW 9223 B. Enzyme Substrate Method --}}
<div class="mb-3 bg-white card">
    <h1 class="mb-3">Total Coliform - SMEWW 9223 B. Enzyme Substrate Method</h1>
    <div class="grid gap-4 sm:gid-cols-1 lg:grid-cols-2">
        <div class="mb-3">
            <label for="micr5b_no_of_yellow_wells_rxn_after_18h">No. of yellow wells rxn after 18h</label>
            <input id="micr5b_no_of_yellow_wells_rxn_after_18h" type="number" step="any" min="0" max="100000"
                name="micr5b_no_of_yellow_wells_rxn_after_18h" value="{{ $micro5b->micr5b_no_of_yellow_wells_rxn_after_18h }}"
                readonly autofocus autocomplete="micr5b_no_of_yellow_wells_rxn_after_18h">
            @error('micr5b_no_of_yellow_wells_rxn_after_18h')
            <span class="invalid" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>

    </div>
</div>

{{-- E. coli - SMEWW 9223 B. Enzyme Substrate Method --}}
<div class="mb-3 bg-white card">
    <h1 class="mb-3">E. coli - SMEWW 9223 B. Enzyme Substrate Method</h1>
    <div class="grid gap-4 sm:gid-cols-1 lg:grid-cols-2">
        <div class="mb-3">
            <label for="micr5b_no_of_yellow_flourescent_wells_rxn_after_18hr">No. of yellow/flourescent wells rxn after 18h</label>
            <input id="micr5b_no_of_yellow_flourescent_wells_rxn_after_18hr" type="number" step="any" min="0" max="100000"
                name="micr5b_no_of_yellow_flourescent_wells_rxn_after_18hr" value="{{ $micro5b->micr5b_no_of_yellow_flourescent_wells_rxn_after_18hr }}"
                required autofocus autocomplete="micr5b_no_of_yellow_flourescent_wells_rxn_after_18hr" readonly>
            @error('micr5b_no_of_yellow_flourescent_wells_rxn_after_18hr')
            <span class="invalid" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>

    </div>
</div>