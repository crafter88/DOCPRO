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
                {'data': 'co_seq'}, {'data': 'co_class'}, {'data': 'co_name'}, {'data': 'co_ind_name'}, {'data': 'co_address'}, {'data': 'co_tin'},],
            columnDefs: [{targets: 0, width: '80px'}, {targets: 1, width: '1px'}, {targets: [2], width: '110px'}, {targets: [4], width: '110px'}, {targets: [5], width: '310px'}, {targets: [6], width: '50px'}],
        });

       $('div').on('click', '.close-popover', function(){

             $('.popover').popover('hide');
       });
        
        $('#add').click(function(){
            $(this).popover({
                animation: true,
                html: true,
                placement: 'right',
                content: function(){
                    return $('#add-modal').html();
                },
                container:'.navbar-body'
            });

        });
        $('#company-table').on('click', '.view', function(){
            var data = table.row(this.closest('tr')).data();
            $('#view-sequence').attr('disabled', true);
            $('#view-sequence').val(data.co_seq);
            $('#view-class').attr('disabled', true);
            $('#view-class').val(data.co_class);
            $('#view-company').attr('disabled', true);
            $('#view-company').val(data.co_name);
            $('#view-individual').attr('disabled', true);
            $('#view-individual').val(data.co_ind_name);
            $('#view-address').attr('disabled', true);
            $('#view-address').val(data.co_address);
            $('#view-tin').attr('disabled', true);
            $('#view-tin').val(data.co_tin);
            $(this).popover({
                animation: true,
                html: true,
                placement: 'right',
                content: function(){
                    return $('#view-modal').html();
                },
                container:'.navbar-body'
            });
        });
        $('#company-table').on('click', '.edit', function(){
            var data = table.row(this.closest('tr')).data();
            $('#edit-sequence').attr('disabled', true);
            $('#edit-sequence').val(data.co_seq);
            $('#edit-class').val(data.co_class);
            $('#edit-company').val(data.co_name);
            $('#edit-individual').val(data.co_ind_name);
            $('#edit-address').val(data.co_address);
            $('#edit-tin').val(data.co_tin);
            $('#edit-id').val(data.co_id);
             $(this).popover({
                animation: true,
                html: true,
                placement: 'right',
                content: function(){
                    return $('#edit-modal').html();
                },
                container:'.navbar-body'
            });
        });
        $('#company-table').on('click', '.update', function(){
            var data = table.row(this.closest('tr')).data();
            $('#update-sequence').attr('disabled', true);
            $('#update-sequence').val(data.co_seq);
            $('#update-class').val(data.co_class);
            $('#update-company').val(data.co_name);
            $('#update-individual').val(data.co_ind_name);
            $('#update-address').val(data.co_address);
            $('#update-tin').val(data.co_tin);
            $('#update-id').val(data.co_id);
            $(this).popover({
                animation: true,
                html: true,
                placement: 'right',
                content: function(){
                    return $('#update-modal').html();
                },
                container:'.navbar-body'
            });
        });		
       $('div').on('click', '.select-option', function(){
                $("input[name='classification']").val($(this)[0].textContent);
        });

        $('div').on('click', '.select-option', function(){
                $("input[name='editclassification']").val($(this)[0].textContent);
        });

        $('div').on('click', '.select-option', function(){
                $("input[name='updateclassification']").val($(this)[0].textContent);
        }); 


        $('.navbar-body').on('click', '.classification-btn', function(){
            $('#add-options').html($('#co-class-select').html());
            
        });

        $("input:not(input[name='journals']), select").focus(function(){
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