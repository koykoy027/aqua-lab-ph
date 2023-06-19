<div class="card mb-3 bg-white">
    <h1 class="mb-3">MICR2 - Thermotolerant Colifom Test</h1>
    <div class="sm:gid-cols-1 grid gap-4 lg:grid-cols-2">
        <div class="mb-3">
            <label for="micr2_tc_24">No. of Lauryl Tryptose Broth tube with (+) rxn after 24h</label>
            <input id="micr2_tc_24" type="text" name="micr2_tc_24" value="{{ $rawData->micr2_tc_24 }}" readonly autofocus autocomplete="micr2_tc_24">
        </div>
        <div class="mb-3">
            <label for="micr2_tc_48">No. of Lauryl Tryptose Broth tube with (+) rxn after 48h</label>
            <input id="micr2_tc_48" type="text" name="micr2_tc_48" value="{{ $rawData->micr2_tc_48 }}" readonly autofocus autocomplete="micr2_tc_48">
        </div>
        <div class="mb-3">
            <label for="micr2_tc_final_result">Final Result</label>
            <input id="micr2_tc_final_result" type="text" name="micr2_tc_final_result" value="{{ $rawData->micr2_tc_final_result }}" required autofocus autocomplete="micr2_tc_final_result" readonly>
        </div>
        <div class="mb-3">
            <label for="micr2_tc_remarks">Remarks</label>
            <input id="micr2_tc_remarks" type="text" name="micr2_tc_remarks" value="{{ $rawData->micr2_tc_remarks }}" required autofocus autocomplete="micr2_tc_remarks" readonly>
        </div>
    </div>
</div>
