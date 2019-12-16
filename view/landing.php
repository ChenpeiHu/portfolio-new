<?php include 'view/includes/header.php'; ?>

    <main>
        <canvas id="particlesField">This Browser
            is not supported
        </canvas>
        <section class="landing-title">
            <div style="text-align: center;">
                <h1 id="landing-text">
                    Chen pei Hu
                </h1>
                <h6>
                    Full stack developer | Design | SEO
                </h6>
            </div>
        </section>

        <!--        <div class="background-transition1"></div>-->

        <section id="over-mij-sectie">
            <div class="container">
                <h2>Wie ben Ik</h2>
                <br>
                <p>
                    Ik heb altijd al technologie erg gaaf gevonden. Ik had zelf nooit gedacht om dit als mijn beroep te
                    doen totdat ik begon te leren over technologie. Ik heb uiteindelijk voor de opleiding applicatie- en
                    mediaontwikkeling gekozen op het ROC midden nederland. Ik hoor je nu natuurlijk vragen "maar
                    waarom?". Ik koos voor deze opleiding omdat ik erg geinteresserd werd in programmeren na het
                    verdiepen in wat ik wilde worden tijdens mijn vierde jaar op het middelbare school.
                </p>
                <p>
                    Natuurlijk had ik zelf nog geen ervaring in het programmeren en wist ik dat het een grote uitdaging
                    zou worden om in te stappen in een hele nieuwe wereld van computers en tech. Ik wist dat ik dit
                    wilde doen zelfs als ik geen voorkennis had van programmeren. Ik heb inmiddels veel geleerd en blijf
                    verder leren. Programmeren blijft altijd een uitdaging waar ik altijd iets nieuws zal leren. van een
                    simpel trucje tot een hele nieuwe manier van coderen.
                </p>
            </div>

        </section>

        <section id="werk-sectie" class="container">
            <div class="test-blok"></div>
            <div class="test-blok"></div>
            <div class="test-blok"></div>
            <div class="test-blok"></div>
        </section>

        <section id="skills-sectie">
            <div class="container">
                <h2>Wat kan ik</h2>
            </div>
        </section>

        <section id="contact-sectie">

            <div class="container contact-form">
                <div class="contact-image">
                    <img src="https://image.ibb.co/kUagtU/rocket_contact.png" alt="rocket_contact"/>
                </div>
                <form method="post">
                    <h3>Stuur een bericht</h3>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" name="txtName" class="form-control" placeholder="Naam *" value=""/>
                            </div>
                            <div class="form-group">
                                <input type="text" name="txtEmail" class="form-control" placeholder="Email *" value=""/>
                            </div>
                            <div class="form-group">
                                <input type="text" name="txtPhone" class="form-control" placeholder="Telefoonnummer *"
                                       value=""/>
                            </div>
                            <div class="form-group">
                                <input type="submit" name="btnSubmit" class="btnContact" value="Verstuur"/>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <textarea name="txtMsg" class="form-control" placeholder="Uw bericht *"
                                          style="width: 100%; height: 150px;"></textarea>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

        </section>

    </main>


<?php include 'view/includes/footer.php'; ?>