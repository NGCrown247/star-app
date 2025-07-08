const scrollBtn = document.getElementById("scrollUpBtn");

window.onscroll = function () {
    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 300) {
        scrollBtn?.classList.remove('d-none');  // show button
    } else {
        scrollBtn?.classList.add('d-none');     // hide button
    }
};

// GENERAL SIDEBAR
const menuBtn = document.querySelector('#menu-icon-box');
const sidebar = document.querySelector('.my-sidebar');
const closeBtn = document.querySelector('#close-btn');
const overlay = document.querySelector('.back-drop');

// DASHBOARD SIDEBAR
const dashMenuBtn = document.querySelector('.dash-menu-icon-box');
const dashSidebar = document.querySelector('.dash-sidebar');
const dashOverlay = document.querySelector('.dash-back-drop');
const dashCloseBtn = document.querySelector('#dash-close-btn');


// Open general sidebar
menuBtn?.addEventListener('click', () => {
    sidebar.classList.add('active');
    overlay.classList.add('active');
    document.body.classList.add('sidebar-open');
});

closeBtn?.addEventListener('click', () => {
    sidebar.classList.remove('active');
    overlay.classList.remove('active');
    document.body.classList.remove('sidebar-open');
});

overlay?.addEventListener('click', () => {
    sidebar.classList.remove('active');
    overlay.classList.remove('active');
    document.body.classList.remove('sidebar-open');
});

// Open dashboard sidebar
dashMenuBtn?.addEventListener('click', () => {
    dashSidebar.classList.add('active');
    dashOverlay.classList.add('active');
    document.body.classList.add('sidebar-open');
    dashMenuBtn.classList.add('active');
    dashCloseBtn.classList.add('active');
    console.log('MENU CLICKED');
});

dashOverlay?.addEventListener('click', () => {
    dashSidebar.classList.remove('active');
    dashOverlay.classList.remove('active');
    dashCloseBtn.classList.remove('active');
    dashMenuBtn.classList.remove('active');
    document.body.classList.remove('sidebar-open');
});


// Close if click outside
document.addEventListener('click', (e) => {
    // MAIN SIDEBAR
    if (sidebar?.classList.contains('active') &&
        !sidebar.contains(e.target) &&
        !menuBtn.contains(e.target)) {
        sidebar.classList.remove('active');
        overlay.classList.remove('active');
        document.body.classList.remove('sidebar-open');
    }

    // DASHBOARD SIDEBAR
    if (dashSidebar?.classList.contains('active') &&
        !dashSidebar.contains(e.target) &&
        !dashMenuBtn.contains(e.target)) {
        dashSidebar.classList.remove('active');
        dashOverlay.classList.remove('active');
        dashCloseBtn.classList.remove('active');
        dashMenuBtn.classList.remove('active');
        document.body.classList.remove('sidebar-open');
    }

});



const $=(id)=> document.getElementById(id);

// ALERT
let startAlert = $('startAlert');
let popupAlert = $('popAlert');

// GET STARTED
let getStarted = $('getStarted');

function successAlert(){
  popupAlert.classList.add('active');

  setTimeout( ()=>{
    popupAlert.classList.remove('active');
  },2000)

}
 successAlert()


