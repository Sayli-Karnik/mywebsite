<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $("#myid").click(function(){
        alert("The paragraph was clicked.");
		window.open('mailto:karniksayli1995@gmail.com?subject=subject&body=body');
    });
});
</script>
</head>
<body>

<button type='button' id='myid'>Get receipt.</button>

</body>
</html>
