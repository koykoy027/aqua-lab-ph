<div class="card mb-3 bg-white">
    <h1 class="mb-3">MICR4 - E. coli Test</h1>
    <div class="sm:gid-cols-1 grid gap-4 lg:grid-cols-2">
        @foreach ($micro4 as $micro4s)
            <div class="mb-3">
                <label for="micr4_color_of_the_sample">Color of the sample</label>
                <input id="micr4_color_of_the_sample" type="text" name="micr4_color_of_the_sample"
                    value="{{ $micro4s->micr4_color_of_the_sample }}" required autofocus
                    autocomplete="micr4_color_of_the_sample" readonly />

            </div>

            <div class="mb-3">
                <label for="micr4_fluorescence">Fluorescence</label>
                <input id="micr4_fluorescence" type="text" name="micr4_fluorescence"
                    value="{{ $micro4s->micr4_fluorescence }}" required autofocus autocomplete="micr4_fluorescence"
                    readonly />
            </div>

            <div class="mb-3">
                <label for="micr4_final_result">Final Result</label>
                <input id="micr4_final_result" type="text" name="micr4_final_result"
                    value="{{ $micro4s->micr4_final_result }}" required autofocus autocomplete="micr4_final_result"
                    readonly />
            </div>
            <div class="mb-3">
                <label for="micr4_final_result_remark">Final Result</label>
                <input id="micr4_final_result_remark" type="text" name="micr4_final_result_remark"
                    value="{{ $micro4s->micr4_final_result_remark }}" required autofocus
                    autocomplete="micr4_final_result_remark" readonly />
            </div>
        @endforeach
    </div>
</div>
