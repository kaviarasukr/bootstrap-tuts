


$( document ).ready(function() {

	var finalData;

	$.getJSON("baba.json", function(data) {
		finalData=data;
	});

	$("#submitButtom").click(function(){
		
		$inputdata=$(".allownumericwithoutdecimal").val();

		if(($inputdata.length === 0) || ($inputdata==0) || ($inputdata>720) || (!($.isNumeric($inputdata))) || ($inputdata=="") ){

			$("#result").html("<p class='animated fadeInUp'>"+"Enter value from 1-720"+"</p>");
		}

		else{

			$.each(finalData, function( key, val ) {
				var numberfromjson=val["number"];
				if($inputdata==numberfromjson)
				{
				//console.log(val.quote);
				$("#result").html("<p class='animated fadeInUp'>"+val.quote+"</p>");
				$("#result1").html("<p class='animated fadeInUp'>"+val.quote1+"</p>");
				$("#result2").html("<p class='animated fadeInUp'>"+val.quote2+"</p>");
			}
			
		});
		}
		

	});
});