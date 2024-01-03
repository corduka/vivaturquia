//auto opener dropdown menu
jQuery('li.dropdown').hover(function() {
  jQuery(this).find('.dropdown-menu').stop(true, true).delay(10).fadeIn();
}, function() {
  jQuery(this).find('.dropdown-menu').stop(true, true).delay(10).fadeOut();
});

   // HAMBURGER
  $(document).ready(function(){
     $('#nav-icon1').click(function(){
       $(this).toggleClass('open');
  });
  });

//Click Show Hide Content
const $tabsToDropdown = $(".tabs-to-dropdown");

function generateDropdownMarkup(container) {
  const $navWrapper = container.find(".nav-wrapper");
  const $navPills = container.find(".nav-pills");
  const firstTextLink = $navPills.find("li:first-child a").text();
  const $items = $navPills.find("li");
}

function generateDropdownLinksMarkup(items) {
  let markup = "";
  items.each(function () {
    const textLink = $(this).find("a").text();
    markup += `<a class="dropdown-item" href="#">${textLink}</a>`;
  });

  return markup;
}

function showDropdownHandler(e) {
  // works also
  //const $this = $(this);
  const $this = $(e.target);
  const $dropdownToggle = $this.find(".dropdown-toggle");
  const dropdownToggleText = $dropdownToggle.text().trim();
  const $dropdownMenuLinks = $this.find(".dropdown-menu a");
  const dNoneClass = "d-none";
  $dropdownMenuLinks.each(function () {
    const $this = $(this);
    if ($this.text() == dropdownToggleText) {
      $this.addClass(dNoneClass);
    } else {
      $this.removeClass(dNoneClass);
    }
  });
}

function clickHandler(e) {
  e.preventDefault();
  const $this = $(this);
  const index = $this.index();
  const text = $this.text();
  $this.closest(".dropdown").find(".dropdown-toggle").text(`${text}`);
  $this
    .closest($tabsToDropdown)
    .find(`.nav-pills li:eq(${index}) a`)
    .tab("show");
}

function shownTabsHandler(e) {
  // works also
  //const $this = $(this);
  const $this = $(e.target);
  const index = $this.parent().index();
  const $parent = $this.closest($tabsToDropdown);
  const $targetDropdownLink = $parent.find(".dropdown-menu a").eq(index);
  const targetDropdownLinkText = $targetDropdownLink.text();
  $parent.find(".dropdown-toggle").text(targetDropdownLinkText);
}

$tabsToDropdown.each(function () {
  const $this = $(this);
  const $pills = $this.find('a[data-toggle="pill"]');

  generateDropdownMarkup($this);

  const $dropdown = $this.find(".dropdown");
  const $dropdownLinks = $this.find(".dropdown-menu a");

  $dropdown.on("show.bs.dropdown", showDropdownHandler);
  $dropdownLinks.on("click", clickHandler);
  $pills.on("shown.bs.tab", shownTabsHandler);
});

//anasayfa mail newsletter
$(document).on("click", "#mailSubmit", function () {
  const mail1 = $("#indexemail").val();
  const mail2 = $("#indexemail2").val();
  const postData = {
      mail1: mail1,
      mail2: mail2,
  };
  $.ajax({
      url: "/ajaxform.php",
      type: "POST",
      data: postData,
      dataType: "json",

      success: function(data){
        if (data.status == 1) {
          $('#formindex').css('display','none')
          $('.anabasarili').css('display','block')
          $('.anabasarisiz').css('display','none')
        }
        else {
          $('.anabasarisiz').css('display','block')
        }
      }
  });

});

//tour reservation
$(document).on("click", "#resSubmit", function () {
  const name = $("#name").val();
  const email = $("#email").val();
  const phone = $("#phone").val();
  const adult = $("#adult").val();
  const child = $("#child").val();
  const checkin_date = $("#checkin-date").val();
  const checkout_date = $("#checkout-date").val();
  const tour_selection = $("#tour-selection").val();
  const reservation_message = $("#reservation-message").val();
  const postData = {
      name: name,
      email: email,
      phone: phone,
      adult: adult,
      child: child,
      checkin_date: checkin_date,
      checkout_date: checkout_date,
      tour_selection: tour_selection,
      reservation_message: reservation_message,
  };
  $.ajax({
      url: "/ajaxresform.php",
      type: "POST",
      data: postData,
      dataType: "json",

      success: function(data){
        if (data.status == 1) {
          $('#formindex').css('display','none')
          $('.anabasarili').css('display','block')
          $('.anabasarisiz').css('display','none')
          $('.anabasarisizemail').css('display','none')
        } else {
            if(data.status == 0) {
              $('.anabasarisiz').css('display','block')
            } else if(data.status == 2){
                $('.anabasarisizemail').css('display','block')
          }
        }
      }
  });

});




//dropdown parent should be clickable
// auto open dropdown is not working. check JQUERY library. there must be a problem in JQUERY.


/*
//mail
$(document).ready(function(){
  $("#mailSubmit").click(function(){
    console.log('POSTTTT');
    var mailAddress = $("#email123").val();
    var url = `https://docs.google.com/forms/u/7/d/e/1FAIpQLSdgwsrMJvN_fACgO2zETwGCgFwHG9_uXYWJfoiBcZ3xK4JgiQ/formResponse?entry.2015207557=${mailAddress}`;
    $.post(url);
  });
});
*/

