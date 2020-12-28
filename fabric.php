<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fabric.js/4.3.0/fabric.min.js"></script>


    <script>
        var canvas; 
        function draw(){
            canvas = new fabric.Canvas('c'); 

            var circle = new fabric.Circle({
            radius: 50, fill: 'green', left: 100, top: 100
            });

            var triangle = new fabric.Triangle({
            width: 100, height: 100, fill: 'blue', left: 50, top: 50
            });
            var triangle1 = new fabric.Triangle({
            width: 100, height: 100, fill: 'red', left: 50, top: 50
            });
            var triangle2 = new fabric.Triangle({
            width: 100, height: 100, fill: 'yellow', left: 50, top: 50
            });

            fabric.Image.fromURL('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTaPeM9l1WIJiPqhzeLkeTWG8towrOwvkbMHgfSooTgftfDR8RQ_C9t9_sS0bA&usqp=CAc', function(oImg) {
            canvas.add(oImg);
            });

            canvas.add(circle, triangle, triangle1, triangle2);

        }
    </script>


</head>
<body onload="draw();">
    
    <canvas id="c" width=500 height=500 style="border:1px solid #aaa"></canvas> 
</body>
</html>