<?php /* CherryValleySMP - drop this in new3/index.php */ ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>🍒 CherryValleySMP 🍒 — The Sweetest SMP Alive!</title>
<style>
  :root{
    --pink:#ff6fae; --pink2:#ff9ed2; --deep:#c2185b; --leaf:#5fd35f;
    --sky1:#ff9ec9; --sky2:#7b5cff; --sky3:#2b1055; --gold:#ffd84d;
  }
  *{margin:0;padding:0;box-sizing:border-box;font-family:'Trebuchet MS','Comic Sans MS',sans-serif;}
  html{scroll-behavior:smooth;}
  body{
    overflow-x:hidden; color:#fff; cursor:crosshair;
    background:linear-gradient(-45deg,var(--sky1),var(--sky2),var(--deep),var(--sky3),#2b1055);
    background-size:400% 400%;
    animation:bgmove 18s ease infinite;
  }
  @keyframes bgmove{0%{background-position:0 50%}50%{background-position:100% 50%}100%{background-position:0 50%}}

  /* ---------- floating background blocks ---------- */
  .bg-layer{position:fixed;inset:0;pointer-events:none;z-index:0;overflow:hidden;}
  .blob{position:absolute;font-size:42px;opacity:.55;animation:floaty 9s ease-in-out infinite;filter:drop-shadow(0 0 8px #fff6);}
  @keyframes floaty{0%,100%{transform:translateY(0) rotate(0)}50%{transform:translateY(-40px) rotate(25deg)}}

  /* ---------- falling petals ---------- */
  .petal{position:fixed;top:-40px;z-index:1;pointer-events:none;font-size:22px;animation:fall linear infinite;}
  @keyframes fall{
    0%{transform:translateY(-40px) rotate(0);opacity:0}
    10%{opacity:1}
    100%{transform:translateY(105vh) rotate(720deg);opacity:.3}
  }

  /* ---------- top marquee ---------- */
  .marquee{position:fixed;top:0;left:0;width:100%;background:#000a;border-bottom:3px solid var(--gold);
    z-index:50;white-space:nowrap;overflow:hidden;font-weight:bold;letter-spacing:1px;}
  .marquee span{display:inline-block;padding:8px 0;animation:scroll 16s linear infinite;color:var(--gold);text-shadow:0 0 8px var(--gold);}
  @keyframes scroll{0%{transform:translateX(100vw)}100%{transform:translateX(-100%)}}

  /* ---------- main content ---------- */
  .wrap{position:relative;z-index:10;max-width:1000px;margin:0 auto;padding:90px 18px 80px;text-align:center;}

  .logo{
    font-size:clamp(40px,9vw,96px);font-weight:900;line-height:1.05;
    background:linear-gradient(90deg,#fff,var(--pink),var(--gold),var(--leaf),var(--pink),#fff);
    background-size:300% auto;-webkit-background-clip:text;background-clip:text;color:transparent;
    animation:shine 5s linear infinite,wobble 4s ease-in-out infinite;
    text-shadow:0 8px 30px #0006;
  }
  @keyframes shine{to{background-position:300% center}}
  @keyframes wobble{0%,100%{transform:rotate(-2deg) scale(1)}50%{transform:rotate(2deg) scale(1.04)}}

  .sub{font-size:clamp(16px,3vw,26px);margin-top:8px;animation:pulse 2s ease-in-out infinite;}
  @keyframes pulse{0%,100%{transform:scale(1);opacity:.85}50%{transform:scale(1.08);opacity:1}}

  /* ---------- IP box ---------- */
  .ipbox{
    margin:34px auto;max-width:560px;background:#000000aa;border:4px dashed var(--gold);
    border-radius:20px;padding:22px;animation:glowbox 2.5s ease-in-out infinite;
  }
  @keyframes glowbox{0%,100%{box-shadow:0 0 18px var(--pink)}50%{box-shadow:0 0 45px var(--gold)}}
  .ip{font-size:clamp(20px,5vw,34px);font-weight:900;color:var(--gold);letter-spacing:1px;
      text-shadow:0 0 12px var(--gold);word-break:break-all;animation:bounceText 1.6s infinite;}
  @keyframes bounceText{0%,100%{transform:translateY(0)}50%{transform:translateY(-6px)}}

  /* ---------- buttons (everywhere) ---------- */
  .btn{
    display:inline-block;margin:8px;padding:14px 26px;font-size:18px;font-weight:900;cursor:pointer;
    border:none;border-radius:50px;color:#3a0020;text-decoration:none;position:relative;
    background:linear-gradient(135deg,var(--pink2),var(--gold));
    box-shadow:0 6px 0 var(--deep),0 10px 20px #0007;
    transition:transform .12s,box-shadow .12s,filter .2s;
    animation:btnIdle 3s ease-in-out infinite;
  }
  @keyframes btnIdle{0%,100%{transform:translateY(0) rotate(-1deg)}50%{transform:translateY(-4px) rotate(1deg)}}
  .btn:hover{transform:scale(1.15) rotate(-3deg);filter:hue-rotate(40deg) saturate(1.4);box-shadow:0 8px 0 var(--deep),0 14px 30px #000a;}
  .btn:active{transform:scale(.92);box-shadow:0 2px 0 var(--deep);}
  .btn.big{font-size:24px;padding:20px 44px;}
  .btn.green{background:linear-gradient(135deg,var(--leaf),#aaffaa);}
  .btn.blue{background:linear-gradient(135deg,#6fd0ff,#b48bff);}
  .btn.red{background:linear-gradient(135deg,#ff6f6f,var(--gold));}

  /* ---------- cards ---------- */
  .cards{display:flex;flex-wrap:wrap;gap:18px;justify-content:center;margin:30px 0;}
  .card{
    flex:1 1 240px;max-width:300px;background:#ffffff18;backdrop-filter:blur(6px);
    border:3px solid #fff5;border-radius:18px;padding:24px;transition:transform .2s,background .2s;
    animation:cardFloat 6s ease-in-out infinite;
  }
  .card:nth-child(2){animation-delay:.6s}.card:nth-child(3){animation-delay:1.2s}.card:nth-child(4){animation-delay:1.8s}
  @keyframes cardFloat{0%,100%{transform:translateY(0)}50%{transform:translateY(-14px)}}
  .card:hover{transform:scale(1.08) rotate(2deg);background:#ffffff33;}
  .card .ico{font-size:54px;display:block;animation:spin 6s linear infinite;}
  @keyframes spin{to{transform:rotate(360deg)}}
  .card h3{margin:10px 0 6px;font-size:22px;color:var(--gold);}

  h2.section{font-size:clamp(26px,6vw,46px);margin:50px 0 10px;
    text-shadow:3px 3px 0 var(--deep),6px 6px 0 #0005;animation:wobble 5s ease-in-out infinite;}

  /* ---------- copy toast ---------- */
  .toast{position:fixed;bottom:30px;left:50%;transform:translateX(-50%) translateY(120px);
    background:var(--leaf);color:#063a06;font-weight:900;padding:14px 28px;border-radius:40px;
    box-shadow:0 8px 24px #000a;z-index:200;transition:transform .35s cubic-bezier(.2,1.6,.4,1);font-size:18px;}
  .toast.show{transform:translateX(-50%) translateY(0);}

  /* ---------- floating creeper button ---------- */
  .floater{position:fixed;bottom:24px;right:24px;z-index:120;font-size:40px;cursor:pointer;
    animation:floaty 3s ease-in-out infinite;filter:drop-shadow(0 0 10px var(--leaf));background:none;border:none;}
  .floater:hover{transform:scale(1.4) rotate(20deg);}

  .musicbtn{position:fixed;bottom:24px;left:24px;z-index:120;}

  footer{position:relative;z-index:10;text-align:center;padding:30px;font-size:14px;color:#fff9;}
  .rainbow{animation:rainbow 3s linear infinite;font-weight:900;}
  @keyframes rainbow{0%{color:#ff6fae}25%{color:var(--gold)}50%{color:var(--leaf)}75%{color:#6fd0ff}100%{color:#ff6fae}}

  .counter{font-size:20px;margin-top:14px;font-weight:bold;color:var(--gold);}
  ::selection{background:var(--gold);color:#3a0020;}
</style>
</head>
<body>

<!-- background floating blocks -->
<div class="bg-layer" id="bgLayer"></div>

<!-- top marquee -->
<div class="marquee"><span>🍒 WELCOME TO CHERRYVALLEYSMP 🍒 THE SWEETEST SERVER IN MINECRAFT 🍒 JOIN NOW: cherryvalley.cookiehost.uk 🍒 SO MANY BLOSSOMS 🍒 SO MANY VIBES 🍒 CLICK ALL THE BUTTONS 🍒</span></div>

<div class="wrap">
  <h1 class="logo">🍒 CherryValleySMP 🍒</h1>
  <p class="sub">⛏️ The pinkest, blossomiest, most over-animated Minecraft SMP in existence ⛏️</p>

  <div class="ipbox">
    <div style="font-size:15px;letter-spacing:3px;color:#fff;">★ SERVER IP ★</div>
    <div class="ip" id="ipText">cherryvalley.cookiehost.uk</div>
    <button class="btn big green" onclick="copyIP()">📋 COPY THE IP NOW!!</button>
  </div>

  <div>
    <button class="btn big" onclick="confettiBoom()">🎉 JOIN US 🎉</button>
    <button class="btn blue" onclick="confettiBoom()">💬 DISCORD</button>
    <button class="btn red" onclick="copyIP()">🚀 PLAY NOW</button>
    <button class="btn green" onclick="confettiBoom()">⭐ VOTE</button>
    <button class="btn" onclick="scrambleTitle()">🌸 PARTY MODE</button>
  </div>

  <div class="counter">👀 Players online right now: <span id="playerCount">247</span> / 500</div>

  <h2 class="section">🌸 Why CherryValley? 🌸</h2>
  <div class="cards">
    <div class="card"><span class="ico">🌸</span><h3>Cherry Biomes</h3><p>Endless pink blossom valleys as far as the eye can render.</p></div>
    <div class="card"><span class="ico">🤝</span><h3>Friendly SMP</h3><p>No griefing, just vibes, builds, and chaotic good times.</p></div>
    <div class="card"><span class="ico">🏆</span><h3>Events & Comps</h3><p>Build battles, PvP nights, treasure hunts & sweet prizes.</p></div>
    <div class="card"><span class="ico">💎</span><h3>Cool Plugins</h3><p>Claims, shops, ranks, pets and way too many particles.</p></div>
  </div>

  <h2 class="section">🚪 How To Join 🚪</h2>
  <div class="cards">
    <div class="card"><span class="ico">1️⃣</span><h3>Open Minecraft</h3><p>Java Edition, latest version.</p></div>
    <div class="card"><span class="ico">2️⃣</span><h3>Add Server</h3><p>Paste <b>cherryvalley.cookiehost.uk</b></p></div>
    <div class="card"><span class="ico">3️⃣</span><h3>Hit Join</h3><p>Welcome to the valley, blossom! 🌸</p></div>
  </div>

  <h2 class="section">🍒 Ready? 🍒</h2>
  <button class="btn big green" onclick="copyIP()">📋 COPY IP &amp; PLAY!</button>
  <button class="btn big blue" onclick="confettiBoom()">🎊 BRING FRIENDS</button>
</div>

<button class="floater" title="boop the creeper" onclick="confettiBoom()">🟩</button>
<button class="floater musicbtn btn green" id="musicBtn" onclick="toggleMusic()">🔊 VIBES: OFF</button>

<div class="toast" id="toast">✅ IP Copied! See you in the valley 🍒</div>

<footer>
  Made with 🍒 &amp; way too many <span class="rainbow">animations</span> · CherryValleySMP &copy; 2026<br>
  <small>Not affiliated with Mojang. Just very enthusiastic.</small>
</footer>

<script>
/* ---- floating background blocks ---- */
const emojis=['🌸','🍒','🟩','⛏️','💎','🌷','🧱','✨','🦋','🍓'];
const bg=document.getElementById('bgLayer');
for(let i=0;i<22;i++){
  const b=document.createElement('div');b.className='blob';
  b.textContent=emojis[Math.floor(Math.random()*emojis.length)];
  b.style.left=Math.random()*100+'vw';b.style.top=Math.random()*100+'vh';
  b.style.fontSize=(26+Math.random()*40)+'px';
  b.style.animationDuration=(6+Math.random()*8)+'s';
  b.style.animationDelay=(-Math.random()*8)+'s';
  bg.appendChild(b);
}

/* ---- falling petals ---- */
function spawnPetal(){
  const p=document.createElement('div');p.className='petal';
  p.textContent=Math.random()>.5?'🌸':'🍒';
  p.style.left=Math.random()*100+'vw';
  p.style.animationDuration=(5+Math.random()*7)+'s';
  p.style.fontSize=(16+Math.random()*18)+'px';
  document.body.appendChild(p);
  setTimeout(()=>p.remove(),12000);
}
setInterval(spawnPetal,260);

/* ---- copy IP ---- */
function copyIP(){
  const ip='cherryvalley.cookiehost.uk';
  navigator.clipboard?.writeText(ip).catch(()=>{});
  const t=document.getElementById('toast');t.classList.add('show');
  confettiBoom();
  setTimeout(()=>t.classList.remove('show'),2200);
}

/* ---- confetti ---- */
function confettiBoom(){
  for(let i=0;i<40;i++){
    const c=document.createElement('div');
    c.textContent=emojis[Math.floor(Math.random()*emojis.length)];
    c.style.cssText='position:fixed;z-index:300;pointer-events:none;left:50%;top:50%;font-size:'+(16+Math.random()*22)+'px;transition:transform 1.1s ease-out,opacity 1.1s;';
    document.body.appendChild(c);
    requestAnimationFrame(()=>{
      const a=Math.random()*Math.PI*2,d=120+Math.random()*340;
      c.style.transform='translate('+Math.cos(a)*d+'px,'+Math.sin(a)*d+'px) rotate('+Math.random()*720+'deg)';
      c.style.opacity='0';
    });
    setTimeout(()=>c.remove(),1150);
  }
}

/* ---- party / scramble title ---- */
let party=false;
function scrambleTitle(){
  party=!party;
  document.body.style.animationDuration=party?'3s':'18s';
  document.querySelectorAll('.btn').forEach(b=>b.style.animationDuration=party?'.5s':'3s');
  confettiBoom();
}

/* ---- fake music toggle ---- */
let music=false;
function toggleMusic(){
  music=!music;
  document.getElementById('musicBtn').textContent=music?'🎵 VIBES: ON':'🔊 VIBES: OFF';
  confettiBoom();
}

/* ---- wiggling fake player counter ---- */
setInterval(()=>{
  const el=document.getElementById('playerCount');
  let n=parseInt(el.textContent)+Math.floor(Math.random()*7-3);
  n=Math.max(180,Math.min(499,n));el.textContent=n;
},1500);

/* ---- click anywhere = sparkle trail ---- */
document.addEventListener('click',e=>{
  for(let i=0;i<6;i++){
    const s=document.createElement('div');s.textContent='✨';
    s.style.cssText='position:fixed;z-index:300;pointer-events:none;left:'+e.clientX+'px;top:'+e.clientY+'px;font-size:'+(12+Math.random()*16)+'px;transition:transform .8s,opacity .8s;';
    document.body.appendChild(s);
    requestAnimationFrame(()=>{
      const a=Math.random()*Math.PI*2,d=30+Math.random()*70;
      s.style.transform='translate('+Math.cos(a)*d+'px,'+Math.sin(a)*d+'px)';s.style.opacity='0';
    });
    setTimeout(()=>s.remove(),800);
  }
},true);

/* ---- cursor petal trail ---- */
let last=0;
document.addEventListener('mousemove',e=>{
  if(Date.now()-last<70)return;last=Date.now();
  const s=document.createElement('div');s.textContent='🌸';
  s.style.cssText='position:fixed;z-index:5;pointer-events:none;left:'+e.clientX+'px;top:'+e.clientY+'px;font-size:14px;transition:transform .9s,opacity .9s;';
  document.body.appendChild(s);
  requestAnimationFrame(()=>{s.style.transform='translateY(34px) rotate(180deg)';s.style.opacity='0';});
  setTimeout(()=>s.remove(),900);
});
</script>
</body>
</html>
