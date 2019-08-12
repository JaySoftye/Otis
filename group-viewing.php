<a class="button medium-button green-button no-margin group-view" href="#group-viewing" data-toggle="modal">GROUP VIEW</a>

<div class="modal" id="group-viewing" tabindex="-1" role="dialog" aria-labelledby="group-viewing" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">

        <form name="" method="" class="share-event-progress-form" action="/groups/group-view">
        <input type="hidden" name="event_video_id" value="1236">

          <section class="modal-body padding-sm">
            <h3 class="thin-heading bold">Group Viewing</h3>
            <p>Watch a Course together and share all Progress to users who are present</p>
            <p>All selected participants will need to log into their account at onlinepd.teq.com after completion of the video to complete their quiz to earn their certificate by navigating to their "My Usage" or the "Course Page"</p>
            <p>Progress can still be shared if group does not finish the video together. Selected users can pick up where the group stopped watching current course.</p>

            <section class="sharing-section">

              <div class="form-row">
                <div class="col-5 popup-form-field">
                  <select name="school_name" class="popup-dropdown-item">
                    <option selected="selected" value="" disabled="disabled">Select a school...</option>
                    <option value="2783">015M ROBERTO CLEMENTE</option>
                    <option value="4424">039K Henry Bristow</option>
                  </select>
                </div>
                <div class="col-12 form-grow">
                  <div class="schools-selected">
                    <button type="button" class="remove-item">× 015M ROBERTO CLEMENTE</button>
                    <button type="button" class="remove-item">× 039K Henry Bristow</button>
                  </div>
                </div>
              </div>

              <div class="form-row no-margin">
                <div class="col-5 popup-form-field">
                  <input type="text" class="no-margin" id="search-users" placeholder="Type to filter users below...">
                </div>
              </div>

              <div class="form-row no-margin">
                <div class="col-5 popup-form-field">
                  <select class="user-selection" multiple="multiple" data-url="/groups/get-users-options">
                    <option value="60169" class="">Lauren Burns</option>
                    <option value="60187" class="">Rosemary Camera</option>
                  </select>
                </div>
                <div class="col-1 align-self-center text-center no-padding popup-form-field">
                  <button class="add-share-user-btn" type="button"></button>
                  <button class="remove-share-user-btn" type="button"></button>
                </div>
                <div class="col-5 popup-form-field">
                  <select class="form-control selected-users no-filter" multiple="multiple"></select>
                </div>
              </div>
              <div class="form-row">
                <div class="col-md-11 text-center">
                  <button class="button medium-button pd-blue-button dropshadow" type="button">SHARE PROGRESS TO USERS</button>
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
