<form action="{{ route('laboratory.lab-work-order-form.micro3', ['analysis_id' => $requests->analysis_id]) }}" method="POST">
    @csrf

    <div class="card mb-3 bg-white">
        <h1 class="mb-3">MICR3 - Total Coliform</h1>
        <div class="sm:gid-cols-1 grid gap-4 lg:grid-cols-2">
            <div class="mb-3">
                <label for="micr3_lauryl_24">No. of Lauryl Tryptose Broth tube with (+) rxn after 24h</label>
                <input id="micr3_lauryl_24" type="number" name="micr3_lauryl_24" value="{{ old('micr3_lauryl_24') }}" required autofocus
                    autocomplete="micr3_lauryl_24" onchange="micro3()">
                @error('micr3_lauryl_24')
                    <span class="invalid" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="micr3_lauryl_48">No. of Lauryl Tryptose Broth tube with (+) rxn after 48h</label>
                <input id="micr3_lauryl_48" type="number" name="micr3_lauryl_48" value="{{ old('micr3_lauryl_48') }}" required
                    autofocus autocomplete="micr3_lauryl_48" onchange="micro3()">
                @error('micr3_lauryl_48')
                    <span class="invalid" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="micr3_brillant_24">No. of Brillant Green Lauryl Broth tubes with (+) rxn after 24h</label>
                <input id="micr3_brillant_24" type="number" name="micr3_brillant_24" value="{{ old('micr3_brillant_24') }}" required
                    autofocus autocomplete="micr3_brillant_24" >
                @error('micr3_brillant_24')
                    <span class="invalid" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="micr3_brillant_48">No. of Brillant Green Lauryl Broth tubes with (+) rxn after 48h</label>
                <input id="micr3_brillant_48" type="number" name="micr3_brillant_48" value="{{ old('micr3_brillant_48') }}"
                    required autofocus autocomplete="micr3_brillant_48" >
                @error('micr3_brillant_48')
                    <span class="invalid" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="micr3_final_result">Final Result</label>
                <input id="micr3_final_result" type="text" name="micr3_final_result" value="{{ old('micr3_final_result') }}"
                    required autofocus autocomplete="micr3_final_result" readonly>
                @error('micr3_final_result')
                    <span class="invalid" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="micr3_remarks">Remarks</label>
                <input id="micr3_remarks" type="text" name="micr3_remarks"
                    value="{{ old('micr3_remarks') }}" required autofocus autocomplete="micr3_remarks" readonly>
                @error('micr3_remarks')
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
