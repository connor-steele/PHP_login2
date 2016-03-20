
<?php if($_SESSION['username']): ?>
    <!-- If logged in display log-in message -->
    <div class="well">
        <h1>You are logged in as: <h1 style="color:blue;"><?=$_SESSION['username']?></h1></h1>
        <h1 style="color:green"><a href="?logout=1">Logout</a><h1>
    </div>
        <!-- only view require form if logged in -->
        <?php {require 'about.php';} ?>
        <!-- else require the form page -->
    <?php else: {require 'form.php';}  ?>
<?php endif; ?>