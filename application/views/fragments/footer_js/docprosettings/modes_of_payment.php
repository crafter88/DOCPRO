<script>
    $(document).ready(function(){
        var table = $('#modes-of-payment-table').DataTable({
            ajax: '/docpro_settings/modes_of_payment/get',
            columns:[{
                mData: null, bSortable: false,
                mRender: function(data, type, full){
                    return "<button type='button' class='btn btn-primary btn-xs view' data-hint='View'><i class='fa fa-eye'></i></button>\n\
                            <button type='button' class='btn btn-success btn-xs edit' data-hint='Edit'><i class='fa fa-pencil'></i></button>\n\
                            <button type='button' class='btn btn-warning btn-xs update' data-hint='Update'><i class='fa fa-refresh'></i></button>";
                }
            },
            {'data': 'mop_id'}, {'data': 'mop_code'}, {'data': 'mop_name'}, {'data': 'mop_shortname'}, {'data': 'mop_type'},],
            columnDefs: [{targets: 0, width: '60px'}, {targets: 1, width: '1px'}, {targets: 2, width: '150px'}, {targets: 4, width: '150px'}, {targets: 5, width: '150px'}],
        });

        $('div').on('click', '.close-popover', function(){

             $('.popover').popover('hide');
        });

        $('div').on('click', '#close-btn', function(){

             $('.popover').popover('hide');
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
        $('#modes-of-payment-table').on('click', '.view', function(){
            var data = table.row(this.closest('tr')).data();
            $('#view-seq').val(data.mop_id);
            $('#view-code').val(data.mop_code);
            $('#view-name').val(data.mop_name);
            $('#view-shortname').val(data.mop_shortname);
            $('#view-type').val(data.mop_type);
            $(this).popover({
                animation: true,
                html: true,
                placement: function(context,src){
                    $(context).addClass('view-popover-css');
                    return 'right';
                },
                content: function(){
                    return $('#view-popover').html();
                },
                container:'.navbar-body'
            });
        });
        $('#modes-of-payment-table').on('click', '.edit', function(){
            var data = table.row(this.closest('tr')).data();
            $('#edit-seq').val(data.mop_id);
            $('#edit-code').val(data.mop_code);
            $('#edit-name').val(data.mop_name);
            $('#edit-shortname').val(data.mop_shortname);
            $('#edit-type').val(data.mop_type);
            $('#edit-id').val(data.mop_id);
            $('#edit-type-id').val(data.top_id);
            $(this).popover({
                animation: true,
                html: true,
                placement: 'right',
                content: function(){
                    return $('#edit-popover').html();
                },
                container: '.navbar-body'
            });
        });
        $('#modes-of-payment-table').on('click', '.update', function(){
            var data = table.row(this.closest('tr')).data();
            $('#update-seq').val(data.mop_id);
            $('#update-code').val(data.mop_code);
            $('#update-name').val(data.mop_name);
            $('#update-shortname').val(data.mop_shortname);
            $('#update-type').val(data.mop_type);
            $('#update-type-id').val(data.top_id);
            $(this).popover({
                animation: true,
                html: true,
                placement: 'right',
                content: function(){
                    return $('#update-popover').html();
                },
                container: '.navbar-body'
            });
        });
        $('div').on('click', '.close-popover', function(){
            $('.popover').popover('hide');
        });
        $('div').on('click', '.select-option', function(){
            $("input[name='add-type']").val($(this)[0].textContent);
            $("input[name='add-type-id']").val($(this).attr('type-id'));
        });
        $('div').on('click', '.select-option', function(){
            $("input[name='edit-type']").val($(this)[0].textContent);
            $("input[name='edit-type-id']").val($(this).attr('type-id'));
        });
        $('div').on('click', '.select-option', function(){
            $("input[name='update-type']").val($(this)[0].textContent);
            $("input[name='update-type-id']").val($(this).attr('type-id'));
        });
        $('.navbar-body').on('click', '.add-type-btn', function(){
            $('#add-options').html($('#mop-type-select').html());
        });
        $('.navbar-body').on('click', '.edit-type-btn', function(){
            $('#edit-options').html($('#mop-type-select').html());
        });
        $('.navbar-body').on('click', '.update-type-btn', function(){
            $('#update-options').html($('#mop-type-select').html());
        });

        $('.navbar-body').on('click', '.form-control', function(){
            $('#add-options').empty();
        });
        $('.navbar-body').on('click', '.form-control', function(){
            $('#edit-options').empty();
        });

        $('.navbar-body').on('click', '.form-control', function(){
            $('#update-options').empty();
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