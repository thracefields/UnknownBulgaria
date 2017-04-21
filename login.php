<?php $title = 'Непознатата България / Влез'; ?>
<?php include('./header.php'); ?>

<p>Вход</p>
                    <form method="POST" class="pure-form pure-form-aligned" action="http://rodnoto.uchenici.bg/login">
                        <input type="hidden" name="_token" value="MpvXmh4b5gF0tqQvJYsJ04Cs8AAx1ZPPJAMekGnS">

                       <fieldset>
                            <div class="pure-control-group">
                                <label for="email">Електронна поща</label>
                                <input id="email" type="email" name="email" value="" required autofocus>
                                                            </div>
                       </fieldset>
                            
                        <fieldset>
                            <div class="pure-control-group">
                            <label for="password">Парола</label>
                            <input id="password" type="password" class="form-control" name="password" required>
                                                                </div>
                        </fieldset>

                        <fieldset>
                                <button class="pure-button pure-button-primary" type="submit">Влез</button>
                        </fieldset>
                    </form>

<?php include('./footer.php'); ?>
