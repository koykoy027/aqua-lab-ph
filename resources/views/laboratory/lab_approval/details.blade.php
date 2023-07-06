@extends('layouts.app')
@section('title', 'Lab Approval Details')
@section('content')

@if ($details->test_parameters == 'MICR1 - Heterotrophic Plate Count (HPC)')
@include('laboratory.lab_approval.partials.micro.micr1')
@endif

@if ($details->test_parameters == 'MICR2 - Thermotolerant Colifom Test')
@include('laboratory.lab_approval.partials.micro.micr2')
@endif

@if ($details->test_parameters == 'MICR3 - Total Coliform')
@include('laboratory.lab_approval.partials.micro.micr3')
@endif

@if ($details->test_parameters == 'MICR4 - E. coli Test')
@include('laboratory.lab_approval.partials.micro.micr4')
@endif

@if ($details->test_parameters == 'MICR5 - All three (3) Mandatory Microbiological Parameters (PNSDW 2017/DOH AO 2013-003)')
    @include('laboratory.lab_approval.partials.micro.micr1')
    @include('laboratory.lab_approval.partials.micro.micr2')
    @include('laboratory.lab_approval.partials.micro.micr3')
@endif

@if ($details->test_parameters == 'CHEM1 - pH')
    @include('laboratory.lab_approval.partials.chem.chem1')
@endif

@if ($details->test_parameters == 'CHEM2 - Nitrate')
    @include('laboratory.lab_approval.partials.chem.chem2')
@endif

@if ($details->test_parameters == 'CHEM3 - Total Dissolved Solids')
    @include('laboratory.lab_approval.partials.chem.chem3')
@endif

@if ($details->test_parameters == 'CHEM4 - Chlorine (Residual), as free')
    @include('laboratory.lab_approval.partials.chem.chem4')
@endif

@if ($details->test_parameters == 'CHEM5 - Arsenic')
    @include('laboratory.lab_approval.partials.chem.chem5')
@endif

@if ($details->test_parameters == 'CHEM6 - Cadmium')
    @include('laboratory.lab_approval.partials.chem.chem6')
@endif

@if ($details->test_parameters == 'CHEM7 - Lead')
    @include('laboratory.lab_approval.partials.chem.chem7')
@endif

@if ($details->test_parameters == 'CHEM8 - All Twenty (20) Mandatory Chemical Parameters (DOH AO 2013-003 Dialysis Water)')
    {{-- @include('laboratory.lab_approval.partials.chem.chem1') --}}
@endif

@if ($details->test_parameters == 'CHEM9 - Iron')
    @include('laboratory.lab_approval.partials.chem.chem9')
@endif

@if ($details->test_parameters == 'CHEM10 - Manganese')
    @include('laboratory.lab_approval.partials.chem.chem10')
@endif

@if ($details->test_parameters == 'PHYS1 - Appearance')
    @include('laboratory.lab_approval.partials.phys.phys1')
@endif

@if ($details->test_parameters == 'PHYS2 - Odor')
    @include('laboratory.lab_approval.partials.phys.phys2')
@endif

@if ($details->test_parameters == 'PHYS3 - Color, apparent')
    @include('laboratory.lab_approval.partials.phys.phys3')
@endif

@if ($details->test_parameters == 'PHYS4 - Turbidity')
    @include('laboratory.lab_approval.partials.phys.phys4')
@endif





<div class="flex justify-end gap-4">
    <form action="{{ route('laboratory.lab_approval.approval', ['analysis_id' => $details->analysis_id]) }}" method="POST">
        @csrf
        <div class="flex justify-end">
            <button class="btn btn-primary">Approve</button>
        </div>
    </form>

    <form action="{{ route('laboratory.lab_approval.disapprove', ['analysis_id' => $details->analysis_id]) }}" method="POST">
        @csrf
        <button class="btn btn-danger">Disapprove</button>
    </form>
</div>

@endsection
