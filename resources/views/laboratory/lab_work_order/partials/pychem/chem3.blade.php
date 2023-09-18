<div class="mb-3 bg-white card">
    <h1 class="mb-3">CHEM3 - Total Dissolved Solids</h1>
    <div class="grid gap-4 sm:gid-cols-1 lg:grid-cols-2">
        @foreach ($chem3 as $chem3s)
            <div class="mb-3">
                <label for="chem3_initial_wt_of_evaporating_dish_replicate_1">Initial Wt. of Evaporating Dish Replicate 1</label>
                <input id="chem3_initial_wt_of_evaporating_dish_replicate_1" type="number" step="any" name="chem3_initial_wt_of_evaporating_dish_replicate_1" value="{{ $chem3s->chem3_initial_wt_of_evaporating_dish_replicate_1 }}" required autofocus autocomplete="chem3_initial_wt_of_evaporating_dish_replicate_1" onchange="chem3()">
                @error('chem3_initial_wt_of_evaporating_dish_replicate_1')
                    <span class="invalid" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="chem3_final_wt_of_evaporating_dish_replicate_1">Final Wt. of Evaporating Dish Replicate 1</label>
                <input id="chem3_final_wt_of_evaporating_dish_replicate_1" type="number" step="any" name="chem3_final_wt_of_evaporating_dish_replicate_1" value="{{ $chem3s->chem3_final_wt_of_evaporating_dish_replicate_1 }}" required autofocus autocomplete="chem3_final_wt_of_evaporating_dish_replicate_1" onchange="chem3()">
                @error('chem3_final_wt_of_evaporating_dish_replicate_1')
                    <span class="invalid" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="chem3_wt_of_residue_replicate_1">Wt. of Residue Replicate 1</label>
                <input id="chem3_wt_of_residue_replicate_1" type="number" step="any" name="chem3_wt_of_residue_replicate_1" value="{{ $chem3s->chem3_wt_of_residue_replicate_1 }}" required autofocus autocomplete="chem3_wt_of_residue_replicate_1" onchange="chem3()">
                @error('chem3_wt_of_residue_replicate_1')
                    <span class="invalid" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="chem3_initial_wt_of_evaporating_dish_replicate_2">Initial Wt. of Evaporating Dish Replicate 2</label>
                <input id="chem3_initial_wt_of_evaporating_dish_replicate_2" type="number" step="any" name="chem3_initial_wt_of_evaporating_dish_replicate_2" value="{{ $chem3s->chem3_initial_wt_of_evaporating_dish_replicate_2 }}" required autofocus autocomplete="chem3_initial_wt_of_evaporating_dish_replicate_2" onchange="chem3()">
                @error('chem3_initial_wt_of_evaporating_dish_replicate_2')
                    <span class="invalid" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="chem3_final_wt_of_evaporating_dish_replicate_2">Final Wt. of Evaporating Dish Replicate 2</label>
                <input id="chem3_final_wt_of_evaporating_dish_replicate_2" type="number" step="any" name="chem3_final_wt_of_evaporating_dish_replicate_2" value="{{ $chem3s->chem3_final_wt_of_evaporating_dish_replicate_2 }}" required autofocus autocomplete="chem3_final_wt_of_evaporating_dish_replicate_2" onchange="chem3()">
                @error('chem3_final_wt_of_evaporating_dish_replicate_2')
                    <span class="invalid" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="chem3_wt_of_residue_replicate_2">Wt. of Residue Replicate 2</label>
                <input id="chem3_wt_of_residue_replicate_2" type="number" step="any" name="chem3_wt_of_residue_replicate_2" value="{{ $chem3s->chem3_wt_of_residue_replicate_2 }}" required autofocus autocomplete="chem3_wt_of_residue_replicate_2" onchange="chem3()">
                @error('chem3_wt_of_residue_replicate_2')
                    <span class="invalid" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="chem3_average_wt_of_residue">Average Wt. of Residue</label>
                <input id="chem3_average_wt_of_residue" type="text" name="chem3_average_wt_of_residue" value="{{ $chem3s->chem3_average_wt_of_residue }}" required autofocus autocomplete="chem3_average_wt_of_residue" readonly>
                @error('chem3_average_wt_of_residue')
                    <span class="invalid" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="chem3_final_result">Final Result</label>
                <input id="chem3_final_result" type="number" step="any" name="chem3_final_result" value="{{ $chem3s->chem3_final_result }}" required autofocus autocomplete="chem3_final_result" onchange="chem3()">
                @error('chem3_final_result')
                    <span class="invalid" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="chem3_final_result_remarks">Final Result Remarks</label>
                <input id="chem3_final_result_remarks" type="text" name="chem3_final_result_remarks" value="{{ $chem3s->chem3_final_result_remarks }}" required autofocus autocomplete="chem3_final_result_remarks" readonly>
                @error('chem3_final_result_remarks')
                    <span class="invalid" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        @endforeach
    </div>
</div>
