@extends("Dashboard::Layouts.main")
@section("content")
    <div class="main-content">
        <div id="container"></div>
    </div>
@endsection

@section("js")
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/export-data.js"></script>
    <script src="https://code.highcharts.com/modules/accessibility.js"></script>

    <script>
        Highcharts.chart('container', {
            chart: {
                type: 'column',
                style: {
                    fontFamily: 'irs',
                    textAlign: "right",
                }
            },
            title: {
                text: 'نمودار رزرو پارکینگ'
            },
            lang: {
                viewFullscreen: "نمایش تمام صفحه",
                printChart: "پرینت",
                downloadCSV: "دانلود csv",
                downloadJPEG: "دانلود تصویر (jpeg)",
                downloadPDF: "دانلود پی دی اف",
                downloadPNG: "دانلود تصویر (png)",
                downloadSVG: "دانلود تصویر (svg)",
                downloadXLS: "دانلود فایل excel",
                viewData: "نمایش به صورت جدول",
            },
            xAxis: {
                categories: [@foreach($dates as $date => $value) '{{ \Morilog\Jalali\Jalalian::fromCarbon(\Illuminate\Support\Carbon::parse($date))->format("Y/m/d") }}', @endforeach],
            },
            yAxis: {
                title: {
                    text: "مبلغ",
                    style: {
                        fontSize: '20px',
                        fontWeight: 'bold',
                    }
                }, labels: {
                    formatter: function () {
                        return this.value;
                    }
                }
            },
            tooltip: {
                useHTML: true,
                style: {
                    direction: 'rtl',
                    textAlign: "right",
                },
                formatter: function () {
                    var mydate = this.x ? "تاریخ:" + "<span style='direction: ltr'>" + this.x + "</span><br />" : "";
                    return mydate + "مبلغ:" + "<span style='margin-right: 10px'>" + this.y + "</span>";
                }
            },
            plotOptions: {
                column: {
                    pointPadding: 0.2,
                    borderWidth: 0
                }
            },
            series: [{
                type: 'column',
                name: 'فروش سایت',
                color: 'green',
                data: [@foreach($dates as $date=>$value) @if($day = $summry->where("date",$date)->first()) {{ $day->amount }} @else 0  @endif , @endforeach]
            }]
        });
    </script>
@endsection
