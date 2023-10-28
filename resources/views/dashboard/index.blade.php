@extends('layouts.app')
@section('title', 'Dashboard')
@section('content')

<script>
    const samplesPerMarketSegment = () => {
            const labels = [
                "0001 - Water Refilling Station",
                "002A - Food and Beverages (Service)",
                "002B - Food and Beverages (Manufacturer)",
                "003 - Hospitality Industry",
                "004A - Healthcare (Dialysis)",
                "004B - Healthcare (Lying-in)",
                "004C - Healthcare (Hospital)",
                "005 - Water Service Provider",
                "006 - Residential",
                "007 - Academe",
                "008 - Industries",
                "Others",
            ];
            const data = {
                labels: labels,
                datasets: [{
                        backgroundColor: ["#ed64a6", "#9f7aea", "#667eea", "#cbd5e0", "#a0aec0", "#718096",
                            "#6bffc6", "#9b684a", "#be2ccc", "##0de11d", "#098666", "#fc755b"
                        ],
                        borderColor: ["#ed64a6", "#9f7aea", "#667eea", "#cbd5e0", "#a0aec0", "#718096",
                            "#6bffc6", "#9b684a", "#be2ccc", "##0de11d", "#098666", "#fc755b"
                        ],
                        data: [{{ $total0001 }}, {{ $total002A }}, {{ $total002B }},
                            {{ $total003 }}, {{ $total004A }}, {{ $total004B }},
                            {{ $total004C }}, {{ $total005 }}, {{ $total006 }},
                            {{ $total007 }}, {{ $total008 }}, {{ $totalOthers }}
                        ],
                        fill: true,
                    },

                ],
            };

            const configLineChart = {
                type: "pie",
                data,
                options: {},
            };

            var chartLine = new Chart(
                document.getElementById("samplesPerMarketSegment"),
                configLineChart
            );
        };

        // chart2

        const samplesTotalMicroSamplespersegment = () => {
            const labels = [
                "0001 - Water Refilling Station",
                "002A - Food and Beverages (Service)",
                "002B - Food and Beverages (Manufacturer)",
                "003 - Hospitality Industry",
                "004A - Healthcare (Dialysis)",
                "004B - Healthcare (Lying-in)",
                "004C - Healthcare (Hospital)",
                "005 - Water Service Provider",
                "006 - Residential",
                "007 - Academe",
                "008 - Industries",
                "Others",
            ];
            const data = {
                labels: labels,
                datasets: [{
                        backgroundColor: ["#ed64a6", "#9f7aea", "#667eea", "#cbd5e0", "#a0aec0", "#718096",
                            "#6bffc6", "#9b684a", "#be2ccc", "##0de11d", "#098666", "#fc755b"
                        ],
                        borderColor: ["#ed64a6", "#9f7aea", "#667eea", "#cbd5e0", "#a0aec0", "#718096",
                            "#6bffc6", "#9b684a", "#be2ccc", "##0de11d", "#098666", "#fc755b"
                        ],
                        data: [{{ $total0001Micro }}, {{ $total002AMicro }}, {{ $total002BMicro }},
                            {{ $total003Micro }}, {{ $total004AMicro }}, {{ $total004BMicro }},
                            {{ $total004CMicro }}, {{ $total005Micro }}, {{ $total006Micro }},
                            {{ $total007Micro }}, {{ $total008Micro }}, {{ $totalOthersMicro }}
                        ],
                        fill: true,
                    },

                ],
            };

            const configLineChart = {
                type: "pie",
                data,
                options: {},
            };

            var chartLine = new Chart(
                document.getElementById("samplesTotalMicroSamplespersegment"),
                configLineChart
            );
        };

        // chart 3
        const samplesTotalPychemSamplespersegment = () => {
            const labels = [
                "0001 - Water Refilling Station",
                "002A - Food and Beverages (Service)",
                "002B - Food and Beverages (Manufacturer)",
                "003 - Hospitality Industry",
                "004A - Healthcare (Dialysis)",
                "004B - Healthcare (Lying-in)",
                "004C - Healthcare (Hospital)",
                "005 - Water Service Provider",
                "006 - Residential",
                "007 - Academe",
                "008 - Industries",
                "Others",
            ];
            const data = {
                labels: labels,
                datasets: [{
                        backgroundColor: ["#ed64a6", "#9f7aea", "#667eea", "#cbd5e0", "#a0aec0", "#718096",
                            "#6bffc6", "#9b684a", "#be2ccc", "##0de11d", "#098666", "#fc755b"
                        ],
                        borderColor: ["#ed64a6", "#9f7aea", "#667eea", "#cbd5e0", "#a0aec0", "#718096",
                            "#6bffc6", "#9b684a", "#be2ccc", "##0de11d", "#098666", "#fc755b"
                        ],
                        data: [{{ $total0001Pychem }}, {{ $total002APychem }}, {{ $total002BPychem }},
                            {{ $total003Pychem }}, {{ $total004APychem }}, {{ $total004BPychem }},
                            {{ $total004CPychem }}, {{ $total005Pychem }}, {{ $total006Pychem }},
                            {{ $total007Pychem }}, {{ $total008Pychem }}, {{ $totalOthersPychem }}
                        ],
                        fill: true,
                    },

                ],
            };

            const configLineChart = {
                type: "pie",
                data,
                options: {},
            };

            var chartLine = new Chart(
                document.getElementById("samplesTotalPychemSamplespersegment"),
                configLineChart
            );
        };

        // end charts

        const perRegion = () => {
            const labels = [
                "Region I – Ilocos Region",
                "Region II – Cagayan Valley",
                "Region III – Central Luzon",
                "Region IV‑A – CALABARZON",
                "MIMAROPA Region",
                "Region V – Bicol Region",
                "Region VI – Western Visayas",
                "Region VII – Central Visayas",
                "Region VIII – Eastern Visayas",
                "Region IX – Zamboanga Peninsula",
                "Region X – Northern Mindanao",
                "Region XI – Davao Region",
                "Region XII – SOCCSKSARGEN",
                "Region XIII – Caraga",
                "NCR – National Capital Region",
                "CAR – Cordillera Administrative Region",
                "BARMM – Bangsamoro Autonomous Region in Muslim Mindanao",
            ];
            const data = {
                labels: labels,
                datasets: [{
                        label: "No. of Samples per Region",
                        backgroundColor: "#ed64a6",
                        borderColor: '#ed64a6',
                        data: getRandomData(17),
                        fill: false,
                    },
                    {
                        label: "No. of Micro Samples per Region",
                        backgroundColor: "#9f7aea",
                        borderColor: '#9f7aea',
                        data: getRandomData(17),
                        fill: false,
                    },
                    {
                        label: "No. of Phy-Chem Samples per Region",
                        backgroundColor: "#667eea",
                        borderColor: '#667eea',
                        data: getRandomData(17),
                        fill: false,
                    },
                    {
                        label: "No. of Failed HPC Samples per Region",
                        backgroundColor: "#cbd5e0",
                        borderColor: '#cbd5e0',
                        data: getRandomData(17),
                        fill: false,
                    },
                    {
                        label: "No. of Failed Total Coliform Samples per Region",
                        backgroundColor: "#a0aec0",
                        borderColor: '#a0aec0',
                        data: getRandomData(17),
                        fill: false,
                    },
                    {
                        label: "No. of Failed Fecal Coliform Samples per Region",
                        backgroundColor: "#718096",
                        borderColor: '#718096',
                        data: getRandomData(17),
                        fill: false,
                    },
                ],
            };

            const configLineChart = {
                type: "line",
                data,
                options: {},
            };

            var chartLine = new Chart(
                document.getElementById("perRegion"),
                configLineChart
            );
        };
</script>

<div class="grid mb-3 uppercase md:grid-cols-2 sm:gap-2 lg:grid-cols-4 lg:gap-4">
    <div class="bg-white card">
        <h1 class="text-2xl bold text-slate-500">{{ $totalClient }}</h1>
        <p class="text-sm font-semibold text-slate-400">Total Clients</p>
    </div>
    <div class="bg-white card">
        <h1 class="text-2xl bold text-slate-500">{{ $totalPending }}</h1>
        <p class="text-sm font-semibold text-slate-400">Total Pending</p>
    </div>
    <div class="bg-white card">
        <h1 class="text-2xl bold text-slate-500">{{ $totalLabAccepted }}</h1>
        <p class="text-sm font-semibold text-slate-400">Total Lab accepted</p>
    </div>
    <div class="bg-white card">
        <h1 class="text-2xl bold text-slate-500">{{ $totalLabRejected }}</h1>
        <p class="text-sm font-semibold text-slate-400">Total Lab rejected</p>
    </div>
    <div class="bg-white card">
        <h1 class="text-2xl bold text-slate-500">{{ $totalApprove }}</h1>
        <p class="text-sm font-semibold text-slate-400">Total Approve</p>
    </div>
    <div class="bg-white card">
        <h1 class="text-2xl bold text-slate-500">{{ $totalDisapprove }}</h1>
        <p class="text-sm font-semibold text-slate-400">Total Disapprove</p>
    </div>

    <div class="bg-white card">
        <h1 class="text-2xl bold text-slate-500">{{ $totalConditionallyAccepted }}</h1>
        <p class="text-sm font-semibold text-slate-400">Total Conditionally Accepted</p>
    </div>

</div>

<div class="grid grid-cols-3 mb-3 uppercase bg-white card">
    <div class="p-2 border-l-2 border-blue-300 rounded-xl">
        <h1 class="text-2xl bold text-slate-500">{{ $totalRequest }}</h1>
        <p class="text-sm font-semibold text-slate-400">Total Request</p>
    </div>
    <div class="grid grid-cols-1 p-2 gap-5 border-l-2 border-red-300 rounded-xl">
        <div>
            <h1 class="text-2xl bold text-slate-500">{{ $totalMicroRequest }}</h1>
            <p class="text-sm font-semibold text-slate-400">Total Micro</p>
        </div>
        <p class="text-sm font-semibold text-slate-400">{{ $percentageMicroRequest }}%</p>
    </div>
    <div class="grid grid-cols-1 p-2 gap-5 border-l-2 border-green-300 rounded-xl">
        <div>
            <h1 class="text-2xl bold text-slate-500">{{ $totalPyChemRequest }}</h1>
            <p class="text-sm font-semibold text-slate-400">Total Pychem</p>
        </div>
        <p class="text-sm font-semibold text-slate-400">{{ $percentagePyChemRequest }}%</p>
    </div>
</div>

{{-- chart --}}

<div class="grid gap-2 mb-3 uppercase sm:grid-cols-1 sm:gap-3 lg:grid-cols-2 lg:gap-4">
    <div class="w-full rounded sm:w-auto">
        <div class="bg-white rounded">
            <div class="grid gap-2 py-5 mx-5 mb-3 uppercase sm:grid-cols-1 sm:gap-3 lg:grid-cols-2 lg:gap-4">
                <select class="lg:col-start-3 sm:col-start-1" onchange="MarketSegmenthandleSelectChange(this.value)">
                    <option value="Total Samples Per segment">Total Samples Per segment</option>
                    <option value="Total Micro Samples per segment">Total Micro Samples per segment</option>
                    <option value="Total Pychem Samples per segment">Total Pychem Samples per segment</option>
                </select>
            </div>
            <div id="TotalSamplesPersegment" class="rounded-lg shadow-md">
                <h1 class="px-5 mb-3 text-lg font-semibold uppercase text-slate-500">
                    Total Samples Per segment
                </h1>
                <canvas class="w-full p-2" id="samplesPerMarketSegment"></canvas>
                <script>
                    samplesPerMarketSegment();
                </script>
            </div>
            <div id="TotalMicroSamplespersegment" class="hidden rounded-lg shadow-md">
                <h1 class="px-5 mb-3 text-lg font-semibold uppercase text-slate-500">
                    Total Micro Samples per segment
                </h1>
                <canvas class="w-full p-2" id="samplesTotalMicroSamplespersegment"></canvas>
                <script>
                    samplesTotalMicroSamplespersegment();
                </script>
            </div>
            <div id="TotalPychemSamplespersegment" class="hidden rounded-lg shadow-md">
                <h1 class="px-5 mb-3 text-lg font-semibold uppercase text-slate-500">
                    Total Pychem Samples per segment
                </h1>
                <canvas class="w-full p-2" id="samplesTotalPychemSamplespersegment"></canvas>
                <script>
                    samplesTotalPychemSamplespersegment();
                </script>
            </div>
        </div>
    </div>

    <div class="bg-white card">
        <h1 class="mb-3 text-lg font-semibold uppercase text-slate-500">Recent clients</h1>
        <hr>

        <div class="relative mt-3 overflow-x-auto rounded sm:rounded-lg">
            <table class="w-full text-sm text-left text-gray-500">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Account name
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Type of ownership
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($recentClients as $recentClient)
                    <tr class="bg-white border-b">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                            {{ $recentClient->account_name }}
                        </th>
                        <td class="px-6 py-4">
                            @if ($recentClient->type_of_ownership === 'Single Prorietorship')
                            <span class="mr-2 rounded bg-blue-100 px-2.5 py-0.5 text-xs font-medium text-blue-800">
                                {{ $recentClient->type_of_ownership }}
                            </span>
                            @endif

                            @if ($recentClient->type_of_ownership === 'Partnership')
                            <span class="mr-2 rounded bg-green-100 px-2.5 py-0.5 text-xs font-medium text-green-800">
                                {{ $recentClient->type_of_ownership }}
                            </span>
                            @endif
                            @if ($recentClient->type_of_ownership === 'Cooperative')
                            <span class="mr-2 rounded bg-orange-100 px-2.5 py-0.5 text-xs font-medium text-orange-800">
                                {{ $recentClient->type_of_ownership }}
                            </span>
                            @endif
                            @if ($recentClient->type_of_ownership === 'Corporation')
                            <span class="mr-2 rounded bg-slate-100 px-2.5 py-0.5 text-xs font-medium text-slate-800">
                                {{ $recentClient->type_of_ownership }}
                            </span>
                            @endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

</div>

<div class="bg-white card">
    <div class="grid gap-2 mb-3 uppercase sm:grid-cols-1 sm:gap-3 lg:grid-cols-3 lg:gap-4">
        <select class="lg:col-start-3 sm:col-start-1" onchange="widgetsPerCityMunicipality(this.value)">
            <option value="No. of Samples per City/Municipality">No. of Samples per City/Municipality</option>
            <option value="No. of Micro Samples per City/Municipality">No. of Micro Samples per City/Municipality
            </option>
            <option value="No. of Phy-Chem Samples per City/Municipality">No. of Phy-Chem Samples per City/Municipality
            </option>
            {{-- <option value="No. of Failed HPC Samples per City/Municipality">No. of Failed HPC Samples per
                City/Municipality</option>
            <option value="No. of Failed Total Coliform Samples per City/Municipality">No. of Failed Total Coliform
                Samples per City/Municipality</option>
            <option value="No. of Failed Fecal Coliform Samples per City/Municipality">No. of Failed Fecal Coliform
                Samples per City/Municipality</option> --}}
        </select>
    </div>
    <div id="samplesPerCityMunicipality">
        <h1 class="mb-3 text-lg font-semibold uppercase text-slate-500">No. of Samples per City/Municipality</h1>
        <hr>
        <div class="relative mt-3 overflow-x-auto rounded sm:rounded-lg">
            <table class="w-full text-sm text-left text-gray-500">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            City/Municipality
                        </th>
                        <th scope="col" class="px-6 py-3">
                            No. of Samples
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($samplesPerCityMunicipality as $data)
                    <tr class="bg-white border-b">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                            {{ $data->municipality_or_city }}
                        </th>
                        <td class="px-6 py-4">
                            {{ $data->total_analysis_requests }}
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <div id="microSamplesPerCityMunicipality" class="hidden">
        <h1 class="mb-3 text-lg font-semibold uppercase text-slate-500">No. of Micro Samples per City/Municipality</h1>
        <hr>
        <div class="relative mt-3 overflow-x-auto rounded sm:rounded-lg">
            <table class="w-full text-sm text-left text-gray-500">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            City/Municipality
                        </th>
                        <th scope="col" class="px-6 py-3">
                            No. of Micro Samples
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($microSamplesPerCityMunicipality as $data)
                    <tr class="bg-white border-b">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                            {{ $data->municipality_or_city }}
                        </th>
                        <td class="px-6 py-4">
                            {{ $data->total_analysis_requests }}
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <div id="phyChemSamplesPerCityMunicipality" class="hidden">
        <h1 class="mb-3 text-lg font-semibold uppercase text-slate-500">No. of Phy-Chem Samples per City/Municipality
        </h1>
        <hr>
        <div class="relative mt-3 overflow-x-auto rounded sm:rounded-lg">
            <table class="w-full text-sm text-left text-gray-500">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            City/Municipality
                        </th>
                        <th scope="col" class="px-6 py-3">
                            No. of Phy-Chem Samples
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($phyChemSamplesPerCityMunicipality as $data)
                    <tr class="bg-white border-b">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                            {{ $data->municipality_or_city }}
                        </th>
                        <td class="px-6 py-4">
                            {{ $data->total_analysis_requests }}
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>



</div>

{{-- <div class="grid gap-2 mb-3 uppercase sm:grid-cols-1 sm:gap-3 lg:grid-cols-1 lg:gap-4">
    <div class="w-full rounded sm:w-auto">
        <div class="bg-white">
            <div class="rounded-lg shadow-md">
                <canvas class="w-full p-2" id="perRegion"></canvas>
                <script>
                    perRegion();

                </script>
            </div>
        </div>
    </div>
</div> --}}

@endsection