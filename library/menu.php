<?php 
function library_academy_menu( $menu, $element ) {

    if ( $menu == 'primary' ) {

        if ( $element == 'label' ) {

            if ( is_archive() ) {


                if ( 
                    is_category( 'getting-started' ) ||
                    post_is_in_descendant_category( 5 )               
                    ) {
                        $element = 'Getting Started';
                    }



                if ( 
                    is_category( 'research' )  ||
                    post_is_in_descendant_category( 4 ) 
                    ) {

                        $element = 'Research';

                    }

                if ( 
                    is_category( 'browse-by-subject' ) ||
                    post_is_in_descendant_category( 6 )
                    ) {
                    
                        $element = 'Subjects';
                    }


                if ( is_category( 'citation-management' ) ||
                    post_is_in_descendant_category( 3 ) 
                    ) {

                        $element = 'Citation Management';

                    }

            }

            elseif ( is_single() ) {
                $element = "Video";
            }
           
            else { $element = 'Browse for Videos'; }            
            return $element;

        } // if $element == 'label'

        if ( $element == 'menu' ) {

            $args =  array(                
                'menu'          => 'primary-menu',
                'container'     => false,
                'menu_class'    => 'sub-menu',
                'fallback_cb'   => false
            );

            wp_nav_menu( $args );

        } // if $element is 'menu'
        
    } // if $menu is 'primary'

    if ( $menu == 'secondary' ) {

        if ( $element == 'label' ) {

            if ( !is_front_page() ) {

                if ( is_category() ) {

                    if ( is_category( 'citation-management' ) ) {
                        $element = 'All Videos';
                    }

                    elseif ( is_category( 'getting-started' ) ) {
                        $element = 'All Videos';
                    }

                    elseif ( is_category( 'research' ) ) {
                        $element = 'All Videos';
                    }

                    elseif ( is_category( 'browse-by-subject' ) ) {
                        $element = 'All';
                    }
                    else {
                        $element = single_cat_title();
                    }
                }

                if ( is_single() ) { 

                    $string = substr( get_the_title(), 0, 40 );
                    $element = substr( $string, 0, strrpos( $string, ' ' ) ) . ' ... ';
                }

                if ( is_search() ) { $element = ''; }

            }

            else { $element = ''; }

            return $element;
        } // if $element is 'label'

        if ( $element == 'menu') {

            $args =  array(

                'menu'          => 'Secondary Menu',
                'container'     => false,
                'menu_class'    => 'sub-menu',
                'fallback_cb'   => false
            );

            wp_nav_menu( $arg );

        } // if $element is 'menu'

    } // if $menu is 'secondary'
    
}
 ?>