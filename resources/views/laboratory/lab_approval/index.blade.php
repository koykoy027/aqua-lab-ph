@extends('layouts.app')
@section('title', 'Lab Approval')
@section('content')

<div class="card bg-white mb-3">
    <label>Lab Approval Table</label>

    <div class="relative overflow-x-auto sm:rounded-lg">
        <table class="w-full text-sm text-left text-gray-500">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Acceptance number
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Status
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Test number
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Evaluated By
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Date
                    </th>
                    <th scope="col" class="px-6 py-3">Mcr1 Time</th>
                    <th scope="col" class="px-6 py-3">Mcr1 Hpc A</th>
                    <th scope="col" class="px-6 py-3">Mcr1 Hpc B</th>
                    <th scope="col" class="px-6 py-3">mcr1 Hpc Ave</th>
                    <th scope="col" class="px-6 py-3">Mcr1 Hpc Value</th>
                    <th scope="col" class="px-6 py-3">Mcr1 Difference</th>
                    <th scope="col" class="px-6 py-3">Mcr1 Remarks</th>
                    <th scope="col" class="px-6 py-3">mcr2_bg_24h</th>
                    <th scope="col" class="px-6 py-3">mcr2_bg_48h</th>
                    <th scope="col" class="px-6 py-3">micr2_fc_24h</th>
                    <th scope="col" class="px-6 py-3">Micr2 Fc Total</th>
                    <th scope="col" class="px-6 py-3">Mcr2 Tc Remarks</th>
                    <th scope="col" class="px-6 py-3">micr3_tc_24h</th>
                    <th scope="col" class="px-6 py-3">mcr3_tc_48h</th>
                    <th scope="col" class="px-6 py-3">Mcr3 Tc Total</th>
                    <th scope="col" class="px-6 py-3">Mcr3 Tc Remarks</th>
                    <th scope="col" class="px-6 py-3">Micr4 Results</th>
                    <th scope="col" class="px-6 py-3">Mcr4 Remarks</th>
                    <th scope="col" class="px-6 py-3">reading_chem1_1</th>
                    <th scope="col" class="px-6 py-3">reading_chem1_2</th>
                    <th scope="col" class="px-6 py-3">reading_chem1_3</th>
                    <th scope="col" class="px-6 py-3">Chem1 Final</th>
                    <th scope="col" class="px-6 py-3">Chem1 Remarks</th>
                    <th scope="col" class="px-6 py-3">color_of_the_sample</th>
                    <th scope="col" class="px-6 py-3">fluorescence</th>
                    <th scope="col" class="px-6 py-3">reading_chem2_1</th>
                    <th scope="col" class="px-6 py-3">reading_chem2_2</th>
                    <th scope="col" class="px-6 py-3">reading_chem2_3</th>
                    <th scope="col" class="px-6 py-3">Chem2 Result</th>
                    <th scope="col" class="px-6 py-3">Chem2 Remarks</th>
                    <th scope="col" class="px-6 py-3">iwoedr1_chem3</th>
                    <th scope="col" class="px-6 py-3">fwoedr1_chem3</th>
                    <th scope="col" class="px-6 py-3">worr1_chem3</th>
                    <th scope="col" class="px-6 py-3">iwofedr2_chem3</th>
                    <th scope="col" class="px-6 py-3">fwofedr2_chem3</th>
                    <th scope="col" class="px-6 py-3">worr2_chem3</th>
                    <th scope="col" class="px-6 py-3">Chem3 Result</th>
                    <th scope="col" class="px-6 py-3">Chem3 Remarks</th>
                    <th scope="col" class="px-6 py-3">ir_chem4</th>
                    <th scope="col" class="px-6 py-3">Chem4 Result</th>
                    <th scope="col" class="px-6 py-3">Chem4 Remarks</th>
                    <th scope="col" class="px-6 py-3">ir1_chem5</th>
                    <th scope="col" class="px-6 py-3">ir2_chem5</th>
                    <th scope="col" class="px-6 py-3">ir3_chem5</th>
                    <th scope="col" class="px-6 py-3">Chem5 Result</th>
                    <th scope="col" class="px-6 py-3">Chem5 Remarks</th>
                    <th scope="col" class="px-6 py-3">ir1_chem6</th>
                    <th scope="col" class="px-6 py-3">ir2_chem6</th>
                    <th scope="col" class="px-6 py-3">ir3_chem6</th>
                    <th scope="col" class="px-6 py-3">Chem6 Result</th>
                    <th scope="col" class="px-6 py-3">Chem6 Remarks</th>
                    <th scope="col" class="px-6 py-3">ir1_chem7</th>
                    <th scope="col" class="px-6 py-3">ir2_chem7</th>
                    <th scope="col" class="px-6 py-3">ir3_chem7</th>
                    <th scope="col" class="px-6 py-3">Chem7 Result</th>
                    <th scope="col" class="px-6 py-3">Chem7 Remarks</th>
                    <th scope="col" class="px-6 py-3">ir1_chem9</th>
                    <th scope="col" class="px-6 py-3">ir2_chem9</th>
                    <th scope="col" class="px-6 py-3">ir3_chem9</th>
                    <th scope="col" class="px-6 py-3">Chem9 Result</th>
                    <th scope="col" class="px-6 py-3">Chem9 Remarks</th>
                    <th scope="col" class="px-6 py-3">ir1_chem10</th>
                    <th scope="col" class="px-6 py-3">ir2_chem10</th>
                    <th scope="col" class="px-6 py-3">ir3_chem10</th>
                    <th scope="col" class="px-6 py-3">Chem10 Result</th>
                    <th scope="col" class="px-6 py-3">Chem10 Remarks</th>
                    <th scope="col" class="px-6 py-3">Sample Condition</th>
                    <th scope="col" class="px-6 py-3">Remarks</th>
                    <th scope="col" class="px-6 py-3">Final Remarks</th>

                    <th scope="col" class="px-6 py-3">
                        <span class="sr-only">Raw</span>
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr class="bg-white border-b">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                        0001
                    </th>
                    <td class="px-6 py-4">
                        <span class="bg-green-100 text-green-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded">Accepted</span>
                    </td>
                    <td class="px-6 py-4">
                        -
                    </td>

                    <td class="px-6 py-4">
                        Isabella Reyes
                    </td>

                    <td class="px-6 py-4">
                        -
                    </td>
                    <td class="px-6 py-4">
                        -
                    </td>
                    <td class="px-6 py-4">
                        -
                    </td>
                    <td class="px-6 py-4">
                        -
                    </td>
                    <td class="px-6 py-4">
                        -
                    </td>
                    <td class="px-6 py-4">
                        -
                    </td>
                    <td class="px-6 py-4">
                        -
                    </td>
                    <td class="px-6 py-4">
                        -
                    </td>
                    <td class="px-6 py-4">
                        -
                    </td>
                    <td class="px-6 py-4">
                        -
                    </td>
                    <td class="px-6 py-4">
                        -
                    </td>
                    <td class="px-6 py-4">
                        -
                    </td>
                    <td class="px-6 py-4">
                        -
                    </td>
                    <td class="px-6 py-4">
                        -
                    </td>
                    <td class="px-6 py-4">
                        -
                    </td>
                    <td class="px-6 py-4">
                        -
                    </td>
                    <td class="px-6 py-4">
                        -
                    </td>
                    <td class="px-6 py-4">
                        -
                    </td>
                    <td class="px-6 py-4">
                        -
                    </td>
                    <td class="px-6 py-4">
                        -
                    </td>
                    <td class="px-6 py-4">
                        -
                    </td>
                    <td class="px-6 py-4">
                        -
                    </td>
                    <td class="px-6 py-4">
                        -
                    </td>
                    <td class="px-6 py-4">
                        -
                    </td>
                    <td class="px-6 py-4">
                        -
                    </td>
                    <td class="px-6 py-4">
                        -
                    </td>
                    <td class="px-6 py-4">
                        -
                    </td>
                    <td class="px-6 py-4">
                        -
                    </td>
                    <td class="px-6 py-4">
                        -
                    </td>
                    <td class="px-6 py-4">
                        -
                    </td>
                    <td class="px-6 py-4">
                        -
                    </td>
                    <td class="px-6 py-4">
                        -
                    </td>
                    <td class="px-6 py-4">
                        -
                    </td>
                    <td class="px-6 py-4">
                        -
                    </td>
                    <td class="px-6 py-4">
                        -
                    </td>
                    <td class="px-6 py-4">
                        -
                    </td>
                    <td class="px-6 py-4">
                        -
                    </td>
                    <td class="px-6 py-4">
                        -
                    </td>
                    <td class="px-6 py-4">
                        -
                    </td>
                    <td class="px-6 py-4">
                        -
                    </td>
                    <td class="px-6 py-4">
                        -
                    </td>
                    <td class="px-6 py-4">
                        -
                    </td>
                    <td class="px-6 py-4">
                        -
                    </td>
                    <td class="px-6 py-4">
                        -
                    </td>
                    <td class="px-6 py-4">
                        -
                    </td>
                    <td class="px-6 py-4">
                        -
                    </td>
                    <td class="px-6 py-4">
                        -
                    </td>
                    <td class="px-6 py-4">
                        -
                    </td>
                    <td class="px-6 py-4">
                        -
                    </td>
                    <td class="px-6 py-4">
                        -
                    </td>
                    <td class="px-6 py-4">
                        -
                    </td>
                    <td class="px-6 py-4">
                        -
                    </td>
                    <td class="px-6 py-4">
                        -
                    </td>
                    <td class="px-6 py-4">
                        -
                    </td>
                    <td class="px-6 py-4">
                        -
                    </td>
                    <td class="px-6 py-4">
                        -
                    </td>
                    <td class="px-6 py-4">
                        -
                    </td>
                    <td class="px-6 py-4">
                        -
                    </td>
                    <td class="px-6 py-4">
                        -
                    </td>
                    <td class="px-6 py-4">
                        -
                    </td>
                    <td class="px-6 py-4">
                        -
                    </td>
                    <td class="px-6 py-4">
                        -
                    </td>
                    <td class="px-6 py-4">
                        -
                    </td>
                    <td class="px-6 py-4">
                        -
                    </td>
                    <td class="px-6 py-4">
                        -
                    </td>
                    <td class="px-6 py-4">
                        -
                    </td>
                    <td class="px-6 py-4">
                        -
                    </td>
                    <td class="px-6 py-4">
                        -
                    </td>
                    <td class="px-6 py-4">
                        -
                    </td>
                    <td class="px-6 py-4">
                        -
                    </td>
                    <td class="px-6 py-4 text-right">
                        <a href="#" class="font-medium text-blue-600 hover:underline">Create Raw Data File</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

@endsection
