let ctx = document.getElementById('myChart').getContext('2d');
let labels = ['MCC', 'Anafara', 'Visvis'];
let colorHex = ['#0f3bbd','#df2020', '#ec136a'];

let myChart = new Chart(ctx, {
  type: 'pie',
  data: {
    datasets: [{
      data: [211324, 211324, 652234],
      backgroundColor: colorHex
    }],
    labels: labels
  },
  options: {
    responsive: true,
    maintainAspectRatio: false,
    legend: {
      position: 'top'
    },
    plugins: {
      datalabels: {
        color: '#fff',
        anchor: 'end',
        align: 'start',
        offset: -10,
        borderWidth: 2,
        borderColor: '#fff',
        borderRadius: 25,
        backgroundColor: (context) => {
          return context.dataset.backgroundColor;
        },
        font: {
          weight: 'bold',
          size: '10'
        },
        formatter: (value) => {
          return value + ' %';
        }
      }
    }
  }
})