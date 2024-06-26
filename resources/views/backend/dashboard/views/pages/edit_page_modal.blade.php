<div class="modal fade" id="kt_modal_edit_page{{ $page->id }}" tabindex="-1" aria-hidden="true" style="direction: ltr">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-650px">
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
                <form id="kt_modal_new_page_form" class="form" enctype="multipart/form-data"
                    action="{{ route('pages.update', $page->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <!--begin::Heading-->
                    <div class="mb-13 text-center">
                        <!--begin::Title-->
                        <h1 class="mb-3">{{ trans('backend.Edit_Page') }}</h1>
                        <!--end::Title-->

                    </div>
                    <!--end::Heading-->

                    <div class="row">
                        <div class="fv-row mb-7 col-md-8">
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
                                <label
                                    class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                    data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change avatar">
                                    <i class="bi bi-pencil-fill fs-7"></i>
                                    <!--begin::Inputs-->
                                    <input type="file" name="image" accept=".png, .jpg, .jpeg" />
                                    <input type="hidden" name="avatar_remove" />
                                    <!--end::Inputs-->
                                </label>
                                <!--end::Label-->
                                <!--begin::Cancel-->
                                <span
                                    class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                    data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel avatar">
                                    <i class="bi bi-x fs-2"></i>
                                </span>
                                <!--end::Cancel-->
                                <!--begin::Remove-->
                                <span
                                    class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
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
                        <div class="d-flex flex-column mb-8 col-md-4">
                            <label class="form-check form-switch form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" name="active" value="1"
                                    {{ $page->active ? 'checked' : '' }} />

                                <span class="form-check-label fw-bold text-muted">{{ trans('backend.Active') }}</span>
                            </label>
                        </div>
                    </div>


                    <div class="d-flex flex-column mb-8 fv-row">

                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">{{ trans('backend.Title_En') }}</span>
                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                title="Specify a page english title"></i>
                        </label>

                        <input type="text" class="form-control form-control-solid" placeholder="Enter English Title"
                            name="title_en" value="{{ $page->title_en }}" />
                    </div>

                    <div class="d-flex flex-column mb-8 fv-row">

                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">{{ trans('backend.Title_Ar') }}</span>
                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                title="Specify a page arabic title "></i>
                        </label>

                        <input type="text" class="form-control form-control-solid" placeholder="Enter Arabic Tit;e"
                            name="title_ar" value="{{ $page->title_ar }}" />
                    </div>



                    <div class="d-flex flex-column mb-8 fv-row">

                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">{{ trans('backend.Content_En') }}</span>

                        </label>

                        <textarea class="summernote" name="content_en">
                            {{ $page->content_en }}
                        </textarea>

                    </div>

                    <div class="d-flex flex-column mb-8 fv-row">

                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">{{ trans('backend.Content_Ar') }}</span>

                        </label>

                        <textarea class="summernote" name="content_ar">
                            {{ $page->content_ar }}
                        </textarea>

                    </div>





                    <div class="text-center">
                        <button type="reset" id="kt_modal_new_page_cancel" data-bs-dismiss="modal"
                            class="btn btn-light me-3">{{ trans('backend.Cancel') }}</button>
                        <button type="submit" id="kt_modal_new_page_submit" class="btn btn-primary">
                            <span class="indicator-label">{{ trans('backend.Submit') }}</span>
                            <span class="indicator-progress">Please wait...
                                <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@push('scripts')
    <script>
        $(document).ready(function() {
            $('.summernote').summernote();
        });
    </script>
@endpush
