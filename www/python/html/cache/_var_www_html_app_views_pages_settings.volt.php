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
    
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-themecolor">Profile</h3>
        </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item">pages</li>
                <li class="breadcrumb-item active">Profile</li>
            </ol>
        </div>
    </div>
    
    
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <!-- Row -->
        <div class="row">
            <!-- Column -->
            <div class="col-lg-4 col-xlg-3 col-md-5">
                <div class="card">
                    <div class="card-body">
                        <center class="m-t-30"> <img src="../assets/images/users/profile.png" class="img-circle" width="150">
                            <h4 class="card-title m-t-10"><?= $user->login ?></h4>
                        </center>
                    </div>
                    <div>
                        <hr> </div>
                    <div class="card-body"> 
                        <small class="text-muted">Баланс </small><h6><?= $user->money ?> FC</h6> 
                        <small class="text-muted p-t-30 db">Время работы за лазерами</small><h6>Большой: 40ч</h6><h6>Малый: 50ч</h6>
                        <small class="text-muted p-t-30 db">ID Карты</small><h6><?= $user->uid ?></h6>
                    </div>
                </div>
            </div>
            <!-- Column -->
            <div class="col-lg-8 col-xlg-9 col-md-7">
                <div class="card">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs profile-tab" role="tablist">
                        <li class="nav-item"> <a class="nav-link active show" data-toggle="tab" href="#profile" role="tab" aria-selected="true">Профиль</a> </li>
                        <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#settings" role="tab">Настройки</a> </li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content">                       
                        <!--second tab-->
                        <div class="tab-pane active show" id="profile" role="tabpanel">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-3 col-xs-6 b-r"> <strong>Полное Имя Фамилия</strong>
                                        <br>
                                        <p class="text-muted"><?= $user->name ?></p>
                                    </div>
                                    <div class="col-md-3 col-xs-6 b-r"> <strong>Номер телефона</strong>
                                        <br>
                                        <p class="text-muted"><?= $user->phone_no ?></p>
                                    </div>
                                    <div class="col-md-3 col-xs-6 b-r"> <strong>Email</strong>
                                        <br>
                                        <p class="text-muted"><?= $user->email ?></p>
                                    </div>
                                    <div class="col-md-3 col-xs-6"> <strong>Статус</strong>
                                        <br>
                                        <?php if ($user->group == 1) { ?>
                                        <p class="text-muted">Сотрудник</p>
                                        <?php } else { ?>
                                        <p class="text-muted">Резидент</p>
                                        <?php } ?> 
                                    </div>
                                </div>
                                <!---->
                                <div class="table-responsive m-t-40" style="margin-top:0px;">
                                    <table id="prices" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                            <th>#</th>
                                            <th>Дата резки</th>
                                            <th>Начало резки</th>
                                            <th>Окончание резки</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                            <th>#</th>
                                            <th>Дата резки</th>
                                            <th>Начало резки</th>
                                            <th>Окончание резки</th>
                                            </tr>
                                        </tfoot>
                                        <tbody id="prices_data">
                                            <th><i class="fa fa-refresh fa-spin fa-fw margin-bottom"></i></th>
                                            <th><i class="fa fa-refresh fa-spin fa-fw margin-bottom"></i></th>
                                            <th><i class="fa fa-refresh fa-spin fa-fw margin-bottom"></i></th>
                                            <th><i class="fa fa-refresh fa-spin fa-fw margin-bottom"></i></th>
                                            <th><i class="fa fa-refresh fa-spin fa-fw margin-bottom"></i></th>
                                        </tbody>
                                    </table>
                                </div>
                                <!---->
                            </div>
                        </div>
                        <div class="tab-pane" id="settings" role="tabpanel">
                            <div class="card-body">
                                
                                <form class="form-horizontal form-material">
                                    <div class="form-group">
                                        <label class="col-md-12">Полное Имя Фамилия</label>
                                        <div class="col-md-12">
                                            <input type="text" placeholder="<?= $user->name ?>" class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="example-email" class="col-md-12">Email</label>
                                        <div class="col-md-12">
                                            <input type="email" placeholder="<?= $user->email ?>" class="form-control form-control-line" name="example-email" id="example-email">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Пароль</label>
                                        <div class="col-md-12">
                                            <input type="password" value="password" class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Номер телефона</label>
                                        <div class="col-md-12">
                                            <input type="text" placeholder="<?= $user->phone_no ?>" class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <button class="btn btn-success">Сохранить</button>
                                        </div>
                                    </div>
                                </form>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Column -->
        </div>
        <!-- Row -->
        <!-- ============================================================== -->
        <!-- End PAge Content -->
        <!-- ============================================================== -->
    </div>
    
    <script src="/assets/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
    <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
    <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>
     
    <script>
        
    var gettable = function() {
        $.ajax({
            url: '/settings',
            type: "POST",
            dataType: 'json',
            success: function(data){
                var items = [];
                $.each(data.items, function(key, i) {
                    items.push('<tr><td>'+ key +'</td>');
                    items.push('<td>' + i.date + '</td>');
                    items.push('<td>' + i.start_laser + '</td>');
                    items.push('<td>' + i.stop_laser + '</td></tr>');
                });
                var html = items.join('');
                $('#prices_data').html(html);

            }
        });
    };
    setInterval(gettable, 5000);    
    </script>

    <footer class="footer"> © 2018 FABCARD by <a href="https://vk.com/xtallas_55ru" target="_blank">Xtallas55ru</a></footer>
</div>