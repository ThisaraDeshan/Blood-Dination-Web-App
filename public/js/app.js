let menu = document.querySelector('#menu-icon');
let navlist = document.querySelector('.navlist');

menu.onclick = () => {
    menu.classList.toggle('bx-x');
    navlist.classList.toggle('open');
};

const sr = ScrollReveal ({
    distance: '65px',
    duration: 2600,
    delay: 450,
    reset: true
});

sr.reveal('.hero-text',{delay:200, origin: 'top'});
sr.reveal('.hero-img',{delay:450, origin: 'top'});
sr.reveal('.icons',{delay:500, origin: 'left'});
sr.reveal('.scroll-down',{delay:50000, origin: 'right'});

const searchBar = document.querySelector('.search-form input[type="text"]');
const searchButton = document.querySelector('.search-form button[type="submit"]');

function resizeSearchBar() {
  if (window.innerWidth <= 768) {
    searchBar.style.width = '100%';
    searchButton.style.width = '100%';
  } else {
    searchBar.style.width = '80%';
    searchButton.style.width = '20%';
  }
}

resizeSearchBar();

window.addEventListener('resize', resizeSearchBar);


//search bars
$(document).ready(function(){
 $('#search').on('keyup',function(){
     var query= $(this).val();
     $.ajax({
        url:"search",
        type:"GET",
        data:{'search':query},
        success:function(data){
            $('#search_list').html(data);
        }
 });
 //end of ajax call
})
});

// Initialize and add the map

