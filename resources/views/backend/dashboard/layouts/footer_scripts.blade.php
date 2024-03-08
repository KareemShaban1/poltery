<script>
    var hostUrl = "assets";
</script>
<!--begin::Javascript-->
<!--begin::Global Javascript Bundle(used by all pages)-->
<script src="{{ asset('backend/plugins/global/plugins.bundle.js') }}"></script>
<script src="{{ asset('backend/js/scripts.bundle.js') }}"></script>
<!--end::Global Javascript Bundle-->
<!--begin::Page Vendors Javascript(used by this page)-->
<script src="{{ asset('backend/plugins/custom/fullcalendar/fullcalendar.bundle.js') }}"></script>
<!--end::Page Vendors Javascript-->
<!--begin::Page Custom Javascript(used by this page)-->
<script src="{{ asset('backend/js/custom/widgets.js') }}"></script>
<script src="{{ asset('backend/js/custom/apps/chat/chat.js') }}"></script>
<script src="{{ asset('backend/js/custom/modals/create-app.js') }}"></script>
<script src="{{ asset('backend/js/custom/modals/upgrade-plan.js') }}"></script>


<script src="{{ asset('backend/js/summernote-lite.min.js') }}" defer></script>
<script src="{{ asset('backend/datatables/datatables.min.js') }}"></script>
<script src="{{ asset('backend/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('backend/jquery-ui/jquery-ui.min.js') }}"></script>
<script src="{{ asset('backend/datatables/export-tables/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('backend/datatables/export-tables/buttons.flash.min.js') }}" defer></script>
<script src="{{ asset('backend/datatables/export-tables/jszip.min.js') }}"></script>
<script src="{{ asset('backend/datatables/export-tables/pdfmake.min.js') }}" defer></script>
<script src="{{ asset('backend/datatables/export-tables/vfs_fonts.js') }}" defer></script>
<script src="{{ asset('backend/datatables/export-tables/buttons.print.min.js') }}" defer></script>


@stack('scripts')
