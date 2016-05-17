<script>
	$(document).ready(function(){
		$('#users-table').DataTable({
			columnDefs: [{targets: 0, width: '1px'}, {targets: 3, width: '100px'}],
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

		$('#users-table').on('click', '.edit', function(){
			$('#edit-modal').modal('show');
		});
		
		$('#users-table').on('click', '.update', function(){
			$('#update-modal').modal('show');
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
