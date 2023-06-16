<div class="card mb-3 bg-white">
    <label>Lab Acceptance</label>

    <div class="sm:gid-cols-1 grid gap-4 lg:grid-cols-3">
        <div class="mb-3">
            <label for="evaluated_by">Evaluated By</label>
            <input id="evaluated_by" type="text" name="evaluated_by" value="{{ $acceptance->evaluated_by }}" readonly
                autofocus autocomplete="evaluated_by">
        </div>

        <div class="mb-3">
            <label for="date_evaluated">Date Evaluated</label>
            <input id="date_evaluated" type="date" name="date_evaluated" value="{{ $acceptance->date_evaluated }}"
                readonly autofocus autocomplete="date_evaluated">
        </div>

        <div class="mb-3">
            <label for="time_evaluated">Time Evaluated</label>
            <input id="time_evaluated" type="time" name="time_evaluated" value="{{ $acceptance->time_evaluated }}"
                readonly autofocus autocomplete="time_evaluated">
        </div>
    </div>

    <div class="sm:gid-cols-1 grid gap-4 lg:grid-cols-3">
        <div class="mb-3">
            <label for="sample_condition">Sample Condition</label>
            <input id="sample_condition" type="text" name="sample_condition"
                value="{{ $acceptance->sample_condition }}" readonly autofocus autocomplete="sample_condition">
        </div>

        <div class="mb-3">
            <label for="remarks">Remarks</label>
            <input id="remarks" type="text" name="remarks" value="{{ $acceptance->remarks }}" readonly autofocus
                autocomplete="remarks">
        </div>

        <div class="mb-3">
            <label for="if_remarks_are_rejected">If remarks are rejected</label>
            <input id="if_remarks_are_rejected" type="text" name="if_remarks_are_rejected"
                value="{{ $acceptance->if_remarks_are_rejected }}" autofocus autocomplete="if_remarks_are_rejected"
                readonly>
        </div>
    </div>
</div>
