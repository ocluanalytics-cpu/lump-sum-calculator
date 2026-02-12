<?php
if(is_page(102)){
} else {
session_start();
unset($_SESSION['expage']);
$_SESSION['expage'] = $_SERVER["REQUEST_URI"];
}
?>
<?php
if(!is_user_logged_in()){
wp_redirect('https://www.oclu.jp/login/');// ログインページのURL
exit();
}
?>
<!DOCTYPE HTML>
<html lang="ja" dir="ltr">
<head>
<!-- このページの検索エンジンのインデックス登録を拒否 -->
<meta name="robots" content="noindex,nofollow">
<meta charset=utf-8>
<title>一時金計算フォーム | オリエントコーポレーション労働組合</title>
<meta name="keywords" content="オリエントコーポレーション労働組合,オリコ労働組合">
<meta name="description" content="オリエントコーポレーション労働組合は、オリエントコーポレーションに働くすべての労働者の生活の向上と、幸福の追求を目指すとともに、自らの社会的責任を認識し、平和で豊かな自由社会創造のために、貢献することを目指します。">
<!-- OGP -->
<meta property="og:title" content="オリエントコーポレーション労働組合" />
<meta property="og:url" content="https://www.oclu.jp/" /> <!-- URLが確定したら「https://..」の正しい入力してください -->
<meta property="og:description" content="オリエントコーポレーション労働組合は、オリエントコーポレーションに働くすべての労働者の生活の向上と、幸福の追求を目指すとともに、自らの社会的責任を認識し、平和で豊かな自由社会創造のために、貢献することを目指します。" />
<meta property="og:site_name" content="オリエントコーポレーション労働組合" />
<meta property="og:image" content="https://www.oclu.jp/images_new/og_image.jpg" /> <!-- og:imageがあり、URLが確定したら「https://..」の正しい入力してください -->
<meta property="og:type" content="website" />
<meta name="twitter:card" content="summary" />
<meta property="og:locale" content="ja_JP">
<!-- /OGP -->
<!-- レスポンシブ-->
<meta name="viewport" content="width=device-width, maximum-scale=1.0">
<meta name="apple-mobile-web-app-title" content="オリエントコーポレーション労働組合">
<!-- 非レスポンシブ
<meta name="viewport" content="width=1100, user-scalable=yes" >
-->
<!-- 電話番号自動認識OFF -->
<meta name="format-detection" content="telephone=no">
<!-- favicon and apple-touch-icon -->
<link rel="shortcut icon" href="https://www.oclu.jp/images_new/favicon.ico"> <!-- apple-touch-icon.pngがあり、URLが確定したら「https://..」の正しい入力してください -->
<link rel="icon" sizes="192x192" href="https://www.oclu.jp/images_new/apple-touch-icon.png"> <!-- apple-touch-icon.pngがあり、URLが確定したら「https://..」の正しい入力してください -->
<!-- グーテンベルグエディタヘッダー -->
<?php wp_head(); ?>
<!-- CSS -->
<link href="https://www.oclu.jp/css_new/base.css" rel="stylesheet" type="text/css">
<link href="https://www.oclu.jp/css_new/common.css" rel="stylesheet" type="text/css">
<link href="https://www.oclu.jp/css_new/hover.css" rel="stylesheet" type="text/css">
<!-- WebFonts -->
<script type="text/javascript" src="//typesquare.com/accessor/script/typesquare.js?MyuF~VoBEP8%3D" charset="utf-8"></script>
<link rel="stylesheet" href="https://www.oclu.jp/font-awesome/css/all.min.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
<!-- JS -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://www.oclu.jp/js_new/common.js"></script>
<!-- JS 画像を外枠にフィットさせるJS -->
<script src="https://www.oclu.jp/js_new/ofi.min.js"></script>
<script>
  objectFitImages('img.object-fit-img');
</script>
<!-- Megamenu -->
<script>
$(function() {
 $('.mega_btn')
 .mouseover(function(e) {
  $(this).children('.mega_menu').stop().fadeIn(200);
 })
 .mouseout(function(e) {
  $(this).children('.mega_menu').stop().fadeOut(200);
 });
});
</script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-PXRXNL4WY7"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'G-PXRXNL4WY7');
</script>
<!-- 新しい一時金計算フォーム用CSS -->
<style>
  .lsc-wrapper{
    --lsc-primary:#24aed0;--lsc-primary-light:#e0f5fa;--lsc-primary-dark:#1d8fac;
    --lsc-accent:#24aed0;--lsc-accent-light:#c7edf7;
    --lsc-bg:#f5f7f8;--lsc-card:#fff;--lsc-text:#333;--lsc-text-sub:#666;
    --lsc-border:#dce1e5;--lsc-radius:8px;--lsc-shadow:0 1px 3px rgba(0,0,0,.05);
    font-family:'Noto Sans JP',-apple-system,BlinkMacSystemFont,"Hiragino Kaku Gothic ProN","Segoe UI",sans-serif;
    color:var(--lsc-text);line-height:1.6;font-weight:400;
  }
  .lsc-container{max-width:540px;margin:0 auto;padding:0 12px}
  /* header */
  .lsc-header{background:var(--lsc-primary);color:#fff;padding:20px 0 28px;text-align:center}
  .lsc-header h2{font-size:1.2rem;font-weight:700;letter-spacing:.04em;margin:0;color:#fff}
  .lsc-header p{font-size:.78rem;opacity:.9;margin-top:4px;font-weight:400}
  /* season toggle */
  .lsc-season-toggle{display:flex;background:#e8eaeb;border-radius:var(--lsc-radius);overflow:hidden;margin:-18px 12px 0;position:relative;z-index:1;box-shadow:0 2px 8px rgba(0,0,0,.08)}
  .lsc-season-btn{flex:1;padding:12px;text-align:center;font-size:.95rem;font-weight:700;border:none;cursor:pointer;transition:all .2s;background:#e8eaeb;color:#999}
  .lsc-season-btn.active{background:#fff;color:var(--lsc-primary);box-shadow:0 1px 4px rgba(0,0,0,.1)}
  .lsc-season-btn:first-child{border-radius:var(--lsc-radius) 0 0 var(--lsc-radius)}
  .lsc-season-btn:last-child{border-radius:0 var(--lsc-radius) var(--lsc-radius) 0}
  /* card */
  .lsc-card{background:var(--lsc-card);border-radius:var(--lsc-radius);box-shadow:var(--lsc-shadow);padding:20px 16px;margin-top:16px}
  .lsc-card-title{font-size:.85rem;font-weight:700;color:var(--lsc-primary);margin-bottom:14px;display:flex;align-items:center;gap:6px}
  .lsc-card-title .lsc-icon{font-size:1rem}
  /* form elements */
  .lsc-wrapper label.lsc-field-label{display:block;font-size:.8rem;font-weight:500;color:var(--lsc-text-sub);margin-bottom:4px}
  .lsc-wrapper select,
  .lsc-wrapper input[type="number"]{
    width:100%;padding:10px 12px;font-size:1rem;border:1.5px solid var(--lsc-border);
    border-radius:var(--lsc-radius);background:var(--lsc-card);color:var(--lsc-text);appearance:none;
    -webkit-appearance:none;transition:border-color .2s;outline:none;font-family:inherit;
    box-sizing:border-box;
  }
  .lsc-wrapper select{
    background-image:url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' fill='%23666666' viewBox='0 0 16 16'%3E%3Cpath d='M8 11L2 5h12z'/%3E%3C/svg%3E");
    background-repeat:no-repeat;background-position:right 12px center;padding-right:32px
  }
  .lsc-wrapper select:focus,
  .lsc-wrapper input[type="number"]:focus{border-color:var(--lsc-primary);box-shadow:0 0 0 3px var(--lsc-accent-light)}
  .lsc-wrapper select:disabled,
  .lsc-wrapper input:disabled{background:#f0f2f3;color:#999;cursor:not-allowed}
  .lsc-field{margin-bottom:14px}
  .lsc-field:last-child{margin-bottom:0}
  .lsc-row2{display:grid;grid-template-columns:1fr 1fr;gap:10px}
  /* point summary */
  .lsc-point-summary{background:var(--lsc-primary-light);border-radius:var(--lsc-radius);padding:12px;margin-top:12px;display:flex;justify-content:space-between;align-items:center}
  .lsc-point-summary .lsc-label{font-size:.8rem;color:var(--lsc-primary-dark);font-weight:700}
  .lsc-point-summary .lsc-value{font-size:1.2rem;font-weight:700;color:var(--lsc-primary-dark)}
  /* result */
  .lsc-result-card{background:var(--lsc-primary);border-radius:var(--lsc-radius);padding:24px 16px;margin-top:16px;text-align:center;color:#fff;box-shadow:0 2px 8px rgba(36,174,208,.25)}
  .lsc-result-card .lsc-result-label{font-size:.82rem;opacity:.9;font-weight:400}
  .lsc-result-card .lsc-result-value{font-size:2rem;font-weight:700;margin:8px 0 4px;letter-spacing:.02em}
  .lsc-result-card .lsc-result-sub{font-size:.75rem;opacity:.75;font-weight:400}
  /* detail breakdown */
  .lsc-breakdown{margin-top:12px;text-align:left;background:rgba(255,255,255,.15);border-radius:var(--lsc-radius);padding:12px}
  .lsc-breakdown dt{font-size:.72rem;opacity:.8;margin-top:6px;font-weight:400}
  .lsc-breakdown dt:first-child{margin-top:0}
  .lsc-breakdown dd{font-size:.88rem;font-weight:700}
  /* badge */
  .lsc-badge{display:inline-block;font-size:.7rem;padding:2px 8px;border-radius:20px;font-weight:500}
  .lsc-badge-teal{background:var(--lsc-primary-light);color:var(--lsc-primary-dark)}
  /* hidden */
  .lsc-hidden{display:none!important}
  /* note box */
  .lsc-note{font-size:.72rem;color:var(--lsc-text-sub);background:#f0f2f3;border-radius:var(--lsc-radius);padding:8px 10px;margin-top:10px;line-height:1.5;font-weight:400}
  .lsc-note strong{color:var(--lsc-text);font-weight:700}
  /* accordion */
  .lsc-accordion{margin-top:16px}
  .lsc-accordion-toggle{display:flex;align-items:center;gap:8px;width:100%;padding:14px 16px;background:var(--lsc-card);border:1.5px solid var(--lsc-border);border-radius:var(--lsc-radius);cursor:pointer;font-size:.85rem;font-weight:700;color:var(--lsc-primary);font-family:inherit;text-align:left}
  .lsc-accordion-toggle .lsc-acc-icon{transition:transform .2s;font-size:.7rem;color:var(--lsc-primary)}
  .lsc-accordion-toggle.open .lsc-acc-icon{transform:rotate(90deg)}
  .lsc-accordion-body{display:none;background:var(--lsc-card);border:1.5px solid var(--lsc-border);border-top:none;border-radius:0 0 var(--lsc-radius) var(--lsc-radius);padding:16px;font-size:.78rem;line-height:1.7;color:var(--lsc-text)}
  .lsc-accordion-toggle.open{border-radius:var(--lsc-radius) var(--lsc-radius) 0 0}
  .lsc-accordion-body.open{display:block}
  .lsc-acc-section-title{font-weight:700;margin-top:10px;font-size:.78rem}
  .lsc-acc-section-title:first-child{margin-top:0}
  .lsc-acc-formula{border-left:3px solid var(--lsc-primary);padding:6px 10px;margin:4px 0 8px;background:var(--lsc-primary-light);border-radius:0 var(--lsc-radius) var(--lsc-radius) 0;font-size:.75rem;color:#c0392b;font-weight:500}
  .lsc-acc-note{font-size:.72rem;color:var(--lsc-text-sub);margin-top:6px}
  .lsc-acc-ref{font-size:.72rem;color:var(--lsc-text-sub);margin-top:10px}
  /* category buttons */
  .lsc-category-btns{display:grid;gap:8px}
  .lsc-category-btn{width:100%;padding:11px 14px;font-size:.85rem;font-weight:500;font-family:inherit;text-align:left;border:1.5px solid var(--lsc-border);border-radius:var(--lsc-radius);background:var(--lsc-card);color:var(--lsc-text);cursor:pointer;transition:all .2s}
  .lsc-category-btn:hover{border-color:var(--lsc-primary);color:var(--lsc-primary)}
  .lsc-category-btn.active{border-color:var(--lsc-primary);background:var(--lsc-primary-light);color:var(--lsc-primary-dark);font-weight:700}
  /* footer */
  .lsc-footer{text-align:center;margin-top:24px;font-size:.7rem;color:var(--lsc-text-sub);padding:0 12px}
  @media(min-width:600px){
    .lsc-container{padding:0 20px}
    .lsc-card{padding:24px 20px}
    .lsc-result-card{padding:28px 20px}
    .lsc-result-card .lsc-result-value{font-size:2.4rem}
  }
</style>
</head>
<body>
<!-- ヘッダー要素 -->
<div class="sponly">
<div class="headtit">
<h1><a href="https://www.oclu.jp/" class="han"><img src="https://www.oclu.jp/images_new/hlogo2.png" alt="オリエントコーポレーション労働組合"></a></h1>
</div>
</div>

<!-- SP ドロワーメニュー START -->
<div class="sponly">
<div class="l_header">
 <!-- メニューボタン -->
 <div class="header_sp_nav">
 <span class="nav_line nav_line1"></span>
 <span class="nav_line nav_line2"></span>
 <span class="nav_line nav_line3"></span>
	<span class="nav_text">メニュー</span>
 </div>
 <div class="header_inner">
 <div class="header_wrap">

 <!-- メニュー内容 -->
	<nav class="nav">
<div class="gspmds">
	<p><a href="https://www.oclu.jp/"><img src="https://www.oclu.jp/images_new/spmenu00.png" alt="">ホーム</a></p>
</div>
<div class="qag">
	<div class="spkaihei">
	<p><img src="https://www.oclu.jp/images_new/spmenu01.png" alt="">オリコ労組とは</p>
	</div>
	<div class="newsopenbox">
		<p><a href="https://www.oclu.jp/about/">オリコ労組とは</a></p>
		<p><a href="https://www.oclu.jp/profile/">基本情報</a></p>
		<p><a href="https://www.oclu.jp/vision/">ビジョン</a></p>
		<p class="mmgentei"><a href="https://www.oclu.jp/whats/">労働組合ってなに？</a></p>
		<p class="mmgentei"><a href="https://www.oclu.jp/works/">実績紹介</a></p>
		<p class="mmgentei"><a href="https://www.oclu.jp/?cat=14">役員紹介</a></p>
		<p class="mmgentei"><a href="https://www.oclu.jp/bunkai2/">分会紹介</a></p>
		<p class="mmgentei"><a href="https://www.oclu.jp/kiyaku/">組合規約</a></p>
	</div>
</div>
<div class="gspmds">
	<p class="mmgentei"><a href="https://www.oclu.jp/?cat=4"><img src="https://www.oclu.jp/images_new/spmenu02.png" alt="">活動報告</a></p>
</div>
<div class="gspmds">
	<p class="mmgentei"><a href="https://www.oclu.jp/?cat=10"><img src="https://www.oclu.jp/images_new/spmenu03.png" alt="">イベント</a></p>
</div>
<div class="qag">
	<div class="spkaihei">
	<p><img src="https://www.oclu.jp/images_new/spmenu04.png" alt="">広報紙</p>
	</div>
	<div class="newsopenbox">
		<p class="mmgentei"><a href="https://www.oclu.jp/?cat=15">OCLU JOURNAL</a></p>
		<p class="mmgentei"><a href="https://www.oclu.jp/?cat=13">OCLU-NEWS</a></p>
		<p class="mmgentei"><a href="https://www.oclu.jp/anniversary_magazine/">周年誌</a></p>
	</div>
</div>
<div class="gspmds">
	<p class="mmgentei"><a href="https://www.oclu.jp/welfare/"><img src="https://www.oclu.jp/images_new/spmenu05.png" alt="">福利厚生</a></p>
</div>
<div class="gspmds">
	<p class="mmgentei"><a href="https://www.oclu.jp/lump_sum/"><img src="https://www.oclu.jp/images_new/spmenu06.png" alt="">一時金計算</a></p>
</div>
<div class="gspmds">
	<p class="mmgentei"><a href="https://www.oclu.jp/document/"><img src="https://www.oclu.jp/images_new/spmenu07.png" alt="">各種資料</a></p>
</div>
<div class="gspmds">
	<p class="mmgentei"><a href="https://www.oclu.jp/contact/"><img src="https://www.oclu.jp/images_new/spmenu08.png" alt="">お問い合わせ</a></p>
</div>
 </nav>
 </div>
 </div>
</div>
</div>
<!-- SP ドロワーメニュー END -->
<!-- SP ドロワーメニュー用カコミ 1/2 -->
<div class="l_main">
<div class="main_cover"></div>
<!-- SP ドロワーメニュー用カコミ 1/2 -->
<!-- start main -->
<main>
<div class="pcheader">
<div class="w960">
<div class="pctopbar"></div>
<h1><a href="https://www.oclu.jp/" class="han"><img src="https://www.oclu.jp/images_new/hlogo2.png" alt="オリエントコーポレーション労働組合"></a></h1>
<div class="pctopmenu">
<div class="main_nav">
 <div class="mega_btn">
 <a href="https://www.oclu.jp/about/"><img src="https://www.oclu.jp/images_new/gmenu01_off.png" alt="オリコ労組とは" /></a>
		<div class="mega_menu position1">
		<div class="mega_menu_w2">
		<div class="mmimgarw"><img src="https://www.oclu.jp/images_new/gmenu_fuki_arw.png" alt="" /></div>
		<p><a href="https://www.oclu.jp/about/">オリコ労組とは</a></p>
		<p><a href="https://www.oclu.jp/profile/">基本情報</a></p>
		<p><a href="https://www.oclu.jp/vision/">ビジョン</a></p>
		<p class="mmgentei"><a href="https://www.oclu.jp/whats/">労働組合ってなに？</a></p>
		<p class="mmgentei"><a href="https://www.oclu.jp/works/">実績紹介</a></p>
		<p class="mmgentei"><a href="https://www.oclu.jp/?cat=14">役員紹介</a></p>
		<p class="mmgentei"><a href="https://www.oclu.jp/bunkai2/">分会紹介</a></p>
		<p class="mmgentei"><a href="https://www.oclu.jp/kiyaku/">組合規約</a></p>
		</div>
		</div>

 </div>
</div>
	<a href="https://www.oclu.jp/?cat=4"><img src="https://www.oclu.jp/images_new/gmenu02_off.png" alt="活動報告" /></a>
	<a href="https://www.oclu.jp/?cat=10"><img src="https://www.oclu.jp/images_new/gmenu03_off.png" alt="イベント" /></a>
<div class="main_nav">
 <div class="mega_btn">
 <a href="https://www.oclu.jp/magazine/"><img src="https://www.oclu.jp/images_new/gmenu04_off.png" alt="広報紙" /></a>
		<div class="mega_menu position2">
		<div class="mega_menu_w2">
		<div class="mmimgarw"><img src="https://www.oclu.jp/images_new/gmenu_fuki_arw.png" alt="" /></div>
		<p class="mmgentei"><a href="https://www.oclu.jp/?cat=15">OCLU JOURNAL</a></p>
		<p class="mmgentei"><a href="https://www.oclu.jp/?cat=13">OCLU-NEWS</a></p>
		<p class="mmgentei"><a href="https://www.oclu.jp/anniversary_magazine/">周年誌</a></p>
		</div>
		</div>

 </div>
</div>
	<a href="https://www.oclu.jp/welfare/"><img src="https://www.oclu.jp/images_new/gmenu05_off.png" alt="福利厚生" /></a>
	<a href="https://www.oclu.jp/lump_sum/"><img src="https://www.oclu.jp/images_new/gmenu06_on.png" alt="一時金計算" /></a>
	<a href="https://www.oclu.jp/document/"><img src="https://www.oclu.jp/images_new/gmenu07_off.png" alt="各種資料" /></a>
	<a href="https://www.oclu.jp/contact/"><img src="https://www.oclu.jp/images_new/gmenu08_off.png" alt="お問い合わせ" /></a>
</div>
<!-- end pctopmenu -->
<div class="cb"></div>
</div>
</div>
<!-- end pcheader -->
<div class="lusum_tit">
<div class="w572">
	<div class="lusum_titimg">
	<img src="https://www.oclu.jp/images_new/07tit.png" alt="一時金計算フォーム／Lump sum" />
	</div>
</div>
<!-- end w572 -->
</div>
<!-- end news_tit -->
<div class="pan mb35">
<div class="w720">
	<ul>
	<li class="home"><a href="https://www.oclu.jp/">ホーム </a></li>
	<li>一時金計算フォーム</li>
	</ul>
	<div class="cb"></div>
</div>
<!-- end w740 -->
</div>
<!-- end pankuzu -->
<div class="lusum_w1">
<div class="w920">
<div class="lusum_box">
<div class="lusumbox1 mt0">
<div class="omds"><i class="fa-solid fa-circle-question"></i></div>
<div class="nmds">
<h4>一時金計算フォームってなに？</h4>
</div>
<div class="lusumbox1lead">
<p>次の一時金は、どのくらいのもらえるの？　といったお悩みに応える、計算フォームです。</p>
<p>等級や評価ポイントを入力することで、あなたの一時金額を算出します。</p>
</div>
</div>
<!-- end lusumbox1 -->
<p class="mt35 ts09em">「冬期」「夏期」を選択してください</p>
<div class="lusumbox2">

<!-- ========== 新しい一時金計算フォーム ここから ========== -->
<div class="lsc-wrapper">

<div class="lsc-header">
  <div class="lsc-container">
    <h2>一時金計算シミュレーター</h2>
    <p>オリエントコーポレーション労働組合 賞与計算ツール</p>
  </div>
</div>

<div class="lsc-container">
  <!-- Season Toggle -->
  <div class="lsc-season-toggle">
    <button class="lsc-season-btn active" data-season="winter" onclick="lscSetSeason('winter')">冬期</button>
    <button class="lsc-season-btn" data-season="summer" onclick="lscSetSeason('summer')">夏期</button>
  </div>

  <!-- 通期評価について -->
  <div class="lsc-accordion">
    <button class="lsc-accordion-toggle" id="lsc-acc-toggle" onclick="lscToggleAccordion()">
      <span class="lsc-acc-icon">&#9654;</span> 通期評価について
    </button>
    <div class="lsc-accordion-body" id="lsc-acc-body">
      <p>冬期賞与及び夏期賞与の支給割合は4：6とし、下記計算式に基づき支給額を決定。</p>
      <p class="lsc-acc-section-title">《冬期賞与》計算式</p>
      <div class="lsc-acc-formula">「賞与基準値 &times; 評価ポイント（仮評価：標準評価） &times; ポイント単価（仮評価：BBB/BBB）」&times; 0.8</div>
      <p class="lsc-acc-section-title">《夏期賞与》計算式</p>
      <div class="lsc-acc-formula">「賞与基準値 &times; 評価ポイント（実績評価） &times; ポイント単価（実績評価）」&times; 2 &minus;「冬期賞与」&times; 調整係数</div>
      <p class="lsc-acc-note">※調整係数<br>標準評価時の全社賞与ファンドから上下1％超のズレが生じた場合、適用されます。</p>
      <p class="lsc-acc-ref">計算式の詳細はOCLU‐NEWS No.891をご確認ください。</p>
    </div>
  </div>

  <!-- Category Selection (summer only) -->
  <div class="lsc-card lsc-hidden" id="lsc-category-card">
    <div class="lsc-card-title"><span class="lsc-icon">&#9654;</span> 区分選択</div>
    <div class="lsc-category-btns">
      <button class="lsc-category-btn" data-cat="hq_office" onclick="lscSelectCategory('hq_office')">本社部室店</button>
      <button class="lsc-category-btn" data-cat="branch" onclick="lscSelectCategory('branch')">営業店</button>
      <button class="lsc-category-btn" data-cat="group" onclick="lscSelectCategory('group')">グループ会社</button>
    </div>
  </div>

  <!-- Grade / Band -->
  <div class="lsc-card">
    <div class="lsc-card-title"><span class="lsc-icon">&#9654;</span> 賞与基準値</div>
    <div class="lsc-row2">
      <div class="lsc-field">
        <label class="lsc-field-label">グレード</label>
        <select id="lsc-grade" onchange="lscOnGradeChange()">
          <option value="G04">G04</option>
          <option value="G03">G03</option>
          <option value="G02">G02</option>
          <option value="G01">G01</option>
        </select>
      </div>
      <div class="lsc-field">
        <label class="lsc-field-label">バンド</label>
        <select id="lsc-band" onchange="lscCalc()">
          <option value="II">バンドII</option>
          <option value="I">バンドI</option>
        </select>
      </div>
    </div>
    <div class="lsc-point-summary">
      <span class="lsc-label">賞与基準値</span>
      <span class="lsc-value" id="lsc-base-value">35.4</span>
    </div>
  </div>

  <!-- Evaluation Points -->
  <div class="lsc-card">
    <div class="lsc-card-title"><span class="lsc-icon">&#9654;</span> 評価ポイント</div>

    <!-- Basic -->
    <div class="lsc-field">
      <label class="lsc-field-label">基本 <span class="lsc-badge lsc-badge-teal">固定 75P</span></label>
      <input type="number" value="75" disabled>
    </div>

    <!-- Individual -->
    <div class="lsc-field">
      <label class="lsc-field-label">個人加算 <span id="lsc-individual-badge" class="lsc-badge lsc-badge-teal">固定 15P</span></label>
      <select id="lsc-individual" onchange="lscCalc()" disabled>
        <option value="30">5（30P）</option>
        <option value="22">4（22P）</option>
        <option value="18">3.5（18P）</option>
        <option value="15" selected>3（15P）- 標準</option>
        <option value="12">2.5（12P）</option>
        <option value="8">2（8P）</option>
        <option value="0">1（0P）</option>
      </select>
    </div>

    <!-- Qualitative -->
    <div class="lsc-field">
      <label class="lsc-field-label">定性加算 <span id="lsc-qualitative-badge" class="lsc-badge lsc-badge-teal">固定 5P</span></label>
      <select id="lsc-qualitative" onchange="lscCalc()" disabled>
        <option value="0">0P</option>
        <option value="1">1P</option>
        <option value="2">2P</option>
        <option value="3">3P</option>
        <option value="4">4P</option>
        <option value="5" selected>5P - 標準</option>
        <option value="6">6P</option>
        <option value="7">7P</option>
        <option value="8">8P</option>
        <option value="9">9P</option>
        <option value="10">10P</option>
        <option value="11">11P</option>
        <option value="12">12P</option>
        <option value="13">13P</option>
        <option value="14">14P</option>
      </select>
    </div>

    <!-- Performance (Winter: fixed / Summer: dynamic) -->
    <div class="lsc-field">
      <label class="lsc-field-label">業績加算 <span id="lsc-perf-badge" class="lsc-badge lsc-badge-teal">固定 5P</span></label>
      <!-- Winter: fixed display -->
      <div id="lsc-perf-winter">
        <input type="number" value="5" disabled>
      </div>
      <!-- Summer: dynamic selectors -->
      <div id="lsc-perf-summer" class="lsc-hidden">
        <!-- 本社部室店 -->
        <div id="lsc-perf-hq-office">
          <select id="lsc-perf-hq-office-eval" onchange="lscCalcPerf()">
            <option value="8">S（8P）</option>
            <option value="6">A（6P）</option>
            <option value="5" selected>B（5P）- 標準</option>
            <option value="3">C（3P）</option>
            <option value="2">D（2P）</option>
          </select>
        </div>
        <!-- 営業店 -->
        <div id="lsc-perf-branch" class="lsc-hidden">
          <select id="lsc-perf-branch-eval" onchange="lscCalcPerf()">
            <option value="10">優秀（10P）</option>
            <option value="7">優良（7P）</option>
            <option value="5" selected>中位①（5P）- 標準</option>
            <option value="3">中位②（3P）</option>
            <option value="0">下位（0P）</option>
          </select>
        </div>
        <!-- グループ会社 -->
        <div id="lsc-perf-group" class="lsc-hidden">
          <input type="number" value="5" disabled>
          <div class="lsc-note" style="margin-top:6px">グループ会社は標準（5P）固定です。</div>
        </div>
      </div>
    </div>

    <div class="lsc-point-summary">
      <span class="lsc-label">合計ポイント</span>
      <span class="lsc-value" id="lsc-total-points">100P</span>
    </div>
  </div>

  <!-- Unit Price & Adjustment -->
  <div class="lsc-card">
    <div class="lsc-card-title"><span class="lsc-icon">&#9654;</span> 単価・係数</div>
    <div class="lsc-row2">
      <div class="lsc-field">
        <label class="lsc-field-label">ポイント単価（円）</label>
        <input type="number" id="lsc-unit-price" value="205" min="0" step="1" onchange="lscCalc()" oninput="lscCalc()">
      </div>
      <div class="lsc-field">
        <label class="lsc-field-label">調整係数</label>
        <input type="number" id="lsc-adj-coeff" value="1" min="0" step="0.01" onchange="lscCalc()" oninput="lscCalc()" disabled>
      </div>
    </div>
    <div class="lsc-note" id="lsc-winter-note">
      <strong>冬期計算：</strong>一時金 = 賞与基準値 &times; 合計ポイント &times; ポイント単価 &times; 0.8<br>
      ※ 冬期は仮評価のため、個人加算15P・定性加算5P・業績加算5Pで固定されます。
    </div>
    <div class="lsc-note lsc-hidden" id="lsc-summer-note">
      <strong>夏期計算：</strong>年間一時金から冬期仮支給額を差し引き、調整係数を乗じて算出します。<br>
      冬期仮支給額 = 賞与基準値 &times; 100 &times; 205 &times; 0.8
    </div>
  </div>

  <!-- Result -->
  <div class="lsc-result-card" id="lsc-result-card">
    <div class="lsc-result-label" id="lsc-result-label">冬期一時金（税引前）</div>
    <div class="lsc-result-value" id="lsc-result-value">0 円</div>
    <div class="lsc-result-sub" id="lsc-result-sub"></div>
    <div class="lsc-breakdown" id="lsc-breakdown"></div>
  </div>

  <div class="lsc-footer">
    ※ 本ツールの計算結果はあくまで概算です。実際の支給額とは異なる場合があります。
  </div>
</div>

</div>
<!-- ========== 新しい一時金計算フォーム ここまで ========== -->

<script>
// --- 新しい一時金計算フォーム JavaScript ---
// jQueryの$と競合しないよう lscById を使用
var LSC_BASE_VALUES = {
  G04: { II: 35.4, I: 31.6 },
  G03: { II: 29.5, I: 26.2 },
  G02: { II: 23.5, I: 20.8 },
  G01: { II: 18.9 }
};

var lscCurrentSeason = 'winter';
var lscSelectedCategory = 'hq_office';

function lscById(id) { return document.getElementById(id); }

function lscFormatNumber(n) {
  return Math.round(n).toLocaleString('ja-JP');
}

// --- Accordion ---
function lscToggleAccordion() {
  var toggle = lscById('lsc-acc-toggle');
  var body = lscById('lsc-acc-body');
  toggle.classList.toggle('open');
  body.classList.toggle('open');
}

// --- Season ---
function lscSetSeason(season) {
  lscCurrentSeason = season;
  document.querySelectorAll('.lsc-season-btn').forEach(function(b) {
    b.classList.toggle('active', b.dataset.season === season);
  });

  var isWinter = season === 'winter';

  // Category card
  lscById('lsc-category-card').classList.toggle('lsc-hidden', isWinter);

  // Individual: fixed in winter, selectable in summer
  var indSel = lscById('lsc-individual');
  var indBadge = lscById('lsc-individual-badge');
  indSel.disabled = isWinter;
  indBadge.classList.toggle('lsc-hidden', !isWinter);
  if (isWinter) { indSel.value = '15'; }

  // Qualitative: fixed in winter, selectable in summer
  var qualSel = lscById('lsc-qualitative');
  var qualBadge = lscById('lsc-qualitative-badge');
  qualSel.disabled = isWinter;
  qualBadge.classList.toggle('lsc-hidden', !isWinter);
  if (isWinter) { qualSel.value = '5'; }

  // Performance section
  lscById('lsc-perf-winter').classList.toggle('lsc-hidden', !isWinter);
  lscById('lsc-perf-summer').classList.toggle('lsc-hidden', isWinter);
  lscById('lsc-perf-badge').classList.toggle('lsc-hidden', !isWinter);

  // Adjustment coefficient
  lscById('lsc-adj-coeff').disabled = isWinter;
  if (isWinter) lscById('lsc-adj-coeff').value = '1';

  // Unit price default
  if (isWinter) lscById('lsc-unit-price').value = '205';

  // Notes
  lscById('lsc-winter-note').classList.toggle('lsc-hidden', !isWinter);
  lscById('lsc-summer-note').classList.toggle('lsc-hidden', isWinter);

  // Result label
  lscById('lsc-result-label').textContent = isWinter ? '冬期一時金（税引前）' : '夏期一時金（税引前）';

  if (!isWinter) {
    lscOnCategoryChange();
  }
  lscCalc();
}

// --- Grade / Band ---
function lscOnGradeChange() {
  var grade = lscById('lsc-grade').value;
  var bandSel = lscById('lsc-band');
  if (grade === 'G01') {
    bandSel.innerHTML = '<option value="II">バンドII</option>';
  } else {
    bandSel.innerHTML = '<option value="II">バンドII</option><option value="I">バンドI</option>';
  }
  lscCalc();
}

function lscGetBaseValue() {
  var grade = lscById('lsc-grade').value;
  var band = lscById('lsc-band').value;
  var entry = LSC_BASE_VALUES[grade];
  return entry[band] !== undefined ? entry[band] : entry['II'];
}

// --- Category Change ---
// --- Category Selection ---
function lscSelectCategory(cat) {
  lscSelectedCategory = cat;
  document.querySelectorAll('.lsc-category-btn').forEach(function(b) {
    b.classList.toggle('active', b.dataset.cat === cat);
  });
  lscOnCategoryChange();
}

function lscOnCategoryChange() {
  var cat = lscSelectedCategory;
  lscById('lsc-perf-hq-office').classList.toggle('lsc-hidden', cat !== 'hq_office');
  lscById('lsc-perf-branch').classList.toggle('lsc-hidden', cat !== 'branch');
  lscById('lsc-perf-group').classList.toggle('lsc-hidden', cat !== 'group');
  lscCalcPerf();
}

// --- Performance Point ---
function lscGetPerformancePoint() {
  if (lscCurrentSeason === 'winter') return 5;

  var cat = lscSelectedCategory;

  if (cat === 'hq_office') {
    return parseInt(lscById('lsc-perf-hq-office-eval').value, 10);
  }
  if (cat === 'branch') {
    return parseInt(lscById('lsc-perf-branch-eval').value, 10);
  }
  // group: fixed 5P
  return 5;
}

function lscCalcPerf() { lscCalc(); }

// --- Main Calc ---
function lscCalc() {
  var baseValue = lscGetBaseValue();
  lscById('lsc-base-value').textContent = baseValue;

  var basic = 75;
  var individual = parseInt(lscById('lsc-individual').value, 10);
  var qualitative = parseInt(lscById('lsc-qualitative').value, 10);
  var performance = lscGetPerformancePoint();
  var totalPoints = basic + individual + qualitative + performance;
  lscById('lsc-total-points').textContent = totalPoints + 'P';

  var unitPrice = parseFloat(lscById('lsc-unit-price').value) || 0;
  var adjCoeff = parseFloat(lscById('lsc-adj-coeff').value) || 1;

  var result;
  var subText = '';

  if (lscCurrentSeason === 'winter') {
    result = baseValue * totalPoints * unitPrice * 0.8;
    subText = baseValue + ' \u00d7 ' + totalPoints + ' \u00d7 ' + unitPrice + ' \u00d7 0.8';
  } else {
    var winterTemp = baseValue * 100 * 205 * 0.8;
    var annualFull = baseValue * totalPoints * unitPrice * 2;
    result = (annualFull - winterTemp) * adjCoeff;
    subText = '( ' + baseValue + ' \u00d7 ' + totalPoints + ' \u00d7 ' + unitPrice + ' \u00d7 2 - ' + lscFormatNumber(winterTemp) + ' ) \u00d7 ' + adjCoeff;
  }

  lscById('lsc-result-value').textContent = lscFormatNumber(result) + ' 円';
  lscById('lsc-result-sub').textContent = subText;

  // Breakdown
  var bd = lscById('lsc-breakdown');
  if (lscCurrentSeason === 'summer') {
    var winterTemp2 = baseValue * 100 * 205 * 0.8;
    bd.innerHTML =
      '<dt>賞与基準値</dt><dd>' + baseValue + '</dd>' +
      '<dt>合計ポイント</dt><dd>' + totalPoints + 'P（基本75 + 個人' + individual + ' + 定性' + qualitative + ' + 業績' + performance + '）</dd>' +
      '<dt>ポイント単価</dt><dd>' + unitPrice + '円</dd>' +
      '<dt>調整係数</dt><dd>' + adjCoeff + '</dd>' +
      '<dt>冬期仮支給額（控除）</dt><dd>' + lscFormatNumber(winterTemp2) + '円</dd>';
  } else {
    bd.innerHTML =
      '<dt>賞与基準値</dt><dd>' + baseValue + '</dd>' +
      '<dt>合計ポイント</dt><dd>' + totalPoints + 'P（基本75 + 個人' + individual + ' + 定性' + qualitative + ' + 業績' + performance + '）</dd>' +
      '<dt>ポイント単価</dt><dd>' + unitPrice + '円</dd>';
  }
}

// --- Init ---
lscCalc();
</script>

</div>
<!-- end lusumbox2 -->
</div>
<!-- end lusum_box -->
</div>
<!-- end w920 -->
</div>
<!-- end magaz_w1 -->
</main>
<!-- end main -->
<!-- start footer -->
<footer class="bgf4">
<div class="foot980">
<div class="fcleft">
	<div class="fmenu">
	<p><a href="https://www.oclu.jp/policy/">プライバシーポリシー</a></p>
	</div>

	<div class="fcrecit">
	<p>© オリエントコーポレーション労働組合 all rights reserved.</p>
	</div>
	<div class="cb"></div>
</div>
</div>
<!-- PageTopBtn -->
<div class="gotop"><a href="#"><img src="https://www.oclu.jp/images_new/pagetop_off.png" alt="トップへ戻る"></a></div>
</footer>
<!-- end footer -->
<!-- SP ドロワーメニュー用カコミ 2/2 -->
</div>
<!-- end l_main -->
<!-- SP ドロワーメニュー用カコミ 2/2 -->
</body>
</html>
