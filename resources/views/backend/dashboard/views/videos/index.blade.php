@extends('backend.dashboard.layouts.master')

@section('title')
    {{ trans('backend.Videos') }}
@endsection
@section('page-title')
    <div class="user-title d-flex flex-column me-5">
        <!--begin::Title-->
        <h1 class="d-flex flex-column text-dark fw-bolder fs-3 mb-0">{{ trans('backend.All_Videos') }}</h1>
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
            <li class="breadcrumb-item text-dark">{{ trans('backend.All_Videos') }}</li>
            <!--end::Item-->
        </ul>
        <!--end::Breadcrumb-->
    </div>
@endsection
@section('content')
    <a href="#" class="btn btn-success btn-sm mb-2" data-bs-toggle="modal" data-bs-target="#kt_add_modal_video">
        {{ trans('backend.Add_Video') }}
    </a>
    @include('backend.dashboard.views.videos.add_video_modal')
    <!-- row -->
    <div class="row">
        <div class="col-md-12 mb-30">
            <div class="card card-statistics h-100">

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="custom_table" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th> {{ trans('backend.Id') }} </th>
                                    <th> {{ trans('backend.Title') }} </th>

                                    <th> {{ trans('backend.Image') }} </th>
                                    <th> {{ trans('backend.Type') }} </th>
                                    <th> {{ trans('backend.Actions') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($videos as $video)
                                    <tr>
                                        <td>{{ $video->id }}</td>

                                        <td>{{ $video->title }}</td>

                                        <td>
                                            <img src="{{ $video->image_url }}" height="50" width="50"
                                                alt="">
                                        </td>
                                        <td>
                                            @if ($video->type == 'home_video')
                                                <span class="text-info text-bold"> {{ trans('backend.Home_Video') }}</span>
                                            @elseif ($video->type == 'product_video')
                                                <span class="text-info text-bold">
                                                    {{ trans('backend.Product_Video') }}</span>
                                            @elseif ($video->type == 'facility_video')
                                                <span class="text-info text-bold">
                                                    {{ trans('backend.Facility_Video') }}</span>
                                            @elseif ($video->type == 'recipes_video')
                                                <span class="text-info text-bold">
                                                    {{ trans('backend.Recipe_Video') }}</span>
                                            @else
                                                <span class="text-info text-bold">
                                                    {{ trans('backend.Other') }}</span>
                                            @endif
                                        </td>
                                        <td>

                                            <a href="#" class="btn btn-warning btn-sm" data-bs-toggle="modal"
                                                data-bs-target="#kt_edit_modal_video{{ $video->id }}">
                                                {{ trans('backend.Edit_Video') }}
                                            </a>
                                            @include('backend.dashboard.views.videos.edit_video_modal')

                                            <form action="{{ route('videos.destroy', $video->id) }}" method="post"
                                                style="display:inline">
                                                @csrf
                                                @method('delete')

                                                <button type="submit" class="btn btn-danger">
                                                    {{ trans('backend.Delete') }}
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
    </div>
    <!-- row closed -->
@endsection
@push('scripts')
    <script>
        var datatable = $('#custom_table').DataTable({
            stateSave: true,
            responsive: true,
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
            sortable: true,
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
                        columns: [0, 1, 2]
                    },
                    title: "المستخدمين"
                },
                'colvis'
            ],

        });
    </script>
@endpush
