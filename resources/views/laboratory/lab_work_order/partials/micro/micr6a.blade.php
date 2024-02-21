<div class="mb-3 bg-white card">
    <h1 class="mb-3">MICR6A - Legionella pneumophila</h1>
    <div class="grid gap-4 sm:gid-cols-1 lg:grid-cols-2">
        <div class="mb-3">
            <label for="micro6a_hpc_plate_a">Plate A Colony Count</label>
            <input id="micro6a_hpc_plate_a" type="number" step="any" min="0" max="100000" name="micro6a_hpc_plate_a"
                value="{{ $micro6a->micro6a_hpc_plate_a }}" required autofocus autocomplete="micro6a_hpc_plate_a"
                onchange="micro6a()">
            @error('micro6a_hpc_plate_a')
                <span class="invalid" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="mb-3">
            <label for="micro6a_hpc_plate_b">Plate B Colony Count</label>
            <input id="micro6a_hpc_plate_b" type="number" step="any" min="0" max="100000" name="micro6a_hpc_plate_b"
                value="{{ $micro6a->micro6a_hpc_plate_b }}" required autofocus autocomplete="micro6a_hpc_plate_b"
                onchange="micro6a()">
            @error('micro6a_hpc_plate_b')
                <span class="invalid" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="mb-3">
            <label for="micro6a_hpc_average">Average Colony Count</label>
            <input id="micro6a_hpc_average" type="text" name="micro6a_hpc_average"
                value="{{ $micro6a->micro6a_hpc_average }}" required autofocus autocomplete="micro6a_hpc_average"
                readonly>
            @error('micro6a_hpc_average')
                <span class="invalid" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="mb-3">
            <label for="micro6a_hpc_final_result">Final Result</label>
            <input id="micro6a_hpc_final_result" type="text" name="micro6a_hpc_final_result"
                value="{{ $micro6a->micro6a_hpc_final_result }}" required autofocus
                autocomplete="micro6a_hpc_final_result" onchange="micro6a()">
            @error('micro6a_hpc_final_result')
                <span class="invalid" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="mb-3">
            <label for="micro6a_hpc_remarks">Remarks</label>
            <input id="micro6a_hpc_remarks" type="text" name="micro6a_hpc_remarks"
                value="{{ $micro6a->micro6a_hpc_remarks }}" required autofocus autocomplete="micro6a_hpc_remarks"
                readonly>
            @error('micro6a_hpc_remarks')
                <span class="invalid" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
</div>
