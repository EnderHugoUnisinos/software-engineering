<div class="loaded-page">
    <div class="card half-width">
        <form action="#" class="margin">
           <div class="col-2 ">   
                <div class="row">
                    <div class="form-group">
                        <label for="lid">ID do funcionario<span>*</span></label>
                        <input type="text"id="lid" name="lid">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group">
                        <label for="lnome">Nome de usuario</label>
                        <input type="text"id="lnome" name="lnome">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group">
                        <label for="lemail">Email</label>
                        <input type="text" id="lemail" name="lemail">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group">
                        <label for="ltelefone">Telefone</label>
                        <input type="tel" id="ltelefone" name="ltelefone"  pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}">
                    </div>
                    <div class="form-group">
                        <label for="lcpf">CPF</label>
                        <input type="text" id="lcpf" name="lcpf">
                    </div>
                </div>
            </div> 
            <div class="col-1">
                <div class="form-group align-center">
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