{{-- Total Coliform - SMEWW 9223 B. Enzyme Substrate Method --}}
<div class="mb-3 bg-white card">
    <h1 class="mb-3">Total Coliform - SMEWW 9223 B. Enzyme Substrate Method</h1>
    <div class="grid gap-4 sm:gid-cols-1 lg:grid-cols-2">
        <div class="mb-3">
            <label for="micr3_9223b_no_of_yellow_wells_rxn_after_18h">No. of yellow wells rxn after 18h</label>
            <input id="micr3_9223b_no_of_yellow_wells_rxn_after_18h" type="number" step="any" min="0" max="51"
                name="micr3_9223b_no_of_yellow_wells_rxn_after_18h"
                value="{{ $micr3_9223B->micr3_9223b_no_of_yellow_wells_rxn_after_18h }}"
                autocomplete="micr3_9223b_no_of_yellow_wells_rxn_after_18h" 
                onchange="micr3_9223b()"
                required autofocus/>

            @error('micr3_9223b_no_of_yellow_wells_rxn_after_18h')
            <span class="invalid" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>

        <div class="mb-3">
            <label for="micr3_9223b_final_result">Final result</label>
            <input id="micr3_9223b_final_result"
                name="micr3_9223b_final_result"
                value="{{ $micr3_9223B->micr3_9223b_final_result }}"
                autocomplete="micr3_9223b_final_result"
                required readonly autofocus/>

            @error('micr3_9223b_final_result')
            <span class="invalid" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>

        <div class="mb-3">
            <label for="micr3_9223b_remarks">Remarks</label>
            <input id="micr3_9223b_remarks"
                name="micr3_9223b_remarks"
                value="{{ $micr3_9223B->micr3_9223b_remarks }}"
                autocomplete="micr3_9223b_remarks" 
                required readonly autofocus/>

            @error('micr3_9223b_remarks')
            <span class="invalid" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>
</div>
