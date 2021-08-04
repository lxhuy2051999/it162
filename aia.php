<?php include_once './includes/portal-config.php' ?>
<!DOCTYPE html>
<html>

<head>
    <title><?= $title ?></title>
    <meta name="viewport" content="width=device-width" />
    <meta name="robots" content="noindex,nofollow" />
    <meta charset="utf-8" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/nav.css" />
    <link rel="stylesheet" href="css/portal.css" />
    <link rel="stylesheet" href="css/form.css" />
    <link rel="stylesheet" href="css/table.css">
</head>

<body>
    <!-- START WRAPPER -->
    <main class="wrapper">
        <header>
            <h1>
                <a href="index.php"><i class="logo fa <?= $logo ?>"></i> Huy Xuon Lieu SCC IT162 Portal</a>
            </h1>
            <nav>
                <ul class="topnav" id="myTopnav">
                    <?= makeLinks($nav1) ?>
                    <!-- <li><a href="index.php" class="selected">Welcome</a></li>
                    <li><a href="big/index.php">Big</a></li>
                    <li><a href="aia.php">AIA</a></li>
                    <li><a href="flowchart.php">Flowchart/Layout</a></li>
                    <li><a href="fp/index.php">Final Project</a></li>
                    <li><a href="contact.php">Contact Huy</a></li> -->
                    <li class="icon">
                        <a href="javascript:void(0);" onclick="myFunction()">&#9776;</a>
                    </li>
                </ul>
            </nav>
        </header>

        <div class="wrapper">
            <h2 class="subheader">AIA (Audience, Issues and Approach)!</h2>

            <table class="client-info">
                <caption>
                    This table contains information about the client <br>
                    This is my client in last quarter. I did not finish her website, so I try to do better in this
                    quarter
                </caption>
                <tr>
                    <th>Client's name and final decision maker</th>
                    <td>Dao</td>
                </tr>
                <tr>
                    <th>Client's business and website name</th>
                    <td>Queen Anne nail and spa</td>
                </tr>
                <tr>
                    <th>Redesign and brand new website</th>
                    <td>Redesign</td>
                </tr>
                <tr>
                    <th>Type of website</th>
                    <td>Marketing, commercial</td>
                </tr>
                <tr>
                    <th>Client's goal</th>
                    <td>
                        Dao wants her website to have a modern and colorful UI, and simplify the take appointment
                    </td>
                </tr>
            </table>

            <table class="AIA">
                <caption>
                    This table describe about audiences, their issues, and the approaches
                    to solve the problems
                </caption>
                <thead>
                    <tr>
                        <th>Audiences</th>
                        <th>Issues</th>
                        <th>Approaches</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            New clients: people who are new to the business or make
                            appointment on the business's website for the first time
                        </td>
                        <td>
                            <ul>
                                <li>
                                    It is confusing for people who never go to a nail salon to
                                    choose what service they need.
                                </li>
                                <li>
                                    The section for making appointment is quite long.
                                </li>
                                <li>
                                    They are not sure about the services quality of the salon
                                </li>
                            </ul>
                        </td>
                        <td>
                            <ul>
                                <li>Add more images and short description for services</li>
                                <li>Simply the process of making appointment</li>
                                <li>Create a small gallery and testimonial section</li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td>Current clients</td>
                        <td>
                            <ul>
                                <li>
                                    Some sections does not look good on phone browser
                                </li>
                                <li>It take a lot of effort to add services for a group of people.</li>
                                <li>The pictures in the website look different in real world</li>
                            </ul>
                        </td>
                        <td>
                            <ul>
                                <li>Redesign and make a new website</li>
                                <li>Try to make a friendly making-appointment section</li>
                                <li>Take new picture of the remodel of the salon</li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td>Dao, business's owner</td>
                        <td>
                            <ul>
                                <li>
                                    She needs to have more support
                                </li>
                                <li> Sometime, clients do not fill
                                    all of the services that they want. That makes the employees fail to estimate time
                                    and
                                    causes other clients have to wait</li>
                                <li>She want to show promotion in special event and holidays</li>
                            </ul>
                        </td>
                        <td>
                            <ul>
                                <li>
                                    Help her to modify the website when she needs.
                                </li>
                                <li>Simplify the making-appointment section. If not possible, suggest customer to make a
                                    phone
                                    call to make an appointment if the customer wants to make a reservation for a group
                                </li>
                                <li>Make a section for promotion and help her to add promotion on the website in special
                                    days
                                </li>
                            </ul>
                        </td>
                    </tr>
                </tbody>
            </table>


            <?php
      include('./includes/footer.php');
      ?>