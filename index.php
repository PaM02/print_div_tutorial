<html>
<head>
	<title>Printind dive using jquery</title>

	<script src='jquery.js'></script>
	<script src="jQuery.print.js"></script>
	<script>
		// here we will write our custom code for printing our div
		$(function(){
			$('#print').on('click', function() {
                //Print ele2 with default options
                $.print("#print");
            });
		});
	</script>
</head>
<body style='background: #f9f9f9'>

	<div id="print" style="border: 1px solid #a1a1a1; width: 300px; background: white; padding: 10px; margin: 0 auto; text-align: center;">
		<h4>HACK SMILE TUTORIALS</h4> 
		thanks for choosing hacksmile to teach you important programming concepts
	</div>
	<center><button id='print' style='margin-top: 10px; padding: 10px; border: none; text-align: center; background: black; border-radius: 4px; color: #fff; font-weight: bold; cursor: pointer;'>PRINT ABOVE DIV</button></center>

</body>
</html>