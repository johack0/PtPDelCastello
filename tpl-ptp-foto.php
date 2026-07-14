<?php
/**
 * Template Name: PtP del Castello - Foto
 * Description: Galleria foto 9a edizione. Griglia nativa + lightbox; immagini servite da Google Drive (nessun file sul sito).
 */
if (!defined('ABSPATH')) { exit; }

$ptp_drive_parent = '1STizjW3JwO4SedY83-3-sDANIpxeQJsQ';
$ptp_albums = array(
  array('label' => 'Benedetto',  'id' => '1Fu8BKXUSlXthq-h6WJyXSQ36SmIlozJC'),
  array('label' => 'Cesaro',     'id' => '16-G4Aeq6dLYIXfgItpgewhZvmsfaYY6x'),
  array('label' => 'Dario',      'id' => '1V5QqIm4a8eewqFTGob2Z2X6jBLkgJr71'),
  array('label' => 'Ermete',     'id' => '1W_W3C0VEXsvu0MqaVxliBZu-8Csrao2-'),
  array('label' => 'Finelli / Felice', 'id' => '1XpDDLt4-qG8mVSx4N4vdP3iVTLrPVO4Z', 'new' => true),
  array('label' => 'Ludovica / Alessio', 'id' => '1_ZYdEMNkSNde7iz56U8AGP1dWANEkV0B'),
  array('label' => 'Presidente', 'id' => '1-rfVdpLvSC4lGRduGJ4UAvf4adFk3JaU'),
);

/* Legge i file (foto + video) di una cartella Drive pubblica dalla pagina
   embeddedfolderview e li mette in cache 5 min (niente file caricati sul sito).
   Ogni voce: array('id' => ..., 'video' => bool). Il tipo si ricava dall'icona
   MIME (/16/type/video/... vs /16/type/image/...) presente in ciascuna entry. */
if (!function_exists('ptp_album_files')) {
  function ptp_album_files($folder_id) {
    $key = 'ptp_foto_f5_' . $folder_id;
    $cached = get_transient($key);
    if ($cached !== false) { return $cached; }
    $files = array();
    $resp = wp_remote_get('https://drive.google.com/embeddedfolderview?id=' . rawurlencode($folder_id) . '#grid', array('timeout' => 6));
    if (!is_wp_error($resp)) {
      $body = wp_remote_retrieve_body($resp);
      if (preg_match_all('#id="entry-([A-Za-z0-9_-]+)".*?/16/type/([a-z]+)/#s', $body, $m, PREG_SET_ORDER)) {
        $seen = array();
        foreach ($m as $one) {
          $id = $one[1];
          if (isset($seen[$id])) { continue; }
          $seen[$id] = true;
          $files[] = array('id' => $id, 'video' => ($one[2] === 'video'));
        }
      }
    }
    set_transient($key, $files, 5 * MINUTE_IN_SECONDS);
    return $files;
  }
}

$ptp_photo_ids = array();
foreach ($ptp_albums as $i => $al) { $ptp_photo_ids[$i] = ptp_album_files($al['id']); }
$ptp_default = 0;
foreach ($ptp_albums as $i => $al) { if (!empty($ptp_photo_ids[$i])) { $ptp_default = $i; break; } }
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Foto 2026 - Point to Point del Castello</title>
<meta name="description" content="Galleria fotografica della 9&ordf; edizione Point to Point del Castello - 5 luglio 2026.">
<meta name="robots" content="index,follow">
<meta property="og:type" content="website">
<meta property="og:locale" content="it_IT">
<meta property="og:site_name" content="Point to Point del Castello">
<meta property="og:title" content="Foto 2026 - Point to Point del Castello">
<meta property="og:description" content="Le foto della 9&ordf; edizione - 5 luglio 2026.">
<meta property="og:url" content="<?php echo esc_url( home_url('/foto/') ); ?>">
<meta property="og:image" content="https://ptpdelcastello.netsons.org/wp-content/uploads/2026/06/Point-to-Point-del-Castello-2026-Condivisione.jpg">
<meta name="twitter:card" content="summary_large_image">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="preconnect" href="https://lh3.googleusercontent.com" crossorigin>
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
.ptp-btn,.ptp-nav-cta,.ptp-nav-toggle,.ptp-tab,.ptp-gal-item{cursor:pointer;}
/* Header pagina foto */
.ptp-foto-hero{position:relative;background:#060606 url('https://ptpdelcastello.netsons.org/wp-content/uploads/2026/06/PtP-Hero-Ciclista-Castello.png') center 22%/cover no-repeat;padding:64px 0 48px;text-align:center;}
.ptp-foto-hero::before{content:"";position:absolute;inset:0;background:linear-gradient(0deg,rgba(0,0,0,.96) 0%,rgba(0,0,0,.6) 60%,rgba(0,0,0,.55) 100%);}
.ptp-foto-hero>*{position:relative;z-index:2;}
.ptp-foto-kicker{font-size:13px;letter-spacing:.26em;text-transform:uppercase;color:var(--mut);font-weight:700;margin:0 0 12px;}
.ptp-foto-title{font-size:clamp(40px,8vw,90px);margin:0;color:#fff;text-shadow:0 8px 36px rgba(0,0,0,.7);}
.ptp-foto-sub{color:#e6e6e6;margin:14px 0 0;font-size:16px;letter-spacing:.02em;}
/* Tabs */
.ptp-tabs{display:flex;justify-content:center;gap:10px;margin:0 0 20px;flex-wrap:wrap;}
.ptp-tab{background:rgba(255,255,255,.06);color:#e6e6e6;border:1px solid var(--line);border-radius:50px;padding:12px 26px;font-weight:800;letter-spacing:.06em;text-transform:uppercase;font-size:13px;font-family:'Montserrat',sans-serif;transition:background .15s ease,color .15s ease;}
.ptp-tab:hover{background:rgba(255,255,255,.12);}
.ptp-tab.active{background:#fff;color:#0a0a0a;}
.ptp-tab-count{display:inline-block;margin-left:7px;vertical-align:middle;background:rgba(255,255,255,.16);color:#fff;font-size:11px;font-weight:800;padding:1px 8px;border-radius:20px;line-height:1.5;font-variant-numeric:tabular-nums;}
.ptp-tab.active .ptp-tab-count{background:rgba(10,10,10,.14);color:#0a0a0a;}
.ptp-tab-new{display:inline-block;margin-left:8px;vertical-align:middle;background:#e11d2a;color:#fff;font-size:9px;font-weight:800;letter-spacing:.08em;text-transform:uppercase;padding:2px 7px;border-radius:20px;line-height:1.4;}
.ptp-tab.active .ptp-tab-new{background:#e11d2a;color:#fff;}
.ptp-panel{display:none;}
.ptp-panel.active{display:block;}
/* Griglia foto */
.ptp-gal{display:grid;grid-template-columns:repeat(auto-fill,minmax(165px,1fr));gap:8px;}
.ptp-gal-item{display:block;position:relative;aspect-ratio:1/1;overflow:hidden;border-radius:10px;background:#111;border:1px solid var(--line);padding:0;margin:0;}
.ptp-gal-item img{width:100%;height:100%;object-fit:cover;display:block;transition:transform .35s ease,opacity .3s ease;}
.ptp-gal-item:hover img{transform:scale(1.06);}
.ptp-gal-item.is-video::after{content:"";position:absolute;left:50%;top:50%;transform:translate(-50%,-50%);width:46px;height:46px;border-radius:50%;background:rgba(0,0,0,.55);border:2px solid rgba(255,255,255,.92);z-index:1;pointer-events:none;transition:background .15s ease;}
.ptp-gal-item.is-video::before{content:"";position:absolute;left:50%;top:50%;transform:translate(-38%,-50%);z-index:2;width:0;height:0;border-style:solid;border-width:9px 0 9px 15px;border-color:transparent transparent transparent #fff;pointer-events:none;}
.ptp-gal-item.is-video:hover::after{background:rgba(0,0,0,.72);}
.ptp-foto-empty{background:var(--bg2);border:1px solid var(--line);border-radius:16px;padding:40px 24px;text-align:center;}
.ptp-foto-empty .t{font-family:'Airstrike',Impact,sans-serif;font-size:22px;text-transform:uppercase;color:#fff;margin:0 0 8px;}
.ptp-foto-empty p{color:var(--mut);margin:0;}
.ptp-foto-note{color:var(--mut);font-size:13px;margin:20px 0 0;line-height:1.6;text-align:center;}
.ptp-foto-cta{text-align:center;margin-top:30px;display:flex;gap:14px;justify-content:center;flex-wrap:wrap;}
@media(max-width:560px){.ptp-gal{grid-template-columns:repeat(3,1fr);gap:5px;}.ptp-gal-item{border-radius:7px;}
.ptp-tabs{flex-wrap:nowrap;justify-content:flex-start;overflow-x:auto;-webkit-overflow-scrolling:touch;scrollbar-width:none;gap:8px;margin:0 -24px 18px;padding:2px 24px 6px;}
.ptp-tabs::-webkit-scrollbar{display:none;}
.ptp-tab{flex:0 0 auto;padding:11px 20px;font-size:12.5px;white-space:nowrap;}}
/* Lightbox */
.ptp-lb{position:fixed;inset:0;z-index:300;background:rgba(0,0,0,.95);display:none;align-items:center;justify-content:center;touch-action:none;padding:10px;}
.ptp-lb.open{display:flex;}
.ptp-lb-inner{display:flex;flex-direction:column;align-items:center;gap:16px;max-width:96vw;}
.ptp-lb-stage{display:flex;align-items:center;justify-content:center;}
.ptp-lb-stage img{max-width:96vw;max-height:70vh;width:auto;height:auto;object-fit:contain;border-radius:6px;box-shadow:0 20px 60px rgba(0,0,0,.6);}
.ptp-lb-video{width:min(96vw,960px);aspect-ratio:16/9;max-height:70vh;border:0;border-radius:6px;background:#000;box-shadow:0 20px 60px rgba(0,0,0,.6);}
.ptp-lb-bar{display:flex;align-items:center;justify-content:center;gap:24px;}
.ptp-lb-nav{background:rgba(255,255,255,.14);border:1px solid var(--line);color:#fff;width:52px;height:52px;border-radius:50%;font-size:28px;line-height:1;cursor:pointer;display:flex;align-items:center;justify-content:center;transition:background .15s ease;}
.ptp-lb-nav:hover{background:rgba(255,255,255,.26);}
.ptp-lb-counter{color:#cfcfcf;font-size:14px;letter-spacing:.05em;font-variant-numeric:tabular-nums;min-width:66px;text-align:center;}
.ptp-lb-close{position:absolute;top:12px;right:16px;font-size:40px;line-height:1;color:#fff;background:none;border:0;cursor:pointer;opacity:.85;z-index:2;}
.ptp-lb-close:hover{opacity:1;}
.ptp-lb-dl{position:absolute;top:14px;left:16px;z-index:2;display:inline-flex;align-items:center;gap:7px;background:rgba(255,255,255,.14);border:1px solid var(--line);color:#fff;text-decoration:none;font-family:'Montserrat',sans-serif;font-weight:700;font-size:13px;letter-spacing:.05em;text-transform:uppercase;padding:9px 16px;border-radius:40px;transition:background .15s ease;}
.ptp-lb-dl:hover{background:rgba(255,255,255,.26);}
@media(min-width:561px){
.ptp-lb-inner{max-width:94vw;}
.ptp-lb-stage img{max-height:88vh;}
.ptp-lb-video{max-height:82vh;}
.ptp-lb-bar{display:contents;}
.ptp-lb-nav{position:absolute;top:50%;transform:translateY(-50%);width:54px;height:54px;font-size:30px;}
.ptp-lb-prev{left:14px;}
.ptp-lb-next{right:14px;}
.ptp-lb-counter{position:absolute;left:0;right:0;bottom:14px;}
}
@media(max-width:560px){
.ptp-lb-close{top:8px;right:12px;font-size:34px;}
.ptp-lb-dl{font-size:12px;padding:8px 13px;top:10px;left:12px;}
}
/* Nav (identica alle altre pagine) */
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
/* FAB (identica) */
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
      <a href="<?php echo esc_url( home_url('/foto/') ); ?>" aria-current="page">Foto</a>
      <a href="<?php echo esc_url( home_url('/regolamento/') ); ?>">Regolamento</a>
      <a href="<?php echo esc_url( home_url('/') ); ?>#contatti">Contatti</a>
      <a class="ptp-nav-cta" href="<?php echo esc_url( home_url('/classifiche/') ); ?>">Classifiche</a>
    </div>
  </div>
</nav>
<div class="ptp-page">

  <header class="ptp-foto-hero">
    <div class="ptp-wrap">
      <p class="ptp-foto-kicker">9&ordf; Edizione &middot; 5 Luglio 2026 &middot; Mignano Montelungo (CE)</p>
      <h1 class="ptp-disp ptp-foto-title">Foto 2026 &#128248;</h1>
      <p class="ptp-foto-sub">Gli scatti della Point to Point del Castello, raccolti per autore</p>
    </div>
  </header>

  <section class="ptp-sec">
    <div class="ptp-wrap">
      <div class="ptp-tabs" role="tablist">
<?php foreach ($ptp_albums as $i => $al): $act = ($i === $ptp_default); $cnt = count($ptp_photo_ids[$i]); ?>
        <button class="ptp-tab<?php echo $act ? ' active' : ''; ?>" data-panel="album-<?php echo $i; ?>" role="tab" aria-selected="<?php echo $act ? 'true' : 'false'; ?>"><?php echo esc_html($al['label']); ?><?php if ($cnt): ?><span class="ptp-tab-count"><?php echo $cnt; ?></span><?php endif; ?><?php if (!empty($al['new'])): ?><span class="ptp-tab-new">New</span><?php endif; ?></button>
<?php endforeach; ?>
      </div>

<?php foreach ($ptp_albums as $i => $al): $act = ($i === $ptp_default); $files = $ptp_photo_ids[$i]; ?>
      <div class="ptp-panel<?php echo $act ? ' active' : ''; ?>" id="panel-album-<?php echo $i; ?>" role="tabpanel">
<?php if (empty($files)): ?>
        <div class="ptp-foto-empty">
          <p class="t">&#128248; Foto in arrivo</p>
          <p>Le foto di questo album verranno caricate a breve. Torna a trovarci!</p>
        </div>
<?php else: ?>
        <div class="ptp-gal">
<?php foreach ($files as $f): $fid = $f['id']; $isv = !empty($f['video']); ?>
          <button type="button" class="ptp-gal-item<?php echo $isv ? ' is-video' : ''; ?>" data-id="<?php echo esc_attr($fid); ?>" data-video="<?php echo $isv ? '1' : '0'; ?>" aria-label="<?php echo $isv ? 'Riproduci video' : 'Ingrandisci foto'; ?>"><img loading="lazy" src="https://drive.google.com/thumbnail?id=<?php echo rawurlencode($fid); ?>&amp;sz=w500" alt="<?php echo $isv ? 'Video Point to Point del Castello 2026' : 'Foto Point to Point del Castello 2026'; ?>"></button>
<?php endforeach; ?>
        </div>
<?php endif; ?>
      </div>
<?php endforeach; ?>

      <p class="ptp-foto-note">Tocca una foto per ingrandirla o un video per riprodurlo. I file sono ospitati su Google Drive; per scaricarli a piena risoluzione usa il pulsante qui sotto.</p>

      <div class="ptp-foto-cta">
        <a class="ptp-btn ptp-btn-1" href="https://drive.google.com/drive/folders/<?php echo rawurlencode($ptp_drive_parent); ?>" target="_blank" rel="noopener">Apri tutte le foto in Google Drive</a>
        <a class="ptp-btn ptp-btn-2" href="<?php echo esc_url( home_url('/') ); ?>">&larr; Torna alla home</a>
      </div>
    </div>
  </section>

  <footer class="ptp-foot">
    <div class="ptp-wrap">&copy; 2026 Point to Point del Castello &middot; ASD Estasi MTB</div>
  </footer>

</div>

<div class="ptp-lb" id="ptp-lb" role="dialog" aria-modal="true" aria-label="Foto ingrandita">
  <a class="ptp-lb-dl" href="#" target="_blank" rel="noopener" aria-label="Scarica questa foto">&#8681; Scarica</a>
  <button class="ptp-lb-close" type="button" aria-label="Chiudi">&times;</button>
  <div class="ptp-lb-inner">
    <div class="ptp-lb-stage"><img src="" alt="Foto Point to Point del Castello 2026"><iframe class="ptp-lb-video" src="" title="Video Point to Point del Castello 2026" allow="autoplay; fullscreen" allowfullscreen style="display:none"></iframe></div>
    <div class="ptp-lb-bar">
      <button class="ptp-lb-nav ptp-lb-prev" type="button" aria-label="Precedente">&#8249;</button>
      <div class="ptp-lb-counter"></div>
      <button class="ptp-lb-nav ptp-lb-next" type="button" aria-label="Successiva">&#8250;</button>
    </div>
  </div>
</div>

<div class="ptp-fab">
  <a class="ptp-fab-iscriviti" href="<?php echo esc_url(home_url('/classifiche/')); ?>">Classifiche</a>
  <a class="ptp-fab-wa" href="https://wa.me/393458335726?text=Ciao%20sono%20interessato%20a%20info%20sulla%20Point%20to%20Point%20del%20castello" target="_blank" rel="noopener" aria-label="Scrivici su WhatsApp"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.207-.242-.579-.487-.5-.669-.51l-.57-.01c-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg></a>
</div>
<script>
(function(){var nav=document.getElementById('ptp-nav');if(!nav)return;var btn=nav.querySelector('.ptp-nav-toggle');function set(o){nav.classList.toggle('open',o);if(btn){btn.setAttribute('aria-expanded',o?'true':'false');btn.setAttribute('aria-label',o?'Chiudi menu':'Apri menu');}}if(btn){btn.addEventListener('click',function(){set(!nav.classList.contains('open'));});}nav.querySelectorAll('.ptp-nav-links a').forEach(function(a){a.addEventListener('click',function(){set(false);});});})();
</script>
<script>
(function(){
  var tabs=[].slice.call(document.querySelectorAll('.ptp-tab'));
  var cont=document.querySelector('.ptp-tabs');
  function center(t){ if(!cont||!t)return; var c=cont.getBoundingClientRect(), r=t.getBoundingClientRect(); cont.scrollLeft += (r.left + r.width/2) - (c.left + c.width/2); }
  function activate(name,t){
    tabs.forEach(function(x){var on=x.getAttribute('data-panel')===name;x.classList.toggle('active',on);x.setAttribute('aria-selected',on?'true':'false');});
    document.querySelectorAll('.ptp-panel').forEach(function(p){p.classList.toggle('active',p.id==='panel-'+name);});
    center(t);
  }
  tabs.forEach(function(t){t.addEventListener('click',function(){activate(t.getAttribute('data-panel'),t);});});
  center(document.querySelector('.ptp-tab.active'));
})();
</script>
<script>
(function(){
  var lb=document.getElementById('ptp-lb'); if(!lb) return;
  var img=lb.querySelector('.ptp-lb-stage img'), ifr=lb.querySelector('.ptp-lb-video'), cnt=lb.querySelector('.ptp-lb-counter'), dl=lb.querySelector('.ptp-lb-dl');
  var cur=[], idx=0;
  function poster(id){ return 'https://drive.google.com/thumbnail?id='+id+'&sz=w1600'; }
  function preview(id){ return 'https://drive.google.com/file/d/'+id+'/preview'; }
  function show(){
    var f=cur[idx];
    if(f.video){ img.style.display='none'; img.src=''; ifr.src=preview(f.id); ifr.style.display=''; }
    else{ ifr.style.display='none'; ifr.src=''; img.src=poster(f.id); img.style.display=''; }
    if(dl){dl.href='https://drive.google.com/uc?export=download&id='+f.id;}
    cnt.textContent=(idx+1)+' / '+cur.length;
  }
  function open(items,i){ cur=items; idx=i; show(); lb.classList.add('open'); document.body.style.overflow='hidden'; }
  function close(){ lb.classList.remove('open'); document.body.style.overflow=''; img.src=''; ifr.src=''; }
  function nav(d){ if(!cur.length)return; idx=(idx+d+cur.length)%cur.length; show(); }
  document.querySelectorAll('.ptp-gal').forEach(function(g){
    var items=[].slice.call(g.querySelectorAll('.ptp-gal-item'));
    var data=items.map(function(it){return {id:it.getAttribute('data-id'),video:it.getAttribute('data-video')==='1'};});
    items.forEach(function(it,i){ it.addEventListener('click',function(){ open(data,i); }); });
  });
  lb.querySelector('.ptp-lb-close').addEventListener('click',close);
  lb.querySelector('.ptp-lb-prev').addEventListener('click',function(e){e.stopPropagation();nav(-1);});
  lb.querySelector('.ptp-lb-next').addEventListener('click',function(e){e.stopPropagation();nav(1);});
  lb.addEventListener('click',function(e){ if(e.target===lb||e.target.classList.contains('ptp-lb-inner')||e.target.classList.contains('ptp-lb-stage')) close(); });
  document.addEventListener('keydown',function(e){ if(!lb.classList.contains('open'))return; if(e.key==='Escape')close(); else if(e.key==='ArrowLeft')nav(-1); else if(e.key==='ArrowRight')nav(1); });
  var sx=null; lb.addEventListener('touchstart',function(e){sx=e.touches[0].clientX;},{passive:true});
  lb.addEventListener('touchend',function(e){ if(sx===null)return; var dx=e.changedTouches[0].clientX-sx; if(Math.abs(dx)>45)nav(dx<0?1:-1); sx=null; },{passive:true});
})();
</script>
<?php
if(function_exists('wp_dequeue_script')){foreach(array('gsap-js-scroll','gsap-js-smooth','gsap-js-observer','gsap-js-text','gsap-js-split','gsap-js-draw','gsap-js-motion','gsap-js-custom') as $h){wp_dequeue_script($h);wp_deregister_script($h);}}
?>
<?php wp_footer(); ?>
</body>
</html>
