# E-sites
Informatica eindproject









button {
  
position: relative;
  
//display:block;
  
height: 45px;
  
width: 150px;
  
margin: 10px 7px;
  
padding: 5px 5px;
  
font-weight: 700;
  
font-size: 15px;
  
letter-spacing: 2px;
  
color: #383736;
  
border-bottom: 2px #383736 solid;
 
border-left-style: none;
border-top-style: none;
border-right-style: none;  
text-transform: uppercase;
  
outline: 0;
  overflow:hidden;
  
background: none;
   
z-index: 10;
cursor: pointer;
  
transition: 0.08s ease-in;
  
-o-transition: 0.08s ease-in;
  
-ms-transition: 0.08s ease-in;
 
-moz-transition: 0.08s ease-in;
  
-webkit-transition: 0.08s ease-in;

}



.fill:hover {
  
color: whitesmoke;

}



.fill:before {
  
content: "";
  
position: absolute;
  
background: #383736;
  
bottom: 0;
  
left: 0;
  
right: 0;
  
top: 100%;
  
z-index: -1;
  
-webkit-transition: top 0.09s ease-in;

}



.fill:hover:before {
  
top: 0;
}















<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Button Fill Animation</title>
  
  
  
      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>
  <button class="fill">View Story</button>
<button class="svg">View Story</button>
<button class="arrow">View Story</button>
<button class="slide">&nbsp;</button>
<button class="slide left">&nbsp;</button>
<button class="fade">View Story</button>
  
  
</body>
</html>
