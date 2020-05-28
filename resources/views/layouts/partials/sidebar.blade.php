
  {{-- main menu start --}}
  <div class="menu-w color-scheme-light color-style-transparent menu-position-side menu-side-left menu-layout-compact sub-menu-style-over sub-menu-color-bright selected-menu-color-light menu-activated-on-hover menu-has-selected-link">
    <div class="logo-w">
      <a class="logo" href="index.html">
        <div class="logo-element"></div>
        <div class="logo-label">
            
        
        </div>
      </a>
    </div>
    <div class="logged-user-w avatar-inline">
      <div class="logged-user-i">
        <div class="avatar-w">
        <img alt="" src="{{asset('backend/img/avatar1.jpg')}}">
        </div>
        <div class="logged-user-info-w">
          <div class="logged-user-name">
            {{ Auth::user()->name }}
          </div>
          <div class="logged-user-role">
            Administrator
          </div>
        </div>
        <div class="logged-user-toggler-arrow">
          <div class="os-icon os-icon-chevron-down"></div>
        </div>
        <div class="logged-user-menu color-style-bright">
          <div class="logged-user-avatar-info">
            <div class="avatar-w">
            <img alt="" src="{{asset('backend/img/avatar1.jpg')}}">
            </div>
            <div class="logged-user-info-w">
              <div class="logged-user-name">
                {{ Auth::user()->name }}
              </div>
              <div class="logged-user-role">
                Administrator
              </div>
            </div>
          </div>
          <div class="bg-icon">
            <i class="os-icon os-icon-wallet-loaded"></i>
          </div>
          <ul>
            <li>
              <a href="apps_email.html"><i class="os-icon os-icon-mail-01"></i><span>Incoming Mail</span></a>
            </li>
            <li>
              <a href="users_profile_big.html"><i class="os-icon os-icon-user-male-circle2"></i><span>Profile Details</span></a>
            </li>
            <li>
              <a href="users_profile_small.html"><i class="os-icon os-icon-coins-4"></i><span>Billing Details</span></a>
            </li>
            <li>
              <a href="#"><i class="os-icon os-icon-others-43"></i><span>Notifications</span></a>
            </li>
            <li>
              <a  href="{{ route('logout') }}"
                             onclick="event.preventDefault();
                                           document.getElementById('logout-form').submit();">
                             <i class="os-icon os-icon-signs-11"></i>{{ __('Logout') }}
              </a>

                          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                              @csrf
                          </form>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="menu-actions">
      <!--------------------
      START - Messages Link in secondary top menu
      -------------------->
      {{-- <div class="messages-notifications os-dropdown-trigger os-dropdown-position-right">
        <i class="os-icon os-icon-mail-14"></i>
        <div class="new-messages-count">
          12
        </div>
        <div class="os-dropdown light message-list">
          <ul>
            <li>
              <a href="#">
                <div class="user-avatar-w">
                  <img alt="" src="img/avatar1.jpg">
                </div>
                <div class="message-content">
                  <h6 class="message-from">
                    John Mayers
                  </h6>
                  <h6 class="message-title">
                    Account Update
                  </h6>
                </div>
              </a>
            </li>
            <li>
              <a href="#">
                <div class="user-avatar-w">
                  <img alt="" src="img/avatar2.jpg">
                </div>
                <div class="message-content">
                  <h6 class="message-from">
                    Phil Jones
                  </h6>
                  <h6 class="message-title">
                    Secutiry Updates
                  </h6>
                </div>
              </a>
            </li>
            <li>
              <a href="#">
                <div class="user-avatar-w">
                  <img alt="" src="img/avatar3.jpg">
                </div>
                <div class="message-content">
                  <h6 class="message-from">
                    Bekky Simpson
                  </h6>
                  <h6 class="message-title">
                    Vacation Rentals
                  </h6>
                </div>
              </a>
            </li>
            <li>
              <a href="#">
                <div class="user-avatar-w">
                  <img alt="" src="img/avatar4.jpg">
                </div>
                <div class="message-content">
                  <h6 class="message-from">
                    Alice Priskon
                  </h6>
                  <h6 class="message-title">
                    Payment Confirmation
                  </h6>
                </div>
              </a>
            </li>
          </ul>
        </div>
      </div> --}}
      <!--------------------
      END - Messages Link in secondary top menu
      --------------------><!--------------------
      START - Settings Link in secondary top menu
      -------------------->
      {{-- <div class="top-icon top-settings os-dropdown-trigger os-dropdown-position-right">
        <i class="os-icon os-icon-ui-46"></i>
        <div class="os-dropdown">
          <div class="icon-w">
            <i class="os-icon os-icon-ui-46"></i>
          </div>
          <ul>
            <li>
              <a href="users_profile_small.html"><i class="os-icon os-icon-ui-49"></i><span>Profile Settings</span></a>
            </li>
            <li>
              <a href="users_profile_small.html"><i class="os-icon os-icon-grid-10"></i><span>Billing Info</span></a>
            </li>
            <li>
              <a href="users_profile_small.html"><i class="os-icon os-icon-ui-44"></i><span>My Invoices</span></a>
            </li>
            <li>
              <a href="users_profile_small.html"><i class="os-icon os-icon-ui-15"></i><span>Cancel Account</span></a>
            </li>
          </ul>
        </div>
      </div> --}}
      <!--------------------
      END - Settings Link in secondary top menu
      --------------------><!--------------------
      START - Messages Link in secondary top menu
      -------------------->
      {{-- <div class="messages-notifications os-dropdown-trigger os-dropdown-position-right">
        <i class="os-icon os-icon-zap"></i>
        <div class="new-messages-count">
          4
        </div>
        <div class="os-dropdown light message-list">
          <div class="icon-w">
            <i class="os-icon os-icon-zap"></i>
          </div>
          <ul>
            <li>
              <a href="#">
                <div class="user-avatar-w">
                  <img alt="" src="img/avatar1.jpg">
                </div>
                <div class="message-content">
                  <h6 class="message-from">
                    John Mayers
                  </h6>
                  <h6 class="message-title">
                    Account Update
                  </h6>
                </div>
              </a>
            </li>
            <li>
              <a href="#">
                <div class="user-avatar-w">
                  <img alt="" src="img/avatar2.jpg">
                </div>
                <div class="message-content">
                  <h6 class="message-from">
                    Phil Jones
                  </h6>
                  <h6 class="message-title">
                    Secutiry Updates
                  </h6>
                </div>
              </a>
            </li>
            <li>
              <a href="#">
                <div class="user-avatar-w">
                  <img alt="" src="img/avatar3.jpg">
                </div>
                <div class="message-content">
                  <h6 class="message-from">
                    Bekky Simpson
                  </h6>
                  <h6 class="message-title">
                    Vacation Rentals
                  </h6>
                </div>
              </a>
            </li>
            <li>
              <a href="#">
                <div class="user-avatar-w">
                  <img alt="" src="img/avatar4.jpg">
                </div>
                <div class="message-content">
                  <h6 class="message-from">
                    Alice Priskon
                  </h6>
                  <h6 class="message-title">
                    Payment Confirmation
                  </h6>
                </div>
              </a>
            </li>
          </ul>
        </div>
      </div> --}}
      <!--------------------
      END - Messages Link in secondary top menu
      -------------------->
    </div>
    {{-- <div class="element-search autosuggest-search-activator">
      <input placeholder="Start typing to search..." type="text">
    </div> --}}
    <h1 class="menu-page-header">
      Page Header
    </h1>
    <ul class="main-menu">
      <li class="sub-header">
        <span>Layouts</span>
      </li>
      <li class="selected has-sub-menu">
      <a href="{{route('home')}}">
          <div class="icon-w">
            <div class="os-icon os-icon-layout"></div>
          </div>
         Dashboard</a>
      </li>
      <li class=" has-sub-menu">
      <a href="{{route('home')}}">
          <div class="icon-w">
            <div class="os-icon os-icon-layers"></div>
          </div>
          <span>Menu Styles</span></a>
        <div class="sub-menu-w">
          <div class="sub-menu-header">
            Menu Styles
          </div>
          <div class="sub-menu-icon">
            <i class="os-icon os-icon-layers"></i>
          </div>
          <div class="sub-menu-i">
            <ul class="sub-menu">
              <li>
                {{-- <a href="{{route('sidemenu-full')}}">Side Menu Light</a> --}}
              </li>
              <li>
                {{-- <a href="{{route('sidemenu-full-dark')}}">Side Menu Dark</a> --}}
              </li>
              <li>
                <a href="layouts_menu_side_transparent.html">Side Menu Transparent <strong class="badge badge-danger">New</strong></a>
              </li>
              <li>
                <a href="apps_pipeline.html">Side &amp; Top Dark</a>
              </li>
              <li>
                <a href="apps_projects.html">Side &amp; Top</a>
              </li>
              <li>
                <a href="layouts_menu_side_mini.html">Mini Side Menu</a>
              </li>
              </ul><ul class="sub-menu">
              <li>
                <a href="layouts_menu_side_mini_dark.html">Mini Menu Dark</a>
              </li>
              <li>
              {{-- <a href="{{route('sidemenu-compact')}}">Compact Side Menu</a> --}}
              </li>
              <li>
                {{-- <a href="{{route('sidemenu-compact-dark')}}">Compact Menu Dark</a> --}}
              </li>
              <li>
                <a href="layouts_menu_right.html">Right Menu</a>
              </li>
              <li>
                <a href="layouts_menu_top.html">Top Menu Light</a>
              </li>
              <li>
                <a href="layouts_menu_top_dark.html">Top Menu Dark</a>
              </li>
              </ul><ul class="sub-menu">
              <li>
                <a href="layouts_menu_top_image.html">Top Menu Image <strong class="badge badge-danger">New</strong></a>
              </li>
              <li>
                <a href="layouts_menu_sub_style_flyout.html">Sub Menu Flyout</a>
              </li>
              <li>
                <a href="layouts_menu_sub_style_flyout_dark.html">Sub Flyout Dark</a>
              </li>
              <li>
                <a href="layouts_menu_sub_style_flyout_bright.html">Sub Flyout Bright</a>
              </li>
              <li>
                <a href="layouts_menu_side_compact_click.html">Menu Inside Click</a>
              </li>
            </ul>
          </div>
        </div>
      </li>
      <li class="sub-header">
        <span>Options</span>
      </li>
      <li class=" has-sub-menu">
        <a href="">
          <div class="icon-w">
            <div class="os-icon os-icon-package"></div>
          </div>
          <span>Employee</span></a>
        <div class="sub-menu-w">
          <div class="sub-menu-header">
            Employee
          </div>
          <div class="sub-menu-icon">
            <i class="os-icon os-icon-package"></i>
          </div>
          <div class="sub-menu-i">
            <ul class="sub-menu">
              <li>
              <a href="{{ route('employee.create') }}">Add New Employee</a>
              </li>
              <li>
                <a href="{{ route('employee.index') }}">Employee List</a>
              </li>
            
            </ul>
          </div>
        </div>
      </li>
      <li class=" has-sub-menu">
        <a href="">
          <div class="icon-w">
            <div class="os-icon os-icon-package"></div>
          </div>
          <span>Supervisor</span></a>
        <div class="sub-menu-w">
          <div class="sub-menu-header">
            Supervisor
          </div>
          <div class="sub-menu-icon">
            <i class="os-icon os-icon-package"></i>
          </div>
          <div class="sub-menu-i">
            <ul class="sub-menu">
              <li>
              <a href="{{ route('supervisor.create') }}">Add New Supervisor</a>
              </li>
              <li>
                <a href="{{ route('supervisor.index') }}">Supervisor List</a>
              </li>
            
            </ul>
          </div>
        </div>
      </li>
      <li class=" has-sub-menu">
        <a href="">
          <div class="icon-w">
            <div class="os-icon os-icon-package"></div>
          </div>
          <span>Department</span></a>
        <div class="sub-menu-w">
          <div class="sub-menu-header">
            Department
          </div>
          <div class="sub-menu-icon">
            <i class="os-icon os-icon-package"></i>
          </div>
          <div class="sub-menu-i">
            <ul class="sub-menu">
              <li>
              <a href="{{ route('department.create') }}">Add New Department</a>
              </li>
              <li>
                <a href="{{ route('department.index') }}">Department List</a>
              </li>
            
            </ul>
          </div>
        </div>
      </li>
      <li class=" has-sub-menu">
        <a href="">
          <div class="icon-w">
            <div class="os-icon os-icon-package"></div>
          </div>
          <span>Designation</span></a>
        <div class="sub-menu-w">
          <div class="sub-menu-header">
            Designation
          </div>
          <div class="sub-menu-icon">
            <i class="os-icon os-icon-package"></i>
          </div>
          <div class="sub-menu-i">
            <ul class="sub-menu">
              <li>
              <a href="{{ route('designation.create') }}">Add New Designation</a>
              </li>
              <li>
                <a href="{{ route('designation.index') }}">Designation List</a>
              </li>
            </ul>
          </div>
        </div>
      </li>
      <li class=" has-sub-menu">
        <a href="">
          <div class="icon-w">
            <div class="os-icon os-icon-package"></div>
          </div>
          <span>Project</span></a>
        <div class="sub-menu-w">
          <div class="sub-menu-header">
            Project
          </div>
          <div class="sub-menu-icon">
            <i class="os-icon os-icon-package"></i>
          </div>
          <div class="sub-menu-i">
            <ul class="sub-menu">
              <li>
              <a href="{{ route('project.create') }}">Add New Project</a>
              </li>
              <li>
                <a href="{{ route('project.index') }}">Project List</a>
              </li>
            
            </ul>
          </div>
        </div>
      </li>
      <li class=" has-sub-menu">
        <a href="">
          <div class="icon-w">
            <div class="os-icon os-icon-package"></div>
          </div>
          <span>Leave</span></a>
        <div class="sub-menu-w">
          <div class="sub-menu-header">
            Leave
          </div>
          <div class="sub-menu-icon">
            <i class="os-icon os-icon-package"></i>
          </div>
          <div class="sub-menu-i">
            <ul class="sub-menu">
             
              <li>
                <a href="{{ route('leave.index') }}">Leave Request</a>
              </li>
              <li>
                <a href="{{ route('leave_history') }}">Leave History</a>
              </li>
              <li>
                <a href="{{ route('leave.create') }}">Request For Leave</a>
              </li>
            </ul>
          </div>
        </div>
      </li>
      <li class=" has-sub-menu">
        <a href="">
          <div class="icon-w">
            <div class="os-icon os-icon-package"></div>
          </div>
          <span>Project</span></a>
        <div class="sub-menu-w">
          <div class="sub-menu-header">
            Project
          </div>
          <div class="sub-menu-icon">
            <i class="os-icon os-icon-package"></i>
          </div>
          <div class="sub-menu-i">
            <ul class="sub-menu">
              <li>
              <a href="{{ route('project.create') }}">Add New Project</a>
              </li>
              <li>
                <a href="{{ route('project.index') }}">Project List</a>
              </li>
            
            </ul>
          </div>
        </div>
      </li>

      <li class=" has-sub-menu">
        <a href="">
          <div class="icon-w">
            <div class="os-icon os-icon-package"></div>
          </div>
          <span>Accounts</span></a>
        <div class="sub-menu-w">
          <div class="sub-menu-header">
            Accounts
          </div>
          <div class="sub-menu-icon">
            <i class="os-icon os-icon-package"></i>
          </div>
          <div class="sub-menu-i">
            <ul class="sub-menu">
             
              <li>
                <a href="{{ route('accounts.index') }}">Account</a>
              </li>
              <li>
                <a href="{{ route('accounts.create') }}">Add Employee Accounts</a>
              </li>
            
            </ul>
          </div>
        </div>
      </li>

      <li class=" has-sub-menu">
        <a href="">
          <div class="icon-w">
            <div class="os-icon os-icon-package"></div>
          </div>
          <span>Jobs</span></a>
        <div class="sub-menu-w">
          <div class="sub-menu-header">
            Jobs
          </div>
          <div class="sub-menu-icon">
            <i class="os-icon os-icon-package"></i>
          </div>
          <div class="sub-menu-i">
            <ul class="sub-menu">
             
              <li>
                <a href="{{ route('jobCategories') }}">Job Category</a>
              </li>
              <li>
                <a href="{{ route('skills.index') }}">Skills</a>
              </li>
              <li>
                <a href="{{ route('companies.index') }}">Company</a>
              </li>
              <li>
                <a href="{{ route('joblocation.index') }}">Job Location</a>
              </li>
              <li>
                <a href="{{ route('jobs.create') }}">Post a new job</a>
              </li>
              <li>
                <a href="{{ route('jobs.index') }}">Jobs</a>
              </li>
              <li>
                <a href="{{ route('jobapplication.index') }}">Job Application</a>
              </li>
              <li>
                <a href="{{ route('jobapplication.board') }}">Job Board</a>
              </li>
            </ul>
          </div>
        </div>
      </li>

      <li class=" has-sub-menu">
        <a href="">
          <div class="icon-w">
            <div class="os-icon os-icon-package"></div>
          </div>
          <span>Notice</span></a>
        <div class="sub-menu-w">
          <div class="sub-menu-header">
            Notice
          </div>
          <div class="sub-menu-icon">
            <i class="os-icon os-icon-package"></i>
          </div>
          <div class="sub-menu-i">
            <ul class="sub-menu">
             
              <li>
                <a href="{{ route('notice.index') }}">Notice</a>
              </li>
              <li>
                <a href="{{ route('notice.create') }}">Add New Notice</a>
              </li>
            
            </ul>
          </div>
        </div>
      </li>

      <li class=" has-sub-menu">
        <a href="">
          <div class="icon-w">
            <div class="os-icon os-icon-package"></div>
          </div>
          <span>Conveyance</span></a>
        <div class="sub-menu-w">
          <div class="sub-menu-header">
            Conveyance
          </div>
          <div class="sub-menu-icon">
            <i class="os-icon os-icon-package"></i>
          </div>
          <div class="sub-menu-i">
            <ul class="sub-menu">
             <li>
               <a href="{{ route('conveyance.create') }}">Conveyance Request</a>
             </li>
              <li>
                <a href="{{ route('conveyance.index') }}">Conveyance</a>
              </li>
              <li>
                <a href="{{ route('conveyance_history') }}">Conveyance History</a>
              </li>
            
            </ul>
          </div>
        </div>
      </li>

      <li class=" has-sub-menu">
        <a href="">
          <div class="icon-w">
            <div class="os-icon os-icon-package"></div>
          </div>
          <span>Calendar</span></a>
        <div class="sub-menu-w">
          <div class="sub-menu-header">
            Calendar
          </div>
          <div class="sub-menu-icon">
            <i class="os-icon os-icon-package"></i>
          </div>
          <div class="sub-menu-i">
            <ul class="sub-menu">
             
              <li>
                <a href="{{ route('calendar.index') }}">Calendar</a>
              </li>
              <li>
                <a href="{{ route('calendar.business') }}">Business Calendar</a>
              </li>
              <li>
                <a href="{{ route('calendar.project') }}">Project Calendar</a>
              </li>
              <li>
                <a href="{{ route('calendar.birthday') }}">Birthday Calendar</a>
              </li>
              <li>
                <a href="{{ route('calendar.meeting') }}">Meeting Calendar</a>
              </li>
            
            </ul>
          </div>
        </div>
      </li>



    
      
    </ul>
  </div>
  {{-- main menu end --}}