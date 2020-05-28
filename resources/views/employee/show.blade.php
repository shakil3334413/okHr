@extends('layouts.master')

@section('content')
<div class="content-i">
    <div class="content-box"><div class="row">
<div class="col-sm-5">
<div class="user-profile compact">
<div class="up-head-w" style="background-image:url(/img/employee/{{ $employee->image }})">
<div class="up-social">
  <a href="#"><i class="os-icon os-icon-twitter"></i></a><a href="#"><i class="os-icon os-icon-facebook"></i></a>
</div>
<div class="up-main-info">
  <h2 class="up-header">
    {{ $employee->name }}
  </h2>
  <h6 class="up-sub-header">
    {{ $employee->designation }}
  </h6>
</div>
<svg class="decor" width="842px" height="219px" viewBox="0 0 842 219" preserveAspectRatio="xMaxYMax meet" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g transform="translate(-381.000000, -362.000000)" fill="#FFFFFF"><path class="decor-path" d="M1223,362 L1223,581 L381,581 C868.912802,575.666667 1149.57947,502.666667 1223,362 Z"></path></g></svg>
</div>
<div class="up-controls">
<div class="row">
  <div class="col-sm-6">
    <div class="value-pair">
      <div class="label">
        Status:
      </div>
      <div class="value badge badge-pill badge-success">
        Online
      </div>
    </div>
  </div>
  <div class="col-sm-6 text-right">
    <a class="btn btn-primary btn-sm" href=""><i class="os-icon os-icon-link-3"></i><span>Add to Friends</span></a>
  </div>
</div>
</div>
<div class="up-contents">
<div class="m-b">
  <div class="row m-b">
    <div class="col-sm-6 b-r b-b">
      <div class="el-tablo centered padded-v">
        <div class="value">
          25
        </div>
        <div class="label">
          Products Sold
        </div>
      </div>
    </div>
    <div class="col-sm-6 b-b">
      <div class="el-tablo centered padded-v">
        <div class="value">
          315
        </div>
        <div class="label">
          Friends
        </div>
      </div>
    </div>
  </div>
  <div class="padded">
    <div class="os-progress-bar primary">
      <div class="bar-labels">
        <div class="bar-label-left">
          <span>Profile Completion</span><span class="positive">+10</span>
        </div>
        <div class="bar-label-right">
          <span class="info">72/100</span>
        </div>
      </div>
      <div class="bar-level-1" style="width: 100%">
        <div class="bar-level-2" style="width: 80%">
          <div class="bar-level-3" style="width: 30%"></div>
        </div>
      </div>
    </div>
    <div class="os-progress-bar primary">
      <div class="bar-labels">
        <div class="bar-label-left">
          <span>Status Unlocked</span><span class="positive">+5</span>
        </div>
        <div class="bar-label-right">
          <span class="info">45/100</span>
        </div>
      </div>
      <div class="bar-level-1" style="width: 100%">
        <div class="bar-level-2" style="width: 30%">
          <div class="bar-level-3" style="width: 10%"></div>
        </div>
      </div>
    </div>
    <div class="os-progress-bar primary">
      <div class="bar-labels">
        <div class="bar-label-left">
          <span>Followers</span><span class="negative">-12</span>
        </div>
        <div class="bar-label-right">
          <span class="info">74/100</span>
        </div>
      </div>
      <div class="bar-level-1" style="width: 100%">
        <div class="bar-level-2" style="width: 80%">
          <div class="bar-level-3" style="width: 60%"></div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>
<div class="element-wrapper">
<div class="element-box">
<h6 class="element-header">
  User Activity
</h6>
<div class="timed-activities compact">
  <div class="timed-activity">
    <div class="ta-date">
      <span>21st Jan, 2017</span>
    </div>
    <div class="ta-record-w">
      <div class="ta-record">
        <div class="ta-timestamp">
          <strong>11:55</strong> am
        </div>
        <div class="ta-activity">
          Created a post called <a href="#">Register new symbol</a> in Rogue
        </div>
      </div>
      <div class="ta-record">
        <div class="ta-timestamp">
          <strong>2:34</strong> pm
        </div>
        <div class="ta-activity">
          Commented on story <a href="#">How to be a leader</a> in <a href="#">Financial</a> category
        </div>
      </div>
      <div class="ta-record">
        <div class="ta-timestamp">
          <strong>7:12</strong> pm
        </div>
        <div class="ta-activity">
          Added <a href="#">John Silver</a> as a friend
        </div>
      </div>
    </div>
  </div>
  <div class="timed-activity">
    <div class="ta-date">
      <span>3rd Feb, 2017</span>
    </div>
    <div class="ta-record-w">
      <div class="ta-record">
        <div class="ta-timestamp">
          <strong>9:32</strong> pm
        </div>
        <div class="ta-activity">
          Added <a href="#">John Silver</a> as a friend
        </div>
      </div>
      <div class="ta-record">
        <div class="ta-timestamp">
          <strong>5:14</strong> pm
        </div>
        <div class="ta-activity">
          Commented on story <a href="#">How to be a leader</a> in <a href="#">Financial</a> category
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>
</div>
<div class="col-sm-7">
<div class="element-wrapper">
<div class="element-box">
<form id="formValidate" novalidate="true">
  <div class="element-info">
    <div class="element-info-with-icon">
      <div class="element-info-icon">
        <div class="os-icon os-icon-wallet-loaded"></div>
      </div>
      <div class="element-info-text">
        <h5 class="element-inner-header">
          Profile Settings
        </h5>
        <div class="element-inner-desc">
          Validation of the form is made possible using powerful validator plugin for bootstrap. <a href="http://1000hz.github.io/bootstrap-validator/" target="_blank">Learn more about Bootstrap Validator</a>
        </div>
      </div>
    </div>
  </div>
  <div class="form-group">
    <label for="" style=""> Name : </label> {{ $employee->name}}
  </div>
  <div class="form-group">
    <label for="" style=""> Email : </label> {{ $employee->email}}
  </div>
  <div class="form-group">
    <label for="" style=""> Phone : </label> {{ $employee->phone}}
  </div>
  <div class="form-group">
    <label for="" style=""> Date Of Birth : </label> {{ $employee->dob}}
  </div>
  <div class="form-group">
    <label for="" style=""> Gender : </label> {{ $employee->gender}}
  </div>
  <div class="form-group">
    <label for="" style=""> Office Mail : </label> {{ $employee->officeEmail}}
  </div>
  <div class="form-group">
    <label for="" style=""> Employee Id : </label> {{ $employee->employeeId}}
  </div>

  <div class="form-group">
    <label for="" style=""> Bank Name : </label> {{ $employee->bankName}}
  </div>
  <div class="form-group">
    <label for="" style=""> Account Type : </label> {{ $employee->accountType}}
  </div>
  <div class="form-group">
    <label for="" style=""> Account Number : </label> {{ $employee->accountNumber}}
  </div>
  <div class="form-group">
    <label for="" style=""> Department : </label> {{ $employee->department}}
  </div>

  <div class="form-group">
    <label for="" style=""> Designation : </label> {{ $employee->designation}}
  </div>
  <div class="form-group">
    <label for="" style=""> Supervisor : </label> {{ $employee->supervisorId}}
  </div>
  <div class="form-group">
    <label for="" style=""> Salary : </label> {{ $employee->salary}}
  </div>
  <div class="form-group">
    <label for="" style=""> Medication : </label> {{ $employee->medication}}
  </div>
  <div class="form-group">
    <label for="" style=""> Annual Leaves : </label> {{ $employee->annualLeaves}}
  </div>
  <div class="form-group">
    <label for="" style=""> Casual Leaves : </label> {{ $employee->casualLeaves}}
  </div>
  <div class="form-group">
    <label for="" style=""> Medical Leaves : </label> {{ $employee->medicalLeaves}}
  </div>
  <div class="form-group">
    <label for="" style=""> Joining Date : </label> {{ $employee->joiningDate}}
  </div>
  <div class="form-group">
    <label for="" style=""> Present Addrss : </label> {{ $employee->presentAddrss}}
  </div>
  <div class="form-group">
    <label for="" style=""> Parmanent Address : </label> {{ $employee->parmanentAddress}}
  </div>
  <div class="form-group">
    <label for="" style=""> Emergency ContactName : </label> {{ $employee->emergencyContactName}}
  </div>
  <div class="form-group">
    <label for="" style=""> EmergencyContactRelation : </label> {{ $employee->emergencyContactRelation }}
  </div>
  <div class="form-group">
    <label for="" style=""> EmergencyContactAddress : </label> {{ $employee->emergencyContactAddress}}
  </div>
  <div class="form-group">
    <label for="" style=""> EmergencyContactphone : </label> {{ $employee->emergencyContactphone}}
  </div>


  
</form>
</div>
</div>
</div>
</div><!--------------------
      START - Color Scheme Toggler
      -------------------->

 
      
      <div class="floated-chat-w">
        <div class="floated-chat-i">
          <div class="chat-close">
            <i class="os-icon os-icon-close"></i>
          </div>
          <div class="chat-head">
            <div class="user-w with-status status-green">
              <div class="user-avatar-w">
                <div class="user-avatar">
                <img alt="" src="{{ URL::to('/') }}/img/employee/{{ $employee->image }}">
                </div>
              </div>
              <div class="user-name">
                <h6 class="user-title">
                  {{ $employee->name }}
                </h6>
                <div class="user-role">
                    {{ $employee->designation }}
                </div>
              </div>
            </div>
          </div>
          <div class="chat-messages ps ps--theme_default" data-ps-id="50b21e39-792b-3d3a-11ea-910e29670bf4">
            <div class="message">
              <div class="message-content">
                Hi, how can I help you?
              </div>
            </div>
            <div class="date-break">
              Mon 10:20am
            </div>
            <div class="message">
              <div class="message-content">
                Hi, my name is Mike, I will be happy to assist you
              </div>
            </div>
            <div class="message self">
              <div class="message-content">
                Hi, I tried ordering this product and it keeps showing me error code.
              </div>
            </div>
          <div class="ps__scrollbar-x-rail" style="left: 0px; bottom: 0px;"><div class="ps__scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__scrollbar-y-rail" style="top: 0px; right: 0px;"><div class="ps__scrollbar-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></div>
          <div class="chat-controls">
            <input class="message-input" placeholder="Type your message here..." type="text">
            <div class="chat-extra">
              <a href="#"><span class="extra-tooltip">Attach Document</span><i class="os-icon os-icon-documents-07"></i></a><a href="#"><span class="extra-tooltip">Insert Photo</span><i class="os-icon os-icon-others-29"></i></a><a href="#"><span class="extra-tooltip">Upload Video</span><i class="os-icon os-icon-ui-51"></i></a>
            </div>
          </div>
        </div>
      </div>
      <!--------------------
      END - Chat Popup Box
      -------------------->
    </div>
    <!--------------------
    START - Sidebar
    -------------------->
    <div class="content-panel">
      <div class="content-panel-close">
        <i class="os-icon os-icon-close"></i>
      </div>
      <!--------------------
      START - Support Agents
      -------------------->
      <div class="element-wrapper">
        <h6 class="element-header">
          Support Agents
        </h6>
        <div class="element-box-tp">
          <div class="profile-tile">
            <a class="profile-tile-box" href="users_profile_small.html">
              <div class="pt-avatar-w">
                <img alt="" src="{{url('storage/img/employee/'.$employee->image)}}">
              </div>
              <div class="pt-user-name">
                {{ $employee->name }}
              </div>
            </a>
            <div class="profile-tile-meta">
              <ul>
                <li>
                  Last Login:<strong>Online Now</strong>
                </li>
                <li>
                  Tickets:<strong><a href="apps_support_index.html">12</a></strong>
                </li>
                <li>
                  Response Time:<strong>2 hours</strong>
                </li>
              </ul>
              <div class="pt-btn">
                <a class="btn btn-success btn-sm" href="apps_full_chat.html">Send Message</a>
              </div>
            </div>
          </div>
          <div class="profile-tile">
            <a class="profile-tile-box" href="users_profile_small.html">
              <div class="pt-avatar-w">
                <img alt="" src="img/avatar3.jpg">
              </div>
              <div class="pt-user-name">
                Ben Gossman
              </div>
            </a>
            <div class="profile-tile-meta">
              <ul>
                <li>
                  Last Login:<strong>Offline</strong>
                </li>
                <li>
                  Tickets:<strong><a href="apps_support_index.html">9</a></strong>
                </li>
                <li>
                  Response Time:<strong>3 hours</strong>
                </li>
              </ul>
              <div class="pt-btn">
                <a class="btn btn-secondary btn-sm" href="apps_full_chat.html">Send Message</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--------------------
      END - Support Agents
      -------------------->
      
      <div class="element-wrapper">
        <h6 class="element-header">
          Team Members
        </h6>
        <div class="element-box-tp">
          <div class="input-search-w">
            <input class="form-control rounded bright" placeholder="Search team members..." type="search">
          </div>
          <div class="users-list-w">
            <div class="user-w with-status status-green">
              <div class="user-avatar-w">
                <div class="user-avatar">
                  <img alt="" src="img/avatar1.jpg">
                </div>
              </div>
              <div class="user-name">
                <h6 class="user-title">
                  John Mayers
                </h6>
                <div class="user-role">
                  Account Manager
                </div>
              </div>
              <div class="user-action">
                <div class="os-icon os-icon-email-forward"></div>
              </div>
            </div>
            <div class="user-w with-status status-green">
              <div class="user-avatar-w">
                <div class="user-avatar">
                  <img alt="" src="img/avatar2.jpg">
                </div>
              </div>
              <div class="user-name">
                <h6 class="user-title">
                  Ben Gossman
                </h6>
                <div class="user-role">
                  Administrator
                </div>
              </div>
              <div class="user-action">
                <div class="os-icon os-icon-email-forward"></div>
              </div>
            </div>
            <div class="user-w with-status status-red">
              <div class="user-avatar-w">
                <div class="user-avatar">
                  <img alt="" src="img/avatar3.jpg">
                </div>
              </div>
              <div class="user-name">
                <h6 class="user-title">
                  Phil Nokorin
                </h6>
                <div class="user-role">
                  HR Manger
                </div>
              </div>
              <div class="user-action">
                <div class="os-icon os-icon-email-forward"></div>
              </div>
            </div>
            <div class="user-w with-status status-green">
              <div class="user-avatar-w">
                <div class="user-avatar">
                  <img alt="" src="img/avatar4.jpg">
                </div>
              </div>
              <div class="user-name">
                <h6 class="user-title">
                  Jenny Miksa
                </h6>
                <div class="user-role">
                  Lead Developer
                </div>
              </div>
              <div class="user-action">
                <div class="os-icon os-icon-email-forward"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--------------------
    END - Sidebar
    -------------------->
  </div>
@endsection