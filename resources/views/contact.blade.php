@extends('admin.app')

@section('contents')
    <div class="page-body">
        <!-- partial:partials/_sidebar.html -->
        @include('admin.partials.sidebar-student')
        <!-- partial -->
        <div class="page-content-wrapper">
            <div class="page-content-wrapper-inner">
                <div class="content-viewport">
                    <div class="row">
                        <div class="col-12 py-5">
                            <h4>Контакты</h4>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xs-12 col-md-6 col-lg-6">

                            <ul>
                                <li><p class="contact-p">Отправьте сообщение</p></li>
                                <li><input type="text" class="form-control contact-inp" placeholder="ФИО"
                                           autocomplete="off"></li>
                                <li><input type="text" class="form-control contact-inp" placeholder="Email"
                                           autocomplete="off"></li>
                                <li><input type="text" class="form-control contact-inp" placeholder="Ваше сообщение"
                                           autocomplete="off"></li>
                                <li><input type="submit" class="btn btn-secondary" value="Отправить"></li>
                            </ul>
                        </div>
                        <div class="col-xs-12 col-md-6 col-lg-6">
                            <ul>
                                <li><p class="contact-p">Контактная информация</p></li>
                                <li><i class="mdi mdi-email-open link-icon"></i> <span class="link-title contact-phone">bilimapp@gmail.com</span>
                                </li>
                                <li><i class="mdi mdi-phone link-icon"></i> <span class="link-title contact-phone">87476812432</span>
                                </li>
                            </ul>
                        </div>
                    </div>


                </div>
            </div>
        </div>
        <!-- content viewport ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
            <div class="row">

                <div class="col-sm-6 text-center text-sm-left mt-3 mt-sm-0">
                    <small class="text-muted d-block">BilimApp <a href="http://www.uxcandy.co"
                                                                  target="_blank">platform</a>. Education portal</small>
                </div>
            </div>
        </footer>
        <!-- partial -->
    </div>
    <!-- page content ends -->
    </div>
@endsection
