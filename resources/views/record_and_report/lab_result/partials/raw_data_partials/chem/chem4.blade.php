<div class="card mb-3 bg-white">
    <h1 class="mb-3">CHEM4 - Chlorine (Residual), as free</h1>
    <div class="sm:gid-cols-1 grid gap-4 lg:grid-cols-2">
        <div class="mb-3">
            <label for="chem4_instrument_reading">Instrument Reading</label>
            <input id="chem4_instrument_reading" type="number" name="chem4_instrument_reading" value="{{ $rawData->chem4_instrument_reading }}" required autofocus autocomplete="chem4_instrument_reading">
        </div>

        <div class="mb-3">
            <label for="chem4_final_result">Final Result</label>
            <input id="chem4_final_result" type="number" name="chem4_final_result" value="{{ $rawData->chem4_final_result }}" required autofocus autocomplete="chem4_final_result">
        </div>

        <div class="mb-3">
            <label for="chem4_final_result_remarks">Final Result Remarks</label>
            <input id="chem4_final_result_remarks" type="text" name="chem4_final_result_remarks" value="{{ $rawData->chem4_final_result_remarks }}" required autofocus autocomplete="chem4_final_result_remarks" readonly>
        </div>
    </div>
</div>
