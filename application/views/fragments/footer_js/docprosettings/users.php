<script>
    $(document).ready(function(){
        var table = $('#users-table').DataTable({
            ajax: '/docpro_settings/users/get',
            columns: [{
               mData: null,
               bSortable: false,
               mRender: function(data, type, full){
                   return "<button type='button' class='btn btn-primary btn-xs view' data-hint='View'><i class='fa fa-eye'></i></button>\n\
                           <button type='button' class='btn btn-success btn-xs edit' data-hint='Edit'><i class='fa fa-pencil'></i></button>\n\
                           <button type='button' class='btn btn-warning btn-xs update' data-hint='Update'><i class='fa fa-refresh'></i></button>";
               }
           },
            {mRender: function(data, type, full){return full.fname+" "+full.mname+" "+full.lname;}}, {'data': 'username'}, {'data': 'password'}, {'data': 'co_name'}, {'data': 'user_type'},],
            columnDefs: [{targets: 0, width: '60px'}, {targets: 1, width: '200px'}, {targets: 4, width: '200px'}, {targets: 5, width: '90px'}],
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
                container: '.navbar-body'
            });
        });
        $('#users-table').on('click', '.view', function(){
            var data = table.row(this.closest('tr')).data();
            $('#view-fname').attr('disabled', true);
            $('#view-fname').val(data.fname);
            $('#view-mname').attr('disabled', true);
            $('#view-mname').val(data.mname);
            $('#view-lname').attr('disabled', true);
            $('#view-lname').val(data.lname);
            $('#view-addr').attr('disabled', true);
            $('#view-addr').val(data.address);
            $('#view-cnum').attr('disabled', true);
            $('#view-cnum').val(data.cnum);
            $('#view-email').attr('disabled', true);
            $('#view-email').val(data.email);
            $('#view-username').attr('disabled', true);
            $('#view-username').val(data.username);
            $('#view-pass').attr('disabled', true);
            $('#view-pass').val(data.password);
            $('#view-company').attr('disabled', true);
            $('#view-company').val(data.co_name);
            $('#view-alvl').attr('disabled', true);
            $('#view-alvl').val(data.user_type);
             $(this).popover({
                animation: true,
                html: true,
                placement: 'right',
                content: function(){

                    return $('#view-modal').html();
                },
                container: '.navbar-body'

                
            });
        });
        $('#users-table').on('click', '.edit', function(){
            $('#edit-modal').modal('show');
        });	
        $('#users-table').on('click', '.update', function(){
            $('#update-modal').modal('show');
        });
        $('div').on('click', '.select-option', function(){
            $("#co-id").val($(this).attr('co-id'));
            $("input[name='company']").val($(this)[0].textContent);
        });
        $('.company-btn').click(function(){
            var options = {
                animation: true, placement: 'right', html: true,
                content: function(){
                    return $('#user-comp-select').html();
                }
            }
            $(this).popover(options);
        });
        $("input:not(input[name='company']), select").focus(function(){
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