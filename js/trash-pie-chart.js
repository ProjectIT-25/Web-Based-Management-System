let ctx = document.getElementById('myChart').getContext('2d');
let labels = ['Deleted Accounts', 'Deleted Files'];
let colorHex = ['red','blue'];

let myChart = new Chart(ctx, {
  type: 'pie',
  data: {
    datasets: [{
      data: [42069, 42069],
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