<?php include 'header.php';?>
<?php include 'askotis.php';?>
  <?php include 'login-window.php';?>

  <?php
    $default_background_image_url='assets/images/default-course-background_lg.jpg';
  ?>
<section class="main-content">

  <?php include 'search-field.php';?>

<script type="text/javascript">
  $(document).ready(function() {

    $(document).on('click', 'div.course-tag-container span.course-tag-item',  function() {
      var filter = $(this).attr('filter');
      var filterOption = $(this).attr('filter-option');
      var filterMenu = $(".course-filters").find('[name="' + filter + '"]');
      var filterMenuOption = filterMenu.find("option:contains('" + filterOption + "')");

        filterMenuOption.prop('disabled', false);
        filterMenu.prop('selectedIndex', 0);

        console.log(filter + ' with the selected option ' + filterOption);

      $(this).remove();
    });

      $("select.course-search-filter-item").change(function() {
        var selectedFilter = $(this).attr("name");
        var selectedFilterOption = $(this).children("option:selected").text();

          $("div.course-tag-container").append( '<span class="course-tag-item" filter="' + selectedFilter + '" filter-option="' + selectedFilterOption + '">' + selectedFilterOption + '<button class="close-tag" type="button">X</button></span>' );

          $("select.course-search-filter-item option:selected").attr('disabled', 'disabled')

        console.log(selectedFilter + ' menu with the option ' + selectedFilterOption);
    });
  });
</script>

  <div class="container-fluid course-tags">
    <div class="row">
      <div class="col-md course-tag-container"></div>
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
          <option value="">Earns Certificate</option>
          <option value="">no Certificate</option>
          <option value="">Product Familiarization</option>
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

  <div class="container-fluid course-categories-container">
    <div class="row course-selections">

        <div class="col-md-3 course-card-container">
          <div class="card course-card course-category">
            <a href="">
              <img src="https://onlinepd.teq.com/uploads/category-images/administrator_sm.jpg" />
            </a>
            <div class="card-header">
              <a class="thin-heading bold" href="#">Administrator <small>(49)</small></a>

            </div>
          </div>
        </div>
        <div class="col-md-3 course-card-container">
          <div class="card course-card course-category">
            <a href="">
              <img src="https://onlinepd.teq.com/uploads/category-images/adobe_sm.jpg" />
            </a>
            <div class="card-header">
              <a class="thin-heading bold" href="#">Adobe</a>
            </div>
          </div>
        </div>
        <div class="col-md-3 course-card-container">
          <div class="card course-card course-category">
            <a href="course-library.php">
              <img src="https://onlinepd.teq.com/uploads/category-images/apple_sm.jpg" />
            </a>
            <div class="card-header">
              <a class="thin-heading bold" href="course-library.php">Apple</a>
            </div>
          </div>
        </div>
        <div class="col-md-3 course-card-container">
          <div class="card course-card course-category">
            <a href="">
              <img src="https://onlinepd.teq.com/uploads/category-images/assesment_sm.jpg" />
            </a>
            <div class="card-header">
              <a class="thin-heading bold" href="#">Assesment</a>
            </div>
          </div>
        </div>
        <div class="col-md-3 course-card-container">
          <div class="card course-card course-category">
            <a href="">
              <img src="https://onlinepd.teq.com/uploads/category-images/blended_learning_sm.jpg" />
            </a>
            <div class="card-header">
              <a class="thin-heading bold" href="#">Blended Learning</a>
            </div>
          </div>
        </div>
        <div class="col-md-3 course-card-container">
          <div class="card course-card course-category">
            <a href="">
              <img src="https://onlinepd.teq.com/uploads/category-images/chromebooks_sm.jpg" />
            </a>
            <div class="card-header">
              <a class="thin-heading bold" href="#">Chromebooks</a>
            </div>
          </div>
        </div>
        <div class="col-md-3 course-card-container">
          <div class="card course-card course-category">
            <a href="">
              <img src="https://onlinepd.teq.com/uploads/category-images/Civics_Category_sm.jpg" />
            </a>
            <div class="card-header">
              <a class="thin-heading bold" href="#">Civics</a>
            </div>
          </div>
        </div>
        <div class="col-md-3 course-card-container">
          <div class="card course-card course-category">
            <a href="">
              <img src="https://onlinepd.teq.com/uploads/category-images/programming_sm.jpg" />
            </a>
            <div class="card-header">
              <a class="thin-heading bold" href="#">Computer Science</a>
            </div>
          </div>
        </div>
        <div class="col-md-3 course-card-container">
          <div class="card course-card course-category">
            <a href="">
              <img src="https://onlinepd.teq.com/uploads/category-images/digital_citizenship_sm.jpg" />
            </a>
            <div class="card-header">
              <a class="thin-heading bold" href="#">Digital Citizenship</a>
            </div>
          </div>
        </div>
        <div class="col-md-3 course-card-container">
          <div class="card course-card course-category">
            <a href="">
              <img src="https://onlinepd.teq.com/uploads/category-images/digital_storytelling_sm.jpg" />
            </a>
            <div class="card-header">
              <a class="thin-heading bold" href="#">Digital Storytelling</a>
            </div>
          </div>
        </div>
        <div class="col-md-3 course-card-container">
          <div class="card course-card course-category">
            <a href="">
              <img src="https://onlinepd.teq.com/uploads/category-images/early_childhood_sm.jpg" />
            </a>
            <div class="card-header">
              <a class="thin-heading bold" href="#">Early Childhood</a>
            </div>
          </div>
        </div>
        <div class="col-md-3 course-card-container">
          <div class="card course-card course-category">
            <a href="">
              <img src="https://onlinepd.teq.com/uploads/category-images/educational_frameworks_sm.jpg" />
            </a>
            <div class="card-header">
              <a class="thin-heading bold" href="#">Educational Frameworks</a>
            </div>
          </div>
        </div>
        <div class="col-md-3 course-card-container">
          <div class="card course-card course-category">
            <a href="">
              <img src="https://onlinepd.teq.com/uploads/category-images/ela_sm.jpg" />
            </a>
            <div class="card-header">
              <a class="thin-heading bold" href="#">ELA</a>
            </div>
          </div>
        </div>
        <div class="col-md-3 course-card-container">
          <div class="card course-card course-category">
            <a href="">
              <img src="https://onlinepd.teq.com/uploads/category-images/ell_enl_sm.jpg" />
            </a>
            <div class="card-header">
              <a class="thin-heading bold" href="#">ENL/ELL</a>
            </div>
          </div>
        </div>
        <div class="col-md-3 course-card-container">
          <div class="card course-card course-category">
            <a href="">
              <img src="https://onlinepd.teq.com/uploads/category-images/general_interest_sm.jpg" />
            </a>
            <div class="card-header">
              <a class="thin-heading bold" href="#">General Interest</a>
            </div>
          </div>
        </div>
        <div class="col-md-3 course-card-container">
          <div class="card course-card course-category">
            <a href="">
              <img src="https://onlinepd.teq.com/uploads/category-images/google_sm.jpg" />
            </a>
            <div class="card-header">
              <a class="thin-heading bold" href="#">Google</a>
            </div>
          </div>
        </div>
        <div class="col-md-3 course-card-container">
          <div class="card course-card course-category">
            <a href="">
              <img src="https://onlinepd.teq.com/assets/library-category-default-image.jpg" />
            </a>
            <div class="card-header">
              <a class="thin-heading bold" href="#">Holiday</a>
            </div>
          </div>
        </div>
        <div class="col-md-3 course-card-container">
          <div class="card course-card course-category">
            <a href="">
              <img src="https://onlinepd.teq.com/uploads/category-images/ipad_sm.jpg" />
            </a>
            <div class="card-header">
              <a class="thin-heading bold" href="#">iPad</a>
            </div>
          </div>
        </div>
        <div class="col-md-3 course-card-container">
          <div class="card course-card course-category">
            <a href="">
              <img src="https://onlinepd.teq.com/uploads/category-images/math_sm.jpg" />
            </a>
            <div class="card-header">
              <a class="thin-heading bold" href="#">Math</a>
            </div>
          </div>
        </div>
        <div class="col-md-3 course-card-container">
          <div class="card course-card course-category">
            <a href="">
              <img src="https://onlinepd.teq.com/uploads/category-images/microsoft_sm.jpg" />
            </a>
            <div class="card-header">
              <a class="thin-heading bold" href="#">Microsoft</a>
            </div>
          </div>
        </div>
        <div class="col-md-3 course-card-container">
          <div class="card course-card course-category">
            <a href="">
              <img src="https://onlinepd.teq.com/uploads/category-images/robotics_sm.jpg" />
            </a>
            <div class="card-header">
              <a class="thin-heading bold" href="#">NAO</a>
            </div>
          </div>
        </div>
        <div class="col-md-3 course-card-container">
          <div class="card course-card course-category">
            <a href="">
              <img src="https://onlinepd.teq.com/uploads/category-images/project_based_learning_sm.jpg" />
            </a>
            <div class="card-header">
              <a class="thin-heading bold" href="#">Project Based Learning</a>
            </div>
          </div>
        </div>
        <div class="col-md-3 course-card-container">
          <div class="card course-card course-category">
            <a href="">
              <img src="https://onlinepd.teq.com/uploads/category-images/promethean_sm.jpg" />
            </a>
            <div class="card-header">
              <a class="thin-heading bold" href="#">promethean</a>
            </div>
          </div>
        </div>
        <div class="col-md-3 course-card-container">
          <div class="card course-card course-category">
            <a href="">
              <img src="https://onlinepd.teq.com/uploads/category-images/science_sm.jpg" />
            </a>
            <div class="card-header">
              <a class="thin-heading bold" href="#">Science</a>
            </div>
          </div>
        </div>
        <div class="col-md-3 course-card-container">
          <div class="card course-card course-category">
            <a href="">
              <img src="https://onlinepd.teq.com/uploads/category-images/smart_sm.jpg" />
            </a>
            <div class="card-header">
              <a class="thin-heading bold" href="#">SMART</a>
            </div>
          </div>
        </div>
        <div class="col-md-3 course-card-container">
          <div class="card course-card course-category">
            <a href="">
              <img src="https://onlinepd.teq.com/uploads/category-images/smart_table_sm.jpg" />
            </a>
            <div class="card-header">
              <a class="thin-heading bold" href="#">SMART Table</a>
            </div>
          </div>
        </div>
        <div class="col-md-3 course-card-container">
          <div class="card course-card course-category">
            <a href="">
              <img src="https://onlinepd.teq.com/uploads/category-images/Social_Emotional_Category_sm.jpg" />
            </a>
            <div class="card-header">
              <a class="thin-heading bold" href="#">Social Emotional Learning</a>
            </div>
          </div>
        </div>
        <div class="col-md-3 course-card-container">
          <div class="card course-card course-category">
            <a href="">
              <img src="https://onlinepd.teq.com/uploads/category-images/social_studies_sm.jpg" />
            </a>
            <div class="card-header">
              <a class="thin-heading bold" href="#">Social Studies</a>
            </div>
          </div>
        </div>
        <div class="col-md-3 course-card-container">
          <div class="card course-card course-category">
            <a href="">
              <img src="https://onlinepd.teq.com/uploads/category-images/special_ed_sm.jpg" />
            </a>
            <div class="card-header">
              <a class="thin-heading bold" href="#">Special Ed</a>
            </div>
          </div>
        </div>
        <div class="col-md-3 course-card-container">
          <div class="card course-card course-category">
            <a href="">
              <img src="https://onlinepd.teq.com/uploads/category-images/steam_sm.jpg" />
            </a>
            <div class="card-header">
              <a class="thin-heading bold" href="#">STEM</a>
            </div>
          </div>
        </div>

    </div>
    <svg version="1.1" viewBox="0 0 600 103">
    	 <path class="pd-blue-fill" d="M600,103.5V31.453c-69.209,10.354-117.449,10.97-167.539-0.395c-19.904-4.516-56.294-13.321-94.03-12.518 c-16.291,0.347-28.846,2.982-45.128,3.552c-33.654,1.177-61.406-5.531-90.319-6.3c-36.548-0.971-61.23,6.535-97.388,10.992 C71.228,31.02,17.97,31.453,0,31.453L0,103.5H600z"/>
    </svg>
  </div>

  <?php include 'digital-online-certifications.php';?>

</section>

<?php include 'footer.php';?>
