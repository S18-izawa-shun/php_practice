<?php
/*
$name にあなたの名前を代入し、 if文で $name があなたの名前だったら 「私は あなたの名前 です」、
もし違ったら「あなたの名前ではありません」と表示するように実装してください
*/

$name = "いざわ";

switch ($name) {
    case "いざわ":
    echo "私は" . $name . "です";
        // code...
        break;
    
    default:
        echo "あなたの名前ではありません";
        
        // code...
        break;
}