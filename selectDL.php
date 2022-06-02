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
    <title>日付で選択してDL</title>
</head>
<body>

<div>
    <hr>
<form action="" method="POST">
    <input type="date" name="searchDate" id="date"/>
    <button type="submit">この日付で探す</button>
</form>

<?php $searchDate = ''; ?>
<?php if ($_SERVER["REQUEST_METHOD"] === "POST") :?>
<?php $searchDate = $_POST['searchDate']; ?>
<?php endif; ?>

<?php foreach($files as $file): ?>                <!--セミコロン方式！参考：https://www.flatflag.nir87.com/if-257#endifHTML-->
<?php if($searchDate === $file['dateInput']): ?>
    <img src="<?php echo "{$file['file_path']}";?>" alt="">
    <p><?php echo h("{$file['caption']}");?></p> 
<?php endif; ?>
<?php endforeach; ?>
</div>


    
</body>
</html>