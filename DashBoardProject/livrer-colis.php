<?php
session_start();

if (isset($_SESSION['customers_cin']) && isset($_SESSION['customers_fullname'])) {
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
        <link href="../img/white-logo.png" rel="icon">

        <title>Dashboard</title>

        <!-- Customized Bootstrap Stylesheet -->
        <link href="../css/style.css" rel="stylesheet">

    </head>

    <body>

        <div class="menu" style="    min-width: 100px;">
            <ul>
                <li>
                    <a href="../index.php">
                        <img src="../.img/white-logo.png" alt="logo" style="width: 100%"><br>
                    </a>
                </li>
                <br><br>
                <li>
                    <a href="dashboard.php">
                        <i class="fas fa-home"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li>
                    <a href="#" class="active">
                        <i class="fa-solid fa-truck-fast"></i>
                        <p>Livraison</p>
                    </a>
                </li>
                <li>
                    <a href="colis.php">
                        <i class="fas fa-table"></i>
                        <p>Colis</p>
                    </a>
                </li>
                <li>
                    <a href="charts.php">
                        <i class="fas fa-chart-pie"></i>
                        <p>Charts</p>
                    </a>
                </li>
                <li>
                    <a href="../index.php">
                        <i class="fas fa-home"></i>
                        <p>Acceuil</p>
                    </a>
                </li>
                <li class="log-out">
                    <a href="../logout.php">
                        <i class="fas fa-sign-out"></i>
                        <p>Log out </p>
                    </a>
                </li>
            </ul>
        </div>

        <div class="content">
            <section class="sign-up-area " style="background-color: transparent; ">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="contact-form-action">
                                <div class="form-heading text-center">
                                    <a href="../index.php"><img src="../img/white-logo.png" style="width: 100px;"
                                            alt="Logo"></a><br><br>
                                    <h3 class="form-title">Demander Livraison</h3>
                                </div>
                                <?php if (isset($_GET['error'])) { ?>
                                    <p class="error"> <?php echo $_GET['error']; ?> </p><br>
                                <?php } ?>
                                <form action="database.php" method="POST">
                                    <div class="row">

                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-group">
                                                <input class="form-control" type="text" name="colis_destinataire_nom"
                                                    placeholder="Nom Destinataire *" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-group">
                                                <input class="form-control" type="text" name="colis_destinataire_telephone"
                                                    placeholder="Telephone Destinataire *" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 ">
                                            <div class="form-group">
                                                <input type="tel" class="form-control" name="colis_poids"
                                                    placeholder="Poids (kg) *" required />
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 ">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="colis_dimension"
                                                    placeholder="Dimension (cm³) *" required />
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 ">
                                            <div class="form-group">
                                                <label style="display: block;">
                                                    <input type="text" class="form-control" name="colis_quantite"
                                                        placeholder="Quantité *" required />
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 ">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="colis_date_depot" onfocus="(this.type='date')"
                                                    onblur="(this.type='text')" placeholder="Date De Dépot *" required />
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 ">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="colis_date_livraison" onfocus="this.type='date'" onblur="this.type='text'"
                                                    placeholder="Date Livraison " />
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 ">
                                            <div class="form-group">
                                                <select class=" form-control" name="colis_mode_paiement" id="colis-mode_paiement"
                                                    style="height: auto;" style="color: black;">
                                                    <option class="form-control" value="Selectionner Le Mode De Paiement">Selctionner Le Mode De Paiement</option>
                                                    <option class="form-control" value="A Livraison">A Livraison</option>
                                                    <option class="form-control" value="Carte Banquaire">Carte Banquaire</option>
                                                    <option class="form-control" value="Virement">Virement</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-sm-6 ">
                                            <div class="form-group">
                                                <select class="form-control" name="colis_destination" id="colis-destination" onfocus="trierOptions()">
                                                    <option class="form-control">Selctionner La Destination</option>
                                                    <option value="Tetouan" class="form-control">Tetouan</option>
                                                    <option value="Ouazzane" class="form-control">Ouazzane</option>
                                                    <option value="Agadir" class="form-control">Agadir</option>
                                                    <option value="Chefchaouen" class="form-control">Chefchaouen</option>
                                                    <option value="Ksar el kebir" class="form-control">Ksar el kebir</option>
                                                    <option value="Khemis sahel" class="form-control">Khemis sahel</option>
                                                    <option value="Laaouamera" class="form-control">Laaouamera</option>
                                                    <option value="Kassita" class="form-control">Kassita</option>
                                                    <option value="Fes" class="form-control">Fes</option>
                                                    <option value="Settat" class="form-control">Settat</option>
                                                    <option value="Had soualem" class="form-control">Had soualem</option>
                                                    <option value="Ait ben haddou" class="form-control">Ait ben haddou</option>
                                                    <option value="Lbrouj" class="form-control">Lbrouj</option>
                                                    <option value="Ain mezouar" class="form-control">Ain mezouar</option>
                                                    <option value="Jemaa ashaim" class="form-control">Jemaa ashaim</option>
                                                    <option value="Ait amira" class="form-control">Ait amira</option>
                                                    <option value="Temsia" class="form-control">Temsia</option>
                                                    <option value="Azrou ( regions-agadir )" class="form-control">Azrou ( regions-agadir )</option>
                                                    <option value="Had ait belfaa" class="form-control">Had ait belfaa</option>
                                                    <option value="Drarga" class="form-control">Drarga</option>
                                                    <option value="Anza ( regions-agadir )" class="form-control">Anza ( regions-agadir )</option>
                                                    <option value="Aourir" class="form-control">Aourir</option>
                                                    <option value="Houara ( regions-agadir )" class="form-control">Houara ( regions-agadir )</option>
                                                    <option value="Tamraght" class="form-control">Tamraght</option>
                                                    <option value="Taghazoute" class="form-control">Taghazoute</option>
                                                    <option value="Sidi bibi" class="form-control">Sidi bibi</option>
                                                    <option value="Edchiera jihadia" class="form-control">Edchiera jihadia</option>
                                                    <option value="Ait melloul" class="form-control">Ait melloul</option>
                                                    <option value="Biougra" class="form-control">Biougra</option>
                                                    <option value="Lqliaa" class="form-control">Lqliaa</option>
                                                    <option value="Chetouka ait baha" class="form-control">Chetouka ait baha</option>
                                                    <option value="Inezgane" class="form-control">Inezgane</option>
                                                    <option value="Ain harrouda" class="form-control">Ain harrouda</option>
                                                    <option value="Mediouna" class="form-control">Mediouna</option>
                                                    <option value="Tit mellil" class="form-control">Tit mellil</option>
                                                    <option value="Dar bouazza" class="form-control">Dar bouazza</option>
                                                    <option value="Bouskoura" class="form-control">Bouskoura</option>
                                                    <option value="Oulad tayeb ( region-fes )" class="form-control">Oulad tayeb ( region-fes )</option>
                                                    <option value="Skhinate ( rigons-fes )" class="form-control">Skhinate ( rigons-fes )</option>
                                                    <option value="Ain allah" class="form-control">Ain allah</option>
                                                    <option value="Khouribga" class="form-control">Khouribga</option>
                                                    <option value="Ain cheggag" class="form-control">Ain cheggag</option>
                                                    <option value="Sefrou" class="form-control">Sefrou</option>
                                                    <option value="Midelt" class="form-control">Midelt</option>
                                                    <option value="Boudnib" class="form-control">Boudnib</option>
                                                    <option value="El gara" class="form-control">El gara</option>
                                                    <option value="Boumia" class="form-control">Boumia</option>
                                                    <option value="Boulemane" class="form-control">Boulemane</option>
                                                    <option value="Outat el haj" class="form-control">Outat el haj</option>
                                                    <option value="Missour" class="form-control">Missour</option>
                                                    <option value="Kettara" class="form-control">Kettara</option>
                                                    <option value="Errachidia" class="form-control">Errachidia</option>
                                                    <option value="Tahaaoute" class="form-control">Tahaaoute</option>
                                                    <option value="Er-rich" class="form-control">Er-rich</option>
                                                    <option value="Ait ourir" class="form-control">Ait ourir</option>
                                                    <option value="Talsint" class="form-control">Talsint</option>
                                                    <option value="Tahla" class="form-control">Tahla</option>
                                                    <option value="Tendrara" class="form-control">Tendrara</option>
                                                    <option value="Ourika ( region marrakech )" class="form-control">Ourika ( region marrakech )</option>
                                                    <option value="Tamensourt" class="form-control">Tamensourt</option>
                                                    <option value="Tiztoutine" class="form-control">Tiztoutine</option>
                                                    <option value="Tamallalt" class="form-control">Tamallalt</option>
                                                    <option value="Sidi bou othmane" class="form-control">Sidi bou othmane</option>
                                                    <option value="Amizmiz" class="form-control">Amizmiz</option>
                                                    <option value="Figuig" class="form-control">Figuig</option>
                                                    <option value="Imintanoute" class="form-control">Imintanoute</option>
                                                    <option value="Madagh" class="form-control">Madagh</option>
                                                    <option value="Bni drar" class="form-control">Bni drar</option>
                                                    <option value="Skhour rehamna" class="form-control">Skhour rehamna</option>
                                                    <option value="Aklim" class="form-control">Aklim</option>
                                                    <option value="Kariat arkmane" class="form-control">Kariat arkmane</option>
                                                    <option value="Ain bni mathar" class="form-control">Ain bni mathar</option>
                                                    <option value="Ben guerir" class="form-control">Ben guerir</option>
                                                    <option value="Bouarfa" class="form-control">Bouarfa</option>
                                                    <option value="Oued amlil" class="form-control">Oued amlil</option>
                                                    <option value="Zeghanghane" class="form-control">Zeghanghane</option>
                                                    <option value="Guercif" class="form-control">Guercif</option>
                                                    <option value="Ahfir" class="form-control">Ahfir</option>
                                                    <option value="Kelaat des sraghna" class="form-control">Kelaat des sraghna</option>
                                                    <option value="Saidia" class="form-control">Saidia</option>
                                                    <option value="Al aaroui" class="form-control">Al aaroui</option>
                                                    <option value="Selouane" class="form-control">Selouane</option>
                                                    <option value="Jerada" class="form-control">Jerada</option>
                                                    <option value="Taourirt" class="form-control">Taourirt</option>
                                                    <option value="Midar" class="form-control">Midar</option>
                                                    <option value="Laayoune charqiya" class="form-control">Laayoune charqiya</option>
                                                    <option value="Taza" class="form-control">Taza</option>
                                                    <option value="Bni ansar" class="form-control">Bni ansar</option>
                                                    <option value="Taouima" class="form-control">Taouima</option>
                                                    <option value="Sidi rahal ( region casablanca )" class="form-control">Sidi rahal ( region casablanca )</option>
                                                    <option value="El mansouria" class="form-control">El mansouria</option>
                                                    <option value="Ben ahmed ( region-settat )" class="form-control">Ben ahmed ( region-settat )</option>
                                                    <option value="Bouznika" class="form-control">Bouznika</option>
                                                    <option value="Berrechid" class="form-control">Berrechid</option>
                                                    <option value="Benslimane" class="form-control">Benslimane</option>
                                                    <option value="Deroua" class="form-control">Deroua</option>
                                                    <option value="Nouaceur" class="form-control">Nouaceur</option>
                                                    <option value="Mohammedia" class="form-control">Mohammedia</option>
                                                    <option value="Moulay driss zerhoun" class="form-control">Moulay driss zerhoun</option>
                                                    <option value="Agourai" class="form-control">Agourai</option>
                                                    <option value="Boufakrane" class="form-control">Boufakrane</option>
                                                    <option value="Sabaa aiyoun" class="form-control">Sabaa aiyoun</option>
                                                    <option value="Ifrane" class="form-control">Ifrane</option>
                                                    <option value="Ain taoujdate" class="form-control">Ain taoujdate</option>
                                                    <option value="Tiflet" class="form-control">Tiflet</option>
                                                    <option value="Khemisset" class="form-control">Khemisset</option>
                                                    <option value="El hajeb" class="form-control">El hajeb</option>
                                                    <option value="Sidi slimane" class="form-control">Sidi slimane</option>
                                                    <option value="Azrou ( regions-meknes )" class="form-control">Azrou ( regions-meknes )</option>
                                                    <option value="Sidi allal el bahraoui" class="form-control">Sidi allal el bahraoui</option>
                                                    <option value="Sidi allal tazi" class="form-control">Sidi allal tazi</option>
                                                    <option value="Belksiri" class="form-control">Belksiri</option>
                                                    <option value="Sidi yahya el gharb" class="form-control">Sidi yahya el gharb</option>
                                                    <option value="Souk el arbaa du rharb" class="form-control">Souk el arbaa du rharb</option>
                                                    <option value="Sidi kacem" class="form-control">Sidi kacem</option>
                                                    <option value="Jorf el melha" class="form-control">Jorf el melha</option>
                                                    <option value="Esouihla" class="form-control">Esouihla</option>
                                                    <option value="Essaouira" class="form-control">Essaouira</option>
                                                    <option value="Safi" class="form-control">Safi</option>
                                                    <option value="Bir jdid" class="form-control">Bir jdid</option>
                                                    <option value="Sebt Gzoula" class="form-control">Sebt Gzoula</option>
                                                    <option value="Youssoufia" class="form-control">Youssoufia</option>
                                                    <option value="Zemamra" class="form-control">Zemamra</option>
                                                    <option value="Oualidia" class="form-control">Oualidia</option>
                                                    <option value="Oulad salah" class="form-control">Oulad salah</option>
                                                    <option value="Tamanar" class="form-control">Tamanar</option>
                                                    <option value="Rommani" class="form-control">Rommani</option>
                                                    <option value="Meaziz" class="form-control">Meaziz</option>
                                                    <option value="Martil" class="form-control">Martil</option>
                                                    <option value="Mdiq" class="form-control">Mdiq</option>
                                                    <option value="Marina-smir" class="form-control">Marina-smir</option>
                                                    <option value="Cabo-negro" class="form-control">Cabo-negro</option>
                                                    <option value="Ksar sghir" class="form-control">Ksar sghir</option>
                                                    <option value="Dalia ( region ksar sghir )" class="form-control">Dalia ( region ksar sghir )</option>
                                                    <option value="Moulay bouselham" class="form-control">Moulay bouselham</option>
                                                    <option value="Lalla mimouna" class="form-control">Lalla mimouna</option>
                                                    <option value="Oued laou" class="form-control">Oued laou</option>
                                                    <option value="Azla" class="form-control">Azla</option>
                                                    <option value="Stehat" class="form-control">Stehat</option>
                                                    <option value="Fnidq" class="form-control">Fnidq</option>
                                                    <option value="Khmis mdiq" class="form-control">Khmis mdiq</option>
                                                    <option value="Bab berred" class="form-control">Bab berred</option>
                                                    <option value="Bab taza" class="form-control">Bab taza</option>
                                                    <option value="Masmouda" class="form-control">Masmouda</option>
                                                    <option value="Asjen" class="form-control">Asjen</option>
                                                    <option value="Mokrisset" class="form-control">Mokrisset</option>
                                                    <option value="Teroual" class="form-control">Teroual</option>
                                                    <option value="Ain dorij" class="form-control">Ain dorij</option>
                                                    <option value="Sidi bousber" class="form-control">Sidi bousber</option>
                                                    <option value="Sidi redouane" class="form-control">Sidi redouane</option>
                                                    <option value="Zoumi" class="form-control">Zoumi</option>
                                                    <option value="Taliouine" class="form-control">Taliouine</option>
                                                    <option value="Oulad berhil" class="form-control">Oulad berhil</option>
                                                    <option value="Aoulouz" class="form-control">Aoulouz</option>
                                                    <option value="Tafraout" class="form-control">Tafraout</option>
                                                    <option value="Tiznit" class="form-control">Tiznit</option>
                                                    <option value="Oulad teima" class="form-control">Oulad teima</option>
                                                    <option value="Taroudannt" class="form-control">Taroudannt</option>
                                                    <option value="Akhfennir" class="form-control">Akhfennir</option>
                                                    <option value="Boujdour" class="form-control">Boujdour</option>
                                                    <option value="Dakhla" class="form-control">Dakhla</option>
                                                    <option value="Tarfaya" class="form-control">Tarfaya</option>
                                                    <option value="Laayoune" class="form-control">Laayoune</option>
                                                    <option value="Laayoune port" class="form-control">Laayoune port</option>
                                                    <option value="El ouatia" class="form-control">El ouatia</option>
                                                    <option value="Tan tan" class="form-control">Tan tan</option>
                                                    <option value="Oulad ayad" class="form-control">Oulad ayad</option>
                                                    <option value="Feryata" class="form-control">Feryata</option>
                                                    <option value="Smara" class="form-control">Smara</option>
                                                    <option value="Zag" class="form-control">Zag</option>
                                                    <option value="Assa" class="form-control">Assa</option>
                                                    <option value="Sidi ifni" class="form-control">Sidi ifni</option>
                                                    <option value="Foum jemaa" class="form-control">Foum jemaa</option>
                                                    <option value="Bouizakarne" class="form-control">Bouizakarne</option>
                                                    <option value="Ouled mbarek" class="form-control">Ouled mbarek</option>
                                                    <option value="Had bradia" class="form-control">Had bradia</option>
                                                    <option value="Oulad ali loued" class="form-control">Oulad ali loued</option>
                                                    <option value="Guelmim" class="form-control">Guelmim</option>
                                                    <option value="Boujniba" class="form-control">Boujniba</option>
                                                    <option value="Afourer" class="form-control">Afourer</option>
                                                    <option value="Dar ould zidouh" class="form-control">Dar ould zidouh</option>
                                                    <option value="Tlat loulad" class="form-control">Tlat loulad</option>
                                                    <option value="Bejaad" class="form-control">Bejaad</option>
                                                    <option value="Demnate" class="form-control">Demnate</option>
                                                    <option value="Mrirt" class="form-control">Mrirt</option>
                                                    <option value="Khenifra" class="form-control">Khenifra</option>
                                                    <option value="Zaouiat cheikh" class="form-control">Zaouiat cheikh</option>
                                                    <option value="Oued zem" class="form-control">Oued zem</option>
                                                    <option value="El ksiba" class="form-control">El ksiba</option>
                                                    <option value="Azilal" class="form-control">Azilal</option>
                                                    <option value="Kasba tadla" class="form-control">Kasba tadla</option>
                                                    <option value="Ain chkef" class="form-control">Ain chkef</option>
                                                    <option value="Imouzzer kandar" class="form-control">Imouzzer kandar</option>
                                                    <option value="Taounate" class="form-control">Taounate</option>
                                                    <option value="Sebt oulad nemma" class="form-control">Sebt oulad nemma</option>
                                                    <option value="Fquih ben salah" class="form-control">Fquih ben salah</option>
                                                    <option value="Merzouga" class="form-control">Merzouga</option>
                                                    <option value="Msemrir" class="form-control">Msemrir</option>
                                                    <option value="Boumalne dades" class="form-control">Boumalne dades</option>
                                                    <option value="Arfoud" class="form-control">Arfoud</option>
                                                    <option value="Jorf" class="form-control">Jorf</option>
                                                    <option value="Tinejdad" class="form-control">Tinejdad</option>
                                                    <option value="Kalaat mgouna" class="form-control">Kalaat mgouna</option>
                                                    <option value="Goulmima" class="form-control">Goulmima</option>
                                                    <option value="Rissani" class="form-control">Rissani</option>
                                                    <option value="Tinghir" class="form-control">Tinghir</option>
                                                    <option value="Tagounite" class="form-control">Tagounite</option>
                                                    <option value="Sidi mokhtar" class="form-control">Sidi mokhtar</option>
                                                    <option value="Farkhana" class="form-control">Farkhana</option>
                                                    <option value="Ras el ma ( regions-nador )" class="form-control">Ras el ma ( regions-nador )</option>
                                                    <option value="Sidi rahal ( region kalaatt sraghna )" class="form-control">Sidi rahal ( region kalaatt sraghna )</option>
                                                    <option value="Agdz" class="form-control">Agdz</option>
                                                    <option value="Bni bouayach" class="form-control">Bni bouayach</option>
                                                    <option value="Ben tib" class="form-control">Ben tib</option>
                                                    <option value="Skoura" class="form-control">Skoura</option>
                                                    <option value="Chemmaia" class="form-control">Chemmaia</option>
                                                    <option value="Tata" class="form-control">Tata</option>
                                                    <option value="Chichaoua" class="form-control">Chichaoua</option>
                                                    <option value="Attaouia" class="form-control">Attaouia</option>
                                                    <option value="Ouarzazate" class="form-control">Ouarzazate</option>
                                                    <option value="Zagora" class="form-control">Zagora</option>
                                                    <option value="Zaio" class="form-control">Zaio</option>
                                                    <option value="Issaguen" class="form-control">Issaguen</option>
                                                    <option value="Targuist" class="form-control">Targuist</option>
                                                    <option value="Driouch" class="form-control">Driouch</option>
                                                    <option value="Imzouren" class="form-control">Imzouren</option>
                                                    <option value="Ajdir" class="form-control">Ajdir</option>
                                                    <option value="Ain leuh" class="form-control">Ain leuh</option>
                                                    <option value="El hadj kaddour" class="form-control">El hadj kaddour</option>
                                                    <option value="Khenichet" class="form-control">Khenichet</option>
                                                    <option value="Dar el kebdani" class="form-control">Dar el kebdani</option>
                                                    <option value="Had draa" class="form-control">Had draa</option>
                                                </select>
                                            </div>
                                        </div>
                                        <!-- Pour trier les options -->
                                        <script>
                                            function trierOptions() {
                                                const selectElement = document.getElementById('colis-destination');
                                                const options = Array.from(selectElement.options);

                                                options.sort((a, b) => a.text.localeCompare(b.text));

                                                selectElement.options.length = 0;
                                                options.forEach(option => selectElement.appendChild(option));
                                            }
                                        </script>

                                        <div class="col-md-6 col-sm-6 ">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="colis_adresse" required
                                                    placeholder="Adresse *" />
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <button class="default-btn btn" type="submit" name="submit"
                                                style="display: block; margin: auto; background-color: #f50038; ">
                                                Créer Un Colis
                                            </button>
                                            <br>
                                        </div>
                                        <br>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </body>
<?php
} else {
    header("Location: ../EspaceClient.php");
    exit();
}
?>

<!-- Alert js -->
<script src="../js/sweetalert.js"></script>
<?php if (isset($_SESSION['prix'])) {
    $prix = $_SESSION['prix'] ?>
    <script>
        swal("Votre demande de livraison a bien été enregistrée", "Le prix total de la livraison est de <?php echo $prix ?> DHs.", "success");
    </script>
<?php
    unset($_SESSION['prix']);
} else if (isset($_SESSION['erreur'])) { ?>
    <script>
         swal("Oooops...", "<?php echo $_SESSION['erreur']; ?>", "error");
    </script>
<?php
    unset($_SESSION['erreur']);
} ?>

    </html>