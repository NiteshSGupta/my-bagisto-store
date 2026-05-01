tailwind.config = {
  theme: {
    extend: {
      colors: {
        'green': '#5A7014', 
        'darkgreen': '#1F5710', 
        'cream' : '#FFFCE2', 
        'darkcream': '#F7F1BD',
        'olive':"#C4C458",
      },
      fontFamily: {
        'theme' :'Avenir',
        'header': 'Soft Aura',
      }
    }
  }
}

$('.home-banner .owl-carousel').owlCarousel({
  items: 1,
  loop:true,
  margin:10,
  nav:false,
  dots: false,
  animateIn: 'fadeIn',
  animateOut: 'fadeOut',
  smartSpeed: 800,      
  autoplay: true,
  autoplayTimeout: 5000
});

$('.experience .owl-carousel').owlCarousel({
  items: 1,
  margin:10,
  loop: true,
  nav: true,
  navText: [
    '<i class="fa-solid fa-angle-left"></i>',
    '<i class="fa-solid fa-angle-right"></i>'
  ],
  navClass: [
    'owl-prev !bg-cream !text-green !border !border-solid !border-green w-9 h-9 sm:w-10 sm:h-10 rounded-full flex items-center justify-center transition-all duration-300',
    'owl-next !bg-cream !text-green !border !border-solid !border-green w-9 h-9 sm:w-10 sm:h-10 rounded-full flex items-center justify-center transition-all duration-300'
  ],
  dots: false,
  animateIn: 'fadeIn',
  animateOut: 'fadeOut',
  smartSpeed: 800,      
  autoplay: true,
  autoplayTimeout: 5000,
  autoplayHoverPause: true
});

$('.we-stand .owl-carousel').owlCarousel({
  loop:true,
  margin:15,
  nav:false,
  dots: true,
  responsive:{
    0:{ items:1},
    400:{items:2},
    536:{items:3},
    768:{items:4},
    1024:{items:5},
    1280:{items:5,margin:45}
  }
});

$('.crafted .owl-carousel').owlCarousel({
  loop:true,
  margin:10,
  nav:false,
  dots: true,
  responsive:{
    0:{ items:1},
    300:{ items:2},
    420:{ items:3},
    550:{ items:4},
    768:{items:5}
  }
});

$('.gift-essentials .owl-carousel').owlCarousel({
  loop:true,
  margin:12,
  nav:false,
  dots: true,
  responsive:{
    0:{ items:1},
    550:{ items:2},
    768:{ items:3},
    1280:{items:4}
  }
});

$('.product-slider .owl-carousel').owlCarousel({
  items: 1,
  loop:true,
  margin:10,
  nav: true,
  navText: [
    '<i class="fa-solid fa-angle-left"></i>',
    '<i class="fa-solid fa-angle-right"></i>'
  ],
  navClass: [
    'owl-prev !bg-cream !text-green !border !border-solid !border-green w-9 h-9 sm:w-10 sm:h-10 rounded-full flex items-center justify-center transition-all duration-300',
    'owl-next !bg-cream !text-green !border !border-solid !border-green w-9 h-9 sm:w-10 sm:h-10 rounded-full flex items-center justify-center transition-all duration-300'
  ],
  dots: false,
  animateIn: 'fadeIn',
  animateOut: 'fadeOut',
  smartSpeed: 800,      
  autoplay: true,
  autoplayTimeout: 5000
});

$('.product-explore-slider .owl-carousel').owlCarousel({
  loop:true,
  margin:15,
  nav:false,
  dots: true,
  responsive:{
    0:{ items:1},
    520:{ items:2},
    1024:{ items:3},
    1280:{items:4}
  }
});

$('.hamper-slider .owl-carousel').owlCarousel({
  loop:true,
  margin:15,
  nav:false,
  dots: true,
  responsive:{
    0:{ items:1},
    768:{ items:2},
    1280:{items:3}
  }
});

// header sidebar 
const t=document.getElementById('menu-toggle'),
      o=document.getElementById('offcanvas'),
      l=document.getElementById('offcanvas-overlay'),
      c=document.getElementById('offcanvas-close'),
      m=document.getElementById('menu'),
      p=document.querySelector('.container');

const open=()=>{o.classList.remove('-translate-x-full');l.classList.remove('hidden');
  o.appendChild(m);m.className='flex flex-col h-full overflow-y-auto';};

const close=()=>{o.classList.add('-translate-x-full');l.classList.add('hidden');};

t.onclick=open;c.onclick=l.onclick=close;

window.onresize=()=>{if(innerWidth>=1024){
  close();p.insertBefore(m,p.children[1]);
  m.className='hidden lg:flex lg:items-center lg:space-x-4 lg:w-[90%] lg:justify-evenly';
}};

// header dropdown
const closeAll = () =>
  document.querySelectorAll('.dropdown-menu')
    .forEach(m => m.classList.add('hidden'));

document.addEventListener('click', e => {
  if (window.innerWidth >= 1024) return closeAll();

  const btn = e.target.closest('.dropdown-btn');
  if (!btn) return closeAll();

  e.preventDefault();

  const menu = btn.nextElementSibling;

  document.querySelectorAll('.dropdown-menu').forEach(m => {
    if (m !== menu) m.classList.add('hidden');
  });

  menu.classList.toggle('hidden');
});

/* Close dropdowns on resize (Chrome responsive fix) */
window.addEventListener('resize', () => {
  if (window.innerWidth >= 1024) closeAll();
});

// home tabs
// const tabs = document.querySelectorAll('.tab-btn');
// const contents = document.querySelectorAll('.tab-content');

// tabs.forEach(tab => tab.onclick = () => {
//   tabs.forEach(t => t.classList.toggle('active', t === tab));
//   contents.forEach(c => c.classList.toggle('hidden', c.id !== tab.dataset.tab));
// });

// 5 star rating js
const ratings = document.querySelectorAll('.rating');
ratings.forEach(r => {
  const ll = [...r.querySelectorAll('label')].reverse();
  let s = -1;
  const f = i => ll.forEach((e, x) => {
    const t = e.querySelector('.fa-star');
    t.classList.toggle('fa-solid', x <= i);
    t.classList.toggle('fa-regular', x > i);
  });
  ll.forEach((e, i) => {
    e.onmouseenter = () => f(i);
    e.onclick = () => {
      s = i;
      r.querySelectorAll('input')[i].checked = true;
      f(i);
    };
  });
  r.onmouseleave = () => f(s);
});

// Experience and Visualise slider homepage
document.querySelectorAll('.hotspot').forEach(hotspot => {
  const hotspotBtn = hotspot.querySelector('.hotspot-btn'),
        tooltip = hotspot.querySelector('.hotspot-tooltip'),
        container = hotspot.closest('.item');

  let hideTimeout;

  const positionTooltip = () => {
    const btnRect = hotspotBtn.getBoundingClientRect(),
          tooltipRect = tooltip.getBoundingClientRect(),
          containerRect = container.getBoundingClientRect();

    Object.assign(tooltip.style, {top: 'auto', right: 'auto', bottom: 'auto', left: 'auto'});

    const spaceRight = containerRect.right - btnRect.right,
          spaceLeft = btnRect.left - containerRect.left,
          spaceTop = btnRect.top - containerRect.top,
          spaceBottom = containerRect.bottom - btnRect.bottom;

    if (spaceRight > tooltipRect.width + 12) 
      Object.assign(tooltip.style, { left: '110%', top: '50%', transform: 'translateY(-50%)' });
    else if (spaceLeft > tooltipRect.width + 12) 
      Object.assign(tooltip.style, { right: '110%', top: '50%', transform: 'translateY(-50%)' });
    else if (spaceBottom > tooltipRect.height + 12) 
      Object.assign(tooltip.style, { top: '110%', left: '50%', transform: 'translateX(-50%)' });
    else 
      Object.assign(tooltip.style, { bottom: '110%', left: '50%', transform: 'translateX(-50%)' });  
  };

  const showTooltip = () => {
    clearTimeout(hideTimeout);
    tooltip.classList.add('show');
    requestAnimationFrame(positionTooltip);
  };

  const hideTooltip = () => {
    hideTimeout = setTimeout(() => tooltip.classList.remove('show'), 120);
  };

  hotspotBtn.addEventListener('mouseenter', showTooltip);
  hotspotBtn.addEventListener('mouseleave', hideTooltip);
  tooltip.addEventListener('mouseenter', () => clearTimeout(hideTimeout));
  tooltip.addEventListener('mouseleave', hideTooltip);

  ['resize', 'orientationchange'].forEach(eventName => 
    window.addEventListener(eventName, () => tooltip.classList.contains('show') && requestAnimationFrame(positionTooltip))
  );
});

// gifting tabs
const tabs = document.querySelectorAll(".gift-tab-sec .tab-btn");

tabs.forEach(tab => tab.addEventListener("click", () => {

  tabs.forEach(btn => {
    btn.classList.remove("bg-darkgreen","text-darkcream","border-darkgreen");
    btn.classList.add("bg-white","text-darkgreen","border-yellow-500","hover:bg-darkcream","transition","duration-300");
  });

  tab.classList.add("bg-darkgreen","text-darkcream","border-darkgreen");
  tab.classList.remove("bg-white","text-darkgreen","border-yellow-500","hover:bg-darkcream");

  const id = tab.dataset.tab;

  document.querySelectorAll(".tab-content,.tab-img")
    .forEach(el => el.classList.add("hidden"));

  document.getElementById(id).classList.remove("hidden");
  document.getElementById(id + "-img").classList.remove("hidden");

}));

// password field eye icon btn
document.querySelectorAll(".password-wrapper").forEach(wrapper => {
  const input = wrapper.querySelector(".password-input");
  const toggle = wrapper.querySelector(".toggle-password");

  toggle.onclick = () => {
    const isPassword = input.type === "password";
    input.type = isPassword ? "text" : "password";

    toggle.innerHTML = `<i class="fa-solid ${
      isPassword ? "fa-eye-slash" : "fa-eye"
    } text-gray-500 text-lg"></i>`;

    window.FontAwesome?.dom.i2svg();
  };
});

// product count
let count = 0;

const countEl = document.getElementById("count");
const plus = document.getElementById("plus");
const minus = document.getElementById("minus");

plus.onclick = () => {
  count++;
  countEl.textContent = count;
};

minus.onclick = () => {
  if (count > 0) {
    count--;
    countEl.textContent = count;
  }
};

// accordion btn
document.querySelectorAll(".accordionBtn").forEach(btn => {
  btn.onclick = () => {
    const acc = btn.closest(".accordion");
    const content = acc.querySelector(".accordionContent");
    const icon = acc.querySelector(".icon");

    const open = content.classList.contains("max-h-[500px]");

    document.querySelectorAll(".accordionContent").forEach(c => c.classList.toggle("max-h-[500px]", false));
    document.querySelectorAll(".accordionContent").forEach(c => c.classList.toggle("max-h-0", true));
    document.querySelectorAll(".icon").forEach(i => i.classList.remove("rotate-180"));

    if (!open) {
      content.classList.replace("max-h-0", "max-h-[500px]");
      icon.classList.add("rotate-180");
    }
  };
});


