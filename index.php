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
  <a class="active" href="./html_files/2.html" target="if">Home</a>
  <a href="./html_files/who.html" target="if">Who is Yankl</a>
  <a href="./html_files/poet.html" target="if">Poetry Experiment</a>
   	<div class="subnav">
    <button class="subnavbtn">School I attend<i class="fa fa-caret-down"></i></button>
    <div class="subnav-content">
      <a href="./html_files/53school.html" target="if">Kishinev 53</a>
      <a href="./html_files/21school.html" target="if">Kisinev 21</a>
      <a href="http://www.utm.md/en/" target="_blank">Kishinev Polytechnical Institut</a>
    </div>
  </div> 
  <a href="./html_files/photo.html" target="if">Foto Gallery</a>
  <a href="./html_files/vi.html" target="if">Vi Editor</a>
 
  
</div>
<iframe height="7000" name="if" scrolling="no" width="100%" src="./html_files/2.html">1234</iframe>

</body>
</html>

