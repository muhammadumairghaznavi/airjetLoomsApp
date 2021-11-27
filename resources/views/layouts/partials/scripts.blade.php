<script src="{{ asset('js/app.js') }}"></script>

<script src="{{ asset('/vendors/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
<script src="{{ asset('/vendors/tinymce/tinymce.min.js') }}"></script>
<script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>

<script src="//code.jquery.com/jquery.js"></script>

<script src="{{ asset('/js/bootstrap.bundle.min.js') }}"></script>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>



<script>
    $(function() {
        $('select').selectpicker();
    });
</script>
@livewireScripts
<script src="{{ asset('js/zoom.js') }}"></script>
<script src="{{ asset('/js/main.js') }}"></script>
<script src="{{ asset('js/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset('js/datatable-html5.min.js') }}"></script>
<script src="{{ asset('js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('js/datatables.min.js') }}"></script>
<script src="{{ asset('js/buttons.html5.min.js') }}"></script>
<script src="{{ asset('js/buttons.print.min.js') }}"></script>
<script src="{{ asset('js/buttons.colVis.min.js') }}"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.js"></script>
<script src="{{ asset('js/choices.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>

<!-- Latest compiled and minified JavaScript -->



<script type="text/javascript">
    $('.show_confirm').click(function(event) {
        var form = $(this).closest("form");
        var name = $(this).data("name");
        event.preventDefault();
        swal({
                title: `Are you sure you want to delete this record?`,
                text: "If you delete this, it will be gone forever.",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    form.submit();
                }
            });
    });
</script>


<script>
    // $('#fromDate').prop('disabled', true);
    // $('#toDate').prop('disabled', true);
    $('#byPeriod').change(
        function() {
            if ($(this).is(':checked')) {
                console.log('salam');
                $('#month').val('');
                $('#year').val('');
                $('#month').prop('disabled', true);
                $('#year').prop('disabled', true);
                $('#fromDate').prop({
                    'disabled': false,
                    "required": true
                });
                $('#toDate').prop({
                    'disabled': false,
                    "required": true
                });
            } else {
                $('#month').prop({'disabled': false, "required": true});
                $('#year').prop({'disabled': false, "required": true});
                $('#fromDate').prop('disabled', true);
                $('#toDate').prop('disabled', true);
            }
        });
</script>


{{ $script ?? '' }}
