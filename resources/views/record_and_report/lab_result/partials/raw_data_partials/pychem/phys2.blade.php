<div class="card mb-3 bg-white">
    <h1 class="mb-3">PHYS2 - Odor</h1>
    <div class="sm:gid-cols-1 grid gap-4 lg:grid-cols-2">
        @foreach ($phys2 as $phys2s)
            <div class="mb-3">
                <label for="phys2_observation">Observation</label>
                <input id="phys2_observation" type="text" name="phys2_observation" value="{{ $phys2s->phys2_observation }}" readonly autofocus autocomplete="phys2_final_result">
                {{-- <select id="phys2_observation" type="number" name="phys2_observation" autofocus autocomplete="phys2_observation">
                    <option value="No without objectionable color">No objectionable color</option>
                    <option value="With objectionable color">With objectionable color</option>
                </select> --}}
            </div>

            <div class="mb-3">
                <label for="phys2_final_result">Final Result</label>
                <input id="phys2_final_result" type="text" name="phys2_final_result" value="{{ $phys2s->phys2_final_result }}" readonly autofocus autocomplete="phys2_final_result">
            </div>

            <div class="mb-3">
                <label for="phys2_final_result_remarks">Final Result Remarks</label>
                <input id="phys2_final_result_remarks" type="text" name="phys2_final_result_remarks" value="{{ $phys2s->phys2_final_result_remarks }}" readonly autofocus autocomplete="phys2_final_result_remarks">
            </div>
        @endforeach
    </div>
</div>
