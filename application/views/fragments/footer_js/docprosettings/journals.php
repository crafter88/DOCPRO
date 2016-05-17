<script>
	$(document).ready(function(){
		$('#journals-table').DataTable({
			columnDefs: [{targets: 0, width: '1px'}, {targets: 1, width: '1px'}, {targets: 3, width: '100px'}]
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
