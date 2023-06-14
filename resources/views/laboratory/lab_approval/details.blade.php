@extends('layouts.app')
@section('title', 'Lab Approval Details')
@section('content')

    @if ($details->test_parameters == 'MICR1 - Heterotrophic Plate Count (HPC)')
        <div class="card mb-3 bg-white">
            <h1 class="mb-3">MICR1 - Heterotrophic Plate Count (HPC)</h1>
            <div class="sm:gid-cols-1 grid gap-4 lg:grid-cols-2">
                <div class="mb-3">
                    <label for="micr1_hpc_plate_a">Plate A Colony Count</label>
                    <input id="micr1_hpc_plate_a" type="number" name="micr1_hpc_plate_a"
                        value="{{ $lab_approval->micr1_hpc_plate_a }}" required autofocus autocomplete="micr1_hpc_plate_a"
                        readonly>
                </div>

                <div class="mb-3">
                    <label for="micr1_hpc_plate_b">Plate B Colony Count</label>
                    <input id="micr1_hpc_plate_b" type="number" name="micr1_hpc_plate_b"
                        value="{{ $lab_approval->micr1_hpc_plate_b }}" required autofocus autocomplete="micr1_hpc_plate_b"
                        readonly>
                </div>

                <div class="mb-3">
                    <label for="micr1_hpc_average">Average Colony Count</label>
                    <input id="micr1_hpc_average" type="text" name="micr1_hpc_average"
                        value="{{ $lab_approval->micr1_hpc_average }}" required autofocus autocomplete="micr1_hpc_average"
                        readonly>
                </div>

                <div class="mb-3">
                    <label for="micr1_hpc_difference">% Difference</label>
                    <input id="micr1_hpc_difference" type="text" name="micr1_hpc_difference"
                        value="{{ $lab_approval->micr1_hpc_difference }}" required autofocus
                        autocomplete="micr1_hpc_difference" readonly>
                </div>

                <div class="mb-3">
                    <label for="micr1_hpc_final_result">Final Result</label>
                    <input id="micr1_hpc_final_result" type="text" name="micr1_hpc_final_result"
                        value="{{ $lab_approval->micr1_hpc_final_result }}" required autofocus
                        autocomplete="micr1_hpc_final_result" readonly>
                </div>

                <div class="mb-3">
                    <label for="micr1_hpc_remarks">Remarks</label>
                    <input id="micr1_hpc_remarks" type="text" name="micr1_hpc_remarks"
                        value="{{ $lab_approval->micr1_hpc_remarks }}" required autofocus autocomplete="micr1_hpc_remarks"
                        readonly>
                </div>
            </div>
        </div>
    @endif

    @if ($details->test_parameters == 'MICR2 - Thermotolerant Colifom Test')
        <div class="card mb-3 bg-white">
            <h1 class="mb-3">MICR2 - Thermotolerant Colifom Test</h1>
            <div class="sm:gid-cols-1 grid gap-4 lg:grid-cols-2">
                <div class="mb-3">
                    <label for="micr2_tc_24">No. of Lauryl Tryptose Broth tube with (+) rxn after 24h</label>
                    <input id="micr2_tc_24" type="number" name="micr2_tc_24" value="{{ $lab_approval->micr2_tc_24 }}"
                        readonly autofocus autocomplete="micr2_tc_24">
                </div>
                <div class="mb-3">
                    <label for="micr2_tc_48">No. of Lauryl Tryptose Broth tube with (+) rxn after 48h</label>
                    <input id="micr2_tc_48" type="number" name="micr2_tc_48" value="{{ $lab_approval->micr2_tc_48 }}"
                        readonly autofocus autocomplete="micr2_tc_48">
                </div>
                <div class="mb-3">
                    <label for="micr2_tc_final_result">Final Result</label>
                    <input id="micr2_tc_final_result" type="text" name="micr2_tc_final_result"
                        value="{{ $lab_approval->micr2_tc_final_result }}" required autofocus
                        autocomplete="micr2_tc_final_result" readonly>
                </div>
                <div class="mb-3">
                    <label for="micr2_tc_remarks">Remarks</label>
                    <input id="micr2_tc_remarks" type="text" name="micr2_tc_remarks"
                        value="{{ $lab_approval->micr2_tc_remarks }}" required autofocus autocomplete="micr2_tc_remarks"
                        readonly>
                </div>
            </div>
        </div>
    @endif

    @if ($details->test_parameters == 'MICR3 - Total Coliform')
        <div class="card mb-3 bg-white">
            <h1 class="mb-3">MICR3 - Total Coliform</h1>
            <div class="sm:gid-cols-1 grid gap-4 lg:grid-cols-2">
                <div class="mb-3">
                    <label for="micr3_lauryl_24">No. of Lauryl Tryptose Broth tube with (+) rxn after 24h</label>
                    <input id="micr3_lauryl_24" type="number" name="micr3_lauryl_24"
                        value="{{ $lab_approval->micr3_lauryl_24 }}" required autofocus autocomplete="micr3_lauryl_24"
                        readonly>
                </div>

                <div class="mb-3">
                    <label for="micr3_lauryl_48">No. of Lauryl Tryptose Broth tube with (+) rxn after 48h</label>
                    <input id="micr3_lauryl_48" type="number" name="micr3_lauryl_48"
                        value="{{ $lab_approval->micr3_lauryl_48 }}" required autofocus autocomplete="micr3_lauryl_48"
                        readonly>
                </div>

                <div class="mb-3">
                    <label for="micr3_brillant_24">No. of Brillant Green Lauryl Broth tubes with (+) rxn after 24h</label>
                    <input id="micr3_brillant_24" type="number" name="micr3_brillant_24"
                        value="{{ $lab_approval->micr3_brillant_24 }}" required autofocus autocomplete="micr3_brillant_24"
                        readonly>
                </div>

                <div class="mb-3">
                    <label for="micr3_brillant_48">No. of Brillant Green Lauryl Broth tubes with (+) rxn after 48h</label>
                    <input id="micr3_brillant_48" type="number" name="micr3_brillant_48"
                        value="{{ $lab_approval->micr3_brillant_48 }}" required autofocus
                        autocomplete="micr3_brillant_48" readonly>
                </div>

                <div class="mb-3">
                    <label for="micr3_final_result">Final Result</label>
                    <input id="micr3_final_result" type="text" name="micr3_final_result"
                        value="{{ $lab_approval->micr3_final_result }}" required autofocus
                        autocomplete="micr3_final_result" readonly>
                </div>

                <div class="mb-3">
                    <label for="micr3_remarks">Remarks</label>
                    <input id="micr3_remarks" type="text" name="micr3_remarks"
                        value="{{ $lab_approval->micr3_remarks }}" required autofocus autocomplete="micr3_remarks"
                        readonly>
                </div>
            </div>

        </div>
    @endif

    @if ($details->test_parameters == 'MICR4 - E. coli Test')
        <div class="card mb-3 bg-white">
            <h1 class="mb-3">MICR4 - E. coli Test</h1>
            <div class="sm:gid-cols-1 grid gap-4 lg:grid-cols-2">
                <div class="mb-3">
                    <label for="micr4_color_of_the_sample">Color of the sample</label>
                    <input id="micr4_color_of_the_sample" type="number" name="micr4_color_of_the_sample"
                        value="{{ $lab_approval->micr4_color_of_the_sample }}" required autofocus
                        autocomplete="micr4_color_of_the_sample" />

                </div>

                <div class="mb-3">
                    <label for="micr4_fluorescence">Fluorescence</label>
                    <input id="micr4_fluorescence" type="number" name="micr4_fluorescence"
                        value="{{ $lab_approval->micr4_fluorescence }}" required autofocus
                        autocomplete="micr4_fluorescence" />
                </div>

                <div class="mb-3">
                    <label for="micr4_final_result">Final Result</label>
                    <input id="micr4_final_result" type="text" name="micr4_final_result"
                        value="{{ $lab_approval->micr4_final_result }}" required autofocus
                        autocomplete="micr4_final_result" />
                </div>
            </div>
        </div>
    @endif

    @if ($details->test_parameters == 'MICR5 - All three (3) Mandatory Microbiological Parameters (PNSDW 2017/DOH AO 2013-003)')
        <div class="card mb-3 bg-white">
            <h1 class="mb-3">MICR1 - Heterotrophic Plate Count (HPC)</h1>
            <div class="sm:gid-cols-1 grid gap-4 lg:grid-cols-2">
                <div class="mb-3">
                    <label for="micr1_hpc_plate_a">Plate A Colony Count</label>
                    <input id="micr1_hpc_plate_a" type="number" name="micr1_hpc_plate_a"
                        value="{{ $lab_approval->micr1_hpc_plate_a }}" required autofocus
                        autocomplete="micr1_hpc_plate_a" readonly>
                </div>

                <div class="mb-3">
                    <label for="micr1_hpc_plate_b">Plate B Colony Count</label>
                    <input id="micr1_hpc_plate_b" type="number" name="micr1_hpc_plate_b"
                        value="{{ $lab_approval->micr1_hpc_plate_b }}" required autofocus
                        autocomplete="micr1_hpc_plate_b" readonly>
                </div>

                <div class="mb-3">
                    <label for="micr1_hpc_average">Average Colony Count</label>
                    <input id="micr1_hpc_average" type="text" name="micr1_hpc_average"
                        value="{{ $lab_approval->micr1_hpc_average }}" required autofocus
                        autocomplete="micr1_hpc_average" readonly>
                </div>

                <div class="mb-3">
                    <label for="micr1_hpc_difference">% Difference</label>
                    <input id="micr1_hpc_difference" type="text" name="micr1_hpc_difference"
                        value="{{ $lab_approval->micr1_hpc_difference }}" required autofocus
                        autocomplete="micr1_hpc_difference" readonly>
                </div>

                <div class="mb-3">
                    <label for="micr1_hpc_final_result">Final Result</label>
                    <input id="micr1_hpc_final_result" type="text" name="micr1_hpc_final_result"
                        value="{{ $lab_approval->micr1_hpc_final_result }}" required autofocus
                        autocomplete="micr1_hpc_final_result" readonly>
                </div>

                <div class="mb-3">
                    <label for="micr1_hpc_remarks">Remarks</label>
                    <input id="micr1_hpc_remarks" type="text" name="micr1_hpc_remarks"
                        value="{{ $lab_approval->micr1_hpc_remarks }}" required autofocus
                        autocomplete="micr1_hpc_remarks" readonly>
                </div>
            </div>
        </div>

        <div class="card mb-3 bg-white">
            <h1 class="mb-3">MICR2 - Thermotolerant Coliform Test</h1>
            <div class="sm:gid-cols-1 grid gap-4 lg:grid-cols-2">
                <div class="mb-3">
                    <label for="micr2_tc_24">No. of Lauryl Tryptose Broth tube with (+) rxn after 24h</label>
                    <input id="micr2_tc_24" type="number" name="micr2_tc_24" value="{{ $lab_approval->micr2_tc_24 }}"
                        readonly autofocus autocomplete="micr2_tc_24">
                </div>
                <div class="mb-3">
                    <label for="micr2_tc_48">No. of Lauryl Tryptose Broth tube with (+) rxn after 48h</label>
                    <input id="micr2_tc_48" type="number" name="micr2_tc_48" value="{{ $lab_approval->micr2_tc_48 }}"
                        readonly autofocus autocomplete="micr2_tc_48">
                </div>
                <div class="mb-3">
                    <label for="micr2_tc_final_result">Final Result</label>
                    <input id="micr2_tc_final_result" type="text" name="micr2_tc_final_result"
                        value="{{ $lab_approval->micr2_tc_final_result }}" required autofocus
                        autocomplete="micr2_tc_final_result" readonly>
                </div>
                <div class="mb-3">
                    <label for="micr2_tc_remarks">Remarks</label>
                    <input id="micr2_tc_remarks" type="text" name="micr2_tc_remarks"
                        value="{{ $lab_approval->micr2_tc_remarks }}" required autofocus autocomplete="micr2_tc_remarks"
                        readonly>
                </div>
            </div>
        </div>

        <div class="card mb-3 bg-white">
            <h1 class="mb-3">MICR3 - Total Coliform</h1>
            <div class="sm:gid-cols-1 grid gap-4 lg:grid-cols-2">
                <div class="mb-3">
                    <label for="micr3_lauryl_24">No. of Lauryl Tryptose Broth tube with (+) rxn after 24h</label>
                    <input id="micr3_lauryl_24" type="number" name="micr3_lauryl_24"
                        value="{{ $lab_approval->micr3_lauryl_24 }}" required autofocus autocomplete="micr3_lauryl_24"
                        readonly>
                </div>

                <div class="mb-3">
                    <label for="micr3_lauryl_48">No. of Lauryl Tryptose Broth tube with (+) rxn after 48h</label>
                    <input id="micr3_lauryl_48" type="number" name="micr3_lauryl_48"
                        value="{{ $lab_approval->micr3_lauryl_48 }}" required autofocus autocomplete="micr3_lauryl_48"
                        readonly>
                </div>

                <div class="mb-3">
                    <label for="micr3_brillant_24">No. of Brillant Green Lauryl Broth tubes with (+) rxn after 24h</label>
                    <input id="micr3_brillant_24" type="number" name="micr3_brillant_24"
                        value="{{ $lab_approval->micr3_brillant_24 }}" required autofocus
                        autocomplete="micr3_brillant_24" readonly>
                </div>

                <div class="mb-3">
                    <label for="micr3_brillant_48">No. of Brillant Green Lauryl Broth tubes with (+) rxn after 48h</label>
                    <input id="micr3_brillant_48" type="number" name="micr3_brillant_48"
                        value="{{ $lab_approval->micr3_brillant_48 }}" required autofocus
                        autocomplete="micr3_brillant_48" readonly>
                </div>

                <div class="mb-3">
                    <label for="micr3_final_result">Final Result</label>
                    <input id="micr3_final_result" type="text" name="micr3_final_result"
                        value="{{ $lab_approval->micr3_final_result }}" required autofocus
                        autocomplete="micr3_final_result" readonly>
                </div>

                <div class="mb-3">
                    <label for="micr3_remarks">Remarks</label>
                    <input id="micr3_remarks" type="text" name="micr3_remarks"
                        value="{{ $lab_approval->micr3_remarks }}" required autofocus autocomplete="micr3_remarks"
                        readonly>
                </div>
            </div>

        </div>
    @endif

@endsection
