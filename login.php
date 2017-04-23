<?php $title = 'Непознатата България / Влез'; ?>
<?php include('./header.php'); ?>

<p>Вход</p>
                    <form method="POST" class="pure-form pure-form-aligned" action="login.php"  data-parsley-validate>
                       <fieldset>
                            <div class="pure-control-group">
                                <label for="email">Електронна поща</label>
                                <input id="email" type="text" name="email" value="" required>
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
                            if(empty($email) || empty($password)) {
                                $_SESSION['errors'][] = 'Всички полета са задължителни.';
                                
                            } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) $_SESSION['errors'][] = 'Електронната поща е неправилна.';
                        
                            if(!isset($errors)):
                                $searchQuery = "SELECT * FROM `users` WHERE `email` = '$email'"; 
                                $search = mysqli_query($connect, $searchQuery);
                                $a = mysqli_fetch_assoc($search);
                                if(password_verify($password, $a['password']) && $email === $a['email']) {
                                    session_start();
                                    $_SESSION['name'] = $a['name'];
                                    $_SESSION['id'] = $a['id'];
                                    $_SESSION['is_logged'] = 1;
                                    $_SESSION['success'] = 'Успешно влязохте.';
                                    header('Location: /');
                                } else {
                                    $_SESSION['errors'][] = 'Неправилно потребителско име или парола.';
                                }
                            endif;
                        endif;
                     ?>
                     <?php if(isset($_SESSION['errors'])): ?>
                        <ul>
                        <?php foreach($_SESSION['errors'] as $error): ?>
                            <li class="alert alert-danger"><i class="fa fa-exclamation fa-2x" aria-hidden="true"></i><?= $error ?></li>
                        <?php endforeach; ?>
                        </ul>
                         <?php session_unset($_SESSION['errors']); ?>
                    <?php endif; ?>

<?php include('./footer.php'); ?>
