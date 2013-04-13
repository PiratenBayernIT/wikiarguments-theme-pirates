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

global $sTemplate, $sUser, $sDB, $sPacket, $sPage, $sQuery;

$page        = "";
$language    = $sTemplate->getLangBase();
$user        = $sUser;
$group       = $sPage->group();
$groupAdmins = Array();

$owner = $sQuery->getUser("userId=".$group->ownerId());
?>
<? include($sTemplate->getTemplateRootAbs()."header.php"); ?>

<div id = "content_wide">
  <div class = "thin">
      <div class = "clean_box">
        <div class = "row">
          <div class = "headline"><? echo $sTemplate->getString("MANAGE_GROUP_HEADLINE"); ?></div>
        </div>
      </div>
      <div class = "clean_box">
        <div class = "row subheadline">
          <? echo $sTemplate->getString("MANAGE_GROUP_GENERAL_INFORMATION"); ?>
        </div>
      </div>
      <div class = "shaded_box">
        <div class = "row row_half_padding">
          <div class = "manage_group_label"><? echo $sTemplate->getString("MANAGE_GROUP_URL"); ?></div>
          <div class = "manage_group_col"><a class="black" href="<? echo $sTemplate->getRoot(); ?>groups/<? echo $sPage->group()->url(); ?>/"><? echo $sTemplate->getString("GROUPS_URL"); ?><? echo $sPage->group()->url(); ?>/</a></div>
        </div>
        <div class = "row"></div>
        <div class="clear"></div>
      </div>

      <div class = "clean_box">
        <div class = "row subheadline">
          <? echo $sTemplate->getString("MANAGE_GROUP_MEMBERS"); ?>
        </div>
      </div>
      <div class = "shaded_box">

<?
foreach($group->userPermissions() as $userId => $permission)
{
    $user = $sQuery->getUser("userId=".$userId);
    if(!$user)
    {
        continue;
    }

    if($permission & GROUP_PERMISSION_ADMIN)
    {
        array_push($groupAdmins, $user);
    }
?>
        <form action = "<? echo $sTemplate->getRoot()."groups/".$group->url()."/manage-group/"; ?>" method = "POST" name = "form_delete_<? echo $user->getUserId(); ?>" id = "form_delete_<? echo $user->getUserId(); ?>">
          <input type = "hidden" name = "userId" value = "<? echo $user->getUserId(); ?>" />
          <input type = "hidden" name = "delete_user" value = "1" />
        </form>

        <form action = "<? echo $sTemplate->getRoot()."groups/".$group->url()."/manage-group/"; ?>" method = "POST" name = "form_permissions_<? echo $user->getUserId(); ?>" id = "form_permissions_<? echo $user->getUserId(); ?>">
          <input type = "hidden" name = "userId" value = "<? echo $user->getUserId(); ?>" />
          <input type = "hidden" name = "change_permissions" value = "1" />
          <div class = "row row_half_padding row_manage_group_users">
            <div class = "manage_group_label"><a style = "color: #040404;" href="<? echo $sTemplate->getRoot().'user/'.$user->getUserId().'/'; ?>"><? echo htmlspecialchars($user->getUserName()); ?></a></div>
            <div class = "manage_group_col">
              <select name = "permissions" id = "permissions_<? echo $user->getUserId(); ?>" onchange = "$('#form_permissions_<? echo $user->getUserId(); ?>').submit();" class = "permissions wide">
                <option value = "<? echo GROUP_PERMISSION_QUESTIONS; ?>"<? echo $permission == GROUP_PERMISSION_QUESTIONS ? ' selected' : ''; ?>>
                  <? echo $sTemplate->getString("GROUP_PERMISSION_QUESTIONS"); ?>
                </option>
                <option value = "<? echo GROUP_PERMISSION_ARGUMENTS; ?>"<? echo $permission == GROUP_PERMISSION_ARGUMENTS ? ' selected' : ''; ?>>
                  <? echo $sTemplate->getString("GROUP_PERMISSION_ARGUMENTS"); ?>
                </option>
                <option value = "<? echo GROUP_PERMISSION_ARGUMENTS + GROUP_PERMISSION_QUESTIONS; ?>"<? echo $permission == GROUP_PERMISSION_ARGUMENTS + GROUP_PERMISSION_QUESTIONS ? ' selected' : ''; ?>>
                  <? echo $sTemplate->getString("GROUP_PERMISSION_QUESTIONS_ARGUMENTS"); ?>
                </option>
                <option value = "<? echo GROUP_PERMISSION_ARGUMENTS + GROUP_PERMISSION_QUESTIONS + GROUP_PERMISSION_ADMIN; ?>"<? echo $permission == GROUP_PERMISSION_ARGUMENTS + GROUP_PERMISSION_QUESTIONS + GROUP_PERMISSION_ADMIN ? ' selected' : ''; ?>>
                  <? echo $sTemplate->getString("GROUP_PERMISSION_ADMIN"); ?>
                </option>
              </select>
              <button class = "button_black" onclick = "$('#form_delete_<? echo $user->getUserId(); ?>').submit();"><? echo $sTemplate->getString("SUBMIT_REMOVE_USER"); ?></button>
            </div>
          </div>
        </form>
<? } ?>

<? if($owner) { ?>
        <div class = "row row_half_padding row_manage_group_users">
          <div class = "manage_group_label"><? echo htmlspecialchars($owner->getUserName()); ?></div>
          <div class = "manage_group_col">
            <select class = "permissions" disabled>
              <option value = "-1" selected>
                <? echo $sTemplate->getString("GROUP_PERMISSION_OWNER"); ?>
              </option>
            </select>
          </div>
        </div>
<? } ?>

        <div class = "row"></div>
        <div class="clear"></div>
      </div>
      <div class = "clean_box">
        <div class = "row subheadline">
          <? echo $sTemplate->getString("MANAGE_GROUP_ADD_MEMBERS"); ?>
        </div>
      </div>
      <div class = "shaded_box">
        <form action = "<? echo $sTemplate->getRoot()."groups/".$sPage->group()->url()."/manage-group/"; ?>" method = "POST" name = "form_add_members" id = "form_add_members">
        <div class = "row row_half_padding" style = "padding-right: 40px;">
          <div class = "col_70">
		   <textarea id = "group_users" name = "group_users" style="width:421px" title="<? echo $sTemplate->getString("DIVIDE_USERNAMES"); ?>" onfocus = "if($('#group_users').val() == '<? echo $sTemplate->getString("DIVIDE_USERNAMES"); ?>') {$('#group_users').val(''); }"><? echo $sTemplate->getString("DIVIDE_USERNAMES"); ?></textarea>
          </div>

          <div class = "col_30">
            <select name = "permissions" id = "permissions" class="right_align" style = "width: 191px;">
              <option value = "<? echo GROUP_PERMISSION_QUESTIONS; ?>"><? echo $sTemplate->getString("GROUP_PERMISSION_QUESTIONS"); ?></option>
              <option value = "<? echo GROUP_PERMISSION_ARGUMENTS; ?>"><? echo $sTemplate->getString("GROUP_PERMISSION_ARGUMENTS"); ?></option>
              <option value = "<? echo GROUP_PERMISSION_ARGUMENTS + GROUP_PERMISSION_QUESTIONS; ?>" selected><? echo $sTemplate->getString("GROUP_PERMISSION_QUESTIONS_ARGUMENTS"); ?></option>
              <option value = "<? echo GROUP_PERMISSION_ARGUMENTS + GROUP_PERMISSION_QUESTIONS + GROUP_PERMISSION_ADMIN; ?>"><? echo $sTemplate->getString("GROUP_PERMISSION_ADMIN"); ?></option>
            </select><br />
            <div style = "margin-top: 30px;">
              <button class = "button_black" style = "float: right;" onclick = "$('#form_add_members').submit();"><? echo $sTemplate->getString("SUBMIT_ADD_USERS"); ?></button>
            </div>
          </div>
          <div class="clear"></div>
        </div>
        <input type = "hidden" name = "add_users" value = "1" />

        <div class = "row"></div>
		<div class="clear"></div>
        </form>
      </div>

      <div class = "clean_box">
        <div class = "row subheadline">
          <? echo $sTemplate->getString("MANAGE_GROUP_OTHER_SETTINGS"); ?>
        </div>
      </div>
      <div class = "shaded_box">
        <form action = "<? echo $sTemplate->getRoot()."groups/".$sPage->group()->url()."/manage-group/"; ?>" method = "POST" name = "form_other_settings" id = "form_other_settings">
        <div class = "row row_half_padding">
          <div class = "manage_group_label"><? echo $sTemplate->getString("GROUP_VISIBILITY"); ?></div>
            <div class = "manage_group_col">
              <select name = "group_visibility" id = "group_visibility" class="wide">
                <option value = "<? echo VISIBILITY_PUBLIC; ?>" <? echo $sPage->group()->visibility() == VISIBILITY_PUBLIC ? 'selected' : ''; ?>><? echo $sTemplate->getString("GROUP_VISIBILITY_PUBLIC"); ?></option>
                <option value = "<? echo VISIBILITY_PRIVATE; ?>" <? echo $sPage->group()->visibility() == VISIBILITY_PRIVATE ? 'selected' : ''; ?>><? echo $sTemplate->getString("GROUP_VISIBILITY_PRIVATE"); ?></option>
              </select>
            </div>
            <input type = "hidden" name = "update_other_settings" value = "1" />
        </div>
        <div class = "row row_submit" style = "padding-right: 40px;">
            <button class = "button_orange" onclick = "$('#form_other_settings').submit();"><? echo $sTemplate->getString("SUBMIT_OTHER_SETTINGS"); ?></button>
        </div>
        </form>
        <div class = "row"></div>
        <div class="clear"></div>
      </div>

<? if($group->isOwner($sUser->getUserId())) { ?>
      <div class = "clean_box">
        <div class = "row subheadline">
          <? echo $sTemplate->getString("MANAGE_GROUP_OWNER_OPTIONS"); ?>
        </div>
      </div>

      <div class = "shaded_box">
        <form action = "<? echo $sTemplate->getRoot()."groups/".$sPage->group()->url()."/manage-group/"; ?>" method = "POST" name = "form_change_ownership" id = "form_change_ownership">
        <div class = "row row_half_padding">
          <div class = "manage_group_label"><? echo $sTemplate->getString("GROUP_CHANGE_OWNERSHIP"); ?></div>
            <div class = "manage_group_col">
              <select name = "group_owner" id = "group_owner" class = "group_owner wide">
                <option value = "0" selected>---</option>
<? foreach($groupAdmins as $k => $u) { ?>
                <option value = "<? echo $u->getUserId(); ?>"><? echo htmlspecialchars($u->getUserName()); ?></option>
<? } ?>
              </select>
              <button class = "button_black" onclick = "wikiargument.changeOwnership();"><? echo $sTemplate->getString("SUBMIT_CHANGE_OWNERSHIP"); ?></button>
            </div>
        </div>
        <input type = "hidden" name = "update_ownership" value = "1" />
        </form>

        <div class = "row row_submit" style = "padding-right: 40px;">
            <button class = "button_black" onclick = "wikiargument.deleteGroup();"><? echo $sTemplate->getString("SUBMIT_DELETE_GROUP"); ?></button>
        </div>
        <form action = "<? echo $sTemplate->getRoot()."groups/".$sPage->group()->url()."/manage-group/"; ?>" method = "POST" name = "form_delete_group" id = "form_delete_group">
            <input type = "hidden" name = "delete_group" value = "1" />
        </form>
        <div class = "row"></div>
        <div class="clear"></div>
      </div>
<? } ?>
  </div>

</div>

<? include($sTemplate->getTemplateRootAbs()."footer.php"); ?>

