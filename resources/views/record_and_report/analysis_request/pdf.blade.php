{{-- <img src="{{ public_path('image/branding.png') }}" alt="Image"> --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sample Table</title>

    <style>

        .title {
            text-transform: uppercase;
            font-size: 16px;
            font-weight: 400; 
            text-align: center;
            margin-top: 30px;
        }
    
        .table-container {
            margin-left: auto;
            margin-right: auto;
            margin-top: 10px;
            border-collapse: collapse;
        }

        .head {
            border-top: 1px dotted black;
            border-bottom: 1px dotted black;
        }

        th {
            padding: 10px;
            text-transform: uppercase;
            font-size: 12px;
        }

        .details {
            padding-top: 10px;
            padding-left: 10px;
            padding-right: 10px;
            padding-bottom: 10px;
            text-align: center;
            text-transform: uppercase;
            font-size: 12px;
        }

        tbody {
            border-bottom: 1px dotted black;
        }


        .information {
            margin-left: 20px;
            font-size: 12px;
        }

        .information-1 {
            margin-left: 20px;
            font-size: 12px;
        }


        span {
            padding-left: 40px;
            font-size: 12px;
        }

        .main-source {
            padding-left: 80px;
        }

        .collected-by {
            padding-left: 79px;
        }

        .top-information {
            font-size: 12px;
        }

        span {
            margin-left: 20px
        }
        .main-source {
            margin-left: 21px;
        }

        .collected-by {
            margin-left: 21px;
        }
        

    </style>
</head>
<body>

    <div>
        <table style="width: 100%">
            <thead>
                <tr class="top-information">
                    <td>Requested By:</td> 
                </tr>

                <tr class="top-information">
                    <td>Main Source: <span class="main-source">{{ $details->source_of_water_sample }}</span></td>
                    <td>Sampling point:</td>
                </tr>

                <tr class="top-information">
                    <td>Water Purpose (Use): <span class="top-information-content">{{ $details->water_purpose }}</span></td>
                    <td>Type of Water:</td>
                </tr>

                <tr class="top-information">
                    <td>Date/Time Collected: <span class="top-information-content">{{ $details->date_collected." ".$details->time_collected }}</span></td>
                    <td>Date/Time Received:</td>
                </tr>

                <tr class="top-information">
                    <td>Collected by: <span class="collected-by">{{ $details->collector_name }}</span></td>
                    <td>Date/Time Tested:</td>
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
                        <td class="details">{{ $collection_detail->test_parameters }}</td>

                        @if ( $collection_detail->test_parameters == "MICR1 - Heterotrophic Plate Count (HPC)")
                            <td class="details">SMEWW 9215 B. Pour Plate Method</td>
                            <td class="details">{{ $micro_detail->micr1_hpc_final_result }}</td>
                            <td class="details">{{ $micro_detail->micr1_hpc_average }}</td>
                            <td class="details">{{ $micro_detail->micr1_hpc_remarks }}</td>
                        @elseif ( $collection_detail->test_parameters == "MICR2 - Thermotolerant Colifom Test" )
                            <td class="details">SMEWW 9221 Multiple Tube Fermentation Technique</td>
                            <td class="details">{{ $micro_detail->micr2_tc_final_result }}</td>
                            <td class="details">{{ $micro_detail->micr2_tc_48 }}</td>
                            <td class="details">{{ $micro_detail->micr2_tc_remarks }}</td>
                        @elseif ( $collection_detail->test_parameters == "MICR3 - Total Coliform" )
                            <td class="details">SMEWW 9221 Multiple Tube Fermentation Technique</td>
                            <td class="details">{{ $micro_detail->micr3_final_result }}</td>
                            <td class="details">{{ $micro_detail->micr3_brillant_48 }}</td>
                            <td class="details">{{ $micro_detail->micr3_remarks }}</td>
                        @endif

                    @endforeach
                </tr>
            @endforeach
        </tbody>
    </table> 

    <table tyle="width: 100%">
        <thead>
            <tr>
                <td style="font-size: 12px">Remarks:</td>
                <td style="padding-left: 200px; padding-right:50px; font-size: 12px"> 
                    <p>
                        Results of examination are specifically related to samples as received
                    </p>
                </td>
            </tr>

            <tr>
                <td></td>
                <td style="padding-left: 200px; padding-right:50px; font-size: 12px">
                    <p style="margin-top: -10px; font-weight: 500; text-align: justify;">Pursuant to PNSDW 2017, sample was collected according to prescribed aseptic technique 
                        and was contained and transported in a sterilized container at controlled temperature
                        by Aqualab PH trained personnel.
                    </p>
                </td>
            </tr>

            <tr>
                <td></td>
                <td style="padding-left: 200px; padding-right:50px; font-size: 12px;">
                    <p style="margin-top: -10px; font-weight: 500;">
                        Sample analysis was conducted within eight (8) hours as prescribed by the standards.
                    </p>
                </td>
            </tr>

            <tr>
                <td style="font-size: 12px;">Reference/s:</td>
                <td style="padding-left: 200px; padding-right:50px; font-size: 12px;">
                    <p>
                        Method of Analysis are based on the Standard Methods for the Examination of
                    </p>
                </td>
            </tr>

            <tr>
                <td></td>
                <td style="padding-left: 200px; font-size: 12px; padding-right:50px;">
                    <p style="margin-top: -15px; text-align: justify;">
                        Water and Wastewater (SMEWW) American Water Works Association, 22nd Edition (2012); Parameters and 
                        Limits are based on Philippine National Standards for Drinking Water (2017) Thermotolerant Coliform - also
                        Fecal Coliform; MPN/100ml - Most Probable Number per 100 ml of sample; cfu - Colony Forming Unit per 1mL of sample 
                    </p>
                </td>
            </tr>

            <tr >
                <td style="font-size: 12px;"> Note/s: </td>
                <td style="padding-left: 200px; font-size: 12px;">
                    <p>
                        Comma (,) is used in this report to emphasize presentation of decimal separation/s.
                    </p>
                </td>
            </tr>
        </thead>
    </table>

</body>
</html>
