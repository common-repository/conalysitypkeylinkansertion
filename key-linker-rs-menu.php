<?php
add_action('admin_menu', 'tf_add_pages');
function tf_add_pages() {
    $my_plugin_slug = plugin_basename(__FILE__);
    add_menu_page('KEY linker RS', 'KEY linker RS', 'read', $my_plugin_slug, 'tf_menu_index', plugins_url('/images/logo.png', __FILE__));
    add_submenu_page($my_plugin_slug, 'プラグイン解説', 'プラグイン解説', 'read', $my_plugin_slug, 'tf_menu_index');
    add_submenu_page($my_plugin_slug, 'アフィリエイト設定', 'アフィリエイト設定', 'moderate_comments', 'submenu-1', 'tf_submenu_page1');
}
function tf_menu_index() {
    $targetkiji = plugins_url('/images/targetkiji.jpg', __FILE__);
    echo <<< EOF
    <h2>プラグインの解説</h2>
    <p>このプラグインは、投稿する記事のタイトルや文章を解析したうえで<br />
    キーワードを特定、楽天アフィリエイトのテキストリンクへと変換します。</p>
    <p>巧く動作させるには記事のタイトルと文章に同一のキーワードを含めてください。</p>
    <p>例<br /><img src="{$targetkiji}" alt="" /></p>
    <p>基本的に"～の"、"～は"、等の、ひらがな接続詞を基点に文字列を分割し、<br />
    タイトルと記事の両方に存在する同一の文字列をキーワードとして扱います。</p>
    <p>記事タイトルにキーワードと成り得る文字列が複数含まれていた場合は、<br />
    先頭(左側)に位置する文字列をキーワードとして扱います。</p>
    <p>ご利用には楽天アフィリエイトIDが必要になります。</p>
    <p>楽天アフィリエイトのページで任意のアフィリエイトリンクを作成して<br />
    リンクコードに含まれているアフィリエイトIDを設定ページにてご入力ください。</p>
    <p>当然ながらアフィリエイトIDを設定しないと報酬は発生しません。</p>
    <p>アフィリエイトIDを設定していなくてもプラグインが有効であれば<br />
    文章解析機能が働き自動的にキーワードが検知されリンクが埋め込まれますが、<br />
    リンク先は楽天のトップページにリダイレクトされます。</p>
    <p>全角1文字はキーワード選定条件から除外されます。</p>
    <p>文章内に複数のキーワードが存在する場合は、<br />
    文章末尾に近いキーワードにのみリンクが挿入されます。</p>
    <p>あくまで、楽天の商品ラインナップに依存する仕様となっておりますので<br />
    "該当する商品がありませんでした"、のページに飛ぶ場合があります。</p>
EOF;
    
}
