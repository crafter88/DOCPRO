<script>
	$(document).ready(function(){
		$('#business-partners-table').DataTable({
			columnDefs: [{targets: [0,1,2,6,7,8], width: '1px'}, {targets: 5, width: '100px'}],
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
	
	
		$('#business-partners-table').on('click', '.edit', function(){
			$('#edit-modal').modal('show');
		});
		
		$('#business-partners-table').on('click', '.update', function(){
			$('#update-modal').modal('show');
		});
	
	
		//Codes Here!
			
		$('div').on('click', '.class', function(){
			$("input[name='classification']").val($(this)[0].innerText);
		});
		
		$(".classification-btn").click(function(){
			var options = {
						animation: true,
						placement: 'right',
						html: true,
						content: function(){
								return $('#class-select').html();
						}
			}
			$(this).popover(options);
		});
		
		$("input:not(input[name='bp_type']), select").focus(function(){
			$('.popover').hide();
		});


		$('div').on('click', '.bptype', function(){
			$("input[name='bp_type']").val($(this)[0].innerText);
		});
		
		$(".bp-type-btn").click(function(){
			var options = {
						animation: true,
						placement: 'right',
						html: true,
						content: function(){
								return $('#bp-type-select').html();
						}
			}
			$(this).popover(options);
		});
		
		$("input:not(input[name='bp_type']), select").focus(function(){
			$('.popover').hide();
		});

		$("input:not(input[name='bp_type']), select").focus(function(){
			$('.popover').hide();
		});


		$('div').on('click', '.taxtype', function(){
			$("input[name='tax_type']").val($(this)[0].innerText);
		});
		
		$(".tax-type-btn").click(function(){
			var options = {
						animation: true,
						placement: 'right',
						html: true,
						content: function(){
								return $('#tax-type-select').html();
						}
			}
			$(this).popover(options);
		});
		
		$("input:not(input[name='tax_type']), select").focus(function(){
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
