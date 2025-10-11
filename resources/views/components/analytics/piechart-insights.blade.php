@props([
    'alignedSelect',
    'studentAlignment',
    'courseAlignment',
])

<script src="https://cdn.jsdelivr.net/npm/echarts@5/dist/echarts.min.js"></script>
<div class="p-8 bg-white rounded-md mt-5 overflow-x-auto ">
  <div class="flex lg:flex-row gap-8 w-[800px] lg:w-[650px]">
    {{-- Left Side: Chart --}}
    <div class="flex-1 relative " style="height: 350px;">
      <div id="alignmentChart" style="height: 100%; width: 100%;"></div>
      <div id="noAlignmentData" class="absolute inset-0 flex items-center justify-center text-gray-600 text-lg font-medium hidden">
        No data available
      </div>
    </div>

    {{-- Right Side --}}
    <div class="flex-1 flex flex-col">
      <div class="flex  justify-between sm:flex-row  items-start mb-4 gap-3">
        <h2 class="font-bold text-lg">Student Alignment</h2>
        <form id="alignmentFilterForm" method="GET" action="{{ route('admin.insight') }}" class="flex gap-3">
          <input type="hidden" name="aligned" id="alignedInput" value="{{ $alignedSelect }}">
          <x-dropdown>
            <x-slot:trigger>
              <button type="button" class="px-3">{{ $alignedSelect }}</button>
            </x-slot:trigger>

            <x-slot:content>
              @foreach ($courseAlignment as $align)
                <x-dropdown-link href="#" class="alignment-option" data-aligned="{{ $align }}">
                  {{ $align }}
                </x-dropdown-link>
              @endforeach
            </x-slot:content>
          </x-dropdown>
        </form>
      </div>

      <div id="alignmentLegend" class="mt-4 space-y-2"></div>
    </div>
  </div>
</div>


<script>
window.addEventListener('load', function() {
  const rawData = @json($studentAlignment);
  const alignmentChartEl = document.getElementById('alignmentChart');
  const noDataMessage = document.getElementById('noAlignmentData');
  const legendContainer = document.getElementById('alignmentLegend');

  const colorPalette = ['#FF686B', '#FF0004', '#000000', '#38CF49', '#FFE83A', '#FF8800'];

  const alignmentData = rawData.map((item, index) => ({
    name: item.course,
    value: item.student_count,
    color: colorPalette[index % colorPalette.length]
  }));

  if (!alignmentData || alignmentData.length === 0) {
    noDataMessage.classList.remove('hidden');
    alignmentChartEl.style.display = 'none';
  } else {
    noDataMessage.classList.add('hidden');
    alignmentChartEl.style.display = 'block';

    // Render Chart
    const chart = echarts.init(alignmentChartEl);
    const option = {
      color: colorPalette,
      tooltip: { trigger: 'item', formatter: '{b}: {c} ({d}%)' },
      series: [{
        name: 'Student Alignment',
        type: 'pie',
        radius: ['40%', '70%'],
        center: ['50%', '55%'],
        itemStyle: { borderRadius: 10, borderColor: '#fff', borderWidth: 2 },
        label: { show: false, position: 'center' },
        emphasis: { label: { show: true, fontSize: 20, fontWeight: 'bold' } },
        labelLine: { show: false },
        data: alignmentData
      }]
    };
    chart.setOption(option);
    window.addEventListener('resize', () => chart.resize());

    const total = alignmentData.reduce((sum, item) => sum + item.value, 0);
    legendContainer.innerHTML = alignmentData.map(item => {
      const percentage = total > 0 ? ((item.value / total) * 100).toFixed(1) : 0;
      return `
        <div class="flex items-center gap-3">
          <span class="w-10 h-10 rounded-sm" style="background-color:${item.color};"></span>
          <span class="text-sm font-medium text-gray-700">${item.name}</span>
          <span class="ml-auto text-sm text-gray-500">${item.value} - (${percentage}%)</span>
        </div>
      `;
    }).join('');
  }
});

// Dropdown filter logic
document.addEventListener('DOMContentLoaded', function() {
  document.querySelectorAll('.alignment-option').forEach(btn => {
    btn.addEventListener('click', e => {
      e.preventDefault();
      document.getElementById('alignedInput').value = btn.dataset.aligned;
      document.getElementById('alignmentFilterForm').submit();
    });
  });
});
</script>
