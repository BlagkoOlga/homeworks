<?php
/**
 * Нарисуйте пирамиду, как показано на рисунке, воспользовавшись циклом for или while.<br><br>
 * xx<br>
 * xxxx<br>
 * xxxxxx<br>
 * xxxxxxxx<br>
 * xxxxxxxxxx</p>
 */
for ($i = 1; $i <= 6; $i++) {
    for ($j = 1; $j < $i; $j++) {
        echo "xx";
    }
    echo "</br>";

}