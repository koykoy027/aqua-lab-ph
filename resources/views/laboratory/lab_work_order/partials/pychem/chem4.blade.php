

<div class="mb-3 bg-white card">
    <h1 class="mb-3">CHEM4 - Chlorine (Residual), as free</h1>
    <div class="grid gap-4 sm:gid-cols-1 lg:grid-cols-2">
        @foreach ($chem4 as $chem4s)
            <div class="mb-3">
                <label for="chem4_instrument_reading">Instrument Reading</label>
                <input id="chem4_instrument_reading" type="number" step="any" name="chem4_instrument_reading" value="{{ $chem4s->chem4_instrument_reading }}" required autofocus autocomplete="chem4_instrument_reading" onchange="chem4()">
                @error('chem4_instrument_reading')
                    <span class="invalid" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="chem4_final_result">Final Result</label>
                <input id="chem4_final_result" type="number" step="any" name="chem4_final_result" value="{{ $chem4s->chem4_final_result }}" required autofocus autocomplete="chem4_final_result" onchange="chem4()">
                @error('chem4_final_result')
                    <span class="invalid" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="chem4_final_result_remarks">Final Result Remarks</label>
                <input id="chem4_final_result_remarks" type="text" name="chem4_final_result_remarks" value="{{ $chem4s->chem4_final_result_remarks }}" required autofocus autocomplete="chem4_final_result_remarks" readonly>
                @error('chem4_final_result_remarks')
                    <span class="invalid" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        @endforeach
    </div>
</div>
