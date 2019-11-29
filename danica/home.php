<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home Page</title>
    <style>

        body{
            background-color:pink;
            
        }
        div.gallery {
  border: 1px solid #ccc;
}

div.gallery:hover {
  border: 1px solid #777;
}

div.gallery img {
  width: 100%;
  height: auto;
  
}

div.desc {
  padding: 15px;
  text-align: center;
}

* {
  box-sizing: border-box;
  
}

.responsive {
  padding: 0 6px;
  float: left;
  width: 24.99999%;
}

@media only screen and (max-width: 700px) {
  .responsive {
    width: 49.99999%;
    margin: 6px 0;
  }
}

@media only screen and (max-width: 500px) {
  .responsive {
    width: 100%;
  }
}

.clearfix:after {
  content: "";
  display: table;
  clear: both;
  
}
h2{

    text-align:center;
}

p{
    
}

</style>
</head>
<body>

<h2>Welcome to your homepage</h2>
<a href="index.php? style="color:blue"> Go Back</a> </p>
<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="korea1.jpg">
      <img src="korea1.jpg" alt="Cinque Terre" width="600" height="400">
    </a>
    <div class="desc">Korea's one of the most spectacular places</div>
  </div>
</div>


<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="korea2.jpg">
      <img src="korea2.jpg" alt="Forest" width="600" height="400">
    </a>
    <div class="desc">Korea's one of the most spectacular places</div>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="white.jpg">
      <img src="white.jpg" alt="Northern Lights" width="600" height="400">
    </a>
    <div class="desc">Thailand's White House</div>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="paris.jpg">
      <img src="paris.jpg" alt="Mountains" width="600" height="400">
    </a>
    <div class="desc">The Famous Eifle Tower</div>
  </div>
</div>

<div class="clearfix"></div>

<div style="padding:6px;">
<p> <a href="index.php?logout='1'" style="color: red;">LOGOUT</a> </p>
</div>

</body>
</html>
