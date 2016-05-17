<script src="<?php echo base_url(); ?>/assets/js/apps/journals/receipts/app.js"></script>
<script src="<?php echo base_url(); ?>/assets/js/apps/journals/receipts/controllers/transaction.js"></script>
<script src="<?php echo base_url(); ?>/assets/js/apps/journals/receipts/controllers/document.js"></script>
<script src="<?php echo base_url(); ?>/assets/js/apps/journals/receipts/directives/transaction.js"></script>
<script src="<?php echo base_url(); ?>/assets/js/apps/journals/receipts/directives/document.js"></script>
<script>
	var summary_table = $('#receipts-journal-summary-table').DataTable({
							scrollX: true,
	});
	var journal_entries_table = $('#receipts-journal-entries-table').DataTable({
							scrollX: true,
	});
	var bp_summary_table = $('#receipts-bp-table').DataTable({
								scrollX: true,
	});
	var transaction_details_table = $('#receipts-transaction-details-table').DataTable({
							scrollX: true,
	});
	var bp_journal_entries_table = $('#receipts-bp-journal-entries-table').DataTable({
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
