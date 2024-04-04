@extends('backend.dashboard.layouts.master')

@section('title')
    video
@endsection
@section('page-header')
    <!-- breadcrumb -->
    <div class="page-title">
        <div class="row">
            <div class="col-sm-6">
                <h4 class="mb-0"> video </h4>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                    <li class="breadcrumb-item"><a href="#" class="default-color">لوحة التحكم</a></li>
                    <li class="breadcrumb-item active">video</li>
                </ol>
            </div>
        </div>
    </div>
    <!-- breadcrumb -->
@endsection
@section('content')
    <a href="#" class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#kt_add_modal_video">
        {{ trans('backend.Add_video') }}
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
                                    <th> Id </th>
                                    <th> Title </th>

                                    <th> الصورة </th>
                                    <th>type </th>
                                    <th>العمليات</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($videos as $video)
                                    <tr>
                                        <td>{{ $video->id }}</td>

                                        <td>{{ $video->title }}</td>

                                        <td>
                                            <img src="{{ $video->video_url }}" height="50" width="50" alt="">
                                        </td>
                                        <td>
                                            @if ($video->type == 'main_video')
                                                <span class="text-info text-bold">Main video</span>
                                            @elseif ($video->type == 'product_video')
                                                <span class="text-info text-bold">Product video</span>
                                            @elseif ($video->type == 'facility_video')
                                                <span class="text-info text-bold">Facility video</span>
                                            @elseif ($video->type == 'recipes_video')
                                                <span class="text-info text-bold">Recipes video</span>
                                            @else
                                                <span class="text-info text-bold">Other video</span>
                                            @endif
                                        </td>
                                        <td>
                                            {{-- <a href="{{ route('videos.edit', $video->id) }}"
                                                class="btn btn-warning">تعديل</a> --}}
                                            <a href="#" class="btn btn-warning btn-sm" data-bs-toggle="modal"
                                                data-bs-target="#kt_edit_modal_video{{ $video->id }}">
                                                {{ trans('backend.Edit_video') }}
                                            </a>
                                            @include('backend.dashboard.views.videos.edit_video_modal')

                                            <form action="{{ route('videos.destroy', $video->id) }}" method="post"
                                                style="display:inline">
                                                @csrf
                                                @method('delete')

                                                <button type="submit" class="btn btn-danger">
                                                    حذف
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
