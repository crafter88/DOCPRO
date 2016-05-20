<script>
    $(document).ready(function(){
        var table = $('#users-table').DataTable({
            ajax: '/docpro_settings/users/get',
            columns: [{
                mData: null, bSortable: false,
                mRender: function(data, type, full){
                   return "<button type='button' class='btn btn-primary btn-xs view' data-hint='View'><i class='fa fa-eye'></i></button>\n\
                           <button type='button' class='btn btn-success btn-xs edit' data-hint='Edit'><i class='fa fa-pencil'></i></button>";
                }
            },
                {'data': 'u_id'}, {'data': 'u_code'},
                {
                mRender: function(data, type, full){
                   return full.p_fname+" "+full.p_mname+" "+full.p_lname;
                }
            },
            {'data': 'u_name'}, {'data': 'u_pass_text'}, {'data': 'cb_name'}, {'data': 'u_type'},],
            columnDefs: [{targets: 0, width: '1px'}, {targets: 1, width: '1px'},{targets: 2, width: '1px'}] ,
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
        $('#users-table').on('click', '.view', function(){
            var data = table.row(this.closest('tr')).data();
            $('#view-seq').val(data.u_id);
            $('#view-username').val(data.u_name);
            $('#view-password').val(data.u_pass_text);
            $('#view-company').val(data.cb_name);
            $('#view-user-type').val(data.u_type);
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
        $('#users-table').on('click', '.edit', function(){
            var data = table.row(this.closest('tr')).data();
            $('#edit-fname').val(data.p_fname);
            $('#edit-mname').val(data.p_mname);
            $('#edit-lname').val(data.p_lname);
            $('#edit-address').val(data.p_address);
            $('#edit-cno').val(data.p_cno);
            $('#edit-email').val(data.p_email);
            $('#edit-uname').val(data.u_name);
            $('#edit-company').val(data.cb_name);
            $('#edit-utype').val(data.u_type);
            $('#p-id').val(data.p_id);
            $('#u-id').val(data.u_id);
            $('#cb-id').val(data.cb_id);
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
        $('div').on('click', '.close-popover', function(){
            $('.popover').popover('hide');
        });
        $('div').on('click', '.select-option-company', function(){
            $("input[name='add-company']").val($(this)[0].textContent);
            $("input[name='add-cb-id']").val($(this).attr('cb-id'));
        });
        $('div').on('click', '.select-option-user-type', function(){
            $("input[name='add-user-type']").val($(this)[0].textContent);
        });
        $('.navbar-body').on('click', '.add-company-btn', function(){
            $('#add-options').html($('#u-company-select').html());
        });
        $('.navbar-body').on('click', '.add-user-type-btn', function(){
            $('#add-options').html($('#u-user-type-select').html());
        });
        $("input:not(input[name='add-company']), select").focus(function(){
            $('.popover').hide();
        });
        $("input:not(input[name='add-user-type']), select").focus(function(){
            $('.popover').hide();
        });
        $("input:not(input[name='edit-company']), select").focus(function(){
            $('.popover').hide();
        });
        $("input:not(input[name='edit-user-type']), select").focus(function(){
            $('.popover').hide();
        });
        initButtonPrevention();
    });
    var initButtonPrevention = function(){
        jQuery.fn.preventDoubleSubmission = function(){
            if($(this)[0].checkValidity()){
                $(this).on('submit',function(e){
                    var $form = $(this);
                    if($form.data('submitted') === true){
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