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

include("./commonHeaders.php");
header("Content-Type: text/css");
?>


@font-face {
 font-family: 'Imprima' ;
 src: local('Imprima'), local('Imprima-Regular'), url(<? echo $sTemplate->getTemplateRoot(); ?>css/fonts/Imprima-Regular.ttf) format("truetype");
}

@font-face {
  font-family: 'Cantata One';
  font-style: normal;
  font-weight: 400;
  src: local('Cantata One'), local('CantataOne-Regular'), url(<? echo $sTemplate->getTemplateRoot(); ?>css/fonts/CantataOne-Regular.ttf) format("truetype");
}

@font-face {
 font-family: 'Open Sans' ;
 src: local('OpenSans-Regular'), local('OpenSans-Regular'), url(<? echo $sTemplate->getTemplateRoot(); ?>css/fonts/OpenSans-Regular.ttf) format("truetype");
}

@font-face {
  font-family: 'Bree Serif';
  src: local('BreeSerif-Regular'), local('BreeSerif-Regular'), url(<? echo $sTemplate->getTemplateRoot(); ?>css/fonts/BreeSerif-Regular.ttf) format("truetype");
}


html, body, pre {
  padding: 0px;
  margin: 0px;
  font-family: "Imprima";
  color: #484848;
}

html, body {
    height: 100%;
}

html {
  background: #FFFFFF;
}

ul, li {
  padding: 0px;
  margin: 0px;
  list-style-type: none;
}

body {
  height: 100%;
}

a {
  text-decoration: none;
  cursor: hand;
  cursor: pointer;
  color: #d07923;
}

#header {
  box-shadow: 3px 0 6px 3px #DDDDDD;
  -moz-box-shadow: 3px 0 6px 3px #DDDDDD;
  -webkit-box-shadow: 3px 0 6px 3px #DDDDDD;
  -o-box-shadow: 3px 0 6px 3px #DDDDDD;
  position: relative;
  height: 77px;
  width: 100%;
}

#header_blue {
  background: url('<? echo $sTemplate->getTemplateRoot(); ?>img/header_background.png');
  height: 77px;
  width: 100%;
  background-repeat: repeat-x;
}

#header_content {
  position: absolute;
  width: 1100px;
  left: 50%;
  margin-left: -550px;
  top: 0px;
  height: 77px;
}

#header_logo {
  background: url('<? echo $sTemplate->getTemplateRoot(); ?>img/header_logo.png');
  height: 56px;
  width: 196px;
  position: relative;
  left: 0px;
  top: 10px;
}

#header_logo_custom {
  height: 18px;
  width: 400px;
  position: relative;
  left: 30px;
  top: 20px;
  background-repeat: no-repeat;
}

#header_logo_unlisted {
  background: url('<? echo $sTemplate->getTemplateRoot(); ?>img/header_logo_unlisted.png');
  height: 18px;
  width: 126px;
  position: absolute;
  left: 265px;
  top: 20px;
}

#header_logo_unlisted_not_logged_in {
  background: url('<? echo $sTemplate->getTemplateRoot(); ?>img/header_logo_unregistered.png');
  height: 18px;
  width: 197px;
  position: absolute;
  left: 400px;
  top: 20px;
}

#header_navigation {
  width: 650px;
  position: absolute;
  left: 250px;
  top: 25px;
}

#wrapper {
  width: 100%;
  min-height: 100%;
  position: relative;
}

.navi_point {
  float:left;
  margin-right: 20px;
  position: relative;
}

.current_page {
}

.navi_point.trend{}

.navi_point.neu{}

.navi_point:last-child{
  margin-right: 0px;
  padding-right: 0px;
  margin-left: 50px;
}

.navi_point a {
  color: #FFFFFF;
  font-size: 14px;
  font-family:"Open Sans";
  display:block;
  border-radius: 10px;
  -moz-border-radius: 10px;
  -webkit-border-radius: 10px;
  padding: 5px;
}

.navi_point a:hover {
}

.current_page a {
  background-color:rgba(0,0,0,0.2);
}

#content {
  position: relative;
  width: 962px;
  left: 50%;
  margin-left: -481px;
  padding-bottom:180px;
  padding-top: 15px;
}

#content_wide {
  position: relative;
  width: 1100px;
  left: 50%;
  margin-left: -550px;
  padding-bottom: 180px;
  clear: both;
  padding-top: 15px;
}

.thin {
  width: 962px;
  margin-left: 69px;
  position: relative;
}

.cont_1050 {
  width: 1050px;
  margin-left: 25px;
  position: relative;
}

#navi_search {
  padding-left:5px;
  width: 350px;
  border: 1px solid #D2D2D2;
  color: #898989;
  height: 19px;
  font-family: 'Imprima', sans-serif;
  letter-spacing: 0.3px;
  height:24px;
  font-size:16px;
}

#footer {
  background: #3275B7;
  height: 144px;
  width: 100%;
  background-repeat: repeat-x;
  margin-top: -128px;
  position:relative;
  clear:both;
  background: url('<? echo $sTemplate->getTemplateRoot(); ?>img/header_background.png');
}

#footer_content {
  width: 950px;
  left: 50%;
  margin-left: -475px;
  position: relative;
  height: 144px;
}

#footer_logo {
  background: url('<? echo $sTemplate->getTemplateRoot(); ?>img/header_logo.png');
  height: 56px;
  width: 196px;
  position: relative;
  top: 42px;
}

#footer_copyright {
  position: absolute;
  font-family:"Open Sans";
  top: 73px;
  left: 215px;
  color: #FFFFFF;
  font-size: 13px;
  width:65%;
}

#footer_menu {
  position: absolute;
  font-family:"Open Sans";
  top: 98px;
  left: 215px;
  color: #FFFFFF;
  font-size: 13px;
  width:65%;
}

#footer_copyright a,
#footer_menu a{
  font-family:"Open Sans";
color:#FFFFFF;
}


.filter {
  width: 962px;
  background: url('<? echo $sTemplate->getTemplateRoot(); ?>img/border-double.png') repeat-x;
  background-position: 0px 13px;
  margin-top: 20px;
  position: relative;
  font-size: 22px;
  padding: 0px;
  clear: both;
  text-align: center;
}

.filter span {
  font-family: "Bree Serif";
  font-size: 22px;
  color: #a5a5a5;
  background: #FFFFFF;
  padding-left: 30px;
  padding-right: 30px;
}

.filter .remove {
  position: relative;
  font-size: 12px;
  color: #FF5300;
  float: right;
  margin-top: 5px;
}

.filter .remove a {
  color: #FF5300;
  font-family:"Open Sans";
}

.filter .remove span {
  float: left;
}

.remove_icon {
  background: url('<? echo $sTemplate->getTemplateRoot(); ?>img/remove_icon.png');
  height: 9px;
  width: 9px;
  position: relative;
  float: right;
  margin-left: 5px;
  margin-top: 3px;
}


.question {
  width: 950px;
  border: 6px solid #B5B5B5;
  border-image: url("<? echo $sTemplate->getTemplateRoot(); ?>img/box.png") 6 6 6 6 fill;
  padding-bottom:25px;
  background: #FFFFFF;
  margin-top: 20px;
  position: relative;
  clear:both;
  top:-1px;
  min-height: 117px;
}

.stats {
  width: 80px;
  height: inherit;
  min-height: inherit;
  top: 5px;
  position: relative;
  padding: 0px;
}

.stats .votes {
  position: absolute;
  right: 0px;
  top: 25px;
}

.stats .points {
  color: #666666;
  font-size: 22px;
  position: relative;
  right: 14px;
  text-align: center;
  margin-top: 52px;
  font-family:"Bree Serif", "Cantata One", serif;
}

.stats.question_stats .question_points_text{
  color: #99b6cc;
}

.question_tabs .tab_active a{
  color: #FFFFFF;
}

.stats .argument_points {
  margin-top: 35px;
}


.stats.argument_stats{
position:absolute;
}

.argument_stats .vote_line {
  right: 21px;
  top: -5px;
  height: 100px;
}


.stats .points_text {
  color: #99B6CC;
  font-size: 11px;
  position: relative;
  right: 8px;
  text-align: center;
  font-family:"Open Sans";
}

.question_stats {
  float: left;
  margin-right: 20px;
  z-index: 10;
}

.argument_full_stats {
  top: -10px;
  height: 117px;
}

.question_points {
}

.question_points_text {
}

.vote_up {
  width: 23px;
  height: 23px;
  background: url('<? echo $sTemplate->getTemplateRoot(); ?>img/vote_up.png');
}

.vote_dn {
  width: 23px;
  height: 23px;
  background: url('<? echo $sTemplate->getTemplateRoot(); ?>img/vote_dn.png');
}

.vote_up_inactive {
  background: url('<? echo $sTemplate->getTemplateRoot(); ?>img/vote_up_inactive.png');
}

.vote_dn_inactive {
  background: url('<? echo $sTemplate->getTemplateRoot(); ?>img/vote_dn_inactive.png');
}

.vote_line {
  position: absolute;
  right: 13px;
  top: 10px;
  background: #CCCCCC;
  width: 1px;
  height: 100%;
}

.question_vote_up {
  position: absolute;
  top: 15px;
  right: 2px;
  cursor: hand;
  cursor: pointer;
}

.question_vote_dn {
  position: absolute;
  top: 51px;
  right: 2px;
  cursor: hand;
  cursor: pointer;
}

.question_title {
  color: #004A80;
  font-size: 20px;
  position: relative;
  float:left;
  width: 700px;
  top: 12px;
  height: 82px;
  padding-bottom: 5px;
  display: table;
}

.question_title p {
  margin: none;
  width: 700px;
  vertical-align: middle;
  display: table-cell;
  margin-top:9px;
  height: 58px;
}

.question_details{
  float: left;
  margin-bottom: 30px;
  margin-left: 104px;
  position: relative;
  width: 800px;;
}

.question_title a {
  color: #000000;
  font-family:"Bree Serif", "Cantata One", sans-serif;
  font-size: 22px;
}

.author {
  color: #808080;
  font-size: 12px;
  position: absolute;
  right: 20px;
  bottom: 20px;
  font-family:"Open Sans";
 }

.author a {
  color: #f7931e;
}

.question_author {
}

.question_author a {
}

.question_options {
  position: absolute;
  right: 20px;
  color: #B5B5B5;
  font-size: 12px;
  width: 70px;
  padding-left: 6px;
  padding-top: 3px;
  height: 18px;
  text-align: right;
  background: url('<? echo $sTemplate->getTemplateRoot(); ?>img/arrows/dropdown-arrow.png') no-repeat 63px center;
  border-left: 1px solid #CCCCCC;
  border-right: 1px solid #CCCCCC;
  border-bottom: 1px solid #CCCCCC;
  border-bottom-right-radius: 5px;
  border-bottom-left-radius: 5px;
  top:0;
  font-family:"Open Sans";
}

.question_options .hidden {
  display: none;
  text-align: left;
  line-height: 23px;
  font-size: 12px;
  color: #004A80;
  padding-left: 6px;


}

.question_options:hover .hidden {
  display: block;
}

.question_options:hover {
  background: url('<? echo $sTemplate->getTemplateRoot(); ?>img/arrows/dropup-arrow.png') no-repeat 142px 7px #EDEDED;

  height: 110px;
  width: 150px;
}

.question_options .up_arrow {
  background: url('<? echo $sTemplate->getTemplateRoot(); ?>img/arrows/dropup-arrow.png') no-repeat;
  display: none;
}

.question_options:hover .up_arrow {
  display: inline;
}

.question_options:hover .dn_arrow {
  display: none;
}

.question_options .options_text{
text-align:right;
padding-right:18px;
}

.dn_arrow {
  padding-left: 5px;
  padding-right: 7px;
  height: 6px;
  background: url('<? echo $sTemplate->getTemplateRoot(); ?>img/arrows/dn_arrow.png') no-repeat;
  position: relative;
  top: 6px;
  margin-left: 5px;
  display: inline;
}

.up_arrow {
  padding-left: 5px;
  padding-right: 7px;
  height: 6px;
  background: url('<? echo $sTemplate->getTemplateRoot(); ?>img/arrows/up_arrow.png') no-repeat;
  position: relative;
  top: 5px;
  margin-left: 5px;
  display: inline;
}

.pagination_questions {
  width: 550px;
  left: 400px;
  margin-top: 29px;
}

.pagination {
  height: 28px;
  position: relative;
  text-align: right;
}

.pagination span {
  float: right;
}

.pagination_icon div {
  text-align: center;
  width: 26px;
  height: 23px;
  padding-top: 3px;
}

.pagination_icon {
  border: 1px solid #B5B5B5;
  border-radius: 5px;
  -moz-border-radius: 5px;
  -webkit-border-radius: 5px;
  background: #FFFFFF;
  color: #e1861b;
  margin-left: 10px;
}

.pagination_icon_active {
  background: #e1861b;
  color: #FFFFFF;
}

.pagination_prev {
  background: url('<? echo $sTemplate->getTemplateRoot(); ?>img/pagination_prev.png') no-repeat;
  width: 10px;
  height: 14px;
  margin-top: 7px;
}

.pagination_next {
  background: url('<? echo $sTemplate->getTemplateRoot(); ?>img/pagination_next.png') no-repeat;
  width: 10px;
  height: 14px;
  margin-top: 7px;
  margin-left: 10px;
}

.pagination_x_of_y {
  font-size: 12px;
  color: #7D7D7D;
  padding-top: 7px;
  width: 90px;
  float: right;
  font-family:"Open Sans";
}

.headline {
  font-size: 44px;
  color: #000000;
  font-family:"Bree Serif", "Cantata One", Tahome;
}


.subheadline_faq {
  padding-top: 20px;
  padding-bottom: 15px;
  font-size: 20px;
  color: #000000;
  font-family:"Bree Serif", "Cantata One", Tahome;
}



.headline_gray {
  font-size: 40px;
  color: #b3b3b3;
  font-family:"Cantata One", Tahome;
}

.icon_twitter {
  background: url('<? echo $sTemplate->getTemplateRoot(); ?>img/icon_twitter.png') no-repeat;

}

.icon_fb {
  background: url('<? echo $sTemplate->getTemplateRoot(); ?>img/icon_fb.png') no-repeat;
}

.icon_spam {
  background: url('<? echo $sTemplate->getTemplateRoot(); ?>img/icon_spam.png') no-repeat;

}
.icon_short_url{
  background: url('<? echo $sTemplate->getTemplateRoot(); ?>img/icon_short_url.png') no-repeat;
}


.icon_twitter ,.icon_fb, .icon_spam,.short_url{
  height: 18px;
  float: left;
  margin-right: 5px;
  border-radius:3px;
  -moz-border-radius:3px;
  -webkit-border-radius:3px;
  -o-border-radius:3px;
  margin-top:3px;
  font-family:"Open Sans";
  font-size: 13px;
}

.hidden a{
color:#004A80;
}




.question_tabs {
  width: 950px;
  margin-top: 20px;
  height: 26px;
  padding-left: 25px;
  position: relative;
  z-index: 2;
  font-size: 16px;
}

.question_tabs a {
  color: #7A7A7A;
}
.tab.tab_active{
  color: #000000;
  background: #808080;
}

.question_tabs .tab {
  float: left;
  padding-top: 3px;
  padding-bottom: 3px;
  padding-left: 7px;
  padding-right: 7px;

  border-top: 1px solid transparent;
  border-left: 1px solid transparent;
  border-right: 1px solid transparent;

  color: #FFFFFF;
  background: #E6E6E6;
  border-top-right-radius: 10px;
  border-top-left-radius: 10px;
}

.question_tabs .tab_active {
  border-top-right-radius: 10px;
  border-top-left-radius: 10px;
  background: #808080;
}

.question_no_margin {
  margin-top: 0px;
  z-index: 1;
}

.vote_distribution {
  width: 962px;
  height: 40px;
  position: relative;

  margin-top: 47px;
  margin-bottom: 30px;
}

.question_vote_count{
   left: 50%;
   margin-left: -38px;
   position: absolute;
   top: -32px;
   border:1px solid #b5b5b5;
   padding:3px 8px;
   background:#fcffd2;
   border-radius:5px;
   -moz-border-radius:5px;
   -wekit-border-radius:5px;
   -o-border-radius:5px;
  font-family:"Open Sans";
   font-size:12px;
   box-shadow: 6px 5px 9px -9px black, 5px 6px 9px -9px #999;
   display:none;
}


.question_vote_count .arrow:after {
    -moz-transform: rotate(45deg);
  transform: rotate(45deg);
  -webkit-transform: rotate(45deg);
    box-shadow: 6px 5px 9px -9px black, 5px 6px 9px -9px #ccc;
    content: "";
    height: 25px;
    left: 20px;
    position: absolute;
    top: -26px;
    width: 25px;
}
.question_vote_count .arrow:after {
    background: none repeat scroll 0 0 #fcffd2;
    border: 1px solid #b5b5b5;
}

.arrow {
    bottom: -16px;
    height: 16px;
    left: 50%;
    margin-left: -35px;
    overflow: hidden;
    position: absolute;
    width: 70px;
}



.checkin_pro_confirmed {
  width: 105px;
  height: 46px;

  float: left;
  position: relative;
  cursor: hand;
  cursor: pointer;
}

.checkin_pro_confirmed p,
.checkin_con_confirmed p {
  margin: 0;
  display: table-cell;
  vertical-align: middle;
  height: 46px;
}



.checkin_icon {
  background: url('<? echo $sTemplate->getTemplateRoot(); ?>img/checkin_confirm.png') no-repeat;
  width: 41px;
  height: 38px;
  float: left;
  margin-right: 10px;
}

.checkin_con_confirmed {
  width: 105px;
  height: 46px;

  float: right;
  position: relative;
  cursor: hand;
  cursor: pointer;
}

.pro_perc {
  float: left;
  color: #000000;
  font-size: 22px;
  margin-top: 8px;
  margin-left: 15px;
  font-family:"Bree Serif", "Cantata One", sans-serif;
}

.con_perc {
  float: right;
  color: #000000;
  font-size: 22px;
  margin-top: 8px;
  margin-right: 15px;
  font-family:"Bree Serif", "Cantata One", sans-serif;
}

.distribution {
  width: 408px;
  height: 27px;
  border: 6px solid #B5B5B5;
  border-image: url("<? echo $sTemplate->getTemplateRoot(); ?>img/box_408.png") 6 6 6 6 fill;
  position: absolute;
  left: 50%;
  margin-left: -210px;
  top: 3px;
  overflow: hidden;
}

.distribution_pro {
  position: absolute;
  top: 0px;
  height: 26px;
  background:url(<? echo $sTemplate->getTemplateRoot(); ?>img/bar_segmentation.png) no-repeat  right 0px #FF9F40;
  box-shadow: 4px 2px 5px #ffeddc inset;
  -moz-box-shadow:  4px 2px 5px #ffeddc inset;
  -webkit-box-shadow: 4px 2px 5px #ffeddc inset;
  -ms-box-shadow:  4px 2px 5px #ffeddc inset;
  -o-box-shadow:  4px 2px 5px #ffeddc inset;

  border-radius:15px 0px 0px 15px;
  -moz-border-radius:15px 0px 0px 15px;
  -o-border-radius:15px 0px 0px 15px;
  -webkit-border-radius:15px 0px 0px 15px;


  border:1px solid #FF9F40;
  border-right:none;
  border-bottom:none;
}

.distribution_con {
  position: absolute;
  top: 0px;
  right: 0px;
  height: 26px;

  background: #666666;
   box-shadow: -5px 3px 5px #999 inset;
   -moz-box-shadow: -5px 3px 5px #999 inset;
   -ms-box-shadow: -5px 3px 5px #999 inset;
   -o-box-shadow: -5px 3px 5px #999 inset;
   -webkit-box-shadow: -4px 3px 5px #999 inset;

   border-radius:15px 15px 15px 15px;
  -moz-border-radius:15px 15px 15px 15px;
  -o-border-radius:15px 15px 15px 0px;
  -webkit-border-radius:15px 15px 15px 15px;
  border:1px solid #666666;
  border-left:none;
  border-bottom:none;
}

.argument_vote_up {
  position: absolute;
  top: 20px;
  right: 10px;
  cursor: hand;
  cursor: pointer;
}

.argument_vote_dn {
  position: absolute;
  top: 56px;
  right: 10px;
  cursor: hand;
  cursor: pointer;
}

.arguments_pro {
  width: 550px;
  position: relative;
  float: left;
}

.arguments_con {
  width: 550px;
  position: relative;
  float: right;
}

.argument_wrapper {
  width: 550px;
  margin-top: 20px;
  position: relative;
}

.argument {
  width: 420px;
  border: 6px solid #B5B5B5;
  border-image: url("<? echo $sTemplate->getTemplateRoot(); ?>img/box_392.png") 6 6 6 6 fill;
  min-height: 80px;
  background: #FFFFFF;
  position: relative;
  padding-bottom: 30px;
  overflow: hidden;
}

.argument_pro {
  margin-left: 95px;
}

.argument_con {
  margin-left: 25px;
}

.argument_pro_no_counter {
  margin-left: 80px;
}

.argument_con_no_counter {
  margin-left: 80px;
}

.clear {
  clear: both;
}

.arguments {
  position: relative;
  width: 1100px;
}

.arguments:after{
    background:#6ba3cc;
    content: "";
    height: 100%;
    left: 50%;
    position: absolute;
    top: 0;
    width: 1px;
    background: #cccccc;
}

.argument_headline {
  position: relative;
  color: #4d4d4d;
  font-size: 20px;
  margin-left: 90px;
  margin-top: 20px;
  font-family: "Bree Serif", "Cantata One", sans-serif;
  font-size: 20px;
}

.argument_headline a {
  color: #4d4d4d;
  font-family: "Bree Serif", "Cantata One", sans-serif;
}

.argument_abstract {
  font-size: 15px;
  margin-left: 90px;
  margin-right: 10px;
  margin-top: 15px;
  margin-bottom: 30px;
  font-family: "Open Sans";
}

.argument_abstract .read_more, .argument_abstract_extended .read_more {
color:#FF6A22;
font-size:16px;
}

.argument_details {
  color: #000000;
  font-size: 16px;
  margin-left: 110px;
  margin-right: 20px;
  margin-top: 15px;
  padding-bottom:15px;
}

.counter_argument_box {
  position: relative;
  height: 40px;
  width: 120px;
  border: 6px solid #B5B5B5;
  border-image: url("<? echo $sTemplate->getTemplateRoot(); ?>img/box_117.png") 6 6 6 6 fill;
  border-radius: 20px;
  -webkit-border-radius: 20px;
  -moz-border-radius: 20px;
  background: #FFFFFF;
}

.counter_argument_box_pro {
  position: absolute;
  top: 50%;
  margin-top: -20px;
  left: -50px;
}

.counter_argument_box_con {
  position: absolute;
  top: 50%;
  margin-top: -20px;
  right: -50px;
}

.count {
  font-size: 24px;
  color: #f15a24;
  margin-top: 7px;
  margin-left: 15px;
  position: relative;
}

.count_text {
  color: #999999;
  font-size: 12px;
  position: absolute;
  right: 5px;
  top: 4px;
  width: 70px;
  font-family:"Open Sans";
}

.plus_sign {
  background: url('<? echo $sTemplate->getTemplateRoot(); ?>img/plus_sign.png') no-repeat;
  height: 18px;
  width: 18px;
  position: absolute;
}

.counter_argument_box_pro .plus_sign {
  left: -9px;
  top: 10px;
}

.counter_argument_box_con .plus_sign {
  right: -9px;
  top: 10px;
}

.line {
  width: 30px;
  height: 6px;
  background: url("<? echo $sTemplate->getTemplateRoot(); ?>img/box_line.png");
  position: absolute;
}

.counter_argument_box_pro .line {
  left: 120px;
  top: 18px;
}

.counter_argument_box_con .line {
  left: -30px;
  top: 18px;
}

.argument_pro_bar {
  position: absolute;
  left: 0px;
  width: 27px;
  height: 27px;
  background: url("<? echo $sTemplate->getTemplateRoot(); ?>img/pro_corner.png");
  top: 0px;
}

.argument_con_bar {
  position: absolute;
  right: 0px;
  width: 27px;
  height: 27px;
  background: url("<? echo $sTemplate->getTemplateRoot(); ?>img/con_corner.png");
  top: 0px;
}

.tab_arg_pro a {
}

.tab_arg_con a {
}

.argument_container {
  width: 600px;
  left: 50%;
  margin-left: -300px;
  position: relative;
}

.argument_container .argument_wrapper {
  margin-top:60px;
}

.argument_container .button_new_counter_argument {
  margin-top:70px;
}

.argument_container_full {
  width: 700px;
  left: 50%;
  margin-left: -350px;
  position: relative;
}

.argument_container_full .argument_full {
  margin-top:60px;
}

.argument_container:after, .argument_container_full:after {
    background:#CCCCCC;
    content: "";
    height: 100%;
    left: 50%;
    position: absolute;
    top: 0;
    width: 1px;
  z-index:-10;
  margin-top:-76px;
}

.argument_extended_no_tabs {
  margin-top: 20px;
}

.argument_extended {
  width: 950px;
  border: 6px solid #B5B5B5;
  border-image: url("<? echo $sTemplate->getTemplateRoot(); ?>img/box_392.png") 6 6 6 6 fill;
  min-height: 117px;
  background: #FFFFFF;
  position: relative;
  overflow: hidden;
}


.argument_title {
  color: #666666;
  font-size: 22px;
  position: relative;
  width: 700px;
  margin-top: 25px;
  left: 100px;
}
.argument_extended .argument_title{
left:0px;
}


.argument_title a {
  color: #666666;
  font-family:"Bree Serif", "Cantata One", sans-serif;
}

.argument_abstract_extended {
  font-size: 15px;
  margin-left: 100px;
  margin-right: 20px;
  margin-top: 15px;
  margin-bottom: 35px;
  font-family:"Open Sans";
}

.argument_details_extended {
  color: #000000;
  font-size: 15px;
  margin-left: 102px;
  margin-right: 20px;
  margin-top: 15px;
  margin-bottom: 45px;
  font-family:"Open Sans";
}

.button_argument {
  width: 431px;
  height: 96px;
  padding-top: 50px;
  color: #707070;
  font-size: 22px;
  margin-top: 20px;
  background: #FFF;
  text-align: center;
  cursor: hand;
  cursor: pointer;
}


.button_argument span{
font-family:"Cantata One";
width:100%;
height:40px;
padding-top:35px;
background:url(<? echo $sTemplate->getTemplateRoot(); ?>img/assets/plus.png) no-repeat center top;
}

.button_new_question {
  float: left;
  margin-top: 29px;
}

.button_new_counter_argument {
  margin-left: 80px;
  background:url(<? echo $sTemplate->getTemplateRoot(); ?>img/new_counter_argument.png) no-repeat;
}

.button_new_argument_pro {
  margin-left: 112px;
  background:url(<? echo $sTemplate->getTemplateRoot(); ?>img/new_argument_pro.png) no-repeat;
}

.button_new_argument_con {
  margin-left: 10px;
  background:url(<? echo $sTemplate->getTemplateRoot(); ?>img/new_argument_con.png) no-repeat;
}

.new_argument {
  width: 800px;
  margin-left: 75px;
  margin-top: 50px;
  border-radius: 20px;
  background:url(<? echo $sTemplate->getTemplateRoot(); ?>img/diagonal-noise.png) repeat;
}

.shaded_box {
  width: 800px;
  margin-left: 75px;
  margin-top: 20px;
  border-radius: 20px;
  background:url(<? echo $sTemplate->getTemplateRoot(); ?>img/diagonal-noise.png) repeat;
}

.shaded_border {
  border: 6px solid #B5B5B5;
  border-image: url("<? echo $sTemplate->getTemplateRoot(); ?>img/box.png") 6 6 6 6 fill;
}

.clean_box {
  width: 800px;
  margin-left: 75px;
  margin-top: 20px;
  border-radius: 20px;
}

.clean_box_450 {
  width: 450px;
  margin-left: 75px;
  margin-top: 20px;
  border-radius: 20px;
}

.clean_box_1050 {
  width: 1050px;
  margin-left: 80px;
  border-radius: 20px;
  position: relative;
}

.shaded_box_450 {
  width: 450px;
  margin-left: 75px;
  margin-top: 20px;
  border-radius: 20px;
  background:url(<? echo $sTemplate->getTemplateRoot(); ?>img/diagonal-noise.png) repeat;
}

.row_submit_button {
  padding-top: 20px !important;
  height: 60px;
  text-align: right;
}

.new_question {
  width: 800px;
  margin-left: 75px;
  margin-top: 50px;
  border-radius: 20px;
  background:url(<? echo $sTemplate->getTemplateRoot(); ?>img/diagonal-noise.png) repeat;
}

.profile {
}

.manage_group {
  width: 800px;
  margin-left: 75px;
  margin-top: 50px;
  border-radius: 20px;
  background:url(<? echo $sTemplate->getTemplateRoot(); ?>img/diagonal-noise.png) repeat;
}

.row {

  padding-top: 60px;
}

.row_no_padding {
  padding-top: 0px;
}

.row_half_padding {
	padding-top:30px;
}

.new_question .row{
clear:both;
}

#new_counter_argument .row{
margin-top:10px;
margin-bottom:10px;
}

#new_counter_argument{
position:relative;
margin-top:20px;
}


.new_argument .row{
clear:both;}

.row_submit {
  height: 27px;
  text-align: right;
}

.row.row_submit{
/* margin-top:60px; */
}

.new_argument .label {
  width: 170px;
  position: relative;
  font-weight: bold;
  font-size: 16px;
  color: #000000;
  font-family:"Open Sans";
  margin-right:20px;
  margin-top:6px;
  margin-left: 80px;
}

.new_argument .input {
  width: 650px;
  position: relative;
  margin-left: 80px;
}

.new_argument textarea {
  width: 640px;
  min-width:640px;
  max-width:640px;
  border: 1px solid #b5b5b5;
  border-radius:5px;
  -moz-border-radius:5px;
  -webkit-border-radius:5px;
  box-shadow:0px 2px 2px #DDD inset;
  font-family:"Open Sans";
  font-size: 16px;
}

#new_argument_headline {
  height: 25px;
  max-height:25px;
  min-height:25px;
  padding-top:5px;
}

#new_argument_abstract {
  height: 150px;
}

#new_argument_details {
  height: 250px;
}

.new_question .label {
  margin-left: 80px;
  width: 90px;
  position: relative;
  font-weight: bold;
  font-size: 16px;
  color: #000000;
  font-family: Imprima, Tahoma, Geneva, sans-serif;
  line-height:20px;
  margin-top:5px;
}


.new_question .label2 {
  margin-left: 80px;
  font-weight: bold;
  width: 90px;
  position: relative;
  font-size: 16px;
  color: #000000;
  font-family: Imprima, Tahoma, Geneva, sans-serif;
  line-height:20px;
  margin-top:5px;
  margin-right: 20px
}


.new_question .input {
  width: 650px;
  position: relative;
  margin-left: 80px;
}

.new_question textarea {
   border: 1px solid #B5B5B5;
   border-radius: 5px 5px 5px 5px;
   box-shadow: 0 2px 3px 1px #DDDDDD inset;
   width: 640px;
   max-width:640px;
   min-width:640px;
   padding:5px;
   font-family: 'Imprima', sans-serif;
   font-size: 16px;
}

#new_question_headline {
  height: 20px;
}

#new_question_tags {
  height: 50px;
}

#new_question_details {
  height: 250px;
}

.button_orange {
min-width:125px;
display:inline-block;
text-align:center;
font-family: "Open Sans";
letter-spacing: -0.5px;
font-size:16px;
padding:7px 14px;
background:#ee600d;
border-top :1px solid #edb14a;
border-bottom :1px solid #9c4822;
border-left: 1px solid #da9650;
border-right:1px solid #af5b0c;
color:#FFF;
 text-shadow: 0 -1px #B64F1B;
background: #f6a015; /* Old browsers */
background: -moz-linear-gradient(top,  #f6a015 0%, #f17b10 60%, #e6500b 100%); /* FF3.6+ */
background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#f6a015), color-stop(60%,#f17b10), color-stop(100%,#e6500b)); /* Chrome,Safari4+ */
background: -webkit-linear-gradient(top,  #f6a015 0%,#f17b10 60%,#e6500b 100%); /* Chrome10+,Safari5.1+ */
background: -o-linear-gradient(top,  #f6a015 0%,#f17b10 60%,#e6500b 100%); /* Opera 11.10+ */
background: -ms-linear-gradient(top,  #f6a015 0%,#f17b10 60%,#e6500b 100%); /* IE10+ */
background: linear-gradient(to bottom,  #f6a015 0%,#f17b10 60%,#e6500b 100%); /* W3C */

border-radius:5px;
-moz-border-radius:5px;
-webkit-border-radius:5px;
-o-border-radius:5px;
box-shadow: 1px 1px #fce0af inset,0px 0px 3px #999;
-moz-box-shadow: 1px 1px #fce0af inset,0px 0px 3px #999;
-webkit-box-shadow: 1px 1px #fce0af inset,0px 0px 3px #999;
-o-box-shadow: 1px 1px #fce0af inset,0px 0px 3px #999;

width:120px;

}
.button_orange:before{
  -moz-transform: rotate(-33deg);
  transform: rotate(-33deg);

    border-radius: 2px 2px 2px 2px;
    content: "";
    display: block;
    height: 2px;
    margin-left: -17px;
    margin-top: -7px;
    position: absolute;
    width: 3px;

    background: #fde6c1; /* Old browsers */
background: -moz-linear-gradient(top,  #fde6c1 0%, #fdeed6 50%, #ffffff 100%); /* FF3.6+ */
background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#fde6c1), color-stop(50%,#ffffff), color-stop(100%,#fde7c5)); /* Chrome,Safari4+ */
background: -webkit-linear-gradient(top,  #fde6c1 0%,#fdeed6 50%,#fde7c5 100%); /* Chrome10+,Safari5.1+ */
background: -o-linear-gradient(top,  #fde6c1 0%,#fdeed6 50%,#fde7c5 100%); /* Opera 11.10+ */
background: -ms-linear-gradient(top,  #fde6c1 0%,#fdeed6 50%,#fde7c5 100%); /* IE10+ */
background: linear-gradient(to bottom,  #fde6c1 0%,#fdeed6 50%,#fde7c5 100%); /* W3C */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#fde6c1', endColorstr='#fde7c5',GradientType=0 ); /* IE6-9 */

}

.button_blue{
min-width:120px;
display:inline-block;
text-align:center;
font-family: 'Imprima', sans-serif;
letter-spacing: -0.5px;
font-size:16px;
padding:7px 14px;
background:#ee600d;
border-top :1px solid #3aa4d3;
border-bottom :1px solid #1c4276;
border-left: 1px solid #0072c0;
border-right:1px solid #00538b;
color:#FFF;
text-shadow: 0 -1px #012f6c;

 background: #0070be; /* Old browsers */
background: -moz-linear-gradient(top,  #008ed1 0%, #003883 100%); /* FF3.6+ */
background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#008ed1), color-stop(100%,#003883)); /* Chrome,Safari4+ */
background: -webkit-linear-gradient(top,  #008ed1 0%,#003883 100%); /* Chrome10+,Safari5.1+ */
background: -o-linear-gradient(top,  #008ed1 0%,#003883 100%); /* Opera 11.10+ */
background: -ms-linear-gradient(top,  #008ed1 0%,#003883 100%); /* IE10+ */
background: linear-gradient(to bottom,  #008ed1 0%,#003883 100%); /* W3C */


border-radius:5px;
-moz-border-radius:5px;
-webkit-border-radius:5px;
-o-border-radius:5px;
box-shadow: 1px 1px #a8d9f0 inset,0px 0px 3px #999;
-moz-box-shadow: 1px 1px #a8d9f0 inset,0px 0px 3px #999;
-webkit-box-shadow: 1px 1px #a8d9f0 inset,0px 0px 3px #999;
-o-box-shadow: 1px 1px #a8d9f0 inset,0px 0px 3px #999;

}

.button_blue:before{
  -moz-transform: rotate(-33deg);
  transform: rotate(-33deg);

    border-radius: 2px 2px 2px 2px;
    content: "";
    display: block;
    height: 2px;
    margin-left: -17px;
    margin-top: -7px;
    position: absolute;
    width: 3px;

  background: #fde6c1; /* Old browsers */
background: -moz-linear-gradient(top,  #fde6c1 0%, #fdeed6 50%, #ffffff 100%); /* FF3.6+ */
background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#fde6c1), color-stop(50%,#ffffff), color-stop(100%,#fde7c5)); /* Chrome,Safari4+ */
background: -webkit-linear-gradient(top,  #fde6c1 0%,#fdeed6 50%,#fde7c5 100%); /* Chrome10+,Safari5.1+ */
background: -o-linear-gradient(top,  #fde6c1 0%,#fdeed6 50%,#fde7c5 100%); /* Opera 11.10+ */
background: -ms-linear-gradient(top,  #fde6c1 0%,#fdeed6 50%,#fde7c5 100%); /* IE10+ */
background: linear-gradient(to bottom,  #fde6c1 0%,#fdeed6 50%,#fde7c5 100%); /* W3C */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#fde6c1', endColorstr='#fde7c5',GradientType=0 ); /* IE6-9 */
}





.button_orange:hover,
.button_blue:hover{
opacity:0.8;
cursor: pointer;
}

.signup {
  background: url("<? echo $sTemplate->getTemplateRoot(); ?>img/diagonal-noise.png");
  float: left;
  width: 450px;
  border-radius: 20px;
}

.login {
  float: right;
}

.login .headline {
  font-size: 22px;
}

.signup .label,
.login .label {
  width: 130px;
  margin-left: 40px;
  position: relative;
  font-size: 16px;
  font-family: Imprima, Tahoma, Geneva, sans-serif;
  font-weight: bold;
}

.signup .input,
.login .input {
  width: 370px;
  position: relative;
  margin-left: 40px;
}

.signup input,
.login input {
    border: 1px solid #B5B5B5;
    border-radius: 10px;
    height: 50px;
    padding-left: 3px;
    width: 365px;
    font-family:"Imprima", sans-serif;
    font-size: 16px;
}

.header_signup {
  width: 175px;
  height: 20px;
  top: 15px;
  right: 0px;
  color: #FFFFFF;
  font-size: 16px;
  position: absolute;

}

.header_signup a {
   color: #FFFFFF;
   font-size: 18px;
}

.header_menu_signup,
.header_menu {
  position: absolute;
  color: transparent;
  font-size: 12px;
  width: 150px;
  height: 34px;
  text-align: right;
  top: 10px;
  right: 0px;
  cursor:pointer;

  margin-left: 120px;
  border-radius: 10px;
  border-radius: 10px;
}

.header_menu_signup .header_signup,
.header_menu .username {
  color: #FFFFFF;
  height: 34px;
  width: 150px;
  padding-top: 10px;
  text-align: center;
  position: relative;
  font-family: Imprima, Tahoma, Geneva, sans-serif;
  font-size:15px;
  text-transform:capitalize;
}

.header_menu_signup .header_signup {
  padding-top: 0px;
  top: 10px;
}

.header_menu_signup .header_signup a {
  font-family: Imprima,Tahoma, Geneva, sans-serif;
  font-size: 15px;
  text-transform:capitalize;
  color# FFFFFF;
}

.header_menu:hover .username {
  background: #ff9f40;
  border-top-right-radius: 10px;
  border-top-left-radius: 10px;
}

.header_menu .hidden a {
  color: #FFFFFF;
  display:block;
  width:100%;
}

.header_menu .hidden {
  display: none;
  text-align: left;
  line-height: 40px;
  font-size: 16px;
  color: #FFFFFF;
  width: 300px;
  float:right;
  background: #ff9f40;

  border-bottom-right-radius: 10px;
  border-bottom-left-radius: 10px;
  border-top-left-radius: 10px;
}

.header_menu:hover .hidden {
  display: block;
}

.header_menu .up_arrow {
  display: none;
}

.header_menu:hover .up_arrow {
  display: inline;
}

.header_menu:hover .dn_arrow {
  display: none;
}

.icon_new_question {
  background: url('<? echo $sTemplate->getTemplateRoot(); ?>img/icon_new_question.png') no-repeat;
  width: 26px;
  height: 26px;
  float: left;
  margin-right: 16px;
  margin-left: 10px;
  margin-top: 9px;
}

.icon_share_page {
  background: url('<? echo $sTemplate->getTemplateRoot(); ?>img/icon_share_page.png') no-repeat;
  width: 26px;
  height: 26px;
  float: left;
  margin-right: 11px;
  margin-left: 10px;
  margin-top: 9px;
}

.icon_manage_profile {
  background: url('<? echo $sTemplate->getTemplateRoot(); ?>img/icon_manage_profile.png') no-repeat;
  width: 26px;
  height: 26px;
  float: left;
  margin-right: 18px;
  margin-left: 10px;
  margin-top: 11px;
}

.icon_new_group {
  background: url('<? echo $sTemplate->getTemplateRoot(); ?>img/icon_new_group.png') no-repeat;
  width: 26px;
  height: 26px;
  float: left;
  margin-right: 11px;
  margin-left: 10px;
  margin-top: 11px;
}

.icon_my_profile {
  background: url('<? echo $sTemplate->getTemplateRoot(); ?>img/icon_my_profile.png') no-repeat;
  width: 26px;
  height: 26px;
  float: left;
  margin-right: 19px;
  margin-left: 10px;
  margin-top: 11px;
}

.icon_logout {
  background: url('<? echo $sTemplate->getTemplateRoot(); ?>img/icon_logout.png') no-repeat;
  width: 26px;
  height: 26px;
  float: left;
  margin-right: 24px;
  margin-left: 10px;
  margin-top: 9px;
}

#header_menu_wrapper {
  position: absolute;
  top: 10px;
  left: 50%;
  z-index: 5;
  margin-left: 550px;
}

.signup_date {
  font-size: 16px;
  color: #000000;
  font-family:"Imprima", sans-serif;
  padding-left: 40px;
}

.seperator {
  height: 1px;
  border-top: 1px solid #A1A1A1;
}

.subheadline {
  color:#808080;
  font-size: 24px;
  font-family: "Cantata One",Tahome;
  font-weight: bold;
}

.profile_score_questions {
  float: left;
  width: 280px;
  margin-left:30px;
}.profile_score_arguments {
  float: right;
  width: 280px;
}

.profile_score_questions .score,
.profile_score_arguments .score {
  font-size: 33px;
  color: #000000;
  float: left;
  font-family: "Bree Serif";
}

.profile_score_questions .score_text,
.profile_score_arguments .score_text {
  height: 48px;
  display: table-cell;
  vertical-align: middle;
  font-size: 19px;
  color: #666666;
  padding-left: 20px;
  font-family:"Imprima", sans-serif;
  text-shadow:0px 1px #fff;

}

.tags {
  position: relative;
  width:60%;
  height:32px;
  overflow:hidden;
}

.tags ul{
  margin: 0;
  overflow: hidden;
  height: 32px;
}

.tag {
  display: inline-block;
  margin: 7px 5px;
  height: 20px;
  font-family: Open Sans,Tahoma, Geneva, sans-serif;
}

.tag:first-child {
  margin-left: 0px;
}

.tag a{
  padding: 4px 10px;
  border-radius: 15px;
  -moz-border-radius: 15px;
  -webkit-border-radius: 15px;
  border: 1px solid #FAB96D;
  color: #4d4d4d;
  font-size: 14px;
  margin-top: 2px;
  line-height: 20px;
}
.tag a:hover {
  background: #fab96d;
  color: #FFFFFF;
}

ul.user_profile_list {
  list-style: none;
  margin: 0px;
  padding: 0px;
}

ul.user_profile_list li {
  display: list-item;
  clear: both;
  line-height: 42px;
}

ul.user_profile_list li {
  border-bottom: 1px solid #FFFFFF;
  border-top: 1px solid #FFFFFF;
}

ul.user_profile_list li:last-child {
  border-bottom :none;
  border-radius :0px 0px 10px 10px;
}

ul.user_profile_list li:first-child {
  border-top: none;
  border-radius: 10px 0px 0px 0px;
}
ul.user_profile_list li:hover {
  background: #e48a30;
}

ul.user_profile_list .user_profile_list_manage_group {
  background: #4E4E4E;
  border-bottom: 1px solid #FFFFFF;
  border-top: 1px solid #FFFFFF;
}

ul.user_profile_list .user_profile_list_manage_group:hover {
  background: #8A8A8A;
}


/* Check in pro button*/
.checkin_pro{
float: left;
background: url("<? echo $sTemplate->getTemplateRoot(); ?>img/checkin_pro.png") no-repeat scroll 0 0 transparent;
height: 44px;
width: 99px;
border: none;
}

.checkin_con{
float:right;
background: url("<? echo $sTemplate->getTemplateRoot(); ?>img/checkin_con.png") no-repeat scroll 0 0 transparent;
height: 44px;
width: 99px;
border: none;
}

.checkin_con:hover,.checkin_pro:hover{
cursor:pointer;
}


.clear_form_button{
float:left;
margin-left:90px;
}
.clear_argument_form{
margin-left:100px;
float:left;
}

.writing_tips{
   margin-left: 282px;
   width: 700px;
   margin-top:50px;
}

.writing_tips h3{
    color: #004A80;
    height: 29px;
    left: -64px;
    line-height: 29px;
    padding-left: 43px;
    position: relative;
background:url(<? echo $sTemplate->getTemplateRoot(); ?>img/assets/info_tip.png) no-repeat left center;

}

.writing_tips ul.writing_tips_list li{
list-style:decimal;
margin:10px 0px 10px;
font-family:"Imprima", sans-serif;
}

.current_page{
}

.question_tabs a{
font-family:"Imprima", serif;
}

#footer_socials{
  position: absolute;
  right: 0px;
  top: 53px;
}

#footer_socials li{
list-style:none;
margin:3px;
display: inline-block;
}
#footer_socials ul li a{

width:33px;
height:32px;
display:block;
}

#footer_socials .footer_twitter{
background:url(<? echo $sTemplate->getTemplateRoot(); ?>img/socials/twitter.png) no-repeat center top;
}
#footer_socials .footer_twitter:hover{
background:url(<? echo $sTemplate->getTemplateRoot(); ?>img/socials/twitter.png) no-repeat center bottom;
}

#footer_socials .footer_facebook{
background:url(<? echo $sTemplate->getTemplateRoot(); ?>img/socials/facebook.png) no-repeat center top;
}

#footer_socials .footer_facebook:hover{
background:url(<? echo $sTemplate->getTemplateRoot(); ?>img/socials/facebook.png)no-repeat center bottom;
}

#footer_socials .footer_gplus{
background:url(<? echo $sTemplate->getTemplateRoot(); ?>img/socials/gplus.png) no-repeat center top;
}

#footer_socials .footer_gplus:hover{
background:url(<? echo $sTemplate->getTemplateRoot(); ?>img/socials/gplus.png)no-repeat center bottom;
}


#user_tips{
width:600px;
margin-left:175px;
}

#user_tips h3{
margin-top:35px;
color:#004a80;
font-family:"Cantata One", sans-serif
font-size:20px;
}


#user_tips li p.recent_question,
#user_tips li p.recent_argument{
color:#f26522;
font-size:15px;
margin-bottom:0px;
}

#user_tips li p.question_posted,
#user_tips li p.argument_posted {
  color:#707070;
  font-size:15px;
  margin-top:0px;
  font-size:12px;
}

.recent_questions li {
  background:url(<? echo $sTemplate->getTemplateRoot(); ?>img/assets/question.png) no-repeat left top;
  padding-left:40px;
}

.recent_arguments li {
  background:url(<? echo $sTemplate->getTemplateRoot(); ?>img/assets/argument.png) no-repeat left top;
  padding-left:40px;
}

#user_tips li p.recent_argument {
  border-bottom:1px solid #d0d0d0;
  padding-bottom:5px;
}

#user_tips li p.argument_posted {
  padding-top:5px;
}


.recent_arguments li a {
  color:#f26522;
}


.characters_left,
.characters_written {
  float:right;
  margin-right:5px;
  margin-bottom:20px;
  font-size:12px;
  margin-top:5px;
  color:#999;
  font-family:"Open Sans";
}


.ui-dialog{
border:4px solid #CCC;
box-shadow: 6px 8px 5px #999;
-moz-box-shadow: 6px 8px 5px #999;
-webkit-box-shadow: 6px 8px 5px #999;
border-radius:7px;
-moz-border-radius:7px;
-webkit-border-radius:7px;
padding:15px;
}
.ui-dialog-titlebar { display:none; }


.ui-dialog .ui-dialog-buttonpane{
border:0px;
}

.ui-widget-content {
  background: url(<? echo $sTemplate->getTemplateRoot(); ?>img/assets/alert_info.png) no-repeat 40px 40px #FFF;
  font-family: "Imprima", sans-serif;
  padding-left: 75px;
  padding-top: 33px;
  padding-right: 75px;

}
.ui-widget-overlay{
opacity:0.2;
}
.ui-dialog .ui-dialog-buttonpane button{
margin:0 auto;
}
.ui-dialog .ui-dialog-buttonpane{
text-align:center!important;}

}
div.clearfix{
clear:both;
}

.short_url {
  color: #87CBFF;
}

.argument_full {
  width: 700px;
  border: 6px solid #B5B5B5;
  border-image: url("<? echo $sTemplate->getTemplateRoot(); ?>img/box_700.png") 6 6 6 6 fill;
  min-height: 100px;
  background: #FFFFFF;
  position: relative;
  overflow: hidden;
}

.argument_full .argument_title {
  margin-left: 100px;
  left: 0px;
}

.counter_argument_box_full {
  position: relative;
  height: 40px;
  width: 120px;
  border: 6px solid #B5B5B5;
  border-image: url("<? echo $sTemplate->getTemplateRoot(); ?>img/box_117.png") 6 6 6 6 fill;
  border-radius: 20px;
  -webkit-border-radius: 20px;
  -moz-border-radius: 20px;
  left: 50%;
  margin-left: -60px;
}

.counter_argument_box_full_pro .plus_sign {
  left: -9px;
  top: 10px;
}

.counter_argument_box_full_con .plus_sign {
  right: -9px;
  top: 10px;
}

.counter_argument_box_full_line {
  left: 50%;
  margin-left: -1px;
  width: 6px;
  height: 30px;
  position: relative;
  background: url("<? echo $sTemplate->getTemplateRoot(); ?>img/box_line.png");
}

.argument_abstract .read_more:hover, .argument_abstract_extended .read_more:hover {
  text-decoration:underline;
}

.question_num_arguments {
  position: absolute;
  right: 20px;
  top: -20px;
  text-align: center;
  height: 25px;
  width: 55px;
  color: #FFFFFF;

  width: 28px;
  height: 28px;
  padding-top: 1px;
  background: url('<? echo $sTemplate->getTemplateRoot(); ?>img/icon_num_arguments.png');
}

#new_group_title {
    border: 1px solid #B5B5B5;
    border-radius: 10px;
    height: 50px;
    padding-left: 3px;
    width: 100%;
    font-family:"Imprima", sans-serif;
    font-size: 24px;
}

.new_group_visibility {
  height: 36px;
  border-radius: 7px;
}

#input_new_group_title {
  /* width: 100%; */
}

.manage_group_label {
  float: left;
  color: #040404;
  width: 240px;
  margin-left: 40px;
  position: relative;
  z-index: 2;
  padding-top: 5px;
  font-weight: bold;
}

.manage_group_col {
  color: #040404;
  width:480px;
  float:left;
}

textarea {
   border: 1px solid #B5B5B5;
   border-radius: 5px;
   box-shadow: 0 2px 3px 1px #DDDDDD inset;
   padding:5px;
   font-family: 'Imprima', sans-serif;
   font-size: 16px;
}



#group_users {
  height: 75px;
  margin-right: 20px;
  margin-left: 40px;
  color:gray;
}

.row_manage_group_users {
  height: 28px;

}

.permissions, .group_owner {
  margin-right: 30px;
}

.permissions {
  width: 191px;
}

.prompt_yes {
  margin-right: 50px !important;
}

.prompt_no {
  margin-left: 50px !important;
}


select {
padding:5px;
font-family: "Imprima";
}

	select.wide {
		min-width:190px;
	}

	select.medium {
	min-width:120px;
	}

	select.small {
	min-width:50px;
	}


.right_align {
  float:right;
}

.col_50 {
  width:50%;
  float:left;
}

.col_70 {
  width:70%;
  float:left;
}

.col_30 {
  width:30%;
  float:left;
}

.full_width {
width:100%;
}

.clear {
clear:both;
}

a.orange {
	color:#FF5300;
}

a.black {
	color:black;
}

h2 {

font-size:22px;
font-weight:normal;
margin-top:0;
}

small {

  font-size: 12px;
  font-family: Tahoma, Geneva, sans-serif;

}

.signup_container {
  width: 525px;
  float: left;
}

.login_container {
  width: 525px;
  float: right;
}

.row_submit_button_login {
  padding-left: 40px;
  padding-right: 40px;
}

.row_submit_button_login span {
  padding-top: 10px;
}

.row_submit_button a {
  color: #666666;
  text-decoration: underline;
}

.button_orange{
background:#ff9f40;
color:#FFF;
border:1px solid #ff9f40;
line-height:20px;
box-shadow:0 1px 1px  #FFFFFF inset;
-moz-box-shadow:0 1px 1px  #FFFFFF inset;
-webkit-box-shadow:0 1px 1px  #FFFFFF inset;
border-radius:5px;
-moz-border-radius:5px;
-webkit-border-radius:5px;
padding-left:10px;
padding-right:10px;
text-shadow:0px 1px 0 #f07d0b;
}

.button_black{
background:#808080;
color:#FFF;
border:1px solid #808080;
line-height:20px;
font-family: "Open Sans";
font-size: 16px;
box-shadow:0 1px 1px  #FFFFFF inset;
-moz-box-shadow:0 1px 1px  #FFFFFF inset;
-webkit-box-shadow:0 1px 1px  #FFFFFF inset;
border-radius:5px;
-moz-border-radius:5px;
-webkit-border-radius:5px;
line-height:34px;
padding-left:10px;
padding-right:10px;
text-shadow:0px 1px 0 #555;
}

button.checkin_nein{
background:url('<? echo $sTemplate->getTemplateRoot(); ?>img/arrows/arrow_left.png') no-repeat 10px center #4d4d4d;
color:#FFF;
border:1px solid #4d4d4d;
line-height:20px;
box-shadow:0 1px 1px  #DDD inset;
-moz-box-shadow:0 1px 1px  #DDD inset;
-webkit-box-shadow:0 1px 1px  #DDD inset;
border-radius:5px;
-moz-border-radius:5px;
-webkit-border-radius:5px;
line-height:34px;
padding-right:10px;
text-shadow:0px 1px 0 #555;
padding-left:20px;
}


button.checkin_ja{
background:url('<? echo $sTemplate->getTemplateRoot(); ?>img/arrows/arrow_right.png') no-repeat right center #ff9f40;
color:#FFF;
border:1px solid #ff9f40;
line-height:20px;
box-shadow:0 1px 1px  #FFF inset;
-moz-box-shadow:0 1px 1px  #FFF inset;
-webkit-box-shadow:0 1px 1px  #FFF inset;
border-radius:5px;
-moz-border-radius:5px;
-webkit-border-radius:5px;
line-height:34px;
padding-right:20px;
text-shadow:0px 1px 0 #f07d0b;
padding-left:10px;
}

button:hover{
opacity:0.85;
cursor:pointer;
}

.center450 {
  left: 50%;
  margin-left: -225px;
  position: relative;
}
