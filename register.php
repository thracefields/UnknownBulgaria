<?php $title = 'Непознатата България / Регистрирай се'; ?>
<?php include('./header.php'); ?>

<p>Регистрация</p>
                    <form method="POST" class="pure-form pure-form-aligned" data-parsley-validate action="register.php">
                        <fieldset>
                                    <div class="pure-control-group">
                            <label for="name">Име</label>
                                <input id="name" type="text" required name="name">
                            </div>
                        </fieldset>
                        <fieldset>
                                <div class="pure-control-group">
                            <label for="email" class="col-md-4 control-label">Електронна поща</label>
                                <input id="email" type="email" class="form-control" required data-parsley-type="alphanum" data-parsley-type="email" name="email">

                                                                </div>
                        </fieldset>
                        <fieldset>
                                <div class="pure-control-group">
                            <label for="password" class="col-md-4 control-label">Парола</label>
                                <input id="password" minlength="6" type="password" required class="form-control" name="password">

                                                                </div>
                            </fieldset>

                            <fieldset>
                                <button class="pure-button pure-button-primary" name="submit" required type="submit">Регистрирайте се</button>
                            </fieldset>
                            </form>
                            <?php 
                                if (isset($_POST['submit'])) {
                                    $name= mysqli_real_escape_string($connect, $_POST['name']);
                                    $password=mysqli_real_escape_string($connect, $_POST['password']);
                                    $email=mysqli_real_escape_string($connect, $_POST['email']);
                                    $password=password_hash($password, PASSWORD_DEFAULT);

                                    // Checks
                                     if(empty($name) || empty($password) || empty($email)) {
                                        $_SESSION['errors'][] = 'Всички полета са задължителни.';
                                    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) $_SESSION['errors'][] = 'Електронната поща е неправилна.';
                                    if($password < 6) $_SESSION['errors'][] = 'Паролата е прекалено кратка.';
                                    $searchQuery =  "SELECT * FROM `users` WHERE `email` = '$email'"; 
                                    $search = mysqli_query($connect, $searchQuery);

                                        if (mysqli_num_rows($search) > 0) {
                                            $_SESSION['errors'][] = 'Вече съществува такъв потребител.';
                                        }else{
                                            $insert_query ="INSERT INTO users(name, email, password) VALUES ('$name','$email','$password')";
                                        $insert_result= mysqli_query($connect, $insert_query);
                                         $_SESSION['success'] = 'Успешно се регистрирахте.';
                                            header('Location: /');
                                        }
                            }         
                            
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



 