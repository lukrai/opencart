<?php

/* customer/customer_import.twig */
class __TwigTemplate_d5da6cb49df59fd3b0824ab14ee79b161f2f235be5900614c6df0cefcd9b643e extends Twig_Template
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
        // line 19
        echo "<div>
  <br/>
  ";
        // line 21
        if ((isset($context["date_added"]) ? $context["date_added"] : null)) {
            // line 22
            echo "  <p>Latest import: ";
            echo (isset($context["date_added"]) ? $context["date_added"] : null);
            echo " by <b>";
            echo (isset($context["username"]) ? $context["username"] : null);
            echo "</b></p>
  ";
        }
        // line 24
        echo "</div>
<div class=\"table-responsive\">
  <table class=\"table table-bordered table-hover\">
    <thead>
      <tr>
        <td class=\"text-right\">Porduct Name</td>
        <td class=\"text-right\">Product EAN Code</td>
        <td class=\"text-right\">Special Price (EUR)</td>
        <td class=\"text-right\">Date Added</td>
        <td class=\"text-right\">Action</td>

      </tr>
    </thead>
    <tbody>
      ";
        // line 38
        if ((isset($context["imports"]) ? $context["imports"] : null)) {
            // line 39
            echo "      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["imports"]) ? $context["imports"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["importdata"]) {
                // line 40
                echo "      <tr>
        ";
                // line 41
                if ($this->getAttribute($context["importdata"], "product_name", array())) {
                    // line 42
                    echo "        <td class=\"text-right\"><a href=";
                    echo $this->getAttribute($context["importdata"], "product", array());
                    echo ">";
                    echo $this->getAttribute($context["importdata"], "product_name", array());
                    echo " </a> </td>
        ";
                } else {
                    // line 44
                    echo "        <td class=\"text-right\">No product with this EAN</td>
        ";
                }
                // line 46
                echo "        <td class=\"text-right\">";
                echo $this->getAttribute($context["importdata"], "ean", array());
                echo " </td>
        <td class=\"text-right\">";
                // line 47
                echo $this->getAttribute($context["importdata"], "price", array());
                echo " </td>
        <td class=\"text-right\">";
                // line 48
                echo $this->getAttribute($context["importdata"], "date_added", array());
                echo " </td>
        <td class=\"text-right\">
        <a href=";
                // line 50
                echo $this->getAttribute($context["importdata"], "edit", array());
                echo " 
        data-toggle=\"tooltip\" title=\"\" class=\"btn btn-primary\" data-original-title=\"Edit\"><i class=\"fa fa-pencil\"></i></a>

        <a href=";
                // line 53
                echo $this->getAttribute($context["importdata"], "delete", array());
                echo " data-toggle=\"tooltip\"
        title=\"\" class=\"btn btn-danger\" data-original-title=\"Delete\"><i class=\"fa fa-trash-o\"></i></a>         
   
      </tr>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['importdata'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            echo "      ";
        } else {
            // line 59
            echo "      <tr>
        <td class=\"text-center\" colspan=\"5\">";
            // line 60
            echo (isset($context["text_no_results"]) ? $context["text_no_results"] : null);
            echo "</td>
      </tr>
      ";
        }
        // line 63
        echo "    </tbody>
  </table>
</div>
<div class=\"row\">
  <div class=\"col-sm-6 text-left\">";
        // line 67
        echo (isset($context["pagination"]) ? $context["pagination"] : null);
        echo "</div>
  <div class=\"col-sm-6 text-right\">";
        // line 68
        echo (isset($context["results"]) ? $context["results"] : null);
        echo "</div>
</div>
  
  ";
    }

    public function getTemplateName()
    {
        return "customer/customer_import.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 68,  122 => 67,  116 => 63,  110 => 60,  107 => 59,  104 => 58,  93 => 53,  87 => 50,  82 => 48,  78 => 47,  73 => 46,  69 => 44,  61 => 42,  59 => 41,  56 => 40,  51 => 39,  49 => 38,  33 => 24,  25 => 22,  23 => 21,  19 => 19,);
    }
}
/* {# <div>*/
/*   <form action="<?php echo $action; ?>" method="post" enctype="multipart/form-data" id="form">*/
/*     <table class="form">*/
/*     <tr>*/
/*       <td>*/
/*         <span class="btn btn-default btn-file btn-primary"><i class="fa fa-upload"></i>*/
/*             Select (.csv) File <input type="file">*/
/*         </span>*/
/*       </td>*/
/*       {# <td><input type="file" name="csv" value=""  class="btn btn-primary"</input>*/
/*         <?php if ($error_csv) { ?>*/
/*           <span class="error"><?php echo $error_csv; ?></span>*/
/*         <?php } ?>*/
/*       </td> */
/*     </tr>*/
/*     </table>*/
/*   </form>*/
/* </div> #}*/
/* <div>*/
/*   <br/>*/
/*   {% if date_added %}*/
/*   <p>Latest import: {{date_added}} by <b>{{username}}</b></p>*/
/*   {% endif %}*/
/* </div>*/
/* <div class="table-responsive">*/
/*   <table class="table table-bordered table-hover">*/
/*     <thead>*/
/*       <tr>*/
/*         <td class="text-right">Porduct Name</td>*/
/*         <td class="text-right">Product EAN Code</td>*/
/*         <td class="text-right">Special Price (EUR)</td>*/
/*         <td class="text-right">Date Added</td>*/
/*         <td class="text-right">Action</td>*/
/* */
/*       </tr>*/
/*     </thead>*/
/*     <tbody>*/
/*       {% if imports %}*/
/*       {% for importdata in imports %}*/
/*       <tr>*/
/*         {% if importdata.product_name %}*/
/*         <td class="text-right"><a href={{importdata.product}}>{{importdata.product_name}} </a> </td>*/
/*         {% else %}*/
/*         <td class="text-right">No product with this EAN</td>*/
/*         {% endif %}*/
/*         <td class="text-right">{{importdata.ean}} </td>*/
/*         <td class="text-right">{{importdata.price}} </td>*/
/*         <td class="text-right">{{importdata.date_added}} </td>*/
/*         <td class="text-right">*/
/*         <a href={{importdata.edit}} */
/*         data-toggle="tooltip" title="" class="btn btn-primary" data-original-title="Edit"><i class="fa fa-pencil"></i></a>*/
/* */
/*         <a href={{ importdata.delete }} data-toggle="tooltip"*/
/*         title="" class="btn btn-danger" data-original-title="Delete"><i class="fa fa-trash-o"></i></a>         */
/*    */
/*       </tr>*/
/*       {% endfor %}*/
/*       {% else %}*/
/*       <tr>*/
/*         <td class="text-center" colspan="5">{{ text_no_results }}</td>*/
/*       </tr>*/
/*       {% endif %}*/
/*     </tbody>*/
/*   </table>*/
/* </div>*/
/* <div class="row">*/
/*   <div class="col-sm-6 text-left">{{ pagination }}</div>*/
/*   <div class="col-sm-6 text-right">{{ results }}</div>*/
/* </div>*/
/*   */
/*   */
