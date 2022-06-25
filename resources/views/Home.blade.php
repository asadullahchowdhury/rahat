@extends('Layout.layout')
@section('content')
    <div class="page">
    <!---------------->
        <!--Home Section-->
    <!---------------->
    <div class="home-section" id="Home" >
        <div class="home-wrapper" >
            <div class="greeting" data-aos="fade-left" >Hello,</div>
            <div class="intro" data-aos="fade-left"  data-aos-duration="500">I'<span class="text-theme">m,</span> Md. Asadullah
                <br> <span class="text-theme">Chowdhury</span></div>
            <div class="download" data-aos="fade-left"  data-aos-duration="1000">
                <button class="btn-theme">Download CV</button>
            </div>
        </div>
    </div>

    <!------------>
        <!--About Me-->
    <!------------>
    <div class="about-me" id="AboutMe">
        <div class="container">
            <div class="row">
                <div class="col image" data-aos="fade-right"  data-aos-duration="500">
                    <div class="image">
                        <img src="{{asset('images/rahat.jpg')}}" alt="">
                    </div>
                </div>
                <div class="col " data-aos="fade-left"  data-aos-duration="500">
                    <div class="section-title"> <span class="text-theme">About</span> Me</div>
                    <br>
                    <div class="des">
                        Hi! I am Md. Asadullah Chowdhury and I am introducing myself as a
                        Full Stack Web Developer. I have been working as a Web Developer for
                        almost 4 years. I like to work with new technologies and learn new
                        things. <br> <br>
                        I am experienced with developing professional web applications using
                        PHP, Laravel, ReactJS, Redux, VueJS, Vuex, Vue Router, Angular cli,
                        ngrx and Axios. I have also worked on Laravel VueJS SPA project.
                        I also have a good understanding of project algorithms which helps me
                        understand and manage project requirements easily and accurately.
                        I am familiar with Laravel MVC Pattern and the huge package library of
                        Laravel. <br> <br>
                        I love to study new technologies and develop my skill set and I try to
                        give best effort to my projects.
                    </div>
                    <br>
                    <div class="social-links">
                        <a href="javascript:void(0)"><i class="lab la-facebook-f"></i></a>
                        <a href="javascript:void(0)"><i class="lab la-github"></i></a>
                        <a href="javascript:void(0)"><i class="lab la-linkedin-in"></i></a>
                    </div>
                    <br>
                    <div class="info">
                            <div class="left">
                                <div class="each-info">
                                    <span>Age: </span>
                                    &nbsp;
                                    <span>24</span>
                                </div>
                                <div class="each-info">
                                    <span>Degree: </span>
                                    &nbsp;
                                    <span>Master</span>
                                </div>
                                <div class="each-info">
                                    <span>Phone : </span>
                                    &nbsp;
                                    <span><a href="tel:01701011847">01701011847</a></span>
                                </div>
                            </div>
                            <div class="right">
                                <div class="each-info">
                                    <span>Location : </span>
                                    &nbsp;
                                    <span>Shahi Tower, Sector 7, Plot k/25,Jessore, Khulna, Bangladesh</span>
                                </div>
                                <div class="each-info">
                                    <span>Mail : </span>
                                    &nbsp;
                                    <span><a href="mailto:asadullah_chowdhury@outlook.com"> asadullah_chowdhury@outlook.com</a></span>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--------------->
        <!--My Services-->
    <!--------------->
    <div class="my-services section-dark" id="Services">
        <div class="container">
            <div class="title-des" data-aos="fade-left"  data-aos-duration="500">WHAT I DO</div>
            <div class="section-title" data-aos="fade-left"  data-aos-duration="800"><span class="text-theme">My</span> Services</div>
            <br>
            <div class="all-services">
                <div class="services-flip " data-aos="fade-left"  data-aos-duration="500">
                    <div class="services-list">
                        <div class="services-list-front services-list-1" style="background-image: url({{asset('images/web_design.jpg')}})">
                            <div class="flip-content">
                                <h5 class="mb-0">Web Design</h5>
                            </div>
                        </div>
                        <div class="services-list-back">
                            <div class="flip-content">
                                <div class="services-list-icon">
                                    <i class="las la-brush"></i>
                                </div>
                                <div class="mt-4">
                                    <h5 class="mb-0">Web Design</h5>
                                    <p class=" mt-3">
                                        Designing your product plays an important role for the future of the product. A user friendly look and futuristic design is loved by all kind of users
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="services-flip " data-aos="fade-left"  data-aos-duration="700">
                    <div class="services-list">
                        <div class="services-list-front services-list-1" style="background-image: url({{asset('images/web_development.jpg')}})">
                            <div class="flip-content">
                                <h5 class="mb-0">Web Development</h5>
                            </div>
                        </div>
                        <div class="services-list-back">
                            <div class="flip-content">
                                <div class="services-list-icon">
                                    <i class="las la-palette"></i>
                                </div>
                                <div class="mt-4">
                                    <h5 class="mb-0">Web Development</h5>
                                    <p class=" mt-3">I manage this part based on PHP, Laravel, Bootstrap, Vue.Js, Angular, React and all modern web services to build a smooth and upgrade solution for an Application.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="services-flip " data-aos="fade-left"  data-aos-duration="900">
                    <div class="services-list"  >
                        <div class="services-list-front services-list-1" style="background-image: url({{asset('images/mobile-app.jpg')}})">
                            <div class="flip-content">
                                <h5 class="mb-0">Mobile Application</h5>
                            </div>
                        </div>
                        <div class="services-list-back">
                            <div class="flip-content">
                                <div class="services-list-icon">
                                    <i class="las la-mobile"></i>
                                </div>
                                <div class="mt-4">
                                    <h5 class="mb-0">Mobile Application</h5>
                                    <p class=" mt-3">Our main tools are React native and Flutter to build a native Android and iOS application by one writing and both solution formula to manage clients time and financial budget.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="services-flip " data-aos="fade-left"  data-aos-duration="500">
                    <div class="services-list">
                        <div class="services-list-front services-list-1" style="background-image: url({{asset('images/cross_platform.jpg')}})">
                            <div class="flip-content">
                                <h5 class="mb-0">Cross Platform & Hybrid Application</h5>
                            </div>
                        </div>
                        <div class="services-list-back">
                            <div class="flip-content">
                                <div class="services-list-icon">
                                    <i class="las la-mobile"></i>
                                </div>
                                <div class="mt-4">
                                    <h5 class="mb-0">Cross Platform & Hybrid Application</h5>
                                    <p class=" mt-3">
                                        To build a hybrid and Cross platform application solution I prefer Ionic, Cordova, Electron.Js to build Mobile and Desktop Application
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="services-flip " data-aos="fade-left"  data-aos-duration="700">
                    <div class="services-list">
                        <div class="services-list-front services-list-1" style="background-image: url({{asset('images/analysis.jpg')}})">
                            <div class="flip-content">
                                <h5 class="mb-0">Project Analysis and Architecture</h5>
                            </div>
                        </div>
                        <div class="services-list-back">
                            <div class="flip-content">
                                <div class="services-list-icon">
                                    <i class="las la-project-diagram"></i>
                                </div>
                                <div class="mt-4">
                                    <h5 class="mb-0">Project Analysis and Architecture</h5>
                                    <p class=" mt-3">
                                        I analysis clients idea and business logic and create a development plan with full project architecture by making Minimum Time Budget and Dev Power.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="services-flip " data-aos="fade-left"  data-aos-duration="900">
                    <div class="services-list">
                        <div class="services-list-front services-list-1" style="background-image: url({{asset('images/database.jpg')}})">
                            <div class="flip-content">
                                <h5 class="mb-0">Database Design and Scaling</h5>
                            </div>
                        </div>
                        <div class="services-list-back">
                            <div class="flip-content">
                                <div class="services-list-icon">
                                    <i class="las la-server"></i>
                                </div>
                                <div class="mt-4">
                                    <h5 class="mb-0">Database Design and Scaling</h5>
                                    <p class=" mt-3">
                                        For new or existing application if there need re-decoration or scaling up the Database to make system faster and more organised or if need split u database or any NoSql database plan I manage these full requirement within short time.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!------------>
        <!--My Works-->
    <!------------>
    <div class="my-works " id="Works">
        <div class="container">
            <div class="title-des" data-aos="fade-left"  data-aos-duration="500">PORTFOLIO</div>
            <div class="section-title" data-aos="fade-left"  data-aos-duration="800"><span class="text-theme">My</span>  Works</div>
            <br>
            <div class="all-projects">
                <div data-aos="fade-left"  data-aos-duration="500" class="services-flip " >
                    <div class="services-list">
                        <div class="services-list-front services-list-1" style="background-image: url({{asset('images/smaty.png')}})">
                            <div class="flip-content">
                                <h5 class="mb-0">Smaty</h5>
                            </div>
                        </div>
                        <div class="services-list-back">
                            <div class="flip-content">
                                <div class="services-list-icon">
                                </div>
                                <div class="mt-4">
                                    <a target="_blank" href="https://smaty.akg.sa/" class="mb-0">Smaty</a>
                                    <p class=" mt-3 text-center">
                                        Educational Website
                                        <br>
                                        Laravel, Laravel Vue Spa, Bootstrap, Jquery
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div data-aos="fade-left"  data-aos-duration="700" class="services-flip " >
                    <div class="services-list">
                        <div class="services-list-front services-list-1" style="background-image: url({{asset('images/elaqa.png')}})">
                            <div class="flip-content">
                                <h5 class="mb-0">Elaqa</h5>
                            </div>
                        </div>
                        <div class="services-list-back">
                            <div class="flip-content">
                                <div class="services-list-icon">
                                </div>
                                <div class="mt-4">
                                    <a target="_blank" href="https://elaqa.akg.sa/" class="mb-0">Elaqa</a>
                                    <p class=" mt-3 text-center">
                                        Educational Website
                                        <br>
                                        Laravel, Laravel Vue Spa, Bootstrap, Jquery
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div data-aos="fade-left"  data-aos-duration="500" class="services-flip " >
                    <div class="services-list">
                        <div class="services-list-front services-list-1" style="background-image: url({{asset('images/elaqa.png')}})">
                            <div class="flip-content">
                                <h5 class="mb-0">Aljilani</h5>
                            </div>
                        </div>
                        <div class="services-list-back">
                            <div class="flip-content">
                                <div class="services-list-icon">
                                </div>
                                <div class="mt-4">
                                    <a target="_blank" href="http://www.jilani.com.sa/en" class="mb-0">Aljilani</a>
                                    <p class=" mt-3 text-center">
                                        Educational Website
                                        <br>
                                        Laravel, Laravel Vue Spa, Bootstrap, Jquery
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div data-aos="fade-left"  data-aos-duration="700" class="services-flip " >
                    <div class="services-list">
                        <div class="services-list-front services-list-1" style="background-image: url({{asset('images/medaris.png')}})">
                            <div class="flip-content">
                                <h5 class="mb-0">Me Daris</h5>
                            </div>
                        </div>
                        <div class="services-list-back">
                            <div class="flip-content">
                                <div class="services-list-icon">
                                </div>
                                <div class="mt-4">
                                    <a target="_blank" href="https://me.daaris.com/ar" class="mb-0">Me Daris</a>
                                    <p class=" mt-3 text-center">
                                        Company Portfolio Website
                                        <br>
                                        Laravel, Laravel Vue Spa, Bootstrap, Jquery
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div data-aos="fade-left"  data-aos-duration="500" class="services-flip " >
                    <div class="services-list">
                        <div class="services-list-front services-list-1" style="background-image: url({{asset('images/habib.png')}})">
                            <div class="flip-content">
                                <h5 class="mb-0">Habib Computers</h5>
                            </div>
                        </div>
                        <div class="services-list-back">
                            <div class="flip-content">
                                <div class="services-list-icon">
                                </div>
                                <div class="mt-4">
                                    <a target="_blank" href="https://www.habibcomputer.com.bd/" class="mb-0">Habib Computers</a>
                                    <p class=" mt-3 text-center">
                                        Basic E-commerce site sells Computer accessories
                                        <br>
                                        Laravel, Blade Templating, Jquery, Bootstrap, MySQL
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div data-aos="fade-left"  data-aos-duration="700" class="services-flip " >
                    <div class="services-list">
                        <div class="services-list-front services-list-1" style="background-image: url({{asset('images/client.png')}})">
                            <div class="flip-content">
                                <h5 class="mb-0">Client Universe</h5>
                            </div>
                        </div>
                        <div class="services-list-back">
                            <div class="flip-content">
                                <div class="services-list-icon">
                                </div>
                                <div class="mt-4">
                                    <a target="_blank" href="https://health-care-authenticati-21857.web.app/" class="mb-0">Client Universe</a>
                                    <p class=" mt-3 text-center">
                                        Demo Hospital Website
                                        <br>
                                        MERN Stack
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div data-aos="fade-left"  data-aos-duration="500" class="services-flip " >
                    <div class="services-list">
                        <div class="services-list-front services-list-1" style="background-image: url({{asset('images/movie.png')}})">
                            <div class="flip-content">
                                <h5 class="mb-0">Movie Gallery</h5>
                            </div>
                        </div>
                        <div class="services-list-back">
                            <div class="flip-content">
                                <div class="services-list-icon">
                                </div>
                                <div class="mt-4">
                                    <a target="_blank" href="https://dazzling-haupia-3fe761.netlify.app/" class="mb-0">Movie Gallery</a>
                                    <p class=" mt-3 text-center">
                                        Demo movie download site
                                        <br>
                                        MERN Stack
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!----------------->
        <!--My Expertises-->
    <!----------------->
    <div class="my-expertises section-dark" id="Expertises">
        <div class="container">
            <div class="title-des" data-aos="fade-left"  data-aos-duration="500"> RESUME</div>
            <div class="section-title" data-aos="fade-left"  data-aos-duration="500"><span class="text-theme">My</span> Expertises</div>
            <br>
            <div class="all-expertises">
                <div class="each-expertises-section">
                    <div class="left" data-aos="fade-left"  data-aos-duration="500">
                       <div class="section-subHead" >  <span class="text-theme">My</span> Education</div>
                    </div>
                    <div class="right"  data-aos="fade-left"  data-aos-duration="500">
                        <div class="ExperienceList">
                            <div class="resume-list" >
                                <div class="degree">Bachelor of Science</div>
                                <div class="badge-primary">2017-2020</div>
                                <div class="text">Manarat International University
                                    Department of Computer Science Engineering
                                </div>
                            </div>
                            <div class="resume-list" >
                                <div class="degree">H.S.C</div>
                                <div class="badge-primary">2015-2016</div>
                                <div class="text">Santahar govt. college</div>
                            </div>
                            <div class="resume-list">
                                <div class="degree">S.S.C</div>
                                <div class="badge-primary">2013-2014</div>
                                <div class="text">Sammilani Institution, jessore
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <hr>
                <br>
                <div class="each-expertises-section"  data-aos="fade-left"  data-aos-duration="500">
                    <div class="left">
                        <div class="section-subHead">  <span class="text-theme">My</span> Skills</div>
                    </div>
                    <div class="right">
                        <div class="all-skills">
                            <div class="section-left">
                                <div class="each-skill">
                                    <label>HTML</label>
                                    <div class="progress">
                                        <div class="progress-bar"></div>
                                    </div>
                                </div>
                                <div class="each-skill">
                                    <label>CSS3 / SCSS</label>
                                    <div class="progress">
                                        <div class="progress-bar"></div>
                                    </div>
                                </div>
                                <div class="each-skill">
                                    <label>PHP</label>
                                    <div class="progress">
                                        <div class="progress-bar"></div>
                                    </div>
                                </div>
                                <div class="each-skill">
                                    <label>JAVASCRIPT</label>
                                    <div class="progress">
                                        <div class="progress-bar"></div>
                                    </div>
                                </div>
                                <div class="each-skill">
                                    <label>NodeJs</label>
                                    <div class="progress">
                                        <div class="progress-bar"></div>
                                    </div>
                                </div>
                                <div class="each-skill">
                                    <label>Python (Basic)</label>
                                    <div class="progress">
                                        <div class="progress-bar"></div>
                                    </div>
                                </div>
                                <div class="each-skill">
                                    <label>Bootstrap</label>
                                    <div class="progress">
                                        <div class="progress-bar"></div>
                                    </div>
                                </div>
                                <div class="each-skill">
                                    <label>Materialize CSS</label>
                                    <div class="progress">
                                        <div class="progress-bar"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="section-right">
                                <div class="each-skill">
                                    <label>Laravel</label>
                                    <div class="progress">
                                        <div class="progress-bar"></div>
                                    </div>
                                </div>
                                <div class="each-skill">
                                    <label>handlebarsJS</label>
                                    <div class="progress">
                                        <div class="progress-bar"></div>
                                    </div>
                                </div>
                                <div class="each-skill">
                                    <label>Angular CLI</label>
                                    <div class="progress">
                                        <div class="progress-bar"></div>
                                    </div>
                                </div>
                                <div class="each-skill">
                                    <label>jQuery</label>
                                    <div class="progress">
                                        <div class="progress-bar"></div>
                                    </div>
                                </div>
                                <div class="each-skill">
                                    <label>VueJS</label>
                                    <div class="progress">
                                        <div class="progress-bar"></div>
                                    </div>
                                </div>
                                <div class="each-skill">
                                    <label>ReactJS</label>
                                    <div class="progress">
                                        <div class="progress-bar"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <hr>
                <br>
                <div class="each-expertises-section"  data-aos="fade-left"  data-aos-duration="500">
                    <div class="left">
                        <div class="section-subHead">  <span class="text-theme">Tools</span>  </div>
                    </div>
                    <div class="right">
                        <div class="all-skills">
                            <div class="section-left">
                                <span class="title-des">Grunt</span>
                                <span class="title-des">Gulp</span>
                                <span class="title-des">SCSS</span>
                            </div>
                            <div class="section-right">
                                <span class="title-des">NPM</span>
                                <span class="title-des">Apache</span>
                                <span class="title-des">Composer</span>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <hr>
                <br>
                <div  data-aos="fade-left"  data-aos-duration="500" class="each-expertises-section">
                    <div class="left">
                        <div class="section-subHead">  <span class="text-theme">Source </span> Control </div>
                    </div>
                    <div class="right">
                        <div class="all-skills">
                            <div class="section-left">
                                <span class="title-des">Subversion</span>
                                <span class="title-des">GIT</span>
                            </div>
                            <div class="section-right">
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <hr>
                <br>
                <div  data-aos="fade-left"  data-aos-duration="500" class="each-expertises-section">
                    <div class="left">
                        <div class="section-subHead">  <span class="text-theme">Project </span> Management </div>
                    </div>
                    <div class="right">
                        <div class="all-skills">
                            <div class="section-left">
                                <span class="title-des">JIRA</span>
                                <span class="title-des">Trello</span>
                            </div>
                            <div class="section-right">
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <hr>
                <br>
                <div  data-aos="fade-left"  data-aos-duration="500" class="each-expertises-section">
                    <div class="left">
                        <div class="section-subHead">  <span class="text-theme">Database </span> </div>
                    </div>
                    <div class="right">
                        <div class="all-skills">
                            <div class="section-left">
                                <span class="title-des">MySQL</span>
                                <span class="title-des">MongoDB</span>
                            </div>
                            <div class="section-right">
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <hr>
                <br>
                <div  data-aos="fade-left"  data-aos-duration="500" class="each-expertises-section">
                    <div class="left">
                        <div class="section-subHead">  <span class="text-theme">OS </span> </div>
                    </div>
                    <div class="right">
                        <div class="all-skills">
                            <div class="section-left">
                                <span class="title-des">Linux (Ubuntu20.04)</span>
                                <span class="title-des">MacOS</span>
                            </div>
                            <div class="section-right">
                                <span class="title-des">Windows</span>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <hr>
                <br>
                <div  data-aos="fade-left"  data-aos-duration="500" class="each-expertises-section">
                    <div class="left">
                        <div class="section-subHead">  <span class="text-theme">Server </span> Management</div>
                    </div>
                    <div class="right">
                        <div class="all-skills">
                            <div class="section-left">
                                <span class="title-des">Ubuntu Server</span>
                            </div>
                            <div class="section-right">
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <hr>
                <br>
                <div  data-aos="fade-left"  data-aos-duration="500" class="each-expertises-section">
                    <div class="left">
                        <div class="section-subHead">  <span class="text-theme">Language </span> Skills</div>
                    </div>
                    <div class="right">
                        <div class="all-skills">
                            <div class="section-left">
                                <span class="title-des">Bangla (Native Tongue)</span>
                                <span class="title-des">English</span>
                            </div>
                            <div class="section-right">
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <hr>
                <br>
                <div  data-aos="fade-left"  data-aos-duration="500" class="each-expertises-section">
                    <div class="left">
                        <div class="section-subHead">  <span class="text-theme">INTERESTS</span> AND ACTIVITIES</div>
                    </div>
                    <div class="right">
                        <div class="all-skills">
                            <div class="section-left">
                                <span class="title-des">Developing skill set and learn new technologies</span>
                                <span class="title-des">Watching IMDB Top Rated Movie</span>
                            </div>
                            <div class="section-right">
                                <div class="title-des">Playing Football</div>
                                <div class="title-des">Playing Video Games</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!----------------->
        <!--Work Together-->
    <!----------------->
    <div class="work-together" id="WorkTogether" style="background-image: url({{asset('images/work.jpg')}})">
        <div class="work-title"  data-aos="fade-down"  data-aos-duration="500">Let's Work Together!</div>
        <div class="bar"  data-aos="fade-down"  data-aos-duration="500"></div>
        <br>
        <br>
        <button class="btn btn-theme"  data-aos="fade-down"  data-aos-duration="500">Hire</button>
    </div>


    <!-------------->
        <!--Contact Me-->
    <!-------------->
    <div class="contact section-dark" id="Contact">
        <div class="container">
            <div class="title-des" data-aos="fade-left"  data-aos-duration="500"> SAY HELLO</div>
            <div class="section-title" data-aos="fade-left"  data-aos-duration="500"> Contact</div>
            <br><br>
            <div class="get-in-touch" data-aos="fade-left"  data-aos-duration="500"><span class="text-theme">Get</span> In Touch</div>
            <br><br>
            <div class="contact-info-wrapper">
                <div class="contact-info" data-aos="fade-left"  data-aos-duration="500">
                    <div class="icon"><i class="las la-map-marked"></i></div>
                    <div class="info">Shahi Tower, Sector 7, Plot k/25,
                        Jessore, Khulna, Bangladesh</div>
                    <div class="info-title">Address</div>
                </div>
                <div class="contact-info" data-aos="fade-left"  data-aos-duration="800">
                    <div class="icon"><i class="las la-mobile"></i></div>
                    <a href="tel:01701011847" class="info">01701011847</a>
                    <div class="info-title">Call me</div>
                </div>
                <div class="contact-info" data-aos="fade-left"  data-aos-duration="1200">
                    <div class="icon"><i class="las la-envelope"></i></div>
                    <a  class="info" href="mailto:asadullah_chowdhury@outlook.com">asadullah_chowdhury@outlook.com</a>
                    <div class="info-title">Email me</div>
                </div>
            </div>
            <br><br>
            <div class="get-in-touch" data-aos="fade-left"  data-aos-duration="500"><span class="text-theme">Contact</span> Form</div>
            <br><br>
            <div class="contactForm">
                <div class="row">
                    <div class="col-6 mb-3" data-aos="fade-left"  data-aos-duration="500">
                        <input type="text" class="form-control" placeholder="Your Name*">
                    </div>
                    <div class="col-6 mb-3" data-aos="fade-left"  data-aos-duration="700">
                        <input type="text" class="form-control" placeholder="Your Email*">
                    </div>
                    <div class="col-12 mb-3" data-aos="fade-left"  data-aos-duration="700">
                        <input type="text" class="form-control" placeholder="Your Subject..">
                    </div>
                    <div class="col-12 mb-3" data-aos="fade-left"  data-aos-duration="700">
                        <textarea class="form-control" placeholder="Your Message.."></textarea>
                    </div>
                    <div class="col-12 text-center mt-3" data-aos="fade-down"  data-aos-duration="700">
                        <button class="btn btn-theme">Send</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
