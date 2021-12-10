
<body>
  <header class="page-header">
    <nav>
      <a href="index.php" class="logo">
        <img src="img/logoHelado.png" alt="logo heladeria">
        <h3>Ice Cream Center</h3>
      </a>
      <button class="toggle-mob-menu" aria-expanded="false" aria-label="open menu">
        <svg width="20" height="20" aria-hidden="true">
          <use xlink:href="#down"></use>
        </svg>
      </button>
      <ul class="admin-menu">
        <li class="menu-heading">
          <h3>Administración</h3>
        </li>
        <li>
          <a href="index.php">
            <i class="fas fa-tachometer-alt"></i>
            <span>Panel de control</span>
          </a>
        </li>
        <li>
          <a href="usuarios.php">
            <i class="fas fa-user"></i>
            <span>Usuarios</span>
          </a>
        </li>
        <li>
          <a href="#0">
            <i class="fas fa-search-dollar"></i>
            <span>Ventas</span>
          </a>
        </li>
        <li>
          <a href="#0">
            <i class="fas fa-utensils"></i>
            <span>Productos</span>
          </a>
        </li>
        <li class="menu-heading">
          <h3>Configuración</h3>
        </li>
        <li>
          <a href="#0">
            <i class="fas fa-cog"></i>
            <span>Opticiones</span>
          </a>
        </li>
        <li>
          <a href="#0">
            <i class="fas fa-sign-out-alt"></i>
            <span>Salir</span>
          </a>
        </li>
        <li>
          <div class="switch">
            <input type="checkbox" id="mode" checked>
            <label for="mode">
              <span></span>
              <span>Dark</span>
            </label>
          </div>
          <button class="collapse-btn" aria-expanded="true" aria-label="collapse menu">
            <i class="fas fa-arrows-alt-h"></i>
            <span>Colapsar</span>
          </button>
        </li>
      </ul>
    </nav>
  </header>
