
// Line chart
// ------------------------------
$(window).on("load", function(){

    //Get the context of the Chart canvas element we want to select
    var ctx = $("#line-chart");

    // Chart Options
    var chartOptions = {
        responsive: true,
        maintainAspectRatio: true,
        legend: {
            position: 'bottom',
            display:false
        },
        hover: {
            mode: 'label'
        },
        scales: {

                        
            xAxes: [{
                display: true,
                gridLines: {
                    color: "#f3f3f3",
                    drawTicks: false,
                    
                },
                scaleLabel: {
                    display: false,
                    labelString: 'Month'
                    
                }

                

                
            }],
            yAxes: [{
                display: false,
                gridLines: {
                    color: "#f3f3f3",
                    drawTicks: true,
                },
                
                
                scaleLabel: {
                    display: false,
                    labelString: 'Value'
                },

                ticks: {
                    min: 0,
                    max: 10
                },
                
            }]
        },
        title: {
            display: false,
            text: 'Behaviour'
        }

        
          
    };

    // Chart Data
    var chartData = {
        labels: myLabelsArray,
        
        datasets: [{

            
            label: "",
            data: myArray,
            lineTension: 0,
            fill: false,
            
            borderColor: "#004a22",
            pointBorderColor: "#004a22",
            pointBackgroundColor: "#FFF",
            pointBorderWidth: 1,
            pointHoverBorderWidth: 2,
            pointRadius: 0,
            borderWidth: 2,
        },{
            label: "",
            data: myArray,
            lineTension: 0,
            fill: false,
            borderColor: "#004a22",
            borderDash: [5,5],
            pointBorderColor: "#004a22",
            pointBackgroundColor: "#FFF",
            pointBorderWidth: 1,
            pointHoverBorderWidth: 2,
            pointRadius: 0,
            borderWidth: 1,
            
        }
    ]
    };

    
  

    var config = {
        type: 'line',

        // Chart Options
        options : chartOptions,

        data : chartData
    };

    
    // Create the chart
    var lineChart = new Chart(ctx, config);


    // RADAR CHART

    var ctx2 = $("#radar-chart");

    var chartOptions2 = {
        responsive: true,
        maintainAspectRatio: true,
        responsiveAnimationDuration:500,
        legend: {
            position: 'bottom',
            display:false,
        },
        title: {
            display: false,
            text: 'Chart.js Radar Chart'
        },
        scale: {

            
            
          reverse: false,
          gridLines: {
            display : false
            
         },
         pointLabels: {
            fontSize: 15,
            
        },
          ticks: {
            display: false,
            beginAtZero: true,
            
            min: 0,
            max:10,
            
          }
          
        }
    };

    var chartData2 = {
        labels: myLabelsArray,
        datasets: [{
            label: "My First dataset",
            backgroundColor: "rgba(75,120,90,.6)",
            borderColor: "transparent",
            pointBorderColor: "#F50057",
            pointBackgroundColor: "#FFF",
            pointBorderWidth: 0,
            pointHoverBorderWidth: 0,
            pointRadius: 0,
            data: myArray,
        }, {
            label: "My Second dataset",
            backgroundColor: "transparent",
            borderColor: "grey",
            borderDash: [6,6],
            pointBorderColor: "#1DE9B6",
            pointBackgroundColor: "#FFF",
            pointBorderWidth: 0,
            pointHoverBorderWidth: 0,
            pointRadius: 0,
            data: myArray,
        },]
    };

    var config2 = {
        type: 'radar',

        // Chart Options
        options : chartOptions2,

        data : chartData2
    };

    var polarChart = new Chart(ctx2, config2);
    
}

);