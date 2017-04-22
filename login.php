<?php $title = 'Непознатата България / Влез'; ?>
<?php include('./header.php'); ?>

<p>Вход</p>
                    <form method="POST" class="pure-form pure-form-aligned" action="login.php">
                       <fieldset>
                            <div class="pure-control-group">
                                <label for="email">Електронна поща</label>
                                <input id="email" type="email" name="email" value="">
                            </div>
                       </fieldset>
                            
                        <fieldset>
                            <div class="pure-control-group">
                            <label for="password">Парола</label>
                            <input id="password" type="password" class="form-control" name="password" required>
                                                                </div>
                        </fieldset>

                        <fieldset>
                                <button class="pure-button pure-button-primary" name="submit" type="submit">Влез</button>
                        </fieldset>
                    </form>
                    <?php
                        if(isset($_POST['submit'])):
                            $email = mysqli_real_escape_string($connect, $_POST['email']);
                            $password = mysqli_real_escape_string($connect, $_POST['password']);

                            // Checks
                            if($password < 6) $errors[] = 'Паролата е прекалено къса.';
                           if (!filter_var($email, FILTER_VALIDATE_EMAIL)) $errors[] = 'Електронната поща е неправилна.';
                        
                            if(!isset($errors)):
                                $searchQuery = "SELECT * FROM `users` WHERE `email` = '$email'"; 
                                $search = mysqli_query($connect, $searchQuery);
                                $a = mysqli_fetch_assoc($search);
                                if(password_verify($password, $a['password']) && $email === $a['email']) {
                                    session_start();
                                    $_SESSION['username'] = $username;
                                    $_SESSION['success'] = 'Успешно влязохте.';
                                    header('Location: /');
                                } else {
                                    header('Location: error.php');
                                }
                            endif;
                        endif;
                     ?>
                     <?php if(isset($errors)): ?>
                        <?php foreach($errors as $error): ?>
                            <p><?= $error ?></p>
                        <?php endforeach; ?>
                    <?php endif; ?>

<?php include('./footer.php'); ?>
