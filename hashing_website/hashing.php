<?php
/**
 * Created by PhpStorm.
 * User: Tom Cedric Gottschlich
 * Date: 25.07.2018
 * Time: 18:00
 * Description: Is a little fun project to play around with hashs.
 */

/*
 * @description: A lot of Hash algorithms.
 */
$ar_hash_algo = array(
    "md2",
    "md4",
    "md5",
    "sha1",
    "sha256",
    "sha384",
    "sha512",
    "ripemd128",
    "ripemd160",
    "ripemd256",
    "ripemd320",
    "whirlpool",
    "tiger128,3",
    "tiger160,3",
    "tiger192,3",
    "tiger128,4",
    "tiger160,4",
    "tiger192,4",
    "snefru",
    "gost",
    "adler32",
    "crc32",
    "crc32b",
    "haval128,3",
    "haval160,3",
    "haval192,3",
    "haval224,3",
    "haval256,3",
    "haval128,4",
    "haval160,4",
    "haval192,4",
    "haval224,4",
    "haval256,4",
    "haval128,5",
    "haval160,5",
    "haval192,5",
    "haval224,5",
    "haval256,5"
);

$i_size_of_hash_array = sizeof($ar_hash_algo);

if (isset($_POST['input-text'], $_POST['select-hashes'])) {

    $s_input_text = htmlspecialchars($_POST['input-text']);

    $s_hash_text = hash($_POST['select-hashes'], $s_input_text);

}

?>
<html>
<head lang="en">

    <meta charset="UTF-8">
    
    <meta name="author" content="Tom Cedric Gottschlich">
    <meta name="description" content="Is a little fun project to play around with hashs.">

    <title>Hashing Algo's</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <style>

        form {

            margin: 10px 10px 10px 10px;

        }

        textarea {

            text-align: center;

        }

    </style>

</head>
<body>
<header>
</header>
<main>
    <form method="post" action="/morsecode/hashing.php">
        <div class="form-group">
            <input type="text" id="input-text" class="form-control form-control-lg" name="input-text" placeholder="Write your text here...">
        </div>
        <div class="form-group">
            <select id="select-hashes" class="form-control" name="select-hashes">
                <?php


                    for ($i_index = 0; $i_index < $i_size_of_hash_array; $i_index++) {
                        ?>
                        <option value="<?php echo($ar_hash_algo[$i_index]); ?>"><?php echo($ar_hash_algo[$i_index]); ?></option>
                        <?php
                    }

                ?>
            </select>
        </div>
        <button id="btn-calculate" class="btn btn-primary btn-lg btn-block mb-3" name="btn-calculate" type="submit">Calculate hash</button>
        <div class="form-group">
            <textarea id="textarea-hashtext" class="form-control" name="textarea-hashtext" rows="2" disabled>
                <?php

                    echo($s_hash_text);

                ?>
            </textarea>
        </div>
    </form>
</main>
<footer>
</footer>
</body>
</html>
