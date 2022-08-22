<html>

	<head>
		<title>Accordion Imprementado</title>
		
		<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
		
		<style type="text/css">
			.accordion 
			{
			  background-color: #eee;
			  color: #444;
			  cursor: pointer;
			  padding: 18px;
			  width: 100%;
			  border: none;
			  text-align: left;
			  outline: none;
			  font-size: 15px;
			  transition: 0.4s;
			}

			.active, .accordion:hover 
			{
				background-color: #ccc; 
			}

			.panel 
			{
			  padding: 0 18px;
			  display: none;
			  background-color: white;
			  overflow: hidden;
			}
		</style>
						
	</head>
	
	<body>
	
		<h2>Accordion</h2>

			<button class="accordion">Seção 1</button>
			<div class="panel">
			  <p>Aqui digite a descrição da 1º Seção</p>
			</div>

			<button class="accordion">Seção 2</button>
			<div class="panel">
			  <p>Aqui digite a descrição da 2º Seção.</p>
			</div>

			<button class="accordion">Seção 3</button>
			<div class="panel">
			  <p>Aqui digite a descrição da 3º Seção.</p>
			</div>
	
		<script>
			var acc = document.getElementsByClassName("accordion");
			var i;

			for (i = 0; i < acc.length; i++) {
			  acc[i].addEventListener("click", function() {
				this.classList.toggle("active");
				var panel = this.nextElementSibling;
				if (panel.style.display === "block") {
				  panel.style.display = "none";
				} else {
				  panel.style.display = "block";
				}
			  });
			}
		</script>
	
	</body>
	
</html>