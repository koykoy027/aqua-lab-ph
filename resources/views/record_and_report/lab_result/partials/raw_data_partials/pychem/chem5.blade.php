    <div class="card mb-3 bg-white">
        <h1 class="mb-3">CHEM5 - Arsenic</h1>
        <div class="sm:gid-cols-1 grid gap-4 lg:grid-cols-2">
            @foreach ($chem5 as $chem5s)
                <div class="mb-3">
                    <label for="chem5_instrument_reading_1">Instrument Reading 1</label>
                    <input id="chem5_instrument_reading_1" type="number" name="chem5_instrument_reading_1" value="{{ $chem5s->chem5_instrument_reading_1 }}" readonly autofocus autocomplete="chem5_instrument_reading_1">
                </div>

                <div class="mb-3">
                    <label for="chem5_instrument_reading_2">Instrument Reading 2</label>
                    <input id="chem5_instrument_reading_2" type="number" name="chem5_instrument_reading_2" value="{{ $chem5s->chem5_instrument_reading_2 }}" readonly autofocus autocomplete="chem5_instrument_reading_2">
                </div>

                <div class="mb-3">
                    <label for="chem5_instrument_reading_3">Instrument Reading 3</label>
                    <input id="chem5_instrument_reading_3" type="number" name="chem5_instrument_reading_3" value="{{ $chem5s->chem5_instrument_reading_3 }}" readonly autofocus autocomplete="chem5_instrument_reading_3">
                </div>

                <div class="mb-3">
                    <label for="chem5_average_instrument_reading">Average Instrument Reading</label>
                    <input id="chem5_average_instrument_reading" type="text" name="chem5_average_instrument_reading" value="{{ $chem5s->chem5_average_instrument_reading }}" readonly autofocus autocomplete="chem5_average_instrument_reading">
                </div>

                <div class="mb-3">
                    <label for="chem5_final_result">Final Result</label>
                    <input id="chem5_final_result" type="number" name="chem5_final_result" value="{{ $chem5s->chem5_final_result }}" readonly autofocus autocomplete="chem5_final_result">
                </div>

                <div class="mb-3">
                    <label for="chem5_final_result_remarks">Final Result Remarks</label>
                    <input id="chem5_final_result_remarks" type="text" name="chem5_final_result_remarks" value="{{ $chem5s->chem5_final_result_remarks }}" readonly autofocus autocomplete="chem5_final_result_remarks">
                </div>
            @endforeach
        </div>

    </div>

