<script>
    $(document).ready(function(){
        var table = $('#taxes-table').DataTable({
            ajax: '/docpro_settings/taxes/get',
            columns:[{
                mData: null, bSortable: false,
                mRender: function(data, type, full){
                    return "<button type='button' class='btn btn-primary btn-xs view' data-hint='View'><i class='fa fa-eye'></i></button>\n\
                            <button type='button' class='btn btn-success btn-xs edit' data-hint='Edit'><i class='fa fa-pencil'></i></button>\n\
                            <button type='button' class='btn btn-warning btn-xs update' data-hint='Update'><i class='fa fa-refresh'></i></button>";
                }
            },
            {'data': 't_id'}, {'data': 't_code'}, {'data': 't_type'}, {'data': 't_name'}, {'data': 't_shortname'}, {'data': 't_rate'}, {'data': 't_base'},],
            columnDefs: [{targets: 0, width: '60px'}, {targets: 1, width: '1px'}, {targets: 2, width: '50px'}, {targets: 3, width: '50px'}, {targets: 5, width: '50px'}, {targets: 6, width: '50px'}, {targets: 7, width: '50px'}],
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
        $('#taxes-table').on('click', '.view', function(){
            var data = table.row(this.closest('tr')).data();
            $('#view-seq').val(data.t_id);
            $('#view-code').val(data.t_code);
            $('#view-type').val(data.t_type);
            $('#view-name').val(data.t_name);
            $('#view-shortname').val(data.t_shortname);
            $('#view-rate').val(data.t_rate);
            $('#view-base').val(data.t_base);
            $(this).popover({
                animation: true,
                html: true,
                placement: 'right',
                content: function(){
                    return $('#view-popover').html();
                },
                container: '.navbar-body'
            });
        });
        $('#taxes-table').on('click', '.edit', function(){
            var data = table.row(this.closest('tr')).data();
            $('#edit-seq').val(data.t_id);
            $('#edit-type').val(data.t_type);
            $('#edit-name').val(data.t_name);
            $('#edit-shortname').val(data.t_shortname);
            $('#edit-rate').val(data.t_rate);
            $('#edit-base').val(data.t_base);
            $('#edit-id').val(data.t_id);
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
        $('#taxes-table').on('click', '.update', function(){
            var data = table.row(this.closest('tr')).data();
            $('#update-seq').val(data.t_id);
            $('#update-type').val(data.t_type);
            $('#update-name').val(data.t_name);
            $('#update-shortname').val(data.t_shortname);
            $('#update-rate').val(data.t_rate);
            $('#update-base').val(data.t_base);
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
            $('#add-options').html($('#t-type-select').html());
        });
        $('.navbar-body').on('click', '.edit-type-btn', function(){
            $('#edit-options').html($('#t-type-select').html());
        });
        $('.navbar-body').on('click', '.update-type-btn', function(){
            $('#update-options').html($('#t-type-select').html());
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