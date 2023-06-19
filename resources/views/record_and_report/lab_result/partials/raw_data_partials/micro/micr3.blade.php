<div class="card mb-3 bg-white">
    <h1 class="mb-3">MICR3 - Total Coliform</h1>
    <div class="sm:gid-cols-1 grid gap-4 lg:grid-cols-2">
        <div class="mb-3">
            <label for="micr3_lauryl_24">No. of Lauryl Tryptose Broth tube with (+) rxn after 24h</label>
            <input id="micr3_lauryl_24" type="text" name="micr3_lauryl_24" value="{{ $rawData->micr3_lauryl_24 }}" required autofocus autocomplete="micr3_lauryl_24" readonly>
        </div>

        <div class="mb-3">
            <label for="micr3_lauryl_48">No. of Lauryl Tryptose Broth tube with (+) rxn after 48h</label>
            <input id="micr3_lauryl_48" type="text" name="micr3_lauryl_48" value="{{ $rawData->micr3_lauryl_48 }}" required autofocus autocomplete="micr3_lauryl_48" readonly>
        </div>

        <div class="mb-3">
            <label for="micr3_brillant_24">No. of Brillant Green Lauryl Broth tubes with (+) rxn after 24h</label>
            <input id="micr3_brillant_24" type="text" name="micr3_brillant_24" value="{{ $rawData->micr3_brillant_24 }}" required autofocus autocomplete="micr3_brillant_24" readonly>
        </div>

        <div class="mb-3">
            <label for="micr3_brillant_48">No. of Brillant Green Lauryl Broth tubes with (+) rxn after 48h</label>
            <input id="micr3_brillant_48" type="text" name="micr3_brillant_48" value="{{ $rawData->micr3_brillant_48 }}" required autofocus autocomplete="micr3_brillant_48" readonly>
        </div>

        <div class="mb-3">
            <label for="micr3_final_result">Final Result</label>
            <input id="micr3_final_result" type="text" name="micr3_final_result" value="{{ $rawData->micr3_final_result }}" required autofocus autocomplete="micr3_final_result" readonly>
        </div>

        <div class="mb-3">
            <label for="micr3_remarks">Remarks</label>
            <input id="micr3_remarks" type="text" name="micr3_remarks" value="{{ $rawData->micr3_remarks }}" required autofocus autocomplete="micr3_remarks" readonly>
        </div>
    </div>

</div>
