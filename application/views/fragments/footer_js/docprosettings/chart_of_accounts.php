<script>
var save_method; //for save method string
var table;
	$(document).ready(function(){
		table = $('#chart-of-accounts-table').DataTable({
			"processing": true, //Feature control the processing indicator.
        "serverSide": true, //Feature control DataTables' server-side processing mode.
          "order": [], //Initial no order.  

        // Load data for the table's content from an Ajax source
        "ajax": {
        	"url": "<?php echo site_url('Company_settings/coa_list')?>",
        	"type": "POST"
        },
		initComplete: function(setting, json){
			initPivot();
		},
			columnDefs: [{targets: [0,1,3,5,6,7], width: '1px'}],
		});
		
		$('#add').click(function(){
			save_method = 'add';
			$('#form')[0].reset();
			$('#add-modal').modal('show');
		});
	
	
		$('#chart-of-accounts-table').on('click', '.edit', function(){
			$('#edit-modal').modal('show');
		});
		
		$('#chart-of-accounts-table').on('click', '.update', function(){
			$('#update-modal').modal('show');
		});
	
	
		//Codes Here!
		$(document).ready(function() {
			$(".dept_list").select2();
		});
	
		initButtonPrevention();
	});function delete_record(acc_id)
{
	if(confirm('Are you sure delete this data?'))
	{
        // ajax delete data to database
        $.ajax({
        	url : "<?php echo site_url('Company_settings/coa_delete')?>/"+acc_id,
        	type: "POST",
        	dataType: "JSON",
        	success: function(data)
        	{
               //if success reload ajax table
               $('#modal_form').modal('hide');
               reload_table();
           },
           error: function (jqXHR, textStatus, errorThrown)
           {
           	alert('Error adding / update data');
           }
       });
        
    }
}

function edit_record(acc_id)
{
	save_method = 'update';
      $('#form')[0].reset(); // reset form on modals
      
      //Ajax Load data from ajax
      $.ajax({
      	url : "<?php echo site_url('Company_settings/coa_edit/')?>/" + acc_id,
      	type: "GET",
      	dataType: "JSON",
      	success: function(data)
      	{
      		
      		$('[name="acc_id"]').val(data.acc_id);
      		$('[name="account_name_id"]').val(data.acc_name_id);
      		$('[name="level1_code_id"]').val(data.level1_code_id);
      		$('[name="level2_code_id"]').val(data.level2_code_id);
      		$('[name="level3_code_id"]').val(data.level3_code_id);
      		$('[name="bir_id"]').val(data.bir_id);
      		
            $('#add-modal').modal('show'); // show bootstrap modal when complete loaded
            $('.modal-title').text('Edit'); // Set title to Bootstrap modal title
            
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
        	alert('Error get data from ajax');
        }
    });
  }

  function reload_table()
  {
      table.ajax.reload(null,false); //reload datatable ajax
  }

  function save()
  {
  	var url;
  	if(confirm('Confirm Add/Update'))
  	{
  		if(save_method == 'add')
  		{
  			url = "<?php echo site_url('Company_settings/coa_add') ?>";
  		}else
  		{
  			url = "<?php echo site_url('Company_settings/coa_update') ?>";
  		}
  		$.ajax({
  			url:url,
  			type: "POST",
  			data: $('#form').serialize(),
  			dataType: "JSON",
  			success: function(data)
  			{
  				$('#add-modal').modal('hide');
  				reload_table();
  			},
  			error: function(jqXHR, textStatus, errorThrown)
  			{
  				alert('Error adding / update data');
  			}
  		});
  	}
  }

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