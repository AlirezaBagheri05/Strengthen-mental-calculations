

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
