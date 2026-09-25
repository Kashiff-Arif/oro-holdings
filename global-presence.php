<?php
include_once "includes/base.php"; 
?>
<?php include_once "includes/header.php"; ?>


<div id="smooth-wrapper">
    <div id="smooth-content">
        <!-- Page Wrapper -->
        <div class="contentWrapper global-presence">
            <section class="inner-banner">
                 <div class="container position-relative">
                    <div class="inner-banner__logo">
                        <svg width="697" height="579" viewBox="0 0 697 579">
                            <use xlink:href="#logo"></use>
                        </svg>
                    </div>
                   <div class="inner-banner__caption">
                        <h1>global <span>presence</span>.</h1>
                        <p>
                            With a presence across established financial jurisdictions, ORO combines international capabilities with trusted local expertise to support clients across markets and generations.
                        </p>
                   </div>
                 </div>
            </section>
            <section class="presence">
                <div class="container">

                <div class="stage">
                <div class="map-wrap" id="mapWrap">
                    <img class="map map-base" src="src/images/world-map.svg?v=11" alt="World map showing ORO Holdings global offices" />
                    <img class="map map-hi" src="src/images/world-map.svg?v=11" alt="" aria-hidden="true" />
                    <!-- pins injected by JS -->
                </div>

                <!-- office card: fixed panel on desktop; slides up as a bottom sheet on mobile -->
                 <div class="card" id="card" aria-live="polite">
                        <span class="grabber" aria-hidden="true"></span>
                        <button class="sheet-close" id="sheetClose" type="button" aria-label="Close">&times;</button>
                        <div class="card-head">
                        <svg class="loc-ico" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                            <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7z" stroke="currentColor" stroke-width="1.5"/>
                            <circle cx="12" cy="9" r="2.5" stroke="currentColor" stroke-width="1.5"/>
                        </svg>
                        <h3 id="cCity"></h3>
                        </div>
                        <div class="jurisdiction" id="cJurisdiction" hidden>
                        <svg viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M12 3l7 2.5v5.5c0 4.6-3.1 7.6-7 8.8-3.9-1.2-7-4.2-7-8.8V5.5L12 3z" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round"/><path d="M9 12l2 2 4-4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                        </div>
                        <div class="divider"></div>
                        <div class="companies-label" id="cCompaniesLabel"></div>
                        <div class="companies" id="cCompanies"></div>
                    </div>
                </div>

                <div class="rail" id="rail"></div>
                <div class="sheet-backdrop" id="sheetBackdrop" hidden></div>
                </div>
            </section>
             <section class="cta-footer">
                <div class="container">
                    <div class="sectionHead text-center">
                        <h2 class="sectionHead__title">
                            Every great transaction Every great <span>  transaction</span>.
                        </h2>
                        <p>
                        Contact our team in confidence.
                        A member of our team will respond within 
                        one business day.
                        </p>
                        <div class="inline-buttons justify-content-center">
                            <a href="#" class="btn btn-primary dark">
                                ORO COMPANIES 
                                <span></span>
                            </a>
                            <a href="#" class="btn btn-white">
                                ARRANGE A CONVERSATION
                            </a>
                        </div>
                    </div>
                </div>
            </section>
        </div>
         <?php include_once "includes/footer.php"; ?>
    </div>
</div>
<?php include_once "includes/scripts.php"; ?>

<script>
  // ORO monogram markup reused inside every pin
  const ORO_MARK = `<svg viewBox="10.3 11.1 24 24" aria-hidden="true"><g>
    <path d="M26.1837 28.2518C26.4577 28.2451 26.7352 28.2362 27.0157 28.2249C27.1624 28.2189 27.3082 28.2124 27.4531 28.2051C27.9156 28.9054 28.3461 29.4746 28.6908 29.9048C29.3331 30.706 29.7242 31.0818 30.0282 31.3451C30.5192 31.7705 30.8138 31.9305 30.9065 31.9791C31.0568 32.0581 31.351 32.2139 31.6677 32.283C31.9787 32.3508 32.2715 32.3268 32.2939 32.4199C32.2959 32.4286 32.3012 32.4302 32.3012 32.5142C32.3012 32.5584 32.2959 32.5972 32.2895 32.6289C32.2874 32.6386 32.2794 32.6456 32.2695 32.6458C31.9486 32.6531 31.527 32.6606 31.032 32.6636C30.8112 32.6648 30.5791 32.6652 30.3133 32.6642C28.9697 32.6594 28.2978 32.657 28.1473 32.6131C27.7877 32.5085 27.3558 32.0219 26.4924 31.0489C25.9433 30.4302 25.263 29.5967 24.8921 29.0346C24.8781 29.0136 24.8499 28.9706 24.8093 28.909C24.6628 28.6877 24.4568 28.3772 24.1918 28.0054C24.1472 27.943 24.0822 27.8524 24.0021 27.7429C25.8014 28.0684 26.1875 28.1704 26.1831 28.2007C26.176 28.2479 25.1673 28.4173 24.2848 27.9184C23.791 27.6392 23.1775 27.555 22.4695 27.049C22.4625 27.0439 22.4532 27.0431 22.4453 27.0463C22.9654 26.7144 23.4534 26.3186 23.8957 25.8629C24.1082 25.6624 24.3555 25.3939 24.5906 25.0478C24.776 24.775 24.9127 24.5151 25.0136 24.2896C25.0333 24.3459 25.062 24.4247 25.0987 24.5179C25.1603 24.674 26.7043 26.9343 26.7043 26.9343C26.7043 26.9343 26.9544 27.3106 27.0793 27.4988C27.0862 27.5093 27.095 27.5178 27.1053 27.5237C27.1227 27.5348 27.1439 27.539 27.1649 27.535C27.6173 27.4504 28.2948 27.2672 28.9949 26.8303C31.5185 25.2551 31.7607 21.9873 31.8041 21.4028C31.901 20.0958 31.6451 19.0386 31.4544 18.4387C31.275 17.8743 31.0007 17.0396 30.2986 16.1873C29.9242 15.7328 29.0086 14.6217 27.4181 14.325C26.2993 14.1163 25.398 14.4135 25.0798 14.5336C24.3383 14.8135 23.8388 15.2363 23.4955 15.58C23.0764 15.1864 22.7014 14.9217 22.4758 14.7723C23.3046 14.2285 24.7165 13.5283 26.5247 13.5293C29.4332 13.5309 32.6838 15.3451 33.7415 18.681C34.6682 21.6037 33.6012 24.7118 31.4974 26.5153C29.8919 27.8915 28.0839 28.1639 27.3057 28.2336"/>
    <path d="M25.4225 18.5356C24.9553 17.1802 24.1658 16.2132 23.4912 15.58C23.072 15.1865 22.6971 14.9218 22.4714 14.7723C22.4684 14.7703 22.4656 14.7685 22.4626 14.7665C21.9865 14.4582 19.8057 13.1195 16.9277 13.6539C16.4734 13.7383 13.6133 14.3184 11.9254 17.0388C11.5391 17.6611 10.7359 19.1664 10.8275 21.1525C10.9563 23.9458 12.8121 26.7653 15.7033 27.8399C16.8143 28.2528 17.9934 28.3766 19.1466 28.2367C19.1571 28.6088 19.1462 28.9807 19.1476 29.3529C19.1551 31.334 19.1886 31.7821 18.8677 32.1044C18.7131 32.2596 18.3595 32.5031 17.5283 32.4078C17.5182 32.4066 17.5081 32.4115 17.5034 32.4204C17.4482 32.526 17.4857 32.6108 17.5037 32.6414C17.5081 32.6491 17.5164 32.6536 17.525 32.6536H23.205C23.2175 32.6536 23.2282 32.6443 23.23 32.632C23.2482 32.5039 23.248 32.4533 23.2428 32.428C23.2401 32.4151 23.2282 32.4068 23.2153 32.4082C23.0795 32.4238 22.8835 32.4329 22.6537 32.3951C22.3738 32.3491 22.0963 32.3097 21.8949 32.0882C21.7249 31.9014 21.6832 31.6692 21.6749 31.5168C21.6608 30.1831 21.6464 28.8495 21.6323 27.516C21.6321 27.5063 21.6376 27.4972 21.6464 27.493C21.6559 27.4884 21.6662 27.4833 21.6769 27.4779C21.6807 27.476 21.6848 27.474 21.6888 27.472C21.9118 27.3583 22.3542 27.0975 22.4379 27.0478C22.4389 27.0472 22.44 27.0468 22.441 27.0464C22.961 26.7144 23.449 26.3187 23.8914 25.8629C24.1614 25.5855 24.4143 25.2857 24.6476 24.9646C24.8916 24.5668 26.5397 21.7772 25.4225 18.5356ZM19.1422 20.8455C19.1097 24.3324 19.1139 26.3189 19.1313 27.488C19.0427 27.5098 18.9512 27.5285 18.857 27.5437C17.3826 27.7805 16.158 26.968 15.7921 26.7253C13.2012 25.0064 12.2628 20.3698 13.9045 17.313C13.9824 17.1679 15.1681 15.0235 17.0397 14.4483C17.6619 14.2568 18.2082 14.2546 18.3137 14.255C19.2877 14.2583 19.9986 14.6017 20.286 14.7453C20.7468 14.9753 21.1326 15.2642 21.4561 15.5772C19.1936 17.7494 19.1422 20.8455 19.1422 20.8455ZM22.4535 24.9378C22.4488 24.9327 22.4448 24.9273 22.4416 24.9212C22.0291 24.1491 21.1472 22.2305 21.4832 19.8037C21.5518 19.3078 21.7328 18.1068 22.4581 16.8906C22.69 17.2991 22.8456 17.6682 22.9524 17.9218C23.09 18.2485 23.4637 19.2016 23.5336 20.5063C23.5705 21.1943 23.6464 23.102 22.4535 24.9378Z"/>
  </g></svg>`;

  const LOCATIONS = [
    { id:'ae', code:'AE', city:'UAE', short:'UAE', country:'United Arab Emirates',
      companies:[
        {name:'ORO Holdings Ltd.', address:'RT-208, Level 1, Gate Avenue – South Zone, Dubai International Financial Centre, Dubai, U.A.E.', url:'#'},
        {name:'ORO Capital Ltd.', address:'Meydan Grandstand, 6th Floor, Meydan Road, Nad Al Sheba, Dubai, U.A.E.', url:'#'},
        {name:'ORO Investment Management Ltd.', address:'Address to be confirmed', url:'#'}
      ],
      lng:55.27, lat:25.20, x:66.00, y:42.20 },

    { id:'bah', code:'BAH', city:'Kingdom of Bahrain', short:'Bahrain', country:'Bahrain',
      companies:[
        {name:'ORO Family Office W.L.L', address:'Flat 16, Building 3000B, Road 1249, Block 1012, Hamala, Kingdom of Bahrain', url:'#'}
      ],
      lng:50.58, lat:26.22, x:63.40, y:40.20 },

    { id:'bvi', code:'BVI', city:'British Virgin Islands', short:'BVI', country:'British Virgin Islands',
      companies:[
        {name:'ORO Asset Management Ltd.', address:'Commerce House, Wickhams Cay 1, P.O. Box 3140, Road Town, Tortola, British Virgin Islands VG1110', url:'#'},
        {name:'ORO Investment Ltd.', address:'Address to be confirmed', url:'#'}
      ],
      lng:-64.62, lat:18.42, x:32.05, y:46.46 },

    { id:'chi', code:'CHI', city:'Channel Islands', short:'Channel Islands', country:'Guernsey', 
      companies:[
        {name:'ORO Structuring PCC Limited', address:'Suite 6, Provident House, Havilland Street, St Peter Port, Guernsey, Channel Islands, GY1 2QE', url:'#'}
      ],
      lng:-2.54, lat:49.46, x:49.29, y:24.13 },

    { id:'cay', code:'KY', city:'Cayman Islands', short:'Cayman', country:'Cayman Islands',
      companies:[
        {name:'ORO Investments Master Fund', address:'Cayman Islands — address to be confirmed', url:'#'}
      ],
      lng:-81.38, lat:19.29, x:27.39, y:45.83 },

    { id:'lux', code:'LUX', city:'Luxembourg', short:'Luxembourg', country:'Luxembourg',
      companies:[
        {name:'ORO Fund Management Sàrl', address:'2-4, Parc d\'Activités Capellen, L-8308 Capellen, Grand-Duché de Luxembourg', url:'#'}
      ],
      lng:6.13, lat:49.61, x:51.70, y:24.02 },
  ];

    const mapWrap    = document.getElementById('mapWrap');
  const rail       = document.getElementById('rail');
  const card       = document.getElementById('card');
  const backdrop   = document.getElementById('sheetBackdrop');
  const cCity      = document.getElementById('cCity');
  const cAddr      = document.getElementById('cAddr');
  const cCompanies = document.getElementById('cCompanies');

  const isMobile = () => window.matchMedia('(max-width:767px)').matches;

  const ARROW = `<svg width="15" height="15" viewBox="0 0 24 24" fill="none"><path d="M5 12h14M13 6l6 6-6 6" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"/></svg>`;

  // Build pins + rail
  LOCATIONS.forEach(loc=>{
    const pin = document.createElement('button');
    pin.className = 'pin';
    pin.type = 'button';
    pin.dataset.id = loc.id;
    pin.style.left = loc.x + '%';
    pin.style.top  = loc.y + '%';
    pin.setAttribute('aria-label', loc.city);
    pin.innerHTML = `<span class="disc">${ORO_MARK}</span>`;
    pin.addEventListener('click', e=>{ e.stopPropagation(); select(loc.id,{open:true}); });
    mapWrap.appendChild(pin);

    const item = document.createElement('button');
    item.className = 'rail-item';
    item.type = 'button';
    item.dataset.id = loc.id;
    item.innerHTML = `<span class="badge">${loc.code}</span><span class="rtext"><span class="rlabel">${loc.short}</span>${loc.jurisdiction?`<span class="rjuris">${loc.jurisdiction}</span>`:''}</span>`;
    item.addEventListener('mouseenter', ()=> select(loc.id));            // desktop: change on hover
    item.addEventListener('click', e=>{ e.stopPropagation(); select(loc.id,{open:true}); }); // mobile: tap opens sheet
    rail.appendChild(item);
  });

  function select(id, {open=false}={}){
    const loc = LOCATIONS.find(l=>l.id===id);
    if(!loc) return;

    document.querySelectorAll('.pin').forEach(p=>p.classList.toggle('is-active', p.dataset.id===id));
    document.querySelectorAll('.rail-item').forEach(r=>r.classList.toggle('is-active', r.dataset.id===id));

    cCity.textContent = loc.city;

    const comps = loc.companies || [];
    cCompaniesLabel.textContent = comps.length
      ? (comps.length>1 ? `ORO companies in ${loc.short}` : `ORO company in ${loc.short}`)
      : '';
    cCompanies.innerHTML = comps.map(c=>
      `<div class="company">
         <a class="co-head" href="${c.url}"><span class="co-name">${c.name}</span><span class="co-arrow" aria-hidden="true">${ARROW}</span></a>
         <div class="co-addr">${c.address || ''}</div>
       </div>`
    ).join('');

    if(open && isMobile()) openSheet();
  }

  function openSheet(){ card.classList.add('open'); backdrop.hidden=false; requestAnimationFrame(()=>backdrop.classList.add('show')); }
  function closeSheet(){ card.classList.remove('open'); backdrop.classList.remove('show'); setTimeout(()=>{ if(!card.classList.contains('open')) backdrop.hidden=true; },300); }

  document.getElementById('sheetClose').addEventListener('click', closeSheet);
  backdrop.addEventListener('click', closeSheet);
  document.addEventListener('keydown', e=>{ if(e.key==='Escape') closeSheet(); });

  select(LOCATIONS[0].id);
</script>
</body>

</html>