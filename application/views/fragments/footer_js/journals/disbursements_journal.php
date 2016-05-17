<script src="<?php echo base_url(); ?>/assets/js/apps/journals/disbursements/app.js"></script>
<script src="<?php echo base_url(); ?>/assets/js/apps/journals/disbursements/controllers/transaction.js"></script>
<script src="<?php echo base_url(); ?>/assets/js/apps/journals/disbursements/controllers/document.js"></script>
<script src="<?php echo base_url(); ?>/assets/js/apps/journals/disbursements/directives/transaction.js"></script>
<script src="<?php echo base_url(); ?>/assets/js/apps/journals/disbursements/directives/document.js"></script>
<script>
	var summary_table = $('#disbursements-journal-summary-table').DataTable({
							scrollX: true,
	});
	var journal_entries_table = $('#disbursements-journal-entries-table').DataTable({
							scrollX: true,
	});
	var bp_summary_table = $('#disbursements-bp-table').DataTable({
								scrollX: true,
	});
	var transaction_details_table = $('#disbursements-transaction-details-table').DataTable({
							scrollX: true,
	});
	var bp_journal_entries_table = $('#disbursements-bp-journal-entries-table').DataTable({
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