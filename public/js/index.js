let section = document.querySelectorAll("section");
let menu = document.querySelectorAll("header nav a");

window.onscroll = () => {
  section.forEach((i) => {
    let top = window.scrollY;
    let offset = i.offsetTop - 150;
    let height = i.offsetHeight;
    let id = i.getAttribute("id");

    if (top >= offset && top < offset + height) {
      menu.forEach((link) => {
        link.classList.remove("active");
        document
          .querySelector("header nav a[href*=" + id + "]")
          .classList.add("active");
      });
    }
  });
};

function reveal() {
  var reveals = document.querySelectorAll(".reveal");

  for (var i = 0; i < reveals.length; i++) {
    var windowHeight = window.innerHeight;
    var elementTop = reveals[i].getBoundingClientRect().top;
    var elementVisible = 150;

    if (elementTop < windowHeight - elementVisible) {
      reveals[i].classList.add("active");
    } else {
      reveals[i].classList.remove("active");
    }
  }
}

window.addEventListener("scroll", reveal);


reveal();


(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));



var lastId,
 topMenu = $(".nav-item"),
 topMenuHeight = topMenu.outerHeight()+1,
 
 menuItems = topMenu.find("a"),

 scrollItems = menuItems.map(function(){
   var item = $($(this).attr("href"));
    if (item.length) { return item; }
 });


menuItems.click(function(e){
  var href = $(this).attr("href"),
      offsetTop = href === "#" ? 0 : $(href).offset().top-topMenuHeight+1;
  $('html, body').stop().animate({ 
      scrollTop: offsetTop
  }, 850);
  e.preventDefault();
});


$(window).scroll(function(){
   var fromTop = $(this).scrollTop()+topMenuHeight;
   var cur = scrollItems.map(function(){
     if ($(this).offset().top < fromTop)
       return this;
   });

   cur = cur[cur.length-1];
   var id = cur && cur.length ? cur[0].id : "";
   
   if (lastId !== id) {
       lastId = id;
       menuItems
         .parent().removeClass("active")
         .end().filter("[href=#"+id+"]").parent().addClass("active");
   }                   
});

// other code, try lang//
// Get all the links in the navbar
// const navbarLinks = document.querySelectorAll('nav a');

// // Add a scroll event listener to the window object
// window.addEventListener('scroll', () => {
//   // Loop through each section in the document
//   document.querySelectorAll('section').forEach((section) => {
//     // Get the bounding rectangle of the section
//     const rect = section.getBoundingClientRect();
//     // If the section is in the viewport
//     if (rect.top >= 0 && rect.top <= window.innerHeight) {
//       // Loop through each navbar link
//       navbarLinks.forEach((link) => {
//         // Remove the "active" class from all links
//         link.classList.remove('active');
//         // If the link's href matches the section's id
//         if (link.getAttribute('href') === `#${section.id}`) {
//           // Add the "active" class to the link
//           link.classList.add('active');
//         }
//       });
//     }
//   });
// });
