<?php

/* default/layout/page_body.tpl */
class __TwigTemplate_d2b5500b35a9620b3c9b29d55b973b76671a2e4eb567de36f0831d1a780f4e1e extends Twig_Template
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
        if (((isset($context["introduction"]) ? $context["introduction"] : null) != "")) {
            // line 2
            echo "    ";
            echo (isset($context["introduction"]) ? $context["introduction"] : null);
            echo "
";
        }
        // line 4
        echo "
";
        // line 5
        if (((isset($context["actions"]) ? $context["actions"] : null) != "")) {
            // line 6
            echo "    ";
            echo (isset($context["actions"]) ? $context["actions"] : null);
            echo "
";
        }
        // line 8
        echo "
";
        // line 9
        echo (isset($context["flash_messages"]) ? $context["flash_messages"] : null);
        echo "
";
        // line 10
        if (((isset($context["header"]) ? $context["header"] : null) != "")) {
            // line 11
            echo "    <div class=\"section-page\">
        <div class=\"page-header\">
            <h3>";
            // line 13
            echo (isset($context["header"]) ? $context["header"] : null);
            echo "</h3>
        </div>
    </div>
";
        }
        // line 17
        if (((isset($context["category"]) ? $context["category"] : null) != "")) {
            // line 18
            echo "<div class=\"section-category\">
    <div class=\"page-header\">
        <h3>";
            // line 20
            echo $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "name", array());
            echo "</h3>
    </div>
    <div class=\"description\">
        ";
            // line 23
            echo $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "description", array());
            echo "
    </div>
</div>
";
        }
        // line 27
        echo "
";
        // line 28
        if (((isset($context["message"]) ? $context["message"] : null) != "")) {
            // line 29
            echo "    <section id=\"messages\">
        ";
            // line 30
            echo (isset($context["message"]) ? $context["message"] : null);
            echo "
    </section>
";
        }
    }

    public function getTemplateName()
    {
        return "default/layout/page_body.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  80 => 28,  77 => 27,  70 => 23,  64 => 20,  60 => 18,  58 => 17,  51 => 13,  47 => 11,  45 => 10,  41 => 9,  38 => 8,  32 => 6,  30 => 5,  27 => 4,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "default/layout/page_body.tpl", "C:\\xampp\\htdocs\\chamilo\\main\\template\\default\\layout\\page_body.tpl");
    }
}
