
<head>
<?php include("template/cabecera.php");?>
<?php include("admin/reservar.php"); ?>





<link rel="stylesheet" type="text/css" href="css/estilos.css">
<link href="https://fonts.googleapis.com/css2?family=Concert+One&display=swap" rel="stylesheet">
</head>

<body id="cuerpo_formulario">
<div class="form w-100 " id="formulario"  >
<form  method="POST" action="admin/reservar.php" >
     <br/>
     <div class="form-group"> 
         <label  for="nombre"> Nombre: </label>
         <input type="text"  name="nombre" placeholder="Nombre" class="form-control" required>
     </div>

     <div class="form-group"> 
         <label for="email">Correo: </label>
         <input type="email"  name="email" placeholder="email" class="form-control" required>
     </div>

     <div class="form-group"> 
         <label for="celular">Celular: </label>
         <input type="tel"  name="celular"  placeholder="Celular" class="form-control" required>
     </div>

     <div class = "form-group">
        <label for="observacion">Observacion: </label>
        <input type="text" name="observacion" placeholder="observacion" class="form-control" required>
     </div>

     <br />
     <input type="submit" class="form-control " value="Reservar Locker" name="reservar"  >
     
 </form>

</div>
</body>

<?php include("template/piedepagina.php")?>