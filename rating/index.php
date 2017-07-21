<html>
	<head>
			<link href="rating.css" rel="stylesheet" type="text/css">
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
			<script type="text/javascript" src="rating.js"></script>
			<script>
					$(function() {
						    $("#rating_star").ratingTest({
						        starLength: '5',
						        initialValue: '',
						        callbackFunctionName: 'processRating',
						        imageDirectory: 'images/',
						        inputAttr: 'postID'
						    });
						});
			</script>
	</head>
	<body>
		
			<input name="rating" value="0" id="rating_star" type="hidden" postID="1" />
			
	</body>
	<script>
			function processRating(val, attrVal){
				    $.ajax({
				        type: 'POST',
				        url: 'rating.php',
				        data: 'postID='+attrVal+'&ratingPoints='+val,
				        dataType: 'json',
				        success : function(data) {
				            if (data.status == 'ok') {
				                alert('You have rated '+val+' to CodexWorld');
				                $('#avgrat').text(data.average_rating);
				                $('#totalrat').text(data.rating_number);
				            }else{
				                alert('Some problem occured, please try again.');
				            }
				        }
				    });
				}
	</script>

</html>