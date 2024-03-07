{{-- E. coli - SMEWW 9223 B. Enzyme Substrate Method --}}
<div class="mb-3 bg-white card">
    <h1 class="mb-3">E. coli - SMEWW 9223 B. Enzyme Substrate Method</h1>
    <div class="grid gap-4 sm:gid-cols-1 lg:grid-cols-2">
        <div class="mb-3">
            <label for="micr4_9223b_no_of_yellow_flourescent_wells_rxn_after_18h">No. of yellow/flourescent wells rxn after 18h</label>
            <input id="micr4_9223b_no_of_yellow_flourescent_wells_rxn_after_18h" type="number" step="any" min="0" max="51"
                name="micr4_9223b_no_of_yellow_flourescent_wells_rxn_after_18h"
                value="{{ $micr4_9223B->micr4_9223b_no_of_yellow_flourescent_wells_rxn_after_18h }}"
                autocomplete="micr4_9223b_no_of_yellow_flourescent_wells_rxn_after_18h" 
                onchange="micr4_9223b()"
                required autofocus/>

            @error('micr4_9223b_no_of_yellow_flourescent_wells_rxn_after_18h')
            <span class="invalid" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>

        <div class="mb-3">
            <label for="micr4_9223b_final_result">Final result</label>
            <input id="micr4_9223b_final_result"
                name="micr4_9223b_final_result"
                value="{{ $micr4_9223B->micr4_9223b_final_result }}"
                autocomplete="micr4_9223b_final_result"
                required readonly autofocus/>

            @error('micr4_9223b_final_result')
            <span class="invalid" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>

        <div class="mb-3">
            <label for="micr4_9223b_remarks">Remarks</label>
            <input id="micr4_9223b_remarks"
                name="micr4_9223b_remarks"
                value="{{ $micr4_9223B->micr4_9223b_remarks }}"
                autocomplete="micr4_9223b_remarks" 
                required readonly autofocus/>

            @error('micr4_9223b_remarks')
            <span class="invalid" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>
</div>

