function logueo()
{
	var form=document.form;	
	
      	if (form.email.value==0)
		{
		//alert("ingrese usuario");
		alert(" Por favor Ingrese email");
		
		form.user.value="";
		form.user.focus(); //Rediciona al campo de usuario
		return false;
		}
		if (form.pass.value==0)
		{
		//alert("ingrese usuario");
		alert("La Contraseña esta Vacia, Por favor Ingrese su Contraseña");
		form.pass.value="";
		form.pass.focus();
		return false;
		}
		
		form.pass.value=calcMD5(form.pass.value); //esto funciona para encriptar
     	form.submit();	// envia el formulario
}