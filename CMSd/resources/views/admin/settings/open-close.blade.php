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
                                            <li class="breadcrumb-item active">open-close</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Admin Dashboard</h4>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->
                        <!-- Reviewer -->

                        <div class="row">
                            <div class="col-12">
                                <div class="card-box">
                                    <h4 class="header-title mb-4">Open/Close</h4>


                                    <div class="mt-4">
                                        <p class="text-muted font-13">Status</p>
                                        <div>
                                            <label class="col-lg-2 col-form-label">New Submission:</label>
                                            <div class="radio radio-info form-check-inline">
                                                <input type="radio" id="rdSubmission1" value="Open" name="sub" checked>
                                                <label for="rdSubmission1"> Open </label>
                                            </div>
                                            <div class="radio form-check-inline">
                                                <input type="radio" id="rdSubmission1" value="Close" name="sub">
                                                <label for="rdSubmission1"> Close </label>
                                            </div>
                                        </div>
                                        <div>
                                            <label class="col-lg-2 col-form-label">Edit Submission:</label>
                                            <div class="radio radio-info form-check-inline">
                                                <input type="radio" id="rdSubmission2" value="Open" name="es" checked>
                                                <label for="rdSubmission2"> Open </label>
                                            </div>
                                            <div class="radio form-check-inline">
                                                <input type="radio" id="rdSubmission2" value="Close" name="es">
                                                <label for="rdSubmission2"> Close </label>
                                            </div>
                                        </div>
                                        <div>
                                            <label class="col-lg-2 col-form-label">Withdraw Submission:</label>
                                            <div class="radio radio-info form-check-inline">
                                                <input type="radio" id="rdSubmission3" value="Open" name="ws" checked>
                                                <label for="rdSubmission3"> Open </label>
                                            </div>
                                            <div class="radio form-check-inline">
                                                <input type="radio" id="rdSubmission3" value="Close" name="ws">
                                                <label for="rdSubmission3"> Close </label>
                                            </div>
                                        </div>
                                        <div>
                                            <label class="col-lg-2 col-form-label">Upload File:</label>
                                            <div class="radio radio-info form-check-inline">
                                                <input type="radio" id="rdSubmission4" value="Open" name="uf" checked>
                                                <label for="rdSubmission4"> Open </label>
                                            </div>
                                            <div class="radio form-check-inline">
                                                <input type="radio" id="rdSubmission4" value="Close" name="uf">
                                                <label for="rdSubmission4"> Close </label>
                                            </div>
                                        </div>
                                        <div>
                                            <label class="col-lg-2 col-form-label">View File:</label>
                                            <div class="radio radio-info form-check-inline">
                                                <input type="radio" id="rdSubmission5" value="Open" name="vf" checked>
                                                <label for="rdSubmission5"> Open </label>
                                            </div>
                                            <div class="radio form-check-inline">
                                                <input type="radio" id="rdSubmission5" value="Close" name="vf">
                                                <label for="rdSubmission5"> Close </label>
                                            </div>
                                        </div>
                                        <div>
                                            <label class="col-lg-2 col-form-label">Check Status:</label>
                                            <div class="radio radio-info form-check-inline">
                                                <input type="radio" id="rdSubmission6" value="Open" name="cs" checked>
                                                <label for="rdSubmission6"> Open </label>
                                            </div>
                                            <div class="radio form-check-inline">
                                                <input type="radio" id="rdSubmission6" value="Close" name="cs">
                                                <label for="rdSubmission6"> Close </label>
                                            </div>
                                        </div>
                                        <div>
                                            <label class="col-lg-2 col-form-label">Review Cmt. Sign Up:</label>
                                            <div class="radio radio-info form-check-inline">
                                                <input type="radio" id="rdSubmission7" value="Open" name="rsu" checked>
                                                <label for="rdSubmission7"> Open </label>
                                            </div>
                                            <div class="radio form-check-inline">
                                                <input type="radio" id="rdSubmission7" value="Close" name="rsu">
                                                <label for="rdSubmission7"> Close </label>
                                            </div>
                                        </div>
                                        <div>
                                            <label class="col-lg-2 col-form-label">Review Cmt Sign In:</label>
                                            <div class="radio radio-info form-check-inline">
                                                <input type="radio" id="rdSubmission8" value="Open" name="rsi" checked>
                                                <label for="rdSubmission8"> Open </label>
                                            </div>
                                            <div class="radio form-check-inline">
                                                <input type="radio" id="rdSubmission8" value="Close" name="rsi">
                                                <label for="rdSubmission8"> Close </label>
                                            </div>
                                        </div>
                                        <div>
                                            <label class="col-lg-2 col-form-label">Reviewing:</label>
                                            <div class="radio radio-info form-check-inline">
                                                <input type="radio" id="rdSubmission9" value="Open" name="rv" checked>
                                                <label for="rdSubmission9"> Open </label>
                                            </div>
                                            <div class="radio form-check-inline">
                                                <input type="radio" id="rdSubmission9" value="Close" name="rv">
                                                <label for="rdSubmission9"> Close </label>
                                            </div>
                                        </div>
                                        <div>
                                            <label class="col-lg-2 col-form-label">Program Cmt Sign Up:</label>
                                            <div class="radio radio-info form-check-inline">
                                                <input type="radio" id="rdSubmission10" value="Open" name="psu" checked>
                                                <label for="rdSubmission10"> Open </label>
                                            </div>
                                            <div class="radio form-check-inline">
                                                <input type="radio" id="rdSubmission10" value="Close" name="psu">
                                                <label for="rdSubmission10"> Close </label>
                                            </div>
                                        </div>
                                        <div>
                                            <label class="col-lg-2 col-form-label">Program Cmt Sign In:</label>
                                            <div class="radio radio-info form-check-inline">
                                                <input type="radio" id="rdSubmission11" value="Open" name="psi" checked>
                                                <label for="rdSubmission11"> Open </label>
                                            </div>
                                            <div class="radio form-check-inline">
                                                <input type="radio" id="rdSubmission11" value="Close" name="psi">
                                                <label for="rdSubmission11"> Close </label>
                                            </div>
                                        </div>

                                    </div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- reviewer end -->
                    <!---- try --->
                    <div class="row">
                        <div class="col-12">
                            <div class="card-box">
                                <h4 class="header-title mb-4">Set Topics</h4>

                                <em><strong>Note that if submissions have been made or reviewers signed up already, you
                                        should only add new topics to the end of the list or change a topic's name to
                                        clarify it. If you want to delete a topic in the middle of the list, replace its
                                        name with N/A or something authors and reviewers will know not to
                                        select.</strong></em>

                                <form method="post" action="/submission/chair/set_topics.php">
                                    <input type="hidden" name="token" value="6911fbb1e71367c8bc6747fc2e7afce5">

                                    <p>Topics are used when making automated review assignments. Both authors and
                                        reviewers are asked to select topics. Enter a sequential list of topics below.
                                        When you click on <em>Set Topics</em>, topics will be added sequentially
                                        regardless of the Topic ID listed, with blank topics ignored; thus topics should
                                        only be deleted until a submission has been made or reviewer signed up. The
                                        <em>Short Name</em> field is optional; if present, it is used on pages where a
                                        long topic name may not display well.</p>

                                    <div class="form-group row">
                                        <label for="topicTable" class="col-lg-2 col-form-label">Topic Table:</label>
                                        <div class="col-lg-10">
                                            <table border="0" cellspacing="1" cellpadding="8" id="topicTable"
                                                class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th>Topic ID</th>
                                                        <th>Topic Name</th>
                                                        <th>Short Name (Max 20 chars)</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <!-- Topics rows here -->

                                                    <!-- Additional rows as required -->
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                    <!-- Add more topic rows script -->
                                    <div class="form-group row">
                                        <div class="col-lg-10 offset-lg-2">
                                            <span onclick="addTopicRow()" class="topic_link"
                                                style="text-decoration: underline; cursor: pointer;">Add More
                                                Rows</span>
                                        </div>
                                    </div>

                                    <script language="javascript">
                                        var topicNum = 1;
                                        var row = 1;
                                        function addTopicRow() {
                                            var topicTable = document.getElementById("topicTable");
                                            if (topicTable) {
                                                for (var j = 1; j <= 5; j++) {
                                                    var topicRow = topicTable.insertRow(-1);
                                                    topicRow.className = "row" + row;
                                                    var idCell = topicRow.insertCell(-1);
                                                    idCell.align = "center";
                                                    idCell.innerHTML = topicNum;
                                                    var nameCell = topicRow.insertCell(-1);
                                                    nameCell.innerHTML = "<input name=\"name-" + topicNum + "\" value=\"\" size=\"50\" maxlength=\"250\" />";
                                                    var shortCell = topicRow.insertCell(-1);
                                                    shortCell.innerHTML = "<input name=\"short-" + topicNum + "\" value=\"\" size=\"20\" maxlength=\"20\" />";
                                                    topicNum++;
                                                    row = (row == 1) ? 2 : 1; // Alternates row color
                                                }
                                            }
                                        }
                                    </script>

                                    <!-- Form Options -->
                                    <div class="form-group row">
                                        <label class="col-lg-2 col-form-label">Allow authors to select multiple
                                            submission topics?</label>
                                        <div class="col-lg-10">
                                            <label><input type="radio" name="OC_multipleSubmissionTopics"
                                                    value="1">Yes</label>
                                            <label><input type="radio" name="OC_multipleSubmissionTopics" value="0"
                                                    checked>No</label>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-lg-2 col-form-label">Allow committee members to select
                                            multiple submission topics?</label>
                                        <div class="col-lg-10">
                                            <label><input type="radio" name="OC_multipleCommitteeTopics" value="1"
                                                    checked>Yes</label>
                                            <label><input type="radio" name="OC_multipleCommitteeTopics"
                                                    value="0">No</label>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-lg-2 col-form-label">Display topics alphabetically?</label>
                                        <div class="col-lg-10">
                                            <label><input type="radio" name="OC_topicDisplayAlpha" value="1">Yes</label>
                                            <label><input type="radio" name="OC_topicDisplayAlpha" value="0"
                                                    checked>No</label>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-lg-10 offset-lg-2">
                                            <input type="submit" name="submit" class="btn btn-primary"
                                                value="Set Topics">
                                        </div>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>

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