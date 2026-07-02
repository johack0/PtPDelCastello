<?php
/**
 * Template Name: PtP del Castello - Locandina
 * Description: Pagina evento standalone in HTML/CSS/JS puro (sfondo foto + countdown + Open Graph).
 */
if (!defined('ABSPATH')) { exit; }
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php echo esc_html(get_the_title()); ?> - Point to Point del Castello</title>
<meta name="description" content="9&ordf; edizione &middot; MTB Campania Championship &middot; 37 km / 1100 D+. Diventa il RE e prova a sentire la campana per primo!">
<meta property="og:type" content="website">
<meta property="og:locale" content="it_IT">
<meta property="og:site_name" content="Point to Point del Castello">
<meta property="og:title" content="Point to Point del Castello 2026 - 5 luglio, Mignano Montelungo (CE)">
<meta property="og:description" content="9&ordf; edizione &middot; MTB Campania Championship &middot; 37 km / 1100 D+. Diventa il RE e prova a sentire la campana per primo!">
<meta property="og:url" content="<?php echo esc_url(home_url('/')); ?>">
<meta property="og:image" content="https://ptpdelcastello.netsons.org/wp-content/uploads/2026/06/Point-to-Point-del-Castello-2026-Condivisione.jpg">
<meta property="og:image:secure_url" content="https://ptpdelcastello.netsons.org/wp-content/uploads/2026/06/Point-to-Point-del-Castello-2026-Condivisione.jpg">
<meta property="og:image:type" content="image/jpeg">
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="630">
<meta property="og:image:alt" content="Point to Point del Castello 2026">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Point to Point del Castello 2026 - 5 luglio, Mignano Montelungo (CE)">
<meta name="twitter:description" content="9&ordf; edizione &middot; MTB Campania Championship &middot; 37 km / 1100 D+. Diventa il RE e prova a sentire la campana per primo!">
<meta name="twitter:image" content="https://ptpdelcastello.netsons.org/wp-content/uploads/2026/06/Point-to-Point-del-Castello-2026-Condivisione.jpg">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800&display=swap">
<?php wp_head(); ?>
<style>
@font-face{font-family:'Airstrike';src:url('https://ptpdelcastello.netsons.org/wp-content/uploads/2026/04/AirstrikeBold.woff2') format('woff2'),url('https://ptpdelcastello.netsons.org/wp-content/uploads/2026/04/AirstrikeBold.woff') format('woff');font-weight:700;font-style:normal;font-display:swap;}
.ptp-body{margin:0;}
.ptp-page{--bg:#0a0a0a;--bg2:#171717;--ink:#fff;--mut:#a3a3a3;--line:rgba(255,255,255,.12);font-family:'Montserrat',-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,Helvetica,Arial,sans-serif;color:var(--ink);background:var(--bg);line-height:1.5;overflow-x:hidden;}
.ptp-page *{box-sizing:border-box;}
.ptp-page a{color:inherit;}
.ptp-disp{font-family:'Airstrike',Impact,"Arial Narrow",sans-serif;font-weight:700;letter-spacing:.01em;line-height:.9;text-transform:uppercase;}
.ptp-wrap{max-width:1140px;margin:0 auto;padding:0 24px;}
.ptp-hero{position:relative;min-height:94vh;display:flex;flex-direction:column;background:#060606 url('https://ptpdelcastello.netsons.org/wp-content/uploads/2026/06/PtP-Hero-Ciclista-Castello.png') center 16%/cover no-repeat;}
.ptp-hero::before{content:"";position:absolute;inset:0;background:linear-gradient(90deg,rgba(0,0,0,.92) 0%,rgba(0,0,0,.55) 34%,rgba(0,0,0,.12) 62%,rgba(0,0,0,.4) 100%),linear-gradient(0deg,rgba(0,0,0,.97) 0%,rgba(0,0,0,.45) 26%,rgba(0,0,0,0) 52%);}
.ptp-hero>*{position:relative;z-index:2;}
.ptp-hero-top{padding-top:18px;}
.ptp-hero-top-in{display:flex;justify-content:space-between;align-items:center;gap:16px;font-size:12px;letter-spacing:.2em;text-transform:uppercase;color:var(--mut);font-weight:700;}
.ptp-hero-top-in a{text-decoration:none;color:#fff;border-bottom:1px solid rgba(255,255,255,.4);padding-bottom:2px;}
.ptp-hero-spacer{flex:1;min-height:120px;}
.ptp-hero-body{padding-bottom:56px;}
.ptp-kicker{font-size:14px;letter-spacing:.26em;text-transform:uppercase;color:var(--mut);font-weight:700;margin:0 0 14px;}
.ptp-kicker b{color:#fff;}
.ptp-meta{display:flex;flex-wrap:wrap;gap:8px 28px;align-items:baseline;margin:0 0 6px;}
.ptp-date{font-size:clamp(30px,5vw,52px);color:#fff;}
.ptp-place{font-size:clamp(16px,2.4vw,24px);color:#e6e6e6;letter-spacing:.04em;}
.ptp-title{font-size:clamp(46px,9.5vw,118px);margin:6px 0 0;color:#fff;text-shadow:0 8px 36px rgba(0,0,0,.75);}
.ptp-tag{font-size:clamp(16px,2.3vw,23px);color:#f0f0f0;max-width:640px;margin:18px 0 0;font-weight:500;text-shadow:0 2px 12px rgba(0,0,0,.6);}
.ptp-countdown{display:flex;gap:12px;margin:26px 0 28px;flex-wrap:wrap;}
.ptp-cd-box{background:rgba(0,0,0,.55);border:1px solid var(--line);border-radius:12px;padding:12px 18px;min-width:78px;text-align:center;}
.ptp-cd-n{display:block;font-size:clamp(28px,5vw,42px);color:#fff;line-height:1;}
.ptp-cd-l{display:block;font-size:11px;letter-spacing:.2em;text-transform:uppercase;color:var(--mut);margin-top:8px;font-weight:700;}
.ptp-cd-live{font-size:24px;color:#fff;font-weight:800;}
.ptp-cta{display:flex;flex-wrap:wrap;gap:14px;}
.ptp-btn{display:inline-block;font-family:'Montserrat',-apple-system,sans-serif;padding:15px 32px;border-radius:50px;font-weight:800;letter-spacing:.08em;text-transform:uppercase;font-size:15px;text-decoration:none;transition:transform .15s ease,box-shadow .15s ease;}
.ptp-page a.ptp-btn-1{background:#fff !important;color:#0a0a0a !important;box-shadow:0 10px 30px rgba(0,0,0,.5);}
.ptp-page a.ptp-btn-1:hover{background:#fff !important;color:#0a0a0a !important;}
.ptp-page a.ptp-btn-2{background:rgba(255,255,255,.08);color:#fff !important;border:2px solid rgba(255,255,255,.4);}
.ptp-btn:hover{transform:translateY(-2px);}
.ptp-stats{background:var(--bg2);border-bottom:1px solid var(--line);}
.ptp-stats .ptp-wrap{display:grid;grid-template-columns:1fr 1fr;}
.ptp-stat{padding:44px 10px;text-align:center;}
.ptp-stat:first-child{border-right:1px solid var(--line);}
.ptp-stat .l{display:block;font-size:13px;letter-spacing:.26em;color:var(--mut);text-transform:uppercase;font-weight:700;margin-bottom:8px;}
.ptp-stat .v{font-size:clamp(40px,8vw,76px);color:#fff;}
.ptp-stat .v span{color:var(--mut);}
.ptp-sec{padding:64px 0;}
.ptp-h2{font-size:clamp(28px,5vw,46px);margin:0 0 8px;color:#fff;}
.ptp-lead{color:var(--mut);margin:0 0 36px;font-size:17px;letter-spacing:.02em;}
.ptp-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:18px;}
.ptp-grid-2{display:grid;grid-template-columns:repeat(2,1fr);gap:18px;}
.ptp-card{background:var(--bg2);border:1px solid var(--line);border-radius:16px;padding:28px 24px;}
.ptp-card .t{font-size:13px;letter-spacing:.18em;text-transform:uppercase;color:var(--mut);font-weight:800;margin:0 0 12px;}
.ptp-card .big{font-family:'Airstrike',Impact,sans-serif;font-size:clamp(26px,3.2vw,34px);color:#fff;line-height:1;margin:0 0 4px;text-transform:uppercase;}
.ptp-card p{margin:0 0 6px;color:#e6e6e6;font-size:16px;}
.ptp-card small{color:var(--mut);}
.ptp-card ul{margin:6px 0 0;padding-left:18px;}
.ptp-card li{color:#e6e6e6;font-size:15px;margin-bottom:9px;line-height:1.45;}
.ptp-card .lnk{display:inline-block;margin-top:12px;font-size:13px;font-weight:800;letter-spacing:.05em;text-transform:uppercase;color:#fff !important;text-decoration:none;border:1px solid rgba(255,255,255,.35);border-radius:40px;padding:9px 18px;transition:background .15s ease;}
.ptp-card .lnk:hover{background:rgba(255,255,255,.12);}
.ptp-poster{background:radial-gradient(100% 100% at 50% 0%,#1d1d1d 0%,#0a0a0a 70%);text-align:center;}
.ptp-poster img{max-width:520px;width:100%;height:auto;border-radius:14px;box-shadow:0 30px 70px rgba(0,0,0,.6);border:1px solid var(--line);}
.ptp-orgs{display:grid;grid-template-columns:repeat(2,1fr);gap:14px;}
.ptp-org{background:var(--bg2);border:1px solid var(--line);border-radius:14px;padding:22px 24px;}
.ptp-org .k{font-size:12px;letter-spacing:.2em;text-transform:uppercase;color:var(--mut);font-weight:700;margin:0 0 6px;}
.ptp-org .vv{font-size:19px;color:#fff;font-weight:700;margin:0;}
.ptp-badges{display:flex;flex-wrap:wrap;gap:30px;margin-top:34px;justify-content:center;}
.ptp-badge-item{margin:0;text-align:center;}
.ptp-badge-img{background:#fff;border-radius:16px;padding:18px 24px;display:flex;align-items:center;justify-content:center;min-height:128px;box-shadow:0 14px 36px rgba(0,0,0,.45);}
.ptp-badge-img img{max-height:96px;width:auto;max-width:230px;display:block;}
.ptp-badge-item figcaption{margin-top:14px;font-family:'Airstrike',Impact,"Arial Narrow",sans-serif;font-size:19px;letter-spacing:.05em;text-transform:uppercase;color:#fff;font-weight:700;}
.ptp-contact{background:var(--bg2);border-top:1px solid var(--line);}
.ptp-clist{display:grid;grid-template-columns:repeat(2,1fr);gap:16px 40px;margin:0 0 34px;}
.ptp-clist a{color:#fff;text-decoration:none;border-bottom:1px solid rgba(255,255,255,.3);}
.ptp-clist .k{font-size:12px;letter-spacing:.2em;text-transform:uppercase;color:var(--mut);font-weight:700;display:block;margin-bottom:4px;}
.ptp-clist .v{font-size:18px;color:#f0f0f0;}
.ptp-foot{background:#060606;padding:26px 0;text-align:center;color:var(--mut);font-size:13px;letter-spacing:.04em;}
@media(max-width:760px){.ptp-orgs,.ptp-grid,.ptp-grid-2,.ptp-clist{grid-template-columns:1fr;}.ptp-stat:first-child{border-right:none;border-bottom:1px solid var(--line);}.ptp-hero{min-height:88vh;background-position:center 24%;}.ptp-countdown{gap:8px;}.ptp-cd-box{min-width:0;flex:1 1 0;padding:10px 6px;}.ptp-cd-n{font-size:24px;}.ptp-cd-l{font-size:9px;letter-spacing:.1em;margin-top:6px;}}
.ptp-hero-spacer{display:flex;align-items:center;}
.ptp-hero-spon-wrap{width:100%;display:flex;justify-content:flex-end;}
.ptp-hero-spon{height:auto;max-height:150px;width:auto;filter:drop-shadow(0 6px 18px rgba(0,0,0,.55));}
@media(max-width:760px){.ptp-hero-spon{max-height:100px;}}
html{scroll-behavior:smooth;}
body{overflow-x:clip;}
::selection{background:#fff;color:#0a0a0a;}
::-moz-selection{background:#fff;color:#0a0a0a;}
html{scrollbar-width:thin;scrollbar-color:#3a3a3a #0a0a0a;}
::-webkit-scrollbar{width:12px;height:12px;}
::-webkit-scrollbar-track{background:#0a0a0a;}
::-webkit-scrollbar-thumb{background:#333;border-radius:8px;border:3px solid #0a0a0a;}
::-webkit-scrollbar-thumb:hover{background:#4d4d4d;}
.ptp-btn,.ptp-nav-cta,.ptp-nav-toggle,.lnk{cursor:pointer;}
.ptp-nav:not(.spying) .ptp-nav-links a[aria-current="page"],.ptp-nav-links a.ptp-spy{color:#fff;position:relative;}
.ptp-nav:not(.spying) .ptp-nav-links a[aria-current="page"]::after,.ptp-nav-links a.ptp-spy::after{content:"";position:absolute;left:0;right:0;bottom:-6px;height:2px;background:#fff;}
.ptp-fab{position:fixed;right:18px;bottom:18px;z-index:200;display:flex;flex-direction:column;align-items:flex-end;gap:12px;}
.ptp-fab a{text-decoration:none;}
.ptp-fab-wa{position:relative;width:58px;height:58px;border-radius:50%;background:#25d366;display:flex;align-items:center;justify-content:center;box-shadow:0 8px 24px rgba(0,0,0,.45);transition:transform .15s ease;}
.ptp-fab-wa::after{content:"";position:absolute;inset:0;border-radius:50%;background:#25d366;z-index:-1;animation:ptpwa 2.2s ease-out infinite;will-change:transform,opacity;}
@keyframes ptpwa{0%{transform:scale(1);opacity:.55;}70%{transform:scale(1.9);opacity:0;}100%{transform:scale(1.9);opacity:0;}}
@media(prefers-reduced-motion:reduce){.ptp-fab-wa::after{animation:none;}}
.ptp-fab-wa:hover{transform:scale(1.06);}
.ptp-fab-wa svg{width:32px;height:32px;fill:#fff;}
.ptp-fab-iscriviti{display:none;background:#fff !important;color:#0a0a0a !important;font-family:'Montserrat',sans-serif;font-weight:700;letter-spacing:.04em;text-transform:uppercase;font-size:14px;line-height:1;padding:15px 24px;border-radius:40px;box-shadow:0 8px 24px rgba(0,0,0,.45);}
@media(max-width:860px){.ptp-nav:not(.spying) .ptp-nav-links a[aria-current="page"]::after,.ptp-nav-links a.ptp-spy::after{display:none;}.ptp-nav:not(.spying) .ptp-nav-links a[aria-current="page"],.ptp-nav-links a.ptp-spy{box-shadow:inset 3px 0 0 #fff;}.ptp-fab-iscriviti{display:inline-block;}}
.ptp-nav{position:sticky;top:0;z-index:100;background:rgba(10,10,10,.96);border-bottom:1px solid rgba(255,255,255,.12);font-family:'Montserrat',-apple-system,sans-serif;}
.ptp-nav *{box-sizing:border-box;}
.ptp-nav-in{display:flex;align-items:center;justify-content:space-between;height:60px;}
.ptp-nav-brand{display:flex;align-items:center;text-decoration:none;color:#fff;}
.ptp-nav-brand .ptp-disp{font-size:20px;letter-spacing:.02em;color:#fff;}
.ptp-nav-links{display:flex;align-items:center;gap:26px;}
.ptp-nav a{color:#e6e6e6;text-decoration:none;}
.ptp-nav-links a{font-size:13px;font-weight:800;letter-spacing:.1em;text-transform:uppercase;transition:color .15s ease;}
.ptp-nav-links a:hover{color:#fff;}
.ptp-nav a.ptp-nav-cta{background:#fff !important;color:#0a0a0a !important;padding:9px 20px;border-radius:40px;}
.ptp-nav-toggle{display:none;flex-direction:column;justify-content:center;gap:5px;width:44px;height:44px;background:none;border:0;cursor:pointer;padding:0;}
.ptp-nav-toggle span{display:block;height:2px;width:24px;background:#fff;margin:0 auto;transition:transform .2s ease,opacity .2s ease;}
.ptp-nav.open .ptp-nav-toggle span:nth-child(1){transform:translateY(7px) rotate(45deg);}
.ptp-nav.open .ptp-nav-toggle span:nth-child(2){opacity:0;}
.ptp-nav.open .ptp-nav-toggle span:nth-child(3){transform:translateY(-7px) rotate(-45deg);}
@media(max-width:860px){
.ptp-nav-toggle{display:flex;}
.ptp-nav-links{position:absolute;left:0;right:0;top:60px;flex-direction:column;align-items:stretch;gap:0;background:#0d0d0d;border-bottom:1px solid rgba(255,255,255,.12);max-height:0;overflow:hidden;transition:max-height .3s ease;box-shadow:0 24px 40px rgba(0,0,0,.5);}
.ptp-nav.open .ptp-nav-links{max-height:82vh;}
.ptp-nav-links a{padding:17px 24px;border-top:1px solid rgba(255,255,255,.12);font-size:15px;}
.ptp-nav a.ptp-nav-cta{margin:14px 24px 18px;border-radius:40px;text-align:center;padding:15px 20px;}
}
section[id]{scroll-margin-top:76px;}
.mf-cursor{position:fixed;top:0;left:0;z-index:9999;contain:layout style size;pointer-events:none;will-change:transform;transition:opacity .3s ease,color .4s ease;color:#fff !important;mix-blend-mode:difference !important;}.mf-cursor.-pointer{color:#fff !important;}.mf-cursor.-pointer:before,.mf-cursor.-us-btn-style_1:before{animation:none !important;box-shadow:none !important;}.mf-cursor::before{content:"";position:absolute;top:-20px;left:-20px;display:block;width:40px;height:40px;transform:scale(.2);background:currentColor;border-radius:50%;transition:transform .25s ease-in-out,opacity .2s ease-in-out;}.mf-cursor.-pointer::before{transform:scale(.12);}.mf-cursor.-hidden::before{transform:scale(0);}.mf-cursor.-text::before{opacity:.85;transform:scale(2.3);}.mf-cursor.-text.-active::before{transform:scale(1.9);}.mf-cursor-text{position:absolute;top:-13px;left:-13px;width:26px;height:26px;display:flex;align-items:center;justify-content:center;font-size:11px;color:#0a0a0a;opacity:0;transition:opacity .4s;}.mf-cursor.-text .mf-cursor-text{opacity:1;}@media(pointer:coarse){.mf-cursor{display:none;}}
/* Menu sempre orizzontale: niente collasso hamburger */
.ptp-nav-toggle{display:none !important;}
.ptp-nav-links{position:static !important;top:auto !important;left:auto !important;right:auto !important;max-height:none !important;flex-direction:row !important;align-items:center !important;background:transparent !important;border:0 !important;box-shadow:none !important;flex:0 1 auto;min-width:0;overflow-x:auto;overflow-y:hidden;-webkit-overflow-scrolling:touch;scrollbar-width:none;}
.ptp-nav-links::-webkit-scrollbar{display:none;}
.ptp-nav-links a{border-top:0 !important;padding:0 !important;white-space:nowrap;}
.ptp-nav a.ptp-nav-cta{margin:0 !important;padding:9px 18px !important;white-space:nowrap;}
.ptp-nav-links a[aria-current="page"],.ptp-nav-links a.ptp-spy{box-shadow:none !important;}
.ptp-nav:not(.spying) .ptp-nav-links a[aria-current="page"]::after,.ptp-nav-links a.ptp-spy::after{display:block !important;position:absolute;left:0;right:0;bottom:-6px;height:2px;background:#fff;content:"";}
@media(max-width:900px){.ptp-nav-links{gap:16px !important;}.ptp-nav-links a{font-size:12px !important;letter-spacing:.06em !important;}.ptp-nav a.ptp-nav-cta{padding:8px 14px !important;}.ptp-nav-brand .ptp-disp{font-size:16px;}}
@media(max-width:560px){.ptp-nav-brand .ptp-disp{font-size:15px;}.ptp-nav-links{gap:13px !important;}.ptp-nav-links a{font-size:11.5px !important;}}
</style>
</head>
<body <?php body_class('ptp-body'); ?>>
<nav class="ptp-nav" id="ptp-nav">
  <div class="ptp-wrap ptp-nav-in">
    <a class="ptp-nav-brand" href="<?php echo esc_url( home_url('/') ); ?>"><span class="ptp-disp">PtP del Castello</span></a>
    <button class="ptp-nav-toggle" type="button" aria-label="Apri menu" aria-expanded="false"><span></span><span></span><span></span></button>
    <div class="ptp-nav-links" id="ptp-nav-links">
      <a href="<?php echo esc_url( home_url('/') ); ?>" aria-current="page">Evento</a>
      <a href="<?php echo esc_url( home_url('/') ); ?>#programma">Programma</a>
      <a href="<?php echo esc_url( home_url('/') ); ?>#info">Info utili</a>
      <a href="<?php echo esc_url( home_url('/') ); ?>#foto">Foto</a>
      <a href="<?php echo esc_url( home_url('/regolamento/') ); ?>">Regolamento</a>
      <a href="<?php echo esc_url( home_url('/') ); ?>#contatti">Contatti</a>
      <a class="ptp-nav-cta" href="https://www.speedpassitalia.it/sp/gara/campania/2026/1002" target="_blank" rel="noopener">Iscriviti</a>
    </div>
  </div>
</nav>
<div class="ptp-page">

  <header class="ptp-hero">
    <div class="ptp-hero-top">
      <div class="ptp-wrap ptp-hero-top-in">
        <span>9&ordf; Edizione &middot; Tappa ufficiale</span>
      </div>
    </div>
    <div class="ptp-hero-spacer">
      <div class="ptp-wrap ptp-hero-spon-wrap">
        <img class="ptp-hero-spon" src="https://ptpdelcastello.netsons.org/wp-content/uploads/2026/07/Frame-35.png" alt="Main Sponsor - Estasi Profumerie" width="1294" height="1493">
      </div>
    </div>
    <div class="ptp-hero-body">
      <div class="ptp-wrap">
        <p class="ptp-kicker">MTB Campania Championship</p>
        <div class="ptp-meta">
          <span class="ptp-disp ptp-date">5 Luglio 2026</span>
          <span class="ptp-place">Mignano Montelungo (CE)</span>
        </div>
        <h1 class="ptp-disp ptp-title">Point to Point<br>del Castello &#127984;</h1>
        <p class="ptp-tag">Diventa il RE&hellip; Riuscirai a sentire la campana &#128276; per primo?!</p>
        <div class="ptp-countdown" id="ptp-cd">
          <div class="ptp-cd-box"><span id="ptp-d" class="ptp-disp ptp-cd-n">--</span><span class="ptp-cd-l">Giorni</span></div>
          <div class="ptp-cd-box"><span id="ptp-h" class="ptp-disp ptp-cd-n">--</span><span class="ptp-cd-l">Ore</span></div>
          <div class="ptp-cd-box"><span id="ptp-m" class="ptp-disp ptp-cd-n">--</span><span class="ptp-cd-l">Min</span></div>
          <div class="ptp-cd-box"><span id="ptp-s" class="ptp-disp ptp-cd-n">--</span><span class="ptp-cd-l">Sec</span></div>
        </div>
        <div class="ptp-cta">
          <a class="ptp-btn ptp-btn-1" href="https://www.speedpassitalia.it/sp/gara/campania/2026/1002" target="_blank" rel="noopener">Iscriviti ora</a>
          <a class="ptp-btn ptp-btn-2" href="<?php echo esc_url(home_url('/regolamento/')); ?>">Regolamento</a>
        </div>
      </div>
    </div>
  </header>

  <section class="ptp-stats">
    <div class="ptp-wrap">
      <div class="ptp-stat"><span class="l">Distanza</span><span class="ptp-disp v">37<span> km</span></span></div>
      <div class="ptp-stat"><span class="l">Dislivello</span><span class="ptp-disp v">1100<span> D+</span></span></div>
    </div>
  </section>

  <section class="ptp-sec" id="programma">
    <div class="ptp-wrap">
      <h2 class="ptp-disp ptp-h2">Programma di gara</h2>
      <p class="ptp-lead">Domenica 5 luglio 2026 &mdash; Castello E. Fieramosca, Mignano Montelungo (CE)</p>
      <div class="ptp-grid">
        <div class="ptp-card"><p class="t">Ritrovo</p><p class="big">Castello E. Fieramosca</p><p><small>Mignano Montelungo (CE)</small></p></div>
        <div class="ptp-card"><p class="t">Iscrizioni e ritiro pacco gara</p><p class="big">07:00</p><p><small>presso il ritrovo</small></p></div>
        <div class="ptp-card"><p class="t">Start gara</p><p class="big">09:00</p><p><small>partenza ufficiale</small></p></div>
      </div>
    </div>
  </section>

  <section class="ptp-sec" id="info">
    <div class="ptp-wrap">
      <h2 class="ptp-disp ptp-h2">Info utili</h2>
      <p class="ptp-lead">Come raggiungere il ritrovo, dove parcheggiare e la traccia del percorso</p>
      <div class="ptp-grid-2">
        <div class="ptp-card">
          <p class="t">Come raggiungerci</p>
          <p>Castello E. Fieramosca &mdash; Mignano Montelungo (CE)</p>
          <p><small>In auto dall'A1: da Roma direzione Napoli, uscita <b>San Vittore</b>. Da Napoli direzione Roma, uscita <b>Caianello</b>.</small></p>
          <a class="lnk" href="https://maps.app.goo.gl/1SY2xoeHxkRmSafm7" target="_blank" rel="noopener">Apri nel navigatore</a>
        </div>
        <div class="ptp-card">
          <p class="t">Dove parcheggiare</p>
          <p>Presso <b>Piazza Mercato</b>, a pochi passi dal ritrovo.</p>
          <a class="lnk" href="https://maps.app.goo.gl/kpqKcg9m69eWbfHz9" target="_blank" rel="noopener">Apri nel navigatore</a>
        </div>
        <div class="ptp-card">
          <p class="t">Iscrizioni in loco</p>
          <p>Possibili anche la mattina della gara (5 luglio 2026) dalle <b>ore 07:00</b> presso il Castello Ettore Fieramosca.</p>
          <a class="lnk" href="https://www.speedpassitalia.it/sp/gara/campania/2026/1002" target="_blank" rel="noopener">Iscriviti online</a>
        </div>
        <div class="ptp-card">
          <p class="t">Traccia percorso (GPX)</p>
          <p>Scarica la traccia ufficiale del percorso da caricare sul tuo dispositivo GPS.</p>
          <a class="lnk" href="https://ptpdelcastello.netsons.org/wp-content/uploads/traccia-gpx/Morning_Mountain_Bike_Ride_Point_to_Point_del_Castello_percorso_ufficiale-trimmed.gpx" target="_blank" rel="noopener">Scarica GPX</a>
        </div>
      </div>
    </div>
  </section>

  <section class="ptp-sec ptp-poster">
    <div class="ptp-wrap">
      <h2 class="ptp-disp ptp-h2">Locandina ufficiale</h2>
      <p class="ptp-lead">Scarica e condividi la locandina dell'evento</p>
      <a href="https://ptpdelcastello.netsons.org/wp-content/uploads/2026/05/Locandina-V2-scaled.png" target="_blank" rel="noopener"><img src="https://ptpdelcastello.netsons.org/wp-content/uploads/2026/05/Locandina-V2-scaled.png" alt="Locandina Point to Point del Castello 2026"></a>
    </div>
  </section>

  <section class="ptp-sec">
    <div class="ptp-wrap">
      <h2 class="ptp-disp ptp-h2">Organizzazione &amp; Partner</h2>
      <p class="ptp-lead">Un evento reso possibile da societ&agrave;, sponsor ed enti del territorio</p>
      <div class="ptp-orgs">
        <div class="ptp-org"><p class="k">Societ&agrave; organizzatrici</p><p class="vv">ASD Estasi MTB &middot; Real Mignano</p></div>
        <div class="ptp-org"><p class="k">Main Sponsor</p><p class="vv">Estasi Profumerie</p></div>
        <div class="ptp-org"><p class="k">Patrocinio</p><p class="vv">Comune di Mignano Monte Lungo</p></div>
        <div class="ptp-org"><p class="k">Ente promotore</p><p class="vv">CSI &middot; Comitato di Sessa Aurunca</p></div>
        <div class="ptp-org"><p class="k">Sponsor tecnici</p><p class="vv">SL &middot; Evolution Bikes &middot; Pianeta Bici</p></div>
        <div class="ptp-org"><p class="k">Circuito</p><p class="vv">MTB Campania Championship 2026</p></div>
      </div>
      <div class="ptp-badges">
        <figure class="ptp-badge-item">
          <div class="ptp-badge-img"><img src="https://ptpdelcastello.netsons.org/wp-content/uploads/2026/06/Tappa-Ufficiale-MTB-Centro-Italia-Race-Cup.png" alt="Tappa Ufficiale - MTB Centro Italia Race Cup"></div>
          <figcaption>Tappa ufficiale</figcaption>
        </figure>
        <figure class="ptp-badge-item">
          <div class="ptp-badge-img"><img src="https://ptpdelcastello.netsons.org/wp-content/uploads/2026/06/Circuito-MTB-Campania-Championship-2026.png" alt="Circuito MTB Campania Championship 2026"></div>
          <figcaption>Circuito 2026</figcaption>
        </figure>
      </div>
    </div>
  </section>

  <section class="ptp-sec">
    <div class="ptp-wrap">
      <h2 class="ptp-disp ptp-h2">Note per gli atleti</h2>
      <p class="ptp-lead">Traccia del percorso, regole di comportamento e servizi</p>
      <div class="ptp-grid">
        <div class="ptp-card">
          <p class="t">&#128506;&#65039; Traccia GPX disponibile</p>
          <p>Scarica la traccia GPX del percorso ufficiale.</p>
          <p><small>&#9888;&#65039; La traccia potrebbe subire variazioni la mattina della gara per motivi di sicurezza. Il percorso sar&agrave; comunque segnalato in ogni punto da frecce, nastri e tabelle: rispetta sempre la segnaletica! &#128681;</small></p>
          <a class="lnk" href="https://ptpdelcastello.netsons.org/wp-content/uploads/traccia-gpx/Morning_Mountain_Bike_Ride_Point_to_Point_del_Castello_percorso_ufficiale-trimmed.gpx" target="_blank" rel="noopener">Scarica GPX</a>
        </div>
        <div class="ptp-card">
          <p class="t">&#128203; Regole da rispettare</p>
          <ul>
            <li>&#128663; Rispetta il Codice della Strada e mantieni sempre la destra nei tratti aperti al traffico, salvo diversa segnalazione.</li>
            <li>&#127969; Rispetta il passaggio nelle propriet&agrave; private.</li>
            <li>&#127807; Vietato abbandonare rifiuti lungo il percorso: siamo atleti rispettosi dell'ambiente! &#9851;&#65039;</li>
          </ul>
        </div>
        <div class="ptp-card">
          <p class="t">&#128703; Servizi al traguardo</p>
          <p>&#128703; Servizio <b>doccia</b> disponibile per tutti gli atleti.</p>
          <p>&#127837; <b>Pasta party</b> per tutti, atleti e accompagnatori! &#127881;</p>
        </div>
      </div>
    </div>
  </section>

  <section class="ptp-sec" id="foto">
    <div class="ptp-wrap">
      <h2 class="ptp-disp ptp-h2">Foto</h2>
      <p class="ptp-lead">La galleria fotografica dell'evento sar&agrave; disponibile qui a breve.</p>
      <div class="ptp-card"><p class="t">&#128248; Galleria in arrivo</p><p>Le migliori immagini della Point to Point del Castello 2026 verranno pubblicate dopo la gara. Torna a trovarci!</p></div>
    </div>
  </section>

  <section class="ptp-sec ptp-contact" id="contatti">
    <div class="ptp-wrap">
      <h2 class="ptp-disp ptp-h2">Contatti &amp; Iscrizioni</h2>
      <p class="ptp-lead">Per informazioni e iscrizioni contattaci o vai alla piattaforma ufficiale</p>
      <div class="ptp-clist">
        <div><span class="k">Email</span><span class="v"><a href="mailto:estasimtbmignano@gmail.com">estasimtbmignano@gmail.com</a></span></div>
        <div><span class="k">Telefono</span><span class="v"><a href="tel:+393356092073">+39 335 609 2073</a> &middot; <a href="tel:+393458335726">+39 345 833 5726</a></span></div>
        <div><span class="k">WhatsApp</span><span class="v"><a href="https://wa.me/393458335726?text=Ciao%20sono%20interessato%20a%20info%20sulla%20Point%20to%20Point%20del%20castello" target="_blank" rel="noopener">Scrivici su WhatsApp</a></span></div>
        <div><span class="k">Instagram</span><span class="v"><a href="https://instagram.com/estasimtb" target="_blank" rel="noopener">@estasimtb</a></span></div>
        <div><span class="k">Facebook</span><span class="v"><a href="https://facebook.com/ASDEstasiMTB" target="_blank" rel="noopener">ASDEstasiMTB</a></span></div>
      </div>
      <div class="ptp-cta">
        <a class="ptp-btn ptp-btn-1" href="https://www.speedpassitalia.it/sp/gara/campania/2026/1002" target="_blank" rel="noopener">Vai alle iscrizioni</a>
      </div>
    </div>
  </section>

  <footer class="ptp-foot">
    <div class="ptp-wrap">&copy; 2026 Point to Point del Castello &middot; ASD Estasi MTB</div>
  </footer>

</div>
<script>
(function(){
  var target = new Date("2026-07-05T09:00:00+02:00").getTime();
  function pad(n){ return (n<10?"0":"")+n; }
  function set(id,val){ var el=document.getElementById(id); if(el){ el.textContent=val; } }
  function tick(){
    var diff = target - new Date().getTime();
    var box = document.getElementById("ptp-cd");
    if(diff<=0){ if(box){ box.innerHTML='<span class="ptp-cd-live">Evento in corso! &#127937;</span>'; } return; }
    set("ptp-d",Math.floor(diff/86400000));
    set("ptp-h",pad(Math.floor((diff%86400000)/3600000)));
    set("ptp-m",pad(Math.floor((diff%3600000)/60000)));
    set("ptp-s",pad(Math.floor((diff%60000)/1000)));
  }
  tick(); setInterval(tick,1000);
})();
</script>
<script>
(function(){var nav=document.getElementById('ptp-nav');if(!nav)return;var btn=nav.querySelector('.ptp-nav-toggle');function set(o){nav.classList.toggle('open',o);if(btn){btn.setAttribute('aria-expanded',o?'true':'false');btn.setAttribute('aria-label',o?'Chiudi menu':'Apri menu');}}if(btn){btn.addEventListener('click',function(){set(!nav.classList.contains('open'));});}nav.querySelectorAll('.ptp-nav-links a').forEach(function(a){a.addEventListener('click',function(){set(false);});});})();
</script>
<div class="ptp-fab">
  <a class="ptp-fab-iscriviti" href="https://www.speedpassitalia.it/sp/gara/campania/2026/1002" target="_blank" rel="noopener">Iscriviti</a>
  <a class="ptp-fab-wa" href="https://wa.me/393458335726?text=Ciao%20sono%20interessato%20a%20info%20sulla%20Point%20to%20Point%20del%20castello" target="_blank" rel="noopener" aria-label="Scrivici su WhatsApp"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.207-.242-.579-.487-.5-.669-.51l-.57-.01c-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg></a>
</div>
<script>
(function(){var nav=document.getElementById('ptp-nav');if(!nav)return;var links=[].slice.call(nav.querySelectorAll('.ptp-nav-links a'));var topLink=nav.querySelector('.ptp-nav-links a[aria-current="page"]');var map={};links.forEach(function(a){var h=a.getAttribute('href')||'';var i=h.indexOf('#');if(i>=0){var id=h.slice(i+1);if(id&&document.getElementById(id))map[id]=a;}});var ids=Object.keys(map);if(!ids.length)return;nav.classList.add('spying');function setA(a){links.forEach(function(x){x.classList.remove('ptp-spy');});if(a)a.classList.add('ptp-spy');}var secs=[];function measure(){secs=ids.map(function(id){var el=document.getElementById(id);return{a:map[id],top:el.offsetTop,bot:el.offsetTop+el.offsetHeight};});}function update(){var mid=window.pageYOffset+window.innerHeight*0.4;var cur=null;secs.forEach(function(s){if(s.top<=mid&&s.bot>mid)cur=s.a;});if(!cur){var y=window.pageYOffset+90;secs.forEach(function(s){if(s.top<=y)cur=s.a;});}setA(cur||topLink);}var tick=false;function onScroll(){if(tick)return;tick=true;requestAnimationFrame(function(){update();tick=false;});}measure();update();window.addEventListener('scroll',onScroll,{passive:true});window.addEventListener('resize',function(){measure();update();},{passive:true});window.addEventListener('load',function(){measure();update();});})();
</script>
<?php
/* Disattiva Lenis (smooth scroll), cursore custom e GSAP del tema su questa pagina standalone: causavano scroll lento */
if(function_exists('wp_dequeue_script')){foreach(array('gsap-js-scroll','gsap-js-smooth','gsap-js-observer','gsap-js-text','gsap-js-split','gsap-js-draw','gsap-js-motion','gsap-js-custom') as $h){wp_dequeue_script($h);wp_deregister_script($h);}}
?>
<?php wp_footer(); ?>
<script type="module">
import MouseFollower from "<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/minified/MouseFollower.min.js";
if(window.matchMedia&&window.matchMedia('(pointer:fine)').matches){window.addEventListener('load',function(){try{if(window.gsap)MouseFollower.registerGSAP(window.gsap);new MouseFollower({speed:0.55});}catch(e){console.warn('MF',e);}});}
</script>
</body>
</html>
