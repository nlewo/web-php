<?php
require_once 'prepend.inc';

// Gecko would like to see the target to be _content, while IE would
// like to see the target to be _main. Other browsers are not expected
// to visit this page, or support for them will be added in the future.
if (preg_match('/Gecko/', $HTTP_SERVER_VARS['HTTP_USER_AGENT'])) {
    $target = "_content"; 
} else {
    $target = "_main";
}
?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
 <title>PHP.net Search Sidebar</title>
 <link rel="shortcut icon" href="/favicon.ico" />
 <style>
  select, input, button, body, p, td {
      font-family: "MS Sans Serif";
      font-size: 13px;
  }
  .title {
      font-size: 25px;
      color: black;
      font-weight: bold;
  }
  .indented {
      margin: 5px 5px 5px 5px;
  }
 </style>
</head>
<body topmargin="0" leftmargin="0"
 bgcolor="#ffffff" text="#000000" link="#000099" alink="#0000ff"
 vlink="#000099" onload="document.sform.pattern.focus();">
<table border="0" cellspacing="2" cellpadding="0">
 <tr>
  <td width="69"><a href="/" target="<?php echo $target ?>"><img src="logos/php-logo.gif" width="69" height="36" border="0" alt="PHP" hspace="3" vspace="3" /></a></td>
  <td class="title" align="left">Search</td>
 </tr>
 <tr bgcolor="#333366"><td colspan="2"><img src="gifs/spacer.gif" width="1" height="1" border="0" alt="" /></td></tr>
 <tr>
  <td colspan="2">
   <div class="indented">
   <form method="post" action="/search.php" target="<?php echo $target ?>" name="sform">
   <input type="hidden" name="lang" value="<?php if(empty($LANG)) echo htmlspecialchars(default_language()); else echo htmlspecialchars($LANG); ?>">
   Search for<br />
   <input type="text" name="pattern" value="" style="width: 95%"/><br />
   in the<br />
   <select name="show" style="width: 95%">
   <option value="quickref" selected>function list
   <option value="nosource">whole site
   <option value="manual">online documentation
   <option value="bugdb">bug database
   <option value="maillist">general mailing list
   <option value="devlist">developer mailing list
   <option value="phpdoc">documentation mailing list 
   </select><br />
   <input type="submit" value="Search">
   </form>
   </div>
  </td>
 </tr>
 <tr bgcolor="#333366"><td colspan="2"><img src="gifs/spacer.gif" width="1" height="1" border="0" alt="" /></td></tr>
 <tr>
  <td colspan="2">
   <div class="indented">
   <small><a href="/copyright.php" target="<?php echo $target ?>">Copyright &copy; 2002 The PHP Group</a><br />All rights reserved.</small>
   </div>
  </td>
 </tr>
</table>
</body>
</html>
