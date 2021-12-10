
  <? php include 'templates/head.php'; >
  <? php include 'templates/menu.php'; >


  <section class="page-content">
    <section class="search-and-user">
      <form>
        <input type="search" placeholder="Buscar...">
        <button type="submit" aria-label="submit form">
          <i class="fas fa-search"></i>
        </button>
      </form>
      <div class="admin-profile">
        <span class="greeting">Hello admin</span>
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
      <article></article>
      <article></article>
      <article></article>
      <article></article>
      <article></article>
      <article></article>
    </section>
    <? php include 'templates/footer.php'; >



