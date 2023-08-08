<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* registration/confirmation_email.html.twig */
class __TwigTemplate_960cf6176c8f56bd8dc3cd79359955b4 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/confirmation_email.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/confirmation_email.html.twig"));

        // line 1
        echo "<h1> Veuillez confirmer votre adresse e-mail!</h1>
";
        // line 3
        echo "<p>
    ";
        // line 5
        echo "    Veuillez confirmer votre adresse électronique en cliquant sur le lien suivant: <br><br>
    ";
        // line 7
        echo "    <a href=\"";
        echo (isset($context["signedUrl"]) || array_key_exists("signedUrl", $context) ? $context["signedUrl"] : (function () { throw new RuntimeError('Variable "signedUrl" does not exist.', 7, $this->source); })());
        echo "\">Confirmer mon Email</a>.

    ";
        // line 10
        echo "    Ce lien expirera dans ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["expiresAtMessageKey"]) || array_key_exists("expiresAtMessageKey", $context) ? $context["expiresAtMessageKey"] : (function () { throw new RuntimeError('Variable "expiresAtMessageKey" does not exist.', 10, $this->source); })()), (isset($context["expiresAtMessageData"]) || array_key_exists("expiresAtMessageData", $context) ? $context["expiresAtMessageData"] : (function () { throw new RuntimeError('Variable "expiresAtMessageData" does not exist.', 10, $this->source); })()), "VerifyEmailBundle"), "html", null, true);
        echo ".

</p>

<p>
    Cheers!
</p>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "registration/confirmation_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 10,  52 => 7,  49 => 5,  46 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<h1> Veuillez confirmer votre adresse e-mail!</h1>
{# <h1>Hi! Please confirm your email!</h1> #}
<p>
    {# Please confirm your email address by clicking the following link: <br><br> #}
    Veuillez confirmer votre adresse électronique en cliquant sur le lien suivant: <br><br>
    {# <a href=\"{{ signedUrl|raw }}\">Confirm my Email</a>. #}
    <a href=\"{{ signedUrl|raw }}\">Confirmer mon Email</a>.

    {# This link will expire in {{ expiresAtMessageKey|trans(expiresAtMessageData, 'VerifyEmailBundle') }}. #}
    Ce lien expirera dans {{ expiresAtMessageKey|trans(expiresAtMessageData, 'VerifyEmailBundle') }}.

</p>

<p>
    Cheers!
</p>
", "registration/confirmation_email.html.twig", "C:\\wamp64\\www\\Projet_annuel\\gestion_vols\\templates\\registration\\confirmation_email.html.twig");
    }
}
