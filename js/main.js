let table = new DataTable('#myTable', {
    data:[
    ["a","b",1,2,3,4],
    ["a","b",1,2,3,4],
    ["a","b",1,2,3,4]

    ],
    columns: [
    { title: 'Số Thứ Tự', data: null ,width:'10%'},
    { title: 'Tên cuộc thi', data: 0 ,width:'20%'},
    { title: 'Thời gian hoàn thành', data: 1 ,width:'10%'},
    { title: 'Thời gian bắt đầu', data: 2 ,width:'10%'},
    { title: 'Thời gian kết thức', data: 3 ,width:'10%'},
    { title: 'Số câu trả lời đúng', data: 4 ,width:'10%'},
    { title: 'Hành động', data: 5 ,width:'10%'}
    ],
    columnDefs: [
    {
        targets: 0,
        render: function(data, type, row, meta) {
            return meta.row + 1; // Tính toán số thứ tự
        }
    }
],
    responsive: true,
    order: [[0, 'asc']],
    language: {
        url: './vietnamese.json'
    },
    searching: false,
    pageLength: 10,
    lengthMenu:[10,25,50],
    paging:true

});

google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Phút', 'Bài tập'],
          [1,  10],
          [2,  1],
          [3,  2],
          [4,  3]
        ]);

        var options = {
          title: 'Biểu đò',
          curveType: 'function',
         
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

        chart.draw(data, options);
      }