<?php

foreach(range(1,10) as $num)
{
    echo $num . "<br>";
}



// SELECT user_id, GROUP_CONCAT(item_id ORDER BY `timestamp`) AS items
// FROM user T
// WHERE NOT EXISTS
// (
//     SELECT 1
//     FROM user T2
//     WHERE T2.user_id = T.user_id
//     ORDER BY T2.`timestamp` DESC
//     LIMIT 10,1
// ) 
// OR T.`timestamp` > (
//     SELECT T2.`timestamp`
//     FROM user T2
//     WHERE T2.user_id = T.user_id
//     ORDER BY T2.`timestamp` DESC
//     LIMIT 10,1
// )
// GROUP BY user_id