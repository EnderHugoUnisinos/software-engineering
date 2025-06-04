<div class="loaded-page">
    <div class="card half-width">
        <form action="#" class="margin">
            <div class="col-2 ">   
                <div class="row">
                    <div class="form-group">
                        <label for="lnome">Nome de usuario<span>*</span></label>
                        <input type="text"id="lnome" name="lnome">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group">
                        <label for="lpassword">Senha temporaria<span>*</span></label>
                        <input type="password"id="lpassword" name="lpassword">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group">
                        <label for="lemail">Email<span>*</span></label>
                        <input type="text" id="lemail" name="lemail">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group">
                        <label for="ltelefone">Telefone<span>*</span></label>
                        <input type="text" id="ltelefone" name="ltelefone">
                    </div>
                    <div class="form-group">
                        <label for="lcpf">CPF<span>*</span></label>
                        <input type="text" id="lcpf" name="lcpf">
                    </div>
                </div>
            </div> 
            <div class="col-1">
                <div class="form-group">
                    <div class="form-picture">
                        <input type="file" id="limagem" accept="image/png, image/jpeg" style="display: none;" name="limagem"/>
                        <button type="button" onclick="document.getElementById('limagem').click()">+</button>
                    </div>
                </div>
                <div class="form-group">
                    <input type="submit" value="Cadastrar"></input>
                </div>
            </div>
        </form>
    </div>
</div>