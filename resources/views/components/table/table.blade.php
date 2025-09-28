@props([
    'headers' => [],
    'rows' => [],
    'noDataMessage' => 'No data available.',
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
                <tr class="text-center">
                    @foreach ($row as $key => $cell)
                        @php
                            $cellClass = 'inline-flex items-center justify-center px-5 py-2 rounded'; 
                            $headerName = strtolower($headers[$key] ?? '');
                            if (str_contains($headerName, 'occupation status')) {
                                $pointerCell = strtolower($cell);
                                if ($pointerCell === 'employed') {
                                    $cellClass .= ' bg-[#CDCDCD] text-black font-bold';
                                } elseif ($pointerCell === 'unemployed') {
                                    $cellClass .= ' bg-[#FFE83A] text-black font-bold';
                                }
                            }
                            if (str_contains($headerName, 'course alignment')) {
                                $pointerCell = strtolower($cell);
                                if ($pointerCell === 'aligned') {
                                    $cellClass .= '  text-black font-bold';
                                } elseif ($pointerCell === 'not aligned') {
                                    $cellClass .= '  text-[#D32D2F] font-bold';
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
</div>
