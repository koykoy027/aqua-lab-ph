<div class="card mb-3 bg-white">
    <h1 class="mb-3">MICR3 - Total Coliform</h1>
    <div class="sm:gid-cols-1 grid gap-4 lg:grid-cols-2">
        <div class="mb-3">
            <label for="micr3_lauryl_24">No. of Lauryl Tryptose Broth tube with (+) rxn after 24h</label>
            <input id="micr3_lauryl_24" type="number" name="micr3_lauryl_24" value="{{ $lab_approval->micr3_lauryl_24 }}" readonly autofocus autocomplete="micr3_lauryl_24">
        </div>

        <div class="mb-3">
            <label for="micr3_lauryl_48">No. of Lauryl Tryptose Broth tube with (+) rxn after 48h</label>
            <input id="micr3_lauryl_48" type="number" name="micr3_lauryl_48" value="{{ $lab_approval->micr3_lauryl_48 }}" readonly autofocus autocomplete="micr3_lauryl_48">
        </div>

        <div class="mb-3">
            <label for="micr3_brillant_24">No. of Brillant Green Lauryl Broth tubes with (+) rxn after 24h</label>
            <input id="micr3_brillant_24" type="number" name="micr3_brillant_24" value="{{ $lab_approval->micr3_brillant_24 }}" readonly autofocus autocomplete="micr3_brillant_24">
        </div>

        <div class="mb-3">
            <label for="micr3_brillant_48">No. of Brillant Green Lauryl Broth tubes with (+) rxn after 48h</label>
            <input id="micr3_brillant_48" type="number" name="micr3_brillant_48" value="{{ $lab_approval->micr3_brillant_48 }}" readonly autofocus autocomplete="micr3_brillant_48">
        </div>

        <div class="mb-3">
            <label for="micr3_final_result">Final Result</label>
            <input id="micr3_final_result" type="text" name="micr3_final_result" value="{{ $lab_approval->micr3_final_result }}" readonly autofocus autocomplete="micr3_final_result">
        </div>

        <div class="mb-3">
            <label for="micr3_remarks">Remarks</label>
            <input id="micr3_remarks" type="text" name="micr3_remarks" value="{{ $lab_approval->micr3_remarks }}" readonly autofocus autocomplete="micr3_remarks">
        </div>
    </div>

</div>
