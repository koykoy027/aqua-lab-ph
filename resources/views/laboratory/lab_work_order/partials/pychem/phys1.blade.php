<div class="mb-3 bg-white card">
    <h1 class="mb-3">PHYS1 - Appearance</h1>
    <div class="grid gap-4 sm:gid-cols-1 lg:grid-cols-2">

        <div class="mb-3">
            <label for="phys1_observation">Observation</label>
                <select id="phys1_observation" type="number" step="any" name="phys1_observation" value="" required autofocus autocomplete="phys1_observation" onchange="phy1()">
                    @foreach ($phys1 as $phys1s)
                        @if ($phys1s->phys1_observation === "Color without objectionable color")
                            <option value="Color without objectionable color" selected>Color without objectionable color</option>
                            <option value="Not clear and with objectionable color">Not clear and with objectionable color</option>
                        @elseif ($phys1s->phys1_observation === "Not clear and with objectionable color")
                            <option value="Color without objectionable color">Color without objectionable color</option>
                            <option value="Not clear and with objectionable color" selected>Not clear and with objectionable color</option>
                        @else
                            <option value="Color without objectionable color">Color without objectionable color</option>
                            <option value="Not clear and with objectionable color">Not clear and with objectionable color</option>
                        @endif
                    @endforeach
                </select>
                @error('phys1_observation')
                    <span class="invalid" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
        </div>

        @foreach ($phys1 as $phys1s)
            <div class="mb-3">
                <label for="phys1_final_result">Final Result</label>
                <input id="phys1_final_result" type="text" name="phys1_final_result" value="{{ $phys1s->phys1_final_result }}" required autofocus autocomplete="phys1_final_result" readonly>
                @error('phys1_final_result')
                    <span class="invalid" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="phys1_final_result_remarks">Final Result Remarks</label>
                <input id="phys1_final_result_remarks" type="text" name="phys1_final_result_remarks" value="{{ $phys1s->phys1_final_result_remarks }}" required autofocus autocomplete="phys1_final_result_remarks" readonly>
                @error('phys1_final_result_remarks')
                    <span class="invalid" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        @endforeach
    </div>
</div>
