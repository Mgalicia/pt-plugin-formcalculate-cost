<HEAD> 
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
 
<link rel="stylesheet" type="text/css" href="styleForm.css"/>
 <!-- Bootstrap -->
 <!-- Latest compiled and minified CSS -->
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<!-- jQuery library -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
 <!-- Latest compiled JavaScript -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</HEAD>
  
<?php
/**
 * Plugin Name: PT Form Calculadora de Costo
 * Author:  POINTECH
 * Description:  Plugin para crear un formulario nativo
 * Utiliza el shortcode [pt-plugin-from]
 * 
 */
add_shortcode('pt_calculadora_form', 'Pt_calculadora_form');


function Pt_calculadora_form() 
{
    // Esta función de PHP activa el almacenamiento en búfer de salida (output buffer)
    // Cuando termine el formulario lo imprime con la función ob_get_clean
    ob_start();
    ?>
    <h3>Customer Details</h3>
    <form action="<?php get_the_permalink(); ?>" method="post" >
        <!--************************ Inicio de primer bloque ************************-->
        <div class="form-group">
            <label for="Name">Name and Last name</label>
            <input type="text" name="Name" id="Name" required class="form-control" >
        </div>   

        <div class="form-group">
            <label for='email'>E-mail</label>
            <input type="email" class="form-control" name="email" id="email" required>
        </div>

        <div class="form-group">
            <label for='phonenumber'>Phone number</label>
            <input type="text" class="form-control"  name="phonenumber" id="phonenumber" required>
        </div> 

        <div class="form-group">
            <label for="zipcode">California, Modesto / Zip code</label>
            <select class="form-control" id="zipcode">
                <option>90201</option>
                <option>90201</option>
                <option>90202</option> 
            </select>
        </div>

    <!--************************ Inicio de segundo bloque ************************-->
        <hr noshade="" size="4" color="#006ba1">
        <h3>Service Details</h3>
        
        <div class="form-group">            
        <label>Type of Cleaning</label>
        <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox"  value="HouseCleaning">
        <label class="form-check-label" for="HouseCleaning">House Cleaning</label>
        </div>

        <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox"   value="OfficeCleaning">
        <label class="form-check-label" for="OfficeCleaning">Office Cleaning</label>
        </div>

        <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox"   value="WindowCleaning">
        <label class="form-check-label" for="WindowCleaning">Window Cleaning</label>
        </div>

        <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox"   value="Disinfecting">
        <label class="form-check-label" for="Disinfecting">Disinfecting</label>
        </div>

        </div>

        

        <div class="form-group"> 
            <label for="option">How often will the service be?</label>
            <select class="form-control" id="">
                <option>Weekly</option>
                <option>Biweekly</option>
                <option>Monthly</option> 
                <option>Just once</option> 
            </select>
        </div>  


        <div class="form-group"> 
        <label for="option1">How many rooms does it have?</label>
        <input type="range" class="form-control-range"  min="1" max="6" >
        </div> 
        
        <div class="form-group"> 
        <label for="option1">How many bathrooms do you have?</label>
        <input type="range" class="form-control-range"  min="1" max="6"  >
        </div> 

        <div class="form-group"> 
        <label for="option1">How many square feet is it approximately?</label>
        <input type="range" class="form-control-range"  min="1" max="6"  >
        </div> 


        <!--************************ Inicio de tercer bloque ************************-->
        <hr noshade="" size="4" color="#006ba1">
        <h3>Which of the following additional services does</h3>
        <p>The price will vary according to the extra request.</p>
 
        <div class="container">
        <div class="row">
            <div class="col-md-6">
            <label for="option2">Windows Tracks and Blinds </label>
            <div class="checkbox">
            <label><input type="checkbox" value="">1-2 Bedroom's House </label>
            </div>
            <div class="checkbox">
            <label><input type="checkbox" value="">3-4 Bedroom's House</label>
            </div>
            <div class="checkbox disabled">
            <label><input type="checkbox" value="">5-6 Bedroom's House </label>
            </div>
            </div>


            <div class="col-md-6">
                 <label for="option3">Baseboards Doors</label>
            <div class="checkbox">
            <label><input type="checkbox" value="">1-2 Bedroom's House </label>
            </div>
            <div class="checkbox">
            <label><input type="checkbox" value="">3-4 Bedroom's House</label>
            </div>
            <div class="checkbox disabled">
            <label><input type="checkbox" value="">5-6 Bedroom's House </label>
            </div>
            </div>
        </div> 

        <div class="row" style="margin:60px 0px 60px 0px" >
            <div class="col-md-6">
            <label for="option2">Kitch’s cabinets In/Out </label>
            <div class="checkbox">
            <label><input type="checkbox" value="">1-3 Bedroom's House  </label>
            </div>
            <div class="checkbox">
            <label><input type="checkbox" value="">4-6 Bedroom's House</label>
            </div> 
            </div>


            <div class="col-md-6">
                 <label for="option3">Oven Single / Oven Dual</label>
            <div class="checkbox">
            <label><input type="checkbox" value="">Refrigerator Empty / Refrigerator Full </label>
            </div>
            <div class="checkbox">
            <label><input type="checkbox" value="">Sliding Door and Track In/ Out</label>
            </div>
            <div class="checkbox disabled">
            <label><input type="checkbox" value="">Ceiling Fans Hand Wiped, Each</label>
            </div>
            <div class="checkbox disabled">
            <label><input type="checkbox" value="">Bathroom's Cabinets In/Out, Per Bathrooms</label>
            </div>

            </div>
        </div>  
        </div> 

        <!--************************ Inicio de cuarto bloque ************************-->
        <hr noshade="" size="4" color="#006ba1">
        <div style="text-align: right;" >
        <h2 >it include? $ 500</h2> 
        </div>
        <hr noshade="" size="4" color="#006ba1">
        <h3>Select service process</h3>
        <p>To continue you must choose the process that best suits in his payment method or have the budget for later
one of our managers to contact you.</p>





        <div class="form-input"  >
        <div class="row">
        <div class="col-md-6"  style="text-align: right;"> 
        <button type="button" class="btn btn-primary " style="background:#006ba1">Pay Online</button>
        </div> 
        <div class="col-md-6"  style="text-align: left;">
        <button type="button" class="btn btn-primary " style="background:#006ba1">Pay on Cleaning Day</button>
        </div> 
        </div> 
        </div>
        







    </form>
    <?php
     
    // Devuelve el contenido del buffer de salida
    return ob_get_clean();
}