$(document).ready(function() {
	$(function() {
	    $( "#customers" ).autocomplete({
	    	source: function(request, response) {
	    		$.ajax({
				   	url: "http://dienthoaivungtau.com/auths/checkWarrantyPeriod",
				   	data:  {
			   			mode : "ajax",
			   			component : "consearch",
			   			searcharg : "company",
			   			task : "display",
			   			limit : 15,
			   			term : request.term
				   	},
				   	dataType: "json",
				   	success: function(data) {
						response(data);
						alert(data);
				  	}	
				})
	    	},
	        select: function( event, ui ) {
	        	var keyvalue = ui.item.value;
				alert("Customer number is " + keyvalue);
	        }
	    });
	});

	$(function() {
		$('.customers').find('#dataTable_filter label span').html('Tìm kiếm khách hàng:');
	});
});