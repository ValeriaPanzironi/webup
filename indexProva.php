<html>
    <head>
        <title>Form Ajax</title>
        <script type="text/javascript" src="jquery.min.js"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link href="style.css" rel="stylesheet" type="text/css">
    </head>

<body>
<div id="container">

<div class="form-element">

    <label for="nome">Nome</label>
    <input type="text" name="nome" id="nome" placeholder="Mario">
    
</div>
<div class="form-element">

    <label for="cognome">Cognome</label>
    <input type="text" name="cognome" id="cognome" placeholder="Rossi">
    
</div>
<div class="form-element">

    <label for="email">Email</label>
    <input type="text" name="email" id="email" class="form-control" placeholder="es. mariorossi@gmail.com">
    <span id="email_result"></span>

</div>
<div class="form-element">

    <label for="password">Password</label>
    <input type="password" name="password" id="password" class="form-control">

</div>
<div class="form-element">

    <label for="passwordConfirm">Conferma Password</label>
    <input type="password" name="passwordConfirm" id="passwordConfirm">

</div>
<div class="form-element">

    <input type="submit" id="submitButton" value="Invia">

</div>

<div id="successMessage">Il form è stato inviato con successo!</div>
<div id="errorMessage"></div>


<?php require_once 'functionJquery.html'; ?>


</div>
</body>

</html>