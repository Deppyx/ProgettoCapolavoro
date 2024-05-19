<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="style.css">
    <title>CENTRO TERMALE SR</title>
</head>
<body>
    <style>
        /* POPPINS FONT */
  @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap');

*{  
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}
body{
    background: url("water.jpg");
    background-size: cover;
    background-repeat: no-repeat;
    background-attachment: fixed;
    overflow: hidden;
}
.wrapper{
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 110vh;
    background: rgba(39, 39, 39, 0.4);
}
.nav{
    position: fixed;
    top: 0;
    display: flex;
    justify-content: space-around;
    width: 100%;
    height: 100px;
    line-height: 100px;
    background: linear-gradient(rgba(39,39,39, 0.6), transparent);
    z-index: 100;
}
.nav-logo p{
    color: white;
    font-size: 25px;
    font-weight: 600;
}
.nav-menu ul{
    display: flex;
}
.nav-menu ul li{
    list-style-type: none;
}
.nav-menu ul li .link{
    text-decoration: none;
    font-weight: 500;
    color: #fff;
    padding-bottom: 15px;
    margin: 0 25px;
}
.link:hover, .active{
    border-bottom: 2px solid #fff;
}
.nav-button .btn{
    width: 130px;
    height: 40px;
    font-weight: 500;
    background: rgba(255, 255, 255, 0.4);
    border: none;
    border-radius: 30px;
    cursor: pointer;
    transition: .3s ease;
}
.btn:hover{
    background: rgba(255, 255, 255, 0.3);
}
#registerBtn{
    margin-left: 15px;
}
.btn.white-btn{
    background: rgba(255, 255, 255, 0.7);
}
.btn.btn.white-btn:hover{
    background: rgba(255, 255, 255, 0.5);
}
.nav-menu-btn{
    display: none;
}
.form-box{
    position: relative;
    display: flex;
    align-items: center;
    justify-content: center;
    width: 512px;
    height: 512px;
    overflow: hidden;
    z-index: 2;
}

.login-container{
    position: absolute;
    left: 4px;
    width: 500px;
    display: flex;
    flex-direction: column;
    transition: .5s ease-in-out;
}
.register-container{
    position: absolute;
    right: -520px;
    width: 500px;
    display: flex;
    flex-direction: column;
    transition: .5s ease-in-out;
}
.top span{
    color: #fff;
    font-size: small;
    padding: 10px 0;
    display: flex;
    justify-content: center;
}
.top span a{
    font-weight: 500;
    color: #fff;
    margin-left: 5px;
}
header{
    color: #fff;
    font-size: 30px;
    text-align: center;
    padding: 10px 0 30px 0;
}
.two-forms{
    display: flex;
    gap: 10px;
}
.input-field{
    font-size: 15px;
    background: rgba(255, 255, 255, 0.2);
    color: #fff;
    height: 50px;
    width: 100%;
    padding: 0 10px 0 45px;
    border: none;
    border-radius: 30px;
    outline: none;
    transition: .2s ease;
}
.input-field:hover, .input-field:focus{
    background: rgba(255, 255, 255, 0.25);
}
::-webkit-input-placeholder{
    color: #fff;
}
.input-box i{
    position: relative;
    top: -35px;
    left: 17px;
    color: #fff;
}
.submit{
    font-size: 15px;
    font-weight: 500;
    color: black;
    height: 45px;
    width: 100%;
    border: none;
    border-radius: 30px;
    outline: none;
    background: rgba(255, 255, 255, 0.7);
    cursor: pointer;
    transition: .3s ease-in-out;
}
.submit:hover{
    background: rgba(255, 255, 255, 0.5);
    box-shadow: 1px 5px 7px 1px rgba(0, 0, 0, 0.2);
}
.two-col{
    display: flex;
    justify-content: space-between;
    color: #fff;
    font-size: small;
    margin-top: 10px;
}
.two-col .one{
    display: flex;
    gap: 5px;
}
.two label a{
    text-decoration: none;
    color: #fff;
}
.two label a:hover{
    text-decoration: underline;
}

.input-box input[type="date"]::-webkit-calendar-picker-indicator {
   background-color: transparent;
   color-scheme: dark;
}

@media only screen and (max-width: 786px){
    .nav-button{
        display: none;
    }
    .nav-menu.responsive{
        top: 100px;
    }
    .nav-menu{
        position: absolute;
        top: -800px;
        display: flex;
        justify-content: center;
        background: rgba(255, 255, 255, 0.2);
        width: 100%;
        height: 90vh;
        backdrop-filter: blur(20px);
        transition: .3s;
    }
    .nav-menu ul{
        flex-direction: column;
        text-align: center;
    }
    .nav-menu-btn{
        display: block;
    }
    .nav-menu-btn i{
        font-size: 25px;
        color: #fff;
        padding: 10px;
        background: rgba(255, 255, 255, 0.2);
        border-radius: 50%;
        cursor: pointer;
        transition: .3s;
    }
    .nav-menu-btn i:hover{
        background: rgba(255, 255, 255, 0.15);
    }
}
@media only screen and (max-width: 540px) {
    .wrapper{
        min-height: 100vh;
    }
    .form-box{
        width: 100%;
        height: 500px;
    }
    .register-container, .login-container{
        width: 100%;
        padding: 0 20px;
    }
    .register-container .two-forms{
        flex-direction: column;
        gap: 0;
    }
}
        </style>
 <div class="wrapper">
    <nav class="nav">
        <div class="nav-button">
            <button class="btn white-btn" id="loginBtn" onclick="login()">Sign In</button>
            <button class="btn" id="registerBtn" onclick="register()">Sign Up</button>
        </div>
        <div class="nav-menu-btn">
            <i class="bx bx-menu" onclick="myMenuFunction()"></i>
        </div>
    </nav>

<!----------------------------- Form box ----------------------------------->    
    <div class="form-box">
        
        <!------------------- login form -------------------------->

        <div class="login-container" id="login">
            <div class="top">
                <span>Non hai un account? <a href="#" onclick="register()">Sign Up</a></span>
                <header>Login</header>
            </div>
            <form method="POST" action="">
            <div class="input-box">
                        <input type="text" name="email" class="input-field" placeholder="Email">
                        <i class="bx bx-user"></i>
                    </div>
                    <div class="input-box">
                        <input type="password" name="password" class="input-field" placeholder="Password">
                        <i class="bx bx-lock-alt"></i>
                    </div>
                    <div class="input-box">
                        <input type="submit" name="login" class="submit" value="Sign In">
                    </div>
            </form>
                        <!-- PHP code for handling login -->
                        <?php
                                include('connessione.php');

                                // Se è stato premuto il tasto "Accedi" (submit)
                                if(isset($_POST['login'])) {
                                    // Memorizza i valori immessi nel form
                                    $mail = $_POST['email'];
                                    $pass = $_POST['password'];

                                    // Controllo se username e password sono "admin"
                                    if($mail === 'admin' && $pass === 'admin') {
                                        // Reindirizza l'utente a gestionale.html
                                        echo '<script>window.onload = function() { window.location.href = "gestionale.php"; }</script>';
                                        exit(); // Assicura che lo script si interrompa qui
                                    }

                                    // Se l'username e la password non sono "admin", eseguo il controllo nel database
                                    $sql= "SELECT * FROM account WHERE Email='$mail' AND Password='$pass'";
                                    // Esegui la query per verificare l'esistenza dell'utente
                                    $result = mysqli_query($conn,$sql);
                                    if($result) {
                                        // Se è stato trovato il record
                                        if(mysqli_num_rows($result) == 1) {
                                            // Accesso riuscito
                                            echo '<script>window.onload = function() { window.location.href = "ferr.html"; }</script>';
                                            exit();
                                            // Qui puoi reindirizzare l'utente a una pagina successiva al login
                                        } else {
                                            // Utente non trovato
                                            echo "<p>Errore: Utente non trovato!</p>";
                                        }
                                    } else {
                                        // Errore nella query
                                        echo "<p>Errore durante l'esecuzione della query: " . mysqli_error($conn) . "</p>";
                                    }
                                }
                                ?>



                <!-- End of PHP code -->
            <div class="two-col">
                <div class="one">
                    <input type="checkbox" id="login-check">
                    <label for="login-check"> Remember Me</label>
                </div>
                <div class="two">
                    <label><a href="#">Forgot password?</a></label>
                </div>
            </div>
        </div>
            
        <!------------------- registration form -------------------------->
        <div class="register-container" id="register">
            <div class="top">
                <span>Hai un account? <a href="#" onclick="login()">Login</a></span>
                <header>Sign Up</header>
            </div>
            <form method="POST" action="">
            <div class="two-forms">
                <div class="input-box">
                    <input type="text" class="input-field" id="nome" name="nome" placeholder="nome">
                    <i class="bx bx-user"></i>
                </div>
                <div class="input-box">
                    <input type="text" class="input-field" id="cognome" name="cognome" placeholder="cognome">
                    <i class="bx bx-user"></i>
                </div>
                <div class="input-box">
                    <input type="date" class="input-field" id="dataNascita" name="dataNascita"  placeholder="data nascita">
                    <i class="bx bx-user"></i>
                </div>
                </div>
                <div class="two-forms">
                <div class="input-box">
                    <input type="text" class="input-field" id="nazionalita" name="nazionalita" placeholder="nazionalità">
                    <i class="bx bx-user"></i>
                </div>
                <div class="input-box">
                <input type="text"  class="input-field" id="provincia" name="provincia" placeholder="provincia">
                    <i class="bx bx-user"></i>
                </div>
                <div class="input-box">
                <input type="text" class="input-field" id="comune" name="comune" placeholder="comune">
                    <i class="bx bx-user"></i>
                </div>
                </div>
        
            <div class="input-box">
                <input type="text" class="input-field" placeholder="Email" name="mail">
                <i class="bx bx-envelope"></i>
            </div>
            <div class="input-box">
                <input type="password" class="input-field" placeholder="Password" name="password">
                <i class="bx bx-lock-alt"></i>
            </div>
            <div class="input-box">
                <input type="submit" class="submit" value="Register" name="register">
            </div>
            <?php
                    include('connessione.php');

                    if(isset($_POST['register'])) {
                        // Recupera i dati dal modulo
                        $nome = $_POST['nome'];
                        $cognome = $_POST['cognome'];
                        $dataNascita = $_POST['dataNascita'];
                        $email = $_POST['mail'];
                        $password = $_POST['password'];
                        $nazionalita = $_POST['nazionalita'];
                        $provincia = $_POST['provincia'];
                        $comune = $_POST['comune'];

                        // Inserisci i dati nella tabella cliente
                        // Inserisci i dati nella tabella cliente
                            $sql_cliente = "INSERT INTO cliente (Nome, Cognome, DataNascita, Nazionalita, Provincia, Comune) 
                            VALUES ('$nome', '$cognome', '$dataNascita', '$nazionalita', '$provincia', '$comune')";

                            if ($conn->query($sql_cliente) === TRUE) {
                            // Recupera l'ID del cliente appena inserito
                            $id_cliente = $conn->insert_id;

                            // Inserisci i dati nella tabella account, associandoli all'ID del cliente
                            $sql_account = "INSERT INTO account (Email, Password, IDCliente) 
                                VALUES ('$email', '$password', $id_cliente)";

                            if ($conn->query($sql_account) === TRUE) {
                            echo "Nuovo utente e account inseriti con successo.";
                            } else {
                            echo "Errore durante l'inserimento dell'account: " . $conn->error;
                            }
                            } else {
                            echo "Errore durante l'inserimento del cliente: " . $conn->error;
                            }


                        // Chiudi la connessione al database
                        $conn->close();
                    }
                    ?>
            </form>
            <div class="two-col">
                <div class="one">
                    <input type="checkbox" id="register-check">
                    <label for="register-check"> Remember Me</label>
                </div>
                <div class="two">
                    <label><a href="#">Terms & conditions</a></label>
                </div>
            </div>
        </div>
    </div>
</div>   


<script>
   
   function myMenuFunction() {
    var i = document.getElementById("navMenu");

    if(i.className === "nav-menu") {
        i.className += " responsive";
    } else {
        i.className = "nav-menu";
    }
   }
 
</script>

<script>

    var a = document.getElementById("loginBtn");
    var b = document.getElementById("registerBtn");
    var x = document.getElementById("login");
    var y = document.getElementById("register");

    function login() {
        x.style.left = "4px";
        y.style.right = "-520px";
        a.className += " white-btn";
        b.className = "btn";
        x.style.opacity = 1;
        y.style.opacity = 0;
    }

    function register() {
        x.style.left = "-510px";
        y.style.right = "5px";
        a.className = "btn";
        b.className += " white-btn";
        x.style.opacity = 0;
        y.style.opacity = 1;
    }

</script>
</body>
</html>