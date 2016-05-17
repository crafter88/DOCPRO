<script src="<?php echo base_url(); ?>/assets/js/apps/journals/sales/app.js"></script>
<script src="<?php echo base_url(); ?>/assets/js/apps/journals/sales/controllers/transaction.js"></script>
<script src="<?php echo base_url(); ?>/assets/js/apps/journals/sales/controllers/document.js"></script>
<script src="<?php echo base_url(); ?>/assets/js/apps/journals/sales/directives/transaction.js"></script>
<script src="<?php echo base_url(); ?>/assets/js/apps/journals/sales/directives/document.js"></script>
<script>
	var summary_table = $('#sales-journal-summary-table').DataTable({
							scrollX: true,
	});
	var journal_entries_table = $('#sales-journal-entries-table').DataTable({
							scrollX: true,
	});
	var bp_summary_table = $('#sales-bp-table').DataTable({
								scrollX: true,
	});
	var transaction_details_table = $('#sales-transaction-details-table').DataTable({
							scrollX: true,
	});
	var bp_journal_entries_table = $('#sales-bp-journal-entries-table').DataTable({
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
