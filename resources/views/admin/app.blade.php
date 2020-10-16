<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>BilimApp - добавление учителей</title>
    <link rel="stylesheet" href="assets-into/vendors/iconfonts/mdi/css/materialdesignicons.css">
    <link rel="stylesheet" href="assets-into/css/shared/style.css">
    <link rel="stylesheet" href="assets-into/css/demo_1/style.css">
    <link rel="shortcut icon" href="assets-into/images/favicon.ico"/>
    <link rel="shortcut icon" href="assets-into/images"/>
</head>
    <body class="header-fixed">
        @include('admin.partials.header')
        @yield('contents')




        <script src="assets-into/vendors/js/core.js"></script>
        <script src="assets-into/vendors/apexcharts/apexcharts.min.js"></script>
        <script src="assets-into/vendors/chartjs/Chart.min.js"></script>
        <script src="assets-into/js/charts/chartjs.addon.js"></script>
        <script src="assets-into/js/template.js"></script>
        <script src="assets-into/js/dashboard.js"></script>
        <style>
            .content-test-item {
                padding-top: 1em;
                margin: 0.6em;
            }

            .btn-delete {
                margin-left: 0.9em;
                width: 10em;
            }
        </style>

        <script>
            var i = 2;
            $("body").on("click", "#btn-add", function () {
                $('.content-test').append(
                    '<div class="content-test-item" data-id="' + i + '">' +
                    '<label class="col-sm-12 control-label">' +
                    '<textarea type="text" name="name" class="form-control txt-area" placeholder="Вопросы №' + i + '..." required />\n' +
                    '</label>' +
                    '<table class="tb-table"> <tr> <td><input type="radio" name="variant"></td> <td><input type="text" name="name" class="form-control td-variants" placeholder="Вариант 1..." required/></td></tr>\n' +
                    '<tr> <td><input type="radio" name="variant"></td> <td><input type="text" name="name" class="form-control td-variants" placeholder="Вариант 2..." required/></td></tr>\n' +
                    '<tr> <td><input type="radio" name="variant"></td> <td><input type="text" name="name" class="form-control td-variants" placeholder="Вариант 3..." required/></td></tr>\n' +
                    '<tr> <td><input type="radio" name="variant"></td> <td><input type="text" name="name" class="form-control td-variants" placeholder="Вариант 4..." required/></td></tr></table>' +
                    '<button class="btn btn-secondary btn-delete btn-del" data-id="' + i + '">Удалить</button>' +
                    '</div>'
                );
                i++;
            });

            $("body").on("click", ".btn-delete", function () {
                var id = $(this).attr('data-id');
                $('.content-test-item[data-id=' + id + ']').remove();
            });

        </script>





    </body>
</html>
