<script>
	$(document).ready(function(){
	var table =	$('#taxes-table').DataTable({
			ajax: '/docpro_settings/taxes/get',
            columns: [{
               mData: null,
               bSortable: false,
               mRender: function(data, type, full){
                   return "<button type='button' class='btn btn-primary btn-xs view' data-hint='View'><i class='fa fa-eye'></i></button>\n\
                           <button type='button' class='btn btn-success btn-xs edit' data-hint='Edit'><i class='fa fa-pencil'></i></button>\n\
                           <button type='button' class='btn btn-warning btn-xs update' data-hint='Update'><i class='fa fa-refresh'></i></button>";
               }
           },
            {'data': 'tax_code'}, 
            {'data': 'tax_type_shortname'}, 
            {'data': 'tax_seq'},
            {'data': 'tax_name'},
            {'data': 'tax_shortname'},
            {'data': 'tax_rate'},
            {'data': 'tax_base'}
            ],

			columnDefs: [{targets: [0, 1, 2, 3, 5, 6 ,7], width: '1px'}],
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
		
		$('#taxes-table').on('click', '.view', function(){
            var data = table.row(this.closest('tr')).data();
            $('#view-sequence').attr('disabled', true);
            $('#view-sequence').val(data.tax_seq);
            $('#view-code').attr('disabled', true);
            $('#view-code').val(data.tax_code);
            $('#view-taxtypeshortname').attr('disabled', true);
            $('#view-taxtypeshortname').val(data.tax_type_shortname);
            $('#view-name').attr('disabled', true);
            $('#view-name').val(data.tax_name);
            $('#view-shortname').attr('disabled', true);
            $('#view-shortname').val(data.tax_shortname);
            $('#view-rate').attr('disabled', true);
            $('#view-rate').val(data.tax_rate);
            $('#view-base').attr('disabled', true);
            $('#view-base').val(data.tax_base);
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
		
		$('#taxes-table').on('click', '.edit', function(){
			var data = table.row(this.closest('tr')).data();
            $('#edit-sequence').attr('disabled', true);
            $('#edit-sequence').val(data.tax_seq);
            $('#edit-code').val(data.tax_code);
            $('#edit-taxtypeshortname').val(data.tax_type_shortname);
            $('#edit-name').val(data.tax_name);
            $('#edit-shortname').val(data.tax_shortname);
            $('#edit-rate').val(data.tax_rate);
            $('#edit-base').val(data.tax_base);
            $('#edit-id').val(data.tax_id);
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
		
		$('#taxes-table').on('click', '.update', function(){
			var data = table.row(this.closest('tr')).data();
            $('#update-sequence').attr('disabled', true);
            $('#update-sequence').val(data.tax_seq);
            $('#update-code').val(data.tax_code);
            $('#update-taxtypeshortname').val(data.tax_type_shortname);
            $('#update-name').val(data.tax_name);
            $('#update-shortname').val(data.tax_shortname);
            $('#update-rate').val(data.tax_rate);
            $('#update-base').val(data.tax_base);
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
		
		$('div').on('click', '.select-option', function(){
                $("input[name='taxtypeshortname']").val($(this)[0].textContent);
        });

        $('div').on('click', '.select-option', function(){
                $("input[name='editjournals']").val($(this)[0].textContent);
        });

        $('div').on('click', '.select-option', function(){
                $("input[name='updatejournals']").val($(this)[0].textContent);
        }); 


        $('.navbar-body').on('click', '.tax-type-btn', function(){
            $('#add-options').html($('#type-short-name-select').html());
            
        });

        $("input:not(input[name='journals']), select").focus(function(){
            $('.popover').hide();
        });

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
