@extends('layouts.wladmin')

@section('title', 'Settings')

@section('content')
    <!-- Layout styles -->
    <link rel="stylesheet" href="../global/assets/css/style-admin.css" />
    <link rel="stylesheet" href="../global/assets/css/bootstrap.css" />
    <link rel="stylesheet" href="../global/assets/fonts/mas-solution/styles.css" />
    <link rel="stylesheet" href="../global/assets/vendors/css/vendor.bundle.base.css">

    <!-- css for this page -->
    <!--select 2 form-->
    <link rel="stylesheet" href="../global/assets/vendors/select2/select2.min.css" />
    <link rel="stylesheet" href="../global/assets/vendors/select2-bootstrap-theme/select2-bootstrap.min.css" />
    <!--date range picker-->
    <link rel="stylesheet" type="text/css" href="../global/assets/vendors/date-picker/daterangepicker.css" />

    <link rel="shortcut icon" href="../global/assets/images/favicon.png" />

    <div class="main-panel">
        <div class="content-wrapper pb-0">
            <div class="page-header">
                <h3>Settings</h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">Settings</li>
                    </ol>
                </nav>
            </div>
            <!-- first row starts here -->
            <div class="row">
                <div class="col-xl-12 stretch-card grid-margin">
                    <div class="card">
                        <div class="card-body">
                            <div class="accordion-content clearfix">
                                <div class="col-lg-3 col-md-4">
                                    <div class="accordion-box">
                                        <div class="panel-group" id="RoleTabs">
                                            <div class="panel panel-default">
                                                <div id="role_information" class="panel-collapse collapse in">
                                                    <div class="panel-body">
                                                        <ul class="accordion-tab nav nav-tabs">
                                                            <li class="active">
                                                                <a href="#general" data-toggle="tab">General
                                                                    Settings</a>
                                                            </li>
                                                            <li>
                                                                <a href="#social-media" data-toggle="tab"
                                                                    aria-expanded="true">Social Media Links</a>
                                                            </li>
                                                            <li>
                                                                <a href="#mail" data-toggle="tab"
                                                                    aria-expanded="true">Mail Settings</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-9 col-md-8">
                                    <div class="accordion-box-content">
                                        <div class="tab-content clearfix">
                                            <div class="tab-pane fade in active" id="general">
                                                <h3 class="tab-content-title">General</h3>
                                                <form class="was-validated pb-3" action="" method="post">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label>OEM Company Name*</label>
                                                                <input type="text" class="form-control"
                                                                    value="Halma India" disabled>
                                                            </div> <!-- /.form-group -->
                                                        </div> <!-- /.col -->
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label>Upload Company Logo</label>
                                                                <input type="file" class="form-control">
                                                            </div> <!-- /.form-group -->
                                                        </div> <!-- /.col -->
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label>Support Phone</label>
                                                                <input type="text" class="form-control">
                                                            </div> <!-- /.form-group -->
                                                        </div> <!-- /.col -->
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label>Support Mobile</label>
                                                                <input type="text" class="form-control"
                                                                    value="7785412588">
                                                            </div> <!-- /.form-group -->
                                                        </div> <!-- /.col -->
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label>Support Mail ID*</label>
                                                                <input type="text" class="form-control"
                                                                    value="support@massolutions.co.uk">
                                                            </div> <!-- /.form-group -->
                                                        </div> <!-- /.col -->
                                                    </div> <!-- /.row -->
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label class="full-width">Header Color</label>
                                                                <input class="p-1 border-1 form-control" type="color"
                                                                    id="colorpicker" value="#e9593e">
                                                            </div> <!-- /.form-group -->
                                                        </div> <!-- /.col -->
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label class="full-width">Menu Hover
                                                                    Color</label>
                                                                <input class="p-1 form-control" type="color"
                                                                    id="colorpicker1" value="#e9593e">
                                                            </div> <!-- /.form-group -->
                                                        </div> <!-- /.col -->
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label class="full-width">Only Icon Menu
                                                                    Background Color</label>
                                                                <input class="p-1 form-control" type="color"
                                                                    id="colorpicker1" value="#e9593e">
                                                            </div> <!-- /.form-group -->
                                                        </div> <!-- /.col -->
                                                    </div><!-- /.row -->
                                                </form>
                                                <!--buttons start-->
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <button type="button"
                                                            class="btn btn-default text-uppercase mt-4">
                                                            Clear
                                                        </button>
                                                    </div>
                                                    <div class="col-md-6 d-flex justify-content-end">
                                                        <button type="button"
                                                            class="btn btn-success text-uppercase mt-4 mr-2">
                                                            Save
                                                        </button>
                                                    </div>
                                                </div>
                                                <!--/.buttons end-->
                                            </div>
                                            <!--social media form start-->
                                            <div class="tab-pane fade" id="social-media">
                                                <h3 class="tab-content-title">Social Media Links</h3>
                                                <form class="was-validated pb-3" action="" method="post">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>Facebook</label>
                                                                <input type="text" class="form-control"
                                                                    required="">
                                                            </div> <!-- /.form-group -->
                                                        </div> <!-- /.col -->
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>Twitter</label>
                                                                <input type="text" class="form-control"
                                                                    required="">
                                                            </div> <!-- /.form-group -->
                                                        </div> <!-- /.col -->
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>Instagram</label>
                                                                <input type="text" class="form-control"
                                                                    required="">
                                                            </div> <!-- /.form-group -->
                                                        </div> <!-- /.col -->
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>Linkedin</label>
                                                                <input type="text" class="form-control"
                                                                    required="">
                                                            </div> <!-- /.form-group -->
                                                        </div> <!-- /.col -->
                                                    </div>
                                                </form>
                                                <!--buttons start-->
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <button type="button"
                                                            class="btn btn-default text-uppercase mt-4">
                                                            Clear
                                                        </button>
                                                    </div>
                                                    <div class="col-md-6 d-flex justify-content-end">
                                                        <button type="button"
                                                            class="btn btn-success text-uppercase mt-4 mr-2">
                                                            Save
                                                        </button>
                                                        <button type="button"
                                                            class="btn btn-success text-uppercase mt-4">
                                                            Save & Exit
                                                        </button>
                                                    </div>
                                                </div>
                                                <!--/.buttons end-->
                                            </div>
                                            <!--mails form start-->
                                            <div class="tab-pane fade" id="mail">
                                                <h3 class="tab-content-title">Send Mail Settings</h3>
                                                <div class="accordion" id="accordionExample">
                                                    <div id="add-option" class="accordion-item" style="display: none;">
                                                        <h2 class="accordion-header" id="headingFour">
                                                            <button class="accordion-button" type="button"
                                                                data-bs-toggle="collapse" data-bs-target="#collapseFour"
                                                                aria-expanded="true" aria-controls="collapseFour">
                                                                <span class="drag-icon pull-left">
                                                                    <i class="mas-arrow-move"></i>
                                                                </span>
                                                                New Option
                                                            </button>
                                                        </h2>
                                                        <div id="collapseFour" class="accordion-collapse collapse show"
                                                            aria-labelledby="headingFour"
                                                            data-bs-parent="#accordionExample">
                                                            <div class="accordion-body">
                                                                <div class="new-option clearfix">
                                                                    <form class="was-validated pb-3" action=""
                                                                        method="post">
                                                                        <div class="row">
                                                                            <div class="col-lg-4 col-md-12">
                                                                                <div class="form-group">
                                                                                    <label>Title</label>
                                                                                    <input type="text"
                                                                                        class="form-control" required />
                                                                                </div>
                                                                            </div>
                                                                            <!--/.col-->

                                                                            <div class="col-lg-4 col-md-12">
                                                                                <div class="form-group">
                                                                                    <label>Select Type</label>
                                                                                    <select class="js-example-basic-single"
                                                                                        style="width: 100%;" required>
                                                                                        <option label="Please Select"
                                                                                            value="">--
                                                                                            Select --</option>
                                                                                        <option value="FI">
                                                                                            Field</option>
                                                                                        <option value="TA">
                                                                                            Text Area</option>
                                                                                        <option value="DR">
                                                                                            Dropdown</option>
                                                                                    </select>
                                                                                </div> <!-- /.form-group -->
                                                                            </div>
                                                                            <!--/.col-->

                                                                            <div class="col-lg-4 col-md-12">
                                                                                <div class="checkbox">
                                                                                    <input type="checkbox"
                                                                                        class="form-check-input">
                                                                                    <i class="input-helper"></i>
                                                                                    <label>Required</label>
                                                                                </div>
                                                                                <!--/.check box-->

                                                                                <button type="button"
                                                                                    class="btn delete-option pull-right deleteDep"
                                                                                    title="Delete Option">
                                                                                    <i class="mas-trash"></i>
                                                                                </button>
                                                                                <!--/.delete icon-->
                                                                            </div>
                                                                            <!--/.col-->
                                                                        </div>
                                                                        <!--/.row-->
                                                                    </form>
                                                                </div>
                                                                <!--new option-->
                                                            </div>
                                                            <!--accordion body-->
                                                        </div>
                                                        <!--/.collapse FOUR-->
                                                    </div>
                                                    <!--/.display none new option-->


                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header" id="headingOne">
                                                            <button class="accordion-button" type="button"
                                                                data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                                                aria-expanded="true" aria-controls="collapseOne">
                                                                <span class="drag-icon pull-left">
                                                                    <i class="mas-arrow-move"></i>
                                                                </span>
                                                                Open / Update Ticket
                                                            </button>
                                                        </h2>
                                                        <div id="collapseOne" class="accordion-collapse collapse show"
                                                            aria-labelledby="headingOne"
                                                            data-bs-parent="#accordionExample">
                                                            <div class="accordion-body">
                                                                <div class="new-option clearfix">
                                                                    <form class="was-validated pb-3" action=""
                                                                        method="post">
                                                                        <div class="row">
                                                                            <div class="col-12">
                                                                                <textarea id="editor1" name="editor1" rows="800" cols="80">
                                                                                <p>
                                                                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                                                                </p>
                                                                            </textarea>
                                                                            </div>
                                                                            <div class="col-lg-6 col-md-12">
                                                                                <div class="checkbox">
                                                                                    <input type="checkbox"
                                                                                        class="form-check-input">
                                                                                    <i class="input-helper"></i>
                                                                                    <label>Send Mail to
                                                                                        Customer</label>
                                                                                </div>
                                                                                <!--/.check box-->
                                                                            </div>
                                                                            <!--/.col-->
                                                                            <div class="col-lg-6 col-md-12">
                                                                                <div class="checkbox">
                                                                                    <input type="checkbox"
                                                                                        class="form-check-input">
                                                                                    <i class="input-helper"></i>
                                                                                    <label>Send Mail to Level -
                                                                                        2 Executive</label>
                                                                                </div>
                                                                                <!--/.check box-->
                                                                            </div>
                                                                            <!--/.col-->
                                                                            <div class="col-lg-6 col-md-12">
                                                                                <div class="checkbox">
                                                                                    <input type="checkbox"
                                                                                        class="form-check-input">
                                                                                    <i class="input-helper"></i>
                                                                                    <label>Send Whatsapp Message
                                                                                        to Customer</label>
                                                                                </div>
                                                                                <!--/.check box-->
                                                                            </div>
                                                                            <!--/.col-->
                                                                            <div class="col-lg-6 col-md-12">
                                                                                <div class="checkbox">
                                                                                    <input type="checkbox"
                                                                                        class="form-check-input">
                                                                                    <i class="input-helper"></i>
                                                                                    <label>Send Whatsapp Message
                                                                                        to Level - 2
                                                                                        Executive</label>
                                                                                </div>
                                                                                <!--/.check box-->
                                                                            </div>
                                                                            <!--/.col-->
                                                                            <div class="col-lg-6 col-md-12">
                                                                                <div class="checkbox">
                                                                                    <input type="checkbox"
                                                                                        class="form-check-input">
                                                                                    <i class="input-helper"></i>
                                                                                    <label>Send Mail to User
                                                                                        Company</label>
                                                                                </div>
                                                                                <!--/.check box-->
                                                                            </div>
                                                                            <!--/.col-->
                                                                        </div>
                                                                        <!--/.row-->
                                                                    </form>
                                                                </div>
                                                                <!--new option-->
                                                            </div>
                                                            <!--accordion body-->
                                                        </div>
                                                        <!--/.collapse ONE-->
                                                    </div>
                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header" id="headingTwo">
                                                            <button class="accordion-button collapsed" type="button"
                                                                data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                                                aria-expanded="false" aria-controls="collapseTwo">
                                                                <span class="drag-icon pull-left">
                                                                    <i class="mas-arrow-move"></i>
                                                                </span>
                                                                Close Ticket
                                                            </button>
                                                        </h2>
                                                        <div id="collapseTwo" class="accordion-collapse collapse"
                                                            aria-labelledby="headingTwo"
                                                            data-bs-parent="#accordionExample">
                                                            <div class="accordion-body">
                                                                <div class="new-option clearfix">
                                                                    <form class="was-validated pb-3" action=""
                                                                        method="post">
                                                                        <div class="row">
                                                                            <div class="col-12">
                                                                                <textarea id="editor2" name="editor2" rows="800" cols="80">
                                                                                <p>
                                                                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                                                                </p>
                                                                            </textarea>
                                                                            </div>
                                                                            <div class="col-lg-6 col-md-12">
                                                                                <div class="checkbox">
                                                                                    <input type="checkbox"
                                                                                        class="form-check-input">
                                                                                    <i class="input-helper"></i>
                                                                                    <label>Send Mail to
                                                                                        Customer</label>
                                                                                </div>
                                                                                <!--/.check box-->
                                                                            </div>
                                                                            <!--/.col-->
                                                                            <div class="col-lg-6 col-md-12">
                                                                                <div class="checkbox">
                                                                                    <input type="checkbox"
                                                                                        class="form-check-input">
                                                                                    <i class="input-helper"></i>
                                                                                    <label>Send Mail to Level -
                                                                                        2 Executive</label>
                                                                                </div>
                                                                                <!--/.check box-->
                                                                            </div>
                                                                            <!--/.col-->
                                                                            <div class="col-lg-6 col-md-12">
                                                                                <div class="checkbox">
                                                                                    <input type="checkbox"
                                                                                        class="form-check-input">
                                                                                    <i class="input-helper"></i>
                                                                                    <label>Send Whatsapp Message
                                                                                        to Customer</label>
                                                                                </div>
                                                                                <!--/.check box-->
                                                                            </div>
                                                                            <!--/.col-->
                                                                            <div class="col-lg-6 col-md-12">
                                                                                <div class="checkbox">
                                                                                    <input type="checkbox"
                                                                                        class="form-check-input">
                                                                                    <i class="input-helper"></i>
                                                                                    <label>Send Whatsapp Message
                                                                                        to Level - 2
                                                                                        Executive</label>
                                                                                </div>
                                                                                <!--/.check box-->
                                                                            </div>
                                                                            <!--/.col-->
                                                                            <div class="col-lg-6 col-md-12">
                                                                                <div class="checkbox">
                                                                                    <input type="checkbox"
                                                                                        class="form-check-input">
                                                                                    <i class="input-helper"></i>
                                                                                    <label>Send Mail to User
                                                                                        Company</label>
                                                                                </div>
                                                                                <!--/.check box-->
                                                                            </div>
                                                                            <!--/.col-->
                                                                        </div>
                                                                        <!--/.row-->
                                                                    </form>
                                                                </div>
                                                                <!--new option-->
                                                            </div>
                                                            <!--/.accordion body-->
                                                        </div>
                                                        <!--/.collapse TWO-->
                                                    </div>
                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header" id="headingThree">
                                                            <button class="accordion-button collapsed" type="button"
                                                                data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                                                aria-expanded="false" aria-controls="collapseThree">
                                                                <span class="drag-icon pull-left">
                                                                    <i class="mas-arrow-move"></i>
                                                                </span>
                                                                Auto Closed Tickets
                                                            </button>
                                                        </h2>
                                                        <div id="collapseThree" class="accordion-collapse collapse"
                                                            aria-labelledby="headingThree"
                                                            data-bs-parent="#accordionExample">
                                                            <div class="accordion-body">
                                                                <div class="new-option clearfix">
                                                                    <form class="was-validated pb-3" action=""
                                                                        method="post">
                                                                        <div class="row">
                                                                            <div class="col-12">
                                                                                <textarea id="editor3" name="editor3" rows="800" cols="80">
                                                                                <p>
                                                                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                                                                </p>
                                                                            </textarea>
                                                                            </div>
                                                                            <div class="col-lg-6 col-md-12">
                                                                                <div class="checkbox">
                                                                                    <input type="checkbox"
                                                                                        class="form-check-input">
                                                                                    <i class="input-helper"></i>
                                                                                    <label>Send Mail to
                                                                                        Customer</label>
                                                                                </div>
                                                                                <!--/.check box-->
                                                                            </div>
                                                                            <!--/.col-->
                                                                            <div class="col-lg-6 col-md-12">
                                                                                <div class="checkbox">
                                                                                    <input type="checkbox"
                                                                                        class="form-check-input">
                                                                                    <i class="input-helper"></i>
                                                                                    <label>Send Mail to Level -
                                                                                        2 Executive</label>
                                                                                </div>
                                                                                <!--/.check box-->
                                                                            </div>
                                                                            <!--/.col-->
                                                                            <div class="col-lg-6 col-md-12">
                                                                                <div class="checkbox">
                                                                                    <input type="checkbox"
                                                                                        class="form-check-input">
                                                                                    <i class="input-helper"></i>
                                                                                    <label>Send Whatsapp Message
                                                                                        to Customer</label>
                                                                                </div>
                                                                                <!--/.check box-->
                                                                            </div>
                                                                            <!--/.col-->
                                                                            <div class="col-lg-6 col-md-12">
                                                                                <div class="checkbox">
                                                                                    <input type="checkbox"
                                                                                        class="form-check-input">
                                                                                    <i class="input-helper"></i>
                                                                                    <label>Send Whatsapp Message
                                                                                        to Level - 2
                                                                                        Executive</label>
                                                                                </div>
                                                                                <!--/.check box-->
                                                                            </div>
                                                                            <!--/.col-->
                                                                            <div class="col-lg-6 col-md-12">
                                                                                <div class="checkbox">
                                                                                    <input type="checkbox"
                                                                                        class="form-check-input">
                                                                                    <i class="input-helper"></i>
                                                                                    <label>Send Mail to User
                                                                                        Company</label>
                                                                                </div>
                                                                                <!--/.check box-->
                                                                            </div>
                                                                            <!--/.col-->
                                                                        </div>
                                                                        <!--/.row-->
                                                                    </form>
                                                                </div>
                                                                <!--new option-->
                                                            </div>
                                                        </div>
                                                        <!--/.collapse THREE-->
                                                    </div>
                                                </div>
                                                <!--buttons start-->
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <button type="button"
                                                            class="btn btn-default text-uppercase mt-4">
                                                            Clear
                                                        </button>
                                                    </div>
                                                    <div class="col-md-6 d-flex justify-content-end">
                                                        <button type="button"
                                                            class="btn btn-success text-uppercase mt-4 mr-2">
                                                            Save
                                                        </button>
                                                        <button type="button"
                                                            class="btn btn-success text-uppercase mt-4">
                                                            Save & Exit
                                                        </button>
                                                    </div>
                                                </div>
                                                <!--/.buttons end-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--card body end-->
                    </div>
                    <!--card end-->
                </div>
            </div>
            <!--row-->

            <!--notify messages-->

            <!--END notify messages-->

        </div>
        <!-- content-wrapper ends -->
        <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
                <span class="text-muted text-center d-block d-sm-inline-block">Copyright © 2022 Mas Solutions.
                    All rights reserved.</span>
                <span class="float-none text-black-50 d-block mt-1 mt-sm-0 text-center">Developed by <a href="#">
                        Excellent Computers </a> </span>
            </div>
        </footer>
        <!--/. footer ends-->
    </div>
    <!-- main-panel ends -->
@endsection
<!-- plugins:js -->
<script src="../global/assets/vendors/js/vendor.bundle.base.js"></script>
<script src="../global/assets/js/jquery.cookie.js" type="text/javascript"></script>
<script src="../global/assets/js/settings.js"></script>
<script src="../global/assets/js/custom.js"></script>
<script src="../global/assets/js/off-canvas.js"></script>
<script src="../global/assets/js/hoverable-collapse.js"></script>

<!-- Plugin js for this page -->
<script src="../global/assets/vendors/bootstrap-table/js/bootstrap.js"></script>

<!--select 2 form-->
<script src="../global/assets/vendors/select2/select2.min.js"></script>
<script src="../global/assets/js/select2.js"></script>

<!--form validation-->
<script src="../global/assets/vendors/wizard/js/jquery.validate.min.js"></script>

<!-- Text Editor -->
<script src="https://cdn.ckeditor.com/4.4.3/standard/ckeditor.js"></script>
<script>
    $(function() {
        CKEDITOR.replace('editor1');
        CKEDITOR.replace('editor2');
        CKEDITOR.replace('editor3');
        $(".textarea").wysihtml5();
    });
</script>
