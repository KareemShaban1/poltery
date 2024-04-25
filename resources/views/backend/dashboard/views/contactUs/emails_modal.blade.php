<div class="modal fade" id="kt_modal_emails{{ $contact->id }}" tabindex="-1" aria-hidden="true" style="direction: ltr">
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
                <h5>Emails Details</h5>

                <div
                    style="display: flex;     
                flex-direction: column;
                align-items: flex-start;">
                    <div><strong>Name:</strong> {{ $contact->name }}</div>
                    <div><strong>Email:</strong> {{ $contact->email }}</div>
                    <div><strong>Number:</strong> {{ $contact->number }}</div>
                    <div><strong>Message:</strong> {{ $contact->message }}</div>
                    <div><strong>Time:</strong> {{ $contact->created_at->format('Y-m-d H:i:s') }}</div>
                </div>

            </div>
            <!--end::Modal body-->
        </div>
        <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
</div>
