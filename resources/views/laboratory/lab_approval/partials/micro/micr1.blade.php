<div class="card mb-3 bg-white">
    <h1 class="mb-3">MICR1 - Heterotrophic Plate Count (HPC)</h1>
    <div class="sm:gid-cols-1 grid gap-4 lg:grid-cols-2">
        @foreach ($micro1 as $micro1s)
            <div class="mb-3">
                <label for="micr1_hpc_plate_a">Plate A Colony Count</label>
                <input id="micr1_hpc_plate_a" type="number" name="micr1_hpc_plate_a" value="{{ $micro1s->micr1_hpc_plate_a }}" readonly autofocus autocomplete="micr1_hpc_plate_a">
            </div>

            <div class="mb-3">
                <label for="micr1_hpc_plate_b">Plate B Colony Count</label>
                <input id="micr1_hpc_plate_b" type="number" name="micr1_hpc_plate_b" value="{{ $micro1s->micr1_hpc_plate_b }}" readonly autofocus autocomplete="micr1_hpc_plate_b">
            </div>

            <div class="mb-3">
                <label for="micr1_hpc_average">Average Colony Count</label>
                <input id="micr1_hpc_average" type="text" name="micr1_hpc_average" value="{{ $micro1s->micr1_hpc_average }}" readonly autofocus autocomplete="micr1_hpc_average">
            </div>

            <div class="mb-3">
                <label for="micr1_hpc_difference">Difference</label>
                <input id="micr1_hpc_difference" type="text" name="micr1_hpc_difference" value="{{ $micro1s->micr1_hpc_difference }}" readonly autofocus autocomplete="micr1_hpc_difference">
            </div>

            <div class="mb-3">
                <label for="micr1_hpc_final_result">Final Result</label>
                <input id="micr1_hpc_final_result" type="text" name="micr1_hpc_final_result" value="{{ $micro1s->micr1_hpc_final_result }}" readonly autofocus autocomplete="micr1_hpc_final_result">
            </div>

            <div class="mb-3">
                <label for="micr1_hpc_remarks">Remarks</label>
                <input id="micr1_hpc_remarks" type="text" name="micr1_hpc_remarks" value="{{ $micro1s->micr1_hpc_remarks }}" readonly autofocus autocomplete="micr1_hpc_remarks">
            </div>
        @endforeach
    </div>
</div>
