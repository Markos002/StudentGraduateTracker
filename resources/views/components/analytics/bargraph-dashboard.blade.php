<div class="container mx-auto p-3 bg-white rounded-md mt-5 overflow-x-auto">
    <div class="min-w-[900px] md:min-w-[800px] lg:min-w-full">
        <div id="salesChart" style="height: 400px; width: 100%;"></div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/echarts@5/dist/echarts.min.js"></script>

<script>
document.addEventListener('DOMContentLoaded', function () {
    var chartDom = document.getElementById('salesChart');
    var myChart = echarts.init(chartDom);

    var option = {
        color: ['#8FE5A6', '#FFE83A'],
        tooltip: {},
        legend: {
            orient: 'vertical',  
            right: 10,           
            top: 'center',      
            textStyle: {
                color: '#333',
                fontSize: 12
            }
        },
        dataset: {
            dimensions: ['product', 'In-Field Jobs', 'Out of Field Jobs'],
            source: [
                { product: 'BSIT', 'In-Field Jobs': 6, 'Out of Field Jobs': 12},
                { product: 'BSMX', 'In-Field Jobs': 8, 'Out of Field Jobs': 62 },
                { product: 'BIT-ELEC', 'In-Field Jobs': 5, 'Out of Field Jobs': 17 },
                { product: 'BIT-ELEX', 'In-Field Jobs': 5, 'Out of Field Jobs': 32},
                { product: 'BIT-DT', 'In-Field Jobs': 8, 'Out of Field Jobs': 62 },
                { product: 'BIT-CT', 'In-Field Jobs': 8, 'Out of Field Jobs': 62 }
            ]
        },
        grid: {
            right: '20%' 
        },
        xAxis: { type: 'category' },
        yAxis: {},
        series: [
            { type: 'bar' },
            { type: 'bar' }
        ]
    };

    myChart.setOption(option);
    window.addEventListener('resize', () => myChart.resize());
});
</script>
