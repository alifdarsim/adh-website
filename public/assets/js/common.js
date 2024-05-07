var acc = document.getElementsByClassName("accordion");
    var i;

    for (i = 0; i < acc.length; i++) {
      acc[i].addEventListener("click", function () {
        this.classList.toggle("activee");
        var panel = this.nextElementSibling;
        if (panel.style.maxHeight) {
          panel.style.maxHeight = null;
        } else {
          panel.style.maxHeight = panel.scrollHeight + "px";
        }
      });
    }
    $(document).ready(function () {
      var closeTimeoutDmenu, closeTimeoutDmenu1, closeTimeoutFreeSpace; // Declare variables to hold the timeouts
  
      $('.dmenu').hover(
          function () {
              clearTimeout(closeTimeoutDmenu); // Clear any previous timeout to prevent closing
  
              // Close other .dmenu
              $('.dmenu').not(this).find('.sm-menu').slideUp(200);
              $('.dmenu').not(this).removeClass('active');
  
              // Open the current .dmenu
              $('#masthead').addClass('open--primary');
              $(this).find('.sm-menu').first().stop(true, true).slideDown(300);
              $(this).stop(true, true).addClass('active');
          },
          function () {
              var $this = $(this);
              closeTimeoutDmenu = setTimeout(function () {
                  $this.find('.sm-menu').first().stop(true, true).slideUp(300);
                  $this.stop(true, true).removeClass('active');
                  $('#masthead').removeClass('open--primary');
              }, 400); // Introduce a delay before closing
          }
      );
  
      $('.dmenu1').hover(
          function () {
              clearTimeout(closeTimeoutDmenu1); // Clear any previous timeout to prevent closing
  
              // Close other .dmenu1
              $('.dmenu1').not(this).find('.sm-menu1').slideUp(200);
              $('.dmenu1').not(this).removeClass('active');
  
              // Open the current .dmenu1
              $('#masthead').addClass('open--secondary');
              $(this).find('.sm-menu1').first().stop(true, true).slideDown(300);
              $(this).stop(true, true).addClass('active');
          },
          function () {
              var $this = $(this);
              closeTimeoutDmenu1 = setTimeout(function () {
                  $this.find('.sm-menu1').first().stop(true, true).slideUp(300);
                  $this.stop(true, true).removeClass('active');
                  $('#masthead').removeClass('open--secondary');
              }, 400); // Introduce a delay before closing
          }
      );
  
      // Handling for free space between menus and logo
      $('.free-space').hover(
          function () {
              clearTimeout(closeTimeoutFreeSpace); // Clear any previous timeout to prevent closing
          },
          function () {
              closeTimeoutFreeSpace = setTimeout(function () {
                  if (!$('.dmenu').hasClass('active') && !$('.dmenu1').hasClass('active')) {
                      $('.sm-menu, .sm-menu1').slideUp(300);
                      $('#masthead').removeClass('open--primary open--secondary');
                  }
              }, 200); // Adjust the threshold value as needed
          }
      );
  
  });
  
       
       $(document).ready(function () {
    $('.header-menu-expand').on('click', function () {
        var subMenu = $(this).parent();
        toggleSubMenu(subMenu);
    });
  
    // Additional functionality for clicking the 'menuh' links
    $('.menuh').on('click', function (e) {
        e.preventDefault(); // Prevent the default behavior of the link
  
        var subMenu = $(this).parent();
        toggleSubMenu(subMenu);
    });
  
    function toggleSubMenu(subMenu) {
        // Toggle current sub-menu
        var iconContainer = subMenu.find('.icon-container');
        var plusIcon = iconContainer.find('.icon--plus');
        var minusIcon = iconContainer.find('.icon--minus');
  
        subMenu.toggleClass('expanded');
  
        if (subMenu.hasClass('expanded')) {
            plusIcon.hide();
            minusIcon.show();
            subMenu.find('.header-sub-menu').stop().slideDown(500);
        } else {
            minusIcon.hide();
            plusIcon.show();
            subMenu.find('.header-sub-menu').stop().slideUp(200);
        }
    }
});

    
  $('.mobile-menu-toggle').on('click', function () {
    var $currentDmenu = $(this);
  
    // Check if the current dmenu has the 'active' class
    if ($currentDmenu.hasClass('active')) {
      // Close the sm-menu and remove 'active' class
      $currentDmenu.find('.sm-menu').first().stop(true, true).slideUp(300);
      $currentDmenu.removeClass('active');
      $('#masthead').removeClass('open--primary');
    } else {
      // Close any other open sm-menu
      $('.mobile-menu-toggle.active').not($currentDmenu).find('.sm-menu').first().stop(true, true).slideUp(300);
      $('.mobile-menu-toggle.active').not($currentDmenu).removeClass('active');
  
      // Open the sm-menu and add 'active' class
      $currentDmenu.find('.sm-menu').first().stop(true, true).slideDown(300);
      $currentDmenu.addClass('active');
      $('#masthead').addClass('open--primary');
    }
  });

 // Toggle functionality for plus and minus icons
function toggleSubMenu(subMenu) {
  // Close all other sub-menus
  $('.header-menu-expand').not(subMenu).removeClass('expanded');
  $('.header-sub-menu').not(subMenu).slideUp(200);

  // Toggle current sub-menu
  subMenu.toggleClass('expanded');
  if (subMenu.hasClass('expanded')) {
      subMenu.stop().slideDown(100);
  } else {
      subMenu.stop().slideUp(100);
  }
}

$('.header-menu-expand').on('click', function() {
  var subMenu = $(this).siblings('.header-sub-menu');
  toggleSubMenu(subMenu);
});

// Additional functionality for clicking the 'menuh' link
$('#menuh').on('click', function(e) {
  e.preventDefault(); // Prevent the default behavior of the link

  var subMenu = $(this).siblings('.header-sub-menu');
  toggleSubMenu(subMenu);
});

   
 

  $('.dmenu1').on('click', function (event) {
    event.stopPropagation(); // Prevent the click from triggering the document click event
  
    var $currentDmenu = $(this);
    var $currentSubMenu = $currentDmenu.find('.sm-menu1').first();
  
    // Check if the sm-menu1 is already visible
    var isMenuVisible = $currentSubMenu.is(':visible');
  
    // Close all other open sm-menu1s
    $('.dmenu1.active').not($currentDmenu).removeClass('active').find('.sm-menu1').stop(true, true).slideUp(300);
  
    // Toggle the active class on click
    $currentDmenu.toggleClass('active', !isMenuVisible);
  
    // Open or close the sm-menu1 based on the isMenuVisible flag
    if (!isMenuVisible) {
      $currentSubMenu.stop(true, true).slideDown(300);
      $('#masthead').addClass('open--secondary');
    } else {
      $currentSubMenu.stop(true, true).slideUp(300);
  
      // Check if any other sm-menu1 is active, if not, close masthead
      if ($('.dmenu1.active').length === 0) {
        $('#masthead').removeClass('open--secondary');
      }
    }
  });
  
  document.addEventListener("DOMContentLoaded", function () {
    var currentUrl = window.location.href;

    // Iterate through each menu item and check if the link matches the current URL
    document.querySelectorAll("#menu-header-main .header-menu-link").forEach(function (link) {
      var linkUrl = link.getAttribute("href");

      if (currentUrl.includes(linkUrl)) {
        link.classList.add("active"); // Add the "active" class to the matching link
      }
    });
  });


  function toggleLogos() {
    var footerLogo = document.querySelector('.footer-logo');
    var resLogo = document.querySelector('.res-logo');
    
    if (window.innerWidth <= 767) { // Screen width less than or equal to 767px
        footerLogo.style.display = 'none';
        resLogo.style.display = 'inline-block';
    } else { // Screen width greater than 767px
        footerLogo.style.display = 'inline-block';
        resLogo.style.display = 'none';
    }
  }
  
  // Call toggleLogos initially to set the initial state based on screen size
  toggleLogos();
  
  // Add event listener for window resize to dynamically adjust logo visibility
  window.addEventListener('resize', toggleLogos);
  
    

// Function to toggle filter visibility and symbol
function toggleFilter(filterId, toggleId) {
  var filterLinks = document.getElementById(filterId);
  var expandToggle = document.getElementById(toggleId);

  if (filterLinks.style.display === "none" || filterLinks.style.display === "") {
      filterLinks.style.display = "block";
      expandToggle.textContent = "-";
  } else {
      filterLinks.style.display = "none";
      expandToggle.textContent = "+";
  }
}

// Function to handle filter toggle button click
function handleToggleClick(event) {
  var filterId = event.target.dataset.filterId;
  var toggleId = event.target.id;

  toggleFilter(filterId, toggleId);
}

// Add event listener to all filter toggle buttons
var toggleButtons = document.querySelectorAll('.jobs-archive-filter-label');
toggleButtons.forEach(function(button) {
  button.addEventListener('click', handleToggleClick);
});

// Function to automatically expand the filter on small screens
function expandFilterOnSmallScreen() {
  var screenWidth = window.innerWidth;
  var filterLinks = document.querySelectorAll('.jobs-archive-filter-links');
  var expandToggles = document.querySelectorAll('[id^="expand-toggle"]');

  for (var i = 0; i < filterLinks.length; i++) {
      if (screenWidth <= 768) {
          filterLinks[i].style.display = "none";
          expandToggles[i].textContent = "+";
      } else {
          filterLinks[i].style.display = "block";
          expandToggles[i].textContent = "-";
      }
  }
}

// Call the function to expand the filter on small screens initially
window.addEventListener('DOMContentLoaded', expandFilterOnSmallScreen);

// Event listener to recheck and expand filter on window resize
window.addEventListener('resize', expandFilterOnSmallScreen);
function toggleFilter(filterId, toggleId) {
  var filterLinks = document.getElementById(filterId);
  var expandToggle = document.getElementById(toggleId);

  // Check if filterLinks exists before attempting to modify it
  if (!filterLinks) return;

  if (filterLinks.style.display === "none" || filterLinks.style.display === "") {
      filterLinks.style.display = "block";
      expandToggle.textContent = "-";
  } else {
      filterLinks.style.display = "none";
      expandToggle.textContent = "+";
  }
}
