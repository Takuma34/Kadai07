<!DOCTYPE html>
<html lang="jp">

<head>
    <meta charset="utf-8">
    <title>修理受付フォーム</title>
    <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
    <link rel="stylesheet" href="css/main.css"/>

</head>

<body>

    <header>
      <h2 class="title">修理受付フォーム</h2>
    </header>

    <form id="main" action="insert1.php" method="post">
        
        <table id="mainTable">
        <h3>1.ご依頼者</h3>
            <tr>
              <td class="yourname">担当者</td>
              <td><input id="textBoxName" type="text" name="name"/></td>
            </tr>

            <tr>
              <td class="company">代理店名</td>
              <td><input id="textBoxCompany" type="text" name="company"/></td>
            </tr>

            <tr>
              <td class="tell">電話番号</td>
              <td><input id="textBoxTell" type="text" name="tell"/></td>
            </tr>

            <tr>
              <td class="address">住所</td>
              <td><input id="textBoxAddress" type="text" name="address"/></td>
            </tr>
        </table><br>

        <table id="subTable">
        <h3>2.修理内容</h3>
            <tr>
              <td class="hosp">病院</td>
              <td><input id="textBoxhosp" type="text" name="hosp"/></td>
            </tr>
            <tr>
              <td class="item">製品名</td>
              <td><input id="textBoxitem" type="text" name="item"/></td>
            </tr>
            <tr>
              <td class="sn">シリアル</td>
              <td><input id="textBoxsn" type="text" name="sn"/></td>
            </tr>
            <tr>
              <td class="reson">修理内容</td>
              <td id="message">
                <textarea id="textarea" name="message"></textarea>
              </td>
            </tr>
            </table>

            <div id="button">
                    <input type="submit" value="送信" id="save">
                    <input id="remove" type="button" value="クリア">
                    </div>
    </form>

    <script>
        $(document).ready(function() {
            $('#remove').click(function() {
                $('#main')[0].reset();
            });
        });
    </script>

</body>

</html>