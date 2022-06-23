<?php

/**
 * Plugin Name: short_1 
 * Author: Claudia Lisboa
 * Description: Un premier exemple de plugin utilisant shortcode
 * Plugin URI : https://github.com/claudiaLisboa/31w
 */

function genere_adresse(){

    /*  CSS
    */
    $contenu = "<style>
                .code_adresse{
                    margin : 10px;
                    padding : 10px;
                    border-left : 5px solid #005;
                }       
                </style>";

    /*  HTML
    */
    $contenu .= '<code>';
    $contenu .= "3800 Sherbrooke St E, Montreal, Quebec H1X 2A2";
    $contenu .= '</code>';
    $contenu .= '<button id="mon_bouton">OK</button>';

    /*  script
    */
    $contenu .="<script>
    (function(){
        let elmOK = document.querySelector('#mon_bouton)
        elmOK.addEventListener('mousedown', function(){
                console.log('Bravo Ze Ruela le script ça marche !')
        })

    })()

               </script>";
    return $contenu;
}
add_shortcode('adresse','genere_adresse');