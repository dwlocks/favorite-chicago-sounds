<?php

/** 
 * GentleSource Comment Script
 * 
 * (C) Ralf Stadtaus http://www.gentlesource.com/
 */

  /*****************************************************
  **
  ** THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY
  ** OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT
  ** LIMITED   TO  THE WARRANTIES  OF  MERCHANTABILITY,
  ** FITNESS    FOR    A    PARTICULAR    PURPOSE   AND
  ** NONINFRINGEMENT.  IN NO EVENT SHALL THE AUTHORS OR
  ** COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES
  ** OR  OTHER  LIABILITY,  WHETHER  IN  AN  ACTION  OF
  ** CONTRACT,  TORT OR OTHERWISE, ARISING FROM, OUT OF
  ** OR  IN  CONNECTION WITH THE SOFTWARE OR THE USE OR
  ** OTHER DEALINGS IN THE SOFTWARE.
  **
  *****************************************************/




// Settings
if (!defined('C5T_ROOT')) {
    define('C5T_ROOT', './');
}


$detail_template = 'comment.tpl.html';
$login_level     = 0;



// Include
require C5T_ROOT . 'include/core.inc.php';
require 'comment.class.inc.php';


// Start output handling
$out = new c5t_output($detail_template);


// Start comment handling
$comment = new c5t_comment;


// Start captcha handling
require 'captcha.class.inc.php';
$cap = new c5t_captcha;


// Handle and validate form
require_once 'HTML/QuickForm.php';


// Start form handler
$form_action = getenv('REQUEST_URI');
if (c5t_gpc_vars('ssi') or c5t_gpc_vars('ssi_redirect')) {
    $form_action = $c5t['script_url'] . 'include.php';
}
$form = new HTML_QuickForm('form', 'POST', $form_action);

// Add redirect URL
if (c5t_gpc_vars('ssi') or c5t_gpc_vars('ssi_redirect')) {
    $form->addElement('hidden', 'ssi_redirect');
    if ($ssi_redirect = c5t_gpc_vars('ssi_redirect')) {
        $c5t['alternative_template'] = 'standalone';
    } else {
        $ssi_redirect = getenv('REQUEST_URI');
    }
    $form->setDefaults(array('ssi_redirect' => $ssi_redirect));
}


// Get form configuration
require 'comment_form.inc.php';


// Validate form
$message = array();
$show_form = 'yes';
if ($form->validate()) {
    if ($cap->check()) {
        $comment->put();
        $show_form = 'no';
        if ($ssi_redirect = c5t_gpc_vars('ssi_redirect')) {
            header('Location: ' . $c5t['server_protocol'] . $c5t['server_name'] . $ssi_redirect);
            exit;
        }
    } else {
        $message[]['message'] = $text['txt_captcha_try_again'];
    }
} else {
    if (sizeof($c5t['_post']) > 0) {
        $message[]['message'] = $text['txt_fill_out_required'];
    }
}

$out->assign('show_form', $show_form);

if ($comment_data = $comment->get_list()) {
    array_walk($comment_data, 'c5t_clean_output');
    $out->assign('comment_list', $comment_data);
}


require_once 'HTML/QuickForm/Renderer/ArraySmarty.php';
$renderer =& new HTML_QuickForm_Renderer_ArraySmarty($out->get_object, true);
           
$form->accept($renderer);


// Assign array with form data
$out->assign('form', $renderer->toArray());
 
// Add captcha
if ($captcha = $cap->create()) {
    $out->assign('captcha', $captcha);
}


// Output
$out->assign('message', $message);
$c5t_output = $out->finish(false);
//echo $c5t_output;





?>
