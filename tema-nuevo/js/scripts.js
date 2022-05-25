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
		url: 'php/backend.php',
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

