{{-- MICRO CONDITION --}}
@if ($analysis->test_parameters == 'MICR1 - Heterotrophic Plate Count (HPC)')
    @include('record_and_report.lab_result.partials.raw_data_partials.micro.micr1')
@endif

@if ($analysis->test_parameters == 'MICR2 - Thermotolerant Colifom Test')
    @include('record_and_report.lab_result.partials.raw_data_partials.micro.micr2')
@endif

@if ($analysis->test_parameters == 'MICR3 - Total Coliform')
    @include('record_and_report.lab_result.partials.raw_data_partials.micro.micr3')
@endif

@if ($analysis->test_parameters == 'MICR4 - E. coli Test')
    @include('record_and_report.lab_result.partials.raw_data_partials.micro.micr4')
@endif

@if ($analysis->test_parameters == 'MICR5 - All three (3) Mandatory Microbiological Parameters (PNSDW 2017/DOH AO 2013-003)')
    @include('record_and_report.lab_result.partials.raw_data_partials.micro.micr1')
    @include('record_and_report.lab_result.partials.raw_data_partials.micro.micr2')
    @include('record_and_report.lab_result.partials.raw_data_partials.micro.micr3')
@endif

{{-- CHEM CONDITION --}}
@if ($analysis->test_parameters == 'CHEM1 - pH')
    @include('record_and_report.lab_result.partials.raw_data_partials.chem.chem1')
@endif

@if ($analysis->test_parameters == 'CHEM2 - Nitrate')
    @include('record_and_report.lab_result.partials.raw_data_partials.chem.chem2')
@endif

@if ($analysis->test_parameters == 'CHEM3 - Total Dissolved Solids')
    @include('record_and_report.lab_result.partials.raw_data_partials.chem.chem3')
@endif

@if ($analysis->test_parameters == 'CHEM4 - Chlorine (Residual), as free')
    @include('record_and_report.lab_result.partials.raw_data_partials.chem.chem4')
@endif

@if ($analysis->test_parameters == 'CHEM5 - Arsenic')
    @include('record_and_report.lab_result.partials.raw_data_partials.chem.chem5')
@endif

@if ($analysis->test_parameters == 'CHEM6 - Cadmium')
    @include('record_and_report.lab_result.partials.raw_data_partials.chem.chem6')
@endif

@if ($analysis->test_parameters == 'CHEM7 - Lead')
    @include('record_and_report.lab_result.partials.raw_data_partials.chem.chem7')
@endif

{{-- @if ($analysis->test_parameters == 'CHEM8 - All Twenty (20) Mandatory Chemical Parameters (DOH AO 2013-003 Dialysis Water)')
        @include('record_and_report.lab_result.partials.raw_data_partials.chem.chem8')
    @endif --}}

@if ($analysis->test_parameters == 'CHEM9 - Iron')
    @include('record_and_report.lab_result.partials.raw_data_partials.chem.chem9')
@endif

@if ($analysis->test_parameters == 'CHEM10 - Manganese')
    @include('record_and_report.lab_result.partials.raw_data_partials.chem.chem10')
@endif

{{-- PHYS CONDITION --}}
@if ($analysis->test_parameters == 'PHYS1 - Appearance')
    @include('record_and_report.lab_result.partials.raw_data_partials.phys.phys1')
@endif

@if ($analysis->test_parameters == 'PHYS2 - Odor')
    @include('record_and_report.lab_result.partials.raw_data_partials.phys.phys2')
@endif

@if ($analysis->test_parameters == 'PHYS3 - Color, apparent')
    @include('record_and_report.lab_result.partials.raw_data_partials.phys.phys3')
@endif

@if ($analysis->test_parameters == 'PHYS4 - Turbidity')
    @include('record_and_report.lab_result.partials.raw_data_partials.phys.phys4')
@endif
