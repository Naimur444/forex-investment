<div class="am-sideleft">
    <ul class="nav am-sideleft-tab" style="background-color: #32415A; text-align:center;">
        <h2 style="padding-left:15px; padding-top:17px; color:white;">Admin Panel</h2>
    </ul>

    <div class="tab-content">
      <div id="mainMenu" class="tab-pane active">
        <ul class="nav am-sideleft-menu">
          <li class="nav-item">
            <a href="{{ route('forexadmin.dashboard') }}" class="nav-link">
              <i class="icon ion-ios-home-outline"></i>
              <span>Dashboard</span>
            </a>
          </li><!-- nav-item -->
          <li class="nav-item">
            <a href="{{ route('forexadmin.users') }}" class="nav-link">
              <i class="icon ion-ios-list-outline"></i>
              <span>Users</span>
            </a>
          </li><!-- nav-item -->
          <li class="nav-item">
            <a href="{{ route('forexadmin.inplansview') }}" class="nav-link">
              <i class="icon ion-star"></i>
              <span>Investment Plans</span>
            </a>
          </li><!-- nav-item -->
        </ul>
      </div><!-- #mainMenu -->
      <div id="emailMenu" class="tab-pane">
        <div class="pd-x-20 pd-y-10">
          <a href="" class="btn btn-orange btn-block btn-compose">Compose Email</a>
        </div>
        <ul class="nav am-sideleft-menu">
          <li class="nav-item">
            <a href="page-inbox.html" class="nav-link">
              <i class="icon ion-ios-filing-outline"></i>
              <span>Inbox</span>
            </a>
          </li><!-- nav-item -->
          <li class="nav-item">
            <a href="page-inbox.html" class="nav-link">
              <i class="icon ion-ios-filing-outline"></i>
              <span>Drafts</span>
            </a>
          </li><!-- nav-item -->
          <li class="nav-item">
            <a href="page-inbox.html" class="nav-link">
              <i class="icon ion-ios-paperplane-outline"></i>
              <span>Sent</span>
            </a>
          </li><!-- nav-item -->
          <li class="nav-item">
            <a href="page-inbox.html" class="nav-link">
              <i class="icon ion-ios-trash-outline"></i>
              <span>Trash</span>
            </a>
          </li><!-- nav-item -->
          <li class="nav-item">
            <a href="page-inbox.html" class="nav-link">
              <i class="icon ion-ios-filing-outline"></i>
              <span>Spam</span>
            </a>
          </li><!-- nav-item -->
        </ul>

        <label class="pd-x-20 tx-uppercase tx-11 mg-t-10 tx-orange mg-b-0 tx-medium">My Folder</label>
        <ul class="nav am-sideleft-menu">
          <li class="nav-item">
            <a href="page-inbox.html" class="nav-link">
              <i class="icon ion-ios-folder-outline"></i>
              <span>Updates</span>
            </a>
          </li><!-- nav-item -->
          <li class="nav-item">
            <a href="page-inbox.html" class="nav-link">
              <i class="icon ion-ios-folder-outline"></i>
              <span>Social</span>
            </a>
          </li><!-- nav-item -->
          <li class="nav-item">
            <a href="page-inbox.html" class="nav-link">
              <i class="icon ion-ios-folder-outline"></i>
              <span>Promotions</span>
            </a>
          </li><!-- nav-item -->
        </ul>
      </div><!-- #emailMenu -->
      <div id="chatMenu" class="tab-pane">
        <div class="chat-search-bar">
          <input type="search" class="form-control wd-150" placeholder="Search chat...">
          <button class="btn btn-secondary"><i class="fa fa-search"></i></button>
        </div><!-- chat-search-bar -->

        <label class="pd-x-15 tx-uppercase tx-11 mg-t-20 tx-orange mg-b-10 tx-medium">Recent Chat History</label>
        <div class="list-group list-group-chat">
          <a href="#" class="list-group-item">
            <div class="d-flex align-items-center">
              <img src="../img/img6.jpg" class="wd-32 rounded-circle" alt="">
              <div class="mg-l-10">
                <h6>Russell M. Evans</h6>
                <span>Tuesday, 10:33am</span>
              </div>
            </div><!-- d-flex -->
            <p>Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain...</p>
          </a><!-- list-group-item -->
          <a href="#" class="list-group-item">
            <div class="d-flex align-items-center">
              <img src="../img/img7.jpg" class="wd-32 rounded-circle" alt="">
              <div class="mg-l-10">
                <h6>James F. Sears</h6>
                <span>Monday, 4:21pm</span>
              </div>
            </div><!-- d-flex -->
            <p>But who has any right to find fault with a man who chooses to enjoy a pleasure that has...</p>
          </a><!-- list-group-item -->
          <a href="#" class="list-group-item">
            <div class="d-flex align-items-center">
              <img src="../img/img8.jpg" class="wd-32 rounded-circle" alt="">
              <div class="mg-l-10">
                <h6>Sharon R. Rowe</h6>
                <span>Sunday, 7:45pm</span>
              </div>
            </div><!-- d-flex -->
            <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising...</p>
          </a><!-- list-group-item -->
          <a href="#" class="list-group-item">
            <div class="d-flex align-items-center">
              <img src="../img/img9.jpg" class="wd-32 rounded-circle" alt="">
              <div class="mg-l-10">
                <h6>Ruby M. Martin</h6>
                <span>Sunday, 7:45pm</span>
              </div>
            </div><!-- d-flex -->
            <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising...</p>
          </a><!-- list-group-item -->
          <a href="#" class="list-group-item">
            <div class="d-flex align-items-center">
              <img src="../img/img10.jpg" class="wd-32 rounded-circle" alt="">
              <div class="mg-l-10">
                <h6>Joslyn C. Mayo</h6>
                <span>Sunday, 7:45pm</span>
              </div>
            </div><!-- d-flex -->
            <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising...</p>
          </a><!-- list-group-item -->
        </div><!-- list-group -->
        <span class="d-block pd-15 tx-12">Loading messages...</span>

      </div><!-- #chatMenu -->
      <div id="settingMenu" class="tab-pane">
        <div class="pd-x-15">
          <label class="tx-uppercase tx-11 mg-t-10 tx-orange mg-b-15 tx-medium">Quick Settings</label>
          <div class="bd pd-15">
            <h6 class="tx-13 tx-normal tx-gray-800">Daily Newsletter</h6>
            <p class="tx-12">Get notified when someone else is trying to access your account.</p>
            <div class="toggle toggle-light warning"></div>
          </div><!-- bd -->

          <div class="bd pd-15 mg-t-15">
            <h6 class="tx-13 tx-normal tx-gray-800">Call Phones</h6>
            <p class="tx-12">Make calls to friends and family right from your account.</p>
            <div class="toggle toggle-light warning"></div>
          </div><!-- bd -->

          <div class="bd pd-15 mg-t-15">
            <h6 class="tx-13 tx-normal tx-gray-800">Login Notifications</h6>
            <p class="tx-12">Get notified when someone else is trying to access your account.</p>
            <div class="toggle toggle-light warning"></div>
          </div><!-- bd -->

          <div class="bd pd-15 mg-t-15">
            <h6 class="tx-13 tx-normal tx-gray-800">Phone Approvals</h6>
            <p class="tx-12">Use your phone when login as an extra layer of security.</p>
            <div class="toggle toggle-light warning"></div>
          </div><!-- bd -->
        </div>
      </div><!-- #settingMenu -->
    </div><!-- tab-content -->
  </div><!-- am-sideleft -->