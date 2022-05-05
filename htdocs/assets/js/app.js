
setInterval(() => {
    
    $.ajax({
        type: "POST",
        url: "chart.php",
        dataType: "json",
        success: function (data) {

            var statusSensor = [];

            for (var i = 0; i < data.length; i++) {

                statusSensor.push(data[i].statusSensor);;
            }

            sensor(statusSensor);
        }
    });

}, 1000);


    var img = document.getElementById("teste");
    function sensor(statusSensor){
    setTimeout(function () {
    if (statusSensor == 1)
        {
        img.src = "img/box.png";
        }
    else if (statusSensor == 0)
        {
        img.src = "img/box2.png";
        }
        });
    }