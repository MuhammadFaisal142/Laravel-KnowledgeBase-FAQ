@extends('layouts.main')
<style>
    /* Default styles for .highcharts-subtitle */
    .highcharts-subtitle {
        width: -webkit-fill-available !important;
    }

    /* Media query for screens below 1200px */
    @media screen and (max-width: 1199px) {
        .highcharts-subtitle {
            top: 49px !important;
        }
    }

    /* Media query for screens below 880px */
    @media screen and (max-width: 879px) {
        .highcharts-subtitle {
            top: 70px !important;
        }
    }

    @media screen and (max-width: 767px) {
        .highcharts-subtitle {
            top: 30px !important;
        }
    }

    @media screen and (max-width: 445px) {
        .highcharts-subtitle {
            top: 50px !important;
        }
    }
</style>
@section('content')
    <div class="graphs-row mt-4">
        <div class="row">
            {{-- first filter box --}}
            <div class="col-md-4">
                <div class="filters-holder">
                    <div class="form-holder">
                        <div class="row">
                            <div class="col-md-12">
                                <label class="custom-select" for="selecteProvince">
                                    <select id="selecteProvince" name="options" onchange="updateDistricts_first()">
                                        <option value="">{{ trans('global.all_provinces') }}</option>
                                        @foreach ($population_data as $key => $province_first)
                                            @if (!isset($encounteredProvincesFirst[$province_first->Cod_Prov]))
                                                <option value="{{ $province_first->Cod_Prov }}">
                                                    {{ $province_first->Provincia }}</option>
                                                @php $encounteredProvincesFirst[$province_first->Cod_Prov] = true; @endphp
                                            @endif
                                        @endforeach
                                    </select>
                                </label>
                            </div>
                            <div class="row mt-2">
                                <div class="col-md-8">
                                    <label class="custom-select" for="selectedDistrict">
                                        <select id="selectedDistrict" name="options">
                                            <!-- Districts will be dynamically populated here using JavaScript -->
                                            <option value="" id="not-selected">Please select province</option>
                                        </select>
                                    </label>
                                </div>
                                <div class="col-md-4">
                                    <button class="search-btn" onclick="performSearch()">
                                        {{ trans('global.search') }}
                                        <i id="loader" class="fa fa-spinner fa-spin" style="display: none;"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="chart-visual totals">
                    <div class="emptyMessage" style="position: absolute; margin-left:12%">
                        {{ trans('global.select_any_districts') }}
                    </div>
                    <div class="chart-holder" id="population_2017"></div>
                </div>
                <div class="chart-visual totals">
                    <div class="emptyMessage" style="position: absolute; margin-left:12%">
                        {{ trans('global.select_any_districts') }}
                    </div>
                    <div class="chart-holder" id="population_2007"></div>
                </div>
            </div>


            {{-- second filter box --}}



            <div class="col-md-4">
                <div class="filters-holder">
                    <div class="form-holder">
                        <div class="row">
                            <div class="col-md-12">
                                <label class="custom-select" for="selecteProvince_second">
                                    <select id="selecteProvince_second" name="options"
                                        onchange="updateDistrictsSecondFilter()">
                                        <option value="">{{ trans('global.all_provinces') }}</option>
                                        @foreach ($population_data as $key => $province_second)
                                            @if (!isset($encounteredProvincesSecond[$province_second->Cod_Prov]))
                                                <option value="{{ $province_second->Cod_Prov }}">
                                                    {{ $province_second->Provincia }}</option>
                                                @php $encounteredProvincesSecond[$province_second->Cod_Prov] = true; @endphp
                                            @endif
                                        @endforeach
                                    </select>
                                </label>
                            </div>
                            <div class="row mt-2">
                                <div class="col-md-8">
                                    <label class="custom-select" for="selectedDistrict_second">
                                        <select id="selectedDistrict_second" name="options">
                                            <!-- Districts will be dynamically populated here using JavaScript -->
                                            <option value="" id="not-selected_second">Please select province</option>
                                        </select>
                                    </label>
                                </div>
                                <div class="col-md-4">
                                    <button class="search-btn" onclick="performSearchSecondFilter()">
                                        {{ trans('global.search') }}
                                        <i id="loader-second" class="fa fa-spinner fa-spin" style="display: none;"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="chart-visual totals">
                    <!-- Map for 2017 data -->
                    <div class="emptyMessage" style="position: absolute; margin-left:12%">
                        {{ trans('global.select_any_districts') }}
                    </div>
                    <div class="chart-holder" id="population_2017_second_filter"></div>
                </div>
                <div class="chart-visual totals">
                    <!-- Map for 2007 data -->
                    <div class="emptyMessage" style="position: absolute; margin-left:12%">
                        {{ trans('global.select_any_districts') }}
                    </div>
                    <div class="chart-holder" id="population_2007_second_filter"></div>
                </div>
            </div>


            {{-- third filter box --}}


            <div class="col-md-4">
                <div class="filters-holder">
                    <div class="form-holder">
                        <div class="row">
                            <div class="col-md-12">
                                <label class="custom-select" for="selecteProvince_third">
                                    <select id="selecteProvince_third" name="options"
                                        onchange="updateDistrictsThirdFilter()">
                                        <option value="">{{ trans('global.all_provinces') }}</option>
                                        @foreach ($population_data as $key => $province_third)
                                            @if (!isset($encounteredProvincesThird[$province_third->Cod_Prov]))
                                                <option value="{{ $province_third->Cod_Prov }}">
                                                    {{ $province_third->Provincia }}</option>
                                                @php $encounteredProvincesThird[$province_third->Cod_Prov] = true; @endphp
                                            @endif
                                        @endforeach
                                    </select>
                                </label>
                            </div>
                            <div class="row mt-2">
                                <div class="col-md-8">
                                    <label class="custom-select" for="selectedDistrict_third">
                                        <select id="selectedDistrict_third" name="options">
                                            <!-- Districts will be dynamically populated here using JavaScript -->
                                            <option value="" id="not-selected_third">Please select province</option>
                                        </select>
                                    </label>
                                </div>
                                <div class="col-md-4">
                                    <button class="search-btn" onclick="performSearchThirdFilterbtn()">
                                        {{ trans('global.search') }}
                                        <i id="loader-third" class="fa fa-spinner fa-spin" style="display: none;"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="chart-visual totals">
                    <!-- Map for 2017 data -->
                    <div class="emptyMessage" style="position: absolute; margin-left:12%">
                        {{ trans('global.select_any_districts') }}
                    </div>
                    <div class="chart-holder" id="population_2017_third_filter"></div>
                </div>
                <div class="chart-visual totals">
                    <!-- Map for 2007 data -->
                    <div class="emptyMessage" style="position: absolute; margin-left:12%">
                        {{ trans('global.select_any_districts') }}
                    </div>
                    <div class="chart-holder" id="population_2007_third_filter"></div>
                </div>
            </div>

        </div>
    </div>
    <script>
        // Filter managments

        function updateDistricts_first() {
            var selectedProvince = document.getElementById('selecteProvince').value;
            var selectedDistrictvalue = document.getElementById('selectedDistrict').value;
            var districtsDropdown = document.getElementById('selectedDistrict');
            districtsDropdown.innerHTML = ''; // Clear existing options
            var selectedProvinceOption = document.getElementById('selecteProvince').options[document.getElementById(
                'selecteProvince').selectedIndex];
            var selectedProvinceName = selectedProvinceOption ? selectedProvinceOption.text : null;

            // Check if the element with ID 'not-selected' exists
            var notSelectedElement = document.getElementById('not-selected');
            if (notSelectedElement) {
                notSelectedElement.style.display = 'none';
            }

            // Add "Please select province" option if no province is selected
            if (!selectedProvince) {
                var defaultOption = document.createElement('option');
                defaultOption.value = '';
                defaultOption.text = 'Please select province';
                districtsDropdown.appendChild(defaultOption);
                return; // Exit the function if no province is selected
            }

            // Add default option
            var defaultOption = document.createElement('option');
            defaultOption.value = '';
            defaultOption.text = selectedProvinceName + " " + '{{ trans('global.districts') }}';
            districtsDropdown.appendChild(defaultOption);

            // Filter districts based on selected province
            @foreach ($population_data as $district)
                if ('{{ $district->Cod_Prov }}' === selectedProvince) {
                    var option = document.createElement('option');
                    option.value = '{{ $district->Cod_Dist }}';
                    option.text = '{{ $district->District }}';
                    districtsDropdown.appendChild(option);
                }
            @endforeach

            update_Map_Pyramid_by_Provinces_Vise_Data();
        }

        function update_Map_Pyramid_by_Provinces_Vise_Data() {

            var selectedProvincevalue = document.getElementById('selecteProvince').value;
            const dataFromServerOfProvinces = @json($provinces_all_data);


            // Find the object that matches selected Province and District
            var matchingObject = dataFromServerOfProvinces.find(function(item) {
                return item.Cod_Prov == selectedProvincevalue;
            });

            if (matchingObject) {
                // Extract the 'id' from the matching object
                var mainId = matchingObject.Cod_Prov;
                var mainProvince = matchingObject.Provincia;
                // console.log("Main ID:", mainId , "Provinces Name : " , mainProvince );
            } else {
                console.log("Matching object not found");
            }

            const filteredDataProvinceVise = dataFromServerOfProvinces.filter(function(record) {
                return record.id === mainId;
            });

            // continue from here


        }

        function performSearch() {
            // Show the loader and hide the button text
            document.getElementById('loader').style.display = 'inline-block';
            // Hide the loader after 2 seconds
            setTimeout(function() {
                document.getElementById('loader').style.display = 'none';
            }, 2000);
            // Delay the updateMap function by 2 seconds
            setTimeout(function() {
                // Update the map based on the selected province
                updateMapPyramid();
            }, 2000);
        }

        function updateMapPyramid() {
            var selectedProvincevalue = document.getElementById('selecteProvince').value;
            var selectedDistrict = document.getElementById('selectedDistrict').value;

            const dataFromServer = @json($population_data);

            // Find the object that matches selected Province and District
            var matchingObject = dataFromServer.find(function(item) {
                return item.Cod_Prov == selectedProvincevalue && item.Cod_Dist == selectedDistrict;
            });

            if (matchingObject) {
                // Extract the 'id' from the matching object
                var mainId = matchingObject.id;
                console.log("Main ID:", mainId);
            } else {
                console.log("Matching object not found");
            }

            const filteredData = dataFromServer.filter(function(record) {
                return record.id === mainId;
            });



            // this 2007 data districts
            var {
                District,
                T_TL_2007,
                M_00_00_p_2007,
                F_00_00_p_2007,
                T_00_00_p_2007,
                M_01_04_p_2007,
                F_01_04_p_2007,
                T_01_04_p_2007,
                M_05_09_p_2007,
                F_05_09_p_2007,
                T_05_09_p_2007,
                M_10_14_p_2007,
                F_10_14_p_2007,
                T_10_14_p_2007,
                M_15_19_p_2007,
                F_15_19_p_2007,
                T_15_19_p_2007,
                M_20_24_p_2007,
                F_20_24_p_2007,
                T_20_24_p_2007,
                M_25_29_p_2007,
                F_25_29_p_2007,
                T_25_29_p_2007,
                M_30_34_p_2007,
                F_30_34_p_2007,
                T_30_34_p_2007,
                M_35_39_p_2007,
                F_35_39_p_2007,
                T_35_39_p_2007,
                M_40_44_p_2007,
                F_40_44_p_2007,
                T_40_44_p_2007,
                M_45_49_p_2007,
                F_45_49_p_2007,
                T_45_49_p_2007,
                M_50_54_p_2007,
                F_50_54_p_2007,
                T_50_54_p_2007,
                M_55_59_p_2007,
                F_55_59_p_2007,
                T_55_59_p_2007,
                M_60_64_p_2007,
                F_60_64_p_2007,
                T_60_64_p_2007,
                M_65_69_p_2007,
                F_65_69_p_2007,
                T_65_69_p_2007,
                M_70_74_p_2007,
                F_70_74_p_2007,
                T_70_74_p_2007,
                M_75_79_p_2007,
                F_75_79_p_2007,
                T_75_79_p_2007,
                M_80plus_p_2007,
                F_80plus_p_2007,
                T_80plus_p_2007
            } = filteredData[0];

            percent_distribution_2007(District, T_TL_2007, M_00_00_p_2007, F_00_00_p_2007, T_00_00_p_2007, M_01_04_p_2007,
                F_01_04_p_2007, T_01_04_p_2007, M_05_09_p_2007, F_05_09_p_2007, T_05_09_p_2007, M_10_14_p_2007,
                F_10_14_p_2007, T_10_14_p_2007, M_15_19_p_2007, F_15_19_p_2007, T_15_19_p_2007, M_20_24_p_2007,
                F_20_24_p_2007, T_20_24_p_2007, M_25_29_p_2007, F_25_29_p_2007, T_25_29_p_2007, M_30_34_p_2007,
                F_30_34_p_2007, T_30_34_p_2007, M_35_39_p_2007, F_35_39_p_2007, T_35_39_p_2007, M_40_44_p_2007,
                F_40_44_p_2007, T_40_44_p_2007, M_45_49_p_2007, F_45_49_p_2007, T_45_49_p_2007, M_50_54_p_2007,
                F_50_54_p_2007, T_50_54_p_2007, M_55_59_p_2007, F_55_59_p_2007, T_55_59_p_2007, M_60_64_p_2007,
                F_60_64_p_2007, T_60_64_p_2007, M_65_69_p_2007, F_65_69_p_2007, T_65_69_p_2007, M_70_74_p_2007,
                F_70_74_p_2007, T_70_74_p_2007, M_75_79_p_2007, F_75_79_p_2007, T_75_79_p_2007, M_80plus_p_2007,
                F_80plus_p_2007, T_80plus_p_2007);
            // Percent distribution of the household population First paramyid Graph show on the right on the page
            var {
                District,
                T_TL,
                M_00_00_p,
                F_00_00_p,
                T_00_00_p,
                M_01_04_p,
                F_01_04_p,
                T_01_04_p,
                M_05_09_p,
                F_05_09_p,
                T_05_09_p,
                M_10_14_p,
                F_10_14_p,
                T_10_14_p,
                M_15_19_p,
                F_15_19_p,
                T_15_19_p,
                M_20_24_p,
                F_20_24_p,
                T_20_24_p,
                M_25_29_p,
                F_25_29_p,
                T_25_29_p,
                M_30_34_p,
                F_30_34_p,
                T_30_34_p,
                M_35_39_p,
                F_35_39_p,
                T_35_39_p,
                M_40_44_p,
                F_40_44_p,
                T_40_44_p,
                M_45_49_p,
                F_45_49_p,
                T_45_49_p,
                M_50_54_p,
                F_50_54_p,
                T_50_54_p,
                M_55_59_p,
                F_55_59_p,
                T_55_59_p,
                M_60_64_p,
                F_60_64_p,
                T_60_64_p,
                M_65_69_p,
                F_65_69_p,
                T_65_69_p,
                M_70_74_p,
                F_70_74_p,
                T_70_74_p,
                M_75_79_p,
                F_75_79_p,
                T_75_79_p,
                M_80plus_p,
                F_80plus_p,
                T_80plus_p
            } = filteredData[0];
            // Call the function and pass the variables
            percent_distribution_2017(
                District, T_TL,
                M_00_00_p, F_00_00_p, T_00_00_p,
                M_01_04_p, F_01_04_p, T_01_04_p,
                M_05_09_p, F_05_09_p, T_05_09_p,
                M_10_14_p, F_10_14_p, T_10_14_p,
                M_15_19_p, F_15_19_p, T_15_19_p,
                M_20_24_p, F_20_24_p, T_20_24_p,
                M_25_29_p, F_25_29_p, T_25_29_p,
                M_30_34_p, F_30_34_p, T_30_34_p,
                M_35_39_p, F_35_39_p, T_35_39_p,
                M_40_44_p, F_40_44_p, T_40_44_p,
                M_45_49_p, F_45_49_p, T_45_49_p,
                M_50_54_p, F_50_54_p, T_50_54_p,
                M_55_59_p, F_55_59_p, T_55_59_p,
                M_60_64_p, F_60_64_p, T_60_64_p,
                M_65_69_p, F_65_69_p, T_65_69_p,
                M_70_74_p, F_70_74_p, T_70_74_p,
                M_75_79_p, F_75_79_p, T_75_79_p,
                M_80plus_p, F_80plus_p, T_80plus_p
            );

        }

        function percent_distribution_2017(District, T_TL,
            M_00_00_p, F_00_00_p, T_00_00_p,
            M_01_04_p, F_01_04_p, T_01_04_p,
            M_05_09_p, F_05_09_p, T_05_09_p,
            M_10_14_p, F_10_14_p, T_10_14_p,
            M_15_19_p, F_15_19_p, T_15_19_p,
            M_20_24_p, F_20_24_p, T_20_24_p,
            M_25_29_p, F_25_29_p, T_25_29_p,
            M_30_34_p, F_30_34_p, T_30_34_p,
            M_35_39_p, F_35_39_p, T_35_39_p,
            M_40_44_p, F_40_44_p, T_40_44_p,
            M_45_49_p, F_45_49_p, T_45_49_p,
            M_50_54_p, F_50_54_p, T_50_54_p,
            M_55_59_p, F_55_59_p, T_55_59_p,
            M_60_64_p, F_60_64_p, T_60_64_p,
            M_65_69_p, F_65_69_p, T_65_69_p,
            M_70_74_p, F_70_74_p, T_70_74_p,
            M_75_79_p, F_75_79_p, T_75_79_p,
            M_80plus_p, F_80plus_p, T_80plus_p
        ) {
            var categories = [
                '0-0', '1-4', '5-9', '10-14', '15-19',
                '20-24', '25-29', '30-34', '35-39', '40-44',
                '45-49', '50-54', '55-59', '60-64', '65-69',
                '70-74', '75-79', '80 +'
            ];

            Highcharts.chart('population_2017', {
                chart: {
                    type: 'bar'
                },
                title: {
                    text: 'Population Pyramid of ' + District,
                    useHTML: true,
                },

                subtitle: {
                    useHTML: true, // Enable HTML in subtitle
                    text: '<div class="subtitle-container">' +
                        '<div style="float: left; margin-left:10px ;" ><b>Total Pop = ' + T_TL + '</b></div>' +
                        '<div style="float: right; margin-right:65px">Census-2017</div>' +
                        '</div>',
                    align: 'left',
                    x: 0, // Set x to 0 to start subtitle from the left
                    y: 32 // Adjust y position as needed

                },
                credits: {
                    enabled: false
                },
                xAxis: [{
                    opposite: true,
                    reversed: false,
                    categories: categories,
                    linkedTo: 1,
                    labels: {
                        step: 1
                    },
                    accessibility: {
                        description: 'Age (female)'
                    }
                }],
                yAxis: {
                    title: {
                        text: null
                    },
                    labels: {
                        formatter: function() {
                            return Math.abs(this.value) + '%';
                        }
                    }
                },

                plotOptions: {
                    series: {
                        stacking: 'normal'
                    }
                },

                tooltip: {
                    formatter: function() {
                        return '<b>' + this.series.name + ', age ' + this.point.category + '</b><br/>' +
                            'Population: ' + Highcharts.numberFormat(Math.abs(this.point.y), 2);
                    }
                },

                series: [{
                    name: 'Male',
                    data: [
                        M_00_00_p, M_01_04_p, M_05_09_p, M_10_14_p, M_15_19_p,
                        M_20_24_p, M_25_29_p, M_30_34_p, M_35_39_p, M_40_44_p,
                        M_45_49_p, M_50_54_p, M_55_59_p, M_60_64_p, M_65_69_p,
                        M_70_74_p, M_75_79_p, M_80plus_p
                    ].map(function(value) {
                        return -Math.abs(value);
                    })
                }, {
                    name: 'Female',
                    data: [
                        F_00_00_p, F_01_04_p, F_05_09_p, F_10_14_p, F_15_19_p,
                        F_20_24_p, F_25_29_p, F_30_34_p, F_35_39_p, F_40_44_p,
                        F_45_49_p, F_50_54_p, F_55_59_p, F_60_64_p, F_65_69_p,
                        F_70_74_p, F_75_79_p, F_80plus_p
                    ].map(Math.abs)
                }]
            });
        }

        function percent_distribution_2007(District, T_TL_2007, M_00_00_p_2007, F_00_00_p_2007, T_00_00_p_2007,
            M_01_04_p_2007,
            F_01_04_p_2007, T_01_04_p_2007, M_05_09_p_2007, F_05_09_p_2007, T_05_09_p_2007, M_10_14_p_2007,
            F_10_14_p_2007, T_10_14_p_2007, M_15_19_p_2007, F_15_19_p_2007, T_15_19_p_2007, M_20_24_p_2007,
            F_20_24_p_2007, T_20_24_p_2007, M_25_29_p_2007, F_25_29_p_2007, T_25_29_p_2007, M_30_34_p_2007,
            F_30_34_p_2007, T_30_34_p_2007, M_35_39_p_2007, F_35_39_p_2007, T_35_39_p_2007, M_40_44_p_2007,
            F_40_44_p_2007, T_40_44_p_2007, M_45_49_p_2007, F_45_49_p_2007, T_45_49_p_2007, M_50_54_p_2007,
            F_50_54_p_2007, T_50_54_p_2007, M_55_59_p_2007, F_55_59_p_2007, T_55_59_p_2007, M_60_64_p_2007,
            F_60_64_p_2007, T_60_64_p_2007, M_65_69_p_2007, F_65_69_p_2007, T_65_69_p_2007, M_70_74_p_2007,
            F_70_74_p_2007, T_70_74_p_2007, M_75_79_p_2007, F_75_79_p_2007, T_75_79_p_2007, M_80plus_p_2007,
            F_80plus_p_2007, T_80plus_p_2007) {
            var categories = [
                '0-0', '1-4', '5-9', '10-14', '15-19',
                '20-24', '25-29', '30-34', '35-39', '40-44',
                '45-49', '50-54', '55-59', '60-64', '65-69',
                '70-74', '75-79', '80 +'
            ];

            Highcharts.chart('population_2007', {
                chart: {
                    type: 'bar'
                },
                title: {
                    text: 'Population Pyramid of ' + District
                },

                subtitle: {
                    useHTML: true, // Enable HTML in subtitle
                    text: '<div class="subtitle-container">' +
                        '<div style="float: left; margin-left:10px ;" ><b>Total Pop = ' + T_TL_2007 + '</b></div>' +
                        '<div style="float: right; margin-right:65px">Census-2007</div>' +
                        '</div>',
                    align: 'left',
                    x: 0, // Set x to 0 to start subtitle from the left
                    y: 32 // Adjust y position as needed

                },
                credits: {
                    enabled: false
                },
                xAxis: [{
                    opposite: true,
                    reversed: false,
                    categories: categories,
                    linkedTo: 1,
                    labels: {
                        step: 1
                    },
                    accessibility: {
                        description: 'Age (female)'
                    }
                }],
                yAxis: {
                    title: {
                        text: null
                    },
                    labels: {
                        formatter: function() {
                            return Math.abs(this.value) + '%';
                        }
                    }
                },

                plotOptions: {
                    series: {
                        stacking: 'normal'
                    }
                },

                tooltip: {
                    formatter: function() {
                        return '<b>' + this.series.name + ', age ' + this.point.category + '</b><br/>' +
                            'Population: ' + Highcharts.numberFormat(Math.abs(this.point.y), 2);
                    }
                },

                series: [{
                    name: 'Male',
                    data: [
                        M_00_00_p_2007, M_01_04_p_2007, M_05_09_p_2007, M_10_14_p_2007, M_15_19_p_2007,
                        M_20_24_p_2007, M_25_29_p_2007, M_30_34_p_2007, M_35_39_p_2007, M_40_44_p_2007,
                        M_45_49_p_2007, M_50_54_p_2007, M_55_59_p_2007, M_60_64_p_2007, M_65_69_p_2007,
                        M_70_74_p_2007, M_75_79_p_2007, M_80plus_p_2007
                    ].map(function(value) {
                        return -Math.abs(value);
                    })
                }, {
                    name: 'Female',
                    data: [
                        F_00_00_p_2007, F_01_04_p_2007, F_05_09_p_2007, F_10_14_p_2007, F_15_19_p_2007,
                        F_20_24_p_2007, F_25_29_p_2007, F_30_34_p_2007, F_35_39_p_2007, F_40_44_p_2007,
                        F_45_49_p_2007, F_50_54_p_2007, F_55_59_p_2007, F_60_64_p_2007, F_65_69_p_2007,
                        F_70_74_p_2007, F_75_79_p_2007, F_80plus_p_2007
                    ].map(Math.abs)
                }]
            });
        }

        function updateDistrictsSecondFilter() {
            var selectedProvince = document.getElementById('selecteProvince_second').value;
            var districtsDropdown = document.getElementById('selectedDistrict_second');
            districtsDropdown.innerHTML = ''; // Clear existing options
            var selectedProvinceOption = document.getElementById('selecteProvince_second').options[document.getElementById(
                'selecteProvince_second').selectedIndex];
            var selectedProvinceName = selectedProvinceOption ? selectedProvinceOption.text : null;

            // Check if the element with ID 'not-selected_second' exists
            var notSelectedElement = document.getElementById('not-selected_second');
            if (notSelectedElement) {
                notSelectedElement.style.display = 'none';
            }

            // Add "Please select province" option if no province is selected
            if (!selectedProvince) {
                var defaultOption = document.createElement('option');
                defaultOption.value = '';
                defaultOption.text = 'Please select province';
                districtsDropdown.appendChild(defaultOption);
                return; // Exit the function if no province is selected
            }

            // Add default option
            var defaultOption = document.createElement('option');
            defaultOption.value = '';
            defaultOption.text = selectedProvinceName + " " + '{{ trans('global.districts') }}';
            districtsDropdown.appendChild(defaultOption);

            // Filter districts based on selected province
            @foreach ($population_data as $district)
                if ('{{ $district->Cod_Prov }}' === selectedProvince) {
                    var option = document.createElement('option');
                    option.value = '{{ $district->Cod_Dist }}';
                    option.text = '{{ $district->District }}';
                    districtsDropdown.appendChild(option);
                }
            @endforeach
        }

        // Function for performing search in the second filter box
        function performSearchSecondFilter() {
            // Show the loader and hide the button text
            document.getElementById('loader-second').style.display = 'inline-block';

            // Hide the loader after 2 seconds
            setTimeout(function() {
                document.getElementById('loader-second').style.display = 'none';
            }, 2000);

            // Your logic for performing search in the second filter box
            // ...

            // Delay the updateMap function by 2 seconds
            setTimeout(function() {
                // Update the map based on the selected province for the second filter
                updateMapPyramidSecondFilter();
            }, 2000);
        }

        function performSearchThirdFilterbtn() {
            // Show the loader and hide the button text
            document.getElementById('loader-third').style.display = 'inline-block';

            // Hide the loader after 2 seconds
            setTimeout(function() {
                document.getElementById('loader-third').style.display = 'none';
            }, 2000);

            // Your logic for performing search in the second filter box
            // ...

            // Delay the updateMap function by 2 seconds
            setTimeout(function() {
                // Update the map based on the selected province for the second filter
                updateMapPyramidThirdFilter();
            }, 2000);
        }

        // Filter managements for third filter box
        function updateDistrictsThirdFilter() {
            var selectedProvince = document.getElementById('selecteProvince_third').value;
            var selectedDistrictvalue = document.getElementById('selectedDistrict_third').value;
            var districtsDropdown = document.getElementById('selectedDistrict_third');
            districtsDropdown.innerHTML = ''; // Clear existing options
            var selectedProvinceOption = document.getElementById('selecteProvince_third').options[document.getElementById(
                'selecteProvince_third').selectedIndex];
            var selectedProvinceName = selectedProvinceOption ? selectedProvinceOption.text : null;

            // Check if the element with ID 'not-selected_third' exists
            var notSelectedElement = document.getElementById('not-selected_third');
            if (notSelectedElement) {
                notSelectedElement.style.display = 'none';
            }

            // Add "Please select province" option if no province is selected
            if (!selectedProvince) {
                var defaultOption = document.createElement('option');
                defaultOption.value = '';
                defaultOption.text = 'Please select province';
                districtsDropdown.appendChild(defaultOption);
                return; // Exit the function if no province is selected
            }

            // Add default option
            var defaultOption = document.createElement('option');
            defaultOption.value = '';
            defaultOption.text = selectedProvinceName + " " + '{{ trans('global.districts') }}';
            districtsDropdown.appendChild(defaultOption);

            // Filter districts based on selected province
            @foreach ($population_data as $district)
                if ('{{ $district->Cod_Prov }}' === selectedProvince) {
                    var option = document.createElement('option');
                    option.value = '{{ $district->Cod_Dist }}';
                    option.text = '{{ $district->District }}';
                    districtsDropdown.appendChild(option);
                }
            @endforeach
        }


        // Function for updating the map for the second filter box (2017 data)
        // Function for updating the map for the second filter box (2017 data)
        function updateMapPyramidSecondFilter() {
            var selectedProvincevalue = document.getElementById('selecteProvince_second').value;
            var selectedDistrict = document.getElementById('selectedDistrict_second').value;

            const dataFromServer = @json($population_data);

            // Find the object that matches selected Province and District
            var matchingObject = dataFromServer.find(function(item) {
                return item.Cod_Prov == selectedProvincevalue && item.Cod_Dist == selectedDistrict;
            });

            if (matchingObject) {
                // Extract the 'id' from the matching object
                var mainId = matchingObject.id;
                console.log("Main ID:", mainId);
            } else {
                console.log("Matching object not found");
            }

            const filteredData = dataFromServer.filter(function(record) {
                return record.id === mainId;
            });


            // this 2007 data districts
            var {
                District,
                T_TL_2007,
                M_00_00_p_2007,
                F_00_00_p_2007,
                T_00_00_p_2007,
                M_01_04_p_2007,
                F_01_04_p_2007,
                T_01_04_p_2007,
                M_05_09_p_2007,
                F_05_09_p_2007,
                T_05_09_p_2007,
                M_10_14_p_2007,
                F_10_14_p_2007,
                T_10_14_p_2007,
                M_15_19_p_2007,
                F_15_19_p_2007,
                T_15_19_p_2007,
                M_20_24_p_2007,
                F_20_24_p_2007,
                T_20_24_p_2007,
                M_25_29_p_2007,
                F_25_29_p_2007,
                T_25_29_p_2007,
                M_30_34_p_2007,
                F_30_34_p_2007,
                T_30_34_p_2007,
                M_35_39_p_2007,
                F_35_39_p_2007,
                T_35_39_p_2007,
                M_40_44_p_2007,
                F_40_44_p_2007,
                T_40_44_p_2007,
                M_45_49_p_2007,
                F_45_49_p_2007,
                T_45_49_p_2007,
                M_50_54_p_2007,
                F_50_54_p_2007,
                T_50_54_p_2007,
                M_55_59_p_2007,
                F_55_59_p_2007,
                T_55_59_p_2007,
                M_60_64_p_2007,
                F_60_64_p_2007,
                T_60_64_p_2007,
                M_65_69_p_2007,
                F_65_69_p_2007,
                T_65_69_p_2007,
                M_70_74_p_2007,
                F_70_74_p_2007,
                T_70_74_p_2007,
                M_75_79_p_2007,
                F_75_79_p_2007,
                T_75_79_p_2007,
                M_80plus_p_2007,
                F_80plus_p_2007,
                T_80plus_p_2007
            } = filteredData[0];

            percent_distribution_2007_second(District, T_TL_2007, M_00_00_p_2007, F_00_00_p_2007, T_00_00_p_2007,
                M_01_04_p_2007,
                F_01_04_p_2007, T_01_04_p_2007, M_05_09_p_2007, F_05_09_p_2007, T_05_09_p_2007, M_10_14_p_2007,
                F_10_14_p_2007, T_10_14_p_2007, M_15_19_p_2007, F_15_19_p_2007, T_15_19_p_2007, M_20_24_p_2007,
                F_20_24_p_2007, T_20_24_p_2007, M_25_29_p_2007, F_25_29_p_2007, T_25_29_p_2007, M_30_34_p_2007,
                F_30_34_p_2007, T_30_34_p_2007, M_35_39_p_2007, F_35_39_p_2007, T_35_39_p_2007, M_40_44_p_2007,
                F_40_44_p_2007, T_40_44_p_2007, M_45_49_p_2007, F_45_49_p_2007, T_45_49_p_2007, M_50_54_p_2007,
                F_50_54_p_2007, T_50_54_p_2007, M_55_59_p_2007, F_55_59_p_2007, T_55_59_p_2007, M_60_64_p_2007,
                F_60_64_p_2007, T_60_64_p_2007, M_65_69_p_2007, F_65_69_p_2007, T_65_69_p_2007, M_70_74_p_2007,
                F_70_74_p_2007, T_70_74_p_2007, M_75_79_p_2007, F_75_79_p_2007, T_75_79_p_2007, M_80plus_p_2007,
                F_80plus_p_2007, T_80plus_p_2007);

            // Percent distribution of the household population First paramyid Graph show on the right on the page
            var {
                District,
                T_TL,
                M_00_00_p,
                F_00_00_p,
                T_00_00_p,
                M_01_04_p,
                F_01_04_p,
                T_01_04_p,
                M_05_09_p,
                F_05_09_p,
                T_05_09_p,
                M_10_14_p,
                F_10_14_p,
                T_10_14_p,
                M_15_19_p,
                F_15_19_p,
                T_15_19_p,
                M_20_24_p,
                F_20_24_p,
                T_20_24_p,
                M_25_29_p,
                F_25_29_p,
                T_25_29_p,
                M_30_34_p,
                F_30_34_p,
                T_30_34_p,
                M_35_39_p,
                F_35_39_p,
                T_35_39_p,
                M_40_44_p,
                F_40_44_p,
                T_40_44_p,
                M_45_49_p,
                F_45_49_p,
                T_45_49_p,
                M_50_54_p,
                F_50_54_p,
                T_50_54_p,
                M_55_59_p,
                F_55_59_p,
                T_55_59_p,
                M_60_64_p,
                F_60_64_p,
                T_60_64_p,
                M_65_69_p,
                F_65_69_p,
                T_65_69_p,
                M_70_74_p,
                F_70_74_p,
                T_70_74_p,
                M_75_79_p,
                F_75_79_p,
                T_75_79_p,
                M_80plus_p,
                F_80plus_p,
                T_80plus_p
            } = filteredData[0];
            // Call the function and pass the variables
            percent_distribution_2017_second(
                District, T_TL, M_00_00_p, F_00_00_p, T_00_00_p, M_01_04_p, F_01_04_p, T_01_04_p, M_05_09_p, F_05_09_p,
                T_05_09_p, M_10_14_p, F_10_14_p, T_10_14_p, M_15_19_p, F_15_19_p, T_15_19_p, M_20_24_p, F_20_24_p,
                T_20_24_p,
                M_25_29_p, F_25_29_p, T_25_29_p, M_30_34_p, F_30_34_p, T_30_34_p, M_35_39_p, F_35_39_p, T_35_39_p,
                M_40_44_p, F_40_44_p, T_40_44_p, M_45_49_p, F_45_49_p, T_45_49_p, M_50_54_p, F_50_54_p, T_50_54_p,
                M_55_59_p, F_55_59_p, T_55_59_p, M_60_64_p, F_60_64_p, T_60_64_p, M_65_69_p, F_65_69_p, T_65_69_p,
                M_70_74_p, F_70_74_p, T_70_74_p, M_75_79_p, F_75_79_p, T_75_79_p, M_80plus_p, F_80plus_p, T_80plus_p
            );
        }

        function percent_distribution_2017_second(District, T_TL, M_00_00_p, F_00_00_p, T_00_00_p, M_01_04_p, F_01_04_p,
            T_01_04_p, M_05_09_p, F_05_09_p, T_05_09_p, M_10_14_p, F_10_14_p, T_10_14_p, M_15_19_p, F_15_19_p, T_15_19_p,
            M_20_24_p, F_20_24_p, T_20_24_p, M_25_29_p, F_25_29_p, T_25_29_p, M_30_34_p, F_30_34_p, T_30_34_p, M_35_39_p,
            F_35_39_p, T_35_39_p, M_40_44_p, F_40_44_p, T_40_44_p, M_45_49_p, F_45_49_p, T_45_49_p, M_50_54_p, F_50_54_p,
            T_50_54_p, M_55_59_p, F_55_59_p, T_55_59_p, M_60_64_p, F_60_64_p, T_60_64_p, M_65_69_p, F_65_69_p, T_65_69_p,
            M_70_74_p, F_70_74_p, T_70_74_p, M_75_79_p, F_75_79_p, T_75_79_p, M_80plus_p, F_80plus_p, T_80plus_p
        ) {
            var categories = [
                '0-0', '1-4', '5-9', '10-14', '15-19',
                '20-24', '25-29', '30-34', '35-39', '40-44',
                '45-49', '50-54', '55-59', '60-64', '65-69',
                '70-74', '75-79', '80 +'
            ];

            Highcharts.chart('population_2017_second_filter', {
                chart: {
                    type: 'bar'
                },
                title: {
                    text: 'Population Pyramid of ' + District,
                    useHTML: true,
                },

                subtitle: {
                    useHTML: true, // Enable HTML in subtitle
                    text: '<div class="subtitle-container">' +
                        '<div style="float: left; margin-left:10px ;" ><b>Total Pop = ' + T_TL + '</b></div>' +
                        '<div style="float: right; margin-right:65px">Census-2017</div>' +
                        '</div>',
                    align: 'left',
                    x: 0, // Set x to 0 to start subtitle from the left
                    y: 32 // Adjust y position as needed

                },
                credits: {
                    enabled: false
                },
                xAxis: [{
                    opposite: true,
                    reversed: false,
                    categories: categories,
                    linkedTo: 1,
                    labels: {
                        step: 1
                    },
                    accessibility: {
                        description: 'Age (female)'
                    }
                }],
                yAxis: {
                    title: {
                        text: null
                    },
                    labels: {
                        formatter: function() {
                            return Math.abs(this.value) + '%';
                        }
                    }
                },

                plotOptions: {
                    series: {
                        stacking: 'normal'
                    }
                },

                tooltip: {
                    formatter: function() {
                        return '<b>' + this.series.name + ', age ' + this.point.category + '</b><br/>' +
                            'Population: ' + Highcharts.numberFormat(Math.abs(this.point.y), 2);
                    }
                },

                series: [{
                    name: 'Male',
                    data: [
                        M_00_00_p, M_01_04_p, M_05_09_p, M_10_14_p, M_15_19_p,
                        M_20_24_p, M_25_29_p, M_30_34_p, M_35_39_p, M_40_44_p,
                        M_45_49_p, M_50_54_p, M_55_59_p, M_60_64_p, M_65_69_p,
                        M_70_74_p, M_75_79_p, M_80plus_p
                    ].map(function(value) {
                        return -Math.abs(value);
                    })
                }, {
                    name: 'Female',
                    data: [
                        F_00_00_p, F_01_04_p, F_05_09_p, F_10_14_p, F_15_19_p,
                        F_20_24_p, F_25_29_p, F_30_34_p, F_35_39_p, F_40_44_p,
                        F_45_49_p, F_50_54_p, F_55_59_p, F_60_64_p, F_65_69_p,
                        F_70_74_p, F_75_79_p, F_80plus_p
                    ].map(Math.abs)
                }]
            });
        }

        function percent_distribution_2007_second(District, T_TL_2007, M_00_00_p_2007, F_00_00_p_2007, T_00_00_p_2007,
            M_01_04_p_2007,
            F_01_04_p_2007, T_01_04_p_2007, M_05_09_p_2007, F_05_09_p_2007, T_05_09_p_2007, M_10_14_p_2007,
            F_10_14_p_2007, T_10_14_p_2007, M_15_19_p_2007, F_15_19_p_2007, T_15_19_p_2007, M_20_24_p_2007,
            F_20_24_p_2007, T_20_24_p_2007, M_25_29_p_2007, F_25_29_p_2007, T_25_29_p_2007, M_30_34_p_2007,
            F_30_34_p_2007, T_30_34_p_2007, M_35_39_p_2007, F_35_39_p_2007, T_35_39_p_2007, M_40_44_p_2007,
            F_40_44_p_2007, T_40_44_p_2007, M_45_49_p_2007, F_45_49_p_2007, T_45_49_p_2007, M_50_54_p_2007,
            F_50_54_p_2007, T_50_54_p_2007, M_55_59_p_2007, F_55_59_p_2007, T_55_59_p_2007, M_60_64_p_2007,
            F_60_64_p_2007, T_60_64_p_2007, M_65_69_p_2007, F_65_69_p_2007, T_65_69_p_2007, M_70_74_p_2007,
            F_70_74_p_2007, T_70_74_p_2007, M_75_79_p_2007, F_75_79_p_2007, T_75_79_p_2007, M_80plus_p_2007,
            F_80plus_p_2007, T_80plus_p_2007) {
            var categories = [
                '0-0', '1-4', '5-9', '10-14', '15-19',
                '20-24', '25-29', '30-34', '35-39', '40-44',
                '45-49', '50-54', '55-59', '60-64', '65-69',
                '70-74', '75-79', '80 +'
            ];

            Highcharts.chart('population_2007_second_filter', {
                chart: {
                    type: 'bar'
                },
                title: {
                    text: 'Population Pyramid of ' + District
                },

                subtitle: {
                    useHTML: true, // Enable HTML in subtitle
                    text: '<div class="subtitle-container">' +
                        '<div style="float: left; margin-left:10px ;" ><b>Total Pop = ' + T_TL_2007 + '</b></div>' +
                        '<div style="float: right; margin-right:65px">Census-2007</div>' +
                        '</div>',
                    align: 'left',
                    x: 0, // Set x to 0 to start subtitle from the left
                    y: 32 // Adjust y position as needed

                },
                credits: {
                    enabled: false
                },
                xAxis: [{
                    opposite: true,
                    reversed: false,
                    categories: categories,
                    linkedTo: 1,
                    labels: {
                        step: 1
                    },
                    accessibility: {
                        description: 'Age (female)'
                    }
                }],
                yAxis: {
                    title: {
                        text: null
                    },
                    labels: {
                        formatter: function() {
                            return Math.abs(this.value) + '%';
                        }
                    }
                },

                plotOptions: {
                    series: {
                        stacking: 'normal'
                    }
                },

                tooltip: {
                    formatter: function() {
                        return '<b>' + this.series.name + ', age ' + this.point.category + '</b><br/>' +
                            'Population: ' + Highcharts.numberFormat(Math.abs(this.point.y), 2);
                    }
                },

                series: [{
                    name: 'Male',
                    data: [
                        M_00_00_p_2007, M_01_04_p_2007, M_05_09_p_2007, M_10_14_p_2007, M_15_19_p_2007,
                        M_20_24_p_2007, M_25_29_p_2007, M_30_34_p_2007, M_35_39_p_2007, M_40_44_p_2007,
                        M_45_49_p_2007, M_50_54_p_2007, M_55_59_p_2007, M_60_64_p_2007, M_65_69_p_2007,
                        M_70_74_p_2007, M_75_79_p_2007, M_80plus_p_2007
                    ].map(function(value) {
                        return -Math.abs(value);
                    })
                }, {
                    name: 'Female',
                    data: [
                        F_00_00_p_2007, F_01_04_p_2007, F_05_09_p_2007, F_10_14_p_2007, F_15_19_p_2007,
                        F_20_24_p_2007, F_25_29_p_2007, F_30_34_p_2007, F_35_39_p_2007, F_40_44_p_2007,
                        F_45_49_p_2007, F_50_54_p_2007, F_55_59_p_2007, F_60_64_p_2007, F_65_69_p_2007,
                        F_70_74_p_2007, F_75_79_p_2007, F_80plus_p_2007
                    ].map(Math.abs)
                }]
            });
        }


        // Function for updating the map for the third filter box (2017 data)
        function updateMapPyramidThirdFilter() {
            var selectedProvincevalue = document.getElementById('selecteProvince_third').value;
            var selectedDistrict = document.getElementById('selectedDistrict_third').value;

            const dataFromServer = @json($population_data);

            // Find the object that matches selected Province and District
            var matchingObject = dataFromServer.find(function(item) {
                return item.Cod_Prov == selectedProvincevalue && item.Cod_Dist == selectedDistrict;
            });

            if (matchingObject) {
                // Extract the 'id' from the matching object
                var mainId = matchingObject.id;
                console.log("Main ID:", mainId);
            } else {
                console.log("Matching object not found");
            }

            const filteredData = dataFromServer.filter(function(record) {
                return record.id === mainId;
            });

            // this 2007 data districts
            var {
                District,
                T_TL_2007,
                M_00_00_p_2007,
                F_00_00_p_2007,
                T_00_00_p_2007,
                M_01_04_p_2007,
                F_01_04_p_2007,
                T_01_04_p_2007,
                M_05_09_p_2007,
                F_05_09_p_2007,
                T_05_09_p_2007,
                M_10_14_p_2007,
                F_10_14_p_2007,
                T_10_14_p_2007,
                M_15_19_p_2007,
                F_15_19_p_2007,
                T_15_19_p_2007,
                M_20_24_p_2007,
                F_20_24_p_2007,
                T_20_24_p_2007,
                M_25_29_p_2007,
                F_25_29_p_2007,
                T_25_29_p_2007,
                M_30_34_p_2007,
                F_30_34_p_2007,
                T_30_34_p_2007,
                M_35_39_p_2007,
                F_35_39_p_2007,
                T_35_39_p_2007,
                M_40_44_p_2007,
                F_40_44_p_2007,
                T_40_44_p_2007,
                M_45_49_p_2007,
                F_45_49_p_2007,
                T_45_49_p_2007,
                M_50_54_p_2007,
                F_50_54_p_2007,
                T_50_54_p_2007,
                M_55_59_p_2007,
                F_55_59_p_2007,
                T_55_59_p_2007,
                M_60_64_p_2007,
                F_60_64_p_2007,
                T_60_64_p_2007,
                M_65_69_p_2007,
                F_65_69_p_2007,
                T_65_69_p_2007,
                M_70_74_p_2007,
                F_70_74_p_2007,
                T_70_74_p_2007,
                M_75_79_p_2007,
                F_75_79_p_2007,
                T_75_79_p_2007,
                M_80plus_p_2007,
                F_80plus_p_2007,
                T_80plus_p_2007
            } = filteredData[0];

            percent_distribution_2007_third(District, T_TL_2007, M_00_00_p_2007, F_00_00_p_2007, T_00_00_p_2007,
                M_01_04_p_2007,
                F_01_04_p_2007, T_01_04_p_2007, M_05_09_p_2007, F_05_09_p_2007, T_05_09_p_2007, M_10_14_p_2007,
                F_10_14_p_2007, T_10_14_p_2007, M_15_19_p_2007, F_15_19_p_2007, T_15_19_p_2007, M_20_24_p_2007,
                F_20_24_p_2007, T_20_24_p_2007, M_25_29_p_2007, F_25_29_p_2007, T_25_29_p_2007, M_30_34_p_2007,
                F_30_34_p_2007, T_30_34_p_2007, M_35_39_p_2007, F_35_39_p_2007, T_35_39_p_2007, M_40_44_p_2007,
                F_40_44_p_2007, T_40_44_p_2007, M_45_49_p_2007, F_45_49_p_2007, T_45_49_p_2007, M_50_54_p_2007,
                F_50_54_p_2007, T_50_54_p_2007, M_55_59_p_2007, F_55_59_p_2007, T_55_59_p_2007, M_60_64_p_2007,
                F_60_64_p_2007, T_60_64_p_2007, M_65_69_p_2007, F_65_69_p_2007, T_65_69_p_2007, M_70_74_p_2007,
                F_70_74_p_2007, T_70_74_p_2007, M_75_79_p_2007, F_75_79_p_2007, T_75_79_p_2007, M_80plus_p_2007,
                F_80plus_p_2007, T_80plus_p_2007);
            // Percent distribution of the household population First paramyid Graph show on the right on the page
            var {
                District,
                T_TL,
                M_00_00_p,
                F_00_00_p,
                T_00_00_p,
                M_01_04_p,
                F_01_04_p,
                T_01_04_p,
                M_05_09_p,
                F_05_09_p,
                T_05_09_p,
                M_10_14_p,
                F_10_14_p,
                T_10_14_p,
                M_15_19_p,
                F_15_19_p,
                T_15_19_p,
                M_20_24_p,
                F_20_24_p,
                T_20_24_p,
                M_25_29_p,
                F_25_29_p,
                T_25_29_p,
                M_30_34_p,
                F_30_34_p,
                T_30_34_p,
                M_35_39_p,
                F_35_39_p,
                T_35_39_p,
                M_40_44_p,
                F_40_44_p,
                T_40_44_p,
                M_45_49_p,
                F_45_49_p,
                T_45_49_p,
                M_50_54_p,
                F_50_54_p,
                T_50_54_p,
                M_55_59_p,
                F_55_59_p,
                T_55_59_p,
                M_60_64_p,
                F_60_64_p,
                T_60_64_p,
                M_65_69_p,
                F_65_69_p,
                T_65_69_p,
                M_70_74_p,
                F_70_74_p,
                T_70_74_p,
                M_75_79_p,
                F_75_79_p,
                T_75_79_p,
                M_80plus_p,
                F_80plus_p,
                T_80plus_p
            } = filteredData[0];

            // Call the function and pass the variables
            percent_distribution_2017_third(District, T_TL, M_00_00_p, F_00_00_p, T_00_00_p, M_01_04_p, F_01_04_p,
                T_01_04_p,
                M_05_09_p, F_05_09_p, T_05_09_p, M_10_14_p, F_10_14_p, T_10_14_p, M_15_19_p, F_15_19_p, T_15_19_p,
                M_20_24_p, F_20_24_p, T_20_24_p, M_25_29_p, F_25_29_p, T_25_29_p, M_30_34_p, F_30_34_p, T_30_34_p,
                M_35_39_p, F_35_39_p, T_35_39_p, M_40_44_p, F_40_44_p, T_40_44_p, M_45_49_p, F_45_49_p, T_45_49_p,
                M_50_54_p, F_50_54_p, T_50_54_p, M_55_59_p, F_55_59_p, T_55_59_p, M_60_64_p, F_60_64_p, T_60_64_p,
                M_65_69_p, F_65_69_p, T_65_69_p, M_70_74_p, F_70_74_p, T_70_74_p, M_75_79_p, F_75_79_p, T_75_79_p,
                M_80plus_p, F_80plus_p, T_80plus_p
            );
        }

        function percent_distribution_2007_third(District, T_TL_2007, M_00_00_p_2007, F_00_00_p_2007, T_00_00_p_2007,
            M_01_04_p_2007,
            F_01_04_p_2007, T_01_04_p_2007, M_05_09_p_2007, F_05_09_p_2007, T_05_09_p_2007, M_10_14_p_2007,
            F_10_14_p_2007, T_10_14_p_2007, M_15_19_p_2007, F_15_19_p_2007, T_15_19_p_2007, M_20_24_p_2007,
            F_20_24_p_2007, T_20_24_p_2007, M_25_29_p_2007, F_25_29_p_2007, T_25_29_p_2007, M_30_34_p_2007,
            F_30_34_p_2007, T_30_34_p_2007, M_35_39_p_2007, F_35_39_p_2007, T_35_39_p_2007, M_40_44_p_2007,
            F_40_44_p_2007, T_40_44_p_2007, M_45_49_p_2007, F_45_49_p_2007, T_45_49_p_2007, M_50_54_p_2007,
            F_50_54_p_2007, T_50_54_p_2007, M_55_59_p_2007, F_55_59_p_2007, T_55_59_p_2007, M_60_64_p_2007,
            F_60_64_p_2007, T_60_64_p_2007, M_65_69_p_2007, F_65_69_p_2007, T_65_69_p_2007, M_70_74_p_2007,
            F_70_74_p_2007, T_70_74_p_2007, M_75_79_p_2007, F_75_79_p_2007, T_75_79_p_2007, M_80plus_p_2007,
            F_80plus_p_2007, T_80plus_p_2007) {
            var categories = [
                '0-0', '1-4', '5-9', '10-14', '15-19',
                '20-24', '25-29', '30-34', '35-39', '40-44',
                '45-49', '50-54', '55-59', '60-64', '65-69',
                '70-74', '75-79', '80 +'
            ];

            Highcharts.chart('population_2007_third_filter', {
                chart: {
                    type: 'bar'
                },
                title: {
                    text: 'Population Pyramid of ' + District
                },

                subtitle: {
                    useHTML: true, // Enable HTML in subtitle
                    text: '<div class="subtitle-container">' +
                        '<div style="float: left; margin-left:10px ;" ><b>Total Pop = ' + T_TL_2007 + '</b></div>' +
                        '<div style="float: right; margin-right:65px">Census-2007</div>' +
                        '</div>',
                    align: 'left',
                    x: 0, // Set x to 0 to start subtitle from the left
                    y: 32 // Adjust y position as needed

                },
                credits: {
                    enabled: false
                },
                xAxis: [{
                    opposite: true,
                    reversed: false,
                    categories: categories,
                    linkedTo: 1,
                    labels: {
                        step: 1
                    },
                    accessibility: {
                        description: 'Age (female)'
                    }
                }],
                yAxis: {
                    title: {
                        text: null
                    },
                    labels: {
                        formatter: function() {
                            return Math.abs(this.value) + '%';
                        }
                    }
                },

                plotOptions: {
                    series: {
                        stacking: 'normal'
                    }
                },

                tooltip: {
                    formatter: function() {
                        return '<b>' + this.series.name + ', age ' + this.point.category + '</b><br/>' +
                            'Population: ' + Highcharts.numberFormat(Math.abs(this.point.y), 2);
                    }
                },

                series: [{
                    name: 'Male',
                    data: [
                        M_00_00_p_2007, M_01_04_p_2007, M_05_09_p_2007, M_10_14_p_2007, M_15_19_p_2007,
                        M_20_24_p_2007, M_25_29_p_2007, M_30_34_p_2007, M_35_39_p_2007, M_40_44_p_2007,
                        M_45_49_p_2007, M_50_54_p_2007, M_55_59_p_2007, M_60_64_p_2007, M_65_69_p_2007,
                        M_70_74_p_2007, M_75_79_p_2007, M_80plus_p_2007
                    ].map(function(value) {
                        return -Math.abs(value);
                    })
                }, {
                    name: 'Female',
                    data: [
                        F_00_00_p_2007, F_01_04_p_2007, F_05_09_p_2007, F_10_14_p_2007, F_15_19_p_2007,
                        F_20_24_p_2007, F_25_29_p_2007, F_30_34_p_2007, F_35_39_p_2007, F_40_44_p_2007,
                        F_45_49_p_2007, F_50_54_p_2007, F_55_59_p_2007, F_60_64_p_2007, F_65_69_p_2007,
                        F_70_74_p_2007, F_75_79_p_2007, F_80plus_p_2007
                    ].map(Math.abs)
                }]
            });
        }


        function percent_distribution_2017_third(District, T_TL,
            M_00_00_p, F_00_00_p, T_00_00_p,
            M_01_04_p, F_01_04_p, T_01_04_p,
            M_05_09_p, F_05_09_p, T_05_09_p,
            M_10_14_p, F_10_14_p, T_10_14_p,
            M_15_19_p, F_15_19_p, T_15_19_p,
            M_20_24_p, F_20_24_p, T_20_24_p,
            M_25_29_p, F_25_29_p, T_25_29_p,
            M_30_34_p, F_30_34_p, T_30_34_p,
            M_35_39_p, F_35_39_p, T_35_39_p,
            M_40_44_p, F_40_44_p, T_40_44_p,
            M_45_49_p, F_45_49_p, T_45_49_p,
            M_50_54_p, F_50_54_p, T_50_54_p,
            M_55_59_p, F_55_59_p, T_55_59_p,
            M_60_64_p, F_60_64_p, T_60_64_p,
            M_65_69_p, F_65_69_p, T_65_69_p,
            M_70_74_p, F_70_74_p, T_70_74_p,
            M_75_79_p, F_75_79_p, T_75_79_p,
            M_80plus_p, F_80plus_p, T_80plus_p
        ) {
            var categories = [
                '0-0', '1-4', '5-9', '10-14', '15-19',
                '20-24', '25-29', '30-34', '35-39', '40-44',
                '45-49', '50-54', '55-59', '60-64', '65-69',
                '70-74', '75-79', '80 +'
            ];

            Highcharts.chart('population_2017_third_filter', {
                chart: {
                    type: 'bar'
                },
                title: {
                    text: 'Population Pyramid of ' + District,
                    useHTML: true,
                },

                subtitle: {
                    useHTML: true, // Enable HTML in subtitle
                    text: '<div class="subtitle-container">' +
                        '<div style="float: left; margin-left:10px ;" ><b>Total Pop = ' + T_TL + '</b></div>' +
                        '<div style="float: right; margin-right:65px">Census-2017</div>' +
                        '</div>',
                    align: 'left',
                    x: 0, // Set x to 0 to start subtitle from the left
                    y: 32 // Adjust y position as needed

                },
                credits: {
                    enabled: false
                },
                xAxis: [{
                    opposite: true,
                    reversed: false,
                    categories: categories,
                    linkedTo: 1,
                    labels: {
                        step: 1
                    },
                    accessibility: {
                        description: 'Age (female)'
                    }
                }],
                yAxis: {
                    title: {
                        text: null
                    },
                    labels: {
                        formatter: function() {
                            return Math.abs(this.value) + '%';
                        }
                    }
                },

                plotOptions: {
                    series: {
                        stacking: 'normal'
                    }
                },

                tooltip: {
                    formatter: function() {
                        return '<b>' + this.series.name + ', age ' + this.point.category + '</b><br/>' +
                            'Population: ' + Highcharts.numberFormat(Math.abs(this.point.y), 2);
                    }
                },

                series: [{
                    name: 'Male',
                    data: [
                        M_00_00_p, M_01_04_p, M_05_09_p, M_10_14_p, M_15_19_p,
                        M_20_24_p, M_25_29_p, M_30_34_p, M_35_39_p, M_40_44_p,
                        M_45_49_p, M_50_54_p, M_55_59_p, M_60_64_p, M_65_69_p,
                        M_70_74_p, M_75_79_p, M_80plus_p
                    ].map(function(value) {
                        return -Math.abs(value);
                    })
                }, {
                    name: 'Female',
                    data: [
                        F_00_00_p, F_01_04_p, F_05_09_p, F_10_14_p, F_15_19_p,
                        F_20_24_p, F_25_29_p, F_30_34_p, F_35_39_p, F_40_44_p,
                        F_45_49_p, F_50_54_p, F_55_59_p, F_60_64_p, F_65_69_p,
                        F_70_74_p, F_75_79_p, F_80plus_p
                    ].map(Math.abs)
                }]
            });
        }
    </script>
@endsection
