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
                                    <p>Количестов студентов: 20 <a href="students.html">Посмотреть список</a></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="video-tab" data-toggle="tab" href="#video" role="tab"
                                   aria-controls="home" aria-selected="true">Курсы</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="material-tab" data-toggle="tab" href="#material" role="tab"
                                   aria-controls="profile" aria-selected="false">Материалы</a>
                            </li>
                        </ul>
                    </div>

                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="video" role="tabpanel" aria-labelledby="video-tab">
                            <div class="row">
                                <div class="col-md-10 col-sm-10 col-10 equel-grid">
                                    <div class="grid">
                                        <div class="grid-body text-gray">
                                            <input type="text" class="form-control" id="inputType1"
                                                   placeholder="ссылка на видеоурок">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2 col-sm-2 col-2 equel-grid">
                                    <div class="grid">
                                        <div class="grid-body text-gray">
                                            <button type="button" class="btn btn-success">Добавить</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="container">
                                <div class="row">
                                    <div class="col-xs-12 col-md-6 col-lg-3">
                                        <div class="block-subjects">
                                            <div class="embed-responsive embed-responsive-16by9">
                                                <iframe class="embed-responsive-item"
                                                        src="https://www.youtube.com/embed/v64KOxKVLVg"
                                                        allowfullscreen></iframe>
                                            </div>
                                            <div>
                                                <p>Сабақ 1. Қазақстан тарихы</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-md-6 col-lg-3">
                                        <div class="block-subjects">
                                            <div class="embed-responsive embed-responsive-16by9">
                                                <iframe class="embed-responsive-item"
                                                        src="https://www.youtube.com/embed/v64KOxKVLVg"
                                                        allowfullscreen></iframe>
                                            </div>
                                            <div>
                                                <p>Сабақ 1. Қазақстан тарихы</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-md-6 col-lg-3">
                                        <div class="block-subjects">
                                            <div class="embed-responsive embed-responsive-16by9">
                                                <iframe class="embed-responsive-item"
                                                        src="https://www.youtube.com/embed/v64KOxKVLVg"
                                                        allowfullscreen></iframe>
                                            </div>
                                            <div>
                                                <p>Сабақ 1. Қазақстан тарихы</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-md-6 col-lg-3">
                                        <div class="block-subjects">
                                            <div class="embed-responsive embed-responsive-16by9">
                                                <iframe class="embed-responsive-item"
                                                        src="https://www.youtube.com/embed/v64KOxKVLVg"
                                                        allowfullscreen></iframe>
                                            </div>
                                            <div>
                                                <p>Сабақ 1. Қазақстан тарихы</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-md-6 col-lg-3">
                                        <div class="block-subjects">
                                            <div class="embed-responsive embed-responsive-16by9">
                                                <iframe class="embed-responsive-item"
                                                        src="https://www.youtube.com/embed/v64KOxKVLVg"
                                                        allowfullscreen></iframe>
                                            </div>
                                            <div>
                                                <p>Сабақ 1. Қазақстан тарихы</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-md-6 col-lg-3">
                                        <div class="block-subjects">
                                            <div class="embed-responsive embed-responsive-16by9">
                                                <iframe class="embed-responsive-item"
                                                        src="https://www.youtube.com/embed/v64KOxKVLVg"
                                                        allowfullscreen></iframe>
                                            </div>
                                            <div>
                                                <p>Сабақ 1. Қазақстан тарихы</p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="material" role="tabpanel" aria-labelledby="material-tab">
                            <div class="container">
                                <div class="row upload-files">
                                    <div class="col-md-4">
                                        <input type="file">
                                    </div>
                                    <div class="col-md-8 btn-files">
                                        <div class="col-md-6">
                                            <input type="submit" class="btn btn-secondary" value="Сохранить">
                                        </div>
                                    </div>

                                    <div class="col-md-12 mt-5">
                                        <table class="table">
                                            <thead>
                                            <tr>
                                                <th><input type="text" class="form-control" placeholder="Поиск">
                                                </th>
                                            </tr>
                                            </thead>
                                            <thead>
                                            <tr>
                                                <th>Название</th>
                                                <th>Скачать</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>Жансай Асаналы</td>
                                                <td><a href="">скачать</a></td>
                                            </tr>
                                            <tr>
                                                <td>Жансай Асаналы</td>
                                                <td><a href="">скачать</a></td>
                                            </tr>
                                            <tr>
                                                <td>Жансай Асаналы</td>
                                                <td><a href="">скачать</a></td>
                                            </tr>
                                            <tr>
                                                <td>Жансай Асаналы</td>
                                                <td><a href="">скачать</a></td>
                                            </tr>
                                            <tr>
                                                <td>Жансай Асаналы</td>
                                                <td><a href="">скачать</a></td>
                                            </tr>
                                            <tr>
                                                <td>Жансай Асаналы</td>
                                                <td><a href="">скачать</a></td>
                                            </tr>

                                            </tbody>
                                        </table
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
