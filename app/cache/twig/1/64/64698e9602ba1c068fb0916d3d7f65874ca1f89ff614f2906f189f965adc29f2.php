<?php

/* default/dashboard/index.tpl */
class __TwigTemplate_5fb118194dae9c8b2796f7747d776c4e7aba04100193291fcaf771887cf74dc0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        if (((isset($context["blocklist"]) ? $context["blocklist"] : null) == "")) {
            // line 2
            echo "<div id=\"columns\">
    <div class=\"row\">
        ";
            // line 4
            if ((twig_length_filter($this->env, (isset($context["columns"]) ? $context["columns"] : null)) > 0)) {
                // line 5
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["columns"]) ? $context["columns"] : null));
                foreach ($context['_seq'] as $context["key"] => $context["column"]) {
                    // line 6
                    echo "                <div id=\"";
                    echo $context["key"];
                    echo "\" class=\"col-md-6\">
                    ";
                    // line 7
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["column"]);
                    foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                        // line 8
                        echo "                        ";
                        echo $context["item"];
                        echo "
                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 10
                    echo "                </div>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['column'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 12
                echo "        ";
            } else {
                // line 13
                echo "         <div class=\"alert alert-info\" role=\"alert\">
             ";
                // line 14
                echo get_lang("YouHaveNotEnabledBlocks");
                echo "
         </div>
        ";
            }
            // line 17
            echo "    </div>
</div>
";
        } else {
            // line 20
            echo "    ";
            echo (isset($context["blocklist"]) ? $context["blocklist"] : null);
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "default/dashboard/index.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 20,  69 => 17,  63 => 14,  60 => 13,  57 => 12,  50 => 10,  41 => 8,  37 => 7,  32 => 6,  27 => 5,  25 => 4,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "default/dashboard/index.tpl", "C:\\xampp\\htdocs\\chamilo\\main\\template\\default\\dashboard\\index.tpl");
    }
}
