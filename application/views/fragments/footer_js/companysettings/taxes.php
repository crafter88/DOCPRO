<script>
	$(document).ready(function(){
		$('#taxes-table').DataTable({
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
	
		$('#taxes-table').on('click', '.edit', function(){
			$('#edit-modal').modal('show');
		});
		
		$('#taxes-table').on('click', '.update', function(){
			$('#update-modal').modal('show');
		});
	
	
		//Codes Here!
			
		$('div').on('click', '.short-name', function(){
			$("input[name='type_short_name']").val($(this)[0].innerText);
		});
		
		$(".tax-type-btn").click(function(){
			var options = {
						animation: true,
						placement: 'right',
						html: true,
						content: function(){
								return $('#type-short-name-select').html();
						}
			}
			$(this).popover(options);
		});
		
		$("input:not(input[name='type_short_name']), select").focus(function(){
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
