<?php
function tf_submenu_page1() {
    if (isset($_POST['tfrakuafid'])) {
        update_option('tfrakuafid', wp_unslash($_POST['tfrakuafid']));
        update_option('tfrakuafsort', $_POST['tfrakuafsort']);
        update_option('tfrakuafcategory', $_POST['tfrakuafcategory']);
    }
?>
<div class="tfrakuafform">
<h2>アフィリエイト設定</h2>
<?php
    if (isset($_POST['tfrakuafid'])) {
        echo '<div style="margin-left: 0;" id="setting-error-settings_updated" class="updated settings-error notice is-dismissible">
            <p><b>設定を保存しました。</b></p></div>';
    }
?>
<form method="post" action="">
<table class="form-table">
    <tr>
        <th scope="row"><label for="tfrakuafid">アフィリエイトID</label></th>
        <td><input name="tfrakuafid" type="text" id="tfrakuafid" value="<?php form_option('tfrakuafid'); ?>" class="regular-text" /></td>
    </tr>
    <tr>
        <th scope="row"><label for="tfrakuafsort">ソート(商品の並び順)</label></th>
        <td>
            <select name="tfrakuafsort" id="tfrakuafsort">
                <option value="1" <?php selected(1, get_option('tfrakuafsort')); ?> >標準</option>
                <option value="2" <?php selected(2, get_option('tfrakuafsort')); ?> >価格の安い順</option>
                <option value="3" <?php selected(3, get_option('tfrakuafsort')); ?> >価格の高い順</option>
                <option value="4" <?php selected(4, get_option('tfrakuafsort')); ?> >新着順</option>
                <option value="5" <?php selected(5, get_option('tfrakuafsort')); ?> >レビュー件数の多い順</option>
            </select>
        </td>
    </tr>
    <tr>
        <th scope="row"><label for="tfrakuafcategory">商品ジャンル</label></th>
        <td>
            <select name="tfrakuafcategory" id="tfrakuafcategory">
     <option value="0" <?php selected(0, get_option('tfrakuafcategory')); ?> >全てのジャンル</option>
     <option value="1" <?php selected(1, get_option('tfrakuafcategory')); ?> >CD・DVD・楽器</option>
     <option value="2" <?php selected(2, get_option('tfrakuafcategory')); ?> >インテリア・寝具・収納</option>
     <option value="3" <?php selected(3, get_option('tfrakuafcategory')); ?> >おもちゃ・ホビー・ゲーム</option>
     <option value="4" <?php selected(4, get_option('tfrakuafcategory')); ?> >キッズ・ベビー・マタニティ</option>
     <option value="5" <?php selected(5, get_option('tfrakuafcategory')); ?> >日用品雑貨・文房具・手芸</option>
     <option value="6" <?php selected(6, get_option('tfrakuafcategory')); ?> >ジュエリー・アクセサリー</option>
     <option value="7" <?php selected(7, get_option('tfrakuafcategory')); ?> >スポーツ・アウトドア</option>
     <option value="8" <?php selected(8, get_option('tfrakuafcategory')); ?> >ダイエット・健康</option>
     <option value="9" <?php selected(9, get_option('tfrakuafcategory')); ?> >水・ソフトドリンク</option>
     <option value="10" <?php selected(10, get_option('tfrakuafcategory')); ?> >パソコン・周辺機器</option>
     <option value="11" <?php selected(11, get_option('tfrakuafcategory')); ?> >バッグ・小物・ブランド雑貨</option>
     <option value="12" <?php selected(12, get_option('tfrakuafcategory')); ?> >レディースファッション</option>
     <option value="13" <?php selected(13, get_option('tfrakuafcategory')); ?> >花・ガーデン・DIY</option>
     <option value="14" <?php selected(14, get_option('tfrakuafcategory')); ?> >ペット・ペットグッズ</option>
     <option value="15" <?php selected(15, get_option('tfrakuafcategory')); ?> >家電・AV・カメラ</option>
     <option value="16" <?php selected(16, get_option('tfrakuafcategory')); ?> >車・バイク</option>
     <option value="17" <?php selected(17, get_option('tfrakuafcategory')); ?> >食品</option>
     <option value="18" <?php selected(18, get_option('tfrakuafcategory')); ?> >美容・コスメ・香水</option>
     <option value="19" <?php selected(19, get_option('tfrakuafcategory')); ?> >本・雑誌・コミック</option>
     <option value="20" <?php selected(20, get_option('tfrakuafcategory')); ?> >旅行・出張・チケット</option>
     <option value="21" <?php selected(21, get_option('tfrakuafcategory')); ?> >不動産・住まい</option>
     <option value="22" <?php selected(22, get_option('tfrakuafcategory')); ?> >学び・サービス・保険</option>
     <option value="23" <?php selected(23, get_option('tfrakuafcategory')); ?> >百貨店・総合通販・ギフト</option>
     <option value="24" <?php selected(24, get_option('tfrakuafcategory')); ?> >デジタルコンテンツ</option>
     <option value="25" <?php selected(25, get_option('tfrakuafcategory')); ?> >車用品・バイク用品</option>
     <option value="26" <?php selected(26, get_option('tfrakuafcategory')); ?> >インナー・下着・ナイトウエア</option>
     <option value="27" <?php selected(27, get_option('tfrakuafcategory')); ?> >日本酒・焼酎</option>
     <option value="28" <?php selected(28, get_option('tfrakuafcategory')); ?> >ビール・洋酒</option>
     <option value="29" <?php selected(29, get_option('tfrakuafcategory')); ?> >スイーツ</option>
     <option value="30" <?php selected(30, get_option('tfrakuafcategory')); ?> >医薬品・コンタクト・介護</option>
     <option value="31" <?php selected(31, get_option('tfrakuafcategory')); ?> >メンズファッション</option>
     <option value="32" <?php selected(32, get_option('tfrakuafcategory')); ?> >靴</option>
     <option value="33" <?php selected(33, get_option('tfrakuafcategory')); ?> >腕時計</option>
     <option value="34" <?php selected(34, get_option('tfrakuafcategory')); ?> >キッチン用品・食器・調理器具</option>
            </select>
        </td>
    </tr>
</table>
<?php submit_button(); ?>
</form>
</div>
<?php
}
global $tfid;
$tfid = esc_attr(get_option('tfrakuafid'));
$tfrakuafsort = esc_attr(get_option('tfrakuafsort'));
global $tfsort;
switch ($tfrakuafsort) {
    case '2':
        $tfsort = 's=2&';
    break;
    case '3':
        $tfsort = 's=3&';
    break;
    case '4':
        $tfsort = 's=4&';
    break;
    case '5':
        $tfsort = 's=5&';
    break;
    default:
        $tfsort = '';
}
$tfrakuafcategory = esc_attr(get_option('tfrakuafcategory'));
global $tfcategory;
switch ($tfrakuafcategory) {
    case '1':
        $tfcategory = '/101240';
    break;
    case '2':
        $tfcategory = '/100804';
    break;
    case '3':
        $tfcategory = '/101164';
    break;
    case '4':
        $tfcategory = '/100533';
    break;
    case '5':
        $tfcategory = '/215783';
    break;
    case '6':
        $tfcategory = '/216129';
    break;
    case '7':
        $tfcategory = '/101070';
    break;
    case '8':
        $tfcategory = '/100938';
    break;
    case '9':
        $tfcategory = '/100316';
    break;
    case '10':
        $tfcategory = '/100026';
    break;
    case '11':
        $tfcategory = '/216131';
    break;
    case '12':
        $tfcategory = '/100371';
    break;
    case '13':
        $tfcategory = '/100005';
    break;
    case '14':
        $tfcategory = '/101213';
    break;
    case '15':
        $tfcategory = '/211742';
    break;
    case '16':
        $tfcategory = '/101114';
    break;
    case '17':
        $tfcategory = '/100227';
    break;
    case '18':
        $tfcategory = '/100939';
    break;
    case '19':
        $tfcategory = '/200162';
    break;
    case '20':
        $tfcategory = '/101381';
    break;
    case '21':
        $tfcategory = '/200163';
    break;
    case '22':
        $tfcategory = '/101438';
    break;
    case '23':
        $tfcategory = '/100000';
    break;
    case '24':
        $tfcategory = '/402853';
    break;
    case '25':
        $tfcategory = '/503190';
    break;
    case '26':
        $tfcategory = '/100433';
    break;
    case '27':
        $tfcategory = '/510901';
    break;
    case '28':
        $tfcategory = '/510915';
    break;
    case '29':
        $tfcategory = '/551167';
    break;
    case '30':
        $tfcategory = '/551169';
    break;
    case '31':
        $tfcategory = '/551177';
    break;
    case '32':
        $tfcategory = '/558885';
    break;
    case '33':
        $tfcategory = '/558929';
    break;
    case '34':
        $tfcategory = '/558944';
    break;
    default:
        $tfcategory = '';
}
