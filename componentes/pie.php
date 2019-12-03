



<?php 
                  if(isset($_SESSION['usuario'])){
                    
?>

<div class="container">
        <span class="text-muted">Bienvenido   <?php echo $_SESSION['usuario'];?>   </span>  <span class="text-muted"><?php ?></span>
</div>

<?php 
                 }
                  else
                  {
?>



<div class="container">
        <span class="text-muted">Gracias por Visitarnos. Vuelva Pronto</span>  
</div>


<?php 
}
?>