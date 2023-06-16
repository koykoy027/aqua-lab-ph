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
            margin-top: 20px;
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

    </style>
</head>
<body>

    <div class="information-container">
        <div class="information">
            <p>Requested by: </p>

            @foreach ($details as $new_detail)
                <p>Main Source: <span class="main-source">{{ $new_detail->source_of_water_sample }}</span></p>
                <p>Water Purpose (Use): <span class="water-purpose">{{ $new_detail->water_purpose }}</span></p>
                <p>Date/Time Collected: <span class="date-time-collected">{{ $new_detail->date_collected." ".$new_detail->time_collected }}</span></p>
                <p>Collected By: <span class="collected-by">{{ $new_detail->collector_name }}</span></p>
            @endforeach
        </div>

        <div class="information-1">
            <p>Sampling Point: </p>
            <p>Type of Water: </p>
            <p>Date/Time Received: </p>
            <p>Date/Time Tested: </p>
        </div>
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
                    @foreach ($details as $detail)
                        <td class="details">{{ $detail->test_parameters }}</td>
                    @endforeach
                    <td class="details">{{ $micro_detail->micr1_hpc_average }}</td>
                    <td class="details">{{ $micro_detail->micr1_hpc_final_result }}</td>
                    <td class="details">{{ $micro_detail->micr1_hpc_average }}</td>
                    <td class="details">{{ $micro_detail->micr1_hpc_remarks }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

     <div class="remarks-container">
    
        <div class="remarks"> <p>Remarks: </p> </div>
        
        <div class="remarks-content">
            <p>Results of examination are specifically related to samples as received</p>
            <p>Pursuant to PNSDW 2017, sample was collected according to prescribed aseptic technique 
               and was contained and transported in a sterilized container at controlled temperature
               by Aqualab PH trained personnel.
            </p>
            <p>Sample analysis was conducted within eight (8) hours as prescribed by the standards.</p>
        </div>
    </div>

    <div class="reference">
        <div class="reference-content">
            <p>Reference/s:</p>
        </div>

        <div class="reference-content">
            <p>Method of Analysis are based on the Standard Methods for the Examination of Water and Wastewater (SMEWW)
                American Public Health Association, American Water Works Association, 22nd Edition (2012); Parameters and 
                Limits are based on Philippine National Standards for Drinking Water (2017) Thermotolerant Coliform - also
                Fecal Coliform; MPN/100ml - Most Probable Number per 100 ml of sample; cfu - Colony Forming Unit per 1mL of sample 
            </p>
        </div>
    </div>

    <div class="note">
        <div class="note-content">
            <p>Note/s:</p>
        </div>

        <div class="note-content">
            <p>Comma (,) is used in this report to emphasize presentation of decimal separation/s.</p>
        </div>
    </div>
   

</body>
</html>
