<?php

/* equipamento/index.code.twig */
class __TwigTemplate_f8c11875e04bb60302dae6bf86ca2e06060345282e70a0100a665dfa08055e54 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate($this->env->getExtension('Cac\TwigHelper\TwigFunction')->getView("app"), "equipamento/index.code.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"panel panel-primary\">
                    <div class=\"panel-heading\">
                        <h3 class=\"panel-title\">Equipamentos <a href=\"/equipamento/novo\" class=\"fa fa-plus pull-right\"></a></h3>
                    </div>
                    <div class=\"panel-body\">
                        <table class=\"table\">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nome</th>
                                <th>Modelo</th>
                                <th>Marca</th>
                                <th>Quatidade</th>
                                <th>#</th>
                            </tr>
                            </thead>
                            <tbody>
                            ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["results"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["equipamento"]) {
            // line 25
            echo "                                <tr>
                                    <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["equipamento"], "id", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["equipamento"], "nome", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["equipamento"], "modelo", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["equipamento"], "Marca", array()), "nome", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["equipamento"], "qtd", array()), "html", null, true);
            echo "</td>
                                    <td>
                                        <a href=\"/equipamento/editar?id=";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["equipamento"], "id", array()), "html", null, true);
            echo "\"  class=\"fa fa-edit text-info\"    ></a>
                                        <a href=\"/equipamento/deletar?id=";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["equipamento"], "id", array()), "html", null, true);
            echo "\" class=\"fa fa-trash text-danger\" ></a>
                                    </td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['equipamento'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

";
    }

    public function getTemplateName()
    {
        return "equipamento/index.code.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 37,  84 => 33,  80 => 32,  75 => 30,  71 => 29,  67 => 28,  63 => 27,  59 => 26,  56 => 25,  52 => 24,  30 => 4,  27 => 3,  18 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "equipamento/index.code.twig", "C:\\laragon\\www\\controle_equipamentos\\App\\views\\equipamento\\index.code.twig");
    }
}
