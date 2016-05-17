<script>
	$(document).ready(function(){
		$('#banks-table').DataTable({
			columnDefs: [{targets: [0,1,2], width: '1px'}, {targets: 5, width: '100px'}],
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
	
	
		$('#banks-table').on('click', '.edit', function(){
			$('#edit-modal').modal('show');
		});
		
		$('#banks-table').on('click', '.update', function(){
			$('#update-modal').modal('show');
		});
	
	
		//Codes Here!
			
		$('div').on('click', '.account-class', function(){
			$("input[name='accnt_class']").val($(this)[0].innerText);
		});
		
		$(".accnt-class-btn").click(function(){
			var options = {
						animation: true,
						placement: 'right',
						html: true,
						content: function(){
								return $('#account-class-select').html();
						}
			}
			$(this).popover(options);
		});
		
		$("input:not(input[name='accnt_class']), select").focus(function(){
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
