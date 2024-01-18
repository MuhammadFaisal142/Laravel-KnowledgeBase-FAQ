@extends('layouts.admin')
@section('content')
{{-- @can('permission_create') --}}
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            {{-- <a class="btn btn-success" href="{{ route("admin.permissions.create") }}">
                {{ trans('global.add') }} {{ trans('cruds.permission.title_singular') }}
            </a> --}}
        </div>
    </div>
{{-- @endcan --}}
<div class="card">
    <div class="card-header">
        {{ trans('cruds.sheetData.Population_Large_Groups_Age') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-Permission" id="datatable">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.sheetData.id') }}

                        </th>
                        <th>
                            {{ trans('cruds.sheetData.Province') }}
                        </th>
                        <th>
                            {{ trans('cruds.sheetData.District') }}
                        </th>
                        <th>
                            {{ trans('cruds.sheetData.Total_Population') }}
                        </th>
                        <th>
                            {{ trans('cruds.sheetData.Population_men') }}
                        </th>
                        <th>
                            {{ trans('cruds.sheetData.Population_women') }}
                        </th>
                        <th>
                            {{ trans('cruds.sheetData.Total_Age_0_14') }}
                        </th>
                        <th>
                            {{ trans('cruds.sheetData.Male_Age_0_14') }}
                        </th>
                        <th>
                            {{ trans('cruds.sheetData.Female_Age_0_14') }}
                        </th>
                        <th>
                            {{ trans('cruds.sheetData.Total_Age_15_64') }}
                        </th>
                        <th>
                            {{ trans('cruds.sheetData.Male_Age_15_64') }}
                        </th>
                        <th>
                            {{ trans('cruds.sheetData.Female_Age_15_64') }}
                        </th>
                        <th>
                            {{ trans('cruds.sheetData.Total_Age_65_Plus') }}
                        </th>
                        <th>
                            {{ trans('cruds.sheetData.Male_Age_65_Plus') }}
                        </th>
                        <th>
                            {{ trans('cruds.sheetData.Female_Age_65_Plus') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($population_data as $key => $popLargeGroupAge)
                        <tr data-entry-id="{{ $popLargeGroupAge->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $popLargeGroupAge->id ?? '' }}
                            </td>
                            <td>
                                {{ $popLargeGroupAge->Provincia ?? '' }}
                            </td>

                            <td>
                                {{ $popLargeGroupAge->District ?? '' }}
                            </td>

                            <td>
                                {{ $popLargeGroupAge->Pop_Total ?? '' }}
                            </td>
                            <td>
                                {{ $popLargeGroupAge->Pop_homens ?? '' }}
                            </td>
                            <td>
                                {{ $popLargeGroupAge->Pop_mulheres ?? '' }}
                            </td>
                            <td>
                                {{ $popLargeGroupAge->GrupIdad_014_Total ?? '' }}
                            </td>
                            <td>
                                {{ $popLargeGroupAge->GrupIdad_014_homens ?? '' }}
                            </td>
                            <td>
                                {{ $popLargeGroupAge->GrupIdad_014_mulheres ?? '' }}
                            </td>
                            <td>
                                {{ $popLargeGroupAge->GrupIdad_1564_Total ?? '' }}
                            </td>
                            <td>
                                {{ $popLargeGroupAge->GrupIdad_1564_homens ?? '' }}
                            </td>
                            <td>
                                {{ $popLargeGroupAge->GrupIdad_1564_mulheres ?? '' }}
                            </td>
                            <td>
                                {{ $popLargeGroupAge->GrupIdad_65_Total ?? '' }}
                            </td>
                            <td>
                                {{ $popLargeGroupAge->GrupIdad_65_homens ?? '' }}
                            </td>
                            <td>
                                {{ $popLargeGroupAge->GrupIdad_65_mulheres ?? '' }}
                            </td>
                            <td>

                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>


    </div>
</div>
@endsection
@section('scripts')
@parent
<script>
    $(document).ready(function () {
        $('#datatable').DataTable();
    });
</script>
@endsection

