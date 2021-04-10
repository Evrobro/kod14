<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
</head>
<body>
<?php
require_once 'db.php';

$result = $pdo->prepare("SELECT * FROM them");
$result->execute();
if ($result->rowCount() > 0) {
    while ($res = $result->fetch(PDO::FETCH_ASSOC)) {
        echo '
            <table>
                <tr>
                    <th>'.$res['date'].'</th>
                    
                    <th>'.$res['title'].'</th>
                    <th>'.$res['text'].'</th>
                    <th>'.$res['id_them'].'</th>
                    <th>'.$res['id_user'].'</th>
                </tr>
            </table>';
    }
}
?>
</body>
</html>