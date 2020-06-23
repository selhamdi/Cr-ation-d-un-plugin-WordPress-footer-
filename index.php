<?php
/*
Plugin Name: icon RS 
Plugin URI: https://simplonline.co/
Description: Ceci est mon premier plugin
Author: elhamdi salima
Version: 1.0
Author URI: https://www.linkedin.com/in/salima-elhamdi-recherche-d-un-stage-b7600a170/
*/

if(!defined('ABSPATH'))
{
    exit;
}

add_action("admin_menu","addMenu");
function addMenu()
{
 
    add_menu_page("footer","footer",4,"footer","examplefooter",'dashicons-networking');
}
function examplefooter()
{
    include_once('footer.php');
}
function your_function() {
    
  echo"<footer id='main-footer' style='
      padding: center;
      background:#19557D;
      opacity: 0.8;
      color: white;
      height: 60px;
      display: flex;
      align-items: center;
      justify-content: space-between;
    '>

    <div class='footer_text' style='
     margin-left:5%; 
    text-align: right;
    font-size: 17px;
  '>Copyright &copy; 2020</div>

    <div style='margin-right:3%;
    color:white;
    '>
    <a href='".get_option('footer_link')."'>
    ".get_option('footer_text')."
      </a>
    </div>

    <div class='footer_icons' style='margin-left: 5%;
    text-align: center;
    margin-right:5%;
    display: block;
    width: 100px;
    padding: 4px;'>
        <a href='https://github.com/selhamdi'>
        <i class='fa fa-github fa-2x' style= 'color:white;'></i>
      </a>
      <a href='https://www.linkedin.com/in/salima-elhamdi-recherche-d-un-stage-b7600a170/'>
        <i class='fab fa-linkedin fa-2x' style= 'color:white;'></i>
      </a>
     
    </div>
     
    
  </footer>";
}
add_action( 'wp_footer', 'your_function' );
?>

