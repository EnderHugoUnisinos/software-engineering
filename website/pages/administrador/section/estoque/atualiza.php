<div class="loaded-page">
    <div class="card half-width">
        <form action="#" class="margin">
           <div class="col-2">   
                <div class="row">
                    <div class="form-group">
                        <label for="lid">ID do item<span>*</span></label>
                        <input type="text"id="lid" name="lid">
                    </div>
                    <div class="form-group">
                        <label for="lnome">Nome do item</label>
                        <input type="text"id="lnome" name="lnome">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group">
                        <label for="lquant">Quantidade</label>
                        <input type="number"id="lquant" name="lquant">
                    </div>
                    <div class="form-group">
                        <label for="lmedida">Medida</label>
                        <div class="select">
                            <select name="criterio" id="criterio">
                                <option value="0">Unidade (UNID)</option>
                                <option value="1">Kilograma (KG)</option>
                                <option value="2">Litro (LT)</option>
                                <option value="3">Caixa (CX)</option>
                                <option value="4">Pacote (PCT)</option>
                                <option value="5">Conjunto (CJ)</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group">
                        <label for="ldesc">Descrição</label>
                        <textarea type="text"id="ldesc" name="ldesc"></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group margin-top">
                        <input type="submit" value="Cadastrar"></input>
                    </div>
                </div>
            </div> 
        </form>
    </div>
</div>