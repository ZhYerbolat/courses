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
                            <h4>Главная страница</h4>
                            <p class="text-gray">Добро пожаловать, Жәкен Ерболат</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-12 equel-grid">
                            <div class="grid">
                                <div class="grid-body text-gray">
                                    <p>Количестов учителей: 260 <a href="teachers.html" href="">Посмотреть список</a>
                                    </p>
                                    <p>Количестов студентов: 150 <a href="students.html">Посмотреть список</a></p>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-12">
                        <h2 style="text-align: center" class="menu-admin">Меню для админа</h2>

                        <div class="grid">
                            <div class="item-wrapper">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th>Название</th>
                                            <th>Переход на страницу</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>Добавить учителей</td>
                                            </a>
                                            <td>
                                                <a href="add-teacher.html">
                                                    <label class="badge badge-success">Перейти</label>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Студенты(+200)</td>
                                            <td>
                                                <a href="students.html">
                                                    <label class="badge badge-success">Перейти</label>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Статистика(+200)</td>
                                            <td>
                                                <a href="rating.html">
                                                    <label class="badge badge-success">Перейти</label>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Запросы(+200)</td>
                                            <td>
                                                <a href="query.html">
                                                    <label class="badge badge-success">Перейти</label>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Добавить администратора</td>
                                            <td>
                                                <a href="add-admin.html">
                                                    <label class="badge badge-success">Перейти</label>
                                                </a>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
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
