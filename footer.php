
<hr>

<section class="mb-4" id="iletisim">
	<div class="row">
		<div class="col-md-12 col-12">
			<h3 class="text-center">İletişim</h3>
			<p class="text-center">
				<b>Telefon:</b> +90 (551) 405 4033<br>
				<b>Mail:</b> abdullahcanelibol@hotmail.com<br>
				<b>Adres:</b> Bandırma Onyedi Eylül<br>Üniversitesi<br>
			</p>
		</div>

	</div>
</section>

</div>





<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


<script type="text/javascript">
	var coll = document.getElementsByClassName("collapsible");
	var i;

	for (i = 0; i < coll.length; i++) {
		coll[i].addEventListener("click", function() {
			this.classList.toggle("active");
			var content = this.nextElementSibling;
			if (content.style.display === "block") {
				content.style.display = "none";
			} else {
				content.style.display = "block";
			}
		});
	}

	var myVar;

	function loader() {
		myVar = setTimeout(showPage, 3000);
	}

	function showPage() {
		document.getElementById("loader").style.display = "none";
		document.getElementById("icerik").style.display = "block";
	}

</script>
</div>
</div>
</body>
</html>