<?php
class FluidCache_Extensionmanager_List_action_index_e33990f2a6ab8d930abcf95a0f9ee51c44fac99e extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getVariableContainer() {
	// @todo
	return new \TYPO3\CMS\Fluid\Core\ViewHelper\TemplateVariableContainer();
}
public function getLayoutName(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();

return 'main';
}
public function hasLayout() {
return TRUE;
}

/**
 * section docheader-buttons
 */
public function section_82416aa889dc891ac3382685ebae30417e96849a(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();

$output0 = '';

$output0 .= '
	<div id="upload-button-wrap">
		<a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$arguments1 = array();
$arguments1['action'] = 'form';
$arguments1['controller'] = 'UploadExtensionFile';
$arguments1['arguments'] = array (
);
$arguments1['extensionName'] = NULL;
$arguments1['pluginName'] = NULL;
$arguments1['pageUid'] = NULL;
$arguments1['pageType'] = 0;
$arguments1['noCache'] = false;
$arguments1['noCacheHash'] = false;
$arguments1['section'] = '';
$arguments1['format'] = '';
$arguments1['linkAccessRestrictedPages'] = false;
$arguments1['additionalParams'] = array (
);
$arguments1['absolute'] = false;
$arguments1['addQueryString'] = false;
$arguments1['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments1['addQueryStringMethod'] = NULL;
$renderChildrenClosure2 = function() {return NULL;};
$viewHelper3 = $self->getViewHelper('$viewHelper3', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper');
$viewHelper3->setArguments($arguments1);
$viewHelper3->setRenderingContext($renderingContext);
$viewHelper3->setRenderChildrenClosure($renderChildrenClosure2);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper

$output0 .= $viewHelper3->initializeArgumentsAndRender();

$output0 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments4 = array();
$arguments4['key'] = 'extensionList.uploadExtension';
$arguments4['id'] = NULL;
$arguments4['default'] = NULL;
$arguments4['htmlEscape'] = NULL;
$arguments4['arguments'] = NULL;
$arguments4['extensionName'] = NULL;
$renderChildrenClosure5 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext);

$output0 .= '">
			';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$arguments6 = array();
$arguments6['identifier'] = 'actions-edit-upload';
$arguments6['size'] = 'small';
$arguments6['overlay'] = NULL;
$arguments6['state'] = 'default';
$renderChildrenClosure7 = function() {return NULL;};

$output0 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments6, $renderChildrenClosure7, $renderingContext);

$output0 .= '
		</a>
	</div>
';


return $output0;
}
/**
 * section module-headline
 */
public function section_448d1ad99edd62d80682fc5d4e038788bb925e4c(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();

$output8 = '';

$output8 .= '
	<h1>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments9 = array();
$arguments9['key'] = 'installedExtensions';
$arguments9['id'] = NULL;
$arguments9['default'] = NULL;
$arguments9['htmlEscape'] = NULL;
$arguments9['arguments'] = NULL;
$arguments9['extensionName'] = NULL;
$renderChildrenClosure10 = function() {return NULL;};

$output8 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments9, $renderChildrenClosure10, $renderingContext);

$output8 .= '</h1>
';


return $output8;
}
/**
 * section Content
 */
public function section_4f9be057f0ea5d2ba72fd2c810e8d7b9aa98b469(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();

$output11 = '';

$output11 .= '
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FlashMessagesViewHelper
$arguments12 = array();
$arguments12['additionalAttributes'] = NULL;
$arguments12['data'] = NULL;
$arguments12['renderMode'] = NULL;
$arguments12['as'] = NULL;
$arguments12['class'] = NULL;
$arguments12['dir'] = NULL;
$arguments12['id'] = NULL;
$arguments12['lang'] = NULL;
$arguments12['style'] = NULL;
$arguments12['title'] = NULL;
$arguments12['accesskey'] = NULL;
$arguments12['tabindex'] = NULL;
$arguments12['onclick'] = NULL;
$arguments12['queueIdentifier'] = NULL;
$renderChildrenClosure13 = function() {return NULL;};
$viewHelper14 = $self->getViewHelper('$viewHelper14', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\FlashMessagesViewHelper');
$viewHelper14->setArguments($arguments12);
$viewHelper14->setRenderingContext($renderingContext);
$viewHelper14->setRenderChildrenClosure($renderChildrenClosure13);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FlashMessagesViewHelper

$output11 .= $viewHelper14->initializeArgumentsAndRender();

$output11 .= '

	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments15 = array();
$arguments15['partial'] = 'List/UploadForm';
$arguments15['section'] = NULL;
$arguments15['arguments'] = array (
);
$arguments15['optional'] = false;
$renderChildrenClosure16 = function() {return NULL;};

$output11 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments15, $renderChildrenClosure16, $renderingContext);

$output11 .= '

	<form class="form-inline">
		<div class="form-group">
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$arguments17 = array();
$arguments17['name'] = 'Tx_Extensionmanager_extensionkey';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments18 = array();
$arguments18['key'] = 'extensionList.search';
$arguments18['id'] = NULL;
$arguments18['default'] = NULL;
$arguments18['htmlEscape'] = NULL;
$arguments18['arguments'] = NULL;
$arguments18['extensionName'] = NULL;
$renderChildrenClosure19 = function() {return NULL;};
$arguments17['placeholder'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments18, $renderChildrenClosure19, $renderingContext);
$arguments17['id'] = 'Tx_Extensionmanager_extensionkey';
$arguments17['value'] = $currentVariableContainer->getOrNull('search');
$arguments17['class'] = 'form-control';
$arguments17['additionalAttributes'] = NULL;
$arguments17['data'] = NULL;
$arguments17['required'] = false;
$arguments17['type'] = 'text';
$arguments17['property'] = NULL;
$arguments17['autofocus'] = NULL;
$arguments17['disabled'] = NULL;
$arguments17['maxlength'] = NULL;
$arguments17['readonly'] = NULL;
$arguments17['size'] = NULL;
$arguments17['pattern'] = NULL;
$arguments17['errorClass'] = 'f3-form-error';
$arguments17['dir'] = NULL;
$arguments17['lang'] = NULL;
$arguments17['style'] = NULL;
$arguments17['title'] = NULL;
$arguments17['accesskey'] = NULL;
$arguments17['tabindex'] = NULL;
$arguments17['onclick'] = NULL;
$renderChildrenClosure20 = function() {return NULL;};
$viewHelper21 = $self->getViewHelper('$viewHelper21', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper');
$viewHelper21->setArguments($arguments17);
$viewHelper21->setRenderingContext($renderingContext);
$viewHelper21->setRenderChildrenClosure($renderChildrenClosure20);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper

$output11 .= $viewHelper21->initializeArgumentsAndRender();

$output11 .= '
		</div>
	</form>
	<div class="table-fit">
		<table id="typo3-extension-list" class="table table-striped table-hover typo3-extension-list">
		<thead>
			<tr>
				<th title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments22 = array();
$arguments22['key'] = 'extensionList.header.title.update';
$arguments22['id'] = NULL;
$arguments22['default'] = NULL;
$arguments22['htmlEscape'] = NULL;
$arguments22['arguments'] = NULL;
$arguments22['extensionName'] = NULL;
$renderChildrenClosure23 = function() {return NULL;};

$output11 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments22, $renderChildrenClosure23, $renderingContext);

$output11 .= '">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments24 = array();
$arguments24['key'] = 'extensionList.header.update';
$arguments24['id'] = NULL;
$arguments24['default'] = NULL;
$arguments24['htmlEscape'] = NULL;
$arguments24['arguments'] = NULL;
$arguments24['extensionName'] = NULL;
$renderChildrenClosure25 = function() {return NULL;};

$output11 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments24, $renderChildrenClosure25, $renderingContext);

$output11 .= '</th>
				<th title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments26 = array();
$arguments26['key'] = 'extensionList.header.title.activate';
$arguments26['id'] = NULL;
$arguments26['default'] = NULL;
$arguments26['htmlEscape'] = NULL;
$arguments26['arguments'] = NULL;
$arguments26['extensionName'] = NULL;
$renderChildrenClosure27 = function() {return NULL;};

$output11 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments26, $renderChildrenClosure27, $renderingContext);

$output11 .= '">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments28 = array();
$arguments28['key'] = 'extensionList.header.activate';
$arguments28['id'] = NULL;
$arguments28['default'] = NULL;
$arguments28['htmlEscape'] = NULL;
$arguments28['arguments'] = NULL;
$arguments28['extensionName'] = NULL;
$renderChildrenClosure29 = function() {return NULL;};

$output11 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments28, $renderChildrenClosure29, $renderingContext);

$output11 .= '</th>
				<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments30 = array();
$arguments30['key'] = 'extensionList.header.extensionName';
$arguments30['id'] = NULL;
$arguments30['default'] = NULL;
$arguments30['htmlEscape'] = NULL;
$arguments30['arguments'] = NULL;
$arguments30['extensionName'] = NULL;
$renderChildrenClosure31 = function() {return NULL;};

$output11 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments30, $renderChildrenClosure31, $renderingContext);

$output11 .= '</th>
				<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments32 = array();
$arguments32['key'] = 'extensionList.header.extensionKey';
$arguments32['id'] = NULL;
$arguments32['default'] = NULL;
$arguments32['htmlEscape'] = NULL;
$arguments32['arguments'] = NULL;
$arguments32['extensionName'] = NULL;
$renderChildrenClosure33 = function() {return NULL;};

$output11 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments32, $renderChildrenClosure33, $renderingContext);

$output11 .= '</th>
				<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments34 = array();
$arguments34['key'] = 'extensionList.header.extensionVersion';
$arguments34['id'] = NULL;
$arguments34['default'] = NULL;
$arguments34['htmlEscape'] = NULL;
$arguments34['arguments'] = NULL;
$arguments34['extensionName'] = NULL;
$renderChildrenClosure35 = function() {return NULL;};

$output11 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments34, $renderChildrenClosure35, $renderingContext);

$output11 .= '</th>
				<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments36 = array();
$arguments36['key'] = 'extensionList.header.extensionState';
$arguments36['id'] = NULL;
$arguments36['default'] = NULL;
$arguments36['htmlEscape'] = NULL;
$arguments36['arguments'] = NULL;
$arguments36['extensionName'] = NULL;
$renderChildrenClosure37 = function() {return NULL;};

$output11 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments36, $renderChildrenClosure37, $renderingContext);

$output11 .= '</th>
				<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments38 = array();
$arguments38['key'] = 'extensionList.header.extensionActions';
$arguments38['id'] = NULL;
$arguments38['default'] = NULL;
$arguments38['htmlEscape'] = NULL;
$arguments38['arguments'] = NULL;
$arguments38['extensionName'] = NULL;
$renderChildrenClosure39 = function() {return NULL;};

$output11 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments38, $renderChildrenClosure39, $renderingContext);

$output11 .= '</th>
			</tr>
		</thead>
		<tbody>
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments40 = array();
$arguments40['each'] = $currentVariableContainer->getOrNull('extensions');
$arguments40['as'] = 'extension';
$arguments40['key'] = 'extensionKey';
$arguments40['reverse'] = false;
$arguments40['iteration'] = NULL;
$renderChildrenClosure41 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output42 = '';

$output42 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments43 = array();
// Rendering Boolean node
$arguments43['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'terObject', $renderingContext));
$arguments43['then'] = NULL;
$arguments43['else'] = NULL;
$renderChildrenClosure44 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output45 = '';

$output45 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments46 = array();
$renderChildrenClosure47 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output48 = '';

$output48 .= '
						<tr id="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments49 = array();
$arguments49['value'] = $currentVariableContainer->getOrNull('extensionKey');
$arguments49['keepQuotes'] = false;
$arguments49['encoding'] = NULL;
$arguments49['doubleEncode'] = true;
$renderChildrenClosure50 = function() {return NULL;};
$value51 = ($arguments49['value'] !== NULL ? $arguments49['value'] : $renderChildrenClosure50());

$output48 .= (!is_string($value51) ? $value51 : htmlspecialchars($value51, ($arguments49['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments49['encoding'] !== NULL ? $arguments49['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments49['doubleEncode']));

$output48 .= '" class="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments52 = array();
// Rendering Boolean node
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments53 = array();
$arguments53['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'terObject.reviewState', $renderingContext);
$arguments53['keepQuotes'] = false;
$arguments53['encoding'] = NULL;
$arguments53['doubleEncode'] = true;
$renderChildrenClosure54 = function() {return NULL;};
$value55 = ($arguments53['value'] !== NULL ? $arguments53['value'] : $renderChildrenClosure54());
$arguments52['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', (!is_string($value55) ? $value55 : htmlspecialchars($value55, ($arguments53['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments53['encoding'] !== NULL ? $arguments53['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments53['doubleEncode'])), -1);
$arguments52['then'] = 'insecure';
$arguments52['else'] = NULL;
$renderChildrenClosure56 = function() {return NULL;};

$output48 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments52, $renderChildrenClosure56, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments57 = array();
// Rendering Boolean node
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments58 = array();
$arguments58['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'terObject.reviewState', $renderingContext);
$arguments58['keepQuotes'] = false;
$arguments58['encoding'] = NULL;
$arguments58['doubleEncode'] = true;
$renderChildrenClosure59 = function() {return NULL;};
$value60 = ($arguments58['value'] !== NULL ? $arguments58['value'] : $renderChildrenClosure59());
$arguments57['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', (!is_string($value60) ? $value60 : htmlspecialchars($value60, ($arguments58['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments58['encoding'] !== NULL ? $arguments58['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments58['doubleEncode'])), -2);
$arguments57['then'] = 'outdated';
$arguments57['else'] = NULL;
$renderChildrenClosure61 = function() {return NULL;};

$output48 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments57, $renderChildrenClosure61, $renderingContext);

$output48 .= ' ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments62 = array();
// Rendering Boolean node
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments63 = array();
$arguments63['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'installed', $renderingContext);
$arguments63['keepQuotes'] = false;
$arguments63['encoding'] = NULL;
$arguments63['doubleEncode'] = true;
$renderChildrenClosure64 = function() {return NULL;};
$value65 = ($arguments63['value'] !== NULL ? $arguments63['value'] : $renderChildrenClosure64());
$arguments62['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean((!is_string($value65) ? $value65 : htmlspecialchars($value65, ($arguments63['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments63['encoding'] !== NULL ? $arguments63['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments63['doubleEncode'])));
$arguments62['then'] = '';
$arguments62['else'] = 'inactive';
$renderChildrenClosure66 = function() {return NULL;};

$output48 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments62, $renderChildrenClosure66, $renderingContext);

$output48 .= '">
					';
return $output48;
};

$output45 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments46, $renderChildrenClosure47, $renderingContext);

$output45 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments67 = array();
$renderChildrenClosure68 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output69 = '';

$output69 .= '
						<tr id="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments70 = array();
$arguments70['value'] = $currentVariableContainer->getOrNull('extensionKey');
$arguments70['keepQuotes'] = false;
$arguments70['encoding'] = NULL;
$arguments70['doubleEncode'] = true;
$renderChildrenClosure71 = function() {return NULL;};
$value72 = ($arguments70['value'] !== NULL ? $arguments70['value'] : $renderChildrenClosure71());

$output69 .= (!is_string($value72) ? $value72 : htmlspecialchars($value72, ($arguments70['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments70['encoding'] !== NULL ? $arguments70['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments70['doubleEncode']));

$output69 .= '" class="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments73 = array();
// Rendering Boolean node
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments74 = array();
$arguments74['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'installed', $renderingContext);
$arguments74['keepQuotes'] = false;
$arguments74['encoding'] = NULL;
$arguments74['doubleEncode'] = true;
$renderChildrenClosure75 = function() {return NULL;};
$value76 = ($arguments74['value'] !== NULL ? $arguments74['value'] : $renderChildrenClosure75());
$arguments73['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean((!is_string($value76) ? $value76 : htmlspecialchars($value76, ($arguments74['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments74['encoding'] !== NULL ? $arguments74['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments74['doubleEncode'])));
$arguments73['then'] = '';
$arguments73['else'] = 'inactive';
$renderChildrenClosure77 = function() {return NULL;};

$output69 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments73, $renderChildrenClosure77, $renderingContext);

$output69 .= '">
					';
return $output69;
};

$output45 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments67, $renderChildrenClosure68, $renderingContext);

$output45 .= '
				';
return $output45;
};
$arguments43['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output78 = '';

$output78 .= '
						<tr id="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments79 = array();
$arguments79['value'] = $currentVariableContainer->getOrNull('extensionKey');
$arguments79['keepQuotes'] = false;
$arguments79['encoding'] = NULL;
$arguments79['doubleEncode'] = true;
$renderChildrenClosure80 = function() {return NULL;};
$value81 = ($arguments79['value'] !== NULL ? $arguments79['value'] : $renderChildrenClosure80());

$output78 .= (!is_string($value81) ? $value81 : htmlspecialchars($value81, ($arguments79['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments79['encoding'] !== NULL ? $arguments79['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments79['doubleEncode']));

$output78 .= '" class="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments82 = array();
// Rendering Boolean node
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments83 = array();
$arguments83['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'terObject.reviewState', $renderingContext);
$arguments83['keepQuotes'] = false;
$arguments83['encoding'] = NULL;
$arguments83['doubleEncode'] = true;
$renderChildrenClosure84 = function() {return NULL;};
$value85 = ($arguments83['value'] !== NULL ? $arguments83['value'] : $renderChildrenClosure84());
$arguments82['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', (!is_string($value85) ? $value85 : htmlspecialchars($value85, ($arguments83['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments83['encoding'] !== NULL ? $arguments83['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments83['doubleEncode'])), -1);
$arguments82['then'] = 'insecure';
$arguments82['else'] = NULL;
$renderChildrenClosure86 = function() {return NULL;};

$output78 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments82, $renderChildrenClosure86, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments87 = array();
// Rendering Boolean node
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments88 = array();
$arguments88['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'terObject.reviewState', $renderingContext);
$arguments88['keepQuotes'] = false;
$arguments88['encoding'] = NULL;
$arguments88['doubleEncode'] = true;
$renderChildrenClosure89 = function() {return NULL;};
$value90 = ($arguments88['value'] !== NULL ? $arguments88['value'] : $renderChildrenClosure89());
$arguments87['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', (!is_string($value90) ? $value90 : htmlspecialchars($value90, ($arguments88['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments88['encoding'] !== NULL ? $arguments88['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments88['doubleEncode'])), -2);
$arguments87['then'] = 'outdated';
$arguments87['else'] = NULL;
$renderChildrenClosure91 = function() {return NULL;};

$output78 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments87, $renderChildrenClosure91, $renderingContext);

$output78 .= ' ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments92 = array();
// Rendering Boolean node
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments93 = array();
$arguments93['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'installed', $renderingContext);
$arguments93['keepQuotes'] = false;
$arguments93['encoding'] = NULL;
$arguments93['doubleEncode'] = true;
$renderChildrenClosure94 = function() {return NULL;};
$value95 = ($arguments93['value'] !== NULL ? $arguments93['value'] : $renderChildrenClosure94());
$arguments92['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean((!is_string($value95) ? $value95 : htmlspecialchars($value95, ($arguments93['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments93['encoding'] !== NULL ? $arguments93['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments93['doubleEncode'])));
$arguments92['then'] = '';
$arguments92['else'] = 'inactive';
$renderChildrenClosure96 = function() {return NULL;};

$output78 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments92, $renderChildrenClosure96, $renderingContext);

$output78 .= '">
					';
return $output78;
};
$arguments43['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output97 = '';

$output97 .= '
						<tr id="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments98 = array();
$arguments98['value'] = $currentVariableContainer->getOrNull('extensionKey');
$arguments98['keepQuotes'] = false;
$arguments98['encoding'] = NULL;
$arguments98['doubleEncode'] = true;
$renderChildrenClosure99 = function() {return NULL;};
$value100 = ($arguments98['value'] !== NULL ? $arguments98['value'] : $renderChildrenClosure99());

$output97 .= (!is_string($value100) ? $value100 : htmlspecialchars($value100, ($arguments98['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments98['encoding'] !== NULL ? $arguments98['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments98['doubleEncode']));

$output97 .= '" class="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments101 = array();
// Rendering Boolean node
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments102 = array();
$arguments102['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'installed', $renderingContext);
$arguments102['keepQuotes'] = false;
$arguments102['encoding'] = NULL;
$arguments102['doubleEncode'] = true;
$renderChildrenClosure103 = function() {return NULL;};
$value104 = ($arguments102['value'] !== NULL ? $arguments102['value'] : $renderChildrenClosure103());
$arguments101['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean((!is_string($value104) ? $value104 : htmlspecialchars($value104, ($arguments102['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments102['encoding'] !== NULL ? $arguments102['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments102['doubleEncode'])));
$arguments101['then'] = '';
$arguments101['else'] = 'inactive';
$renderChildrenClosure105 = function() {return NULL;};

$output97 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments101, $renderChildrenClosure105, $renderingContext);

$output97 .= '">
					';
return $output97;
};

$output42 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments43, $renderChildrenClosure44, $renderingContext);

$output42 .= '
				<td>
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments106 = array();
// Rendering Boolean node
$arguments106['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'updateAvailable', $renderingContext));
$arguments106['then'] = NULL;
$arguments106['else'] = NULL;
$renderChildrenClosure107 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output108 = '';

$output108 .= '
						<div class="btn-group">
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments109 = array();
// Rendering Boolean node
$arguments109['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'state', $renderingContext), 'excludeFromUpdates');
$arguments109['then'] = NULL;
$arguments109['else'] = NULL;
$renderChildrenClosure110 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output111 = '';

$output111 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments112 = array();
$renderChildrenClosure113 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output114 = '';

$output114 .= '
									<span class="btn btn-default disabled" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments115 = array();
$arguments115['key'] = 'extensionList.updateDisabled';
$arguments115['id'] = NULL;
$arguments115['default'] = NULL;
$arguments115['htmlEscape'] = NULL;
$arguments115['arguments'] = NULL;
$arguments115['extensionName'] = NULL;
$renderChildrenClosure116 = function() {return NULL;};

$output114 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments115, $renderChildrenClosure116, $renderingContext);

$output114 .= '">
										';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$arguments117 = array();
$arguments117['identifier'] = 'actions-system-extension-update';
$arguments117['size'] = 'small';
$arguments117['overlay'] = NULL;
$arguments117['state'] = 'default';
$renderChildrenClosure118 = function() {return NULL;};

$output114 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments117, $renderChildrenClosure118, $renderingContext);

$output114 .= '
									</span>
								';
return $output114;
};

$output111 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments112, $renderChildrenClosure113, $renderingContext);

$output111 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments119 = array();
$renderChildrenClosure120 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output121 = '';

$output121 .= '
									<span class="btn btn-default">
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments122 = array();
$arguments122['action'] = 'updateCommentForUpdatableVersions';
// Rendering Array
$array123 = array();
$array123['data-action'] = 'update-extension';
$arguments122['additionalAttributes'] = $array123;
$arguments122['format'] = 'json';
$arguments122['controller'] = 'Download';
// Rendering Array
$array124 = array();
$array124['extension'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'key', $renderingContext);
$array124['integerVersionStart'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'terObject.integerVersion', $renderingContext);
$array124['integerVersionStop'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'updateToVersion.integerVersion', $renderingContext);
$arguments122['arguments'] = $array124;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments125 = array();
$arguments125['key'] = 'extensionList.updateToVersion';
// Rendering Array
$array126 = array();
$array126['0'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'updateToVersion.version', $renderingContext);
$arguments125['arguments'] = $array126;
$arguments125['id'] = NULL;
$arguments125['default'] = NULL;
$arguments125['htmlEscape'] = NULL;
$arguments125['extensionName'] = NULL;
$renderChildrenClosure127 = function() {return NULL;};
$arguments122['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments125, $renderChildrenClosure127, $renderingContext);
$arguments122['data'] = NULL;
$arguments122['extensionName'] = NULL;
$arguments122['pluginName'] = NULL;
$arguments122['pageUid'] = NULL;
$arguments122['pageType'] = 0;
$arguments122['noCache'] = false;
$arguments122['noCacheHash'] = false;
$arguments122['section'] = '';
$arguments122['linkAccessRestrictedPages'] = false;
$arguments122['additionalParams'] = array (
);
$arguments122['absolute'] = false;
$arguments122['addQueryString'] = false;
$arguments122['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments122['addQueryStringMethod'] = NULL;
$arguments122['class'] = NULL;
$arguments122['dir'] = NULL;
$arguments122['id'] = NULL;
$arguments122['lang'] = NULL;
$arguments122['style'] = NULL;
$arguments122['accesskey'] = NULL;
$arguments122['tabindex'] = NULL;
$arguments122['onclick'] = NULL;
$arguments122['name'] = NULL;
$arguments122['rel'] = NULL;
$arguments122['rev'] = NULL;
$arguments122['target'] = NULL;
$renderChildrenClosure128 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output129 = '';

$output129 .= '
											';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$arguments130 = array();
$arguments130['identifier'] = 'actions-system-extension-update';
$arguments130['size'] = 'small';
$arguments130['overlay'] = NULL;
$arguments130['state'] = 'default';
$renderChildrenClosure131 = function() {return NULL;};

$output129 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments130, $renderChildrenClosure131, $renderingContext);

$output129 .= '
										';
return $output129;
};
$viewHelper132 = $self->getViewHelper('$viewHelper132', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper132->setArguments($arguments122);
$viewHelper132->setRenderingContext($renderingContext);
$viewHelper132->setRenderChildrenClosure($renderChildrenClosure128);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper

$output121 .= $viewHelper132->initializeArgumentsAndRender();

$output121 .= '
									</span>
								';
return $output121;
};

$output111 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments119, $renderChildrenClosure120, $renderingContext);

$output111 .= '
							';
return $output111;
};
$arguments109['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output133 = '';

$output133 .= '
									<span class="btn btn-default disabled" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments134 = array();
$arguments134['key'] = 'extensionList.updateDisabled';
$arguments134['id'] = NULL;
$arguments134['default'] = NULL;
$arguments134['htmlEscape'] = NULL;
$arguments134['arguments'] = NULL;
$arguments134['extensionName'] = NULL;
$renderChildrenClosure135 = function() {return NULL;};

$output133 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments134, $renderChildrenClosure135, $renderingContext);

$output133 .= '">
										';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$arguments136 = array();
$arguments136['identifier'] = 'actions-system-extension-update';
$arguments136['size'] = 'small';
$arguments136['overlay'] = NULL;
$arguments136['state'] = 'default';
$renderChildrenClosure137 = function() {return NULL;};

$output133 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments136, $renderChildrenClosure137, $renderingContext);

$output133 .= '
									</span>
								';
return $output133;
};
$arguments109['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output138 = '';

$output138 .= '
									<span class="btn btn-default">
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments139 = array();
$arguments139['action'] = 'updateCommentForUpdatableVersions';
// Rendering Array
$array140 = array();
$array140['data-action'] = 'update-extension';
$arguments139['additionalAttributes'] = $array140;
$arguments139['format'] = 'json';
$arguments139['controller'] = 'Download';
// Rendering Array
$array141 = array();
$array141['extension'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'key', $renderingContext);
$array141['integerVersionStart'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'terObject.integerVersion', $renderingContext);
$array141['integerVersionStop'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'updateToVersion.integerVersion', $renderingContext);
$arguments139['arguments'] = $array141;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments142 = array();
$arguments142['key'] = 'extensionList.updateToVersion';
// Rendering Array
$array143 = array();
$array143['0'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'updateToVersion.version', $renderingContext);
$arguments142['arguments'] = $array143;
$arguments142['id'] = NULL;
$arguments142['default'] = NULL;
$arguments142['htmlEscape'] = NULL;
$arguments142['extensionName'] = NULL;
$renderChildrenClosure144 = function() {return NULL;};
$arguments139['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments142, $renderChildrenClosure144, $renderingContext);
$arguments139['data'] = NULL;
$arguments139['extensionName'] = NULL;
$arguments139['pluginName'] = NULL;
$arguments139['pageUid'] = NULL;
$arguments139['pageType'] = 0;
$arguments139['noCache'] = false;
$arguments139['noCacheHash'] = false;
$arguments139['section'] = '';
$arguments139['linkAccessRestrictedPages'] = false;
$arguments139['additionalParams'] = array (
);
$arguments139['absolute'] = false;
$arguments139['addQueryString'] = false;
$arguments139['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments139['addQueryStringMethod'] = NULL;
$arguments139['class'] = NULL;
$arguments139['dir'] = NULL;
$arguments139['id'] = NULL;
$arguments139['lang'] = NULL;
$arguments139['style'] = NULL;
$arguments139['accesskey'] = NULL;
$arguments139['tabindex'] = NULL;
$arguments139['onclick'] = NULL;
$arguments139['name'] = NULL;
$arguments139['rel'] = NULL;
$arguments139['rev'] = NULL;
$arguments139['target'] = NULL;
$renderChildrenClosure145 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output146 = '';

$output146 .= '
											';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$arguments147 = array();
$arguments147['identifier'] = 'actions-system-extension-update';
$arguments147['size'] = 'small';
$arguments147['overlay'] = NULL;
$arguments147['state'] = 'default';
$renderChildrenClosure148 = function() {return NULL;};

$output146 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments147, $renderChildrenClosure148, $renderingContext);

$output146 .= '
										';
return $output146;
};
$viewHelper149 = $self->getViewHelper('$viewHelper149', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper149->setArguments($arguments139);
$viewHelper149->setRenderingContext($renderingContext);
$viewHelper149->setRenderChildrenClosure($renderChildrenClosure145);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper

$output138 .= $viewHelper149->initializeArgumentsAndRender();

$output138 .= '
									</span>
								';
return $output138;
};

$output108 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments109, $renderChildrenClosure110, $renderingContext);

$output108 .= '
						</div>
					';
return $output108;
};

$output42 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments106, $renderChildrenClosure107, $renderingContext);

$output42 .= '
				</td>
				<td>
					';
// Rendering ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\ToggleExtensionInstallationStateViewHelper
$arguments150 = array();
$arguments150['extension'] = $currentVariableContainer->getOrNull('extension');
$arguments150['additionalAttributes'] = NULL;
$arguments150['data'] = NULL;
$arguments150['class'] = NULL;
$arguments150['dir'] = NULL;
$arguments150['id'] = NULL;
$arguments150['lang'] = NULL;
$arguments150['style'] = NULL;
$arguments150['title'] = NULL;
$arguments150['accesskey'] = NULL;
$arguments150['tabindex'] = NULL;
$arguments150['onclick'] = NULL;
$arguments150['name'] = NULL;
$arguments150['rel'] = NULL;
$arguments150['rev'] = NULL;
$arguments150['target'] = NULL;
$renderChildrenClosure151 = function() {return NULL;};
$viewHelper152 = $self->getViewHelper('$viewHelper152', $renderingContext, 'TYPO3\CMS\Extensionmanager\ViewHelpers\ToggleExtensionInstallationStateViewHelper');
$viewHelper152->setArguments($arguments150);
$viewHelper152->setRenderingContext($renderingContext);
$viewHelper152->setRenderChildrenClosure($renderChildrenClosure151);
// End of ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\ToggleExtensionInstallationStateViewHelper

$output42 .= $viewHelper152->initializeArgumentsAndRender();

$output42 .= '
				</td>
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments153 = array();
// Rendering Boolean node
$arguments153['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'description', $renderingContext));
$arguments153['then'] = NULL;
$arguments153['else'] = NULL;
$renderChildrenClosure154 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output155 = '';

$output155 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments156 = array();
$renderChildrenClosure157 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output158 = '';

$output158 .= '
						<td title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments159 = array();
$arguments159['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'description', $renderingContext);
$arguments159['keepQuotes'] = false;
$arguments159['encoding'] = NULL;
$arguments159['doubleEncode'] = true;
$renderChildrenClosure160 = function() {return NULL;};
$value161 = ($arguments159['value'] !== NULL ? $arguments159['value'] : $renderChildrenClosure160());

$output158 .= (!is_string($value161) ? $value161 : htmlspecialchars($value161, ($arguments159['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments159['encoding'] !== NULL ? $arguments159['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments159['doubleEncode']));

$output158 .= '">
					';
return $output158;
};

$output155 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments156, $renderChildrenClosure157, $renderingContext);

$output155 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments162 = array();
$renderChildrenClosure163 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
						<td>
					';
};

$output155 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments162, $renderChildrenClosure163, $renderingContext);

$output155 .= '
				';
return $output155;
};
$arguments153['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output164 = '';

$output164 .= '
						<td title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments165 = array();
$arguments165['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'description', $renderingContext);
$arguments165['keepQuotes'] = false;
$arguments165['encoding'] = NULL;
$arguments165['doubleEncode'] = true;
$renderChildrenClosure166 = function() {return NULL;};
$value167 = ($arguments165['value'] !== NULL ? $arguments165['value'] : $renderChildrenClosure166());

$output164 .= (!is_string($value167) ? $value167 : htmlspecialchars($value167, ($arguments165['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments165['encoding'] !== NULL ? $arguments165['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments165['doubleEncode']));

$output164 .= '">
					';
return $output164;
};
$arguments153['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
						<td>
					';
};

$output42 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments153, $renderChildrenClosure154, $renderingContext);

$output42 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments168 = array();
// Rendering Boolean node
$arguments168['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'ext_icon', $renderingContext));
$arguments168['then'] = NULL;
$arguments168['else'] = NULL;
$renderChildrenClosure169 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output170 = '';

$output170 .= '
						<img class="ext-icon" src="../';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments171 = array();
$arguments171['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'siteRelPath', $renderingContext);
$arguments171['keepQuotes'] = false;
$arguments171['encoding'] = NULL;
$arguments171['doubleEncode'] = true;
$renderChildrenClosure172 = function() {return NULL;};
$value173 = ($arguments171['value'] !== NULL ? $arguments171['value'] : $renderChildrenClosure172());

$output170 .= (!is_string($value173) ? $value173 : htmlspecialchars($value173, ($arguments171['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments171['encoding'] !== NULL ? $arguments171['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments171['doubleEncode']));
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments174 = array();
$arguments174['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'ext_icon', $renderingContext);
$arguments174['keepQuotes'] = false;
$arguments174['encoding'] = NULL;
$arguments174['doubleEncode'] = true;
$renderChildrenClosure175 = function() {return NULL;};
$value176 = ($arguments174['value'] !== NULL ? $arguments174['value'] : $renderChildrenClosure175());

$output170 .= (!is_string($value176) ? $value176 : htmlspecialchars($value176, ($arguments174['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments174['encoding'] !== NULL ? $arguments174['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments174['doubleEncode']));

$output170 .= '" alt="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments177 = array();
$arguments177['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'title', $renderingContext);
$arguments177['keepQuotes'] = false;
$arguments177['encoding'] = NULL;
$arguments177['doubleEncode'] = true;
$renderChildrenClosure178 = function() {return NULL;};
$value179 = ($arguments177['value'] !== NULL ? $arguments177['value'] : $renderChildrenClosure178());

$output170 .= (!is_string($value179) ? $value179 : htmlspecialchars($value179, ($arguments177['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments177['encoding'] !== NULL ? $arguments177['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments177['doubleEncode']));

$output170 .= '" />
					';
return $output170;
};

$output42 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments168, $renderChildrenClosure169, $renderingContext);

$output42 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\ConfigureExtensionViewHelper
$arguments180 = array();
$arguments180['extension'] = $currentVariableContainer->getOrNull('extension');
// Rendering Boolean node
$arguments180['forceConfiguration'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('0');
// Rendering Boolean node
$arguments180['showDescription'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('1');
$arguments180['additionalAttributes'] = NULL;
$arguments180['data'] = NULL;
$arguments180['class'] = NULL;
$arguments180['dir'] = NULL;
$arguments180['id'] = NULL;
$arguments180['lang'] = NULL;
$arguments180['style'] = NULL;
$arguments180['title'] = NULL;
$arguments180['accesskey'] = NULL;
$arguments180['tabindex'] = NULL;
$arguments180['onclick'] = NULL;
$arguments180['name'] = NULL;
$arguments180['rel'] = NULL;
$arguments180['rev'] = NULL;
$arguments180['target'] = NULL;
$renderChildrenClosure181 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments182 = array();
$arguments182['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'title', $renderingContext);
$arguments182['keepQuotes'] = false;
$arguments182['encoding'] = NULL;
$arguments182['doubleEncode'] = true;
$renderChildrenClosure183 = function() {return NULL;};
$value184 = ($arguments182['value'] !== NULL ? $arguments182['value'] : $renderChildrenClosure183());
return (!is_string($value184) ? $value184 : htmlspecialchars($value184, ($arguments182['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments182['encoding'] !== NULL ? $arguments182['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments182['doubleEncode']));
};
$viewHelper185 = $self->getViewHelper('$viewHelper185', $renderingContext, 'TYPO3\CMS\Extensionmanager\ViewHelpers\ConfigureExtensionViewHelper');
$viewHelper185->setArguments($arguments180);
$viewHelper185->setRenderingContext($renderingContext);
$viewHelper185->setRenderChildrenClosure($renderChildrenClosure181);
// End of ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\ConfigureExtensionViewHelper

$output42 .= $viewHelper185->initializeArgumentsAndRender();

$output42 .= '
				</td>
				<td>
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments186 = array();
$arguments186['value'] = $currentVariableContainer->getOrNull('extensionKey');
$arguments186['keepQuotes'] = false;
$arguments186['encoding'] = NULL;
$arguments186['doubleEncode'] = true;
$renderChildrenClosure187 = function() {return NULL;};
$value188 = ($arguments186['value'] !== NULL ? $arguments186['value'] : $renderChildrenClosure187());

$output42 .= (!is_string($value188) ? $value188 : htmlspecialchars($value188, ($arguments186['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments186['encoding'] !== NULL ? $arguments186['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments186['doubleEncode']));

$output42 .= '
				</td>
				<td>
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments189 = array();
$arguments189['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'version', $renderingContext);
$arguments189['keepQuotes'] = false;
$arguments189['encoding'] = NULL;
$arguments189['doubleEncode'] = true;
$renderChildrenClosure190 = function() {return NULL;};
$value191 = ($arguments189['value'] !== NULL ? $arguments189['value'] : $renderChildrenClosure190());

$output42 .= (!is_string($value191) ? $value191 : htmlspecialchars($value191, ($arguments189['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments189['encoding'] !== NULL ? $arguments189['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments189['doubleEncode']));

$output42 .= '
				</td>
				<td>
					<span class="label label-';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments192 = array();
$arguments192['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'state', $renderingContext);
$arguments192['keepQuotes'] = false;
$arguments192['encoding'] = NULL;
$arguments192['doubleEncode'] = true;
$renderChildrenClosure193 = function() {return NULL;};
$value194 = ($arguments192['value'] !== NULL ? $arguments192['value'] : $renderChildrenClosure193());

$output42 .= (!is_string($value194) ? $value194 : htmlspecialchars($value194, ($arguments192['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments192['encoding'] !== NULL ? $arguments192['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments192['doubleEncode']));

$output42 .= '">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments195 = array();
$arguments195['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'state', $renderingContext);
$arguments195['keepQuotes'] = false;
$arguments195['encoding'] = NULL;
$arguments195['doubleEncode'] = true;
$renderChildrenClosure196 = function() {return NULL;};
$value197 = ($arguments195['value'] !== NULL ? $arguments195['value'] : $renderChildrenClosure196());

$output42 .= (!is_string($value197) ? $value197 : htmlspecialchars($value197, ($arguments195['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments195['encoding'] !== NULL ? $arguments195['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments195['doubleEncode']));

$output42 .= '</span>
				</td>
				<td>
					<div class="btn-group">
						';
// Rendering ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\ProcessAvailableActionsViewHelper
$arguments198 = array();
$arguments198['extension'] = $currentVariableContainer->getOrNull('extension');
$arguments198['additionalAttributes'] = NULL;
$arguments198['data'] = NULL;
$arguments198['class'] = NULL;
$arguments198['dir'] = NULL;
$arguments198['id'] = NULL;
$arguments198['lang'] = NULL;
$arguments198['style'] = NULL;
$arguments198['title'] = NULL;
$arguments198['accesskey'] = NULL;
$arguments198['tabindex'] = NULL;
$arguments198['onclick'] = NULL;
$arguments198['name'] = NULL;
$arguments198['rel'] = NULL;
$arguments198['rev'] = NULL;
$arguments198['target'] = NULL;
$renderChildrenClosure199 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output200 = '';

$output200 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\ConfigureExtensionViewHelper
$arguments201 = array();
$arguments201['class'] = 'btn btn-default';
$arguments201['extension'] = $currentVariableContainer->getOrNull('extension');
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments202 = array();
$arguments202['key'] = 'extensionList.configure';
$arguments202['id'] = NULL;
$arguments202['default'] = NULL;
$arguments202['htmlEscape'] = NULL;
$arguments202['arguments'] = NULL;
$arguments202['extensionName'] = NULL;
$renderChildrenClosure203 = function() {return NULL;};
$arguments201['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments202, $renderChildrenClosure203, $renderingContext);
$arguments201['additionalAttributes'] = NULL;
$arguments201['data'] = NULL;
$arguments201['forceConfiguration'] = true;
$arguments201['showDescription'] = false;
$arguments201['dir'] = NULL;
$arguments201['id'] = NULL;
$arguments201['lang'] = NULL;
$arguments201['style'] = NULL;
$arguments201['accesskey'] = NULL;
$arguments201['tabindex'] = NULL;
$arguments201['onclick'] = NULL;
$arguments201['name'] = NULL;
$arguments201['rel'] = NULL;
$arguments201['rev'] = NULL;
$arguments201['target'] = NULL;
$renderChildrenClosure204 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output205 = '';

$output205 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$arguments206 = array();
$arguments206['identifier'] = 'actions-system-extension-configure';
$arguments206['size'] = 'small';
$arguments206['overlay'] = NULL;
$arguments206['state'] = 'default';
$renderChildrenClosure207 = function() {return NULL;};

$output205 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments206, $renderChildrenClosure207, $renderingContext);

$output205 .= '
							';
return $output205;
};
$viewHelper208 = $self->getViewHelper('$viewHelper208', $renderingContext, 'TYPO3\CMS\Extensionmanager\ViewHelpers\ConfigureExtensionViewHelper');
$viewHelper208->setArguments($arguments201);
$viewHelper208->setRenderingContext($renderingContext);
$viewHelper208->setRenderChildrenClosure($renderChildrenClosure204);
// End of ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\ConfigureExtensionViewHelper

$output200 .= $viewHelper208->initializeArgumentsAndRender();

$output200 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\UpdateScriptViewHelper
$arguments209 = array();
$arguments209['class'] = 'btn btn-default';
$arguments209['extensionKey'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'key', $renderingContext);
$arguments209['additionalAttributes'] = NULL;
$arguments209['data'] = NULL;
$arguments209['dir'] = NULL;
$arguments209['id'] = NULL;
$arguments209['lang'] = NULL;
$arguments209['style'] = NULL;
$arguments209['title'] = NULL;
$arguments209['accesskey'] = NULL;
$arguments209['tabindex'] = NULL;
$arguments209['onclick'] = NULL;
$arguments209['name'] = NULL;
$arguments209['rel'] = NULL;
$arguments209['rev'] = NULL;
$arguments209['target'] = NULL;
$renderChildrenClosure210 = function() {return NULL;};
$viewHelper211 = $self->getViewHelper('$viewHelper211', $renderingContext, 'TYPO3\CMS\Extensionmanager\ViewHelpers\UpdateScriptViewHelper');
$viewHelper211->setArguments($arguments209);
$viewHelper211->setRenderingContext($renderingContext);
$viewHelper211->setRenderChildrenClosure($renderChildrenClosure210);
// End of ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\UpdateScriptViewHelper

$output200 .= $viewHelper211->initializeArgumentsAndRender();

$output200 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\RemoveExtensionViewHelper
$arguments212 = array();
$arguments212['class'] = 'btn btn-default';
$arguments212['extension'] = $currentVariableContainer->getOrNull('extension');
$arguments212['additionalAttributes'] = NULL;
$arguments212['data'] = NULL;
$arguments212['dir'] = NULL;
$arguments212['id'] = NULL;
$arguments212['lang'] = NULL;
$arguments212['style'] = NULL;
$arguments212['title'] = NULL;
$arguments212['accesskey'] = NULL;
$arguments212['tabindex'] = NULL;
$arguments212['onclick'] = NULL;
$arguments212['name'] = NULL;
$arguments212['rel'] = NULL;
$arguments212['rev'] = NULL;
$arguments212['target'] = NULL;
$renderChildrenClosure213 = function() {return NULL;};
$viewHelper214 = $self->getViewHelper('$viewHelper214', $renderingContext, 'TYPO3\CMS\Extensionmanager\ViewHelpers\RemoveExtensionViewHelper');
$viewHelper214->setArguments($arguments212);
$viewHelper214->setRenderingContext($renderingContext);
$viewHelper214->setRenderChildrenClosure($renderChildrenClosure213);
// End of ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\RemoveExtensionViewHelper

$output200 .= $viewHelper214->initializeArgumentsAndRender();

$output200 .= '
							<span class="btn btn-default">
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments215 = array();
$arguments215['action'] = 'downloadExtensionZip';
$arguments215['controller'] = 'Action';
// Rendering Array
$array216 = array();
$array216['extension'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'key', $renderingContext);
$arguments215['arguments'] = $array216;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments217 = array();
$arguments217['key'] = 'extensionList.downloadzip';
$arguments217['id'] = NULL;
$arguments217['default'] = NULL;
$arguments217['htmlEscape'] = NULL;
$arguments217['arguments'] = NULL;
$arguments217['extensionName'] = NULL;
$renderChildrenClosure218 = function() {return NULL;};
$arguments215['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments217, $renderChildrenClosure218, $renderingContext);
$arguments215['additionalAttributes'] = NULL;
$arguments215['data'] = NULL;
$arguments215['extensionName'] = NULL;
$arguments215['pluginName'] = NULL;
$arguments215['pageUid'] = NULL;
$arguments215['pageType'] = 0;
$arguments215['noCache'] = false;
$arguments215['noCacheHash'] = false;
$arguments215['section'] = '';
$arguments215['format'] = '';
$arguments215['linkAccessRestrictedPages'] = false;
$arguments215['additionalParams'] = array (
);
$arguments215['absolute'] = false;
$arguments215['addQueryString'] = false;
$arguments215['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments215['addQueryStringMethod'] = NULL;
$arguments215['class'] = NULL;
$arguments215['dir'] = NULL;
$arguments215['id'] = NULL;
$arguments215['lang'] = NULL;
$arguments215['style'] = NULL;
$arguments215['accesskey'] = NULL;
$arguments215['tabindex'] = NULL;
$arguments215['onclick'] = NULL;
$arguments215['name'] = NULL;
$arguments215['rel'] = NULL;
$arguments215['rev'] = NULL;
$arguments215['target'] = NULL;
$renderChildrenClosure219 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output220 = '';

$output220 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$arguments221 = array();
$arguments221['identifier'] = 'actions-system-extension-download';
$arguments221['size'] = 'small';
$arguments221['overlay'] = NULL;
$arguments221['state'] = 'default';
$renderChildrenClosure222 = function() {return NULL;};

$output220 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments221, $renderChildrenClosure222, $renderingContext);

$output220 .= '
								';
return $output220;
};
$viewHelper223 = $self->getViewHelper('$viewHelper223', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper223->setArguments($arguments215);
$viewHelper223->setRenderingContext($renderingContext);
$viewHelper223->setRenderChildrenClosure($renderChildrenClosure219);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper

$output200 .= $viewHelper223->initializeArgumentsAndRender();

$output200 .= '
							</span>
							';
// Rendering ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\DownloadExtensionDataViewHelper
$arguments224 = array();
$arguments224['class'] = 'btn btn-default';
$arguments224['extension'] = $currentVariableContainer->getOrNull('extension');
$arguments224['additionalAttributes'] = NULL;
$arguments224['data'] = NULL;
$arguments224['dir'] = NULL;
$arguments224['id'] = NULL;
$arguments224['lang'] = NULL;
$arguments224['style'] = NULL;
$arguments224['title'] = NULL;
$arguments224['accesskey'] = NULL;
$arguments224['tabindex'] = NULL;
$arguments224['onclick'] = NULL;
$arguments224['name'] = NULL;
$arguments224['rel'] = NULL;
$arguments224['rev'] = NULL;
$arguments224['target'] = NULL;
$renderChildrenClosure225 = function() {return NULL;};
$viewHelper226 = $self->getViewHelper('$viewHelper226', $renderingContext, 'TYPO3\CMS\Extensionmanager\ViewHelpers\DownloadExtensionDataViewHelper');
$viewHelper226->setArguments($arguments224);
$viewHelper226->setRenderingContext($renderingContext);
$viewHelper226->setRenderChildrenClosure($renderChildrenClosure225);
// End of ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\DownloadExtensionDataViewHelper

$output200 .= $viewHelper226->initializeArgumentsAndRender();

$output200 .= '
						';
return $output200;
};
$viewHelper227 = $self->getViewHelper('$viewHelper227', $renderingContext, 'TYPO3\CMS\Extensionmanager\ViewHelpers\ProcessAvailableActionsViewHelper');
$viewHelper227->setArguments($arguments198);
$viewHelper227->setRenderingContext($renderingContext);
$viewHelper227->setRenderChildrenClosure($renderChildrenClosure199);
// End of ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\ProcessAvailableActionsViewHelper

$output42 .= $viewHelper227->initializeArgumentsAndRender();

$output42 .= '
					</div>
				</td>
				</tr>
			';
return $output42;
};

$output11 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments40, $renderChildrenClosure41, $renderingContext);

$output11 .= '
		</tbody>
	</table>
	</div>
';


return $output11;
}
/**
 * Main Render function
 */
public function render(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();

$output228 = '';

$output228 .= '


';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper
$arguments229 = array();
$arguments229['name'] = 'main';
$renderChildrenClosure230 = function() {return NULL;};
$viewHelper231 = $self->getViewHelper('$viewHelper231', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper');
$viewHelper231->setArguments($arguments229);
$viewHelper231->setRenderingContext($renderingContext);
$viewHelper231->setRenderChildrenClosure($renderChildrenClosure230);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper

$output228 .= $viewHelper231->initializeArgumentsAndRender();

$output228 .= '

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments232 = array();
$arguments232['name'] = 'docheader-buttons';
$renderChildrenClosure233 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output234 = '';

$output234 .= '
	<div id="upload-button-wrap">
		<a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$arguments235 = array();
$arguments235['action'] = 'form';
$arguments235['controller'] = 'UploadExtensionFile';
$arguments235['arguments'] = array (
);
$arguments235['extensionName'] = NULL;
$arguments235['pluginName'] = NULL;
$arguments235['pageUid'] = NULL;
$arguments235['pageType'] = 0;
$arguments235['noCache'] = false;
$arguments235['noCacheHash'] = false;
$arguments235['section'] = '';
$arguments235['format'] = '';
$arguments235['linkAccessRestrictedPages'] = false;
$arguments235['additionalParams'] = array (
);
$arguments235['absolute'] = false;
$arguments235['addQueryString'] = false;
$arguments235['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments235['addQueryStringMethod'] = NULL;
$renderChildrenClosure236 = function() {return NULL;};
$viewHelper237 = $self->getViewHelper('$viewHelper237', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper');
$viewHelper237->setArguments($arguments235);
$viewHelper237->setRenderingContext($renderingContext);
$viewHelper237->setRenderChildrenClosure($renderChildrenClosure236);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper

$output234 .= $viewHelper237->initializeArgumentsAndRender();

$output234 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments238 = array();
$arguments238['key'] = 'extensionList.uploadExtension';
$arguments238['id'] = NULL;
$arguments238['default'] = NULL;
$arguments238['htmlEscape'] = NULL;
$arguments238['arguments'] = NULL;
$arguments238['extensionName'] = NULL;
$renderChildrenClosure239 = function() {return NULL;};

$output234 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments238, $renderChildrenClosure239, $renderingContext);

$output234 .= '">
			';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$arguments240 = array();
$arguments240['identifier'] = 'actions-edit-upload';
$arguments240['size'] = 'small';
$arguments240['overlay'] = NULL;
$arguments240['state'] = 'default';
$renderChildrenClosure241 = function() {return NULL;};

$output234 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments240, $renderChildrenClosure241, $renderingContext);

$output234 .= '
		</a>
	</div>
';
return $output234;
};

$output228 .= '';

$output228 .= '

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments242 = array();
$arguments242['name'] = 'module-headline';
$renderChildrenClosure243 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output244 = '';

$output244 .= '
	<h1>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments245 = array();
$arguments245['key'] = 'installedExtensions';
$arguments245['id'] = NULL;
$arguments245['default'] = NULL;
$arguments245['htmlEscape'] = NULL;
$arguments245['arguments'] = NULL;
$arguments245['extensionName'] = NULL;
$renderChildrenClosure246 = function() {return NULL;};

$output244 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments245, $renderChildrenClosure246, $renderingContext);

$output244 .= '</h1>
';
return $output244;
};

$output228 .= '';

$output228 .= '

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments247 = array();
$arguments247['name'] = 'Content';
$renderChildrenClosure248 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output249 = '';

$output249 .= '
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FlashMessagesViewHelper
$arguments250 = array();
$arguments250['additionalAttributes'] = NULL;
$arguments250['data'] = NULL;
$arguments250['renderMode'] = NULL;
$arguments250['as'] = NULL;
$arguments250['class'] = NULL;
$arguments250['dir'] = NULL;
$arguments250['id'] = NULL;
$arguments250['lang'] = NULL;
$arguments250['style'] = NULL;
$arguments250['title'] = NULL;
$arguments250['accesskey'] = NULL;
$arguments250['tabindex'] = NULL;
$arguments250['onclick'] = NULL;
$arguments250['queueIdentifier'] = NULL;
$renderChildrenClosure251 = function() {return NULL;};
$viewHelper252 = $self->getViewHelper('$viewHelper252', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\FlashMessagesViewHelper');
$viewHelper252->setArguments($arguments250);
$viewHelper252->setRenderingContext($renderingContext);
$viewHelper252->setRenderChildrenClosure($renderChildrenClosure251);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FlashMessagesViewHelper

$output249 .= $viewHelper252->initializeArgumentsAndRender();

$output249 .= '

	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments253 = array();
$arguments253['partial'] = 'List/UploadForm';
$arguments253['section'] = NULL;
$arguments253['arguments'] = array (
);
$arguments253['optional'] = false;
$renderChildrenClosure254 = function() {return NULL;};

$output249 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments253, $renderChildrenClosure254, $renderingContext);

$output249 .= '

	<form class="form-inline">
		<div class="form-group">
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$arguments255 = array();
$arguments255['name'] = 'Tx_Extensionmanager_extensionkey';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments256 = array();
$arguments256['key'] = 'extensionList.search';
$arguments256['id'] = NULL;
$arguments256['default'] = NULL;
$arguments256['htmlEscape'] = NULL;
$arguments256['arguments'] = NULL;
$arguments256['extensionName'] = NULL;
$renderChildrenClosure257 = function() {return NULL;};
$arguments255['placeholder'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments256, $renderChildrenClosure257, $renderingContext);
$arguments255['id'] = 'Tx_Extensionmanager_extensionkey';
$arguments255['value'] = $currentVariableContainer->getOrNull('search');
$arguments255['class'] = 'form-control';
$arguments255['additionalAttributes'] = NULL;
$arguments255['data'] = NULL;
$arguments255['required'] = false;
$arguments255['type'] = 'text';
$arguments255['property'] = NULL;
$arguments255['autofocus'] = NULL;
$arguments255['disabled'] = NULL;
$arguments255['maxlength'] = NULL;
$arguments255['readonly'] = NULL;
$arguments255['size'] = NULL;
$arguments255['pattern'] = NULL;
$arguments255['errorClass'] = 'f3-form-error';
$arguments255['dir'] = NULL;
$arguments255['lang'] = NULL;
$arguments255['style'] = NULL;
$arguments255['title'] = NULL;
$arguments255['accesskey'] = NULL;
$arguments255['tabindex'] = NULL;
$arguments255['onclick'] = NULL;
$renderChildrenClosure258 = function() {return NULL;};
$viewHelper259 = $self->getViewHelper('$viewHelper259', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper');
$viewHelper259->setArguments($arguments255);
$viewHelper259->setRenderingContext($renderingContext);
$viewHelper259->setRenderChildrenClosure($renderChildrenClosure258);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper

$output249 .= $viewHelper259->initializeArgumentsAndRender();

$output249 .= '
		</div>
	</form>
	<div class="table-fit">
		<table id="typo3-extension-list" class="table table-striped table-hover typo3-extension-list">
		<thead>
			<tr>
				<th title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments260 = array();
$arguments260['key'] = 'extensionList.header.title.update';
$arguments260['id'] = NULL;
$arguments260['default'] = NULL;
$arguments260['htmlEscape'] = NULL;
$arguments260['arguments'] = NULL;
$arguments260['extensionName'] = NULL;
$renderChildrenClosure261 = function() {return NULL;};

$output249 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments260, $renderChildrenClosure261, $renderingContext);

$output249 .= '">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments262 = array();
$arguments262['key'] = 'extensionList.header.update';
$arguments262['id'] = NULL;
$arguments262['default'] = NULL;
$arguments262['htmlEscape'] = NULL;
$arguments262['arguments'] = NULL;
$arguments262['extensionName'] = NULL;
$renderChildrenClosure263 = function() {return NULL;};

$output249 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments262, $renderChildrenClosure263, $renderingContext);

$output249 .= '</th>
				<th title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments264 = array();
$arguments264['key'] = 'extensionList.header.title.activate';
$arguments264['id'] = NULL;
$arguments264['default'] = NULL;
$arguments264['htmlEscape'] = NULL;
$arguments264['arguments'] = NULL;
$arguments264['extensionName'] = NULL;
$renderChildrenClosure265 = function() {return NULL;};

$output249 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments264, $renderChildrenClosure265, $renderingContext);

$output249 .= '">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments266 = array();
$arguments266['key'] = 'extensionList.header.activate';
$arguments266['id'] = NULL;
$arguments266['default'] = NULL;
$arguments266['htmlEscape'] = NULL;
$arguments266['arguments'] = NULL;
$arguments266['extensionName'] = NULL;
$renderChildrenClosure267 = function() {return NULL;};

$output249 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments266, $renderChildrenClosure267, $renderingContext);

$output249 .= '</th>
				<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments268 = array();
$arguments268['key'] = 'extensionList.header.extensionName';
$arguments268['id'] = NULL;
$arguments268['default'] = NULL;
$arguments268['htmlEscape'] = NULL;
$arguments268['arguments'] = NULL;
$arguments268['extensionName'] = NULL;
$renderChildrenClosure269 = function() {return NULL;};

$output249 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments268, $renderChildrenClosure269, $renderingContext);

$output249 .= '</th>
				<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments270 = array();
$arguments270['key'] = 'extensionList.header.extensionKey';
$arguments270['id'] = NULL;
$arguments270['default'] = NULL;
$arguments270['htmlEscape'] = NULL;
$arguments270['arguments'] = NULL;
$arguments270['extensionName'] = NULL;
$renderChildrenClosure271 = function() {return NULL;};

$output249 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments270, $renderChildrenClosure271, $renderingContext);

$output249 .= '</th>
				<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments272 = array();
$arguments272['key'] = 'extensionList.header.extensionVersion';
$arguments272['id'] = NULL;
$arguments272['default'] = NULL;
$arguments272['htmlEscape'] = NULL;
$arguments272['arguments'] = NULL;
$arguments272['extensionName'] = NULL;
$renderChildrenClosure273 = function() {return NULL;};

$output249 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments272, $renderChildrenClosure273, $renderingContext);

$output249 .= '</th>
				<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments274 = array();
$arguments274['key'] = 'extensionList.header.extensionState';
$arguments274['id'] = NULL;
$arguments274['default'] = NULL;
$arguments274['htmlEscape'] = NULL;
$arguments274['arguments'] = NULL;
$arguments274['extensionName'] = NULL;
$renderChildrenClosure275 = function() {return NULL;};

$output249 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments274, $renderChildrenClosure275, $renderingContext);

$output249 .= '</th>
				<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments276 = array();
$arguments276['key'] = 'extensionList.header.extensionActions';
$arguments276['id'] = NULL;
$arguments276['default'] = NULL;
$arguments276['htmlEscape'] = NULL;
$arguments276['arguments'] = NULL;
$arguments276['extensionName'] = NULL;
$renderChildrenClosure277 = function() {return NULL;};

$output249 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments276, $renderChildrenClosure277, $renderingContext);

$output249 .= '</th>
			</tr>
		</thead>
		<tbody>
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments278 = array();
$arguments278['each'] = $currentVariableContainer->getOrNull('extensions');
$arguments278['as'] = 'extension';
$arguments278['key'] = 'extensionKey';
$arguments278['reverse'] = false;
$arguments278['iteration'] = NULL;
$renderChildrenClosure279 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output280 = '';

$output280 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments281 = array();
// Rendering Boolean node
$arguments281['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'terObject', $renderingContext));
$arguments281['then'] = NULL;
$arguments281['else'] = NULL;
$renderChildrenClosure282 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output283 = '';

$output283 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments284 = array();
$renderChildrenClosure285 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output286 = '';

$output286 .= '
						<tr id="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments287 = array();
$arguments287['value'] = $currentVariableContainer->getOrNull('extensionKey');
$arguments287['keepQuotes'] = false;
$arguments287['encoding'] = NULL;
$arguments287['doubleEncode'] = true;
$renderChildrenClosure288 = function() {return NULL;};
$value289 = ($arguments287['value'] !== NULL ? $arguments287['value'] : $renderChildrenClosure288());

$output286 .= (!is_string($value289) ? $value289 : htmlspecialchars($value289, ($arguments287['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments287['encoding'] !== NULL ? $arguments287['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments287['doubleEncode']));

$output286 .= '" class="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments290 = array();
// Rendering Boolean node
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments291 = array();
$arguments291['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'terObject.reviewState', $renderingContext);
$arguments291['keepQuotes'] = false;
$arguments291['encoding'] = NULL;
$arguments291['doubleEncode'] = true;
$renderChildrenClosure292 = function() {return NULL;};
$value293 = ($arguments291['value'] !== NULL ? $arguments291['value'] : $renderChildrenClosure292());
$arguments290['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', (!is_string($value293) ? $value293 : htmlspecialchars($value293, ($arguments291['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments291['encoding'] !== NULL ? $arguments291['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments291['doubleEncode'])), -1);
$arguments290['then'] = 'insecure';
$arguments290['else'] = NULL;
$renderChildrenClosure294 = function() {return NULL;};

$output286 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments290, $renderChildrenClosure294, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments295 = array();
// Rendering Boolean node
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments296 = array();
$arguments296['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'terObject.reviewState', $renderingContext);
$arguments296['keepQuotes'] = false;
$arguments296['encoding'] = NULL;
$arguments296['doubleEncode'] = true;
$renderChildrenClosure297 = function() {return NULL;};
$value298 = ($arguments296['value'] !== NULL ? $arguments296['value'] : $renderChildrenClosure297());
$arguments295['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', (!is_string($value298) ? $value298 : htmlspecialchars($value298, ($arguments296['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments296['encoding'] !== NULL ? $arguments296['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments296['doubleEncode'])), -2);
$arguments295['then'] = 'outdated';
$arguments295['else'] = NULL;
$renderChildrenClosure299 = function() {return NULL;};

$output286 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments295, $renderChildrenClosure299, $renderingContext);

$output286 .= ' ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments300 = array();
// Rendering Boolean node
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments301 = array();
$arguments301['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'installed', $renderingContext);
$arguments301['keepQuotes'] = false;
$arguments301['encoding'] = NULL;
$arguments301['doubleEncode'] = true;
$renderChildrenClosure302 = function() {return NULL;};
$value303 = ($arguments301['value'] !== NULL ? $arguments301['value'] : $renderChildrenClosure302());
$arguments300['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean((!is_string($value303) ? $value303 : htmlspecialchars($value303, ($arguments301['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments301['encoding'] !== NULL ? $arguments301['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments301['doubleEncode'])));
$arguments300['then'] = '';
$arguments300['else'] = 'inactive';
$renderChildrenClosure304 = function() {return NULL;};

$output286 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments300, $renderChildrenClosure304, $renderingContext);

$output286 .= '">
					';
return $output286;
};

$output283 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments284, $renderChildrenClosure285, $renderingContext);

$output283 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments305 = array();
$renderChildrenClosure306 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output307 = '';

$output307 .= '
						<tr id="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments308 = array();
$arguments308['value'] = $currentVariableContainer->getOrNull('extensionKey');
$arguments308['keepQuotes'] = false;
$arguments308['encoding'] = NULL;
$arguments308['doubleEncode'] = true;
$renderChildrenClosure309 = function() {return NULL;};
$value310 = ($arguments308['value'] !== NULL ? $arguments308['value'] : $renderChildrenClosure309());

$output307 .= (!is_string($value310) ? $value310 : htmlspecialchars($value310, ($arguments308['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments308['encoding'] !== NULL ? $arguments308['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments308['doubleEncode']));

$output307 .= '" class="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments311 = array();
// Rendering Boolean node
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments312 = array();
$arguments312['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'installed', $renderingContext);
$arguments312['keepQuotes'] = false;
$arguments312['encoding'] = NULL;
$arguments312['doubleEncode'] = true;
$renderChildrenClosure313 = function() {return NULL;};
$value314 = ($arguments312['value'] !== NULL ? $arguments312['value'] : $renderChildrenClosure313());
$arguments311['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean((!is_string($value314) ? $value314 : htmlspecialchars($value314, ($arguments312['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments312['encoding'] !== NULL ? $arguments312['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments312['doubleEncode'])));
$arguments311['then'] = '';
$arguments311['else'] = 'inactive';
$renderChildrenClosure315 = function() {return NULL;};

$output307 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments311, $renderChildrenClosure315, $renderingContext);

$output307 .= '">
					';
return $output307;
};

$output283 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments305, $renderChildrenClosure306, $renderingContext);

$output283 .= '
				';
return $output283;
};
$arguments281['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output316 = '';

$output316 .= '
						<tr id="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments317 = array();
$arguments317['value'] = $currentVariableContainer->getOrNull('extensionKey');
$arguments317['keepQuotes'] = false;
$arguments317['encoding'] = NULL;
$arguments317['doubleEncode'] = true;
$renderChildrenClosure318 = function() {return NULL;};
$value319 = ($arguments317['value'] !== NULL ? $arguments317['value'] : $renderChildrenClosure318());

$output316 .= (!is_string($value319) ? $value319 : htmlspecialchars($value319, ($arguments317['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments317['encoding'] !== NULL ? $arguments317['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments317['doubleEncode']));

$output316 .= '" class="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments320 = array();
// Rendering Boolean node
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments321 = array();
$arguments321['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'terObject.reviewState', $renderingContext);
$arguments321['keepQuotes'] = false;
$arguments321['encoding'] = NULL;
$arguments321['doubleEncode'] = true;
$renderChildrenClosure322 = function() {return NULL;};
$value323 = ($arguments321['value'] !== NULL ? $arguments321['value'] : $renderChildrenClosure322());
$arguments320['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', (!is_string($value323) ? $value323 : htmlspecialchars($value323, ($arguments321['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments321['encoding'] !== NULL ? $arguments321['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments321['doubleEncode'])), -1);
$arguments320['then'] = 'insecure';
$arguments320['else'] = NULL;
$renderChildrenClosure324 = function() {return NULL;};

$output316 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments320, $renderChildrenClosure324, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments325 = array();
// Rendering Boolean node
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments326 = array();
$arguments326['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'terObject.reviewState', $renderingContext);
$arguments326['keepQuotes'] = false;
$arguments326['encoding'] = NULL;
$arguments326['doubleEncode'] = true;
$renderChildrenClosure327 = function() {return NULL;};
$value328 = ($arguments326['value'] !== NULL ? $arguments326['value'] : $renderChildrenClosure327());
$arguments325['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', (!is_string($value328) ? $value328 : htmlspecialchars($value328, ($arguments326['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments326['encoding'] !== NULL ? $arguments326['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments326['doubleEncode'])), -2);
$arguments325['then'] = 'outdated';
$arguments325['else'] = NULL;
$renderChildrenClosure329 = function() {return NULL;};

$output316 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments325, $renderChildrenClosure329, $renderingContext);

$output316 .= ' ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments330 = array();
// Rendering Boolean node
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments331 = array();
$arguments331['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'installed', $renderingContext);
$arguments331['keepQuotes'] = false;
$arguments331['encoding'] = NULL;
$arguments331['doubleEncode'] = true;
$renderChildrenClosure332 = function() {return NULL;};
$value333 = ($arguments331['value'] !== NULL ? $arguments331['value'] : $renderChildrenClosure332());
$arguments330['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean((!is_string($value333) ? $value333 : htmlspecialchars($value333, ($arguments331['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments331['encoding'] !== NULL ? $arguments331['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments331['doubleEncode'])));
$arguments330['then'] = '';
$arguments330['else'] = 'inactive';
$renderChildrenClosure334 = function() {return NULL;};

$output316 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments330, $renderChildrenClosure334, $renderingContext);

$output316 .= '">
					';
return $output316;
};
$arguments281['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output335 = '';

$output335 .= '
						<tr id="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments336 = array();
$arguments336['value'] = $currentVariableContainer->getOrNull('extensionKey');
$arguments336['keepQuotes'] = false;
$arguments336['encoding'] = NULL;
$arguments336['doubleEncode'] = true;
$renderChildrenClosure337 = function() {return NULL;};
$value338 = ($arguments336['value'] !== NULL ? $arguments336['value'] : $renderChildrenClosure337());

$output335 .= (!is_string($value338) ? $value338 : htmlspecialchars($value338, ($arguments336['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments336['encoding'] !== NULL ? $arguments336['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments336['doubleEncode']));

$output335 .= '" class="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments339 = array();
// Rendering Boolean node
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments340 = array();
$arguments340['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'installed', $renderingContext);
$arguments340['keepQuotes'] = false;
$arguments340['encoding'] = NULL;
$arguments340['doubleEncode'] = true;
$renderChildrenClosure341 = function() {return NULL;};
$value342 = ($arguments340['value'] !== NULL ? $arguments340['value'] : $renderChildrenClosure341());
$arguments339['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean((!is_string($value342) ? $value342 : htmlspecialchars($value342, ($arguments340['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments340['encoding'] !== NULL ? $arguments340['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments340['doubleEncode'])));
$arguments339['then'] = '';
$arguments339['else'] = 'inactive';
$renderChildrenClosure343 = function() {return NULL;};

$output335 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments339, $renderChildrenClosure343, $renderingContext);

$output335 .= '">
					';
return $output335;
};

$output280 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments281, $renderChildrenClosure282, $renderingContext);

$output280 .= '
				<td>
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments344 = array();
// Rendering Boolean node
$arguments344['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'updateAvailable', $renderingContext));
$arguments344['then'] = NULL;
$arguments344['else'] = NULL;
$renderChildrenClosure345 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output346 = '';

$output346 .= '
						<div class="btn-group">
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments347 = array();
// Rendering Boolean node
$arguments347['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'state', $renderingContext), 'excludeFromUpdates');
$arguments347['then'] = NULL;
$arguments347['else'] = NULL;
$renderChildrenClosure348 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output349 = '';

$output349 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments350 = array();
$renderChildrenClosure351 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output352 = '';

$output352 .= '
									<span class="btn btn-default disabled" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments353 = array();
$arguments353['key'] = 'extensionList.updateDisabled';
$arguments353['id'] = NULL;
$arguments353['default'] = NULL;
$arguments353['htmlEscape'] = NULL;
$arguments353['arguments'] = NULL;
$arguments353['extensionName'] = NULL;
$renderChildrenClosure354 = function() {return NULL;};

$output352 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments353, $renderChildrenClosure354, $renderingContext);

$output352 .= '">
										';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$arguments355 = array();
$arguments355['identifier'] = 'actions-system-extension-update';
$arguments355['size'] = 'small';
$arguments355['overlay'] = NULL;
$arguments355['state'] = 'default';
$renderChildrenClosure356 = function() {return NULL;};

$output352 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments355, $renderChildrenClosure356, $renderingContext);

$output352 .= '
									</span>
								';
return $output352;
};

$output349 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments350, $renderChildrenClosure351, $renderingContext);

$output349 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments357 = array();
$renderChildrenClosure358 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output359 = '';

$output359 .= '
									<span class="btn btn-default">
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments360 = array();
$arguments360['action'] = 'updateCommentForUpdatableVersions';
// Rendering Array
$array361 = array();
$array361['data-action'] = 'update-extension';
$arguments360['additionalAttributes'] = $array361;
$arguments360['format'] = 'json';
$arguments360['controller'] = 'Download';
// Rendering Array
$array362 = array();
$array362['extension'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'key', $renderingContext);
$array362['integerVersionStart'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'terObject.integerVersion', $renderingContext);
$array362['integerVersionStop'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'updateToVersion.integerVersion', $renderingContext);
$arguments360['arguments'] = $array362;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments363 = array();
$arguments363['key'] = 'extensionList.updateToVersion';
// Rendering Array
$array364 = array();
$array364['0'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'updateToVersion.version', $renderingContext);
$arguments363['arguments'] = $array364;
$arguments363['id'] = NULL;
$arguments363['default'] = NULL;
$arguments363['htmlEscape'] = NULL;
$arguments363['extensionName'] = NULL;
$renderChildrenClosure365 = function() {return NULL;};
$arguments360['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments363, $renderChildrenClosure365, $renderingContext);
$arguments360['data'] = NULL;
$arguments360['extensionName'] = NULL;
$arguments360['pluginName'] = NULL;
$arguments360['pageUid'] = NULL;
$arguments360['pageType'] = 0;
$arguments360['noCache'] = false;
$arguments360['noCacheHash'] = false;
$arguments360['section'] = '';
$arguments360['linkAccessRestrictedPages'] = false;
$arguments360['additionalParams'] = array (
);
$arguments360['absolute'] = false;
$arguments360['addQueryString'] = false;
$arguments360['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments360['addQueryStringMethod'] = NULL;
$arguments360['class'] = NULL;
$arguments360['dir'] = NULL;
$arguments360['id'] = NULL;
$arguments360['lang'] = NULL;
$arguments360['style'] = NULL;
$arguments360['accesskey'] = NULL;
$arguments360['tabindex'] = NULL;
$arguments360['onclick'] = NULL;
$arguments360['name'] = NULL;
$arguments360['rel'] = NULL;
$arguments360['rev'] = NULL;
$arguments360['target'] = NULL;
$renderChildrenClosure366 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output367 = '';

$output367 .= '
											';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$arguments368 = array();
$arguments368['identifier'] = 'actions-system-extension-update';
$arguments368['size'] = 'small';
$arguments368['overlay'] = NULL;
$arguments368['state'] = 'default';
$renderChildrenClosure369 = function() {return NULL;};

$output367 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments368, $renderChildrenClosure369, $renderingContext);

$output367 .= '
										';
return $output367;
};
$viewHelper370 = $self->getViewHelper('$viewHelper370', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper370->setArguments($arguments360);
$viewHelper370->setRenderingContext($renderingContext);
$viewHelper370->setRenderChildrenClosure($renderChildrenClosure366);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper

$output359 .= $viewHelper370->initializeArgumentsAndRender();

$output359 .= '
									</span>
								';
return $output359;
};

$output349 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments357, $renderChildrenClosure358, $renderingContext);

$output349 .= '
							';
return $output349;
};
$arguments347['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output371 = '';

$output371 .= '
									<span class="btn btn-default disabled" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments372 = array();
$arguments372['key'] = 'extensionList.updateDisabled';
$arguments372['id'] = NULL;
$arguments372['default'] = NULL;
$arguments372['htmlEscape'] = NULL;
$arguments372['arguments'] = NULL;
$arguments372['extensionName'] = NULL;
$renderChildrenClosure373 = function() {return NULL;};

$output371 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments372, $renderChildrenClosure373, $renderingContext);

$output371 .= '">
										';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$arguments374 = array();
$arguments374['identifier'] = 'actions-system-extension-update';
$arguments374['size'] = 'small';
$arguments374['overlay'] = NULL;
$arguments374['state'] = 'default';
$renderChildrenClosure375 = function() {return NULL;};

$output371 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments374, $renderChildrenClosure375, $renderingContext);

$output371 .= '
									</span>
								';
return $output371;
};
$arguments347['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output376 = '';

$output376 .= '
									<span class="btn btn-default">
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments377 = array();
$arguments377['action'] = 'updateCommentForUpdatableVersions';
// Rendering Array
$array378 = array();
$array378['data-action'] = 'update-extension';
$arguments377['additionalAttributes'] = $array378;
$arguments377['format'] = 'json';
$arguments377['controller'] = 'Download';
// Rendering Array
$array379 = array();
$array379['extension'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'key', $renderingContext);
$array379['integerVersionStart'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'terObject.integerVersion', $renderingContext);
$array379['integerVersionStop'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'updateToVersion.integerVersion', $renderingContext);
$arguments377['arguments'] = $array379;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments380 = array();
$arguments380['key'] = 'extensionList.updateToVersion';
// Rendering Array
$array381 = array();
$array381['0'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'updateToVersion.version', $renderingContext);
$arguments380['arguments'] = $array381;
$arguments380['id'] = NULL;
$arguments380['default'] = NULL;
$arguments380['htmlEscape'] = NULL;
$arguments380['extensionName'] = NULL;
$renderChildrenClosure382 = function() {return NULL;};
$arguments377['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments380, $renderChildrenClosure382, $renderingContext);
$arguments377['data'] = NULL;
$arguments377['extensionName'] = NULL;
$arguments377['pluginName'] = NULL;
$arguments377['pageUid'] = NULL;
$arguments377['pageType'] = 0;
$arguments377['noCache'] = false;
$arguments377['noCacheHash'] = false;
$arguments377['section'] = '';
$arguments377['linkAccessRestrictedPages'] = false;
$arguments377['additionalParams'] = array (
);
$arguments377['absolute'] = false;
$arguments377['addQueryString'] = false;
$arguments377['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments377['addQueryStringMethod'] = NULL;
$arguments377['class'] = NULL;
$arguments377['dir'] = NULL;
$arguments377['id'] = NULL;
$arguments377['lang'] = NULL;
$arguments377['style'] = NULL;
$arguments377['accesskey'] = NULL;
$arguments377['tabindex'] = NULL;
$arguments377['onclick'] = NULL;
$arguments377['name'] = NULL;
$arguments377['rel'] = NULL;
$arguments377['rev'] = NULL;
$arguments377['target'] = NULL;
$renderChildrenClosure383 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output384 = '';

$output384 .= '
											';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$arguments385 = array();
$arguments385['identifier'] = 'actions-system-extension-update';
$arguments385['size'] = 'small';
$arguments385['overlay'] = NULL;
$arguments385['state'] = 'default';
$renderChildrenClosure386 = function() {return NULL;};

$output384 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments385, $renderChildrenClosure386, $renderingContext);

$output384 .= '
										';
return $output384;
};
$viewHelper387 = $self->getViewHelper('$viewHelper387', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper387->setArguments($arguments377);
$viewHelper387->setRenderingContext($renderingContext);
$viewHelper387->setRenderChildrenClosure($renderChildrenClosure383);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper

$output376 .= $viewHelper387->initializeArgumentsAndRender();

$output376 .= '
									</span>
								';
return $output376;
};

$output346 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments347, $renderChildrenClosure348, $renderingContext);

$output346 .= '
						</div>
					';
return $output346;
};

$output280 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments344, $renderChildrenClosure345, $renderingContext);

$output280 .= '
				</td>
				<td>
					';
// Rendering ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\ToggleExtensionInstallationStateViewHelper
$arguments388 = array();
$arguments388['extension'] = $currentVariableContainer->getOrNull('extension');
$arguments388['additionalAttributes'] = NULL;
$arguments388['data'] = NULL;
$arguments388['class'] = NULL;
$arguments388['dir'] = NULL;
$arguments388['id'] = NULL;
$arguments388['lang'] = NULL;
$arguments388['style'] = NULL;
$arguments388['title'] = NULL;
$arguments388['accesskey'] = NULL;
$arguments388['tabindex'] = NULL;
$arguments388['onclick'] = NULL;
$arguments388['name'] = NULL;
$arguments388['rel'] = NULL;
$arguments388['rev'] = NULL;
$arguments388['target'] = NULL;
$renderChildrenClosure389 = function() {return NULL;};
$viewHelper390 = $self->getViewHelper('$viewHelper390', $renderingContext, 'TYPO3\CMS\Extensionmanager\ViewHelpers\ToggleExtensionInstallationStateViewHelper');
$viewHelper390->setArguments($arguments388);
$viewHelper390->setRenderingContext($renderingContext);
$viewHelper390->setRenderChildrenClosure($renderChildrenClosure389);
// End of ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\ToggleExtensionInstallationStateViewHelper

$output280 .= $viewHelper390->initializeArgumentsAndRender();

$output280 .= '
				</td>
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments391 = array();
// Rendering Boolean node
$arguments391['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'description', $renderingContext));
$arguments391['then'] = NULL;
$arguments391['else'] = NULL;
$renderChildrenClosure392 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output393 = '';

$output393 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments394 = array();
$renderChildrenClosure395 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output396 = '';

$output396 .= '
						<td title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments397 = array();
$arguments397['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'description', $renderingContext);
$arguments397['keepQuotes'] = false;
$arguments397['encoding'] = NULL;
$arguments397['doubleEncode'] = true;
$renderChildrenClosure398 = function() {return NULL;};
$value399 = ($arguments397['value'] !== NULL ? $arguments397['value'] : $renderChildrenClosure398());

$output396 .= (!is_string($value399) ? $value399 : htmlspecialchars($value399, ($arguments397['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments397['encoding'] !== NULL ? $arguments397['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments397['doubleEncode']));

$output396 .= '">
					';
return $output396;
};

$output393 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments394, $renderChildrenClosure395, $renderingContext);

$output393 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments400 = array();
$renderChildrenClosure401 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
						<td>
					';
};

$output393 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments400, $renderChildrenClosure401, $renderingContext);

$output393 .= '
				';
return $output393;
};
$arguments391['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output402 = '';

$output402 .= '
						<td title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments403 = array();
$arguments403['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'description', $renderingContext);
$arguments403['keepQuotes'] = false;
$arguments403['encoding'] = NULL;
$arguments403['doubleEncode'] = true;
$renderChildrenClosure404 = function() {return NULL;};
$value405 = ($arguments403['value'] !== NULL ? $arguments403['value'] : $renderChildrenClosure404());

$output402 .= (!is_string($value405) ? $value405 : htmlspecialchars($value405, ($arguments403['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments403['encoding'] !== NULL ? $arguments403['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments403['doubleEncode']));

$output402 .= '">
					';
return $output402;
};
$arguments391['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
						<td>
					';
};

$output280 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments391, $renderChildrenClosure392, $renderingContext);

$output280 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments406 = array();
// Rendering Boolean node
$arguments406['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'ext_icon', $renderingContext));
$arguments406['then'] = NULL;
$arguments406['else'] = NULL;
$renderChildrenClosure407 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output408 = '';

$output408 .= '
						<img class="ext-icon" src="../';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments409 = array();
$arguments409['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'siteRelPath', $renderingContext);
$arguments409['keepQuotes'] = false;
$arguments409['encoding'] = NULL;
$arguments409['doubleEncode'] = true;
$renderChildrenClosure410 = function() {return NULL;};
$value411 = ($arguments409['value'] !== NULL ? $arguments409['value'] : $renderChildrenClosure410());

$output408 .= (!is_string($value411) ? $value411 : htmlspecialchars($value411, ($arguments409['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments409['encoding'] !== NULL ? $arguments409['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments409['doubleEncode']));
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments412 = array();
$arguments412['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'ext_icon', $renderingContext);
$arguments412['keepQuotes'] = false;
$arguments412['encoding'] = NULL;
$arguments412['doubleEncode'] = true;
$renderChildrenClosure413 = function() {return NULL;};
$value414 = ($arguments412['value'] !== NULL ? $arguments412['value'] : $renderChildrenClosure413());

$output408 .= (!is_string($value414) ? $value414 : htmlspecialchars($value414, ($arguments412['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments412['encoding'] !== NULL ? $arguments412['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments412['doubleEncode']));

$output408 .= '" alt="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments415 = array();
$arguments415['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'title', $renderingContext);
$arguments415['keepQuotes'] = false;
$arguments415['encoding'] = NULL;
$arguments415['doubleEncode'] = true;
$renderChildrenClosure416 = function() {return NULL;};
$value417 = ($arguments415['value'] !== NULL ? $arguments415['value'] : $renderChildrenClosure416());

$output408 .= (!is_string($value417) ? $value417 : htmlspecialchars($value417, ($arguments415['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments415['encoding'] !== NULL ? $arguments415['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments415['doubleEncode']));

$output408 .= '" />
					';
return $output408;
};

$output280 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments406, $renderChildrenClosure407, $renderingContext);

$output280 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\ConfigureExtensionViewHelper
$arguments418 = array();
$arguments418['extension'] = $currentVariableContainer->getOrNull('extension');
// Rendering Boolean node
$arguments418['forceConfiguration'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('0');
// Rendering Boolean node
$arguments418['showDescription'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('1');
$arguments418['additionalAttributes'] = NULL;
$arguments418['data'] = NULL;
$arguments418['class'] = NULL;
$arguments418['dir'] = NULL;
$arguments418['id'] = NULL;
$arguments418['lang'] = NULL;
$arguments418['style'] = NULL;
$arguments418['title'] = NULL;
$arguments418['accesskey'] = NULL;
$arguments418['tabindex'] = NULL;
$arguments418['onclick'] = NULL;
$arguments418['name'] = NULL;
$arguments418['rel'] = NULL;
$arguments418['rev'] = NULL;
$arguments418['target'] = NULL;
$renderChildrenClosure419 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments420 = array();
$arguments420['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'title', $renderingContext);
$arguments420['keepQuotes'] = false;
$arguments420['encoding'] = NULL;
$arguments420['doubleEncode'] = true;
$renderChildrenClosure421 = function() {return NULL;};
$value422 = ($arguments420['value'] !== NULL ? $arguments420['value'] : $renderChildrenClosure421());
return (!is_string($value422) ? $value422 : htmlspecialchars($value422, ($arguments420['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments420['encoding'] !== NULL ? $arguments420['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments420['doubleEncode']));
};
$viewHelper423 = $self->getViewHelper('$viewHelper423', $renderingContext, 'TYPO3\CMS\Extensionmanager\ViewHelpers\ConfigureExtensionViewHelper');
$viewHelper423->setArguments($arguments418);
$viewHelper423->setRenderingContext($renderingContext);
$viewHelper423->setRenderChildrenClosure($renderChildrenClosure419);
// End of ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\ConfigureExtensionViewHelper

$output280 .= $viewHelper423->initializeArgumentsAndRender();

$output280 .= '
				</td>
				<td>
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments424 = array();
$arguments424['value'] = $currentVariableContainer->getOrNull('extensionKey');
$arguments424['keepQuotes'] = false;
$arguments424['encoding'] = NULL;
$arguments424['doubleEncode'] = true;
$renderChildrenClosure425 = function() {return NULL;};
$value426 = ($arguments424['value'] !== NULL ? $arguments424['value'] : $renderChildrenClosure425());

$output280 .= (!is_string($value426) ? $value426 : htmlspecialchars($value426, ($arguments424['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments424['encoding'] !== NULL ? $arguments424['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments424['doubleEncode']));

$output280 .= '
				</td>
				<td>
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments427 = array();
$arguments427['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'version', $renderingContext);
$arguments427['keepQuotes'] = false;
$arguments427['encoding'] = NULL;
$arguments427['doubleEncode'] = true;
$renderChildrenClosure428 = function() {return NULL;};
$value429 = ($arguments427['value'] !== NULL ? $arguments427['value'] : $renderChildrenClosure428());

$output280 .= (!is_string($value429) ? $value429 : htmlspecialchars($value429, ($arguments427['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments427['encoding'] !== NULL ? $arguments427['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments427['doubleEncode']));

$output280 .= '
				</td>
				<td>
					<span class="label label-';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments430 = array();
$arguments430['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'state', $renderingContext);
$arguments430['keepQuotes'] = false;
$arguments430['encoding'] = NULL;
$arguments430['doubleEncode'] = true;
$renderChildrenClosure431 = function() {return NULL;};
$value432 = ($arguments430['value'] !== NULL ? $arguments430['value'] : $renderChildrenClosure431());

$output280 .= (!is_string($value432) ? $value432 : htmlspecialchars($value432, ($arguments430['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments430['encoding'] !== NULL ? $arguments430['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments430['doubleEncode']));

$output280 .= '">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments433 = array();
$arguments433['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'state', $renderingContext);
$arguments433['keepQuotes'] = false;
$arguments433['encoding'] = NULL;
$arguments433['doubleEncode'] = true;
$renderChildrenClosure434 = function() {return NULL;};
$value435 = ($arguments433['value'] !== NULL ? $arguments433['value'] : $renderChildrenClosure434());

$output280 .= (!is_string($value435) ? $value435 : htmlspecialchars($value435, ($arguments433['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments433['encoding'] !== NULL ? $arguments433['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments433['doubleEncode']));

$output280 .= '</span>
				</td>
				<td>
					<div class="btn-group">
						';
// Rendering ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\ProcessAvailableActionsViewHelper
$arguments436 = array();
$arguments436['extension'] = $currentVariableContainer->getOrNull('extension');
$arguments436['additionalAttributes'] = NULL;
$arguments436['data'] = NULL;
$arguments436['class'] = NULL;
$arguments436['dir'] = NULL;
$arguments436['id'] = NULL;
$arguments436['lang'] = NULL;
$arguments436['style'] = NULL;
$arguments436['title'] = NULL;
$arguments436['accesskey'] = NULL;
$arguments436['tabindex'] = NULL;
$arguments436['onclick'] = NULL;
$arguments436['name'] = NULL;
$arguments436['rel'] = NULL;
$arguments436['rev'] = NULL;
$arguments436['target'] = NULL;
$renderChildrenClosure437 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output438 = '';

$output438 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\ConfigureExtensionViewHelper
$arguments439 = array();
$arguments439['class'] = 'btn btn-default';
$arguments439['extension'] = $currentVariableContainer->getOrNull('extension');
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments440 = array();
$arguments440['key'] = 'extensionList.configure';
$arguments440['id'] = NULL;
$arguments440['default'] = NULL;
$arguments440['htmlEscape'] = NULL;
$arguments440['arguments'] = NULL;
$arguments440['extensionName'] = NULL;
$renderChildrenClosure441 = function() {return NULL;};
$arguments439['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments440, $renderChildrenClosure441, $renderingContext);
$arguments439['additionalAttributes'] = NULL;
$arguments439['data'] = NULL;
$arguments439['forceConfiguration'] = true;
$arguments439['showDescription'] = false;
$arguments439['dir'] = NULL;
$arguments439['id'] = NULL;
$arguments439['lang'] = NULL;
$arguments439['style'] = NULL;
$arguments439['accesskey'] = NULL;
$arguments439['tabindex'] = NULL;
$arguments439['onclick'] = NULL;
$arguments439['name'] = NULL;
$arguments439['rel'] = NULL;
$arguments439['rev'] = NULL;
$arguments439['target'] = NULL;
$renderChildrenClosure442 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output443 = '';

$output443 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$arguments444 = array();
$arguments444['identifier'] = 'actions-system-extension-configure';
$arguments444['size'] = 'small';
$arguments444['overlay'] = NULL;
$arguments444['state'] = 'default';
$renderChildrenClosure445 = function() {return NULL;};

$output443 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments444, $renderChildrenClosure445, $renderingContext);

$output443 .= '
							';
return $output443;
};
$viewHelper446 = $self->getViewHelper('$viewHelper446', $renderingContext, 'TYPO3\CMS\Extensionmanager\ViewHelpers\ConfigureExtensionViewHelper');
$viewHelper446->setArguments($arguments439);
$viewHelper446->setRenderingContext($renderingContext);
$viewHelper446->setRenderChildrenClosure($renderChildrenClosure442);
// End of ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\ConfigureExtensionViewHelper

$output438 .= $viewHelper446->initializeArgumentsAndRender();

$output438 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\UpdateScriptViewHelper
$arguments447 = array();
$arguments447['class'] = 'btn btn-default';
$arguments447['extensionKey'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'key', $renderingContext);
$arguments447['additionalAttributes'] = NULL;
$arguments447['data'] = NULL;
$arguments447['dir'] = NULL;
$arguments447['id'] = NULL;
$arguments447['lang'] = NULL;
$arguments447['style'] = NULL;
$arguments447['title'] = NULL;
$arguments447['accesskey'] = NULL;
$arguments447['tabindex'] = NULL;
$arguments447['onclick'] = NULL;
$arguments447['name'] = NULL;
$arguments447['rel'] = NULL;
$arguments447['rev'] = NULL;
$arguments447['target'] = NULL;
$renderChildrenClosure448 = function() {return NULL;};
$viewHelper449 = $self->getViewHelper('$viewHelper449', $renderingContext, 'TYPO3\CMS\Extensionmanager\ViewHelpers\UpdateScriptViewHelper');
$viewHelper449->setArguments($arguments447);
$viewHelper449->setRenderingContext($renderingContext);
$viewHelper449->setRenderChildrenClosure($renderChildrenClosure448);
// End of ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\UpdateScriptViewHelper

$output438 .= $viewHelper449->initializeArgumentsAndRender();

$output438 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\RemoveExtensionViewHelper
$arguments450 = array();
$arguments450['class'] = 'btn btn-default';
$arguments450['extension'] = $currentVariableContainer->getOrNull('extension');
$arguments450['additionalAttributes'] = NULL;
$arguments450['data'] = NULL;
$arguments450['dir'] = NULL;
$arguments450['id'] = NULL;
$arguments450['lang'] = NULL;
$arguments450['style'] = NULL;
$arguments450['title'] = NULL;
$arguments450['accesskey'] = NULL;
$arguments450['tabindex'] = NULL;
$arguments450['onclick'] = NULL;
$arguments450['name'] = NULL;
$arguments450['rel'] = NULL;
$arguments450['rev'] = NULL;
$arguments450['target'] = NULL;
$renderChildrenClosure451 = function() {return NULL;};
$viewHelper452 = $self->getViewHelper('$viewHelper452', $renderingContext, 'TYPO3\CMS\Extensionmanager\ViewHelpers\RemoveExtensionViewHelper');
$viewHelper452->setArguments($arguments450);
$viewHelper452->setRenderingContext($renderingContext);
$viewHelper452->setRenderChildrenClosure($renderChildrenClosure451);
// End of ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\RemoveExtensionViewHelper

$output438 .= $viewHelper452->initializeArgumentsAndRender();

$output438 .= '
							<span class="btn btn-default">
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments453 = array();
$arguments453['action'] = 'downloadExtensionZip';
$arguments453['controller'] = 'Action';
// Rendering Array
$array454 = array();
$array454['extension'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'key', $renderingContext);
$arguments453['arguments'] = $array454;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments455 = array();
$arguments455['key'] = 'extensionList.downloadzip';
$arguments455['id'] = NULL;
$arguments455['default'] = NULL;
$arguments455['htmlEscape'] = NULL;
$arguments455['arguments'] = NULL;
$arguments455['extensionName'] = NULL;
$renderChildrenClosure456 = function() {return NULL;};
$arguments453['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments455, $renderChildrenClosure456, $renderingContext);
$arguments453['additionalAttributes'] = NULL;
$arguments453['data'] = NULL;
$arguments453['extensionName'] = NULL;
$arguments453['pluginName'] = NULL;
$arguments453['pageUid'] = NULL;
$arguments453['pageType'] = 0;
$arguments453['noCache'] = false;
$arguments453['noCacheHash'] = false;
$arguments453['section'] = '';
$arguments453['format'] = '';
$arguments453['linkAccessRestrictedPages'] = false;
$arguments453['additionalParams'] = array (
);
$arguments453['absolute'] = false;
$arguments453['addQueryString'] = false;
$arguments453['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments453['addQueryStringMethod'] = NULL;
$arguments453['class'] = NULL;
$arguments453['dir'] = NULL;
$arguments453['id'] = NULL;
$arguments453['lang'] = NULL;
$arguments453['style'] = NULL;
$arguments453['accesskey'] = NULL;
$arguments453['tabindex'] = NULL;
$arguments453['onclick'] = NULL;
$arguments453['name'] = NULL;
$arguments453['rel'] = NULL;
$arguments453['rev'] = NULL;
$arguments453['target'] = NULL;
$renderChildrenClosure457 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output458 = '';

$output458 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$arguments459 = array();
$arguments459['identifier'] = 'actions-system-extension-download';
$arguments459['size'] = 'small';
$arguments459['overlay'] = NULL;
$arguments459['state'] = 'default';
$renderChildrenClosure460 = function() {return NULL;};

$output458 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments459, $renderChildrenClosure460, $renderingContext);

$output458 .= '
								';
return $output458;
};
$viewHelper461 = $self->getViewHelper('$viewHelper461', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper461->setArguments($arguments453);
$viewHelper461->setRenderingContext($renderingContext);
$viewHelper461->setRenderChildrenClosure($renderChildrenClosure457);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper

$output438 .= $viewHelper461->initializeArgumentsAndRender();

$output438 .= '
							</span>
							';
// Rendering ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\DownloadExtensionDataViewHelper
$arguments462 = array();
$arguments462['class'] = 'btn btn-default';
$arguments462['extension'] = $currentVariableContainer->getOrNull('extension');
$arguments462['additionalAttributes'] = NULL;
$arguments462['data'] = NULL;
$arguments462['dir'] = NULL;
$arguments462['id'] = NULL;
$arguments462['lang'] = NULL;
$arguments462['style'] = NULL;
$arguments462['title'] = NULL;
$arguments462['accesskey'] = NULL;
$arguments462['tabindex'] = NULL;
$arguments462['onclick'] = NULL;
$arguments462['name'] = NULL;
$arguments462['rel'] = NULL;
$arguments462['rev'] = NULL;
$arguments462['target'] = NULL;
$renderChildrenClosure463 = function() {return NULL;};
$viewHelper464 = $self->getViewHelper('$viewHelper464', $renderingContext, 'TYPO3\CMS\Extensionmanager\ViewHelpers\DownloadExtensionDataViewHelper');
$viewHelper464->setArguments($arguments462);
$viewHelper464->setRenderingContext($renderingContext);
$viewHelper464->setRenderChildrenClosure($renderChildrenClosure463);
// End of ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\DownloadExtensionDataViewHelper

$output438 .= $viewHelper464->initializeArgumentsAndRender();

$output438 .= '
						';
return $output438;
};
$viewHelper465 = $self->getViewHelper('$viewHelper465', $renderingContext, 'TYPO3\CMS\Extensionmanager\ViewHelpers\ProcessAvailableActionsViewHelper');
$viewHelper465->setArguments($arguments436);
$viewHelper465->setRenderingContext($renderingContext);
$viewHelper465->setRenderChildrenClosure($renderChildrenClosure437);
// End of ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\ProcessAvailableActionsViewHelper

$output280 .= $viewHelper465->initializeArgumentsAndRender();

$output280 .= '
					</div>
				</td>
				</tr>
			';
return $output280;
};

$output249 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments278, $renderChildrenClosure279, $renderingContext);

$output249 .= '
		</tbody>
	</table>
	</div>
';
return $output249;
};

$output228 .= '';


return $output228;
}


}
#1443835937    138494    