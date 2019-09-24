<html>
<head>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

<style>

.cabecera{ 

    background-color:#ffd699;
    margin: auto;
    width: 100%;
    height:10%;
    border: 3px solid white;
    padding: 10px;
}

.cabecera_links a{
    text-align:center;
    width: 33%;
    font-size:50px;
    margin-top:1%;

}

ul{
    text-align:center;
   
}

input{
    height:4%;
    width: 15%;
}




@media only screen and (max-width: 1000px) {

    body{
        background-image: url("https://cdn.wallpapersafari.com/39/52/0x8XN4.jpg");

        background-position: center; 
        /*background-size: 3000px 2200px;
        */
        
    }

    .cabecera{
        
        background-image: url("https://wallpaperaccess.com/full/552497.jpg");
        background-repeat: no-repeat;
        background-position: center; 
        background-size: 1000px 600px;

        background-color:#f09e75;
        margin: auto;
        width: 100%;
        height:10%;
        border: 3px solid white;
        padding: 10px;
        opacity: 0.90;

        
    }

    .cabecera_links a{
        
        width: 33%;
        
        margin-top:5%;

        text-align:center;
        font-size:90px;
        color:white;
        text-shadow: 4px 4px black;
    }

    
    ul{
        background-color:#f07575;
        opacity: 0.95;
        width: 100%;
        height:10%;

        padding-top: 50px;

        margin-top:2%;
        margin-bottom:2%;
        
        font-size:60px;
  
    }

    ul a{
        color:#ffcc99;
        text-shadow: 3px 3px black;
        
    }
    .musculos{
        border: 2px solid black;
        background-color:white;
    }
    

    .musculo_ul{
        opacity: 0.95;
        background-color:#85e085;

        margin-top:-0.1%;
       
    }

    .titulo{

        float:left;
        width: 40%;
        margin-left:3%;
        padding-right:20px;
        
    }

    .titulo a{
        
    }

    

    .menu_inicio{
               
    }

    .titulo_entreno{
        float:left;
        font-size:55px;
        color:black;
        
    }

    .dia{
        float:left;
        margin-top:5%;
        padding:2%;        
        width: 100%;
        height:8%;
        opacity: 0.95;
        
        background-color:#e9e9e2;
    }

    .ejercicio_ul{
        background-color:white;
        height:10%;
        margin-top:-1.9%;
        
        border: 1px solid black;

    }

 
   

    .tipo_ej{
        
        display:inline;
        
        height:5%;
        width: 30%;

       
        
      
        border: 1px solid black;

        

        padding-top: 3.1%;
        padding-bottom: 3.9%;
        padding-left: 6.8%;
        padding-right: 6.8%;
        
        
        
    }

    .tipo_rutina_semanal{

        float:left;
        height:10%;
        width: 40%;
        margin:4%;
        padding-right:2%;
    }

    .tipo_rutina_pordias{
        float:right;
        height:10%;
        width: 40%;
        margin:4%;
        padding-right:2%;
    }

    .edit_musculo{
        float:left;
        margin-right:-6%;
    }

}
 
</style>

</head>
<body>

<div class="cabecera">
    
    <nav class="navbar navbar-light bg-light">
        
        <div class="cabecera_links">
            
            <a class="navbar-brand" href="http://localhost/My_Apps/fit/public/home">Inicio</a>
            
            <a class="navbar-brand"></a>

            <a class="navbar-brand" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">@csrf</form>
            
            
        </div>            
    </nav>
</div>

<div class="contenido">

    @yield("contenido")

</div>

<div class="pie">

    @yield("pie")
    Aqui va el pie

</div>


</body>
</html>
