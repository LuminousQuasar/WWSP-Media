<?php
class FluidCache_Aboutmodules_Modules_layout_Default_4f5a27f7978e904cd2ce87a34945c58753b3f2ef extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getVariableContainer() {
	// @todo
	return new \TYPO3\CMS\Fluid\Core\ViewHelper\TemplateVariableContainer();
}
public function getLayoutName(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();

return NULL;
}
public function hasLayout() {
return FALSE;
}

/**
 * Main Render function
 */
public function render(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();

// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\ContainerViewHelper
$arguments0 = array();
// Rendering Array
$array1 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper
$arguments2 = array();
$arguments2['path'] = 'Css/styles.css';
$arguments2['extensionName'] = NULL;
$arguments2['absolute'] = false;
$renderChildrenClosure3 = function() {return NULL;};
$array1['0'] = TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments2, $renderChildrenClosure3, $renderingContext);
$arguments0['includeCssFiles'] = $array1;
$arguments0['pageTitle'] = '';
$arguments0['enableClickMenu'] = true;
$arguments0['loadExtJs'] = false;
$arguments0['loadExtJsTheme'] = true;
$arguments0['enableExtJsDebug'] = false;
$arguments0['loadJQuery'] = false;
$arguments0['includeJsFiles'] = NULL;
$arguments0['addJsInlineLabels'] = NULL;
$arguments0['includeRequireJsModules'] = NULL;
$renderChildrenClosure4 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output5 = '';

$output5 .= '
	<div id="typo3-docheader">
		<div class="typo3-docheader-functions">&nbsp;</div>
		<div class="typo3-docheader-buttons">&nbsp;</div>
	</div>

	<div id="typo3-docbody">
		<div id="typo3-inner-docbody" class="typo3-aboutmodules-inner-docbody">
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments6 = array();
$arguments6['section'] = 'Content';
$arguments6['partial'] = NULL;
$arguments6['arguments'] = array (
);
$arguments6['optional'] = false;
$renderChildrenClosure7 = function() {return NULL;};

$output5 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments6, $renderChildrenClosure7, $renderingContext);

$output5 .= '
		</div>
	</div>
';
return $output5;
};
$viewHelper8 = $self->getViewHelper('$viewHelper8', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Be\ContainerViewHelper');
$viewHelper8->setArguments($arguments0);
$viewHelper8->setRenderingContext($renderingContext);
$viewHelper8->setRenderChildrenClosure($renderChildrenClosure4);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\ContainerViewHelper


return $viewHelper8->initializeArgumentsAndRender();
}


}
#1443835867    3011      