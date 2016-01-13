<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $("#myid").click(function(){
     //alert("The paragraph was clicked.");
$.ajax({
  type: “POST”,
  url: “https://mandrillapp.com/api/1.0/messages/send.json”,
  data: {
    ‘key’: 'GWVIsFaxxCBaEI0HOjm56Q',
    ‘message’: {
      ‘from_email’: ‘karniksayli1995@gmail.com’,
      ‘to’: [
          {
            ‘email’: ‘karniksayli1995@gmail.com’,
            ‘name’: ‘RECIPIENT NAME (OPTIONAL)’,
            ‘type’: ‘to’
          },
          {
            ‘email’: ‘yashkarnik@gmail.com’,
            ‘name’: ‘ANOTHER RECIPIENT NAME (OPTIONAL)’,
            ‘type’: ‘to’
          }
        ],
      ‘autotext’: ‘true’,
      ‘subject’: ‘YOUR SUBJECT HERE!’,
      ‘html’: ‘YOUR EMAIL CONTENT HERE! YOU CAN USE HTML!’
    }
  }
 }).done(function(response) {
   console.log(response); // if you're into that sorta thing
 });
    
    });
});
</script>
</head>
<body>

<form method='post'>
<input type='submit' id='myid'>
</form>

</body>
</html>
