$( document ).ready(function() {

  // INITIAL SHOW TAB FUNCTION, HIDE ALL AND SHOW FIRST TAB
  $(".user-dashboard-container .row.user-dashboard-content.tab").hide();
    $(".user-dashboard-container .row.user-dashboard-content.tab:nth-child(1)").show();

  // LEADERBOARD FUNCTION TO EXPAND OR COLLAPSE LEADERBOARD CONTAINER
  $("button.leaderboard-icon, .leaderboard-header-button").on('click', function(){
    $(".user-dashboard-content.leaderboard-is-active").toggleClass('leaderboard-is-expanded');
  });

  // SHOW AND HIDE USER TABS, TOGGLE VIEW FROM MENU AND ADD ACTIVE CLASS
  $("ul.dashboard-nav li.nav-item a").on('click', function(){
    event.preventDefault();

    $("ul.dashboard-nav li.nav-item a").each(function() {
      $(this).removeClass('is-active');
    });
    $(this).addClass('is-active');

    var dataTarget = $(this).attr('href');
      $(".user-dashboard-container .row.user-dashboard-content.tab").each(function() {
        $(this).hide('fast').addClass('is-inactive');
      });
    $(dataTarget).show('fast').removeClass('is-inactive');
  });

  // EXPAND OR COLLAPSE SEARCH BOX FORM
  $("form.search-box button.search-course-button").on('click', function(){
    event.preventDefault();
    var buttonText = $(this).find('span');
      $(buttonText).toggle();
  });

  // EDIT FORM ON ACCOUNT INFO, FIND DISABLED ELEMENTS IN PARENT ELEMENT AND EDIT
  $("form.user-info-container a.edit").on('click', function(){
    event.preventDefault();
    var parentTarget = $(this).parent('form');
    var inputTargets = $(parentTarget).children('.form-group').find('.form-control');
      $(this).toggleClass('activated');
      $(this).next('a').toggleClass('activated');
        $(inputTargets).parent('.form-group').toggleClass('edit-form-group');
        $(inputTargets).prop("disabled", false);
  });

  //CANCEL EDIT FIELD EDITING
  $("form.user-info-container a.is-editing").on('click', function(){
    var parentTarget = $(this).parent('form');
    var inputTargets = $(parentTarget).children('.form-group').find('.form-control');
      $(this).toggleClass('activated');
      $(this).prev('a').toggleClass('activated');
        $(inputTargets).parent('.form-group').toggleClass('edit-form-group');
        $(inputTargets).prop("disabled", true);
  });


});
