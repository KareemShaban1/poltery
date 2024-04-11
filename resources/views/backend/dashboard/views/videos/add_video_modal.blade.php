<div class="modal fade" id="kt_add_modal_video" tabindex="-1" aria-hidden="true" style="direction: ltr">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-lg modal-dialog-centered mw-850px">
        <!--begin::Modal content-->
        <div class="modal-content rounded">
            <!--begin::Modal header-->
            <div class="modal-header pb-0 border-0 justify-content-end">
                <!--begin::Close-->
                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                    <span class="svg-icon svg-icon-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none">
                            <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1"
                                transform="rotate(-45 6 17.3137)" fill="black" />
                            <rect x="7.41422" y="6" width="16" height="2" rx="1"
                                transform="rotate(45 7.41422 6)" fill="black" />
                        </svg>
                    </span>
                    <!--end::Svg Icon-->
                </div>
                <!--end::Close-->
            </div>
            <!--begin::Modal header-->
            <!--begin::Modal body-->
            <div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">
                <!--begin:Form-->
                <form id="kt_modal_image_form" class="form" enctype="multipart/form-data"
                    action="{{ route('videos.store') }}" method="POST">
                    @csrf
                    <!--begin::Heading-->
                    <div class="mb-13 text-center">
                        <!--begin::Title-->
                        <h1 class="mb-3">{{ trans('backend.Add_Video') }}</h1>
                        <!--end::Title-->

                    </div>
                    <!--end::Heading-->

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

                    <div class="fv-row mb-7">
                        <label class="d-block fw-bold fs-6 mb-2">{{ trans('backend.Video') }}</label>
                        <input type="file" name="video" accept=".mp4, .mov, .avi, .wmv" />
                        <div class="form-text">{{ trans('backend.Allowed file types: mp4, mov, avi, wmv.') }}</div>
                    </div>


                    <div class="row">
                        <div class="d-flex flex-column mb-8 fv-row col-md-6">

                            <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                <span class="required">{{ trans('backend.Title') }}</span>

                            </label>

                            <input type="text" class="form-control form-control-solid" name="title" />
                        </div>

                        <div class="col-md-6">
                            <label class="form-label fs-6 fw-bold"> {{ trans('backend.Type') }}:</label>
                            <select class="form-select form-select-solid fw-bolder" name="type"
                                data-placeholder="Select Type" data-allow-clear="true" data-kt-user-table-filter="role"
                                data-hide-search="true">
                                <option value="home_video"> {{ trans('backend.Home_Video') }}</option>
                                <option value="about_video"> {{ trans('backend.About_Video') }}</option>
                                <option value="product_video"> {{ trans('backend.Product_Video') }}</option>
                                <option value="facility_video"> {{ trans('backend.Facility_Video') }}</option>
                                <option value="recipe_video"> {{ trans('backend.Recipe_Video') }}</option>
                                <option value="other"> {{ trans('backend.Other') }}</option>

                            </select>

                        </div>
                    </div>


                    <!--begin::Actions-->
                    <div class="text-center">
                        <button type="reset" id="kt_modal_image_cancel" data-bs-dismiss="modal"
                            class="btn btn-light me-3">{{ trans('backend.Cancel') }}</button>
                        <button type="submit" id="kt_modal_image_submit" class="btn btn-primary">
                            <span class="indicator-label">{{ trans('backend.Submit') }}</span>
                            <span class="indicator-progress">Please wait...
                                <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                        </button>
                    </div>
                    <!--end::Actions-->
                </form>
                <!--end:Form-->
            </div>
            <!--end::Modal body-->
        </div>
        <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
</div>
