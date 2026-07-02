<?php
/**
 * Template Name: PtP del Castello - Regolamento
 * Description: Pagina Regolamento standalone in HTML/CSS puro, coerente col design della locandina-evento.
 */
if (!defined('ABSPATH')) { exit; }
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Regolamento - Point to Point del Castello 2026</title>
<meta name="description" content="Regolamento ufficiale della IX Point to Point del Castello 2026 - MTB Campania Championship - 5 luglio 2026, Mignano Monte Lungo (CE).">
<meta property="og:type" content="website">
<meta property="og:locale" content="it_IT">
<meta property="og:site_name" content="Point to Point del Castello">
<meta property="og:title" content="Regolamento - Point to Point del Castello 2026">
<meta property="og:description" content="Regolamento ufficiale della IX edizione - MTB Campania Championship - 37/38 km, 1100/1200 D+ - 5 luglio 2026.">
<meta property="og:url" content="<?php echo esc_url( home_url('/regolamento/') ); ?>">
<meta property="og:image" content="https://ptpdelcastello.netsons.org/wp-content/uploads/2026/06/Point-to-Point-del-Castello-2026-Condivisione.jpg">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Regolamento - Point to Point del Castello 2026">
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

/* Compact hero */
.ptp-rhero{position:relative;background:#060606 url('https://ptpdelcastello.netsons.org/wp-content/uploads/2026/06/PtP-Hero-Ciclista-Castello.png') center 18%/cover no-repeat;}
.ptp-rhero::before{content:"";position:absolute;inset:0;background:linear-gradient(90deg,rgba(0,0,0,.92) 0%,rgba(0,0,0,.6) 45%,rgba(0,0,0,.35) 100%),linear-gradient(0deg,rgba(0,0,0,.95) 0%,rgba(0,0,0,.35) 60%,rgba(0,0,0,.15) 100%);}
.ptp-rhero>*{position:relative;z-index:2;}
.ptp-rhero-top{padding:18px 0;}
.ptp-rhero-top-in{display:flex;justify-content:space-between;align-items:center;gap:16px;font-size:12px;letter-spacing:.2em;text-transform:uppercase;color:var(--mut);font-weight:700;}
.ptp-rhero-top-in a{text-decoration:none;color:#fff;border-bottom:1px solid rgba(255,255,255,.4);padding-bottom:2px;}
.ptp-rhero-body{padding:70px 0 60px;}
.ptp-kicker{font-size:14px;letter-spacing:.26em;text-transform:uppercase;color:var(--mut);font-weight:700;margin:0 0 14px;}
.ptp-rtitle{font-size:clamp(48px,10vw,104px);margin:0;color:#fff;text-shadow:0 8px 36px rgba(0,0,0,.75);}
.ptp-rsub{font-size:clamp(15px,2.3vw,20px);color:#e6e6e6;letter-spacing:.03em;margin:16px 0 0;max-width:640px;text-shadow:0 2px 12px rgba(0,0,0,.6);}

/* Facts strip */
.ptp-facts{background:var(--bg2);border-bottom:1px solid var(--line);}
.ptp-facts .ptp-wrap{display:grid;grid-template-columns:repeat(4,minmax(0,1fr));}
.ptp-fact{padding:26px 12px;text-align:center;border-right:1px solid var(--line);}
.ptp-fact:last-child{border-right:none;}
.ptp-fact .l{display:block;font-size:11px;letter-spacing:.22em;color:var(--mut);text-transform:uppercase;font-weight:700;margin-bottom:8px;}
.ptp-fact .v{font-size:clamp(20px,3vw,30px);color:#fff;}

/* Document body */
.ptp-doc-sec{padding:56px 0;}
.ptp-doc{max-width:840px;margin:0 auto;}
.ptp-doc .lead{background:var(--bg2);border:1px solid var(--line);border-left:4px solid #fff;border-radius:12px;padding:24px 26px;margin:0 0 40px;}
.ptp-doc .lead p{color:#e6e6e6;font-size:17px;line-height:1.7;margin:0 0 12px;}
.ptp-doc .lead p:last-child{margin-bottom:0;}
.ptp-doc h2{font-family:'Airstrike',Impact,"Arial Narrow",sans-serif;text-transform:uppercase;font-weight:700;letter-spacing:.02em;line-height:1;font-size:clamp(24px,4vw,36px);color:#fff;margin:48px 0 18px;padding-top:22px;border-top:1px solid var(--line);}
.ptp-doc h2:first-of-type{margin-top:0;border-top:none;padding-top:0;}
.ptp-doc p{color:#d4d4d4;font-size:16.5px;line-height:1.78;margin:0 0 15px;}
.ptp-doc strong{color:#fff;font-weight:700;}
.ptp-doc a{color:#fff;text-decoration:none;border-bottom:1px solid rgba(255,255,255,.4);}
.ptp-doc a:hover{border-bottom-color:#fff;}
.ptp-doc .note{color:var(--mut);font-size:14.5px;}
.ptp-doc ul{margin:8px 0 16px;padding-left:20px;}
.ptp-doc li{color:#d4d4d4;font-size:16px;line-height:1.7;margin-bottom:8px;}

/* Table of contents */
.ptp-toc{background:var(--bg2);border:1px solid var(--line);border-radius:16px;padding:26px 28px;margin:0 0 44px;}
.ptp-toc .tt{font-size:12px;letter-spacing:.22em;text-transform:uppercase;color:var(--mut);font-weight:800;margin:0 0 16px;}
.ptp-toc ol{margin:0;padding:0;list-style:none;counter-reset:toc;display:grid;grid-template-columns:1fr 1fr;gap:8px 30px;}
.ptp-toc li{counter-increment:toc;margin:0;}
.ptp-toc a{display:block;color:#d4d4d4;text-decoration:none;font-size:14.5px;padding:6px 0;border:none;transition:color .15s ease;}
.ptp-toc a::before{content:counter(toc,decimal-leading-zero);color:var(--mut);font-weight:800;margin-right:10px;font-size:12px;}
.ptp-toc a:hover{color:#fff;}

/* Key/value blocks */
.ptp-kv{display:grid;grid-template-columns:repeat(2,1fr);gap:12px 26px;margin:6px 0 18px;}
.ptp-kv .row{background:var(--bg2);border:1px solid var(--line);border-radius:12px;padding:16px 18px;}
.ptp-kv .k{display:block;font-size:11px;letter-spacing:.18em;text-transform:uppercase;color:var(--mut);font-weight:800;margin-bottom:6px;}
.ptp-kv .v{color:#fff;font-size:16px;}

/* Categories grid */
.ptp-cats{display:grid;grid-template-columns:repeat(3,1fr);gap:10px;margin:8px 0 18px;}
.ptp-cat{background:var(--bg2);border:1px solid var(--line);border-radius:10px;padding:12px 14px;}
.ptp-cat .n{font-family:'Airstrike',Impact,sans-serif;text-transform:uppercase;color:#fff;font-size:18px;line-height:1;letter-spacing:.02em;}
.ptp-cat .r{color:var(--mut);font-size:13px;margin-top:6px;}

/* Program timeline */
.ptp-prog{margin:10px 0 18px;border:1px solid var(--line);border-radius:14px;overflow:hidden;}
.ptp-prog .row{display:flex;align-items:baseline;gap:18px;padding:14px 20px;border-bottom:1px solid var(--line);background:var(--bg2);}
.ptp-prog .row:last-child{border-bottom:none;}
.ptp-prog .h{font-family:'Airstrike',Impact,sans-serif;color:#fff;font-size:22px;min-width:78px;letter-spacing:.02em;}
.ptp-prog .e{color:#d4d4d4;font-size:16px;}

/* CTA + contacts + footer (shared with home) */
.ptp-sec{padding:60px 0;}
.ptp-h2{font-size:clamp(28px,5vw,46px);margin:0 0 8px;color:#fff;}
.ptp-lead2{color:var(--mut);margin:0 0 30px;font-size:17px;}
.ptp-cta{display:flex;flex-wrap:wrap;gap:14px;}
.ptp-btn{display:inline-block;font-family:'Montserrat',-apple-system,sans-serif;padding:15px 32px;border-radius:50px;font-weight:800;letter-spacing:.08em;text-transform:uppercase;font-size:15px;text-decoration:none;transition:transform .15s ease,box-shadow .15s ease;}
.ptp-page a.ptp-btn-1{background:#fff !important;color:#0a0a0a !important;box-shadow:0 10px 30px rgba(0,0,0,.5);border:none;}
.ptp-page a.ptp-btn-2{background:rgba(255,255,255,.08);color:#fff !important;border:2px solid rgba(255,255,255,.4);}
.ptp-btn:hover{transform:translateY(-2px);}
.ptp-contact{background:var(--bg2);border-top:1px solid var(--line);}
.ptp-clist{display:grid;grid-template-columns:repeat(2,1fr);gap:16px 40px;margin:0 0 34px;}
.ptp-clist a{color:#fff;text-decoration:none;border-bottom:1px solid rgba(255,255,255,.3);}
.ptp-clist .k{font-size:12px;letter-spacing:.2em;text-transform:uppercase;color:var(--mut);font-weight:700;display:block;margin-bottom:4px;}
.ptp-clist .v{font-size:18px;color:#f0f0f0;}
.ptp-foot{background:#060606;padding:26px 0;text-align:center;color:var(--mut);font-size:13px;letter-spacing:.04em;}

@media(max-width:760px){
  .ptp-facts .ptp-wrap{grid-template-columns:repeat(2,minmax(0,1fr));}
  .ptp-fact:nth-child(2){border-right:none;}
  .ptp-fact:nth-child(1),.ptp-fact:nth-child(2){border-bottom:1px solid var(--line);}
  .ptp-toc ol,.ptp-kv,.ptp-clist{grid-template-columns:1fr;}
  .ptp-cats{grid-template-columns:1fr 1fr;}
  .ptp-rhero{background-position:center 24%;}
  .ptp-rhero-body{padding:48px 0 40px;}
}
.ptp-rhero-body-in{display:flex;align-items:center;justify-content:space-between;gap:34px;}
.ptp-rhero-txt{min-width:0;}
.ptp-hero-spon{height:auto;max-height:140px;width:auto;flex:none;filter:drop-shadow(0 6px 18px rgba(0,0,0,.55));}
@media(max-width:760px){.ptp-rhero-body-in{flex-direction:column-reverse;align-items:flex-start;gap:18px;}.ptp-rhero-txt{width:100%;}.ptp-hero-spon{max-height:76px;}}
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
.ptp-doc h2[id]{scroll-margin-top:84px;}
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
      <a href="<?php echo esc_url( home_url('/') ); ?>">Evento</a>
      <a href="<?php echo esc_url( home_url('/') ); ?>#programma">Programma</a>
      <a href="<?php echo esc_url( home_url('/') ); ?>#info">Info utili</a>
      <a href="<?php echo esc_url( home_url('/') ); ?>#foto">Foto</a>
      <a href="<?php echo esc_url( home_url('/regolamento/') ); ?>" aria-current="page">Regolamento</a>
      <a href="<?php echo esc_url( home_url('/') ); ?>#contatti">Contatti</a>
      <a class="ptp-nav-cta" href="https://www.speedpassitalia.it/sp/gara/campania/2026/1002" target="_blank" rel="noopener">Iscriviti</a>
    </div>
  </div>
</nav>
<div class="ptp-page">

  <header class="ptp-rhero">
    <div class="ptp-rhero-top">
      <div class="ptp-wrap ptp-rhero-top-in">
        <span>IX Edizione &middot; MTB Campania Championship</span>
      </div>
    </div>
    <div class="ptp-rhero-body">
      <div class="ptp-wrap ptp-rhero-body-in">
        <div class="ptp-rhero-txt">
          <p class="ptp-kicker">Point to Point del Castello 2026</p>
          <h1 class="ptp-disp ptp-rtitle">Regolamento</h1>
          <p class="ptp-rsub">IX edizione &middot; Domenica 5 luglio 2026 &middot; Castello Ettore Fieramosca, Mignano Monte Lungo (CE)</p>
        </div>
        <img class="ptp-hero-spon" src="https://ptpdelcastello.netsons.org/wp-content/uploads/2026/07/Frame-35.png" alt="Main Sponsor - Estasi Profumerie" width="1294" height="1493">
      </div>
    </div>
  </header>

  <section class="ptp-facts">
    <div class="ptp-wrap">
      <div class="ptp-fact"><span class="l">Data</span><span class="ptp-disp v">5 Lug 2026</span></div>
      <div class="ptp-fact"><span class="l">Percorso</span><span class="ptp-disp v">37/38 km</span></div>
      <div class="ptp-fact"><span class="l">Dislivello</span><span class="ptp-disp v">1100 D+</span></div>
      <div class="ptp-fact"><span class="l">Start MTB</span><span class="ptp-disp v">09:00</span></div>
    </div>
  </section>

  <section class="ptp-doc-sec">
    <div class="ptp-wrap">
      <div class="ptp-doc">

        <div class="ptp-toc">
          <p class="tt">Indice del regolamento</p>
          <ol>
            <li><a href="#informazioni">Informazioni</a></li>
            <li><a href="#circuito">Circuito</a></li>
            <li><a href="#percorso">Percorso</a></li>
            <li><a href="#requisiti">Requisiti dei partecipanti</a></li>
            <li><a href="#categorie">Categorie</a></li>
            <li><a href="#iscrizioni">Iscrizioni</a></li>
            <li><a href="#programma">Programma gara</a></li>
            <li><a href="#verifica">Verifica, ritiro pacchi e chip</a></li>
            <li><a href="#cronometraggio">Cronometraggio</a></li>
            <li><a href="#griglia">Griglia di partenza</a></li>
            <li><a href="#premiazioni">Premiazioni</a></li>
            <li><a href="#servizi">Servizi</a></li>
            <li><a href="#sanitaria">Assistenza sanitaria</a></li>
            <li><a href="#comportamento">Prescrizioni comportamentali</a></li>
            <li><a href="#reclami">Reclami</a></li>
            <li><a href="#annullamento">Annullamento della manifestazione</a></li>
            <li><a href="#variazioni">Variazioni</a></li>
            <li><a href="#comunicazioni">Comunicazioni ufficiali</a></li>
            <li><a href="#norme">Norme di riferimento</a></li>
            <li><a href="#responsabilita">Responsabilita'</a></li>
            <li><a href="#consenso">Consenso informato</a></li>
          </ol>
        </div>

        <div class="lead">
          <p>L'<strong>ASD Estasi MTB</strong> organizza la IX edizione della <strong>Point to Point del Castello 2026</strong>, manifestazione di mountain bike agonistica e amatoriale in programma <strong>domenica 5 luglio 2026</strong> a Mignano Monte Lungo (CE). La manifestazione e' prova del <strong>Campionato MTB Campania Championship 2026</strong>.</p>
          <p><strong>Ritrovo:</strong> Castello Ettore Fieramosca, Mignano Monte Lungo (CE). &middot; <strong>Partenza gara MTB:</strong> ore 9.00. &middot; <strong>Partenza E-Bike:</strong> ore 9.05. &middot; <strong>Arrivo:</strong> area predisposta dall'organizzazione presso Mignano Monte Lungo.</p>
        </div>

        <h2 id="informazioni">Informazioni</h2>
        <p><strong>Organizzazione:</strong> ASD Estasi MTB</p>
        <div class="ptp-kv">
          <div class="row"><span class="k">Referente &middot; Sergio</span><span class="v"><a href="mailto:estasimtbmignano@gmail.com">estasimtbmignano@gmail.com</a><br><a href="tel:+393356092073">+39 335 609 2073</a></span></div>
          <div class="row"><span class="k">Referente &middot; Ermete</span><span class="v"><a href="tel:+393458335726">+39 345 833 5726</a><br><span class="note">Telefono / WhatsApp</span></span></div>
        </div>
        <p><strong>Pagina gara Speedpass:</strong> <a href="https://www.speedpassitalia.it/sp/gara/campania/2026/1002/" target="_blank" rel="noopener">Iscrizioni Point to Point del Castello 2026</a></p>

        <h2 id="circuito">Circuito</h2>
        <p><strong>Campionato MTB Campania Championship 2026.</strong></p>

        <h2 id="percorso">Percorso</h2>
        <p><strong>Percorso unico:</strong> circa <strong>37/38 km</strong>, dislivello positivo circa <strong>1.100/1.200 m D+</strong>. <strong>Difficolta':</strong> medio/alta. &middot; <strong>Vallevona dead track:</strong> 6 km. &middot; <strong>Fondo:</strong> 85% sterrato, 15% asfalto.</p>
        <p>Il percorso prevede salite impegnative, discese tecniche, single track, passaggi presso l'antico Castello del fiume Peccia, la pineta del Sacrario, il tunnel e il centro storico della Cicuta.</p>
        <p>Tutto il percorso sara' segnalato dall'organizzazione. Dove non espressamente indicato, deve essere applicato il principio della "giusta via", proseguendo sulla via principale senza deviazioni.</p>
        <p><strong>L'abbandono volontario della strada principale a favore di variazioni del tracciato, tagli o deviazioni non autorizzate comportera' la squalifica.</strong></p>
        <p>I punti difficili, come discese tecniche, curve, attraversamenti, ristori o punti di controllo, potranno essere segnalati con appositi cartelli o personale dell'organizzazione.</p>

        <h2 id="requisiti">Requisiti dei partecipanti</h2>
        <p>Possono partecipare gli atleti e gli amatori in possesso dei requisiti richiesti dalla normativa sportiva vigente e dall'ente di appartenenza, nonche' di <strong>idoneita' medico-sportiva valida per la pratica del ciclismo</strong>, ove prevista.</p>
        <p>I partecipanti devono essere in regola con il <strong>tesseramento sportivo per l'anno 2026</strong> o, se previsto dall'organizzazione e dalle norme applicabili, con le procedure di partecipazione previste per i non tesserati.</p>
        <p>La partecipazione e' consentita esclusivamente con <strong>biciclette idonee alla pratica della mountain bike e in corretto stato di manutenzione</strong>.</p>
        <p><strong>E' obbligatorio l'uso del casco omologato per attivita' ciclistica, correttamente allacciato per tutta la durata della manifestazione.</strong></p>
        <p>Con l'iscrizione il concorrente dichiara di essere consapevole che la partecipazione alla manifestazione richiede uno sforzo fisico intenso e prolungato e di essere nelle condizioni fisiche idonee per affrontare la gara.</p>

        <h2 id="categorie">Categorie</h2>
        <div class="ptp-cats">
          <div class="ptp-cat"><div class="n">Giovani</div><div class="r">M/F &middot; 13-16 anni</div></div>
          <div class="ptp-cat"><div class="n">Junior Sport</div><div class="r">M &middot; 17-18 anni</div></div>
          <div class="ptp-cat"><div class="n">Elite Sport</div><div class="r">M &middot; 19-29 anni</div></div>
          <div class="ptp-cat"><div class="n">M1</div><div class="r">M &middot; 30-34 anni</div></div>
          <div class="ptp-cat"><div class="n">M2</div><div class="r">M &middot; 35-39 anni</div></div>
          <div class="ptp-cat"><div class="n">M3</div><div class="r">M &middot; 40-44 anni</div></div>
          <div class="ptp-cat"><div class="n">M4</div><div class="r">M &middot; 45-49 anni</div></div>
          <div class="ptp-cat"><div class="n">M5</div><div class="r">M &middot; 50-54 anni</div></div>
          <div class="ptp-cat"><div class="n">M6</div><div class="r">M &middot; 55-59 anni</div></div>
          <div class="ptp-cat"><div class="n">M7+</div><div class="r">M &middot; 60 anni e oltre</div></div>
          <div class="ptp-cat"><div class="n">W</div><div class="r">F &middot; 17 anni e oltre</div></div>
          <div class="ptp-cat"><div class="n">E-Watt</div><div class="r">E-Bike &middot; partenza differita</div></div>
        </div>
        <p class="note">Le categorie potranno essere confermate, accorpate o modificate dall'organizzazione in base al numero degli iscritti e alle disposizioni dell'ente competente.</p>

        <h2 id="iscrizioni">Iscrizioni</h2>
        <p><strong>Le iscrizioni e le pre-iscrizioni sono obbligatorie.</strong> <strong>Non sara' possibile partecipare presentandosi sul posto senza iscrizione o pre-iscrizione.</strong></p>
        <p>Le pre-iscrizioni sono gratuite e sono necessarie per organizzare al meglio la gestione della gara. La quota di iscrizione e' fissata in <strong>euro 22,00 + euro 3,00 per il noleggio chip</strong>, da corrispondere sul posto.</p>
        <p>La pre-iscrizione dovra' essere effettuata <strong>entro e non oltre il 04/07/2026 alle ore 10.00</strong>. L'iscrizione potra' essere effettuata sul sito Speedpass alla pagina ufficiale della gara: <a href="https://www.speedpassitalia.it/sp/gara/campania/2026/1002/" target="_blank" rel="noopener">Iscrizioni Point to Point del Castello 2026</a>.</p>
        <p>L'iscrizione si concretizzera' con il pagamento della quota di iscrizione e del noleggio chip secondo le modalita' indicate dall'organizzazione. <strong>L'iscrizione comporta l'accettazione integrale del presente regolamento e del programma della manifestazione.</strong></p>
        <p>L'iscritto autorizza l'organizzazione a inserire i propri dati nelle liste necessarie alla gestione della gara, delle classifiche, delle comunicazioni ufficiali e dei servizi collegati alla manifestazione. Il trattamento dei dati personali richiesti e' indispensabile per poter effettuare l'iscrizione e gestire la partecipazione alla manifestazione.</p>

        <h2 id="programma">Programma gara</h2>
        <p><strong>Domenica 5 luglio 2026</strong></p>
        <div class="ptp-prog">
          <div class="row"><span class="h">07:00</span><span class="e">Ritiro pacchi gara e iscrizioni</span></div>
          <div class="row"><span class="h">08:30</span><span class="e">Chiusura ritiro pacchi gara</span></div>
          <div class="row"><span class="h">09:00</span><span class="e">Partenza gara MTB</span></div>
          <div class="row"><span class="h">09:05</span><span class="e">Partenza E-Bike</span></div>
          <div class="row"><span class="h">11:30</span><span class="e">Fine gara</span></div>
          <div class="row"><span class="h">12:00</span><span class="e">Pasta party</span></div>
          <div class="row"><span class="h">12:30</span><span class="e">Premiazione assoluti MTB</span></div>
        </div>
        <p class="note">Il programma potra' subire variazioni per esigenze tecniche, organizzative o di sicurezza.</p>

        <h2 id="verifica">Verifica, ritiro pacchi gara e chip</h2>
        <p>Il ritrovo, il ritiro pacchi gara e le operazioni preliminari si svolgeranno a <strong>Mignano Monte Lungo (CE)</strong>, presso il <strong>Castello Ettore Fieramosca</strong>. Il ritiro pacchi gara sara' possibile <strong>domenica 5 luglio 2026 dalle ore 7.00 alle ore 8.30</strong>.</p>
        <p>Ogni partecipante dovra' essere in possesso del numero di gara e del chip per la rilevazione dei tempi. Il costo del noleggio chip e' pari a <strong>euro 3,00</strong> e dovra' essere corrisposto sul posto insieme alla quota di iscrizione.</p>
        <p><strong>Il numero di gara e il chip identificativo devono essere correttamente posizionati e non devono essere manomessi.</strong> In caso di smarrimento, mancato utilizzo, errato posizionamento o deterioramento del chip, non sara' possibile garantire l'inserimento nelle classifiche.</p>
        <p><strong>I controlli sono obbligatori sia alla partenza sia lungo il percorso. Il mancato passaggio anche a un solo controllo potra' comportare l'esclusione dalla classifica.</strong></p>

        <h2 id="cronometraggio">Cronometraggio</h2>
        <p>Il servizio di cronometraggio sara' gestito tramite chip e in collaborazione con l'organizzazione. Le classifiche verranno stilate in base ai tempi rilevati e all'ordine di arrivo, nel rispetto delle categorie previste e delle eventuali disposizioni dell'ente competente.</p>
        <p><strong>Non sono ammessi chip diversi da quelli previsti per la manifestazione.</strong></p>

        <h2 id="griglia">Griglia di partenza</h2>
        <p>La disposizione in partenza sara' stabilita dall'organizzazione in base alle esigenze tecniche, organizzative e di sicurezza. La partenza della gara MTB e' prevista alle <strong>ore 9.00</strong>. La categoria E-Bike partira' in forma differita alle <strong>ore 9.05</strong>.</p>

        <h2 id="premiazioni">Premiazioni</h2>
        <p>Le premiazioni si svolgeranno a partire dalle <strong>ore 12.30</strong>. Saranno premiati gli assoluti MTB secondo quanto previsto dall'organizzazione. E' previsto un <strong>premio speciale per la squadra piu' numerosa</strong>.</p>
        <p><strong>I premi non sono cumulabili. I premi dovranno essere ritirati personalmente dagli aventi diritto. Non saranno accettati delegati o richieste di spedizione.</strong> I premi non ritirati potranno essere trattenuti dall'organizzazione o destinati secondo le decisioni del Comitato Organizzatore.</p>

        <h2 id="servizi">Servizi</h2>
        <p><strong>Servizi in gara:</strong> assistenza organizzativa lungo il percorso, segnalazione del tracciato, controlli e supporto nei punti predisposti.</p>
        <p><strong>Servizi dopo gara:</strong> pasta party a partire dalle <strong>ore 12.00</strong>. Ulteriori servizi saranno comunicati dall'organizzazione attraverso i canali ufficiali della manifestazione.</p>

        <h2 id="sanitaria">Assistenza sanitaria</h2>
        <p><strong>L'organizzazione predisporra' assistenza sanitaria secondo quanto previsto dalle disposizioni vigenti e dalle necessita' della manifestazione.</strong> In caso di incidente, caduta o difficolta', il concorrente dovra' attenersi alle indicazioni del personale dell'organizzazione, degli addetti alla sicurezza e del personale sanitario.</p>

        <h2 id="comportamento">Prescrizioni comportamentali</h2>
        <ul>
          <li><strong>E' fatto divieto di gettare rifiuti in qualsiasi posto non espressamente autorizzato e al di fuori degli appositi contenitori, pena la squalifica.</strong></li>
          <li><strong>Il concorrente e' tenuto a rimanere nel percorso tracciato e segnalato dall'organizzazione.</strong></li>
          <li>I concorrenti piu' lenti sono obbligati ad agevolare il sorpasso degli atleti piu' veloci.</li>
          <li>I passaggi non ben visibili devono essere affrontati con velocita' adeguata. Nei tratti di discesa non deve mai essere superato il proprio limite tecnico.</li>
          <li>Eventuali rotture tecniche del mezzo dovranno essere riparate fuori dal tracciato della gara e senza creare intralcio o pericolo agli altri concorrenti.</li>
          <li><strong>L'assistenza da parte di mezzi privati al seguito della corsa e' vietata</strong>, salvo nei punti eventualmente previsti e autorizzati dall'organizzazione.</li>
          <li><strong>E' obbligatorio l'uso e il corretto allacciamento del casco omologato per attivita' ciclistica.</strong></li>
        </ul>

        <h2 id="reclami">Reclami</h2>
        <p><strong>Eventuali reclami dovranno essere presentati alla giuria o all'organizzazione nei termini regolamentari</strong>, in forma scritta e secondo le modalita' previste dagli organismi competenti. L'eventuale tassa di reclamo, se prevista dal regolamento dell'ente competente, dovra' essere versata secondo le modalita' comunicate dall'organizzazione.</p>

        <h2 id="annullamento">Annullamento della manifestazione</h2>
        <p>La manifestazione avra' luogo in presenza di qualsiasi condizione atmosferica che non pregiudichi la <strong>sicurezza e la salute dei partecipanti</strong>.</p>
        <p><strong>La gara potra' essere interrotta, modificata o neutralizzata a discrezione del Direttore di Corsa e dell'organizzazione</strong>, qualora si rendesse necessario per ragioni di sicurezza, ordine pubblico, condizioni meteo, condizioni del percorso o cause di forza maggiore.</p>
        <p>Se, per cause di forza maggiore, la manifestazione non dovesse svolgersi, l'organizzazione comunichera' ogni decisione attraverso i canali ufficiali disponibili. Il Direttore di Corsa, per garantire la massima sicurezza a tutti i partecipanti, potra' stabilire la neutralizzazione di parte del percorso, modifiche al tracciato o sbarramenti orari. La comunicazione delle variazioni potra' avvenire prima della partenza, durante il briefing o direttamente nel corso della gara.</p>

        <h2 id="variazioni">Variazioni</h2>
        <p>Il Comitato Organizzatore si riserva la possibilita' di fare variazioni al regolamento, al programma, all'andamento e al profilo del percorso e alle modalita' di svolgimento della gara.</p>

        <h2 id="comunicazioni">Comunicazioni ufficiali</h2>
        <p><strong>La pagina Speedpass della gara e gli eventuali canali comunicati dall'organizzazione costituiscono gli strumenti ufficiali di informazione della manifestazione.</strong></p>
        <p><strong>Pagina gara:</strong> <a href="https://www.speedpassitalia.it/sp/gara/campania/2026/1002/" target="_blank" rel="noopener">Iscrizioni Point to Point del Castello 2026</a></p>

        <h2 id="norme">Norme di riferimento</h2>
        <p>Per quanto non contemplato nel presente regolamento, valgono le norme dell'ente sportivo competente, le disposizioni applicabili alla manifestazione e le decisioni del Comitato Organizzatore.</p>

        <h2 id="responsabilita">Responsabilita'</h2>
        <p>L'ASD Estasi MTB declina ogni responsabilita' per se' e per i propri collaboratori per incidenti o danni a persone o cose che dovessero verificarsi prima, durante e dopo la manifestazione o per effetto della stessa, salvo quanto previsto dalla legge.</p>
        <p><strong>La partecipazione avviene a proprio rischio. Con l'iscrizione il concorrente rinuncia, nei limiti consentiti dalla legge, a ogni pretesa nei confronti del Comitato Organizzatore e di tutte le persone fisiche e giuridiche coinvolte nell'organizzazione della manifestazione.</strong></p>

        <h2 id="consenso">Consenso informato a condizioni generali</h2>
        <p>Con l'iscrizione e la partecipazione il concorrente:</p>
        <ul>
          <li>rinuncia, nei limiti consentiti dalla legge, a ogni pretesa nei confronti del Comitato Organizzatore e di tutte le persone fisiche e giuridiche coinvolte nell'organizzazione della manifestazione;</li>
          <li>dichiara di essere in possesso dei requisiti prescritti dal presente regolamento e dalle norme in vigore;</li>
          <li>dichiara di aver preso visione delle caratteristiche del percorso e di saperlo affrontare con la dovuta prudenza;</li>
          <li>dichiara di non essere consapevolmente in condizioni che mettano a rischio se stesso o gli altri partecipanti alla manifestazione;</li>
          <li>dichiara di essere consapevole che la partecipazione alla manifestazione richiede uno sforzo fisico intenso e prolungato;</li>
          <li>esprime il consenso all'utilizzo delle proprie immagini e dei propri dati per le finalita' connesse alla manifestazione, nel rispetto della normativa vigente in materia di privacy;</li>
          <li><strong>conferma di aver preso visione e di accettare integralmente il presente regolamento.</strong></li>
        </ul>
        <p class="note">Mignano Monte Lungo, 5 luglio 2026</p>

      </div>
    </div>
  </section>

  <section class="ptp-sec ptp-contact">
    <div class="ptp-wrap">
      <h2 class="ptp-disp ptp-h2">Contatti &amp; Iscrizioni</h2>
      <p class="ptp-lead2">Per informazioni e iscrizioni contattaci o vai alla piattaforma ufficiale</p>
      <div class="ptp-clist">
        <div><span class="k">Email</span><span class="v"><a href="mailto:estasimtbmignano@gmail.com">estasimtbmignano@gmail.com</a></span></div>
        <div><span class="k">Telefono</span><span class="v"><a href="tel:+393356092073">+39 335 609 2073</a> &middot; <a href="tel:+393458335726">+39 345 833 5726</a></span></div>
        <div><span class="k">WhatsApp</span><span class="v"><a href="https://wa.me/393458335726?text=Ciao%20sono%20interessato%20a%20info%20sulla%20Point%20to%20Point%20del%20castello" target="_blank" rel="noopener">Scrivici su WhatsApp</a></span></div>
        <div><span class="k">Instagram</span><span class="v"><a href="https://instagram.com/estasimtb" target="_blank" rel="noopener">@estasimtb</a></span></div>
      </div>
      <div class="ptp-cta">
        <a class="ptp-btn ptp-btn-1" href="https://www.speedpassitalia.it/sp/gara/campania/2026/1002" target="_blank" rel="noopener">Vai alle iscrizioni</a>
        <a class="ptp-btn ptp-btn-2" href="<?php echo esc_url( home_url('/') ); ?>">Torna all'evento</a>
      </div>
    </div>
  </section>

  <footer class="ptp-foot">
    <div class="ptp-wrap">&copy; 2026 Point to Point del Castello &middot; ASD Estasi MTB</div>
  </footer>

</div>
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
