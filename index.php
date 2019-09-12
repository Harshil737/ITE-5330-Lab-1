<html lang="en">
<head>
    <title>Humber</title>
    <link rel="stylesheet" href="index.css">
    <meta name="description" content="Humber College">
    <meta name="keywords" content="Humber, College, Admission, Ontario,">
    <script
            src="https://code.jquery.com/jquery-3.4.1.min.js"
            integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
            crossorigin="anonymous"></script>
</head>
<body>
<?php require "header.php"; ?>
<?php require "content.php"; ?>
<?php require "footer.php"; ?>

<script>

    $("#btn-submit").click(function () {
        validator();
    });

    function validator() {
        var password = $('#password').val();
        var confirmpassword = $('#confirmpassword').val();
        var isvalid = true;
        var fname = $('#firstname').val();
        var lname = $('#lastname').val();
        var email = $('#email').val();
        var passordPattern = /^[a-zA-Z]{2,30}$/;

        if (fname === "") {
            $("#firstname").next().html("<br>Please enter First Name.");
            isvalid = false;
        } else {
            $("#firstname").next().html("");
            isvalid = true;
        }

        if (lname === "") {
            $("#lastname").next().html("<br>Please enter Last Name.");
            isvalid = false;
        } else {
            $("#lastname").next().html("");
            isvalid = true;
        }

        if (email === "") {
            $("#email").next().html("<br>Please enter Email.");
            isvalid = false;
        } else {
            $("#email").next().html("");
            isvalid = true;
        }

        if (password === "") {
            $("#password").next().html("<br>Please enter Password.");
            isvalid = false;
        } else if (!passordPattern.test(password)) {
            $("#password").next().html("<br>Please enter password with letters only.");
            isvalid = false;
        } else {
            $("#password").next().html("");
            isvalid = true;
        }

        if (confirmpassword === "") {
            $("#confirmpassword").next().html("<br>Please enter Confirm Password.");
            isvalid = false;
        } else if (password !== confirmpassword) {
            $("#confirmpassword").next().html("<br>Those password didn't match.");
            isvalid = false;
        } else {
            $("#confirmpassword").next().html("");
            isvalid = true;
        }

        if (isvalid === true) {
            $('#regfrm').submit();
        }
    }
</script>

</body>
</html>
