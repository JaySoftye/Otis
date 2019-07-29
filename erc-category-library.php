<?php
  $logged_in = True;
  include 'header.php';
?>
<?php include 'askotis.php';?>
  <?php include 'login-window.php';?>

  <?php
    $default_background_image_url='assets/images/default-course-background_lg.jpg';
  ?>

<section class="main-content">

  <div class="container-fluid erc course-background" style="background-image: url('<?php echo $default_background_image_url; ?>');">
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
    <div class="row align-items-center">
      <div class="col-md-6 padding-top">
        <h1 class="thin-heading">ELA - Elementary</h1>
      </div>
      <div class="col-md-6 text-right padding-top">
        <p><span>4</span> results found for <em>ELA - Elementary</em></p>
      </div>
    </div>
    <div class="row course-selections">

        <div class="col-md-3 erc course-card-container">
          <div class="card course-card erc course-category">
            <a href="erc-library-download.php">
              <img src="https://opd-beta.teq.com/uploads/erc-resources/A_is_for_Animals.PNG" />
            </a>
            <div class="card-body">
              <h6><a href="erc-library-download.php" class="item-link">ELA - Elementary</a></h6>
              <h4><a href="#" class="item-link"><strong>A is for Animals</strong></a></h4>
            </div>
            <div class="card-footer" style="background-image: url('assets/images/smart-notebook_icon.svg');"></div>
          </div>
        </div>
        <div class="col-md-3 erc course-card-container">
          <div class="card course-card erc course-category">
            <a href="erc-library-download.php">
              <img src="https://opd-beta.teq.com/uploads/erc-resources/A_is_for_Animals.PNG" />
            </a>
            <div class="card-body">
              <h6><a href="erc-library-download.php" class="item-link">ELA - Elementary</a></h6>
              <h4><a href="#" class="item-link"><strong>A is for Animals</strong></a></h4>
            </div>
            <div class="card-footer" style="background-image: url('assets/images/smart-notebook_icon.svg');"></div>
          </div>
        </div>
        <div class="col-md-3 erc course-card-container">
          <div class="card course-card erc course-category">
            <a href="erc-library-download.php">
              <img src="https://opd-beta.teq.com/uploads/erc-resources/A_is_for_Animals.PNG" />
            </a>
            <div class="card-body">
              <h6><a href="erc-library-download.php" class="item-link">ELA - Elementary</a></h6>
              <h4><a href="#" class="item-link"><strong>A is for Animals</strong></a></h4>
            </div>
            <div class="card-footer" style="background-image: url('assets/images/smart-notebook_icon.svg');"></div>
          </div>
        </div>
        <div class="col-md-3 erc course-card-container">
          <div class="card course-card erc course-category">
            <a href="erc-library-download.php">
              <img src="https://opd-beta.teq.com/uploads/erc-resources/A_is_for_Animals.PNG" />
            </a>
            <div class="card-body">
              <h6><a href="erc-library-download.php" class="item-link">ELA - Elementary</a></h6>
              <h4><a href="#" class="item-link"><strong>A is for Animals</strong></a></h4>
            </div>
            <div class="card-footer" style="background-image: url('assets/images/smart-notebook_icon.svg');"></div>
          </div>
        </div>

        <div class="col-md-12 text-center padding-top">
          <p><a class="button small-button yellow-button dropshadow" href="#">LOAD MORE</a></p>
        </div>
      </div>
    <svg version="1.1" viewBox="0 0 600 103">
    	 <path class="pd-blue-fill" d="M600,103.5V31.453c-69.209,10.354-117.449,10.97-167.539-0.395c-19.904-4.516-56.294-13.321-94.03-12.518 c-16.291,0.347-28.846,2.982-45.128,3.552c-33.654,1.177-61.406-5.531-90.319-6.3c-36.548-0.971-61.23,6.535-97.388,10.992 C71.228,31.02,17.97,31.453,0,31.453L0,103.5H600z"/>
    </svg>
  </div>

  <?php include 'digital-online-certifications.php';?>

</section>

<?php include 'footer.php';?>
