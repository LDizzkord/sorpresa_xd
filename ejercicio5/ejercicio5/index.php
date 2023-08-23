<!DOCTYPE html>
<html>
<head>
    <title>Reemplazo de Vocales</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="box">
        <div class="data">
    <form  method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label class="titulo" for="sentence">Ingresa una frase:</label>
        <br>
        <br>
        <br>
        <input class="datos" type="text" name="sentence" id="sentence">
        <br>
        <br>
        <br>
        <button>
        <input class="boton" type="submit" value="Reemplazar Vocales">
        <br>
        </button>
    </form>
    </div>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $sentence = $_POST["sentence"];
        $vowels = array("a", "e", "i", "o", "u", "á", "é", "í", "ó", "ú", "A", "E", "I", "O", "U", "Á", "É", "Í", "Ó", "Ú");
        $special_chars = array("#", "@", "/", "!", "&", "$");
        $new_sentence = str_replace($vowels, $special_chars, $sentence);
        $char_count = strlen($new_sentence);
        echo "Frase Original: " . $sentence . "<br>";
        echo "Frase Modificada: " . $new_sentence . "<br>";
        echo "Esta frase tiene " . $char_count . " caracteres.";
    }
    ?>
    </div>
</body>
</html>