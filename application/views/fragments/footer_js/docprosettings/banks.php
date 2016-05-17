<script>
	$(document).ready(function(){
		var table = $('#banks-table').DataTable({

			ajax: '/docpro_settings/banks/get',
            columns: [{
               mData: null,
               bSortable: false,
               mRender: function(data, type, full){
                   return "<button type='button' class='btn btn-primary btn-xs view' data-hint='View'><i class='fa fa-eye'></i></button>\n\
                           <button type='button' class='btn btn-success btn-xs edit' data-hint='Edit'><i class='fa fa-pencil'></i></button>\n\
                           <button type='button' class='btn btn-warning btn-xs update' data-hint='Update'><i class='fa fa-refresh'></i></button>";
               }
           },
            {'data': 'bank_code'}, 
            {'data': 'bank_name'}, 
            {'data': 'bank_shortname'}
            ],

			columnDefs: [{targets: [0, 1], width: '1px'}, {targets: 3, width: '100px'}],
			scrollX: true,
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
		$('#banks-table').on('click', '.view', function(){
            var data = table.row(this.closest('tr')).data();
            $('#view-code').attr('disabled', true);
            $('#view-code').val(data.bank_code);
            $('#view-name').attr('disabled', true);
            $('#view-name').val(data.bank_name);
            $('#view-shortname').attr('disabled', true);
            $('#view-shortname').val(data.bank_shortname);
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
		$('#banks-table').on('click', '.edit', function(){
			var data = table.row(this.closest('tr')).data();
            $('#edit-code').val(data.bank_code);
            $('#edit-name').val(data.bank_name);
            $('#edit-shortname').val(data.bank_shortname);
            $('#edit-id').val(data.bank_id);
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
		
		$('#banks-table').on('click', '.update', function(){
			var data = table.row(this.closest('tr')).data();
            $('#update-code').val(data.bank_code);
            $('#update-name').val(data.bank_name);
            $('#update-shortname').val(data.bank_shortname);
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
	
	//Codes Here!
	
	
	
	
	initButtonPrevention();
	});
	
	var initButtonPrevention = function(){
		jQuery.fn.preventDoubleSubmission = function() {
			if($(this)[0].checkValidity()){
				$(this).on('submit',function(e){
					var $form = $(this);
					if ($form.data('submitted') === true) {
						e.preventDefault();
					} else {
						$form.data('submitted', true);
					}
				});
				return this;
			}
		};
		
		$('form').preventDoubleSubmission();
	}
</script>