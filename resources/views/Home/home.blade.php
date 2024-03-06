@extends('layouts.main')
@section('content')
    {{-- dd(@json($population_data)); --}}

    <div class="graphs-row mt-4 mb-4">
        <div class="row">
            <div class="col-md-8">
                <div class="map-holder">
                    <!--    <h2>Mozanbique Map</h2> -->
                    <div class="box-body">
                        <div id="map2" style="height: 701px"></div>
                    </div>
                </div>
                <div class="box-holdder">
                    <div class="row">
                        <div class="col-12 col-sm">
                            <div class="counter-box female-population">
                                <div class="counter" id="sex_ratio_by_birth">105</div>
                                <h2>{{ trans('global.Sex_Ratio_By_Birth') }}</h2>
                            </div>
                        </div>
                        <div class="col-12 col-sm">
                            <div class="counter-box total-population">
                                <div class="counter" id="population_growth_rate">2.6</div>
                                <h2>{{ trans('global.population_growth') }}</h2>
                            </div>
                        </div>

                        <div class="col-12 col-sm">
                            <div class="counter-box population_density">
                                <div class="counter" id="population_density">40.3</div>
                                <h2>{{ trans('global.population_density') }}</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="filters-holder">
                    <div class="form-holder">
                        <div class="row">
                            <div class="col-md-8">
                                <label class="custom-select" for="styledSelect2">
                                    <select id="styledSelect2" name="options">
                                        <option value="">{{ trans('global.all_provinces') }}</option>
                                        <option value="">{{ trans('global.all_districts') }}</option>
                                        <option value="Niassa">Niassa</option>
                                        <option value="Tete">Tete</option>
                                        <option value="Nampula">Nampula</option>
                                        <option value="Cabo Delgado">Cabo Delgado</option>
                                        <option value="Zambezia">Zambezia</option>
                                        <option value="Manica">Manica</option>
                                        <option value="Sofala">Sofala</option>
                                        <option value="Inhambane">Inhambane</option>
                                        <option value="Gaza">Gaza</option>
                                        <option value="Maputo Cidade">Maputo Cidade</option>
                                        <option value="Maputo Provincia">Maputo Provincia</option>
                                    </select></label>
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
                <div class="chart-visual totals">
                    <div class="emptyMessage" style="position: absolute; margin-left:12%">
                        {{ trans('global.select_any_districts') }}
                    </div>
                    <div class="chart-holder" id="dependency1"></div>
                </div>
                <div class="chart-visual totals">
                    <div class="emptyMessage" style="position: absolute; margin-left:12%">
                        {{ trans('global.select_any_districts') }}
                    </div>
                    <div class="chart-holder" id="dependency2"></div>
                </div>
            </div>
        </div>
    </div>



    {{-- this is tabs option  section --}}
    <section class="section_tabs">
        <div class="content-holdder">

            <div class="pills_wrap">
                <ul class="nav nav-pills" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#population">{{ trans('global.population') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab"
                            href="#marital_ratio">{{ trans('global.characteristics') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab"
                            href="#illiteracyRate">{{ trans('global.illiteracyRate') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#education">{{ trans('global.education') }}</a>
                    </li>

                </ul>
            </div>
            <!-- Tab panes -->
            <div class="tab-content">
                <div id="population" class="tab-pane active">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="chart-visual totals">
                                {{-- chart total population --}}
                                <div class="emptyMessage">
                                    {{ trans('global.select_any_districts') }}
                                </div>
                                <div class="chart-holder" id="stackedBarChartByAgeGroup"></div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="chart-visual totals">
                                {{-- chart  mens population --}}
                                <div class="emptyMessage">
                                    {{ trans('global.select_any_districts') }}
                                </div>
                                <div class="chart-holder" id="foreign_population_by_gender"></div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="chart-visual totals">
                                {{-- chart womens population --}}
                                <div class="emptyMessage">
                                    {{ trans('global.select_any_districts') }}
                                </div>
                                <div class="chart-holder" id="demographic_dependency_rate_by_sex"></div>
                            </div>
                        </div>

                    </div>
                </div>
                <div id="marital_ratio" class="tab-pane fade">
                    <div class="row">

                        <div class="col-md-4">
                            <div class="chart-visual totals">
                                {{-- chart marital ratio Total  --}}
                                <div class="emptyMessage">
                                    {{ trans('global.select_any_districts') }}
                                </div>
                                <div id="chart_marital_ratio_characteristics"></div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="chart-visual totals">
                                {{-- chart marital ratio Total  --}}
                                <div class="emptyMessage">
                                    {{ trans('global.select_any_districts') }}
                                </div>
                                <div id="Population_aged_5_and_over"></div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="chart-visual totals">
                                {{-- chart marital ratio Total  --}}
                                <div class="emptyMessage">
                                    {{ trans('global.select_any_districts') }}
                                </div>
                                <div id="population_by_Religion_Professed"></div>
                            </div>
                        </div>

                    </div>

                    <div class="row">

                        <div class="col-md-4">
                            <div class="chart-visual totals">
                                {{-- chart marital ratio Total  --}}
                                <div class="emptyMessage">
                                    {{ trans('global.select_any_districts') }}
                                </div>
                                <div id="Population_from_0_to_17_years"></div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="chart-visual totals">
                                {{-- chart marital ratio Total  --}}
                                <div class="emptyMessage">
                                    {{ trans('global.select_any_districts') }}
                                </div>
                                <div id="population_with_Disabilities"></div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="chart-visual totals">
                                {{-- chart marital ratio Total  --}}
                                <div class="emptyMessage">
                                    {{ trans('global.select_any_districts') }}
                                </div>
                                <div id="orphanage_by_sex"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="illiteracyRate" class="tab-pane fade"><br>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="chart-visual totals">
                                {{-- ILLITRACY RATE     --}}
                                <div class="emptyMessage">
                                    {{ trans('global.select_any_districts') }}
                                </div>
                                <div id="totalIlliteracyRate"></div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            {{-- <div class="chart-visual totals">

                            </div> --}}
                        </div>
                    </div>
                </div>
                <div id="education" class="tab-pane fade"><br>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="chart-visual totals">
                                {{-- ILLITRACY RATE     --}}
                                <div class="emptyMessage">
                                    {{ trans('global.select_any_districts') }}
                                </div>
                                <div id="illiteracy_Rate_by_Sex"></div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <script>
        var translations = {
            marine_sprite: '{{ __('global.marine_sprite') }}',
            striking_calf: '{{ __('global.striking_calf') }}',
            tank_picture: '{{ __('global.tank_picture') }}',
            bucket_slope: '{{ __('global.bucket_slope') }}',
            reborn_kid: '{{ __('global.reborn_kid') }}',
            tenure_household_percentage: '{{ __('global.tenure_household_percentage') }}',

            total_population: '{{ __('global.total_population') }}',
            men_population: '{{ __('global.mens_population') }}',
            women_population: '{{ __('global.womens_population') }}',
            name_of_district: '{{ __('global.name_of_district') }}',

            total_marital_ratio: '{{ __('global.total_marital_ratio') }}',
            mens_marital_ratio: '{{ __('global.mens_marital_ratio') }}',
            womens_marital_ratio: '{{ __('global.womens_marital_ratio') }}',

        };
        var desiredProvince;

        function getProvinceCoordinates(province) {
            // Replace this with logic to get coordinates based on the selected province
            switch (province) {
                case "Niassa":
                    return [-13.50, 36.00];
                case "Cabo Delgado":
                    return [-12.50, 39.00];
                case "Nampula":
                    return [-15.50, 39.00];
                case "Zambezia":
                    return [-16.50, 37.00];
                case "Tete":
                    return [-15.50, 33.00];
                case "Manica":
                    return [-19.00, 33.50];

                case "Sofala":
                    return [-19.50, 35.00];
                case "Inhambane":
                    return [-23.50, 34.50];
                case "Gaza":
                    return [-23.50, 33.00];
                case "Maputo Provincia":
                    return [-25.50, 32.50];
                case "Maputo Cidade":
                    return [-25.9692, 32.6862];

                    // Add more cases for other provinces as needed
                default:
                    // Default coordinates if province is not found
                    return [-19.00, 34.00];
            }
            // You need to provide actual coordinates for each province
        }

        // Mozambiquie  chart javascripts
        function getColor(d) {
            return d > 600000 ? '#BD0026' :
                d > 400000 ? '#E31A1C' :
                d > 350000 ? '#FC4E2A' :
                d > 200000 ? '#FD8D3C' :
                d > 100000 ? '#FEB24C' :
                d > 70000 ? '#FED976' :
                d > 50000 ? '#FFEDA0' :
                '#FFED00';
        }


        // Assuming $population_data is a JSON object passed from PHP
        const populationData = @json($population_data);

        function style(feature) {
            // Get the "id" property from the feature
            const id_of_districts = feature.properties.id;

            // Find the corresponding record in the population data
            const filteredData = populationData.find(record => record.id === id_of_districts);

            // Check if the record is found
            if (filteredData) {
                // Assuming popTotalValue is a string like "123,232"
                const popTotalString = filteredData.Pop_Total;

                // Remove commas from the string
                const popTotalWithoutCommas = popTotalString.replace(/,/g, '');

                // Convert the string without commas to a number
                const popTotalValue = parseInt(popTotalWithoutCommas, 10);
                return {
                    fillColor: getColor(popTotalValue),
                    weight: 2,
                    opacity: 1,
                    color: 'white',
                    dashArray: '3',
                    fillOpacity: 0.7
                };
            }
        }

        var map2;

        if (desiredProvince) {

            const provinceCoordinates = getProvinceCoordinates(desiredProvince);
            map2 = L.map('map2', {
                center: provinceCoordinates,
                zoom: 6.5,
                minZoom: 4,
                maxZoom: 9,
                scrollWheelZoom: true // Disable global scroll wheel zoom initially
            });

            // Check if the desired province is "Maputo Cidade"
            if (desiredProvince === "Maputo Cidade") {
                // Adjust zoom levels for Maputo Cidade
                map2.setMinZoom(10);
                map2.setMaxZoom(12);
                map2.setZoom(20);
            }

        } else {
            map2 = L.map('map2', {
                center: [-19.00, 34.00],
                zoom: 5.1,
                minZoom: 5.4,
                maxZoom: 9,
                scrollWheelZoom: true // Disable global scroll wheel zoom initially
            });
        }

        // var tiles = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        //     maxZoom: 19,
        //     attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
        // }).addTo(map2);

        // Define global variable to track the highlighted layer
        var highlightedLayer;

        function highlightFeature(e) {
            const layer = e.target;
            layer.setStyle({
                weight: 1,
                color: '#666',
                dashArray: '',
                fillOpacity: 0.7
            });

            layer.bringToFront();
        }

        function resetHighlight(e) {
            geojson.resetStyle(e.target);
            map2.closePopup();
        }


        function zoomToFeature(e) {
            // map2.fitBounds(e.target.getBounds());
            const layer = e.target;
            const id_of_districts = layer.feature.properties.id;

            const dataFromServer = @json($population_data);

            // Filter data to include only records where id is equal to id_of_districts
            const filteredData = dataFromServer.filter(function(record) {
                return record.id === id_of_districts;
            });
            // console.log(filteredData);
            const popID = filteredData[0].id;
            // console.log(popID);


            layer.setStyle({
                weight: 4,
                color: '#666',
                dashArray: '',
                fillOpacity: 0.8
            });


            // Three box Growth Rate Population
            var popGrowthRate = filteredData[0].Taxa_Cresc_Pop;
            // Three box Growth Rate Population
            var popSexRatioBybirth = filteredData[0].sex_ratio_birth;
            // Three box  Population Density
            var populationDensity = filteredData[0].Densidade;

            updatePopulationCounters(popSexRatioBybirth, popGrowthRate, populationDensity);

            // Stacked column bar charts dependency ratio and Elderly Dependency Ratio
            var rateDep_014_total = filteredData[0].TaxaDep_014_total;
            var rateDep_014_men = filteredData[0].TaxaDep_014_homens;
            var rateDep_014_women = filteredData[0].TaxaDep_014_mulheres;
            var rateDep_65_total = filteredData[0].TaxaDep_65_total;
            var rateDep_65_men = filteredData[0].TaxaDep_65_homens;
            var rateDep_65_women = filteredData[0].TaxaDep_65_mulheres;

            demographicDependencyRateBySex(rateDep_014_total, rateDep_014_men,
                rateDep_014_women, rateDep_65_total, rateDep_65_men, rateDep_65_women);


            // Illiteracy Rate by Sex,District
            var TotalIlliteracyRate = filteredData[0].Taxa_Analf_Tot;
            var MenIlliteracyRate = filteredData[0].Taxa_Analf_Hom;
            var woMenIlliteracyRate = filteredData[0].Taxa_Analf_Mulh;
            updatedPopulation_total_Illiteracy_Rate(TotalIlliteracyRate, MenIlliteracyRate,
                woMenIlliteracyRate);

            // Pie charts total population
            var grupIdad_014_Total = filteredData[0].GrupIdad_014_Total;
            var grupIdad_1564_Total = filteredData[0].GrupIdad_1564_Total;
            var grupIdad_65_Total = filteredData[0].GrupIdad_65_Total;
            // Pie charts mens population
            var grupIdad_014_homens = filteredData[0].GrupIdad_014_homens;
            var grupIdad_1564_homens = filteredData[0].GrupIdad_1564_homens;
            var grupIdad_65_homens = filteredData[0].GrupIdad_65_homens;
            // Pie charts womens population
            var grupIdad_014_mulheres = filteredData[0].GrupIdad_014_mulheres;
            var grupIdad_1564_mulheres = filteredData[0].GrupIdad_1564_mulheres;
            var grupIdad_65_mulheres = filteredData[0].GrupIdad_65_mulheres;


            // PieChartsPopulation();
            stackedBarChartByAgeGroup(popID, grupIdad_014_Total, grupIdad_1564_Total, grupIdad_65_Total,
                grupIdad_014_homens,
                grupIdad_1564_homens, grupIdad_65_homens, grupIdad_014_mulheres, grupIdad_1564_mulheres,
                grupIdad_65_mulheres);


            // Pie charts mens marital ratio
            var solteiro_homens = filteredData[0].Solteiro_homens;
            var casado_homens = filteredData[0].Casado_homens;
            var uniao_Marital_homens = filteredData[0].Uniao_Marital_homens;
            var divorciado_Separado_homens = filteredData[0].Divorciado_Separado_homens;
            var viuvo_homens = filteredData[0].Viúvo_homens;

            // Pie charts womens marital ratio
            var solteiro_mulheres = filteredData[0].Solteiro_mulheres;
            var casado_mulheres = filteredData[0].Casado_mulheres;
            var uniao_Marital_mulheres = filteredData[0].União_Marital_mulheres;
            var divorciado_Separado_mulheres = filteredData[0].Divorciado_Separado_mulheres;
            var viuvo_mulheres = filteredData[0].Viúvo_mulheres;

            highlightPieChartMaritalRatio(
                solteiro_homens, casado_homens, uniao_Marital_homens, divorciado_Separado_homens, viuvo_homens,
                solteiro_mulheres, casado_mulheres, uniao_Marital_mulheres, divorciado_Separado_mulheres, viuvo_mulheres
            );
            var Emakhuwa = filteredData[0].Emakhuwa_duplication;
            var Ciyao = filteredData[0].Ciyao_duplication;
            var Cinyanja = filteredData[0].Cinyanja_duplication;
            var Portugues = filteredData[0].Português_duplication;
            var Elomwue = filteredData[0].Elomwue_duplication;
            var Outras_linguas_mocambicanas = filteredData[0].Outras_linguas_moçambicanas_duplication;
            var Outras_linguas_estrangeiras = filteredData[0].Outras_linguas_estrangeirasç_duplication;
            var Xichangana = filteredData[0].Xichangana_duplication;
            var Mudo = filteredData[0].Mudo_duplication;
            var Desconhecida = filteredData[0].Desconhecida_duplication_one;
            Population_aged_5_and_over(Emakhuwa, Ciyao, Cinyanja, Portugues, Elomwue, Outras_linguas_mocambicanas,
                Outras_linguas_estrangeiras, Xichangana, Mudo, Desconhecida);



            var islamica = filteredData[0].Islâmica;
            var catolica = filteredData[0].Católica;
            var anglicana = filteredData[0].Anglicana;
            var evangelica_Pentecostal = filteredData[0].Evangélica_Pentecostal;
            var zione_Siao = filteredData[0].Zione_Sião;
            var Sem_religiao_animista = filteredData[0].Sem_religiao_animista;
            var outra = filteredData[0].Outra;
            var desconhecida = filteredData[0].Desconhecida_duplication_two;

            population_by_religion_professed(islamica, catolica, anglicana, evangelica_Pentecostal, zione_Siao,
                Sem_religiao_animista, outra, desconhecida)



            // Basir Bar chart for foreign population

            var pop_Estr_total = filteredData[0].Pop_Estr_total;
            var pop_Estr_homens = filteredData[0].Pop_Estr_homens;
            var pop_Estr_mulheres = filteredData[0].Pop_Estr_mulheres;


            basicBarChartForiegnPopulation(pop_Estr_total, pop_Estr_homens, pop_Estr_mulheres);



            // POPULATION FROM 0 TO 17 YEARS OLD
            var Registered_Total = filteredData[0].Registada_Tot;
            var Registered_Male = filteredData[0].Registada_Hom;
            var Registered_Female = filteredData[0].Registada_Mulh;
            var Unregistered_Total = filteredData[0].NaoRegist_Tot;
            var Unregistered_Male = filteredData[0].NaoRegist_Hom;
            var Unregistered_Female = filteredData[0].NaoRegist_Mulh;

            Population_from_0_to_17_years(Registered_Total, Registered_Male, Registered_Female, Unregistered_Total,
                Unregistered_Male, Unregistered_Female);

            // Population with Disabilities

            var Deficiency_Total = filteredData[0].Defic_Tot;
            var Deficiency_Male = filteredData[0].Defic_Hom;
            var Deficiency_Female = filteredData[0].Defic_Mulh;
            population_with_Disabilities(Deficiency_Total, Deficiency_Male, Deficiency_Female);

            // ORPHANAGE BY SEX


            var Orphanage_Both_Genders_Percentage_Total = filteredData[0].Orf_Ambos_Perc_Tot;
            var Orphanage_Both_Genders_Percentage_Male = filteredData[0].Orf_Ambos_Perc_Hom;
            var Orphanage_Both_Genders_Percentage_Female = filteredData[0].Orf_Ambos_Perc_Mulh;

            orphanage_by_sex(Orphanage_Both_Genders_Percentage_Total, Orphanage_Both_Genders_Percentage_Male,
                Orphanage_Both_Genders_Percentage_Female);


            // illiteracy Rate by Sex
            var Illiteracy_Rate_Total = filteredData[0].Taxa_Analf_Tot;
            var Illiteracy_Rate_Male = filteredData[0].Taxa_Analf_Hom;
            var Illiteracy_Rate_Female = filteredData[0].Taxa_Analf_Mulh;

            illiteracy_Rate_by_Sex(Illiteracy_Rate_Total, Illiteracy_Rate_Male, Illiteracy_Rate_Female);

            var {
                TBEnsPrim_1Grau_Tot,TBEnsPrim_1Grau_Hom,TBEnsPrim_1Grau_Mulh,TBEnsPrim_2Grau_Tot,TBEnsPrim_2Grau_Hom,TBEnsPrim_2Grau_Mulh,TBEnsiSec_1Ciclo_Tot,TBEnsiSec_1Ciclo_Hom,TBEnsiSec_1Ciclo_Mulh,TBEnsiSec_2Ciclo_Tot,TBEnsiSec_2Ciclo_Hom,TBEnsiSec_2Ciclo_Mulh,TLEnsPrim_1Grau_Tot,TLEnsPrim_1Grau_Hom,TLEnsPrim_1Grau_Mulh,TLEnsPrim_2Grau_Tot,TLEnsPrim_2Grau_Hom,TLEnsPrim_2Grau_Mulh,TLEnsiSec_1Ciclo_Tot,TLEnsiSec_1Ciclo_Hom,TLEnsiSec_1Ciclo_Mulh,TLEnsiSec_2Ciclo_Tot,TLEnsiSec_2Ciclo_Hom,TLEnsiSec_2Ciclo_Mulh
            } = filteredData[0];

            comparison_of_gross_and_net_enrolment_rate(TBEnsPrim_1Grau_Tot,TBEnsPrim_1Grau_Hom,TBEnsPrim_1Grau_Mulh,TBEnsPrim_2Grau_Tot,TBEnsPrim_2Grau_Hom,TBEnsPrim_2Grau_Mulh,TBEnsiSec_1Ciclo_Tot,TBEnsiSec_1Ciclo_Hom,TBEnsiSec_1Ciclo_Mulh,TBEnsiSec_2Ciclo_Tot,TBEnsiSec_2Ciclo_Hom,TBEnsiSec_2Ciclo_Mulh,TLEnsPrim_1Grau_Tot,TLEnsPrim_1Grau_Hom,TLEnsPrim_1Grau_Mulh,TLEnsPrim_2Grau_Tot,TLEnsPrim_2Grau_Hom,TLEnsPrim_2Grau_Mulh,TLEnsiSec_1Ciclo_Tot,TLEnsiSec_1Ciclo_Hom,TLEnsiSec_1Ciclo_Mulh,TLEnsiSec_2Ciclo_Tot,TLEnsiSec_2Ciclo_Hom,TLEnsiSec_2Ciclo_Mulh);
            // continues from here 

            // Percent distribution of the household population First paramyid Graph show on the right on the page
            var {
                District,
                Pop_Total,
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

            // this 2007 data districts
            var {
                District,
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

            percent_distribution_2007(District, M_00_00_p_2007, F_00_00_p_2007, T_00_00_p_2007, M_01_04_p_2007,
                F_01_04_p_2007, T_01_04_p_2007, M_05_09_p_2007, F_05_09_p_2007, T_05_09_p_2007, M_10_14_p_2007,
                F_10_14_p_2007, T_10_14_p_2007, M_15_19_p_2007, F_15_19_p_2007, T_15_19_p_2007, M_20_24_p_2007,
                F_20_24_p_2007, T_20_24_p_2007, M_25_29_p_2007, F_25_29_p_2007, T_25_29_p_2007, M_30_34_p_2007,
                F_30_34_p_2007, T_30_34_p_2007, M_35_39_p_2007, F_35_39_p_2007, T_35_39_p_2007, M_40_44_p_2007,
                F_40_44_p_2007, T_40_44_p_2007, M_45_49_p_2007, F_45_49_p_2007, T_45_49_p_2007, M_50_54_p_2007,
                F_50_54_p_2007, T_50_54_p_2007, M_55_59_p_2007, F_55_59_p_2007, T_55_59_p_2007, M_60_64_p_2007,
                F_60_64_p_2007, T_60_64_p_2007, M_65_69_p_2007, F_65_69_p_2007, T_65_69_p_2007, M_70_74_p_2007,
                F_70_74_p_2007, T_70_74_p_2007, M_75_79_p_2007, F_75_79_p_2007, T_75_79_p_2007, M_80plus_p_2007,
                F_80plus_p_2007, T_80plus_p_2007);

            // Call the function and pass the variables
            percent_distribution(
                District, Pop_Total,
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

        function onEachFeature(feature, layer) {
            var layer1 = layer;
            const id_of_districts = feature.properties.id;

            const dataFromServer = @json($population_data);

            // Filter data to include only records where id is equal to id_of_districts
            const filteredData = dataFromServer.filter(function(record) {
                return record.id === id_of_districts;
            });

            // Check if filteredData is not empty
            if (filteredData.length > 0) {
                var id = filteredData[0].id;
                var nameOfDistrict = filteredData[0].District;
                var popTotalValue = filteredData[0].Pop_Total;
                var popWomenName = filteredData[0].Pop_mulheres;
                var popMenName = filteredData[0].Pop_homens;

                const customIcon = L.divIcon({
                    className: 'district-label', // Add a CSS class for styling
                    html: nameOfDistrict,
                });

                // Create a marker with the custom icon
                const labelMarker = L.marker(layer1.getBounds().getCenter(), {
                    icon: customIcon
                });

                // Add the marker to the map only if a specific province is selected
                if (desiredProvince) {
                    labelMarker.addTo(map2);
                }

                // Set up event listeners for the GeoJSON layer1
                layer1.on({
                    mouseover: highlightFeature,
                    mouseout: resetHighlight,
                    click: zoomToFeature
                });

                // Add tooltip to the layer
                layer1.bindTooltip(nameOfDistrict + '</br>' +
                    '<b>' + translations.total_population + ": " + '</b>' + popTotalValue, {
                        sticky: true
                    }).openTooltip();
            } else {
                // Handle the case where no matching data is found
                console.error('No data found for id:', id_of_districts);
            }
        }


        var geojson;
        geojson = L.geoJson(mozambiquefulldistricts, {
            style: style,
            onEachFeature: onEachFeature
        }).addTo(map2);

        // Add event listeners after creating the geojson layer
        geojson.on('mouseover', function() {
            map2.scrollWheelZoom.enable();
        });

        geojson.on('mouseout', function() {
            map2.scrollWheelZoom.disable();
        });
        // print legends on the mozambique map
        var legend = L.control({
            position: 'bottomright'
        });

        legend.onAdd = function(map2) {
            var div = L.DomUtil.create('div', 'info legend');
            var grades = [0, 50000, 70000, 100000, 200000, 350000, 400000, 600000];

            // Divide all grades by 1000
            grades = grades.map(function(grade) {
                return grade / 1000;
            });

            for (var i = 0; i < grades.length; i++) {
                var from = grades[i];
                var to = grades[i + 1];
                var label = from + (to ? '&ndash;' + to : '+');

                var color = getColor(from * 1000 + 1); // Adjust the color scale accordingly

                // Add label inside the button without removing <br>
                div.innerHTML +=
                    '<button style="background:' + color +
                    '; border: 0; height: 10px; width: 15px; line-height: 10px;"></button>' + " " + label + '<br>';
            }

            return div;
        };


        legend.addTo(map2);

        function performSearch() {
            // Get selected option for styledSelect2
            var selectedOption2 = document.getElementById('styledSelect2');
            var selectedProvince = selectedOption2.options[selectedOption2.selectedIndex].value;

            // Update the desiredProvince variable with the selected province
            desiredProvince = selectedProvince;

            // Show the loader and hide the button text
            document.getElementById('loader').style.display = 'inline-block';
            // Hide the loader after 2 seconds
            setTimeout(function() {
                document.getElementById('loader').style.display = 'none';
            }, 2000);
            // Delay the updateMap function by 2 seconds
            setTimeout(function() {
                // Update the map based on the selected province
                updateMap();
            }, 2000);
        }




        function updateMap() {
            // Clear existing GeoJSON layer
            if (map2) {
                map2.remove(); // Remove the existing map instance
            }
            map2.removeLayer(geojson);

            // Get coordinates for the selected province
            const provinceCoordinates = getProvinceCoordinates(desiredProvince);

            // Create or update the map
            if (desiredProvince) {
                map2 = L.map('map2', {
                    center: provinceCoordinates,
                    zoom: 7,
                    minZoom: 4,
                    maxZoom: 9,
                    scrollWheelZoom: true
                });

                // Check if the desired province is "Maputo Cidade"
                if (desiredProvince === "Maputo Cidade") {
                    // Adjust zoom levels for Maputo Cidade
                    map2.setMinZoom(10);
                    map2.setMaxZoom(12);
                    map2.setZoom(20);
                }
            } else {
                map2 = L.map('map2', {
                    center: [-19.00, 34.00],
                    zoom: 5.1,
                    minZoom: 5.4,
                    maxZoom: 9,
                    scrollWheelZoom: true
                });

                // If desiredProvince is empty, add the GeoJSON layer with all features
                geojson = L.geoJson(mozambiquefulldistricts, {
                    style: style,
                    onEachFeature: onEachFeature
                }).addTo(map2);
                geojson.on('mouseover', function() {
                    map2.scrollWheelZoom.enable();
                });

                geojson.on('mouseout', function() {
                    map2.scrollWheelZoom.disable();
                });
                return; // Exit the function as we don't need to filter features further
            }

            // Filter the features based on the selected province
            const filteredFeatures = desiredProvince ?
                mozambiquefulldistricts.features.filter(feature => feature.properties.Provincia === desiredProvince) :
                mozambiquefulldistricts.features;

            // Add the new GeoJSON layer with filtered features to the map
            geojson = L.geoJson(filteredFeatures, {
                style: style,
                onEachFeature: onEachFeature
            }).addTo(map2);

            geojson.on('mouseover', function() {
                map2.scrollWheelZoom.enable();
            });

            geojson.on('mouseout', function() {
                map2.scrollWheelZoom.disable();
            });
            legend.addTo(map2);

        }



        // These are pie charts code



        function stackedBarChartByAgeGroup(popID, grupIdad_014_Total, grupIdad_1564_Total, grupIdad_65_Total,
            grupIdad_014_homens, grupIdad_1564_homens, grupIdad_65_homens, grupIdad_014_mulheres, grupIdad_1564_mulheres,
            grupIdad_65_mulheres) {


            // Check if the charts exist and destroy them
            if (window.chartTotalPopulation) {
                window.chartTotalPopulation.destroy();
            }

            if (window.chartForMens) {
                window.chartForMens.destroy();
            }

            if (window.chartForWomens) {
                window.chartForWomens.destroy();
            }
            // Total population pie charts data
            var total_014 = parseFloat(grupIdad_014_Total);
            var total_1564 = parseFloat(grupIdad_1564_Total);
            var total_65 = parseFloat(grupIdad_65_Total);
            var updatedSeriesTotal = [total_014, total_1564, total_65];

            // Men population pie charts data
            var homens_014 = parseFloat(grupIdad_014_homens);
            var homens_1564 = parseFloat(grupIdad_1564_homens);
            var homens_65 = parseFloat(grupIdad_65_homens);
            var updatedSeriesForMens = [homens_014, homens_1564, homens_65];

            // Women population pie charts data
            var mulheres_014 = parseFloat(grupIdad_014_mulheres);
            var mulheres_1564 = parseFloat(grupIdad_1564_mulheres);
            var mulheres_65 = parseFloat(grupIdad_65_mulheres);
            var updatedSeriesForWomens = [mulheres_014, mulheres_1564, mulheres_65];

            Highcharts.chart('stackedBarChartByAgeGroup', {
                chart: {
                    type: 'column'
                },
                title: {
                    text: 'Population by Major Age Groups',
                    align: 'left'
                },
                subtitle: {
                    text: 'Percentage Distribution',
                    align: 'left'
                },
                xAxis: {
                    categories: ['0-14', '15-64', '65+']
                },
                yAxis: {
                    min: 0,
                    title: {
                        text: 'Percent'
                    }
                },
                credits: {
                    enabled: false // Hide the credits
                },
                tooltip: {
                    pointFormat: '<span style="color:{series.color}">{series.name}</span>: <b>{point.y}</b> ({point.percentage:.0f}%)<br/>',
                    shared: true
                },
                plotOptions: {
                    column: {
                        stacking: 'normal',
                        dataLabels: {
                            enabled: true
                        }
                    }
                },
                series: [{
                    name: 'Total',
                    data: updatedSeriesTotal
                }, {
                    name: 'Men',
                    data: updatedSeriesForMens
                }, {
                    name: 'Women',
                    data: updatedSeriesForWomens
                }]
            });
        }

        function basicBarChartForiegnPopulation(pop_Estr_total, pop_Estr_homens, pop_Estr_mulheres) {
            var totalPopulation = parseFloat(pop_Estr_total);
            var menPopulation = parseFloat(pop_Estr_homens);
            var womenPopulation = parseFloat(pop_Estr_mulheres);

            Highcharts.chart('foreign_population_by_gender', {
                chart: {
                    type: 'bar'
                },
                title: {
                    text: 'FOREIGN POPULATION BY SEX',
                    align: 'left'
                },
                xAxis: {
                    min: 0,
                    title: {
                        text: 'Foreign Population'
                    }
                },

                tooltip: {
                    valueSuffix: ' percent'
                },
                plotOptions: {
                    bar: {
                        borderRadius: '50%',
                        dataLabels: {
                            enabled: true
                        },
                        groupPadding: 0.2
                    }
                },
                legend: {
                    itemStyle: {
                        fontSize: '13px' // Adjust the font size as needed
                    }
                },
                credits: {
                    enabled: false
                },
                series: [{
                    name: 'Total',
                    data: [totalPopulation]
                }, {
                    name: 'Men',
                    data: [menPopulation]
                }, {
                    name: 'Women',
                    data: [womenPopulation]
                }]
            });
        }


        function Population_from_0_to_17_years(Registered_Total, Registered_Male, Registered_Female, Unregistered_Total,
            Unregistered_Male, Unregistered_Female) {
            // Population_from_0_to_17_years
            // Convert input variables to float
            var registered_total = parseFloat(Registered_Total);
            var registered_male = parseFloat(Registered_Male);
            var registered_female = parseFloat(Registered_Female);
            var unregistered_total = parseFloat(Unregistered_Total);
            var unregistered_male = parseFloat(Unregistered_Male);
            var unregistered_female = parseFloat(Unregistered_Female);

            // Log the converted variables
            // console.log("Registered Total: ", registered_total);
            // console.log("Registered Male: ", registered_male);
            // console.log("Registered Female: ", registered_female);
            // console.log("Unregistered Total: ", unregistered_total);
            // console.log("Unregistered Male: ", unregistered_male);
            // console.log("Unregistered Female: ", unregistered_female);



            Highcharts.chart('Population_from_0_to_17_years', {
                chart: {
                    type: 'bar'
                },
                title: {
                    text: 'CIVIL REGISTRY by Sex',
                    align: 'left'
                },
                subtitle: {
                    text: 'POPULATION FROM 0 TO 17 YEARS OLD',
                    align: 'left'
                },
                xAxis: {
                    categories: ['Registered', 'Unregistered'],
                    title: {
                        text: null
                    },
                    gridLineWidth: 1,
                    lineWidth: 0
                },
                yAxis: {
                    min: 0,
                    title: {
                        text: '',
                        align: 'high'
                    },
                    labels: {
                        overflow: 'justify'
                    },
                    gridLineWidth: 0
                },
                tooltip: {
                    valueSuffix: ' millions'
                },
                plotOptions: {
                    bar: {
                        borderRadius: '50%',
                        dataLabels: {
                            enabled: true
                        },
                        groupPadding: 0.1
                    }
                },
                legend: {
                    itemStyle: {
                        fontSize: '13px' // Adjust the font size as needed
                    }
                },
                credits: {
                    enabled: false
                },
                series: [{
                    name: 'Male',
                    data: [registered_male, unregistered_male]
                }, {
                    name: 'Female',
                    data: [registered_female, unregistered_female]
                }, {
                    name: 'Total',
                    data: [registered_total, unregistered_total]
                }]
            });


        }

        function population_with_Disabilities(Deficiency_Total, Deficiency_Male, Deficiency_Female) {
            // Convert input variables to float
            var totalDeficiency = parseFloat(Deficiency_Total);
            var maleDeficiency = parseFloat(Deficiency_Male);
            var femaleDeficiency = parseFloat(Deficiency_Female);

            // Log the converted variables
            // console.log("Deficiency Total: ", totalDeficiency);
            // console.log("Deficiency Male: ", maleDeficiency);
            // console.log("Deficiency Female: ", femaleDeficiency);

            // Create the chart with dynamic data
            Highcharts.chart('population_with_Disabilities', {
                chart: {
                    type: 'column'
                },
                title: {
                    align: 'left',
                    text: 'Population with Disabilities'
                },
                subtitle: {
                    align: 'left',
                    text: 'Percentage of Population with Disabilities by District'
                },
                accessibility: {
                    announceNewData: {
                        enabled: true
                    }
                },
                xAxis: {
                    type: 'category'
                },
                yAxis: {
                    title: {
                        text: 'Population with Disabilities'
                    }
                },
                legend: {
                    enabled: false
                },
                plotOptions: {
                    series: {
                        borderWidth: 0,
                        dataLabels: {
                            enabled: true,
                            format: '{point.y:.2f}%'
                        }
                    }
                },
                tooltip: {
                    headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
                    pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.2f}%</b> of total<br/>'
                },
                credits: {
                    enabled: false
                },
                series: [{
                    name: 'Deficiency',
                    colorByPoint: true,
                    data: [{
                            name: 'Male',
                            y: maleDeficiency
                        },
                        {
                            name: 'Female',
                            y: femaleDeficiency
                        },
                        {
                            name: 'Total',
                            y: totalDeficiency
                        }
                    ]
                }]
            });
        }


        function orphanage_by_sex(Orphanage_Both_Genders_Percentage_Total, Orphanage_Both_Genders_Percentage_Male,
            Orphanage_Both_Genders_Percentage_Female) {

            var Orphanage_Both_Genders_Percentage_Total = parseFloat(Orphanage_Both_Genders_Percentage_Total);
            var Orphanage_Both_Genders_Percentage_Male = parseFloat(Orphanage_Both_Genders_Percentage_Male);
            var Orphanage_Both_Genders_Percentage_Female = parseFloat(Orphanage_Both_Genders_Percentage_Female);

            // console.log("Orphanage Both Genders Percentage Total: ", Orphanage_Both_Genders_Percentage_Total);
            // console.log("Orphanage Both Genders Percentage Male: ", Orphanage_Both_Genders_Percentage_Male);
            // console.log("Orphanage Both Genders Percentage Female: ", Orphanage_Both_Genders_Percentage_Female);

            Highcharts.chart('orphanage_by_sex', {
                chart: {
                    type: 'column'
                },
                title: {
                    align: 'left',
                    text: 'ORPHANAGE BY SEX'
                },
                subtitle: {
                    align: 'left',
                    text: 'POPULATION FROM 0 TO 17 YEARS OLD'
                },
                accessibility: {
                    announceNewData: {
                        enabled: true
                    }
                },
                xAxis: {
                    type: 'category'
                },
                yAxis: {
                    title: {
                        text: 'POPULATION FROM 0 TO 17 YEARS OLD'
                    }
                },
                legend: {
                    enabled: false
                },
                plotOptions: {
                    series: {
                        borderWidth: 0,
                        dataLabels: {
                            enabled: true,
                            format: '{point.y:.2f}%'
                        }
                    }
                },
                tooltip: {
                    headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
                    pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.2f}%</b> of total<br/>'
                },
                credits: {
                    enabled: false
                },
                series: [{
                    name: 'Deficiency',
                    colorByPoint: true,
                    data: [{
                            name: 'Male',
                            y: Orphanage_Both_Genders_Percentage_Male
                        },
                        {
                            name: 'Female',
                            y: Orphanage_Both_Genders_Percentage_Female
                        },
                        {
                            name: 'Total',
                            y: Orphanage_Both_Genders_Percentage_Total
                        }
                    ]
                }]
            });

        }

        function illiteracy_Rate_by_Sex(Illiteracy_Rate_Total, Illiteracy_Rate_Male, Illiteracy_Rate_Female) {


            // Convert input variables to float
            var Illiteracy_Rate_Total = parseFloat(Illiteracy_Rate_Total);
            var Illiteracy_Rate_Male = parseFloat(Illiteracy_Rate_Male);
            var Illiteracy_Rate_Female = parseFloat(Illiteracy_Rate_Female);

            // Log the converted variables
            // console.log("Illiteracy Rate Total: ", Illiteracy_Rate_Total);
            // console.log("Illiteracy Rate Male: ", Illiteracy_Rate_Male);
            // console.log("Illiteracy Rate Female: ", Illiteracy_Rate_Female);

            // Create categories dynamically based on provided data
            var categories = [
                'Male',
                'Female',
                'Total'
            ];


            // Highcharts chart creation
            Highcharts.chart('illiteracy_Rate_by_Sex', {
                colors: ['#FFD700', '#C0C0C0', '#CD7F32'],
                chart: {
                    type: 'column',
                    inverted: true,
                    polar: true
                },
                title: {
                    text: 'Illiteracy Rate by Sex',
                    align: 'left'
                },
                tooltip: {
                    outside: true
                },
                pane: {
                    size: '85%',
                    innerSize: '20%',
                    endAngle: 270
                },
                xAxis: {
                    tickInterval: 1,
                    labels: {
                        align: 'right',
                        useHTML: true,
                        allowOverlap: true,
                        step: 1,
                        y: 3,
                        style: {
                            fontSize: '13px'
                        }
                    },
                    lineWidth: 0,
                    gridLineWidth: 0,
                    categories: categories
                },
                yAxis: {
                    lineWidth: 0,
                    tickInterval: 25,
                    reversedStacks: false,
                    endOnTick: true,
                    showLastLabel: true,
                    gridLineWidth: 0
                },
                plotOptions: {
                    column: {
                        stacking: 'normal',
                        borderWidth: 0,
                        pointPadding: 0,
                        groupPadding: 0.35,
                        borderRadius: '50%'
                    }
                },
                credits: {
                    enabled: false
                },
                series: [{
                    name: 'Male Population',
                    data: [Illiteracy_Rate_Male]
                }, {
                    name: 'Female Population',
                    data: [Illiteracy_Rate_Female]
                }, {
                    name: 'Total Population',
                    data: [Illiteracy_Rate_Total]
                }]
            });
        }

        // chart marital ratio characteristics
        function highlightPieChartMaritalRatio(
            solteiro_homens, casado_homens, uniao_Marital_homens, divorciado_Separado_homens, viuvo_homens,
            solteiro_mulheres, casado_mulheres, uniao_Marital_mulheres, divorciado_Separado_mulheres, viuvo_mulheres
        ) {
            removeEmptyMessage();
            // Check if the charts exist and destroy them
            if (window.chartTotalMarital) {
                window.chartTotalMarital.destroy();
            }
            if (window.chartMensMarital) {
                window.chartMensMarital.destroy();
            }
            if (window.chartWomensMarital) {
                window.chartWomensMarital.destroy();
            }

            var solteiro_homens_marital = parseFloat(solteiro_homens);
            var casado_homens_marital = parseFloat(casado_homens);
            var uniao_Marital_homens_marital = parseFloat(uniao_Marital_homens);
            var divorciado_Separado_homens_marital = parseFloat(divorciado_Separado_homens);
            var viuvo_homens_marital = parseFloat(viuvo_homens);

            var updatedSeriesMensMarital = [solteiro_homens_marital, casado_homens_marital,
                uniao_Marital_homens_marital,
                divorciado_Separado_homens_marital, viuvo_homens_marital
            ];


            // console.log("updatedSeriesMensMarital" + updatedSeriesMensMarital )
            // it is womens marital
            var solteiro_mulheres_marital = parseFloat(solteiro_mulheres);
            var casado_mulheres_marital = parseFloat(casado_mulheres);
            var uniao_Marital_mulheres_marital = parseFloat(uniao_Marital_mulheres);
            var divorciado_Separado_mulheres_marital = parseFloat(divorciado_Separado_mulheres);
            var viuvo_mulheres_marital = parseFloat(viuvo_mulheres);

            var updatedSeriesWomensMarital = [solteiro_mulheres_marital, casado_mulheres_marital,
                uniao_Marital_mulheres_marital,
                divorciado_Separado_mulheres_marital, viuvo_mulheres_marital
            ];

            // console.log("updatedSeriesWomensMarital" + updatedSeriesWomensMarital )

            // Create categories dynamically based on provided data
            var categories = [
                'Single',
                'Married',
                'Marital Union',
                'Divorced/Separated',
                'Widowed'
            ];


            // Highcharts chart creation
            Highcharts.chart('chart_marital_ratio_characteristics', {
                colors: ['#FFD700', '#C0C0C0', '#CD7F32'],
                chart: {
                    type: 'column',
                    inverted: true,
                    polar: true
                },
                title: {
                    text: 'MARITAL STATUS BY SEX',
                    align: 'left'
                },
                subtitle: {
                    text: '12 YEARS OF AGE AND OVER',
                    align: 'left'
                },
                tooltip: {
                    outside: true
                },
                pane: {
                    size: '85%',
                    innerSize: '20%',
                    endAngle: 270
                },
                xAxis: {
                    tickInterval: 1,
                    labels: {
                        align: 'right',
                        useHTML: true,
                        allowOverlap: true,
                        step: 1,
                        y: 3,
                        style: {
                            fontSize: '13px'
                        }
                    },
                    lineWidth: 0,
                    gridLineWidth: 0,
                    categories: categories
                },
                yAxis: {
                    lineWidth: 0,
                    tickInterval: 25,
                    reversedStacks: false,
                    endOnTick: true,
                    showLastLabel: true,
                    gridLineWidth: 0
                },
                plotOptions: {
                    column: {
                        stacking: 'normal',
                        borderWidth: 0,
                        pointPadding: 0,
                        groupPadding: 0.15,
                        borderRadius: '50%'
                    }
                },
                credits: {
                    enabled: false
                },
                series: [{
                    name: 'Male Population',
                    data: updatedSeriesMensMarital
                }, {
                    name: 'Female Population',
                    data: updatedSeriesWomensMarital
                }]
            });
        }

        function Population_aged_5_and_over(Emakhuwa, Ciyao, Cinyanja, Portugues, Elomwue, Outras_linguas_mocambicanas,
            Outras_linguas_estrangeiras, Xichangana, Mudo, Desconhecida) {

            // Convert string values to float
            var emakhuwa = parseFloat(Emakhuwa);
            var ciyao = parseFloat(Ciyao);
            var cinyanja = parseFloat(Cinyanja);
            var portuguese = parseFloat(Portugues);
            var elomwue = parseFloat(Elomwue);
            var outras_linguas_mocambicanas = parseFloat(Outras_linguas_mocambicanas);
            var outras_linguas_estrangeiras = parseFloat(Outras_linguas_estrangeiras);
            var xichangana = parseFloat(Xichangana);
            var mudo = parseFloat(Mudo);
            var desconhecida = parseFloat(Desconhecida);
            // Print variables to the console
            // console.log('Emakhuwa:', emakhuwa);
            // console.log('Ciyao:', ciyao);
            // console.log('Cinyanja:', cinyanja);
            // console.log('Portuguese:', portuguese);
            // console.log('Elomwue:', elomwue);
            // console.log('Outras línguas moçambicanas:', outras_linguas_mocambicanas);
            // console.log('Outras línguas estrangeiras:', outras_linguas_estrangeiras);
            // console.log('Xichangana:', xichangana);
            // console.log('Mudo:', mudo);
            // console.log('Desconhecida:', desconhecida);
            // Set dynamic data for the pie chart
            var data = [
                ['Emakhuwa', emakhuwa],
                ['Ciyao', ciyao],
                ['Cinyanja', cinyanja],
                ['Portuguese', portuguese],
                ['Elomwue', elomwue],
                ['Outras línguas moçambicanas', outras_linguas_mocambicanas],
                ['Outras línguas estrangeiras', outras_linguas_estrangeiras],
                ['Xichangana', xichangana],
                ['Mudo', mudo],
                ['Desconhecida', desconhecida]
            ];

            // Data retrieved from https://olympics.com/en/olympic-games/beijing-2022/medals
            Highcharts.chart('Population_aged_5_and_over', {
                chart: {
                    type: 'pie',
                    options3d: {
                        enabled: true,
                        alpha: 45
                    }
                },
                title: {
                    text: 'Language most often spoken',
                    align: 'left'
                },
                subtitle: {
                    text: 'Population aged 5 and over',
                    align: 'left'
                },
                plotOptions: {
                    pie: {
                        innerSize: 100,
                        depth: 45
                    }
                },
                credits: {
                    enabled: false
                },
                series: [{
                    name: 'Language',
                    data: data
                }]
            });
        }

        function population_by_religion_professed(islamica, catolica, anglicana, evangelica_Pentecostal, zione_Siao,
            Sem_religiao_animista, outra, desconhecida) {

            // Convert string values to float
            var islamicaVal = parseFloat(islamica);
            var catolicaVal = parseFloat(catolica);
            var anglicanaVal = parseFloat(anglicana);
            var evangelica_PentecostalVal = parseFloat(evangelica_Pentecostal);
            var zione_SiaoVal = parseFloat(zione_Siao);
            var Sem_religiao_animistaVal = parseFloat(Sem_religiao_animista);
            var outraval = parseFloat(outra);
            var desconhecidaval = parseFloat(desconhecida);
            // Repeat this for other variables

            // Repeat this for other variables

            // Print variables to the console
            // console.log('Islamica:', islamicaVal);
            // console.log('Catolica:', catolicaVal);
            // console.log('Anglicana:', anglicanaVal);
            // console.log('Evangelica Pentecostal:', evangelica_PentecostalVal);
            // console.log('Zione Siao:', zione_SiaoVal);
            // console.log('Sem Religiao Animista:', Sem_religiao_animistaVal);
            // console.log('Outra:', outraval);
            // console.log('Desconhecida:', desconhecidaval);

            // Set dynamic data in the series
            var seriesData = [
                ['Islamica', islamicaVal],
                ['Catolica', catolicaVal],
                ['Anglicana', anglicanaVal],
                ['Evangelica Pentecostal', evangelica_PentecostalVal],
                ['Zione Siao', zione_SiaoVal],
                ['Sem Religiao Animista', Sem_religiao_animistaVal],
                ['Outra', outraval],
                ['Desconhecida', desconhecidaval]
            ];

            // Data retrieved from https://netmarketshare.com/
            Highcharts.chart('population_by_Religion_Professed', {
                chart: {
                    plotBackgroundColor: null,
                    plotBorderWidth: 0,
                    plotShadow: false
                },
                title: {
                    text: 'Population by Religion Professed',
                    align: 'left',
                },
                tooltip: {
                    pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
                },
                accessibility: {
                    point: {
                        valueSuffix: '%'
                    }
                },
                plotOptions: {
                    pie: {
                        dataLabels: {
                            enabled: true,
                            distance: -50,
                            style: {
                                fontWeight: 'bold',
                                color: 'white'
                            }
                        },
                        startAngle: -90,
                        endAngle: 90,
                        center: ['50%', '75%'],
                        size: '110%'
                    }
                },
                credits: {
                    enabled: false
                },
                series: [{
                    type: 'pie',
                    name: 'Religion Professed',
                    innerSize: '50%',
                    data: seriesData
                }]
            });

        }

        function updatePopulationCounters(popSexRatioBybirth, popGrowthRate, populationDensity) {
            // Update the innerHTML of the counter elements with the provided values
            // document.getElementById('total_population').innerHTML = popTotalValue;
            document.getElementById('sex_ratio_by_birth').innerHTML = popSexRatioBybirth;
            document.getElementById('population_growth_rate').innerHTML = popGrowthRate;
            document.getElementById('population_density').innerHTML = populationDensity;
        }

        function demographicDependencyRateBySex(rateDep_014_total, rateDep_014_men, rateDep_014_women, rateDep_65_total,
            rateDep_65_men, rateDep_65_women) {
            // Convert strings to numbers
            rateDep_014_total = parseFloat(rateDep_014_total);
            rateDep_014_men = parseFloat(rateDep_014_men);
            rateDep_014_women = parseFloat(rateDep_014_women);
            rateDep_65_total = parseFloat(rateDep_65_total);
            rateDep_65_men = parseFloat(rateDep_65_men);
            rateDep_65_women = parseFloat(rateDep_65_women);

            // Dynamic data for the chart
            var categories = ['Total', 'Men', 'Women'];

            Highcharts.chart('demographic_dependency_rate_by_sex', {
                chart: {
                    type: 'column'
                },
                title: {
                    text: 'Demographic dependency rate by sex',
                    align: 'left'
                },
                xAxis: {
                    categories: categories
                },
                yAxis: {
                    min: 0,
                    title: {
                        text: 'Dependency rate'
                    },
                    stackLabels: {
                        enabled: true
                    }
                },
                credits: {
                    enabled: false // Hide the credits
                },
                legend: {
                    itemStyle: {
                        fontSize: '13px' // Adjust the font size as needed
                    }
                },
                tooltip: {
                    headerFormat: '<b>{point.x}</b><br/>',
                    pointFormat: '{series.name}: {point.y}<br/>Total: {point.stackTotal}'
                },
                plotOptions: {
                    column: {
                        stacking: 'normal',
                        dataLabels: {
                            enabled: true
                        }
                    }
                },
                series: [{
                    name: '0-14',
                    data: [rateDep_014_total, rateDep_014_men, rateDep_014_women]
                }, {
                    name: '65+',
                    data: [rateDep_65_total, rateDep_65_men, rateDep_65_women]
                }]
            });
        }


        // total Illiteracy Rate bar charts

        function updatedPopulation_total_Illiteracy_Rate(TotalIlliteracyRate, MenIlliteracyRate, woMenIlliteracyRate) {

            // Convert strings to numbers
            TotalIlliteracyRate = parseFloat(TotalIlliteracyRate);
            MenIlliteracyRate = parseFloat(MenIlliteracyRate);
            woMenIlliteracyRate = parseFloat(woMenIlliteracyRate);
            // total Dependency Ratio Rate Bar charts of the Total population
            Highcharts.chart('totalIlliteracyRate', {
                chart: {
                    type: 'column',

                },
                title: {
                    text: 'Illiteracy Rate by Sex and age groups by District',
                    align: 'left'
                },
                xAxis: {
                    categories: ['Illiteracy', 'Men', 'Women'],
                    crosshair: true,
                    accessibility: {
                        description: 'Districts'
                    }
                },
                plotOptions: {
                    column: {
                        pointPadding: 0.2,
                        borderWidth: 0
                    }
                },
                credits: {
                    enabled: false // Hide the credits
                },
                legend: {
                    itemStyle: {
                        fontSize: '16px' // Adjust the font size as needed
                    }
                },
                series: [{
                        name: 'Total Illiteracy Rate',
                        data: [TotalIlliteracyRate]
                    },
                    {
                        name: 'Men Illiteracy Rate',
                        data: [MenIlliteracyRate]
                    },
                    {
                        name: 'Women Illiteracy Rate',
                        data: [woMenIlliteracyRate]
                    }
                ]
            });
        }

        function removeEmptyMessage() {
            // Get all elements with class 'emptyMessage' and set their display property to 'none'
            var emptyMessages = document.getElementsByClassName('emptyMessage');
            for (var i = 0; i < emptyMessages.length; i++) {
                emptyMessages[i].style.display = 'none';
            }
        }



        function percent_distribution(District, Pop_Total,
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

            Highcharts.chart('dependency1', {
                chart: {
                    type: 'bar'
                },
                title: {
                    text: '<span style="margin-right: 5px;">' + Pop_Total + '</span>' +
                        'Population Pyramid of ' + District,
                    useHTML: true,
                },

                subtitle: {
                    text: 'Population of 2017'
                },
                credits: {
                    enabled: false
                },
                xAxis: [{
                    categories: categories,
                    reversed: false,
                    labels: {
                        step: 1
                    }
                }, {
                    opposite: true,
                    reversed: false,
                    categories: categories,
                    linkedTo: 0,
                    labels: {
                        step: 1
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

        function percent_distribution_2007(District, M_00_00_p_2007, F_00_00_p_2007, T_00_00_p_2007,
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

            Highcharts.chart('dependency2', {
                chart: {
                    type: 'bar'
                },
                title: {
                    text: 'Population Pyramid of ' + District
                },
                subtitle: {
                    text: 'Population of 2007'
                },
                credits: {
                    enabled: false
                },
                xAxis: [{
                    categories: categories,
                    reversed: false,
                    labels: {
                        step: 1
                    }
                }, {
                    opposite: true,
                    reversed: false,
                    categories: categories,
                    linkedTo: 0,
                    labels: {
                        step: 1
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
    </script>
@endsection
