<?php

class __Mustache_e4811f33560bece13f8742f892d93dc5 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $value = $context->find('maturity');
        $buffer .= $this->section299230dfed4fed10e9015bb6d7c1d7e7($context, $indent, $value);
        $value = $context->find('maturity');
        if (empty($value)) {
            
            $buffer .= $indent . '<h3>';
            $value = $this->resolveValue($context->find('versioninfo'), $context);
            $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
            $buffer .= '</h3>
';
        }
        $value = $context->find('versioncheck');
        $buffer .= $this->sectionC4d6d069bb1b600445bd3377fc7f23ad($context, $indent, $value);
        $buffer .= $indent . '<ul class="nav nav-tabs" role="tablist">
';
        $value = $context->find('tabs');
        $buffer .= $this->sectionF3c9f2147efa33fea3bd399975e4b380($context, $indent, $value);
        $buffer .= $indent . '</ul>
';
        $buffer .= $indent . '<div class="tab-content mt-3">
';
        $value = $context->find('tabs');
        $buffer .= $this->sectionF57dee0a414db8d47997bb46c4bb8c54($context, $indent, $value);
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '
';

        return $buffer;
    }

    private function section299230dfed4fed10e9015bb6d7c1d7e7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
<div class="alert alert-{{maturityalert}} mb-3">
<h3>{{versioninfo}}</h3>
{{{maturity}}}
</div>
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '<div class="alert alert-';
                $value = $this->resolveValue($context->find('maturityalert'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ' mb-3">
';
                $buffer .= $indent . '<h3>';
                $value = $this->resolveValue($context->find('versioninfo'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</h3>
';
                $value = $this->resolveValue($context->find('maturity'), $context);
                $buffer .= $indent . ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC4d6d069bb1b600445bd3377fc7f23ad(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
<div class="alert alert-warning mb-3">
{{{versioncheck}}}
</div>
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '<div class="alert alert-warning mb-3">
';
                $value = $this->resolveValue($context->find('versioncheck'), $context);
                $buffer .= $indent . ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5749c750acb0d7477dd5257d00cc6d53(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'active';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'active';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionCe04cacc15f032e9e9f826b761c9b814(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'aria-selected="true"';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'aria-selected="true"';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF3c9f2147efa33fea3bd399975e4b380(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <li class="nav-item">
            <a href="#{{name}}" class="nav-link {{#active}}active{{/active}}" data-toggle="tab" role="tab"
                {{#active}}aria-selected="true"{{/active}}
                {{^active}}aria-selected="false" tabindex="-1"{{/active}}>{{displayname}}</a>
        </li>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <li class="nav-item">
';
                $buffer .= $indent . '            <a href="#';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" class="nav-link ';
                $value = $context->find('active');
                $buffer .= $this->section5749c750acb0d7477dd5257d00cc6d53($context, $indent, $value);
                $buffer .= '" data-toggle="tab" role="tab"
';
                $buffer .= $indent . '                ';
                $value = $context->find('active');
                $buffer .= $this->sectionCe04cacc15f032e9e9f826b761c9b814($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                ';
                $value = $context->find('active');
                if (empty($value)) {
                    
                    $buffer .= 'aria-selected="false" tabindex="-1"';
                }
                $buffer .= '>';
                $value = $this->resolveValue($context->find('displayname'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</a>
';
                $buffer .= $indent . '        </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF57dee0a414db8d47997bb46c4bb8c54(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <div class="tab-pane {{#active}}active{{/active}}" id="{{name}}" role="tabpanel">
            {{{html}}}
        </div>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <div class="tab-pane ';
                $value = $context->find('active');
                $buffer .= $this->section5749c750acb0d7477dd5257d00cc6d53($context, $indent, $value);
                $buffer .= '" id="';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" role="tabpanel">
';
                $buffer .= $indent . '            ';
                $value = $this->resolveValue($context->find('html'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
