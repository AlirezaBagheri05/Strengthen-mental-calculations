

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
