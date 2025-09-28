@props([
    'headers' => [],
    'rows' => [],
    'noDataMessage' => 'No data available.',
])

<div class="overflow-x-auto bg-white rounded shadow ">
    <table class="min-w-full text-sm text-left ">
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
                    @foreach ($row as $cell)
                        <td class="px-4 py-4 border-b border-gray-300">{{ $cell }}</td>
                    @endforeach
                </tr>
            @empty
                <tr>
                    <td colspan="{{ count($headers) }}" class="px-4 py-2 text-center text-gray-500">{{ $noDataMessage }}</td>
                </tr>
            @endforelse
        </tbody>
    </table>