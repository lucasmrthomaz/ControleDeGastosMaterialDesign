<main class="mdl-layout__content mdl-color--grey-100">
    <div class="mdl-grid demo-content">
        <div class="demo-charts mdl-color--white mdl-shadow--2dp mdl-cell mdl-cell--12-col mdl-grid">
            <h1>{$titulo}</h1>
        </div>
        <div class="demo-graphs mdl-shadow--2dp mdl-color--white mdl-cell mdl-cell--8-col">

            <form class="form-horizontal" action="despesa.php?acao=salvar" method="post">
                <fieldset>
                    <legend>Lançar Despesa</legend>
                    <div class="form-group">
                        <label for="inputEmail" class="col-md-2 control-label">Nova: </label>

                        <div class="col-md-10">
                            <input type="email" class="form-control" id="inputEmail" placeholder="Nova Despesa">
                        </div>
                    </div>

                    <label for="chkbox2" class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect">
                        Despesa Existente
                        <input type="checkbox" id="chkbox2" class="mdl-checkbox__input form-control">
                    </label>

                    <div class="form-group">
                        <label for="conta" class="col-md-2 control-label">Existente</label>
                    </div>
                    <div class="col-md-10">
                        <select name="conta" class="form-control">
                            <option value="null">Despesas</option>
                            <option value="1">Teste</option>
                            <option value="2">Mimimi</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="mes" class="col-md-2 control-label">Mês</label>
                    </div>
                    <div class="col-md-10">
                        <select name="mes" class="form-control">
                            <option value="">Mês</option>
                            <option value="JAN">Janeiro</option>
                            <option value="FEV">Feveriro</option>
                            <option value="MAR">Março</option>
                            <option value="ABR">Abril</option>
                            <option value="MAI">Maio</option>
                            <option value="JUN">Junho</option>
                            <option value="JUL">Julho</option>
                            <option value="AGO">Agosto</option>
                            <option value="SET">Setembro</option>
                            <option value="OUT">Outubro</option>
                            <option value="NOV">Novembro</option>
                            <option value="DEZ">Dezembro</option>
                        </select>
                    </div>



                    <div class="col-md-10">
                        <input type="text" class="form-control" id="inputPassword" placeholder="Valor R$,00, 00">
                    </div>

                    <div class="form-group">
                        <div class="col-md-10 col-md-offset-2">                    
                            <button type="submit" class="btn btn-primary">Gravar</button>
                            <button type="reset" class="btn btn-default">Cancel</button>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
        <div class="demo-cards mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet mdl-grid mdl-grid--no-spacing">
            <div class="demo-updates mdl-card mdl-shadow--2dp mdl-cell mdl-cell--4-col mdl-cell--4-col-tablet mdl-cell--12-col-desktop">
                <div class="mdl-card__title mdl-card--expand mdl-color--teal-300">
                    <h2 class="mdl-card__title-text">Updates</h2>
                </div>
                <div class="mdl-card__supporting-text mdl-color-text--grey-600">
                    Non dolore elit adipisicing ea reprehenderit consectetur culpa.
                </div>
                <div class="mdl-card__actions mdl-card--border">
                    <a href="#" class="mdl-button mdl-js-button mdl-js-ripple-effect">Read More</a>
                </div>
            </div>
            <div class="demo-separator mdl-cell--1-col"></div>

        </div>
    </div>
</main>