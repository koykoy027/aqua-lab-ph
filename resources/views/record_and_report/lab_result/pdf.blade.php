{{-- <img src="{{ public_path('image/branding.png') }}" alt="Image"> --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sample Table</title>

    <style>

        /* body {
            margin-top: 235px;
        } */

        .title {
            text-transform: uppercase;
            font-size: 16px;
            font-weight: 400;
            text-align: center;
            margin-top: 80px;
        }

        .table-container {
            margin-left: auto;
            margin-right: auto;
            margin-top: 10px;
            border-collapse: collapse;
            width: 100%;
        }

        .head {
            border-top: 1px dotted black;
            border-bottom: 1px dotted black;
        }

        th {
            padding: 10px;
            text-transform: uppercase;
            font-size:  13px;
        }

        .details {
            padding-top: 10px;
            padding-left: 10px;
            padding-right: 10px;
            padding-bottom: 10px;
            text-align: left;
            text-transform: uppercase;
            font-size:  10px;
        }

        tbody {
            border-bottom: 1px dotted black;
        }


        .information {
            margin-left: 20px;
            font-size:  13px;
        }

        .information-1 {
            margin-left: 20px;
            font-size:  13px;
        }

        span {
            padding-left: 40px;
            font-size:  13px;
        }

        .main-source {
            padding-left: 83px;
        }
        .main-source1 {
            padding-left: 89px;
        }
        .main-source2 {
            padding-left: 47px;
        }
        .main-source3 {
            padding-left: 92px;
        }
        .main-source4 {
            padding-left: 60px;
        }
        .main-source5 {
            padding-left: 73px;
        }
        .collected-by {
            padding-left: 79px;
        }

        .top-information {
            font-size:  13px;
        }

        span {
            margin-left: 20px;

        }
        .main-source {
            margin-left: 21px;
        }

        .collected-by {
            padding-left: 90px;
        }

        .table-fixed-bottom {
            position: fixed;
            bottom: 100;
            /* width: 100%; */
        }

    </style>
</head>
<body>

    <div>

        <table style="width: 100%; margin-top: 200px">
            <thead>
                <tr>
                    <td style="font-size:  13px; font-weight: 900">
                        <p >SAPROPRO ICE AND COLD STORAGE COMPANY INC.</p>
                        <p>MANGAYSAY RD, DAINE I, INDANG CAVITE 4122.</p>
                    </td>

                    <td style="font-size:  13px; padding-right: 40px">
                        <p>Certificate No: </p>
                        <p>Account ID: 49SRL0623WSP{{ $details->account_number }} </p>
                        <p>Sample ID: {{ $details->analysis_id }}</p>
                    </td>
                </tr>
            </thead>
        </table>

        <table style="width: 100%; margin-top: 30px">
            <thead>
                <tr class="top-information">
                    <td>Requested By: <span class="main-source">{{ $labAcceptance->evaluated_by }}</span></td>
                </tr>

                <tr class="top-information">
                    <td>Main Source: <span class="main-source1">{{ $details->source_of_water_sample }}</span></td>
                    <td>Sampling point: <span class="main-source1">{{ $details->collection_point }}</td>
                </tr>

                <tr class="top-information">
                    <td>Water Purpose (Use): <span class="main-source2">{{ $details->water_purpose }}</span></td>
                    <td>Type of Water: <span class="main-source3">{{ $details->water_purpose }}</span></td>
                </tr>

                <tr class="top-information">
                    <td>Date/Time Collected: <span class="main-source2">{{ $labAcceptance->date_evaluated }} {{ $labAcceptance->time_evaluated }}</span></td>
                    <td>Date/Time Received: <span class="main-source4">{{ $details->date_collected }} - {{ $details->time_collected }}</span></td>
                </tr>

                <tr class="top-information">
                    <td>Collected by: <span class="collected-by">{{ $details->collector_name }}</span></td>
                    <td>Date/Time Tested: <span class="main-source5">{{ $labAcceptance->date_evaluated }} {{ $labAcceptance->time_evaluated }}</span></td>
                </tr>

            </thead>
        </table>
    </div>

    <div class="title">certificate of microbiological analysis</div>

    <table class="table-container">
        <thead>
            <tr class="head">
                <th class="test">parameter</th>
                <th class="method">method of analysis</th>
                <th class="result">result</th>
                <th class="limit">limit</th>
                <th class="remarks">remarks</th>
            </tr>
        </thead>
        <tbody>
            @foreach ( $micro_details as $micro_detail)
                <tr>
                    @foreach ($collection_details as $collection_detail)
                        @if ( $collection_detail->test_parameters == "MICR1 - Heterotrophic Plate Count (HPC)")

                            <td class="details">{{ $collection_detail->test_parameters }}</td>
                            <td class="details">SMEWW 9215 B. Pour Plate Method</td>
                            <td class="details">{{ $micro_detail->micr1_hpc_final_result }}</td>
                            <td class="details"></td>
                            <td class="details">{{ $micro_detail->micr1_hpc_remarks }}</td>

                        {{-- micro 2 --}}
                        @elseif ( $collection_detail->test_parameters == "MICR2 - Thermotolerant Colifom Test" )

                            <td class="details">{{ $collection_detail->test_parameters }}</td>
                            <td class="details">SMEWW 9221 Multiple Tube Fermentation Technique</td>
                            <td class="details">{{ $micro_detail->micr2_tc_final_result }}</td>
                            <td class="details"></td>
                            <td class="details">{{ $micro_detail->micr2_tc_remarks }}</td>

                        {{-- micro 3 --}}
                        @elseif ( $collection_detail->test_parameters == "MICR3 - Total Coliform" )

                            <td class="details">{{ $collection_detail->test_parameters }}</td>
                            <td class="details">SMEWW 9221 Multiple Tube Fermentation Technique</td>
                            <td class="details">{{ $micro_detail->micr3_final_result }}</td>
                            <td class="details"></td>
                            <td class="details">{{ $micro_detail->micr3_remarks }}</td>

                        {{-- micro 4 --}}
                        @elseif ( $collection_detail->test_parameters == "MICR4 - E. coli Test" )

                            <td class="details">{{ $collection_detail->test_parameters }}</td>
                            <td class="details">SMEWW 9223 Enzyme Substrate Coliform Test</td>
                            <td class="details">{{ $micro_detail->micr4_final_result }}</td>
                            <td class="details"></td>
                            <td class="details"></td>

                        {{-- micro 5 --}}
                        @elseif ( $collection_detail->test_parameters == "MICR5 - All three (3) Mandatory Microbiological Parameters (PNSDW 2017/DOH AO 2013-003)" )

                            <td class="details">
                                <p> MICR1 - Heterotrophic Plate Count (HPC) </p>
                                <p> MICR2 - Thermotolerant Colifom Test </p>
                                <p> MICR3 - Total Coliform </p>
                            </td>

                            <td class="details">
                                <p> Heterotrophic Plate Count  - SMEWW 9215 B. Pour Plate Method</p>
                                <p> Total Coliform - SMEWW 9221 Multiple Tube Fermentation Technique</p>
                                <p> Thermotolerant Coliform (E. coli) - SMEWW 9221 Multiple Tube Fermentation Technique</p>
                            </td>

                            <td class="details">
                                <p>{{ $micro_detail->micr1_hpc_final_result }}</p>
                                <p>{{ $micro_detail->micr2_tc_final_result }}</p>
                                <p>{{ $micro_detail->micr3_final_result }}</p>
                            </td>

                            <td class="details"></td>

                            <td class="details">
                                <p>{{ $micro_detail->micr1_hpc_remarks }}</p>
                                <p>{{ $micro_detail->micr2_tc_remarks }}</p>
                                <p>{{ $micro_detail->micr3_remarks }}   </p>
                            </td>

                        {{-- chem 1 --}}
                        @elseif ( $collection_detail->test_parameters == "CHEM1 - pH" )

                            <td class="details">{{ $collection_detail->test_parameters }}</td>
                            <td class="details">SMEWW 4500-H+ B. Electrometric Method</td>
                            <td class="details">{{ $micro_detail->chem1_final_result }}</td>
                            <td class="details"></td>
                            <td class="details">{{ $micro_detail->chem1_final_result_remarks }}</td>

                        {{-- chem 2 --}}
                        @elseif ( $collection_detail->test_parameters == "CHEM2 - Nitrate" )

                            <td class="details">{{ $collection_detail->test_parameters }}</td>
                            <td class="details">SMEWW 4500-NO3- E. Cadmium Reduction Method</td>
                            <td class="details">{{ $micro_detail->chem2_final_resultt }}</td>
                            <td class="details"></td>
                            <td class="details">{{ $micro_detail->chem2_final_result_remarks }}</td>

                        {{-- chem 3 --}}
                        @elseif ( $collection_detail->test_parameters == "CHEM3 - Total Dissolved Solids" )

                            <td class="details">{{ $collection_detail->test_parameters }}</td>
                            <td class="details">SMEWW 2540 C. Total Dissolved Solids Dried at 180°C</td>
                            <td class="details">{{ $micro_detail->chem3_final_result }}</td>
                            <td class="details"></td>
                            <td class="details">{{ $micro_detail->chem3_final_result_remarks }}</td>

                        {{-- chem 4 --}}
                        @elseif ( $collection_detail->test_parameters == "CHEM4 - Chlorine (Residual), as free" )

                            <td class="details">{{ $collection_detail->test_parameters }}</td>
                            <td class="details">DPD Colorimetric Method</td>
                            <td class="details">{{ $micro_detail->chem4_final_result }}</td>
                            <td class="details"></td>
                            <td class="details">{{ $micro_detail->chem4_final_result_remarks }}</td>

                        {{-- chem 5 --}}
                        @elseif ( $collection_detail->test_parameters == "CHEM5 - Arsenic" )

                            <td class="details">{{ $collection_detail->test_parameters }}</td>
                            <td class="details">SMEWW 3113 B. Elelctrothermal Atomic Absorption Spectrometric Method</td>
                            <td class="details">{{ $micro_detail->chem5_final_result }}</td>
                            <td class="details"></td>
                            <td class="details">{{ $micro_detail->chem5_final_result_remarks }}</td>

                        {{-- chem 6 --}}
                        @elseif ( $collection_detail->test_parameters == "CHEM6 - Cadmium" )

                            <td class="details">{{ $collection_detail->test_parameters }}</td>
                            <td class="details">SMEWW 3113 B. Elelctrothermal Atomic Absorption Spectrometric Method</td>
                            <td class="details">{{ $micro_detail->chem6_final_result }}</td>
                            <td class="details"></td>
                            <td class="details">{{ $micro_detail->chem6_final_result_remarks }}</td>

                        {{-- chem 7 --}}
                        @elseif ( $collection_detail->test_parameters == "CHEM7 - Lead" )

                            <td class="details">{{ $collection_detail->test_parameters }}</td>
                            <td class="details">SMEWW 3113 B. Elelctrothermal Atomic Absorption Spectrometric Method</td>
                            <td class="details">{{ $micro_detail->chem7_final_result }}</td>
                            <td class="details"></td>
                            <td class="details">{{ $micro_detail->chem7_final_result_remarks }}</td>

                        {{-- chem 9 --}}
                        @elseif ( $collection_detail->test_parameters == "CHEM9 - Iron" )

                            <td class="details">{{ $collection_detail->test_parameters }}</td>
                            <td class="details">SMEWW 3113 B. Elelctrothermal Atomic Absorption Spectrometric Method</td>
                            <td class="details">{{ $micro_detail->chem9_final_result }}</td>
                            <td class="details"></td>
                            <td class="details">{{ $micro_detail->chem9_final_result_remarks }}</td>

                        {{-- chem 10 --}}
                        @elseif ( $collection_detail->test_parameters == "CHEM10 - Manganese" )

                            <td class="details">{{ $collection_detail->test_parameters }}</td>
                            <td class="details">SMEWW 3113 B. Elelctrothermal Atomic Absorption Spectrometric Method</td>
                            <td class="details">{{ $micro_detail->chem10_final_result }}</td>
                            <td class="details"></td>
                            <td class="details">{{ $micro_detail->chem10_final_result_remarks }}</td>

                        {{-- phys 1 --}}
                        @elseif ( $collection_detail->test_parameters == "PHYS1 - Appearance" )

                            <td class="details">{{ $collection_detail->test_parameters }}</td>
                            <td class="details">Sensory Evaluation Technique</td>
                            <td class="details">{{ $micro_detail->phys1_final_result }}</td>
                            <td class="details"></td>
                            <td class="details">{{ $micro_detail->phys1_final_result_remarks }}</td>

                        {{-- phys 2 --}}
                        @elseif ( $collection_detail->test_parameters == "PHYS2 - Odor" )

                            <td class="details">{{ $collection_detail->test_parameters }}</td>
                            <td class="details">Sensory Evaluation Technique</td>
                            <td class="details">{{ $micro_detail->phys2_final_result }}</td>
                            <td class="details"></td>
                            <td class="details">{{ $micro_detail->phys2_final_result_remarks }}</td>

                        {{-- phys 3 --}}
                        @elseif ( $collection_detail->test_parameters == "PHYS3 - Color, apparent" )

                            <td class="details">{{ $collection_detail->test_parameters }}</td>
                            <td class="details">SMEWW 2120 B. Visual Comparison Method</td>
                            <td class="details">{{ $micro_detail->phys3_final_result }}</td>
                            <td class="details"></td>
                            <td class="details">{{ $micro_detail->phys3_final_result_remarks }}</td>

                        {{-- phys 4 --}}
                        @elseif ( $collection_detail->test_parameters == "PHYS4 - Turbidity" )

                            <td class="details">{{ $collection_detail->test_parameters }}</td>
                            <td class="details">SMEWW 2120 B. Visual Comparison Method</td>
                            <td class="details">{{ $micro_detail->phys4_final_result }}</td>
                            <td class="details"></td>
                            <td class="details">{{ $micro_detail->phys4_final_result_remarks }}</td>

                        @endif
                    @endforeach
                </tr>
            @endforeach
        </tbody>
    </table>

    <table tyle="width: 100%">
        <thead>
            <tr>
                <td style="font-size:  13px">Remarks:</td>
                <td style="padding-left: 200px; padding-right:50px; font-size:  13px">
                    <p>
                        Results of examination are specifically related to samples as received
                    </p>
                </td>
            </tr>

            <tr>
                <td></td>
                <td style="padding-left: 200px; padding-right:50px; font-size:  13px">
                    <p style="margin-top: -10px; font-weight: 500; text-align: justify;">Pursuant to PNSDW 2017, sample was collected according to prescribed aseptic technique
                        and was contained and transported in a sterilized container at controlled temperature
                        by Aqualab PH trained personnel.
                    </p>
                </td>
            </tr>

            <tr>
                <td></td>
                <td style="padding-left: 200px; padding-right:50px; font-size:  13px;">
                    <p style="margin-top: -10px; font-weight: 500;">
                        Sample analysis was conducted within eight (8) hours as prescribed by the standards.
                    </p>
                </td>
            </tr>

            <tr>
                <td style="font-size:  13px;">Reference/s:</td>
                <td style="padding-left: 200px; padding-right:50px; font-size:  13px;">
                    <p>
                        Method of Analysis are based on the Standard Methods for the Examination of
                    </p>
                </td>
            </tr>

            <tr>
                <td></td>
                <td style="padding-left: 200px; font-size:  13px; padding-right:50px;">
                    <p style="margin-top: -15px; text-align: justify;">
                        Water and Wastewater (SMEWW) American Water Works Association, 22nd Edition (2012); Parameters and
                        Limits are based on Philippine National Standards for Drinking Water (2017) Thermotolerant Coliform - also
                        Fecal Coliform; MPN/100ml - Most Probable Number per 100 ml of sample; cfu - Colony Forming Unit per 1mL of sample
                    </p>
                </td>
            </tr>

            <tr >
                <td style="font-size:  13px;"> Note/s: </td>
                <td style="padding-left: 200px; font-size:  13px;">
                    <p>
                        Comma (,) is used in this report to emphasize presentation of decimal separation/s.
                    </p>
                </td>
            </tr>
        </thead>
    </table>

    {{-- padding-top: 45%; padding-left: 15px;  --}}
    <table class="table-fixed-bottom" style="width: 100%; padding-left: 15px;  ">
        <thead>
            <tr>
                <tr>
                    <td style="font-size:  13px;">
                        <p style="font-weight: 500;"> CHLOE JOY C. GABAN, RMicro </p>
                        <p style="margin-top: -3%; margin-left: 15%;"> Senior Microbiologist </p>
                        <p style="margin-top: -3%; margin-left: 4%;"> PAM Reg. No. 105-00250 RM </p>
                        <p style="margin-top: -3%; margin-left: 1px;"> DOH-RL Cert No. WMLA-18-0698 </p>
                    </td>

                    <td style="font-size:  13px; padding-left: 200px; margin-top; -200px;">
                        <p style="font-weight: 500;"> PAULO ANTONIO E. CLEMENTE, MD, DPSP </p>
                        <p style="margin-right: 10%; text-align: center;"> Head of Laboratory </p>
                        <p style="margin-right: 10%; text-align: center;"> PRC Reg. No. 0113927 </p>
                        <p></p>
                    </td>
                </tr>
            </tr>
        </thead>
    </table>

</body>
</html>
