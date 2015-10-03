<?php
class FluidCache_Extensionmanager_List_action_ter_f341efe7759017f262cc61d7a3326cf8899954e4 extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
$arguments9['key'] = 'getExtensions';
$arguments9['id'] = NULL;
$arguments9['default'] = NULL;
$arguments9['htmlEscape'] = NULL;
$arguments9['arguments'] = NULL;
$arguments9['extensionName'] = NULL;
$renderChildrenClosure10 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return 'Get Extensions';
};

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

	<div class="row">
		<div class="col-sm-6">
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper
$arguments17 = array();
$arguments17['class'] = 'typo3-extensionmanager-searchTerForm form-inline';
$arguments17['action'] = 'ter';
$arguments17['additionalAttributes'] = NULL;
$arguments17['data'] = NULL;
$arguments17['arguments'] = array (
);
$arguments17['controller'] = NULL;
$arguments17['extensionName'] = NULL;
$arguments17['pluginName'] = NULL;
$arguments17['pageUid'] = NULL;
$arguments17['object'] = NULL;
$arguments17['pageType'] = 0;
$arguments17['noCache'] = false;
$arguments17['noCacheHash'] = false;
$arguments17['section'] = '';
$arguments17['format'] = '';
$arguments17['additionalParams'] = array (
);
$arguments17['absolute'] = false;
$arguments17['addQueryString'] = false;
$arguments17['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments17['fieldNamePrefix'] = NULL;
$arguments17['actionUri'] = NULL;
$arguments17['objectName'] = NULL;
$arguments17['hiddenFieldClassName'] = NULL;
$arguments17['enctype'] = NULL;
$arguments17['method'] = NULL;
$arguments17['name'] = NULL;
$arguments17['onreset'] = NULL;
$arguments17['onsubmit'] = NULL;
$arguments17['dir'] = NULL;
$arguments17['id'] = NULL;
$arguments17['lang'] = NULL;
$arguments17['style'] = NULL;
$arguments17['title'] = NULL;
$arguments17['accesskey'] = NULL;
$arguments17['tabindex'] = NULL;
$arguments17['onclick'] = NULL;
$renderChildrenClosure18 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output19 = '';

$output19 .= '
				<div class="input-group">
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$arguments20 = array();
$arguments20['name'] = 'search';
$arguments20['value'] = $currentVariableContainer->getOrNull('search');
$arguments20['class'] = 'form-control';
$arguments20['additionalAttributes'] = NULL;
$arguments20['data'] = NULL;
$arguments20['required'] = false;
$arguments20['type'] = 'text';
$arguments20['property'] = NULL;
$arguments20['autofocus'] = NULL;
$arguments20['disabled'] = NULL;
$arguments20['maxlength'] = NULL;
$arguments20['readonly'] = NULL;
$arguments20['size'] = NULL;
$arguments20['placeholder'] = NULL;
$arguments20['pattern'] = NULL;
$arguments20['errorClass'] = 'f3-form-error';
$arguments20['dir'] = NULL;
$arguments20['id'] = NULL;
$arguments20['lang'] = NULL;
$arguments20['style'] = NULL;
$arguments20['title'] = NULL;
$arguments20['accesskey'] = NULL;
$arguments20['tabindex'] = NULL;
$arguments20['onclick'] = NULL;
$renderChildrenClosure21 = function() {return NULL;};
$viewHelper22 = $self->getViewHelper('$viewHelper22', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper');
$viewHelper22->setArguments($arguments20);
$viewHelper22->setRenderingContext($renderingContext);
$viewHelper22->setRenderChildrenClosure($renderChildrenClosure21);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper

$output19 .= $viewHelper22->initializeArgumentsAndRender();

$output19 .= '
					<span class="input-group-btn">
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper
$arguments23 = array();
$arguments23['class'] = 'btn btn-default';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments24 = array();
$arguments24['key'] = 'searchTemplate.submitButton';
$arguments24['id'] = NULL;
$arguments24['default'] = NULL;
$arguments24['htmlEscape'] = NULL;
$arguments24['arguments'] = NULL;
$arguments24['extensionName'] = NULL;
$renderChildrenClosure25 = function() {return NULL;};
$arguments23['value'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments24, $renderChildrenClosure25, $renderingContext);
$arguments23['additionalAttributes'] = NULL;
$arguments23['data'] = NULL;
$arguments23['name'] = NULL;
$arguments23['property'] = NULL;
$arguments23['disabled'] = NULL;
$arguments23['dir'] = NULL;
$arguments23['id'] = NULL;
$arguments23['lang'] = NULL;
$arguments23['style'] = NULL;
$arguments23['title'] = NULL;
$arguments23['accesskey'] = NULL;
$arguments23['tabindex'] = NULL;
$arguments23['onclick'] = NULL;
$renderChildrenClosure26 = function() {return NULL;};
$viewHelper27 = $self->getViewHelper('$viewHelper27', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper');
$viewHelper27->setArguments($arguments23);
$viewHelper27->setRenderingContext($renderingContext);
$viewHelper27->setRenderChildrenClosure($renderChildrenClosure26);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper

$output19 .= $viewHelper27->initializeArgumentsAndRender();

$output19 .= '
					</span>
				</div>
			';
return $output19;
};
$viewHelper28 = $self->getViewHelper('$viewHelper28', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper');
$viewHelper28->setArguments($arguments17);
$viewHelper28->setRenderingContext($renderingContext);
$viewHelper28->setRenderChildrenClosure($renderChildrenClosure18);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper

$output11 .= $viewHelper28->initializeArgumentsAndRender();

$output11 .= '
		</div>
		<div class="col-sm-6">
			<div class="pull-right">
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments29 = array();
$arguments29['partial'] = 'List/UpdateFromTer';
$arguments29['section'] = NULL;
$arguments29['arguments'] = array (
);
$arguments29['optional'] = false;
$renderChildrenClosure30 = function() {return NULL;};

$output11 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments29, $renderChildrenClosure30, $renderingContext);

$output11 .= '
			</div>
		</div>
	</div>

	<div id="terTableWrapper">
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments31 = array();
// Rendering Boolean node
$arguments31['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean($currentVariableContainer->getOrNull('search'));
$arguments31['then'] = NULL;
$arguments31['else'] = NULL;
$renderChildrenClosure32 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output33 = '';

$output33 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments34 = array();
$renderChildrenClosure35 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output36 = '';

$output36 .= '
				<table id="terSearchTable" class="table table-striped table-hover typo3-extension-list">
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments37 = array();
$arguments37['partial'] = 'List/TerTable';
// Rendering Array
$array38 = array();
$array38['paginatedExtensions'] = $currentVariableContainer->getOrNull('extensions');
$array38['availableAndInstalled'] = $currentVariableContainer->getOrNull('availableAndInstalled');
$arguments37['arguments'] = $array38;
$arguments37['section'] = NULL;
$arguments37['optional'] = false;
$renderChildrenClosure39 = function() {return NULL;};

$output36 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments37, $renderChildrenClosure39, $renderingContext);

$output36 .= '
				</table>
			';
return $output36;
};

$output33 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments34, $renderChildrenClosure35, $renderingContext);

$output33 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments40 = array();
$renderChildrenClosure41 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output42 = '';

$output42 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments43 = array();
$arguments43['partial'] = 'List/TerPaginator';
// Rendering Array
$array44 = array();
$array44['extensions'] = $currentVariableContainer->getOrNull('extensions');
$array44['showVersionList'] = $currentVariableContainer->getOrNull('showVersionList');
$array44['availableAndInstalled'] = $currentVariableContainer->getOrNull('availableAndInstalled');
$arguments43['arguments'] = $array44;
$arguments43['section'] = NULL;
$arguments43['optional'] = false;
$renderChildrenClosure45 = function() {return NULL;};

$output42 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments43, $renderChildrenClosure45, $renderingContext);

$output42 .= '
			';
return $output42;
};

$output33 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments40, $renderChildrenClosure41, $renderingContext);

$output33 .= '
		';
return $output33;
};
$arguments31['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output46 = '';

$output46 .= '
				<table id="terSearchTable" class="table table-striped table-hover typo3-extension-list">
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments47 = array();
$arguments47['partial'] = 'List/TerTable';
// Rendering Array
$array48 = array();
$array48['paginatedExtensions'] = $currentVariableContainer->getOrNull('extensions');
$array48['availableAndInstalled'] = $currentVariableContainer->getOrNull('availableAndInstalled');
$arguments47['arguments'] = $array48;
$arguments47['section'] = NULL;
$arguments47['optional'] = false;
$renderChildrenClosure49 = function() {return NULL;};

$output46 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments47, $renderChildrenClosure49, $renderingContext);

$output46 .= '
				</table>
			';
return $output46;
};
$arguments31['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output50 = '';

$output50 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments51 = array();
$arguments51['partial'] = 'List/TerPaginator';
// Rendering Array
$array52 = array();
$array52['extensions'] = $currentVariableContainer->getOrNull('extensions');
$array52['showVersionList'] = $currentVariableContainer->getOrNull('showVersionList');
$array52['availableAndInstalled'] = $currentVariableContainer->getOrNull('availableAndInstalled');
$arguments51['arguments'] = $array52;
$arguments51['section'] = NULL;
$arguments51['optional'] = false;
$renderChildrenClosure53 = function() {return NULL;};

$output50 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments51, $renderChildrenClosure53, $renderingContext);

$output50 .= '
			';
return $output50;
};

$output11 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments31, $renderChildrenClosure32, $renderingContext);

$output11 .= '
		<div class="splash-receivedata x-mask-loading">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$arguments54 = array();
$arguments54['identifier'] = 'spinner-circle-dark';
$arguments54['size'] = 'small';
$arguments54['overlay'] = NULL;
$arguments54['state'] = 'default';
$renderChildrenClosure55 = function() {return NULL;};

$output11 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments54, $renderChildrenClosure55, $renderingContext);

$output11 .= ' ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments56 = array();
$arguments56['key'] = 'extensionList.updateFromTer.label';
$arguments56['id'] = NULL;
$arguments56['default'] = NULL;
$arguments56['htmlEscape'] = NULL;
$arguments56['arguments'] = NULL;
$arguments56['extensionName'] = NULL;
$renderChildrenClosure57 = function() {return NULL;};

$output11 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments56, $renderChildrenClosure57, $renderingContext);

$output11 .= '</div>
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

$output58 = '';

$output58 .= '

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper
$arguments59 = array();
$arguments59['name'] = 'main';
$renderChildrenClosure60 = function() {return NULL;};
$viewHelper61 = $self->getViewHelper('$viewHelper61', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper');
$viewHelper61->setArguments($arguments59);
$viewHelper61->setRenderingContext($renderingContext);
$viewHelper61->setRenderChildrenClosure($renderChildrenClosure60);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper

$output58 .= $viewHelper61->initializeArgumentsAndRender();

$output58 .= '

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments62 = array();
$arguments62['name'] = 'docheader-buttons';
$renderChildrenClosure63 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output64 = '';

$output64 .= '
	<div id="upload-button-wrap">
		<a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$arguments65 = array();
$arguments65['action'] = 'form';
$arguments65['controller'] = 'UploadExtensionFile';
$arguments65['arguments'] = array (
);
$arguments65['extensionName'] = NULL;
$arguments65['pluginName'] = NULL;
$arguments65['pageUid'] = NULL;
$arguments65['pageType'] = 0;
$arguments65['noCache'] = false;
$arguments65['noCacheHash'] = false;
$arguments65['section'] = '';
$arguments65['format'] = '';
$arguments65['linkAccessRestrictedPages'] = false;
$arguments65['additionalParams'] = array (
);
$arguments65['absolute'] = false;
$arguments65['addQueryString'] = false;
$arguments65['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments65['addQueryStringMethod'] = NULL;
$renderChildrenClosure66 = function() {return NULL;};
$viewHelper67 = $self->getViewHelper('$viewHelper67', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper');
$viewHelper67->setArguments($arguments65);
$viewHelper67->setRenderingContext($renderingContext);
$viewHelper67->setRenderChildrenClosure($renderChildrenClosure66);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper

$output64 .= $viewHelper67->initializeArgumentsAndRender();

$output64 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments68 = array();
$arguments68['key'] = 'extensionList.uploadExtension';
$arguments68['id'] = NULL;
$arguments68['default'] = NULL;
$arguments68['htmlEscape'] = NULL;
$arguments68['arguments'] = NULL;
$arguments68['extensionName'] = NULL;
$renderChildrenClosure69 = function() {return NULL;};

$output64 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments68, $renderChildrenClosure69, $renderingContext);

$output64 .= '">
			';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$arguments70 = array();
$arguments70['identifier'] = 'actions-edit-upload';
$arguments70['size'] = 'small';
$arguments70['overlay'] = NULL;
$arguments70['state'] = 'default';
$renderChildrenClosure71 = function() {return NULL;};

$output64 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments70, $renderChildrenClosure71, $renderingContext);

$output64 .= '
		</a>
	</div>
';
return $output64;
};

$output58 .= '';

$output58 .= '

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments72 = array();
$arguments72['name'] = 'module-headline';
$renderChildrenClosure73 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output74 = '';

$output74 .= '
	<h1>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments75 = array();
$arguments75['key'] = 'getExtensions';
$arguments75['id'] = NULL;
$arguments75['default'] = NULL;
$arguments75['htmlEscape'] = NULL;
$arguments75['arguments'] = NULL;
$arguments75['extensionName'] = NULL;
$renderChildrenClosure76 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return 'Get Extensions';
};

$output74 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments75, $renderChildrenClosure76, $renderingContext);

$output74 .= '</h1>
';
return $output74;
};

$output58 .= '';

$output58 .= '

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments77 = array();
$arguments77['name'] = 'Content';
$renderChildrenClosure78 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output79 = '';

$output79 .= '
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FlashMessagesViewHelper
$arguments80 = array();
$arguments80['additionalAttributes'] = NULL;
$arguments80['data'] = NULL;
$arguments80['renderMode'] = NULL;
$arguments80['as'] = NULL;
$arguments80['class'] = NULL;
$arguments80['dir'] = NULL;
$arguments80['id'] = NULL;
$arguments80['lang'] = NULL;
$arguments80['style'] = NULL;
$arguments80['title'] = NULL;
$arguments80['accesskey'] = NULL;
$arguments80['tabindex'] = NULL;
$arguments80['onclick'] = NULL;
$arguments80['queueIdentifier'] = NULL;
$renderChildrenClosure81 = function() {return NULL;};
$viewHelper82 = $self->getViewHelper('$viewHelper82', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\FlashMessagesViewHelper');
$viewHelper82->setArguments($arguments80);
$viewHelper82->setRenderingContext($renderingContext);
$viewHelper82->setRenderChildrenClosure($renderChildrenClosure81);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FlashMessagesViewHelper

$output79 .= $viewHelper82->initializeArgumentsAndRender();

$output79 .= '

	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments83 = array();
$arguments83['partial'] = 'List/UploadForm';
$arguments83['section'] = NULL;
$arguments83['arguments'] = array (
);
$arguments83['optional'] = false;
$renderChildrenClosure84 = function() {return NULL;};

$output79 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments83, $renderChildrenClosure84, $renderingContext);

$output79 .= '

	<div class="row">
		<div class="col-sm-6">
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper
$arguments85 = array();
$arguments85['class'] = 'typo3-extensionmanager-searchTerForm form-inline';
$arguments85['action'] = 'ter';
$arguments85['additionalAttributes'] = NULL;
$arguments85['data'] = NULL;
$arguments85['arguments'] = array (
);
$arguments85['controller'] = NULL;
$arguments85['extensionName'] = NULL;
$arguments85['pluginName'] = NULL;
$arguments85['pageUid'] = NULL;
$arguments85['object'] = NULL;
$arguments85['pageType'] = 0;
$arguments85['noCache'] = false;
$arguments85['noCacheHash'] = false;
$arguments85['section'] = '';
$arguments85['format'] = '';
$arguments85['additionalParams'] = array (
);
$arguments85['absolute'] = false;
$arguments85['addQueryString'] = false;
$arguments85['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments85['fieldNamePrefix'] = NULL;
$arguments85['actionUri'] = NULL;
$arguments85['objectName'] = NULL;
$arguments85['hiddenFieldClassName'] = NULL;
$arguments85['enctype'] = NULL;
$arguments85['method'] = NULL;
$arguments85['name'] = NULL;
$arguments85['onreset'] = NULL;
$arguments85['onsubmit'] = NULL;
$arguments85['dir'] = NULL;
$arguments85['id'] = NULL;
$arguments85['lang'] = NULL;
$arguments85['style'] = NULL;
$arguments85['title'] = NULL;
$arguments85['accesskey'] = NULL;
$arguments85['tabindex'] = NULL;
$arguments85['onclick'] = NULL;
$renderChildrenClosure86 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output87 = '';

$output87 .= '
				<div class="input-group">
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$arguments88 = array();
$arguments88['name'] = 'search';
$arguments88['value'] = $currentVariableContainer->getOrNull('search');
$arguments88['class'] = 'form-control';
$arguments88['additionalAttributes'] = NULL;
$arguments88['data'] = NULL;
$arguments88['required'] = false;
$arguments88['type'] = 'text';
$arguments88['property'] = NULL;
$arguments88['autofocus'] = NULL;
$arguments88['disabled'] = NULL;
$arguments88['maxlength'] = NULL;
$arguments88['readonly'] = NULL;
$arguments88['size'] = NULL;
$arguments88['placeholder'] = NULL;
$arguments88['pattern'] = NULL;
$arguments88['errorClass'] = 'f3-form-error';
$arguments88['dir'] = NULL;
$arguments88['id'] = NULL;
$arguments88['lang'] = NULL;
$arguments88['style'] = NULL;
$arguments88['title'] = NULL;
$arguments88['accesskey'] = NULL;
$arguments88['tabindex'] = NULL;
$arguments88['onclick'] = NULL;
$renderChildrenClosure89 = function() {return NULL;};
$viewHelper90 = $self->getViewHelper('$viewHelper90', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper');
$viewHelper90->setArguments($arguments88);
$viewHelper90->setRenderingContext($renderingContext);
$viewHelper90->setRenderChildrenClosure($renderChildrenClosure89);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper

$output87 .= $viewHelper90->initializeArgumentsAndRender();

$output87 .= '
					<span class="input-group-btn">
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper
$arguments91 = array();
$arguments91['class'] = 'btn btn-default';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments92 = array();
$arguments92['key'] = 'searchTemplate.submitButton';
$arguments92['id'] = NULL;
$arguments92['default'] = NULL;
$arguments92['htmlEscape'] = NULL;
$arguments92['arguments'] = NULL;
$arguments92['extensionName'] = NULL;
$renderChildrenClosure93 = function() {return NULL;};
$arguments91['value'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments92, $renderChildrenClosure93, $renderingContext);
$arguments91['additionalAttributes'] = NULL;
$arguments91['data'] = NULL;
$arguments91['name'] = NULL;
$arguments91['property'] = NULL;
$arguments91['disabled'] = NULL;
$arguments91['dir'] = NULL;
$arguments91['id'] = NULL;
$arguments91['lang'] = NULL;
$arguments91['style'] = NULL;
$arguments91['title'] = NULL;
$arguments91['accesskey'] = NULL;
$arguments91['tabindex'] = NULL;
$arguments91['onclick'] = NULL;
$renderChildrenClosure94 = function() {return NULL;};
$viewHelper95 = $self->getViewHelper('$viewHelper95', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper');
$viewHelper95->setArguments($arguments91);
$viewHelper95->setRenderingContext($renderingContext);
$viewHelper95->setRenderChildrenClosure($renderChildrenClosure94);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper

$output87 .= $viewHelper95->initializeArgumentsAndRender();

$output87 .= '
					</span>
				</div>
			';
return $output87;
};
$viewHelper96 = $self->getViewHelper('$viewHelper96', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper');
$viewHelper96->setArguments($arguments85);
$viewHelper96->setRenderingContext($renderingContext);
$viewHelper96->setRenderChildrenClosure($renderChildrenClosure86);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper

$output79 .= $viewHelper96->initializeArgumentsAndRender();

$output79 .= '
		</div>
		<div class="col-sm-6">
			<div class="pull-right">
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments97 = array();
$arguments97['partial'] = 'List/UpdateFromTer';
$arguments97['section'] = NULL;
$arguments97['arguments'] = array (
);
$arguments97['optional'] = false;
$renderChildrenClosure98 = function() {return NULL;};

$output79 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments97, $renderChildrenClosure98, $renderingContext);

$output79 .= '
			</div>
		</div>
	</div>

	<div id="terTableWrapper">
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments99 = array();
// Rendering Boolean node
$arguments99['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean($currentVariableContainer->getOrNull('search'));
$arguments99['then'] = NULL;
$arguments99['else'] = NULL;
$renderChildrenClosure100 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output101 = '';

$output101 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments102 = array();
$renderChildrenClosure103 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output104 = '';

$output104 .= '
				<table id="terSearchTable" class="table table-striped table-hover typo3-extension-list">
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments105 = array();
$arguments105['partial'] = 'List/TerTable';
// Rendering Array
$array106 = array();
$array106['paginatedExtensions'] = $currentVariableContainer->getOrNull('extensions');
$array106['availableAndInstalled'] = $currentVariableContainer->getOrNull('availableAndInstalled');
$arguments105['arguments'] = $array106;
$arguments105['section'] = NULL;
$arguments105['optional'] = false;
$renderChildrenClosure107 = function() {return NULL;};

$output104 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments105, $renderChildrenClosure107, $renderingContext);

$output104 .= '
				</table>
			';
return $output104;
};

$output101 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments102, $renderChildrenClosure103, $renderingContext);

$output101 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments108 = array();
$renderChildrenClosure109 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output110 = '';

$output110 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments111 = array();
$arguments111['partial'] = 'List/TerPaginator';
// Rendering Array
$array112 = array();
$array112['extensions'] = $currentVariableContainer->getOrNull('extensions');
$array112['showVersionList'] = $currentVariableContainer->getOrNull('showVersionList');
$array112['availableAndInstalled'] = $currentVariableContainer->getOrNull('availableAndInstalled');
$arguments111['arguments'] = $array112;
$arguments111['section'] = NULL;
$arguments111['optional'] = false;
$renderChildrenClosure113 = function() {return NULL;};

$output110 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments111, $renderChildrenClosure113, $renderingContext);

$output110 .= '
			';
return $output110;
};

$output101 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments108, $renderChildrenClosure109, $renderingContext);

$output101 .= '
		';
return $output101;
};
$arguments99['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output114 = '';

$output114 .= '
				<table id="terSearchTable" class="table table-striped table-hover typo3-extension-list">
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments115 = array();
$arguments115['partial'] = 'List/TerTable';
// Rendering Array
$array116 = array();
$array116['paginatedExtensions'] = $currentVariableContainer->getOrNull('extensions');
$array116['availableAndInstalled'] = $currentVariableContainer->getOrNull('availableAndInstalled');
$arguments115['arguments'] = $array116;
$arguments115['section'] = NULL;
$arguments115['optional'] = false;
$renderChildrenClosure117 = function() {return NULL;};

$output114 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments115, $renderChildrenClosure117, $renderingContext);

$output114 .= '
				</table>
			';
return $output114;
};
$arguments99['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output118 = '';

$output118 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments119 = array();
$arguments119['partial'] = 'List/TerPaginator';
// Rendering Array
$array120 = array();
$array120['extensions'] = $currentVariableContainer->getOrNull('extensions');
$array120['showVersionList'] = $currentVariableContainer->getOrNull('showVersionList');
$array120['availableAndInstalled'] = $currentVariableContainer->getOrNull('availableAndInstalled');
$arguments119['arguments'] = $array120;
$arguments119['section'] = NULL;
$arguments119['optional'] = false;
$renderChildrenClosure121 = function() {return NULL;};

$output118 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments119, $renderChildrenClosure121, $renderingContext);

$output118 .= '
			';
return $output118;
};

$output79 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments99, $renderChildrenClosure100, $renderingContext);

$output79 .= '
		<div class="splash-receivedata x-mask-loading">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$arguments122 = array();
$arguments122['identifier'] = 'spinner-circle-dark';
$arguments122['size'] = 'small';
$arguments122['overlay'] = NULL;
$arguments122['state'] = 'default';
$renderChildrenClosure123 = function() {return NULL;};

$output79 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments122, $renderChildrenClosure123, $renderingContext);

$output79 .= ' ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments124 = array();
$arguments124['key'] = 'extensionList.updateFromTer.label';
$arguments124['id'] = NULL;
$arguments124['default'] = NULL;
$arguments124['htmlEscape'] = NULL;
$arguments124['arguments'] = NULL;
$arguments124['extensionName'] = NULL;
$renderChildrenClosure125 = function() {return NULL;};

$output79 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments124, $renderChildrenClosure125, $renderingContext);

$output79 .= '</div>
	</div>

';
return $output79;
};

$output58 .= '';

$output58 .= '
';


return $output58;
}


}
#1443835946    36245     