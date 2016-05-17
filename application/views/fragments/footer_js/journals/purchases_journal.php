<script src="<?php echo base_url(); ?>/assets/js/apps/journals/purchases/app.js"></script>
<script src="<?php echo base_url(); ?>/assets/js/apps/journals/purchases/controllers/transaction.js"></script>
<script src="<?php echo base_url(); ?>/assets/js/apps/journals/purchases/controllers/document.js"></script>
<script src="<?php echo base_url(); ?>/assets/js/apps/journals/purchases/directives/transaction.js"></script>
<script src="<?php echo base_url(); ?>/assets/js/apps/journals/purchases/directives/document.js"></script>
<script>
	var summary_table = $('#purchases-journal-summary-table').DataTable({
							scrollX: true,
	});
	var journal_entries_table = $('#purchases-journal-entries-table').DataTable({
							scrollX: true,
	});
	var bp_summary_table = $('#purchases-bp-table').DataTable({
								scrollX: true,
	});
	var transaction_details_table = $('#purchases-transaction-details-table').DataTable({
							scrollX: true,
	});
	var bp_journal_entries_table = $('#purchases-bp-journal-entries-table').DataTable({
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