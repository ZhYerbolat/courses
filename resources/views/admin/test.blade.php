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
                            <p class="text-gray">Математика</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-12 equel-grid">
                            <div class="grid">
                                <div class="grid-body text-gray">
                                    <p>Результат тестов <a href="rating.html">Посмотреть список</a></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="container">
                        <div class="row">
                            <div class="col-md-10 col-sm-10 col-10 equel-grid">
                                <div class="grid">

                                    <label class="col-sm-12 control-label">
                                        <textarea type="text" name="name" class="form-control txt-area"
                                                  placeholder="Название... " required></textarea>
                                    </label>
                                    <label class="col-sm-12 control-label">
                                        <textarea type="text" name="name" class="form-control txt-area"
                                                  placeholder="Вопросы №1... " required></textarea>
                                    </label>
                                    <div class="col-sm-8">

                                        <table class="tb-table">
                                            <tr>
                                                <td><input type="radio" name="variant"></td>
                                                <td><input type="text" name="name" class="form-control td-variants"
                                                           placeholder="Вариант 1..." required/></td>
                                            </tr>
                                            <tr>
                                                <td><input type="radio" name="variant"></td>
                                                <td><input type="text" name="name" class="form-control td-variants"
                                                           placeholder="Вариант 2..." required/></td>
                                            </tr>
                                            <tr>
                                                <td><input type="radio" name="variant"></td>
                                                <td><input type="text" name="name" class="form-control td-variants"
                                                           placeholder="Вариант 3..." required/></td>
                                            </tr>
                                            <tr>
                                                <td><input type="radio" name="variant"></td>
                                                <td><input type="text" name="name" class="form-control td-variants"
                                                           placeholder="Вариант 4..." required/></td>
                                            </tr>
                                        </table>

                                        <div class="content-test"></div>
                                        <div class="radio btn-adds">
                                            <label>
                                                <button class="btn btn-secondary" id="btn-add" style="width: 20em">
                                                    Добавить еще
                                                </button>
                                            </label>
                                        </div>
                                        <div class="radio btn-adds">
                                            <label>
                                                <button class="btn btn-secondary" style="width: 20em">Сохранить</button>
                                            </label>
                                        </div>
                                    </div>
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
