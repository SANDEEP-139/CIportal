<?php $this->load->view('backend/header'); ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.0/Chart.min.js" integrity="sha256-UGwvyUFH6Qqn0PSyQVw4q3vIX0wV1miKTracNJzAWPc=" crossorigin="anonymous"></script>
<script>
    $(function() {
        localStorage.setItem('thisLink', 'dashboard');
        thisLink = localStorage.getItem('thisLink');
        if (thisLink) {
            $('#' + thisLink).addClass('active');
        }
    });
</script>
        <div class="wrapper-page">

            <div class="page-title">
                <h1><i class="icon-grid"></i> Sales Report</h1>
            </div>
            <div class="flashmessage">Faka?</div>
            <div class="page-content">
                <div class="container-fluid">                   
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel no-border">
                                <div class="content_wrapper">
                                    <div class="table_banner clearfix">
                                        <h5 class="table_banner_title">Sales Progress</h5>
                                    </div>
                                    <div class="table_body text-center">
                                        <canvas id="myChart" width="50" height="25"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>                       
                    </div>                     
                </div>
            </div><!-- /.page-content  -->
        </div>

<script>
    if (document.getElementById("myChart")) {
        var ctx = document.getElementById("myChart").getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ["January", "February", "March", "April", "May", "June", "July", "August","September","Octuber","November","December"],
                datasets: [{
                    label: ' Sales Progress',
                    data: [11, 23, 28, 39, 23, 30, 12, 43,56,65,73,89],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.5)',
                        'rgba(54, 162, 235, 0.5)',
                        'rgba(255, 206, 86, 0.5)',
                        'rgba(75, 192, 192, 0.5)',
                        'rgba(153, 102, 255, 0.5)',
                        'rgba(255, 159, 64, 0.5)',
                        'rgba(75, 192, 192, 0.5)',
                        'rgba(75, 192, 192, 0.5)',
                        'rgba(75, 192, 192, 0.5)',
                        'rgba(75, 192, 192, 0.5)',
                        'rgba(75, 192, 192, 0.5)',
                        'rgba(255, 99, 132, 0.5)'
                    ],
                    borderColor: [
                        '#fff',
                        '#fff',
                        '#fff',
                        '#fff',
                        '#fff',
                        '#fff',
                        '#fff',
                        '#fff',
                        '#fff',
                        '#fff',
                        '#fff',
                        '#fff'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true,
                            min: 0,
                            stepSize: 10,
                            fontColor: "#ececec",
                            fontSize: 14
                        },
                        gridLines: {
                            color: "#fff",
                            lineWidth: 1,
                            zeroLineColor: "#fff",
                            zeroLineWidth: 1
                        },
                        stacked: true
                    }],
                    xAxes: [{
                        ticks: {
                            fontColor: "#646464",
                            fontSize: 14
                        },
                        gridLines: {
                            color: "#fff",
                            lineWidth: 2
                        }
                    }]
                },
                responsive: true,
                chartArea: {
                    backgroundColor: '#fff'
                },
                legend: {
                    display: false
                }
            }
        });
    }
</script>

<?php $this->load->view('backend/footer'); ?>


