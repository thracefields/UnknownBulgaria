<?php $title = 'Непознатата България / Регистрирай се'; ?>
<?php include('./header.php'); ?>

<p>Регистрация</p>
                    <form method="POST" class="pure-form pure-form-aligned" action="register.php">
                        <fieldset>
                                    <div class="pure-control-group">
                            <label for="name">Име</label>
                                <input id="name" type="text" name="name">
                            </div>
                        </fieldset>
                        <fieldset>
                                <div class="pure-control-group">
                            <label for="email" class="col-md-4 control-label">Електронна поща</label>
                                <input id="email" type="email" class="form-control" name="email">

                                                                </div>
                        </fieldset>
                        <fieldset>
                                <div class="pure-control-group">
                            <label for="password" class="col-md-4 control-label">Парола</label>
                                <input id="password" type="password" class="form-control" name="password">

                                                                </div>
                            </fieldset>

                            <fieldset>
                                <!--<button type="submit" class="pure-button pure-button-primary">
                                    Регистрирайте се
                                </button>-->
                                <button type="submit" name="submit">Изпрати</button>
                            </fieldset>
                            
                            <?php 
                                if (isset($_POST['submit'])) {
                                    $name= mysqli_real_escape_string($connect, $_POST['name']);
                                    $password=mysqli_real_escape_string($connect, $_POST['password']);
                                    $email=mysqli_real_escape_string($connect, $_POST['email']);
                                    $password=password_hash($password, PASSWORD_DEFAULT);
                                    $searchQuery =  "SELECT * FROM `users` WHERE `email` = '$email'"; 
                                    $search = mysqli_query($connect, $searchQuery);
                                    // echo $name; die;
                                    // var_dump($search); die;
                                        if (mysqli_num_rows($search) > 0) {
                                            header('Location: error.php');
                                        }else{
                                            $insert_query ="INSERT INTO users(name, email, password) VALUES ('$name','$email','$password')";
                                        $insert_result= mysqli_query($connect, $insert_query);
                                         $_SESSION['success'] = 'Успешно се регистрирахте.';
                                            header('Location: /');
                                        }
                            }          
                            ?>

<?php include('./footer.php'); ?>



 