<div class="card mb-3 bg-white">
    <h1 class="mb-3">PHYS2 - Odor</h1>
    <div class="sm:gid-cols-1 grid gap-4 lg:grid-cols-2">
        <div class="mb-3">
            <label for="phys2_observation">Observation</label>
            <select id="phys2_observation" type="number" name="phys2_observation" required autofocus autocomplete="phys2_observation">
                <option value="No without objectionable color">No objectionable color</option>
                <option value="With objectionable color">With objectionable color</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="phys2_final_result">Final Result</label>
            <input id="phys2_final_result" type="text" name="phys2_final_result" value="{{ $rawData->phys1_observation }}" required autofocus autocomplete="phys2_final_result" readonly>
        </div>

        <div class="mb-3">
            <label for="phys2_final_result_remarks">Final Result Remarks</label>
            <input id="phys2_final_result_remarks" type="text" name="phys2_final_result_remarks" value="{{ $rawData->phys1_observation }}" required autofocus autocomplete="phys2_final_result_remarks" readonly>
        </div>
    </div>
</div>
