<?php
$roleForHeader = $_SESSION["role"];
?> 

<header>
 <div class="logo">
    <a href="../admin/students.php">
        <img src="../img/hogwarts-logo.png" alt="">
    </a>

 </div>
    <nav>
        <ul>
      
            <li><a href="../admin/students.php">Seznam žáků</a></li>
            <li><a href="../admin/add-student.php">Přidat žáka</a></li>
            

            <?php if ($roleForHeader === "admin"): ?>
                <li><a href="../admin/photos.php">Fotky</a></li>
            <?php endif; ?>
            <li><a href="../admin/log-out.php">Odhlásit</a></li>
        
        </ul>
    </nav>
   <div class="menu-icon">
<i class="fa-solid fa-bars"></i>


   </div>
</header>
