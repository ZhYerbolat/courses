@extends('layouts.app')

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

                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12 col-md-12 col-lg-12">

                                <table style="width:100%">
                                    <tr>
                                        <td>
                                            <div>
                                                <p class="question">1. Quiz question #1</p>

                                                <ul>
                                                    <input class="answer" type="radio" name="q1" value="1">
                                                    <label id="correctString1">correct answer 1</label>
                                                    <br>
                                                    <input class="answer" type="radio" name="q1" value="0">
                                                    <label>wrong answer</label>
                                                    <br>
                                                    <input class="answer" type="radio" name="q1" value="0">
                                                    <label>wrong answer</label>
                                                    <br>
                                                    <input class="answer" type="radio" name="q1" value="0">
                                                    <label>wrong answer</label>
                                                </ul>
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                <p class="question">2. Quiz question #2</p>

                                                <ul>
                                                    <input class="answer" type="radio" name="q2" value="0">
                                                    <label>wrong answer</label>
                                                    <br>
                                                    <input class="answer" type="radio" name="q2" value="1">
                                                    <label id="correctString2">correct answer 2</label>
                                                    <br>
                                                    <input class="answer" type="radio" name="q2" value="0">
                                                    <label>wrong answer</label>
                                                    <br>
                                                    <input class="answer" type="radio" name="q2" value="0">
                                                    <label>wrong answer</label>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div>
                                                <p class="question">3. Quiz question #3</p>

                                                <ul>
                                                    <input class="answer" type="radio" name="q3" value="0">
                                                    <label>wrong answer</label>
                                                    <br>
                                                    <input class="answer" type="radio" name="q3" value="1">
                                                    <label id="correctString3">correct answer 3</label>
                                                    <br>
                                                    <input class="answer" type="radio" name="q3" value="0">
                                                    <label>wrong answer</label>
                                                    <br>
                                                    <input class="answer" type="radio" name="q3" value="0">
                                                    <label>wrong answer</label>
                                                </ul>
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                <p class="question">4. Quiz question #4</p>

                                                <ul>
                                                    <input class="answer" type="radio" name="q4" value="0">
                                                    <label>wrong answer</label>
                                                    <br>
                                                    <input class="answer" type="radio" name="q4" value="1">
                                                    <label id="correctString4">correct answer 4</label>
                                                    <br>
                                                    <input class="answer" type="radio" name="q4" value="0">
                                                    <label>wrong answer</label>
                                                    <br>
                                                    <input class="answer" type="radio" name="q4" value="0">
                                                    <label>wrong answer</label>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                                <br/>
                                <div class="submitter">
                                    <input class="btn btn-secondary" id="submitButton" onClick="submitQuiz()"
                                           type="submit" value="Закончить"/>
                                </div>

                                <!--show only wrong answers on submit-->
                                <div class="quizAnswers" id="correctAnswer1"></div>
                                <div class="quizAnswers" id="correctAnswer2"></div>
                                <div class="quizAnswers" id="correctAnswer3"></div>
                                <div class="quizAnswers" id="correctAnswer4"></div>

                                <!--show score upon submit-->
                                <div>
                                    <h2 class="quizScore" id="userScore"></h2>
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
