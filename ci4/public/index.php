<!DOCTYPE html>
<html>
<head>
  <title>Riddle Me This?</title>
	<link rel="stylesheet" href="style.css">
  	<script src="scriptI.js"></script>
  	<link rel="icon" type="image/x-icon" href="0bfuscousXLogo.png">	
</head>
<body>
<ul><font face = Candara>
  <li class="dropdown">
  	<a href="javascript:void(0)" class="dropbtn">SOCIALS</a>
    <div class="dropdown-content">
      <a href="https://www.instagram.com/tobaltolim/">Instagram</a>
      <a href="https://discord.gg/W5Fem9s82W">Discord</a>
      <a href="https://steamcommunity.com/profiles/76561198282290849/">Steam</a>
      <a href="https://medal.tv/u/%25c3%2598bfuscousx">Medal</a>
      <a href="https://www.youtube.com/channel/UCSCKgbfi3wsSa05VqHzLgbw">YouTube</a>
    </div></li>
  
 <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">MERCHANDISE</a>
    <div class="dropdown-content">
      <a href="https://www.facebook.com/feathersandfurs22">Feathers & Furs Poultry Supply</a>
      <a href="https://streamelements.com/0bfuscousx/tip">MedalxPaypal</a>
	  </div></li>
	
  <li class="dropdown">
  	<a href="javascript:void(0)" class="dropbtn">CONTACT</a>
    <div class="dropdown-content">
      <a href="lvlim@student.apc.edu.ph">Outlook</a>
      <a href="https://www.linkedin.com/in/lorenz-tobias-lim-41872021a/">LinkedIn</a>
      <a href="https://my-learning.w3schools.com">Resources</a>
      <a href="guests.php">Guests</a>	    
    </div></li>
      
    
</font></ul>
  
 <h1 id="show" style="margin-left: 150px;" title="Codename: ØbfuscousX">
  <font face ="Candara" size ="6"> Personal Customized Portfolio
  </font>
 </h1>

	
<!-- The iFrame -->	
  <iframe src="https://medal.tv/u/%25c3%2598bfuscousx" frameborder="2" width="650" height="450" style="center"></iframe>
  <img id="myImg" src="https://imgur.com/KfZtDcP" 
       alt="ØbfuscousX" style="float:right;width:auto;height:450px;">

<!-- The Modal -->
<div id="myModal" class="modal">
  <span class="close">&times;</span>
  <img class="modal-content" id="img01">
  <div id="caption"></div>
</div>
<script>
// Get the modal
var modal = document.getElementById('myModal');
// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById('myImg');
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
  modal.style.display = "block";
  modalImg.src = this.src;
  captionText.innerHTML = this.alt;
}
// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];
// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
  modal.style.display = "none";
}
</script>	
	
 <p id="href"></p>
 <p id="loc"></p>
 <p id="NObrows"></p>
	
<font face="Candara">  	
<!--riddlemethis?-->
<style>
.button {
  display: inline-block;
  padding: 15px 25px;
  font-size: 16px;
  font-family: Candara;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color: White;
  background-color: Black;
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px Pink;
}

.button:hover {
  background-color: #140e0f;
  color: White;
  }

.button:active {
  background-color: Black;
  box-shadow: 0 5px Pink;
  transform: translateY(4px);
}
</style>
	
<div class="city" title="The answer is right in front of you; You just choose to ignore it.">
 <h2>Riddle Me This?</h2>
  <button onclick="myFunction()" class="button">Answer = If you don't want your IP address compromised :))</button>
   <p id="demo"></p>
</div>
	
 <script>
function myFunction() {
  let text;
  let riddle = prompt("What does not move but is protected by a shell?\nIf heated, does you well?", "?");
  if (riddle == null || riddle != "Peanut") {
    text = "I really hoped you'd be better than this. [<i>18.9.4.4.12.5 ERROR</i>]";
  } else if (riddle == "Peanut") {
    text = "Congratulations! You win, for now.";
  	} else {
  	  text = "I really hoped you'd be better than this. [<i>18.9.4.4.12.5 ERROR</i>]";
   	  }
  document.getElementById("demo").innerHTML = text;
}
</script>

		
   <div class="city" title="Who">
    <h2>NAME:</h2>
     <p>Toby</p>
   </div> 
 
   <div class="city" title="are">
    <h2>HOBBIES:</h2>
     <p>Gaming, Hanime, Comics Media, Instrumentalist</p>
   </div>

   <div class="city" title="you,">
    <h2>EMAIL:</h2>
     <p>lvlim@student.apc.edu.ph</p>
   </div>

   <div class="city" title="really?">
    <h2>QUOTE:</h2>
     <p>"Forget about others for a moment and think only of yourself. It is what we do NOW that defines who we are tomorrow."</p>
   </div>
	
    <div class="city" title="?">
     <h2>FREEPLAY:</h2>
	<!-- Game iFrame -->
	<style>
		p.iFBord {
		  border: 2px solid black;
		  border-radius: 8px;
		  padding: 5px;
		}
	</style>	
         <p class="iFBord"><iframe src="https://www.taipangame.com/play" frameborder="5" width="1186" height="650" style="border:5px solid DarkGreen;border-radius:10px;"></iframe></p>
     </div>
 
	<!--PHP-->
	 <div class="city" title="Kimi No Nawa.">
	   
	<h2>Leave your thoughts about my website? <PHP Form Validation></h2>
	<p><i> Please input your information for logging and documentation: <i></p>
	<form method="post" action="/lab2/week9/index.php">  
	  Name: <input type="text" name="name">
	  <br><br>
	  E-mail: <input type="text" name="email">
	  <br><br>
	  Website: <input type="text" name="website">
	  <br><br>
	  Comment: <textarea name="comment" rows="5" cols="40"></textarea>
	  <br><br>
	  Gender:
	  <input type="radio" name="gender" value="female">Female
	  <input type="radio" name="gender" value="male">Male
	  <input type="radio" name="gender" value="other">Other
	  <br><br>
	  <input type="submit" name="submit" value="Submit">  
	</form>

	<h2>Your Input:</h2><br><br><br><br>	 </div>	

	<!--insert and recording of data-->	
	<br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Undefined variable: conn in C:\wamp64\tmp\www\lab2\week9\index.php on line <i>247</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0002</td><td bgcolor='#eeeeec' align='right'>363440</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='C:\wamp64\tmp\www\lab2\week9\index.php' bgcolor='#eeeeec'>...\index.php<b>:</b>0</td></tr>
</table></font>
<br />
<font size='1'><table class='xdebug-error xe-uncaught-exception' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Fatal error: Uncaught Error: Call to a member function close() on null in C:\wamp64\tmp\www\lab2\week9\index.php on line <i>247</i></th></tr>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Error: Call to a member function close() on null in C:\wamp64\tmp\www\lab2\week9\index.php on line <i>247</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0002</td><td bgcolor='#eeeeec' align='right'>363440</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='C:\wamp64\tmp\www\lab2\week9\index.php' bgcolor='#eeeeec'>...\index.php<b>:</b>0</td></tr>
</table></font>
