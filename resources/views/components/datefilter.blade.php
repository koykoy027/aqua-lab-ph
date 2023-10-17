<form>
    <div class="flex items-center gap-2">
        <div>
            <input type="date" id="start_date" name="start_date" placeholder="Start Date" @if (!empty($start_date))
                value="{{ $start_date }}" @endif>
            {{-- <Label class="pl-2">Start</Label> --}}
        </div>
        <h1>To</h1>

        <div>
            <input type="date" id="end_date" name="end_date" placeholder="End Date" @if (!empty($end_date))
                value="{{ $end_date }}" @endif>
            {{-- <Label class="pl-2">End</Label> --}}
        </div>

        <button class="btn btn-primary" type="submit">
            Submit
        </button>
    </div>
</form>