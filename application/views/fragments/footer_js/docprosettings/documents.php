<script>
	$(document).ready(function(){
		var table = $('#documents-table').DataTable({
            ajax: '/docpro_settings/documents/get',
            columns: [{
               mData: null,
               bSortable: false,
               mRender: function(data, type, full){
                   return "<button type='button' class='btn btn-primary btn-xs view' data-hint='View'><i class='fa fa-eye'></i></button>\n\
                           <button type='button' class='btn btn-success btn-xs edit' data-hint='Edit'><i class='fa fa-pencil'></i></button>\n\
                           <button type='button' class='btn btn-warning btn-xs update' data-hint='Update'><i class='fa fa-refresh'></i></button>";
               }
           },
            {'data': 'doc_code'}, 
            {'data': 'doc_seq'}, 
            {'data': 'doc_class'}, 
            {'data': 'doc_name'}, 
            {'data': 'doc_shortname'}, 
            {'data': 'journ_name'},
            {'data': 'journ_shortname'},
            ],

            columnDefs: [{targets: 0, width: '80px'}, 
            			{targets: 1, width: '1px'}, 
            			{targets: 2, width: '110px'}, 
            			{targets: 3, width: '110px'}, 
            			{targets: 4, width: '310px'}, 
            			{targets: 5, width: '50px'},
            			{targets: 6, width: '60px'}],

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
      $('#documents-table').on('click', '.view', function(){
           var data = table.row(this.closest('tr')).data();
            $('#view-sequence').attr('disabled', true);
            $('#view-sequence').val(data.doc_seq);
            $('#view-code').attr('disabled', true);
            $('#view-code').val(data.doc_code);
            $('#view-classification').attr('disabled', true);
            $('#view-classification').val(data.doc_class);
            $('#view-documentname').attr('disabled', true);
            $('#view-documentname').val(data.doc_name);
            $('#view-documentshortname').attr('disabled', true);
            $('#view-documentshortname').val(data.doc_shortname);
            $('#view-journalname').attr('disabled', true);
            $('#view-journalname').val(data.journ_name);
            $('#view-journalshortname').attr('disabled', true);
            $('#view-journalshortname').val(data.journ_shortname);
            var pop = $(this).popover({

                animation: true,
                html: true,
                placement: 'right',
                content: function(){
                    return $('#view-modal').html();

                },
                container: '.navbar-body'
                
            });

            pop.addClass('view-popover');

        });
        $('#documents-table').on('click', '.edit', function(){
            var data = table.row(this.closest('tr')).data();
            $('#edit-sequence').attr('disabled', true);
            $('#edit-sequence').val(data.doc_seq);
            $('#edit-code').val(data.doc_code);
            $('#edit-classification').val(data.doc_class);
            $('#edit-documentname').val(data.doc_name);
            $('#edit-documentshortname').val(data.doc_shortname);
            $('#edit-journalname').val(data.journ_name);
            $('#edit-journalshortname').val(data.journ_shortname);
            $('#edit-id').val(data.doc_id);
            $('#journ-id').val(data.journ_id);
            $(this).popover({
                animation: true,
                html: true,
                placement: 'right',
                content: function(){
                    return $('#edit-modal').html();
                },
                container: '.navbar-body'
                
            });
        });
        $('#documents-table').on('click', '.update', function(){
            var data = table.row(this.closest('tr')).data();
            $('#update-sequence').attr('disabled', true);
            $('#update-sequence').val(data.doc_seq);
            $('#update-code').val(data.doc_code);
            $('#update-classification').val(data.doc_class);
            $('#update-documentname').val(data.doc_name);
            $('#update-documentshortname').val(data.doc_shortname);
            $('#update-journalname').val(data.journ_name);
            $('#update-journalshortname').val(data.journ_shortname);
            $('#update-id').val(data.doc_id);
            $('#journ-id').val(data.journ_id);
            $(this).popover({
                animation: true,
                html: true,
                placement: 'right',
                content: function(){
                    return $('#update-modal').html();
                },
                container: '.navbar-body'
                
            });
        });	
         $('div').on('click', '.select-option', function(){
                $("input[name='journals']").val($(this)[0].textContent);
                $("input[name='journshortname']").val($(this).attr('short-name'));
        });
        $('div').on('click', '.select-option', function(){
                $("input[name='editjournals']").val($(this)[0].textContent);
                $("input[name='editjournshortname']").val($(this).attr('short-name'));
        });
        $('div').on('click', '.select-option', function(){
                $("input[name='updatejournals']").val($(this)[0].textContent);
                 $("input[name='updatejournshortname']").val($(this).attr('short-name'));
        });	

      $('div').on('click', '.select-option', function(){
            $("#journ-id").val($(this).attr('journ-id'));
            $("input[name='journals']").val($(this)[0].textContent);
            $("input[name='journshortname']").val($(this).attr('short-name'));

            
        });
        $('.navbar-body').on('click', '.journals-btn', function(){
            $('#add-options').html($('#journ-select').html());
            
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
