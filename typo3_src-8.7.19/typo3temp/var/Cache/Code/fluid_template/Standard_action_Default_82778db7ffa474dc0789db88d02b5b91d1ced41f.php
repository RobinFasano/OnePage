<?php

class Standard_action_Default_82778db7ffa474dc0789db88d02b5b91d1ced41f extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this; 
return (string) 'Default';
}
public function hasLayout() {
return TRUE;
}
public function addCompiledNamespaces(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$renderingContext->getViewHelperResolver()->addNamespaces(array (
  'core' => 
  array (
    0 => 'TYPO3\\CMS\\Core\\ViewHelpers',
  ),
  'f' => 
  array (
    0 => 'TYPO3Fluid\\Fluid\\ViewHelpers',
    1 => 'TYPO3\\CMS\\Fluid\\ViewHelpers',
  ),
  'formvh' => 
  array (
    0 => 'TYPO3\\CMS\\Form\\ViewHelpers',
  ),
));
}

/**
 * section Main
 */
public function section_62bce9422ff2d14f69ab80a154510232fc8a9afd(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '
  ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1 = array();
$arguments1['typoscriptObjectPath'] = NULL;
$arguments1['data'] = NULL;
$arguments1['currentValueKey'] = NULL;
$arguments1['table'] = '';
$arguments1['typoscriptObjectPath'] = 'lib.sectionContent';

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '
  ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure4 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments3 = array();
$arguments3['typoscriptObjectPath'] = NULL;
$arguments3['data'] = NULL;
$arguments3['currentValueKey'] = NULL;
$arguments3['table'] = '';
$arguments3['typoscriptObjectPath'] = 'lib.pageResources';

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments3, $renderChildrenClosure4, $renderingContext);

$output0 .= '

';

return $output0;
}
/**
 * section Footer
 */
public function section_26c01e70a337f208f56dae1c3bc18f60c4bff453(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;

return '
<footer class="page-footer grey darken-4">

 <div class="footer-copyright grey darken-4 center-align">
   <div class="container ">
   <div class="row">
     <ul class="list-inline">
       <li><a href="#" class=""><i class="header-icon fab fa-linkedin fa-2x"></i></a></li>
       <li><a href="#"><i class="header-icon fab fa-xing-square fa-2x"></i></a></li>
       <li><a href="#"><i class="header-icon fab fa-github fa-2x"></i></a></li>
     </ul>
     © 2014 Copyright Text
   </div>
   </div>
 </div>
</footer>

<div class="fixed-action-btn scrolltop">
 <div class="scroll">
   <a class="btn-floating btn-large custom-grey">
     <i class="large material-icons scrolltop-icon">expand_less</i>
   </a>
 </div>
</div>
';
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output5 = '';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper
$renderChildrenClosure7 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments6 = array();
$arguments6['name'] = NULL;
$arguments6['name'] = 'Default';

$output5 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [NULL]);

$output5 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure9 = function() use ($renderingContext, $self) {
$output10 = '';

$output10 .= '
  ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure12 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments11 = array();
$arguments11['typoscriptObjectPath'] = NULL;
$arguments11['data'] = NULL;
$arguments11['currentValueKey'] = NULL;
$arguments11['table'] = '';
$arguments11['typoscriptObjectPath'] = 'lib.sectionContent';

$output10 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments11, $renderChildrenClosure12, $renderingContext);

$output10 .= '
  ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure14 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments13 = array();
$arguments13['typoscriptObjectPath'] = NULL;
$arguments13['data'] = NULL;
$arguments13['currentValueKey'] = NULL;
$arguments13['table'] = '';
$arguments13['typoscriptObjectPath'] = 'lib.pageResources';

$output10 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments13, $renderChildrenClosure14, $renderingContext);

$output10 .= '

';
return $output10;
};
$arguments8 = array();
$arguments8['name'] = NULL;
$arguments8['name'] = 'Main';

$output5 .= NULL;

$output5 .= '

<!-- footer section-->

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure16 = function() use ($renderingContext, $self) {
return '
<footer class="page-footer grey darken-4">

 <div class="footer-copyright grey darken-4 center-align">
   <div class="container ">
   <div class="row">
     <ul class="list-inline">
       <li><a href="#" class=""><i class="header-icon fab fa-linkedin fa-2x"></i></a></li>
       <li><a href="#"><i class="header-icon fab fa-xing-square fa-2x"></i></a></li>
       <li><a href="#"><i class="header-icon fab fa-github fa-2x"></i></a></li>
     </ul>
     © 2014 Copyright Text
   </div>
   </div>
 </div>
</footer>

<div class="fixed-action-btn scrolltop">
 <div class="scroll">
   <a class="btn-floating btn-large custom-grey">
     <i class="large material-icons scrolltop-icon">expand_less</i>
   </a>
 </div>
</div>
';
};
$arguments15 = array();
$arguments15['name'] = NULL;
$arguments15['name'] = 'Footer';

$output5 .= NULL;

$output5 .= '
';

return $output5;
}


}
#