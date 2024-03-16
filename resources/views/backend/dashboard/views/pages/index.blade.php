@extends('backend.dashboard.layouts.master')

@section('page-title')
    <div class="page-title d-flex flex-column me-5">
        <!--begin::Title-->
        <h1 class="d-flex flex-column text-dark fw-bolder fs-3 mb-0">{{ trans('backend.All_Pages') }}</h1>
        <!--end::Title-->
        <!--begin::Breadcrumb-->
        <ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 pt-1">
            <!--begin::Item-->
            <li class="breadcrumb-item text-muted">
                <a href="{{ route('dashboard') }}" class="text-muted text-hover-primary">{{ trans('backend.Dashboard') }}</a>
            </li>
            <!--end::Item-->
            <!--begin::Item-->
            <li class="breadcrumb-item">
                <span class="bullet bg-gray-200 w-5px h-2px"></span>
            </li>
            <!--end::Item-->
            <!--begin::Item-->
            <li class="breadcrumb-item text-dark">{{ trans('backend.All_Pages') }}</li>
            <!--end::Item-->
        </ul>
        <!--end::Breadcrumb-->
    </div>
@endsection

@section('content')
    <a href="#" class="btn btn-primary er fs-6 px-8 py-4 mb-5" data-bs-toggle="modal"
        data-bs-target="#kt_modal_new_page">{{ trans('backend.Add_Page') }}</a>


    @include('backend.dashboard.views.pages.add_page_modal')


    <!-- row -->
    <div class="row">
        <div class="col-md-12 mb-30">
            <div class="card card-statistics h-100">
                {{-- @include('backend.dashboard.views.pages.page_table') --}}
                <div class="card-body">
                    <table id="custom_table" class="display">
                        <thead>
                            <tr>

                                <th>{{ trans('backend.Id') }}</th>
                                <th>{{ trans('backend.Title') }}</th>
                                <th>{{ trans('backend.Slug') }}</th>
                                <th>{{ trans('backend.Active') }}</th>
                                <th>{{ trans('backend.Image') }}</th>
                                <th>{{ trans('backend.Actions') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pages as $page)
                                <tr>

                                    <td>{{ $page->id }}</td>
                                    <td>{{ $page->title_en }}</td>
                                    <td>{{ $page->slug }}</td>
                                    <td>
                                        @if ($page->active == '1')
                                            <span class="text-success">{{ trans('backend.Active') }}</span>
                                        @else
                                            <span class="text-danger">{{ trans('backend.InActive') }}</span>
                                        @endif
                                    </td>
                                    <td>
                                        <img src="{{ $page->image_url }}" height="50" width="50" alt="">
                                    </td>

                                    <td>

                                        @php
                                            $seo = App\Models\SeoData::where('entity_id', $page->id)
                                                ->where('entity_type', 'facility')
                                                ->first();
                                        @endphp
                                        @if ($seo)
                                            <a href="{{ Route('seo.edit', [$page->id, 'page']) }}"
                                                class="btn btn-success btn-sm">
                                                {{ trans('backend.Edit_Seo') }}
                                            </a>
                                        @else
                                            <a href="{{ Route('seo.create', [$page->id, 'page']) }}"
                                                class="btn btn-primary btn-sm">
                                                {{ trans('backend.Add_Seo') }}
                                            </a>
                                        @endif
                                        <a href="#" class="btn btn-warning btn-sm" data-bs-toggle="modal"
                                            data-bs-target="#kt_modal_edit_page{{ $page->id }}">
                                            <i class="fa fa-edit"></i>
                                        </a>

                                        @include('backend.dashboard.views.pages.edit_page_modal')

                                        <form action="{{ Route('pages.destroy', $page->id) }}" method="post"
                                            style="display:inline">
                                            @csrf
                                            @method('delete')

                                            <button type="submit" class="btn btn-danger btn-sm">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                        </form>


                                    </td>

                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- row closed -->
@endsection


@push('scripts')
    <script src="{{ asset('backend/js/custom/modals/new-target.js') }}"></script>

    <script>
        $(document).ready(function() {


            var datatable = $('#custom_table').DataTable({
                stateSave: true,
                sortable: true,
                oLanguage: {
                    sSearch: 'البحث',
                    sInfo: "Got a total of _TOTAL_ entries to show (_START_ to _END_)",
                    sZeroRecords: 'لا يوجد سجل متتطابق',
                    sEmptyTable: 'لا يوجد بيانات في الجدول',
                    oPaginate: {
                        sFirst: "First",
                        sLast: "الأخير",
                        sNext: "التالى",
                        sPrevious: "السابق"
                    },
                },
                dom: 'Bfrtip',
                buttons: [{
                        extend: 'copyHtml5',
                        exportOptions: {
                            columns: [0, ':visible']
                        }
                    },
                    {
                        extend: 'excelHtml5',
                        exportOptions: {
                            columns: [1, 2, 3, 4, 5, 6, 7, 8]
                        }
                    },

                    'colvis'
                ],
                responsive: true
            });


        });
    </script>
@endpush
