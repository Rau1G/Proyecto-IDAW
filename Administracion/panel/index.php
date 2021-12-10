

<?php include 'templates/head.php'; session_start(); ?> 
<?php include 'templates/menu.php' ?>



  <section class="page-content">
    <section class="search-and-user">
      <form>
        <input type="search" placeholder="Buscar...">
        <button type="submit" aria-label="submit form">
          <i class="fas fa-search"></i>
        </button>
      </form>
      <div class="admin-profile">
        <span class="greeting">Hola compa</span>
        <div class="notifications">
          <span class="oculto">1</span> <!--badge <- clase para mostrar la notificacion -->
          <i class="fas fa-user-circle"></i>
        </div>
      </div>
    </section>
    <section class="grid">
      <article>
        <canvas id="graficaGanacias"></canvas>
      </article>
      
      <div style="background-color: #84DFFF; font-size: 1em; text-align: left;">
        <h2 style="text-align: center;">Base De Datos</h2><hr style="border-width: 3px;
  border-color: #000;">
        <?php 
                function VentasDia(){
                  include '../../php/database.php';
                  $madarConsulta = mysqli_query($conectionSQL, "SELECT Nombre, Cantidad FROM ventas;");

                  while ($resultado = mysqli_fetch_assoc($madarConsulta)) {
                    echo "<p style = 'display: block'>";
                    echo "Cantidad:".$resultado['Cantidad']."<br>"."Sabor:". $resultado['Nombre'];
                    echo "</p><br>";
                  }
                  
                }
                echo VentasDia(); 
?>
      </div>
    </section>


<?php include 'templates/footer.php' ?>


