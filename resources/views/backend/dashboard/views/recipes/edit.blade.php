@extends('backend.dashboard.layouts.master')

@section('title')
    {{ trans('backend.Edit_Recipe') }}
@endsection

@section('page-header')
    <!-- breadcrumb -->
    <div class="page-title">
        <div class="row">
            <div class="col-sm-6">
                <h4 class="mb-0">{{ trans('backend.Edit_Recipe') }}</h4>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                    <li class="breadcrumb-item"><a href="#" class="default-color">{{ trans('backend.Edit_Recipe') }}</a>
                    </li>
                    <li class="breadcrumb-item active">{{ trans('backend.Edit_Recipe') }}</li>
                </ol>
            </div>
        </div>
    </div>
    <!-- breadcrumb -->
@endsection
@section('content')
    <!-- row -->
    <div class="row">
        <div class="col-md-12 mb-30">
            <div class="card card-statistics h-100">
                <div class="card-body">
                    <form method="post" enctype="multipart/form-data" action="{{ Route('recipes.update', $recipe->id) }}"
                        autocomplete="off">
                        @method('PUT')
                        @csrf

                        <div class="mb-13 text-center">

                            <h1 class="mb-3">{{ trans('backend.Edit_Recipe') }}</h1>

                        </div>

                        <div class="fv-row mb-7">
                            <!--begin::Label-->
                            <label class="d-block fw-bold fs-6 mb-5">{{ trans('backend.Image') }}</label>
                            <!--end::Label-->
                            <!--begin::Image input-->
                            <div class="image-input image-input-outline" data-kt-image-input="true"
                                style="background-image: url(assets/media/avatars/blank.png)">
                                <!--begin::Preview existing avatar-->
                                <div class="image-input-wrapper w-125px h-125px"
                                    style="background-image: url(assets/media/avatars/150-1.jpg);"></div>
                                <!--end::Preview existing avatar-->
                                <!--begin::Label-->
                                <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                    data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change avatar">
                                    <i class="bi bi-pencil-fill fs-7"></i>
                                    <!--begin::Inputs-->
                                    <input type="file" name="image" accept=".png, .jpg, .jpeg" />
                                    <input type="hidden" name="avatar_remove" />
                                    <!--end::Inputs-->
                                </label>
                                <!--end::Label-->
                                <!--begin::Cancel-->
                                <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                    data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel avatar">
                                    <i class="bi bi-x fs-2"></i>
                                </span>
                                <!--end::Cancel-->
                                <!--begin::Remove-->
                                <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                    data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Remove avatar">
                                    <i class="bi bi-x fs-2"></i>
                                </span>
                                <!--end::Remove-->
                            </div>
                            <!--end::Image input-->
                            <!--begin::Hint-->
                            <div class="form-text">Allowed file types: png, jpg, jpeg.</div>
                            <!--end::Hint-->
                        </div>

                        <div class="row">

                            <div class="d-flex flex-column mb-8 fv-row col-md-6">

                                <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                    <span class="required">{{ trans('backend.Title_En') }}</span>
                                    <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                        title="Specify a recipe english title"></i>
                                </label>

                                <input type="text" class="form-control form-control-solid"
                                    value="{{ $recipe->title_en }}" placeholder="Enter English Title" name="title_en" />
                            </div>

                            <div class="d-flex flex-column mb-8 fv-row col-md-6">

                                <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                    <span class="required">{{ trans('backend.Title_Ar') }}</span>
                                    <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                        title="Specify a recipe arabic title "></i>
                                </label>

                                <input type="text" class="form-control form-control-solid"
                                    value="{{ $recipe->title_ar }}" placeholder="Enter Arabic Title" name="title_ar" />
                            </div>
                        </div>


                        {{-- <div class="row">

                            <div class="d-flex flex-column mb-8 fv-row col-md-6">

                                <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                    <span class="required">{{ trans('backend.Type_En') }}</span>
                                    <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                        title="Specify a recipe english type"></i>
                                </label>

                                <input type="text" class="form-control form-control-solid"
                                    value="{{ $recipe->type_en }}" placeholder="Enter English Type" name="type_en" />
                            </div>

                            <div class="d-flex flex-column mb-8 fv-row col-md-6">

                                <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                    <span class="required">{{ trans('backend.Type_Ar') }}</span>
                                    <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                        title="Specify a recipe arabic type "></i>
                                </label>

                                <input type="text" class="form-control form-control-solid"
                                    value="{{ $recipe->type_ar }}" placeholder="Enter Arabic Type" name="type_ar" />
                            </div>
                        </div> --}}

                        <div class="mb-10">
                            <label
                                class="d-flex form-label fs-6 fw-bold text-label">{{ trans('backend.Recipe_Types') }}</label>
                            <select class="form-select form-select-solid fw-bolder" name="recipe_type_id"
                                data-placeholder="Select Recipe Types" data-allow-clear="true"
                                data-kt-user-table-filter="role" data-hide-search="true">
                                @foreach ($recipeTypes as $recipeType)
                                    <option value="{{ $recipeType->id }}" @selected($recipeType->id == $recipe->recipe_type_id)>
                                        {{ $recipeType->name }}</option>
                                @endforeach

                            </select>
                        </div>

                        <div class="d-flex flex-column mb-8 fv-row" style="direction: ltr">

                            <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                <span class="required">{{ trans('backend.Description_En') }}</span>

                            </label>

                            <textarea class="summernote" name="description_en">
                                {{ $recipe->description_en }}
                            </textarea>

                        </div>

                        <div class="d-flex flex-column mb-8 fv-row">

                            <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                <span>{{ trans('backend.Description_Ar') }}</span>

                            </label>

                            <textarea class="summernote" name="description_ar">
                                {{ $recipe->description_ar }}
                            </textarea>

                        </div>

                        <div class="d-flex flex-column mb-8 fv-row" style="direction: ltr">

                            <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                <span class="required">{{ trans('backend.Ingredients_En') }}</span>

                            </label>

                            <textarea class="summernote" name="ingredients_en">
                               {{ $recipe->ingredients_en }}
                            </textarea>

                        </div>

                        <div class="d-flex flex-column mb-8 fv-row">

                            <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                <span>{{ trans('backend.Ingredients_Ar') }}</span>

                            </label>

                            <textarea class="summernote" style="direction: rtl" name="ingredients_ar">
                                {{ $recipe->ingredients_ar }}
                            </textarea>

                        </div>



                        <div class="d-flex flex-column mb-8 fv-row" style="direction: ltr">

                            <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                <span class="required">{{ trans('backend.Preparation_En') }}</span>

                            </label>

                            <textarea class="summernote" name="preparation_en">
                                {{ $recipe->preparation_en }}
                            </textarea>

                        </div>

                        <div class="d-flex flex-column mb-8 fv-row">

                            <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                <span>{{ trans('backend.Preparation_Ar') }}</span>

                            </label>

                            <textarea class="summernote" style="direction: rtl" name="preparation_ar">
                                {{ $recipe->preparation_ar }}</textarea>

                        </div>

                        <button type="submit" class="btn btn-success btn-md nextBtn btn-lg ">تعديل</button>


                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- row closed -->
@endsection
