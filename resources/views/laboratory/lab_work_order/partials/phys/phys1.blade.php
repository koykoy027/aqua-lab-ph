<form action="{{ route('laboratory.lab-work-order-form.phys1', ['analysis_id' => $requests->analysis_id]) }}" method="POST">
    @csrf

    <div class="card mb-3 bg-white">
        <h1 class="mb-3">PHYS1 - Appearance</h1>
        <div class="sm:gid-cols-1 grid gap-4 lg:grid-cols-2">
            <div class="mb-3">
                <label for="phys1_observation">Observation</label>
                <select id="phys1_observation" type="number" name="phys1_observation" value="{{ old('phys1_observation') }}" required autofocus
                    autocomplete="phys1_observation">
                <option value="Color without objectionable color">Color without objectionable color</option>
                <option value="Not clear and with objectionable color">Not clear and with objectionable color</option>
                </select>
                @error('phys1_observation')
                    <span class="invalid" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="phys1_final_result">Final Result</label>
                <input id="phys1_final_result" type="text" name="phys1_final_result"
                    value="{{ old('phys1_final_result') }}" required autofocus autocomplete="phys1_final_result" readonly>
                @error('phys1_final_result')
                    <span class="invalid" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="phys1_final_result_remarks">Final Result Remarks</label>
                <input id="phys1_final_result_remarks" type="text" name="phys1_final_result_remarks"
                    value="{{ old('phys1_final_result_remarks') }}" required autofocus autocomplete="phys1_final_result_remarks" readonly>
                @error('phys1_final_result_remarks')
                    <span class="invalid" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="flex justify-end">
            <button class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>
