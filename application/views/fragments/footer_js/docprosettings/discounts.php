<script>
	$(document).ready(function(){
		$('#discounts-table').DataTable({
			columnDefs: [{targets: [0, 1, 3], width: '100px'}],
		});
		
		$('#add').click(function(){
			$('#add-modal').modal('show');
		});
		
		$('#discounts-table').on('click', '.edit', function(){
			$('#edit-modal').modal('show');
		});
		
		$('#discounts-table').on('click', '.update', function(){
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
