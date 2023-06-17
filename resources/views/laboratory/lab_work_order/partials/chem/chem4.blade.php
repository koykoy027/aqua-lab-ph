<form action="{{ route('laboratory.lab-work-order-form.chem4', ['analysis_id' => $requests->analysis_id]) }}" method="POST">
    @csrf

    <div class="card mb-3 bg-white">
        <h1 class="mb-3">CHEM4 - Chlorine (Residual), as free</h1>
        <div class="sm:gid-cols-1 grid gap-4 lg:grid-cols-2">
            <div class="mb-3">
                <label for="chem4_instrument_reading">Instrument Reading</label>
                <input id="chem4_instrument_reading" type="number" name="chem4_instrument_reading" value="{{ old('chem4_instrument_reading') }}" required autofocus
                    autocomplete="chem4_instrument_reading">
                @error('chem4_instrument_reading')
                    <span class="invalid" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

             <div class="mb-3">
                <label for="chem4_final_result">Final Result</label>
                <input id="chem4_final_result" type="number" name="chem4_final_result" value="{{ old('chem4_final_result') }}" required
                    autofocus autocomplete="chem4_final_result">
                @error('chem4_final_result')
                    <span class="invalid" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="chem4_final_result_remarks">Final Result Remarks</label>
                <input id="chem4_final_result_remarks" type="text" name="chem4_final_result_remarks"
                    value="{{ old('chem4_final_result_remarks') }}" required autofocus autocomplete="chem4_final_result_remarks" readonly>
                @error('chem4_final_result_remarks')
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
