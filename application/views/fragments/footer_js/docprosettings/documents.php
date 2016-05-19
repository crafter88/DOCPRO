<script>
    $(document).ready(function(){
        $('#documents-table').DataTable({
            ajax: '/docpro_settings/documents/get',
            columns:[{
                mData: null, bSortable: false,
                mRender: function(data, type, full){
                    return "<button type='button' class='btn btn-primary btn-xs view' data-hint='View'><i class='fa fa-eye'></i></button>\n\
                            <button type='button' class='btn btn-success btn-xs edit' data-hint='Edit'><i class='fa fa-pencil'></i></button>\n\
                            <button type='button' class='btn btn-warning btn-xs update' data-hint='Update'><i class='fa fa-refresh'></i></button>";
                }
            },
            {'data': 'd_id'}, {'data': 'd_code'}, {'data': 'd_class'}, {'data': 'd_name'}, {'data': 'd_shortname'}, {'data': 'd_journal_name'},],
            columnDefs: [{targets: 0, width: '60px'}, {targets: 1, width: '1px'}],
        });
        $('#add').click(function(){
            $(this).popover({
                animation: true,
                html: true,
                placement: 'right',
                content: function(){
                    return $('#add-popover').html();
                },
                container: '.navbar-body'
            });
        });
        $('div').on('click', '.close-popover', function(){
            $('.popover').popover('hide');
        });
        $('div').on('click', '.select-option', function(){
                $("input[name='add-journal-name']").val($(this)[0].textContent);
        });
        $('.navbar-body').on('click', '.add-journal-name-btn', function(){
            $('#add-options').html($('#d-journal-name-select').html());
        });
        initButtonPrevention();
    });
    var initButtonPrevention = function(){
        jQuery.fn.preventDoubleSubmission = function(){
            if($(this)[0].checkValidity()){
                $(this).on('submit',function(e){
                    var $form = $(this);
                    if ($form.data('submitted') === true){
                        e.preventDefault();
                    }else{
                        $form.data('submitted', true);
                    }
                });
                return this;
            }
        };	
        $('form').preventDoubleSubmission();
    }
</script>