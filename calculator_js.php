


<html>
<head>

<title>my calci</title> 
<style type=text/css>


         input[type="button"] 
         { 
         background-color:; 
         color: black; 
         border: solid black 2px; 
         width:100% 
         } 
  

</style>


</haed>
<body>
<form name="myform" method="post" align="center">


<table align="center" border="2px">

<tr>
		<td colspan="3"><input type="text" id="inputfield" onkeypress="return isNumber(event)"  onKeyUp="Prevent(this.value)"></td>	
</tr>
<tr>
		<td  colspan="3"><input readonly id="resultfield"></td>	
</tr>
<tr>
	<td colspan="2"><input type="button" value="C" onclick="f_clear()"></td>
	<td colspan=""><input type="button" value="=" onclick="soluation()"></td>
<tr>
	<td><input type="button" value="1" onclick="dis('1')"></td>
	<td><input type="button" value="2" onclick="dis('2')"></td>
	<td><input type="button" value="3" onclick="dis('3')"></td>
</tr>

<tr>
 	<td><input type="button" value="4" onclick="dis('4')"></td>
	<td><input type="button" value="5" onclick="dis('5')"></td>
	<td><input type="button" value="6" onclick="dis('6')"></td>
</tr>

<tr>
	<td><input type="button" value="7" onclick="dis('7')"></td>
	<td><input type="button" value="8" onclick="dis('8')"></td>
	<td><input type="button" value="9" onclick="dis('9')"></td>

<tr>
	<td><input type="button" value="0" onclick="dis('0')"></td>
	<td><input type="button" value="+" onclick="dis('+')"></td>
	<td><input type="button" value="-" onclick="dis('-')"></td>
<tr>
<td>
<input type="button" value="*" onclick="dis('*')"></td>
<td><input type="button" value="/" onclick="dis('/')"></td>
<td><input type="button" value="." onclick="dis('.')"></td>
</tr>


		
		
</table>		
		

</form>
<script>

function Prevent(value) {
    var x = document.getElementById("inputfield");
    if (value == '+') {
        x.value = '';
    }
	  if (value == '-') {
        x.value = '';
    }
	  if (value == '/') {
        x.value = '';
    }
	  if (value == '*') {
        x.value = '';
    }
	  if (value == '.') {
        x.value = '';
    }
}



function isNumber(evt)
      {		 //1. allow only 0-9 and + - * / keys
		 // for number keys no shift key check need to apply
		 
		 
		 // but for sign keys , need to check, if shift key is pressed
		 
		 var charCode = (evt.which) ? evt.which : event.keyCode;
		 //alert(charCode);
		 //var shiftPressed = (window.Event) ? e.modifiers & Event.SHIFT_MASK : e.shiftKey;
		 
		 if (charCode == 43)
		  {
				return true;
		  }

		if (charCode == 42)
		  {
				return true;
		  }		  
		 
		 
		 
		 
		 //alert(charCode);
         if (charCode >= 48 && charCode <= 57){
            return true;
		 }
		 
		 if (charCode == 45 ){
            return true;
		 }
		 
		 if (charCode == 47 ){
            return true;
		 }
		 
		 if (charCode == 46 ){
			 
			 return true;
		 }
		  
	   
         return false;
		 
		 //+ = 43
		 // - = 45
		 // * =  42
		 // / = 47
		 // . = 46
      }

		function dis(val){
			
			document.getElementById("inputfield").value+=val;
			
			
		}

		
		
        function soluation() 
         { 
		 
			
			var x = document.getElementById("inputfield").value;
             var y = eval(x)  ; 
             
			 document.getElementById("resultfield").value = y;
		 }
				 
			function f_clear(){
				
			
			document.getElementById("inputfield").value = "";	
			document.getElementById("resultfield").value = "";
			}
			
			


</script>


</body>
</html>

