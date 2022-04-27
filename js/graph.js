

var xValues = ["3/11", "3/12", "3/13", "3/14", "3/15", "3/16", "3/17", "3/18"];
var yValues = [150, 200, 300, 400, 500, 600, 700, 800];
var barColors = ["maroon", "maroon","maroon","maroon","maroon","maroon", "maroon", "maroon"];

new Chart("myChart", {
  type: "bar",
  data: {
    labels: xValues,
    datasets: [{  
      backgroundColor: barColors,
      data: yValues
    }]
  },
  options: {
    legend: {display: false},
    title: {
      display: true,
      text: "FILES UPLOADED"
    }
  }
});
