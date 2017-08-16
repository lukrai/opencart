<?php

/* customer/customer_import_form.twig */
class __TwigTemplate_d3902e7970fa6ee02c7dd3ac0478fdfa72fca0bf22514b436d6bfae2a11cde1b extends Twig_Template
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
        echo (isset($context["header"]) ? $context["header"] : null);
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"pull-right\">
        <button type=\"submit\" form=\"form-import\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo (isset($context["button_save"]) ? $context["button_save"] : null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
        <a href=\"";
        // line 7
        echo (isset($context["cancel"]) ? $context["cancel"] : null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo (isset($context["button_cancel"]) ? $context["button_cancel"] : null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a></div>
      <h1>";
        // line 8
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 11
            echo "        <li><a href=\"";
            echo $this->getAttribute($context["breadcrumb"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["breadcrumb"], "text", array());
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">
    ";
        // line 17
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 18
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 22
        echo "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> Edit import</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 27
        echo (isset($context["action_import"]) ? $context["action_import"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-import\" class=\"form-horizontal\">
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\">EAN</label>
            ";
        // line 31
        echo "            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"ean\" value=\"";
        // line 32
        echo (isset($context["ean"]) ? $context["ean"] : null);
        echo "\" id=\"input-ean\" class=\"form-control\" />
              ";
        // line 33
        if ((isset($context["error_ean"]) ? $context["error_ean"] : null)) {
            // line 34
            echo "                  <div class=\"text-danger\">";
            echo (isset($context["error_ean"]) ? $context["error_ean"] : null);
            echo "</div>
              ";
        }
        // line 36
        echo "            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\">Price</label>
            ";
        // line 41
        echo "            <div class=\"col-sm-10\">
              <input type=\"number\" name=\"price\" value=\"";
        // line 42
        echo (isset($context["price"]) ? $context["price"] : null);
        echo "\" id=\"input-price\" class=\"form-control\" />
              ";
        // line 43
        if ((isset($context["error_price"]) ? $context["error_price"] : null)) {
            // line 44
            echo "                  <div class=\"text-danger\">";
            echo (isset($context["error_price"]) ? $context["error_price"] : null);
            echo "</div>
              ";
        }
        // line 46
        echo "            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

";
        // line 53
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "customer/customer_import_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 53,  123 => 46,  117 => 44,  115 => 43,  111 => 42,  108 => 41,  102 => 36,  96 => 34,  94 => 33,  90 => 32,  87 => 31,  81 => 27,  74 => 22,  66 => 18,  64 => 17,  58 => 13,  47 => 11,  43 => 10,  38 => 8,  32 => 7,  28 => 6,  19 => 1,);
    }
}
/* {{ header }}{{ column_left }}*/
/* <div id="content">*/
/*   <div class="page-header">*/
/*     <div class="container-fluid">*/
/*       <div class="pull-right">*/
/*         <button type="submit" form="form-import" data-toggle="tooltip" title="{{ button_save }}" class="btn btn-primary"><i class="fa fa-save"></i></button>*/
/*         <a href="{{ cancel }}" data-toggle="tooltip" title="{{ button_cancel }}" class="btn btn-default"><i class="fa fa-reply"></i></a></div>*/
/*       <h1>{{ heading_title }}</h1>*/
/*       <ul class="breadcrumb">*/
/*         {% for breadcrumb in breadcrumbs %}*/
/*         <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*         {% endfor %}*/
/*       </ul>*/
/*     </div>*/
/*   </div>*/
/*   <div class="container-fluid">*/
/*     {% if error_warning %}*/
/*     <div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> {{ error_warning }}*/
/*       <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*     </div>*/
/*     {% endif %}*/
/*     <div class="panel panel-default">*/
/*       <div class="panel-heading">*/
/*         <h3 class="panel-title"><i class="fa fa-pencil"></i> Edit import</h3>*/
/*       </div>*/
/*       <div class="panel-body">*/
/*         <form action="{{ action_import }}" method="post" enctype="multipart/form-data" id="form-import" class="form-horizontal">*/
/*           <div class="form-group required">*/
/*             <label class="col-sm-2 control-label">EAN</label>*/
/*             {# <label class="col-sm-2 control-label" for="input-mask"><span data-toggle="tooltip" title="{{ help_mask }}">{{ entry_mask }}</span></label> #}*/
/*             <div class="col-sm-10">*/
/*               <input type="text" name="ean" value="{{ ean }}" id="input-ean" class="form-control" />*/
/*               {% if error_ean %}*/
/*                   <div class="text-danger">{{ error_ean }}</div>*/
/*               {% endif %}*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group">*/
/*             <label class="col-sm-2 control-label">Price</label>*/
/*             {# <label class="col-sm-2 control-label" for="input-mask"><span data-toggle="tooltip" title="{{ help_mask }}">{{ entry_mask }}</span></label> #}*/
/*             <div class="col-sm-10">*/
/*               <input type="number" name="price" value="{{ price }}" id="input-price" class="form-control" />*/
/*               {% if error_price %}*/
/*                   <div class="text-danger">{{ error_price }}</div>*/
/*               {% endif %}*/
/*             </div>*/
/*           </div>*/
/*         </form>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* */
/* {{ footer }}*/
/* */
