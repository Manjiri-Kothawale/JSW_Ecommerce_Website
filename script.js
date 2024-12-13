let menubar = document.querySelector("#menu-bar");
let mynav = document.querySelector(".nav");
let searchbar = document.querySelector("#search-bar");
let search = document.querySelector(".search-form");

menubar.onclick = () => {
    menubar.classList.toggle('fa-times');
  mynav.classList.toggle('active');
};

searchbar.onclick = () => {  
  search.classList.toggle('active');
};

    $(document).ready(function(){
        $('.slider').slick({
            arrows: true, // Show arrows for navigation
            prevArrow: '<button type="button" class="slick-prev">Previous</button>',
            nextArrow: '<button type="button" class="slick-next">Next</button>'
            // Add more options as needed
        });
    });

  

    document.addEventListener('DOMContentLoaded', function() {
      const readMoreBtns = document.querySelectorAll('.read-more-btn');
  
      readMoreBtns.forEach(btn => {
          btn.addEventListener('click', function() {
              const container = this.closest('.container');
              const additionalContent = container.querySelector('.additional-content');
              additionalContent.classList.toggle('hidden');
          });
      });
  });
  
