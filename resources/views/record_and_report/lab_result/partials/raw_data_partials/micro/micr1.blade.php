<div class="card mb-3 bg-white">
    <h1 class="mb-3">MICR1 - Heterotrophic Plate Count (HPC)</h1>
    <div class="sm:gid-cols-1 grid gap-4 lg:grid-cols-2">
        <div class="mb-3">
            <label for="micr1_hpc_plate_a">Plate A Colony Count</label>
            <input id="micr1_hpc_plate_a" type="text" name="micr1_hpc_plate_a" value="{{ $rawData->micr1_hpc_plate_a }}" required autofocus autocomplete="micr1_hpc_plate_a" readonly>
        </div>

        <div class="mb-3">
            <label for="micr1_hpc_plate_b">Plate B Colony Count</label>
            <input id="micr1_hpc_plate_b" type="text" name="micr1_hpc_plate_b" value="{{ $rawData->micr1_hpc_plate_b }}" required autofocus autocomplete="micr1_hpc_plate_b" readonly>
        </div>

        <div class="mb-3">
            <label for="micr1_hpc_average">Average Colony Count</label>
            <input id="micr1_hpc_average" type="text" name="micr1_hpc_average" value="{{ $rawData->micr1_hpc_average }}" required autofocus autocomplete="micr1_hpc_average" readonly>
        </div>

        <div class="mb-3">
            <label for="micr1_hpc_difference">Difference</label>
            <input id="micr1_hpc_difference" type="text" name="micr1_hpc_difference" value="{{ $rawData->micr1_hpc_difference }}" required autofocus autocomplete="micr1_hpc_difference" readonly>
        </div>

        <div class="mb-3">
            <label for="micr1_hpc_final_result">Final Result</label>
            <input id="micr1_hpc_final_result" type="text" name="micr1_hpc_final_result" value="{{ $rawData->micr1_hpc_final_result }}" required autofocus autocomplete="micr1_hpc_final_result" readonly>
        </div>

        <div class="mb-3">
            <label for="micr1_hpc_remarks">Remarks</label>
            <input id="micr1_hpc_remarks" type="text" name="micr1_hpc_remarks" value="{{ $rawData->micr1_hpc_remarks }}" required autofocus autocomplete="micr1_hpc_remarks" readonly>
        </div>
    </div>
</div>
