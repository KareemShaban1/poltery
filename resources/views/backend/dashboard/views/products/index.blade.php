@extends('backend.dashboard.layouts.master')

@section('content')
    <a href="#" class="btn btn-primary er fs-6 px-8 py-4 mb-5" data-bs-toggle="modal"
        data-bs-target="#kt_modal_new_product">Add
        New Product</a>


    @include('backend.dashboard.views.products.add_product_modal')


    <!-- row -->
    <div class="row">
        <div class="col-md-12 mb-30">
            <div class="card card-statistics h-100">
                {{-- @include('backend.dashboard.views.products.product_table') --}}
                <div class="card-body">
                    <table id="custom_table" class="display">
                        <thead>
                            <tr>

                                <th>Id</th>
                                <th>Name</th>
                                <th>الصورة</th>
                                <th>التحكم</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $product)
                                <tr>

                                    <td>{{ $product->id }}</td>
                                    <td>{{ $product->name_en }}</td>

                                    <td>
                                        <img src="{{ $product->image_url }}" height="50" width="50" alt="">
                                    </td>

                                    <td>

                                        {{-- @php
                                            $seo = App\Models\SeoData::where('entity_id', $product->id)
                                                ->where('entity_type', 'product')
                                                ->first();
                                        @endphp
                                        @if ($seo)
                                            <a href="{{ Route('admin.seo.edit', [$product->id, 'product']) }}"
                                                class="btn btn-success btn-sm">
                                                Edit Seo
                                            </a>
                                        @else
                                            <a href="{{ Route('admin.seo.create', [$product->id, 'product']) }}"
                                                class="btn btn-primary btn-sm">
                                                Add Seo
                                            </a>
                                        @endif --}}
                                        <a href="#" class="btn btn-warning btn-sm" data-bs-toggle="modal"
                                            data-bs-target="#kt_modal_edit_product{{ $product->id }}">
                                            <i class="fa fa-edit"></i>
                                        </a>

                                        @include('backend.dashboard.views.products.edit_product_modal')

                                        <form action="{{ Route('products.destroy', $product->id) }}" method="post"
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
