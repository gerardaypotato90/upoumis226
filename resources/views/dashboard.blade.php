<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <script src="https://code.highcharts.com/highcharts.js"></script>
    
        
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div id="container"></div>
                </div>
                <br />
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="flex flex-col">
                            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                                <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                                    <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                                        <table class="min-w-full divide-y divide-gray-200">
                                            <thead class="bg-gray-50">
                                            <tr>
                                                <th scope="col" class="relative px-6 py-3">
                                                Total Cases
                                                </th>
                                                <th scope="col" class="relative px-6 py-3">
                                                Actice Cases
                                                </th>
                                                <th scope="col" class="relative px-6 py-3">
                                                Recovered
                                                </th>
                                                <th scope="col" class="relative px-6 py-3">
                                                Deaths
                                                </th>
                                            </tr>
                                            </thead>
                                            <tbody class="bg-white divide-y divide-gray-200">
                                            
                                            <tr>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                3,687, 748
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                                3,122
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                                3,6324,171
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                                60,455
                                                </td>
                                            </tr>
                                            
                                            </tbody>
                                        </table>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            <br>
            <div class="p-6 bg-white border-b border-gray-200">
            <div class="flex flex-col">
                            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                                <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                                    <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                                        <table class="min-w-full divide-y divide-gray-200">
                                            <thead class="bg-gray-50">
                                            <tr>
                                                <th scope="col" class="relative px-6 py-3">
                                                Cases per region
                                                </th>
                                            </tr>
                                            <tr>
                                                <th scope="col" class="relative px-6 py-3">
                                                Location
                                                </th>
                                                <th scope="col" class="relative px-6 py-3">
                                                Cases
                                                </th>
                                                <th scope="col" class="relative px-6 py-3">
                                                Deaths
                                                </th>
                                            </tr>
                                            </thead>
                                            <tbody class="bg-white divide-y divide-gray-200">
                                            @foreach ($regionData as $reg)
                                            <tr>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                {{ $reg->Location }}
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                {{ $reg->Cases }}
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                {{ $reg->Deaths }}
                                                </td>
                                            </tr>
                                            @endforeach
                                            </tbody>
                                        </table>

                                    </div>
           </div>
        </div>
    </div>
    <script type="text/javascript">
    var userData = <?php echo json_encode($userData)?>;
    var userData2 = <?php echo json_encode($userData)?>;
    var doc = [];
    var noc =[];
    

        for (let i = 0; i < userData.length; i++) {
            
            doc.push(userData[i].dateofcases);
            noc.push(userData[i].numcases);
        }

        Highcharts.chart('container', {
            title: {
                text: 'COVID-19 Cases'
            },
            subtitle: {
                text: 'Source: positronx.io'
            },
            xAxis: {
                categories: doc
            },
            yAxis: {
                title: {
                    text: 'Number of Cases'
                }
            },
            legend: {
                layout: 'vertical',
                align: 'right',
                verticalAlign: 'middle'
            },
            plotOptions: {
                series: {
                    allowPointSelect: true
                }
            },
            series: [{
                name: 'COVID-19 Cases',
                data: noc,
            }],
            responsive: {
                rules: [{
                    condition: {
                        maxWidth: 500
                    },
                    chartOptions: {
                        legend: {
                            layout: 'horizontal',
                            align: 'center',
                            verticalAlign: 'bottom'
                        }
                    }
                }]
            }
        });
    </script>
</x-app-layout>
