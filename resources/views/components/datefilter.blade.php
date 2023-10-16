<form class="">
    <div class="grid grid-cols-2 gap-4">
        <div class="">
            <div>
                <input type="date" id="start_date" name="start_date"
                    class="block w-full p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:border-blue-500 focus:ring-blue-500"
                    placeholder="Start Date" @if (!empty($query)) value="{{ $query }}" @endif>
                <Label class="pl-2">Start</Label>
            </div>
        </div>
        <div class="">
            <div>
                <input type="date" id="end_date" name="end_date"
                    class="block w-full p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:border-blue-500 focus:ring-blue-500"
                    placeholder="End Date" @if (!empty($query)) value="{{ $query }}" @endif>
                <Label class="pl-2">End</Label>
            </div>
        </div>
    </div>
</form>
