<form action="{{ route ('laboratory.lab-work-order-form.micro5', ['analysis_id' => $requests->analysis_id]) }}" method="POST">
    @csrf


    <div class="mb-3 bg-white card">
        <h1 class="mb-3">MICR1 - Heterotrophic Plate Count (HPC)</h1>
        <div class="grid gap-4 sm:gid-cols-1 lg:grid-cols-2">
            <div class="mb-3">
                <label for="micr1_hpc_plate_a">Plate A Colony Count</label>
                <input id="micr1_hpc_plate_a" type="number" name="micr1_hpc_plate_a"
                    value="{{ $rawDataFileValue->micr1_hpc_plate_a }}" required autofocus autocomplete="micr1_hpc_plate_a"
                    onchange="micro1()">
                @error('micr1_hpc_plate_a')
                    <span class="invalid" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="micr1_hpc_plate_b">Plate B Colony Count</label>
                <input id="micr1_hpc_plate_b" type="number" name="micr1_hpc_plate_b"
                    value="{{ $rawDataFileValue->micr1_hpc_plate_b }}" required autofocus autocomplete="micr1_hpc_plate_b"
                    onchange="micro1()">
                @error('micr1_hpc_plate_b')
                    <span class="invalid" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="micr1_hpc_average">Average Colony Count</label>
                <input id="micr1_hpc_average" type="text" name="micr1_hpc_average"
                    value="{{ $rawDataFileValue->micr1_hpc_average }}" required autofocus autocomplete="micr1_hpc_average" readonly>
                @error('micr1_hpc_average')
                    <span class="invalid" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="micr1_hpc_difference">% Difference</label>
                <input id="micr1_hpc_difference" type="text" name="micr1_hpc_difference"
                    value="{{ $rawDataFileValue->micr1_hpc_difference }}" required autofocus autocomplete="micr1_hpc_difference"
                    readonly>
                @error('micr1_hpc_difference')
                    <span class="invalid" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="micr1_hpc_final_result">Final Result</label>
                <input id="micr1_hpc_final_result" type="text" name="micr1_hpc_final_result"
                    value="{{ $rawDataFileValue->micr1_hpc_final_result }}" required autofocus autocomplete="micr1_hpc_final_result"
                    readonly>
                @error('micr1_hpc_final_result')
                    <span class="invalid" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="micr1_hpc_remarks">Remarks</label>
                <input id="micr1_hpc_remarks" type="text" name="micr1_hpc_remarks"
                    value="{{ $rawDataFileValue->micr1_hpc_remarks }}" required autofocus autocomplete="micr1_hpc_remarks"
                    readonly>
                @error('micr1_hpc_remarks')
                    <span class="invalid" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>


        </div>
    </div>

    <div class="mb-3 bg-white card">
        <h1 class="mb-3">MICR2 - Thermotolerant Colifom Test</h1>
        <div class="grid gap-4 sm:gid-cols-1 lg:grid-cols-2">
            <div class="mb-3">
                <label for="micr2_tc_24">No. of Lauryl Tryptose Broth tube with (+) rxn after 24h</label>
                <input id="micr2_tc_24" type="number" name="micr2_tc_24" value="{{ $rawDataFileValue->micr2_tc_24 }}" required
                    autofocus autocomplete="micr2_tc_24" onchange="micro2()">
                @error('micr2_tc_24')
                    <span class="invalid" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="micr2_tc_48">No. of Lauryl Tryptose Broth tube with (+) rxn after 48h</label>
                <input id="micr2_tc_48" type="number" name="micr2_tc_48" value="{{ $rawDataFileValue->micr2_tc_48 }}" required
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
                    value="{{ $rawDataFileValue->micr2_tc_final_result }}" required autofocus autocomplete="micr2_tc_final_result"
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
                    value="{{ $rawDataFileValue->micr2_tc_remarks }}" required autofocus autocomplete="micr2_tc_remarks" readonly>
                @error('micr2_tc_remarks')
                    <span class="invalid" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
    </div>

    <div class="mb-3 bg-white card">
        <h1 class="mb-3">MICR3 - Total Coliform</h1>
        <div class="grid gap-4 sm:gid-cols-1 lg:grid-cols-2">
            <div class="mb-3">
                <label for="micr3_lauryl_24">No. of Lauryl Tryptose Broth tube with (+) rxn after 24h</label>
                <input id="micr3_lauryl_24" type="number" name="micr3_lauryl_24" value="{{ $rawDataFileValue->micr3_lauryl_24 }}" required autofocus
                    autocomplete="micr3_lauryl_24" onchange="micro3()">
                @error('micr3_lauryl_24')
                    <span class="invalid" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="micr3_lauryl_48">No. of Lauryl Tryptose Broth tube with (+) rxn after 48h</label>
                <input id="micr3_lauryl_48" type="number" name="micr3_lauryl_48" value="{{ $rawDataFileValue->micr3_lauryl_48 }}" required
                    autofocus autocomplete="micr3_lauryl_48" onchange="micro3()">
                @error('micr3_lauryl_48')
                    <span class="invalid" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="micr3_brillant_24">No. of Brillant Green Lauryl Broth tubes with (+) rxn after 24h</label>
                <input id="micr3_brillant_24" type="number" name="micr3_brillant_24" value="{{ $rawDataFileValue->micr3_brillant_24 }}" required
                    autofocus autocomplete="micr3_brillant_24" >
                @error('micr3_brillant_24')
                    <span class="invalid" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="micr3_brillant_48">No. of Brillant Green Lauryl Broth tubes with (+) rxn after 48h</label>
                <input id="micr3_brillant_48" type="number" name="micr3_brillant_48" value="{{ $rawDataFileValue->micr3_brillant_48 }}"
                    required autofocus autocomplete="micr3_brillant_48" >
                @error('micr3_brillant_48')
                    <span class="invalid" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="micr3_final_result">Final Result</label>
                <input id="micr3_final_result" type="text" name="micr3_final_result" value="{{ $rawDataFileValue->micr3_final_result }}"
                    required autofocus autocomplete="micr3_final_result" readonly>
                @error('micr3_final_result')
                    <span class="invalid" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="micr3_remarks">Remarks</label>
                <input id="micr3_remarks" type="text" name="micr3_remarks"
                    value="{{ $rawDataFileValue->micr3_remarks }}" required autofocus autocomplete="micr3_remarks" readonly>
                @error('micr3_remarks')
                    <span class="invalid" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

        </div>
    </div>

    <div class="flex justify-end gap-2">
        <button class="btn btn-primary" name="remarks" value="Testing on-going">Save</button>
        <button class="btn btn-primary" name="remarks" value="For approval">Save and Exit</button>
        <button class="btn btn-primary" name="remarks" value="For releasing">Save and Submit</button>
    </div>

</form>
