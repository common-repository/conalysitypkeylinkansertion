<?php
function otocon_replace_context_key($context_key) {
    mb_internal_encoding("UTF-8");
    mb_regex_encoding("UTF-8");
    $the_title = the_title('', '', false);
    $tiray = mb_split("[ \t　,ぁ-ん]+", $the_title);
    $the_content = get_the_content();
    $thecon = preg_replace("/[、。.・' ’\" ”！!？?()（）「」『』]+/u", "", $the_content);
    $conray = mb_split("[ぁ-ん]+", $thecon);
    $intersect = @array_intersect_key($tiray, $conray);
    $strlen = strlen($intersect[0]);
    if ($strlen >= 4) {
        $tarkey = $intersect[0];
        $e_keyword = urlencode($tarkey);
        if (strpos($context_key, $tarkey) !== false) {
            $laskeystar = strrpos($context_key, $tarkey);
            global $tfid;
            global $tfsort;
            global $tfcategory;
            $raku_af_link = 'http://hb.afl.rakuten.co.jp/hgc/' . $tfid . '/?pc=http%3a%2f%2fsearch.rakuten.co.jp%2fsearch%2fmall%2f' . $e_keyword . $tfcategory . '%2f%3f' . $tfsort . 'grp%3dproduct%26pc_search%3d%25E3%2582%25AF%25E3%2582%25A8%25E3%2583%25AA%25E9%2580%2581%25E4%25BF%25A1%26scid%3daf_link_urltxt&m=http%3a%2f%2fm.rakuten.co.jp%2f';
            $anchor = '<a href="' . $raku_af_link . '" target="_blank">' . $tarkey . '</a>';
            $context_key = substr_replace($context_key, $anchor, $laskeystar, $strlen);
        }
    }
    return $context_key;
}
add_filter('the_content', 'otocon_replace_context_key');
add_filter('the_excerpt', 'otocon_replace_context_key');
