<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>菜鸟教程(runoob.com)</title>
    <style>
        .error {color: #FF0000;}
    </style>
</head>
<body>

<?php
// 定义变量并默认设置为空值
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";
if($_SERVER["REQUEST_METHOD"] == "POST"){
    //名字验证码
    if(empty($_POST['name'])) $nameErr = '名字是必须的';
    if(!empty($_POST['name'])){
        $name = test_input($_POST['name']);
        //检测名字是否值包含字母和空格
        if(!preg_match("/^[a-zA-Z ]*$/",$name)) $nameErr = '只允许字母和空格';
    }
    //邮箱验证
    if(empty($_POST['email'])) $emailErr = '邮箱名称是必须的';
    if(!empty($_POST['email'])){
        $email = test_input($_POST['email']);
        //检测邮箱是否合法
        if(!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email)) $emailErr = '非法邮箱格式';
    }
    //网址验证
    if (empty($_POST["website"])) $website = "";
    if(!empty($_POST['website'])) {
        $website = test_input($_POST["website"]);
        // 检测 URL 地址是否合法
        if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) $websiteErr = "非法的 URL 的地址";
    }
    //内容验证
    if (empty($_POST["comment"])) $comment = "";
    if (empty($_POST["comment"])) $comment = test_input($_POST["comment"]);
    //性别验证
    if (empty($_POST["gender"])) $genderErr = "性别是必需的";
    if (!empty($_POST["gender"])) $gender = test_input($_POST["gender"]);
}

function test_input($data){
    $data = trim($data);
    //stripslashes() 函数删除由 addslashes() 函数添加的反斜杠。
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

<h2>PHP 表单验证实例</h2>
<p><span class="error">* 必需字段。</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    名字: <input type="text" name="name" value="<?php echo $name;?>">
    <span class="error">* <?php echo $nameErr;?></span>
    <br><br>
    E-mail: <input type="text" name="email" value="<?php echo $email;?>">
    <span class="error">* <?php echo $emailErr;?></span>
    <br><br>
    网址: <input type="text" name="website" value="<?php echo $website;?>">
    <span class="error"><?php echo $websiteErr;?></span>
    <br><br>
    备注: <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
    <br><br>
    性别:
    <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?>  value="female">女
    <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?>  value="male">男
    <span class="error">* <?php echo $genderErr;?></span>
    <br><br>
    <input type="submit" name="submit" value="Submit">
</form>
<?php
echo "<h2>您输入的内容是:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
?>

</body>
</html>