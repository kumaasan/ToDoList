    <!doctype html>
    <html lang="pl">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="login.css">
        <script src="https://cdn.tailwindcss.com"></script>
        <script>
            tailwind.config = {
                theme: {
                    extend: {
                        colors: {
                            clifford: '#da373d',
                        }
                    }
                }
            }
        </script>
        <title>Logowanie</title>
    </head>
    <body>
    <!-- ====== Forms Section Start -->
    <section class=" py-20 lg:py-[120px]">
        <div class="container mx-auto">

            <div class="flex flex-wrap -mx-4">
                <div class="w-full px-4">
                    <div
                            id="form"
                            class="relative mx-auto max-w-[525px] overflow-hidden rounded-lg backdrop-blur-xl border border-white-500 bg-transparent py-16 px-10 text-center sm:px-12 md:px-[60px] dark:bg-dark-2"
                    >
                        <div class="mb-10 text-center md:mb-16">
                            <a
                                    href="javascript:void(0)"
                                    class="mx-auto inline-block max-w-[160px]"
                            >
                                <strong><p style="color: white">Your own to do list</p></strong>
                            </a>
                        </div>
                        <form method="post">
                            <div class="mb-6">
                                <input
                                        name="email"
                                        type="text"
                                        placeholder="Email"
                                        class="w-full px-5 py-3 text-white bg-transparent border rounded-md outline-none border-stroke text-body-color dark:text-black dark:border-dark-3 focus:border-primary focus-visible:shadow-none"
                                />
                            </div>
                            <div class="mb-6">
                                <input
                                        name="password"
                                        type="password"
                                        placeholder="Password"
                                        class="w-full px-5 py-3 text-white bg-transparent border rounded-md outline-none border-stroke text-body-color dark:text-black dark:border-dark-3 focus:border-primary focus-visible:shadow-none"
                                />
                            </div>
                            <div class="mb-10">
                                <input id="sign-in"
                                       name="sign-in"
                                        type="submit"
                                        value="Sign In"
                                        class="w-full px-5 py-3 text-base font-medium text-white transition border rounded-md cursor-pointer border-primary bg-[#325aa8] hover:bg-opacity-90"
                                />
                                <input id="register"
                                       name="register"
                                        type="submit"
                                        value="Register"
                                        class="w-full px-5 py-3 text-base font-medium text-white transition border rounded-md cursor-pointer border-primary bg-[#325aa8] hover:bg-opacity-90"
                                />
                                <?php

                                $servername = "localhost";
                                $username = "root";
                                $dbpassword = "";
                                $dbname = "todolist";

                                $conn = new mysqli($servername, $username, $dbpassword, $dbname);

                                if(isset($_POST['register'])){

                                    $email = $_POST['email'];
                                    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);


                                    $sqlCheckForUsers = "select email, passsw from users where email = '$email'";
                                    $resultChceck = $conn -> query($sqlCheckForUsers);

                                    $sql = "insert into users (email, passsw) values ('$email', '$password')";



                                    if($resultChceck->num_rows <= 0){
                                        if ($conn->query($sql) === TRUE) {
                                            header('Location: /todolist.php');
                                        }else {
                                            echo "Error: " . $sql . "<br>" . $conn->error;
                                        }
                                    }else{
                                        echo "<strong><p style='color: white;'>USER ALREADY EXISTS</p></strong>";
                                    }



                                }

                                if(isset($_POST['sign-in'])){

                                    $email = $_POST['email'];
                                    $password = $_POST['password'];


                                    $checkForUser = "SELECT email, passsw FROM users WHERE email = '$email'";
                                    $result = $conn ->query($checkForUser);

                                    if($result->num_rows > 0){
                                        $row = $result->fetch_assoc();
                                        $hashedPassword = $row['passsw'];
                                        if(password_verify($password, $hashedPassword)){
                                        header('Location: /todolist.php');
                                        }
                                        else{
                                            echo "<strong><p style='color: white'>NIE PRAWIDŁOWE DANE LOGOWANIA!</p></strong>";
                                        }
                                    }
                                    else{
                                        echo "<strong><p style='color: white'>NIE PRAWIDŁOWE DANE LOGOWANIA!</p></strong>";
                                    }

                                }



                                ?>
                            </div>
                        </form>



                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ====== Forms Section End -->



    </body>
    </html>