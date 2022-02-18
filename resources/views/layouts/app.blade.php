<!-- Sidebar Menu -->
<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column nav-flat" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item">
            <a href="{{ route('corporativo.index') }}" class="nav-link {{ Request::is('painel/index') ? 'active' : '' }}">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>PAINEL</p>
            </a>
        </li>
            <li class="nav-item has-treeview {{ Request::is('inscrito/meu-ambiente/*') ? 'menu-open' : '' }}">
                <a href="#" class="nav-link {{ Request::is('inscrito/meu-ambiente/informacoes-da-compra') ? 'active ' : '' }}">
                <i class="nav-icon fas fa-sitemap"></i>
                    <p>
                    Clínica Exemplo
                    <i class="fa-solid fa-house-chimney-medical"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route('inscrito.index') }}" class="nav-link {{ Request::is('corporativo/site') ? 'active bg-gray' : '' }}">
                            &nbsp;&nbsp;&nbsp;&nbsp;
                            <i class="fas fa-money-check-alt"></i>
                            <p>&nbsp;Informações da inscrição</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('clinical.specialties') }}" class="nav-link {{ Request::is('corporativo/site') ? 'active bg-gray' : '' }}">
                            &nbsp;&nbsp;&nbsp;&nbsp;
                            <i class="fas fa-money-check-alt"></i>
                            <p>&nbsp;Especialidades</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('inscrito.index') }}" class="nav-link {{ Request::is('corporativo/site') ? 'active bg-gray' : '' }}">
                            &nbsp;&nbsp;&nbsp;&nbsp;
                            <i class="fas fa-money-check-alt"></i>
                            <p>&nbsp;Profissionais</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('inscrito.index') }}" class="nav-link {{ Request::is('corporativo/site') ? 'active bg-gray' : '' }}">
                            &nbsp;&nbsp;&nbsp;&nbsp;
                            <i class="fas fa-money-check-alt"></i>
                            <p>&nbsp;Agendar</p>
                        </a>
                    </li>
                    <!--
                    <li class="nav-item">
                        <a href="" class="nav-link {{ Request::is('corporativo/site/parceiro*') ? 'active bg-gray' : '' }}">
                            &nbsp;&nbsp;&nbsp;&nbsp;
                            <i class="fas fa-file-pdf"></i>
                            <p>&nbsp;Upload Doc Inscrição</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link {{ Request::is('corporativo/site/pagina*') ? 'active bg-gray' : '' }}">
                            &nbsp;&nbsp;&nbsp;&nbsp;
                            <i class="fas fa-file-alt"></i>
                            <p>&nbsp;Envio de Materiais TL</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link {{ Request::is('corporativo/site/pagina*') ? 'active bg-gray' : '' }}">
                            &nbsp;&nbsp;&nbsp;&nbsp;
                            <i class="far fa-file-alt"></i>
                            <p>&nbsp;Tema Livre</p>
                        </a>
                    </li>-->

        </li>
    </ul>





        <!--<li class="nav-item has-treeview {{ Request::is('corporativo/perfil*') ? 'menu-open' : '' }}">
            <a href="#" class="nav-link {{ Request::is('corporativo/perfil*') ? 'active' : '' }}">
                <i class="nav-icon fa fa-address-card"></i>
                <p>
                    Meu Perfil
                <i class="fas fa-angle-left right"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class= "nav-item">
                    <a class="nav-link {{ Request::is('corporativo/perfil/editar*') ? 'active bg-gray' : '' }}" href='{{asset("corporativo/perfil/editar")}}/{{Auth()->user()->slug}}'>
                        &nbsp;
                        <i class="fas fa-user-edit"></i>
                        &nbsp;
                        <p>Editar Perfil</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('corporativo/perfil/senha/editar*') ? 'active bg-gray' : '' }}" href='{{asset("corporativo/perfil/senha/editar")}}/{{Auth()->user()->slug}}'>
                    &nbsp;
                    <i class="fas fa-unlock-alt"></i>
                    &nbsp;
                    <p>Alterar Senha</p>
                    </a>
                </li>
            </ul>
        </li>
    </ul>-->
</nav>




    {{--
    <li class="{{ Request::is('corporativo/requisicao*') ? 'active' : '' }}">
        <a href="{{ route('corporativo.cadastrados') }}">
            <i class="fas fa-address-card"></i>
            <span>Requisição</span>
        </a>
    </li>
    <li class="header">{{'CHAMADO'}}</li>
    <li class="{{ Request::is('corporativo/chamado*') ? 'active' : '' }}">
        <a href="{{ route('corporativo.Called') }}">
            <i class="fas fa-address-card"></i>
            <span>Chamados</span>
        </a>
    </li>
    --}}





