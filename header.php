<?
/********************************************************************************
 * The contents of this file are subject to the Common Public Attribution License
 * Version 1.0 (the "License"); you may not use this file except in compliance
 * with the License. You may obtain a copy of the License at
 * http://www.wikiarguments.net/license/. The License is based on the Mozilla
 * Public License Version 1.1 but Sections 14 and 15 have been added to cover
 * use of software over a computer network and provide for limited attribution
 * for the Original Developer. In addition, Exhibit A has been modified to be
 * consistent with Exhibit B.
 *
 * Software distributed under the License is distributed on an "AS IS" basis,
 * WITHOUT WARRANTY OF ANY KIND, either express or implied. See the License for
 * the specific language governing rights and limitations under the License.
 *
 * The Original Code is Wikiarguments. The Original Developer is the Initial
 * Developer and is Wikiarguments GbR. All portions of the code written by
 * Wikiarguments GbR are Copyright (c) 2012. All Rights Reserved.
 * Contributor(s):
 *     Andreas Wierz (andreas.wierz@gmail.com).
 *
 * Attribution Information
 * Attribution Phrase (not exceeding 10 words): Powered by Wikiarguments
 * Attribution URL: http://www.wikiarguments.net
 *
 * This display should be, at a minimum, the Attribution Phrase displayed in the
 * footer of the page and linked to the Attribution URL. The link to the Attribution
 * URL must not contain any form of 'nofollow' attribute.
 *
 * Display of Attribution Information is required in Larger Works which are
 * defined in the CPAL as a work which combines Covered Code or portions
 * thereof with code not governed by the terms of the CPAL.
 *******************************************************************************/

global $sTemplate, $sUser, $sQuery, $sPage;
$lang = $sTemplate->getLangBase();

$isGroupPage = $sPage->group() ? true : false;

// TODO: move to Page<*>
$filterString = "";
$tags         = $sQuery->getCurrentTags();
foreach($tags as $k => $v)
{
    if($v != "")
    {
        $filterString .= "-".strtolower($v);
    }
}
if(strlen($filterString))
{
    $filterString = substr($filterString, 1)."/";
    $filterStringTrending = $filterString;
}else
{
    $filterStringTrending = "";
}

$filterStringTop      = ($isGroupPage ? "tags/" : "i/")."top/".$filterString;
$filterStringNewest   = ($isGroupPage ? "tags/" : "i/")."newest/".$filterString;

$trendingActive = false;
$topActive      = false;
$newestActive   = false;
$sort;

if($sTemplate->isCurrentPage('default') || $sTemplate->isCurrentPage("group"))
{
    $sort = $sPage->getSort();

    $trendingActive = $sort == SORT_TRENDING;
    $topActive      = $sort == SORT_TOP;
    $newestActive   = $sort == SORT_NEWEST;
}
if($sPage->group())
{
    if($sPage->group()->url())
    {
        $filterStringTrending   = "groups/".$sPage->group()->url().($filterStringTrending ? "/tags/trending/".$filterStringTrending : "/");
        $filterStringTop        = "groups/".$sPage->group()->url()."/".$filterStringTop;
        $filterStringNewest     = "groups/".$sPage->group()->url()."/".$filterStringNewest;
    }
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//<? echo strtoupper($sTemplate->getString("HTML_HEADER_META_LANG")); ?>"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns = "http://www.w3.org/1999/xhtml" xml:lang = "<? echo $sTemplate->getString("HTML_HEADER_META_LANG"); ?>" lang = "<? echo $sTemplate->getString("HTML_HEADER_META_LANG"); ?>">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=1100" />
  <meta http-equiv="content-language" content="<? echo $sTemplate->getString("HTML_HEADER_META_LANG"); ?>" />
  <title><? echo $sPage->title(); ?></title>


  <link rel = "stylesheet" type = "text/css" href = "<? echo $sTemplate->getTemplateRoot(); ?>css/jquery-ui-1.7.2.custom.css.php" />
  <link rel = "stylesheet" type = "text/css" href = "<? echo $sTemplate->getTemplateRoot(); ?>css/style.css.php" />



  <script type='text/javascript' src='<? echo $sTemplate->getTemplateRoot(); ?>js/jquery.min.js'></script>
  <script type='text/javascript' src='<? echo $sTemplate->getTemplateRoot(); ?>js/jquery-ui.min.js'></script>
  <script type='text/javascript' src='<? echo $sTemplate->getTemplateRoot(); ?>js/jquery.jlabel-1.3.min.js'></script>
  <script type='text/javascript' src='<? echo $sTemplate->getTemplateRoot(); ?>js/jquery.fancynotification.js'></script>
  <script type='text/javascript' src='<? echo $sTemplate->getTemplateRoot(); ?>js/jquery.json.js'></script>
  <script type='text/javascript' src='<? echo $sTemplate->getTemplateRoot(); ?>js/wikiargument.js.php'></script>
  <script type='text/javascript' src='<? echo $sTemplate->getTemplateRoot(); ?>js/wikiargument_ui.js.php'></script>
  <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>


</head>
<? flush(); ?>
<body>

<script>
<? if($sPage->group() && $sPage->group()->url()) { ?>
var wikiargument = new _Wikiargument('<? echo $sPage->group()->url(); ?>');
<? }else { ?>
var wikiargument = new _Wikiargument('');
<? } ?>
</script>

  <div id = "wrapper">
    <div id = "header">

      <div id = "header_blue"></div>
      <div id = "header_white"></div>

      <div id = "header_content">
<? if(0 && $sPage->group() && $sPage->group()->url()) { ?>
        <a href = '<? echo $sTemplate->getRoot()."groups/".$sPage->group()->url()."/"; ?>'>
          <div id = "header_logo_custom" style = "background: url('<? echo $sTemplate->getRoot(); ?>custom/<? echo $sPage->group()->groupId(); ?>/logo.png') no-repeat;"></div>
        </a>
<? }else { ?>
        <a href = '<? echo $sTemplate->getRoot(); ?>'>
          <div id = "header_logo"></div>
        </a>
<?
   }

/*if($sPage->getQuestion() && $sPage->getQuestion()->type() == QUESTION_TYPE_UNLISTED)
{
?>
    <div id = "header_logo_unlisted"></div>
<?
    if($sPage->getQuestion()->hasFlag(QUESTION_FLAG_PART_ALL))
    {
?>
    <div id = "header_logo_unlisted_not_logged_in"></div>
<?
    }
}*/

?>


        <div id = "header_navigation">
          <form action = "#" onsubmit = "wikiargument.submitSearch(<? echo $sort; ?>); return false;">
          <div class = "navi_point trend <? echo $trendingActive ? "current_page" : "";?>">
            <a href = '<? echo $sTemplate->getRoot(); ?><? echo $filterStringTrending; ?>'><? echo $sTemplate->getString("NAVIGATION_WHATS_HOT"); ?></a>
          </div>

          <div class = "navi_point top <? echo $topActive ? "current_page" : "";?>">
            <a href = '<? echo $sTemplate->getRoot(); ?><? echo $filterStringTop; ?>'><? echo $sTemplate->getString("NAVIGATION_TOP"); ?></a>
          </div>

          <div class = "navi_point neu <? echo $newestActive ? "current_page" : "";?>">
            <a href = '<? echo $sTemplate->getRoot(); ?><? echo $filterStringNewest; ?>'><? echo $sTemplate->getString("NAVIGATION_NEWEST"); ?></a>
          </div>

          <div class = "navi_point">
              <input type = "text" value = "<? echo $sTemplate->getString("NAVIGATION_SEARCH_DEFAULT"); ?>" id = "navi_search" name = "navi_search"
                     onfocus = "if($('#navi_search').val() == '<? echo $sTemplate->getString("NAVIGATION_SEARCH_DEFAULT"); ?>') {$('#navi_search').val(''); }">
          </div>
          </form>
        </div>
      </div>

      <div id = "header_menu_wrapper">
<? if($sUser->isLoggedIn()) { ?>
        <div id = "header_menu" class = "header_menu">
          <div class = "username">
            <? echo htmlspecialchars($sUser->getUserName()); ?>
            <div class = "up_arrow"></div>
            <div class = "dn_arrow"></div>
          </div>

          <div class = "hidden profile_menu">
            <ul class="user_profile_list">
               <? /* <li><div class = "icon_new_question"></div><a href = '<? echo $sTemplate->getRoot(); ?>i/new-question/'><? echo $sTemplate->getString("HEADER_NAVI_NEW_QUESTION"); ?></a></li> */ ?>
                <li><div class = "icon_share_page"></div><a href = '#' onclick = "wikiargument.sharePage('<? echo $sPage->shortUrl() ? $sPage->shortUrl() : ''; ?>');"><? echo $sTemplate->getString("HEADER_NAVI_SHARE_PAGE"); ?></a></li>
                <li><div class = "icon_manage_profile"></div><a href = '<? echo $sTemplate->getRoot(); ?>i/manage-profile/'><? echo $sTemplate->getString("HEADER_NAVI_MANAGE_PROFILE"); ?></a></li>
                <li><div class = "icon_my_profile"></div><a href = '<? echo $sTemplate->getRoot(); ?>i/user/<? echo $sUser->getUserId(); ?>/'><? echo $sTemplate->getString("HEADER_NAVI_MY_PROFILE"); ?></a></li>
                <li><div class = "icon_logout"></div><a href = '<? echo $sTemplate->getRoot(); ?>i/logout/'><? echo $sTemplate->getString("HEADER_NAVI_LOGOUT"); ?></a></li>
<? foreach($sUser->adminGroups() as $k => $g) { ?>
               <? /* <li class = "user_profile_list_manage_group"><div class = "icon_new_group"></div><a href = '<? echo $sTemplate->getRoot(); ?>groups/<? echo $g->url(); ?>/manage-group/'><? echo htmlspecialchars($g->title()); ?></a></li> */ ?>
<? } ?>
            </ul>
          </div>
        </div>
<? }else{ ?>
          <div id = "header_menu_signup" class = "header_menu_signup">
            <div class = "header_signup">
              <a href = '<? echo $sTemplate->getRoot(); ?>i/signup/'><? echo $sTemplate->getString("HEADER_SIGNUP"); ?></a>
              <div class = "dn_arrow"></div>
            </div>
          </div>
<? } ?>
      </div>

    </div>
