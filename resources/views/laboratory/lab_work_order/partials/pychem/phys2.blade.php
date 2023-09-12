<div class="mb-3 bg-white card">
    <h1 class="mb-3">PHYS2 - Odor</h1>
    <div class="grid gap-4 sm:gid-cols-1 lg:grid-cols-2">
        <div class="mb-3">
            <label for="phys2_observation">Observation</label>
            <select id="phys2_observation" type="number" step="any" name="phys2_observation" required autofocus autocomplete="phys2_observation" onchange="phy2()">
                <option value="No without objectionable color">No objectionable color</option>
                <option value="With objectionable color">With objectionable color</option>
            </select>
            @error('phys2_observation')
                <span class="invalid" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        @foreach ($phys2 as $phys2s)
            <div class="mb-3">
                <label for="phys2_final_result">Final Result</label>
                <input id="phys2_final_result" type="text" name="phys2_final_result" value="{{ $phys2s->phys1_observation }}" required autofocus autocomplete="phys2_final_result" readonly>
                @error('phys2_final_result')
                    <span class="invalid" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="phys2_final_result_remarks">Final Result Remarks</label>
                <input id="phys2_final_result_remarks" type="text" name="phys2_final_result_remarks" value="{{ $phys2s->phys1_observation }}" required autofocus autocomplete="phys2_final_result_remarks" readonly>
                @error('phys2_final_result_remarks')
                    <span class="invalid" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        @endforeach
    </div>
</div>
