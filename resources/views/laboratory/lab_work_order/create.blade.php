@extends('layouts.app')
@section('title', 'Create Raw Data File')
@section('content')

    @if ($rawDataFile->test_parameters == 'MICR1 - Heterotrophic Plate Count (HPC)')
        @include('laboratory.lab_work_order.partials.micro.micr1')
    @endif

    @if ($rawDataFile->test_parameters == 'MICR2 - Thermotolerant Colifom Test')
        @include('laboratory.lab_work_order.partials.micro.micr2')
    @endif
    @if ($rawDataFile->test_parameters == 'MICR3 - Total Coliform')
        @include('laboratory.lab_work_order.partials.micro.micr3')
    @endif
    @if ($rawDataFile->test_parameters == 'MICR4 - E. coli Test')
        @include('laboratory.lab_work_order.partials.micro.micr4')
    @endif
    @if ($rawDataFile->test_parameters == 'MICR5 - All three (3) Mandatory Microbiological Parameters (PNSDW 2017/DOH AO 2013-003)')
        @include('laboratory.lab_work_order.partials.micro.micr1')
        @include('laboratory.lab_work_order.partials.micro.micr2')
        @include('laboratory.lab_work_order.partials.micro.micr3')
    @endif




    {{-- @include('laboratory.lab_work_order.partials.chem.chem1')
    @include('laboratory.lab_work_order.partials.chem.chem2')
    @include('laboratory.lab_work_order.partials.chem.chem3')
    @include('laboratory.lab_work_order.partials.chem.chem4')
    @include('laboratory.lab_work_order.partials.chem.chem5')
    @include('laboratory.lab_work_order.partials.chem.chem6')
    @include('laboratory.lab_work_order.partials.chem.chem7')
    @include('laboratory.lab_work_order.partials.chem.chem8')
    @include('laboratory.lab_work_order.partials.chem.chem9')
    @include('laboratory.lab_work_order.partials.chem.chem10')
    @include('laboratory.lab_work_order.partials.phys.phys1')
    @include('laboratory.lab_work_order.partials.phys.phys2')
    @include('laboratory.lab_work_order.partials.phys.phys3')
    @include('laboratory.lab_work_order.partials.phys.phys4') --}}


@endsection
