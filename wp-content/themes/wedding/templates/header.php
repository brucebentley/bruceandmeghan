<header class="header app-bar" id="header" role="banner">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1 class="logo">
                    <a href="<?= esc_url(home_url('/')); ?>" rel="home">
                        <span class="him">Bruce</span>
                        <img src="images/icons/two-hearts-red.png" class="two-hearts red">
                        <span class="her">Meghan</span>
                    </a>
                </h1>
            </div>
            <div class="col-md-6">
                <h2 class="wedding-date pull-right">
                    <span class="day accent-color">Saturday,</span>
                    <span class="date-month">July 11,</span>
                    <span class="year accent-color">2015</span>
                </h2>
            </div>
        </div>
    </div>
</header>

<nav class="navbar navbar-default navbar-static-top" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <a href="<?= esc_url(home_url('/')); ?>" class="navbar-brand" rel="home">
                <img src="images/icons/two-hearts-red.png" alt="Bruce &amp; Meghan">
                <span class="initials">B<span>&amp;</span>M</span>
            </a>
            <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="sr-only">MENU</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <nav class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="nav navbar-nav">
                <li><a href="#" alt="Our Story">Our Story</a></li>
                <li><a href="#" alt="Photos">Photos</a></li>
                <li><a href="#" alt="The Events">The Events</a></li>
                <li><a href="#" alt="Groomsmen">Groomsmen</a></li>
                <li><a href="#" alt="Bridesmaids">Bridesmaids</a></li>
                <li><a href="#" alt="Registry">Registry</a></li>
                <li><a href="#" alt="RSVP">RSVP</a></li>
            </ul>
        </nav>
    </div>
</nav>
