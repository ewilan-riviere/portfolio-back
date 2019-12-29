@if ($crud->hasAccess('delete'))
    <a href="javascript:void(0)" onclick="deleteEntry(this)" data-route="{{ url($crud->route.'/'.$entry->getKey()) }}" class="btn btn-danger" data-button-type="delete"><i class="fa fa-trash"></i> {{ trans('backpack::crud.delete') }}</a>
@endif

<script src="{{ asset('js/admin/sweetalert2.js') }}"></script>
<script>
    if (typeof deleteEntry != 'function') {
        // $("[data-button-type=delete]").unbind('click');

        function deleteEntry(button) {
            // ask for confirmation before deleting an item
            // e.preventDefault();
            var button = $(button);
            var route = button.attr('data-route');
            var row = $("#crudTable a[data-route='"+route+"']").closest('tr');

            swal({
                title: '{{ trans('backpack::crud.delete_confirm') }}',
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Oui',
                cancelButtonText: 'Annuler'
            }).then((result) => {
                if (result.value) {
                    $.ajax({
                        url: route,
                        type: 'DELETE',
                        success: function(result) {
                            // Show an alert with the result
                            new PNotify({
                                title: "{{ trans('backpack::crud.delete_confirmation_title') }}",
                                text: "{{ trans('backpack::crud.delete_confirmation_message') }}",
                                type: "success"
                            });

                            // Hide the modal, if any
                            $('.modal').modal('hide');

                            // Remove the details row, if it is open
                            if (row.hasClass("shown")) {
                                row.next().remove();
                            }

                            // Remove the row from the datatable
                            row.remove();
                        },
                        error: function(result) {
                            // Show an alert with the result
                            new PNotify({
                                title: "{{ trans('backpack::crud.delete_confirmation_not_title') }}",
                                text: "{{ trans('backpack::crud.delete_confirmation_not_message') }}",
                                type: "warning"
                            });
                        }
                    });
                } else if(result.dismiss === swal.DismissReason.cancel) {
                    new PNotify({
                        title: "{{ trans('backpack::crud.delete_confirmation_not_deleted_title') }}",
                        text: "{{ trans('backpack::crud.delete_confirmation_not_deleted_message') }}",
                        type: "info"
                    });
                }
            })
        }
    }

    // make it so that the function above is run after each DataTable draw event
    // crud.addFunctionToDataTablesDrawEventQueue('deleteEntry');
</script>
