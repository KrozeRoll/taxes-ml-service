{% include "include/menu.volt" %}
    

<div class="page-wrapper" style="min-height: 394px;">  
<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h3 class="text-themecolor">Таблица лазер</h3>
    </div>
    <div class="col-md-7 align-self-center">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">FABCARD</a></li>
            <li class="breadcrumb-item">Таблица</li>
            <li class="breadcrumb-item active">лазер</li>
        </ol>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive m-t-40" style="margin-top:0px;">
                        <table id="prices" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <!--<th>Id ключа</th>-->
                                    <th>Имя Фамилия пользователей</th>
                                    <th>Дата резки</th>
                                    <th>Начало резки</th>
                                    <th>Окончание резки</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>#</th>
                                   <!-- <th>Id ключа</th>-->
                                    <th>Имя Фамилия пользователей</th>
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
                </div>
            </div>
        </div>
    </div>
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
        url: '/gettable',
        type: "POST",
        dataType: 'json',
        success: function(data){
            var items = [];
            $.each(data.items, function(key, i) {
                items.push('<tr><td>'+ i.id +'</td>');
                /*items.push('<td>'+ i.user_id +'</td>');*/
                items.push('<td>' + i.name + '</td>');
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