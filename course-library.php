<?php include 'header.php';?>
  <?php include 'askotis.php';?>

<section class="main-content">

  <div class="container-fluid course-background" style="background-image: url('https://onlinepd.teq.com/uploads/category-images/apple_lg.jpg');">
    <div class="course-background-gradient-cover"></div>
    <div class="row">
      <div class="col-md-6 course-search-field">
        <form id="search-form" method="GET" action="" data-section="">
          <div class="form-group search-input">
            <input type="text" class="form-control" id="search-field" name="" value="" placeholder="Search Courses">
          </div>
        </form>
      </div>
    </div>
  </div>

<script type="text/javascript">
  $(document).ready(function() {

    $(document).on('click', 'div.course-tag-container span.course-tag-item',  function() {
      var filter = $(this).attr('filter');
      var filterMenu = $(".course-search-filters-container select").find("[name='" + filter + "']");
      var filterOption = $(this).attr('filter-option');


      console.log(filterMenu + ' with the selected option ' + filterOption);
      $(this).remove();
    });


      $("select.course-search-filter-item").change(function() {
        var selectedFilter = $(this).attr("name");
        var selectedFilterOption = $(this).children("option:selected").text();

          $("div.course-tag-container").append( '<span class="course-tag-item" filter="' + selectedFilter + ' filter-option="' + selectedFilterOption + '">' + selectedFilterOption + '<button class="close-tag" type="button">X</button></span>' );

          $("select.course-search-filter-item option:selected").attr('disabled', 'disabled')

        console.log(selectedFilter + ' menu with the option ' + selectedFilterOption);
    });
  });
</script>

  <div class="container-fluid course-tags">
    <div class="row">
      <div class="col-md course-tag-container">
        <span class="course-tag-item" filter="category_id" filter-option="Apple">Apple<button class="close-tag" type="button">X</button></span>
        <span class="course-tag-item" filter="category_id" filter-option="Robotics">Robotics<button class="close-tag" type="button">X</button></span>
      </div>
    </div>
  </div>
  <div class="container-fluid course-filters">
    <div class="row">
      <div class="col-md course-search-filters-container">
        <span class="sub-heading bold">FILTER BY:</span>
        <select class="course-search-filter-item" name="role_id" data-value="">
          <option disabled="disabled" selected="">Role</option>
          <option value="">Teacher</option>
          <option value="">Administrator</option>
          <option value="">Parents</option>
        </select>
        <select class="course-search-filter-item" name="type_id" data-value="">
          <option disabled="disabled" selected="">Type</option>
          <option value="">Free</option>
          <option value="">ISTE Aligned</option>
          <option value="">Earn's Certificate</option>
          <option value="">no Certificate</option>
          <option value="">Product Familirization</option>
          <option value="">Certifications Courses</option>
          <option value="">Tech-Infused Lessons</option>
          <option value="">Frameworks/Resources</option>
          <option value="">Instructional Skills</option>
          <option value="">School Uploaded Content</option>
        </select>
        <select class="course-search-filter-item" name="category_id" data-value="">
          <option disabled="disabled" selected="">Categories</option>
          <option value="">Adobe</option>
          <option value="">Apple</option>
          <option value="">Assessment</option>
          <option value="">Blended Learning</option>
          <option value="">Digital Storytelling</option>
          <option value="">Early Childhood</option>
          <option value="">ENL/ELL</option>
          <option value="">Google</option>
          <option value="">iPad</option>
          <option value="">Judaic Studies</option>
          <option value="">Math</option>
          <option value="">Programming</option>
          <option value="">Robotics</option>
          <option value="">Safari</option>
          <option value="">Science</option>
          <option value="">SMART</option>
          <option value="">Social Studies</option>
          <option value="">Special Ed</option>
          <option value="">STEMt</option>
        </select>
        <select class="course-search-filter-item" name="usage_id" data-value="">
          <option disabled="disabled" selected="">My Usage</option>
          <option value="">Playlists</option>
          <option value="">Completed</option>
          <option value="">In Progress</option>
        </select>
      </div>
      <div class="col-md-3 text-right course-sort-filters-container">
        <span class="sub-heading bold">SORT BY:</span>
        <select class="course-sort-filter-item" name="sort_id" data-value="">
          <option disabled="disabled" selected="">Other</option>
          <option value="">Most Recent</option>
          <option value="">Alphabetical</option>
          <option value="">< 15 min</option>
          <option value="">15 min - 30 min</option>
          <option value="">30 min - 45 min</option>
          <option value="">> 45 min</option>
          <option value="">Highest Rated</option>
          <option value="">Most Watched</option>
        </select>
      </div>
    </div>
  </div>

  <div class="container-fluid white-bg">
    <div class="row align-items-center padding-top height-large">
      <div class="col-md-4">
        <div class="card course-card">
          <div class="card-body">
            <div class="row align-items-center">
              <div class="col-md nopadding">
                <h4 class="course-card-title">Next Course:</h4>
                <a href="#" class="course-card-link">
                  <span>Teaching Summer Reinforcement Skills: Reading</span>
                  <small>Monday, June 17th, 3:00pm - 4:00pm</small>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</section>


<?php include 'footer.php';?>
