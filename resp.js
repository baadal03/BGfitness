burger = document.querySelector('.burger')
navbar = document.querySelector('.navbar')
navlist = document.querySelector('.nav-list')
rightnav = document.querySelector('.rightnav')




burger.addEventListener('click', () => {
    navbar.classList.toggle('h-nav-resp');
    navlist.classList.toggle('v-nav-resp');
    rightnav.classList.toggle('v-nav-resp');

})

   function myfun() {
        window.open('http://localhost/websites/login.php');
    }

    function clicked() {
        window.open('http://localhost/websites/signup.php');
    }
    function mypage() {
        window.open('http://localhost/websites/signup.php');
    }
