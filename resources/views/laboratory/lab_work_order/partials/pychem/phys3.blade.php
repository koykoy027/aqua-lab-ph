<div class="mb-3 bg-white card">
    <h1 class="mb-3">PHYS3 - Color, apparent</h1>
    <div class="grid gap-4 sm:gid-cols-1 lg:grid-cols-2">
        <div class="mb-3">
            <label for="phys3_concentration_of_comparable_color_standard">Concentration of comparable color standard</label>
            <select id="phys3_concentration_of_comparable_color_standard" name="phys3_concentration_of_comparable_color_standard" required autofocus autocomplete="phys3_concentration_of_comparable_color_standard" onchange="phy3()">
                <option value="&lt; 10">&lt; 10</option>
                <option value="10">10</option>
                <option value="15">15</option>
                <option value="20">20</option>
                <option value="25">25</option>
                <option value="30">30</option>
                <option value="40">40</option>
                <option value="50">50</option>
                <option value="100">100</option>
            </select>
            @error('phys3_concentration_of_comparable_color_standard')
                <span class="invalid" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="mb-3">
            <label for="phys3_final_result">Final Result</label>
            <input id="phys3_final_result" type="text" name="phys3_final_result" value="{{ $rawDataFileValue->phys3_final_result }}" required autofocus autocomplete="phys3_final_result" readonly>
            @error('phys3_final_result')
                <span class="invalid" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="mb-3">
            <label for="phys3_final_result_remarks">Final Result Remarks</label>
            <input id="phys3_final_result_remarks" type="text" name="phys3_final_result_remarks" value="{{ $rawDataFileValue->phys3_final_result_remarks }}" required autofocus autocomplete="phys3_final_result_remarks" readonly>
            @error('phys3_final_result_remarks')
                <span class="invalid" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
</div>