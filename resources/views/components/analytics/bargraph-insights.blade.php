@props(['courses', 'selectedCourse', 'jobTrends'])

<script src="https://cdn.jsdelivr.net/npm/echarts@5/dist/echarts.min.js"></script>

<div class="container mx-auto p-8 bg-white rounded-md mt-5 overflow-x-auto">
  <div class="flex justify-between items-center mb-4">
    <h2 class="font-bold text-lg ">Job Trend</h2>

    <form id="courseFilterForm" method="GET" action="{{ route('admin.insight') }}" class="flex items-center gap-3">
      <input type="hidden" name="course" id="courseInput" value="{{ $selectedCourse }}">
      <x-dropdown>
        <x-slot:trigger>
          <button type="button" class="px-3 rounded-md ">
            {{ $selectedCourse }}
          </button>
        </x-slot:trigger>

        <x-slot:content>
          @foreach ($courses as $courseAvailable)
            <x-dropdown-link href="#" class="course-option" data-course="{{ $courseAvailable }}">
              {{ $courseAvailable }}
            </x-dropdown-link>
          @endforeach
        </x-slot:content>
      </x-dropdown>
    </form>
  </div>

  <div class="relative h-[300px] px-1 lg:px-14 gap-5">
    <div class="min-w-[500px] md:min-w-[600px] lg:min-w-full">
      <div id="jobTrendChart" style="height: 250px; width: 100%;"></div>
      <i class="flex justify-center py-5">Graduate Students</i>
    </div>
  
    {{-- No Data Message --}}
    <div id="noDataMessage"
      class="absolute inset-0 flex items-center justify-center text-gray-600 text-lg font-medium hidden">
      No data available
    </div>
  </div>
</div>

<script>
  const jobTrends = @json($jobTrends);
  const chartDom = document.getElementById('jobTrendChart');
  const noDataMessage = document.getElementById('noDataMessage');

  if (!jobTrends || jobTrends.length === 0) {
    noDataMessage.classList.remove('hidden');
  } else {
    noDataMessage.classList.add('hidden');
    const myChart = echarts.init(chartDom);

    const categories = jobTrends.map(item => item.occupation ?? item.name ?? 'N/A');
    const values = jobTrends.map(item => item.total_employed ?? 0);

    const option = {
      tooltip: { trigger: 'axis', axisPointer: { type: 'shadow' } },
      grid: { left: '5%', right: '5%', bottom: '5%', containLabel: true },
      xAxis: { type: 'value', boundaryGap: [0, 5] },
      yAxis: { type: 'category', data: categories,
        axisLabel: {
          fontSize: 12,     
          fontWeight: 'bold', 
          color: '#000',    
        },
      },
      series: [
        {
          name: 'Job Count',
          type: 'bar',
          data: values,
          itemStyle: { borderRadius: [0, 4, 4, 0] },
        },
      ],
    };

    myChart.setOption(option);
  }

  document.querySelectorAll('.course-option').forEach(btn => {
    btn.addEventListener('click', e => {
      e.preventDefault();
      const course = btn.getAttribute('data-course');
      document.getElementById('courseInput').value = course;
      document.getElementById('courseFilterForm').submit();
    });
  });
</script>
