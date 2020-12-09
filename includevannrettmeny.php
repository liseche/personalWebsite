<div class="row">
	<div id="navbar">
  		<a class="active" href="blogg_main.php">Bloggen</a>
		<a href="javascript:void();">Veggen (kommer)</a>
		<a href="bokanbefalinger_main.php">Bokanbefalinger</a>
		<a href="javascript:void();">Fart og moro (kommer)</a>
	</div>
	
<!--
	<div class="col-12">
		<a href="filosofiblogg_main.php">
		<div class="col-2 mainmenysider">
			Bloggen
		</div>
		</a>

		<div class="col-1 tom"></div>

		<a href="filosofinfo_main.php">
		<div class="col-2 mainmenysider">
			Filosofinfo
		</div>
		</a>
			
		<div class="col-1 tom"></div>
			
		<a href="kortetanker_main.php">
		<div class="col-2 mainmenysider">
			Korte tanker
		</div>
		</a>
		
		<div class="col-1 tom"></div>

		<a href="#">
		<div class="col-2 mainmenysider">
			Dataprogrammer
		</div>
		</a>

	</div>-->
</div>
		
<script>
window.onscroll = function() {myFunction()};

var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}
</script>