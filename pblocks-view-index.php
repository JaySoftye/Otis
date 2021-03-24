<?php
  $ercIndex = True;
  $logged_in = True;
  include 'header.php';
?>
<?php include 'askotis.php';?>
  <?php include 'login-window.php';?>

<section class="main-content thin-search-bar">

  <div id="skills_header_back">
<div class="container padding-left padding-right">
    <div class="row" style="padding-top: 35px;">
        <div class="col-md">
            <form id="skills_search_form" method="GET" action="/courses/category" data-section="course-search-container">
                <div class="form-group fg--search">
		    <h3 id="course_library_header_skills" class="bold">Quick to learn skills</h3>
                    <input type="text" class="input" id="search-field" name="q" value="" placeholder="Search Skills Videos" title="Search Courses">
                    <i class="fa fa-search"></i>
                    <input type="hidden" name="isskill" value="1">
                </div>
            </form>
        </div>

    </div>
    <div class="row">
    <div class="col-md-12">
    <strong><h5>Have an interest in SMART boards or a specific educational technology product need that you would like to<br> increase your knoledge of?</h5></strong>
    </div>
    </div>
	    </div>
	<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1280 150">
      <path fill="#FFFFFF" d="M-3,154.5h1286.536v-127c0,0-300.886,84.667-639.63,84.667C340.974,112.167-3,27.5-3,27.5V154.5z"></path>
    </svg>
</div>

  <div class="container-fluid erc course-filters">
    <div class="row align-items-center">
      <div class="col-md offset-md-3">
        <h4 class="no-margin bold">All Products</h4>
      </div>
      <div class="col-md-3 text-right">
        <span class="sub-heading bold">SELECT A PRODUCT:</span>
        <select class="course-sort-filter-item" name="sort_id" data-value="">
          <option value="/index.php/skills/view-all-pblocks">All Products</option>
          <option value="/skills/view/45/Farmshelf">Farmshelf</option>
          <option value="/skills/view/36/introduction">introduction</option>
          <option value="/skills/view/26/Sphero">Sphero</option>
          <option value="/skills/view/76/UBTECH">UBTECH</option>
          <option value="/skills/view/25/Wonder-Workshop">Wonder Workshop</option>
        </select>
      </div>
    </div>
  </div>

  <div class="container-fluid course-categories-container erc course-filters">
    <div class="row">

      <div class="col-md-3 col-sm-6 erc course-search-filters-container">
        <p><img src="assets/images/pblockpng.png" alt="pBlocks"></p>
        <p>Learn the ins and outs of your new STEM products with our fun tutorial videos. We'll cover what it is, how it works, and equip you and your students to use it in the classroom.</p>
      </div>

      <div class="col-md no-padding">
        <div class="row user-data smart-skill-selected">

          <div class="col-sm-12 col-md-4 course-card-container">
            <div class="card course-card course-card-small">
              <div class="card-header instructional-skills">
                <ul class="nav course-details">
                  <li class="nav-item category-duration-details">
                    <a href="/events/view/skills/26/14386">05min</a>
                  </li>
                  <li class="nav-item"></li>
                </ul>
                <div class="dropdown event-tile-menu">
                  <button class="admin-menu " data-toggle="dropdown" role="button" type="button" aria-haspopup="true" aria-expanded="false"></button>
                  <div class="dropdown-menu" id="disable_transform">
                    <a class="dropdown-item black-text" href="#" data-toggle="modal" data-target="#add-to-playlist1"><strong>Add to Playlist</strong></a>
                    <a class="dropdown-item black-text" href="#" data-toggle="modal" data-target="#share-playlist1"><strong>Share Playlist</strong></a>
                    <a class="dropdown-item black-text favorite-btn" href="/favorites" data-id="14386"><strong>Add to My Favorites</strong></a>
                  </div>
                </div>
              </div>
              <div class="card-body" style="transform: rotate(0);">
                <img src="https://cf561eb26.lwcdn.com/i/v-i-6002b2e0-90dd-4d4e-9c43-dac95ed399d0-1124x70.jpg">
                <p><a href="/events/view/skills/26/14386">Sphero - Bolt - pBlocks </a></p>
                <p class="mb-2"><small></small></p>
                <p class="card-text">Walk through an unboxing of Sphero BOLT, and learn about the robot’s advanced sensors, durability, charging, and more.&nbsp; End off with a preview of the Sphero Edu app, and learn how to connect to the...</p>
                <a onclick="createItem('view-all-pblocks')" href="/events/view/skills/26/14386" class="stretched-link"></a>
              </div>
            </div>
          </div>
          <div class="col-sm-12 col-md-4 course-card-container">
            <div class="card course-card course-card-small">
              <div class="card-header instructional-skills">
                <ul class="nav course-details">
                  <li class="nav-item category-duration-details">
                    <a href="#">05min</a>
                  </li>
                  <li class="nav-item"></li>
                </ul>
                <div class="dropdown event-tile-menu">
                  <button class="admin-menu " data-toggle="dropdown" role="button" type="button" aria-haspopup="true" aria-expanded="false"></button>
                  <div class="dropdown-menu" id="disable_transform">
                    <a class="dropdown-item black-text" href="#" data-toggle="modal" data-target="#add-to-playlist1"><strong>Add to Playlist</strong></a>
                    <a class="dropdown-item black-text" href="#" data-toggle="modal" data-target="#share-playlist1"><strong>Share Playlist</strong></a>
                    <a class="dropdown-item black-text favorite-btn" href="/favorites" data-id="14386"><strong>Add to My Favorites</strong></a>
                  </div>
                </div>
              </div>
              <div class="card-body" style="transform: rotate(0);">
                <img src="https://cf561eb26.lwcdn.com/i/v-i-f3146a14-9d55-4f5b-bf09-2506b4a903ac-3124x70.jpg">
                <p><a href="/events/view/skills/45/14484">Farmshelf - Harvesting your flowering crops - pBlocks</a></p>
                <p class="mb-2"><small></small></p>
                <p class="card-text">Flowering crops such as chamomile, marigold, and viola are not only beautiful, but tasty too! You can harvest flowering crops by snipping them above the main foliage.</p>
                <a onclick="createItem('view-all-pblocks')" href="#" class="stretched-link"></a>
              </div>
            </div>
          </div>
          <div class="col-sm-12 col-md-4 course-card-container">
            <div class="card course-card course-card-small">
              <div class="card-header instructional-skills">
                <ul class="nav course-details">
                  <li class="nav-item category-duration-details">
                    <a href="#">05min</a>
                  </li>
                  <li class="nav-item"></li>
                </ul>
                <div class="dropdown event-tile-menu">
                  <button class="admin-menu " data-toggle="dropdown" role="button" type="button" aria-haspopup="true" aria-expanded="false"></button>
                  <div class="dropdown-menu" id="disable_transform">
                    <a class="dropdown-item black-text" href="#" data-toggle="modal" data-target="#add-to-playlist1"><strong>Add to Playlist</strong></a>
                    <a class="dropdown-item black-text" href="#" data-toggle="modal" data-target="#share-playlist1"><strong>Share Playlist</strong></a>
                    <a class="dropdown-item black-text favorite-btn" href="/favorites" data-id="14386"><strong>Add to My Favorites</strong></a>
                  </div>
                </div>
              </div>
              <div class="card-body" style="transform: rotate(0);">
                <img src="https://cf561eb26.lwcdn.com/i/v-i-20494051-53b3-4c47-bb30-afcc0b5f9ebe-3124x70.jpg">
                <p><a href="/events/view/skills/45/14485">Farmshelf - Harvesting your hedge crops - pBlocks</a></p>
                <p class="mb-2"><small></small></p>
                <p class="card-text">You can harvest hedge crops such as thyme and parsley by trimming up a few inches up from the base of the plant to ensure regrowth.</p>
                <a onclick="createItem('view-all-pblocks')" href="#" class="stretched-link"></a>
              </div>
            </div>
          </div>
          <div class="col-sm-12 col-md-4 course-card-container">
            <div class="card course-card course-card-small">
              <div class="card-header instructional-skills">
                <ul class="nav course-details">
                  <li class="nav-item category-duration-details">
                    <a href="#">05min</a>
                  </li>
                  <li class="nav-item"></li>
                </ul>
                <div class="dropdown event-tile-menu">
                  <button class="admin-menu " data-toggle="dropdown" role="button" type="button" aria-haspopup="true" aria-expanded="false"></button>
                  <div class="dropdown-menu" id="disable_transform">
                    <a class="dropdown-item black-text" href="#" data-toggle="modal" data-target="#add-to-playlist1"><strong>Add to Playlist</strong></a>
                    <a class="dropdown-item black-text" href="#" data-toggle="modal" data-target="#share-playlist1"><strong>Share Playlist</strong></a>
                    <a class="dropdown-item black-text favorite-btn" href="/favorites" data-id="14386"><strong>Add to My Favorites</strong></a>
                  </div>
                </div>
              </div>
              <div class="card-body" style="transform: rotate(0);">
                <img src="https://cf561eb26.lwcdn.com/i/v-i-72ea0ec9-b448-403b-93f2-853b34abf557-4124x70.jpg">
                <p><a href="/events/view/skills/45/14488">Farmshelf - Harvesting your lettuce crops - pBlocks</a></p>
                <p class="mb-2"><small></small></p>
                <p class="card-text">Lettuce crops such as butter lettuce and romaine can be collected by gathering up the leaves and trimming a few inches from the base of the plant.</p>
                <a onclick="createItem('view-all-pblocks')" href="#" class="stretched-link"></a>
              </div>
            </div>
          </div>
          <div class="col-sm-12 col-md-4 course-card-container">
            <div class="card course-card course-card-small">
              <div class="card-header instructional-skills">
                <ul class="nav course-details">
                  <li class="nav-item category-duration-details">
                    <a href="#">05min</a>
                  </li>
                  <li class="nav-item"></li>
                </ul>
                <div class="dropdown event-tile-menu">
                  <button class="admin-menu " data-toggle="dropdown" role="button" type="button" aria-haspopup="true" aria-expanded="false"></button>
                  <div class="dropdown-menu" id="disable_transform">
                    <a class="dropdown-item black-text" href="#" data-toggle="modal" data-target="#add-to-playlist1"><strong>Add to Playlist</strong></a>
                    <a class="dropdown-item black-text" href="#" data-toggle="modal" data-target="#share-playlist1"><strong>Share Playlist</strong></a>
                    <a class="dropdown-item black-text favorite-btn" href="/favorites" data-id="14386"><strong>Add to My Favorites</strong></a>
                  </div>
                </div>
              </div>
              <div class="card-body" style="transform: rotate(0);">
                <img src="https://cf561eb26.lwcdn.com/i/v-i-8867dac7-041e-4360-b551-2e020eb7b549-3124x70.jpg">
                <p><a href="/events/view/skills/45/14489">Farmshelf - Harvesting your stalk crops - pBlocks</a></p>
                <p class="mb-2"><small></small></p>
                <p class="card-text">When trimming stalked crops such as kale be sure to trim only the most mature stalks to maximize future crop yield, leaving enough stalks to continue growing.</p>
                <a onclick="createItem('view-all-pblocks')" href="#" class="stretched-link"></a>
              </div>
            </div>
          </div>
          <div class="col-sm-12 col-md-4 course-card-container">
            <div class="card course-card course-card-small">
              <div class="card-header instructional-skills">
                <ul class="nav course-details">
                  <li class="nav-item category-duration-details">
                    <a href="#">05min</a>
                  </li>
                  <li class="nav-item"></li>
                </ul>
                <div class="dropdown event-tile-menu">
                  <button class="admin-menu " data-toggle="dropdown" role="button" type="button" aria-haspopup="true" aria-expanded="false"></button>
                  <div class="dropdown-menu" id="disable_transform">
                    <a class="dropdown-item black-text" href="#" data-toggle="modal" data-target="#add-to-playlist1"><strong>Add to Playlist</strong></a>
                    <a class="dropdown-item black-text" href="#" data-toggle="modal" data-target="#share-playlist1"><strong>Share Playlist</strong></a>
                    <a class="dropdown-item black-text favorite-btn" href="/favorites" data-id="14386"><strong>Add to My Favorites</strong></a>
                  </div>
                </div>
              </div>
              <div class="card-body" style="transform: rotate(0);">
                <img src="https://cf561eb26.lwcdn.com/i/v-i-49a90c4f-bdb3-41bd-a0fe-93ae9b3191ce-3124x70.jpg">
                <p><a href="/events/view/skills/45/14483">Farmshelf - Harvesting your branching crops - pBlocks</a></p>
                <p class="mb-2"><small></small></p>
                <p class="card-text">Branching crops such as basil &amp; shiso can be trimmed above a cluster of leaves (also called a node) to ensure healthy regrowth.</p>
                <a onclick="createItem('view-all-pblocks')" href="#" class="stretched-link"></a>
              </div>
            </div>
          </div>
          <div class="col-sm-12 col-md-4 course-card-container">
            <div class="card course-card course-card-small">
              <div class="card-header instructional-skills">
                <ul class="nav course-details">
                  <li class="nav-item category-duration-details">
                    <a href="#">05min</a>
                  </li>
                  <li class="nav-item"></li>
                </ul>
                <div class="dropdown event-tile-menu">
                  <button class="admin-menu " data-toggle="dropdown" role="button" type="button" aria-haspopup="true" aria-expanded="false"></button>
                  <div class="dropdown-menu" id="disable_transform">
                    <a class="dropdown-item black-text" href="#" data-toggle="modal" data-target="#add-to-playlist1"><strong>Add to Playlist</strong></a>
                    <a class="dropdown-item black-text" href="#" data-toggle="modal" data-target="#share-playlist1"><strong>Share Playlist</strong></a>
                    <a class="dropdown-item black-text favorite-btn" href="/favorites" data-id="14386"><strong>Add to My Favorites</strong></a>
                  </div>
                </div>
              </div>
              <div class="card-body" style="transform: rotate(0);">
                <img src="https://cf561eb26.lwcdn.com/i/v-i-299523bd-ac03-4675-be92-26be2e9a2f2e-1124x70.jpg">
                <p><a href="/events/view/skills/25/15046">WonderWorkshop - Dash - pBlock</a></p>
                <p class="mb-2"><small></small></p>
                <p class="card-text">Unbox your Dash robot, learn about basic functions like powering on and charging, and then explore the many apps from Wonder Workshop that are made especially for learning to code with Dash.&nbsp;</p>
                <a onclick="createItem('view-all-pblocks')" href="#" class="stretched-link"></a>
              </div>
            </div>
          </div>

        </div>
      </div>

    </div>
  </div>

</section>

<?php include 'footer.php';?>
