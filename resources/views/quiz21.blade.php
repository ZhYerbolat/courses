<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>BilimApp - тестирование</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="assets-into/vendors/iconfonts/mdi/css/materialdesignicons.css">
    <link rel="stylesheet" href="assets-into/css/shared/style.css">
    <!-- endinject -->
    <!-- Layout style -->
    <link rel="stylesheet" href="assets-into/css/demo_1/style.css">
    <!-- Layout style -->
    <link rel="shortcut icon" href="assets-into/images/favicon.ico"/>
    <link rel="shortcut icon" href="assets-into/images"/>
</head>
<body class="header-fixed">
<!-- partial:partials/_header.html -->
<nav class="t-header">
    <div class="t-header-brand-wrapper">
        <a href="index.html">
            <img class="logo" src="assets-into/images/logo.jpg" alt="">
            <img class="logo-mini" src="assets-into/images/logo_mini.svg" alt="">
        </a>
    </div>
    <div class="t-header-content-wrapper">
        <div class="t-header-content">
            <button class="t-header-toggler t-header-mobile-toggler d-block d-lg-none">
                <i class="mdi mdi-menu"></i>
            </button>
            <form action="#" class="t-header-search-box">
                <div class="input-group">
                    <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Поиск"
                           autocomplete="off">
                    <button class="btn btn-primary" type="submit"><i class="mdi mdi-arrow-right-thick"></i></button>
                </div>
            </form>
            <ul class="nav ml-auto">

                <li class="nav-item dropdown">
                    <a class="nav-link out" href="#" id="appsDropdown" data-toggle="dropdown" aria-expanded="false">
                        Выход
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- partial -->
<div class="page-body">
    <!-- partial:partials/_sidebar.html -->
    @include('admin.partials.sidebar-student2')
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
                <small class="text-muted d-block">BilimApp <a href="http://www.uxcandy.co" target="_blank">platform</a>.
                    Education portal</small>
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
<script src="../assets/vendors/js/core.js"></script>
<!-- endinject -->


<style>


    p.question {
        font-family: Arial, sans-serif;
        font-size:20px;
        color: #2E2E2E;
        margin-bottom:0px;
    }

    h2.quizHeader {
        font-family: Arial, sans-serif;
        font-weight:normal;
        font-size:25px;
        line-height: 27px;
        margin: 24px 0 12px 0;
        padding: 0 0 4px 0;
        border-bottom: 1px solid #a2a2a2;
    }

    h2.quizScore{
        font-family: Arial, sans-serif;
        font-size:25px;
    }

    div.quizAnswers{
        font-family: Arial, sans-serif;
        font-size:16px;
        color: #424242;
        padding: 4px 0 4px 0;
    }

    label {
        font-family: Arial, sans-serif;
        font-size:14px;
        color: #424242;
        vertical-align:top;
    }

    input.answer[type="radio"] {
        margin-bottom: 10px;
    }

    input.quizSubmit[type="submit"] {
        -webkit-background-clip: border-box;
        -webkit-background-origin: padding-box;
        -webkit-background-size: auto;
        -webkit-transition-delay: 0s, 0s;
        -webkit-transition-duration: 0.2s, 0.2s;
        -webkit-transition-property: color, background-color;
        -webkit-transition-timing-function: ease, ease;
        box-shadow: rgba(0, 0, 0, 0.498039) 0px 0px 5px 0px;
        color: #ffffff;
        background-color: #c30b0a;
        margin: 0;
        border: 0;
        outline: 0;
        text-transform:uppercase;
        height:35px;
        width:85px;
        border: 1px solid #5E5E5E;
        border-radius:5px;

    }

    input.quizSubmit[type="submit"]:hover {
        color: #ffffff;
        background: #680f11;
        text-decoration: none;
    }

    table {
        border-radius:5px;
        padding:10px;
        padding-left:25px;
    }

    th {

    }

    tr {

    }

    td {

    }

    .submitter {
        width:85px;
    }

    .hide {
        display:none;
    }


    /*SFS light red = #c30b0a;
    SFS dark red = #9f2026; */


</style>


<script>
    // scripts here:

    function submitQuiz() {
        console.log('submitted');

        // get each answer score
        function answerScore (qName) {
            var radiosNo = document.getElementsByName(qName);

            for (var i = 0, length = radiosNo.length; i < length; i++) {
                if (radiosNo[i].checked) {
                    // do something with radiosNo
                    var answerValue = Number(radiosNo[i].value);
                }
            }
            // change NaNs to zero
            if (isNaN(answerValue)) {
                answerValue = 0;
            }
            return answerValue;
        }

        // calc score with answerScore function
        var calcScore = (answerScore('q1') + answerScore('q2') + answerScore('q3') + answerScore('q4'));
        console.log("CalcScore: " + calcScore); // it works!

        // function to return correct answer string
        function correctAnswer (correctStringNo, qNumber) {
            console.log("qNumber: " + qNumber);  // logs 1,2,3,4 after called below
            // return ("The correct answer for question #" + qNumber + ": &nbsp;<strong>" +
            //         (document.getElementById(correctStringNo).innerHTML) + "</strong>");
            return "";
        }

        // print correct answers only if wrong (calls correctAnswer function)
        if (answerScore('q1') === 0) {
            document.getElementById('correctAnswer1').innerHTML = correctAnswer('correctString1', 1);
        }
        if (answerScore('q2') === 0) {
            document.getElementById('correctAnswer2').innerHTML = correctAnswer('correctString2', 2);
        }
        if (answerScore('q3') === 0) {
            document.getElementById('correctAnswer3').innerHTML = correctAnswer('correctString3', 3);
        }
        if (answerScore('q4') === 0) {
            document.getElementById('correctAnswer4').innerHTML = correctAnswer('correctString4', 4);
        }

        // calculate "possible score" integer
        var questionCountArray = document.getElementsByClassName('question');

        var questionCounter = 0;
        for (var i = 0, length = questionCountArray.length; i < length; i++) {
            questionCounter++;
        }

        // show score as "score/possible score"
        var showScore = "Вы ответили: " + calcScore +"/" + questionCounter;
        // if 4/4, "perfect score!"
        if (calcScore === questionCounter) {
            showScore = showScore + "&nbsp; <strong>Perfect Score!</strong>"
        };
        document.getElementById('userScore').innerHTML = showScore;
    }

    $(document).ready(function() {

        $('#submitButton').click(function() {
            $(this).addClass('hide');
        });

    });
</script><!-- Vendor Js For This Page Ends-->
<script src="assets-into/vendors/apexcharts/apexcharts.min.js"></script>
<script src="assets-into/vendors/chartjs/Chart.min.js"></script>
<script src="assets-into/js/charts/chartjs.addon.js"></script>
<!-- Vendor Js For This Page Ends-->
<!-- build:js -->
<script src="assets-into/js/template.js"></script>
<script src="assets-into/js/dashboard.js"></script>
<!-- endbuild -->


</body>
</html>