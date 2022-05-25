<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Landing</title>
	
	<!-- CSS only -->


<?php  wp_head();?>
</head>
<body>




<!--formulario-->

<section class="position-relative py-4 py-xl-5">
        <div class="d-md-none"></div>
        <div class="d-none d-md-block position-absolute top-0 start-0 w-100 h-100"></div>
    </section>
    <section class="position-relative py-4 py-xl-5">
        <div class="container position-relative">
            <div class="row">
                <div class="col"><img class="img12" src="http://localhost/wordpress/wordpress/wp-content/uploads/2022/05/KV.png"></div>
                <div class="col-md-6 col-xl-5">
                    <div> 

                        
	<form class="border rounded shadow p-3 p-md-4 p-lg-5" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" style="background: #f5f4f4;">
		<h3 class="text-center mb-4"> <strong class="uno" >1.</strong> Inscripción punto de venta</h3>
	                            
	    	<div class="mb-1">
	    		<input class="form-control" type="text" id="nombre" placeholder="Nombre del cliente">
	    		<label for="nombre" id="errNombreCliente"></label>
	    	</div>
	        
	        <div class="mb-1">
	        	<input class="form-control" type="text" id="nit" placeholder="Nit">
	        	<label for="nit" id="errNit"></label>
	        </div>
	        
	        <div class="mb-1">
	        	<input class="form-control" type="text" id="punto" placeholder="Nombre del punto">
	        	<label for="punto" id="errPunto"></label>
	        </div>
	        	
	        <div class="mb-1">
	        	<input class="form-control" type="text" id="equipo" placeholder="Nombre del equipo">
	        	<label for="equipo" id="errEquipo"></label>
	        </div>
	        
	        <div class="mb-1">
	        	<select class="form-control ciudad1"   id="ciudad" placeholder="Ciudad">
	                <option value="default" selected>seleccione una ciudad</option>
	                <option value="Ciudad#1">Ciudad#1</option>
	                <option value="Ciudad#2">Ciudad#2</option>
	                <option value="Ciudad#3">Ciudad#3</option>
	            </select>
	            <label for="ciudad" id="errCiudad"></label>
	        </div>
			
			<div class="mb-1">
				<input class="form-control" type="text" id="promotor" placeholder="Promotor">
				<label for="promotor" id="errPromotor"></label>
			</div>

			<div class="mb-1">
				<input class="form-control" type="number" id="rtc" placeholder="digite su numero RTC">
				<label for="rtc" id="errRtc"></label>
			</div>
	        
	        <div class="mb-1">
	        	<input class="form-control" type="text" id="capitan" placeholder="Capitan y/o usuario(Solo minusculas)">
	        	<label for="capitan" id="errCapitan"></label>
	        </div>

	        <label for="ok">He leido y aceptado las politicas de tratamiento de datos personales conoce los <a href="#">terminos y condiciones</a> </label>
	        
	        <div class="mb-1">
	        	<input  type="checkbox" id="ok">
	        	<label for="ok" id="errOk"></label>
	       	</div>

	       	<div class="d-grid gap-2 col-12 mx-auto">
	       		<button class="btn btn-primary" type="submit" id="siguiente" >Siguiente </button>
	       	</div>
	</form>

	

	</div>
                </div>
            </div>
        </div>
    </section>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	
	

	

	<script type="text/javascript">

$(document).ready(function(){
	console.log('cargo la pagina!!');


});


$('#siguiente').on('click',function(e){
	e.preventDefault();

//capturamos nombre
	nombreCliente = $('#nombre').val();

	var regexNombreCliente = /^[a-zA-Z ]+$/;

	if(!nombreCliente)
	{
		errNombreCliente = '* No puede estar vacio';
		$('#errNombreCliente').html(errNombreCliente);

	}else if(!regexNombreCliente.test(nombreCliente))
	{
		errNombreCliente = '* Caracter Invalido';
		$('#errNombreCliente').html(errNombreCliente);		
	}else{
		errNombreCliente = '';
		$('#errNombreCliente').html(errNombreCliente);
		nombreCliente = $('#nombre').val();
	}

//capturamos Nit
	
	nit = $('#nit').val();

	var regexNit = /^[0-9]+$/;
	
	if(!nit)
	{
		errNit = '* No puede estar vacio';
		$('#errNit').html(errNit);
	}else if(!regexNit.test(nit))
	{
		errNit = '* Debe ser numerico con numero verificación';
		$('#errNit').html(errNit);
	}else{
		errNit = '';
		$('#errNit').html(errNit);
		nit = $('#nit').val();
	}

//capturamos punto
	punto = $('#punto').val();

	var regexPunto = /^[a-zA-Z]+$/;

	if(!punto)
	{
		errPunto = '* No puede estar vacio';
		$('#errPunto').html(errPunto);

	}else if(!regexPunto.test(punto))
	{
		errPunto = '* Caracter Invalido';
		$('#errPunto').html(errPunto);
	}else{
		errPunto = '';
		$('#errPunto').html(errPunto);
		punto = $('#punto').val();
	}

//capturamos equipo
	equipo = $('#equipo').val();

	var regexEquipo = /^[a-zA-Z]+$/;

	if(!equipo)
	{
		errEquipo = '* No puede estar vacio';
		$('#errEquipo').html(errEquipo);

	}else if(!regexEquipo.test(equipo))
	{
		errEquipo = '* Caracter Invalido';
		$('#errEquipo').html(errEquipo);
	}else{
		errEquipo = '';
		$('#errEquipo').html(errEquipo);
		equipo = $('#equipo').val();
	}

//capturamos ciudad
	ciudad = $('#ciudad').val();

	if(ciudad == 'default')
	{
		errCiudad = '* Selecciona una ciudad';
		$('#errCiudad').html(errCiudad);
	}else{
		errCiudad = '';
		$('#errCiudad').html(errCiudad);
		ciudad = $('#ciudad').val();
		
	}

//promotor
promotor = $('#promotor').val();

	var regexPromotor = /^[a-zA-Z]+$/;

	if(!promotor)
	{
		errPromotor = '* No puede estar vacio';
		$('#errPromotor').html(errPromotor);

	}else if(!regexPromotor.test(promotor))
	{
		errPromotor = '* Caracter Invalido';
		$('#errPromotor').html(errPromotor);
	}else{
		errPromotor = '';
		$('#errPromotor').html(errPromotor);
		promotor = $('#promotor').val();
		
	}

//capturamos rtc
	rtc = $('#rtc').val();

	var regexRtc = /^[0-9]+$/;
	
	if(!rtc)
	{
		errRtc = '* No puede estar vacio';
		$('#errRtc').html(errRtc);
	}else if(!regexRtc.test(rtc))
	{
		errRtc = '* Debe ser numerico';
		$('#errRtc').html(errRtc);
	}else{
		errRtc = '';
		$('#errRtc').html(errRtc);
		rtc = $('#rtc').val();
		
	}

//capitan
	capitan = $('#capitan').val();

	var regexCapitan = /^[a-zA-Z]+$/;

	if(!capitan)
	{
		errCapitan = '* No puede estar vacio';
		$('#errCapitan').html(errCapitan);

	}else if(!regexCapitan.test(capitan))
	{
		errCapitan = '* Caracter Invalido';
		$('#errCapitan').html(errCapitan);
	}else{
		errCapitan = '';
		$('#errCapitan').html(errCapitan);
		capitan = $('#capitan').val();
		
	}
//ok
	
	
    if($('#ok').prop('checked') == true) {
        errOk = '';
    	$('#errOk').html(errOk);

    }else{
    	errOk = '* acepta los terminos';
    	$('#errOk').html(errOk);
    }

//si no hay errores

if(!errOk && !errCapitan && !errRtc && !errPromotor && !errCiudad && !errEquipo && !errPunto && !errNit && !errNombreCliente)
{
	$.ajax({
		url: './backend.php/',
		type: 'POST',
		data: {
				nombre: nombreCliente,
				nit: nit,
				punto: punto,
				equipo: equipo,
				ciudad: ciudad,
				promotor: promotor,
				rtc: rtc,
				capitan: capitan
		},
		success: function(r){
			const obj = JSON.parse(r);
			
			if(obj.result == 1){
				window.location.href = 'https://legger.co/';
			}
		}
	});
}

});




	</script>


   

</body>
</html>