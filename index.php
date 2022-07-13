<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <title>Hiii</title>
        <!-- Style CSS -->
        <style>
            .mom_div{
                display: flex;
                flex-direction: column;
                align-items: center;
                padding: 20px;
            }
            .box_math{
                border: 1px solid black;
                width: 80%;
                max-width: 500px;
                display: flex;
                flex-direction: column;
                align-items: center;
                padding: 21px;
                /* overflow: auto; */
                border-radius: 25px;
            }
            .box_show{
                width: 100%;
                max-width: 250px;
                display: flex;
                flex-direction: column;
                justify-content: space-between;
                align-items: center;
            }
            .box_show p{
                width: 100%;
                border: 2px solid red;
                padding: 5px;
                display: flex;
                box-sizing: border-box;
                height: 30px;
                /* margin-bottom: 50px; */
                margin: 2px;
                margin-bottom: 12px;
                border-radius: 6px;
                justify-content: center;
            }
            .operation{
                width: 100%;
                max-width: 244px;
                display: flex;
                flex-direction: row;
                align-items: center;
                justify-content: space-between;
                overflow: auto;
            }
            .operation input[type="button"]{
                color: #ffffff;
                background-color: #0095ff;
                padding: 11px;
                margin: 5px;
                cursor: pointer;
                border-radius: 11px;
                text-align: center;
                display: flex;
                align-items: center;
            }
            .events{
                /* background-color: red; */
                width: 100%;
                max-width: 180px;
                height: 35px;
                display: flex;
            }
            .events button{
                background-color: #0095ff;
                width: 50%;
                margin: 5px;
                border: 1px solid blue;
                cursor: pointer;
                border-radius: 7px;
                box-shadow: 0px 0px 2px 0px blue;
                color:white;
            }
            #result {
                border: 2px solid blue;
            }
            .nums{
                display: flex;
                justify-content: flex-end;
                height: auto;
                background-color: #ffffff;
                width: 100%;
            }
            .nums input[type="number"]{
                width: 100%;
                border: 2px solid red;
                padding: 5px;
                display: flex;
                box-sizing: border-box;
                height: 30px;
                /* margin-bottom: 50px; */
                margin: 2px;
                margin-bottom: 12px;
                border-radius: 6px;
                text-align: center;
                justify-content: center;
            }
            input:focus-visible {
                outline: 1px solid #d2d2d2;
            }
        </style>
</head>
<body>
    <div class="mom_div">
        <div class="box_math" >
            <div class="box_show">
                <p id="bx1" ></p>
                <p id="bx2" ></p>
                <div class="nums">
                    <input id="num1"  type="number" name=""></input>
                    <input id="num2"  type="number" name=""></input>
                </div>
                <p id="result" ></p>
            </div>
            <div class="operation">
                <input type="button" value="">
                <input type="button" value="">
                <input type="button" value="">
                <input type="button" value="">
                <input type="button" value="">
                <span id="addition">+</span>
                <span id="subtraction">-</span>
                <span id="mulitiplication">*</span>
                <span id="divison">/</span>
            </div>
            <div class="events">
                <button onclick="next()" id="next">next</button>
                <button onclick="show()" id="show">show</button>
            </div>
        </div>
    </div>
</body>
        <script>
            if(!bx1.innerHTML){
                bx1.innerHTML = 'Are you ready!';
                bx2.innerHTML = 'click next:)';
                result.innerHTML = 'result is here';
                num1.innerHTML = '3';
                num2.innerHTML = '3';
            }
            function next(){
                var max1 = document.getElementById('num1').value;
                var max2 = document.getElementById('num2').value;
                var num1 = Math.floor(Math.random() * max1);
                var num2 = Math.floor(Math.random() * max2);
                document.getElementById('bx1').innerHTML = num1;
                document.getElementById('bx2').innerHTML = num2;
            }
            function show(){
                alert(bx1.innerHTML);
            }
        </script>
</html>