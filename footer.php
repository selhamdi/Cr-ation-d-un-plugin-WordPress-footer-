<?php
if(!defined('ABSPATH'))
{
    exit;
}
    global $variable1;
    global $variable2;
    if(isset($_POST['wphw_submit'])){
            wphw_opt();
    }
    function wphw_opt(){
        $text1 = $_POST['footertextname'];
        $text2 = $_POST['footerlinkname'];
        global $variable1;
        if( get_option('footer_text') != trim($text1)){
            $variable1= update_option( 'footer_text', trim($text1));
        }
        if( get_option('footer_link') != trim($text2)){
          $variable1 = update_option( 'footer_link', trim($text2));
      }
    }
?>
<div class="wrap">
  <div id="icon-options-general" class="icon32"> <br>
  </div>
  <h2>Footer Settings</h2>
  <?php if(isset($_POST['wphw_submit']) && ($variable1 || $variable2)):?>
  <div id="message" class="updated below-h2">
    <p>Content updated successfully</p>
  </div>
  <?php endif;?>
  <div class="metabox-holder">
    <div class="postbox">
      <h3><strong>Enter footer link and click on save button.</strong></h3>
      <form method="post" action="">
        <table class="form-table">
          <tr>
            <th scope="row">Footer name</th>
            <td><input type="text" name="footertextname" 
value="<?php echo get_option('footer_text');?>" style="width:350px;" /></td>
          </tr>
          <tr>
            <th scope="row">Footer Link</th>
            <td><input type="text" name="footerlinkname" 
value="<?php echo get_option('footer_link');?>" style="width:350px;" /></td>
          </tr>
          <tr>
            <th scope="row">&nbsp;</th>
            <td style="padding-top:10px;  padding-bottom:10px;">
<input type="submit" name="wphw_submit" value="Save changes" class="button-primary" />
</td>
          </tr>
        </table>
      </form>
    </div>
  </div>
</div>
