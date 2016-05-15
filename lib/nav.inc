<?php session_start();?>

<div class="home-menu">
    <div class="large-12">
        <div class="breadcrumbs">
            <ul>
                <li><a href='index.php#about'>About</a></li>
                <li><a href='index.php#services'>Services &amp; Testimonials</a></li>
                <li><a href='index.php#portfolio'>Portfolio</a></li>
                <li><a href='index.php#contact'>Contact</a></li>
                <li>
                    <?php if(isset($_SESSION['user'])) {
                            if($_SESSION['admin'] == 1){
                                echo '<a href=\'manage.php\'>Manage</a></li>';
                                echo '<li><a href=\'logout.php\'>Log Out</a></li>';
                            } else {
                                echo '<a href=\'myphotos.php\'>MY PHOTOS</a></li>';
                                echo '<li><a href=\'logout.php\'>Log Out</a>';
                            } 
                        }else {
                            echo '<a href=\'login.php\'>Log In</a>'; }
                    ?>
                </li>
            </ul>
        </div>
        <div class="social">
            <ul>
                <li><a href="http://www.facebook.com/ophotophotography" target="_blank"><div class="image-1"></div></a></li>
                <li><a href="http://www.instagram.com/ophoto"><div class="image-2"></div></a></li>
                <li><a href="http://www.pinterest.com/drewotto"><div class="image-3"></div></a></li>
            </ul>
        </div>
    </div>
</div>