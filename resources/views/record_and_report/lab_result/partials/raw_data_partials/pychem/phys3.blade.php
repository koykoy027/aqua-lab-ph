<div class="card mb-3 bg-white">
    <h1 class="mb-3">PHYS3 - Color, apparent</h1>
    <div class="sm:gid-cols-1 grid gap-4 lg:grid-cols-2">
        @foreach ($phys3 as $phys3s)
            <div class="mb-3">
                <label for="phys3_concentration_of_comparable_color_standard">Concentration of comparable color standard</label>
                <input id="phys3_concentration_of_comparable_color_standard" type="text" name="phys3_concentration_of_comparable_color_standard" value="{{ $phys3s->phys3_concentration_of_comparable_color_standard }}" readonly autofocus autocomplete="phys3_final_result">
                {{-- <select id="phys3_concentration_of_comparable_color_standard" type="number" name="phys3_concentration_of_comparable_color_standard" autofocus autocomplete="phys3_concentration_of_comparable_color_standard">
                    <option value="&lt; 10">&lt; 10</option>
                    <option value="10">10</option>
                    <option value="15">15</option>
                    <option value="20">20</option>
                    <option value="25">25</option>
                    <option value="30">30</option>
                    <option value="40">40</option>
                    <option value="50">50</option>
                    <option value="100">100</option>
                </select> --}}
            </div>

            <div class="mb-3">
                <label for="phys3_final_result">Final Result</label>
                <input id="phys3_final_result" type="text" name="phys3_final_result" value="{{ $phys3s->phys3_final_result }}" readonly autofocus autocomplete="phys3_final_result">
            </div>

            <div class="mb-3">
                <label for="phys3_final_result_remarks">Final Result Remarks</label>
                <input id="phys3_final_result_remarks" type="text" name="phys3_final_result_remarks" value="{{ $phys3s->phys3_final_result_remarks }}" readonly autofocus autocomplete="phys3_final_result_remarks">
            </div>
        @endforeach
    </div>

</div>
