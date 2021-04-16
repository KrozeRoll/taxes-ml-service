<header class="topbar">
    <nav class="navbar top-navbar navbar-expand-md navbar-light">
        <div class="navbar-header">
            <a class="navbar-brand" href="/">
                <b><i class="ti-light-bulb" style="color: white;"></i></b>
                <span style="color: white; font-size: 20px; font-weight: bolder; display: inline-block;">FABCARD</span>
            </a>
        </div>
        <div class="navbar-collapse">
            <ul class="navbar-nav mr-auto mt-md-0">
                <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="mdi mdi-menu"></i></a> </li>
                <li class="nav-item m-l-10"> <a class="nav-link sidebartoggler hidden-sm-down text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
            </ul>
            <ul class="navbar-nav my-lg-0">
                
<!--                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <button type="button" class="btn waves-effect waves-light btn-rounded btn-primary"><i class="fa fa-check-circle"></i> Настройки</button>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right scale-up">
                    <ul class="dropdown-user">
                    <li>
                        <div class="dw-user-box">
                            <div class="u-text">
                            <h4><?= $user->login ?></h4>
                            <p class="text-muted"><?= $user->money ?> р.</p>
                            </div>
                        </div>
                    </li>
                    <li role="separator" class="divider"></li>
                    <li><a href="/logout"><i class="fa fa-power-off"></i> Выход</a></li>
                    </ul>
                    </div>
                </li> -->
                
            </ul>
        </div>
    </nav>
</header>
<aside class="left-sidebar">
    <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 100%;">
        <div class="scroll-sidebar" style="overflow: hidden; width: auto; height: 100%;">
        <!-- User profile -->
        <div class="user-profile">
            <!-- User profile image -->
            <div class="profile-img"> <img src="../assets/images/users/profile.png" alt="user"> 
                     <!-- this is blinking heartbit-->
                    <div class="notify setpos"> <span class="heartbit"></span> <span class="point"></span> </div>
            </div>
            <!-- User profile text-->
            <div class="profile-text">  
                    <h5><?= $user->name ?></h5>
                    <a href="/settings" class="dropdown-toggle u-dropdown"><i class="mdi mdi-settings"></i></a>
                     <!--<a href="app-email.html" class="" data-toggle="tooltip" title="" data-original-title="Email"><i class="mdi mdi-gmail"></i></a>-->
                    <!--<a href="/logout" class="" data-toggle="tooltip" title="" data-original-title="Logout"><i class="mdi mdi-power"></i></a>-->
            </div>
        </div>
        <!-- User profile -->
        <nav class="sidebar-nav active">
            <ul id="sidebarnav" class="in">
                <li class="nav-devider"></li>
                <li class="nav-small-cap">ОСНОВНОЕ</li>
                <li><a class="has-arrow waves-effect waves-dark" href="index.html#" aria-expanded="false"><i class="mdi mdi-home"></i><span class="hide-menu">FABCARD</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="/">Главная </a></li>
                    </ul>
                </li>
                <?php if ($user->group != 0) { ?>
                    <li class="nav-small-cap">Админка</li>
                    <li><a class="has-arrow waves-effect waves-dark" aria-expanded="false"><i class="fa fa-list"></i><span class="hide-menu">Таблицы</span></a>
                        <ul aria-expanded="false" class="collapse">
                            <li><a href="/table">Лазеров</a></li>
                            <li><a href="/users">Пользователей</a></li>
                        </ul>
                    </li>
                <?php } ?> 
            </ul>
        </nav>
    </div>
        <div class="slimScrollBar" style="background: rgb(220, 220, 220); width: 5px; position: absolute; top: 0px; opacity: 0.4; display: none; border-radius: 7px; z-index: 99; left: 1px; height: 734px;"></div>
        <div class="slimScrollRail" style="width: 5px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; left: 1px;"></div>
    </div>
</aside>
    

<div class="page-wrapper" style="min-height: 394px;">


    <footer class="footer"> © 2018 FABCARD by <a href="https://vk.com/xtallas_55ru" target="_blank">Xtallas55ru</a></footer>
</div>