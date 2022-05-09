@extends('include.infor-salary-master')
@section('content')
    <script>
        window.onload = function() {
            var chart = new CanvasJS.Chart("chartContainer", {
                animationEnabled: true,
                theme: "light2",
                title: {
                    text: "Site Traffic"
                },
                axisX: {
                    valueFormatString: "DD MMM"
                },
                axisY: {
                    title: "Total Number of Visits",
                    includeZero: true,
                    maximum: 1200
                },
                data: [{
                    type: "splineArea",
                    color: "#6599FF",
                    xValueType: "dateTime",
                    xValueFormatString: "DD MMM",
                    yValueFormatString: "#,##0 Visits",
                }]
            });
            chart.render();
        }
    </script>
    </head>
    <body>
        <div class="container">
            <h5>選択した内容</h5>
            <div class="row mb-3">
                <div class="col-6">
                    <div class="row">
                        <div class="col-4">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th class="th" style="background-color:#FCE4D6;">地域
                                        </th>
                                        <td style="width: 150px;">label</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-6">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th class="th" style="background-color:#FCE4D6;">業種
                                        </th>
                                        <td style="width: 300px;">label</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                </div>
            </div>
            <label>統計上基準額
            </label>
            <div class="row">
                <div class="col-6">
                    <div class="row">
                        <table class="tabel1">
                            <thead>
                                <tr>
                                    <th class="th1"></th>
                                    <th class="th1">非役職</th>
                                    <th class="th1">係長級
                                    </th>
                                    <th class="th1">課長級
                                    </th>
                                    <th class="th1">部長級
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th class="th1">基準額レンジの最高額
                                    </th>
                                    <td>*******</td>
                                    <td>********</td>
                                    <td>********</td>
                                    <td>********</td>
                                </tr>
                                <tr>
                                    <th class="th1">基準額レンジの最低額
                                    </th>
                                    <td>#####</td>
                                    <td>#######</td>
                                    <td>######</td>
                                    <td>######</td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="row">
                            <div id="chartContainer" class="chart" style="height: 370px;"></div>
                        </div>
                    </div>
                    <label>自社内従業員給与</label>
                    <div class="row mb-3">
                        <table class="tabel">
                            <thead>
                                <tr>
                                    <th class="th2"></th>
                                    <th class="th2">非役職
                                    </th>
                                    <th class="th2">係長級
                                    </th>
                                    <th class="th2">課長級
                                    </th>
                                    <th class="th2">部長級
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th class="th2">平均額
                                    </th>
                                    <td>*******</td>
                                    <td>********</td>
                                    <td>********</td>
                                    <td>********</td>
                                </tr>
                                <tr>
                                    <th class="th2">最高額
                                    </th>
                                    <td>#####</td>
                                    <td>#######</td>
                                    <td>######</td>
                                    <td>######</td>
                                </tr>
                                <tr>
                                    <th class="th2">最低額
                                    </th>
                                    <td>*******</td>
                                    <td>********</td>
                                    <td>********</td>
                                    <td>********</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-4">
                    <div class="row">
                        <table class="tabel">
                            <thead>
                                <tr>
                                    <th colspan="2">役職の説明</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="td">部長級
                                    </td>
                                    <td class="td1">"「課やグループなど1つまたは複数の組織における管理業務を行う」責任者。
                                        「自分の管轄の部署を管理する」という役割があり、現場に対して仕事の割り振り、指導をしたり、会社の事業を発展させる経営計画の立案、実行、部下の査察等も行う者。"
                                    </td>
                                </tr>

                                <td class="td">課長級
                                </td>
                                <td class="td1">"「課やグループなど組織における管理業務を行う」責任者。
                                    マネジメントをはじめグループの司令塔として課・グループ全体の管理、指導を行うという役割を担う者。
                                    組織の中で定められた範囲で物事を決定したり指導を行える権限を有している者。"
                                </td>
                                </tr>
                                <td class="td">係長級
                                </td>
                                <td class="td1">
                                    担当業務に精通し、担当業務を自己完結させることに加えて現場の監督業務を行う者。新人教育をはじめ経験が少ない、浅い人に対して指導を行い、現場の効率を上げる役職者。しかし、部署・チームなどの決裁権限はない。
                                </td>
                                </tr>

                                <td class="td">非役職
                                </td>
                                <td class="td1">役職など肩書が付かない一般職。
                                </td>
                            </tbody>
                        </table>
                    </div>
                    <div class="row link" style="margin-top: 160px;">
                        <a href="#"> 戻る </a>
                    </div>
                </div>
            </div>
        </div>
    @endsection
