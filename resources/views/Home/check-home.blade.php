@extends('layouts.main')

    <div class="content-holdder">
        <div class="row">
            <div class="col-12 col-sm">
                <div class="counter-box male-population">
                    <div class="counter">290</div>
                    <h2>Male Population</h2>
                </div>
            </div>
            <div class="col-12 col-sm">
                <div class="counter-box female-population">
                    <div class="counter">245</div>
                    <h2>Female Population</h2>
                </div>
            </div>
            <div class="col-12 col-sm">
                <div class="counter-box total-population">
                    <div class="counter">490</div>
                    <h2>Total Population</h2>
                </div>
            </div>

            <div class="col-12 col-sm">
                <div class="counter-box population_density">
                    <div class="counter">245</div>
                    <h2>Population Density</h2>
                </div>
            </div>


        </div>
    </div>
    <!--     <div class="graphs-row">
        <div class="row">
            <div class="col-md-6">
                <div class="chart-visual">
                    <div class="heading_filter_wrapper">
                        <h2> <span><img src="img/male.png" alt=""></span>Male Population</h2>
                        <div class="dropdown dropdown-menu-end">
                            <img src="./img/filter_icon.png" alt="" class="dropdown-toggle" data-bs-toggle="dropdown">

                            <ul class="dropdown-menu">
                              <li><a class="dropdown-item" href="#">Link 1</a></li>
                              <li><a class="dropdown-item" href="#">Link 2</a></li>
                              <li><a class="dropdown-item" href="#">Link 3</a></li>
                            </ul>
                          </div>
                    </div>
                    <div class="chart-holder" id="malePopulation"></div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="chart-visual">
                    <div class="heading_filter_wrapper">
                        <h2> <span><img src="img/female.png" alt=""></span>Female Population</h2>
                        <div class="dropdown dropdown-menu-end">
                            <img src="./img/filter_icon.png" alt="" class="dropdown-toggle" data-bs-toggle="dropdown">

                            <ul class="dropdown-menu">
                              <li><a class="dropdown-item" href="#">Link 1</a></li>
                              <li><a class="dropdown-item" href="#">Link 2</a></li>
                              <li><a class="dropdown-item" href="#">Link 3</a></li>
                            </ul>
                          </div>
                    </div>
                    <div class="chart-holder" id="femalePopulation"></div>
                </div>

            </div>
        </div>
    </div> -->


    <div class="filters-holder">
        <div class="filters-header">
            <div class="left">
                <img src="img/filters.png" alt="">
                <span>Filter</span>
            </div>
            <div class="plus-icon">+</div>
        </div>
        <div class="form-holder">
            <div class="row">
                <div class="col-md-10">
                    <label class="custom-select" for="styledSelect1">
                        <select id="styledSelect1" name="options">
                            <option value="">
                                Provinces
                            </option>
                            <option value="1">
                                Option 1
                            </option>
                            <option value="2">
                                Option 2
                            </option>
                            <option value="3">
                                Option 3
                            </option>
                            <option value="4">
                                Option 4
                            </option>
                        </select></label>
                </div>


                <div class="col-md-2">
                    <input type="submit" value="Search" class="search-btn">
                </div>
            </div>
        </div>
    </div>
    <div class="graphs-row">
        <div class="row">
            <div class="col-md-8">
                <div class="map-holder">
                    <!--    <h2>Mozanbique Map</h2> -->
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15514455.746319!2d25.12568632028678!3d-18.31491486618252!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x18d4aceae6fd4ac5%3A0x12bbbfb9ae16a115!2sMozambique!5e0!3m2!1sen!2s!4v1707102642936!5m2!1sen!2s"
                        style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
            <div class="col-md-4">
                <div class="chart-visual totals">
                    <div class="heading_filter_wrapper">
                        <h2> <span><img src="img/total-population.png" alt=""></span>Total Population</h2>
                        <div class="dropdown dropdown-menu-end">
                            <img src="./img/filter_icon.png" alt="" class="dropdown-toggle"
                                data-bs-toggle="dropdown">

                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Link 1</a></li>
                                <li><a class="dropdown-item" href="#">Link 2</a></li>
                                <li><a class="dropdown-item" href="#">Link 3</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="chart-holder" id="maleTotal"></div>
                </div>
                <div class="chart-visual totals">
                    <div class="heading_filter_wrapper">
                        <h2> <span><img src="img/total-population.png" alt=""></span>Total Population</h2>
                        <div class="dropdown dropdown-menu-end">
                            <img src="./img/filter_icon.png" alt="" class="dropdown-toggle"
                                data-bs-toggle="dropdown">

                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Link 1</a></li>
                                <li><a class="dropdown-item" href="#">Link 2</a></li>
                                <li><a class="dropdown-item" href="#">Link 3</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="chart-holder" id="femaleTotal"></div>
                </div>
            </div>
        </div>
    </div>



    <section class="section_tabs">
        <div class="content-holdder">

            <div class="pills_wrap">
                <ul class="nav nav-pills" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-bs-toggle="pill" href="#population">Population</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="pill" href="#maritalRatio">Marital Ratio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="pill" href="#illiteracyRate">Illiteracy Rate</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="pill" href="#dependency">Dependency</a>
                    </li>
                </ul>
            </div>



            <!-- Tab panes -->
            <div class="tab-content">
                <div id="population" class="tab-pane active">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="chart-visual totals">
                                <div class="heading_filter_wrapper">
                                    <h2> <span><img src="img/total-population.png" alt=""></span>Total
                                        Population</h2>
                                    <div class="dropdown dropdown-menu-end">
                                        <img src="./img/filter_icon.png" alt="" class="dropdown-toggle"
                                            data-bs-toggle="dropdown">

                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Link 1</a></li>
                                            <li><a class="dropdown-item" href="#">Link 2</a></li>
                                            <li><a class="dropdown-item" href="#">Link 3</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="chart-holder" id="chart1"></div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="chart-visual totals">
                                <div class="heading_filter_wrapper">
                                    <h2> <span><img src="img/total-population.png" alt=""></span>Total
                                        Population</h2>
                                    <div class="dropdown dropdown-menu-end">
                                        <img src="./img/filter_icon.png" alt="" class="dropdown-toggle"
                                            data-bs-toggle="dropdown">

                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Link 1</a></li>
                                            <li><a class="dropdown-item" href="#">Link 2</a></li>
                                            <li><a class="dropdown-item" href="#">Link 3</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="chart-holder" id="chart2"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="chart-visual totals">
                                <div class="heading_filter_wrapper">
                                    <h2> <span><img src="img/total-population.png" alt=""></span>Total
                                        Population</h2>
                                    <div class="dropdown dropdown-menu-end">
                                        <img src="./img/filter_icon.png" alt="" class="dropdown-toggle"
                                            data-bs-toggle="dropdown">

                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Link 1</a></li>
                                            <li><a class="dropdown-item" href="#">Link 2</a></li>
                                            <li><a class="dropdown-item" href="#">Link 3</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="chart-holder" id="chart3"></div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="chart-visual totals">
                                <div class="heading_filter_wrapper">
                                    <h2> <span><img src="img/total-population.png" alt=""></span>Total
                                        Population</h2>
                                    <div class="dropdown dropdown-menu-end">
                                        <img src="./img/filter_icon.png" alt="" class="dropdown-toggle"
                                            data-bs-toggle="dropdown">

                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Link 1</a></li>
                                            <li><a class="dropdown-item" href="#">Link 2</a></li>
                                            <li><a class="dropdown-item" href="#">Link 3</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="chart-holder" id="chart4"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="maritalRatio" class="tab-pane fade">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="chart-visual totals">
                                <div class="heading_filter_wrapper">
                                    <h2> <span><img src="img/total-population.png" alt=""></span>Total
                                        Population</h2>
                                    <div class="dropdown dropdown-menu-end">
                                        <img src="./img/filter_icon.png" alt="" class="dropdown-toggle"
                                            data-bs-toggle="dropdown">

                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Link 1</a></li>
                                            <li><a class="dropdown-item" href="#">Link 2</a></li>
                                            <li><a class="dropdown-item" href="#">Link 3</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <p>Chart One</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="chart-visual totals">
                                <div class="heading_filter_wrapper">
                                    <h2> <span><img src="img/total-population.png" alt=""></span>Total
                                        Population</h2>
                                    <div class="dropdown dropdown-menu-end">
                                        <img src="./img/filter_icon.png" alt="" class="dropdown-toggle"
                                            data-bs-toggle="dropdown">

                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Link 1</a></li>
                                            <li><a class="dropdown-item" href="#">Link 2</a></li>
                                            <li><a class="dropdown-item" href="#">Link 3</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <p>Chart Two</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="illiteracyRate" class="tab-pane fade"><br>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="chart-visual totals">
                                <div class="heading_filter_wrapper">
                                    <h2> <span><img src="img/total-population.png" alt=""></span>Total
                                        Population</h2>
                                    <div class="dropdown dropdown-menu-end">
                                        <img src="./img/filter_icon.png" alt="" class="dropdown-toggle"
                                            data-bs-toggle="dropdown">

                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Link 1</a></li>
                                            <li><a class="dropdown-item" href="#">Link 2</a></li>
                                            <li><a class="dropdown-item" href="#">Link 3</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <p>Chart Two</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="chart-visual totals">
                                <div class="heading_filter_wrapper">
                                    <h2> <span><img src="img/total-population.png" alt=""></span>Total
                                        Population</h2>
                                    <div class="dropdown dropdown-menu-end">
                                        <img src="./img/filter_icon.png" alt="" class="dropdown-toggle"
                                            data-bs-toggle="dropdown">

                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Link 1</a></li>
                                            <li><a class="dropdown-item" href="#">Link 2</a></li>
                                            <li><a class="dropdown-item" href="#">Link 3</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <p>Chart Two</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="dependency" class="tab-pane fade"><br>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="chart-visual totals">
                                <div class="heading_filter_wrapper">
                                    <h2> <span><img src="img/total-population.png" alt=""></span>Total
                                        Population</h2>
                                    <div class="dropdown dropdown-menu-end">
                                        <img src="./img/filter_icon.png" alt="" class="dropdown-toggle"
                                            data-bs-toggle="dropdown">

                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Link 1</a></li>
                                            <li><a class="dropdown-item" href="#">Link 2</a></li>
                                            <li><a class="dropdown-item" href="#">Link 3</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <p>Chart Two</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="chart-visual totals">
                                <div class="heading_filter_wrapper">
                                    <h2> <span><img src="img/total-population.png" alt=""></span>Total
                                        Population</h2>
                                    <div class="dropdown dropdown-menu-end">
                                        <img src="./img/filter_icon.png" alt="" class="dropdown-toggle"
                                            data-bs-toggle="dropdown">

                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Link 1</a></li>
                                            <li><a class="dropdown-item" href="#">Link 2</a></li>
                                            <li><a class="dropdown-item" href="#">Link 3</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <p>Chart Two</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="footer-holder">
        <div class="copyrights">&copy; 2024 Copyrights. All rights reserved.</div>
        <div class="footer-links">
            <a href="#">Home</a>
            <span>|</span>
            <a href="#">Growth Rate</a>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/linecharts.js"></script>
    <script src="https://canvasjs.com/assets/script/jquery.canvasjs.min.js"></script>


</body>

</html>
