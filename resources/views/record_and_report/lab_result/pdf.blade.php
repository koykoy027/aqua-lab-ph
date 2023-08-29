{{-- <img src="{{ public_path('image/branding.png') }}" alt="Image"> --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $clients->account_name }}</title>
    {{-- <style>
            /* ! tailwindcss v3.2.4 | MIT License | https://tailwindcss.com */*,::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}::after,::before{--tw-content:''}html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;font-family:Figtree, sans-serif;font-feature-settings:normal}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-size:100%;font-weight:inherit;line-height:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}menu,ol,ul{list-style:none;margin:0;padding:0}textarea{resize:vertical}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}[role=button],button{cursor:pointer}:disabled{cursor:default}audio,canvas,embed,iframe,img,object,svg,video{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]{display:none}*, ::before, ::after{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::-webkit-backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }.relative{position:relative}.mx-auto{margin-left:auto;margin-right:auto}.mx-6{margin-left:1.5rem;margin-right:1.5rem}.ml-4{margin-left:1rem}.mt-16{margin-top:4rem}.mt-6{margin-top:1.5rem}.mt-4{margin-top:1rem}.-mt-px{margin-top:-1px}.mr-1{margin-right:0.25rem}.flex{display:flex}.inline-flex{display:inline-flex}.grid{display:grid}.h-16{height:4rem}.h-7{height:1.75rem}.h-6{height:1.5rem}.h-5{height:1.25rem}.min-h-screen{min-height:100vh}.w-auto{width:auto}.w-16{width:4rem}.w-7{width:1.75rem}.w-6{width:1.5rem}.w-5{width:1.25rem}.max-w-7xl{max-width:80rem}.shrink-0{flex-shrink:0}.scale-100{--tw-scale-x:1;--tw-scale-y:1;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.grid-cols-1{grid-template-columns:repeat(1, minmax(0, 1fr))}.items-center{align-items:center}.justify-center{justify-content:center}.gap-6{gap:1.5rem}.gap-4{gap:1rem}.self-center{align-self:center}.rounded-lg{border-radius:0.5rem}.rounded-full{border-radius:9999px}.bg-gray-100{--tw-bg-opacity:1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.bg-white{--tw-bg-opacity:1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-red-50{--tw-bg-opacity:1;background-color:rgb(254 242 242 / var(--tw-bg-opacity))}.bg-dots-darker{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E")}.from-gray-700\/50{--tw-gradient-from:rgb(55 65 81 / 0.5);--tw-gradient-to:rgb(55 65 81 / 0);--tw-gradient-stops:var(--tw-gradient-from), var(--tw-gradient-to)}.via-transparent{--tw-gradient-to:rgb(0 0 0 / 0);--tw-gradient-stops:var(--tw-gradient-from), transparent, var(--tw-gradient-to)}.bg-center{background-position:center}.stroke-red-500{stroke:#ef4444}.stroke-gray-400{stroke:#9ca3af}.p-6{padding:1.5rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.text-center{text-align:center}.text-right{text-align:right}.text-xl{font-size:1.25rem;line-height:1.75rem}.text-sm{font-size:0.875rem;line-height:1.25rem}.font-semibold{font-weight:600}.leading-relaxed{line-height:1.625}.text-gray-600{--tw-text-opacity:1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity:1;color:rgb(107 114 128 / var(--tw-text-opacity))}.underline{-webkit-text-decoration-line:underline;text-decoration-line:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.shadow-2xl{--tw-shadow:0 25px 50px -12px rgb(0 0 0 / 0.25);--tw-shadow-colored:0 25px 50px -12px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.shadow-gray-500\/20{--tw-shadow-color:rgb(107 114 128 / 0.2);--tw-shadow:var(--tw-shadow-colored)}.transition-all{transition-property:all;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.selection\:bg-red-500 *::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white *::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.selection\:bg-red-500::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.hover\:text-gray-900:hover{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.hover\:text-gray-700:hover{--tw-text-opacity:1;color:rgb(55 65 81 / var(--tw-text-opacity))}.focus\:rounded-sm:focus{border-radius:0.125rem}.focus\:outline:focus{outline-style:solid}.focus\:outline-2:focus{outline-width:2px}.focus\:outline-red-500:focus{outline-color:#ef4444}.group:hover .group-hover\:stroke-gray-600{stroke:#4b5563}.z-10{z-index: 10}@media (prefers-reduced-motion: no-preference){.motion-safe\:hover\:scale-\[1\.01\]:hover{--tw-scale-x:1.01;--tw-scale-y:1.01;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}}@media (prefers-color-scheme: dark){.dark\:bg-gray-900{--tw-bg-opacity:1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:bg-gray-800\/50{background-color:rgb(31 41 55 / 0.5)}.dark\:bg-red-800\/20{background-color:rgb(153 27 27 / 0.2)}.dark\:bg-dots-lighter{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E")}.dark\:bg-gradient-to-bl{background-image:linear-gradient(to bottom left, var(--tw-gradient-stops))}.dark\:stroke-gray-600{stroke:#4b5563}.dark\:text-gray-400{--tw-text-opacity:1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:shadow-none{--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.dark\:ring-1{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.dark\:ring-inset{--tw-ring-inset:inset}.dark\:ring-white\/5{--tw-ring-color:rgb(255 255 255 / 0.05)}.dark\:hover\:text-white:hover{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.group:hover .dark\:group-hover\:stroke-gray-400{stroke:#9ca3af}}@media (min-width: 640px){.sm\:fixed{position:fixed}.sm\:top-0{top:0px}.sm\:right-0{right:0px}.sm\:ml-0{margin-left:0px}.sm\:flex{display:flex}.sm\:items-center{align-items:center}.sm\:justify-center{justify-content:center}.sm\:justify-between{justify-content:space-between}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width: 768px){.md\:grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}}@media (min-width: 1024px){.lg\:gap-8{gap:2rem}.lg\:p-8{padding:2rem}}
    </style> --}}

    <style>

        body {
            /* margin-top: 235px; */
            line-height: 1;
            font-size: small;

        }

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

        .result_details {
            /* padding-top: 10px; */
            padding-left: 10px;
            padding-right: 10px;
            padding-bottom: 10px;
            text-align: left;
            text-transform: uppercase;
            font-size:  10px;
        }

        .limit_details {
            /* padding-top: 10px; */
            padding-left: 10px;
            padding-right: 10px;
            padding-bottom: 10px;
            text-align: left;
            text-transform: uppercase;
            font-size:  10px;
        }


        .remarks_details {
            /* padding-top: 10px; */
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

        .requested {
            padding-left: 50px;
        }
        .main-source {
            padding-left: 55px;
        }
        .sampling_point {
            padding-left: 88px;
        }
        .water_purpose {
            padding-left: 13px;
        }
        .date_time_collecteed {
            padding-left: 13px;
        }
        .type_of_water {
            padding-left: 92px;
        }
        .date_time_received {
            padding-left: 60px;
        }
        .date_time_tested {
            padding-left: 73px;
        }
        .collected-by {
            padding-left: 56px;
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
        .e_signature {
            width: 250px;
            margin-left: 3px;
        }
        .e_signature1 {
            width: 250px;
            margin-left: 30px;
        }

        .lims {
            margin-top: -35px;
            width: 350px;
            margin-left: -25px;
        }
        .doh {
            margin-top: -35px;
            width: 150px;
            margin-left: 260px;
        }
        .certi {
            margin-left: 50px;
        }
        .certi_no {
            padding-left: 50px;
        }
        .acc {
            margin-left: 50px;
        }
        .acc_id {
            padding-left: 67px;
        }
        .sample {
            margin-left: 50px;
        }
        .sample_id {
            padding-left: 71px;
        }

        .collected-by {
            /* padding-left: 90px; */
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

        <table style="width: 100%; margin-top: 0px">
            <thead>
                <tr>
                    <td style="font-size:  13px; font-weight: 900">
                        <p >SAPROPRO ICE AND COLD STORAGE COMPANY INC.</p>
                        <p>MANGAYSAY RD, DAINE I, INDANG CAVITE 4122.</p>
                    </td>

                    <td style="font-size:  13px; padding-right: 40px">
                        <p class="certi">Certificate No: <span class="certi_no"></span></p>
                        <p class="acc">Account ID: <span class="acc_id">49SRL0623WSP{{ $details->account_number }}</span> </p>
                        <p class="sample">Sample ID: <span class="sample_id">{{ $details->analysis_id }}</span></p>
                    </td>
                </tr>
            </thead>
        </table>

        <table style="width: 100%; margin-top: 30px">
            <thead>
                <tr class="top-information">
                    {{-- <td>Requested By: <span class="requested">{{ $labAcceptance->evaluated_by }}</span></td> --}}
                    <td>Requested By: <span class="requested">Lorem ipsum dolor sit amet consectetur.</span></td>
                </tr>

                <tr class="top-information">
                    <td>Main Source: <span class="main-source">{{ $details->source_of_water_sample }}</span></td>
                    <td>Sampling point: <span class="sampling_point">{{ $details->collection_point }}</td>
                </tr>

                <tr class="top-information">
                    <td>Water Purpose (Use): <span class="water_purpose">{{ $details->water_purpose }}</span></td>
                    <td>Type of Water: <span class="type_of_water">{{ $details->water_purpose }}</span></td>
                </tr>

                <tr class="top-information">
                    <td>Date/Time Collected: <span class="date_time_collecteed">{{ $labAcceptance->date_evaluated }} {{ $labAcceptance->time_evaluated }}</span></td>
                    <td>Date/Time Received: <span class="date_time_received">{{ $details->date_collected }} - {{ $details->time_collected }}</span></td>
                </tr>

                <tr class="top-information">
                    <td>Collected by: <span class="collected-by">{{ $details->collector_name }}</span></td>
                    <td>Date/Time Tested: <span class="date_time_tested">{{ $labAcceptance->date_evaluated }} {{ $labAcceptance->time_evaluated }}</span></td>
                </tr>

            </thead>
        </table>
    </div>

    <div class="title" style="font-size: small">
        @if ($analysisRequests->test_parameters === 'MICR1 - Heterotrophic Plate Count (HPC)' OR
            $analysisRequests->test_parameters === 'MICR2 - Thermotolerant Colifom Test' OR
            $analysisRequests->test_parameters === 'MICR3 - Total Coliform' OR
            $analysisRequests->test_parameters === 'MICR4 - E. coli Test' OR
            $analysisRequests->test_parameters === 'MICR5 - All three (3) Mandatory Microbiological Parameters (PNSDW 2017/DOH AO 2013-003)'
        )
        C E R T I F I C A T E O F M I C R O B I O L O G I C A L A N A L Y S I S
        @else
        C E R T I F I C A T E O F P H Y S I C A L A N D C H E M I C A L A N A L Y S I S
        @endif
    </div>

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

            @foreach ( $rawDatas as $micro_detail)
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
                                <p class="result_details">{{ $micro_detail->micr1_hpc_final_result }}</p>
                                <p class="result_details">{{ $micro_detail->micr2_tc_final_result }}</p>
                                <p class="result_details">{{ $micro_detail->micr3_final_result }}</p>
                            </td>

                            <td class="details">
                                <p class="limit_details">100</p>
                                <p class="limit_details">100</p>
                                <p class="limit_details">100</p>
                            </td>

                            <td class="details">
                                <p class="remarks_details">{{ $micro_detail->micr1_hpc_remarks }}</p>
                                <p class="remarks_details">{{ $micro_detail->micr2_tc_remarks }}</p>
                                <p class="remarks_details">{{ $micro_detail->micr3_remarks }}   </p>
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
                        Method of Analysis are based on the Standard Methods for the Examination of Water and Wastewater (SMEWW) American Water Works Association, 22nd Edition (2012); Parameters and
                        Limits are based on Philippine National Standards for Drinking Water (2017) Thermotolerant Coliform - also
                        Fecal Coliform; MPN/100ml - Most Probable Number per 100 ml of sample; cfu - Colony Forming Unit per 1mL of sample
                    </p>
                </td>
            </tr>

            {{-- <tr>
                <td></td>
                <td style="padding-left: 200px; font-size:  13px; padding-right:50px;">
                    <p style="margin-top: -15px; text-align: justify;">
                        Water and Wastewater (SMEWW) American Water Works Association, 22nd Edition (2012); Parameters and
                        Limits are based on Philippine National Standards for Drinking Water (2017) Thermotolerant Coliform - also
                        Fecal Coliform; MPN/100ml - Most Probable Number per 100 ml of sample; cfu - Colony Forming Unit per 1mL of sample
                    </p>
                </td>
            </tr> --}}

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
                        <img src="{{ public_path('image/e-signature.JPG') }}" class="e_signature" alt="signature">
                        <p style="font-weight: 500;"> CHLOE JOY C. GABAN, RMicro </p>
                        <p style="margin-top: -3%; margin-left: 15%;"> Senior Microbiologist </p>
                        <p style="margin-top: -3%; margin-left: 4%;"> PAM Reg. No. 105-00250 RM </p>
                        <p style="margin-top: -3%; margin-left: 1px;"> DOH-RL Cert No. WMLA-18-0698 </p>
                    </td>

                    <td style="font-size:  13px; padding-left: 180px; margin-top; -200px;">
                        <img src="{{ public_path('image/e-signature.JPG') }}" class="e_signature1" alt="signature">
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
