			var start = new Date().getTime();
			
			function corAleatoria() {
				var letras = '0123456789ABCDEF'.split('');
				var cor = '#';
				for (var i=0; i<6; i++) {
					cor += letras[Math.floor(Math.random()*16)];
				}
				return cor;
			}
			
			function fazerShapeAparecer() {
				
				var top = Math.random() * 400;
				var left = Math.random() * 500;
				var width = (Math.random() * 200)+100;
				
				if (Math.random() > 0.5) {
					document.getElementById("shape").style.borderRadius = "50%";
				} else {
					document.getElementById("shape").style.borderRadius = "0";
				}
				
				document.getElementById("shape").style.backgroundColor = corAleatoria();
				document.getElementById("shape").style.top = top + "px";
				document.getElementById("shape").style.left = left + "px";
				document.getElementById("shape").style.width = width + "px";
				document.getElementById("shape").style.height = width + "px";
				
				document.getElementById("shape").style.display = "block";
				start = new Date().getTime();
			}
			
			function aparecerDepoisDelay() {
				setTimeout(fazerShapeAparecer, Math.random() * 2000);
			}
			aparecerDepoisDelay();
			
			document.getElementById("shape").onclick = function() {
				document.getElementById("shape").style.display = "none";
				
				var end = new Date().getTime();
				var tempoCorrido = (end - start)/1000;
				
				document.getElementById("tempoCorrido").innerHTML = tempoCorrido + "s";
				aparecerDepoisDelay();
			}