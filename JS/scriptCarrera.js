  
  


/**********************************************************************	
*******															*******
*******				Parte inicial de funciones y				*******
*******				    	 cronometro                 		*******
*******				          		            				*******
*******															*******
**********************************************************************/


    //setInterval

    /*************************************************
    ******                                      ******
    ******      Variables del cronometro        ******
    ******                                      ******
    *************************************************/
    var cronometro;
	var contador_d = 0;
	var contador_s = 0;
    var contador_m = 0;
    var usuario;
    //var i;


    function carga()
    {
        d = document.getElementById("decimas");
        s = document.getElementById("segundos");
        m = document.getElementById("minutos");
        cronometro = setInterval(
            
            function(){
                if(contador_s==60)
                {
                    contador_s=0;
                    contador_m++;
                    m.innerHTML = contador_m;
                    if(contador_m==60)
                    {
                        contador_m=0;
                    }
                }
                s.innerHTML = contador_s;
                contador_s++;
            }
            ,100);
            document.getElementById("bottonArrancar").style.display = 'none';
            document.getElementById("bottonDetener").style.display = 'inline-block';
            document.getElementById("btnReload").style.display = 'none';
    }

    function detenerse()
    {
        clearInterval(cronometro);
        document.getElementById("bottonArrancar").style.display = 'inline-block';
        document.getElementById("bottonDetener").style.display = 'none';
        document.getElementById("btnReload").style.display = 'inline-block';
    }

	function mostrar(){
		seg = document.getElementById("mostrars");
        min = document.getElementById("mostrarm");
		seg.innerHTML = contador_s;
		min.innerHTML = contador_m;
		//window.alert(contador_m+" : "+contador_s);
	}

    function reload() {

        location.reload();
    }
    
    function ocultarBonotes(){

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
    }

	function iniciar(cont){

        cont = prompt("Cuantos jugadores ingresaran?");

        if (cont <=10){
            var con = cont;
        }else {
            alert("Solo se permite un maximo de 10 jugadores");
            return cont;
        }

        conteo(con);

        document.getElementById("boton_1").style.display = 'inline-block';
        document.getElementById("boton_2").style.display = 'inline-block';
        document.getElementById("boton_3").style.display = 'inline-block';
        document.getElementById("boton_4").style.display = 'inline-block';
        document.getElementById("boton_5").style.display = 'inline-block';
        document.getElementById("boton_6").style.display = 'inline-block';
        document.getElementById("boton_7").style.display = 'inline-block';
        document.getElementById("boton_8").style.display = 'inline-block';
        document.getElementById("boton_9").style.display = 'inline-block';
        document.getElementById("boton_10").style.display = 'inline-block';
        mostrarBotones();
    }

    function mostrarBotones(){

        document.getElementById("bottonArrancar").style.display = 'inline-block';
        // document.getElementById("bottonMostrar").style.display = 'inline-block';

        //Mostrar impresión de cronometros

        document.getElementById("minutos").style.display = 'inline-block';
        document.getElementById("dosPuntoss").style.display = 'inline-block';
        document.getElementById("dosPuntos").style.display = 'inline-block';
        document.getElementById("segundos").style.display = 'inline-block';
        document.getElementById("mostrarm").style.display = 'inline-block';
        document.getElementById("mostrars").style.display = 'inline-block';
        document.getElementById("btnIniciar").style.display = 'none';
    }

    /*************************************************
    ******                                      ******
    ******          Sección de cargue           ******
    ******             de botones               ******
    ******                                      ******
    *************************************************/

    function boton1(){
    
        mostrar();
	}	  
		
	function boton2(){
        
        mostrar();
    }
    	  
	function boton3(){
        
        mostrar();	
    }

    function boton4(){
        
        mostrar();	
    }

    function boton5(){
        
        mostrar();	
    }

    function boton6(){
        
        mostrar();	
    }

    function boton7(){
        
        mostrar();	
    }

    function boton8(){
        
        mostrar();	
    }

    function boton9(){
        
        mostrar();	
    }

    function boton10(){
        
        mostrar();	
    }

    /*************************************************
    ******                                      ******
    ******              Parte del case          ******
    ******                                      ******
    *************************************************/

    function conteo(con){
        for ( i = 1; i <=con; i++ ) {

            usuario = prompt("Número identificador del " + i + " competidor");

            botones(i);
            
        }
    }
    console.log(usuario);
        function botones(num){
            switch(num){
                case 1:
                    var container;
                    container = document.getElementById('boton_1');
                    container.innerHTML = '<button class="btn btn-info" >' + usuario + '</button>';            
                ;break;

                case 2:
                    var container;
                    container = document.getElementById('boton_2');
                    container.innerHTML = '<button class="btn btn-info" >' + usuario + '</button>';
                    
                ;break;

                case 3: botones(); 
                    var container;
                    container = document.getElementById('boton_3');
                    container.innerHTML = '<button class="btn btn-info" >' + usuario + '</button>';
                ;break;

                case 4:
                    var container;
                    container = document.getElementById('boton_4');
                    container.innerHTML = '<button class="btn btn-info" >' + usuario + '</button>';
                ;break;

                case 5: botones(); 
                    var container;
                    container = document.getElementById('boton_5');
                    container.innerHTML = '<button class="btn btn-info" >' + usuario + '</button>';
                ;break;

                case 6:
                    var container;
                    container = document.getElementById('boton_6');
                    container.innerHTML = '<button class="btn btn-info" >' + usuario + '</button>';
                ;break;

                case 7: botones(); 
                    var container;
                    container = document.getElementById('boton_7');
                    container.innerHTML = '<button class="btn btn-info" >' + usuario + '</button>';
                ;break;

                case 8:
                    var container;
                    container = document.getElementById('boton_8');
                    container.innerHTML = '<button class="btn btn-info" >' + usuario + '</button>';
                ;break;

                case 9: botones(); 
                    var container;
                    container = document.getElementById('boton_9');
                    container.innerHTML = '<button class="btn btn-info" >' + usuario + '</button>';
                ;break;

                case 10:
                    var container;
                    container = document.getElementById('boton_10');
                    container.innerHTML = '<button class="btn btn-info" >' + usuario + '</button>';
                ;break;
            }
        }