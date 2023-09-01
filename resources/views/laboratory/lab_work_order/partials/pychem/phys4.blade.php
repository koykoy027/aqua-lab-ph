<div class="mb-3 bg-white card">
    <h1 class="mb-3">PHYS4 - Turbidity</h1>
    <div class="grid gap-4 sm:gid-cols-1 lg:grid-cols-2">
        <div class="mb-3">
            <label for="phys4_instrument_reading_1">Instrument Reading 1</label>
            <input id="phys4_instrument_reading_1" type="number" step="any" name="phys4_instrument_reading_1" value="{{ $rawDataFileValue->phys4_instrument_reading_1 }}" required autofocus autocomplete="phys4_instrument_reading_1" onchange="phy4()">
            @error('phys4_instrument_reading_1')
                <span class="invalid" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="mb-3">
            <label for="phys4_instrument_reading_2">Instrument Reading 2</label>
            <input id="phys4_instrument_reading_2" type="number" step="any" name="phys4_instrument_reading_2" value="{{ $rawDataFileValue->phys4_instrument_reading_2 }}" required autofocus autocomplete="phys4_instrument_reading_2" onchange="phy4()">
            @error('phys4_instrument_reading_2')
                <span class="invalid" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="mb-3">
            <label for="phys4_instrument_reading_3">Instrument Reading 3</label>
            <input id="phys4_instrument_reading_3" type="number" step="any" name="phys4_instrument_reading_3" value="{{ $rawDataFileValue->phys4_instrument_reading_3 }}" required autofocus autocomplete="phys4_instrument_reading_3" onchange="phy4()">
            @error('phys4_instrument_reading_3')
                <span class="invalid" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="mb-3">
            <label for="phys4_average_instrument_reading">Average Instrument Reading</label>
            <input id="phys4_average_instrument_reading" type="text" name="phys4_average_instrument_reading" value="{{ $rawDataFileValue->phys4_average_instrument_reading }}" required autofocus autocomplete="phys4_average_instrument_reading" readonly>
            @error('phys4_average_instrument_reading')
                <span class="invalid" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="mb-3">
            <label for="phys4_final_result">Final Result</label>
            <input id="phys4_final_result" type="number" step="any" name="phys4_final_result" value="{{ $rawDataFileValue->phys4_final_result }}" required autofocus autocomplete="phys4_final_result" onchange="phy4()">
            @error('phys4_final_result')
                <span class="invalid" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="mb-3">
            <label for="phys4_final_result_remarks">Final Result Remarks</label>
            <input id="phys4_final_result_remarks" type="text" name="phys4_final_result_remarks" value="{{ old('phys4_final_result_remarks') }}" required autofocus autocomplete="phys4_final_result_remarks" readonly>
            @error('phys4_final_result_remarks')
                <span class="invalid" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
</div>