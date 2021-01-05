<?php
/*
Plugin Name: Modip Contact Form Plugin
Plugin URI: http://example.com
Description: Simple non-bloated WordPress Contact Form
Version: 1.0
Author: Modip
Author URI: http://w3guy.com
*/
    
    function modip_form_plugin()
    {
        $content = '';
       
        $content .= '<fieldset class="fieldset" id="emp">';
        $content .= '<legend class="legend">Nous  contacter!</legend>';

        $content .= ' <form method="POST" action="http://localhost/myblog/" >';


        $content .= ' <div class="itemFieldset">';

            $content .= ' <div>';
                $content .= '<label for="">Nom</label>';
                $content .= ' <input type="text" name="nom" id="nom" placeholder="Votre nom svp.">';
            $content .= ' </div>';

            $content .= ' <div>';
                $content .= '<label for="">Email</label>';
                $content .= ' <input type="text" name="email" id="email" placeholder="Votre email svp.">';
            $content .= ' </div>';

            $content .= ' <div>';
                $content .= '<label for="">Question ou commentaire</label>';
                $content .= ' <textarea name="commentaire" id="commentaire" placeholder="Commentaire"> </textarea>';
             $content .= ' </div>';

        $content .= ' </div>';

            $content .= '<div class="btnSave">';
                $content .= '<input type="submit" name="btnAjouter" class="btn" value="Envoyer" />';
                $content .= ' </div>';

        $content .= ' </form>';

        $content .= '</fieldset>';

        return $content;
    }

    add_shortcode('modip_form','modip_form_plugin');
