
   <?php include "head.inc"; ?>   
<style>
        #pagewrap{
        display: grid;
        grid-gap: 0px;
        grid-auto-columns: 1fr;
        grid-template-areas:
            "foto"
            "iso"
            "lukke"
            "hopid"
            "RAW"
            "Blænde"
            "lys"
            "kilde"
            "tiltop";

    }
    
    #foto{
        grid-area: foto;   
    }
    
    #center{
        text-align: center;
        border-bottom: solid #e589ba 1px;
    }
    
    #iso{
        grid-area: iso;
    }
    
    #lukke{
        grid-area: lukke;
    }
    
    #hopid{
        grid-area: hopid;
        padding: 10px;
    }
    
    #idahoppe{
        position: relative;
        border-radius: 50%;
    }
    
    #RAW{
        grid-area: RAW;
    }
    
    #Blænde{
        grid-area: Blænde;
    }
    
    #lys{
        grid-area: lys;
    }
    
    #tiltop{
        grid-area: tiltop;
        max-height: 100%;
        text-align: right;
        padding: 20px;
    }
    
    #kilde{
        grid-area: kilde;
        border: solid #e589ba 1px;
        margin: 10px;
     }
    
@media screen and (min-width:500px){
     #pagewrap{
        display: grid;
        grid-gap: 0px;
        grid-auto-columns: 1fr;
        grid-template-areas:
            "foto foto"
            "iso iso"
            "lukke hopid"
            "RAW Blænde"
            "lys lys"
            "kilde tiltop";
            }
    
}
    
@media screen and (min-width:900px){
    #pagewrap{
        display: grid;
        grid-gap: 0px;
        grid-auto-columns: 1fr;
        grid-template-areas:
            "foto foto foto"
            "iso lukke hopid"
            "RAW Blænde lys"
            "kilde tiltop tiltop";
            }
    }
    
    
</style>


  </head>

  <body>
    
      
   <?php include "menu.inc"; ?>
      
<!-- her starter sidens indhold ------------- --> 
    
    <div id="pagewrap">
        
        <div id="foto">
                <h1>Fotografering</h1> 
                <p id="center"> Man kan indstille på kameraet som man vil alt efter hvilken effekt /billede man ønsker at få ud af det. </p>
            </div>
            
        <div id="iso">
            <h2>ISO</h2>
            <p> 
                ISO =  følsomhed overfor lys. 
                Jo højere iso man sætter på jo mere lys lukker man ind i billedet, men det kan også resulterer i at billedet bliver mere grynet. 
            </p>
        </div>
        
        <div id="lukke">
            <h2>Lukketid</h2>
            <p> 
                jo længere lukketid/eksponering  man har på kameraet jo længere tid bliver lys bliver lukket ind i billedet. Man kan derfor opleve at hvis man vil tage et bilede af biler der køre forbi om aftenen, kommer det kun til at være lygterne man får med, som vil være formet som lyskegler. Det er fordi kameraet er lang tid om at lukke, og når billedet er taget, er bilen væk.
                Man kan opleve  at billedet bliver sløret hvis man har lang lukketid.
                <br> 
                Hvis man har kort lukketid så bliver billedet mere præcist, og der bliver ikke lukket så meget lys ind. Det kan derfor være en god ide at sætte højere ISO på, da det hjælper med at gøre billedet lysere. 
            </p>
        </div>
        
        <div id="hopid">
         <img id="idahoppe" src="billeder/langluk.jpg">
        </div>
        
        <div id="raw">
            <h2>RAW</h2>
            <p> 
                Så ændre kameraet ikke nogle beslutninger for dig, forhold til hvordan dit billede skal se ud, men hvis du derimod får den til at lave det til et JPG så vil kameraet tage nogle valg om hvordan lyser skal være mm.  
            </p>
        </div>
        
        <div id="Blænde">
            <h2>Blænde / Lukkevide</h2>
            <p> 
                Dette bestemmer hvor meget lys / skarphed/fokus der bliver skabt. 
                Hvis man eks har et lavt blændetal  og en stor blænde åbning, vil man kunne få at fokus på midten af billedet. 
                Hvis man derimod anvender en lille blænde åbning, og et højt blændetal vil der komme et skarpere billede hele vejen igennem. 
            </p>
        </div>
        
        <div id="lys">
            <h2>LYS</h2>
            <p> 
                Dette bestemmer hvor meget lys / skarphed/fokus der bliver skabt. 
                Hvis man eks har et lavt blændetal  og en stor blænde åbning, vil man kunne få at fokus på midten af billedet. 
                Hvis man derimod anvender en lille blænde åbning, og et højt blændetal vil der komme et skarpere billede hele vejen igennem.
                <br> 
                Kelvin farvetemperaturen
                <br>
                Lysstyren måles i Lumin 
            </p>
        </div> 
        
        <div id="kilde">
            
            <h4> Kilder </h4> 
            <h4> introduktion til fotografering - Niels Østergaard - PDF</h4> 
            
        </div>
        
        <div id="tiltop">
            <a href="http://idak0001.web.eadania.dk/Portfolio/fotografering.php"><img src="billeder/%20blomsttop.jpg"></a>
        </div>

      
    </div> <!--  ---------- pagewrap slutter --------------- !-->  
    
      
        
<!-- her slutter sidensindhold ************** --> 
        
    <?php include "foot.inc"; ?>