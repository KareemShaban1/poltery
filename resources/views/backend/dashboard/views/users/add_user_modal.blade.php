<div class="modal fade" id="kt_modal_new_user" tabindex="-1" aria-hidden="true" style="direction: ltr">
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
                </div>
            </div>
            <div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">
                <form id="kt_modal_new_user_form" class="form" enctype="multipart/form-data"
                    action="{{ route('users.store') }}" method="POST">
                    @csrf
                    <div class="mb-13 text-center">
                        <h1 class="mb-3">Add New user</h1>

                    </div>


                    <div class="d-flex flex-column mb-8 fv-row">

                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">Name</span>
                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                title="Specify a user name"></i>
                        </label>

                        <input type="text" class="form-control form-control-solid" placeholder="Enter User Name"
                            name="name" />
                    </div>

                    <div class="d-flex flex-column mb-8 fv-row ">

                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">Email</span>
                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                title="Specify a user email "></i>
                        </label>

                        <input type="email" class="form-control form-control-solid" placeholder="Enter User Email"
                            name="email" />
                    </div>


                    <div class="d-flex flex-column mb-8 fv-row">

                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">Password</span>
                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                title="Specify a user password"></i>
                        </label>

                        <input type="password" class="form-control form-control-solid" placeholder="Enter User Password"
                            name="password" />
                    </div>



                    <!--begin::Actions-->
                    <div class="text-center">
                        <button type="reset" id="kt_modal_new_user_cancel" class="btn btn-light me-3"
                            data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" id="kt_modal_new_user_submit" class="btn btn-primary">
                            <span class="indicator-label">Submit</span>
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
@push('scripts')
    <script>
        $(document).ready(function() {
            $('.summernote').summernote();
        });
    </script>
@endpush
