<script type="text/javascript">
function Blank_TextField_Validator() {
    if (text_form.username.value == "") {
        alert("Isi dulu username !");
        text_form.username.focus();
        return (false);
    }
    if (text_form.password.value == "") {
        alert("Isi dulu password !");
        text_form.password.focus();
        return (false);
    }
    return (true);
}
// -->
</script>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login Pakar - T-corn</title>
    <link rel="stylesheet" href="aset/login/css/style.css">
</head>

<body>
    <br>
    <br>
    <div class="formku">
        <div class="info">
            <h4><i class="fa fa-paper-plane"></i> Login Pakar</h4><br>
        </div>
        <form class="login-form" action="login.php" method="post" name="text_form"
            onsubmit="return Blank_TextField_Validator()">
            <input type="text" name="username" id="username" placeHolder="&#xf007;  Username"
                style="font-family:Arial, FontAwesome" />
            <input type="password" name="password" id="password" placeHolder="&#xf023;  Password"
                style="font-family:Arial, FontAwesome" />
            <input type="submit" name="submit" id="submitku" value="   Login   " /><br>
            <p class="message">Ingin mendaftar? <a href="https://forms.gle/96dJXRyH1Y2P9ww49" target="_blank">Ajukan
                    Permohonan</a></p>
        </form>
    </div>
</body>

</html>
<script>
$('input[type="password"]').on('focus', () => {
    $('*').addClass('password');
}).on('focusout', () => {
    $('*').removeClass('password');
});;
</script>
<script>
var d = document.getElementById("pakarayam");
d.className += " sidebar-collapse";
</script>