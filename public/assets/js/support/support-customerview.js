$(function(e){

	//________ Data Table
	$('#support-customerlist').DataTable({
		"order": [
			[ 0, "desc"]
		],
		order: [],
		columnDefs: [ { orderable: false, targets: [0, 2, 3, 4, 5, 6] } ],
		language: {
			searchPlaceholder: 'Search...',
			sSearch: '',
			
		}
	});

	//________ Select2
	$('.select2').select2({
		minimumResultsForSearch: Infinity,
		width:'100%'
	});

 });

 