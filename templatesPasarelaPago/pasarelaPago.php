<?php 
session_start();
if(isset($_SESSION["userId"])){
  include("../templatesPlataformasCabecerayPie/cabeceralogin.php");
} else{
 include("../templatesPlataformasCabecerayPie/cabeceralogout.php");   
}
?>


<div class="container">
  <main>
    <div class="py-5 text-center">
    <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" fill="currentColor" class="bi bi-cart-check d-block mx-auto mb-4 text-white" viewBox="0 0 16 16">
    <path d="M11.354 6.354a.5.5 0 0 0-.708-.708L8 8.293 6.854 7.146a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0l3-3z"/>
    <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
    </svg>
      <h1 class="text-white titulomasvendidos">Pasarela de pago</h1>
    </div>

    

    

          <hr class="my-1">
<!-- 
          <h4 class="mb-3">Payment</h4>

          <div class="my-3">
            <div class="form-check">
              <input id="credit" name="paymentMethod" type="radio" class="form-check-input" checked required>
              <label class="form-check-label text-white" for="credit">Credit card</label>
            </div>
            <div class="form-check">
              <input id="debit" name="paymentMethod" type="radio" class="form-check-input" required>
              <label class="form-check-label text-white" for="debit">Debit card</label>
            </div>
            <div class="form-check">
              <input id="paypal" name="paymentMethod" type="radio" class="form-check-input" required>
              <label class="form-check-label text-white" for="paypal">PayPal</label>
            </div>
          </div> -->

          <div class="row gy-3">
            <div class="col-md-6">
              <label for="cc-name" class="form-label text-white">Nombre en la tarjeta</label>
              <input type="text" class="form-control" id="cc-name" placeholder="" required>
             
              <div class="invalid-feedback">
                El nombre de la tarjeta es necesario
              </div>
            </div>

            <div class="col-md-6">
              <label for="cc-number" class="form-label text-white">Número de la tarjeta</label>
              <input type="text" class="form-control" id="cc-number" placeholder="" required>
              <div class="invalid-feedback">
                El número de la tarjeta es necesario
              </div>
            </div>

            <div class="col-md-3">
              <label for="cc-expiration" class="form-label text-white">Fecha de expiración</label>
              <input type="text" class="form-control" id="cc-expiration" placeholder="" required>
              <div class="invalid-feedback">
                La fecha de expiración de la tarjeta es necesaria
              </div>
            </div>

            <div class="col-md-3">
              <label for="cc-cvv" class="form-label text-white">CVC/CVV</label>
              <input type="text" class="form-control" id="cc-cvv" placeholder="" required>
              <div class="invalid-feedback">
                El CVV es necesario
              </div>
            </div>
          </div>

          <hr class="my-4">

          <button class="w-100 btn btn-dark naranja btn-lg" type="submit"> 
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="20" fill="currentColor" class="bi bi-credit-card-2-back" viewBox="0 0 16 16">
          <path d="M11 5.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1z"/>
          <path d="M2 2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H2zm13 2v5H1V4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1zm-1 9H2a1 1 0 0 1-1-1v-1h14v1a1 1 0 0 1-1 1z"/>
          </svg> 
          Pagar</button>
        </form>
      </div>
    </div>
  </main>

<div class="spacer"></div>


</div>

<?php include("../templatesPlataformasCabecerayPie/piedepagina.php"); ?>