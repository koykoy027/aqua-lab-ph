@extends('layouts.app')
@section('title', 'Dashboard')
@section('content')

<script>
    const samplesPerMarketSegment = () => {
    const labels = [
        "0001 - Water Refilling Station",
        "002A - Food and Beverages (Service)",
        "002B - Food and Beverages (Manufacturer)",
        "003 - Hospitalit Industry",
        "004A - Healthcare (Dialysis)",
        "004B - Healthcare (Lying-in)",
        "004C - Healthcare (Hospital)",
        "005 - Water Service Provider",
        "Others",
    ];
    const data = {
        labels: labels,
        datasets: [
            {
                backgroundColor: ["#ed64a6", "#9f7aea", "#667eea", "#cbd5e0", "#a0aec0", "#718096", "#6bffc6", "#9b684a", "#be2ccc"],
                borderColor: ["#ed64a6", "#9f7aea", "#667eea", "#cbd5e0", "#a0aec0", "#718096", "#6bffc6", "#9b684a", "#be2ccc"],
                data: [{{ $total0001 }}, {{ $total002A }} , {{ $total002B }}, {{ $total003 }}, {{ $total004A }}, {{ $total004B }}, {{ $total004C }}, {{ $total005 }}, {{ $totalOthers }}],
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




</script>

<div class="grid mb-3 uppercase sm:grid-cols-1 sm:gap-2 lg:grid-cols-4 lg:gap-4">
    <div class="bg-white card">
        <h1 class="text-2xl bold">{{ $totalClient }}</h1>
        <p class="text-slate-500">Total Clients</p>
    </div>
    <div class="bg-white card">
        <h1 class="text-2xl bold">{{ $totalLabAccepted }}</h1>
        <p class="text-slate-500">Total Lab accepted</p>
    </div>
    <div class="bg-white card">
        <h1 class="text-2xl bold">{{ $totalLabRejected }}</h1>
        <p class="text-slate-500">Total Lab rejected</p>
    </div>
    <div class="bg-white card">
        <h1 class="text-2xl bold">{{ $totalReleaseStatus }}</h1>
        <p class="text-slate-500">Total released result</p>
    </div>
</div>

<div class="grid mb-3 uppercase sm:grid-cols-1 sm:gap-2 lg:grid-cols-4 lg:gap-4">
    <div class="bg-white card">
        <h1 class="text-2xl bold">{{ $totalPending }}</h1>
        <p class="text-slate-500">Total Pending</p>
    </div>
    <div class="bg-white card">
        <h1 class="text-2xl bold">{{ $totalConditionallyAccepted }}</h1>
        <p class="text-slate-500">Total Conditionally Accepted</p>
    </div>
    <div class="bg-white card">
        <h1 class="text-2xl bold">{{ $totalDisapprove }}</h1>
        <p class="text-slate-500">Total Disapprove</p>
    </div>
    <div class="bg-white card">
        <h1 class="text-2xl bold">{{ $totalReleaseStatus }}</h1>
        <p class="text-slate-500">Total released result</p>
    </div>
</div>

{{-- chart  --}}

<div class="grid gap-2 mb-3 uppercase sm:grid-cols-1 sm:gap-3 lg:grid-cols-2 lg:gap-4">
    <div class="w-full rounded sm:w-auto">
        <div class="bg-white">
            <div class="rounded-lg shadow-md">
                <canvas class="w-full p-2" id="samplesPerMarketSegment"></canvas>
                <script>
                    samplesPerMarketSegment();

                </script>
            </div>
        </div>
    </div>

    <div class="bg-white card">
        <h1 class="mb-3 text-2xl uppercase bold">Recent clients</h1>
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

<div class="grid gap-2 mb-3 uppercase sm:grid-cols-1 sm:gap-3 lg:grid-cols-1 lg:gap-4">
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
</div>

@endsection
