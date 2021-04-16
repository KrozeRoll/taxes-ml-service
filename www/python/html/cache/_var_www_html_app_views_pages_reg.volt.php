<section id="wrapper">
    <div class="login-register" style="background: #383f48;">
        <div class="login-box card">
            <div class="card-body">
                <form class="form-horizontal form-material" id="regform" action="register" method="POST">
                    <h3 class="box-title m-b-20">Регистрация</h3>
                    <div class="form-group">
                        <div class="col-xs-12">
                            <input class="form-control" type="text" name="name" placeholder="Фамилия Имя">
                        </div>
                    </div>                    
                    <div class="form-group">
                        <div class="col-xs-12">
                            <input class="form-control" type="text" name="login" placeholder="Логин">
                        </div>
                    </div>
                    <div class="form-group ">
                        <div class="col-xs-12">
                            <input class="form-control" type="password" name="password" placeholder="пароль">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12">
                            <input class="form-control" type="password" name="confirm_Password" placeholder="Повторить пароль">
                        </div>
                    </div>
                    <div class="form-group text-center m-t-20">
                        <div class="col-xs-12">
                            <button class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Зарегистрироваться</button>
                        </div>
                    </div>
                    <div class="form-group m-b-0">
                        <div class="col-sm-12 text-center">
                            <div>Уже есть учетная запись?<a href="/auth" class="text-info m-l-5"><b>Войти</b></a></div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>