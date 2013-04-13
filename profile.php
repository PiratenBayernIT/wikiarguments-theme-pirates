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

global $sTemplate, $sUser, $sDB, $sPacket, $sPage;

$page       = "";
$language   = $sTemplate->getLangBase();
$user       = $sPage->getUser();
?>
<? include($sTemplate->getTemplateRootAbs()."header.php"); ?>

<div id = "content_wide">
  <div class = "thin">
    <div class = "profile">
      <div class = "box_clean">
        <div class = "row">
          <div class = "headline"><? echo $sTemplate->getString("PROFILE_HEADLINE", Array("[USERNAME]"), Array($user->getUserName())); ?></div>
        </div>
      </div>

      <div class = "shaded_border" style = "margin-top: 40px;">
        <div class = "row row_half_padding">
          <div class = "profile_score_questions">
            <div class = "score"><? echo $user->getScoreQuestions(); ?></div>
            <p class = "score_text"><? echo $sTemplate->getString("PROFILE_QUESTION_POINTS"); ?></p>
          </div>
          <div class = "profile_score_arguments">
            <div class = "score"><? echo $user->getScoreArguments(); ?></div>
            <p class = "score_text"><? echo $sTemplate->getString("PROFILE_ARGUMENT_POINTS"); ?></p>
          </div>
          <div class = "clear"></div>
        </div>
        <div class = "row row_half_padding"></div>
      </div>

      <div class = "shaded_border" style = "margin-top: 20px;">
        <div class = "row row_half_padding">
          <div class = "signup_date"><? echo $sTemplate->getString("PROFILE_SIGNUP_DATE", Array("[SIGNUP_DATE]"), Array($user->getSignupDate())) ?></div>
        </div>
        <div class = "row row_half_padding"></div>
      </div>
    </div>
  </div>
</div>

<? include($sTemplate->getTemplateRootAbs()."footer.php"); ?>
