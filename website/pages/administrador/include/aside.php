<aside>
        <div class="user">
            <div>
                <img src="<?= $imgPath ?>user.png" class="profile-picture">
            </div>
            <div class="user-profile">
                <p><span id="user-name">Nome de usuario</span> <br> <span id="user-role">Cargo</span></p>
            </div>
        </div> 
        <a id="home" href="#" data-page="default/home"><i class="fa fa-home" aria-hidden="true"></i> Pagina principal</a>
        <button class="accordion">
            <div class="left"><i class="fa fa-users" aria-hidden="true"></i></div>
            <div class="middle"> Residentes </div>
            <div class="center"><i class="fa fa-chevron-down" aria-hidden="true"></i></div>
        </button>
        <div class="panel">
            <a href="#" data-page="residentes/cadastro">Cadastrar novo residente</a>
            <a href="#" data-page="residentes/consulta">Consultar residentes</a>
            <a href="#" data-page="residentes/relatorio">Relatorios de residentes</a>
        </div>
        <button class="accordion">
            <div class="left"><i class="fa fa-clock-o" aria-hidden="true"></i></div>
            <div class="middle"> Atendimentos </div>
            <div class="center"><i class="fa fa-chevron-down" aria-hidden="true"></i></div>
        </button>
        <div class="panel">
            <a href="#" data-page="atendimentos/cadastro">Gerenciar novo atendimento</a>
            <a href="#" data-page="atendimentos/consulta">Consultar atendimentos</a>
            <a href="#" data-page="atendimentos/relatorio">Relatorios de atendimento</a>
        </div>
        <button class="accordion">
            <div class="left"><i class="fa fa-book" aria-hidden="true"></i></div>
            <div class="middle"> Estoque </div>
            <div class="center"><i class="fa fa-chevron-down" aria-hidden="true"></i></div>
        </button>
        <div class="panel">
            <a href="#" data-page="estoque/cadastro">Cadastrar novo item</a>
            <a href="#" data-page="estoque/atualiza">Atualizar registro de um item</a>
            <a href="#" data-page="estoque/consulta">Consultar estoque</a>
            <a href="#" data-page="estoque/relatorio">Relatorios de estoque</a>
        </div>
        <button class="accordion">
            <div class="left"><i class="fa fa-calendar" aria-hidden="true"></i></div>
            <div class="middle"> Eventos </div>
            <div class="center"><i class="fa fa-chevron-down" aria-hidden="true"></i></div>
        </button>
        <div class="panel">
            <a href="#" data-page="eventos/cadastro">Marcar novo evento</a>
            <a href="#" data-page="eventos/consulta">Consultar eventos</a>
            <a href="#" data-page="eventos/gerencia">Gerenciar eventos</a>
            <a href="#" data-page="eventos/relatorio">Relatorio de eventos</a>
        </div>
        <button class="accordion">
            <div class="left"><i class="fa fa-briefcase" aria-hidden="true"></i></div>
            <div class="middle"> Funcionarios </div>
            <div class="center"><i class="fa fa-chevron-down" aria-hidden="true"></i></div>
        </button>
        <div class="panel">
            <a href="#" data-page="funcionarios/cadastro">Cadastrar novo funcionario</a>
            <a href="#" data-page="funcionarios/consulta">Consultar funcionarios</a>
            <a href="#" data-page="funcionarios/gerencia">Gerenciar funcionarios</a>
            <a href="#" data-page="funcionarios/relatorio">Relatorio de funcionarios</a>
        </div>
    </aside>