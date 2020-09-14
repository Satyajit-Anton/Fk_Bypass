<?php

//set all @required values

/***
Product link example:

https://www.flipkart.com/poco-m2-pro-green-greener-64-gb/p/itm5de3b6eb57ab4?pid=MOBFT7MKFHTAPDYD&lid=LSTMOBFT7MKFHTAPDYDLRJC1B&param=7767&nnc=VF54TJL6YWGI_AD&pageUID=1598891274737

***/

$set_product_link = "Place_valid_product_url_here";

$set_cookie = "Place_your_account_cookie_here";

//change quantity as per you choice.

$quantity = "1";


/***

Do not change or
modify below values

***/

$parse = parse_url($set_product_link);

parse_str($parse['query'], $query);

$set_product_id = $query['pid'];

$cart_context = $query['lid'];


/***

Do not change
or modify these headers

***/

$headers = array('Content-type: application/json','X-User-Agent: Mozilla/5.0 (Linux; Android 10; MI567 Build/KQ1.002; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/830.90.3.96 Mobile Safari/537.36 FKUA/msite/0.0.1/msite/Mobile','Cookie: '.$set_cookie.'');

$headers2 = array('Content-type: application/x-www-form-urlencoded','X-User-Agent: Mozilla/5.0 (Linux; Android 10; MI567 Build/KQ1.002; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/830.90.3.96 Mobile Safari/537.36 FKUA/msite/0.0.1/msite/Mobile','Cookie: '.$set_cookie.'');


?>
