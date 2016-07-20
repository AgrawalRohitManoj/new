<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8"/>
<title>GYM WEBSITE LAYOUT</title>
<meta name="viewport" content="width= divice-width , initial-scale=1.0">
<link rel="stylesheet" href="blueberry.css"/>
<style type="text/css">
*{
margin: 0;
border: 0;
padding: 0;
}
body{
background: #f0f0f0;
font: 14px/20px Arial,san-serif;
color: #555;
margin: 0;
}
h1{
text-align: center;
font-size: 180%;
line-height: 120%;
pading: 5% 0;
}
h2{
text-decoration: underline;
line-height: 280%;
padding-left :2%;
}
h3{
line-height: 110%;
padding: 5% 0;
}
p{
padding: 1%;
}
img{
text-align: center;
max-width: 100%;
height: auto;
width: auto;
}
a{
color: #fff;
text-decoration: none;
font-weight: bold;
}
a:hover{
color: #fff;
text-decoration: underline;
}
header{
background: #405580;
width: 100%;
height: 86px;
position: fixed;
top: 0;
left: 0;
z-index : 100;
opacity: 0.90;
}
#logo{
margin: 20px;
float: left;
width: 200px;
height: 60px;
position:fixed;
background: -----------------------------;
}
nav{
float: right;
padding: 35px 20px 20px 0;
}
#menu-icon{
display: hidden;
width: 40px;
height: 40px;
background :---------------------------- ;
}
a:hover#menu-icon {
border-radius: 4px 4px 0 0;
}
ul{
list-style: none;
}
nav ul li{
display : inline-block;
float: left; 
padding: 10px;
}
.current{
color: #fff;
text-decoration: underline;
}
#doc{
margin: 40px 0;
}
#content{
margin: 0 auto;
max-width: 1140px;
margin-top: 110px;
}
.blueberry{
max-width: 960px;
margin-top: 110px;
}
section{
width: 29%;
float: left;
margin : 2% 2%;
text-align: center;
}
.clear{
clear: both;
}
article{
float: left;
margin: 0 auto;
width: 50%;
height: auto;
padding: 4%; 
}
aside{
float: right;
margin: 0 auto;
width: 35%;
height : auto;
}
ul.gym li{
padding-left: 3%;
}
footer{
background: #333333;
width: 100%;
padding:2%;
overflow: hidden;
opacity: 0.90;
}
footer p, footer h3{
color: #fff;
}
footer p a{
color: #fff;
text-decoration: none;
}
ul.social li{
display: inline;
}
ul.social li img{
height: 50px;

}
/*------------------------------------------------*/
@media screen and (max-width: 478px)
{
body{
position: absolute;
}
}
@media screen and(max-width: 740 px)
{
header{
position: absolute;
}
nav ul li{
box-sizing: border-box;
width:100%;
padding:15px;
text-align:left
}
#menu-icon{
display: inline-block;
}
nav ul, nav:active ul{
display: none;
position: absolute;
padding: 20 px;
background: #405580;
border: 1 px solid #fff;
right: 20 px;
top: 60 px;
width: 50%;
border-radius: 2px 0 2px 2px;
}
nav li{
text-align: center;
width: 100%;
padding: 10px 0;
margin: 0;
}
nav:haver ul{
display: block;
}
section{
float: left;
width: 100%;
margin: 0;
padding: 0;
}
article{
float: left;
width: 100%;
margin: 0;
padding: 0;
}
aside{
float: left;
width: 100%;
margin:0;
padding: 0;
}
}

</style>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js" >
</script>
<script src="jquery.blueberry.js">
</script>
<script>
$(window).load(function()
{
$('.blueberry').blueberry();
});
</script>
</head>
<body>
<div id="container">
<header>					

<a href="#" id="logo"></a>
<img src="logo.jpg"/>
</header>
<header>
<nav>
<a href="#> id="menu-icon"></a>
<ul>
<li><a href="#" class="current">Home</a></li>
<li><a href="#">About us</a></li>
<li><a href="#">Classes</a></li>
<li><a href="#">Trainer</a></li>
<li><a href="#">Contact us</a></li>
</ul>
</nav>
</header>
<div id="content">
<div class="blueberry">
<ul class="slides">
<li><img src="20.jpg"/></li>
<li><img src="10.jpg"/></li>
<li><img src="11.jpg"/></li>
</ul>
</div>
</div>
</div>
<section>
<img src ="trainer.jpg"/>
<h1>Best Trainer Arround</h1>
<p> Here in the gym we have the best trainers staff in the tri- state area as we seek out and recruit talented trainers. wih all the right certificates . came ti today and have a sit down with one of the trainer so we can help you to meet yours goal</p>
</section>
<section>
<img src ="location.png"/>
<h1>Location</h1>
<p> our location sit near MIT college, opp of Gajanan temple, Rambaugh colony , kothrud, pune </p>
</section>
<section>
<img src ="i2.png"/>
<h1>Check us out</h1>
<p> To show how convinient we are in our facilities and their satisfying the need of our clients, we offer a free two week pass so any one interested can first get a feel for our gym and decide whether or not they would like to join. call or visit us today for your free pass</p>
</section>
<div class ="clear"></div>
<article>
<img src="2.jpg"/>
</article>
<aside>
<h2> Our Special Class Scedule</h2>
<ul class ="Combine class scedule">
<img src="cycl.jpg"/>
<li><h3> Studio cycling at 8 AM - 60 min</h3></li>
<img src="zumba.jpg"/>
<li><h3> Zumba class at 9 AM - 60 min</h3></li>
<img src="abs.jpg"/>
<li><h3> ABS class at 10 AM - 60 min</h3></li>
<img src="yoga.jpg"/>
<li><h3> Power Yoga class at 11 AM - 60 min</h3></li>
</ul>
</aside>
<div class="clear"></div>
<section>
<h1>Ladies Section</h1>
<img src="ladies.jpg"/>
<p>Included in our facilit is a ladies only. section of the gym where women can workout to themselves </p>
</section>
<section>
<h1>The Gym Floor</h1>
<img src="1.jpg"/>
<p> Our Gym floor is as specious as they come. enjoy scenic view from the cardio equipment on the third floor </p>
</section>
<section>
<h1> Swimming Pool </h1>
<img src="swim.jpg"/>
<p> In our gym their is a one big swimming pool which is free for our gym member.Their is special swimmers that teach you swimming.</p>
</section>
<footer>
<section>
<h3><b>Bodyflex Gym</b></h3>
<p>Rambaugh colony ,near MIT collage,opp of Gajanan temple,Kothrud,411038<br>
rjagarawal13march@gmail.com</p>
</section>
<section>
<h3>Connect with us!</h3>
<ul class="social">
<li><a href="#"><img src="f.png "/></a></li>
<li><a href="#"><img src="g.png"/></a></li>
<li><a href="#"><img src="y.png "/></a></li>

</ul>
</section>
<section>
<ul class="logo">
<li><a href="#"><img src="9.jpg "/></a></li>
</ul>
</section>
</body>
</html>

