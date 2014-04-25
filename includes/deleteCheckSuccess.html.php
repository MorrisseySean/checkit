<!DOCTYPE html>
<html>
<head>   
<link rel = "stylesheet" type = "text/css" href = "formStyleCheck.css">  
<style>
#popUp{
width: 100%;
height: 100%;
background: #5472F7;
position: fixed;
top: 0px;
right: 0px;
bottom: 0px;
left: 0px;
z-index: 1000;

}
h1{
font-family: 'cosmic_alienregular';
text-align: center;
padding: 0;
margin: .1em;
font-size: 40px;
color: white;
}
button{
animation:ease-in;
text-align:center; 

    
}
</style>
<script>
	function closeWin(){
	
	header("location: /www/checks.php");
	}
</script>
</head>
<body>
<div id ="popUp">
 <h1>Record has been deleted!</h1>     
 <button id = "button" onclick="closeWin()">Close</button>
</div>	
</body>
</html>
