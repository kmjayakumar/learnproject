<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>kmj post</title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<script>
function myFunction() {
  confirm("Thank You...!");
}

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

jQuery.validator.addMethod("lettersonly", function(value, element) {
return this.optional(element) || /^[a-z\s]+$/i.test(value);
}, "Only alphabetical characters");

$('#form').validate({
        rules: {
            name: {
                lettersonly: true
            }
        }
    });
</script>

