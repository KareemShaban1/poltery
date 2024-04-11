@extends('backend.dashboard.layouts.master')

@section('page-title')
    <div class="page-title d-flex flex-column me-5">
        <!--begin::Title-->
        <h1 class="d-flex flex-column text-dark fw-bolder fs-3 mb-0">{{ trans('backend.Dashboard') }}</h1>
        <!--end::Title-->
        <!--begin::Breadcrumb-->
        <ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 pt-1">
            <!--begin::Item-->
            <li class="breadcrumb-item text-muted">
                <a href="{{ route('dashboard') }}" class="text-muted text-hover-primary">{{ trans('backend.Dashboard') }}</a>
            </li>

        </ul>
        <!--end::Breadcrumb-->
    </div>
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xl-3">
                <a href="#" class="card bg-warning hoverable card-xl-stretch mb-xl-8">
                    <div class="card-body">
                        <div class="text-gray-100 fw-bolder fs-2 mb-2 mt-5">{{ $users->count() }}</div>
                        <div class="fw-bold text-gray-100">{{ trans('backend.total_users') }}</div>
                    </div>
                </a>
            </div>
            <div class="col-xl-3">
                <a href="#" class="card bg-danger hoverable card-xl-stretch mb-xl-8">
                    <div class="card-body">
                        <div class="text-gray-100 fw-bolder fs-2 mb-2 mt-5">{{ $productCategories->count() }}</div>
                        <div class="fw-bold text-gray-100">{{ trans('backend.total_product_categories') }}</div>
                    </div>
                </a>
            </div>

            <div class="col-xl-3">
                <a href="#" class="card bg-success hoverable card-xl-stretch mb-xl-8">
                    <div class="card-body">
                        <div class="text-gray-100 fw-bolder fs-2 mb-2 mt-5">{{ $facilities->count() }}</div>
                        <div class="fw-bold text-gray-100">{{ trans('backend.total_facilities') }}</div>
                    </div>
                </a>
            </div>
            <div class="col-xl-3">
                <a href="#" class="card bg-dark hoverable card-xl-stretch mb-xl-8">
                    <div class="card-body">
                        <div class="text-gray-100 fw-bolder fs-2 mb-2 mt-5">{{ $products->count() }}</div>
                        <div class="fw-bold text-gray-100">{{ trans('backend.total_products') }}</div>
                    </div>
                </a>
            </div>


            <div class="col-xl-3">
                <a href="#" class="card bg-danger hoverable card-xl-stretch mb-xl-8">
                    <div class="card-body">
                        <div class="text-gray-100 fw-bolder fs-2 mb-2 mt-5">{{ $recipes->count() }}</div>
                        <div class="fw-bold text-gray-100">{{ trans('backend.total_recipes') }}</div>
                    </div>
                </a>
            </div>

            <div class="col-xl-3">
                <a href="#" class="card bg-warning hoverable card-xl-stretch mb-xl-8">
                    <div class="card-body">
                        <div class="text-gray-100 fw-bolder fs-2 mb-2 mt-5">{{ $sponsors->count() }}</div>
                        <div class="fw-bold text-gray-100">{{ trans('backend.total_sponsors') }}</div>
                    </div>
                </a>
            </div>

            <div class="col-xl-3">
                <a href="#" class="card bg-dark hoverable card-xl-stretch mb-xl-8">
                    <div class="card-body">
                        <div class="text-gray-100 fw-bolder fs-2 mb-2 mt-5">{{ $images->count() }}</div>
                        <div class="fw-bold text-gray-100">{{ trans('backend.total_images') }}</div>
                    </div>
                </a>
            </div>

            <div class="col-xl-3">
                <a href="#" class="card bg-success hoverable card-xl-stretch mb-xl-8">
                    <div class="card-body">
                        <div class="text-gray-100 fw-bolder fs-2 mb-2 mt-5">{{ $videos->count() }}</div>
                        <div class="fw-bold text-gray-100">{{ trans('backend.total_videos') }}</div>
                    </div>
                </a>
            </div>

        </div>
    </div>
@endsection
