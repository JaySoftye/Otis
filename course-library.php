<?php include 'header.php';?>
<?php include 'askotis.php';?>
  <?php include 'login-window.php';?>

<?php $default_background_image_url='assets/images/apple_lg.jpg'; ?>

<section class="main-content">

  <?php include 'search-field.php';?>

<script type="text/javascript">
  $(document).ready(function() {

    $(document).on('click', 'div.course-tag-container span.course-tag-item',  function() {
      var filter = $(this).attr('filter');
      var filterOption = $(this).attr('filter-option');

      var filterMenu = $(".course-filters").find('[name="' + filter + '"]');
      var filterMenuOption = filterMenu.find("option:contains('" + filterOption + "')");

      var filterMenuOptionLink = $( "div.dropdown-menu a.dropdown-item:contains('" + filterOption + "')" ).removeClass('selected');

        filterMenuOption.prop('disabled', false);
        filterMenu.prop('selectedIndex', 0);
        filterMenuOptionLink.removeClass('selected');

        console.log(filter + ' with the selected option ' + filterOption + ' removed');

      $(this).remove();
    });

    $("select.course-search-filter-item").change(function() {
      var selectedFilter = $(this).attr("name");
      var selectedFilterOption = $(this).children("option:selected").text();

        $("div.course-tag-container").append( '<span class="course-tag-item" filter="' + selectedFilter + '" filter-option="' + selectedFilterOption + '">' + selectedFilterOption + '<button class="close-tag" type="button">X</button></span>' );

        $("select.course-search-filter-item option:selected").attr('disabled', 'disabled')

        console.log(selectedFilter + ' menu with the option ' + selectedFilterOption);
    });

    $( ".dropdown.type-id-dropdown-container a.dropdown-item" ).each(function(i) {
      $(this).on("click", function() {
        var selectedFilter = $(this).parent().attr("name");
        var selectedFilterOption = $(this).text();
          $(this).addClass('selected');

          $("div.course-tag-container").append( '<span class="course-tag-item" filter="' + selectedFilter + '" filter-option="' + selectedFilterOption + '">' + selectedFilterOption + '<button class="close-tag" type="button">X</button></span>' );

        console.log(selectedFilter + ' menu with the option' + selectedFilterOption);

      });
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
        <div class="dropdown type-id-dropdown-container">
          <button type="button" id="type-id-dropdown-button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Type</button>
          <div class="dropdown-menu" name="type_id" aria-labelledby="type-id-dropdown-button">
            <a class="dropdown-item" href="#" value=""><span></span> All Types</a>
            <a class="dropdown-item" href="#" value=""><span></span> FREE</a>
            <a class="dropdown-item" href="#" value=""><span></span> Earn's Certificate</a>
            <a class="dropdown-item" href="#" value=""><span></span> no Certificate</a>
            <a class="dropdown-item" href="#" value=""><span class="product-familiarization"></span> Product Familiarization</a>
            <a class="dropdown-item" href="#" value=""><span class="tech-infused-lessons"></span> Certifications Courses</a>
            <a class="dropdown-item" href="#" value=""><span class="frameworks-resources"></span> Tech-Infused Lessons</a>
            <a class="dropdown-item" href="#" value=""><span class="instructional-skills"></span> Frameworks/Resources</a>
            <a class="dropdown-item" href="#" value=""><span class="certification-sessions"></span> Instructional Skills</a>
            <a class="dropdown-item" href="#" value=""><span class="school-uploaded"></span> School Uploaded Content</a>
          </div>
        </div>
        <select id="type-id-dropdown-select" class="course-search-filter-item" name="type_id" data-value="">
          <option disabled="disabled" selected="">Type</option>
          <option value="">FREE</option>
          <option value="">Earn's Certificate</option>
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

  <div class="container-fluid white-bg">
    <div class="row course-selections">

        <div class="col-md-4 course-card-container">
          <div class="card course-card">
            <div class="card-header product-familiarization">
              <ul class="nav course-details">
                <li class="nav-item category-duration-details">
                  <a href="course-details-certification.php">8hr 54min</a>
                </li>
                <li class="nav-item category-sessions-details">
                  <a href="course-details-certification.php">12 Sessions</a>
                </li>
                <li class="nav-item">
                </li>
              </ul>
              <?php include 'admin-menu.php';?>
            </div>
            <div class="card-body">
              <p><a href="course-details-certification.php">Digital Teacher iPad Certification 7: iPhoto</a></p>
              <p>With this course, participants will be able to add and organize content to iPhoto and collaborate with others through a shared Photostream...</p>
            </div>
            <div class="card-footer">
              <div class="course-rating">
                <span class="one-stars">
                  <i>1 out of 5</i>
                </span>
              </div>
              <div class="course-footer">
                <span>
                  <p class="certification-badge"></p>
                  <p class="thin-heading bold">ISTE<i class="blue-text">*</i></p>
                </span>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-4 course-card-container">
          <div class="card course-card">
            <div class="card-header tech-infused-lessons">
              <ul class="nav course-details">
                <li class="nav-item category-duration-details">
                  <a href="course-details-single-course.php">46min</a>
                </li>
                <li class="nav-item"></li>
                <li class="nav-item category-chapters-details">
                  <a href="course-details-single-course.php">5 Chapters</a>
                </li>
              </ul>
              <?php include 'admin-menu.php';?>
            </div>
            <div class="card-body">
              <p><a href="course-details-single-course.php">Creating Multi-Touch Books with iBooks Author</a></p>
              <p>The new generation, referred to as Gen Z, is growing up in a world where everyday they are immersed in technology. Students have become producers and creators of content, desiring to put their skills to use... </p>
            </div>
            <div class="card-footer">
              <div class="course-rating">
                <span class="three-stars">
                  <i>3 out of 5</i>
                </span>
              </div>
              <div class="course-footer">
                <span>
                </span>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-4 course-card-container">
          <div class="card course-card">
            <div class="card-header frameworks-resources">
              <ul class="nav course-details">
                <li class="nav-item category-duration-details">
                  <a href="#">31min</a>
                </li>
                <li class="nav-item"></li>
                <li class="nav-item"></li>
              </ul>
              <?php include 'admin-menu.php';?>
            </div>
            <div class="card-body">
              <p><a href="#">iOS 10</a></p>
              <p>In this course, the PD team will explore the most effective and exciting features iOS 10 has to offer!  Released in September 2016, the iOS 10 operating system is sure to help teachers create an engaging... </p>
            </div>
            <div class="card-footer">
              <div class="course-rating">
                <span>
                </span>
              </div>
              <div class="course-footer">
                <span>
                </span>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-4 course-card-container">
          <div class="card course-card">
            <div class="card-header instructional-skills">
              <ul class="nav course-details">
                <li class="nav-item category-duration-details">
                  <a href="#">8hr 54min</a>
                </li>
                <li class="nav-item category-sessions-details">
                  <a href="#">12 Sessions</a>
                </li>
                <li class="nav-item">
                </li>
              </ul>
              <?php include 'admin-menu.php';?>
            </div>
            <div class="card-body">
              <p><a href="#">Digital Teacher iPad Certification 7: iPhoto</a></p>
              <p>With this course, participants will be able to add and organize content to iPhoto and collaborate with others through a shared Photostream...</p>
            </div>
            <div class="card-footer">
              <div class="course-rating">
                <span class="zero-stars">
                  <i>0 out of 5</i>
                </span>
              </div>
              <div class="course-footer">
                <span>
                  <p class="certification-badge"></p>
                  <p class="thin-heading bold">ISTE<i class="blue-text">*</i></p>
                </span>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-4 course-card-container">
          <div class="card course-card">
            <div class="card-header certification-sessions">
              <ul class="nav course-details">
                <li class="nav-item category-duration-details">
                  <a href="#">46min</a>
                </li>
                <li class="nav-item"></li>
                <li class="nav-item category-chapters-details">
                  <a href="#">5 Chapters</a>
                </li>
              </ul>
              <?php include 'admin-menu.php';?>
            </div>
            <div class="card-body">
              <p><a href="#">Creating Multi-Touch Books with iBooks Author</a></p>
              <p>The new generation, referred to as Gen Z, is growing up in a world where everyday they are immersed in technology. Students have become producers and creators of content, desiring to put their skills to use... </p>
            </div>
            <div class="card-footer">
              <div class="course-rating">
                <span class="three-stars">
                  <i>3 out of 5</i>
                </span>
              </div>
              <div class="course-footer">
                <span>
                </span>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-4 course-card-container">
          <div class="card course-card">
            <div class="card-header school-uploaded">
              <ul class="nav course-details">
                <li class="nav-item category-duration-details">
                  <a href="#">31min</a>
                </li>
                <li class="nav-item"></li>
                <li class="nav-item"></li>
              </ul>
              <?php include 'admin-menu.php';?>
            </div>
            <div class="card-body">
              <p><a href="#">iOS 10</a></p>
              <p>In this course, the PD team will explore the most effective and exciting features iOS 10 has to offer!  Released in September 2016, the iOS 10 operating system is sure to help teachers create an engaging... </p>
            </div>
            <div class="card-footer">
              <div class="course-rating">
                <span>
                </span>
              </div>
              <div class="course-footer">
                <span>
                </span>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-4 course-card-container">
          <div class="card course-card">
            <div class="card-header product-familiarization">
              <ul class="nav course-details">
                <li class="nav-item category-duration-details">
                  <a href="#">8hr 54min</a>
                </li>
                <li class="nav-item category-sessions-details">
                  <a href="#">12 Sessions</a>
                </li>
                <li class="nav-item">
                </li>
              </ul>
              <?php include 'admin-menu.php';?>
            </div>
            <div class="card-body">
              <p><a href="#">Digital Teacher iPad Certification 7: iPhoto</a></p>
              <p>With this course, participants will be able to add and organize content to iPhoto and collaborate with others through a shared Photostream...</p>
            </div>
            <div class="card-footer">
              <div class="course-rating">
                <span class="zero-stars">
                  <i>0 out of 5</i>
                </span>
              </div>
              <div class="course-footer">
                <span>
                </span>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-4 course-card-container">
          <div class="card course-card">
            <div class="card-header frameworks-resources">
              <ul class="nav course-details">
                <li class="nav-item category-duration-details">
                  <a href="#">46min</a>
                </li>
                <li class="nav-item"></li>
                <li class="nav-item category-chapters-details">
                  <a href="#">5 Chapters</a>
                </li>
              </ul>
              <?php include 'admin-menu.php';?>
            </div>
            <div class="card-body">
              <p><a href="#">Creating Multi-Touch Books with iBooks Author</a></p>
              <p>The new generation, referred to as Gen Z, is growing up in a world where everyday they are immersed in technology. Students have become producers and creators of content, desiring to put their skills to use... </p>
            </div>
            <div class="card-footer">
              <div class="course-rating">
                <span class="three-stars">
                  <i>3 out of 5</i>
                </span>
              </div>
              <div class="course-footer">
                <span>
                  <p class="certification-badge"></p>
                  <p class="thin-heading bold">ISTE<i class="blue-text">*</i></p>
                </span>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-4 course-card-container">
          <div class="card course-card">
            <div class="card-header frameworks-resources">
              <ul class="nav course-details">
                <li class="nav-item category-duration-details">
                  <a href="#">31min</a>
                </li>
                <li class="nav-item"></li>
                <li class="nav-item"></li>
              </ul>
              <?php include 'admin-menu.php';?>
            </div>
            <div class="card-body">
              <p><a href="#">iOS 10</a></p>
              <p>In this course, the PD team will explore the most effective and exciting features iOS 10 has to offer!  Released in September 2016, the iOS 10 operating system is sure to help teachers create an engaging... </p>
            </div>
            <div class="card-footer">
              <div class="course-rating">
                <span>
                </span>
              </div>
              <div class="course-footer">
                <span>
                </span>
              </div>
            </div>
          </div>
        </div>

    </div>
  </div>

  <?php include 'digital-online-certifications.php';?>

</section>

<?php include 'footer.php';?>
