@extends('include.infor-salary-master')
@section('content')
    <script>
        window.onload = function() {
            var chart = new CanvasJS.Chart("chartContainer", {
                animationEnabled: true,
                title: {
                    text: "Comparison of Exchange Rates"
                },
                subtitles: [{
                    text: "GBP & EUR to INR",
                    fontSize: 18
                }],
                axisY: {
                    prefix: "₹"
                },
                legend: {
                    cursor: "pointer",
                    itemclick: toggleDataSeries
                },
                toolTip: {
                    shared: true
                },
                data: [{
                        type: "area",
                        name: "GBP",
                        showInLegend: "true",
                        xValueType: "dateTime",
                        xValueFormatString: "MMM YYYY",
                        yValueFormatString: "₹#,##0.##",
                    },
                    {
                        type: "area",
                        name: "EUR",
                        showInLegend: "true",
                        xValueType: "dateTime",
                        xValueFormatString: "MMM YYYY",
                        yValueFormatString: "₹#,##0.##"
                    }
                ]
            });

            chart.render();

            function toggleDataSeries(e) {
                if (typeof(e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
                    e.dataSeries.visible = false;
                } else {
                    e.dataSeries.visible = true;
                }
                chart.render();
            }
        }
    </script>
    </head>
    <div class="container">
        <div class="salary">
            <h5>選択した内容</h5>
            <div class="row mt-3">
                <div class="col-3">
                    <div class="row">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <th class="th4">地域
                                    </th>
                                    <td style="width: 150px;">label</td>
                                </tr>
                            </tbody>
                        </table>
                        <table class="table">
                            <tbody>
                                <tr>
                                    <th class="th4">役職
                                    </th>
                                    <td style="width: 150px;">label</td>
                                </tr>
                            </tbody>
                        </table>
                        <table class="table">
                            <tbody>
                                <tr>
                                    <th class="th4">学歴
                                    </th>
                                    <td style="width: 150px;">label</td>
                                </tr>
                            </tbody>
                        </table>
                        <table class="table">
                            <tbody>
                                <tr>
                                    <th class="th4">業種
                                    </th>
                                    <td style="width: 150px;">label</td>
                                </tr>
                            </tbody>
                        </table>
                        <table class="table">
                            <tbody>
                                <tr>
                                    <th class="th4">職種
                                    </th>
                                    <td style="width: 150px;">label</td>
                                </tr>
                            </tbody>
                        </table>
                        <table class="table">
                            <tbody>
                                <tr>
                                    <th class="th4">年齢
                                    </th>
                                    <td style="width: 150px;">label</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-9">
                    <h5 style="padding-left:150px;">選択した条件の適正報酬予測</h5>
                    <div class="row d-flex justify-content-center mt-3">
                        <div id="chartContainer" style="height: 370px; width: 700px;"></div>
                        <h7 style="padding-left:150px;">※本ツールで予測できる報酬は、パート・アルバイト等を除く<u>正社員のみ</u>が対象となります。</h7>
                    </div>
                    <div class="row d-flex justify-content-center m-4">
                        <div class="col-6">
                            <h6 style="padding-left:30px;">統計上給与平均額</h6>
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th class="th">基準額レンジの最低額：
                                        </th>
                                        <td class="td1">*******</td>
                                    </tr>
                                    <tr>
                                        <th class="th">平均値：
                                        </th>
                                        <td class="td1">+++++++</td>
                                    </tr>
                                    <tr>
                                        <th class="th">基準額レンジの最高額：
                                        </th>
                                        <td class="td1">#####</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-3">
                            <h6 style="padding-left:30px;">採用確度</h6>
                            <table class="table1">
                                <tbody>
                                    <tr style="background-color: #B0E8C7;">
                                        <th style="background-color: #B0E8C7;" class="th1">S:
                                        </th>
                                        <td>
                                            @for ($i = 1; $i <= 5; $i++)
                                                <i class="fa-solid fa-star"></i>
                                            @endfor
                                        </td>
                                    </tr>
                                    <tr style="background-color: #A4F1FF;">
                                        <th style="background-color: #A4F1FF;" class="th1">A:
                                        </th>
                                        <td>
                                            @for ($i = 1; $i <= 4; $i++)
                                                <i class="fa-solid fa-star"></i>
                                            @endfor
                                        </td>
                                    </tr>
                                    <tr style="background-color: #FACBA5;">
                                        <th style="background-color: #FACBA5;" class="th1">B:
                                        </th>
                                        <td>
                                            @for ($i = 1; $i <= 3; $i++)
                                                <i class="fa-solid fa-star"></i>
                                            @endfor
                                        </td>
                                    </tr>
                                    <tr style="background-color: #E9B1C0;">
                                        <th style="background-color: #E9B1C0;" class="th1">C:
                                        </th>
                                        <td>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </td>
                                    </tr>
                                    <tr style="background-color: #D9D9D9;">
                                        <th style="background-color: #D9D9D9;" class="th1">D:
                                        </th>
                                        <td>
                                            <i class="fa-solid fa-star"></i>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-10 d-flex justify-content-end mb-3">
                        <a href="">戻る</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
