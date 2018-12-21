<?php include "head.inc"; ?>


<style>

    #pagewrap{
    display: grid;
    grid-gap: 0px;
    grid-auto-columns: 1fr;
    grid-template-areas:
        "tml"
        "opbygning"
        "indryk"
        "semantiske"
        "hyper"
        "validering"
       ;
    }

#tml{
    grid-area: tml;
    background-color: aquamarine;
}

#opbygning{
    grid-area: opbygning;
    background-color: aquamarine;
}

#indryk{
    grid-area: indryk;
    background-color: aquamarine;

}

#semantiske{
    grid-area: semantiske;
    background-color: aquamarine;
}

#hyper{
    grid-area: hyper;
    background-color: aquamarine;
    
}

#validering{
    grid-area: validering;
    background-color: aquamarine;
    
}
  
@media screen and (min-width:500px){
    
#pagewrap{
    display: grid;
    grid-gap: 0px;
    grid-auto-columns: 1fr 1fr;
    grid-template-areas:
        "tml tml"
        "opbygning opbygning"
        "semantiske hyper"
        "validering indryk";
    }

}

@media screen and (min-width:900px){
    
    #pagewrap{
    display: grid;
    grid-gap: 0px;
    grid-template-columns: 1fr 1fr 1fr;
    grid-template-areas:
        "tml tml tml"
        "opbygning opbygning opbygning"
        "hyper indryk validering"
        "semantiske semantiske semantiske";
        }

}
    
</style>


    </head> 


<body>
    
<?php include "menu.inc"; ?>



    
<div id="pagewrap"> 

<div id="tml">
                <h1> HTML </h1>
                <p>
                    HTML betyder Hypertext Markup Language og bliver brugt til at definere indholdet til en webside.
                </p>
                
            </div>

            <div id="opbygning">
                <h2>Opbygningen af et HTML element/tag </h2>
                
                <p>
                 &lt;h1 class="hovedoverskrift"&gt; Her er min overskrift&lt;/h1&gt; 
                </p>  
                
                <p>
                Man starter med et tag navn, som i dette tilfælde er h1.
                Derefter kan man vælge at give den en Class - dette er også kaldt en attribut   
                Jeg har givet class en værdi, så man i sit CSS kan vende tilbage til den. Dette er  også kaldt en attribut værdi som skal sluttes med et ">" efter start tagget er afsluttet så kan man skrive sin tekst, i dette tilfælde en overskrift og derefter slutter man hele tagget &lt;/h1&gt;

                Når man anvender HTML er der nogle basale ting som er vigtige at huske for at både bliver overskueligt for mennesker og maskiner.  
                </p>
                
            </div> 
            
            <div id="indryk">
                <h2>Indryk</h2>
                <p>
                Dette er med til at skabe struktur i ens html, som gør det mere overskueligt at se hvilke tags der høre sammen og hvad de indeholder. Ved at lave de rigtige indryk er det også nemmere for andre at læse den kode man har lavet 
                </p>
            </div>
            
            <div id="semantiske">
                <h2>Semantiske tags</h2>
                
                <p>
                Semantisk  Læren om betydning 
                Hvis noget er semantisk, har det betydning.
                Så når man anvender semantiske tags fortæller de noget om indholdet i det givende tag eks. 

                Semantisk
                    
                &lt;article&gt; &lt;/article&gt;  her ved man hvad tagget indeholder, da den fortæller noget om indholdet

                Ikke semantisk

                &lt;div&gt; &lt;/div&gt;  denne er ikke semantisk, fordi den ikke fortæller hvad den indeholder. Inde under en div kan der ligge mange andre tags. 
                </p>
                
            </div>    
                
            <div id="hyper">
                <h2>Hypertext</h2> 
                <p>
                Hypertext er begreb som Ted Nelson opfandt, 
                Det bruges til at gøre det muligt at referer til forskellige sider tekster eller billeder. 
                Meningen med hypertext er at der skal være en forbindelse med det hele, og det skal være muligt at have flere "vinduer" åbne på samme tid. 
                </p>
            </div>    

            <div id="validering">
                <h2>Validering </h2>
                
                <p>
                Når man har lavet noget HTML, er det en god ide at få det tjekket igennem af et program som kan sørge for at ens kode er brugbar. 
                På den måde undgår man fejl og mangler på ens side. 
                
                </p>  
            
            </div>
    </div>
    

<?php include "foot.inc"; ?>