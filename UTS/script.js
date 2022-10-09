var icon = document.getElementById('icon');

if(localStorage.getItem('theme') == null){
    localStorage.setItem('theme','light'); 
}

let localData = localStorage.getItem('theme');

if(localData == 'light'){
    icon.src = 'image/icon/moon.png';
    document.body.classList.remove('dark-theme');
}else if(localData == 'dark'){
    icon.src = 'image/icon/sun.png';
    document.body.classList.add('dark-theme');
}

icon.onclick = function(){
    document.body.classList.toggle('dark-theme');
    if(document.body.classList.contains('dark-theme')){
        icon.src='image/icon/sun.png';
        localStorage.setItem('theme','dark');
    }else{
        icon.src='image/icon/moon.png';
        localStorage.setItem('theme','light');
    }
}

function check(){
    var konfirmasi = alert('Sorry, this feature is not available yet...');
    if(konfirmasi == true){
        
    }else{
    
    }
}

var navLinks = document.getElementById("navLinks");

function showMenu(){
    navLinks.style.right = "0";
    navLinks.style.display = "block";
}
function hideMenu(){
    navLinks.style.right = "-200px";
    navLinks.style.display = "none";
}

// function onImage() {
//     document.getElementById('logo').src = 'image/logo-chocolate.png'
//     document.getElementById('logo').alt = 'chocolate'
//   }
  
//   function outImage() {
//     document.getElementById('logo').src = 'image/logo-white.png'
//     document.getElementById('logo').alt = 'white'
//   }
