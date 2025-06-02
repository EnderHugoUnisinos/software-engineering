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
        <a href="">Cadastrar novo residente</a>
        <a href="#">Consultar residentes</a>
    </div>
    <button class="accordion">
        <div class="left"><i class="fa fa-clock-o" aria-hidden="true"></i> </div>
        <div class="middle">Atendimentos</div>
        <div class="center"><i class="fa fa-chevron-down" aria-hidden="true"></i></div>
    </button>
    <div class="panel">
        <a href="#">Gerenciar novo atendimento</a>
        <a href="#">Consultar atendimentos</a>
    </div>
    <button class="accordion">
        <div class="left"><i class="fa fa-book" aria-hidden="true"></i> </div>
        <div class="middle">Estoque</div>
        <div class="center"><i class="fa fa-chevron-down" aria-hidden="true"></i></div>
    </button>
    <div class="panel">
        <a href="#">Cadastrar novo item</a>
        <a href="#">Atualizar registro de um item</a>
        <a href="#">Consultar estoque</a>
    </div>
</aside>