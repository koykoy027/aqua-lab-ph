<div class="card mb-3 bg-white">
    <h1 class="mb-3">PHYS4 - Turbidity</h1>
    <div class="sm:gid-cols-1 grid gap-4 lg:grid-cols-2">
        @foreach ($phys4 as $phys4s)
            <div class="mb-3">
                <label for="phys4_instrument_reading_1">Instrument Reading 1</label>
                <input id="phys4_instrument_reading_1" type="number" name="phys4_instrument_reading_1" value="{{ $phys4s->phys4_instrument_reading_1 }}" readonly autofocus autocomplete="phys4_instrument_reading_1">
            </div>

            <div class="mb-3">
                <label for="phys4_instrument_reading_2">Instrument Reading 2</label>
                <input id="phys4_instrument_reading_2" type="number" name="phys4_instrument_reading_2" value="{{ $phys4s->phys4_instrument_reading_2 }}" readonly autofocus autocomplete="phys4_instrument_reading_2">
            </div>

            <div class="mb-3">
                <label for="phys4_instrument_reading_3">Instrument Reading 3</label>
                <input id="phys4_instrument_reading_3" type="number" name="phys4_instrument_reading_3" value="{{ $phys4s->phys4_instrument_reading_3 }}" readonly autofocus autocomplete="phys4_instrument_reading_3">
            </div>

            <div class="mb-3">
                <label for="phys4_average_instrument_reading">Average Instrument Reading</label>
                <input id="phys4_average_instrument_reading" type="text" name="phys4_average_instrument_reading" value="{{ $phys4s->phys4_average_instrument_reading }}" readonly autofocus autocomplete="phys4_average_instrument_reading">
            </div>

            <div class="mb-3">
                <label for="phys4_final_result">Final Result</label>
                <input id="phys4_final_result" type="number" name="phys4_final_result" value="{{ $phys4s->phys4_final_result }}" readonly autofocus autocomplete="phys4_final_result">
            </div>

            <div class="mb-3">
                <label for="phys4_final_result_remarks">Final Result Remarks</label>
                <input id="phys4_final_result_remarks" type="text" name="phys4_final_result_remarks" value="{{ old('phys4_final_result_remarks') }}" readonly autofocus autocomplete="phys4_final_result_remarks">
            </div>
        @endforeach
    </div>
</div>
