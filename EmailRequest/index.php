<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #f2f2f2;
}

.topnav a {
  float: left;
  color: #425cf4;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 14px;
}

.topnav a:hover {
  background-color: #425cf4;
  color: black;
}

.topnav a.active {
  background-color: #425cf4;
  color: white;
}

.subnav {
  float: left;
  overflow: hidden;
}

.subnav .subnavbtn {
  font-size: 16px;  
  border: none;
  outline: none;
  color: #425cf4;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .subnav:hover .subnavbtn {
  background-color: #f2f2f2;
}

.subnav-content {
  display: none;
  position: absolute;
  left: 0;
  background-color: #f2f2f2;
  width: 100%;
  z-index: 1;
}

.subnav-content a {
  float: left;
  color: #425cf4;
  text-decoration: none;
}

.subnav-content a:hover {
  background-color: #425cf4;
  color: black;
}

.subnav:hover .subnav-content {
  display: block;
}


</style>
</head>
<body>

<div class="topnav">
  <a class="active" href="./HTML_FILES/home.html" target="if">Home</a>
  <a href="./HTML_FILES/newuser.php" target="if">New User Email</a>
  <a href="#Transfer" target="if">Transfer User Email</a>
  <a href="#Terminate" target="if">Terminate Email</a>
  
  	<div class="subnav">
    <button class="subnavbtn">Distibution Group<i class="fa fa-caret-down"></i></button>
    	<div class="subnav-content">
      		<a href="#NewDistro" target="if">New Distribution Group</a>
      		<a href="#AddToGroup" target="if">Add To Group</a>
      		<a href="#RemFromGroup" target="if">Remove From Group</a>
    	</div>
  </div> 
  
</div>	

<iframe height="7000" name="if" width="100%" src="./HTML_FILES/home.html">123</iframe>


</body>
</html>

