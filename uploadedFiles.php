<?php
require_once "./dbc.php";
$files = getAllFile();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/style.css">
    <title>アップロード済みファイル</title>
</head>
<body>

<div>
        <table>
            <tr>
                <th>ファイルのアップロード：</th>
                <td><a href="./form.php">こちらから</a></td>
            </tr>
        </table>
    </div>
<div>
    <hr>
    <h2>アップロード済みのファイル一覧</h2>
    <?php foreach($files as $file):?>       <!--foreachの終わりはセミコロンではなくコロン:-->
    <img src="<?php echo "{$file['file_path']}";?>" alt="">
    <p><?php echo h("{$file['caption']}");?></p>       
    <?php endforeach; ?>
</div>
    
</body>
</html>
