<?php
  $ercIndex = True;
  $logged_in = True;
  include 'header.php';
?>
<?php include 'askotis.php';?>
  <?php include 'login-window.php';?>

<section class="main-content thin-search-bar">

  <div class="container-fluid erc course-background lessons">
    <div class="course-background-gradient-cover"></div>
    <div class="row">
      <div class="col-md-6 course-search-field">
        <form id="search-form" method="GET" action="" data-section="">
          <div class="form-group search-input">
            <input type="text" class="form-control" id="search-field" name="" value="" placeholder="Search ERC Lessons">
          </div>
        </form>
      </div>
    </div>
  </div>

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

<div class="modal" id="alignedEducationalStandards" tabindex="-1" role="dialog" aria-labelledby="alignedEducationalStandards" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content erc-aligned-edcuational-standards-container">

      <section class="erc-aligned-edcuational-standards-section sub-heading bold">
        ADD ALIGNED EDUCATIONAL STANDARDS FILTERS:
      </section>
      <section class="erc-aligned-edcuational-standards-section">
        <?php include 'erc-ny-state-next-generation-ela-standards.php';?>
      </section>

    </div>
  </div>
</div>

  <div class="container-fluid erc course-tags">
    <div class="row">
      <div class="col-md erc course-tag-container"></div>
    </div>
  </div>
  <div class="container-fluid erc course-filters">
    <div class="row">
      <div class="col-md erc course-search-filters-container">
        <span class="sub-heading bold">FILTER BY:</span>
        <select class="course-search-filter-item" name="erc_category_id" form="">
          <option disabled="disabled" selected="">Select Category</option>
          <option value="">All Categories</option>
          <option value="4">ELA - Elementary</option>
          <option value="5">ELA - Middle</option>
          <option value="6">ELA - High School</option>
          <option value="7">ENL/ELL - Elementary</option>
          <option value="8">ENL/ELL - High School</option>
          <option value="9">ENL/ELL - Middle School</option>
          <option value="10">Game Templates</option>
          <option value="11">Math - Elementary</option>
          <option value="12">Math  - High School</option>
          <option value="13">Math - Middle School</option>
          <option value="14">Science - Elementary</option>
          <option value="15">Science - High School</option>
          <option value="16">Social Studies - Elementary </option>
          <option value="17">Social Studies - High School</option>
          <option value="18">Social Studies - Middle School</option>
          <option value="19">Science - Middle School</option>
        </select>
        <select class="course-search-filter-item" name="erc_filetype_id" form="">
          <option disabled="" selected="">Select File Type</option>
          <option value="">All File Types</option>
          <option value="2">Adobe PDF</option>
          <option value="3">Apple Keynote</option>
          <option value="4">Apple Numbers</option>
          <option value="5">Apple Pages</option>
          <option value="6">Google Docs</option>
          <option value="7">Google Sheets</option>
          <option value="8">Google Slides</option>
          <option value="9">Microsoft PowerPoint</option>
          <option value="10">Microsoft Word</option>
          <option value="11">Promethean ActivInspire</option>
          <option value="12">SMART Notebook</option>
          <option value="13">SMART Table</option>
          <option value="14">3D Object</option>
        </select>
        <button type="button" class="erc-educational-standards-btn" data-toggle="modal" data-target="#alignedEducationalStandards">Aligned Educational Standards</button>
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

        <div class="col-md-3 erc course-card-container">
          <div class="card course-card erc course-category">
            <a href="erc-category-library.php">
              <img src="https://opd-beta.teq.com/uploads/erc-categories/ELA-ele.jpg" />
            </a>
            <div class="card-header">
              <a class="thin-heading bold" href="erc-category-library.php">ELA - Elementary <small>(49)</small></a>

            </div>
          </div>
        </div>
        <div class="col-md-3 erc course-card-container">
          <div class="card course-card erc course-category">
            <a href="">
              <img src="https://opd-beta.teq.com/uploads/erc-categories/ELA-Mid.jpg" />
            </a>
            <div class="card-header">
              <a class="thin-heading bold" href="#">ELA - Middle</a>
            </div>
          </div>
        </div>
        <div class="col-md-3 erc course-card-container">
          <div class="card course-card erc course-category">
            <a href="">
              <img src="https://opd-beta.teq.com/uploads/erc-categories/ELA-high.jpg" />
            </a>
            <div class="card-header">
              <a class="thin-heading bold" href="#">ELA - High School</a>
            </div>
          </div>
        </div>
        <div class="col-md-3 erc course-card-container">
          <div class="card course-card erc course-category">
            <a href="">
              <img src="https://opd-beta.teq.com/uploads/erc-categories/ENL-ele.jpg" />
            </a>
            <div class="card-header">
              <a class="thin-heading bold" href="#">ENL/ELL - Elementary</a>
            </div>
          </div>
        </div>
        <div class="col-md-3 erc course-card-container">
          <div class="card course-card erc course-category">
            <a href="">
              <img src="https://opd-beta.teq.com/uploads/erc-categories/ENL-High.jpg" />
            </a>
            <div class="card-header">
              <a class="thin-heading bold" href="#">ENL/ELL - High School</a>
            </div>
          </div>
        </div>
        <div class="col-md-3 erc course-card-container">
          <div class="card course-card erc course-category">
            <a href="">
              <img src="https://opd-beta.teq.com/uploads/erc-categories/ENL-Mid.jpg" />
            </a>
            <div class="card-header">
              <a class="thin-heading bold" href="#">ENL/ELL - Middle School</a>
            </div>
          </div>
        </div>
        <div class="col-md-3 erc course-card-container">
          <div class="card course-card erc course-category">
            <a href="">
              <img src="https://opd-beta.teq.com/uploads/erc-categories/Game-High.jpg" />
            </a>
            <div class="card-header">
              <a class="thin-heading bold" href="#">Game Templates</a>
            </div>
          </div>
        </div>
        <div class="col-md-3 erc course-card-container">
          <div class="card course-card erc course-category">
            <a href="">
              <img src="https://opd-beta.teq.com/uploads/erc-categories/math-ele.jpg" />
            </a>
            <div class="card-header">
              <a class="thin-heading bold" href="#">Math - Elementary</a>
            </div>
          </div>
        </div>
        <div class="col-md-3 erc course-card-container">
          <div class="card course-card erc course-category">
            <a href="">
              <img src="https://opd-beta.teq.com/uploads/erc-categories/Math-high.jpg" />
            </a>
            <div class="card-header">
              <a class="thin-heading bold" href="#">Math - High School</a>
            </div>
          </div>
        </div>
        <div class="col-md-3 erc course-card-container">
          <div class="card course-card erc course-category">
            <a href="">
              <img src="https://opd-beta.teq.com/uploads/erc-categories/math-mid.jpg" />
            </a>
            <div class="card-header">
              <a class="thin-heading bold" href="#">Math - Middle School</a>
            </div>
          </div>
        </div>
        <div class="col-md-3 erc course-card-container">
          <div class="card course-card erc course-category">
            <a href="">
              <img src="https://opd-beta.teq.com/uploads/erc-categories/Sci-ele.jpg" />
            </a>
            <div class="card-header">
              <a class="thin-heading bold" href="#">Science - Elementary</a>
            </div>
          </div>
        </div>
        <div class="col-md-3 erc course-card-container">
          <div class="card course-card erc course-category">
            <a href="">
              <img src="https://opd-beta.teq.com/uploads/erc-categories/Sci-high.jpg" />
            </a>
            <div class="card-header">
              <a class="thin-heading bold" href="#">Science - High School</a>
            </div>
          </div>
        </div>
        <div class="col-md-3 erc course-card-container">
          <div class="card course-card erc course-category">
            <a href="">
              <img src="https://opd-beta.teq.com/uploads/erc-categories/social-ele.jpg" />
            </a>
            <div class="card-header">
              <a class="thin-heading bold" href="#">Social Studies - Elementary</a>
            </div>
          </div>
        </div>
        <div class="col-md-3 erc course-card-container">
          <div class="card course-card erc course-category">
            <a href="">
              <img src="https://opd-beta.teq.com/uploads/erc-categories/Social-high.jpg" />
            </a>
            <div class="card-header">
              <a class="thin-heading bold" href="#">Social Studies - High School</a>
            </div>
          </div>
        </div>
        <div class="col-md-3 erc course-card-container">
          <div class="card course-card erc course-category">
            <a href="">
              <img src="https://opd-beta.teq.com/uploads/erc-categories/Social-mid.jpg" />
            </a>
            <div class="card-header">
              <a class="thin-heading bold" href="#">Social Studies - Middle School</a>
            </div>
          </div>
        </div>
        <div class="col-md-3 erc course-card-container">
          <div class="card course-card erc course-category">
            <a href="">
              <img src="https://opd-beta.teq.com/uploads/erc-categories/Sci-mid.jpg" />
            </a>
            <div class="card-header">
              <a class="thin-heading bold" href="#">Science - Middle School</a>
            </div>
          </div>
        </div>

      </div>
  </div>

  <?php include 'digital-online-certifications.php';?>

</section>

<?php include 'footer.php';?>
