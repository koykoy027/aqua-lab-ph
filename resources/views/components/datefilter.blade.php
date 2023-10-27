<form>
    <div class="flex items-center gap-2">
        <div>
            <input type="date" id="start_date" name="start_date" placeholder="Start Date"
                @if (!empty($start_date)) value="{{ $start_date }}" @endif required>
        </div>
        <h1>To</h1>
        <div>
            <input type="date" id="end_date" name="end_date" placeholder="End Date"
                @if (!empty($end_date)) value="{{ $end_date }}" @endif required>
        </div>
        <button class="btn btn-primary" type="submit">
            Apply
        </button>
        <div class="items-center hidden p-4 mb-4 text-sm text-yellow-800 rounded-lg bg-yellow-50" role="alert"
            id="alert">
            <svg class="flex-shrink-0 inline w-4 h-4 mr-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                fill="currentColor" viewBox="0 0 20 20">
                <path
                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
            </svg>
            <span class="sr-only">Info</span>
            <div>
                <span class="font-medium">Invalid Format!</span> Start dates should not overlap with end dates
                versa.
            </div>
        </div>
    </div>
</form>

<script>
    document.querySelector(".btn-primary").addEventListener("click", function(event) {
        var startValue = document.getElementById("start_date").value;
        var endValue = document.getElementById("end_date").value;
        var alert = document.getElementById("alert");
        var startDate = new Date(startValue);
        var endDate = new Date(endValue);

        if (!startValue || !endValue || startDate > endDate) {
            alert.classList.remove("hidden");
            event.preventDefault(); // Prevent form submission on validation failure
        } else {
            alert.classList.add("hidden");
        }
    });
</script>
