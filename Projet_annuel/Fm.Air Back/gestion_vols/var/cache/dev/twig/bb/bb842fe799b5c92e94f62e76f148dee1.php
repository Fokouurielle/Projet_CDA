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

/* registration/register.html.twig */
class __TwigTemplate_2271208d9d8d52b5bb3b48a4aec368f7 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        // line 1
        echo "<CENTER> <h1>Inscription</h1> </CENTER>

";
        // line 3
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
\t\t\t<!-- Row -->
\t\t\t<div class=\"row signpages text-center\">
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t<div class=\"row row-sm\">
\t\t\t\t\t\t\t<div class=\"col-lg-6 col-xl-5 d-none d-lg-block text-center bg-primary details\">
\t\t\t\t\t\t\t\t<div class=\"mt-5 pt-5 p-2 pos-absolute\">
\t\t\t\t\t\t\t\t\t<h3 class=\"mt-4 text-white\">Créer votre compte</h3>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-lg-6 col-xl-7 col-xs-12 col-sm-12 login_form \">
\t\t\t\t\t\t\t\t<div class=\"main-container container-fluid\">
\t\t\t\t\t\t\t\t\t<div class=\"row row-sm\">
\t\t\t\t\t\t\t\t\t\t<div class=\"card-body mt-2 mb-2\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t\t\t\t\t\t\t<p class=\"mb-4 text-muted tx-13 ms-0 text-start\">L'inscription est gratuite et ne prend qu'une minute.</p>
                                            <!--
\t\t\t\t\t\t\t\t\t\t\t<form>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group text-start\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label>Name</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-control\" placeholder=\"Enter your Name\" type=\"text\">
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<br><br>\t<br><br>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group text-start\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label>Email</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-control\" placeholder=\"Enter your email\" type=\"text\">
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<br><br>\t<br><br>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group text-start\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label>Password</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-control\" placeholder=\"Entrer votre mot de passe\" type=\"password\">
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn ripple btn-main-primary btn-block\">Créer un compte</button>
\t\t\t\t\t\t\t\t\t\t\t</form>
                                            -->
                                            ";
        // line 40
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 40, $this->source); })()), 'form_start');
        echo "
                                                ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 41, $this->source); })()), "email", [], "any", false, false, false, 41), 'row');
        echo "
                                                ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 42, $this->source); })()), "plainPassword", [], "any", false, false, false, 42), 'row', ["label" => "Password"]);
        // line 44
        echo "
                                                ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 45, $this->source); })()), "agreeTerms", [], "any", false, false, false, 45), 'row');
        echo "

                                                <button type=\"submit\" class=\"btn\">S'inscrire</button>
                                            ";
        // line 48
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 48, $this->source); })()), 'form_end');
        echo "

\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-start mt-5 ms-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"mb-0\">Avez vous déja un compte? <a href=\"";
        // line 51
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\">Se connecter</a></p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- End Row -->

\t\t</div>
\t\t<!-- End Page -->



    ";
        // line 68
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 68, $this->source); })()), "flashes", [0 => "verify_email_error"], "method", false, false, false, 68));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_error"]) {
            // line 69
            echo "        <div class=\"alert alert-danger\" role=\"alert\">";
            echo twig_escape_filter($this->env, $context["flash_error"], "html", null, true);
            echo "</div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_error'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "registration/register.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  163 => 71,  154 => 69,  150 => 68,  130 => 51,  124 => 48,  118 => 45,  115 => 44,  113 => 42,  109 => 41,  105 => 40,  67 => 4,  48 => 3,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<CENTER> <h1>Inscription</h1> </CENTER>

{% block body %}

\t\t\t<!-- Row -->
\t\t\t<div class=\"row signpages text-center\">
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t<div class=\"row row-sm\">
\t\t\t\t\t\t\t<div class=\"col-lg-6 col-xl-5 d-none d-lg-block text-center bg-primary details\">
\t\t\t\t\t\t\t\t<div class=\"mt-5 pt-5 p-2 pos-absolute\">
\t\t\t\t\t\t\t\t\t<h3 class=\"mt-4 text-white\">Créer votre compte</h3>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-lg-6 col-xl-7 col-xs-12 col-sm-12 login_form \">
\t\t\t\t\t\t\t\t<div class=\"main-container container-fluid\">
\t\t\t\t\t\t\t\t\t<div class=\"row row-sm\">
\t\t\t\t\t\t\t\t\t\t<div class=\"card-body mt-2 mb-2\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t\t\t\t\t\t\t<p class=\"mb-4 text-muted tx-13 ms-0 text-start\">L'inscription est gratuite et ne prend qu'une minute.</p>
                                            <!--
\t\t\t\t\t\t\t\t\t\t\t<form>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group text-start\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label>Name</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-control\" placeholder=\"Enter your Name\" type=\"text\">
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<br><br>\t<br><br>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group text-start\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label>Email</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-control\" placeholder=\"Enter your email\" type=\"text\">
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<br><br>\t<br><br>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group text-start\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label>Password</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-control\" placeholder=\"Entrer votre mot de passe\" type=\"password\">
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn ripple btn-main-primary btn-block\">Créer un compte</button>
\t\t\t\t\t\t\t\t\t\t\t</form>
                                            -->
                                            {{ form_start(registrationForm) }}
                                                {{ form_row(registrationForm.email) }}
                                                {{ form_row(registrationForm.plainPassword, {
                                                    label: 'Password'
                                                }) }}
                                                {{ form_row(registrationForm.agreeTerms) }}

                                                <button type=\"submit\" class=\"btn\">S'inscrire</button>
                                            {{ form_end(registrationForm) }}

\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-start mt-5 ms-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"mb-0\">Avez vous déja un compte? <a href=\"{{ path('app_login') }}\">Se connecter</a></p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- End Row -->

\t\t</div>
\t\t<!-- End Page -->



    {% for flash_error in app.flashes('verify_email_error') %}
        <div class=\"alert alert-danger\" role=\"alert\">{{ flash_error }}</div>
    {% endfor %}

{% endblock %}
", "registration/register.html.twig", "C:\\wamp64\\www\\Projet_annuel\\gestion_vols\\templates\\registration\\register.html.twig");
    }
}
