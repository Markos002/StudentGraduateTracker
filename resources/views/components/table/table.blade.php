@props([
    'headers' => [],
    'rows' => [],
    'noDataMessage' => 'No data available.',
    'paginator' => null,
    'showPagination' => true,
    'showResultsInfo' => true,
    'paginationClass' => '',
    'clickable' => false
])

<div class="overflow-x-auto bg-white rounded shadow">
    <table class="min-w-full text-sm text-left">
        <thead class="bg-gray-100 text-gray-700 uppercase text-center">
            <tr>
                @foreach ($headers as $header)
                    <th class="px-4 py-2">{{ $header }}</th>
                @endforeach
            </tr>
        </thead>
        <tbody>
            @forelse ($rows as $row)
                <tr 
                    class="text-center {{ $clickable ? 'cursor-pointer hover:bg-gray-100 transition' : '' }}"
                    @if($clickable) onclick="showDataModal({{ json_encode($row) }})" @endif
                >
                    @foreach ($headers as $header)
                        @php
                            $key = strtolower(str_replace(' ', '', $header));
                            $cell = $row[$key] ?? '';
                            $cellClass = 'inline-flex items-center justify-center px-5 py-2 rounded'; 
                            $headerName = strtolower($header);
                            if (str_contains($headerName, 'occupation status')) {
                                $pointerCell = strtolower($cell);
                                if ($pointerCell === 'employed') {
                                    $cellClass .= ' bg-[#CDCDCD] text-black font-bold';
                                } elseif ($pointerCell === 'unemployed') {
                                    $cellClass .= ' bg-[#FFE83A] text-black font-bold';
                                }else {
                                    $cellClass .= ' bg-[#FFE83A] text-black font-bold';
                                }
                            }
                            if (str_contains($headerName, 'course alignment')) {
                                $pointerCell = strtolower($cell);
                                if ($pointerCell === 'aligned') {
                                    $cellClass .= ' text-black font-bold';
                                } elseif ($pointerCell === 'not aligned') {
                                    $cellClass .= ' text-[#D32D2F] font-bold';
                                }
                            }
                        @endphp
                        <td class="border-b border-gray-300 py-3">
                            <div class="{{ $cellClass }}">
                                {{ $cell }}
                            </div>
                        </td>
                    @endforeach
                </tr>
            @empty
                <tr>
                    <td colspan="{{ count($headers) }}" class="px-4 py-2 text-center text-gray-500">
                        {{ $noDataMessage }}
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>
    {{-- Pagination Section --}}
    @if($paginator && $showPagination)
        <div class="bg-white rounded shadow px-6 py-4">
            <div class="{{ $paginationClass }} w-full">
                {{ $paginator->links('vendor.pagination.tailwind') }}
            </div>
        </div>
    @endif
    <x-modals.profileCard/>
</div>
<script>
    function showDataModal(row) {
    
    const courseNames = {
    "BSIT": "Bachelor of Science in Information Technology",
    "BSMX": "Bachelor of Science in Mechatronics",
    "BIT-ELEC": "Bachelor in Industrial Technology - Major in Electronics",
    "BIT-CT": "Bachelor in Industrial Technology - Major in Computer Technology",
    "BIT-DT": "Bachelor in Industrial Technology - Major in Drafting",
    "BIT-ELEX": "Bachelor in Industrial Technology - Major in Electrical",
    };
    let modalContent = document.getElementById('modalContent');
    
    let employmentStatus = '';
    let employmentLabel = '';

    if (!row.email && !row.contactnumber) {
        employmentLabel = 'Not Registered';
        employmentStatus = 'bg-red-500 text-white';
    } else if (row.occupation_status === null || row.occupation_status === 'Unemployed') {
        employmentLabel = 'Unemployed';
        employmentStatus = 'bg-yellow-300 text-black';
    } else if (row.occupation_status === 'Employed') {
        employmentLabel = 'Employed';
        employmentStatus = 'bg-gray-400 text-black';
    } else {
        employmentLabel = 'Unregistered';
        employmentStatus = 'bg-gray-200 text-black';
    }

    modalContent.innerHTML = '';    
        
    modalContent.innerHTML += `
        <div class="flex text-black items-center pb-2 gap-5">
            <span class="font-bold text-3xl">${row.fullname}</span>
            <span class="${employmentStatus} px-2 py-0.5 text-lg font-medium rounded">${employmentLabel}</span>
        </div>
        <div class="mt-2 py-3 text-black border-b text-[16px]">${courseNames[row.graduatedcourse] || row.graduatedcourse}</div>
        <div class="flex justify-between py-2 text-black text-md">
            <span >Current Work:<strong>${row.occupation ?? " N/A"}</strong></span>
            <span >Year Graduated: <strong>${row.yeargraduate}</strong></span>
        </div>
        <div class="py-2 text-black">Email Address: <strong>${row.email ?? "N/A"}</strong></div>
        <div class="py-2 text-black">Contact Number: <strong>${row.contactnumber ?? "N/A"}</strong></div>
    `   
    document.getElementById('dataModal').classList.remove('hidden');
    document.getElementById('dataModal').classList.add('flex');
    }
    function closeDataModal() {
        document.getElementById('dataModal').classList.add('hidden');
        document.getElementById('dataModal').classList.remove('flex');
    }
</script>