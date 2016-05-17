<script src="<?php echo base_url(); ?>/assets/js/apps/journals/collections/app.js"></script>
<script src="<?php echo base_url(); ?>/assets/js/apps/journals/collections/controllers/transaction.js"></script>
<script src="<?php echo base_url(); ?>/assets/js/apps/journals/collections/directives/transaction.js"></script>
<script src="<?php echo base_url(); ?>/assets/js/apps/journals/collections/controllers/document.js"></script>
<script src="<?php echo base_url(); ?>/assets/js/apps/journals/collections/directives/document.js"></script>
<script>
	var summary_table = $('#collections-journal-summary-table').DataTable({
							scrollX: true,
	});
	var journal_entries_table = $('#collections-journal-entries-table').DataTable({
							scrollX: true,
	});
	var bp_summary_table = $('#collections-bp-table').DataTable({
								scrollX: true,
	});
	var transaction_details_table = $('#collections-transaction-details-table').DataTable({
							scrollX: true,
	});
	var bp_journal_entries_table = $('#collections-bp-journal-entries-table').DataTable({
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