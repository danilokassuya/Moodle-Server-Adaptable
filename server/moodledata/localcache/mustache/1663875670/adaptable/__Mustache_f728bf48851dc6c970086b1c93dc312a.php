<?php

class __Mustache_f728bf48851dc6c970086b1c93dc312a extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        $buffer .= $indent . '<div class="form-item row">
';
        $buffer .= $indent . '    <div class="form-label col-12">
';
        $buffer .= $indent . '        <h1>';
        $value = $this->resolveValue($context->find('title'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '</h1>
';
        $buffer .= $indent . '        <p>';
        $value = $this->resolveValue($context->find('description'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '</p>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '    <div class="form-setting col-12">
';
        $buffer .= $indent . '        <div>';
        $value = $this->resolveValue($context->find('markdown'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '</div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }
}
