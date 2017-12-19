
<!DOCTYPE html>
<html lang="en">
<head>
<title>Matrix Admin</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="{{asset('/public/css/bootstrap.min.css')}}" />
<link rel="stylesheet" href="{{asset('/public/css/bootstrap-responsive.min.css')}}"/>
<link rel="stylesheet" href="{{asset('/public/css/matrix-style.css')}}" />
<link rel="stylesheet" href="{{asset('/public/css/matrix-media.css')}}" />
<link href="{{asset('/public/font-awesome/css/font-awesome.css')}}" rel="stylesheet" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
</head>
<body>

<!--Header-part-->
<div id="header">
  <h1><a href="dashboard.html">Matrix Admin</a></h1>
</div>
<!--close-Header-part--> 

<!--top-Header-menu-->
<div id="user-nav" class="navbar navbar-inverse">
  <ul class="nav">
    <li  class="dropdown" id="profile-messages" ><a title="" href="#" data-toggle="dropdown" data-target="#profile-messages" class="dropdown-toggle"><i class="icon icon-user"></i>  <span class="text">Welcome User</span><b class="caret"></b></a>
      <ul class="dropdown-menu">
        <li><a href="#"><i class="icon-user"></i> My Profile</a></li>
        <li class="divider"></li>
        <li><a href="#"><i class="icon-check"></i> My Tasks</a></li>
        <li class="divider"></li>
        <li><a href="login.html"><i class="icon-key"></i> Log Out</a></li>
      </ul>
    </li>
    <li class="dropdown" id="menu-messages"><a href="#" data-toggle="dropdown" data-target="#menu-messages" class="dropdown-toggle"><i class="icon icon-envelope"></i> <span class="text">Messages</span> <span class="label label-important"></span> <b class="caret"></b></a>
      <ul class="dropdown-menu">
        <li><a class="sAdd" title="" href="#"><i class="icon-plus"></i> new message</a></li>
        <li class="divider"></li>
        <li><a class="sInbox" title="" href="#"><i class="icon-envelope"></i> inbox</a></li>
        <li class="divider"></li>
        <li><a class="sOutbox" title="" href="#"><i class="icon-arrow-up"></i> outbox</a></li>
        <li class="divider"></li>
        <li><a class="sTrash" title="" href="#"><i class="icon-trash"></i> trash</a></li>
      </ul>
    </li>
    <li class=""><a title="" href="#"><i class="icon icon-cog"></i> <span class="text">Settings</span></a></li>
    <li class=""><a title="" href="login.html"><i class="icon icon-share-alt"></i> <span class="text">Logout</span></a></li>
  </ul>
</div>

<!--start-top-serch-->
<div id="search">
  <input type="text" placeholder="Search here..."/>
  <button type="submit" class="tip-bottom" title="Search"><i class="icon-search icon-white"></i></button>
</div>
<!--close-top-serch--> 

<!--sidebar-menu-->

<div id="sidebar"> <a href="#" class="visible-phone"><i class="icon icon-list"></i>Forms</a>
  <ul>
    <li><a href="index.html"><i class="icon icon-home"></i> <span>Trang Chủ</span></a> </li>
    <li> <a href="http://lrv.vn/blog/dangky"><i class="icon icon-inbox"></i> <span>Đăng Ký </span> <span class="label label-important"></span></a></li>
     <li class=""> <a href="{{ asset('/chel')}}"><i class="icon icon-list"></i> <span>Quản Lý User </span> <span class="label label-important"></span></a></li>
      <li> <a href="http://lrv.vn/blog/text"><i class="icon icon-inbox"></i> <span>Thêm Bài Viết </span> <span class="label label-important"></span></a></li>
     <li> <a href="http://lrv.vn/blog/pro"><i class="icon icon-inbox"></i> <span>Quản Lý Bài Viết </span> <span class="label label-important"></span></a></li>
</div>
<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a>  <a href="#" class="current">Đăng Ký</a> </div>
    <h1>Đăng Ký User</h1>
  </div>
  <div class="container-fluid"><hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-pencil"></i> </span>
            <h5>Đăng Ký User</h5>
          </div>
          <div class="widget-content nopadding">
            <form id="form-wizard" class="form-horizontal" method="post" action="{{ route('register') }}">
                 {{ csrf_field() }}
              <div id="form-wizard-1" class="step">
                <div class="control-group">
                  <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                  <label class="control-label">Name</label>
                  <div class="controls">
                    <input id="username" type="text" name="name" />
                     @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                  </div>
                </div>
                <div class="control-group">
                  <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                  <label class="control-label">Password</label>
                  <div class="controls">
                    <input id="password" type="password" name="password" />
                      @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                  </div>
                </div>
                <div class="control-group">
                  <label class="control-label">Confirm Password</label>
                  <div class="controls">
                    <input id="password2" type="password" name="password_confirmation" />
                  </div>
                </div>
              </div>
              <div id="form-wizard-2" class="step">
                <div class="control-group">
                   <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                  <label class="control-label">Email</label>
                  <div class="controls">
                    <input id="email" type="text" name="email" />
                     @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                    </div>
                  </div>
                </div>
               
             <div class="form-actions">
                <input type="submit" value="Đăng Ký" class="btn btn-success">
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>


        <div class="row-fluid">
  <div id="footer" class="span12"> 2013 &copy; Matrix Admin. Brought to you by <a href="http://themedesigner.in">Themedesigner.in</a> </div>
</div>


</body>
</html>