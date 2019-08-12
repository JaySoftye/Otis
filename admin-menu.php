<button id="adminMenu" class="admin-menu" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
<div class="dropdown-menu" aria-labelledby="adminMenu">
  <a class="dropdown-item thin-heading black-text" href="#add-to-playlist" data-toggle="modal">Add to playlist</a>
  <a class="dropdown-item thin-heading black-text" href="#share-playlist" data-toggle="modal">Share playlist</a>
  <a class="dropdown-item thin-heading black-text" href="#">Admin</a>
</div>

<div class="modal" id="add-to-playlist" tabindex="-1" role="dialog" aria-labelledby="add-to-playlist" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">

        <form name="" method="" class="share-event-progress-form" action="/groups/group-view">
        <input type="hidden" name="event_video_id" value="1236">

          <section class="modal-body padding-sm">
            <h3 class="thin-heading bold">Add To or Create a Playlist</h3>
            <p>To add this course to a users playlist, start by creating a new playlist or selecting an existing playlist then simply click the add to playlist button. You'll be given the option to share the playlist once you successfully added the course to the selected playlist.</p>

            <section class="sharing-section">

              <div class="form-row align-items-center">
                <div class="col-5 popup-form-field">
                  <input type="text" class="no-margin" id="" placeholder="New playlist name">
                </div>
                <div class="col-1 popup-form-field text-center">
                  or
                </div>
                <div class="col-5 popup-form-field">
                  <select name="playlist_name" class="popup-dropdown-item">
                    <option selected="selected" value="" disabled="disabled">Select a playlist...</option>
                    <option value="">Playlist</option>
                  </select>
                </div>
                <div class="col-12">
                  <button class="button small-button pd-blue-button inline-block dropshadow caps text-center" type="button">+ Add to playlist</button>
                </div>
              </div>

              <div class="form-row">
                <div class="col border-top border-bottom padding">
                  <h5 class="thin-heading bold">This course has been successfully added to the <span id="playlist_title">Playlist Name</span>. <br /><button class="button small-button yellow-button dropshadow caps" type="button">YOU CAN SHARE YOUR PLAYLIST NOW</button></h5>
                </div>
              </div>

              <div class="form-row no-margin align-items-center">
                <div class="col-5 popup-form-field">
                  <select name="district_name" class="popup-dropdown-item">
                    <option selected="selected" value="" disabled="disabled">Select a district...</option>
                    <option value="">District</option>
                  </select>
                </div>
                <div class="col-1 text-center">or</div>
                <div class="col-5 popup-form-field">
                  <select name="school_name" class="popup-dropdown-item">
                    <option selected="selected" value="" disabled="disabled">Select a School...</option>
                    <option value="">School</option>
                  </select>
                </div>
              </div>

              <div class="form-row no-margin">
                <div class="col-5 popup-form-field">
                  <select class="user-selection" multiple="multiple" data-url="/groups/get-users-options">
                    <option value="" class="">School Name 1</option>
                  </select>
                </div>
                <div class="col-1"></div>
                <div class="col-5 popup-form-field">
                  <select class="user-selection" multiple="multiple"></select>
                </div>
              </div>
              <div class="form-row">
                <div class="col-md-11 text-center">
                  <button class="button medium-button pd-blue-button dropshadow" type="button">SHARE PLAYLIST</button>
                </div>
              </div>
              <p class="share-status text-center"></p>
            </section>

          </section>

        </form>

        <button type="button" class="close popup-close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>

    </div>
  </div>
</div>

<div class="modal" id="share-playlist" tabindex="-1" role="dialog" aria-labelledby="share-playlist" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">

        <form name="" method="" class="share-event-progress-form" action="/groups/group-view">
        <input type="hidden" name="event_video_id" value="1236">

          <section class="modal-body padding-sm">
            <h3 class="thin-heading bold">Share Playlist</h3>
            <p>Start by selecting an existing playlist from the menu below. You'll then be given the option to share with other users by selecting the District and School they are associated with.</p>

            <section class="sharing-section">

              <div class="form-row align-items-center">
                <div class="col-5 popup-form-field">
                  <input type="text" class="no-margin" id="" placeholder="New playlist name">
                </div>
                <div class="col-1 popup-form-field text-center">
                  or
                </div>
                <div class="col-5 popup-form-field">
                  <select name="playlist_name" class="popup-dropdown-item">
                    <option selected="selected" value="" disabled="disabled">Select a playlist...</option>
                    <option value="">Playlist</option>
                  </select>
                </div>
              </div>

              <div class="form-row">
                <div class="col border-top border-bottom padding">
                  <h5 class="thin-heading bold">You have select the <span id="playlist_title">Playlist Name</span>.</h5>
                  <p>Using the options below, you can search for users, districts, or schools to share your playlist with</p>
                </div>
              </div>

              <div class="form-row no-margin align-items-center">
                <div class="col-5 popup-form-field">
                  <select name="district_name" class="popup-dropdown-item">
                    <option selected="selected" value="" disabled="disabled">Select a district...</option>
                    <option value="">District</option>
                  </select>
                </div>
                <div class="col-1 text-center">or</div>
                <div class="col-5 popup-form-field">
                  <select name="school_name" class="popup-dropdown-item">
                    <option selected="selected" value="" disabled="disabled">Select a School...</option>
                    <option value="">School</option>
                  </select>
                </div>
              </div>

              <div class="form-row no-margin">
                <div class="col-5 popup-form-field">
                  <select class="user-selection" multiple="multiple" data-url="/groups/get-users-options">
                    <option value="" class="">School Name 1</option>
                  </select>
                </div>
                <div class="col-1"></div>
                <div class="col-5 popup-form-field">
                  <select class="user-selection" multiple="multiple"></select>
                </div>
              </div>
              <div class="form-row">
                <div class="col-md-11 text-center">
                  <button class="button medium-button pd-blue-button dropshadow" type="button">SHARE PLAYLIST</button>
                </div>
              </div>
              <p class="share-status text-center"></p>
            </section>

          </section>

        </form>

        <button type="button" class="close popup-close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>

    </div>
  </div>
</div>
