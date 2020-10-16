@extends('admin.app')


@section('contents')
    <div class="page-body">
        <!-- partial:partials/_sidebar.html -->
        @include('admin.partials.sidebar-admin')
        <!-- partial -->
        <div class="page-content-wrapper">
            <div class="page-content-wrapper-inner">
                <div class="content-viewport">
                    <div class="row">
                        <div class="col-12 py-5">
                            <h4>Аюбек Бакытжан</h4>
                            <p class="text-gray">Планирование</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-12 equel-grid">
                            <div class="grid">
                                <div class="grid-body text-gray">
                                    <label for="date-ques">Дата:</label>
                                    <input class="form-control" type="datetime-local" value="2011-08-19T13:45:00"
                                           id="date-ques">
                                </div>
                                <div class="grid-body text-gray">
                                    <label>Задача:</label>
                                    <input class="form-control" type="text" placeholder="Задача">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12 col-sm-12 col-12">
                            <input type="submit" class="btn btn-secondary" value="Добавить еще" style="width: 20em;">
                        </div>

                        <div class="col-md-12 col-sm-12 col-12">
                            <input type="submit" class="btn btn-secondary" value="Сохранить"
                                   style="width: 20em; margin-top: 15px;">
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
