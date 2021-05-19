<?php
 require_once "../controller/carteC.php" ; 
require_once "../model/carte.php" ;
?>
<html>


  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="assets/images/logof.png">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>Fagito</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/owl.css">

  </head>

  <body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
      <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
           <a class="navbar-brand" href="index.html"><h2>Fag<em>ito</em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
			
			
			 
                <li class="nav-item"><a class="nav-link" href="view/livraison.php">Livraison</a></li>
<li class="nav-item"><a class="nav-link" href="view/commande.html">Commande</a></li>

<li class="nav-item"><a class="nav-link" href="view/afficherresto.php">Restaurants</a></li>


                     <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Service Client</a>
                    
                    <div class="dropdown-menu">
                      
                      <a class="dropdown-item" href="view/Afficheoffre.php">Offres</a>
                      <a class="dropdown-item" href="view/Ajoutcarte.php">Carte fidélité</a>
                    </div>
                </li>
				   
				
				    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Espace Membre</a>
                    
                    <div class="dropdown-menu">
                      <a class="dropdown-item"  href="view/modifier.php?idutilisateur=<?PHP echo $_SESSION['idutilisateur']; ?>">Modifier vos donneés</a>
                      <a class="dropdown-item" href="view/deconnexion.php">Déconnexion</a>
                      
                    </div>
                </li>
                <li class="nav-item dropdown">
                
					 
                    
                    <div class="dropdown-menu">
					
				
                   
                      
                      
                    </div>
                </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <!-- Page Content -->
    <div class="page-heading about-heading header-text" style="background-image: url(GIFT.jpg);">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="text-content">
              <h4>béneficiez-vous des points</h4>
              <h2>Carte de fidelité</h2>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="send-message">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Prenez votre carte et bénefeciez des cartes et des points </h2>
            </div>
          </div>
          <div class="col-md-8">
            <div class="contact-form">
              <form id="contact" action="" method="post">

              <style type="text/css">
* {
   box-sizing: border-box;
}

:root {
   --background: white;

   --primary: #ff1ead;
   --secondary: #1effc3;
   
   --card-size: 300px;
}



.card { 
   width: 1000px;
   height: 700px;
   
   border-radius: 0.75rem;
   box-shadow:  0 22px 70px 4px rgba(0,0,0,0.56), 0 0 0 1px rgba(0, 0, 0, 0.3);
   
   background: black;
   
   display: grid;
   grid-template-columns: 40% auto;
   color: white;
   
   align-items: center;
   
   will-change: transform;
   transition: transform 0.25s cubic-bezier(0.4, 0.0, 0.2, 1), box-shadow 0.25s cubic-bezier(0.4, 0.0, 0.2, 1);
   
   &:hover {
      transform: scale(1.1);
      box-shadow:  0 32px 80px 14px rgba(0,0,0,0.36), 0 0 0 1px rgba(0, 0, 0, 0.3);
   }
}

.card-details {
   padding: 1rem;
}

.name {
   font-size: 1.25rem;
}

.occupation {
   font-weight: 600;
   color: var(--primary);
}

.card-avatar {
   display: grid;
   place-items: center;
}

svg {
   fill: white;
   width: 65%;
}

.card-about {
   margin-top: 1rem;
   display: grid;
   grid-auto-flow: column;
}

.item {
   display: flex;
   flex-direction: column;
   margin-bottom: 0.5rem;
   
   .value {
      font-size: 1rem;
   }
 
   
   .label {
      margin-top: 0.15rem;
      font-size: 0.75rem;
      font-weight: 600;
      color: var(--primary);
   }
}

.skills {
   display: flex;
   flex-direction: column;
   margin-top: 0.75rem;
   
   .label {
      font-size: 1rem;
      font-weight: 600;
      color: var(--primary);
   }
   
   .value {
      margin-top: 0.15rem;
      font-size: 0.75rem;
      line-height: 1.25rem;
   }
   
}
</style>
<link href="https://fonts.googleapis.com/css?family=Source+Code+Pro:400,500" rel="stylesheet">

<div class="card">
   <div class="card-avatar">
      <svg viewBox="0 0 208 278">
          <g transform="matrix(0.1,0,0,-0.1,-31.2625,284.904)">
              <path d="M1275,2844C1142,2816 1055,2779 909,2687C780,2606 699,2523 614,2385C540,2266 503,2183 458,2035C426,1928 425,1920 425,1743L425,1561L398,1533C295,1422 283,1151 374,972C406,909 492,807 533,782C573,758 630,749 669,760C699,768 699,768 721,702C755,598 814,481 869,408C925,334 1043,234 1108,206C1131,195 1150,183 1150,179C1150,174 1167,166 1188,161C1209,155 1252,137 1285,121C1408,62 1694,53 1840,104C1881,119 1916,135 1918,140C1920,145 1950,169 1984,194C2057,246 2122,316 2180,403C2244,500 2328,677 2350,763C2380,884 2392,1116 2387,1505C2383,1844 2382,1858 2357,1954C2271,2279 2182,2452 2025,2599C1826,2785 1667,2851 1426,2849C1354,2848 1286,2846 1275,2844ZM1650,2785C1866,2718 2111,2498 2205,2287C2252,2179 2299,2031 2325,1903L2352,1775L2347,1355C2342,910 2336,834 2293,716C2192,434 1983,186 1799,129C1724,106 1506,103 1420,125L1365,138L1440,139C1573,141 1550,157 1404,165L1265,172L1163,223C1091,259 1040,293 986,342C944,380 910,415 910,418C910,422 988,424 1082,422C1177,420 1251,422 1247,427C1242,431 1160,437 1065,440C906,445 889,447 876,465C867,476 860,489 860,494C860,499 940,501 1053,497C1271,490 1355,503 1160,513C1092,517 993,520 939,520L841,520L825,550C817,566 810,580 810,582C810,584 876,580 958,573C1140,559 1360,557 1380,570C1390,577 1355,580 1270,581C1201,581 1067,587 971,593C803,605 797,606 789,628L780,652L1023,645C1206,639 1262,640 1254,649C1247,657 1171,661 1009,663C867,664 772,669 768,675C764,681 760,692 760,700C760,713 802,715 1082,714C1292,713 1382,715 1340,721C1304,725 1156,730 1012,731L748,734L739,758C718,813 702,811 1063,805C1251,802 1384,804 1370,809C1356,813 1201,820 1027,824C734,831 708,830 696,815C689,805 665,796 639,793C603,789 588,793 555,815C533,830 506,853 496,867L477,893L501,887C547,876 1313,866 1307,877C1303,883 1188,890 1018,894C862,897 671,903 592,907L450,913L430,945C419,963 410,980 410,984C410,987 431,990 458,990C500,990 507,987 522,960C536,935 545,930 579,930C610,930 623,936 639,957L660,983L838,976C935,972 1051,965 1095,960C1181,950 1367,947 1358,955C1350,963 903,1000 810,1000C694,1000 652,1008 645,1031C637,1056 610,1055 610,1030C610,1014 603,1010 575,1010C546,1010 539,1014 534,1035C522,1083 535,1093 593,1086C665,1077 1286,1066 1279,1074C1276,1077 1161,1084 1024,1090C887,1095 739,1102 695,1106L614,1111L614,1177L980,1172C1185,1170 1341,1171 1337,1176C1332,1181 1168,1189 973,1195L617,1205L602,1248C594,1272 590,1293 592,1295C594,1298 695,1293 816,1285C1048,1269 1245,1267 1295,1280C1332,1289 1346,1288 1045,1301C908,1306 744,1314 682,1318L569,1325L548,1359L526,1393L586,1386C618,1382 670,1379 700,1380C730,1380 856,1372 980,1362C1104,1351 1207,1345 1209,1346C1222,1357 1066,1378 879,1390C681,1404 674,1405 666,1427C663,1437 657,1451 654,1459C650,1467 652,1470 657,1467C666,1461 1106,1430 1166,1430C1188,1431 1191,1433 1179,1440C1171,1445 1094,1454 1009,1460C704,1481 625,1490 610,1505C598,1518 609,1520 700,1519C758,1519 861,1515 930,1511C999,1506 1059,1506 1063,1510C1077,1522 1015,1529 795,1540C679,1546 559,1555 528,1562C476,1571 470,1575 470,1597L470,1621L563,1615C613,1612 724,1605 808,1600C893,1594 978,1590 998,1591C1033,1591 1034,1592 1010,1601C981,1613 663,1639 543,1640C464,1640 460,1641 460,1663L460,1685L738,1686C895,1687 1028,1692 1045,1698C1067,1705 990,1709 768,1709L460,1710L460,1775L800,1772C1030,1770 1140,1773 1140,1780C1140,1787 1028,1790 800,1790L460,1790L460,1814C460,1837 461,1837 608,1843C689,1847 872,1848 1015,1846C1209,1843 1265,1844 1235,1852C1211,1859 1049,1863 827,1864C464,1865 459,1865 464,1885C467,1896 470,1911 470,1919C470,1943 1199,1923 1350,1895C1377,1890 1381,1891 1368,1899C1325,1927 1151,1942 817,1947L479,1952L486,1974C489,1985 496,2000 502,2005C516,2020 835,2014 1043,1996C1236,1979 1379,1976 1345,1990C1306,2005 903,2033 704,2034L503,2035L511,2065C516,2081 520,2096 520,2097C520,2107 946,2097 1045,2084C1179,2067 1388,2054 1380,2063C1362,2082 969,2122 743,2129L531,2135L564,2210L596,2285L801,2284C913,2283 1039,2277 1080,2271C1201,2252 1268,2248 1247,2261C1213,2281 979,2310 840,2311C766,2311 686,2315 662,2318C624,2324 621,2327 632,2341C643,2355 672,2356 876,2351C1004,2347 1132,2347 1161,2350C1268,2361 1156,2370 910,2370C780,2370 671,2373 667,2376C664,2380 668,2393 677,2406L692,2430L949,2430C1313,2430 1346,2444 997,2450L710,2455L732,2487L755,2520L1002,2520C1156,2520 1251,2524 1255,2530C1259,2536 1244,2540 1218,2541C1194,2542 1166,2543 1155,2544C1144,2545 1056,2547 960,2548L785,2550L810,2570C833,2588 852,2590 1020,2590C1176,2591 1300,2600 1280,2610C1277,2612 1187,2615 1080,2619L885,2625L924,2649C962,2673 965,2673 1154,2668C1259,2665 1336,2666 1325,2671C1314,2675 1280,2679 1250,2680C1220,2681 1155,2687 1105,2694C1022,2705 1017,2707 1039,2719C1057,2729 1095,2731 1189,2727C1258,2725 1323,2719 1333,2715C1343,2711 1350,2712 1350,2719C1350,2725 1331,2733 1308,2737L1265,2743L1297,2754C1350,2772 1349,2783 1295,2775C1117,2749 1088,2754 1220,2790C1284,2807 1317,2810 1445,2806C1546,2803 1613,2796 1650,2785ZM526,1515C543,1502 539,1501 480,1501C421,1501 417,1502 434,1515C445,1523 466,1530 480,1530C494,1530 515,1523 526,1515ZM596,1460C604,1452 616,1438 621,1428C630,1411 624,1410 518,1410C386,1410 373,1415 392,1455L404,1483L492,1478C542,1475 587,1467 596,1460ZM415,1390C425,1390 426,1382 421,1363C412,1328 360,1316 360,1349C360,1381 372,1402 387,1396C395,1393 408,1390 415,1390ZM504,1354C530,1329 523,1318 488,1325C448,1334 446,1335 453,1355C461,1374 484,1374 504,1354ZM420,1293C428,1280 433,1279 436,1288C440,1295 461,1300 491,1300C535,1300 541,1297 555,1270C585,1212 581,1209 463,1212L355,1215L352,1263C349,1309 349,1310 379,1310C397,1310 414,1303 420,1293ZM549,1184C589,1176 590,1150 551,1150C532,1150 516,1142 507,1129C494,1112 484,1109 429,1112L365,1115L362,1153L359,1190L438,1190C482,1190 532,1187 549,1184ZM500,1050L500,1010L449,1010C401,1010 398,1012 384,1045C377,1064 370,1082 370,1085C370,1088 399,1090 435,1090L500,1090L500,1050Z" style="fill-rule:nonzero;"/>
              <path d="M625,2212C547,2198 618,2190 808,2190C911,2190 1056,2183 1130,2175C1287,2158 1363,2156 1340,2170C1293,2197 733,2230 625,2212Z" style="fill-rule:nonzero;"/>
              <path d="M1270,1826C1229,1820 1189,1811 1182,1806C1151,1787 1192,1784 1310,1797C1381,1805 1478,1809 1534,1806C1627,1801 1670,1808 1670,1830C1670,1843 1358,1840 1270,1826Z" style="fill-rule:nonzero;"/>
              <path d="M2035,1828C1980,1823 1923,1819 1908,1820C1875,1820 1872,1805 1901,1789C1916,1781 1943,1781 2003,1789C2047,1795 2121,1800 2167,1800C2242,1800 2251,1802 2248,1818C2244,1839 2184,1842 2035,1828Z" style="fill-rule:nonzero;"/>
              <path d="M2005,1723C1928,1706 1864,1656 1854,1605C1835,1504 1967,1409 2086,1439C2141,1453 2210,1498 2235,1536C2244,1551 2253,1584 2254,1610C2256,1692 2199,1731 2080,1729C2050,1728 2016,1726 2005,1723ZM2197,1674C2252,1639 2227,1557 2146,1503C2106,1475 2088,1470 2040,1470C1961,1470 1900,1503 1883,1554C1861,1619 1900,1666 1997,1689C2046,1702 2169,1692 2197,1674Z" style="fill-rule:nonzero;"/>
              <path d="M2031,1636C2015,1617 2025,1600 2051,1600C2066,1600 2071,1606 2068,1622C2064,1649 2047,1655 2031,1636Z" style="fill-rule:nonzero;"/>
              <path d="M1241,1699C1195,1689 1149,1673 1139,1664C1116,1643 1114,1590 1135,1547C1181,1451 1388,1408 1500,1471C1579,1515 1632,1608 1610,1666C1589,1719 1403,1736 1241,1699ZM1512,1675C1537,1672 1563,1663 1569,1657C1581,1641 1569,1580 1546,1545C1500,1475 1348,1452 1242,1499C1178,1528 1160,1551 1160,1606L1160,1647L1243,1663C1288,1673 1345,1682 1370,1683C1416,1687 1430,1686 1512,1675Z" style="fill-rule:nonzero;"/>
              <path d="M1407,1627C1399,1606 1415,1588 1436,1592C1463,1597 1461,1634 1434,1638C1422,1640 1410,1635 1407,1627Z" style="fill-rule:nonzero;"/>
              <path d="M1774,1565C1764,1541 1778,1349 1796,1266C1804,1227 1819,1173 1831,1147C1850,1102 1850,1096 1836,1075C1812,1039 1838,1030 1867,1064C1889,1090 1889,1092 1873,1128C1841,1201 1812,1336 1805,1453C1798,1564 1788,1602 1774,1565Z" style="fill-rule:nonzero;"/>
              <path d="M1720,793C1643,779 1696,746 1786,752C1855,756 1866,761 1857,785C1851,800 1783,804 1720,793Z" style="fill-rule:nonzero;"/>
              <path d="M1030,331C1044,322 1256,315 1345,320L1385,322L1345,331C1290,342 1011,342 1030,331Z" style="fill-rule:nonzero;"/>
              <path d="M1150,250C1150,238 1426,238 1455,250C1467,255 1413,259 1313,259C1210,260 1150,256 1150,250Z" style="fill-rule:nonzero;"/>
          </g>
      </svg>
   </div>
  <div class="card-details">
 
        <label for="nom">Nom:
        </label>
    
    <input type="nom" class="form-control" id="nom" name="nom"
    pattern="[a-zA-Z]{2,}" title="surname  can not have numbers or sympoles" required>
  
    <label for="prenom">Prenom:
        </label>
      <input type="text" class="form-control" name="prenom" id="prenom" pattern="[a-zA-Z]{2,}" title="name can not have numbers or sympoles" required=""> 
      <label for="ddn">Date de naissance :
        </label>

        <input type="date" class="form-control" name="ddn" id="ddn" max="12-12-2000" required="" >

        <label for="typecarte">Type du votre carte:
        </label>
    
        <select type="text" class="form-control" name="typecarte" id="typecarte" required>
    <option value="">--Please choose your carte type--</option>
    <option value="standard">Standard</option>
    <option value="premuim">Premuim</option>
 
       </select>
 

        <label for="tel">tel:
        </label>
    
        <input type="tel" class="form-control" name="tel" id="tel" pattern="[0-9]{8}" title="8 numbers" required>
  <style>
  .button {
  display: inline-block;
  background-color: #C6C3C3;
  border: none;
  color: bl;
  text-align: center;
  font-size: 28px;
  width: 570px;
  transition: all 0.5s;
  cursor: pointer;
}
.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}
  </style>
        <div class="button">
        <button class="button" style="vertical-align:middle" name ="ajouter" ><span>Ajouter </span></button>   </div>

       <!-- <input type="submit" class="button" value="Ajouter" name ="ajouter" >
        <!--<script src="controle.js"> </script>
   
        <input type="reset" class="button" value="Annuler" >
        </div>-->
    </div> 

  
  
  </div>
      
     
           

  
              </form>
            </div>
          </div>
         <!-- <div class="col-md-4">
            <img src="welcome.jpg" class="img-fluid" alt="">

           
          </div>-->
        </div>
      </div>
    </div>

 

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Book Now</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="contact-form">
              <form action="#" id="contact">
                  <div class="row">
                       <div class="col-md-6">
                          <fieldset>
                            <input type="text" class="form-control" placeholder="Pick-up location" required="">
                          </fieldset>
                       </div>

                       <div class="col-md-6">
                          <fieldset>
                            <input type="text" class="form-control" placeholder="Return location" required="">
                          </fieldset>
                       </div>
                  </div>

                  <div class="row">
                       <div class="col-md-6">
                          <fieldset>
                            <input type="text" class="form-control" placeholder="Pick-up date/time" required="">
                          </fieldset>
                       </div>

                       <div class="col-md-6">
                          <fieldset>
                            <input type="text" class="form-control" placeholder="Return date/time" required="">
                          </fieldset>
                       </div>
                  </div>
                  <input type="text" class="form-control" placeholder="Enter full name" required="">

                  <div class="row">
                       <div class="col-md-6">
                          <fieldset>
                            <input type="text" class="form-control" placeholder="Enter email address" required="">
                          </fieldset>
                       </div>

                       <div class="col-md-6">
                          <fieldset>
                            <input type="text" class="form-control" placeholder="Enter phone" required="">
                          </fieldset>
                       </div>
                  </div>
              </form>
           </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            <button type="button" class="btn btn-primary">Book Now</button>
          </div>
        </div>
      </div>
    </div>


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
 
    <script src="assets/js/owl.js"></script>
  </body>
  <?php


  // create user
  $user = null;
  
  // create an instance of the controller
  $userC = new carteC();
  if (
  
      isset($_POST["nom"]) &&
      isset($_POST["prenom"]) &&
      isset($_POST["ddn"])   &&
      isset($_POST["typecarte"])   &&
      isset($_POST["tel"])
  ){
      if (
         
          !empty($_POST["nom"]) &&
          !empty($_POST["prenom"]) &&
          !empty($_POST["ddn"]) &&
          !empty($_POST["typecarte"]) &&
          !empty($_POST["tel"])

  
      ) {
          $user = new carte(
         
              $_POST['nom'],
              $_POST['prenom'],
              $_POST['ddn'],
              $_POST['typecarte'],
              $_POST['tel'],
  
        );
       
       
          $userC->ajoutercarte($user);
        
$rec = $_POST['nom'].".".$_POST['prenom']."@esprit.tn";
$msg = "Bonjour ".$_POST['nom'].","."Nous avons le plaisir de vous informer etes mainetenant un client du FAGITO , Vous bénefeciez des nombreux offres , merci pour votre confiance et BIENVENUE AU FAGITO "; 
mail($rec,'BIENVENUE AU FAGITO',$msg);


        //   header('Location:affichercarte.php');
      }
      else
       echo   $error = "??????????????";
      
  }
  

  ?>
  <script> 
  function ajout()
			{
				return alert(" Ajout carte avec succées ! "); } </script>
</html>
