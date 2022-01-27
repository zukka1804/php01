<!-- データ入力を行う -->

<html>

<head>
    <meta charset="utf-8">
    <style>
        .menu {
            background-color: #2FA6E9;
        }
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/fetch-jsonp@1.1.3/build/fetch-jsonp.min.js"></script>
    <title>ご本人情報入力フォーム</title>
    <link rel='stylesheet' href='reset.css'>
    <link rel='stylesheet' href='style.css'>
</head>

<body>
    <div class="menu">
        <!-- <h3>ご本人情報を入力してください</h3> -->
        <p>注意事項</p>
        <ol>
            <li>お名前欄はご本人氏名を入力してください</li>
            <li>マンション名は省略せずに記入してください</li>
        </ol>
    </div>


    <form action="read.php" method="get">
        <!-- action=どのページに情報を飛ばすか get=どんな方法で送るか？-->
        <div class="cp_iptxt">
            <input type="text" placeholder="お名前" name='name'>
        </div>
        <div class="err_text" id="err_textbox"></div>
        <div id="app">

            <p class="cp_iptxt">
                <input id="input" class="zipcode" type="text" name="zipcode" class="address" value="" placeholder="郵便番号">
            <div class="address_button">
                <button id="search" type="button" class="address_search_button">住所検索</button>
                <p id="error"></p>
                </p>
                <p>※住所検索ボタンを押すと住所が自動表示されます</p>
            </div>
            <div class="cp_iptxt">
                <input id="address1" type="text" name="address1" class="cp_iptxt" value="" placeholder="都道府県">
            </div>
            <div class="cp_iptxt">
                <input id="address2" type="text" name="address2" class="address" class="cp_iptxt" value="" placeholder="住所１">
            </div>

            <div class="cp_iptxt">
                <input id="address3" type="text" name="address3" class="address" class="cp_iptxt" value="" placeholder="住所２">
            </div>
            <div class="cp_iptxt">
                <input id="address4" type="text" name="address4" class="address" value="" placeholder="マンション名等">
            </div>
        </div>

        <div class="birthday">
            <p>生年月日：</p>
            <select name="year" class="birthday_box">
                <option value="">-</option>
                <option value="1900">1900</option>
                <option value="1901">1901</option>
                <option value="1902">1902</option>
                <option value="1903">1903</option>
                <option value="1904">1904</option>
                <option value="1905">1905</option>
                <option value="1906">1906</option>
                <option value="1907">1907</option>
                <option value="1908">1908</option>
                <option value="1909">1909</option>
                <option value="1910">1910</option>
                <option value="1911">1911</option>
                <option value="1912">1912</option>
                <option value="1913">1913</option>
                <option value="1914">1914</option>
                <option value="1915">1915</option>
                <option value="1916">1916</option>
                <option value="1917">1917</option>
                <option value="1918">1918</option>
                <option value="1919">1919</option>
                <option value="1920">1920</option>
                <option value="1921">1921</option>
                <option value="1922">1922</option>
                <option value="1923">1923</option>
                <option value="1924">1924</option>
                <option value="1925">1925</option>
                <option value="1926">1926</option>
                <option value="1927">1927</option>
                <option value="1928">1928</option>
                <option value="1929">1929</option>
                <option value="1930">1930</option>
                <option value="1931">1931</option>
                <option value="1932">1932</option>
                <option value="1933">1933</option>
                <option value="1934">1934</option>
                <option value="1935">1935</option>
                <option value="1936">1936</option>
                <option value="1937">1937</option>
                <option value="1938">1938</option>
                <option value="1939">1939</option>
                <option value="1940">1940</option>
                <option value="1941">1941</option>
                <option value="1942">1942</option>
                <option value="1943">1943</option>
                <option value="1944">1944</option>
                <option value="1945">1945</option>
                <option value="1946">1946</option>
                <option value="1947">1947</option>
                <option value="1948">1948</option>
                <option value="1949">1949</option>
                <option value="1950">1950</option>
                <option value="1951">1951</option>
                <option value="1952">1952</option>
                <option value="1953">1953</option>
                <option value="1954">1954</option>
                <option value="1955">1955</option>
                <option value="1956">1956</option>
                <option value="1957">1957</option>
                <option value="1958">1958</option>
                <option value="1959">1959</option>
                <option value="1960">1960</option>
                <option value="1961">1961</option>
                <option value="1962">1962</option>
                <option value="1963">1963</option>
                <option value="1964">1964</option>
                <option value="1965">1965</option>
                <option value="1966">1966</option>
                <option value="1967">1967</option>
                <option value="1968">1968</option>
                <option value="1969">1969</option>
                <option value="1970">1970</option>
                <option value="1971">1971</option>
                <option value="1972">1972</option>
                <option value="1973">1973</option>
                <option value="1974">1974</option>
                <option value="1975">1975</option>
                <option value="1976">1976</option>
                <option value="1977">1977</option>
                <option value="1978">1978</option>
                <option value="1979">1979</option>
                <option value="1980">1980</option>
                <option value="1981">1981</option>
                <option value="1982">1982</option>
                <option value="1983">1983</option>
                <option value="1984">1984</option>
                <option value="1985">1985</option>
                <option value="1986">1986</option>
                <option value="1987">1987</option>
                <option value="1988">1988</option>
                <option value="1989">1989</option>
                <option value="1990">1990</option>
                <option value="1991">1991</option>
                <option value="1992">1992</option>
                <option value="1993">1993</option>
                <option value="1994">1994</option>
                <option value="1995">1995</option>
                <option value="1996">1996</option>
                <option value="1997">1997</option>
                <option value="1998">1998</option>
                <option value="1999">1999</option>
                <option value="2000">2000</option>
                <option value="2001">2001</option>
                <option value="2002">2002</option>
                <option value="2003">2003</option>
                <option value="2004">2004</option>
                <option value="2005">2005</option>
                <option value="2006">2006</option>
                <option value="2007">2007</option>
                <option value="2008">2008</option>
                <option value="2009">2009</option>
                <option value="2010">2010</option>
                <option value="2011">2011</option>
                <option value="2012">2012</option>
                <option value="2013">2013</option>
                <option value="2014">2014</option>
                <option value="2015">2015</option>
                <option value="2016">2016</option>
                <option value="2017">2017</option>
                <option value="2018">2018</option>
                <option value="2019">2019</option>
                <option value="2020">2020</option>
                <option value="2021">2021</option>
                <option value="2022">2022</option>
            </select>年

            <!-- 月 -->
            <select name="month" class="birthday_box">
                <option value="">-</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
            </select>月
            <!-- 日 -->
            <select name="day" class="birthday_box">
                <option value="">-</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
                <option value="13">13</option>
                <option value="14">14</option>
                <option value="15">15</option>
                <option value="16">16</option>
                <option value="17">17</option>
                <option value="18">18</option>
                <option value="19">19</option>
                <option value="20">20</option>
                <option value="21">21</option>
                <option value="22">22</option>
                <option value="23">23</option>
                <option value="24">24</option>
                <option value="25">25</option>
                <option value="26">26</option>
                <option value="27">27</option>
                <option value="28">28</option>
                <option value="29">29</option>
                <option value="30">30</option>
                <option value="31">31</option>
            </select>日
        </div>
        <div class="sex">
            性別：<label>
                <input type="radio" name="sex" value="男">
                男
            </label>
            <label>
                <input type="radio" name="sex" value="女">
                女
            </label><br />
        </div>
        <div class="adl_level">
            介護認定:
            <select name='number'>
                <option value='自立'>自立</option>
                <option value='要支援１'>要支援１</option>
                <option value='要支援２'>要支援２</option>
                <option value='要介護１'>要介護１</option>
                <option value='要介護２'>要介護２</option>
                <option value='要介護３'>要介護３</option>
                <option value='要介護４'>要介護４</option>
                <option value='要介護５'>要介護５</option>
            </select><br />
        </div>
        <div class="mail">
            EMAIL: <input type="text" name="mail" placeholder="例）xxxx@oooo.com">
            <input type="submit" value="送信">
    </form>


    <script>
        $(function() {
            $("#textbox").bind("blur", function() {
                var _textbox = $(this).val();
                check_textbox(_textbox);
            });
        });

        function check_textbox(str) {
            $("#err_textbox p").remove();
            let _result = true;
            let _textbox = $.trim(str);

            if (_textbox.match(/^[ 　\r\n\t]*$/)) {
                $("#err_textbox").append("<p><i class=\"fa fa-exclamation-triangle\"></i>テキストボックスを入力してください。</p>");
                _result = false;
            } else if (_textbox.length > 50) {
                $("#err_textbox").append("<p><i class=\"fa fa-exclamation-triangle\"></i>テキストボックスは50文字以内で入力してください。</p>");
                _result = false;
            }
            return _result;
        }
    </script>

    <script>
        let search = document.getElementById('search');
        search.addEventListener('click', () => {

            let api = 'https://zipcloud.ibsnet.co.jp/api/search?zipcode=';
            let error = document.getElementById('error');
            let input = document.getElementById('input');
            let address1 = document.getElementById('address1');
            let address2 = document.getElementById('address2');
            let address3 = document.getElementById('address3');
            let param = input.value.replace("-", ""); //入力された郵便番号から「-」を削除
            let url = api + param;

            fetchJsonp(url, {
                    timeout: 10000, //タイムアウト時間
                })
                .then((response) => {
                    error.textContent = ''; //HTML側のエラーメッセージ初期化
                    return response.json();
                })
                .then((data) => {
                    if (data.status === 400) { //エラー時
                        error.textContent = data.message;
                    } else if (data.results === null) {
                        error.textContent = '郵便番号から住所が見つかりませんでした。';
                    } else {
                        address1.value = data.results[0].address1;
                        address2.value = data.results[0].address2;
                        address3.value = data.results[0].address3;
                    }
                })
                .catch((ex) => { //例外処理
                    console.log(ex);
                });
        }, false);
    </script>





</body>

</html>