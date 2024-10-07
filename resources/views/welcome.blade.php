<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Expires" content="0">
    <meta name="description"
        content="This is a static website serving as a beginner friendly project to help developers get started with hacktoberfest - Gateway to open source.">
    <link rel="icon" href="{{ asset('assets/css/favicon.25a5e6eb.svg') }}" type="image/x-icon">

    <!-- CSS Dependencies -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/animate.css@3.5.2/animate.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&amp;display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('assets/css/contributors.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/navbar.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/footer.css')}}">

    <title>Hacktoberfest - Contributors</title>
    <style>
        .hidden {
            display: none;
        }

        .st0 {
            fill: #FF0844;
        }
    </style>
</head>

<body>

    <!-- Back-to-top Button -->
    <button id="back-to-top-btn"><i class="fas fa-angle-double-up"></i></button>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">

                <?xml version="1.0" encoding="UTF-8"?><svg id="Layer_1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 300 430" class="header__logo" width="100px" height="100px">
                    <title id="dyn2wm4vin1xgraye3ggy9kf12oaz8a">Hacktoberfest <span id="current-year-title"></span></title>
                    <defs>
                        <style>
                            .cls-1 {
                                fill: #f3f0e0;
                                stroke-width: 0px;
                            }
                        </style>
                    </defs>
                    <path class="cls-1"
                        d="M92.63,338.61c-1.22-1.28-2.74-2.26-4.55-2.93-1.8-.68-3.95-1.02-6.21-1.02s-4.3.36-6.1,1.1c-1.8.73-3.35,1.79-4.62,3.16-1.28,1.37-2.26,3.06-2.93,5.08-.68,2.01-1.02,4.29-1.02,6.8v8.8c0,5.27,1.32,9.28,3.95,12.02,2.63,2.75,6.02,4.12,10.72,4.12s8.29-1.27,10.75-3.81c2.47-2.54,3.7-6.16,3.7-10.86v-1.02h-7.45v1.02c0,1.02-.09,2.01-.28,2.96-.19.96-.53,1.8-1.04,2.54-.51.73-1.22,1.32-2.15,1.75-.92.43-2.1.65-3.53.65h0c-1.32,0-2.43-.23-3.35-.66-.92-.43-1.66-1.05-2.23-1.83-.56-.78-.98-1.72-1.24-2.79-.26-1.07-.39-2.25-.39-3.53v-9.93c0-1.16.14-2.28.42-3.35.28-1.07.72-2.01,1.32-2.82.6-.81,1.36-1.45,2.26-1.92.9-.47,1.98-.71,3.21-.71,1.36,0,2.48.23,3.39.71.91.47,1.62,1.08,2.15,1.83.53.75.9,1.6,1.13,2.54.23.94.34,1.88.34,2.82v1.02h7.45v-1.02c0-2.26-.31-4.3-.93-6.1-.62-1.8-1.54-3.35-2.77-4.62Z" />
                    <polygon class="cls-1"
                        points="0 428.57 7.45 428.57 7.45 412.32 24.95 412.32 24.95 405.21 7.45 405.21 7.45 396.18 25.29 396.18 25.29 389.07 0 389.07 0 428.57" />
                    <polygon class="cls-1"
                        points="100.01 396.18 110.5 396.18 110.5 428.57 117.95 428.57 117.95 396.18 128.44 396.18 128.44 389.07 100.01 389.07 100.01 396.18" />
                    <polygon class="cls-1"
                        points="118.57 354.69 130.76 335.78 130.76 335.45 122.35 335.45 111.91 351.64 110.27 351.64 110.27 335.45 102.83 335.45 102.83 374.95 110.27 374.95 110.28 374.95 110.28 358.76 111.92 358.76 122.69 374.95 131.44 374.95 131.44 374.61 118.57 355.71 118.57 354.69" />
                    <path class="cls-1"
                        d="M91.86,408.76c-2.19-1.76-5.35-3.03-9.48-3.78-1.65-.3-3.02-.62-4.09-.96-1.07-.35-1.94-.73-2.59-1.16-.66-.43-1.11-.92-1.38-1.47-.26-.55-.39-1.16-.39-1.84,0-1.32.55-2.37,1.64-3.14,1.09-.78,2.58-1.16,4.46-1.16,2.22,0,3.94.58,5.17,1.75,1.22,1.17,1.83,2.54,1.83,4.12v.02s0,1.36,0,1.36h7.45v-2.03c0-1.61-.31-3.16-.93-4.62s-1.54-2.77-2.77-3.9c-1.22-1.13-2.74-2.02-4.55-2.68-1.8-.66-3.87-.99-6.21-.99-2.07,0-3.94.28-5.61.85-1.68.56-3.1,1.35-4.29,2.37-1.18,1.01-2.11,2.21-2.77,3.58-.66,1.37-.99,2.87-.99,4.48v.34c0,1.96.34,3.61,1.02,4.97.68,1.36,1.63,2.48,2.85,3.39,1.22.9,2.66,1.63,4.32,2.17s3.48.99,5.47,1.32c1.5.26,2.74.58,3.72.96.97.38,1.75.8,2.31,1.27.56.47.96,1,1.18,1.58.23.58.34,1.19.34,1.83,0,1.35-.55,2.52-1.64,3.5-1.1.98-2.77,1.47-5.02,1.47-2.89,0-5.03-.71-6.4-2.12-1.37-1.41-2.06-3.31-2.06-5.67v-1.36h-7.45v1.69c0,2.07.34,3.98,1.02,5.73.68,1.75,1.68,3.27,2.99,4.57,1.32,1.3,2.96,2.31,4.94,3.05,1.98.73,4.26,1.1,6.86,1.1,2.22,0,4.21-.28,5.98-.85,1.77-.56,3.28-1.38,4.51-2.43,1.25-1.05,2.19-2.32,2.85-3.81.66-1.48.99-3.15.99-4.99v-.67c0-3.46-1.1-6.07-3.28-7.85Z" />
                    <polygon class="cls-1"
                        points="41.08 412.31 57.9 412.31 57.9 405.2 41.08 405.2 41.08 396.17 58.57 396.17 58.57 389.07 33.63 389.07 33.62 389.06 33.62 428.56 59.25 428.56 59.25 421.45 41.08 421.45 41.08 412.31" />
                    <polygon class="cls-1"
                        points="20.2 351.58 7.45 351.58 7.45 335.45 0 335.45 0 374.95 7.45 374.95 7.45 358.69 20.2 358.69 20.2 374.95 27.64 374.95 27.64 335.45 20.2 335.45 20.2 351.58" />
                    <path class="cls-1"
                        d="M40.78,335.45l-9.42,39.5h7.79l1.92-8.47h13.42l1.92,8.47h7.79l-9.42-39.5h-14ZM42.66,359.38l4.62-20.21h1.02l4.57,20.21h-10.21Z" />
                    <polygon class="cls-1"
                        points="135.5 342.56 146 342.56 146 374.95 153.45 374.95 153.45 342.56 163.94 342.56 163.94 335.45 135.5 335.45 135.5 342.56" />
                    <path class="cls-1"
                        d="M296.82,338.64c-1.03-1-2.32-1.78-3.86-2.34-1.54-.56-3.33-.85-5.36-.85h-15.13v39.5h7.45v-14.9h8.58c1.09,0,1.87.28,2.34.85.47.56.71,1.3.71,2.2v11.85h7.45s0-13.65,0-13.65c0-1.32-.39-2.41-1.16-3.28-.78-.86-1.82-1.37-3.14-1.52v-1.02c1.8-.75,3.14-1.84,4.01-3.25.87-1.41,1.3-2.93,1.3-4.55v-1.36c0-1.51-.27-2.92-.82-4.23-.54-1.32-1.33-2.48-2.37-3.47ZM292.55,348.09c0,1.54-.47,2.74-1.41,3.58-.94.85-2.32,1.27-4.12,1.27h-7.11v-10.39h7.11c1.81,0,3.18.49,4.12,1.44.94.96,1.41,2.1,1.41,3.42v.67Z" />
                    <polygon class="cls-1"
                        points="0 .64 0 300.64 68.04 300.58 34.18 267.27 34.18 35.3 266.15 35.3 300 68.6 300 .64 0 .64" />
                    <polygon class="cls-1"
                        points="246.44 358.69 263.26 358.69 263.26 351.58 246.44 351.58 246.44 342.56 263.94 342.56 263.94 335.45 239 335.45 238.99 335.44 238.99 374.94 264.61 374.94 264.61 367.83 246.44 367.83 246.44 358.69" />
                    <polygon class="cls-1"
                        points="233.12 200.23 233.12 100.98 200.04 100.98 200.04 134.07 166.96 134.07 166.96 167.15 200.04 167.15 200.04 233.31 233.12 233.31 233.12 233.31 266.2 233.31 266.2 200.23 233.12 200.23" />
                    <path class="cls-1"
                        d="M183.68,334.66c-4.55,0-8.11,1.41-10.69,4.23-2.58,2.82-3.86,6.79-3.86,11.91v8.8c0,5.27,1.29,9.28,3.86,12.02,2.57,2.75,6.15,4.12,10.69,4.12s8.11-1.38,10.69-4.12c2.57-2.75,3.86-6.76,3.86-12.02v-8.8c0-5.11-1.29-9.08-3.86-11.91-2.57-2.82-6.15-4.23-10.69-4.23ZM190.8,360.05c0,1.32-.11,2.52-.34,3.61-.23,1.09-.62,2.03-1.18,2.82-.56.79-1.3,1.4-2.2,1.83-.9.43-2.03.65-3.39.65s-2.48-.22-3.39-.65c-.9-.43-1.64-1.04-2.2-1.83-.56-.79-.96-1.73-1.18-2.82-.23-1.09-.34-2.3-.34-3.61v-9.7c0-1.24.12-2.41.39-3.49.26-1.09.67-2.03,1.24-2.82.56-.79,1.3-1.42,2.2-1.89.91-.47,1.99-.71,3.28-.71s2.38.23,3.28.71c.9.47,1.64,1.1,2.2,1.89.56.79.97,1.73,1.24,2.82.26,1.09.39,2.26.39,3.49v9.7Z" />
                    <path class="cls-1"
                        d="M228.97,338.39c-.99-.91-2.22-1.62-3.67-2.15-1.45-.52-3.11-.79-4.99-.79h-17.32v7.11h3.72v25.29h-3.72v7.12h17.32c1.88,0,3.54-.27,4.99-.79,1.45-.53,2.67-1.25,3.67-2.17.99-.92,1.75-2.01,2.26-3.28.51-1.26.76-2.63.76-4.09v-.67c0-2.26-.63-4.08-1.89-5.45-1.26-1.38-2.85-2.33-4.77-2.85v-1.02c1.91-.52,3.5-1.46,4.77-2.82,1.26-1.36,1.89-3.16,1.89-5.42v-.67c0-1.47-.25-2.83-.76-4.09-.51-1.26-1.26-2.34-2.26-3.24ZM224.89,363.44c0,1.58-.49,2.71-1.46,3.39-.98.68-2.26,1.02-3.84,1.02h-5.42v-9.15h5.42c1.58,0,2.86.35,3.84,1.02.98.67,1.46,1.8,1.46,3.39v.34ZM224.89,347.24c0,1.58-.49,2.7-1.46,3.35-.98.66-2.26.99-3.84.99h-5.42v-9.02h5.42c1.58,0,2.86.33,3.84.99.98.66,1.46,1.77,1.46,3.36v.34Z" />
                    <polygon class="cls-1"
                        points="134.54 200.17 134.54 67.84 101.45 67.84 101.45 100.17 67.82 100.17 67.82 133.25 101.45 133.25 101.45 200.17 67.82 200.17 67.82 233.26 167.07 233.26 167.07 200.17 134.54 200.17" />
                </svg>

            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav me-auto mb-2 mb-md-0">
                    <li class="nav-item">
                        <a class="nav-link active pt-2" aria-current="page" href="https://github.com/qadrLabs/hacktoberfest" target="_blank">Contribute here</a>
                    </li>
                    <li class="nav-item me-1">
                        <a class="nav-link pt-1 ps-1 pe-1" href="https://github.com/qadrLabs/hacktoberfest"><a class="github-button" href="https://github.com/qadrLabs/hacktoberfest" data-icon="octicon-star"
                            data-show-count="true" aria-label="Star qadrLabs/hacktoberfest on GitHub">Stars</a></a>
                    </li>
                    <li class="nav-item me-1">
                        <a href="https://github.com/qadrLabs/hacktoberfest" class="nav-link pt-1 ps-1 pe-1" target="_blank">
                        <a class="github-button" href="https://github.com/qadrLabs/hacktoberfest/fork" data-icon="octicon-repo-forked"
                            data-show-count="true" aria-label="Fork qadrLabs/hacktoberfest on GitHub">Fork</a>
                        </a>
                    </li>

                </ul>
                <div class="flex inputs mr-3">
                    <i class="fa fa-search"></i>
                    <input type="text" id="search" class="form-control" placeholder="Search Contributors..">
                </div>
                <div class="tdnn">
                    <div class="moon"></div>
                </div>
            </div>
        </div>
    </nav>


    <!-- Main Content -->
    <div class="content">
        <div class="container">
            <span class="heading"><b>CONTRIBUTORS</b> </span>
            <div class="heart"></div>

            <div class="d-flex justify-content-between align-items-center">
                <p class="rubberBand delay-4s subheading">Add yourself to the list if you contribute.</p>

            </div>
            <div>
                <a class="github-button" href="https://github.com/qadrLabs/hacktoberfest" data-icon="octicon-star"
                    data-size="large" data-show-count="true" aria-label="Star fineanmol/Hacktoberfest2023 on GitHub">To
                    Get "HacktoberFest-Accepted" label, Star ✩ the repo </a>
            </div>
            <hr style="width:90%">
        </div>
        <div class="container-fluid">
            <!-- Contributors will be displayed here -->
            <div class="box mx-auto my-5 justify-content-center" id="contributors" data-aos="zoom-in-down"></div>
        </div>
    </div>

    <div class="box mx-auto my-5 justify-content-center" id="box">
        <a data-aos="zoom-in-down" class="btn btn-outline-secondary btn-lg load-more" id="loadMore"><u>Load More</u></a>
    </div>


    <footer>
        <div class="footer-content">
            <h3>Hacktoberfest <span id="current-year-footer"></span></h3>
            <p>This Project is participating in <b>Hacktoberfest</b>. Copyright &copy; <span
                    id="current-year-copyright"></span>.</p>
            <div class="footer-menu">
                <ul class="socials">
                    <li><a href="" target="_blank"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li><a href="" target="_blank"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="" target="_blank"><i class="fa fa-instagram"></i></a></li>
                    <li><a href="" target="_blank"><i class="fa fa-linkedin-square"></i></a></li>
                </ul>
            </div>
        </div>
    </footer>

    <!-- JavaScript Dependencies -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>

    <script src="{{ asset('assets/contributors/contributorsList.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>

</html>
