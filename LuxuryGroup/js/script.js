var icon = document.getElementById('icon-theme');

if(localStorage.getItem('theme') == null){
    localStorage.setItem('theme','dark'); 
}

let localData = localStorage.getItem('theme');

if(localData == 'dark'){
    icon.src = '../image/icon/sun.png';
    document.body.classList.remove('light-theme');
}else if(localData == 'light'){
    icon.src = '../image/icon/moon.png';
    document.body.classList.add('light-theme');
}

icon.onclick = function(){
    document.body.classList.toggle('light-theme');
    if(document.body.classList.contains('light-theme')){
        icon.src='../image/icon/moon.png';
        localStorage.setItem('theme','light');
    }else{
        icon.src='../image/icon/sun.png';
        localStorage.setItem('theme','dark');
    }
}

function check(){
    var konfirmasi = alert('Sorry, this feature is not available yet...');
    if(konfirmasi == true){
        
    }else{
    
    }
}

function checkLogout(){
    var konfirmasi = alert('Are you sure to logout?');
    if(konfirmasi){
        location.href = "index.html";
    }else{
    
    }
}

function fail_login(){
    alert('The username or password is incorrect, try again...');
}

var navLinks = document.getElementById("navLinks");

function showMenu(){
    navLinks.style.right = "0";
    // navLinks.style.display = "block";
}
function hideMenu(){
    navLinks.style.right = "-200px";
    // navLinks.style.display = "none";
}


// function onImage() {
//     document.getElementById('logo').src = 'image/logo-chocolate.png'
//     document.getElementById('logo').alt = 'chocolate'
//   }
  
//   function outImage() {
//     document.getElementById('logo').src = 'image/logo-white.png'
//     document.getElementById('logo').alt = 'white'
//   }