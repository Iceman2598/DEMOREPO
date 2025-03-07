<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    @include('admin.layouts.css')
</head>

<body>

    <div>
        <header>
            @include('admin.layouts.topbar')
        </header>
        @include('admin.layouts.sidebar')

        <!-- Begin page -->
        <div id="wrapper">

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Inflibinet</a>
                                            </li>
                                            <li class="breadcrumb-item active">Config</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Admin Dashboard</h4>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->
                        <!-- Event -->
                        <div class="row">
                            <div class="col-12">
                                <div class="card-box">
                                    <h4 class="header-title mb-4">Event</h4>
                                    <div class="form-group row">
                                        <label for="EventFullName" class="col-lg-2 col-form-label">Event Full
                                            Name</label>
                                        <div class="col-lg-10">
                                            <input class="form-control" type="text" placeholder="Event Full Name"
                                                id="example-text-input">
                                            <div><i>Event Full Name used on Web pages and in email Messages</i></div>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="EventShortName" class="col-lg-2 col-form-label">Event Short
                                            Name</label>
                                        <div class="col-lg-10">
                                            <input class="form-control" type="text" placeholder="Event Short Name"
                                                id="example-text-input">
                                            <div><i>Event abbreviated name, primarily used in email subject lines</i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="EventWebAddress" class="col-lg-2 col-form-label">Event Web
                                            Address</label>
                                        <div class="col-lg-10">
                                            <input class="form-control" type="text" placeholder="EventWebAddress"
                                                id="EventWebAddress">
                                            <div><i>Full web address (including http:// ) for event web page</i></div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="HeaderImage" class="col-lg-2 col-form-label">Header Image</label>
                                        <div class="col-lg-10">
                                            <input class="form-control" type="text" placeholder="HeaderImage"
                                                id="HeaderImage">
                                            <div><i>Full web address (including http:// ) for image to display atop
                                                    every page. Leave blank to display event full name</i></div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="HomePageNotice" class-"form-label">Home Page Notice</label>
                                        <textarea id="HomePageNotice" name="abstract" class="form-control" required></textarea>
                                        <!-- <textarea class="form-control" id="HomePageNotice" rows="3"></textarea> -->
                                    </div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    <script src="https://cdn.ckeditor.com/4.20.0/standard/ckeditor.js"></script>
                                    <script>
                                        CKEDITOR.replace('HomePageNotice');
                                    </script>
                                </div>
                            </div>
                        </div>

                        <!-- Event End -->
                        <!-- Email -->
                        <div class="row">
                            <div class="col-12">
                                <div class="card-box">
                                    <h4 class="header-title mb-4">Email & Notification</h4>
                                    <div class="form-group row">
                                        <label for="ChairEmail" class="col-lg-2 col-form-label">Chair Email:</label>
                                        <div class="col-lg-10">
                                            <input class="form-control" type="text" placeholder="Chair Email"
                                                id="ChairEmail">
                                            <div><i>Used as the general contact email and in case of errors or other
                                                    follow-up. Although a comma-delimited list of addresses (without
                                                    spaces) is permitted, this is not recommended as mail servers may
                                                    reject messages with more than one.</i></div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="NotificationEmail" class="col-lg-2 col-form-label">Notification
                                            Email:</label>
                                        <div class="col-lg-10">
                                            <input class="form-control" type="text" placeholder="Notification Email"
                                                id="NotificationEmail">
                                            <div><i>Receives a copy of confirmation emails sent to authors and committee
                                                    members; see options below. A comma-delimited list of addresses
                                                    (without spaces) is permitted.</i></div>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="NotificationEmail" class="col-lg-2 col-form-label">Notification
                                            Email:</label>
                                        <div class="checkbox">

                                        </div>
                                        <div class="checkbox checkbox-primary">
                                            <div class="checkbox">
                                                <input id="checkbox1" type="checkbox" checked=""><label for="checkbox1">
                                                    Author makes a submission</label></label>
                                            </div>
                                            <div class="checkbox">
                                                <input id="checkbox2" type="checkbox" checked=""><label
                                                    for="checkbox2">Author updates (edits) submission</label></label>
                                            </div>
                                            <div class="checkbox">
                                                <input id="checkbox3" type="checkbox" checked=""><label
                                                    for="checkbox3">Author requests own submission list
                                                    emailed</label></label>
                                            </div>
                                            <div class="checkbox">
                                                <input id="checkbox4" type="checkbox" checked=""><label
                                                    for="checkbox4">Author uploads a file</label></label>
                                            </div>
                                            <div class="checkbox">
                                                <input id="checkbox5" type="checkbox" checked=""><label
                                                    for="checkbox5">Author requests password reset</label></label>
                                            </div>
                                            <div class="checkbox">
                                                <input id="checkbox6" type="checkbox" checked=""><label
                                                    for="checkbox6">Author withdraws submission</label></label>
                                            </div>
                                            <div class="checkbox">
                                                <input id="checkbox7" type="checkbox" checked=""><label for="checkbox7">
                                                    Committee member signs up for account</label></label>
                                            </div>
                                            <div class="checkbox">
                                                <input id="checkbox8" type="checkbox" checked=""><label
                                                    for="checkbox8"></label>Committee member updates profile</label>
                                            </div>
                                            <div class="checkbox">
                                                <input id="checkbox9" type="checkbox" checked=""><label
                                                    for="checkbox9"></label>Committee member resets password</label>
                                            </div>
                                            <div class="checkbox">
                                                <input id="checkbox10" type="checkbox" checked=""><label
                                                    for="checkbox10"></label>Committee member requests username
                                                emailed</label>
                                            </div>
                                        </div>
                                        <label for="ipnotification" class="col-lg-2 col-form-label">Include IP
                                            address in notifications?</label>
                                        <div class="radio radio-info form-check-inline">
                                            <input type="radio" id="inlineRadio1" value="option1" name="radioInline"
                                                checked="">
                                            <label for="inlineRadio1">Yes</label>
                                        </div>
                                        <div class="radio form-check-inline">
                                            <input type="radio" id="inlineRadio2" value="option2" name="radioInline">
                                            <label for="inlineRadio2">No</label>
                                        </div>
                                    </div>

                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>


                            </div>

                        </div>
                        <!-- Email End -->
                        <!-- Reviewer -->

                        <div class="row">
                            <div class="col-12">
                                <div class="card-box">
                                    <h4 class="header-title mb-4">Reviewers</h4>
                                    <div class="form-group row">
                                        <label for="SignupKeycode" class="col-lg-2 col-form-label">Sign Up
                                            Keycode</label>
                                        <div class="col-lg-10">
                                            <input class="form-control" type="text" placeholder="Sign Up Keycode"
                                                id="SignUpKeycode">
                                            <div><i>Keycode for signing up as a review committee member. May enter a
                                                    comma-delimited list (no spaces).</i></div>
                                        </div>
                                    </div>

                                    <div class="mt-4">
                                        <p class="text-muted font-13">Reviewer Permission</p>
                                        <div>
                                            <label class="col-lg-2 col-form-label">Allow reviewers to view all
                                                submissions?</label>
                                            <div class="radio radio-info form-check-inline">
                                                <input type="radio" id="inlineRadio1Yes" value="Yes" name="Yes" checked>
                                                <label for="inlineRadio1"> Yes </label>
                                            </div>
                                            <div class="radio form-check-inline">
                                                <input type="radio" id="inlineRadio1No" value="No" name="radioInline">
                                                <label for="No"> No </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <label class="col-lg-2 col-form-label">Allow reviewers to see others' review of
                                            assigned submissions?</label>
                                        <div class="radio radio-info form-check-inline">
                                            <input type="radio" id="inlineRadio1Yes" value="Yes" name="Yes" checked>
                                            <label for="inlineRadio1"> Yes </label>
                                        </div>
                                        <div class="radio form-check-inline">
                                            <input type="radio" id="inlineRadio1No" value="No" name="radioInline">
                                            <label for="No"> No </label>
                                        </div>
                                    </div>
                                    <div>
                                        <label class="col-lg-2 col-form-label">Only allow reviewer to see reviews of
                                            assigned submissions if own is complete?</label>
                                        <div class="radio radio-info form-check-inline">
                                            <input type="radio" id="inlineRadio1Yes" value="Yes" name="Yes" checked>
                                            <label for="inlineRadio1"> Yes </label>
                                        </div>
                                        <div class="radio form-check-inline">
                                            <input type="radio" id="inlineRadio1No" value="No" name="radioInline">
                                            <label for="No"> No </label>
                                        </div>
                                    </div>
                                    <div>
                                        <label class="col-lg-2 col-form-label">Allow reviewer to see reviews of
                                            non-assigned submissions?</label>
                                        <div class="radio radio-info form-check-inline">
                                            <input type="radio" id="inlineRadio1Yes" value="Yes" name="Yes" checked>
                                            <label for="inlineRadio1"> Yes </label>
                                        </div>
                                        <div class="radio form-check-inline">
                                            <input type="radio" id="inlineRadio1No" value="No" name="radioInline">
                                            <label for="No"> No </label>
                                        </div>
                                    </div>
                                    <div>
                                        <label class="col-lg-2 col-form-label">Allow reviewers to see each other's
                                            information? (e.g., name, email)</label>
                                        <div class="radio radio-info form-check-inline">
                                            <input type="radio" id="inlineRadio1Yes" value="Yes" name="Yes" checked>
                                            <label for="inlineRadio1"> Yes </label>
                                        </div>
                                        <div class="radio form-check-inline">
                                            <input type="radio" id="inlineRadio1No" value="No" name="radioInline">
                                            <label for="No"> No </label>
                                        </div>
                                    </div>
                                    <div>
                                        <label class="col-lg-2 col-form-label">Allow reviewers to see authors (i.e.,
                                            non-blind reviews)?</label>
                                        <div class="radio radio-info form-check-inline">
                                            <input type="radio" id="inlineRadio1Yes" value="Yes" name="Yes" checked>
                                            <label for="inlineRadio1"> Yes </label>
                                        </div>
                                        <div class="radio form-check-inline">
                                            <input type="radio" id="inlineRadio1No" value="No" name="radioInline">
                                            <label for="No"> No </label>
                                        </div>
                                    </div>

                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </div>
                        <!-- reviewer end -->
                        <!-- submission -->
                        <div class="row">
                            <div class="col-12">
                                <div class="card-box">
                                    <h4 class="header-title mb-4">Submission</h4>
                                    <div class="form-group row">
                                        <label for="MinAuthorDisplay" class="col-lg-2 col-form-label">Min. Authors to
                                            Display</label>
                                        <div class="col-lg-10">
                                            <input class="form-control" type="int" id="MinAuthorDisplay">
                                            <div><i>Minimum number of authors to display on submission form</i></div>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="MaxAuthorAllow" class="col-lg-2 col-form-label">Max Authors
                                            Allowed</label>
                                        <div class="col-lg-10">
                                            <input class="form-control" type="int" id="MaxAuthorAllow">
                                            <div><i>Maximum number of authors allowed per submission (max: 99)</i></div>
                                        </div>
                                    </div>
                                    <div>
                                        <label class="col-lg-2 col-form-label">Edit Accepted Only?</label>
                                        <div class="radio radio-info form-check-inline ">
                                            <input type="radio" id="inlineRadio1Yes" value="Yes" name="Yes" checked>
                                            <label for="inlineRadio1"> Yes </label>
                                        </div>
                                        <div class="radio form-check-inline">
                                            <input type="radio" id="inlineRadio1No" value="No" name="radioInline">
                                            <label for="No"> No </label>
                                        </div>
                                        <div><i>Restrict Edit Submission to accepted submissions only</i></div>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </div>
                        <!-- Submission End -->
                        <!-- File Format -->
                        <div class="row">
                            <div class="col-12">
                                <div class="card-box">
                                    <h4 class="header-title mb-4">Files</h4>
                                    <div class="form-group row">
                                        <label for="FileFormats" class="col-lg-2 col-form-label">File Formats:</label>
                                        <div class="col-lg-10">
                                            <div class="form-group">
                                                <select multiple="" class="form-control" id="exampleSelect2">
                                                    <option value="wp">Corel WordPerfect</option>
                                                    <option value="doc">DOC</option>
                                                    <option value="docx" selected="">DOCX</option>
                                                    <option value="eps">EPS</option>
                                                    <option value="gif">GIF</option>
                                                    <option value="gz">GZIP</option>
                                                    <option value="html">HTML</option>
                                                    <option value="jpg">JPEG</option>
                                                    <option value="xls">Microsoft Excel (.xls)</option>
                                                    <option value="xlsx">Microsoft Excel (.xlsx)</option>
                                                    <option value="ppt">Microsoft PowerPoint (.ppt)</option>
                                                    <option value="pptx">Microsoft PowerPoint (.pptx)</option>
                                                    <option value="odt">ODT</option>
                                                    <option value="pdf">PDF</option>
                                                    <option value="png">PNG</option>
                                                    <option value="ps">PostScript</option>
                                                    <option value="rtf">RTF</option>
                                                    <option value="tar">TAR</option>
                                                    <option value="txt">Text</option>
                                                    <option value="xml">XML</option>
                                                    <option value="zip">ZIP</option>
                                                </select>
                                            </div>
                                            <div><i>Available upload formats.
                                                    Use FileType module to
                                                    verify file is in proper
                                                    format</i>
                                            </div>

                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>
                        <!-- File Format end -->
                        <!-- end row -->
                    </div> <!-- end container-fluid -->
                </div> <!-- end content -->
            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->

        </div>
        <!-- END wrapper -->
        @include('admin.layouts.footer')
    </div>

    @include('admin.layouts.js')

</body>

</html>