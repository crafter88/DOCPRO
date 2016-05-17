<script>
	$(document).ready(function(){
		var table = $('#modes-of-payment-table').DataTable({
			ajax: '/docpro_settings/modes_of_payment/get',
            columns: [{
               mData: null,
               bSortable: false,
               mRender: function(data, type, full){
                   return "<button type='button' class='btn btn-primary btn-xs view' data-hint='View'><i class='fa fa-eye'></i></button>\n\
                           <button type='button' class='btn btn-success btn-xs edit' data-hint='Edit'><i class='fa fa-pencil'></i></button>\n\
                           <button type='button' class='btn btn-warning btn-xs update' data-hint='Update'><i class='fa fa-refresh'></i></button>";
               }
           },
            {'data': 'pay_code'}, 
            {'data': 'pay_mode_seq'}, 
            {'data': 'pay_mod_name'},
            {'data': 'pay_mod_shortname'},
            {'data': 'pay_type'}
            ],


			columnDefs: [{targets:[0, 1, 2], width: '1px'}, {targets:[4,5], width: '150px'}],
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

		$('#modes-of-payment-table').on('click', '.view', function(){
            var data = table.row(this.closest('tr')).data();
            $('#view-sequence').attr('disabled', true);
            $('#view-sequence').val(data.pay_mode_seq);
            $('#view-code').attr('disabled', true);
            $('#view-code').val(data.pay_code);
            $('#view-name').attr('disabled', true);
            $('#view-name').val(data.pay_mod_name);
            $('#view-shortname').attr('disabled', true);
            $('#view-shortname').val(data.pay_mod_shortname);
            $('#view-paymenttype').attr('disabled', true);
            $('#view-paymenttype').val(data.pay_type);
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
		
		$('#modes-of-payment-table').on('click', '.edit', function(){
			var data = table.row(this.closest('tr')).data();
            $('#edit-sequence').attr('disabled', true);
            $('#edit-sequence').val(data.pay_mode_seq);
            $('#edit-code').val(data.pay_code);
            $('#edit-name').val(data.pay_mod_name);
            $('#edit-shortname').val(data.pay_mod_shortname);
            $('#edit-paymenttype').val(data.pay_type);
            $('#edit-id').val(data.pay_mode_id);
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
		
		$('#modes-of-payment-table').on('click', '.update', function(){
			var data = table.row(this.closest('tr')).data();
            $('#update-sequence').attr('disabled', true);
            $('#update-sequence').val(data.pay_mode_seq);
            $('#update-code').val(data.pay_code);
            $('#update-name').val(data.pay_mod_name);
            $('#update-shortname').val(data.pay_mod_shortname);
            $('#update-paymenttype').val(data.pay_type);
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
                $("input[name='paymenttype']").val($(this)[0].textContent);
        });

        $('div').on('click', '.select-option', function(){
                $("input[name='editpaymenttype']").val($(this)[0].textContent);
        });

        $('div').on('click', '.select-option', function(){
                $("input[name='updatepaymenttype']").val($(this)[0].textContent);
        }); 


        $('.navbar-body').on('click', '.paymenttype-btn', function(){
            $('#add-options').html($('#payment-type-select').html());
            
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
