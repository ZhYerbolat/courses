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
                            <h4>Добавление учителей</h4>
                            <p class="text-gray">В данный момент количество учителей: 150</p>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="grid">
                            <p class="grid-header">Добавить данные учителя</p>
                            <div class="grid-body">
                                <div class="item-wrapper">
                                    <div class="row mb-3">
                                        <div class="col-md-8 mx-auto">
                                            <div class="form-group row showcase_row_area">
                                                <div class="col-md-3 showcase_text_area">
                                                    <label for="inputType1">ФИО</label>
                                                </div>
                                                <div class="col-md-9 showcase_content_area">
                                                    <input type="text" class="form-control" id="inputType1" placeholder="ФИО">
                                                </div>
                                            </div>
                                            <div class="form-group row showcase_row_area">
                                                <div class="col-md-3 showcase_text_area">
                                                    <label for="inputType1">Номер телефона</label>
                                                </div>
                                                <div class="col-md-9 showcase_content_area">
                                                    <input type="number" class="form-control" id="inputType4" placeholder="8(747)6812432">
                                                </div>
                                            </div>
                                            <div class="form-group row showcase_row_area">
                                                <div class="col-md-3 showcase_text_area">
                                                    <label for="inputType5">Предмет</label>
                                                </div>
                                                <div class="col-md-9 showcase_content_area">
                                                    <select class="form-control" id="exampleFormControlSelect1">
                                                        <option>Физика</option>
                                                        <option>Биология</option>
                                                        <option>География</option>
                                                        <option>Английский</option>
                                                        <option>Әдебиет</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group row showcase_row_area">
                                                <div class="col-md-3 showcase_text_area">
                                                    <label for="inputType8">Стаж работы</label>
                                                </div>
                                                <div class="col-md-9 showcase_content_area">
                                                    <input type="text" class="form-control" id="inputType8" readonly="readonly" placeholder="2010-2015">
                                                </div>
                                            </div>
                                            <div class="form-group row showcase_row_area">
                                                <div class="col-md-3 showcase_text_area">
                                                    <label for="inputType9">О себе</label>
                                                </div>
                                                <div class="col-md-9 showcase_content_area">
                                                    <textarea class="form-control" id="inputType9" cols="12" rows="5"></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group row showcase_row_area">
                                                <div class="col-md-12 showcase_text_area">
                                                    <button type="button" class="btn btn-secondary">Сохранить</button>
                                                </div>
                                            </div>

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
                    <small class="text-muted d-block">BilimApp <a href="http://www.uxcandy.co" target="_blank">platform</a>.
                        Education portal</small>
                </div>
            </div>
        </footer>
        <!-- partial -->
    </div>
@endsection
