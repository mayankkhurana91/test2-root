<?php

class Standard_action_PageZero_31566532ae9a9c74269fa06d907bd2183c1518a0 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this; 
return (string) '';
}
public function hasLayout() {
return FALSE;
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
));
}

/**
 * section PageZeroTableRow
 */
public function section_b1edc275d881f3156f547d1f0d6261281c53f832(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '
    <tr class="';
$array1 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.class', $array1)]);

$output0 .= '">
        <td class="nowrap">
            <span style="width: 1px; height: 1px; display:inline-block; margin-left: ';
$array2 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.marginLeft', $array2)]);

$output0 .= 'px"></span>
            <a href="';
$array3 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.href', $array3)]);

$output0 .= '" title="';
$array4 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.title', $array4)]);

$output0 .= '">
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure6 = function() use ($renderingContext, $self) {
$array7 = array (
);return $renderingContext->getVariableProvider()->getByPath('line.icon', $array7);
};
$arguments5 = array();
$arguments5['value'] = NULL;

$output0 .= isset($arguments5['value']) ? $arguments5['value'] : $renderChildrenClosure6();

$output0 .= '
                ';
$array8 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.pageTitle', $array8)]);

$output0 .= '
            </a>
        </td>
        <td>';
$array9 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.count', $array9)]);

$output0 .= '</td>
        <td>';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure11 = function() use ($renderingContext, $self) {
$array12 = array (
);return $renderingContext->getVariableProvider()->getByPath('line.root_max_val', $array12);
};
$arguments10 = array();
$arguments10['value'] = NULL;

$output0 .= isset($arguments10['value']) ? $arguments10['value'] : $renderChildrenClosure11();

$output0 .= '</td>
        <td>';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure14 = function() use ($renderingContext, $self) {
$array15 = array (
);return $renderingContext->getVariableProvider()->getByPath('line.root_min_val', $array15);
};
$arguments13 = array();
$arguments13['value'] = NULL;

$output0 .= isset($arguments13['value']) ? $arguments13['value'] : $renderChildrenClosure14();

$output0 .= '</td>
    </tr>
';

return $output0;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output16 = '';

$output16 .= '<h1>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure18 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments17 = array();
$arguments17['key'] = NULL;
$arguments17['id'] = NULL;
$arguments17['default'] = NULL;
$arguments17['htmlEscape'] = NULL;
$arguments17['arguments'] = NULL;
$arguments17['extensionName'] = NULL;
$arguments17['key'] = 'moduleTitle';

$output16 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments17, $renderChildrenClosure18, $renderingContext)]);

$output16 .= '</h1>
<div>
    <p class="lead">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure20 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments19 = array();
$arguments19['key'] = NULL;
$arguments19['id'] = NULL;
$arguments19['default'] = NULL;
$arguments19['htmlEscape'] = NULL;
$arguments19['arguments'] = NULL;
$arguments19['extensionName'] = NULL;
$arguments19['key'] = 'overview';

$output16 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments19, $renderChildrenClosure20, $renderingContext)]);

$output16 .= '</p>
    <div class="table-fit">
        <table class="table table-striped table-hover" id="ts-overview">
        <thead>
            <tr>
                <th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure22 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments21 = array();
$arguments21['key'] = NULL;
$arguments21['id'] = NULL;
$arguments21['default'] = NULL;
$arguments21['htmlEscape'] = NULL;
$arguments21['arguments'] = NULL;
$arguments21['extensionName'] = NULL;
$arguments21['key'] = 'pageName';

$output16 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments21, $renderChildrenClosure22, $renderingContext)]);

$output16 .= '</th>
                <th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure24 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments23 = array();
$arguments23['key'] = NULL;
$arguments23['id'] = NULL;
$arguments23['default'] = NULL;
$arguments23['htmlEscape'] = NULL;
$arguments23['arguments'] = NULL;
$arguments23['extensionName'] = NULL;
$arguments23['key'] = 'templates';

$output16 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments23, $renderChildrenClosure24, $renderingContext)]);

$output16 .= '</th>
                <th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure26 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments25 = array();
$arguments25['key'] = NULL;
$arguments25['id'] = NULL;
$arguments25['default'] = NULL;
$arguments25['htmlEscape'] = NULL;
$arguments25['arguments'] = NULL;
$arguments25['extensionName'] = NULL;
$arguments25['key'] = 'isRoot';

$output16 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments25, $renderChildrenClosure26, $renderingContext)]);

$output16 .= '</th>
                <th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure28 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments27 = array();
$arguments27['key'] = NULL;
$arguments27['id'] = NULL;
$arguments27['default'] = NULL;
$arguments27['htmlEscape'] = NULL;
$arguments27['arguments'] = NULL;
$arguments27['extensionName'] = NULL;
$arguments27['key'] = 'isExt';

$output16 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments27, $renderChildrenClosure28, $renderingContext)]);

$output16 .= '</th>
            </tr>
        </thead>
        <tbody>
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure30 = function() use ($renderingContext, $self) {
$output32 = '';

$output32 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure34 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments33 = array();
$arguments33['section'] = NULL;
$arguments33['partial'] = NULL;
$arguments33['delegate'] = NULL;
$arguments33['renderable'] = NULL;
$arguments33['arguments'] = array (
);
$arguments33['optional'] = false;
$arguments33['default'] = NULL;
$arguments33['contentAs'] = NULL;
$arguments33['section'] = 'PageZeroTableRow';
// Rendering Array
$array35 = array();
$array36 = array (
);$array35['line'] = $renderingContext->getVariableProvider()->getByPath('line', $array36);
$arguments33['arguments'] = $array35;

$output32 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments33, $renderChildrenClosure34, $renderingContext);

$output32 .= '
            ';
return $output32;
};
$arguments29 = array();
$arguments29['each'] = NULL;
$arguments29['as'] = NULL;
$arguments29['key'] = NULL;
$arguments29['reverse'] = false;
$arguments29['iteration'] = NULL;
$array31 = array (
);$arguments29['each'] = $renderingContext->getVariableProvider()->getByPath('templateList', $array31);
$arguments29['as'] = 'line';

$output16 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments29, $renderChildrenClosure30, $renderingContext);

$output16 .= '
        </tbody>
        </table>
    </div>
</div>

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure38 = function() use ($renderingContext, $self) {
$output39 = '';

$output39 .= '
    <tr class="';
$array40 = array (
);
$output39 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.class', $array40)]);

$output39 .= '">
        <td class="nowrap">
            <span style="width: 1px; height: 1px; display:inline-block; margin-left: ';
$array41 = array (
);
$output39 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.marginLeft', $array41)]);

$output39 .= 'px"></span>
            <a href="';
$array42 = array (
);
$output39 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.href', $array42)]);

$output39 .= '" title="';
$array43 = array (
);
$output39 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.title', $array43)]);

$output39 .= '">
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure45 = function() use ($renderingContext, $self) {
$array46 = array (
);return $renderingContext->getVariableProvider()->getByPath('line.icon', $array46);
};
$arguments44 = array();
$arguments44['value'] = NULL;

$output39 .= isset($arguments44['value']) ? $arguments44['value'] : $renderChildrenClosure45();

$output39 .= '
                ';
$array47 = array (
);
$output39 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.pageTitle', $array47)]);

$output39 .= '
            </a>
        </td>
        <td>';
$array48 = array (
);
$output39 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.count', $array48)]);

$output39 .= '</td>
        <td>';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure50 = function() use ($renderingContext, $self) {
$array51 = array (
);return $renderingContext->getVariableProvider()->getByPath('line.root_max_val', $array51);
};
$arguments49 = array();
$arguments49['value'] = NULL;

$output39 .= isset($arguments49['value']) ? $arguments49['value'] : $renderChildrenClosure50();

$output39 .= '</td>
        <td>';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure53 = function() use ($renderingContext, $self) {
$array54 = array (
);return $renderingContext->getVariableProvider()->getByPath('line.root_min_val', $array54);
};
$arguments52 = array();
$arguments52['value'] = NULL;

$output39 .= isset($arguments52['value']) ? $arguments52['value'] : $renderChildrenClosure53();

$output39 .= '</td>
    </tr>
';
return $output39;
};
$arguments37 = array();
$arguments37['name'] = NULL;
$arguments37['name'] = 'PageZeroTableRow';

$output16 .= NULL;

$output16 .= '
';

return $output16;
}


}
#