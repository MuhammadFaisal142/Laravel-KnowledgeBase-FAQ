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
        {{ trans('cruds.sheetData.District') }} {{ trans('global.list') }}
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
                            {{ trans('cruds.sheetData.Total_Population') }}
                        </th>
                        <th>
                            {{ trans('cruds.sheetData.Population_men') }}
                        </th>
                        <th>
                            {{ trans('cruds.sheetData.Population_women') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($population_Districts as $key => $pop_District)
                        <tr data-entry-id="{{ $pop_District->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $pop_District->id ?? '' }}
                            </td>
                            <td>
                                {{ $pop_District->Provincia ?? '' }}
                            </td>

                            <td>
                                {{ $pop_District->Distrito ?? '' }}
                            </td>

                            <td>
                                {{ $pop_District->Pop_total ?? '' }}
                            </td>
                            <td>
                                {{ $pop_District->Pop_homens ?? '' }}
                            </td>
                            <td>
                                {{ $pop_District->Pop_mulheres ?? '' }}
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

