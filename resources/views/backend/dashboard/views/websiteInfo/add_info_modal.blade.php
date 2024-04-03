<div class="modal fade" id="kt_modal_new_info" tabindex="-1" aria-hidden="true" style="direction: ltr">
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
                <form method="post" enctype="multipart/form-data" action="{{ Route('info.store') }}"
                    autocomplete="off">

                    @csrf

                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="key">{{ trans('backend.Name') }} </label>
                            <input name="key" id="key" type="text" class="form-control" />
                            @error('key')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="d-flex flex-column mb-8 fv-row">

                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">{{ trans('backend.Value') }}</span>

                        </label>

                        <textarea class="summernote" name="value"></textarea>

                    </div>

                    <div class="col-md-6">
                        <label class="form-label fs-6 fw-bold">Type:</label>
                        <select class="form-select form-select-solid fw-bolder" name="type"
                            data-placeholder="Select Type" data-allow-clear="true" data-kt-user-table-filter="role"
                            data-hide-search="true">
                            <option value="home_content">Home Content</option>
                            <option value="about_content">About Content</option>
                            <option value="seo">Seo</option>
                            <option value="links">Links</option>
                            <option value="counts">Counts</option>
                            <option value="other">Other</option>

                        </select>

                    </div>
                    <div class="col-md-6">
                        <label class="form-label fs-6 fw-bold">Language:</label>
                        <select class="form-select form-select-solid fw-bolder" name="language"
                            data-placeholder="Select Language" data-allow-clear="true" data-kt-user-table-filter="role"
                            data-hide-search="true">
                            <option value="arabic">Arabic</option>
                            <option value="english">English</option>

                        </select>

                    </div>
                    <button type="submit" class="btn btn-success btn-md nextBtn btn-lg m-3">أضافة</button>


                </form>
            </div>
            <!--end::Modal body-->
        </div>
        <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
</div>
