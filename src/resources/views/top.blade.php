<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="テキストテキストテキスト">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/favicon.ico">
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/top.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}" />
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;700&display=swap" rel="stylesheet">
    <title>TOTARRY</title>
</head>
<body>
<header>
    <h1><a href="#"><img src="{{ asset('images/logo.svg') }}" alt="TOTARRY"></a></h1>
    <nav>
        <ul>
            <li><a href="#">ALL</a></li>
            <li><a href="#">NEW</a></li>
            <li><a href="#">VINTAGE</a></li>
            <li><a href="#">CATEGORY</a></li>
            <li><a href="#">LOOKBOOK</a></li>
            <li><a href="#">BLOG</a></li>
        </ul>
        <ul>
            <li><a href="#">LOGIN</a></li>
            <li><a href="#">CONTACT</a></li>
        </ul>
    </nav>
</header>

<main>
    <div class="item-image">
        <img src="{{ asset('images/item.jpg') }}" alt="商品画像">
    </div>

    <div class="item-details">
        <section class="item-details__info">
            <h2>TOTALLY Short Sleeve Shirt</h2>
            <p>
                テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
            </p>
            <p>￥9,999<span> +tax</span></p>
        </section>

        <div class="item-details__shopping">
            <form action="#">
                <table>
                    <colgroup>
                        <col style="width: 20%;">
                        <col style="width: 20%;">
                        <col style="width: 60%;"> <!-- 右のセルを広く -->
                    </colgroup>
                    <thead>
                        <tr>
                            <th>Color</th>
                            <th>Size</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>White</th>
                            <td>S</td>
                            <td>
                                <select name="number-s" id="number-s">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <th>White</th>
                            <td>M</td>
                            <td>
                                <select name="number-m" id="number-m">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <th>White</th>
                            <td>L</td>
                            <td>
                                <select name="number-l" id="number-l">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                </select>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <button>ADD TO CART</button>
            </form>
        </div>

        <div class="item-detail__size-info">
            <table>
                <thead>
                    <tr>
                        <th>Size</th>
                        <th>Chest</th>
                        <th>Weist</th>
                        <th>Height</th>
                    </tr>
                </thead>
                    <tbody>
                    <tr>
                        <th>S</th>
                        <td>99 ～ 99</td>
                        <td>99 ～ 99</td>
                        <td>99 ～ 99</td>
                    </tr>
                    <tr>
                        <th>M</th>
                        <td>99 ～ 99</td>
                        <td>99 ～ 99</td>
                        <td>99 ～ 99</td>
                    </tr>
                    <tr>
                        <th>L</th>
                        <td>99 ～ 99</td>
                        <td>99 ～ 99</td>
                        <td>99 ～ 99</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</main>

<footer>
    <p>&copy; TOTALLY</p>
</footer>
</body>
</html>