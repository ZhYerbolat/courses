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
                            <h4>Список учителей</h4>
                            <p class="text-gray">Количество студентов: 150</p>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <h2 style="text-align: center" class="menu-admin">Список учителей</h2>

                        <div class="grid">
                            <div class="item-wrapper">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th>
                                                <div class="form-group">
                                                    <!--                                      <label for="exampleFormControlSelect1">Example select</label>-->
                                                    <select class="form-control" id="exampleFormControlSelect1">
                                                        <option>Физика</option>
                                                        <option>Биология</option>
                                                        <option>География</option>
                                                        <option>Английский</option>
                                                        <option>Әдебиет</option>
                                                    </select>
                                                </div>
                                            </th>
                                        </tr>
                                        </thead>
                                        <thead>
                                        <tr>
                                            <th>ФИО</th>
                                            <th>Предмет</th>
                                            <th>Удаление</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>Жансай Асаналы</td>
                                            <td>Физика</td>
                                            <td>
                                                <label class="badge badge-success">Удалить</label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Жансай Асаналы</td>
                                            <td>Физика</td>
                                            <td>
                                                <label class="badge badge-success">Удалить</label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Жансай Асаналы</td>
                                            <td>Физика</td>
                                            <td>
                                                <label class="badge badge-success">Удалить</label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Жансай Асаналы</td>
                                            <td>Физика</td>
                                            <td>
                                                <label class="badge badge-success">Удалить</label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Жансай Асаналы</td>
                                            <td>Физика</td>
                                            <td>
                                                <label class="badge badge-success">Удалить</label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Жансай Асаналы</td>
                                            <td>Физика</td>
                                            <td>
                                                <label class="badge badge-success">Удалить</label>
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
                                                                  target="_blank">platform</a>.
                        Education portal</small>
                </div>
            </div>
        </footer>
        <!-- partial -->
    </div>
@endsection
