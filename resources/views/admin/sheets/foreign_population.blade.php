
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
            <table class=" table table-bordered table-striped table-hover datatable datatable-Permission">
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
                    @foreach($foreign_Population as $key => $foreignPopulation)
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
                                {{ $foreignPopulation->Distrito ?? '' }}
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


    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
// @can('permission_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.permissions.massDestroy') }}",
    className: 'btn-danger',
    action: function (e, dt, node, config) {
      var ids = $.map(dt.rows({ selected: true }).nodes(), function (entry) {
          return $(entry).data('entry-id')
      });

      if (ids.length === 0) {
        alert('{{ trans('global.datatables.zero_selected') }}')

        return
      }

      if (confirm('{{ trans('global.areYouSure') }}')) {
        $.ajax({
          headers: {'x-csrf-token': _token},
          method: 'POST',
          url: config.url,
          data: { ids: ids, _method: 'DELETE' }})
          .done(function () { location.reload() })
      }
    }
  }
  dtButtons.push(deleteButton)
// @endcan

  $.extend(true, $.fn.dataTable.defaults, {
    order: [[ 1, 'desc' ]],
    pageLength: 100,
  });
  $('.datatable-Permission:not(.ajaxTable)').DataTable({ buttons: dtButtons })
    $('a[data-toggle="tab"]').on('shown.bs.tab', function(e){
        $($.fn.dataTable.tables(true)).DataTable()
            .columns.adjust();
    });
})

</script>
@endsection

