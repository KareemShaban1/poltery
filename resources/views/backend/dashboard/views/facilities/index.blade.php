@extends('backend.dashboard.layouts.master')

@section('page-title')
    <div class="page-title d-flex flex-column me-5">
        <!--begin::Title-->
        <h1 class="d-flex flex-column text-dark fw-bolder fs-3 mb-0">{{ trans('backend.All_Facilities') }}</h1>
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
            <li class="breadcrumb-item text-dark">{{ trans('backend.All_Facilities') }}</li>
            <!--end::Item-->
        </ul>
        <!--end::Breadcrumb-->
    </div>
@endsection

@section('content')
    <a href="#" class="btn btn-primary er fs-6 px-8 py-4 mb-5" data-bs-toggle="modal"
        data-bs-target="#kt_modal_new_facility">{{ trans('backend.Add_Facility') }}</a>


    @include('backend.dashboard.views.facilities.add_facility_modal')


    <!-- row -->
    <div class="row">
        <div class="col-md-12 mb-30">
            <div class="card card-statistics h-100">
                <div class="card-body">
                    <table id="custom_table" class="display">

                        <thead>
                            <tr>

                                <th>{{ trans('backend.Id') }}</th>
                                <th>{{ trans('backend.Name') }}</th>
                                <th>{{ trans('backend.Image') }}</th>
                                <th>{{ trans('backend.Additional_Images') }}</th>
                                <th>{{ trans('backend.Actions') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($facilities as $facility)
                                <tr>

                                    <td>{{ $facility->id }}</td>
                                    <td>{{ $facility->name_en }}</td>

                                    <td>
                                        <img src="{{ $facility->image_url }}" height="50" width="50" alt="">
                                    </td>

                                    <td>
                                        @php
                                            $images = App\Models\Image::where('facility_id', $facility->id)->get();
                                        @endphp
                                        <div style="display: flex">

                                            @foreach ($images as $image)
                                                <div
                                                    style="    display: flex;
                                                flex-direction: column;
                                                align-items: center;
                                                margin:0px 5px">

                                                    <img src="{{ asset('storage/thumbnail/images/' . $image->image) }}"
                                                        height="50" width="50" alt="">

                                                    <div>
                                                        <a href="#" class="btn btn-warning btn-sm"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#kt_edit_facility_image{{ $image->id }}">
                                                            <i class="fa fa-edit"></i>
                                                        </a>

                                                        <form action="{{ Route('images.destroy', $image->id) }}"
                                                            method="post" style="display:inline">
                                                            @csrf
                                                            @method('delete')

                                                            <button type="submit" class="btn btn-danger btn-sm">
                                                                <i class="fa fa-trash"></i>
                                                            </button>
                                                        </form>
                                                    </div>
                                                </div>

                                                @include('backend.dashboard.views.facilities.edit_facility_image_modal')
                                            @endforeach
                                        </div>
                                    </td>



                                    <td>



                                        <a href="#" class="btn btn-success btn-sm" data-bs-toggle="modal"
                                            data-bs-target="#kt_modal_facility_image{{ $facility->id }}">
                                            {{ trans('backend.Add_Image') }}
                                            {{-- <i class="fa fa-create"></i> --}}
                                        </a>
                                        <a href="#" class="btn btn-warning btn-sm" data-bs-toggle="modal"
                                            data-bs-target="#kt_modal_edit_facility{{ $facility->id }}">
                                            <i class="fa fa-edit"></i>
                                        </a>

                                        @include('backend.dashboard.views.facilities.edit_facility_modal')
                                        @include('backend.dashboard.views.facilities.add_facility_image_modal')

                                        <form action="{{ Route('facilities.destroy', $facility->id) }}" method="post"
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
                    sSearch: 'Search',
                    sInfo: "Got a total of _TOTAL_ entries to show (_START_ to _END_)",
                    sZeroRecords: 'لا يوجد سجل متتطابق',
                    sEmptyTable: 'لا يوجد بيانات في الجدول',
                    oPaginate: {
                        sFirst: "First",
                        sLast: "Last",
                        sNext: "Next",
                        sPrevious: "Previous"
                    },
                },
                dom: 'Bfrtip',
                buttons: [{
                        extend: 'excelHtml5',
                        text: 'Export to Excel',
                        title: 'Facilities',
                        exportOptions: {
                            columns: [0, 1]
                        }
                    },

                ],
                responsive: true
            });


        });
    </script>
@endpush
