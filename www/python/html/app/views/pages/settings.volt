{% include "include/menu.volt" %}
    

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
                            <h4 class="card-title m-t-10">{{ user.login }}</h4>
                        </center>
                    </div>
                    <div>
                        <hr> </div>
                    <div class="card-body"> 
                        <small class="text-muted">Баланс </small><h6>{{ user.money }} FC</h6> 
                        <small class="text-muted p-t-30 db">Время работы за лазерами</small><h6>Большой: 40ч</h6><h6>Малый: 50ч</h6>
                        <small class="text-muted p-t-30 db">ID Карты</small><h6>{{ user.uid }}</h6>
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
                                        <p class="text-muted">{{ user.name }}</p>
                                    </div>
                                    <div class="col-md-3 col-xs-6 b-r"> <strong>Номер телефона</strong>
                                        <br>
                                        <p class="text-muted">{{ user.phone_no }}</p>
                                    </div>
                                    <div class="col-md-3 col-xs-6 b-r"> <strong>Email</strong>
                                        <br>
                                        <p class="text-muted">{{ user.email }}</p>
                                    </div>
                                    <div class="col-md-3 col-xs-6"> <strong>Статус</strong>
                                        <br>
                                        {% if user.group == 1 %}
                                        <p class="text-muted">Сотрудник</p>
                                        {% else %}
                                        <p class="text-muted">Резидент</p>
                                        {% endif %} 
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
                                            <input type="text" placeholder="{{ user.name }}" class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="example-email" class="col-md-12">Email</label>
                                        <div class="col-md-12">
                                            <input type="email" placeholder="{{ user.email }}" class="form-control form-control-line" name="example-email" id="example-email">
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
                                            <input type="text" placeholder="{{ user.phone_no }}" class="form-control form-control-line">
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