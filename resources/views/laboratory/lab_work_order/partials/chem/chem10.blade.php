<form action="{{ route('laboratory.lab-work-order-form.chem9', ['analysis_id' => $requests->analysis_id]) }}" method="POST">
    @csrf

    <div class="card mb-3 bg-white">
        <h1 class="mb-3">CHEM10 - Manganese</h1>
        <div class="sm:gid-cols-1 grid gap-4 lg:grid-cols-2">
            <div class="mb-3">
                <label for="chem10_instrument_reading_1">Instrument Reading 1</label>
                <input id="chem10_instrument_reading_1" type="number" name="chem10_instrument_reading_1" value="{{ old('chem10_instrument_reading_1') }}" required autofocus
                    autocomplete="chem10_instrument_reading_1">
                @error('chem10_instrument_reading_1')
                    <span class="invalid" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="chem10_instrument_reading_2">Instrument Reading 2</label>
                <input id="chem10_instrument_reading_2" type="number" name="chem10_instrument_reading_2" value="{{ old('chem10_instrument_reading_2') }}" required
                    autofocus autocomplete="chem10_instrument_reading_2">
                @error('chem10_instrument_reading_2')
                    <span class="invalid" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="chem10_instrument_reading_3">Instrument Reading 3</label>
                <input id="chem10_instrument_reading_3" type="number" name="chem10_instrument_reading_3" value="{{ old('chem10_instrument_reading_3') }}" required
                    autofocus autocomplete="chem10_instrument_reading_3">
                @error('chem10_instrument_reading_3')
                    <span class="invalid" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="chem10_average_instrument_reading">Average Instrument Reading</label>
                <input id="chem10_average_instrument_reading" type="text" name="chem10_average_instrument_reading" value="{{ old('chem10_average_instrument_reading') }}" required
                    autofocus autocomplete="chem10_average_instrument_reading" readonly>
                @error('chem10_average_instrument_reading')
                    <span class="invalid" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="chem10_final_result">Final Result</label>
                <input id="chem10_final_result" type="number" name="chem10_final_result" value="{{ old('chem10_final_result') }}" required
                    autofocus autocomplete="chem10_final_result">
                @error('chem10_final_result')
                    <span class="invalid" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="chem10_final_result_remarks">Final Result Remarks</label>
                <input id="chem10_final_result_remarks" type="text" name="chem10_final_result_remarks"
                    value="{{ old('chem10_final_result_remarks') }}" required autofocus autocomplete="chem10_final_result_remarks" readonly>
                @error('chem10_final_result_remarks')
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
