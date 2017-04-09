<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Ipizza Testbank - predatorite moneyz</title>
    </head>
    <body>
<?php
var_dump($_POST);
//die();
// THIS IS AUTO GENERATED SCRIPT
// (c) 2011-2017 Kreata OÜ www.pangalink.net

// File encoding: UTF-8
// Check that your editor is set to use UTF-8 before using any non-ascii characters

// STEP 1. Setup private key
// =========================

$private_key = openssl_pkey_get_private(
"-----BEGIN RSA PRIVATE KEY-----
MIIEpAIBAAKCAQEAx4ZraOX0349UG6hzqXjSwRfXbLY//xK1MbnsNhuRlLy4gRRK
Ju+iS7yIdVQ1Lv5y8IO7ZqEcYqr+wCkNCWIgy5LSap3Qb9vCxqqEJsFSE8+Pijp7
GoDQJhIj86YAtkVwC4Fvd0YXANuR5m0lqOChJlELDYCwETnWdOUQeP3jPpe9Ur1G
I2SsE4nvjISeRHq6f61fgntoiQh3mgqcRkg6ipsna6Ue+nogH/aichY2JLL2N6sz
NAfM5k33T2gHDByLiwIjnJTTmYgFbIR9UfoFB2PMe8CUFIKdks4rFxTcweJxzYVF
neNPJ6fmu6UGfwHp29T6QTvj4ZKDso5yK8Di3wIDAQABAoIBAQCky/+XSqfwpr9/
gKjXhzX7yqdh4T4GffsusTPKlQavZRi3dHyyoCbai0PiNMUgpYVl5kg4wkVhsX5s
VPuxjl0sB37IFMT+PvMnh9tS70XNmxghwZ/ACjjh2QXcznW0FrIurp/UUg3Z5YEi
Y3BBhhdUQIfyhSHneHALaM8sP/cb0F9L36hPIDEQckvuGu4t6YTtfY7A/j9jxo0P
VRkRYyFdegI6HzkUUi0DFyaDhjm3wJqJfnTz+UKMYVQ7TLBXMItCzFT6Rjx3S1af
+FSoyKipcxzO94W9VoTaekTDDXnIT4D8qe0+l9qx3jnxwL4gVyERpLF4dIXApxnh
xFSfDddBAoGBAOjIKnRyyB1e6PXM39U682qfcwlrrknvxhwJOQYhRFHWv4zdTVvD
ymEqjw3HN6wLq5wePAlhSBpDiJwEpQwA6g04EbmuCeQ5Gz8epA+Mt7YjqAxBnDVo
XwY6CD9Gq+c2KEl8ZUwiEqWnwVbQwViyZNf0ZjwX9mDs8uNLYmsYdLUPAoGBANtt
E6VX//73zr6XiOF5e7ibf6OcLH1ppPOKEup55ZSv+5NZDhepw8ODADB/HBwaP1PF
YSJNMNmRz+GaThdy5frVBGkbJO3HxY3xactvVHFxFd9McW+guJy+M/oSU53J9Zva
sCUHcua6JwicXCLa6yxdqHukYtn6xvGjyEsMcBUxAoGAeNUmjInkbLKOlMEDU2kl
X6xjB3nY39JR8M2sxwzPrPefONzLQh4Q2H1CArHtqSXpr8FWArx3tAJoUCxtDB0R
YUlAkjTQN6KZDRu3p8awuiAqJCqOjn6eDNpk24uwwfUv1m13G5z4NvssdgcoxgTc
KelYhEsf/lIhBnFkJhlsw2sCgYBbAxgl+aUt7T0soo/c7dWaUa0UgJ+XeS048qk7
5kmKbaAMkuCcgga33mtCskZHhb+EkJbkcl3zsF4oNidz5G1tp9NHgUHE+pp/cIWw
IsJEt2IaF4vpgCFyqhXHALj79pvQBFoRUdCf0NCF6szwjBsFcOeEOT/jJ/hCm+tk
7YjD0QKBgQDSteTCk1SPLVG+JJ4whwjNFc3CkFhqQIh4bWiUPgU99qw3NbZXZV0k
D4dy/We8zFzYK5ns3pAPbNvHa4I7Haerr7027OIxPBXnytgSVA7qSxwVw10l6UJd
B1nPDw82jZjIMNQ6r71HvzKDvtY0G9ELQv9jmw/C+SlxVbqu5vq+2w==
-----END RSA PRIVATE KEY-----");

// STEP 2. Define payment information
// ==================================

$fields = array(
        "VK_SERVICE"     => "1011",
        "VK_VERSION"     => "008",
        "VK_SND_ID"      => "uid100052",
        "VK_STAMP"       => "12345",
        "VK_AMOUNT"      =>  $_GET["sum"],
        "VK_CURR"        => "EUR",
        "VK_ACC"         => "EE812200221018582823",
        "VK_NAME"        => "3refa",
        "VK_REF"         => "1234561",
        "VK_LANG"        => "EST",
        "VK_MSG"         => "Annetus predaatoritele",
        "VK_RETURN"      => "http://localhost/contact.php",
        "VK_CANCEL"      => "http://localhost/contact.php",
        "VK_DATETIME"    => "2017-03-08T13:06:17+0200",
        "VK_ENCODING"    => "utf-8",
);
//http://localhost:8080/project/d5MY3g6nij2CIvFQ?payment_action=success <---- õnnestunud maksed
//http://localhost:8080/project/d5MY3g6nij2CIvFQ?payment_action=cancel <---- kui feilib

// STEP 3. Generate data to be signed
// ==================================

// Data to be signed is in the form of XXXYYYYY where XXX is 3 char
// zero padded length of the value and YYY the value itself
// NB! Ipizza Testpank expects symbol count, not byte count with UTF-8,
// so use `mb_strlen` instead of `strlen` to detect the length of a string

$data = str_pad (mb_strlen($fields["VK_SERVICE"], "UTF-8"), 3, "0", STR_PAD_LEFT) . $fields["VK_SERVICE"] .    /* 1011 */
        str_pad (mb_strlen($fields["VK_VERSION"], "UTF-8"), 3, "0", STR_PAD_LEFT) . $fields["VK_VERSION"] .    /* 008 */
        str_pad (mb_strlen($fields["VK_SND_ID"], "UTF-8"),  3, "0", STR_PAD_LEFT) . $fields["VK_SND_ID"] .     /* uid100052 */
        str_pad (mb_strlen($fields["VK_STAMP"], "UTF-8"),   3, "0", STR_PAD_LEFT) . $fields["VK_STAMP"] .      /* 12345 */
        str_pad (mb_strlen($fields["VK_AMOUNT"], "UTF-8"),  3, "0", STR_PAD_LEFT) . $fields["VK_AMOUNT"] .     /* 150 */
        str_pad (mb_strlen($fields["VK_CURR"], "UTF-8"),    3, "0", STR_PAD_LEFT) . $fields["VK_CURR"] .       /* EUR */
        str_pad (mb_strlen($fields["VK_ACC"], "UTF-8"),     3, "0", STR_PAD_LEFT) . $fields["VK_ACC"] .        /* EE812200221018582823 */
        str_pad (mb_strlen($fields["VK_NAME"], "UTF-8"),    3, "0", STR_PAD_LEFT) . $fields["VK_NAME"] .       /* 3refa */
        str_pad (mb_strlen($fields["VK_REF"], "UTF-8"),     3, "0", STR_PAD_LEFT) . $fields["VK_REF"] .        /* 1234561 */
        str_pad (mb_strlen($fields["VK_MSG"], "UTF-8"),     3, "0", STR_PAD_LEFT) . $fields["VK_MSG"] .        /* Annetus predaatoritele */
        str_pad (mb_strlen($fields["VK_RETURN"], "UTF-8"),  3, "0", STR_PAD_LEFT) . $fields["VK_RETURN"] .     /* http://localhost:8080/project/d5MY3g6nij2CIvFQ?payment_action=success */
        str_pad (mb_strlen($fields["VK_CANCEL"], "UTF-8"),  3, "0", STR_PAD_LEFT) . $fields["VK_CANCEL"] .     /* http://localhost:8080/project/d5MY3g6nij2CIvFQ?payment_action=cancel */
        str_pad (mb_strlen($fields["VK_DATETIME"], "UTF-8"), 3, "0", STR_PAD_LEFT) . $fields["VK_DATETIME"];    /* 2017-03-08T13:06:17+0200 */

/* $data = "0041011003008009uid10005200512345003150003EUR020EE8122002210185828230053refa0071234561011Torso Tiger069http://localhost:8080/project/d5MY3g6nij2CIvFQ?payment_action=success068http://localhost:8080/project/d5MY3g6nij2CIvFQ?payment_action=cancel0242017-03-08T13:06:17+0200"; */

// STEP 4. Sign the data with RSA-SHA1 to generate MAC code
// ========================================================

openssl_sign ($data, $signature, $private_key, OPENSSL_ALGO_SHA1);

/* muM4CNZlmK8kcsz/WTgN7+EqSsqpXktU4J3kW/Yxz/wm2HU5Mi91p54eSDdwLuux3CxRZY/eKfVu1IZqIO9pNe83GAAxEJQAZ6kuhGNf8oMBLs7ktnh1fuOeVg0ohmwPssQvqS72cSNo+ruavtVjTDrr2BFQz2MvIj39z2+71drk1G0V098SCe5AA4rMnQFr/3MQLbb0w5gnJ06aw1NveSrzJq/MIz4+P/7hXz90rykBWQxF59XinOigm3Qy8TtCpcrfg7icjH/dZ/J238MyHT+wFq8wjYh7fW65WVtXM/PdHeBCEVOQjwCJryUV1HcBT/XNa6+IDrDNScb8sT8SMQ== */
$fields["VK_MAC"] = base64_encode($signature);

// STEP 5. Generate POST form with payment data that will be sent to the bank
// ==========================================================================
?>

        <h1><a href="http://localhost:8080/">Pangalink-net</a></h1>
        <p>Makse teostamise näidisrakendus <strong>"asdfg"</strong></p>

        <form method="post" action="http://localhost:8080/banklink/ipizza">
            <!-- include all values as hidden form fields -->
<?php foreach($fields as $key => $val):?>
            <input type="hidden" name="<?php echo $key; ?>" value="<?php echo htmlspecialchars($val); ?>" />
<?php endforeach; ?>

            <!-- draw table output for demo -->
            <table>
<?php foreach($fields as $key => $val):?>
                <tr>
                    <td><strong><code><?php echo $key; ?></code></strong></td>
                    <td><code><?php echo htmlspecialchars($val); ?></code></td>
                </tr>
<?php endforeach; ?>

                <!-- when the user clicks "Edasi panga lehele" form data is sent to the bank -->
                <tr><td colspan="2"><input type="submit" value="Edasi panga lehele" /></td></tr>
            </table>
        </form>

    </body>
</html>
