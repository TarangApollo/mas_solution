@extends('layouts.wladmin')

@section('title', 'Dashboard')

@section('content')
    <meta name="csrf-token" id="csrf-token" content="{{ csrf_token() }}">
    <div class="main-panel">
        <div class="content-wrapper pb-0">
            <?php if (in_array('13', \Session::get('menuList'))) { ?>
            <div class="page-header">
                <h3>Dashboard</h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">Dashboard</li>
                    </ol>
                </nav>
            </div>
            <!--/. page header ends-->
            <!-- first row starts here -->

            <div class="row">
                <div class="col">
                    <div class="card stretch-card">
                        <div class="card-body d-flex flex-wrap justify-content-between p-3">
                            <h4 class="w-100 font-weight-semibold mb-4">Total Calls</h4>
                            <img class="pl-lg-3" src="../global/assets/images/dashboard/calls.png" alt="Calls">
                            <h3 class="pull-right text-success font-weight-bold d-flex align-items-center">
                                {{ $dashboarCount['call'] }}</h3>
                        </div>
                    </div>
                </div>
                <!--./col-->

                <div class="col pl-lg-0">
                    <div class="card stretch-card">
                        <div class="card-body d-flex flex-wrap justify-content-between p-3">
                            <h4 class="w-100 font-weight-semibold mb-4">Total Tickets</h4>
                            <img class="pl-lg-3" src="../global/assets/images/dashboard/ticket-closed.png" alt="Clock">
                            <h3 class="pull-right text-success font-weight-bold d-flex align-items-center">
                                {{ $dashboarCount['ticket'] }}</h3>
                        </div>
                    </div>
                </div>
                <!--./col-->

                <div class="col pl-lg-0">
                    <div class="card stretch-card grid-margin">
                        <div class="card-body d-flex flex-wrap justify-content-between p-3">
                            <h4 class="w-100 font-weight-semibold mb-4">Open Tickets</h4>
                            <img class="pl-lg-3" src="../global/assets/images/dashboard/ticket-open.png" alt="Clock">
                            <h3 class="pull-right text-success font-weight-bold d-flex align-items-center">
                                {{ $dashboarCount['oTicket'] }}</h3>
                        </div>
                    </div>
                </div>
                <!--./col-->

                <div class="col pl-lg-0">
                    <div class="card stretch-card grid-margin">
                        <div class="card-body d-flex flex-wrap justify-content-between p-3">
                            <h4 class="w-100 font-weight-semibold mb-4">Total Company</h4>
                            <img class="pl-lg-3" src="../global/assets/images/dashboard/company.png" alt="Clock">
                            <h3 class="pull-right text-success font-weight-bold d-flex align-items-center">
                                {{ $dashboarCount['custCompany'] }}</h3>
                        </div>
                    </div>
                </div>
                <!--./col-->

                <div class="col pl-lg-0">
                    <div class="card stretch-card grid-margin">
                        <div class="card-body d-flex flex-wrap justify-content-between p-3">
                            <h4 class="w-100 font-weight-semibold mb-4">Total Customer</h4>
                            <img class="pl-lg-3" src="../global/assets/images/dashboard/users.png" alt="Clock">
                            <h3 class="pull-right text-success font-weight-bold d-flex align-items-center">
                                {{ $dashboarCount['customer'] }}</h3>
                        </div>
                    </div>
                </div>
                <!--./col-->

            </div>
            <!--./row-->
            <!-- year & month selector -->
            <div class="row">
                <form class="was-validated pb-3" action="" method="post">
                    @csrf
                    <div class="col-md-3 pl-lg-0">
                        <div class="form-group">
                            <label>Select Financial Year</label>
                            <select class="js-example-basic-single" style="width: 100%;" required name="fYear"
                                id="fYear">

                                @foreach ($yearList as $year)
                                    <option value="{{ $year->iYearId }}">{{ $year->yearName }}</option>
                                @endforeach
                            </select>
                        </div> <!-- /.form-group -->
                    </div> <!-- /.col -->
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Select Month</label>
                            <select class="js-example-basic-single" style="width: 100%;" required name="fMonth"
                                id="fMonth">
                                <option label="Please Select" value="">-- Select --</option>
                                <option value="4">April</option>
                                <option value="5">May</option>
                                <option value="6">June</option>
                                <option value="7">July</option>
                                <option value="8">August</option>
                                <option value="9">September</option>
                                <option value="10">October</option>
                                <option value="11">November</option>
                                <option value="12">December</option>
                                <option value="1">January</option>
                                <option value="2">February</option>
                                <option value="3">March</option>
                            </select>
                        </div> <!-- /.form-group -->
                    </div> <!-- /.col -->
                </form>


            </div>
            <!-- /. year & month selector -->
            <!-- second row starts here -->
            <div class="row">
                <!--chart start-->
                <div class="col-md-6 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title p-0 mt-0 mb-5 bg-transparent">Tickets Analytics
                            <br><small class="text-black-50 text-lowercase">Data displayed in numbers</small></h4>
                            <canvas id="barChart" style="height: 230px;"></canvas>
                        </div>
                    </div>
                </div>
                <!--/.chart end-->
                <!--line chart start-->
                <div class="col-md-6 stretch-card grid-margin">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title p-0 mt-0 mb-5 bg-transparent">Resolution Analytics

                            <br><small class="text-black-50 text-lowercase">data displayed in % value</small>  </h4>
                            <div id="lineChart-graph-container"><canvas id="lineChart"></canvas></div>

                        </div>
                    </div>
                </div>
                <!--/.line chart end-->
            </div>
            <!--./row-->

            <!-- third row starts here -->
            <div class="row">
                <!--call list start-->
                <!--chart start-->
                <div class="col-md-6 stretch-card grid-margin">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title p-0 mt-0 mb-5 bg-transparent">System Tickets Analytics
                            <br><small class="text-black-50 text-lowercase">Data displayed in numbers</small></h4>
                            <div id="graph-container"><canvas id="doughnutChart"></canvas></div>
                        </div>
                    </div>
                </div>
                <!--/.chart end-->
            </div>
            <!--./row-->
            <?php }else { ?>
            <div class="page-header">
                <h3>Welcome to Dashboard</h3>

            </div>
            <?php } ?>
        </div>
        <!-- content-wrapper ends -->

        <!-- partial -->
    </div>
    <!-- main-panel ends -->


@endsection

@section('script')

    <script>
        var options = {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            },
            legend: {
                display: false
            },
            elements: {
                point: {
                    radius: 0
                }
            }
        };

        // Get context with jQuery - using jQuery's .get() method.
        var barChartCanvas = $("#barChart").get(0).getContext("2d");
        // This will get the first returned node in the jQuery collection.
        var barChart = new Chart(barChartCanvas, {
            type: 'bar',
            data: {
                labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec", "Jan", "Feb", "Mar"],
                datasets: [{
                    label: '#Tickets',
                    data: getdata(),
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)',
                        'rgba(21, 42, 237, 0.2)',
                        'rgba(224, 1, 200, 0.2)',
                        'rgba(13, 191, 189, 0.2)',
                        'rgba(191, 71, 13, 0.2)',
                        'rgba(63, 191, 13, 0.2)',
                        'rgba(157, 22, 22, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)',
                        'rgba(21, 42, 237, 1)',
                        'rgba(224, 1, 200, 1)',
                        'rgba(13, 191, 189, 1)',
                        'rgba(191, 71, 13, 1)',
                        'rgba(63, 191, 13, 1)',
                        'rgba(157, 22, 22, 1)'
                    ],
                    borderWidth: 1,
                    fill: false
                }]
            },
            options: options
        });

        function getdata() {
            var yearID = $("#fYear").val();
            $.ajax({
                type: 'POST',
                url: "{{ route('profile.getCallChart') }}",
                data: {
                    yearId: yearID
                },
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(response) {
                    console.log(response);
                    //barChart.data.labels.pop();
                    // barChart.data.datasets.forEach((dataset) => {
                    //     datasets.data.pop();
                    // });
                    // barChart.update();
                    //barChart.reset();

                    $.each(JSON.parse(response), function(key, value) {
                        barChart.data.datasets[0].data.push(value);
                    });

                    barChart.update();
                }
            });
        }

        

        function getLineChart() {
            var yearID = $("#fYear").val();

            $.ajax({
                type: 'POST',
                url: "{{ route('profile.getLineChart') }}",
                data: {
                    yearId: yearID
                },
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(response) {
                    console.log(response);
                    
                    $("#lineChart").remove();
                    if (jQuery.isEmptyObject(JSON.parse(response)) == false) {
                        var e = $('<canvas id="lineChart" style="height: 230px;"></canvas>');
                        $('#lineChart-graph-container').append(e);
                        var ctxL = document.getElementById("lineChart").getContext('2d');
                        var myLineChart = new Chart(ctxL, {
                            type: 'line',
                            data: {
                                labels: [],
                                datasets: [{
                                        label: "Resolution at L1",
                                        data: [],
                                        backgroundColor: [
                                            'rgba(105, 0, 132, .2)',
                                        ],
                                        borderColor: [
                                            'rgba(200, 99, 132, .7)',
                                        ],
                                        borderWidth: 2
                                    },
                                    {
                                        label: "Resolution in < 24 hrs",
                                        data: [],
                                        backgroundColor: [
                                            'rgba(0, 137, 132, .2)',
                                        ],
                                        borderColor: [
                                            'rgba(0, 10, 130, .7)',
                                        ],
                                        borderWidth: 2
                                    }
                                ]
                            },
                            options: {
                                tooltips: {
                                    callbacks: {
                                        label: function(tooltipItem, data) {
                                            //alert("Tooltip : " + data);
                                            return data.datasets[tooltipItem.datasetIndex].label +
                                                " : " + Number(tooltipItem.yLabel).toFixed(0).replace(
                                                    /./g,
                                                    function(c, i, a) {
                                                        return i > 0 && c !== "." && (a.length - i) %
                                                            3 === 0 ? "," + c : c;
                                                    }) + "%";
                                        }
                                    }
                                },
                                responsive: true
                            }
                        });
                       // console.log((response));
                        $.each(JSON.parse(response), function(key, value) {
                            var keys = Object.keys(value);
                            console.log(keys);
                            if (key == "levelOne") {
                                $.each(value, function(key, val) {
                                    myLineChart.data.labels.push(val.key);
                                    myLineChart.data.datasets[0].data.push(val.Count);
        
                                });
                            }
                            if (key == "samedaysolution") {
                                $.each(value, function(key, val) {
                                    console.log(val);
                                    myLineChart.data.datasets[1].data.push(val);
                                });
        
                            }
        
                        });
                        myLineChart.update();
                    } else {
                        var e = $('<div id="lineChart"><strong>No Data Found!</strong></div>');
                        $('#lineChart-graph-container').append(e);
                    }
                    
                }
            });
        }

        

        function getPiaChart() {
            var yearID = $("#fYear").val();
            var fMonth = $("#fMonth").val();

            $.ajax({
                type: 'POST',
                url: "{{ route('profile.getPiaChart') }}",
                data: {
                    yearId: yearID,
                    fMonth: fMonth
                },
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(response) {
                    console.log(response);
                    $("#doughnutChart").remove();
                    if(jQuery.isEmptyObject(JSON.parse(response)) == false){
                        var e = $('<canvas id="doughnutChart"></canvas>');
                        $('#graph-container').append(e);
                        var ctxD = document.getElementById("doughnutChart").getContext('2d');
                        var piaChart = new Chart(ctxD, {
                            type: 'doughnut',
                            data : {
                                //labels: ["Advanced", "Apollo", "Argus", "FFE", "Esprit"],
                                datasets: [{
                                    data: [],
                                    backgroundColor: ["#F7464A", "#46BFBD", "#FDB45C", "#949FB1", "#4D5360",
                                        "#ff355e", "#fd5b78", "#ff6037", "#ff9966", "#ff9933",
                                        "#ffcc33", "#ffff66", "#ccff00", "#66ff66", "#aaf0d1",
                                        "#16d0cb", "#50bfe6", "#9c27b0", "#ee34d2", "#ff00cc"],
                                    hoverBackgroundColor: ["#FF5A5E", "#5AD3D1", "#FFC870", "#A8B3C5", "#616774",
                                        "#ff355e", "#fd5b78", "#ff6037", "#ff9966", "#ff9933",
                                        "#ffcc33", "#ffff66", "#ccff00", "#66ff66", "#aaf0d1",
                                        "#16d0cb", "#50bfe6", "#9c27b0", "#ee34d2", "#ff00cc"
                                    ]
                                }]
                            },
                            options: {
                                responsive: true
                            }
                        });
                        $.each(JSON.parse(response), function(key, value) {
                            piaChart.data.labels.push(value.strSystem);
                            piaChart.data.datasets[0].data.push(value.issueCount);
                        });
                        piaChart.update();
                    } else {
                        var e = $('<div id="doughnutChart"><strong>No Data Found!</strong></div>');
                        $('#graph-container').append(e);
                    }
                }
            });
        }

        $(document).ready(function() {
            getdata();
            getPiaChart();
            getLineChart();
        });

        $("#fMonth").change(function(){
            getPiaChart();
        });
        $("#fYear").change(function(){
            getdata();
            getLineChart();
            getPiaChart();
        });
    </script>
@endsection
