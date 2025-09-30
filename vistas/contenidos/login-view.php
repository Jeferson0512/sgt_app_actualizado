<div class="container min-vh-100 d-flex align-items-center py-5">
    <div class="row w-100 justify-content-center">
      <div class="col-sm-10 col-md-8 col-lg-5">
        <div class="card bg-dark text-light border-secondary shadow-sm">
          <div class="card-body">
            <div class="d-flex align-items-center mb-3">
              <div class="rounded bg-primary text-white d-inline-flex align-items-center justify-content-center mr-3" style="width:48px;height:48px;font-weight:800;">SGT</div>
              <div>
                <h5 class="mb-0">Iniciar sesión</h5>
                <small class="text-muted">Accede con tus credenciales del sistema</small>
              </div>
            </div>

            <form id="loginForm" action="#" method="post" novalidate>
              <div class="form-group">
                <label for="email">Correo</label>
                <input type="email" class="form-control bg-dark text-light border-secondary" id="email" name="email" placeholder="tucorreo@empresa.com" required>
              </div>

              <div class="form-group">
                <label for="password">Contraseña</label>
                <input type="password" class="form-control bg-dark text-light border-secondary" id="password" name="password" placeholder="••••••••" required>
              </div>

              <div class="d-flex justify-content-between align-items-center mb-3">
                <!--
                <div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" id="remember" name="remember">
                  <label class="custom-control-label" for="remember">Recuérdame</label>
                </div>
                -->
                <a href="#" class="small text-muted">¿Olvidaste tu contraseña?</a>
              </div>

              <button type="submit" class="btn btn-primary btn-block">Ingresar</button>
              <p class="small text-muted mt-3 mb-0">Prototipo estático: conecta la acción del formulario a tu endpoint cuando lo integres.</p>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>