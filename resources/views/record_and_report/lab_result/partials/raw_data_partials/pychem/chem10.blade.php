<div class="card mb-3 bg-white">
    <h1 class="mb-3">CHEM10 - Manganese</h1>
    <div class="sm:gid-cols-1 grid gap-4 lg:grid-cols-2">
        @foreach ($chem10 as $chem10s)
            <div class="mb-3">
                <label for="chem10_instrument_reading_1">Instrument Reading 1</label>
                <input id="chem10_instrument_reading_1" type="number" name="chem10_instrument_reading_1" value="{{ $chem10s->chem10_instrument_reading_1 }}" readonly autofocus autocomplete="chem10_instrument_reading_1">
            </div>

            <div class="mb-3">
                <label for="chem10_instrument_reading_2">Instrument Reading 2</label>
                <input id="chem10_instrument_reading_2" type="number" name="chem10_instrument_reading_2" value="{{ $chem10s->chem10_instrument_reading_2 }}" readonly autofocus autocomplete="chem10_instrument_reading_2">
            </div>

            <div class="mb-3">
                <label for="chem10_instrument_reading_3">Instrument Reading 3</label>
                <input id="chem10_instrument_reading_3" type="number" name="chem10_instrument_reading_3" value="{{ $chem10s->chem10_instrument_reading_3 }}" readonly autofocus autocomplete="chem10_instrument_reading_3">
            </div>

            <div class="mb-3">
                <label for="chem10_average_instrument_reading">Average Instrument Reading</label>
                <input id="chem10_average_instrument_reading" type="text" name="chem10_average_instrument_reading" value="{{ $chem10s->chem10_average_instrument_reading }}" readonly autofocus autocomplete="chem10_average_instrument_reading" readonly>
            </div>

            <div class="mb-3">
                <label for="chem10_final_result">Final Result</label>
                <input id="chem10_final_result" type="number" name="chem10_final_result" value="{{ $chem10s->chem10_final_result }}" readonly autofocus autocomplete="chem10_final_result">
            </div>

            <div class="mb-3">
                <label for="chem10_final_result_remarks">Final Result Remarks</label>
                <input id="chem10_final_result_remarks" type="text" name="chem10_final_result_remarks" value="{{ $chem10s->chem10_final_result_remarks }}" readonly autofocus autocomplete="chem10_final_result_remarks">
            </div>
        @endforeach
    </div>

</div>
