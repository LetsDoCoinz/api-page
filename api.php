<html>
<head>
    <style>
        html{
            font-size: 20px;
        }
        a{color: darkgreen;}
    </style>
</head>
<body>




<h1>Hi, I am LetsDoCoinz API, Welcome</h1>

<!--<p>Please hack me Ddos me overload me kill me do whatever you want I am here for you :)</p>-->

<h2>Public API</h2>

<a href="/ticker" target="_blank">Ticker - JSON</a><br>

<hr>

<h2>Private API</h2><br><br>

- To allow private api ask support team<br><br><br>

= API METHOD: POST<br><br>

= API URL: https://api.letsdocoinz.com/private<br><br>

= Inputs:<br>

= = email: Your account email address<br>

= = password: Your account emaill password<br>

= = command: Private API Methods:<br>

-get_balance: Get your account balance<br>
-get_active_orders_by_pair: Get pending orders by pair id<br>
-get_my_active_orders_by_pair: Get account pending orders by pair id<br>

<br><br><br>

<hr>

<h2>Private API Tool</h2>


Get Balance <br>

<form action="/private" method="post" target="_blank">
    Email: <input type="text" name="email" value=""> <br>
    Password: <input type="password" name="password" value=""> <br>
    Command:<select name="command">
        <option value="get_balance">get_balance</option>
    </select><br>
    <input type="submit" name="Submit" value="Submit"> <br>
</form>

<hr>

Get Trading Pairs <br>

<form action="/private" method="post" target="_blank">
    Email: <input type="text" name="email" value=""> <br>
    Password: <input type="password" name="password" value=""> <br>
    Command:<select name="command">
        <option value="get_pairs">get_pairs</option>
    </select><br>
    <input type="submit" name="Submit" value="Submit"> <br>
</form>

<hr>


Get Orders <br>

<form action="/private" method="post" target="_blank">
    Email: <input type="text" name="email" value=""> <br>
    Password: <input type="password" name="password" value=""> <br>
    Pair:<select name="pair">
        <option value="5">ETH/BTC</option>
        <option value="7">DOGX/BTC</option>
        <option value="17">DOGE/BTC</option>
    </select><br>
    Command:<select name="command">
        <option value="get_active_orders_by_pair">get_active_orders_by_pair</option>
    </select><br>
    <input type="submit" name="Submit" value="Submit"> <br>
</form>

<hr>


Get My Orders <br>

<form action="/private" method="post" target="_blank">
    Email: <input type="text" name="email" value=""> <br>
    Password: <input type="password" name="password" value=""> <br>
    Pair<select name="pair">
        <option value="5">ETH/BTC</option>
        <option value="7">DOGX/BTC</option>
        <option value="17">DOGE/BTC</option>
    </select><br>
    Command:<select name="command">
        <option value="get_my_active_orders_by_pair">get_my_active_orders_by_pair</option>
    </select><br>
    <input type="submit" name="Submit" value="Submit"> <br>
</form>

<hr>

Put Order <br>

<form action="/private" method="post" target="_blank">
    Email: <input type="text" name="email" value=""> <br>
    Password: <input type="password" name="password" value=""> <br>
    Pair<select name="pair">
        <option value="5">ETH/BTC</option>
        <option value="7">DOGX/BTC</option>
        <option value="17">DOGE/BTC</option>
    </select><br>
    Order Type(type)<select name="order_command">
        <option value="buy_limit">buy_limit</option>
        <option value="sell_limit">sell_limit</option>
        <option value="buy">buy</option>
        <option value="sell">sell</option>
    </select><br>
    Amount: <input type="text" name="amount" value="1"><br>
    Price: <input type="text" name="price" value=""> (Only for limit orders)<br>
    Command:<select name="command">
        <option value="put_order">put_order</option>
    </select><br>
    <input type="submit" name="Submit" value="Submit"> <br>
</form>


<hr>

Cancel Order <br>
<form action="/private" method="post" target="_blank">
    Email: <input type="text" name="email" value=""> <br>
    Password: <input type="password" name="password" value=""> <br>
    Order ID(order_id): <input type="text" name="order_id" value=""> <br>
    Command:<select name="command">
        <option value="cancel_order">cancel_order</option>
    </select><br>
    <input type="submit" name="Submit" value="Submit"> <br>
</form>
<hr>
</body>
</html>