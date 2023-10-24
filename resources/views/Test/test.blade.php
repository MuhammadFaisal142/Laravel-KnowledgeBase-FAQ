@extends('layouts.main')

@section('content')
    <div class="container padding-20">

        <div class="row">
            <div class="col-md-4">
                <div class="highChartMap"></div>
            </div>

            <div class="col-md-8">
                <div id="chart"></div>
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <div class="newPieChart donutChart"></div>
                    </div>
                    <div class="col-md-6">
                        <div class="newPieChart donutChart"></div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection

{{-- @section('about')
    <div class="container-fluid featured-area-grey padding-30">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="fb-heading">

                    </div>
                </div>
                <div class="col-md-4">
                    <div class="fb-heading">

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection --}}
