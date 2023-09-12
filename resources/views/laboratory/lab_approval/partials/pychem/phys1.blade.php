<div class="card mb-3 bg-white">
    <h1 class="mb-3">PHYS1 - Appearance</h1>
    <div class="sm:gid-cols-1 grid gap-4 lg:grid-cols-2">
        @foreach ($phys1 as $phys1s)
        <div class="mb-3">
            <label for="phys1_observation">Observation</label>
            <input id="phys1_observation" type="number" name="phys1_observation" value="{{ $phys1s->phys1_observation }}" readonly autofocus autocomplete="phys1_observation">

        </div>

        <div class="mb-3">
            <label for="phys1_final_result">Final Result</label>
            <input id="phys1_final_result" type="text" name="phys1_final_result" value="{{ $phys1s->phys1_final_result }}" readonly autofocus autocomplete="phys1_final_result">
        </div>

        <div class="mb-3">
            <label for="phys1_final_result_remarks">Final Result Remarks</label>
            <input id="phys1_final_result_remarks" type="text" name="phys1_final_result_remarks" value="{{ $phys1s->phys1_final_result_remarks }}" readonly autofocus autocomplete="phys1_final_result_remarks">
        </div>
    </div>
    @endforeach
</div>
