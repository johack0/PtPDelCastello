<?php
/**
 * Template Name: PtP del Castello - Classifiche
 * Description: Classifiche ufficiali 9a edizione (assoluta muscolare + categorie), stile coerente con la locandina.
 */
if (!defined('ABSPATH')) { exit; }
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Classifiche 2026 - Point to Point del Castello</title>
<meta name="description" content="Classifiche ufficiali della 9&ordf; edizione Point to Point del Castello - 5 luglio 2026. Assoluta e categorie.">
<meta name="robots" content="index,follow">
<meta property="og:type" content="website">
<meta property="og:locale" content="it_IT">
<meta property="og:site_name" content="Point to Point del Castello">
<meta property="og:title" content="Classifiche 2026 - Point to Point del Castello">
<meta property="og:description" content="Classifiche ufficiali della 9&ordf; edizione - 5 luglio 2026. Assoluta e categorie.">
<meta property="og:url" content="<?php echo esc_url( home_url('/classifiche/') ); ?>">
<meta property="og:image" content="https://ptpdelcastello.netsons.org/wp-content/uploads/2026/06/Point-to-Point-del-Castello-2026-Condivisione.jpg">
<meta name="twitter:card" content="summary_large_image">
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
.ptp-btn{display:inline-block;font-family:'Montserrat',-apple-system,sans-serif;padding:15px 32px;border-radius:50px;font-weight:800;letter-spacing:.08em;text-transform:uppercase;font-size:15px;text-decoration:none;transition:transform .15s ease,box-shadow .15s ease;}
.ptp-page a.ptp-btn-1{background:#fff !important;color:#0a0a0a !important;box-shadow:0 10px 30px rgba(0,0,0,.5);}
.ptp-page a.ptp-btn-2{background:rgba(255,255,255,.08);color:#fff !important;border:2px solid rgba(255,255,255,.4);}
.ptp-btn:hover{transform:translateY(-2px);}
.ptp-sec{padding:64px 0;}
.ptp-h2{font-size:clamp(28px,5vw,46px);margin:0 0 8px;color:#fff;}
.ptp-lead{color:var(--mut);margin:0 0 36px;font-size:17px;letter-spacing:.02em;}
.ptp-foot{background:#060606;padding:26px 0;text-align:center;color:var(--mut);font-size:13px;letter-spacing:.04em;}
html{scroll-behavior:smooth;}
body{overflow-x:clip;}
::selection{background:#fff;color:#0a0a0a;}
::-moz-selection{background:#fff;color:#0a0a0a;}
html{scrollbar-width:thin;scrollbar-color:#3a3a3a #0a0a0a;}
::-webkit-scrollbar{width:12px;height:12px;}
::-webkit-scrollbar-track{background:#0a0a0a;}
::-webkit-scrollbar-thumb{background:#333;border-radius:8px;border:3px solid #0a0a0a;}
::-webkit-scrollbar-thumb:hover{background:#4d4d4d;}
.ptp-btn,.ptp-nav-cta,.ptp-nav-toggle{cursor:pointer;}
/* --- Header pagina classifiche --- */
.ptp-clsf-hero{position:relative;background:#060606 url('https://ptpdelcastello.netsons.org/wp-content/uploads/2026/06/PtP-Hero-Ciclista-Castello.png') center 22%/cover no-repeat;padding:64px 0 48px;text-align:center;}
.ptp-clsf-hero::before{content:"";position:absolute;inset:0;background:linear-gradient(0deg,rgba(0,0,0,.96) 0%,rgba(0,0,0,.6) 60%,rgba(0,0,0,.55) 100%);}
.ptp-clsf-hero>*{position:relative;z-index:2;}
.ptp-clsf-kicker{font-size:13px;letter-spacing:.26em;text-transform:uppercase;color:var(--mut);font-weight:700;margin:0 0 12px;}
.ptp-clsf-title{font-size:clamp(40px,8vw,90px);margin:0;color:#fff;text-shadow:0 8px 36px rgba(0,0,0,.7);}
.ptp-clsf-sub{color:#e6e6e6;margin:14px 0 0;font-size:16px;letter-spacing:.02em;}
/* --- Podio --- */
.ptp-podium{display:grid;grid-template-columns:repeat(3,1fr);gap:16px;max-width:820px;margin:40px auto 0;}
.ptp-pod{background:var(--bg2);border:1px solid var(--line);border-radius:16px;padding:24px 16px;text-align:center;position:relative;}
.ptp-pod .medal{font-size:30px;line-height:1;display:block;margin-bottom:8px;}
.ptp-pod .pnome{font-family:'Airstrike',Impact,sans-serif;font-size:clamp(17px,2.2vw,21px);color:#fff;text-transform:uppercase;line-height:1.05;margin:0 0 6px;}
.ptp-pod .pcat{font-size:12px;letter-spacing:.14em;text-transform:uppercase;color:var(--mut);font-weight:700;}
.ptp-pod .ptempo{font-family:'Airstrike',Impact,sans-serif;font-size:22px;color:#fff;margin-top:10px;}
.ptp-pod.p1{border-color:rgba(255,215,0,.55);box-shadow:0 0 0 1px rgba(255,215,0,.25) inset;transform:translateY(-10px);order:2;}
.ptp-pod.p2{border-color:rgba(199,199,199,.45);order:1;}
.ptp-pod.p3{border-color:rgba(205,127,50,.5);order:3;}
/* --- Tabs --- */
.ptp-tabs{display:flex;justify-content:center;gap:10px;margin:0 0 34px;flex-wrap:wrap;}
.ptp-tab{background:rgba(255,255,255,.06);color:#e6e6e6;border:1px solid var(--line);border-radius:50px;padding:12px 28px;font-weight:800;letter-spacing:.08em;text-transform:uppercase;font-size:13px;cursor:pointer;transition:background .15s ease,color .15s ease;font-family:'Montserrat',sans-serif;}
.ptp-tab:hover{background:rgba(255,255,255,.12);}
.ptp-tab.active{background:#fff;color:#0a0a0a;}
.ptp-panel{display:none;}
.ptp-panel.active{display:block;}
/* --- Tabelle --- */
.ptp-twrap{overflow-x:auto;border:1px solid var(--line);border-radius:14px;background:var(--bg2);-webkit-overflow-scrolling:touch;}
.ptp-tbl{width:100%;border-collapse:collapse;font-size:14.5px;min-width:640px;}
.ptp-tbl thead th{position:sticky;top:0;background:#111;color:var(--mut);font-size:11px;letter-spacing:.14em;text-transform:uppercase;font-weight:800;text-align:left;padding:14px 14px;border-bottom:1px solid var(--line);white-space:nowrap;}
.ptp-tbl td{padding:12px 14px;border-bottom:1px solid rgba(255,255,255,.07);color:#e6e6e6;}
.ptp-tbl tbody tr:last-child td{border-bottom:none;}
.ptp-tbl tbody tr:nth-child(even){background:rgba(255,255,255,.02);}
.ptp-tbl tbody tr:hover{background:rgba(255,255,255,.06);}
.ptp-tbl td.pos{font-family:'Airstrike',Impact,sans-serif;font-size:16px;color:#fff;width:44px;text-align:center;}
.ptp-tbl td.nome{color:#fff;font-weight:600;white-space:nowrap;}
.ptp-tbl td.tempo{font-variant-numeric:tabular-nums;white-space:nowrap;color:#fff;}
.ptp-tbl td.gap,.ptp-tbl td.pt{font-variant-numeric:tabular-nums;color:var(--mut);white-space:nowrap;}
.ptp-tbl td.media{font-variant-numeric:tabular-nums;color:#e6e6e6;white-space:nowrap;}
.ptp-tbl tbody tr:nth-child(1) td.pos{color:#ffd700;}
.ptp-tbl tbody tr:nth-child(2) td.pos{color:#c7c7c7;}
.ptp-tbl tbody tr:nth-child(3) td.pos{color:#cd7f32;}
.ptp-cat-block{margin:0 0 30px;}
.ptp-cat-h{font-size:clamp(22px,3vw,30px);color:#fff;margin:0 0 14px;padding-left:2px;}
.ptp-note{color:var(--mut);font-size:13px;margin:22px 0 0;line-height:1.6;}
.ptp-note a{color:#fff;}
.ptp-clsf-cta{text-align:center;margin-top:40px;}
@media(max-width:760px){
.ptp-podium{grid-template-columns:1fr;max-width:360px;gap:12px;}
.ptp-pod.p1{transform:none;}
.ptp-pod.p1,.ptp-pod.p2,.ptp-pod.p3{order:0;}
.ptp-tbl{font-size:13.5px;}
}
/* --- Nav (identica alla locandina) --- */
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
.ptp-nav-links a[aria-current="page"]{color:#fff;position:relative;}
.ptp-nav-links a[aria-current="page"]::after{content:"";position:absolute;left:0;right:0;bottom:-6px;height:2px;background:#fff;}
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
.ptp-nav-links a[aria-current="page"]::after{display:none;}
.ptp-nav-links a[aria-current="page"]{box-shadow:inset 3px 0 0 #fff;}
.ptp-nav a.ptp-nav-cta{margin:14px 24px 18px;border-radius:40px;text-align:center;padding:15px 20px;}
}
@media(min-width:861px) and (max-width:1080px){.ptp-nav-links{gap:16px;}.ptp-nav-links a{font-size:12px;letter-spacing:.05em;}.ptp-nav a.ptp-nav-cta{padding:8px 14px;}}
@media(max-width:860px){.ptp-nav-brand .ptp-disp{font-size:15px;}}
@media(max-width:560px){.ptp-nav-brand .ptp-disp{font-size:13px;}}
/* --- FAB (identica) --- */
.ptp-fab{position:fixed;right:18px;bottom:18px;z-index:200;display:flex;flex-direction:column;align-items:flex-end;gap:12px;}
.ptp-fab a{text-decoration:none;}
.ptp-fab-wa{position:relative;width:58px;height:58px;border-radius:50%;background:#25d366;display:flex;align-items:center;justify-content:center;box-shadow:0 8px 24px rgba(0,0,0,.45);transition:transform .15s ease;}
.ptp-fab-wa::after{content:"";position:absolute;inset:0;border-radius:50%;background:#25d366;z-index:-1;animation:ptpwa 2.2s ease-out infinite;will-change:transform,opacity;}
@keyframes ptpwa{0%{transform:scale(1);opacity:.55;}70%{transform:scale(1.9);opacity:0;}100%{transform:scale(1.9);opacity:0;}}
@media(prefers-reduced-motion:reduce){.ptp-fab-wa::after{animation:none;}}
.ptp-fab-wa:hover{transform:scale(1.06);}
.ptp-fab-wa svg{width:32px;height:32px;fill:#fff;}
.ptp-fab-iscriviti{display:none;background:#fff !important;color:#0a0a0a !important;font-family:'Montserrat',sans-serif;font-weight:700;letter-spacing:.04em;text-transform:uppercase;font-size:14px;line-height:1;padding:15px 24px;border-radius:40px;box-shadow:0 8px 24px rgba(0,0,0,.45);}
@media(max-width:860px){.ptp-fab-iscriviti{display:inline-block;}}
</style>
</head>
<body <?php body_class('ptp-body'); ?>>
<nav class="ptp-nav" id="ptp-nav">
  <div class="ptp-wrap ptp-nav-in">
    <a class="ptp-nav-brand" href="<?php echo esc_url( home_url('/') ); ?>"><span class="ptp-disp">PtP del Castello</span></a>
    <button class="ptp-nav-toggle" type="button" aria-label="Apri menu" aria-expanded="false"><span></span><span></span><span></span></button>
    <div class="ptp-nav-links" id="ptp-nav-links">
      <a href="<?php echo esc_url( home_url('/') ); ?>#programma">Programma</a>
      <a href="<?php echo esc_url( home_url('/') ); ?>#info">Info</a>
      <a href="<?php echo esc_url( home_url('/foto/') ); ?>">Foto</a>
      <a href="<?php echo esc_url( home_url('/regolamento/') ); ?>">Regolamento</a>
      <a href="<?php echo esc_url( home_url('/') ); ?>#contatti">Contatti</a>
      <a class="ptp-nav-cta" href="<?php echo esc_url( home_url('/classifiche/') ); ?>" aria-current="page">Classifiche</a>
    </div>
  </div>
</nav>
<div class="ptp-page">

  <header class="ptp-clsf-hero">
    <div class="ptp-wrap">
      <p class="ptp-clsf-kicker">9&ordf; Edizione &middot; 5 Luglio 2026 &middot; Mignano Montelungo (CE)</p>
      <h1 class="ptp-disp ptp-clsf-title">Classifiche 2026 &#127942;</h1>
      <p class="ptp-clsf-sub">Risultati ufficiali della Point to Point del Castello &mdash; 32 km / 1100 D+</p>
      <div class="ptp-podium">
        <div class="ptp-pod p1"><span class="medal">&#129351;</span><p class="pnome">Prete Luca</p><span class="pcat">M2</span><div class="ptempo">01:39:58</div></div>
        <div class="ptp-pod p2"><span class="medal">&#129352;</span><p class="pnome">Falasca Antonio</p><span class="pcat">ELM</span><div class="ptempo">01:42:18</div></div>
        <div class="ptp-pod p3"><span class="medal">&#129353;</span><p class="pnome">Pensiero Giovanni</p><span class="pcat">M4</span><div class="ptempo">01:42:20</div></div>
      </div>
    </div>
  </header>

  <section class="ptp-sec">
    <div class="ptp-wrap">
      <div class="ptp-tabs" role="tablist">
        <button class="ptp-tab active" data-panel="assoluta" role="tab" aria-selected="true">Assoluta</button>
        <button class="ptp-tab" data-panel="categorie" role="tab" aria-selected="false">Per categoria</button>
      </div>

      <div class="ptp-panel active" id="panel-assoluta" role="tabpanel">
        <h2 class="ptp-disp ptp-h2">Classifica assoluta</h2>
        <p class="ptp-lead">Classifica generale muscolare &mdash; 102 atleti classificati. Le e-bike sono classificate a parte (vedi &laquo;Per categoria&raquo;).</p>
        <div class="ptp-twrap">
        <table class="ptp-tbl">
          <thead><tr><th>Pos</th><th>Pett.</th><th>Atleta</th><th>Cat.</th><th>Tempo</th><th>Distacco</th><th>Media</th></tr></thead>
          <tbody>
        <tr><td class="pos">1</td><td>168</td><td class="nome">Prete Luca</td><td>M2</td><td class="tempo">01:39:58</td><td class="gap"></td><td class="media">22.207</td></tr>
        <tr><td class="pos">2</td><td>77</td><td class="nome">Falasca Antonio</td><td>ELM</td><td class="tempo">01:42:18</td><td class="gap">+00:02:20</td><td class="media">21.698</td></tr>
        <tr><td class="pos">3</td><td>99</td><td class="nome">Pensiero Giovanni</td><td>M4</td><td class="tempo">01:42:20</td><td class="gap">+00:02:22</td><td class="media">21.690</td></tr>
        <tr><td class="pos">4</td><td>161</td><td class="nome">Marra Alessandro</td><td>M1</td><td class="tempo">01:44:37</td><td class="gap">+00:04:38</td><td class="media">21.220</td></tr>
        <tr><td class="pos">5</td><td>24</td><td class="nome">Caroselli Davide</td><td>M2</td><td class="tempo">01:44:54</td><td class="gap">+00:04:56</td><td class="media">21.161</td></tr>
        <tr><td class="pos">6</td><td>1</td><td class="nome">Baris Mario</td><td>M2</td><td class="tempo">01:44:57</td><td class="gap">+00:04:59</td><td class="media">21.150</td></tr>
        <tr><td class="pos">7</td><td>5</td><td class="nome">Pagliarini Patrizio</td><td>M2</td><td class="tempo">01:45:28</td><td class="gap">+00:05:29</td><td class="media">21.049</td></tr>
        <tr><td class="pos">8</td><td>42</td><td class="nome">Girardi Giuseppe</td><td>ELM</td><td class="tempo">01:45:34</td><td class="gap">+00:05:35</td><td class="media">21.029</td></tr>
        <tr><td class="pos">9</td><td>163</td><td class="nome">Cellini Alessio</td><td>M3</td><td class="tempo">01:46:13</td><td class="gap">+00:06:14</td><td class="media">20.900</td></tr>
        <tr><td class="pos">10</td><td>133</td><td class="nome">Lanni Danilo</td><td>M2</td><td class="tempo">01:46:58</td><td class="gap">+00:07:00</td><td class="media">20.752</td></tr>
        <tr><td class="pos">11</td><td>131</td><td class="nome">Fauceglia Matteo</td><td>ELM</td><td class="tempo">01:46:59</td><td class="gap">+00:07:01</td><td class="media">20.750</td></tr>
        <tr><td class="pos">12</td><td>121</td><td class="nome">Marotta Felice</td><td>M2</td><td class="tempo">01:47:22</td><td class="gap">+00:07:23</td><td class="media">20.676</td></tr>
        <tr><td class="pos">13</td><td>62</td><td class="nome">Biasiucci Giovanni Pietro</td><td>M3</td><td class="tempo">01:48:08</td><td class="gap">+00:08:10</td><td class="media">20.529</td></tr>
        <tr><td class="pos">14</td><td>91</td><td class="nome">La Rocca Alessandro</td><td>M3</td><td class="tempo">01:48:40</td><td class="gap">+00:08:42</td><td class="media">20.427</td></tr>
        <tr><td class="pos">15</td><td>172</td><td class="nome">De Santis Michele</td><td>M5</td><td class="tempo">01:48:59</td><td class="gap">+00:09:01</td><td class="media">20.367</td></tr>
        <tr><td class="pos">16</td><td>93</td><td class="nome">Masella Raffaele</td><td>M3</td><td class="tempo">01:49:54</td><td class="gap">+00:09:55</td><td class="media">20.200</td></tr>
        <tr><td class="pos">17</td><td>100</td><td class="nome">Picano Giovanni</td><td>M3</td><td class="tempo">01:50:42</td><td class="gap">+00:10:44</td><td class="media">20.052</td></tr>
        <tr><td class="pos">18</td><td>134</td><td class="nome">Vecchio Ciccolella Christofer</td><td>M4</td><td class="tempo">01:51:41</td><td class="gap">+00:11:43</td><td class="media">19.877</td></tr>
        <tr><td class="pos">19</td><td>145</td><td class="nome">Di Fonzo Antonio</td><td>M2</td><td class="tempo">01:51:43</td><td class="gap">+00:11:44</td><td class="media">19.871</td></tr>
        <tr><td class="pos">20</td><td>23</td><td class="nome">Bimbato Alessandro</td><td>M4</td><td class="tempo">01:55:04</td><td class="gap">+00:15:05</td><td class="media">19.293</td></tr>
        <tr><td class="pos">21</td><td>192</td><td class="nome">Tomassi Davide</td><td>ELM</td><td class="tempo">01:55:44</td><td class="gap">+00:15:45</td><td class="media">19.182</td></tr>
        <tr><td class="pos">22</td><td>51</td><td class="nome">Acciardo Giuseppe</td><td>M4</td><td class="tempo">01:56:21</td><td class="gap">+00:16:22</td><td class="media">19.080</td></tr>
        <tr><td class="pos">23</td><td>12</td><td class="nome">Schiavone Giuseppe</td><td>M2</td><td class="tempo">01:56:41</td><td class="gap">+00:16:43</td><td class="media">19.024</td></tr>
        <tr><td class="pos">24</td><td>49</td><td class="nome">Cozzolino Luigi</td><td>M5</td><td class="tempo">01:57:16</td><td class="gap">+00:17:18</td><td class="media">18.929</td></tr>
        <tr><td class="pos">25</td><td>67</td><td class="nome">Giardiello Antonio</td><td>M2</td><td class="tempo">01:57:28</td><td class="gap">+00:17:30</td><td class="media">18.897</td></tr>
        <tr><td class="pos">26</td><td>63</td><td class="nome">Granata Danilo</td><td>M3</td><td class="tempo">01:57:37</td><td class="gap">+00:17:39</td><td class="media">18.873</td></tr>
        <tr><td class="pos">27</td><td>7</td><td class="nome">Golino Pasquale</td><td>M3</td><td class="tempo">01:57:56</td><td class="gap">+00:17:58</td><td class="media">18.823</td></tr>
        <tr><td class="pos">28</td><td>171</td><td class="nome">Pompili Emanuele</td><td>M6</td><td class="tempo">01:58:19</td><td class="gap">+00:18:20</td><td class="media">18.763</td></tr>
        <tr><td class="pos">29</td><td>21</td><td class="nome">Sorbo Ferdinando</td><td>M5</td><td class="tempo">01:59:01</td><td class="gap">+00:19:03</td><td class="media">18.651</td></tr>
        <tr><td class="pos">30</td><td>135</td><td class="nome">D'Alessandro Alexander</td><td>M2</td><td class="tempo">01:59:12</td><td class="gap">+00:19:14</td><td class="media">18.622</td></tr>
        <tr><td class="pos">31</td><td>45</td><td class="nome">Tempesta Ivan</td><td>M5</td><td class="tempo">01:59:34</td><td class="gap">+00:19:35</td><td class="media">18.567</td></tr>
        <tr><td class="pos">32</td><td>2</td><td class="nome">Montaquila Salvatore</td><td>M5</td><td class="tempo">01:59:42</td><td class="gap">+00:19:44</td><td class="media">18.545</td></tr>
        <tr><td class="pos">33</td><td>112</td><td class="nome">Borriello Ferdinando</td><td>M3</td><td class="tempo">02:00:07</td><td class="gap">+00:20:09</td><td class="media">18.481</td></tr>
        <tr><td class="pos">34</td><td>96</td><td class="nome">Meroli Maurizio</td><td>M5</td><td class="tempo">02:01:11</td><td class="gap">+00:21:13</td><td class="media">18.318</td></tr>
        <tr><td class="pos">35</td><td>87</td><td class="nome">Chiarini Giuseppe</td><td>M5</td><td class="tempo">02:01:38</td><td class="gap">+00:21:39</td><td class="media">18.252</td></tr>
        <tr><td class="pos">36</td><td>149</td><td class="nome">Gugliucci Francesco</td><td>M3</td><td class="tempo">02:01:45</td><td class="gap">+00:21:46</td><td class="media">18.234</td></tr>
        <tr><td class="pos">37</td><td>37</td><td class="nome">Russo Pasquale</td><td>M6</td><td class="tempo">02:02:05</td><td class="gap">+00:22:07</td><td class="media">18.183</td></tr>
        <tr><td class="pos">38</td><td>146</td><td class="nome">D’ Annessa Vinicio</td><td>M4</td><td class="tempo">02:02:21</td><td class="gap">+00:22:22</td><td class="media">18.144</td></tr>
        <tr><td class="pos">39</td><td>190</td><td class="nome">Nardolillo Andrea</td><td>M2</td><td class="tempo">02:02:56</td><td class="gap">+00:22:58</td><td class="media">18.057</td></tr>
        <tr><td class="pos">40</td><td>159</td><td class="nome">Tammaro Stefano</td><td>M1</td><td class="tempo">02:03:40</td><td class="gap">+00:23:42</td><td class="media">17.951</td></tr>
        <tr><td class="pos">41</td><td>124</td><td class="nome">Pellegrino Roberto</td><td>M4</td><td class="tempo">02:03:48</td><td class="gap">+00:23:50</td><td class="media">17.931</td></tr>
        <tr><td class="pos">42</td><td>73</td><td class="nome">Peluso Francesco</td><td>M2</td><td class="tempo">02:04:39</td><td class="gap">+00:24:40</td><td class="media">17.810</td></tr>
        <tr><td class="pos">43</td><td>16</td><td class="nome">Castaldo Giuseppe</td><td>M3</td><td class="tempo">02:05:22</td><td class="gap">+00:25:24</td><td class="media">17.706</td></tr>
        <tr><td class="pos">44</td><td>196</td><td class="nome">Vitale Gennaro</td><td>M4</td><td class="tempo">02:05:33</td><td class="gap">+00:25:35</td><td class="media">17.680</td></tr>
        <tr><td class="pos">45</td><td>157</td><td class="nome">Boccia Franco</td><td>M3</td><td class="tempo">02:05:38</td><td class="gap">+00:25:39</td><td class="media">17.670</td></tr>
        <tr><td class="pos">46</td><td>55</td><td class="nome">Caliendo Angelo</td><td>M3</td><td class="tempo">02:05:41</td><td class="gap">+00:25:43</td><td class="media">17.662</td></tr>
        <tr><td class="pos">47</td><td>48</td><td class="nome">Peluso Simone</td><td>M6</td><td class="tempo">02:05:55</td><td class="gap">+00:25:57</td><td class="media">17.628</td></tr>
        <tr><td class="pos">48</td><td>179</td><td class="nome">Altobelli Filippo</td><td>M5</td><td class="tempo">02:06:12</td><td class="gap">+00:26:14</td><td class="media">17.589</td></tr>
        <tr><td class="pos">49</td><td>85</td><td class="nome">Riello Raffaele</td><td>M7</td><td class="tempo">02:06:24</td><td class="gap">+00:26:26</td><td class="media">17.562</td></tr>
        <tr><td class="pos">50</td><td>125</td><td class="nome">Rocco Patrizio</td><td>M7</td><td class="tempo">02:07:07</td><td class="gap">+00:27:09</td><td class="media">17.463</td></tr>
        <tr><td class="pos">51</td><td>3</td><td class="nome">Ragucci Bruno</td><td>M4</td><td class="tempo">02:07:12</td><td class="gap">+00:27:14</td><td class="media">17.451</td></tr>
        <tr><td class="pos">52</td><td>11</td><td class="nome">Minutolo Sebastiano</td><td>M5</td><td class="tempo">02:07:23</td><td class="gap">+00:27:25</td><td class="media">17.426</td></tr>
        <tr><td class="pos">53</td><td>116</td><td class="nome">Maggiacomo Francesco</td><td>M1</td><td class="tempo">02:07:46</td><td class="gap">+00:27:48</td><td class="media">17.374</td></tr>
        <tr><td class="pos">54</td><td>176</td><td class="nome">Iannotta Domenico</td><td>M6</td><td class="tempo">02:07:50</td><td class="gap">+00:27:52</td><td class="media">17.364</td></tr>
        <tr><td class="pos">55</td><td>60</td><td class="nome">Riccio Angelo</td><td>M6</td><td class="tempo">02:08:37</td><td class="gap">+00:28:39</td><td class="media">17.259</td></tr>
        <tr><td class="pos">56</td><td>79</td><td class="nome">Palazzo Ernesto</td><td>M6</td><td class="tempo">02:09:30</td><td class="gap">+00:29:32</td><td class="media">17.142</td></tr>
        <tr><td class="pos">57</td><td>27</td><td class="nome">Sassone Vincenzo</td><td>M6</td><td class="tempo">02:09:39</td><td class="gap">+00:29:41</td><td class="media">17.121</td></tr>
        <tr><td class="pos">58</td><td>43</td><td class="nome">Riggi Mario</td><td>M4</td><td class="tempo">02:09:52</td><td class="gap">+00:29:54</td><td class="media">17.094</td></tr>
        <tr><td class="pos">59</td><td>52</td><td class="nome">Tufaro Gabriele</td><td>M4</td><td class="tempo">02:10:13</td><td class="gap">+00:30:15</td><td class="media">17.048</td></tr>
        <tr><td class="pos">60</td><td>151</td><td class="nome">Nardiello Gianluca</td><td>M5</td><td class="tempo">02:10:54</td><td class="gap">+00:30:56</td><td class="media">16.958</td></tr>
        <tr><td class="pos">61</td><td>137</td><td class="nome">Corrias Manuel</td><td>M1</td><td class="tempo">02:11:03</td><td class="gap">+00:31:05</td><td class="media">16.939</td></tr>
        <tr><td class="pos">62</td><td>164</td><td class="nome">Fiorindi Davide</td><td>M5</td><td class="tempo">02:13:02</td><td class="gap">+00:33:04</td><td class="media">16.687</td></tr>
        <tr><td class="pos">63</td><td>147</td><td class="nome">Guastafierro Cesare</td><td>M2</td><td class="tempo">02:13:09</td><td class="gap">+00:33:10</td><td class="media">16.673</td></tr>
        <tr><td class="pos">64</td><td>195</td><td class="nome">Miracolo Luca</td><td>M7</td><td class="tempo">02:13:20</td><td class="gap">+00:33:22</td><td class="media">16.649</td></tr>
        <tr><td class="pos">65</td><td>105</td><td class="nome">Pietrafesa Stefano</td><td>M3</td><td class="tempo">02:13:28</td><td class="gap">+00:33:30</td><td class="media">16.632</td></tr>
        <tr><td class="pos">66</td><td>70</td><td class="nome">Paura Fabio</td><td>M4</td><td class="tempo">02:13:33</td><td class="gap">+00:33:35</td><td class="media">16.621</td></tr>
        <tr><td class="pos">67</td><td>74</td><td class="nome">De Giglio Davide</td><td>M2</td><td class="tempo">02:13:37</td><td class="gap">+00:33:39</td><td class="media">16.613</td></tr>
        <tr><td class="pos">68</td><td>185</td><td class="nome">Prospero Luca</td><td>ELM</td><td class="tempo">02:13:45</td><td class="gap">+00:33:47</td><td class="media">16.597</td></tr>
        <tr><td class="pos">69</td><td>36</td><td class="nome">De Angelis Carmine</td><td>ELM</td><td class="tempo">02:13:48</td><td class="gap">+00:33:49</td><td class="media">16.592</td></tr>
        <tr><td class="pos">70</td><td>57</td><td class="nome">Del Sesto Luca</td><td>M5</td><td class="tempo">02:13:49</td><td class="gap">+00:33:51</td><td class="media">16.588</td></tr>
        <tr><td class="pos">71</td><td>153</td><td class="nome">D'Orsi Cristian</td><td>M4</td><td class="tempo">02:14:10</td><td class="gap">+00:34:12</td><td class="media">16.545</td></tr>
        <tr><td class="pos">72</td><td>56</td><td class="nome">Marcello Franco</td><td>M5</td><td class="tempo">02:14:31</td><td class="gap">+00:34:32</td><td class="media">16.503</td></tr>
        <tr><td class="pos">73</td><td>90</td><td class="nome">Di Manno Vittorio</td><td>M5</td><td class="tempo">02:14:31</td><td class="gap">+00:34:33</td><td class="media">16.502</td></tr>
        <tr><td class="pos">74</td><td>92</td><td class="nome">Maggiacomo Salvatore</td><td>M6</td><td class="tempo">02:15:00</td><td class="gap">+00:35:02</td><td class="media">16.443</td></tr>
        <tr><td class="pos">75</td><td>34</td><td class="nome">Peluso Angelo</td><td>M4</td><td class="tempo">02:15:14</td><td class="gap">+00:35:16</td><td class="media">16.415</td></tr>
        <tr><td class="pos">76</td><td>13</td><td class="nome">Esposito Giovanni</td><td>M6</td><td class="tempo">02:15:15</td><td class="gap">+00:35:17</td><td class="media">16.412</td></tr>
        <tr><td class="pos">77</td><td>139</td><td class="nome">Adorno Giovanni</td><td>M3</td><td class="tempo">02:15:57</td><td class="gap">+00:35:59</td><td class="media">16.329</td></tr>
        <tr><td class="pos">78</td><td>58</td><td class="nome">Riccio Angelo</td><td>M6</td><td class="tempo">02:15:58</td><td class="gap">+00:36:00</td><td class="media">16.327</td></tr>
        <tr><td class="pos">79</td><td>26</td><td class="nome">Fappiano Fernando</td><td>M6</td><td class="tempo">02:16:08</td><td class="gap">+00:36:10</td><td class="media">16.306</td></tr>
        <tr><td class="pos">80</td><td>142</td><td class="nome">Romano Mario</td><td>M3</td><td class="tempo">02:18:27</td><td class="gap">+00:38:29</td><td class="media">16.033</td></tr>
        <tr><td class="pos">81</td><td>167</td><td class="nome">Esposito Vincenzo</td><td>M3</td><td class="tempo">02:18:38</td><td class="gap">+00:38:40</td><td class="media">16.013</td></tr>
        <tr><td class="pos">82</td><td>50</td><td class="nome">Passacantando Luca</td><td>M6</td><td class="tempo">02:19:44</td><td class="gap">+00:39:46</td><td class="media">15.887</td></tr>
        <tr><td class="pos">83</td><td>10</td><td class="nome">Di Dato Giorgio</td><td>M5</td><td class="tempo">02:19:47</td><td class="gap">+00:39:49</td><td class="media">15.881</td></tr>
        <tr><td class="pos">84</td><td>183</td><td class="nome">La Rocca Antonio</td><td>M3</td><td class="tempo">02:20:17</td><td class="gap">+00:40:19</td><td class="media">15.824</td></tr>
        <tr><td class="pos">85</td><td>104</td><td class="nome">Durante Antonio</td><td>M4</td><td class="tempo">02:20:20</td><td class="gap">+00:40:21</td><td class="media">15.819</td></tr>
        <tr><td class="pos">86</td><td>136</td><td class="nome">Marinelli Giuseppe</td><td>M4</td><td class="tempo">02:21:18</td><td class="gap">+00:41:20</td><td class="media">15.711</td></tr>
        <tr><td class="pos">87</td><td>126</td><td class="nome">Sodano Giampiero</td><td>M5</td><td class="tempo">02:22:07</td><td class="gap">+00:42:09</td><td class="media">15.619</td></tr>
        <tr><td class="pos">88</td><td>38</td><td class="nome">Iliaco Luigi</td><td>M5</td><td class="tempo">02:22:41</td><td class="gap">+00:42:43</td><td class="media">15.557</td></tr>
        <tr><td class="pos">89</td><td>165</td><td class="nome">Fattore Guido</td><td>M7</td><td class="tempo">02:23:09</td><td class="gap">+00:43:10</td><td class="media">15.508</td></tr>
        <tr><td class="pos">90</td><td>169</td><td class="nome">Gargiulo Francesco</td><td>M4</td><td class="tempo">02:25:06</td><td class="gap">+00:45:08</td><td class="media">15.298</td></tr>
        <tr><td class="pos">91</td><td>194</td><td class="nome">Vettraino Giulio</td><td>M3</td><td class="tempo">02:27:40</td><td class="gap">+00:47:42</td><td class="media">15.032</td></tr>
        <tr><td class="pos">92</td><td>75</td><td class="nome">Ferone Stefano</td><td>M1</td><td class="tempo">02:28:53</td><td class="gap">+00:48:54</td><td class="media">14.911</td></tr>
        <tr><td class="pos">93</td><td>189</td><td class="nome">Lo Scalzo Adriano</td><td>M7</td><td class="tempo">02:31:30</td><td class="gap">+00:51:32</td><td class="media">14.653</td></tr>
        <tr><td class="pos">94</td><td>184</td><td class="nome">Tallarico Vincenzo</td><td>ELM</td><td class="tempo">02:31:54</td><td class="gap">+00:51:55</td><td class="media">14.615</td></tr>
        <tr><td class="pos">95</td><td>148</td><td class="nome">Piccolo Salvatore</td><td>M4</td><td class="tempo">02:31:58</td><td class="gap">+00:51:59</td><td class="media">14.608</td></tr>
        <tr><td class="pos">96</td><td>17</td><td class="nome">Di Vizio Carmine</td><td>M1</td><td class="tempo">02:32:38</td><td class="gap">+00:52:40</td><td class="media">14.544</td></tr>
        <tr><td class="pos">97</td><td>101</td><td class="nome">Tamorri Ciro</td><td>M7</td><td class="tempo">02:40:26</td><td class="gap">+01:00:28</td><td class="media">13.837</td></tr>
        <tr><td class="pos">98</td><td>120</td><td class="nome">Guadagno Antonio</td><td>M8</td><td class="tempo">02:41:06</td><td class="gap">+01:01:08</td><td class="media">13.779</td></tr>
        <tr><td class="pos">99</td><td>9</td><td class="nome">Di Fusco Salvatore</td><td>M2</td><td class="tempo">02:49:15</td><td class="gap">+01:09:17</td><td class="media">13.116</td></tr>
        <tr><td class="pos">100</td><td>68</td><td class="nome">Papale Gaetano</td><td>M3</td><td class="tempo">02:50:02</td><td class="gap">+01:10:04</td><td class="media">13.055</td></tr>
        <tr><td class="pos">101</td><td>18</td><td class="nome">Panagrosso Ferdinando</td><td>M8</td><td class="tempo">02:56:29</td><td class="gap">+01:16:31</td><td class="media">12.578</td></tr>
        <tr><td class="pos">102</td><td>98</td><td class="nome">Nunziante Paolo</td><td>M8</td><td class="tempo">03:04:49</td><td class="gap">+01:24:50</td><td class="media">12.012</td></tr>
          </tbody>
        </table>
        </div>
      </div>

      <div class="ptp-panel" id="panel-categorie" role="tabpanel">
        <h2 class="ptp-disp ptp-h2">Classifiche per categoria</h2>
        <p class="ptp-lead">Podio e piazzamenti per ciascuna categoria, con i punti assegnati.</p>
        <div class="ptp-cat-block">
          <h3 class="ptp-disp ptp-cat-h">E-Bike</h3>
          <div class="ptp-twrap">
          <table class="ptp-tbl">
            <thead><tr><th>Pos</th><th>Pett.</th><th>Atleta</th><th>Società</th><th>Tempo</th><th>Punti</th></tr></thead>
            <tbody>
          <tr><td class="pos">1</td><td>40</td><td class="nome">Degli Schiavi Michele</td><td>Croccanti Racing Team</td><td class="tempo">01:48:41</td><td class="pt">35.00</td></tr>
          <tr><td class="pos">2</td><td>187</td><td class="nome">Fargiorgio Graziano</td><td>Gc Monte Ruazzo</td><td class="tempo">01:55:01</td><td class="pt">30.00</td></tr>
          <tr><td class="pos">3</td><td>160</td><td class="nome">Di Raimo Giuseppe</td><td>Mtbike Cassino</td><td class="tempo">02:01:37</td><td class="pt">26.00</td></tr>
          <tr><td class="pos">4</td><td>65</td><td class="nome">Faella Enrico</td><td>Croccanti Racing Team</td><td class="tempo">02:03:20</td><td class="pt">23.00</td></tr>
          <tr><td class="pos">5</td><td>186</td><td class="nome">De Falco Nicola</td><td>La Colombaia Asdps</td><td class="tempo">02:09:18</td><td class="pt">21.00</td></tr>
          <tr><td class="pos">6</td><td>191</td><td class="nome">Dell'Ova Tonino</td><td>Toraglie Bike E Run</td><td class="tempo">02:19:22</td><td class="pt">20.00</td></tr>
            </tbody>
          </table>
          </div>
        </div>
        <div class="ptp-cat-block">
          <h3 class="ptp-disp ptp-cat-h">ELM</h3>
          <div class="ptp-twrap">
          <table class="ptp-tbl">
            <thead><tr><th>Pos</th><th>Pett.</th><th>Atleta</th><th>Società</th><th>Tempo</th><th>Punti</th></tr></thead>
            <tbody>
          <tr><td class="pos">1</td><td>77</td><td class="nome">Falasca Antonio</td><td>Carovilli Bike</td><td class="tempo">01:42:18</td><td class="pt">35.00</td></tr>
          <tr><td class="pos">2</td><td>42</td><td class="nome">Girardi Giuseppe</td><td>Vesuvio Mountainbike</td><td class="tempo">01:45:34</td><td class="pt">30.00</td></tr>
          <tr><td class="pos">3</td><td>131</td><td class="nome">Fauceglia Matteo</td><td>Mtbike Cassino</td><td class="tempo">01:46:59</td><td class="pt">26.00</td></tr>
          <tr><td class="pos">4</td><td>192</td><td class="nome">Tomassi Davide</td><td>Mtbike Cassino</td><td class="tempo">01:55:44</td><td class="pt">23.00</td></tr>
          <tr><td class="pos">5</td><td>185</td><td class="nome">Prospero Luca</td><td>I Love Mtb Torre Del Greco</td><td class="tempo">02:13:45</td><td class="pt">21.00</td></tr>
          <tr><td class="pos">6</td><td>36</td><td class="nome">De Angelis Carmine</td><td>Toraglie Bike E Run</td><td class="tempo">02:13:48</td><td class="pt">20.00</td></tr>
          <tr><td class="pos">7</td><td>184</td><td class="nome">Tallarico Vincenzo</td><td>I Love Mtb Torre Del Greco</td><td class="tempo">02:31:54</td><td class="pt">18.00</td></tr>
            </tbody>
          </table>
          </div>
        </div>
        <div class="ptp-cat-block">
          <h3 class="ptp-disp ptp-cat-h">M1</h3>
          <div class="ptp-twrap">
          <table class="ptp-tbl">
            <thead><tr><th>Pos</th><th>Pett.</th><th>Atleta</th><th>Società</th><th>Tempo</th><th>Punti</th></tr></thead>
            <tbody>
          <tr><td class="pos">1</td><td>161</td><td class="nome">Marra Alessandro</td><td>Team Giunigor - B.bike</td><td class="tempo">01:44:37</td><td class="pt">35.00</td></tr>
          <tr><td class="pos">2</td><td>159</td><td class="nome">Tammaro Stefano</td><td>I Love Mtb Torre Del Greco</td><td class="tempo">02:03:40</td><td class="pt">30.00</td></tr>
          <tr><td class="pos">3</td><td>116</td><td class="nome">Maggiacomo Francesco</td><td>Gc Monte Ruazzo</td><td class="tempo">02:07:46</td><td class="pt">26.00</td></tr>
          <tr><td class="pos">4</td><td>137</td><td class="nome">Corrias Manuel</td><td>Terenzi Sport Eventi</td><td class="tempo">02:11:03</td><td class="pt">23.00</td></tr>
          <tr><td class="pos">5</td><td>75</td><td class="nome">Ferone Stefano</td><td>Conte Nutrizione</td><td class="tempo">02:28:53</td><td class="pt">21.00</td></tr>
          <tr><td class="pos">6</td><td>17</td><td class="nome">Di Vizio Carmine</td><td>Enercol 2wheels</td><td class="tempo">02:32:38</td><td class="pt">20.00</td></tr>
            </tbody>
          </table>
          </div>
        </div>
        <div class="ptp-cat-block">
          <h3 class="ptp-disp ptp-cat-h">M2</h3>
          <div class="ptp-twrap">
          <table class="ptp-tbl">
            <thead><tr><th>Pos</th><th>Pett.</th><th>Atleta</th><th>Società</th><th>Tempo</th><th>Punti</th></tr></thead>
            <tbody>
          <tr><td class="pos">1</td><td>168</td><td class="nome">Prete Luca</td><td>Enercol 2wheels</td><td class="tempo">01:39:58</td><td class="pt">35.00</td></tr>
          <tr><td class="pos">2</td><td>24</td><td class="nome">Caroselli Davide</td><td>Sessan Bike Sport Enatura</td><td class="tempo">01:44:54</td><td class="pt">30.00</td></tr>
          <tr><td class="pos">3</td><td>1</td><td class="nome">Baris Mario</td><td>Estasi Mountain Bike</td><td class="tempo">01:44:57</td><td class="pt">26.00</td></tr>
          <tr><td class="pos">4</td><td>5</td><td class="nome">Pagliarini Patrizio</td><td>Estasi Mountain Bike</td><td class="tempo">01:45:28</td><td class="pt">23.00</td></tr>
          <tr><td class="pos">5</td><td>133</td><td class="nome">Lanni Danilo</td><td>Mtbike Cassino</td><td class="tempo">01:46:58</td><td class="pt">21.00</td></tr>
          <tr><td class="pos">6</td><td>121</td><td class="nome">Marotta Felice</td><td>Genesy Bike</td><td class="tempo">01:47:22</td><td class="pt">20.00</td></tr>
          <tr><td class="pos">7</td><td>145</td><td class="nome">Di Fonzo Antonio</td><td>Bikextreme Racing Team</td><td class="tempo">01:51:43</td><td class="pt">18.00</td></tr>
          <tr><td class="pos">8</td><td>12</td><td class="nome">Schiavone Giuseppe</td><td>Team Bike Maddaloni</td><td class="tempo">01:56:41</td><td class="pt">17.00</td></tr>
          <tr><td class="pos">9</td><td>67</td><td class="nome">Giardiello Antonio</td><td>Croccanti Racing Team</td><td class="tempo">01:57:28</td><td class="pt">16.00</td></tr>
          <tr><td class="pos">10</td><td>135</td><td class="nome">D'Alessandro Alexander</td><td>Sei Torri Bike</td><td class="tempo">01:59:12</td><td class="pt">15.00</td></tr>
          <tr><td class="pos">11</td><td>190</td><td class="nome">Nardolillo Andrea</td><td>Iap'ca Iap'ca</td><td class="tempo">02:02:56</td><td class="pt">14.00</td></tr>
          <tr><td class="pos">12</td><td>73</td><td class="nome">Peluso Francesco</td><td>Croccanti Racing Team</td><td class="tempo">02:04:39</td><td class="pt">13.00</td></tr>
          <tr><td class="pos">13</td><td>147</td><td class="nome">Guastafierro Cesare</td><td>I Love Mtb Torre Del Greco</td><td class="tempo">02:13:09</td><td class="pt">12.00</td></tr>
          <tr><td class="pos">14</td><td>74</td><td class="nome">De Giglio Davide</td><td>Croccanti Racing Team</td><td class="tempo">02:13:37</td><td class="pt">11.00</td></tr>
          <tr><td class="pos">15</td><td>9</td><td class="nome">Di Fusco Salvatore</td><td>I Love Mtb Torre Del Greco</td><td class="tempo">02:49:15</td><td class="pt">10.00</td></tr>
            </tbody>
          </table>
          </div>
        </div>
        <div class="ptp-cat-block">
          <h3 class="ptp-disp ptp-cat-h">M3</h3>
          <div class="ptp-twrap">
          <table class="ptp-tbl">
            <thead><tr><th>Pos</th><th>Pett.</th><th>Atleta</th><th>Società</th><th>Tempo</th><th>Punti</th></tr></thead>
            <tbody>
          <tr><td class="pos">1</td><td>163</td><td class="nome">Cellini Alessio</td><td>Ctm</td><td class="tempo">01:46:13</td><td class="pt">35.00</td></tr>
          <tr><td class="pos">2</td><td>62</td><td class="nome">Biasiucci Giovanni Pietro</td><td>Croccanti Racing Team</td><td class="tempo">01:48:08</td><td class="pt">30.00</td></tr>
          <tr><td class="pos">3</td><td>91</td><td class="nome">La Rocca Alessandro</td><td>Fans Bike</td><td class="tempo">01:48:40</td><td class="pt">26.00</td></tr>
          <tr><td class="pos">4</td><td>93</td><td class="nome">Masella Raffaele</td><td>Hgv Cicli Conte Fans Bike</td><td class="tempo">01:49:54</td><td class="pt">23.00</td></tr>
          <tr><td class="pos">5</td><td>100</td><td class="nome">Picano Giovanni</td><td>Fans Bike</td><td class="tempo">01:50:42</td><td class="pt">21.00</td></tr>
          <tr><td class="pos">6</td><td>63</td><td class="nome">Granata Danilo</td><td>Croccanti Racing Team</td><td class="tempo">01:57:37</td><td class="pt">20.00</td></tr>
          <tr><td class="pos">7</td><td>7</td><td class="nome">Golino Pasquale</td><td>Sc Marcianise</td><td class="tempo">01:57:56</td><td class="pt">18.00</td></tr>
          <tr><td class="pos">8</td><td>112</td><td class="nome">Borriello Ferdinando</td><td>Tuttobici Romano</td><td class="tempo">02:00:07</td><td class="pt">17.00</td></tr>
          <tr><td class="pos">9</td><td>149</td><td class="nome">Gugliucci Francesco</td><td>I Love Mtb Torre Del Greco</td><td class="tempo">02:01:45</td><td class="pt">16.00</td></tr>
          <tr><td class="pos">10</td><td>16</td><td class="nome">Castaldo Giuseppe</td><td>Polisportiva Matese</td><td class="tempo">02:05:22</td><td class="pt">15.00</td></tr>
          <tr><td class="pos">11</td><td>157</td><td class="nome">Boccia Franco</td><td>I Love Mtb Torre Del Greco</td><td class="tempo">02:05:38</td><td class="pt">14.00</td></tr>
          <tr><td class="pos">12</td><td>55</td><td class="nome">Caliendo Angelo</td><td>Croccanti Racing Team</td><td class="tempo">02:05:41</td><td class="pt">13.00</td></tr>
          <tr><td class="pos">13</td><td>105</td><td class="nome">Pietrafesa Stefano</td><td>Iap'ca Iap'ca</td><td class="tempo">02:13:28</td><td class="pt">12.00</td></tr>
          <tr><td class="pos">14</td><td>139</td><td class="nome">Adorno Giovanni</td><td>Vesuvio Mountainbike</td><td class="tempo">02:15:57</td><td class="pt">11.00</td></tr>
          <tr><td class="pos">15</td><td>142</td><td class="nome">Romano Mario</td><td>I Love Mtb Torre Del Greco</td><td class="tempo">02:18:27</td><td class="pt">10.00</td></tr>
          <tr><td class="pos">16</td><td>167</td><td class="nome">Esposito Vincenzo</td><td>Asd Vesuviani</td><td class="tempo">02:18:38</td><td class="pt">9.00</td></tr>
          <tr><td class="pos">17</td><td>183</td><td class="nome">La Rocca Antonio</td><td>Gc Monte Ruazzo</td><td class="tempo">02:20:17</td><td class="pt">8.00</td></tr>
          <tr><td class="pos">18</td><td>194</td><td class="nome">Vettraino Giulio</td><td>Bikextreme Racing Team</td><td class="tempo">02:27:40</td><td class="pt">7.00</td></tr>
          <tr><td class="pos">19</td><td>68</td><td class="nome">Papale Gaetano</td><td>Croccanti Racing Team</td><td class="tempo">02:50:02</td><td class="pt">6.00</td></tr>
            </tbody>
          </table>
          </div>
        </div>
        <div class="ptp-cat-block">
          <h3 class="ptp-disp ptp-cat-h">M4</h3>
          <div class="ptp-twrap">
          <table class="ptp-tbl">
            <thead><tr><th>Pos</th><th>Pett.</th><th>Atleta</th><th>Società</th><th>Tempo</th><th>Punti</th></tr></thead>
            <tbody>
          <tr><td class="pos">1</td><td>99</td><td class="nome">Pensiero Giovanni</td><td>Hgv Cicli Conte Fans Bike</td><td class="tempo">01:42:20</td><td class="pt">35.00</td></tr>
          <tr><td class="pos">2</td><td>134</td><td class="nome">Vecchio Ciccolella Christofer</td><td>Mtbike Cassino</td><td class="tempo">01:51:41</td><td class="pt">30.00</td></tr>
          <tr><td class="pos">3</td><td>23</td><td class="nome">Bimbato Alessandro</td><td>Cycling For Life</td><td class="tempo">01:55:04</td><td class="pt">26.00</td></tr>
          <tr><td class="pos">4</td><td>51</td><td class="nome">Acciardo Giuseppe</td><td>Croccanti Racing Team</td><td class="tempo">01:56:21</td><td class="pt">23.00</td></tr>
          <tr><td class="pos">5</td><td>146</td><td class="nome">D’ Annessa Vinicio</td><td>Bike Shock Team</td><td class="tempo">02:02:21</td><td class="pt">21.00</td></tr>
          <tr><td class="pos">6</td><td>124</td><td class="nome">Pellegrino Roberto</td><td>Genesy Bike</td><td class="tempo">02:03:48</td><td class="pt">20.00</td></tr>
          <tr><td class="pos">7</td><td>196</td><td class="nome">Vitale Gennaro</td><td>Genesy Bike</td><td class="tempo">02:05:33</td><td class="pt">18.00</td></tr>
          <tr><td class="pos">8</td><td>3</td><td class="nome">Ragucci Bruno</td><td>Estasi Mountain Bike</td><td class="tempo">02:07:12</td><td class="pt">17.00</td></tr>
          <tr><td class="pos">9</td><td>43</td><td class="nome">Riggi Mario</td><td>Bikers Casalvieri</td><td class="tempo">02:09:52</td><td class="pt">16.00</td></tr>
          <tr><td class="pos">10</td><td>52</td><td class="nome">Tufaro Gabriele</td><td>Croccanti Racing Team</td><td class="tempo">02:10:13</td><td class="pt">15.00</td></tr>
          <tr><td class="pos">11</td><td>70</td><td class="nome">Paura Fabio</td><td>Croccanti Racing Team</td><td class="tempo">02:13:33</td><td class="pt">14.00</td></tr>
          <tr><td class="pos">12</td><td>153</td><td class="nome">D'Orsi Cristian</td><td>Bike &amp; Sport Team Mtb</td><td class="tempo">02:14:10</td><td class="pt">13.00</td></tr>
          <tr><td class="pos">13</td><td>34</td><td class="nome">Peluso Angelo</td><td>I Love Mtb Torre Del Greco</td><td class="tempo">02:15:14</td><td class="pt">12.00</td></tr>
          <tr><td class="pos">14</td><td>104</td><td class="nome">Durante Antonio</td><td>Iap'ca Iap'ca</td><td class="tempo">02:20:20</td><td class="pt">11.00</td></tr>
          <tr><td class="pos">15</td><td>136</td><td class="nome">Marinelli Giuseppe</td><td>Sei Torri Bike</td><td class="tempo">02:21:18</td><td class="pt">10.00</td></tr>
          <tr><td class="pos">16</td><td>169</td><td class="nome">Gargiulo Francesco</td><td>Bollino Team</td><td class="tempo">02:25:06</td><td class="pt">9.00</td></tr>
          <tr><td class="pos">17</td><td>148</td><td class="nome">Piccolo Salvatore</td><td>I Love Mtb Torre Del Greco</td><td class="tempo">02:31:58</td><td class="pt">8.00</td></tr>
            </tbody>
          </table>
          </div>
        </div>
        <div class="ptp-cat-block">
          <h3 class="ptp-disp ptp-cat-h">M5</h3>
          <div class="ptp-twrap">
          <table class="ptp-tbl">
            <thead><tr><th>Pos</th><th>Pett.</th><th>Atleta</th><th>Società</th><th>Tempo</th><th>Punti</th></tr></thead>
            <tbody>
          <tr><td class="pos">1</td><td>172</td><td class="nome">De Santis Michele</td><td>Apd Ciociaria Bike</td><td class="tempo">01:48:59</td><td class="pt">35.00</td></tr>
          <tr><td class="pos">2</td><td>49</td><td class="nome">Cozzolino Luigi</td><td>Genesy Bike</td><td class="tempo">01:57:16</td><td class="pt">30.00</td></tr>
          <tr><td class="pos">3</td><td>21</td><td class="nome">Sorbo Ferdinando</td><td>Genesy Bike</td><td class="tempo">01:59:01</td><td class="pt">26.00</td></tr>
          <tr><td class="pos">4</td><td>45</td><td class="nome">Tempesta Ivan</td><td>Bikers Casalvieri</td><td class="tempo">01:59:34</td><td class="pt">23.00</td></tr>
          <tr><td class="pos">5</td><td>2</td><td class="nome">Montaquila Salvatore</td><td>Estasi Mountain Bike</td><td class="tempo">01:59:42</td><td class="pt">21.00</td></tr>
          <tr><td class="pos">6</td><td>96</td><td class="nome">Meroli Maurizio</td><td>Fans Bike</td><td class="tempo">02:01:11</td><td class="pt">20.00</td></tr>
          <tr><td class="pos">7</td><td>87</td><td class="nome">Chiarini Giuseppe</td><td>Hgv Cicli Conte Fans Bike</td><td class="tempo">02:01:38</td><td class="pt">18.00</td></tr>
          <tr><td class="pos">8</td><td>179</td><td class="nome">Altobelli Filippo</td><td>Team Amoruso</td><td class="tempo">02:06:12</td><td class="pt">17.00</td></tr>
          <tr><td class="pos">9</td><td>11</td><td class="nome">Minutolo Sebastiano</td><td>Team Amoruso</td><td class="tempo">02:07:23</td><td class="pt">16.00</td></tr>
          <tr><td class="pos">10</td><td>151</td><td class="nome">Nardiello Gianluca</td><td>I Love Mtb Torre Del Greco</td><td class="tempo">02:10:54</td><td class="pt">15.00</td></tr>
          <tr><td class="pos">11</td><td>164</td><td class="nome">Fiorindi Davide</td><td>Ladri Di Medaglie</td><td class="tempo">02:13:02</td><td class="pt">14.00</td></tr>
          <tr><td class="pos">12</td><td>57</td><td class="nome">Del Sesto Luca</td><td>Croccanti Racing Team</td><td class="tempo">02:13:49</td><td class="pt">13.00</td></tr>
          <tr><td class="pos">13</td><td>56</td><td class="nome">Marcello Franco</td><td>Croccanti Racing Team</td><td class="tempo">02:14:31</td><td class="pt">12.00</td></tr>
          <tr><td class="pos">14</td><td>90</td><td class="nome">Di Manno Vittorio</td><td>Fans Bike</td><td class="tempo">02:14:31</td><td class="pt">11.00</td></tr>
          <tr><td class="pos">15</td><td>10</td><td class="nome">Di Dato Giorgio</td><td>I Love Mtb Torre Del Greco</td><td class="tempo">02:19:47</td><td class="pt">10.00</td></tr>
          <tr><td class="pos">16</td><td>126</td><td class="nome">Sodano Giampiero</td><td>Genesy Bike</td><td class="tempo">02:22:07</td><td class="pt">9.00</td></tr>
          <tr><td class="pos">17</td><td>38</td><td class="nome">Iliaco Luigi</td><td>Genesy Bike</td><td class="tempo">02:22:41</td><td class="pt">8.00</td></tr>
            </tbody>
          </table>
          </div>
        </div>
        <div class="ptp-cat-block">
          <h3 class="ptp-disp ptp-cat-h">M6</h3>
          <div class="ptp-twrap">
          <table class="ptp-tbl">
            <thead><tr><th>Pos</th><th>Pett.</th><th>Atleta</th><th>Società</th><th>Tempo</th><th>Punti</th></tr></thead>
            <tbody>
          <tr><td class="pos">1</td><td>171</td><td class="nome">Pompili Emanuele</td><td>Apd Ciociaria Bike</td><td class="tempo">01:58:19</td><td class="pt">35.00</td></tr>
          <tr><td class="pos">2</td><td>37</td><td class="nome">Russo Pasquale</td><td>Fans Bike</td><td class="tempo">02:02:05</td><td class="pt">30.00</td></tr>
          <tr><td class="pos">3</td><td>48</td><td class="nome">Peluso Simone</td><td>Sc Marcianise</td><td class="tempo">02:05:55</td><td class="pt">26.00</td></tr>
          <tr><td class="pos">4</td><td>176</td><td class="nome">Iannotta Domenico</td><td>Mtb Caserta</td><td class="tempo">02:07:50</td><td class="pt">23.00</td></tr>
          <tr><td class="pos">5</td><td>60</td><td class="nome">Riccio Angelo</td><td>Croccanti Racing Team</td><td class="tempo">02:08:37</td><td class="pt">21.00</td></tr>
          <tr><td class="pos">6</td><td>79</td><td class="nome">Palazzo Ernesto</td><td>Gc Monte Ruazzo</td><td class="tempo">02:09:30</td><td class="pt">20.00</td></tr>
          <tr><td class="pos">7</td><td>27</td><td class="nome">Sassone Vincenzo</td><td>Genesy Bike</td><td class="tempo">02:09:39</td><td class="pt">18.00</td></tr>
          <tr><td class="pos">8</td><td>92</td><td class="nome">Maggiacomo Salvatore</td><td>Hgv Cicli Conte Fans Bike</td><td class="tempo">02:15:00</td><td class="pt">17.00</td></tr>
          <tr><td class="pos">9</td><td>13</td><td class="nome">Esposito Giovanni</td><td>Team Cycling Crisci</td><td class="tempo">02:15:15</td><td class="pt">16.00</td></tr>
          <tr><td class="pos">10</td><td>58</td><td class="nome">Riccio Angelo</td><td>Croccanti Racing Team</td><td class="tempo">02:15:58</td><td class="pt">15.00</td></tr>
          <tr><td class="pos">11</td><td>26</td><td class="nome">Fappiano Fernando</td><td>Polisportiva Matese</td><td class="tempo">02:16:08</td><td class="pt">14.00</td></tr>
          <tr><td class="pos">12</td><td>50</td><td class="nome">Passacantando Luca</td><td>Croccanti Racing Team</td><td class="tempo">02:19:44</td><td class="pt">13.00</td></tr>
            </tbody>
          </table>
          </div>
        </div>
        <div class="ptp-cat-block">
          <h3 class="ptp-disp ptp-cat-h">M7</h3>
          <div class="ptp-twrap">
          <table class="ptp-tbl">
            <thead><tr><th>Pos</th><th>Pett.</th><th>Atleta</th><th>Società</th><th>Tempo</th><th>Punti</th></tr></thead>
            <tbody>
          <tr><td class="pos">1</td><td>85</td><td class="nome">Riello Raffaele</td><td>Mtb Tifata</td><td class="tempo">02:06:24</td><td class="pt">35.00</td></tr>
          <tr><td class="pos">2</td><td>125</td><td class="nome">Rocco Patrizio</td><td>Genesy Bike</td><td class="tempo">02:07:07</td><td class="pt">30.00</td></tr>
          <tr><td class="pos">3</td><td>195</td><td class="nome">Miracolo Luca</td><td>Team Over The Top Bike</td><td class="tempo">02:13:20</td><td class="pt">26.00</td></tr>
          <tr><td class="pos">4</td><td>165</td><td class="nome">Fattore Guido</td><td>Ladri Di Medaglie</td><td class="tempo">02:23:09</td><td class="pt">23.00</td></tr>
          <tr><td class="pos">5</td><td>189</td><td class="nome">Lo Scalzo Adriano</td><td>Ciociaria Bike</td><td class="tempo">02:31:30</td><td class="pt">21.00</td></tr>
          <tr><td class="pos">6</td><td>101</td><td class="nome">Tamorri Ciro</td><td>Fans Bike</td><td class="tempo">02:40:26</td><td class="pt">20.00</td></tr>
            </tbody>
          </table>
          </div>
        </div>
        <div class="ptp-cat-block">
          <h3 class="ptp-disp ptp-cat-h">M8</h3>
          <div class="ptp-twrap">
          <table class="ptp-tbl">
            <thead><tr><th>Pos</th><th>Pett.</th><th>Atleta</th><th>Società</th><th>Tempo</th><th>Punti</th></tr></thead>
            <tbody>
          <tr><td class="pos">1</td><td>120</td><td class="nome">Guadagno Antonio</td><td>Genesy Bike</td><td class="tempo">02:41:06</td><td class="pt">35.00</td></tr>
          <tr><td class="pos">2</td><td>18</td><td class="nome">Panagrosso Ferdinando</td><td>Federal Team Bike</td><td class="tempo">02:56:29</td><td class="pt">30.00</td></tr>
          <tr><td class="pos">3</td><td>98</td><td class="nome">Nunziante Paolo</td><td>Fans Bike</td><td class="tempo">03:04:49</td><td class="pt">26.00</td></tr>
            </tbody>
          </table>
          </div>
        </div>
        <div class="ptp-cat-block">
          <h3 class="ptp-disp ptp-cat-h">Ritirati</h3>
          <div class="ptp-twrap">
          <table class="ptp-tbl">
            <thead><tr><th>Pett.</th><th>Atleta</th><th>Società</th></tr></thead>
            <tbody>
          <tr><td>6</td><td class="nome">De Cristofaro Lino</td><td>Croccanti Racing Team</td></tr>
          <tr><td>35</td><td class="nome">Bardellino Antonio</td><td>Momo Bikers</td></tr>
          <tr><td>54</td><td class="nome">Lepore Crescenzo</td><td>Croccanti Racing Team</td></tr>
          <tr><td>80</td><td class="nome">Licciardi Gianluca</td><td>Il Triciclo Sidicino</td></tr>
          <tr><td>81</td><td class="nome">Chiacchio Giuseppe</td><td>Il Triciclo Sidicino</td></tr>
          <tr><td>155</td><td class="nome">Miraglia Antonio</td><td>Autoricambi Marrone</td></tr>
          <tr><td>158</td><td class="nome">Ceruso Ivan</td><td>Tuttobici Romano</td></tr>
          <tr><td>166</td><td class="nome">Di Paolo Luca</td><td>Bikextreme Racing Team</td></tr>
          <tr><td>178</td><td class="nome">D'Aliesio Simone</td><td>Enercol 2Wheels</td></tr>
            </tbody>
          </table>
          </div>
        </div>
      </div>

      <p class="ptp-note">Classifiche elaborate dai dati ufficiali del cronometraggio SpeedPass Italia. In caso di rettifiche fa fede la classifica ufficiale su <a href="https://www.speedpassitalia.it/sp/c-cat/gara_2026_07_05_PP_DEL_CASTELLO_MTB/campania/2026/classifica_categoria/" target="_blank" rel="noopener">SpeedPass Italia</a>.</p>

      <div class="ptp-clsf-cta">
        <a class="ptp-btn ptp-btn-2" href="<?php echo esc_url( home_url('/') ); ?>">&larr; Torna alla home</a>
      </div>
    </div>
  </section>

  <footer class="ptp-foot">
    <div class="ptp-wrap">&copy; 2026 Point to Point del Castello &middot; ASD Estasi MTB</div>
  </footer>

</div>
<div class="ptp-fab">
  <a class="ptp-fab-iscriviti" href="<?php echo esc_url(home_url('/classifiche/')); ?>">Classifiche</a>
  <a class="ptp-fab-wa" href="https://wa.me/393458335726?text=Ciao%20sono%20interessato%20a%20info%20sulla%20Point%20to%20Point%20del%20castello" target="_blank" rel="noopener" aria-label="Scrivici su WhatsApp"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.207-.242-.579-.487-.5-.669-.51l-.57-.01c-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg></a>
</div>
<script>
(function(){var nav=document.getElementById('ptp-nav');if(!nav)return;var btn=nav.querySelector('.ptp-nav-toggle');function set(o){nav.classList.toggle('open',o);if(btn){btn.setAttribute('aria-expanded',o?'true':'false');btn.setAttribute('aria-label',o?'Chiudi menu':'Apri menu');}}if(btn){btn.addEventListener('click',function(){set(!nav.classList.contains('open'));});}nav.querySelectorAll('.ptp-nav-links a').forEach(function(a){a.addEventListener('click',function(){set(false);});});})();
</script>
<script>
(function(){var tabs=[].slice.call(document.querySelectorAll('.ptp-tab'));var panels={assoluta:document.getElementById('panel-assoluta'),categorie:document.getElementById('panel-categorie')};function activate(name){tabs.forEach(function(t){var on=t.getAttribute('data-panel')===name;t.classList.toggle('active',on);t.setAttribute('aria-selected',on?'true':'false');});Object.keys(panels).forEach(function(k){if(panels[k])panels[k].classList.toggle('active',k===name);});}tabs.forEach(function(t){t.addEventListener('click',function(){activate(t.getAttribute('data-panel'));});});if(location.hash==='#categorie')activate('categorie');})();
</script>
<?php
if(function_exists('wp_dequeue_script')){foreach(array('gsap-js-scroll','gsap-js-smooth','gsap-js-observer','gsap-js-text','gsap-js-split','gsap-js-draw','gsap-js-motion','gsap-js-custom') as $h){wp_dequeue_script($h);wp_deregister_script($h);}}
?>
<?php wp_footer(); ?>
</body>
</html>
