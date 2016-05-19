<script>
    $(document).ready(function(){
        var table = $('#company-table').DataTable({
            ajax: '/docpro_settings/company/get',
            columns:[{
                mData: null, bSortable: false,
                mRender: function(data, type, full){
                    return "<button type='button' class='btn btn-primary btn-xs view' data-hint='View'><i class='fa fa-eye'></i></button>\n\
                            <button type='button' class='btn btn-success btn-xs edit' data-hint='Edit'><i class='fa fa-pencil'></i></button>\n\
                            <button type='button' class='btn btn-warning btn-xs update' data-hint='Update'><i class='fa fa-refresh'></i></button>";
                }
            },
            {'data': 'cb_id'}, {'data': 'cb_code'}, {'data': 'cb_class'}, {'data': 'cb_type'}, {'data': 'cb_name'}, {'data': 'cb_ind_name'}, {'data': 'cb_address'}, {'data': 'cb_tin'},{'data': 'cb_tax_type'},],
            columnDefs: [{targets: 0, width: '60px'}, {targets: 1, width: '1px'}, {targets: 2, width: '1px'}, {targets: 3, width: '120px'}, {targets: 4, width: '60px'}, {targets: 6, width: '101px'}, {targets: 8, width: '80px'}, {targets: 9, width: '55px'}],
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
        $('#company-table').on('click', '.view', function(){
            var data = table.row(this.closest('tr')).data();
            $('#view-seq').val(data.cb_id);
            $('#view-code').val(data.cb_code);
            $('#view-class').val(data.cb_class);
            $('#view-type').val(data.cb_type);
            $('#view-name').val(data.cb_name);
            $('#view-ind-name').val(data.cb_ind_name);
            $('#view-address').val(data.cb_address);
            $('#view-tin').val(data.cb_tin);
            $('#view-tax-type').val(data.cb_tax_type);
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
        $('#company-table').on('click', '.edit', function(){
            var data = table.row(this.closest('tr')).data();
            $('#edit-seq').val(data.cb_id);
            $('#edit-code').val(data.cb_code);
            $('#edit-class').val(data.cb_class);
            $('#edit-type').val(data.cb_type);
            $('#edit-name').val(data.cb_name);
            $('#edit-ind-name').val(data.cb_ind_name);
            $('#edit-address').val(data.cb_address);
            $('#edit-tin').val(data.cb_tin);
            $('#edit-tax-type').val(data.cb_tax_type);
            $('#edit-id').val(data.cb_id);
            $('#edit-class-id').val(data.bpc_id);
            $('#edit-type-id').val(data.bpt_id);
            $('#edit-tax-type-id').val(data.tt_id);
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
        $('#company-table').on('click', '.update', function(){
            var data = table.row(this.closest('tr')).data();
            $('#update-seq').val(data.cb_id);
            $('#update-code').val(data.cb_code);
            $('#update-class').val(data.cb_class);
            $('#update-type').val(data.cb_type);
            $('#update-name').val(data.cb_name);
            $('#update-ind-name').val(data.cb_ind_name);
            $('#update-address').val(data.cb_address);
            $('#update-tin').val(data.cb_tin);
            $('#update-tax-type').val(data.cb_tax_type);
            $('#update-class-id').val(data.bpc_id);
            $('#update-type-id').val(data.bpt_id);
            $('#update-tax-type-id').val(data.tt_id);
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
        $('div').on('click', '.select-option-class', function(){
            $("input[name='add-class']").attr('readonly', true);
            $("input[name='add-class']").val($(this)[0].textContent);
            $("input[name='add-class-id']").val($(this).attr('class-id'));
        });
        $('div').on('click', '.select-option-class-others', function(){
            $("input[name='add-class']").removeAttr('readonly');
            $("input[name='add-class']").val($(this)[0].textContent);
            $("input[name='add-class-id']").val($(this).attr('class-id'));
        });
        $('div').on('click', '.select-option-type', function(){
            $("input[name='add-type']").val($(this)[0].textContent);
            $("input[name='add-type-id']").val($(this).attr('type-id'));
        });
        $('div').on('click', '.select-option-tax-type', function(){
            $("input[name='add-tax-type']").val($(this)[0].textContent);
            $("input[name='add-tax-type-id']").val($(this).attr('tax-type-id'));
        });
        $('div').on('click', '.select-option-class', function(){
            $("input[name='edit-class']").attr('readonly', true);
            $("input[name='edit-class']").val($(this)[0].textContent);
            $("input[name='edit-class-id']").val($(this).attr('class-id'));
        });
        $('div').on('click', '.select-option-class-others', function(){
            $("input[name='edit-class']").removeAttr('readonly');
            $("input[name='edit-class']").val($(this)[0].textContent);
            $("input[name='edit-class-id']").val($(this).attr('class-id'));
        });
        $('div').on('click', '.select-option-type', function(){
            $("input[name='edit-type']").val($(this)[0].textContent);
            $("input[name='edit-type-id']").val($(this).attr('type-id'));
        });
        $('div').on('click', '.select-option-tax-type', function(){
            $("input[name='edit-tax-type']").val($(this)[0].textContent);
            $("input[name='edit-tax-type-id']").val($(this).attr('tax-type-id'));
        });
        $('div').on('click', '.select-option-class', function(){
            $("input[name='update-class']").attr('readonly', true);
            $("input[name='update-class']").val($(this)[0].textContent);
            $("input[name='update-class-id']").val($(this).attr('class-id'));
        });
        $('div').on('click', '.select-option-class-others', function(){
            $("input[name='update-class']").removeAttr('readonly');
            $("input[name='update-class']").val($(this)[0].textContent);
            $("input[name='update-class-id']").val($(this).attr('class-id'));
        });
        $('div').on('click', '.select-option-type', function(){
            $("input[name='update-type']").val($(this)[0].textContent);
        });
        $('div').on('click', '.select-option-tax-type', function(){
            $("input[name='update-tax-type']").val($(this)[0].textContent);
        });
        $('.navbar-body').on('click', '.add-class-btn', function(){
            $('#add-options').html($('#cb-class-select').html());
        });
        $('.navbar-body').on('click', '.add-type-btn', function(){
            $('#add-options').html($('#cb-type-select').html());
        });
        $('.navbar-body').on('click', '.add-tax-type-btn', function(){
            $('#add-options').html($('#cb-tax-type-select').html());
        });
        $('.navbar-body').on('click', '.edit-class-btn', function(){
            $('#edit-options').html($('#cb-class-select').html());
        });
        $('.navbar-body').on('click', '.edit-type-btn', function(){
            $('#edit-options').html($('#cb-type-select').html());
        });
        $('.navbar-body').on('click', '.edit-tax-type-btn', function(){
            $('#edit-options').html($('#cb-tax-type-select').html());
        });
        $('.navbar-body').on('click', '.update-class-btn', function(){
            $('#update-options').html($('#cb-class-select').html());
        });
        $('.navbar-body').on('click', '.update-type-btn', function(){
            $('#update-options').html($('#cb-type-select').html());
        });
        $('.navbar-body').on('click', '.update-tax-type-btn', function(){
            $('#update-options').html($('#cb-tax-type-select').html());
        });
        $("input:not(input[name='add-class']), select").focus(function(){
            $('.popover').hide();
        });
        $("input:not(input[name='add-type']), select").focus(function(){
            $('.popover').hide();
        });
        $("input:not(input[name='add-tax-type']), select").focus(function(){
            $('.popover').hide();
        });
        $("input:not(input[name='edit-class']), select").focus(function(){
            $('.popover').hide();
        });
        $("input:not(input[name='edit-type']), select").focus(function(){
            $('.popover').hide();
        });
        $("input:not(input[name='edit-tax-type']), select").focus(function(){
            $('.popover').hide();
        });
        $("input:not(input[name='update-class']), select").focus(function(){
            $('.popover').hide();
        });
        $("input:not(input[name='update-type']), select").focus(function(){
            $('.popover').hide();
        });
        $("input:not(input[name='update-tax-type']), select").focus(function(){
            $('.popover').hide();
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