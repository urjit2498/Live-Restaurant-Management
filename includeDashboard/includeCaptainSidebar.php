<div class="sidebar">
    <div class="sidebar__scroll">
        <div>
            <div class="sidebar__user">
                <div class="sidebar__user-avatar">
                  <!--<img src="img/avatars/placeholder.png" alt="" width="68" height="68" class="rounded-circle">-->
                    <span class="sidebar__user-avatar-placeholder">
                        <span class="iconfont iconfont-avatar-placeholder"></span>
                    </span>
                    <!--<img src="img/users/user-1.jpg" alt="" width="68" height="68" class="rounded-circle">-->-->
                <!--echo"<br><img src='$show[uplode_photo]' style='height:100px; margin-left:10px;'   class='img-responsive' alt='' />";-->
                </div>
                <div class="dropdown sidebar__user-dropdown">
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <?php echo $_SESSION['user_name'] . " " . $_SESSION['user_type_id'] ?>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        
                        <a class="dropdown-item" href="Logout.php">Sign Out</a>
                    </div>
                </div>
            </div>
            <ul class="sidebar-nav">

                <li class="sidebar-nav__item">
                    <a class="sidebar-nav__link" href="#">
                        <span class="sidebar-nav__item_icon iconfont iconfont-layout"></span>
                        <span class='sidebar-nav__item-text'>Order</span>
                    </a>
                        <ul class="sidebar-subnav">
                                
                                <?php
                                if ($_SESSION['user_type_id'] == 3) {
                                    echo" <li class='sidebar-subnav__item'><a class='sidebar-subnav__link' href='ajax.php'>Add Order</a></li>";
                                }
                                ?>
                                </ul>
                                </ul>

                                </ul>
                                </li>
                                </ul>
                                </div>

                                <div class="sidebar-nav__footer">
                                <div class="sidebar__collapse">
                                <span class="icon iconfont iconfont-collapse-left-arrows"></span>
                                </div>
                                </div>
                                </div>
                                </div>