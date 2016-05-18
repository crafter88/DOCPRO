<script>
	$(document).ready(function(){
		$('#documents-table').DataTable({
			columnDefs: [{targets: [0, 1, 2, 5, 7], width: '1px'}, {targets: 6, width: '100px'}],
		});
		
	});
</script>
