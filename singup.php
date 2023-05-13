<?php
    include_once 'header.html';
?>
    <section>
        <h2 >تسجيل</h2>
<form action="includes/singup.inc.php" method="POST">
    <input type ="text" name="name" placeholder="الاسم الكامل">
    <input type ="text" name="email" placeholder="Example@email.com">
    <input type ="text" name="usr" placeholder="Username">
    <input type ="password" name="pwd" placeholder="كلمة السر">
    <input type ="password" name="pwdconfirm" placeholder=" اعادة كلمة السر">
    <button type ="submit"  value ="submit" name ="submit">سجل</button>
</form>

    </section>


