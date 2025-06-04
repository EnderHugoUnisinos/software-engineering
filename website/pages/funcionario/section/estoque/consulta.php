<div class="loaded-page">
    <div class="card">
        <div class="col-1">
            <div class="row bottom-border padding">
                <div class="search-container">
                    <form action="#" method="get" class="search-form">
                        <input type="text" placeholder="Pesquisar.." name="search">
                        <button type="submit"><i class="fa fa-search"></i></button>
                        <div class="custom-select">
                            <select name="criterio" id="criterio">
                                <option value="0">Pesquisar por...</option>
                                <option value="1">Nome</option>
                                <option value="2">Fornecedor</option>
                                <option value="3">Tipo</option>
                            </select>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="col-1 max-height justify-center">
                    <div class="row">
                        <div class="form-group margin text-center">
                            <label for="tempo">Escala</label>
                            <input id="tempo" type="range" min="0" max="16">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group">
                            <div class="row">
                                <input type="checkbox" id="filtro1" name="filtro1" value="Bike">
                                <label for="filtro1"> Filtro 1</label><br>
                            </div>
                            <div class="row">
                                <input type="checkbox" id="filtro2" name="filtro" value="Car">
                                <label for="filtro2"> Filtro 2</label><br>
                            </div>
                            <div class="row">
                                <input type="checkbox" id="filtro3" name="filtro3" value="Boat">
                                <label for="filtro3"> Filtro 3</label><br> 
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-5">
                    <div class="results-container"></div>
                </div>
            </div>
        </div>
    </div>
</div>
