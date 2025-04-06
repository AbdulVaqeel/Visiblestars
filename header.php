<header class="site-header">
    <div class="site-header__container container">
        <div class="site-header__col1">
            <div class="site-header__logo">
                <a href="<?php echo $base_url;?>" class="site-header__logo-link">
                    <!-- <img src="./assets/images/logo12.png"
							class="site-header__logo-img"> -->
                    <picture>
                        <source media="(min-width: 900px)" srcset="<?php echo $base_url ."assets/images/logo11.png";?>">
                        <source media="(min-width: 400px)" srcset="<?php echo $base_url ."assets/images/logo12.png";?>">
                        <img src="<?php echo $base_url ."assets/images/logo12.png";?>" alt="logo"
                            class="site-header__logo-img">
                    </picture>
                </a>
            </div>
        </div>
        <div class="site-header__col2">
            <div class="site-header__col2-row1">
                <div class="menu-nav">
                    <ul class="menu-nav__ul">
                        <li class="menu-nav__li">
                            <a href="<?php echo $base_url."corporate-training";?>" class="menu-nav__link">Corporate
                                Training</a>
                        </li>
                        <li class="menu-nav__li">
                            <a href="<?php echo $base_url."studyhub";?>" class="menu-nav__link">Study Hub</a>
                        </li>
                        <li class="menu-nav__li">
                            <a href="<?php echo $base_url."become-a-trainer";?>" class="menu-nav__link">Become a Trainer
                            </a>
                        </li>
                        <li class="menu-nav__li">
                            <a href="<?php echo $base_url."testimonials";?>" class="menu-nav__link">Testimonials</a>
                        </li>
                        <li class="menu-nav__li">
                            <a href="<?php echo $base_url."accreditations";?>" class="menu-nav__link">Accreditations</a>
                        </li>
                        <li class="menu-nav__li">
                            <a href="<?php echo $base_url."resources";?>" class="menu-nav__link">Our Resources</a>
                        </li>
                        <li class="menu-nav__li">
                            <a href="<?php echo $base_url."contact-us";?>" class="menu-nav__link">Contact Us</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="site-header__col2-row2">
                <div class="site-header__col2-row2-col1">
                    <nav class="navigation">
                        <div class="navigation-trigger">Programs<span class="down-arrow-icon"></span>
                        </div>
                        <div class="dropdownmenu">
                            <ul>
                                <li>
                                    <a style="background-color:#ffbc05;color: #000;
											font-weight: 700;">Courses</a>
                                </li>
                                <li>
                                    <a href="<?php echo $base_url."software/development-courses" ;?>"> Software
                                        Development</a>
                                    <ul>
                                        <li>
                                            <a
                                                href="<?php echo $base_url."software/python-training-course-in-saudiArabia-and-india" ;?>">Python</a>
                                            <ul>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."software/python/python-machine-learning-training" ;?>">
                                                        Machine Learning with Python</a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."software/python/python-course-for-data-analysis" ;?>">Python
                                                        for Data Analysis</a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."software/python/django-course" ;?>">Django</a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."software/python/python-artificial-intelligence-course" ;?>">Python
                                                        Artificial Intelligence</a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."software/python/python-for-finance" ;?>">Python
                                                        For Finance</a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."software/python/python-course-for-kids" ;?>">Python
                                                        for Kids</a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."software/python/python-course-for-beginners" ;?>">Python
                                                        for Beginners</a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo $base_url."software/python/python-tuition" ;?>">Python
                                                        Tuition</a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."software/python/advanced-python-course" ;?>">Advanced
                                                        Python</a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."software/python/python-data-science-course" ;?>">Python
                                                        Data Science
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="<?php echo $base_url."software/web-development-courses" ;?>">Web
                                                Development</a>
                                            <ul>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."software/web/redis-training-course" ;?>">Redis
                                                    </a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."software/web/spring-boot-course" ;?>">Spring
                                                        Boot</a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."software/web/node-js-course" ;?>">NodeJS</a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo $base_url."software/web/mean-stack-course" ;?>">Mean
                                                        Stack</a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."software/web/angular-8-training" ;?>">Angular
                                                        8</a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."software/web/elasticsearch-course" ;?>">Elasticsearch
                                                    </a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."software/web/webgl-course" ;?>">WebGL</a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."software/web/visual-basic-course" ;?>">Visual
                                                        Basic
                                                    </a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."software/web/apache-kafka-course" ;?>">Apache
                                                        Kafka</a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."software/web/full-stack-developer-course" ;?>">Full
                                                        Stack Developer</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a
                                                href="<?php echo $base_url."software/programming-courses-in-saudiArabia-and-india" ;?>">Programming
                                                Language</a>
                                            <ul>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."software/programming/java-11-course" ;?>">Java
                                                        11</a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."software/programming/html-css3-course" ;?>">Programming
                                                        in HTML5 with JavaScript and CSS3</a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."software/programming/dot-net-course" ;?>">.Net
                                                    </a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."software/programming/c-programming-course" ;?>">C
                                                        Programming
                                                    </a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."software/programming/java-training-course-in-saudiArabia-and-india" ;?>">Java
                                                    </a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."software/programming/php-training" ;?>">PHP</a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."software/programming/asp-net-course" ;?>">ASP.NET
                                                    </a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."software/programming/c-plus-plus-programming-course-in-saudiArabia-and-india" ;?>">C++
                                                    </a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."software/programming/r-programming" ;?>">R
                                                        Programming</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="<?php echo $base_url."software/software-testing-courses" ;?>">Software
                                                Testing</a>
                                            <ul>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."software/testing/selenium" ;?>">Selenium</a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."software/testing/automation-testing" ;?>">Automation
                                                        Testing</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="<?php echo $base_url."software/game-development-courses" ;?>">Game
                                                Development</a>
                                            <ul>
                                                <li>
                                                    <a href="<?php echo $base_url."software/game/game-design" ;?>">Game
                                                        Design</a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo $base_url."software/game/digital-painting" ;?>">Digital
                                                        Painting</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="<?php echo $base_url."software/data-science-courses" ;?>">Data
                                                Science</a>
                                            <ul>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."software/datascience/tableau-course" ;?>">Tableau</a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."software/datascience/alteryx-course" ;?>">AlterYX
                                                    </a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."software/datascience/data-science-360-course" ;?>">Data
                                                        Science 360</a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."software/datascience/advanced-access-training-course-in-saudiArabia-and-india" ;?>">Advanced
                                                        Access
                                                    </a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."software/datascience/deep-learning" ;?>">Deep
                                                        Learning</a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."software/datascience/data-analytics-course" ;?>">Data
                                                        Analytics</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a
                                                href="<?php echo $base_url."software/database-training-and-courses-in-saudiArabia-and-india" ;?>">Database
                                                Management</a>
                                            <ul>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."software/database/ms-sql-server-training-course-in-saudiArabia-and-india" ;?>">SQL
                                                        Server</a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."software/database/mysql-administration-training" ;?>">MySQL
                                                        Database Administration
                                                    </a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."software/database/postgresql-course" ;?>">PostgreSQL</a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."software/database/cassandra-course" ;?>">Cassandra
                                                    </a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."software/database/mongo-db-course" ;?>">MongoDB
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo $base_url."software/database/mysql-course" ;?>">MySQL
                                                        Basic
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="<?php echo $base_url."software/emerging-technology-courses" ;?>">Emerging
                                                Technologies</a>
                                            <ul>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."software/technologies/internet-of-things-course" ;?>">Internet
                                                        of Things
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo $base_url."software/technologies/big-data" ;?>">Big
                                                        Data</a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."software/technologies/blockchain-course " ;?>">Blockchain</a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."software/technologies/rpa-course" ;?>">Robotic
                                                        Process Automation</a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."software/technologies/chatgpt-course" ;?>">ChatGPT</a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."software/technologies/artificial-intelligence-course" ;?>">Artificial
                                                        Intelligence
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="<?php echo $base_url."software/user-experience-courses" ;?>">User
                                                Experience</a>
                                            <ul>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."software/design/web-designing-training-course-in-saudiArabia-and-india" ;?>">Web
                                                        Design
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo $base_url."software/design/ui-ux-design" ;?>">UI/UX
                                                        Design</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="<?php echo $base_url."software/mobile-development-courses" ;?>">Mobile
                                                App Development</a>
                                            <ul>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."software/mobile/ios-app-development-training" ;?>">iOS
                                                        App Development</a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo $base_url."software/mobile/flutter-course" ;?>">Flutter
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo $base_url."software/mobile/ionic-course" ;?>">Ionic
                                                        4</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="<?php echo $base_url."office/office-productivity-courses" ;?>">Office
                                        Productivity</a>
                                    <ul>
                                        <li>
                                            <a
                                                href="<?php echo $base_url."office/microsoft-courses-in-saudiArabia-and-india" ;?>">Microsoft
                                                Office</a>
                                            <ul>
                                                <li>
                                                    <a href="<?php echo $base_url."office/corporate-excel-training" ;?>">Corporate
                                                        Excel
                                                    </a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."office/advanced-ms-office-training-course-in-saudiArabia-and-india" ;?>">Advanced
                                                        MS Office
                                                    </a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."office/ms-office-training-course-in-saudiArabia-and-india" ;?>">MS
                                                        Office</a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."office/ms-powerpoint-training-course-in-saudiArabia-and-india" ;?>">MS
                                                        PowerPoint
                                                    </a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."office/excel-vba-training-course-in-saudiArabia-and-india" ;?>">Excel
                                                        VBA
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo $base_url."office/mcsa-training" ;?>">MCSA
                                                    </a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."office/microsoft-project-msp-training-course-in-saudiArabia-and-india" ;?>">Microsoft
                                                        Project
                                                    </a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."office/ms-access-course" ;?>">MS
                                                        Access
                                                    </a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."office/ms-excel-training-course-in-saudiArabia-and-india" ;?>">MS
                                                        Excel
                                                    </a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."office/ms-word-training-course-in-saudiArabia-and-india" ;?>">MS
                                                        Word
                                                    </a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."office/ms-outlook-course" ;?>">MS
                                                        Outlook
                                                    </a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."office/advanced-excel-training-course-in-saudiArabia-and-india" ;?>">Advanced
                                                        Excel
                                                    </a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."office/ms-power-bi-training-in-saudiArabia-and-india" ;?>">Power
                                                        BI</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="<?php echo $base_url."business/business-operation-courses" ;?>">Business
                                        Operation</a>
                                    <ul>
                                        <li>
                                            <a href="<?php echo $base_url."business/project-management-training" ;?>">Project
                                                Management</a>
                                            <ul>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."business/project/program-management-professional-course" ;?>">PgMP</a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."business/project/agile-certified-practitioner-course" ;?>">PMI
                                                        ACP
                                                    </a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."business/project/psp-course" ;?>">PSP</a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."business/project/primavera-p6-training-course-in-saudiArabia-and-india" ;?>">Primavera
                                                        P6
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo $base_url."business/project/rmp-course" ;?>">RMP</a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo $base_url."business/project/pmi-sp-course" ;?>">Scheduling
                                                        Professional</a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."business/project/pmp-training-course-in-saudiArabia-and-india" ;?>">PMP</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="<?php echo $base_url."business/business-communication-courses" ;?>">Business
                                                Communication</a>
                                            <ul>
                                                <li>
                                                    <a href="<?php echo $base_url."business/communication/english-writing" ;?>">English
                                                        Writing</a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."business/communication/email-writing-course-in-saudiArabia-and-india" ;?>">Email
                                                        Writing
                                                    </a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."business/communication/business-writing-skills-training-course-in-saudiArabia-and-india" ;?>">Business
                                                        Writing</a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo $base_url."business/communication/business-english" ;?>">Business
                                                        English</a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."business/communication/presentation-skills-training-course-in-saudiArabia-and-india" ;?>">Presentation
                                                        Skills
                                                    </a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."business/communication/business-report-writing-course" ;?>">Business
                                                        Report Writing</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a
                                                href="<?php echo $base_url."business/logistics-and-supply-chain-management-courses" ;?>">Logistics
                                                & Supply Chain</a>
                                            <ul>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."business/logistics/material-requirement-planning-course" ;?>">Material
                                                        Requirement Planning</a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."business/logistics/cips-course" ;?>">CIPS</a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."business/logistics/oil-marketing-and-operations-skills-for-managers-course" ;?>">Oil
                                                        Marketing & Operations Skills Training for Managers</a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."business/logistics/warehouse-management-training-course-in-saudiArabia-and-india" ;?>">Warehouse
                                                        Management
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a
                                                href="<?php echo $base_url."business/accounting-courses-in-saudiArabia-and-india" ;?>">Finance
                                                & Accounting</a>
                                            <ul>
                                                <li>
                                                    <a href="<?php echo $base_url."business/finance/corporate-tax-training" ;?>">
                                                        Corporate Tax</a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."business/finance/aml-course" ;?>">Anti
                                                        Money Laundering</a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo $base_url;?>">Xero</a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo $base_url."business/finance/corporate-tax-course" ;?>">Corporate
                                                        Tax</a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo $base_url."business/finance/certified-internal-auditor-cia" ;?>">Certified
                                                        Internal Auditor</a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."business/finance/financial-accounting-training-course-in-saudiArabia-and-india" ;?>">Financial
                                                        Accounting
                                                    </a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."business/finance/tally-training-course-in-saudiArabia-and-india" ;?>">Tally
                                                    </a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."business/finance/financial-analysis-and-forecasting-course" ;?>">Financial
                                                        Analysis and Forecasting</a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."business/finance/vat-training-course-in-saudiArabia-and-india" ;?>">VAT</a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."business/finance/accounting-for-non-accountants-training-course-in-saudiArabia-and-india" ;?>">Accounting
                                                        For Non-Accountants</a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo $base_url."business/finance/financial-modeling-course" ;?>">Financial
                                                        Modeling
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo $base_url."business/finance/cash-flow-analysis-course" ;?>">Cash
                                                        Flow Statement Preparation and Analysis</a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."business/finance/cima-course" ;?>">CIMA</a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."business/finance/cfm-course" ;?>">CFM
                                                    </a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."business/finance/peachtree-training-course-in-saudiArabia-and-india" ;?>">Peachtree
                                                    </a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."business/finance/zoho-books-training-course-in-saudiArabia-and-india" ;?>">Zoho
                                                        Books
                                                    </a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."business/finance/advanced-budgeting-and-forecasting-course" ;?>">Advanced
                                                        Budgeting and Forecasting</a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo $base_url."business/finance/ifrs-course" ;?>">IFRS</a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."business/finance/finance-accounting-for-managers-course" ;?>">Accounting
                                                        for Managers
                                                    </a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."business/finance/quickbooks-training-course-in-saudiArabia-and-india" ;?>">QuickBooks
                                                    </a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."business/finance/ccp-course" ;?>">CCP</a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."business/finance/finance-for-non-finance-managers-course" ;?>">Finance
                                                        For Non Finance Managers</a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."business/finance/cpa-course" ;?>">CPA
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a
                                                href="<?php echo $base_url."business/business-management-training-course-in-saudiArabia-and-india" ;?>">Business
                                                Management</a>
                                            <ul>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."business/management/contracts-management-course" ;?>">Contracts
                                                        Management</a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."business/management/hotel-and-hospitality-management-course" ;?>">Hotel
                                                        and Hospitality Management</a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."business/management/document-controller-training-course-in-saudiArabia-and-india" ;?>">Document
                                                        Control</a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."business/management/office-management-training-course-in-saudiArabia-and-india" ;?>">Office
                                                        Management</a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo $base_url."business/management/business-administrator-course" ;?>">Business
                                                        Administrator</a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo $base_url."business/management/customer-service-management" ;?>">Customer
                                                        Service Management
                                                    </a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."business/management/crisis-management-and-conflict-resolution-course" ;?>">Crisis
                                                        Management and Conflict Resolution
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo $base_url."business/management/cmq-oe-course" ;?>">CMQ/OE</a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."business/management/data-protection-course" ;?>">
                                                        Consumer Data Protection</a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."business/management/lean-six-sigma-green-belt-training-in-saudiArabia-and-india" ;?>">Six
                                                        Sigma Green Belt</a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."business/management/supervisory-course" ;?>">
                                                        Supervisory Skills</a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo $base_url."business/management/facilities-management-course" ;?>">Facilities
                                                        Management</a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo $base_url."business/management/certified-scrum-master-course" ;?>">Certified
                                                        Scrum Master</a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo $base_url."business/management/quality-management" ;?>">Quality
                                                        Management</a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."business/management/secretarial-training-course-in-saudiArabia-and-india" ;?>">Secretarial
                                                        Skills Training</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="<?php echo $base_url."business/sales-and-marketing-courses" ;?>">Sales &
                                                Marketing</a>
                                            <ul>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."business/sales/salesforce-developer-course" ;?>">Salesforce
                                                        Developer</a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."business/sales/salesforce-administrator-course" ;?>">Salesforce
                                                        Administrator</a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."business/sales/advanced-sales-skills-training-course" ;?>">Sales
                                                        Skills</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a
                                                href="<?php echo $base_url."business/hr-management-training-course-in-saudiArabia-and-india" ;?>">Human
                                                Resource</a>
                                            <ul>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."business/HR/interviewing-recruitment-course" ;?>">Interviewing
                                                        & Recruitment</a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo $base_url."business/HR/performance-management-course" ;?>">Performance
                                                        Management
                                                    </a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."business/HR/front-office-executive-training" ;?>">Front
                                                        Office Executive
                                                    </a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."business/HR/interview-preparation-course" ;?>">Interview
                                                        Preparation</a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo $base_url."business/HR/train-the-trainer-course" ;?>">Train
                                                        the Trainer</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="<?php echo $base_url."business/compliance-courses" ;?>">Business
                                                Compliance</a>
                                            <ul>
                                                <li>
                                                    <a href="<?php echo $base_url."business/compliance/corporate-governance-course" ;?>">
                                                        Corporate Governance</a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."business/compliance/saudi-labour-law-course" ;?>">Saudi
                                                        Labour Law</a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo $base_url."business/compliance/labour-law-course" ;?>">
                                                        Labour Law</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="<?php echo $base_url."business/business-strategic-courses" ;?>">Business
                                                Strategy</a>
                                            <ul>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."business/strategy/togaf-course" ;?>">TOGAF</a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo $base_url."business/strategy/strategic-management-course" ;?>">Strategic
                                                        Management</a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo $base_url."business/strategy/strategic-planning-course" ;?>">Strategic
                                                        Planning</a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."business/strategy/strategic-decision-making-course" ;?>">Strategic
                                                        Decision Making</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a
                                        href="<?php echo $base_url."graphics/designing-courses-in-saudiArabia-and-india" ;?>">Graphics
                                        & Videos</a>
                                    <ul>
                                        <li>
                                            <a href="<?php echo $base_url."graphics/video-editing-courses" ;?>">Video Editing</a>
                                            <ul>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."graphics/video/cinema-4d-course" ;?>">Cinema
                                                        4D</a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."graphics/video/video-editing-training-course-in-saudiArabia-and-india" ;?>">Video
                                                        Editing
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo $base_url."graphics/video/davinci-resolve-course" ;?>">Davinci
                                                        Resolve
                                                    </a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."graphics/video/adobe-premier-pro-training-course-in-saudiArabia-and-india" ;?>">Adobe
                                                        Premiere Pro
                                                    </a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."graphics/video/3ds-max-training-course-in-saudiArabia-and-india" ;?>">3ds
                                                        Max</a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."graphics/video/adobe-after-effects-training-course-in-saudiArabia-and-india" ;?>">Adobe
                                                        After Effects
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="<?php echo $base_url."graphics/graphics-design-courses" ;?>">Graphic
                                                Design</a>
                                            <ul>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."graphics/design/adobe-indesign-course" ;?>">Adobe
                                                        InDesign</a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."graphics/design/adobe-photoshop-training-course-in-saudiArabia-and-india" ;?>">Adobe
                                                        Photoshop
                                                    </a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."graphics/design/coreldraw-course" ;?>">CorelDRAW
                                                    </a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."graphics/design/adobe-xd-course" ;?>">Adobe
                                                        XD</a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."graphics/design/graphic-designing-training-course-in-saudiArabia-and-india" ;?>">Graphic
                                                        Designing
                                                    </a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."graphics/design/adobe-illustrator-training-course-in-saudiArabia-and-india" ;?>">Adobe
                                                        Illustrator
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="<?php echo $base_url."graphics/animation-courses" ;?>">Animation</a>
                                            <ul></ul>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="<?php echo $base_url."skills/softskills-courses" ;?>">Soft Skills</a>
                                    <ul>
                                        <li>
                                            <a href="<?php echo $base_url."skills/kids-skill-development-courses" ;?>">Kids
                                                Skill Development</a>
                                            <ul>
                                                <li>
                                                    <a href="<?php echo $base_url."skills/kids/coding-for-kids" ;?>">Coding For
                                                        Kids</a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo $base_url."skills/kids/abacus-classes-for-kids" ;?>">Abacus
                                                        for Kids</a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo $base_url."skills/kids/robotics-for-kids" ;?>">Robotics for
                                                        Kids</a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo $base_url."skills/kids/stem-for-kids" ;?>">STEM</a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo $base_url."skills/kids/personality-development" ;?>">Personality
                                                        Development for Kids</a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."skills/kids/public-speaking-skills-for-kids" ;?>">Public
                                                        Speaking for kids</a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."skills/kids-skill-development-courses#handwriting-course" ;?>">Handwriting</a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo $base_url."skills/kids/chess-training-for-kids" ;?>">Chess
                                                        for Kids</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="<?php echo $base_url."skills/career-development-courses" ;?>">Career
                                                Development</a>
                                            <ul>
                                                <li>
                                                    <a href="<?php echo $base_url."skills/career/confidence-development-course" ;?>">Confidence
                                                        Development</a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."skills/career/personality-development-for-professionals" ;?>">Personality
                                                        Development for Professionals</a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."skills/career/public-speaking-skills-training" ;?>">Public
                                                        Speaking Skills</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="<?php echo $base_url."skills/leadership-courses" ;?>">Leadership</a>
                                            <ul>
                                                <li>
                                                    <a href="<?php echo $base_url."skills/leadership/negotiation-skills-training" ;?>">Negotiation
                                                        Skills</a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."skills/leadership/team-building-course" ;?>">Team
                                                        Building</a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo $base_url."skills/leadership/time-management-course" ;?>">Time
                                                        Management</a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo $base_url."skills/leadership/emotional-intelligence" ;?>">Emotional
                                                        Intelligence</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="<?php echo $base_url."skills/interpersonal-skills-courses" ;?>">Interpersonal
                                                Skills</a>
                                            <ul>
                                                <li>
                                                    <a href="<?php echo $base_url."skills/interpersonal/stress-management-training" ;?>">Stress
                                                        Management</a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."skills/interpersonal/speed-typing-training-course-in-saudiArabia-and-india" ;?>">Speed
                                                        Typing</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a
                                                href="<?php echo $base_url."skills/language-courses-in-saudiArabia-and-india" ;?>">Language
                                                Learning</a>
                                            <ul>
                                                <li>
                                                    <a href="<?php echo $base_url."skills/language/french-language-course" ;?>">French
                                                        Language
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo $base_url."skills/language/german-language-course" ;?>">German
                                                        Language
                                                    </a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."skills/language/spoken-arabic-training-course-in-saudiArabia-and-india" ;?>">Spoken
                                                        Arabic</a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."skills/language/advanced-english-training-course-in-saudiArabia-and-india" ;?>">Advanced
                                                        English
                                                    </a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."skills/language/spoken-english-training-course-in-saudiArabia-and-india" ;?>">Spoken
                                                        English
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="<?php echo $base_url."skills/personal-productivity-courses" ;?>">Personal
                                                Productivity</a>
                                            <ul></ul>
                                        </li>
                                        <li>
                                            <a href="<?php echo $base_url."skills/writing-skills-courses" ;?>">Writing
                                                Skills</a>
                                            <ul></ul>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a
                                        href="<?php echo $base_url."engineering/engineering-and-cad-courses-in-saudiArabia-and-india" ;?>">Engineering
                                        & CAD</a>
                                    <ul>
                                        <li>
                                            <a href="<?php echo $base_url."engineering/architectural-design-courses" ;?>">Architectural
                                                Design</a>
                                            <ul>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."engineering/architectural/combined-leed-ga-and-ap-training" ;?>">LEED
                                                        GA and AP</a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo $base_url."engineering/architectural/leed-ap-training" ;?>">LEED AP
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo $base_url."engineering/architectural/corona-course" ;?>">Corona</a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."engineering/architectural/vray-training-course-in-saudiArabia-and-india" ;?>">VRay
                                                    </a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."engineering/architectural/leed-ga-training-green-associate-course" ;?>">LEED
                                                        GA
                                                    </a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."engineering/architectural/microstation-training-course-in-saudiArabia-and-india" ;?>">Microstation
                                                        V8i</a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."engineering/architectural/lumion-training-course-in-saudiArabia-and-india" ;?>">Lumion</a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."engineering/architectural/sketchup-training-course-in-saudiArabia-and-india" ;?>">SketchUp</a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."engineering/architectural/plumbing-and-drainage-design-training" ;?>">Plumbing
                                                        & Drainage Design</a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."engineering/architectural/navisworks-course" ;?>">Navisworks</a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."engineering/architectural/interior-design-training-course-in-saudiArabia-and-india" ;?>">Interior
                                                        Design</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="<?php echo $base_url."engineering/mechanical-design-courses" ;?>">Mechanical
                                                Design</a>
                                            <ul>
                                                <li>
                                                    <a href="<?php echo $base_url."engineering/mechanical/pdms-course" ;?>">PDMS</a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."engineering/mechanical/solidworks-training-course-in-saudiArabia-and-india" ;?>">Solidworks</a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo $base_url."engineering/mechanical/electrical-design-training" ;?>">Electrical
                                                        Design</a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo $base_url."engineering/mechanical/hvac-design-training" ;?>">HVAC
                                                        Design</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="<?php echo $base_url."engineering/structural-design-courses" ;?>">Structural
                                                Design</a>
                                            <ul>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."engineering/structural/staad-pro-training-course-in-saudiArabia-and-india" ;?>">STAAD
                                                        Pro
                                                    </a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."engineering/structural/etabs-training-course-in-saudiArabia-and-india" ;?>">ETABS
                                                    </a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."engineering/structural/aveva-e3d-course" ;?>">Aveva
                                                        E3D</a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo $base_url."engineering/structural/smartplant-3d-course" ;?>">SmartPlant
                                                        3D
                                                    </a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."engineering/structural/autodesk-inventor-training-course-in-saudiArabia-and-india" ;?>">Autodesk
                                                        Inventor</a>
                                                </li>
                                                <!-- <li>
                                                    <a href="<?php echo $base_url."engineering/structural/aveva-e3d-course" ;?>">Aveva E3D</a>
                                                </li> -->
                                                <li>
                                                    <a href="<?php echo $base_url."engineering/structural/fire-fighting-design-training" ;?>">Fire
                                                        Fighting Design</a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo $base_url."engineering/structural/tekla-software-training" ;?>">Tekla
                                                        Software
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="<?php echo $base_url."engineering/3d-modeling-courses" ;?>">3D Modelling</a>
                                            <ul>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."engineering/modeling/blender-course" ;?>">Blender</a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."engineering/modeling/jewellery-design-courses-in-saudiArabia-and-india" ;?>">Jewellery
                                                        Design</a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."engineering/modeling/bim-training-course-in-saudiArabia-and-india" ;?>">BIM
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="<?php echo $base_url."engineering/revit-training-courses" ;?>">Revit</a>
                                            <ul>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."engineering/revit/revit-mep-training-course-in-saudiArabia-and-india" ;?>">Revit
                                                        MEP
                                                    </a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."engineering/revit/revit-structure-course" ;?>">Revit
                                                        Structure
                                                    </a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."engineering/revit/revit-architecture-course" ;?>">Revit
                                                        Architecture
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="<?php echo $base_url."engineering/autocad-courses" ;?>">AutoCAD</a>
                                            <ul>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."engineering/autocad/autocad-mep-training-course-in-saudiArabia-and-india" ;?>">AutoCAD
                                                        MEP
                                                    </a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."engineering/autocad/civil-3d-training-course-in-saudiArabia-and-india" ;?>">Civil
                                                        3D</a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."engineering/autocad/autocad-3d-course" ;?>">AutoCAD
                                                        3D</a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."engineering/autocad/autocad-2d-training-course-in-saudiArabia-and-india" ;?>">AutoCAD
                                                        2D
                                                    </a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."engineering/autocad/autocad-electrical-training-course-in-saudiArabia-and-india" ;?>">AutoCAD
                                                        Electrical</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="<?php echo $base_url."engineering/visualization-courses" ;?>">Architecture
                                                Visualization</a>
                                            <ul></ul>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a style="background-color:#ffbc05;color: #000;
											font-weight: 700;"> Test Preparation</a>
                                </li>
                                <li>
                                    <a href="<?php echo $base_url."IT/it-service-management-courses" ;?>">IT
                                        Service Management</a>
                                    <ul>
                                        <li>
                                            <a href="<?php echo $base_url."IT/itil-courses" ;?>">ITIL</a>
                                            <ul>
                                                <li>
                                                    <a href="<?php echo $base_url."IT/itil-foundation-training" ;?>">ITIL
                                                        Foundation</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="<?php echo $base_url."security/cyber-security-courses" ;?>">Cyber
                                        Security</a>
                                    <ul>
                                        <li>
                                            <a href="<?php echo $base_url."security/network-security-courses" ;?>">Network
                                                Security</a>
                                            <ul>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."security/network/and-course" ;?>">AND</a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."security/network/network-security-expert-cnd-ceh-course" ;?>">Network
                                                        Security Expert (CND +CEH)</a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."security/network/cnd-course" ;?>">CND</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="<?php echo $base_url."security/application-security-courses" ;?>">Application
                                                Security</a>
                                            <ul>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."security/application/case-dot-net-course" ;?>">CASE.NET</a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."security/application/case-java-course" ;?>">CASE
                                                        Java</a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo $base_url."security/application/owasp-course" ;?>">OWASP Top 10</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="<?php echo $base_url."security/cyber-security-awareness-courses" ;?>">Cyber
                                                Security Awareness</a>
                                            <ul>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."security/awareness/cyber-security-awareness-for-general-users" ;?>">Cyber
                                                        Security Awareness for General Users</a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."security/cyber-security-awareness-courses#cyber-security-awarenes-for-it-professionals " ;?>">Cyber
                                                        Security Awareness For IT Professionals
                                                    </a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."security/awareness/cyber-security-awareness-for-managers" ;?>">Cyber
                                                        Security Awareness For Managers</a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo $base_url."security/awareness/email-phishing-course" ;?>">Email
                                                        Phishing</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="<?php echo $base_url."security/security-management-courses" ;?>">Security
                                                Management</a>
                                            <ul>
                                                <li>
                                                    <a href="<?php echo $base_url."security/management/cgeit-course" ;?>">CGEIT</a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."security/management/crisc-course" ;?>">CRISC</a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo $base_url."security/management/cciso-course" ;?>">CCISO</a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."security/management/certified-information-security-manager-cism" ;?>">CISM</a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."security/management/certified-information-systems-auditor-cisa" ;?>">CISA</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="<?php echo $base_url."security/cyber-forensic-courses" ;?>">Cyber
                                                Forensic</a>
                                            <ul>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."security/forensic/digital-forensic-analyst-course" ;?>">Digital
                                                        Forensic Analyst</a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."security/forensic/malware-and-memory-forensics-course" ;?>">Malware
                                                        and Memory Forensics</a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo $base_url."security/forensic/mobile-forensics-course" ;?>">Mobile
                                                        Forensics</a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo $base_url."security/forensic/chfi-course" ;?>">CHFI</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="<?php echo $base_url."security/operating-systems-security-courses" ;?>">Operating
                                                Systems Security</a>
                                            <ul>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."security/OS/linux-fundamentals-course" ;?>">Linux
                                                        Fundamentals</a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo $base_url."security/OS/windows-fundamentals-course" ;?>">Windows
                                                        Fundamentals</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="<?php echo $base_url."security/security-testing-courses" ;?>">Security
                                                Testing</a>
                                            <ul>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."security/testing/ecss-course" ;?>">ECSS</a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."security/testing/ethical-hacking-preparatory-course" ;?>">Ethical
                                                        Hacking Preparatory</a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."security/testing/cct-course" ;?>">CCT
                                                    </a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."security/testing/cyber-security-expert-ceh-chfi-course" ;?>">
                                                        Cyber Security Expert (CEH + CHFI)</a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."security/testing/cscu-course" ;?>">CSCU</a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."security/testing/certified-information-systems-security-professional-cissp" ;?>">CISSP</a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo $base_url."security/testing/certified-ethical-hacker-ceh" ;?>">Certified
                                                        Ethical Hacker</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="<?php echo $base_url."security/cloud-security-courses" ;?>">Cloud
                                                Security</a>
                                            <ul>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."security/cloud/certified-cloud-security-expert-course" ;?>">Certified
                                                        Cloud Security Expert (CSE)</a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."security/cloud/ccsp-course" ;?>">CCSP</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="<?php echo $base_url."security/penetration-testing-courses" ;?>">Penetration
                                                Testing</a>
                                            <ul>
                                                <li>
                                                    <a href="<?php echo $base_url."security/penetration/oscp-course" ;?>">OSCP</a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."security/penetration/lpt-course" ;?>">LPT</a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."security/penetration/cpent-course" ;?>">CPENT</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="<?php echo $base_url."security/business-continuity-management-courses" ;?>">Business
                                                Continuity Management</a>
                                            <ul>
                                                <li>
                                                    <a href="<?php echo $base_url."security/business/identity-and-access-management" ;?>">Identity
                                                        and Access Management</a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."security/business/edrp-course" ;?>">EDRP</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="<?php echo $base_url."security/incident-handling-courses" ;?>">Incident
                                                Handling</a>
                                            <ul>
                                                <li>
                                                    <a href="<?php echo $base_url."security/incident/certified-soc-analyst-course" ;?>">Certified
                                                        SOC Analyst</a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo $base_url."security/incident/ctia-course" ;?>">CTIA
                                                    </a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."security/incident/ecih-course" ;?>">ECIH</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a
                                        href="<?php echo $base_url."ERP/erp-courses-in-saudiArabia-and-india" ;?>">ERP</a>
                                    <ul>
                                        <li>
                                            <a href="<?php echo $base_url."ERP/sap-courses" ;?>">SAP</a>
                                            <ul>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."ERP/SAP/sap-mm-training-course-in-saudiArabia-and-india" ;?>">SAP
                                                        MM
                                                    </a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."ERP/SAP/sap-2000-training-course-in-saudiArabia-and-india" ;?>">SAP
                                                        2000</a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."ERP/SAP/sap-btp-course" ;?>">SAP
                                                        BTP</a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."ERP/SAP/sap-abap-training-course-in-saudiArabia-and-india" ;?>">SAP
                                                        ABAP
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo $base_url."ERP/SAP/sap-basis-course" ;?>">SAP BASIS
                                                    </a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."ERP/SAP/sap-netweaver-course" ;?>">SAP
                                                        NETWEAVER
                                                    </a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."ERP/SAP/sap-successfactor-course" ;?>">SAP
                                                        SuccessFactors
                                                    </a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."ERP/SAP/sap-pp-course" ;?>">SAP
                                                        PP
                                                    </a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."ERP/SAP/sap-business-one-training-course-in-saudiArabia-and-india" ;?>">SAP
                                                        Business One
                                                    </a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."ERP/SAP/sap-wm-training-course-in-saudiArabia-and-india" ;?>">SAP
                                                        WM
                                                    </a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."ERP/SAP/sap-pm-training-course-in-saudiArabia-and-india" ;?>">SAP
                                                        PM
                                                    </a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."ERP/SAP/sap-fico-training-course-in-saudiArabia-and-india" ;?>">SAP
                                                        FICO
                                                    </a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."ERP/SAP/sap-hr-training-course-in-saudiArabia-and-india" ;?>">SAP
                                                        HR
                                                    </a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."ERP/SAP/sap-sd-course" ;?>">SAP
                                                        SD
                                                    </a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."ERP/SAP/sap-solution-manager-course" ;?>">SAP
                                                        Solution Manager</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="<?php echo $base_url."ERP/oracle-courses" ;?>">Oracle</a>
                                            <ul>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."ERP/oracle/oracle-hrms-training-course-in-saudiArabia-and-india" ;?>">Oracle
                                                        HRMS
                                                    </a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."ERP/oracle/oracle-apps-dba-training-course-in-saudiArabia-and-india" ;?>">Oracle
                                                        Apps DBA</a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."ERP/oracle/oracle-financials-training-course-in-saudiArabia-and-india" ;?>">Oracle
                                                        Financials
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="<?php echo $base_url."virtualization/virtualization-courses" ;?>">Virtualization</a>
                                    <ul>
                                        <li>
                                            <a href="<?php echo $base_url."virtualization/vmware-courses" ;?>">VMware</a>
                                            <ul>
                                                <li>
                                                    <a href="<?php echo $base_url."virtualization/vmware-courses" ;?>">vRealize
                                                        Automation</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="<?php echo $base_url."virtualization/microsoft-hyper-v-courses" ;?>">Microsoft
                                                Hyper-V</a>
                                            <ul></ul>
                                        </li>
                                        <li>
                                            <a href="<?php echo $base_url."virtualization/citrix-courses" ;?>">Citrix</a>
                                            <ul></ul>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="<?php echo $base_url."cloud/cloud-computing-courses" ;?>">Cloud
                                        Computing</a>
                                    <ul>
                                        <li>
                                            <a href="<?php echo $base_url."cloud/microsoft-azure-courses" ;?>">Microsoft
                                                Azure</a>
                                            <ul>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."cloud/microsoft-azure-courses" ;?>">Designing
                                                        a Data Platform Solution</a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."cloud/azure/developing-solutions-ms-azure-course" ;?>">Developing
                                                        Solutions for Microsoft Azure</a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."cloud/azure/azure-architect-design-course" ;?>">Microsoft
                                                        Azure Architect Design</a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."cloud/azure/azure-architect-course" ;?>">Microsoft
                                                        Azure Architect Technologies</a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."cloud/azure/microsoft-azure-devops-solutions-training" ;?>">Microsoft
                                                        Azure DevOps Solutions</a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."cloud/azure/azure-security-course" ;?>">Microsoft
                                                        Azure Security Technologies
                                                    </a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."cloud/azure/microsoft-azure-administrator-training" ;?>">Microsoft
                                                        Azure Administrator</a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."cloud/azure/azure-fundamentals-course" ;?>">Microsoft
                                                        Azure Fundamentals</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="<?php echo $base_url."cloud/other-cloud-courses" ;?>">Other Cloud
                                                Computing Courses</a>
                                            <ul>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."cloud/other/kubernetes-training" ;?>">Kubernetes</a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."cloud/other/fortinet-fortiGate-next-generation-firewall" ;?>">Fortinet
                                                        FortiGate Next-Generation Firewall</a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo $base_url."cloud/other/cctv-course" ;?>">CCTV</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="<?php echo $base_url."cloud/google-cloud-courses" ;?>">Google Cloud</a>
                                            <ul>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."cloud/google/google-professional-cloud-architect" ;?>">Google
                                                        Professional Cloud Architect</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="<?php echo $base_url."cloud/aws-courses" ;?>">AWS</a>
                                            <ul>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."cloud/AWS/aws-solutions-architect-associate" ;?>">AWS
                                                        Solutions Architect Associate</a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."cloud/AWS/aws-cloud-practitioner-course" ;?>">AWS
                                                        Certified Cloud Practitioner</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a
                                        href="<?php echo $base_url."exam/test-preparation-courses-in-saudiArabia-and-india" ;?>">Exam
                                        Preparation</a>
                                    <ul>
                                        <li>
                                            <a href="<?php echo $base_url."exam/english-courses" ;?>">English Exam</a>
                                            <ul>
                                                <li>
                                                    <a href="<?php echo $base_url."exam/english/celpip-training" ;?>">CELPIP</a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."exam/english/duolingo-course" ;?>">Duolingo</a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo $base_url."exam/english/ukvi-ielts" ;?>">UKVI IELTS</a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."exam/english/pte-training-course-in-saudiArabia-and-india" ;?>">PTE</a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."exam/english/ielts-training-course-in-saudiArabia-and-india" ;?>">IELTS
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo $base_url."exam/english/sat-course" ;?>">SAT</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="<?php echo $base_url."exam/entrance-courses" ;?>">Entrance Exam</a>
                                            <ul>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."exam/entrance/emsat-english-course" ;?>">EmSAT
                                                        English</a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo $base_url."exam/entrance/emsat-biology-course" ;?>">Emsat
                                                        Biology</a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo $base_url."exam/entrance/emsat-arabic-course" ;?>">EmSAT
                                                        Arabic</a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo $base_url."exam/entrance/emsat-math-course" ;?>">Emsat
                                                        Math</a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."exam/entrance/emsat-physics-course" ;?>">EmSAT
                                                        Physics</a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo $base_url."exam/entrance/emsat-chemistry-course" ;?>">Emsat
                                                        Chemistry</a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo $base_url."exam/entrance/emsat-computer-science-course" ;?>">EmSAT
                                                        Computer Science</a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo $base_url."exam/entrance/emsat-training-course" ;?>">EmSAT
                                                        Training in Saudi Arabia and India</a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo $base_url."exam/entrance/gre" ;?>">GRE</a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo $base_url."exam/entrance/gmat" ;?>">GMAT</a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo $base_url."exam/entrance/psat-course" ;?>">PSAT
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo $base_url."exam/entrance/neet-course" ;?>">NEET</a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo $base_url."exam/entrance/emsat-course" ;?>">EmSAT</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="<?php echo $base_url."networking/networking-and-system-admin-courses" ;?>">Networking
                                        & System Admin</a>
                                    <ul>
                                        <li>
                                            <a href="<?php echo $base_url."networking/microsoft-technical-courses" ;?>">Microsoft
                                                Technical</a>
                                            <ul>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."networking/microsoft/ms-20761-querying-data-with-microsoft-transact-sql-2016" ;?>">Microsoft
                                                        Transact-SQL 2016
                                                    </a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."networking/microsoft/ms-20740-installation-storage-and-compute-with-windows-server-2016" ;?>">Microsoft
                                                        Windows Server 2016</a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."networking/microsoft/windows-10-installing-configuring-deploying" ;?>">Configuring
                                                        Windows 10
                                                    </a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."networking/microsoft/ms-20345-1-administering-microsoft-exchange-server-2016" ;?>">Administering
                                                        Microsoft Exchange Server 2016</a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."networking/microsoft/ms-10987-performance-tuning-and-optimizing-sql-databases" ;?>">Performance
                                                        Tuning Microsoft SQL Databases</a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo $base_url."networking/microsoft/docker-training" ;?>">Docker Training
                                                        and Courses</a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."networking/microsoft/ms-20762-developing-sql-2016-databases" ;?>">Developing
                                                        Microsoft SQL 2016 Databases</a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."networking/microsoft/ms-20742-identity-with-windows-server-2016" ;?>">Identity
                                                        with Windows Server 2016</a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."networking/microsoft/ms-20741-networking-with-microsoft-windows-server-2016" ;?>">Networking
                                                        with Microsoft Windows Server 2016
                                                    </a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."networking/microsoft/ms-20697-2-deploying-and-managing-windows-10-using-enterprise-services" ;?>">Windows
                                                        10 Using Enterprise Services</a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."networking/microsoft/ms-20346-managing-office-365-identities-and-services" ;?>">Managing
                                                        Office 365 Identities and Services</a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."networking/microsoft/ms-20345-2-designing-and-deploying-microsoft-exchange-server-2016" ;?>">
                                                        Microsoft Exchange Server 2016</a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."networking/microsoft/ms-20765-provisioning-sql-databases" ;?>">Provisioning
                                                        SQL Databases</a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."networking/microsoft/mcse-course" ;?>">MCSE</a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."networking/microsoft/ms-20764-administering-a-sql-database-infrastructure" ;?>">Administering
                                                        a SQL Server Database Infrastructure</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="<?php echo $base_url."networking/juniper-networks" ;?>">Juniper Networks</a>
                                            <ul>
                                                <li>
                                                    <a href="<?php echo $base_url."networking/juniper/juniper-network-associate" ;?>">Juniper
                                                        Network Associate</a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."networking/juniper-networks#juniper-enterprise-routing-and-switching-specialist " ;?>">Juniper
                                                        Enterprise Routing and Switching Specialist
                                                    </a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."networking/juniper/juniper-security-associate-course" ;?>">Juniper
                                                        Security Associate</a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."networking/juniper/juniper-security-specialist-course" ;?>">Juniper
                                                        Security Specialist</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="<?php echo $base_url."networking/other-network-security-courses" ;?>">Other
                                                Network Security Courses</a>
                                            <ul>
                                                <li>
                                                    <a href="<?php echo $base_url."networking/other/palo-alto-network" ;?>">Palo Alto
                                                        Network</a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."networking/other/outside-plant-design-course" ;?>">Outside
                                                        Plant Design</a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo $base_url."networking/other/big-ip-f5-ltm" ;?>">BIG IP F5 LTM</a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo $base_url."networking/other/structured-cabling" ;?>">Structured
                                                        Cabling</a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."networking/other/wireless-equipment-installation-course" ;?>">Wireless
                                                        Equipment Installation</a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo $base_url."networking/other/fttx-network" ;?>">FTTx Network</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="<?php echo $base_url."networking/red-hat-courses" ;?>">Red Hat</a>
                                            <ul>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."networking/red-hat-courses#red-hat-system-administration-I-training" ;?>">Red
                                                        Hat System Administration I</a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."networking/red-hat-courses#red-hat-system-administration-II-course" ;?>">Red
                                                        Hat System Administration II</a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."networking/red-hat-courses#red-hat-system-administration-III-course" ;?>">Red
                                                        Hat System Administration III</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="<?php echo $base_url."networking/cisco-courses" ;?>">Cisco</a>
                                            <ul>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."networking/cisco/cisco-enterprise-advanced-infrastructure" ;?>">Cisco
                                                        Enterprise Advanced Infrastructure</a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."networking/cisco/ccnp-course" ;?>">CCNP</a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."networking/cisco/cisco-certified-network-associate" ;?>">CCNA</a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."networking/cisco/cisco-sd-wan-course" ;?>">Cisco
                                                        SD WAN</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a
                                                href="<?php echo $base_url."networking/comptia-certification-courses" ;?>">CompTIA</a>
                                            <ul>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."networking/comptia/comptia-it-fundamentals-course" ;?>">CompTIA
                                                        IT Fundamentals</a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."networking/comptia/comptia-cloud-plus-course" ;?>">CompTIA
                                                        Cloud+</a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo $base_url."networking/comptia/comptia-linux-plus" ;?>">CompTIA
                                                        Linux+</a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."networking/comptia/comptia-cysa-plus-course" ;?>">CompTIA
                                                        CYSA+</a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo $base_url."networking/comptia/comptia-a-plus" ;?>">CompTIA A+
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo $base_url."networking/comptia/comptia-network-plus" ;?>">CompTIA
                                                        Network+</a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."networking/comptia/comptia-project-plus-course" ;?>">CompTIA
                                                        Project+</a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo $base_url."networking/comptia/comptia-security-plus" ;?>">CompTIA
                                                        Security+
                                                    </a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."networking/comptia/comptia-server-plus-course" ;?>">CompTIA
                                                        Server+</a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."networking/comptia/comptia-pentest-plus-course" ;?>">CompTIA
                                                        Pentest+
                                                    </a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="<?php echo $base_url."networking/comptia/comptia-advanced-security-practitioner-casp-plus" ;?>">CompTIA
                                                        CASP+</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </nav>
                    <div class="course-search">
                        <form class="course-search__form">
                            <input type="text" placeholder="Search for a Course" name="search"
                                class="course-search__field search-input1">
                            <button type="submit" class="course-search__button"><img
                                    src="<?php echo $base_url ."assets/images/course-search-icon.svg";?>" width="22"
                                    height="23" alt="SearchIcon" class="course-search__icon" /></button>
                            <ul id="autocomplete-results1" class="autocomplete-results"></ul>
                        </form>
                    </div>
                </div>
                <div class="site-header__col2-row2-col2">
                    <div class="modal-container">
                        <div class="modal-trigger request-a-callback">
                            <img src="<?php echo $base_url ."assets/images/request-a-callback-icon.svg";?>"
                                class="request-a-callback__icon">
                            <div class="request-a-callback__text">Request a Callback</div>
                        </div>
                        <div class="modal-content">
                            <div class="modal-wrapper">
                                <div class="modal-data">
                                    <div class="request-a-callback-form">
                                        <h3 class="h3 request-a-callback-form__heading">Request Course Information
                                        </h3>
                                        <form action="./send-enquiry" method="POST"
                                            class="form request-a-callback-form__content">
                                            <div class="form__field-container">
                                                <!-- <label for="name" class="form__label">Name:</label> -->
                                                <input required type="text" name="e_name" class="form__input-text"
                                                    placeholder="Enter Your Name">
                                                <div class="form__validation"></div>
                                            </div>
                                            <div class="form__field-container">
                                                <!-- <label for="name" class="form__label">Name:</label> -->
                                                <input required type="email" name="e_mail" class="form__input-text"
                                                    placeholder="Your E-mail">
                                                <div class="form__validation"></div>
                                            </div>
                                            <div class="form__field-container-group request-a-callback-form__tel-group">
                                                <div class="form__field-container">
                                                    <!-- <label for="name" class="form__label">Name:</label> -->
                                                    <input required type="number" name="e_code" value="+966"
                                                        class="form__input-text" placeholder="+966">
                                                    <div class="form__validation"></div>
                                                </div>
                                                <div class="form__field-container">
                                                    <!-- <label for="name" class="form__label">Name:</label> -->
                                                    <input required type="number" name="e_mobile"
                                                        class="form__input-text" placeholder="Phone Number">
                                                    <div class="form__validation"></div>
                                                </div>
                                            </div>
                                            <div class="form__field-container">
                                                <input required type="text" name="e_coursename"
                                                    placeholder="Search for a Course" name="interest"
                                                    class="form__input-text course-search__field search-input2"
                                                    value="">
                                                <ul id="autocomplete-results2" class="autocomplete-results"
                                                    style="display: block;"></ul>
                                                <div class="form__validation"></div>
                                            </div>
                                            <input type="hidden" name="e_type" value="request-a-call-back" />
                                            <input type="hidden" name="e_location" class="v_location"
                                                value="Saudi Arabia and India" />
                                            <input type="hidden" name="e_company" value="" />
                                            <input type="hidden" name="e_description" value="" />
                                            <p class="btn-wrapper">
                                                <input type="submit" class="btn btn1 tailored__submit-btn"
                                                    value="Submit"></input>
                                            </p>
                                        </form>
                                    </div>
                                </div>
                                <div class="close-icon"></div>
                            </div>
                        </div>
                    </div>
                    <a href="tel:+966115123339" class="contact-number">
                        <img src="<?php echo $base_url ."assets/images/contact-number-icon.svg";?>"
                            class="contact-number__icon">
                        <div class="contact-number__text">
                            +966 11 512 3339
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</header>