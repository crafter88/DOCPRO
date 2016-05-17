<script src="<?php echo base_url(); ?>/assets/js/apps/journals/adjustments/app.js"></script>
<script src="<?php echo base_url(); ?>/assets/js/apps/journals/adjustments/controllers/transaction.js"></script>
<script src="<?php echo base_url(); ?>/assets/js/apps/journals/adjustments/controllers/document.js"></script>
<script src="<?php echo base_url(); ?>/assets/js/apps/journals/adjustments/directives/transaction.js"></script>
<script src="<?php echo base_url(); ?>/assets/js/apps/journals/adjustments/directives/document.js"></script>
<script>
	var summary_table = $('#adjustments-journal-summary-table').DataTable({
							scrollX: true,
	});
	var journal_entries_table = $('#adjustments-journal-entries-table').DataTable({
							scrollX: true,
	});
	var bp_summary_table = $('#adjustments-bp-table').DataTable({
								scrollX: true,
	});
	var transaction_details_table = $('#adjustments-transaction-details-table').DataTable({
							scrollX: true,
	});
	var bp_journal_entries_table = $('#adjustments-bp-journal-entries-table').DataTable({
							scrollX: true,
	});
</script>

<script>
	$('.title').on('click', '.cash-credit', function(){
		$('#card-2-form').slideDown('fast', function(){});
		$('.cash-credit').removeClass('btn-primary');
		$(this).addClass('btn-primary');
		
	});
</script>