<?php
class FluidCache_Fluid_ViewHelpers_Be_Widget_Paginate_action_index_adfb6c9b1a0254c82dc0f733684c863bfe49eb9d extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
 * section paginator
 */
public function section_31b8d545b1939b065e8931304bab52b99d8b4567(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();

$output0 = '';

$output0 .= '
	<nav class="pagination-wrap">
		<ul class="pagination pagination-block">
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments1 = array();
// Rendering Boolean node
$arguments1['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('pagination'), 'hasLessPages', $renderingContext));
$arguments1['then'] = NULL;
$arguments1['else'] = NULL;
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output3 = '';

$output3 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments4 = array();
$renderChildrenClosure5 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output6 = '';

$output6 .= '
					<li>
						<a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper
$arguments7 = array();
// Rendering Array
$array8 = array();
$array8['currentPage'] = 1;
$arguments7['arguments'] = $array8;
$arguments7['action'] = NULL;
$arguments7['section'] = '';
$arguments7['format'] = '';
$arguments7['ajax'] = false;
$arguments7['addQueryStringMethod'] = NULL;
$renderChildrenClosure9 = function() {return NULL;};
$viewHelper10 = $self->getViewHelper('$viewHelper10', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper');
$viewHelper10->setArguments($arguments7);
$viewHelper10->setRenderingContext($renderingContext);
$viewHelper10->setRenderChildrenClosure($renderChildrenClosure9);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper

$output6 .= $viewHelper10->initializeArgumentsAndRender();

$output6 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments11 = array();
$arguments11['key'] = 'widget.pagination.first';
$arguments11['id'] = NULL;
$arguments11['default'] = NULL;
$arguments11['htmlEscape'] = NULL;
$arguments11['arguments'] = NULL;
$arguments11['extensionName'] = NULL;
$renderChildrenClosure12 = function() {return NULL;};

$output6 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments11, $renderChildrenClosure12, $renderingContext);

$output6 .= '">
							';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$arguments13 = array();
$arguments13['identifier'] = 'actions-view-paging-first';
$arguments13['size'] = 'small';
$arguments13['overlay'] = NULL;
$arguments13['state'] = 'default';
$renderChildrenClosure14 = function() {return NULL;};

$output6 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments13, $renderChildrenClosure14, $renderingContext);

$output6 .= '
						</a>
					</li>
					<li>
						<a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper
$arguments15 = array();
// Rendering Array
$array16 = array();
$array16['currentPage'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('pagination'), 'previousPage', $renderingContext);
$arguments15['arguments'] = $array16;
$arguments15['action'] = NULL;
$arguments15['section'] = '';
$arguments15['format'] = '';
$arguments15['ajax'] = false;
$arguments15['addQueryStringMethod'] = NULL;
$renderChildrenClosure17 = function() {return NULL;};
$viewHelper18 = $self->getViewHelper('$viewHelper18', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper');
$viewHelper18->setArguments($arguments15);
$viewHelper18->setRenderingContext($renderingContext);
$viewHelper18->setRenderChildrenClosure($renderChildrenClosure17);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper

$output6 .= $viewHelper18->initializeArgumentsAndRender();

$output6 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments19 = array();
$arguments19['key'] = 'widget.pagination.previous';
$arguments19['id'] = NULL;
$arguments19['default'] = NULL;
$arguments19['htmlEscape'] = NULL;
$arguments19['arguments'] = NULL;
$arguments19['extensionName'] = NULL;
$renderChildrenClosure20 = function() {return NULL;};

$output6 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments19, $renderChildrenClosure20, $renderingContext);

$output6 .= '">
							';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$arguments21 = array();
$arguments21['identifier'] = 'actions-view-paging-previous';
$arguments21['size'] = 'small';
$arguments21['overlay'] = NULL;
$arguments21['state'] = 'default';
$renderChildrenClosure22 = function() {return NULL;};

$output6 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments21, $renderChildrenClosure22, $renderingContext);

$output6 .= '
						</a>
					</li>
				';
return $output6;
};

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext);

$output3 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments23 = array();
$renderChildrenClosure24 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output25 = '';

$output25 .= '
					<li class="disabled">
						<span>
							';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$arguments26 = array();
$arguments26['identifier'] = 'actions-view-paging-first';
$arguments26['size'] = 'small';
$arguments26['overlay'] = NULL;
$arguments26['state'] = 'default';
$renderChildrenClosure27 = function() {return NULL;};

$output25 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments26, $renderChildrenClosure27, $renderingContext);

$output25 .= '
						</span>
					</li>
					<li class="disabled">
						<span>
							';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$arguments28 = array();
$arguments28['identifier'] = 'actions-view-paging-previous';
$arguments28['size'] = 'small';
$arguments28['overlay'] = NULL;
$arguments28['state'] = 'default';
$renderChildrenClosure29 = function() {return NULL;};

$output25 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments28, $renderChildrenClosure29, $renderingContext);

$output25 .= '
						</span>
					</li>
				';
return $output25;
};

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments23, $renderChildrenClosure24, $renderingContext);

$output3 .= '
			';
return $output3;
};
$arguments1['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output30 = '';

$output30 .= '
					<li>
						<a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper
$arguments31 = array();
// Rendering Array
$array32 = array();
$array32['currentPage'] = 1;
$arguments31['arguments'] = $array32;
$arguments31['action'] = NULL;
$arguments31['section'] = '';
$arguments31['format'] = '';
$arguments31['ajax'] = false;
$arguments31['addQueryStringMethod'] = NULL;
$renderChildrenClosure33 = function() {return NULL;};
$viewHelper34 = $self->getViewHelper('$viewHelper34', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper');
$viewHelper34->setArguments($arguments31);
$viewHelper34->setRenderingContext($renderingContext);
$viewHelper34->setRenderChildrenClosure($renderChildrenClosure33);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper

$output30 .= $viewHelper34->initializeArgumentsAndRender();

$output30 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments35 = array();
$arguments35['key'] = 'widget.pagination.first';
$arguments35['id'] = NULL;
$arguments35['default'] = NULL;
$arguments35['htmlEscape'] = NULL;
$arguments35['arguments'] = NULL;
$arguments35['extensionName'] = NULL;
$renderChildrenClosure36 = function() {return NULL;};

$output30 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments35, $renderChildrenClosure36, $renderingContext);

$output30 .= '">
							';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$arguments37 = array();
$arguments37['identifier'] = 'actions-view-paging-first';
$arguments37['size'] = 'small';
$arguments37['overlay'] = NULL;
$arguments37['state'] = 'default';
$renderChildrenClosure38 = function() {return NULL;};

$output30 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments37, $renderChildrenClosure38, $renderingContext);

$output30 .= '
						</a>
					</li>
					<li>
						<a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper
$arguments39 = array();
// Rendering Array
$array40 = array();
$array40['currentPage'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('pagination'), 'previousPage', $renderingContext);
$arguments39['arguments'] = $array40;
$arguments39['action'] = NULL;
$arguments39['section'] = '';
$arguments39['format'] = '';
$arguments39['ajax'] = false;
$arguments39['addQueryStringMethod'] = NULL;
$renderChildrenClosure41 = function() {return NULL;};
$viewHelper42 = $self->getViewHelper('$viewHelper42', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper');
$viewHelper42->setArguments($arguments39);
$viewHelper42->setRenderingContext($renderingContext);
$viewHelper42->setRenderChildrenClosure($renderChildrenClosure41);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper

$output30 .= $viewHelper42->initializeArgumentsAndRender();

$output30 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments43 = array();
$arguments43['key'] = 'widget.pagination.previous';
$arguments43['id'] = NULL;
$arguments43['default'] = NULL;
$arguments43['htmlEscape'] = NULL;
$arguments43['arguments'] = NULL;
$arguments43['extensionName'] = NULL;
$renderChildrenClosure44 = function() {return NULL;};

$output30 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments43, $renderChildrenClosure44, $renderingContext);

$output30 .= '">
							';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$arguments45 = array();
$arguments45['identifier'] = 'actions-view-paging-previous';
$arguments45['size'] = 'small';
$arguments45['overlay'] = NULL;
$arguments45['state'] = 'default';
$renderChildrenClosure46 = function() {return NULL;};

$output30 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments45, $renderChildrenClosure46, $renderingContext);

$output30 .= '
						</a>
					</li>
				';
return $output30;
};
$arguments1['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output47 = '';

$output47 .= '
					<li class="disabled">
						<span>
							';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$arguments48 = array();
$arguments48['identifier'] = 'actions-view-paging-first';
$arguments48['size'] = 'small';
$arguments48['overlay'] = NULL;
$arguments48['state'] = 'default';
$renderChildrenClosure49 = function() {return NULL;};

$output47 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments48, $renderChildrenClosure49, $renderingContext);

$output47 .= '
						</span>
					</li>
					<li class="disabled">
						<span>
							';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$arguments50 = array();
$arguments50['identifier'] = 'actions-view-paging-previous';
$arguments50['size'] = 'small';
$arguments50['overlay'] = NULL;
$arguments50['state'] = 'default';
$renderChildrenClosure51 = function() {return NULL;};

$output47 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments50, $renderChildrenClosure51, $renderingContext);

$output47 .= '
						</span>
					</li>
				';
return $output47;
};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '
			<li>
				<span>
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments52 = array();
// Rendering Boolean node
$arguments52['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean($currentVariableContainer->getOrNull('recordsLabel'));
$arguments52['then'] = NULL;
$arguments52['else'] = NULL;
$renderChildrenClosure53 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output54 = '';

$output54 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments55 = array();
$renderChildrenClosure56 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output57 = '';

$output57 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments58 = array();
$arguments58['value'] = $currentVariableContainer->getOrNull('recordsLabel');
$arguments58['keepQuotes'] = false;
$arguments58['encoding'] = NULL;
$arguments58['doubleEncode'] = true;
$renderChildrenClosure59 = function() {return NULL;};
$value60 = ($arguments58['value'] !== NULL ? $arguments58['value'] : $renderChildrenClosure59());

$output57 .= (!is_string($value60) ? $value60 : htmlspecialchars($value60, ($arguments58['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments58['encoding'] !== NULL ? $arguments58['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments58['doubleEncode']));

$output57 .= '
						';
return $output57;
};

$output54 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments55, $renderChildrenClosure56, $renderingContext);

$output54 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments61 = array();
$renderChildrenClosure62 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output63 = '';

$output63 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments64 = array();
$arguments64['key'] = 'widget.pagination.records';
$arguments64['id'] = NULL;
$arguments64['default'] = NULL;
$arguments64['htmlEscape'] = NULL;
$arguments64['arguments'] = NULL;
$arguments64['extensionName'] = NULL;
$renderChildrenClosure65 = function() {return NULL;};

$output63 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments64, $renderChildrenClosure65, $renderingContext);

$output63 .= '
						';
return $output63;
};

$output54 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments61, $renderChildrenClosure62, $renderingContext);

$output54 .= '
					';
return $output54;
};
$arguments52['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output66 = '';

$output66 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments67 = array();
$arguments67['value'] = $currentVariableContainer->getOrNull('recordsLabel');
$arguments67['keepQuotes'] = false;
$arguments67['encoding'] = NULL;
$arguments67['doubleEncode'] = true;
$renderChildrenClosure68 = function() {return NULL;};
$value69 = ($arguments67['value'] !== NULL ? $arguments67['value'] : $renderChildrenClosure68());

$output66 .= (!is_string($value69) ? $value69 : htmlspecialchars($value69, ($arguments67['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments67['encoding'] !== NULL ? $arguments67['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments67['doubleEncode']));

$output66 .= '
						';
return $output66;
};
$arguments52['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output70 = '';

$output70 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments71 = array();
$arguments71['key'] = 'widget.pagination.records';
$arguments71['id'] = NULL;
$arguments71['default'] = NULL;
$arguments71['htmlEscape'] = NULL;
$arguments71['arguments'] = NULL;
$arguments71['extensionName'] = NULL;
$renderChildrenClosure72 = function() {return NULL;};

$output70 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments71, $renderChildrenClosure72, $renderingContext);

$output70 .= '
						';
return $output70;
};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments52, $renderChildrenClosure53, $renderingContext);

$output0 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments73 = array();
$arguments73['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('pagination'), 'startRecord', $renderingContext);
$arguments73['keepQuotes'] = false;
$arguments73['encoding'] = NULL;
$arguments73['doubleEncode'] = true;
$renderChildrenClosure74 = function() {return NULL;};
$value75 = ($arguments73['value'] !== NULL ? $arguments73['value'] : $renderChildrenClosure74());

$output0 .= (!is_string($value75) ? $value75 : htmlspecialchars($value75, ($arguments73['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments73['encoding'] !== NULL ? $arguments73['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments73['doubleEncode']));

$output0 .= ' - ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments76 = array();
$arguments76['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('pagination'), 'endRecord', $renderingContext);
$arguments76['keepQuotes'] = false;
$arguments76['encoding'] = NULL;
$arguments76['doubleEncode'] = true;
$renderChildrenClosure77 = function() {return NULL;};
$value78 = ($arguments76['value'] !== NULL ? $arguments76['value'] : $renderChildrenClosure77());

$output0 .= (!is_string($value78) ? $value78 : htmlspecialchars($value78, ($arguments76['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments76['encoding'] !== NULL ? $arguments76['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments76['doubleEncode']));

$output0 .= '
				</span>
			</li>
			<li>
				<span>
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments79 = array();
$arguments79['key'] = 'widget.pagination.page';
$arguments79['id'] = NULL;
$arguments79['default'] = NULL;
$arguments79['htmlEscape'] = NULL;
$arguments79['arguments'] = NULL;
$arguments79['extensionName'] = NULL;
$renderChildrenClosure80 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments79, $renderChildrenClosure80, $renderingContext);

$output0 .= '

					<form id="paginator-form-';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments81 = array();
$arguments81['value'] = $currentVariableContainer->getOrNull('position');
$arguments81['keepQuotes'] = false;
$arguments81['encoding'] = NULL;
$arguments81['doubleEncode'] = true;
$renderChildrenClosure82 = function() {return NULL;};
$value83 = ($arguments81['value'] !== NULL ? $arguments81['value'] : $renderChildrenClosure82());

$output0 .= (!is_string($value83) ? $value83 : htmlspecialchars($value83, ($arguments81['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments81['encoding'] !== NULL ? $arguments81['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments81['doubleEncode']));

$output0 .= '" onsubmit="goToPage';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments84 = array();
$arguments84['value'] = $currentVariableContainer->getOrNull('position');
$arguments84['keepQuotes'] = false;
$arguments84['encoding'] = NULL;
$arguments84['doubleEncode'] = true;
$renderChildrenClosure85 = function() {return NULL;};
$value86 = ($arguments84['value'] !== NULL ? $arguments84['value'] : $renderChildrenClosure85());

$output0 .= (!is_string($value86) ? $value86 : htmlspecialchars($value86, ($arguments84['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments84['encoding'] !== NULL ? $arguments84['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments84['doubleEncode']));

$output0 .= '(this); return false;" style="display:inline;">
					<script type="text/javascript">
						function goToPage';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments87 = array();
$arguments87['value'] = $currentVariableContainer->getOrNull('position');
$arguments87['keepQuotes'] = false;
$arguments87['encoding'] = NULL;
$arguments87['doubleEncode'] = true;
$renderChildrenClosure88 = function() {return NULL;};
$value89 = ($arguments87['value'] !== NULL ? $arguments87['value'] : $renderChildrenClosure88());

$output0 .= (!is_string($value89) ? $value89 : htmlspecialchars($value89, ($arguments87['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments87['encoding'] !== NULL ? $arguments87['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments87['doubleEncode']));

$output0 .= '(formObject) {
							var url = \'';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper
$arguments90 = array();
// Rendering Array
$array91 = array();
$array91['currentPage'] = 987654321;
$arguments90['arguments'] = $array91;
$arguments90['action'] = NULL;
$arguments90['section'] = '';
$arguments90['format'] = '';
$arguments90['ajax'] = false;
$arguments90['addQueryStringMethod'] = NULL;
$renderChildrenClosure92 = function() {return NULL;};
$viewHelper93 = $self->getViewHelper('$viewHelper93', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper');
$viewHelper93->setArguments($arguments90);
$viewHelper93->setRenderingContext($renderingContext);
$viewHelper93->setRenderChildrenClosure($renderChildrenClosure92);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper

$output0 .= $viewHelper93->initializeArgumentsAndRender();

$output0 .= '\';
							var page = formObject.elements[\'paginator-target-page\'].value;
							if (page > ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments94 = array();
$arguments94['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('pagination'), 'numberOfPages', $renderingContext);
$arguments94['keepQuotes'] = false;
$arguments94['encoding'] = NULL;
$arguments94['doubleEncode'] = true;
$renderChildrenClosure95 = function() {return NULL;};
$value96 = ($arguments94['value'] !== NULL ? $arguments94['value'] : $renderChildrenClosure95());

$output0 .= (!is_string($value96) ? $value96 : htmlspecialchars($value96, ($arguments94['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments94['encoding'] !== NULL ? $arguments94['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments94['doubleEncode']));

$output0 .= ') {
								page = ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments97 = array();
$arguments97['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('pagination'), 'numberOfPages', $renderingContext);
$arguments97['keepQuotes'] = false;
$arguments97['encoding'] = NULL;
$arguments97['doubleEncode'] = true;
$renderChildrenClosure98 = function() {return NULL;};
$value99 = ($arguments97['value'] !== NULL ? $arguments97['value'] : $renderChildrenClosure98());

$output0 .= (!is_string($value99) ? $value99 : htmlspecialchars($value99, ($arguments97['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments97['encoding'] !== NULL ? $arguments97['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments97['doubleEncode']));

$output0 .= ';
							} else if (page < 1) {
								page = 1;
							}
							url = url.replace(\'987654321\', page);
							self.location.href= url;
						}
					</script>
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$arguments100 = array();
$output101 = '';

$output101 .= 'paginator-';

$output101 .= $currentVariableContainer->getOrNull('position');
$arguments100['id'] = $output101;
$arguments100['name'] = 'paginator-target-page';
$arguments100['class'] = 'form-control input-sm paginator-input';
$arguments100['size'] = '5';
$arguments100['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('pagination'), 'current', $renderingContext);
$arguments100['additionalAttributes'] = NULL;
$arguments100['data'] = NULL;
$arguments100['required'] = false;
$arguments100['type'] = 'text';
$arguments100['property'] = NULL;
$arguments100['autofocus'] = NULL;
$arguments100['disabled'] = NULL;
$arguments100['maxlength'] = NULL;
$arguments100['readonly'] = NULL;
$arguments100['placeholder'] = NULL;
$arguments100['pattern'] = NULL;
$arguments100['errorClass'] = 'f3-form-error';
$arguments100['dir'] = NULL;
$arguments100['lang'] = NULL;
$arguments100['style'] = NULL;
$arguments100['title'] = NULL;
$arguments100['accesskey'] = NULL;
$arguments100['tabindex'] = NULL;
$arguments100['onclick'] = NULL;
$renderChildrenClosure102 = function() {return NULL;};
$viewHelper103 = $self->getViewHelper('$viewHelper103', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper');
$viewHelper103->setArguments($arguments100);
$viewHelper103->setRenderingContext($renderingContext);
$viewHelper103->setRenderChildrenClosure($renderChildrenClosure102);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper

$output0 .= $viewHelper103->initializeArgumentsAndRender();

$output0 .= '
					</form>

					/ ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments104 = array();
$arguments104['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('pagination'), 'numberOfPages', $renderingContext);
$arguments104['keepQuotes'] = false;
$arguments104['encoding'] = NULL;
$arguments104['doubleEncode'] = true;
$renderChildrenClosure105 = function() {return NULL;};
$value106 = ($arguments104['value'] !== NULL ? $arguments104['value'] : $renderChildrenClosure105());

$output0 .= (!is_string($value106) ? $value106 : htmlspecialchars($value106, ($arguments104['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments104['encoding'] !== NULL ? $arguments104['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments104['doubleEncode']));

$output0 .= '
				</span>
			</li>
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments107 = array();
// Rendering Boolean node
$arguments107['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('pagination'), 'hasMorePages', $renderingContext));
$arguments107['then'] = NULL;
$arguments107['else'] = NULL;
$renderChildrenClosure108 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output109 = '';

$output109 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments110 = array();
$renderChildrenClosure111 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output112 = '';

$output112 .= '
					<li>
						<a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper
$arguments113 = array();
// Rendering Array
$array114 = array();
$array114['currentPage'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('pagination'), 'nextPage', $renderingContext);
$arguments113['arguments'] = $array114;
$arguments113['action'] = NULL;
$arguments113['section'] = '';
$arguments113['format'] = '';
$arguments113['ajax'] = false;
$arguments113['addQueryStringMethod'] = NULL;
$renderChildrenClosure115 = function() {return NULL;};
$viewHelper116 = $self->getViewHelper('$viewHelper116', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper');
$viewHelper116->setArguments($arguments113);
$viewHelper116->setRenderingContext($renderingContext);
$viewHelper116->setRenderChildrenClosure($renderChildrenClosure115);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper

$output112 .= $viewHelper116->initializeArgumentsAndRender();

$output112 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments117 = array();
$arguments117['key'] = 'widget.pagination.next';
$arguments117['id'] = NULL;
$arguments117['default'] = NULL;
$arguments117['htmlEscape'] = NULL;
$arguments117['arguments'] = NULL;
$arguments117['extensionName'] = NULL;
$renderChildrenClosure118 = function() {return NULL;};

$output112 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments117, $renderChildrenClosure118, $renderingContext);

$output112 .= '">
							';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$arguments119 = array();
$arguments119['identifier'] = 'actions-view-paging-next';
$arguments119['size'] = 'small';
$arguments119['overlay'] = NULL;
$arguments119['state'] = 'default';
$renderChildrenClosure120 = function() {return NULL;};

$output112 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments119, $renderChildrenClosure120, $renderingContext);

$output112 .= '
						</a>
					</li>
					<li>
						<a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper
$arguments121 = array();
// Rendering Array
$array122 = array();
$array122['currentPage'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('pagination'), 'numberOfPages', $renderingContext);
$arguments121['arguments'] = $array122;
$arguments121['action'] = NULL;
$arguments121['section'] = '';
$arguments121['format'] = '';
$arguments121['ajax'] = false;
$arguments121['addQueryStringMethod'] = NULL;
$renderChildrenClosure123 = function() {return NULL;};
$viewHelper124 = $self->getViewHelper('$viewHelper124', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper');
$viewHelper124->setArguments($arguments121);
$viewHelper124->setRenderingContext($renderingContext);
$viewHelper124->setRenderChildrenClosure($renderChildrenClosure123);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper

$output112 .= $viewHelper124->initializeArgumentsAndRender();

$output112 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments125 = array();
$arguments125['key'] = 'widget.pagination.last';
$arguments125['id'] = NULL;
$arguments125['default'] = NULL;
$arguments125['htmlEscape'] = NULL;
$arguments125['arguments'] = NULL;
$arguments125['extensionName'] = NULL;
$renderChildrenClosure126 = function() {return NULL;};

$output112 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments125, $renderChildrenClosure126, $renderingContext);

$output112 .= '">
							';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$arguments127 = array();
$arguments127['identifier'] = 'actions-view-paging-last';
$arguments127['size'] = 'small';
$arguments127['overlay'] = NULL;
$arguments127['state'] = 'default';
$renderChildrenClosure128 = function() {return NULL;};

$output112 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments127, $renderChildrenClosure128, $renderingContext);

$output112 .= '
						</a>
					</li>
				';
return $output112;
};

$output109 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments110, $renderChildrenClosure111, $renderingContext);

$output109 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments129 = array();
$renderChildrenClosure130 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output131 = '';

$output131 .= '
					<li class="disabled">
						<span>
							';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$arguments132 = array();
$arguments132['identifier'] = 'actions-view-paging-next';
$arguments132['size'] = 'small';
$arguments132['overlay'] = NULL;
$arguments132['state'] = 'default';
$renderChildrenClosure133 = function() {return NULL;};

$output131 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments132, $renderChildrenClosure133, $renderingContext);

$output131 .= '
						</span>
					</li>
					<li class="disabled">
						<span>
							';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$arguments134 = array();
$arguments134['identifier'] = 'actions-view-paging-last';
$arguments134['size'] = 'small';
$arguments134['overlay'] = NULL;
$arguments134['state'] = 'default';
$renderChildrenClosure135 = function() {return NULL;};

$output131 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments134, $renderChildrenClosure135, $renderingContext);

$output131 .= '
						</span>
					</li>
				';
return $output131;
};

$output109 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments129, $renderChildrenClosure130, $renderingContext);

$output109 .= '
			';
return $output109;
};
$arguments107['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output136 = '';

$output136 .= '
					<li>
						<a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper
$arguments137 = array();
// Rendering Array
$array138 = array();
$array138['currentPage'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('pagination'), 'nextPage', $renderingContext);
$arguments137['arguments'] = $array138;
$arguments137['action'] = NULL;
$arguments137['section'] = '';
$arguments137['format'] = '';
$arguments137['ajax'] = false;
$arguments137['addQueryStringMethod'] = NULL;
$renderChildrenClosure139 = function() {return NULL;};
$viewHelper140 = $self->getViewHelper('$viewHelper140', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper');
$viewHelper140->setArguments($arguments137);
$viewHelper140->setRenderingContext($renderingContext);
$viewHelper140->setRenderChildrenClosure($renderChildrenClosure139);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper

$output136 .= $viewHelper140->initializeArgumentsAndRender();

$output136 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments141 = array();
$arguments141['key'] = 'widget.pagination.next';
$arguments141['id'] = NULL;
$arguments141['default'] = NULL;
$arguments141['htmlEscape'] = NULL;
$arguments141['arguments'] = NULL;
$arguments141['extensionName'] = NULL;
$renderChildrenClosure142 = function() {return NULL;};

$output136 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments141, $renderChildrenClosure142, $renderingContext);

$output136 .= '">
							';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$arguments143 = array();
$arguments143['identifier'] = 'actions-view-paging-next';
$arguments143['size'] = 'small';
$arguments143['overlay'] = NULL;
$arguments143['state'] = 'default';
$renderChildrenClosure144 = function() {return NULL;};

$output136 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments143, $renderChildrenClosure144, $renderingContext);

$output136 .= '
						</a>
					</li>
					<li>
						<a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper
$arguments145 = array();
// Rendering Array
$array146 = array();
$array146['currentPage'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('pagination'), 'numberOfPages', $renderingContext);
$arguments145['arguments'] = $array146;
$arguments145['action'] = NULL;
$arguments145['section'] = '';
$arguments145['format'] = '';
$arguments145['ajax'] = false;
$arguments145['addQueryStringMethod'] = NULL;
$renderChildrenClosure147 = function() {return NULL;};
$viewHelper148 = $self->getViewHelper('$viewHelper148', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper');
$viewHelper148->setArguments($arguments145);
$viewHelper148->setRenderingContext($renderingContext);
$viewHelper148->setRenderChildrenClosure($renderChildrenClosure147);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper

$output136 .= $viewHelper148->initializeArgumentsAndRender();

$output136 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments149 = array();
$arguments149['key'] = 'widget.pagination.last';
$arguments149['id'] = NULL;
$arguments149['default'] = NULL;
$arguments149['htmlEscape'] = NULL;
$arguments149['arguments'] = NULL;
$arguments149['extensionName'] = NULL;
$renderChildrenClosure150 = function() {return NULL;};

$output136 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments149, $renderChildrenClosure150, $renderingContext);

$output136 .= '">
							';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$arguments151 = array();
$arguments151['identifier'] = 'actions-view-paging-last';
$arguments151['size'] = 'small';
$arguments151['overlay'] = NULL;
$arguments151['state'] = 'default';
$renderChildrenClosure152 = function() {return NULL;};

$output136 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments151, $renderChildrenClosure152, $renderingContext);

$output136 .= '
						</a>
					</li>
				';
return $output136;
};
$arguments107['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output153 = '';

$output153 .= '
					<li class="disabled">
						<span>
							';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$arguments154 = array();
$arguments154['identifier'] = 'actions-view-paging-next';
$arguments154['size'] = 'small';
$arguments154['overlay'] = NULL;
$arguments154['state'] = 'default';
$renderChildrenClosure155 = function() {return NULL;};

$output153 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments154, $renderChildrenClosure155, $renderingContext);

$output153 .= '
						</span>
					</li>
					<li class="disabled">
						<span>
							';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$arguments156 = array();
$arguments156['identifier'] = 'actions-view-paging-last';
$arguments156['size'] = 'small';
$arguments156['overlay'] = NULL;
$arguments156['state'] = 'default';
$renderChildrenClosure157 = function() {return NULL;};

$output153 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments156, $renderChildrenClosure157, $renderingContext);

$output153 .= '
						</span>
					</li>
				';
return $output153;
};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments107, $renderChildrenClosure108, $renderingContext);

$output0 .= '
			<li>
				<a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper
$arguments158 = array();
// Rendering Array
$array159 = array();
$array159['currentPage'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('pagination'), 'current', $renderingContext);
$arguments158['arguments'] = $array159;
$arguments158['action'] = NULL;
$arguments158['section'] = '';
$arguments158['format'] = '';
$arguments158['ajax'] = false;
$arguments158['addQueryStringMethod'] = NULL;
$renderChildrenClosure160 = function() {return NULL;};
$viewHelper161 = $self->getViewHelper('$viewHelper161', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper');
$viewHelper161->setArguments($arguments158);
$viewHelper161->setRenderingContext($renderingContext);
$viewHelper161->setRenderChildrenClosure($renderChildrenClosure160);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper

$output0 .= $viewHelper161->initializeArgumentsAndRender();

$output0 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments162 = array();
$arguments162['key'] = 'widget.pagination.refresh';
$arguments162['id'] = NULL;
$arguments162['default'] = NULL;
$arguments162['htmlEscape'] = NULL;
$arguments162['arguments'] = NULL;
$arguments162['extensionName'] = NULL;
$renderChildrenClosure163 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments162, $renderChildrenClosure163, $renderingContext);

$output0 .= '">
					';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$arguments164 = array();
$arguments164['identifier'] = 'actions-refresh';
$arguments164['size'] = 'small';
$arguments164['overlay'] = NULL;
$arguments164['state'] = 'default';
$renderChildrenClosure165 = function() {return NULL;};

$output0 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments164, $renderChildrenClosure165, $renderingContext);

$output0 .= '
				</a>
			</li>
		</ul>
	</nav>
';


return $output0;
}
/**
 * Main Render function
 */
public function render(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();

$output166 = '';

$output166 .= '
';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments167 = array();
// Rendering Boolean node
$arguments167['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('configuration'), 'insertAbove', $renderingContext));
$arguments167['then'] = NULL;
$arguments167['else'] = NULL;
$renderChildrenClosure168 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output169 = '';

$output169 .= '
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments170 = array();
$arguments170['section'] = 'paginator';
// Rendering Array
$array171 = array();
$array171['pagination'] = $currentVariableContainer->getOrNull('pagination');
$array171['position'] = 'top';
$array171['recordsLabel'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('configuration'), 'recordsLabel', $renderingContext);
$arguments170['arguments'] = $array171;
$arguments170['partial'] = NULL;
$arguments170['optional'] = false;
$renderChildrenClosure172 = function() {return NULL;};

$output169 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments170, $renderChildrenClosure172, $renderingContext);

$output169 .= '
';
return $output169;
};

$output166 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments167, $renderChildrenClosure168, $renderingContext);

$output166 .= '

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderChildrenViewHelper
$arguments173 = array();
$arguments173['arguments'] = $currentVariableContainer->getOrNull('contentArguments');
$renderChildrenClosure174 = function() {return NULL;};
$viewHelper175 = $self->getViewHelper('$viewHelper175', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\RenderChildrenViewHelper');
$viewHelper175->setArguments($arguments173);
$viewHelper175->setRenderingContext($renderingContext);
$viewHelper175->setRenderChildrenClosure($renderChildrenClosure174);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderChildrenViewHelper

$output166 .= $viewHelper175->initializeArgumentsAndRender();

$output166 .= '

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments176 = array();
// Rendering Boolean node
$arguments176['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('configuration'), 'insertBelow', $renderingContext));
$arguments176['then'] = NULL;
$arguments176['else'] = NULL;
$renderChildrenClosure177 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output178 = '';

$output178 .= '
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments179 = array();
$arguments179['section'] = 'paginator';
// Rendering Array
$array180 = array();
$array180['pagination'] = $currentVariableContainer->getOrNull('pagination');
$array180['position'] = 'bottom';
$array180['recordsLabel'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('configuration'), 'recordsLabel', $renderingContext);
$arguments179['arguments'] = $array180;
$arguments179['partial'] = NULL;
$arguments179['optional'] = false;
$renderChildrenClosure181 = function() {return NULL;};

$output178 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments179, $renderChildrenClosure181, $renderingContext);

$output178 .= '
';
return $output178;
};

$output166 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments176, $renderChildrenClosure177, $renderingContext);

$output166 .= '

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments182 = array();
$arguments182['name'] = 'paginator';
$renderChildrenClosure183 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output184 = '';

$output184 .= '
	<nav class="pagination-wrap">
		<ul class="pagination pagination-block">
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments185 = array();
// Rendering Boolean node
$arguments185['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('pagination'), 'hasLessPages', $renderingContext));
$arguments185['then'] = NULL;
$arguments185['else'] = NULL;
$renderChildrenClosure186 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output187 = '';

$output187 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments188 = array();
$renderChildrenClosure189 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output190 = '';

$output190 .= '
					<li>
						<a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper
$arguments191 = array();
// Rendering Array
$array192 = array();
$array192['currentPage'] = 1;
$arguments191['arguments'] = $array192;
$arguments191['action'] = NULL;
$arguments191['section'] = '';
$arguments191['format'] = '';
$arguments191['ajax'] = false;
$arguments191['addQueryStringMethod'] = NULL;
$renderChildrenClosure193 = function() {return NULL;};
$viewHelper194 = $self->getViewHelper('$viewHelper194', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper');
$viewHelper194->setArguments($arguments191);
$viewHelper194->setRenderingContext($renderingContext);
$viewHelper194->setRenderChildrenClosure($renderChildrenClosure193);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper

$output190 .= $viewHelper194->initializeArgumentsAndRender();

$output190 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments195 = array();
$arguments195['key'] = 'widget.pagination.first';
$arguments195['id'] = NULL;
$arguments195['default'] = NULL;
$arguments195['htmlEscape'] = NULL;
$arguments195['arguments'] = NULL;
$arguments195['extensionName'] = NULL;
$renderChildrenClosure196 = function() {return NULL;};

$output190 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments195, $renderChildrenClosure196, $renderingContext);

$output190 .= '">
							';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$arguments197 = array();
$arguments197['identifier'] = 'actions-view-paging-first';
$arguments197['size'] = 'small';
$arguments197['overlay'] = NULL;
$arguments197['state'] = 'default';
$renderChildrenClosure198 = function() {return NULL;};

$output190 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments197, $renderChildrenClosure198, $renderingContext);

$output190 .= '
						</a>
					</li>
					<li>
						<a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper
$arguments199 = array();
// Rendering Array
$array200 = array();
$array200['currentPage'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('pagination'), 'previousPage', $renderingContext);
$arguments199['arguments'] = $array200;
$arguments199['action'] = NULL;
$arguments199['section'] = '';
$arguments199['format'] = '';
$arguments199['ajax'] = false;
$arguments199['addQueryStringMethod'] = NULL;
$renderChildrenClosure201 = function() {return NULL;};
$viewHelper202 = $self->getViewHelper('$viewHelper202', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper');
$viewHelper202->setArguments($arguments199);
$viewHelper202->setRenderingContext($renderingContext);
$viewHelper202->setRenderChildrenClosure($renderChildrenClosure201);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper

$output190 .= $viewHelper202->initializeArgumentsAndRender();

$output190 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments203 = array();
$arguments203['key'] = 'widget.pagination.previous';
$arguments203['id'] = NULL;
$arguments203['default'] = NULL;
$arguments203['htmlEscape'] = NULL;
$arguments203['arguments'] = NULL;
$arguments203['extensionName'] = NULL;
$renderChildrenClosure204 = function() {return NULL;};

$output190 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments203, $renderChildrenClosure204, $renderingContext);

$output190 .= '">
							';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$arguments205 = array();
$arguments205['identifier'] = 'actions-view-paging-previous';
$arguments205['size'] = 'small';
$arguments205['overlay'] = NULL;
$arguments205['state'] = 'default';
$renderChildrenClosure206 = function() {return NULL;};

$output190 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments205, $renderChildrenClosure206, $renderingContext);

$output190 .= '
						</a>
					</li>
				';
return $output190;
};

$output187 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments188, $renderChildrenClosure189, $renderingContext);

$output187 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments207 = array();
$renderChildrenClosure208 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output209 = '';

$output209 .= '
					<li class="disabled">
						<span>
							';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$arguments210 = array();
$arguments210['identifier'] = 'actions-view-paging-first';
$arguments210['size'] = 'small';
$arguments210['overlay'] = NULL;
$arguments210['state'] = 'default';
$renderChildrenClosure211 = function() {return NULL;};

$output209 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments210, $renderChildrenClosure211, $renderingContext);

$output209 .= '
						</span>
					</li>
					<li class="disabled">
						<span>
							';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$arguments212 = array();
$arguments212['identifier'] = 'actions-view-paging-previous';
$arguments212['size'] = 'small';
$arguments212['overlay'] = NULL;
$arguments212['state'] = 'default';
$renderChildrenClosure213 = function() {return NULL;};

$output209 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments212, $renderChildrenClosure213, $renderingContext);

$output209 .= '
						</span>
					</li>
				';
return $output209;
};

$output187 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments207, $renderChildrenClosure208, $renderingContext);

$output187 .= '
			';
return $output187;
};
$arguments185['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output214 = '';

$output214 .= '
					<li>
						<a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper
$arguments215 = array();
// Rendering Array
$array216 = array();
$array216['currentPage'] = 1;
$arguments215['arguments'] = $array216;
$arguments215['action'] = NULL;
$arguments215['section'] = '';
$arguments215['format'] = '';
$arguments215['ajax'] = false;
$arguments215['addQueryStringMethod'] = NULL;
$renderChildrenClosure217 = function() {return NULL;};
$viewHelper218 = $self->getViewHelper('$viewHelper218', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper');
$viewHelper218->setArguments($arguments215);
$viewHelper218->setRenderingContext($renderingContext);
$viewHelper218->setRenderChildrenClosure($renderChildrenClosure217);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper

$output214 .= $viewHelper218->initializeArgumentsAndRender();

$output214 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments219 = array();
$arguments219['key'] = 'widget.pagination.first';
$arguments219['id'] = NULL;
$arguments219['default'] = NULL;
$arguments219['htmlEscape'] = NULL;
$arguments219['arguments'] = NULL;
$arguments219['extensionName'] = NULL;
$renderChildrenClosure220 = function() {return NULL;};

$output214 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments219, $renderChildrenClosure220, $renderingContext);

$output214 .= '">
							';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$arguments221 = array();
$arguments221['identifier'] = 'actions-view-paging-first';
$arguments221['size'] = 'small';
$arguments221['overlay'] = NULL;
$arguments221['state'] = 'default';
$renderChildrenClosure222 = function() {return NULL;};

$output214 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments221, $renderChildrenClosure222, $renderingContext);

$output214 .= '
						</a>
					</li>
					<li>
						<a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper
$arguments223 = array();
// Rendering Array
$array224 = array();
$array224['currentPage'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('pagination'), 'previousPage', $renderingContext);
$arguments223['arguments'] = $array224;
$arguments223['action'] = NULL;
$arguments223['section'] = '';
$arguments223['format'] = '';
$arguments223['ajax'] = false;
$arguments223['addQueryStringMethod'] = NULL;
$renderChildrenClosure225 = function() {return NULL;};
$viewHelper226 = $self->getViewHelper('$viewHelper226', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper');
$viewHelper226->setArguments($arguments223);
$viewHelper226->setRenderingContext($renderingContext);
$viewHelper226->setRenderChildrenClosure($renderChildrenClosure225);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper

$output214 .= $viewHelper226->initializeArgumentsAndRender();

$output214 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments227 = array();
$arguments227['key'] = 'widget.pagination.previous';
$arguments227['id'] = NULL;
$arguments227['default'] = NULL;
$arguments227['htmlEscape'] = NULL;
$arguments227['arguments'] = NULL;
$arguments227['extensionName'] = NULL;
$renderChildrenClosure228 = function() {return NULL;};

$output214 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments227, $renderChildrenClosure228, $renderingContext);

$output214 .= '">
							';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$arguments229 = array();
$arguments229['identifier'] = 'actions-view-paging-previous';
$arguments229['size'] = 'small';
$arguments229['overlay'] = NULL;
$arguments229['state'] = 'default';
$renderChildrenClosure230 = function() {return NULL;};

$output214 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments229, $renderChildrenClosure230, $renderingContext);

$output214 .= '
						</a>
					</li>
				';
return $output214;
};
$arguments185['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output231 = '';

$output231 .= '
					<li class="disabled">
						<span>
							';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$arguments232 = array();
$arguments232['identifier'] = 'actions-view-paging-first';
$arguments232['size'] = 'small';
$arguments232['overlay'] = NULL;
$arguments232['state'] = 'default';
$renderChildrenClosure233 = function() {return NULL;};

$output231 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments232, $renderChildrenClosure233, $renderingContext);

$output231 .= '
						</span>
					</li>
					<li class="disabled">
						<span>
							';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$arguments234 = array();
$arguments234['identifier'] = 'actions-view-paging-previous';
$arguments234['size'] = 'small';
$arguments234['overlay'] = NULL;
$arguments234['state'] = 'default';
$renderChildrenClosure235 = function() {return NULL;};

$output231 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments234, $renderChildrenClosure235, $renderingContext);

$output231 .= '
						</span>
					</li>
				';
return $output231;
};

$output184 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments185, $renderChildrenClosure186, $renderingContext);

$output184 .= '
			<li>
				<span>
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments236 = array();
// Rendering Boolean node
$arguments236['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean($currentVariableContainer->getOrNull('recordsLabel'));
$arguments236['then'] = NULL;
$arguments236['else'] = NULL;
$renderChildrenClosure237 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output238 = '';

$output238 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments239 = array();
$renderChildrenClosure240 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output241 = '';

$output241 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments242 = array();
$arguments242['value'] = $currentVariableContainer->getOrNull('recordsLabel');
$arguments242['keepQuotes'] = false;
$arguments242['encoding'] = NULL;
$arguments242['doubleEncode'] = true;
$renderChildrenClosure243 = function() {return NULL;};
$value244 = ($arguments242['value'] !== NULL ? $arguments242['value'] : $renderChildrenClosure243());

$output241 .= (!is_string($value244) ? $value244 : htmlspecialchars($value244, ($arguments242['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments242['encoding'] !== NULL ? $arguments242['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments242['doubleEncode']));

$output241 .= '
						';
return $output241;
};

$output238 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments239, $renderChildrenClosure240, $renderingContext);

$output238 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments245 = array();
$renderChildrenClosure246 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output247 = '';

$output247 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments248 = array();
$arguments248['key'] = 'widget.pagination.records';
$arguments248['id'] = NULL;
$arguments248['default'] = NULL;
$arguments248['htmlEscape'] = NULL;
$arguments248['arguments'] = NULL;
$arguments248['extensionName'] = NULL;
$renderChildrenClosure249 = function() {return NULL;};

$output247 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments248, $renderChildrenClosure249, $renderingContext);

$output247 .= '
						';
return $output247;
};

$output238 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments245, $renderChildrenClosure246, $renderingContext);

$output238 .= '
					';
return $output238;
};
$arguments236['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output250 = '';

$output250 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments251 = array();
$arguments251['value'] = $currentVariableContainer->getOrNull('recordsLabel');
$arguments251['keepQuotes'] = false;
$arguments251['encoding'] = NULL;
$arguments251['doubleEncode'] = true;
$renderChildrenClosure252 = function() {return NULL;};
$value253 = ($arguments251['value'] !== NULL ? $arguments251['value'] : $renderChildrenClosure252());

$output250 .= (!is_string($value253) ? $value253 : htmlspecialchars($value253, ($arguments251['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments251['encoding'] !== NULL ? $arguments251['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments251['doubleEncode']));

$output250 .= '
						';
return $output250;
};
$arguments236['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output254 = '';

$output254 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments255 = array();
$arguments255['key'] = 'widget.pagination.records';
$arguments255['id'] = NULL;
$arguments255['default'] = NULL;
$arguments255['htmlEscape'] = NULL;
$arguments255['arguments'] = NULL;
$arguments255['extensionName'] = NULL;
$renderChildrenClosure256 = function() {return NULL;};

$output254 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments255, $renderChildrenClosure256, $renderingContext);

$output254 .= '
						';
return $output254;
};

$output184 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments236, $renderChildrenClosure237, $renderingContext);

$output184 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments257 = array();
$arguments257['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('pagination'), 'startRecord', $renderingContext);
$arguments257['keepQuotes'] = false;
$arguments257['encoding'] = NULL;
$arguments257['doubleEncode'] = true;
$renderChildrenClosure258 = function() {return NULL;};
$value259 = ($arguments257['value'] !== NULL ? $arguments257['value'] : $renderChildrenClosure258());

$output184 .= (!is_string($value259) ? $value259 : htmlspecialchars($value259, ($arguments257['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments257['encoding'] !== NULL ? $arguments257['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments257['doubleEncode']));

$output184 .= ' - ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments260 = array();
$arguments260['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('pagination'), 'endRecord', $renderingContext);
$arguments260['keepQuotes'] = false;
$arguments260['encoding'] = NULL;
$arguments260['doubleEncode'] = true;
$renderChildrenClosure261 = function() {return NULL;};
$value262 = ($arguments260['value'] !== NULL ? $arguments260['value'] : $renderChildrenClosure261());

$output184 .= (!is_string($value262) ? $value262 : htmlspecialchars($value262, ($arguments260['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments260['encoding'] !== NULL ? $arguments260['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments260['doubleEncode']));

$output184 .= '
				</span>
			</li>
			<li>
				<span>
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments263 = array();
$arguments263['key'] = 'widget.pagination.page';
$arguments263['id'] = NULL;
$arguments263['default'] = NULL;
$arguments263['htmlEscape'] = NULL;
$arguments263['arguments'] = NULL;
$arguments263['extensionName'] = NULL;
$renderChildrenClosure264 = function() {return NULL;};

$output184 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments263, $renderChildrenClosure264, $renderingContext);

$output184 .= '

					<form id="paginator-form-';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments265 = array();
$arguments265['value'] = $currentVariableContainer->getOrNull('position');
$arguments265['keepQuotes'] = false;
$arguments265['encoding'] = NULL;
$arguments265['doubleEncode'] = true;
$renderChildrenClosure266 = function() {return NULL;};
$value267 = ($arguments265['value'] !== NULL ? $arguments265['value'] : $renderChildrenClosure266());

$output184 .= (!is_string($value267) ? $value267 : htmlspecialchars($value267, ($arguments265['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments265['encoding'] !== NULL ? $arguments265['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments265['doubleEncode']));

$output184 .= '" onsubmit="goToPage';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments268 = array();
$arguments268['value'] = $currentVariableContainer->getOrNull('position');
$arguments268['keepQuotes'] = false;
$arguments268['encoding'] = NULL;
$arguments268['doubleEncode'] = true;
$renderChildrenClosure269 = function() {return NULL;};
$value270 = ($arguments268['value'] !== NULL ? $arguments268['value'] : $renderChildrenClosure269());

$output184 .= (!is_string($value270) ? $value270 : htmlspecialchars($value270, ($arguments268['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments268['encoding'] !== NULL ? $arguments268['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments268['doubleEncode']));

$output184 .= '(this); return false;" style="display:inline;">
					<script type="text/javascript">
						function goToPage';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments271 = array();
$arguments271['value'] = $currentVariableContainer->getOrNull('position');
$arguments271['keepQuotes'] = false;
$arguments271['encoding'] = NULL;
$arguments271['doubleEncode'] = true;
$renderChildrenClosure272 = function() {return NULL;};
$value273 = ($arguments271['value'] !== NULL ? $arguments271['value'] : $renderChildrenClosure272());

$output184 .= (!is_string($value273) ? $value273 : htmlspecialchars($value273, ($arguments271['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments271['encoding'] !== NULL ? $arguments271['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments271['doubleEncode']));

$output184 .= '(formObject) {
							var url = \'';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper
$arguments274 = array();
// Rendering Array
$array275 = array();
$array275['currentPage'] = 987654321;
$arguments274['arguments'] = $array275;
$arguments274['action'] = NULL;
$arguments274['section'] = '';
$arguments274['format'] = '';
$arguments274['ajax'] = false;
$arguments274['addQueryStringMethod'] = NULL;
$renderChildrenClosure276 = function() {return NULL;};
$viewHelper277 = $self->getViewHelper('$viewHelper277', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper');
$viewHelper277->setArguments($arguments274);
$viewHelper277->setRenderingContext($renderingContext);
$viewHelper277->setRenderChildrenClosure($renderChildrenClosure276);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper

$output184 .= $viewHelper277->initializeArgumentsAndRender();

$output184 .= '\';
							var page = formObject.elements[\'paginator-target-page\'].value;
							if (page > ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments278 = array();
$arguments278['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('pagination'), 'numberOfPages', $renderingContext);
$arguments278['keepQuotes'] = false;
$arguments278['encoding'] = NULL;
$arguments278['doubleEncode'] = true;
$renderChildrenClosure279 = function() {return NULL;};
$value280 = ($arguments278['value'] !== NULL ? $arguments278['value'] : $renderChildrenClosure279());

$output184 .= (!is_string($value280) ? $value280 : htmlspecialchars($value280, ($arguments278['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments278['encoding'] !== NULL ? $arguments278['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments278['doubleEncode']));

$output184 .= ') {
								page = ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments281 = array();
$arguments281['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('pagination'), 'numberOfPages', $renderingContext);
$arguments281['keepQuotes'] = false;
$arguments281['encoding'] = NULL;
$arguments281['doubleEncode'] = true;
$renderChildrenClosure282 = function() {return NULL;};
$value283 = ($arguments281['value'] !== NULL ? $arguments281['value'] : $renderChildrenClosure282());

$output184 .= (!is_string($value283) ? $value283 : htmlspecialchars($value283, ($arguments281['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments281['encoding'] !== NULL ? $arguments281['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments281['doubleEncode']));

$output184 .= ';
							} else if (page < 1) {
								page = 1;
							}
							url = url.replace(\'987654321\', page);
							self.location.href= url;
						}
					</script>
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$arguments284 = array();
$output285 = '';

$output285 .= 'paginator-';

$output285 .= $currentVariableContainer->getOrNull('position');
$arguments284['id'] = $output285;
$arguments284['name'] = 'paginator-target-page';
$arguments284['class'] = 'form-control input-sm paginator-input';
$arguments284['size'] = '5';
$arguments284['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('pagination'), 'current', $renderingContext);
$arguments284['additionalAttributes'] = NULL;
$arguments284['data'] = NULL;
$arguments284['required'] = false;
$arguments284['type'] = 'text';
$arguments284['property'] = NULL;
$arguments284['autofocus'] = NULL;
$arguments284['disabled'] = NULL;
$arguments284['maxlength'] = NULL;
$arguments284['readonly'] = NULL;
$arguments284['placeholder'] = NULL;
$arguments284['pattern'] = NULL;
$arguments284['errorClass'] = 'f3-form-error';
$arguments284['dir'] = NULL;
$arguments284['lang'] = NULL;
$arguments284['style'] = NULL;
$arguments284['title'] = NULL;
$arguments284['accesskey'] = NULL;
$arguments284['tabindex'] = NULL;
$arguments284['onclick'] = NULL;
$renderChildrenClosure286 = function() {return NULL;};
$viewHelper287 = $self->getViewHelper('$viewHelper287', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper');
$viewHelper287->setArguments($arguments284);
$viewHelper287->setRenderingContext($renderingContext);
$viewHelper287->setRenderChildrenClosure($renderChildrenClosure286);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper

$output184 .= $viewHelper287->initializeArgumentsAndRender();

$output184 .= '
					</form>

					/ ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments288 = array();
$arguments288['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('pagination'), 'numberOfPages', $renderingContext);
$arguments288['keepQuotes'] = false;
$arguments288['encoding'] = NULL;
$arguments288['doubleEncode'] = true;
$renderChildrenClosure289 = function() {return NULL;};
$value290 = ($arguments288['value'] !== NULL ? $arguments288['value'] : $renderChildrenClosure289());

$output184 .= (!is_string($value290) ? $value290 : htmlspecialchars($value290, ($arguments288['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments288['encoding'] !== NULL ? $arguments288['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments288['doubleEncode']));

$output184 .= '
				</span>
			</li>
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments291 = array();
// Rendering Boolean node
$arguments291['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('pagination'), 'hasMorePages', $renderingContext));
$arguments291['then'] = NULL;
$arguments291['else'] = NULL;
$renderChildrenClosure292 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output293 = '';

$output293 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments294 = array();
$renderChildrenClosure295 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output296 = '';

$output296 .= '
					<li>
						<a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper
$arguments297 = array();
// Rendering Array
$array298 = array();
$array298['currentPage'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('pagination'), 'nextPage', $renderingContext);
$arguments297['arguments'] = $array298;
$arguments297['action'] = NULL;
$arguments297['section'] = '';
$arguments297['format'] = '';
$arguments297['ajax'] = false;
$arguments297['addQueryStringMethod'] = NULL;
$renderChildrenClosure299 = function() {return NULL;};
$viewHelper300 = $self->getViewHelper('$viewHelper300', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper');
$viewHelper300->setArguments($arguments297);
$viewHelper300->setRenderingContext($renderingContext);
$viewHelper300->setRenderChildrenClosure($renderChildrenClosure299);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper

$output296 .= $viewHelper300->initializeArgumentsAndRender();

$output296 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments301 = array();
$arguments301['key'] = 'widget.pagination.next';
$arguments301['id'] = NULL;
$arguments301['default'] = NULL;
$arguments301['htmlEscape'] = NULL;
$arguments301['arguments'] = NULL;
$arguments301['extensionName'] = NULL;
$renderChildrenClosure302 = function() {return NULL;};

$output296 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments301, $renderChildrenClosure302, $renderingContext);

$output296 .= '">
							';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$arguments303 = array();
$arguments303['identifier'] = 'actions-view-paging-next';
$arguments303['size'] = 'small';
$arguments303['overlay'] = NULL;
$arguments303['state'] = 'default';
$renderChildrenClosure304 = function() {return NULL;};

$output296 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments303, $renderChildrenClosure304, $renderingContext);

$output296 .= '
						</a>
					</li>
					<li>
						<a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper
$arguments305 = array();
// Rendering Array
$array306 = array();
$array306['currentPage'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('pagination'), 'numberOfPages', $renderingContext);
$arguments305['arguments'] = $array306;
$arguments305['action'] = NULL;
$arguments305['section'] = '';
$arguments305['format'] = '';
$arguments305['ajax'] = false;
$arguments305['addQueryStringMethod'] = NULL;
$renderChildrenClosure307 = function() {return NULL;};
$viewHelper308 = $self->getViewHelper('$viewHelper308', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper');
$viewHelper308->setArguments($arguments305);
$viewHelper308->setRenderingContext($renderingContext);
$viewHelper308->setRenderChildrenClosure($renderChildrenClosure307);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper

$output296 .= $viewHelper308->initializeArgumentsAndRender();

$output296 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments309 = array();
$arguments309['key'] = 'widget.pagination.last';
$arguments309['id'] = NULL;
$arguments309['default'] = NULL;
$arguments309['htmlEscape'] = NULL;
$arguments309['arguments'] = NULL;
$arguments309['extensionName'] = NULL;
$renderChildrenClosure310 = function() {return NULL;};

$output296 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments309, $renderChildrenClosure310, $renderingContext);

$output296 .= '">
							';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$arguments311 = array();
$arguments311['identifier'] = 'actions-view-paging-last';
$arguments311['size'] = 'small';
$arguments311['overlay'] = NULL;
$arguments311['state'] = 'default';
$renderChildrenClosure312 = function() {return NULL;};

$output296 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments311, $renderChildrenClosure312, $renderingContext);

$output296 .= '
						</a>
					</li>
				';
return $output296;
};

$output293 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments294, $renderChildrenClosure295, $renderingContext);

$output293 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments313 = array();
$renderChildrenClosure314 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output315 = '';

$output315 .= '
					<li class="disabled">
						<span>
							';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$arguments316 = array();
$arguments316['identifier'] = 'actions-view-paging-next';
$arguments316['size'] = 'small';
$arguments316['overlay'] = NULL;
$arguments316['state'] = 'default';
$renderChildrenClosure317 = function() {return NULL;};

$output315 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments316, $renderChildrenClosure317, $renderingContext);

$output315 .= '
						</span>
					</li>
					<li class="disabled">
						<span>
							';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$arguments318 = array();
$arguments318['identifier'] = 'actions-view-paging-last';
$arguments318['size'] = 'small';
$arguments318['overlay'] = NULL;
$arguments318['state'] = 'default';
$renderChildrenClosure319 = function() {return NULL;};

$output315 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments318, $renderChildrenClosure319, $renderingContext);

$output315 .= '
						</span>
					</li>
				';
return $output315;
};

$output293 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments313, $renderChildrenClosure314, $renderingContext);

$output293 .= '
			';
return $output293;
};
$arguments291['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output320 = '';

$output320 .= '
					<li>
						<a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper
$arguments321 = array();
// Rendering Array
$array322 = array();
$array322['currentPage'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('pagination'), 'nextPage', $renderingContext);
$arguments321['arguments'] = $array322;
$arguments321['action'] = NULL;
$arguments321['section'] = '';
$arguments321['format'] = '';
$arguments321['ajax'] = false;
$arguments321['addQueryStringMethod'] = NULL;
$renderChildrenClosure323 = function() {return NULL;};
$viewHelper324 = $self->getViewHelper('$viewHelper324', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper');
$viewHelper324->setArguments($arguments321);
$viewHelper324->setRenderingContext($renderingContext);
$viewHelper324->setRenderChildrenClosure($renderChildrenClosure323);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper

$output320 .= $viewHelper324->initializeArgumentsAndRender();

$output320 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments325 = array();
$arguments325['key'] = 'widget.pagination.next';
$arguments325['id'] = NULL;
$arguments325['default'] = NULL;
$arguments325['htmlEscape'] = NULL;
$arguments325['arguments'] = NULL;
$arguments325['extensionName'] = NULL;
$renderChildrenClosure326 = function() {return NULL;};

$output320 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments325, $renderChildrenClosure326, $renderingContext);

$output320 .= '">
							';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$arguments327 = array();
$arguments327['identifier'] = 'actions-view-paging-next';
$arguments327['size'] = 'small';
$arguments327['overlay'] = NULL;
$arguments327['state'] = 'default';
$renderChildrenClosure328 = function() {return NULL;};

$output320 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments327, $renderChildrenClosure328, $renderingContext);

$output320 .= '
						</a>
					</li>
					<li>
						<a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper
$arguments329 = array();
// Rendering Array
$array330 = array();
$array330['currentPage'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('pagination'), 'numberOfPages', $renderingContext);
$arguments329['arguments'] = $array330;
$arguments329['action'] = NULL;
$arguments329['section'] = '';
$arguments329['format'] = '';
$arguments329['ajax'] = false;
$arguments329['addQueryStringMethod'] = NULL;
$renderChildrenClosure331 = function() {return NULL;};
$viewHelper332 = $self->getViewHelper('$viewHelper332', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper');
$viewHelper332->setArguments($arguments329);
$viewHelper332->setRenderingContext($renderingContext);
$viewHelper332->setRenderChildrenClosure($renderChildrenClosure331);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper

$output320 .= $viewHelper332->initializeArgumentsAndRender();

$output320 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments333 = array();
$arguments333['key'] = 'widget.pagination.last';
$arguments333['id'] = NULL;
$arguments333['default'] = NULL;
$arguments333['htmlEscape'] = NULL;
$arguments333['arguments'] = NULL;
$arguments333['extensionName'] = NULL;
$renderChildrenClosure334 = function() {return NULL;};

$output320 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments333, $renderChildrenClosure334, $renderingContext);

$output320 .= '">
							';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$arguments335 = array();
$arguments335['identifier'] = 'actions-view-paging-last';
$arguments335['size'] = 'small';
$arguments335['overlay'] = NULL;
$arguments335['state'] = 'default';
$renderChildrenClosure336 = function() {return NULL;};

$output320 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments335, $renderChildrenClosure336, $renderingContext);

$output320 .= '
						</a>
					</li>
				';
return $output320;
};
$arguments291['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output337 = '';

$output337 .= '
					<li class="disabled">
						<span>
							';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$arguments338 = array();
$arguments338['identifier'] = 'actions-view-paging-next';
$arguments338['size'] = 'small';
$arguments338['overlay'] = NULL;
$arguments338['state'] = 'default';
$renderChildrenClosure339 = function() {return NULL;};

$output337 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments338, $renderChildrenClosure339, $renderingContext);

$output337 .= '
						</span>
					</li>
					<li class="disabled">
						<span>
							';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$arguments340 = array();
$arguments340['identifier'] = 'actions-view-paging-last';
$arguments340['size'] = 'small';
$arguments340['overlay'] = NULL;
$arguments340['state'] = 'default';
$renderChildrenClosure341 = function() {return NULL;};

$output337 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments340, $renderChildrenClosure341, $renderingContext);

$output337 .= '
						</span>
					</li>
				';
return $output337;
};

$output184 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments291, $renderChildrenClosure292, $renderingContext);

$output184 .= '
			<li>
				<a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper
$arguments342 = array();
// Rendering Array
$array343 = array();
$array343['currentPage'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('pagination'), 'current', $renderingContext);
$arguments342['arguments'] = $array343;
$arguments342['action'] = NULL;
$arguments342['section'] = '';
$arguments342['format'] = '';
$arguments342['ajax'] = false;
$arguments342['addQueryStringMethod'] = NULL;
$renderChildrenClosure344 = function() {return NULL;};
$viewHelper345 = $self->getViewHelper('$viewHelper345', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper');
$viewHelper345->setArguments($arguments342);
$viewHelper345->setRenderingContext($renderingContext);
$viewHelper345->setRenderChildrenClosure($renderChildrenClosure344);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper

$output184 .= $viewHelper345->initializeArgumentsAndRender();

$output184 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments346 = array();
$arguments346['key'] = 'widget.pagination.refresh';
$arguments346['id'] = NULL;
$arguments346['default'] = NULL;
$arguments346['htmlEscape'] = NULL;
$arguments346['arguments'] = NULL;
$arguments346['extensionName'] = NULL;
$renderChildrenClosure347 = function() {return NULL;};

$output184 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments346, $renderChildrenClosure347, $renderingContext);

$output184 .= '">
					';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$arguments348 = array();
$arguments348['identifier'] = 'actions-refresh';
$arguments348['size'] = 'small';
$arguments348['overlay'] = NULL;
$arguments348['state'] = 'default';
$renderChildrenClosure349 = function() {return NULL;};

$output184 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments348, $renderChildrenClosure349, $renderingContext);

$output184 .= '
				</a>
			</li>
		</ul>
	</nav>
';
return $output184;
};

$output166 .= '';


return $output166;
}


}
#1443835946    90225     