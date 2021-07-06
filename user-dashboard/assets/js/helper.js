$( document ).ready(function() {

    $("button.leaderboard-icon, .leaderboard-header-button").on('click', function(){
      $(".user-dashboard-content.leaderboard-is-active").toggleClass('leaderboard-is-expanded');
    });

    $(".user-dashboard-container .row.user-dashboard-content.tab").hide();
      $(".user-dashboard-container .row.user-dashboard-content.tab:nth-child(1)").show();

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

    $("form.search-box button.search-course-button").on('click', function(){
      event.preventDefault();
      var buttonText = $(this).find('span');
        $(buttonText).toggle();
    });

});
