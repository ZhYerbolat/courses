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
                            <h4>Тестирование</h4>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="grid">
                            <div class="item-wrapper">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th>
                                                <div class="form-group">
                                                    <!--                                      <label for="exampleFormControlSelect1">Example select</label>-->
                                                    <select class="form-control" id="">
                                                        <option>Все</option>
                                                        <option>Тригонометрия</option>
                                                        <option>Синус</option>
                                                        <option>Интегралы</option>
                                                    </select>
                                                </div>
                                            </th>
                                        </tr>

                                        </thead>
                                        <thead>
                                        <tr>
                                            <th>Название</th>
                                            <th>Попытки</th>
                                            <th>Ссылка на тест</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>Интегралы</td>
                                            <td>1</td>
                                            <td><a href="quiz.html">ссылка</a></td>
                                        </tr>
                                        <tr>
                                            <td>Интегралы</td>
                                            <td>1</td>
                                            <td><a href="quiz.html">ссылка</a></td>
                                        </tr>
                                        <tr>
                                            <td>Интегралы</td>
                                            <td>3</td>
                                            <td><a href="quiz.html">ссылка</a></td>
                                        </tr>
                                        <tr>
                                            <td>Интегралы</td>
                                            <td>5</td>
                                            <td><a href="quiz.html">ссылка</a></td>
                                        </tr>
                                        <tr>
                                            <td>Интегралы</td>
                                            <td>7</td>
                                            <td><a href="quiz.html">ссылка</a></td>
                                        </tr>
                                        <tr>
                                            <td>Интегралы</td>
                                            <td>2</td>
                                            <td><a href="quiz.html">ссылка</a></td>
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
