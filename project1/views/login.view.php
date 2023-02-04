
<div>
    <h1>Login</h1>
  
    <form action="" method="POST">
        <label for="email">Email:</label><br>
        <input type="text" name="email" id="email"><br>
        <label for="password">Password:</label><br>
        <input type="password" name="password" id="password"><br>
        <input type="submit">

    </form>
    <div>
        <?php
            if (isset($view_bag['status'])) {
                echo $view_bag['status'];
            }
        
        ?>
    </div>
</div>