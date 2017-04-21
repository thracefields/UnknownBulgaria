<?php $title = 'Непознатата България / Регистрирай се'; ?>
<?php include('./header.php'); ?>

<p>Регистрация</p>
                    <form method="POST" class="pure-form pure-form-aligned" action="http://rodnoto.uchenici.bg/register">
                        <input type="hidden" name="_token" value="MpvXmh4b5gF0tqQvJYsJ04Cs8AAx1ZPPJAMekGnS">
                        <fieldset>
                                    <div class="pure-control-group">
                            <label for="name">Име</label>
                                <input id="name" type="text" name="name" value="" required autofocus>

                                
                            </div>
                        </fieldset>
                        <fieldset>
                                <div class="pure-control-group">
                            <label for="email" class="col-md-4 control-label">Електронна поща</label>
                                <input id="email" type="email" class="form-control" name="email" value="" required>

                                                                </div>
                        </fieldset>
                        <fieldset>
                                <div class="pure-control-group">
                            <label for="password" class="col-md-4 control-label">Парола</label>
                                <input id="password" type="password" class="form-control" name="password" required>

                                                                </div>
                            </fieldset>
                            <fieldset>
                                    <div class="pure-control-group">
                            <label for="password-confirm" class="col-md-4 control-label">Повторете паролата</label>

                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>

                                                                </div>
                            </fieldset>
                            <fieldset>
                                <button type="submit" class="pure-button pure-button-primary">
                                    Регистрирайте се
                                </button>
                            </fieldset>

<?php include('./footer.php'); ?>



 