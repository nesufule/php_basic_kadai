<?php

$name = $_POST['user_name'];
$age = $_POST['user_age'];
$department = $_POST['user_department'];

$errors = [];
if(empty($name)) {
    $errors[] = '社員名を入力してください。';
}

if(empty($age)) {
    $errors[] = '年齢を入力してください。';
} elseif (!is_numeric($age)) {
    $errors[] = '年齢は数字で入力してください。';
}

?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>社員情報確認</title>
</head>

<body>
    <h2>入力内容をご確認ください。</h2>
    <p>問題がなければ「確定」、修正する場合は「キャンセル」をクリックしてください。</p>
    <table border="1">
        <tr>
            <td>項目</td>
            <td>入力内容</td>
        </tr>
        <tr>
            <td>社員名</td>
            <td><?php echo $name; ?></td>
        </tr>
        <tr>
            <td>年齢</td>
            <td><?php echo $age; ?></td>
        </tr>
        <tr>
            <td>所属部署</td>
            <td><?php echo $department; ?></td>
        </tr>
    </table>
    <p>
        <input type="button" id="confirm" value="確定" onclick="location.href='complete.php'">
        <input type="button" value="キャンセル" onclick="history.back()">
    </p>
    <?php 
    if (!empty($errors)) {
        foreach ($errors as $error) {
            echo'<font color="red">' . $error . '</font>' . '<br>';
        }
        echo "<script> document.getElementById('confirm').disabled = true; </script>";
    }
    ?>
</body>

</html>