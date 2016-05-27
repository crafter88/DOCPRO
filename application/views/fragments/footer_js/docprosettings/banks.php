<script>
    $(document).ready(function(){
        var table = $('#banks-table').DataTable({
            ajax: '/docpro_settings/banks/get',
            columns:[{
                mData: null, bSortable: false,
                mRender: function(data, type, full){
                    return "<button type='button' class='btn btn-primary btn-xs view' data-hint='View'><i class='fa fa-eye'></i></button>\n\
                            <button type='button' class='btn btn-success btn-xs edit' data-hint='Edit'><i class='fa fa-pencil'></i></button>\n\
                            <button type='button' class='btn btn-warning btn-xs update' data-hint='Update'><i class='fa fa-refresh'></i></button>";
                }
            }, 
            {'data': 'b_code'}, {'data': 'b_name'}, {'data': 'b_shortname'},],
            columnDefs: [{targets: 0, width: '60px'}, {targets: 1, width: '150px'}, {targets: 3, width: '200px'}],
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
        $('#banks-table').on('click', '.view', function(){
            var data = table.row(this.closest('tr')).data();
            $('#view-code').val(data.b_code);
            $('#view-name').val(data.b_name);
            $('#view-shortname').val(data.b_shortname);
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
        $('#banks-table').on('click', '.edit', function(){
            var data = table.row(this.closest('tr')).data();
            $('#edit-id').val(data.b_id);
            $('#edit-code').val(data.b_code);
            $('#edit-name').val(data.b_name);
            $('#edit-shortname').val(data.b_shortname);
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
        $('#banks-table').on('click', '.update', function(){
            var data = table.row(this.closest('tr')).data();
            $('#update-code').val(data.b_code);
            $('#update-name').val(data.b_name);
            $('#update-shortname').val(data.b_shortname);
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
