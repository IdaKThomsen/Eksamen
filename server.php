<?php include "head.inc"; ?>


<style>

        #pagewrap{
                display: grid;
                grid-gap: 0px;
                grid-auto-columns: 1fr;
                grid-template-areas:
                    "server"
                    "infoserver"
                    "typerserver"
                    "kilde"
                    "tiltop";
            }

        #server{
            grid-area: server;

            }

        #infoserver{
            grid-area: infoserver;
            border-bottom: solid #e589ba 1px;
            }

        #typerserver{
            grid-area: typerserver;

            }


        #kilde{
            grid-area: kilde;
            border: solid #e589ba 1px;
            margin: 10px;
            }

        #tiltop{
            grid-area: tiltop;
            max-height: 100%;
            text-align: right;
            padding: 20px;
             }

    @media screen and (min-width:500px){
        #pagewrap{
        display: grid;
        grid-gap: 0px;
        grid-auto-columns: 1fr 1fr;
        grid-template-areas:
            "server server"
            "infoserver infoserver"
            "typerserver typerserver"
            "kilde tiltop";
            }
        }

    @media screen and (min-width:900px){
        #pagewrap{
        display: grid;
        grid-gap: 0px;
        grid-template-columns: 1fr 1fr 1fr;
        grid-template-areas:
            "server server server"
            "infoserver infoserver infoserver "
            "typerserver typerserver typerserver"
            "kilde kilde tiltop";
            }
        }
    
</style>
            

</head>

    <body>


<?php include "menu.inc"; ?>



<div id="pagewrap">

            <div id="server"> 
                <h1> Server</h1>
            </div>
            <div id="infoserver">
                <p> 
                Det handler meget om roller. Når man taler om server, handler det om hardware og software som skal arbejde sammen.
                En server sørger for at man kan få forbindelse til en valgt server. Det er vigtigt for et stort firma at have en fælles server, så alle medarbejdere har tilgang til de samme dokumenter og filer. Ydermere kan det være en gode ide for en virksomhed at have en fælles mailserver, på den måde er det kun dem i virksomheden som har tilgang til serveren.  
                </p>
            </div>
            
            <div id="typerserver">
                <h2>Forskellige typer servere</h2>
                <dl>
                    <dt>Fil servere </dt>
	                <dt>Printservere</dt> 
	                <dt> Web server </dt>
                        <dd>- den levere HTML, CSS og javascript samt billeder</dd>
                    
                    <dt>FTP server</dt>
                        <dd>- den giver mulighed for at skifte en webserver ud, via denne</dd>  
                    <dt>Mail server</dt>
                        <dd>- google account, studentmail</dd>
                    <dt>Database server</dt>
                        <dd>- når du henter ændringer og merger dem</dd>
                    <dt>SSH server</dt>
                        <dd>( en server der er bergenet til at kommunikere på en særlig måde (sikker måde)</dd>
                    <dt>RDB server</dt>
                        <dd> ( remote desktop - man kan styre andres computere( andre maskiner)</dd>
                </dl> 
            </div>
    
    
            <div id="kilde">
                <h4> kilder </h4> 
                <h4> Client and Server Model - Video</h4> 
                <h4> Internettet og serveren - Niels Østergaard </h4>  
                
            </div>
            
            <div id="tiltop">
                <a href="http://idak0001.web.eadania.dk/Portfolio/server.php"><img src="billeder/%20blomsttop.jpg"></a>
            </div>
    

</div> <!-- pagewrap slutter -->

<?php include "foot.inc"; ?>
