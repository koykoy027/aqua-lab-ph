<div class="mb-3 bg-white card">
    <h1 class="mb-3">CHEM5 - Arsenic</h1>
    <div class="grid gap-4 sm:gid-cols-1 lg:grid-cols-2">
        @foreach ($chem5 as $chem5s)
            <div class="mb-3">
                <label for="chem5_instrument_reading_1">Instrument Reading 1</label>
                <input id="chem5_instrument_reading_1" type="number" step="any" name="chem5_instrument_reading_1" value="{{ $chem5s->chem5_instrument_reading_1 }}" required autofocus autocomplete="chem5_instrument_reading_1" onchange="chem5()">
                @error('chem5_instrument_reading_1')
                    <span class="invalid" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="chem5_instrument_reading_2">Instrument Reading 2</label>
                <input id="chem5_instrument_reading_2" type="number" step="any" name="chem5_instrument_reading_2" value="{{ $chem5s->chem5_instrument_reading_2 }}" required autofocus autocomplete="chem5_instrument_reading_2" onchange="chem5()">
                @error('chem5_instrument_reading_2')
                    <span class="invalid" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="chem5_instrument_reading_3">Instrument Reading 3</label>
                <input id="chem5_instrument_reading_3" type="number" step="any" name="chem5_instrument_reading_3" value="{{ $chem5s->chem5_instrument_reading_3 }}" required autofocus autocomplete="chem5_instrument_reading_3" onchange="chem5()">
                @error('chem5_instrument_reading_3')
                    <span class="invalid" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="chem5_average_instrument_reading">Average Instrument Reading</label>
                <input id="chem5_average_instrument_reading" type="text" name="chem5_average_instrument_reading" value="{{ $chem5s->chem5_average_instrument_reading }}" required autofocus autocomplete="chem5_average_instrument_reading" readonly>
                @error('chem5_average_instrument_reading')
                    <span class="invalid" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="chem5_final_result">Final Result</label>
                <input id="chem5_final_result" type="number" step="any" name="chem5_final_result" value="{{ $chem5s->chem5_final_result }}" required autofocus autocomplete="chem5_final_result" onchange="chem5()">
                @error('chem5_final_result')
                    <span class="invalid" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="chem5_final_result_remarks">Final Result Remarks</label>
                <input id="chem5_final_result_remarks" type="text" name="chem5_final_result_remarks" value="{{ $chem5s->chem5_final_result_remarks }}" required autofocus autocomplete="chem5_final_result_remarks" readonly>
                @error('chem5_final_result_remarks')
                    <span class="invalid" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        @endforeach
    </div>
</div>
