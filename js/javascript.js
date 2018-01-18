//Меню для девайсов
$(document).ready(function(){ 
      var touch   = $('.mobile-menu');
      var menu    = $('.main-navigation');
  
      $(touch).on('click', function(e) {
          e.preventDefault();
          menu.slideToggle();
      });
     
      $(window).resize(function(){
          var w = $(window).width();
          if(w > 767 && menu.is(':hidden')) {
              menu.removeAttr('style');
          }
      });
    });
//Модальное окно
var link = document.querySelector(".order");
var popup = document.querySelector(".modal-content");
var close = document.querySelector(".modal-content-close");
var userName = popup.querySelector("[name=user]");
var phone = popup.querySelector("[name=phone]");
var form = popup.querySelector("form");

link.addEventListener("click", function(event) {
  event.preventDefault();
  popup.classList.add("modal-content-show");
  userName.focus();
});

close.addEventListener("click", function(event) {
  event.preventDefault();
  popup.classList.remove("modal-content-show");
  popup.classList.remove("modal-error");
});

form.addEventListener("submit", function(event) {
  if (!userName.value || !phone.value) {
    event.preventDefault();
    popup.classList.add("modal-error");
  } else {
    localStorage.setItem("order", user.value);
  }
});