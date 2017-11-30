<!doctype html>
<html>
<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keywords" content="">
    
    <title>Submit | Subshare</title>


    <!--CSS -->
    {{ Html::style('backend/css/font-awesome.min.css') }}
    {{ Html::style('backend/css/bootstrap.min.css') }}
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,500,600,700,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">

    <!-- Add custom CSS here -->
    {{ Html::style('backend/css/style.css') }}
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
    {{ Html::style('backend/css/dropzone.min.css') }}
</head>

<body>
    <header class="admin-header">
        <!--Container-->
        <div class="container-fluid">
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#"><img src="{{env('APP_URL') . '/backend/img/logo.png'}}"></a>
                    </div>
                    <div class="navigation-area">
                        <div id="navbar" class="navbar-collapse collapse">
                            <ul class="nav navbar-nav navbar-right">
                                <li class="search-bar">
                                    <form action="" class="widget-search">
                                        <input type="search" name="" placeholder="Search">
                                        <input type="submit" class="fa" value="&#xf002;">
                                    </form>
                                </li>
                                <li class="button-bar">
                                    <button type="button" class="btn btn-success"><span>Submit</span><img src="{{env('APP_URL') . '/backend/img/upload.png'}}"></button>
                                </li>
                            </ul>

                        </div><!--/.nav-collapse -->
                        <div class="top-nav-right">
                            <ul>
                                <li class="dropdown messages-menu">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <img src="{{env('APP_URL') . '/backend/img/notifications.png'}}">
                                        <span class="label label-success">4</span>
                                        <div class="down-arrow"><i class="fa fa-angle-down" aria-hidden="true"></i></div>
                                    </a>
                                    <div class="dropdown-menu drop-down-message" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="#"><i class="fa fa-user" aria-hidden="true"></i><div class="top-notification"><h5>Renov Leonga is now following you!</h5><span>June 20, 2015</span></div></a>
                                        <a class="dropdown-item" href="#"><i class="fa fa-user" aria-hidden="true"></i><div class="top-notification"><h5>Renov Leonga is now following you!</h5><span>June 18, 2015</span></div></a>
                                        <a class="dropdown-item" href="#"><i class="fa fa-thumbs-up" aria-hidden="true"></i><div class="top-notification"><h5>Zaham Sindil is now following you!</h5><span>June 16, 2015</span></div></a>
                                        <a class="dropdown-item" href="#"><i class="fa fa-user" aria-hidden="true"></i><div class="top-notification"><h5>Rey Reslaba is now following you!</h5> <span>June 16, 2015</span><p>HTML For Beginners Capter 1</p></div></a>
                                        <a class="dropdown-item" href="#"><i class="fa fa-comment" aria-hidden="true"></i><div class="top-notification"><h5>Socrates commented on your post</h5><span>June 16, 2015</span><p>Temporibus autem et officiis debittis..</p></div></a>
                                    </div>
                                </li>
                                <li class="dropdown notifications-menu">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                        <img src="{{env('APP_URL') . '/backend/img/message.png'}}">
                                        <span class="label label-success">23</span>
                                        <div class="down-arrow"><i class="fa fa-angle-down" aria-hidden="true"></i></div>
                                    </a>
                                    <div class="dropdown-menu drop-down-message" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="#"><i class="fa fa-envelope-o" aria-hidden="true"></i><div class="top-notification"><h5>Renov Leonga is now following you!</h5><span>June 20, 2015</span></div></a>
                                        <a class="dropdown-item" href="#"><i class="fa fa-envelope-o" aria-hidden="true"></i><div class="top-notification"><h5>Renov Leonga is now following you!</h5><span>June 18, 2015</span></div></a>
                                        <a class="dropdown-item" href="#"><i class="fa fa-envelope-o" aria-hidden="true"></i><div class="top-notification"><h5>Zaham Sindil is now following you!</h5><span>June 16, 2015</span></div></a>
                                        <a class="dropdown-item" href="#"><i class="fa fa-envelope-o" aria-hidden="true"></i><div class="top-notification"><h5>Rey Reslaba is now following you!</h5> <span>June 16, 2015</span><p>HTML For Beginners Capter 1</p></div></a>
                                        <a class="dropdown-item" href="#"><i class="fa fa-envelope-o" aria-hidden="true"></i><div class="top-notification"><h5>Socrates commented on your post</h5><span>June 16, 2015</span><p>Temporibus autem et officiis debittis..</p></div></a>
                                    </div>
                                </li>
                                <li class="dropdown calender-menu">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                        <img src="{{env('APP_URL') . '/backend/img/calendar.png'}}">
                                        <span class="label label-success">17</span>
                                        <div class="down-arrow"><i class="fa fa-angle-down" aria-hidden="true"></i></div>

                                    </a>
                                    <div class="dropdown-menu drop-down-message" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="#"><i class="fa fa-user" aria-hidden="true"></i><div class="top-notification"><h5>Renov Leonga is now following you!</h5><span>June 20, 2015</span></div></a>
                                        <a class="dropdown-item" href="#"><i class="fa fa-user" aria-hidden="true"></i><div class="top-notification"><h5>Renov Leonga is now following you!</h5><span>June 18, 2015</span></div></a>
                                        <a class="dropdown-item" href="#"><i class="fa fa-thumbs-up" aria-hidden="true"></i><div class="top-notification"><h5>Zaham Sindil is now following you!</h5><span>June 16, 2015</span></div></a>
                                        <a class="dropdown-item" href="#"><i class="fa fa-user" aria-hidden="true"></i><div class="top-notification"><h5>Rey Reslaba is now following you!</h5> <span>June 16, 2015</span><p>HTML For Beginners Capter 1</p></div></a>
                                        <a class="dropdown-item" href="#"><i class="fa fa-comment" aria-hidden="true"></i><div class="top-notification"><h5>Socrates commented on your post</h5><span>June 16, 2015</span><p>Temporibus autem et officiis debittis..</p></div></a>
                                    </div>
                                </li>
                                <li class="dropdown user user-menu">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                        <img src="{{env('APP_URL') . '/backend/img/avatar.png'}}" width="35" class="img-circle img-responsive pull-left" height="35" alt="riot">
                                        <div class="riot">
                                            <div>
                                                <span class="dropdown profile-top-menu">
                                                 <i class="fa fa-angle-down" aria-hidden="true"></i>
                                             </span>
                                             <div class="dropdown-menu drop-down-message" aria-labelledby="dropdownMenuButton">
                                                <a class="dropdown-item" href="profile.html"><i class="fa fa-user" aria-hidden="true"></i><div class="profile-nav-area"><h5>My Profile</h5></div></a>
                                                <a class="dropdown-item" href="edit-profile.html"><i class="fa fa-cog" aria-hidden="true"></i><div class="profile-nav-area"><h5>Account Settings</h5></div></a>
                                                <a class="dropdown-item" href="#"><i class="fa fa-question-circle" aria-hidden="true"></i><div class="profile-nav-area"><h5>Help</h5></div></a>
                                                <a class="dropdown-item" href="../login.html"><i class="fa fa-sign-out" aria-hidden="true"></i><div class="profile-nav-area"><h5>Log Out</h5></div></a>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div><!--/.container-fluid -->
        </nav>
        <!--nav ends-->
    </div>
    <!--Container Ends-->
</header>
<section class="wrapper row-offcanvas row-offcanvas-left">
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="left-side sidebar-offcanvas" data-spy="affix" data-offset-top="197">
        <section class="sidebar ">
            <div class="page-sidebar  sidebar-nav">
                <div class="clearfix"></div>
                <!-- BEGIN SIDEBAR MENU -->
                <ul id="menu" class="page-sidebar-menu">
                    <li>
                        <a href="user-dashboard.html">
                            <img src="{{env('APP_URL') . '/backend/img/home.png'}}">
                            <span class="title">Home</span>
                        </a>
                    </li>
                    <li>
                        <a href="subshare.html">
                            <img src="{{env('APP_URL') . '/backend/img/subshare.png'}}">
                            <span class="title">Subshares</span>
                        </a>
                    </li>
                    <li>
                        <a href="user.html">
                            <img src="{{env('APP_URL') . '/backend/img/user.png'}}">
                            <span class="title">Users</span>
                        </a>
                    </li>
                    <li  class="active">
                        <a href="#">
                            <img src="{{env('APP_URL') . '/backend/img/green-submit.png'}}">
                            <span class="title">Submit</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="{{env('APP_URL') . '/backend/img/search.png'}}">
                            <span class="title">Search</span>
                        </a>
                    </li>
                    <li>
                        <a href="profile.html">
                            <img src="{{env('APP_URL') . '/backend/img/browse.png'}}">
                            <span class="title">Browse</span>
                        </a>
                    </li>
                </ul>
                <ul id="menu" class="page-sidebar-menu">
                    <li>
                        <a href="#">
                            <img src="{{env('APP_URL') . '/backend/img/ripple.png'}}">
                            <span class="title">Ripple</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="{{env('APP_URL') . '/backend/img/neptune.png'}}">
                            <span class="title">Neptune</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="{{env('APP_URL') . '/backend/img/music.png'}}">
                            <span class="title">Your Music</span>
                        </a>
                    </li>
                    <li>
                        <a href="edit-profile.html">
                            <img src="{{env('APP_URL') . '/backend/img/grey-setting.png'}}">
                            <span class="title">Settings</span>
                        </a>
                    </li>
                </ul>
                <!-- END SIDEBAR MENU -->
            </div>
        </section>
        <!-- /.sidebar -->
    </aside>
    <!-- Right side column. Contains the navbar and content of the page -->
    <aside class="right-side">
        <ol class="breadcrumb">
            <li><a href="#">Breadcrumb item 1</a></li>
            <li class="active"><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Breadcrumb item 2</a></li>
        </ol>
        <section class="submit-content" id="invoice-page">
            <div class="row">
                <div class="col-lg-12 top-right-content" id="dropzone_div">
                  <div id="dropzone">
                    {!! Form::open(array('action' => 'SongsController@uploadFile', 'class' => 'dropzone needsclick', 'id' => 'demo-upload', 'method'=> 'post', 'enctype' => 'multipart/form-data' )) !!}
                     <div class="inner-submit-content">
                        <div class="top-submit-nav">
                            <a href="#step-1" type="button" class="btn btn-primary-nav btn-circle-nav">1</a>
                            <p>Upload file</p>
                        </div>
                        <div class="submit-top-area">
                             <!-- dz-message -->
                           <div class=" dz-default">
                               <span class="input-group-btn">
                                {{ Form::file('file') }}
                                <button class="upload-btn btn btn-primary input-lg" type="button"><img src="{{env('APP_URL') . '/backend/img/up-img.png'}}" class="img-responsive"></button>
                            </span>
                            <h4 class="upload_btn">Upload File</h4>
                            <div class="dz-progress"><span class="dz-upload" data-dz-uploadprogress></span></div>
                        </div>
                        <button type="btn" class="pro-sub-btn ">Submit & Proceed</button>
                        <p>Uploading MyestryDream_New.wav</p>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:45%">
                            </div>
                        </div>
                    </div>
                </div>
            {!! Form::close() !!}
        </div>
        <form action="#">
            <div class="inner-submit-content">
             <div class="second-submit-area">
                 <div class="top-submit-nav">
                     <a href="#step-2" type="button" class="btn btn-primary-nav btn-circle-nav">2</a>
                     <p>Track details</p>
                 </div>
                 <div class="form-group row">
                     <div class="col-md-6">
                         <label>Track Title<a href="#" class="sub-tip" data-toggle="tooltip" title="The offical name of the track"><i class="fa fa-question-circle" aria-hidden="true"></i></a></label>
                         <input type="text" class="form-control" id="usr">
                     </div>
                     <div class="col-md-6">
                         <label>BPM<a href="#" class="sub-tip" data-toggle="tooltip" title="The offical name of the track"><i class="fa fa-question-circle" aria-hidden="true"></i></a></label>
                         <input type="text" class="form-control" id="bpmr">
                     </div>
                     <div class="col-md-6">
                         <label>Genre<a href="#" class="sub-tip" data-toggle="tooltip" title="The offical name of the track"><i class="fa fa-question-circle" aria-hidden="true"></i></a></label>
                         <input type="text-area" class="form-control" id="usr">
                     </div>
                     <div class="col-md-6">
                         <label>Track age<a href="#" class="sub-tip" data-toggle="tooltip" title="The offical name of the track"><i class="fa fa-question-circle" aria-hidden="true"></i></a></label>
                         <input type="text-area" class="form-control" id="usr">
                     </div>
                 </div>
                 <div class="range-area"><label class="fulllenght-label">Percent complete<a href="#" class="sub-tip" data-toggle="tooltip" title="The offical name of the track"><i class="fa fa-question-circle" aria-hidden="true"></i></a></label><img src="img/percentage-range.png" class="img-responsive"></div>
                 <div class="form-group">
                     <label class="fulllenght-label">Track inspiration<a href="#" class="sub-tip" data-toggle="tooltip" title="The offical name of the track"><i class="fa fa-question-circle" aria-hidden="true"></i></a></label>
                     <textarea class="form-control" rows="5" id="comment"></textarea>
                 </div>
                 <button type="btn" class="pro-sub-btn">Submit & Proceed</button>
             </div>
             <div class="third-submit-area">
                 <div class="top-submit-nav">
                     <a href="#step-3" type="button" class="btn btn-primary-nav btn-circle-nav">3</a>
                     <p>Tagging</p>
                 </div>

                 <div class="bottom-range-area">

                     <img src="{{env('APP_URL') . '/backend/img/bottom-range.png'}}" class="img-responsive">
                     <a href="#" class="new-tag"><i class="fa fa-plus" aria-hidden="true"></i><span>Add tag</span></a>
                 </div>
                 <div class="form-group row">
                     <div class="col-md-6">
                         <label class="red-tag-label">Tag 1<a href="#" class="sub-tip" data-toggle="tooltip" title="The offical name of the track"><i class="fa fa-question-circle" aria-hidden="true"></i></a></label>
                         <input type="text" class="form-control" id="usr" placeholder="Bass">
                     </div>
                     <div class="col-md-6">
                         <label class="green-tag-label">Tag 2<a href="#" class="sub-tip" data-toggle="tooltip" title="The offical name of the track"><i class="fa fa-question-circle" aria-hidden="true"></i></a></label>
                         <input type="text" class="form-control" id="bpmr" placeholder="Need help with this intro">
                     </div>
                 </div>
                 <button type="btn" class="pro-sub-btn">Submit & Proceed</button>

             </div>
         </div>
     </form>
 </div>
</div>
</section>
</aside>
<!-- right-side -->
</section>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>{!! Html::script('backend/js/bootstrap.min.js') !!}
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
{!! Html::script('backend/js/dropzone.js') !!}
</body>
<script>
    jQuery(document).ready(function($){
        $('[data-toggle="tooltip"]').tooltip();
    });
</script>
<script type="text/javascript">
    alert('df')

    $(document).ready(function () {

        //    Dropzone

        // alert('f');
        // Dropzone.autoDiscover = false;
        // var dropzone = new Dropzone('#dropzone', {
        //     parallelUploads: 2,
        //     thumbnailHeight: 120,
        //     thumbnailWidth: 120,
        //     maxFilesize: 3,
        //     filesizeBase: 1000,
        //     addRemoveLinks: true,
        //     removedfile: function (file) {
        //         var _ref;
        //         return (_ref = file.previewElement) != null ? _ref.parentNode.removeChild(file.previewElement) : void 0;
        //     },
        //     thumbnail: function (file, dataUrl) {
        //         if (file.previewElement) {
        //             file.previewElement.classList.remove("dz-file-preview");
        //             var images = file.previewElement.querySelectorAll("[data-dz-thumbnail]");
        //             for (var i = 0; i < images.length; i++) {
        //                 var thumbnailElement = images[i];
        //                 thumbnailElement.alt = file.name;
        //                 thumbnailElement.src = dataUrl;
        //             }
        //             setTimeout(function () {
        //                 file.previewElement.classList.add("dz-image-preview");
        //             }, 1);
        //         }
        //     }

        // });


        // Now fake the file upload, since GitHub does not handle file uploads
        // and returns a 404

        // var minSteps = 6,
        // maxSteps = 60,
        // timeBetweenSteps = 100,
        // bytesPerStep = 100000;

        // dropzone.uploadFiles = function (files) {
        //     var self = this;

        //     for (var i = 0; i < files.length; i++) {

        //         var file = files[i];
        //         totalSteps = Math.round(Math.min(maxSteps, Math.max(minSteps, file.size / bytesPerStep)));

        //         for (var step = 0; step < totalSteps; step++) {
        //             var duration = timeBetweenSteps * (step + 1);
        //             setTimeout(function (file, totalSteps, step) {
        //                 return function () {
        //                     file.upload = {
        //                         progress: 100 * (step + 1) / totalSteps,
        //                         total: file.size,
        //                         bytesSent: (step + 1) * file.size / totalSteps
        //                     };

        //                     self.emit('uploadprogress', file, file.upload.progress, file.upload.bytesSent);
        //                     if (file.upload.progress == 100) {
        //                         file.status = Dropzone.SUCCESS;
        //                         self.emit("success", file, 'success', null);
        //                         self.emit("complete", file);
        //                         self.processQueue();
        //                     }
        //                 };
        //             }(file, totalSteps, step), duration);
        //         }
        //     }
        // };

        $("#demo-upload").submit(function(e){
            alert('f');
            var url = 'songs/file_upload';
            $.ajax({
                type: "post",
                url : url
                data: ("#demo-upload").serialize();
                success: function($data) {
                    alert(data);
                }
            });
            e.preventDefault();
        });

    });

</script>
</html>
