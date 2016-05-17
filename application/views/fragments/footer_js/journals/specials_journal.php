<script src="<?php echo base_url(); ?>/assets/js/apps/journals/specials/app.js"></script>
<script src="<?php echo base_url(); ?>/assets/js/apps/journals/specials/controllers/transaction.js"></script>
<script src="<?php echo base_url(); ?>/assets/js/apps/journals/specials/directives/transaction.js"></script>
<script>
	$(document).ready(function(){
		var summary_table = $('#specials-journal-summary-table').DataTable({
							scrollX: true,
		});
		var journal_entries_table = $('#specials-journal-entries-table').DataTable({
								scrollX: true,
		});
		var bp_summary_table = $('#specials-bp-table').DataTable({
								scrollX: true,
		});
		var transaction_details_table = $('#specials-transaction-details-table').DataTable({
								scrollX: true,
		});
		var bp_journal_entries_table = $('#specials-bp-journal-entries-table').DataTable({
								scrollX: true,
		});
	});
	
</script>

<script>
	$('.title').on('click', '.cash-credit', function(){
		$('#card-2-form').slideDown('fast', function(){});
		$('.cash-credit').removeClass('btn-primary');
		$(this).addClass('btn-primary');
		
	});
</script>