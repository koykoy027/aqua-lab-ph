{{-- <img src="{{ public_path('image/branding.png') }}" alt="Image"> --}}

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $clients->account_name }}</title>

    {{-- ! tailwindcss v3.2.4 | MIT License | https://tailwindcss.com --}}
    <style>
        *,
        ::after,
        ::before {
            box-sizing: border-box;
            border-width: 0;
            border-style: solid;
            border-color: #e5e7eb
        }

        ::after,
        ::before {
            --tw-content: ''
        }

        html {
            line-height: 1.5;
            -webkit-text-size-adjust: 100%;
            -moz-tab-size: 4;
            tab-size: 4;
            font-family: Arial, Helvetica, sans-serif;
            font-feature-settings: normal;
            font-size: 10px;
        }

        body {
            margin: 0;
            line-height: inherit
        }

        hr {
            height: 0;
            color: inherit;
            border-top-width: 1px
        }

        abbr:where([title]) {
            -webkit-text-decoration: underline dotted;
            text-decoration: underline dotted
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-size: inherit;
            font-weight: inherit
        }

        a {
            color: inherit;
            text-decoration: inherit
        }

        b,
        strong {
            font-weight: bolder
        }

        code,
        kbd,
        pre,
        samp {
            font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
            font-size: 1em
        }

        small {
            font-size: 80%
        }

        sub,
        sup {
            font-size: 75%;
            line-height: 0;
            position: relative;
            vertical-align: baseline
        }

        sub {
            bottom: -.25em
        }

        sup {
            top: -.5em
        }

        /* table {
            text-indent: 0;
            border-color: inherit;
            border-collapse: collapse
        } */

        button,
        input,
        optgroup,
        select,
        textarea {
            font-family: inherit;
            font-size: 100%;
            font-weight: inherit;
            line-height: inherit;
            color: inherit;
            margin: 0;
            padding: 0
        }

        button,
        select {
            text-transform: none
        }

        [type=button],
        [type=reset],
        [type=submit],
        button {
            -webkit-appearance: button;
            background-color: transparent;
            background-image: none
        }

        :-moz-focusring {
            outline: auto
        }

        :-moz-ui-invalid {
            box-shadow: none
        }

        progress {
            vertical-align: baseline
        }

        ::-webkit-inner-spin-button,
        ::-webkit-outer-spin-button {
            height: auto
        }

        [type=search] {
            -webkit-appearance: textfield;
            outline-offset: -2px
        }

        ::-webkit-search-decoration {
            -webkit-appearance: none
        }

        ::-webkit-file-upload-button {
            -webkit-appearance: button;
            font: inherit
        }

        summary {
            display: list-item
        }

        blockquote,
        dd,
        dl,
        figure,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        hr,
        p,
        pre {
            margin: 0
        }

        fieldset {
            margin: 0;
            padding: 0
        }

        legend {
            padding: 0
        }

        menu,
        ol,
        ul {
            list-style: none;
            margin: 0;
            padding: 0
        }

        textarea {
            resize: vertical
        }

        input::placeholder,
        textarea::placeholder {
            opacity: 1;
            color: #9ca3af
        }

        [role=button],
        button {
            cursor: pointer
        }

        :disabled {
            cursor: default
        }

        audio,
        canvas,
        embed,
        iframe,
        img,
        object,
        svg,
        video {
            display: block;
            vertical-align: middle
        }

        img,
        video {
            max-width: 100%;
            height: auto
        }

        [hidden] {
            display: none
        }

        *,
        ::before,
        ::after {
            --tw-border-spacing-x: 0;
            --tw-border-spacing-y: 0;
            --tw-translate-x: 0;
            --tw-translate-y: 0;
            --tw-rotate: 0;
            --tw-skew-x: 0;
            --tw-skew-y: 0;
            --tw-scale-x: 1;
            --tw-scale-y: 1;
            --tw-pan-x: ;
            --tw-pan-y: ;
            --tw-pinch-zoom: ;
            --tw-scroll-snap-strictness: proximity;
            --tw-ordinal: ;
            --tw-slashed-zero: ;
            --tw-numeric-figure: ;
            --tw-numeric-spacing: ;
            --tw-numeric-fraction: ;
            --tw-ring-inset: ;
            --tw-ring-offset-width: 0px;
            --tw-ring-offset-color: #fff;
            --tw-ring-color: rgb(59 130 246 / 0.5);
            --tw-ring-offset-shadow: 0 0 #0000;
            --tw-ring-shadow: 0 0 #0000;
            --tw-shadow: 0 0 #0000;
            --tw-shadow-colored: 0 0 #0000;
            --tw-blur: ;
            --tw-brightness: ;
            --tw-contrast: ;
            --tw-grayscale: ;
            --tw-hue-rotate: ;
            --tw-invert: ;
            --tw-saturate: ;
            --tw-sepia: ;
            --tw-drop-shadow: ;
            --tw-backdrop-blur: ;
            --tw-backdrop-brightness: ;
            --tw-backdrop-contrast: ;
            --tw-backdrop-grayscale: ;
            --tw-backdrop-hue-rotate: ;
            --tw-backdrop-invert: ;
            --tw-backdrop-opacity: ;
            --tw-backdrop-saturate: ;
            --tw-backdrop-sepia:
        }

        ::-webkit-backdrop {
            --tw-border-spacing-x: 0;
            --tw-border-spacing-y: 0;
            --tw-translate-x: 0;
            --tw-translate-y: 0;
            --tw-rotate: 0;
            --tw-skew-x: 0;
            --tw-skew-y: 0;
            --tw-scale-x: 1;
            --tw-scale-y: 1;
            --tw-pan-x: ;
            --tw-pan-y: ;
            --tw-pinch-zoom: ;
            --tw-scroll-snap-strictness: proximity;
            --tw-ordinal: ;
            --tw-slashed-zero: ;
            --tw-numeric-figure: ;
            --tw-numeric-spacing: ;
            --tw-numeric-fraction: ;
            --tw-ring-inset: ;
            --tw-ring-offset-width: 0px;
            --tw-ring-offset-color: #fff;
            --tw-ring-color: rgb(59 130 246 / 0.5);
            --tw-ring-offset-shadow: 0 0 #0000;
            --tw-ring-shadow: 0 0 #0000;
            --tw-shadow: 0 0 #0000;
            --tw-shadow-colored: 0 0 #0000;
            --tw-blur: ;
            --tw-brightness: ;
            --tw-contrast: ;
            --tw-grayscale: ;
            --tw-hue-rotate: ;
            --tw-invert: ;
            --tw-saturate: ;
            --tw-sepia: ;
            --tw-drop-shadow: ;
            --tw-backdrop-blur: ;
            --tw-backdrop-brightness: ;
            --tw-backdrop-contrast: ;
            --tw-backdrop-grayscale: ;
            --tw-backdrop-hue-rotate: ;
            --tw-backdrop-invert: ;
            --tw-backdrop-opacity: ;
            --tw-backdrop-saturate: ;
            --tw-backdrop-sepia:
        }

        ::backdrop {
            --tw-border-spacing-x: 0;
            --tw-border-spacing-y: 0;
            --tw-translate-x: 0;
            --tw-translate-y: 0;
            --tw-rotate: 0;
            --tw-skew-x: 0;
            --tw-skew-y: 0;
            --tw-scale-x: 1;
            --tw-scale-y: 1;
            --tw-pan-x: ;
            --tw-pan-y: ;
            --tw-pinch-zoom: ;
            --tw-scroll-snap-strictness: proximity;
            --tw-ordinal: ;
            --tw-slashed-zero: ;
            --tw-numeric-figure: ;
            --tw-numeric-spacing: ;
            --tw-numeric-fraction: ;
            --tw-ring-inset: ;
            --tw-ring-offset-width: 0px;
            --tw-ring-offset-color: #fff;
            --tw-ring-color: rgb(59 130 246 / 0.5);
            --tw-ring-offset-shadow: 0 0 #0000;
            --tw-ring-shadow: 0 0 #0000;
            --tw-shadow: 0 0 #0000;
            --tw-shadow-colored: 0 0 #0000;
            --tw-blur: ;
            --tw-brightness: ;
            --tw-contrast: ;
            --tw-grayscale: ;
            --tw-hue-rotate: ;
            --tw-invert: ;
            --tw-saturate: ;
            --tw-sepia: ;
            --tw-drop-shadow: ;
            --tw-backdrop-blur: ;
            --tw-backdrop-brightness: ;
            --tw-backdrop-contrast: ;
            --tw-backdrop-grayscale: ;
            --tw-backdrop-hue-rotate: ;
            --tw-backdrop-invert: ;
            --tw-backdrop-opacity: ;
            --tw-backdrop-saturate: ;
            --tw-backdrop-sepia:
        }

        .relative {
            position: relative
        }

        .mx-auto {
            margin-left: auto;
            margin-right: auto
        }

        .mx-6 {
            margin-left: 1.5rem;
            margin-right: 1.5rem
        }

        .ml-4 {
            margin-left: 1rem
        }

        .mt-16 {
            margin-top: 4rem
        }

        .mt-6 {
            margin-top: 1.5rem
        }

        .mt-4 {
            margin-top: 1rem
        }

        .-mt-px {
            margin-top: -1px
        }

        .mr-1 {
            margin-right: 0.25rem
        }

        .flex {
            display: flex
        }

        .inline-flex {
            display: inline-flex
        }

        .grid {
            display: grid
        }

        .h-16 {
            height: 4rem
        }

        .h-7 {
            height: 1.75rem
        }

        .h-6 {
            height: 1.5rem
        }

        .h-5 {
            height: 1.25rem
        }

        .min-h-screen {
            min-height: 100vh
        }

        .w-auto {
            width: auto
        }

        .w-16 {
            width: 4rem
        }

        .w-7 {
            width: 1.75rem
        }

        .w-6 {
            width: 1.5rem
        }

        .w-5 {
            width: 1.25rem
        }

        .max-w-7xl {
            max-width: 80rem
        }

        .shrink-0 {
            flex-shrink: 0
        }

        .scale-100 {
            --tw-scale-x: 1;
            --tw-scale-y: 1;
            transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
        }

        .grid-cols-1 {
            grid-template-columns: repeat(1, minmax(0, 1fr))
        }

        .items-center {
            align-items: center
        }

        .justify-center {
            justify-content: center
        }

        .gap-6 {
            gap: 1.5rem
        }

        .gap-4 {
            gap: 1rem
        }

        .self-center {
            align-self: center
        }

        .rounded-lg {
            border-radius: 0.5rem
        }

        .rounded-full {
            border-radius: 9999px
        }

        .bg-gray-100 {
            --tw-bg-opacity: 1;
            background-color: rgb(243 244 246 / var(--tw-bg-opacity))
        }

        .bg-white {
            --tw-bg-opacity: 1;
            background-color: rgb(255 255 255 / var(--tw-bg-opacity))
        }

        .bg-red-50 {
            --tw-bg-opacity: 1;
            background-color: rgb(254 242 242 / var(--tw-bg-opacity))
        }

        .bg-dots-darker {
            background-image: url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E")
        }

        .from-gray-700\/50 {
            --tw-gradient-from: rgb(55 65 81 / 0.5);
            --tw-gradient-to: rgb(55 65 81 / 0);
            --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to)
        }

        .via-transparent {
            --tw-gradient-to: rgb(0 0 0 / 0);
            --tw-gradient-stops: var(--tw-gradient-from), transparent, var(--tw-gradient-to)
        }

        .bg-center {
            background-position: center
        }

        .stroke-red-500 {
            stroke: #ef4444
        }

        .stroke-gray-400 {
            stroke: #9ca3af
        }

        .p-6 {
            padding: 1.5rem
        }

        .px-6 {
            padding-left: 1.5rem;
            padding-right: 1.5rem
        }

        .text-center {
            text-align: center
        }

        .text-right {
            text-align: right
        }

        .text-xl {
            font-size: 1.25rem;
            line-height: 1.75rem
        }

        .text-sm {
            font-size: 0.875rem;
            line-height: 1.25rem
        }

        .font-semibold {
            font-weight: 600
        }

        .leading-relaxed {
            line-height: 1.625
        }

        .text-gray-600 {
            --tw-text-opacity: 1;
            color: rgb(75 85 99 / var(--tw-text-opacity))
        }

        .text-gray-900 {
            --tw-text-opacity: 1;
            color: rgb(17 24 39 / var(--tw-text-opacity))
        }

        .text-gray-500 {
            --tw-text-opacity: 1;
            color: rgb(107 114 128 / var(--tw-text-opacity))
        }

        .underline {
            -webkit-text-decoration-line: underline;
            text-decoration-line: underline
        }

        .antialiased {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .shadow-2xl {
            --tw-shadow: 0 25px 50px -12px rgb(0 0 0 / 0.25);
            --tw-shadow-colored: 0 25px 50px -12px var(--tw-shadow-color);
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)
        }

        .shadow-gray-500\/20 {
            --tw-shadow-color: rgb(107 114 128 / 0.2);
            --tw-shadow: var(--tw-shadow-colored)
        }

        .transition-all {
            transition-property: all;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
            transition-duration: 150ms
        }

        .selection\:bg-red-500 *::selection {
            --tw-bg-opacity: 1;
            background-color: rgb(239 68 68 / var(--tw-bg-opacity))
        }

        .selection\:text-white *::selection {
            --tw-text-opacity: 1;
            color: rgb(255 255 255 / var(--tw-text-opacity))
        }

        .selection\:bg-red-500::selection {
            --tw-bg-opacity: 1;
            background-color: rgb(239 68 68 / var(--tw-bg-opacity))
        }

        .selection\:text-white::selection {
            --tw-text-opacity: 1;
            color: rgb(255 255 255 / var(--tw-text-opacity))
        }

        .hover\:text-gray-900:hover {
            --tw-text-opacity: 1;
            color: rgb(17 24 39 / var(--tw-text-opacity))
        }

        .hover\:text-gray-700:hover {
            --tw-text-opacity: 1;
            color: rgb(55 65 81 / var(--tw-text-opacity))
        }

        .focus\:rounded-sm:focus {
            border-radius: 0.125rem
        }

        .focus\:outline:focus {
            outline-style: solid
        }

        .focus\:outline-2:focus {
            outline-width: 2px
        }

        .focus\:outline-red-500:focus {
            outline-color: #ef4444
        }

        .group:hover .group-hover\:stroke-gray-600 {
            stroke: #4b5563
        }

        .z-10 {
            z-index: 10
        }

        @media (prefers-reduced-motion: no-preference) {
            .motion-safe\:hover\:scale-\[1\.01\]:hover {
                --tw-scale-x: 1.01;
                --tw-scale-y: 1.01;
                transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
            }
        }

        @media (prefers-color-scheme: dark) {
            .dark\:bg-gray-900 {
                --tw-bg-opacity: 1;
                background-color: rgb(17 24 39 / var(--tw-bg-opacity))
            }

            .dark\:bg-gray-800\/50 {
                background-color: rgb(31 41 55 / 0.5)
            }

            .dark\:bg-red-800\/20 {
                background-color: rgb(153 27 27 / 0.2)
            }

            .dark\:bg-dots-lighter {
                background-image: url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E")
            }

            .dark\:bg-gradient-to-bl {
                background-image: linear-gradient(to bottom left, var(--tw-gradient-stops))
            }

            .dark\:stroke-gray-600 {
                stroke: #4b5563
            }

            .dark\:text-gray-400 {
                --tw-text-opacity: 1;
                color: rgb(156 163 175 / var(--tw-text-opacity))
            }

            .dark\:text-white {
                --tw-text-opacity: 1;
                color: rgb(255 255 255 / var(--tw-text-opacity))
            }

            .dark\:shadow-none {
                --tw-shadow: 0 0 #0000;
                --tw-shadow-colored: 0 0 #0000;
                box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)
            }

            .dark\:ring-1 {
                --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
                --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);
                box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)
            }

            .dark\:ring-inset {
                --tw-ring-inset: inset
            }

            .dark\:ring-white\/5 {
                --tw-ring-color: rgb(255 255 255 / 0.05)
            }

            .dark\:hover\:text-white:hover {
                --tw-text-opacity: 1;
                color: rgb(255 255 255 / var(--tw-text-opacity))
            }

            .group:hover .dark\:group-hover\:stroke-gray-400 {
                stroke: #9ca3af
            }
        }

        @media (min-width: 640px) {
            .sm\:fixed {
                position: fixed
            }

            .sm\:top-0 {
                top: 0px
            }

            .sm\:right-0 {
                right: 0px
            }

            .sm\:ml-0 {
                margin-left: 0px
            }

            .sm\:flex {
                display: flex
            }

            .sm\:items-center {
                align-items: center
            }

            .sm\:justify-center {
                justify-content: center
            }

            .sm\:justify-between {
                justify-content: space-between
            }

            .sm\:text-left {
                text-align: left
            }

            .sm\:text-right {
                text-align: right
            }
        }

        @media (min-width: 768px) {
            .md\:grid-cols-2 {
                grid-template-columns: repeat(2, minmax(0, 1fr))
            }
        }

        @media (min-width: 1024px) {
            .lg\:gap-8 {
                gap: 2rem
            }

            .lg\:p-8 {
                padding: 2rem
            }
        }
    </style>

    {{-- custom style --}}
    <style>
        
        /* global style */
        table {
            width: 100%;
        }
        .uppercase {
            text-transform: uppercase;
        }
        .text-center {
            text-align: center;
        }
        .text-start {
            text-align: start;
        }
        .bold {
            font-weight: bold;
        }
        .w-20{
            width: 20%;
        }
        .w-30{
            width: 30%;
        }

        /* custom style */
        .lims {
            margin-top: -30px;
            height: 90px;
            width: 300px;
            margin-left: -20px;
        }

        .doh {
            margin-top: -30px;
            height: 70px;
            width: 140px;
            /* margin-left: 280px; */
        }

        .header-dotted {
            border-top: 1px dotted black;
            border-bottom: 1px dotted black;
        }

        .footer-dotted {
            border-bottom: 1px dotted black;
        }
    </style>
</head>

<body>

    {{-- header --}}
    <table style="margin-top: 0px">
        <thead>
            <tr>
                <td style="font-size: 13px; font-weight: 900; text-align: left; ">
                    <img src="{{ public_path('image/branding.png') }}" class="lims" alt="lab-aqua">
                </td>

                <td style="font-size: 13px; padding-right: 10px; text-align: right;">
                    <img src="{{ public_path('image/doh_logo.JPG') }}" class="doh" alt="doh-logo">
                </td>
            </tr>
        </thead>
    </table>


    <table style="margin-top: -15px; ">
        <thead>
            <tr>
                <td style="font-size:  11px; color:grey;">
                    <p>
                        Aqualab Analytical Services Inc., operating under the name "AQUALAB PH" <br>
                        Block 39 Lot 1&3 Green Estate 3 Malagasang I-G Imus City 4103 Cavite <br>
                        Tel. No.: <a href="tel:(046) 686 3704">(046) 686 3704</a> | Mobile No. <a href="tel:0919 087 4880">0919 087 4880</a> | Email:<a href="mailto:info@aqualabph.com">info@aqualabph.com</a>
                    </p>
                </td>
            </tr>
        </thead>
    </table>
    {{-- end of header --}}

    {{-- info --}}
    <table>
        <thead>
            <tr>
                <td colspan="3"></td>
                <td>Certificate No. </td>
                <td style="color: {{ $analysisRequests->test_parameters == 'micro' ? '' : 'red' }};">
                    <b> {{ $certificateNo }} </b>
                </td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td colspan="3" rowspan="2">
                    <b>{{ $clients->account_name }} </b> <br />
                    {{ $clients->unit_no_floor_bldg_name }}
                    {{ $clients->street_name_or_subdivision }}
                    {{ $clients->barangay_name }} <br />
                    {{ $clients->municipality_or_city }}
                    {{ $clients->province }}
                    {{ $clients->zip_code }}
                </td>
                <td>
                    Account ID <br />
                    Sample ID
                </td>
                <td>
                    {{ $clients->client_id }} <br />
                    {{ $analysisRequests->labAcceptance->sample_id }}
                </td>
            </tr>

            <tr>
                <td colspan="5"></td>
            </tr>
            <br>
            <tr>
                <td>Requested by:</td>
                <td class="uppercase" colspan="2">{{ $clients->name_of_owner }}</td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>Main Source:</td>
                <td class="uppercase" colspan="2">{{ $analysisRequests->source_of_water_sample }}</td>
                <td>Sampling Point:</td>
                <td class="uppercase">{{ $analysisRequests->collection_point }}</td>
            </tr>
            <tr>
                <td>Water Purpose (Use):</td>
                <td class="uppercase" colspan="2">
                    {{ 
                        $analysisRequests->water_purpose == 'Others' ?
                        $analysisRequests->water_purpose_others : $analysisRequests->water_purpose 
                    }}
                </td>
                <td>Type of Water:</td>
                <td class="uppercase">
                    {{ 
                        $analysisRequests->type_of_water == 'Others' ? 
                        $analysisRequests->type_of_water_others : $analysisRequests->type_of_water
                    }}
                </td>
            </tr>
            <tr>
                <td>Date/Time Collected:</td>
                <td colspan="2">
                    {{ Carbon\Carbon::parse($analysisRequests->date_collected)->format('m/d/Y') }} -
                    {{ Carbon\Carbon::parse($analysisRequests->time_collected)->format('g:i A') }}
                </td>
                <td>Date/Time Received:</td>
                <td>
                    {{ Carbon\Carbon::parse($labAcceptance->date_evaluated)->format('m/d/Y') }} -
                    {{ Carbon\Carbon::parse($labAcceptance->time_evaluated)->format('g:i A') }}
                </td>
            </tr>
            <tr>
                <td>Collected By:</td>
                <td class="uppercase" colspan="2">{{ $analysisRequests->collector_name }}</td>
                <td>Date/Time Tested:</td>
                <td>
                    {{ \Carbon\Carbon::parse($labAcceptance->created_at)->format('m/d/Y - g:i A') }}
                </td>
            </tr>
        </tbody>
    </table>
    {{-- end of info --}}

    <br />
    <p class="text-center uppercase bold" style="letter-spacing: 4px;">
        {{
            $analysisRequests->test_parameters == 'micro' ?
            'CERTIFICATE OF MICROBIOLOGICAL ANALYSIS' :
            'CERTIFICATE OF PHYSICAL AND CHEMICAL ANALYSIS'
        }}
    </p>

    {{-- contents --}}
    <table>
        <thead class="header-dotted">
            <tr class="text-center uppercase" >
                <td class="w-20" style="padding: 10px">parameter</td>
                <td class="w-20" style="padding: 10px">method of analysis</td>
                <td class="w-20" style="padding: 10px">result</td>
                <td class="w-20" style="padding: 10px">limit</td>
                <td class="w-20" style="padding: 10px">remarks</td>
            </tr>
        </thead>
        
        <tbody>
            @foreach ($collection_details as $collection_detail)
                @foreach ($test_parameters as $test_parameter)
                    @foreach ($library_test_parameters as $library_test_parameter)

                        @if ($test_parameter->test_parameters == $library_test_parameter->id)
                            <tr>
                                <td class="w-20 text-start">
                                    {{ $library_test_parameter->service }}, {{ $library_test_parameter->limit }}
                                    
                                </td>

                                <td class="w-30 text-start">
                                    {{ $library_test_parameter->method }}
                                </td>

                                @if ($library_test_parameter->id == 1)
                                    @foreach ($micro1 as $data)
                                        <td class="w-20 text-center">{{ str_replace('.', ',', $data->micr1_hpc_final_result) }}</td>
                                        <td class="w-20 text-center">{!! $library_test_parameter->specs !!}</td>
                                        <td class="w-20 text-center">{{ $data->micr1_hpc_remarks }}</td>
                                    @endforeach
                                @endif

                                @if ($library_test_parameter->id == 3)
                                    @foreach ($micro2 as $data)
                                        <td class="w-20 text-center">{{ str_replace('.', ',', $data->micr2_tc_final_result) }}</td>
                                        <td class="w-20 text-center">{!! $library_test_parameter->specs !!}</td>
                                    <td class="w-20 text-center">{{ $data->micr2_tc_remarks }}</td>
                                    @endforeach
                                @endif

                                @if ($library_test_parameter->id == 4)
                                    @foreach ($micro3 as $data)
                                        <td class="w-20 text-center">{{ str_replace('.', ',', $data->micr3_final_result) }}</td>
                                        <td class="w-20 text-center">{!! $library_test_parameter->specs !!}</td>
                                        <td class="w-20 text-center">{{ $data->micr3_remarks }}</td>
                                    @endforeach
                                @endif

                                @if ($library_test_parameter->id == 5)
                                    @foreach ($micro4 as $data)
                                        <td class="w-20 text-center">{{ str_replace('.', ',', $data->micr4_color_of_the_sample) }}</td>
                                        <td class="w-20 text-center">{!! $library_test_parameter->specs !!}</td>
                                        <td class="w-20 text-center">{{ $data->micr4_final_result }}</td>
                                    @endforeach
                                @endif

                                @if ($library_test_parameter->id == 7)
                                    @foreach ($micro5b as $data)
                                        <td class="w-20 text-center">{{ str_replace('.', ',', $data->micr5b_hpc_final_result) }}</td>
                                        <td class="w-20 text-center">{!! $library_test_parameter->specs !!}</td>
                                        <td class="w-20 text-center">{{ $data->micr5b_hpc_remarks }}</td>
                                    @endforeach
                                @endif

                                @if ($library_test_parameter->id == 11)
                                    <td class="w-20 text-center">{{ str_replace('.', ',', $micro6a->micro6a_hpc_final_result) }}</td>
                                    <td class="w-20 text-center">{!! $library_test_parameter->specs !!}</td>
                                    <td class="w-20 text-center">{{ $micro6a->micro6a_hpc_remarks }}</td>
                                @endif

                                @if ($library_test_parameter->id == 13)
                                    @foreach ($chem1 as $data)
                                        <td class="w-20 text-center">{{ str_replace('.', ',', $data->chem1_final_result) }}</td>
                                        <td class="w-20 text-center">{!! $library_test_parameter->specs !!}</td>
                                        <td class="w-20 text-center">{{ $data->chem1_final_result_remarks }}</td>
                                    @endforeach
                                @endif

                                @if ($library_test_parameter->id == 14)
                                    @foreach ($chem2 as $data)
                                        <td class="w-20 text-center">{{ str_replace('.', ',', $data->chem2_final_result) }}</td>
                                        <td class="w-20 text-center" style="vertical-align: middle; horizontal-align: middle;">
                                            <img src="{{ public_path('image/less-than-equal-svgrepo-com.svg') }}" width="0.8px" height="0.8px" style="margin-right: 10px; margin-top:-10px"/> {{-- less than or equal sign --}}
                                            {!! $library_test_parameter->specs !!} 
                                        </td>
                                        <td class="w-20 text-center">{{ $data->chem2_final_result_remarks }}</td>
                                    @endforeach
                                @endif

                                @if ($library_test_parameter->id == 17)
                                    @foreach ($chem3 as $data)
                                        <td class="w-20 text-center">{{ str_replace('.', ',', $data->chem3_final_result) }}</td>
                                        <td class="w-20 text-center">
                                            {{-- less than or equal sign --}}
                                            <img src="{{ public_path('image/less-than-equal-svgrepo-com.svg') }}" width="0.8px" height="0.8px" style="margin-right: 10px; margin-top:-10px"/> 600 <img src="{{ public_path('image/less-than-equal-svgrepo-com.svg') }}" width="0.8px" height="0.8px" style="margin-right: 10px; margin-top:-10px"/> 10*

                                        </td>
                                        <td class="w-20 text-center">{{ $data->chem3_final_result_remarks }}</td>
                                    @endforeach
                                @endif

                                @if ($library_test_parameter->id == 18)
                                    @foreach ($chem4 as $data)
                                        <td class="w-20 text-center">{{ str_replace('.', ',', $data->chem4_final_result) }}</td>
                                        <td class="w-20 text-center">{!! $library_test_parameter->specs !!}</td>
                                        <td class="w-20 text-center">{{ $data->chem4_final_result_remarks }}</td>
                                    @endforeach
                                @endif

                                @if ($library_test_parameter->id == 19)
                                    @foreach ($chem5 as $data)
                                        <td class="w-20 text-center">{{ str_replace('.', ',', $data->chem5_final_result) }}</td>
                                        <td class="w-20 text-center" style="vertical-align: middle; horizontal-align: middle;">
                                            <img src="{{ public_path('image/less-than-equal-svgrepo-com.svg') }}" width="0.8px" height="0.8px" style="margin-right: 10px; margin-top:-10px"/> {{-- less than or equal sign --}}
                                            {!! $library_test_parameter->specs !!} 
                                        </td>
                                        <td class="w-20 text-center">{{ $data->chem5_final_result_remarks }}</td>
                                    @endforeach
                                @endif

                                @if ($library_test_parameter->id == 20)
                                    @foreach ($chem6 as $data)
                                        <td class="w-20 text-center">{{ str_replace('.', ',', $data->chem6_final_result) }}</td>
                                        <td class="w-20 text-center" style="vertical-align: middle; horizontal-align: middle;">
                                            <img src="{{ public_path('image/less-than-equal-svgrepo-com.svg') }}" width="0.8px" height="0.8px" style="margin-right: 10px; margin-top:-10px"/> {{-- less than or equal sign --}}
                                            {!! $library_test_parameter->specs !!} 
                                        </td>
                                        <td class="w-20 text-center">{{ $data->chem6_final_result_remarks }}</td>
                                    @endforeach
                                @endif

                                @if ($library_test_parameter->id == 21)
                                    @foreach ($chem7 as $data)
                                        <td class="w-20 text-center">{{ str_replace('.', ',', $data->chem7_final_result) }}</td>
                                        <td class="w-20 text-center" style="vertical-align: middle; horizontal-align: middle;">
                                            <img src="{{ public_path('image/less-than-equal-svgrepo-com.svg') }}" width="0.8px" height="0.8px" style="margin-right: 10px; margin-top:-10px"/> {{-- less than or equal sign --}}
                                            {!! $library_test_parameter->specs !!} 
                                        </td>
                                        <td class="w-20 text-center">{{ $data->chem7_final_result_remarks }}</td>
                                    @endforeach
                                @endif

                                @if ($library_test_parameter->id == 23)
                                    @foreach ($chem9 as $data)
                                        <td class="w-20 text-center">{{ str_replace('.', ',', $data->chem9_final_result) }}</td>
                                        <td class="w-20 text-center" style="vertical-align: middle; horizontal-align: middle;">
                                            <img src="{{ public_path('image/less-than-equal-svgrepo-com.svg') }}" width="0.8px" height="0.8px" style="margin-right: 10px; margin-top:-10px"/> {{-- less than or equal sign --}}
                                            {!! $library_test_parameter->specs !!} 
                                        </td>
                                        <td class="w-20 text-center">{{ $data->chem9_final_result_remarks }}</td>
                                    @endforeach
                                @endif

                                @if ($library_test_parameter->id == 24)
                                    @foreach ($chem10 as $data)
                                        <td class="w-20 text-center">{{ str_replace('.', ',', $data->chem10_final_result) }}</td>
                                        <td class="w-20 text-center" style="vertical-align: middle; horizontal-align: middle;">
                                            <img src="{{ public_path('image/less-than-equal-svgrepo-com.svg') }}" width="0.8px" height="0.8px" style="margin-right: 10px; margin-top:-10px"/> {{-- less than or equal sign --}}
                                            {!! $library_test_parameter->specs !!} 
                                        </td>
                                        <td class="w-20 text-center">{{ $data->chem10_final_result_remarks }}</td>
                                    @endforeach
                                @endif

                                @if ($library_test_parameter->id == 62)
                                    @foreach ($phys1 as $data)
                                        <td class="w-20 text-center">{{ str_replace('.', ',', $data->phys1_final_result) }}</td>
                                        <td class="w-20 text-center">{!! $library_test_parameter->specs !!}</td>
                                        <td class="w-20 text-center">{{ $data->phys1_final_result_remarks }}</td>
                                    @endforeach
                                @endif

                                @if ($library_test_parameter->id == 63)
                                    @foreach ($phys2 as $data)
                                        <td class="w-20 text-center">{{ str_replace('.', ',', $data->phys2_final_result) }}</td>
                                        <td class="w-20 text-center" style="vertical-align: middle; horizontal-align: middle;">
                                            <img src="{{ public_path('image/less-than-equal-svgrepo-com.svg') }}" width="0.8px" height="0.8px" style="margin-right: 10px; margin-top:-10px"/> {{-- less than or equal sign --}}
                                            {!! $library_test_parameter->specs !!} 
                                        </td>
                                        <td class="w-20 text-center">{{ $data->phys2_final_result_remarks }}</td>
                                    @endforeach
                                @endif

                                @if ($library_test_parameter->id == 64)
                                    @foreach ($phys3 as $data)
                                        <td class="w-20 text-center">{{ str_replace('.', ',', $data->phys3_final_result) }}</td>
                                        <td class="w-20 text-center" style="vertical-align: middle; horizontal-align: middle;">
                                            <img src="{{ public_path('image/less-than-equal-svgrepo-com.svg') }}" width="0.8px" height="0.8px" style="margin-right: 10px; margin-top:-10px"/> {{-- less than or equal sign --}}
                                            {!! $library_test_parameter->specs !!} 
                                        </td>
                                        
                                        <td class="w-20 text-center">{{ $data->phys3_final_result_remarks }}</td>
                                    @endforeach
                                @endif

                                @if ($library_test_parameter->id == 65)
                                    @foreach ($phys4 as $data)
                                        <td class="w-20 text-center">{{ str_replace('.', ',', $data->phys4_final_result) }}</td>
                                        <td class="w-20 text-center" style="vertical-align: middle; horizontal-align: middle;">
                                            <img src="{{ public_path('image/less-than-equal-svgrepo-com.svg') }}" width="0.8px" height="0.8px" style="margin-right: 10px; margin-top:-10px"/> {{-- less than or equal sign --}}
                                            {!! $library_test_parameter->specs !!} 
                                        </td>
                                        <td class="w-20 text-center">{{ $data->phys4_final_result_remarks }}</td>
                                    @endforeach
                                @endif

                                @if ($library_test_parameter->id == 69)
                                    <td class="w-20 text-center">{{ str_replace('.', ',', $micr3_9223B->micr3_9223b_no_of_yellow_wells_rxn_after_18h) }}</td>
                                    <td class="w-20 text-center">{!! $library_test_parameter->specs !!}</td>
                                    <td class="w-20 text-center">{{ $micr3_9223B->micr3_9223b_remarks }}</td>
                                @endif

                                @if ($library_test_parameter->id == 70)
                                    <td class="w-20 text-center">{{ str_replace('.', ',', $micr4_9223B->micr4_9223b_final_result) }}</td>
                                    <td class="w-20 text-center">{!! $library_test_parameter->specs !!}</td>
                                    <td class="w-20 text-center">{{ $micr4_9223B->micr4_9223b_remarks }}</td>
                                @endif
                            </tr>
                        @endif
                    @endforeach
                @endforeach
            @endforeach
        </tbody>

        <tbody class="footer-dotted">
            <tr class="text-center uppercase">
                <td colspan="5">***NOTHING FOLLOWS***</td>
            </tr>
        </tbody>

        <tfoot>
            <tr>
                <td style="vertical-align: top;">Remarks:</td>
                <td colspan="4">
                    <p>
                        Results of examination are specifically related to samples as received.
                    </p>
                    {{-- <p class="bold" style="margin-top: 5px">
                        Pursuant to PNSDW 2017, sample was collected according to prescribed aseptic technique and was contained and transported in a sterilized container at controlled temperature by Aqualab PH trained personnel.
                    </p>
                    <p class="bold" style="margin-top: 5px">
                        Sample analysis was conducted within eight (8) hours as prescribed by the standards
                    </p> --}}
                </td>
            </tr>
            <br>
            <tr>
                <td style="vertical-align: top;">Reference/s:</td>
                <td colspan="4">
                    <p>
                        Methods of Analysis are based on the Standard Methods for the Examination of Water and Wastewater (SMEWW), American
                        Public Health Association, American Water Works Association, 22nd Edition (2012); Parameters and Limits are based on
                        Philippine National Standards for Drinking Water (2017)
                    </p>
                    <p>
                        Thermotolerant Coliform – also Fecal Coliform; MPN/100mL – Most Probable Number per 100mL of sample; cfu – Colony
                        Forming Unit per 1mL of sample
                    </p>
                </td>
            </tr>
            <br>
            <tr>
                <td style="vertical-align: top;">Note/s:</td>
                <td colspan="4">
                    <p>
                        Comma (,) is used in this report to emphasize presentation of decimal separation/s.
                    </p>
                </td>
            </tr>
        </tfoot>
    </table>
    {{-- end of contents --}}

    {{-- footer --}}
    <table style="position: fixed; bottom: 115;">
        <thead>
            <tr>
                <td>
                    {{-- micro == CHLOE JOY C GABAN SIGNATURE.png
                    else = EDISON O SUBALA SIGNATURE.png --}}
                    <img
                        src="{{ public_path('image/' . ($analysisRequests->test_parameters == 'micro' ? 'CHLOE JOY C GABAN SIGNATURE.png' : 'EDISON O SUBALA SIGNATURE.png')) }}" 
                        alt="{{ $analysisRequests->test_parameters == 'micro' ? 'CHLOE JOY C GABAN SIGNATURE.png' : 'EDISON O SUBALA SIGNATURE.png' }}" 
                        width="250"
                    />

                </td>
                <td style="padding-left: 180px">
                    <img src="{{ public_path('image/ANTONIO E CLEMENTE SIGNATURE.png') }}" alt="ANTONIO E CLEMENTE SIGNATURE" width="250">
                </td>
            </tr>
            <tr>
                <td class="text-center" colspan="2" style="color: grey;">
                    *** THIS REPORT IS ELECTRONICALLY GENERATED ON {{ $generatedOn }} ***
                </td>
            </tr>
        </thead>
    </table>
    {{-- end of footer --}}

</body>

</html>