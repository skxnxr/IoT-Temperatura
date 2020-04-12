$(document).ready(function () {

    // LINE CHART
    $.getJSON('servicio.php', function(data){
       console.log(data);
           var line = new Morris.Line({
           element: 'line-chart',
           resize: true,
           data: data,
          //  xLabelFormat: function (d) {
          //    var weekdays = new Array(7);
          //    weekdays[0] = "Dom";
          //    weekdays[1] = "Lun";
          //    weekdays[2] = "Mar";
          //    weekdays[3] = "Mié";
          //    weekdays[4] = "Jue";
          //    weekdays[5] = "Vie";
          //    weekdays[6] = "Sáb";
         
          //    return weekdays[d.getDay()] + ' ' + 
          //    ("0" + (d.getDate() )).slice(-2) + '-' + 
          //    ("0" + (d.getMonth() + 1 )).slice(-2);
           
          //  },
          hoverCallback: function (index, options, default_content, row) {
            // console.log(default_content);
             return default_content.replace("2020-04-","Abril ");
          //  return default_content;
          },
           xkey: 'fecha',
           ykeys: ['t'],
           xLabelAngle: 45,
           ymin: 20,
           ymax: 45,
           //xLabels: 'day',
           labels: ['Temperatura'],
           lineColors: ['#3c8dbc'],
           hideHover: 'auto',
           yLabelFormat: function (y) {
              return y.toString() + '°C'; 
            }
         });
         // function update() {
         //   nReloads++;
         //   graph.setData(data(5 * nReloads));
         //   $('#reloadStatus').text(nReloads + ' reloads');
         // }
         // setInterval(update, 100);
     });

    })