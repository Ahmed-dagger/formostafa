<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/ltr.css') }}">
    <link rel="stylesheet" href="LoginRegister/LoginRegisterStyling.css">
    <link rel="stylesheet" href="LoginRegister/LoginRegisterStyling.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <title>{{ Config('app.name') }}</title>
</head>

<body>

    <header>
        <!-- Top Header -->
        <div class="top-header py-2 bg-light">
            <div class="container d-flex justify-content-between">
                <div class="row">
                    <div class="col-md-6 d-flex align-items-center">
                        <i class="fa fa-phone tph-icons mt-0 mx-1"></i> <span class="text-dark infos">(+88) 1990
                            6886</span>
                    </div>
                    <div class="col-md-6 d-flex align-items-center infoContainer">
                        <img width="16" height="16" class="mt-0 mx-1"
                            src="https://img.icons8.com/material-sharp/128/DB0000/mail.png" alt="mail" />
                        <span class="text-dark infos">agency@example.com</span>
                    </div>


                </div>
                <div class="user-actions align-items-center text-center justify-content-center row g-0">

                    <div class="justify-content-center text-center col-md-8 d-flex ">
                        <div class="container d-flex">
                                <a href="{{ route('Check') }}" class="text-dark text-center cardentials mr-2">Log in</a>
                                <a href="{{ route('Check') }}"
                                    class="text-dark cardentials infoContainer px-2 mx-2">Register</a>
                            </div>
                        </div>




                    <div class="container justify-content-center d-flex col-md-4">
                        <a href="#" class="ml-3"><i class="fab fa-twitter icons"></i></a>
                        <a href="#" class="ml-2"><i class="fab fa-facebook-f icons"></i></a>
                        <a href="#" class="ml-2"><i class="fab fa-instagram icons"></i></a>
                        <a href="#" class="ml-2"><i class="fab fa-linkedin-in icons"></i></a>

                    </div>


                </div>
            </div>
        </div>
        <!-- Main Header -->
        <div class="main-header py-3 bg-dark">
            <div class="container d-flex justify-content-between align-items-center">
                <div class="logo">
                    <a href="{{ route('home') }}"><img src="{{ asset('img/white-logo.png') }}" alt=""></a>
                </div>

                <nav class="navbar navbar-expand-lg">

                    <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                        <ul class="navbar-nav text-center">
                            <li class="nav-item  {{ request()->routeIS('home') ? 'active' : '' }}">
                                <a class="nav-link" href="{{ route('home') }}">Home
                                </a>
                            </li>
                            <li class="nav-item {{ request()->routeIs('courses') ? 'active' : '' }}">
                                <a class="nav-link" href="{{ route('courses') }}">
                                    Courses

                                </a>
                            </li>
                            <li class="nav-item dropdownmenu">
                                <a class="nav-link buttonDrop" href="#">
                                    Other
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708"/>
                                      </svg>
                                </a>
                                <div class="dropdown-content text-center" aria-labelledby="otherDropdown">
                                    <a class="text-center pt-2" id="top" href="ErrorPage.html">Subul+</a>
                                    <a class="text-center py-2" id="middle" href="ErrorPage.html">Our best</a>
                                    <a class="text-center pb-2" id="bottom" href="ErrorPage.html">Subulway</a>
                                </div>
                            </li>
                            <li class="nav-item  {{ request()->routeIs('About') ? 'active' : '' }}">
                                <a class="nav-link" href="{{ route('About') }}">
                                    About

                                </a>
                            </li>
                            <li class="nav-item  {{ request()->routeIs('Contact') ? 'active' : '' }}">
                                <a class="nav-link" href="{{ route('Contact') }}">
                                    Contact
                                </a>
                            </li>

                            <li class="nav-item">
                                <div class="dropdown">
                                    <button class="btn btn-light dropdown-toggle" type="button"
                                        id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                        Choose language
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                        <li><a class="dropdown-item " href="#" data-value="en">
                                                <img width="20" height="20"
                                                    src="https://img.icons8.com/color/120/great-britain-circular.png"
                                                    alt="great-britain-circular" />
                                                English</a></li>
                                        <li><a class="dropdown-item" href="#" data-value="ar">
                                                <img width="20" height="20"
                                                    src="https://img.icons8.com/color/120/saudi-arabia-circular.png"
                                                    alt="saudi-arabia-circular" />
                                                Arabic</a></li>
                                    </ul>
                                </div>
                            </li>

                        </ul>
                    </div>
                </nav>


                <div class="d-flex cartContainer">

                    <div class="cart text-right d-flex justify-content-end">
                        <a href="{{ route('cart.index') }}" id="cart-btn">
                            <script src="https://cdn.lordicon.com/lordicon.js"></script>
                            <lord-icon src="https://cdn.lordicon.com/taymdfsf.json" trigger="hover" stroke="bold"
                                colors="primary:#ffffff,secondary:#ffffff" style="width:30px;height:30px">
                            </lord-icon></i>

                                <!--the number of cart items-->
                                <span></span>
                            
                            
                        </a>
                    </div>
                </div>
                
                <!--MObile Menu-->
                <div class="d-lg-none Burger">
                    <nav id="sidebar" class="sidebar">
                        <div class="sidebar-header">
                            <img class="SideBarLogo" src="img/Switch-container.png" alt="">
                            <button type="button" class="close" aria-label="Close" id="sidebarCollapse">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <ul class="list-unstyled components">
                            <li class="MenuItem {{ request()->routeIS('home') ? 'active' : '' }}"><a href="/" class="linkItem">Home</a></li>
                            <li class="MenuItem {{ request()->routeIs('courses') ? 'active' : '' }}"><a href="courses"
                                    class="linkItem">Courses</a>
                            </li>
                            <li class="MenuItem"><a href="#otherSubmenu" data-bs-toggle="collapse"
                                    aria-expanded="false" class="dropdown-toggle linkItem">Other</a>
                                <ul class="collapse list-unstyled" id="otherSubmenu">
                                    <li><a href="ErrorPage.html" class="linkItem">Submenu 1</a></li>
                                    <li><a href="ErrorPage.html" class="linkItem">Submenu 2</a></li>
                                    <li><a href="ErrorPage.html" class="linkItem">Submenu 3</a></li>
                                </ul>
                            </li>
                            <li class="MenuItem {{ request()->routeIS('About') ? 'active' : '' }}"><a href="About" class="linkItem">About</a></li>
                            <li class="MenuItem {{ request()->routeIS('Contact') ? 'active' : '' }}"><a href="Contact" class="linkItem">Contact</a></li>
                            <li class="MenuItem">
                                        <div class="dropdown">
                                            <button class="btn btn-light dropdown-toggle" type="button"
                                                id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                                Choose language
                                            </button>
                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <li><a class="dropdown-item " href="#" data-value="en">
                                                        <img width="20" height="20"
                                                            src="https://img.icons8.com/color/120/great-britain-circular.png"
                                                            alt="great-britain-circular" />
                                                        English</a></li>
                                                <li><a class="dropdown-item" href="#" data-value="ar">
                                                        <img width="20" height="20"
                                                            src="https://img.icons8.com/color/120/saudi-arabia-circular.png"
                                                            alt="saudi-arabia-circular" />
                                                        Arabic</a></li>
                                            </ul>
                                        </div>
                                    </li>
                        </ul>

                        <!-- Auth section -->
                        <div class="container justify-content-center">
                            
                            <div class="container d-flex">
                                <a href="{{ route('Check') }}" class="text-light text-decoration-none text-center cardentials mr-2">Log in</a>
                                <a href="{{ route('Check') }}"
                                    class="text-light text-decoration-none cardentials border-left border-light border-1 pl-2">Register</a>
                            </div>

                    </div>
                
                    </nav>

                    <button type="button" id="sidebarCollapseBtn">
                        <i class="fas fa-align-left menuburgericon"></i>
                    </button>

                </div>


            </div>
        </div>
    </header>


    <div>
        {{-- Page Content --}}
        @yield('content')
    </div>




    <!-- Footer -->
    <footer class="footer mt-auto py-5 ">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <h5>FAQs</h5>
                    <ul class="list-unstyled">
                        <li><a href="#">About us</a></li>
                        <li><a href="#">Careers</a></li>
                        <li><a href="#">Contact us</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h5>Company</h5>
                    <ul class="list-unstyled">
                        <li><a href="#">Best Seller</a></li>
                        <li><a href="#">New Release</a></li>
                        <li><a href="#">Favourite</a></li>
                        <li><a href="#">Lorem ipsum</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h5>Details</h5>
                    <ul class="list-unstyled">
                        <li class="text-light">Corniche El-Nile 2005C</li>
                        <li class="text-light">+20 1234567890</li>
                        <li><a href="mailto:email@email.com">email@email.com</a></li>
                        <li><a href="mailto:email@email.com">email@email.com</a></li>
                    </ul>
                </div>
                <div class="col-md-3 text-center">
                    <img src="{{ asset('img/white-logo.png') }}" alt="Turuq Logo" class="mb-3">
                    <p class="text-light">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    </p>
                    <div class="social-links justify-content-center text-center">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-2  text-center">
                    <a href="#">Privacy policy</a>
                </div>
                <div class="col-md-2 text-center">
                    <a href="#">Legal notice</a>
                </div>
                <div class="col-md-2 text-center">
                    <a href="#">Terms of service</a>
                </div>
                <div class="col-md-6 text-center">
                    <p class="text-light copyright">&copy; 2024 Belton is Proudly Powered by <a href="#"
                            class="text-danger">Turuq</a></p>
                </div>
            </div>
        </div>
    </footer>

    <button type="button" class="btn btn-dark back-to-top" id="back-to-top">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
            class="bi bi-arrow-up" viewBox="0 0 16 16">
            <path fill-rule="evenodd"
                d="M8 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L7.5 2.707V14.5a.5.5 0 0 0 .5.5" />
        </svg>
    </button>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="{{ asset('js/burger-menu.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const dropdownItems = document.querySelectorAll('.dropdown-item');
            const dropdownToggle = document.getElementById('dropdownMenuButton1');
            const currentUrl = window.location.href;

            if (currentUrl.includes('/en')) {
                dropdownToggle.textContent = 'English';
            } else if (currentUrl.includes('/ar')) {
                dropdownToggle.textContent = 'Arabic';
            }

            dropdownItems.forEach(item => {
                item.addEventListener('click', function(e) {
                    e.preventDefault(); // Prevent the default link behavior
                    const selectedText = this.textContent;
                    dropdownToggle.textContent = selectedText;
                });
            });
        });
        
    </script>
    <script>
        AOS.init({

            offset: 200, // Offset (in px) from the original trigger point
            duration: 1000, // Duration of animation (in ms)
            easing: 'ease-in-out-sine', // Easing function
            delay: 100, // Delay before the animation starts (in ms)
            once: true, // Whether animation should happen only once - while scrolling down
            mirror: false, // Whether elements should animate out while scrolling past them
        });
    </script>



</body>

</html>
