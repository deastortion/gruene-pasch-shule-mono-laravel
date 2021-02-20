<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>


    <link rel="stylesheet"
        href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="/assets/css/backend/main.css">
</head>

<body>
    <input type="checkbox" name="nav-toggle" id="nav-toggle">
    <div class="sidebar">
        <div class="sidebar__brand">
            <h2>
                <span class="lab la-pagelines"></span>

                <span>Gruene Schule</span>
            </h2>
        </div>
        <nav class="sidebar__menu">
            <ul>
                <li>
                    <a href="#" class="active">
                        <span class="las la-igloo"></span>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="las la-clipboard-list"></span>
                        <span>Events</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="las la-users"></span>
                        <span>Users</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="las la-door-open"></span>
                        <span>Messages</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
    <div class="body">
        <header class="header">
            <h2 class="header__title">
                <label for="nav-toggle">
                    <span class="las la-bars"></span>
                </label>
                Dashboard
            </h2>
            <div class="header__search-wrapper">
                <span class="las la-search"></span>
                <input type="search" placeholder="Search ...">
            </div>
            <div class="header__user-wrapper">
                <span class="las la-user"></span>
                <div>
                    <h4>John Doe</h4>
                    <small>Super admin</small>
                </div>
            </div>
        </header>
        <main class="content">
            <div class="cards">
                <div class="card card_single">
                    <div class="card__text">
                        <h1>54</h1>
                        <span>Users</span>
                    </div>
                    <div class="card__icon">
                        <span class="las la-users"></span>
                    </div>
                </div>
                <div class="card card_single">
                    <div class="card__text">
                        <h1>32</h1>
                        <span>Events</span>
                    </div>
                    <div class="card__icon">
                        <span class="las la-clipboard-list"></span>
                    </div>
                </div>
                <div class="card card_single">
                    <div class="card__text">
                        <h1>197</h1>
                        <span>Comments</span>
                    </div>
                    <div class="card__icon">
                        <span class="las la-users"></span>
                    </div>
                </div>
                <div class="card card_single">
                    <div class="card__text">
                        <h1>5</h1>
                        <span>Staff</span>
                    </div>
                    <div class="card__icon">
                        <span class="las la-user-friends"></span>
                    </div>
                </div>
            </div>

            <div class="recent_grid">
                <div class="events">
                    <div class="card">
                        <div class="card__header">
                            <h2>Recent Events</h2>
                            <button>See all <span class="las la-arrow-right"></span></button>
                        </div>
                        <div class="card__body">
                            <div class="table_responsive">
                                <table width='100%'>
                                    <thead>
                                        <td>#</td>
                                        <td>Title</td>
                                        <td>Description</td>
                                        <td>Date of creation</td>
                                        <td>Status</td>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>First Event ever</td>
                                            <td>Okay. here is the description</td>
                                            <td>2021, 14th of February</td>
                                            <td>
                                                <span class="status green"></span>
                                                Published
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Second Event ever</td>
                                            <td>Okay. here is the description</td>
                                            <td>2021, 15th of February</td>
                                            <td>
                                                <span class="status green"></span>
                                                Published
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Third Event ever</td>
                                            <td>Okay. here is the description</td>
                                            <td>2021, 16th of February</td>
                                            <td>
                                                <span class="status orange"></span>
                                                Pending
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Third Event ever</td>
                                            <td>Okay. here is the description</td>
                                            <td>2021, 16th of February</td>
                                            <td>
                                                <span class="status orange"></span>
                                                Pending
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Third Event ever</td>
                                            <td>Okay. here is the description</td>
                                            <td>2021, 16th of February</td>
                                            <td>
                                                <span class="status orange"></span>
                                                Pending
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Third Event ever</td>
                                            <td>Okay. here is the description</td>
                                            <td>2021, 16th of February</td>
                                            <td>
                                                <span class="status orange"></span>
                                                Pending
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>3</td>
                                            <td>Third Event ever</td>
                                            <td>Okay. here is the description</td>
                                            <td>2021, 16th of February</td>
                                            <td>
                                                <span class="status orange"></span>
                                                Pending
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Third Event ever</td>
                                            <td>Okay. here is the description</td>
                                            <td>2021, 16th of February</td>
                                            <td>
                                                <span class="status orange"></span>
                                                Pending
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Third Event ever</td>
                                            <td>Okay. here is the description</td>
                                            <td>2021, 16th of February</td>
                                            <td>
                                                <span class="status orange"></span>
                                                Pending
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="users">
                    <div class="card">
                        <div class="card__header">
                            <h2>New users</h2>
                            <button>See all <span class="las la-arrow-right"></span></button>
                        </div>
                        <div class="card__body">
                            <div class="user">
                                <div class="info">
                                    <img src="/assets/img/profile.jpg" alt="" width="40px" height="40px">
                                    <div>
                                        <h4>Lewis S. Cunningham</h4>
                                        <small>SEO expert</small>
                                    </div>
                                </div>
                                <div class="contact">
                                    <span class="las la-user-circle"></span>
                                    <span class="las la-comment"></span>
                                    <span class="las la-phone"></span>

                                </div>
                            </div>
                            <div class="user">
                                <div class="info">
                                    <img src="/assets/img/profile.jpg" alt="" width="40px" height="40px">
                                    <div>
                                        <h4>Lewis S. Cunningham</h4>
                                        <small>SEO expert</small>
                                    </div>
                                </div>
                                <div class="contact">
                                    <span class="las la-user-circle"></span>
                                    <span class="las la-comment"></span>
                                    <span class="las la-phone"></span>

                                </div>
                            </div>
                            <div class="user">
                                <div class="info">
                                    <img src="/assets/img/profile.jpg" alt="" width="40px" height="40px">
                                    <div>
                                        <h4>Lewis S. Cunningham</h4>
                                        <small>SEO expert</small>
                                    </div>
                                </div>
                                <div class="contact">
                                    <span class="las la-user-circle"></span>
                                    <span class="las la-comment"></span>
                                    <span class="las la-phone"></span>

                                </div>
                            </div>
                            <div class="user">
                                <div class="info">
                                    <img src="/assets/img/profile.jpg" alt="" width="40px" height="40px">
                                    <div>
                                        <h4>Lewis S. Cunningham</h4>
                                        <small>SEO expert</small>
                                    </div>
                                </div>
                                <div class="contact">
                                    <span class="las la-user-circle"></span>
                                    <span class="las la-comment"></span>
                                    <span class="las la-phone"></span>

                                </div>
                            </div>
                            <div class="user">
                                <div class="info">
                                    <img src="/assets/img/profile.jpg" alt="" width="40px" height="40px">
                                    <div>
                                        <h4>Lewis S. Cunningham</h4>
                                        <small>SEO expert</small>
                                    </div>
                                </div>
                                <div class="contact">
                                    <span class="las la-user-circle"></span>
                                    <span class="las la-comment"></span>
                                    <span class="las la-phone"></span>

                                </div>
                            </div>
                            <div class="user">
                                <div class="info">
                                    <img src="/assets/img/profile.jpg" alt="" width="40px" height="40px">
                                    <div>
                                        <h4>Lewis S. Cunningham</h4>
                                        <small>SEO expert</small>
                                    </div>
                                </div>
                                <div class="contact">
                                    <span class="las la-user-circle"></span>
                                    <span class="las la-comment"></span>
                                    <span class="las la-phone"></span>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>

</html>
