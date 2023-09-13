<div class="mb-3 bg-white card">
    <h1 class="mb-3">PHYS3 - Color, apparent</h1>
    <div class="grid gap-4 sm:gid-cols-1 lg:grid-cols-2">
            <div class="mb-3">
                <label for="phys3_concentration_of_comparable_color_standard">Concentration of comparable color standard</label>
                <select id="phys3_concentration_of_comparable_color_standard" name="phys3_concentration_of_comparable_color_standard" required autofocus autocomplete="phys3_concentration_of_comparable_color_standard" onchange="phy3()">
                    @foreach ($phys3 as $phys3s)
                    @if ($phys3s->phys3_concentration_of_comparable_color_standard === "&lt; 10")
                    <option value="&lt; 10" selected>&lt; 10</option>
                    <option value="10">10</option>
                    <option value="15">15</option>
                    <option value="20">20</option>
                    <option value="25">25</option>
                    <option value="30">30</option>
                    <option value="40">40</option>
                    <option value="50">50</option>
                    <option value="100">100</option>
                    @elseif ($phys3s->phys3_concentration_of_comparable_color_standard === "10")
                        <option value="&lt; 10">&lt; 10</option>
                        <option value="10" selected>10</option>
                        <option value="15">15</option>
                        <option value="20">20</option>
                        <option value="25">25</option>
                        <option value="30">30</option>
                        <option value="40">40</option>
                        <option value="50">50</option>
                        <option value="100">100</option>
                    @elseif ($phys3s->phys3_concentration_of_comparable_color_standard === "15")
                        <option value="&lt; 10">&lt; 10</option>
                        <option value="10">10</option>
                        <option value="15" selected>15</option>
                        <option value="20">20</option>
                        <option value="25">25</option>
                        <option value="30">30</option>
                        <option value="40">40</option>
                        <option value="50">50</option>
                        <option value="100">100</option>
                    @elseif ($phys3s->phys3_concentration_of_comparable_color_standard === "20")
                        <option value="&lt; 10">&lt; 10</option>
                        <option value="10">10</option>
                        <option value="15">15</option>
                        <option value="20" selected>20</option>
                        <option value="25">25</option>
                        <option value="30">30</option>
                        <option value="40">40</option>
                        <option value="50">50</option>
                        <option value="100">100</option>
                    @elseif ($phys3s->phys3_concentration_of_comparable_color_standard === "25")
                        <option value="&lt; 10">&lt; 10</option>
                        <option value="10">10</option>
                        <option value="15">15</option>
                        <option value="20">20</option>
                        <option value="25" selected>25</option>
                        <option value="30">30</option>
                        <option value="40">40</option>
                        <option value="50">50</option>
                        <option value="100">100</option>
                        @elseif ($phys3s->phys3_concentration_of_comparable_color_standard === "30")
                        <option value="&lt; 10">&lt; 10</option>
                        <option value="10">10</option>
                        <option value="15">15</option>
                        <option value="20">20</option>
                        <option value="25">25</option>
                        <option value="30" selected>30</option>
                        <option value="40">40</option>
                        <option value="50">50</option>
                        <option value="100">100</option>
                    @elseif ($phys3s->phys3_concentration_of_comparable_color_standard === "40")
                        <option value="&lt; 10">&lt; 10</option>
                        <option value="10">10</option>
                        <option value="15">15</option>
                        <option value="20">20</option>
                        <option value="25">25</option>
                        <option value="30">30</option>
                        <option value="40">40</option>
                        <option value="50">50</option>
                        <option value="100">100</option>
                    @elseif ($phys3s->phys3_concentration_of_comparable_color_standard === "50")
                        <option value="&lt; 10">&lt; 10</option>
                        <option value="10">10</option>
                        <option value="15">15</option>
                        <option value="20">20</option>
                        <option value="25">25</option>
                        <option value="30">30</option>
                        <option value="40">40</option>
                        <option value="50" selected>50</option>
                        <option value="100">100</option>
                    @elseif ($phys3s->phys3_concentration_of_comparable_color_standard === "100")
                        <option value="&lt; 10">&lt; 10</option>
                        <option value="10">10</option>
                        <option value="15">15</option>
                        <option value="20">20</option>
                        <option value="25">25</option>
                        <option value="30">30</option>
                        <option value="40">40</option>
                        <option value="50">50</option>
                        <option value="100" selected>100</option>
                    @else
                        <option value="&lt; 10">&lt; 10</option>
                        <option value="10">10</option>
                        <option value="15">15</option>
                        <option value="20">20</option>
                        <option value="25">25</option>
                        <option value="30">30</option>
                        <option value="40">40</option>
                        <option value="50">50</option>
                        <option value="100">100</option>
                    @endif
                    @endforeach
                </select>
                @error('phys3_concentration_of_comparable_color_standard')
                    <span class="invalid" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

        @foreach ($phys3 as $phys3s)
            <div class="mb-3">
                <label for="phys3_final_result">Final Result</label>
                <input id="phys3_final_result" type="text" name="phys3_final_result" value="{{ $phys3s->phys3_final_result }}" required autofocus autocomplete="phys3_final_result" readonly>
                @error('phys3_final_result')
                    <span class="invalid" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="phys3_final_result_remarks">Final Result Remarks</label>
                <input id="phys3_final_result_remarks" type="text" name="phys3_final_result_remarks" value="{{ $phys3s->phys3_final_result_remarks }}" required autofocus autocomplete="phys3_final_result_remarks" readonly>
                @error('phys3_final_result_remarks')
                    <span class="invalid" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        @endforeach
    </div>
</div>
