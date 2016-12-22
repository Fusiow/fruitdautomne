<?php

/* PrestaShopBundle:Admin/Module/Includes:tab-module-line.html.twig */
class __TwigTemplate_bbbf7c2fd07b9b9d53c7d8babe1ce9fc62026a9d0b32d2aa1680d6e8d188755e extends Twig_Template
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
        // line 25
        echo "<tr>
  <td class=\"fixed-with-sm center\">
    <img
      class=\"img-thumbnail\"
      alt=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["module"]) ? $context["module"] : null), "attributes", array()), "name", array()), "html", null, true);
        echo "\"
      src=\"";
        // line 30
        echo twig_escape_filter($this->env, (((twig_constant("_MODULE_DIR_") . $this->getAttribute($this->getAttribute((isset($context["module"]) ? $context["module"] : null), "attributes", array()), "name", array())) . "/") . $this->getAttribute($this->getAttribute((isset($context["module"]) ? $context["module"] : null), "attributes", array()), "logo", array())), "html", null, true);
        echo "\"
    />
  </td>
  <td>
    <div id=\"anchor";
        // line 34
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["module"]) ? $context["module"] : null), "attributes", array()), "name", array())), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["module"]) ? $context["module"] : null), "attributes", array()), "displayName", array()), "html", null, true);
        echo "\">
      <div class=\"module_name\">
        <span style=\"display:none\">";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["module"]) ? $context["module"] : null), "attributes", array()), "name", array()), "html", null, true);
        echo "</span>
        ";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["module"]) ? $context["module"] : null), "attributes", array()), "displayName", array()), "html", null, true);
        echo "
        <small class=\"text-muted\">v";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["module"]) ? $context["module"] : null), "attributes", array()), "version", array()), "html", null, true);
        echo " - by ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["module"]) ? $context["module"] : null), "attributes", array()), "author", array()), "html", null, true);
        echo "</small>
        ";
        // line 39
        if (( !twig_test_empty($this->getAttribute($this->getAttribute((isset($context["module"]) ? $context["module"] : null), "attributes", array()), "type", array())) && ($this->getAttribute($this->getAttribute((isset($context["module"]) ? $context["module"] : null), "attributes", array()), "type", array()) == "addonsBought"))) {
            // line 40
            echo "        - <span class=\"module-badge-bought help-tooltip text-warning\" data-title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("You bought this module on PrestaShop Addons. Thank You.", array()), "html", null, true);
            echo "\"><i class=\"icon-pushpin\"></i> <small>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Bought", array()), "html", null, true);
            echo "</small></span>
        ";
        } elseif (( !twig_test_empty($this->getAttribute($this->getAttribute(        // line 41
(isset($context["module"]) ? $context["module"] : null), "attributes", array()), "type", array())) && ($this->getAttribute($this->getAttribute((isset($context["module"]) ? $context["module"] : null), "attributes", array()), "type", array()) == "addonsMustHave"))) {
            // line 42
            echo "        - <span class=\"module-badge-popular help-tooltip text-primary\" data-title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("This module is available on PrestaShop Addons.", array()), "html", null, true);
            echo "\"><i class=\"icon-group\"></i> <small>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Popular", array()), "html", null, true);
            echo "</small></span>
        ";
        } elseif (( !twig_test_empty($this->getAttribute($this->getAttribute(        // line 43
(isset($context["module"]) ? $context["module"] : null), "attributes", array()), "type", array())) && ($this->getAttribute($this->getAttribute((isset($context["module"]) ? $context["module"] : null), "attributes", array()), "type", array()) == "addonsPartner"))) {
            // line 44
            echo "        - <span class=\"module-badge-partner help-tooltip text-warning\" data-title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("This module is available for free thanks to our partner.", array()), "html", null, true);
            echo "\"><i class=\"icon-pushpin\"></i> <small>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Official", array()), "html", null, true);
            echo "</small></span>
        ";
        } elseif (($this->getAttribute($this->getAttribute(        // line 45
(isset($context["module"]) ? $context["module"] : null), "attributes", array(), "any", false, true), "id", array(), "any", true, true) && ($this->getAttribute($this->getAttribute((isset($context["module"]) ? $context["module"] : null), "attributes", array()), "id", array()) >= 0))) {
            // line 46
            echo "          ";
            if (($this->getAttribute($this->getAttribute((isset($context["module"]) ? $context["module"] : null), "attributes", array(), "any", false, true), "version_addons", array(), "any", true, true) && $this->getAttribute($this->getAttribute((isset($context["module"]) ? $context["module"] : null), "attributes", array()), "version_addons", array()))) {
                // line 47
                echo "            <span class=\"label label-warning\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Need update", array()), "html", null, true);
                echo "</span>
          ";
            }
            // line 49
            echo "        ";
        }
        // line 50
        echo "      </div>
      <p class=\"module_description\">
        ";
        // line 52
        if (($this->getAttribute($this->getAttribute((isset($context["module"]) ? $context["module"] : null), "attributes", array(), "any", false, true), "description", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute($this->getAttribute((isset($context["module"]) ? $context["module"] : null), "attributes", array()), "description", array())))) {
            // line 53
            echo "          ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["module"]) ? $context["module"] : null), "attributes", array()), "description", array()), "html", null, true);
            echo "
        ";
        }
        // line 55
        echo "      </p>
      ";
        // line 56
        if ((($this->getAttribute($this->getAttribute((isset($context["module"]) ? $context["module"] : null), "attributes", array(), "any", false, true), "message", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute($this->getAttribute((isset($context["module"]) ? $context["module"] : null), "attributes", array()), "name", array()))) && (( !$this->getAttribute($this->getAttribute((isset($context["module"]) ? $context["module"] : null), "attributes", array(), "any", false, true), "type", array(), "any", true, true) || ($this->getAttribute($this->getAttribute((isset($context["module"]) ? $context["module"] : null), "attributes", array()), "type", array()) != "addonsMustHave")) || ($this->getAttribute($this->getAttribute((isset($context["module"]) ? $context["module"] : null), "attributes", array()), "type", array()) != "addonsNative")))) {
            // line 57
            echo "        <div class=\"alert alert-success\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["module"]) ? $context["module"] : null), "attributes", array()), "message", array()), "html", null, true);
            echo "</div>
      ";
        }
        // line 59
        echo "    </div>
  </td>
  <td class=\"module-container module-quick-action-list clearfix\">
    ";
        // line 62
        echo twig_include($this->env, $context, "PrestaShopBundle:Admin/Module/Includes:action_menu.html.twig", array("module" => (isset($context["module"]) ? $context["module"] : null)));
        echo "
  </td>
</tr>
";
    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin/Module/Includes:tab-module-line.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 62,  121 => 59,  115 => 57,  113 => 56,  110 => 55,  104 => 53,  102 => 52,  98 => 50,  95 => 49,  89 => 47,  86 => 46,  84 => 45,  77 => 44,  75 => 43,  68 => 42,  66 => 41,  59 => 40,  57 => 39,  51 => 38,  47 => 37,  43 => 36,  36 => 34,  29 => 30,  25 => 29,  19 => 25,);
    }

    public function getSource()
    {
        return "";
    }
}
