<div class="mb-3 bg-white card">
    <h1 class="mb-3">MICR4 - E. coli Test</h1>
    <div class="grid gap-4 sm:gid-cols-1 lg:grid-cols-2">
        <div class="mb-3">
            <label for="micr4_color_of_the_sample">Color of the sample</label>
            <select id="micr4_color_of_the_sample" value="" name="micr4_color_of_the_sample" required autofocus
                autocomplete="micr4_color_of_the_sample">
                @foreach ($micro4 as $micro4s)
                    @if ($micro4s->micr4_color_of_the_sample == 'Faint Yellow')
                        <option value="" disabled>Select Color of the sample</option>
                        <option value="Faint Yellow" selected>Faint Yellow</option>
                        <option value="Intense Yellow">Intense Yellow</option>
                    @elseif ($micro4s->micr4_color_of_the_sample == 'Intense Yellow')
                        <option value="" disabled>Select Color of the sample</option>
                        <option value="Faint Yellow">Faint Yellow</option>
                        <option value="Intense Yellow" selected>Intense Yellow</option>
                    @else
                        <option value="" disabled selected>Select Color of the sample</option>
                        <option value="Faint Yellow">Faint Yellow</option>
                        <option value="Intense Yellow">Intense Yellow</option>
                    @endif
                @endforeach
            </select>
            @error('micr4_color_of_the_sample')
            <span class="invalid" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>

        <div class="mb-3">
            <label for="micr4_fluorescence">Fluorescence</label>
            <select id="micr4_fluorescence" name="micr4_fluorescence" required autofocus
                autocomplete="micr4_fluorescence" onchange="micro4()">

                @foreach ($micro4 as $micro4s)
                    @if ($micro4s->micr4_fluorescence == 'Fluorescence')
                        <option value="" disabled>Select Fluorescence</option>
                        <option value="Fluorescence" selected>Fluorescence</option>
                        <option value="Non-Fluorescence">Non-Fluorescence</option>
                    @elseif ($micro4s->micr4_fluorescence == 'Non-Fluorescence')
                        <option value="" disabled>Select Fluorescence</option>
                        <option value="Fluorescence">Fluorescence</option>
                        <option value="Non-Fluorescence" selected>Non-Fluorescence</option>
                    @else
                        <option value="" disabled selected>Select Fluorescence</option>
                        <option value="Fluorescence">Fluorescence</option>
                        <option value="Non-Fluorescence">Non-Fluorescence</option>
                    @endif
                @endforeach
            </select>
            @error('micr4_fluorescence')
            <span class="invalid" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>

        @foreach ($micro4 as $micro4s)
            <div class="mb-3">
                <label for="micr4_final_result">Final Result</label>
                <input id="micr4_final_result" value="{{ $micro4s->micr4_final_result }}" name="micr4_final_result" required autofocus readonly required
                    autocomplete="micr4_final_result" />

                {{-- <select id="micr4_final_result" name="micr4_final_result" required autofocus
                    autocomplete="micr4_final_result">
                    @foreach ($micro4 as $micro4s)
                        @if ($micro4s->micr4_final_result === 'Present')
                            <option value="Present" selected>Present</option>
                            <option value="Absent">Absent</option>
                        @elseif($micro4s->micr4_final_result === 'Absent')
                            <option value="Present">Present</option>
                            <option value="Absent" selected>Absent</option>
                        @else
                            <option value="Present">Present</option>
                            <option value="Absent">Absent</option>
                        @endif
                    @endforeach
                </select> --}}
                @error('micr4_final_result')
                <span class="invalid" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        @endforeach
        <div class="mb-3">
            <label for="micr4_final_result_remark">Final Result Remarks</label>
            @foreach ($micro4 as $micro4s)
                <input id="micr4_final_result_remark" readonly type="text" step="any" name="micr4_final_result_remark"
                    value="{{ $micro4s->micr4_final_result_remark }}" required autofocus
                    autocomplete="micr4_final_result_remark">
            @endforeach

            @error('micr4_final_result_remark')
            <span class="invalid" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>
</div>