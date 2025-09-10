<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About - YPMS</title>

    <link rel="stylesheet" href="assets/css/fonts.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/core.min.css">
    <link rel="stylesheet" href="assets/css/style.min.css">
</head>

<style>
    body.bg {
        background: url('assets/img/bg.webp') no-repeat center center fixed;
        background-size: cover;
    }

    body.bg::before {
        content: "";
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: rgba(0, 0, 0, 0.1);
        z-index: -1;
    }

    .login-header {
        background: rgba(0, 0, 0, 0.5);
        backdrop-filter: blur(2px);
    }

    .login-menu ul li a {
        color: white;
        text-decoration: none;
        font-size: clamp(14px, 2vw, 18px);
    }

    .login-menu ul li a:hover {
        color: #17a2b8;
    }

    .login-menu ul li a.active {
        color: #17a2b8;
    }

    .brand-title {
        font-size: clamp(18px, 2vw, 22px);
    }

    .outlined-text {
        -webkit-text-stroke: 0.5px #fff;
        font-weight: 900;
    }

    .login-footer {
        background: rgba(0, 0, 0, 0.5);
        backdrop-filter: blur(2px);
        padding: 10px 0;
        position: fixed;
        bottom: 0;
        left: 0;
        right: 0;
    }

    .login-footer #datetime {
        font-size: clamp(12px, 2vw, 16px);
    }

    .card-box {
        max-width: 400px;
        width: 100%;
        margin: 0 auto;
    }

    .modalDescription ul {
        list-style-type: disc;
        margin-left: 20px;
        padding-left: 10px;
    }

    .modalDescription li {
        margin-bottom: 6px;
    }


    /* Make the browser scrollbar thinner */
    ::-webkit-scrollbar {
        width: 8px;
        height: 8px;
    }

    /* Track */
    ::-webkit-scrollbar-track {
        background: #585858ff;
    }

    /* Handle */
    ::-webkit-scrollbar-thumb {
        background: #17a2b8;
        border-radius: 10px;
    }

    /* Handle on hover */
    ::-webkit-scrollbar-thumb:hover {
        background: #0f7585ff;
    }
</style>

<body class="bg d-flex flex-column min-vh-100">
    <!-- Header -->
    <div class="login-header">
        <div class="container-fluid d-flex justify-content-between align-items-center">
            <div class="brand-logo">
                <a>
                    <h3 class="text-white brand-title">
                        <span class="d-inline d-md-none">
                            <b class="text-info outlined-text">YPMS</b>
                        </span>
                        <span class="d-none d-md-inline">
                            <b class="text-info outlined-text">Y</b>outh
                            <b class="text-info outlined-text">P</b>rofiling
                            <b class="text-info outlined-text">M</b>anagement
                            <b class="text-info outlined-text">S</b>ystem
                        </span>
                    </h3>
                </a>
            </div>
            <div class="login-menu">
                <ul class="d-flex list-unstyled">
                    <li class="mx-3"><a href="login">Home</a></li>
                    <li class="mx-3"><a href="" class="active">About Us</a></li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <div class="flex-grow-1">
        <div class="container-fluid mt-5">
            <div class="row justify-content-center mb-5">
                <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                    <div class="card card-box h-100">
                        <img class="card-img-top" src="assets/img/img1.webp" loading="lazy" alt="Card image cap" />
                        <div class="card-body">
                            <h5 class="card-title fw-bold mt-2">YOUTH PROFILING MANAGEMENT SYSTEM</h5>
                            <p class="card-text my-3">
                                Some quick example text to build on the card title and make
                                up the bulk of the card's content.
                            </p>
                            <a href="#"
                                class="btn btn-outline-info read-more-btn"
                                data-toggle="modal"
                                data-target="#Medium-modal"
                                data-title="YOUTH PROFILING MANAGEMENT SYSTEM"
                                data-img="assets/img/img1.webp"
                                data-desc="
                                <p>&nbsp;&nbsp;&nbsp;The <strong>Youth Profiling Management System</strong> is a digital platform designed to efficiently collect, organize, and manage information about the youth within a community, school, or organization. Its primary purpose is to build a centralized database that stores personal, educational, social, and skill-related details of young individuals, enabling decision-makers to better understand their needs, capabilities, and potential.</p>

                                <p>&nbsp;&nbsp;&nbsp;This system streamlines the profiling process by automating data entry, record-keeping, and retrieval, reducing manual errors and paperwork. Through features such as individual profiles, categorization by demographics, educational background, talents, health records, and involvement in community activities, the system provides a holistic view of the youth sector.</p>

                                <p><strong>By utilizing the system, organizations and local governments can:</strong></p>
                                <ul>
                                    <li>Identify youth demographics and trends</li>
                                    <li>Support policy-making and program planning</li>
                                    <li>Match youth skills with opportunities (e.g., scholarships, jobs, trainings)</li>
                                    <li>Monitor participation in programs, events, and community activities</li>
                                    <li>Generate reports and statistics for data-driven decision-making</li>
                                </ul>

                                <p><strong>Overall:</strong> The system promotes data accuracy, accessibility, and security, while fostering youth development through informed interventions and opportunities.</p>
                                ">
                                Read More
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                    <div class="card card-box h-100">
                        <img class="card-img-top" src="assets/img/img2.webp" loading="lazy" alt="Card image cap" />
                        <div class="card-body">
                            <h5 class="card-title fw-bold mt-2">MISSION AND VISION</h5>
                            <p class="card-text my-3">
                                Some quick example text to build on the card title and make
                                up the bulk of the card's content.
                            </p>
                            <a href="#"
                                class="btn btn-outline-info read-more-btn"
                                data-toggle="modal"
                                data-target="#Medium-modal"
                                data-title="MISSION AND VISION"
                                data-img="assets/img/img2.webp"
                                data-desc="
                                <p>&nbsp;&nbsp;&nbsp;The <strong>Mission and Vision</strong> is a digital platform designed to efficiently collect, organize, and manage information about the youth within a community, school, or organization. Its primary purpose is to build a centralized database that stores personal, educational, social, and skill-related details of young individuals, enabling decision-makers to better understand their needs, capabilities, and potential.</p>

                                <p>&nbsp;&nbsp;&nbsp;This system streamlines the profiling process by automating data entry, record-keeping, and retrieval, reducing manual errors and paperwork. Through features such as individual profiles, categorization by demographics, educational background, talents, health records, and involvement in community activities, the system provides a holistic view of the youth sector.</p>

                                <p><strong>By utilizing the system, organizations and local governments can:</strong></p>
                                <ul>
                                    <li>Identify youth demographics and trends</li>
                                    <li>Support policy-making and program planning</li>
                                    <li>Match youth skills with opportunities (e.g., scholarships, jobs, trainings)</li>
                                    <li>Monitor participation in programs, events, and community activities</li>
                                    <li>Generate reports and statistics for data-driven decision-making</li>
                                </ul>

                                <p><strong>Overall:</strong> The system promotes data accuracy, accessibility, and security, while fostering youth development through informed interventions and opportunities.</p>
                                ">
                                Read More
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                    <div class="card card-box h-100">
                        <img class="card-img-top" src="assets/img/img3.webp" loading="lazy" alt="Card image cap" />
                        <div class="card-body">
                            <h5 class="card-title fw-bold mt-2">BARANGAY MARIBULAN</h5>
                            <p class="card-text my-3">
                                Some quick example text to build on the card title and make
                                up the bulk of the card's content.
                            </p>
                            <a href="#"
                                class="btn btn-outline-info read-more-btn"
                                data-toggle="modal"
                                data-target="#Medium-modal"
                                data-title="BARANGAY MARIBULAN"
                                data-img="assets/img/img3.webp"
                                data-desc="
                                <p>&nbsp;&nbsp;&nbsp;The <strong>Barangay Maribulan</strong> is a digital platform designed to efficiently collect, organize, and manage information about the youth within a community, school, or organization. Its primary purpose is to build a centralized database that stores personal, educational, social, and skill-related details of young individuals, enabling decision-makers to better understand their needs, capabilities, and potential.</p>

                                <p>&nbsp;&nbsp;&nbsp;This system streamlines the profiling process by automating data entry, record-keeping, and retrieval, reducing manual errors and paperwork. Through features such as individual profiles, categorization by demographics, educational background, talents, health records, and involvement in community activities, the system provides a holistic view of the youth sector.</p>

                                <p><strong>By utilizing the system, organizations and local governments can:</strong></p>
                                <ul>
                                    <li>Identify youth demographics and trends</li>
                                    <li>Support policy-making and program planning</li>
                                    <li>Match youth skills with opportunities (e.g., scholarships, jobs, trainings)</li>
                                    <li>Monitor participation in programs, events, and community activities</li>
                                    <li>Generate reports and statistics for data-driven decision-making</li>
                                </ul>

                                <p><strong>Overall:</strong> The system promotes data accuracy, accessibility, and security, while fostering youth development through informed interventions and opportunities.</p>
                                ">
                                Read More
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div
        class="modal fade"
        id="Medium-modal"
        tabindex="-1"
        role="dialog">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">

                    <img class="img-fluid modalImage" src="" loading="lazy" alt="" />
                    <h5 class="modal-title py-3"></h5>
                    <p class="modalDescription"></p>
                </div>
                <div class="modal-footer">
                    <button
                        type="button"
                        class="btn btn-secondary btn-sm"
                        data-dismiss="modal">
                        Close
                    </button>
                </div>
            </div>
        </div>
    </div>


    <!-- Footer -->
    <footer class="login-footer mt-auto">
        <div class="container-fluid text-center text-white">
            <span id="datetime"></span>
        </div>
    </footer>



    <script src="assets/js/core.min.js"></script>

    <script>
        $(document).ready(function() {
            $(".read-more-btn").on("click", function() {
                // Get data attributes from clicked button
                var title = $(this).data("title");
                var img = $(this).data("img");
                var desc = $(this).data("desc");

                // Inject into modal
                $("#Medium-modal .modal-title").text(title);
                $("#Medium-modal .modalImage").attr("src", img);
                $("#Medium-modal .modalDescription").html(desc);
            });
        });
    </script>

    <script>
        $('.modal').on('hide.bs.modal', function() {
            if (document.activeElement) {
                document.activeElement.blur();
            }
        });
    </script>


    <script>
        function updateDateTime() {
            const now = new Date();
            const options = {
                weekday: 'long',
                year: 'numeric',
                month: 'long',
                day: 'numeric',
                hour: '2-digit',
                minute: '2-digit',
                second: '2-digit'
            };
            document.getElementById('datetime').textContent =
                now.toLocaleDateString('en-US', options);
        }
        setInterval(updateDateTime, 1000);
        updateDateTime(); // initial call
    </script>

    <?php include 'config/custom_script/page_load_time.php'; ?>
</body>

</html>