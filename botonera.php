<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>




	<div id="clicks">
        <div id="boton_1" onclick="boton_uno()"></div>
        <div id="boton_2"></div>
        <div id="boton_3"></div>
        <div id="boton_4"></div>
        <div id="boton_5"></div>
        <div id="boton_6"></div>
        <div id="boton_7"></div>
        <div id="boton_8"></div>
        <div id="boton_9"></div>
        <div id="boton_10"></div>
        <button onclick="iniciar()">INICIAR</button>
	</div>
</body>    
</html>
		<script type="text/javascript">
			  document.getElementById("boton_1").style.display = 'none';
			  document.getElementById("boton_2").style.display = 'none';
			  document.getElementById("boton_3").style.display = 'none';
			  document.getElementById("boton_4").style.display = 'none';
			  document.getElementById("boton_5").style.display = 'none';
			  document.getElementById("boton_6").style.display = 'none';
			  document.getElementById("boton_7").style.display = 'none';
			  document.getElementById("boton_8").style.display = 'none';
			  document.getElementById("boton_9").style.display = 'none';
			  document.getElementById("boton_10").style.display = 'none';

			  function iniciar(){
			  document.getElementById("boton_1").style.display = 'block';
			  document.getElementById("boton_2").style.display = 'block';
			  document.getElementById("boton_3").style.display = 'block';
			  document.getElementById("boton_4").style.display = 'block';
			  document.getElementById("boton_5").style.display = 'block';
			  document.getElementById("boton_6").style.display = 'block';
			  document.getElementById("boton_7").style.display = 'block';
			  document.getElementById("boton_8").style.display = 'block';
			  document.getElementById("boton_9").style.display = 'block';
			  document.getElementById("boton_10").style.display = 'block';
			  }

		</script>

<script type="text/javascript">

	for (var i = 1; i <=10; i++) {
		botones(i);
	}
	function botones(num){
		switch(num){
			case 1: botones(); 
				var container;
		        container = document.getElementById('boton_1');
		        container.innerHTML = '<button>competidor 1</button>';
			break;
			case 2:
				var container;
		        container = document.getElementById('boton_2');
		        container.innerHTML = '<button>competidor 2</button>';
			; break;
			case 3: botones(); 
				var container;
		        container = document.getElementById('boton_3');
		        container.innerHTML = '<button>competidor 3</button>';
			break;
			case 4:
				var container;
		        container = document.getElementById('boton_4');
		        container.innerHTML = '<button>competidor 4</button>';
			; break;

			case 5: botones(); 
				var container;
		        container = document.getElementById('boton_5');
		        container.innerHTML = '<button>competidor 5</button>';
			break;
			case 6:
				var container;
		        container = document.getElementById('boton_6');
		        container.innerHTML = '<button>competidor 6</button>';
			; break;
			case 7: botones(); 
				var container;
		        container = document.getElementById('boton_7');
		        container.innerHTML = '<button>competidor 7</button>';
			break;
			case 8:
				var container;
		        container = document.getElementById('boton_8');
		        container.innerHTML = '<button>competidor 8</button>';
			; break;
			case 9: botones(); 
				var container;
		        container = document.getElementById('boton_9');
		        container.innerHTML = '<button>competidor 9</button>';
			break;
			case 10:
				var container;
		        container = document.getElementById('boton_10');
		        container.innerHTML = '<button>competidor 10</button>';
			; break;
		}
	}

</script>
