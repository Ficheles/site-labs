  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="dashboard">DIVISAGUA</a>

    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="dashboard">
            <i class="fa fa-fw fa-dashboard"></i><span class="nav-link-text">Painel de indicadores</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Condominio">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti_cond" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-sitemap"></i><span class="nav-link-text">Condomínio</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseMulti_cond">
            <li><a href="condominio">Condomínio</a></li>
            <li><a href="apartamento">Apartamentos</a></li>
            <li><a href="proprietario">Proprietário</a></li>
            <li><a href="hidrometro">Hidrômetro</a></li>
          </ul>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
          <a class="nav-link" href="grafico_consumo_ano">
            <i class="fa fa-fw fa-area-chart"></i><span class="nav-link-text">Gráficos</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
          <a class="nav-link" href="Faturamento">
            <i class="fa fa-fw fa-area-chart"></i><span class="nav-link-text">Faturamento</span>
          </a>
        </li>

        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Leituras">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti_leitura" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-sitemap"></i><span class="nav-link-text">Leituras</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseMulti_leitura">
            <li><a href="leituras" class="nav-link" data-toggle="tooltip">Leituras</a></li>
            <li><a href="relatorio" class="nav-link" data-toggle="tooltip">Relatório</a></li>
          </ul>
        </li>


        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Mensagem">
          <a class="nav-link" href="mensagem">
            <i class="fa fa-fw fa-table"></i><span class="nav-link-text">Mensagem</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Gerenciamento">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti_ger" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-sitemap"></i><span class="nav-link-text">Gerenciamento</span>
          </a>

          <ul class="sidenav-second-level collapse" id="collapseMulti_ger">
            <li><a href="condominio" class="nav-link" data-toggle="tooltip">Condomínio</a></li>
            <li><a href="clientes" class="nav-link" data-toggle="tooltip">Clientes</a></li>
          </ul>

        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-wrench"></i><span class="nav-link-text">Componentes</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseComponents">
            <li>
              <a href="navbar">Navbar</a>
            </li>
          </ul>
        </li>

      </ul>
      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle mr-lg-2" id="messagesDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-fw fa-envelope"></i>
            <span class="d-lg-none">Mensagens
              <span class="badge badge-pill badge-primary">12 Novas</span>
            </span>
            <span class="indicator text-primary d-none d-lg-block">
              <i class="fa fa-fw fa-circle"></i>
            </span>
          </a>
          <div class="dropdown-menu" aria-labelledby="messagesDropdown">
            <h6 class="dropdown-header">Novas Mensagens:</h6>
            <div class="dropdown-divider"></div>

            <a class="dropdown-item" href="#">
              <strong>João</strong>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">duvida faturamento fevereiro!</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <strong>Jose</strong>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">pedido de religamento!</div>
            </a>

            <div class="dropdown-divider"></div>
            <a class="dropdown-item small" href="#">Ver todas mesagens</a>
          </div>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle mr-lg-2" id="alertsDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-fw fa-bell"></i>
            <span class="d-lg-none">Alertas
              <span class="badge badge-pill badge-warning">2 Novos</span>
            </span>
            <span class="indicator text-warning d-none d-lg-block">
              <i class="fa fa-fw fa-circle"></i>
            </span>
          </a>

          <div class="dropdown-menu" aria-labelledby="alertsDropdown">
            <h6 class="dropdown-header">Novos Alertas:</h6>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <span class="text-success">
                <strong>
                  <i class="fa fa-long-arrow-up fa-fw"></i>Apt 106
                </strong>
              </span>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">Atraso pagamento</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <span class="text-danger">
                <strong>
                  <i class="fa fa-long-arrow-down fa-fw"></i>Vazamento Apt 101
                </strong>
              </span>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">Alerta vazamento.</div>
            </a>

            <div class="dropdown-divider"></div>
            <a class="dropdown-item small" href="#">Ver todos alertas</a>
          </div>
        </li>

        <li class="nav-item">
          <form class="form-inline my-2 my-lg-0 mr-lg-2">
            <div class="input-group">
              <input class="form-control" type="text" placeholder="Localize..." />
              <span class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fa fa-search"></i>
                </button>
              </span>
            </div>
          </form>
        </li>

        <li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#Modal_sair">
            <i class="fa fa-fw fa-sign-out"></i>Sair
          </a>
        </li>
      </ul>
    </div>
  </nav>
  