
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
        {{ trans('cruds.sheetData.Foreign_Population') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered table-striped table-hover datatable datatable-Permission" id="datatable">
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
                            {{ trans('cruds.sheetData.Foreign_Population_Total') }}
                        </th>

                        <th>
                            {{ trans('cruds.sheetData.Foreign_Population_Males') }}
                        </th>
                        <th>
                            {{ trans('cruds.sheetData.Foreign_Population_Females') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($population_data as $key => $foreignPopulation)
                        <tr data-entry-id="{{ $foreignPopulation->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $foreignPopulation->id ?? '' }}
                            </td>
                            <td>
                                {{ $foreignPopulation->Provincia ?? '' }}
                            </td>

                            <td>
                                {{ $foreignPopulation->District ?? '' }}
                            </td>

                            <td>
                                {{ $foreignPopulation->Pop_Estr_total ?? '' }}
                            </td>
                            <td>
                                {{ $foreignPopulation->Pop_Estr_homens ?? '' }}
                            </td>
                            <td>
                                {{ $foreignPopulation->Pop_Estr_mulheres ?? '' }}
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

