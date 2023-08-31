<form action="{{ route('laboratory.lab-work-order-form.micro4', ['analysis_id' => $requests->analysis_id]) }}" method="POST">
    @csrf

    <div class="card mb-3 bg-white">
        <h1 class="mb-3">MICR4 - E. coli Test</h1>
        <div class="sm:gid-cols-1 grid gap-4 lg:grid-cols-2">
            <div class="mb-3">
                <label for="micr4_color_of_the_sample">Color of the sample</label>
                <select id="micr4_color_of_the_sample" name="micr4_color_of_the_sample" required autofocus autocomplete="micr4_color_of_the_sample">
                    <option value="Faint Yellow">Faint Yellow</option>
                    <option value="Intense Yellow">Intense Yellow</option>
                </select>
                @error('micr4_color_of_the_sample')
                    <span class="invalid" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="micr4_fluorescence">Fluorescence</label>
                <select id="micr4_fluorescence" name="micr4_fluorescence" required autofocus autocomplete="micr4_fluorescence">
                    <option value="Fluorescence">Fluorescence</option>
                    <option value="Non-Fluorescence">Non-Fluorescence</option>
                </select>
                @error('micr4_fluorescence')
                    <span class="invalid" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="micr4_final_result">Final Result</label>
                <select id="micr4_final_result" name="micr4_final_result" required autofocus autocomplete="micr4_final_result">
                    <option value="Present">Present</option>
                    <option value="Absent">Absent</option>
                </select>
                @error('micr4_final_result')
                    <span class="invalid" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        {{-- <div class="flex justify-end gap-2">
            <button class="btn btn-primary" name="remarks" value="Testing on-going">Save</button>
            <button class="btn btn-primary" name="remarks" value="For approval">Save and Exit</button>
            <button class="btn btn-primary" name="remarks" value="For releasing">Save and Submit</button>
        </div> --}}

    </div>
</form>
