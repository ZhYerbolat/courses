@extends('admin.app')

@section('contents')
    <div class="page-body">
        <!-- partial:partials/_sidebar.html -->
        @include('admin.partials.sidebar-student2')
        <!-- partial -->
        <div class="page-content-wrapper">
            <div class="page-content-wrapper-inner">
                <div class="content-viewport">
                    <div class="row">
                        <div class="col-12 py-5">
                            <h4>Главная страница</h4>
                            <p class="text-gray">Добро пожаловать, Сериков Омиржан</p>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-lg-8">
                            <h2 style="text-align: center" class="menu-admin">Меню для студента</h2>

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
                                                <td>Тестирование</td>
                                                </a>
                                                <td>
                                                    <a href="online-test2.html">
                                                        <label class="badge badge-success">Перейти</label>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Контакты</td>
                                                <td>
                                                    <a href="contact.html">
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
                        <div class="col-lg-4">

                            <div class="month">
                                <ul>
                                    <li class="prev">&#10094;</li>
                                    <li class="next">&#10095;</li>
                                    <li>
                                        August<br>
                                        <span style="font-size:18px">2017</span>
                                    </li>
                                </ul>
                            </div>

                            <ul class="weekdays">
                                <li>Mo</li>
                                <li>Tu</li>
                                <li>We</li>
                                <li>Th</li>
                                <li>Fr</li>
                                <li>Sa</li>
                                <li>Su</li>
                            </ul>

                            <ul class="days">
                                <li>1</li>
                                <li>2</li>
                                <li>3</li>
                                <li>4</li>
                                <li>5</li>
                                <li>6</li>
                                <li>7</li>
                                <li>8</li>
                                <li>9</li>
                                <li><span class="active">10</span></li>
                                <li>11</li>
                                <li>12</li>
                                <li>13</li>
                                <li>14</li>
                                <li>15</li>
                                <li>16</li>
                                <li>17</li>
                                <li>18</li>
                                <li>19</li>
                                <li>20</li>
                                <li>21</li>
                                <li>22</li>
                                <li>23</li>
                                <li>24</li>
                                <li>25</li>
                                <li>26</li>
                                <li>27</li>
                                <li>28</li>
                                <li>29</li>
                                <li>30</li>
                                <li>31</li>
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
                    <small class="text-muted d-block">BilimApp <a href="http://www.uxcandy.co" target="_blank">platform</a>. Education portal</small>
                </div>
            </div>
        </footer>
        <!-- partial -->
    </div>
    <!-- page content ends -->
    </div>
    <!--page body ends -->
    <!-- SCRIPT LOADING START FORM HERE /////////////-->
    <!-- plugins:js -->

    <style>

        * {box-sizing: border-box;}
        ul {list-style-type: none;}

        .month {
            padding: 70px 25px;
            width: 100%;
            background: #1abc9c;
            text-align: center;
        }

        .month ul {
            margin: 0;
            padding: 0;
        }

        .month ul li {
            color: white;
            font-size: 20px;
            text-transform: uppercase;
            letter-spacing: 3px;
        }

        .month .prev {
            float: left;
            padding-top: 10px;
        }

        .month .next {
            float: right;
            padding-top: 10px;
        }

        .weekdays {
            margin: 0;
            padding: 10px 0;
            background-color: #ddd;
        }

        .weekdays li {
            display: inline-block;
            width: 13.6%;
            color: #666;
            text-align: center;
        }

        .days {
            padding: 10px 0;
            background: #eee;
            margin: 0;
        }

        .days li {
            list-style-type: none;
            display: inline-block;
            width: 13.6%;
            text-align: center;
            margin-bottom: 5px;
            font-size:12px;
            color: #777;
        }

        .days li .active {
            padding: 5px;
            background: #1abc9c;
            color: white !important
        }

        /* Add media queries for smaller screens */
        @media screen and (max-width:720px) {
            .weekdays li, .days li {width: 13.1%;}
        }

        @media screen and (max-width: 420px) {
            .weekdays li, .days li {width: 12.5%;}
            .days li .active {padding: 2px;}
        }

        @media screen and (max-width: 290px) {
            .weekdays li, .days li {width: 12.2%;}
        }
    </style>
@endsection
