<div class="card mb-3 bg-white">
    <h1 class="mb-3">PHYS2 - Odor</h1>
    <div class="sm:gid-cols-1 grid gap-4 lg:grid-cols-2">
        <div class="mb-3">
            <label for="phys2_observation">Observation</label>
            <input autocomplete="phys2_observation" autofocus id="phys2_observation" value="{{ $lab_approval->phys2_observation }}" name="phys2_observation" readonly type="number">
        </div>

        <div class="mb-3">
            <label for="phys2_final_result">Final Result</label>
            <input autocomplete="phys2_final_result" autofocus id="phys2_final_result" name="phys2_final_result" readonly type="text" value="{{ $lab_approval->phys1_observation }}">
        </div>

        <div class="mb-3">
            <label for="phys2_final_result_remarks">Final Result Remarks</label>
            <input autocomplete="phys2_final_result_remarks" autofocus id="phys2_final_result_remarks" name="phys2_final_result_remarks" readonly type="text" value="{{ $lab_approval->phys1_observation }}">
        </div>
    </div>

</div>
