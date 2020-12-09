<div class="col-2">
			<div class="sidenav">

				<button class="dropdown-btn">Februar 2020
			  		<i>></i>
			  	</button>
			  	<div class="dropdown-container">
			  		<a href="blogg_ytring_stress.php">17. februar: Leserinnlegg - Utbrente folk: de moderne martyrene?</a>
			  		<a href="blogg_20200226.php">26. februar: Å holde en "commonplace"-bok er det beste jeg har gjort</a>
			  	</div>


			  	<button class="dropdown-btn">Oktober 2019
			    	<i>></i>
			  	</button>
			  	<div class="dropdown-container">
						<a href="blogg_filosofi_metafysikk_egenskaper.php">11. oktober: Essay - Egenskapenes ontologiske natur</a>
						<a href="blogg_filosofi_skeptisisme_stroud.php">14. oktober: Essay - Problemet med Descartes' drømmeargument</a>
			 	</div>

			</div>
</div>

		<script>
			/* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
			var dropdown = document.getElementsByClassName("dropdown-btn");
			var i;

			for (i = 0; i < dropdown.length; i++) {
			  dropdown[i].addEventListener("click", function() {
			  this.classList.toggle("active");
			  var dropdownContent = this.nextElementSibling;
			  if (dropdownContent.style.display === "block") {
			  dropdownContent.style.display = "none";
			  } else {
			  dropdownContent.style.display = "block";
			  }
			  });
			}
		</script>