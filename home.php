<!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no" />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous" />
            <link rel="stylesheet"
            href="https://cdn.datatables.net/2.0.8/css/dataTables.dataTables.css" />

        <link rel="stylesheet" href="./css/style.css">
        <script
            src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
            integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script
            src="https://cdn.datatables.net/2.0.8/js/dataTables.js"></script>
    </head>

    <body>
        <header>
            <!-- place navbar here -->
            <nav class="navbar navbar-white bg-white fixed-top shadow-sm">
                <div class="container-fluid">
                    <div class>
                        <a class="navbar-brand" href="#"><img class="logo"
                                src="./image/logo.6e61e5538374077f5630.png"
                                alt></a>
                        <button
                            class="navbar-toggler border-0 fs-6"
                            type="button"
                            data-bs-toggle="offcanvas"
                            data-bs-target="#offcanvasNavbar"
                            aria-expanded="true"
                            aria-controls="offcanvasNavbar">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                    </div>
                    <div class="dropdown me-3">
                        <h6 class="m-0 placeholder-glow" data-bs-toggle="dropdown">Xin chào, họ
                            tên<span><img src="" alt="Avatar" class="avatar placeholder mx-2 rounded rounded-circle"></span></h6>
                        <ul class="dropdown-menu ">
                            <li><a class="dropdown-item" href="profile.php">Trang cá
                                    nhân</a></li>
                            <li><a class="dropdown-item" href="#">Đăng
                                    xuất</a></li>
                        </ul>
                    </div>
                    <div
                        class="offcanvas offcanvas-start show border-0 shadow-sm"
                        tabindex="-1"
                        id="offcanvasNavbar"
                        data-bs-scroll="true"

                        data-bs-backdrop="false"
                        aria-labelledby="offcanvasNavbarLabel">
                        <div class="offcanvas-header">
                            <h5 class="offcanvas-title"
                                id="offcanvasNavbarLabel">
                                <img class="logo"
                                    src="./image/logo.6e61e5538374077f5630.png"
                                    alt>
                                Smart math
                            </h5>
                            <button
                                type="button"
                                class="btn-close text-reset"
                                data-bs-dismiss="offcanvas"
                                aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body">
                            <ul
                                class="navbar-nav justify-content-end flex-grow-1 ">
                                <li class="nav-item">
                                    <a
                                        class="nav-link active"
                                        aria-current="page"
                                        href="#"><svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="16" height="16"
                                            fill="currentColor"
                                            class="bi bi-house-door-fill"
                                            viewBox="0 0 16 16">
                                            <path
                                                d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5" />
                                        </svg> Trang chủ</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#"><svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="16" height="16"
                                            fill="currentColor"
                                            class="bi bi-clock-history"
                                            viewBox="0 0 16 16">
                                            <path
                                                d="M8.515 1.019A7 7 0 0 0 8 1V0a8 8 0 0 1 .589.022zm2.004.45a7 7 0 0 0-.985-.299l.219-.976q.576.129 1.126.342zm1.37.71a7 7 0 0 0-.439-.27l.493-.87a8 8 0 0 1 .979.654l-.615.789a7 7 0 0 0-.418-.302zm1.834 1.79a7 7 0 0 0-.653-.796l.724-.69q.406.429.747.91zm.744 1.352a7 7 0 0 0-.214-.468l.893-.45a8 8 0 0 1 .45 1.088l-.95.313a7 7 0 0 0-.179-.483m.53 2.507a7 7 0 0 0-.1-1.025l.985-.17q.1.58.116 1.17zm-.131 1.538q.05-.254.081-.51l.993.123a8 8 0 0 1-.23 1.155l-.964-.267q.069-.247.12-.501m-.952 2.379q.276-.436.486-.908l.914.405q-.24.54-.555 1.038zm-.964 1.205q.183-.183.35-.378l.758.653a8 8 0 0 1-.401.432z" />
                                            <path
                                                d="M8 1a7 7 0 1 0 4.95 11.95l.707.707A8.001 8.001 0 1 1 8 0z" />
                                            <path
                                                d="M7.5 3a.5.5 0 0 1 .5.5v5.21l3.248 1.856a.5.5 0 0 1-.496.868l-3.5-2A.5.5 0 0 1 7 9V3.5a.5.5 0 0 1 .5-.5" />
                                        </svg> Lịch sử luyện tập</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="#"><svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="16" height="16"
                                            fill="currentColor"
                                            class="bi bi-arrow-counterclockwise"
                                            viewBox="0 0 16 16">
                                            <path fill-rule="evenodd"
                                                d="M8 3a5 5 0 1 1-4.546 2.914.5.5 0 0 0-.908-.417A6 6 0 1 0 8 2z" />
                                            <path
                                                d="M8 4.466V.534a.25.25 0 0 0-.41-.192L5.23 2.308a.25.25 0 0 0 0 .384l2.36 1.966A.25.25 0 0 0 8 4.466" />
                                        </svg> Lịch sử tham gia cuộc thi</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#"><svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="16" height="16"
                                            fill="currentColor"
                                            class="bi bi-card-checklist"
                                            viewBox="0 0 16 16">
                                            <path
                                                d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2z" />
                                            <path
                                                d="M7 5.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5m-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 1 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0M7 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5m-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 0 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0" />
                                        </svg> Thống kê</a>
                                </li>
                            </ul>

                        </div>
                    </div>
                </div>

            </nav>

        </header>
        <main>
            <div class="container">
                <div class="p-3 row gy-4 mx-auto justify-content-start">
                    <div class="card mx-2 bg-primary shadow rounded-4" style="width: 18rem;">
                        <img
                            src="./image/learning-icon.87c5ba7a2f16653f3980.webp"
                            class="card-img-top my-2 rounded-4" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Luyện tập theo chủ đề</h5>
                            <p class="card-text">Các bạn sẽ hoàn thành các bài
                                tập
                                nhỏ theo chủ đề. Mỗi chủ đề sẽ có 5-10 câu
                                hỏi.</p>
                            <p class="text-center">
                                <a class="btn btn-default bg-white rounded-5"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-right" viewBox="0 0 16 16">
                                    <path d="M6 12.796V3.204L11.481 8zm.659.753 5.48-4.796a1 1 0 0 0 0-1.506L6.66 2.451C6.011 1.885 5 2.345 5 3.204v9.592a1 1 0 0 0 1.659.753"/>
                                  </svg>Luyện tập</a>
                            </p>

                        </div>
                    </div>
                    <div class="card mx-2 bg-warning shadow rounded-4" style="width: 18rem;">
                        <img
                            src="./image/learning-icon.87c5ba7a2f16653f3980.webp"
                            class="card-img-top my-2 rounded-4" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Luyện tập theo chủ đề</h5>
                            <p class="card-text">Các bạn sẽ hoàn thành các bài
                                tập
                                nhỏ theo chủ đề. Mỗi chủ đề sẽ có 5-10 câu
                                hỏi.</p>
                            <p class="text-center">
                                <a class="btn btn-default bg-white rounded-5"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-right" viewBox="0 0 16 16">
                                    <path d="M6 12.796V3.204L11.481 8zm.659.753 5.48-4.796a1 1 0 0 0 0-1.506L6.66 2.451C6.011 1.885 5 2.345 5 3.204v9.592a1 1 0 0 0 1.659.753"/>
                                  </svg>Luyện tập</a>
                            </p>

                        </div>
                    </div>
                  
            </div>

        </main>
        <footer>
            <!-- place footer here -->
        </footer>
        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"></script>
        <script>
            const popoverTriggerList = document.querySelectorAll('[data-bs-toggle="popover"]')
            const popoverList = [...popoverTriggerList].map(popoverTriggerEl => new bootstrap.Popover(popoverTriggerEl))
        </script>
       
    </body>
</html>