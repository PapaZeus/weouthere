<?php
    $msg = "";

    if (isset($_POST['submit'])) {
        $con = new mysqli('localhost', 'root', '', 'passwordHashing');

        // $name = $con->real_escape_string($_POST['name']);
        $email = $con->real_escape_string($_POST['email']);
        $password = $con->real_escape_string($_POST['password']);
        // $cPassword = $con->real_escape_string($_POST['cPassword']);

        $hash = password_hash($password, PASSWORD_BCRYPT);

        if ($con->query("INSERT INTO users (email,password) VALUES ('$email', '$hash')"));
//        else {
//            $hash = password_hash($password, PASSWORD_BCRYPT);
//            $con->query("INSERT INTO users (name,email,password) VALUES ('$name', '$email', '$hash')");
//        }
    }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
            <title>The Prelude Institute</title>
            <meta name="description" content="">
            <meta name="viewport" content="width=device-width, initial-scale=1"/>
            <link rel="shortcut icon" href="../static/favicon.ico" />
            <link rel="stylesheet" type="text/css" href="../static/css/base.css">
            <link rel="stylesheet" type="text/css" href="../static/css/pre.css">
            <link rel="stylesheet" type="text/css" href="../static/fonts/georgia/stylesheet.css">
            <link rel="stylesheet" type="text/css" href="../static/fonts/pfdinmono/stylesheet.css">
            <link rel="stylesheet" type="text/css" href="../static/fonts/avenir/stylesheet.css">
            <link rel="stylesheet" type="text/css" href="../static/fonts/proximanova/stylesheet.css">
            <link rel="stylesheet" type="text/css" href="../static/fonts/franklin/stylesheet.css">
    </head>
    <body>

    <nav data-subsplash="">
        <section data-brand="">
            <a href="#">
                <img src="../static/assets/prelude-glyph.svg">
            </a>
            <a href="#">
                <h1><span>The</span>
                    <span>Prelude</span>
                    <span>Institute</span>
                </h1>
            </a>
        </section>
    </nav>
    <main class="loader-container">
                <section data-mainline="">
                    <article data-lead="">
                        <strong>Authenticate</strong>
                    </article>
                    <article data-lead="">
                        <form data-error="true" action="login.php" method="post">
                            <p>Please enter your email below.</p>
                            <div data-inline-field="">
                            <!-- <input class="form-control" minlenght="3" name="name" placeholder="Name..."><br> -->
                            <span data-prompt="">Email</span>
                            <input data-form-field="" name="email" type="email" value="" placeholder="your@email.com"><br>
                                <div data-inline-field="true"><span data-prompt="true">Password</span><input data-incline-field="" class="form-control" type="password" name="password"></div>
                            <!-- <input class="form-control" minlenght="5" type="password" name="cPassword" placeholder="Confirm Password"><br> -->
                            <input data-submit="" data-boxed="" type="submit" name="submit" value="Submit">
                            </div>
                        </form>
                    </article>
                        <article data-lead="">
                            <div data-forgot-prompt="" style="display: block;">
                                <p>Welcome back, it seems like you've already set your password, but if you've forgotten it, click the link below and we'll authenticate you by email:</p>
                                <a data-forgot="" href="" data-unboxed="" data-forgot-email-value="">Authenticate by Email</a>
                            </div>
                        </article>
                </section>

    </main>
                <main>
                    <section data-mainline data-mainline-black>
                        <article data-stretch>
                            <ul>
                                <li>
                                    <strong>Month 0: Assessment</strong>
                                    <p>First we assess you to establish a baseline of how well you'd perform as an analyst.</p>
                                </li>
                                <li>
                                    <strong>Month 1-5: Training</strong>
                                    <p>Then we train you to make sure you have all the job-ready skills you need to be successful.</p>
                                </li>
                                <li>
                                    <strong>Month 6: Externship</strong>
                                    <p>Then we ground your training in the real world by having you do an externship at one of our employer partners.</p>
                                </li>
                                <li>
                                    <strong>Month 6+: Placement</strong>
                                    <p>Upon certification, we work with you to place you in a job, and change your life in the process.</p>
                                </li>
                            </ul>
                        </article>
                    </section>
                </main>

                <footer>
                    <section data-brand>
                        <a href="#"><img src="../static/assets/prelude-glyph.svg" /></a>
                        <a href="#"><h1><span>The</span> <span>Prelude</span> <span>Institute</span></h1></a>
                    </section>
                </footer>
                <script type="text/javascript" src="js/fastclick.js"></script>
                <script type="text/javascript" src="js/showdown.js"></script>
                <script type="text/javascript" src="js/renderers.js"></script>
                <script type="text/javascript" src="https://dev.preludeinstitute.com/api/control/members/authenticate"></script>
                <script type="text/javascript">
                    window.VALIDATED_AUTH = '';
                    window.LIVE_AUTH = '';
                </script>
                <script type="text/javascript">
                    Array.prototype.slice.call(document.querySelectorAll('a[data-track]')).map(function(a) {
                        a.addEventListener('click', function(ev) {
                            mixpanel.track('click: ' + a.getAttribute('data-track'), {
                                "link": a.getAttribute('href'),
                                "page": window.location.href
                            });
                        });
                    });

                    Array.prototype.slice.call(document.querySelectorAll('a[data-apply]')).map(function(a) {
                        a.addEventListener('click', function(ev) {
                            ev.preventDefault();
                            ev.stopPropagation();
                            launchPopup();
                        });
                    });
                </script>
                </body>

            </div>
        </div>
    </body>
</html>
