<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <title>Hiii</title>
        <!-- Style CSS -->
        <style>
            /* @font-face {
            font-family: myFirstFont;
            src: url(sansation_light.woff);
            } */
            .{
                font-family: cursive;
            }
            .mom_div{
                display: flex;
                flex-direction: column;
                align-items: center;
                padding: 20px;
            }
            .box_math{
                border: 1px solid black;
                width: 95%;
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
                position:relative;
            }
            .box_show p {
                width: 100%;
                border: 2px solid red;
                padding: 5px;
                display: flex;
                box-sizing: border-box;
                height: 35px;
                /* margin-bottom: 50px; */
                margin: 2px;
                margin-bottom: 12px;
                border-radius: 6px;
                justify-content: center;
                overflow: auto;
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
            .operation span{
                color: #ffffff;
                background-color: #0095ff;
                padding: 11px;
                margin: 5px;
                cursor: pointer;
                border-radius: 11px;
                text-align: center;
                display: flex;
                transition: all cubic-bezier(0.4, 0, 0.2, 1) 0.5s;
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
            .show_oper{
                width: 35px;
                height: 35px;
                position: absolute; 
                font-weight: bold;
                background-color: red;
                left: -34px;
                top: 22px;
                display: flex;
                font-size: 30px;
                color: white;
                transform: rotate(221deg);
                border-radius: 40%;
                align-items: center;
                justify-content: center; 
            }
            .bx1_t{
                width: 15px;
                height: 15px;
                position: absolute;
                font-weight: bold;
                background-color: #0095ff;
                right: -10px;
                top: 7px;
                display: flex;
                font-size: 10px;
                color: white;
                border: 1px solid white;
                transform: rotate(42deg);
                border-radius: 30%;
                align-items: center;
                justify-content: center;
            }
            .bx2_t{
                width: 15px;
                height: 15px;
                position: absolute;
                font-weight: bold;
                background-color: #0095ff;
                right: -10px;
                top: 52px;
                display: flex;
                font-size: 10px;
                color: white;
                border: 1px solid white;
                transform: rotate(42deg);
                border-radius: 30%;
                align-items: center;
                justify-content: center;
            }
            .num1_t{
                width: 22px;
                height: 22px;
                position: absolute;
                font-weight: bold;
                background-color: white;
                /* right: -10px; */
                top: 104px;
                display: flex;
                font-size: 10px;
                color: red;
                border: 2px solid white;
                transform: rotate(42deg);
                border-radius: 30%;
                box-sizing: border-box;
                align-items: center;
                justify-content: center;
            }
            .num_t{
                width: 22px;
                height: 22px;
                position: absolute;
                font-weight: bold;
                background-color: #ff0000;
                left: -10px;
                top: 95px;
                display: flex;
                font-size: 10px;
                color: white;
                border: 2px solid white;
                transform: rotate(0deg);
                border-radius: 30%;
                box-sizing: border-box;
                align-items: center;
                justify-content: center;
            }
            .num2_t{
                width: 22px;
                height: 22px;
                position: absolute;
                font-weight: bold;
                background-color: #ff0000;
                right: -10px;
                top: 95px;
                display: flex;
                font-size: 10px;
                color: white;
                border: 2px solid white;
                transform: rotate(0deg);
                border-radius: 30%;
                box-sizing: border-box;
                align-items: center;
                justify-content: center;
            }
            .center_bx {
                transform: rotate(318deg);
                font-size: 15px;
                color: red;
                font-weight: bold;
            }
            tr{
                /* border-top: 1px solid #00ffb3; */
                padding: 3px;
                /* border-radius: 5px; */
                display: flex;
                justify-content: space-around;
                
            }
            th{
                background-color: black;
                margin: 5px;
                outline: 2px solid #0095ff;
                font-weight: bold;
                border-radius: 30px;
                color: white;
                padding: 5px;
            }
            td{     
                background-color: white;
                margin: 5px;
                outline: 2px solid #0095ff;
                color: black;
                font-weight: bold;
                border-radius: 30px;
                display: flex;
                padding: 5px;
                align-items: center;
            }
            table{
                width: 100%;
                max-width: 500px;
                margin-top: 41px;
            }
        </style>
</head>
<body>
    <div class="mom_div">
        <div class="box_math" >
            <div class="box_show">
            <div id="show_oper" class="show_oper"><div style="transform: rotate(140deg);"></div></div>
            <div class="bx1_t">1</div>
            <div class="bx2_t">2</div>
            <div class="num1_t">
                <div class="center_bx">Max</div>
            </div>
            <div class="num_t">1</div>
            <div class="num2_t">2</div>
                <p id="bx1" ></p>
                <p id="bx2" ></p>
                <div class="nums">
                    <input id="num1" value="1000" type="number" name="">
                    <input id="num2" value="1000" type="number" name="">
                </div>
                <p id="result" ></p>
            </div>
            <div class="operation">
                <span onclick="oper('+','addition')" id="addition">+</span>
                <span onclick="oper('-','subtraction')"  id="subtraction">-</span>
                <span onclick="oper('×','mulitiplication')" id="mulitiplication">×</span>
                <span onclick="oper('÷','divison')" id="divison">÷</span>
            </div>
            <div class="events">
                <button onclick="next()" >next</button>
                <button onclick="show(true)" >show</button>
            </div>
        </div>
        <table id="history">
            <thead>
                <tr>
                    <th onclick="hiddenX()" id="hidden_c">hidden</th>
                    <th>history</th>
                    <th onclick="resetX()">reset</th>
                </tr>
            </thead>
            <tbody id='tbody'><tr><td>operation</td><td>result</td></tr></tbody>
        </table>
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
                document.getElementById('result').innerHTML = "";
                var max1 = document.getElementById('num1').value;
                var max2 = document.getElementById('num2').value;
                var num1 = Math.floor(Math.random() * max1);
                var num2 = Math.floor(Math.random() * max2);
                document.getElementById('bx1').innerHTML = num1;
                document.getElementById('bx2').innerHTML = num2;
                history();
            }
            function show(op){
                var operation = document.getElementById('show_oper').firstChild.innerHTML;
                if(operation == ''){
                    alert('یکی از عملگر ها را انتخاب کنید.');
                    return false;

                }
                var opr1 = document.getElementById('bx1').innerHTML;
                var opr2 = document.getElementById('bx2').innerHTML;
                var opr1 = Number(opr1);
                var opr2 = Number(opr2);
                if(!opr1 && opr1 !== 0){
                    alert("لطفا گزینه بعدی را بزنید");
                    return false;
                }
                var result;
                switch(operation) {
                    case "+":
                         result = opr1 + opr2;
                        break;
                    case "-":
                         result = opr1 - opr2;
                        break;
                    case "×":
                         result = opr1 * opr2;
                        break;
                    case "÷":
                         result = opr1 / opr2;
                        break;
                    default:
                         result = "han!:/";
                    }
                
                if(op){
                    document.getElementById('result').innerHTML = result;
                }else{
                    return result;
                }
            }
            function oper(wh,id){
                var oper = wh;
                document.getElementById('show_oper').firstChild.innerHTML = oper;
                document.getElementById('addition').style.backgroundColor = '#0095ff';
                document.getElementById('subtraction').style.backgroundColor = '#0095ff';
                document.getElementById('mulitiplication').style.backgroundColor = '#0095ff';
                document.getElementById('divison').style.backgroundColor = '#0095ff';
                document.getElementById(id).style.backgroundColor = 'red';
                history();
            }
            function history(){
                var num_1 = document.getElementById('bx1').innerHTML;
                var num_2 = document.getElementById('bx2').innerHTML;
                var operation = document.getElementById('show_oper').firstChild.innerHTML;
                var history= num_1+" "+operation+" "+num_2;
                var his = document.getElementById('history').childNodes[3];
                var re = show(false);
                if(re){
                    var value = "<td>"+history+"</td><td>"+re+"</td>";
                    var l_value = his.lastChild.innerHTML;
                    if(l_value !== value){
                        his.innerHTML += "<tr>"+value+"</tr>";
                    }
                }
            }
            function hiddenX(){
                var tbody = document.getElementById('tbody');
                var click = document.getElementById('hidden_c');
                var veri_fy = tbody.style.display;
                if(veri_fy == 'none'){
                    tbody.style.display = 'block';
                    click.innerHTML = 'hidden';
                }else{
                    tbody.style.display = 'none';
                    click.innerHTML = '.  show  .';
                }
            }
            function resetX(){
               document.getElementById('tbody').innerHTML = "<tr><td>operation</td><td>result</td></tr>";
            }
        </script>
</html>