<?php
?>
<html>
<head>
<script type="text/javascript" src="http://localhost/Gcare/public/js/jquery-1.9.1.js"/>
</head>
<script>
$(document).ready(function(){
$('form :input').blur(function() {
    if ($(this).hasClass('required')) {
      var $listItem = $(this).parents('tr:first');
      if (this.value == '') {
        var errorMessage = 'This is a required field';
		$('<span></span>')
		  .addClass('error-message')
          .text(errorMessage)
          .appendTo($listItem);
        $listItem.addClass('warning');
      }
    }
  });
	
});

</script>
<form>
<table>
<tr>
<td><label>name</label></td><td><input class="required" name="name" value="" id="name"><span>*</span></td>
</tr>
<tr>
<td><label>username</label></td><td><input class="required"type="text" name="username" value="" id="user"><span>*</span></td>
</tr>
<tr>
<td><input type="submit" name="submit" value="submit"></td>
</tr>
</table>
</form>
</html>