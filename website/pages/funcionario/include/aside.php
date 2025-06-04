<aside>
    <div class="user">
        <div>
            <img src="<?= $imgPath ?>user.png" class="profile-picture">
        </div>
        <div class="user-profile">
            <p><span id="user-name">Nome de usuario</span> <br> <span id="user-role">Cargo</span></p>
        </div>
    </div> 
    <a href="#" id="home"><i class="fa fa-home" aria-hidden="true"></i> Pagina principal</a>
    <button class="accordion">
        <div class="left"><i class="fa fa-users" aria-hidden="true"></i></div>
        <div class="middle">Residentes </div>
        <div class="center"><i class="fa fa-chevron-down" aria-hidden="true"></i></div>
    </button>
    <div class="panel">
        <a href="#" data-page="residentes/cadastro">Cadastrar novo residente</a>
        <a href="#" data-page="residentes/consulta">Consultar residentes</a>
    </div>
    <button class="accordion">
        <div class="left"><i class="fa fa-clock-o" aria-hidden="true"></i> </div>
        <div class="middle">Atendimentos</div>
        <div class="center"><i class="fa fa-chevron-down" aria-hidden="true"></i></div>
    </button>
    <div class="panel">
        <a href="#" data-page="atendimentos/cadastro">Gerenciar novo atendimento</a>
        <a href="#" data-page="atendimentos/consulta">Consultar atendimentos</a>
    </div>
    <button class="accordion">
        <div class="left"><i class="fa fa-book" aria-hidden="true"></i> </div>
        <div class="middle">Estoque</div>
        <div class="center"><i class="fa fa-chevron-down" aria-hidden="true"></i></div>
    </button>
    <div class="panel">
        <a href="#" data-page="estoque/cadastro">Cadastrar novo item</a>
        <a href="#" data-page="estoque/atualiza">Atualizar registro de um item</a>
        <a href="#" data-page="estoque/consulta">Consultar estoque</a>
    </div>
</aside>