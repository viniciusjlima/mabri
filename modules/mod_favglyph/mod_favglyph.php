<?php
/**
* @file
* @brief    Responsive FavGlyph Module
* @author   FavThemes
* @version  1.3
* @remarks  Copyright (C) 2013 FavThemes
* @remarks  Licensed under GNU/GPLv3, see http://www.gnu.org/licenses/gpl-3.0.html
* @see      http://www.favthemes.com/
*/

// no direct access

defined('_JEXEC') or die;

for ($j=1;$j<5;$j++) {

${'showIcon'.$j}                                  = $params->get('showIcon'.$j);
${'iconLayout'.$j}                                = $params->get('iconLayout'.$j);
${'textLayout'.$j}                                = $params->get('textLayout'.$j);
${'iconLink'.$j}                                  = $params->get('iconLink'.$j);
${'iconLinkTarget'.$j}                            = $params->get('iconLinkTarget'.$j);
${'bgColorIcon'.$j}                               = $params->get('bgColorIcon'.$j);
${'widthIcon'.$j}                                 = $params->get('widthIcon'.$j);
${'borderWidthIcon'.$j}                           = $params->get('borderWidthIcon'.$j);
${'borderTypeIcon'.$j}                            = $params->get('borderTypeIcon'.$j);
${'borderColorIcon'.$j}                           = $params->get('borderColorIcon'.$j);
${'borderRadiusIcon'.$j}                          = $params->get('borderRadiusIcon'.$j);
${'nameIcon'.$j}                                  = $params->get('nameIcon'.$j);
${'colorIcon'.$j}                                 = $params->get('colorIcon'.$j);
${'fontSizeIcon'.$j}                              = $params->get('fontSizeIcon'.$j);
${'titleText'.$j}                                 = $params->get('titleText'.$j);
${'titleColor'.$j}                                = $params->get('titleColor'.$j);
${'titleGoogleFont'.$j}                           = $params->get('titleGoogleFont'.$j);
${'titleFontSize'.$j}                             = $params->get('titleFontSize'.$j);
${'titleMargin'.$j}                               = $params->get('titleMargin'.$j);
${'text'.$j}                                      = $params->get('text'.$j);
${'textColor'.$j}                                 = $params->get('textColor'.$j);
${'textFontSize'.$j}                              = $params->get('textFontSize'.$j);

}
// Load Bootstrap
JHtml::_('bootstrap.framework');
JHTML::stylesheet('media/jui/css/bootstrap.min.css');
JHTML::stylesheet('media/jui/css/bootstrap-responsive.css');
// Module CSS
JHTML::stylesheet('modules/mod_favglyph/theme/FontAwesome/css/font-awesome.css');
JHTML::stylesheet('modules/mod_favglyph/theme/favglyph.css');
JHTML::stylesheet('http://fonts.googleapis.com/css?family='.$titleGoogleFont1);
JHTML::stylesheet('http://fonts.googleapis.com/css?family='.$titleGoogleFont2);
JHTML::stylesheet('http://fonts.googleapis.com/css?family='.$titleGoogleFont3);
JHTML::stylesheet('http://fonts.googleapis.com/css?family='.$titleGoogleFont4);

?>

<?php
    $scls = '';
    $arrchk = array($showIcon1,$showIcon2,$showIcon3,$showIcon4);
    $ichk = 0; foreach ($arrchk as $arck) { if ($arck == 1) { $ichk++; } }

    if ($ichk > 0) { $scls = 'span'.(12/$ichk); } ?>

<div id="favglyph" class="row-fluid">

    <?php for ($i=1;$i<5;$i++) {

    if ( (${'showIcon'.$i}) !=0) {

      $iconpart = '<div class="favglyph-icon-'.${'iconLayout'.$i}.' clearfix">
                    <div id="favglyph-icon"
                          style="background-color: #'.${'bgColorIcon'.$i}.';
                          width: '.${'widthIcon'.$i}.';
                          border: '.${'borderWidthIcon'.$i}.' '.${'borderTypeIcon'.$i}.' #'.${'borderColorIcon'.$i}.';
                          -webkit-border-radius: '.${'borderRadiusIcon'.$i}.';
                          -moz-border-radius: '.${'borderRadiusIcon'.$i}.';
                          border-radius: '.${'borderRadiusIcon'.$i}.';">
                      <a href="'.${'iconLink'.$i}.'" target="_'.${'iconLinkTarget'.$i}.'">
                        <i class="fa '.${'nameIcon'.$i}.'"
                            style="color: #'.${'colorIcon'.$i}.';
                            font-size: '.${'fontSizeIcon'.$i}.';">
                        </i>
                      </a>
                    </div>
                  </div>';

      $textpart = '<div class="favglyph-text-'.${'iconLayout'.$i}.' clearfix">
                    <h2 id="favglyph-title"
                        style="font-family: '.${'titleGoogleFont'.$i}.', sans-serif;
                        font-size: '.${'titleFontSize'.$i}.';
                        margin: '.${'titleMargin'.$i}.';">
                      <a href="'.${'iconLink'.$i}.'" target="_'.${'iconLinkTarget'.$i}.'"
                          style="color: #'.${'titleColor'.$i}.';">
                        '.${'titleText'.$i}.'
                      </a>
                    </h2>
                    <p id="favglyph-text"
                      style="font-size: '.${'textFontSize'.$i}.';
                      color: #'.${'textColor'.$i}.';">
                      '.${'text'.$i}.'
                    </p>
                  </div>';
?>
    <div id="favglyph-box<?php echo $i; ?>"
      class="<?php echo $scls; ?> clearfix">

      <?php if(${'textLayout'.$i} == 0) { echo $iconpart; echo $textpart; } else { echo $textpart; echo $iconpart; } ?>

    </div>

<?php } } ?>

</div>

