<?php

/* navbar_header.html */
class __TwigTemplate_1575f73635be92f92d20dd0c0c4b5e6c725e995fb3a63ae4402b6e5435be687b extends Twig_Template
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
        echo "<nav role=\"navigation\">
\t<div class=\"inventea-posts-menu\">
\t\t<ul class=\"inventea-menu\" role=\"menubar\">
\t\t\t";
        // line 4
        // line 5
        echo "
\t\t\t";
        // line 6
        if ((isset($context["S_DISPLAY_SEARCH"]) ? $context["S_DISPLAY_SEARCH"] : null)) {
            // line 7
            echo "\t\t\t\t";
            if ((isset($context["S_REGISTERED_USER"]) ? $context["S_REGISTERED_USER"] : null)) {
                echo "<li><a href=\"";
                echo (isset($context["U_SEARCH_SELF"]) ? $context["U_SEARCH_SELF"] : null);
                echo "\" role=\"menuitem\">";
                echo $this->env->getExtension('phpbb')->lang("SEARCH_SELF");
                echo "</a></li>";
            }
            // line 8
            echo "\t\t\t\t";
            if ((isset($context["S_USER_LOGGED_IN"]) ? $context["S_USER_LOGGED_IN"] : null)) {
                echo "<li><a href=\"";
                echo (isset($context["U_SEARCH_NEW"]) ? $context["U_SEARCH_NEW"] : null);
                echo "\" role=\"menuitem\">";
                echo $this->env->getExtension('phpbb')->lang("SEARCH_NEW");
                echo "</a></li>";
            }
            // line 9
            echo "\t\t\t\t";
            if ((isset($context["S_LOAD_UNREADS"]) ? $context["S_LOAD_UNREADS"] : null)) {
                echo "<li><a href=\"";
                echo (isset($context["U_SEARCH_UNREAD"]) ? $context["U_SEARCH_UNREAD"] : null);
                echo "\" role=\"menuitem\">";
                echo $this->env->getExtension('phpbb')->lang("SEARCH_UNREAD");
                echo "</a></li>";
            }
            // line 10
            echo "\t\t\t\t<li><a href=\"";
            echo (isset($context["U_SEARCH_UNANSWERED"]) ? $context["U_SEARCH_UNANSWERED"] : null);
            echo "\" role=\"menuitem\">";
            echo $this->env->getExtension('phpbb')->lang("SEARCH_UNANSWERED");
            echo "</a></li>
\t\t\t\t<li><a href=\"";
            // line 11
            echo (isset($context["U_SEARCH_ACTIVE_TOPICS"]) ? $context["U_SEARCH_ACTIVE_TOPICS"] : null);
            echo "\" role=\"menuitem\">";
            echo $this->env->getExtension('phpbb')->lang("SEARCH_ACTIVE_TOPICS");
            echo "</a></li>
\t\t\t";
        }
        // line 13
        echo "
\t\t\t";
        // line 14
        // line 15
        echo "\t\t</ul>
\t</div>

\t<div class=\"inventea-forum-menu\">
\t\t<ul class=\"inventea-menu\" role=\"menubar\">
\t\t\t";
        // line 20
        // line 21
        echo "
\t\t\t<li><a href=\"";
        // line 22
        echo (isset($context["U_FAQ"]) ? $context["U_FAQ"] : null);
        echo "\" rel=\"help\" title=\"";
        echo $this->env->getExtension('phpbb')->lang("FAQ_EXPLAIN");
        echo "\" role=\"menuitem\">";
        echo $this->env->getExtension('phpbb')->lang("FAQ");
        echo "</a></li>
\t\t\t";
        // line 23
        if ((isset($context["S_DISPLAY_SEARCH"]) ? $context["S_DISPLAY_SEARCH"] : null)) {
            echo "<li><a href=\"";
            echo (isset($context["U_SEARCH"]) ? $context["U_SEARCH"] : null);
            echo "\" role=\"menuitem\">";
            echo $this->env->getExtension('phpbb')->lang("SEARCH");
            echo "</a></li>";
        }
        // line 24
        echo "
\t\t\t";
        // line 25
        if ( !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null)) {
            // line 26
            echo "\t\t\t\t";
            if ((isset($context["S_DISPLAY_MEMBERLIST"]) ? $context["S_DISPLAY_MEMBERLIST"] : null)) {
                echo "<li><a href=\"";
                echo (isset($context["U_MEMBERLIST"]) ? $context["U_MEMBERLIST"] : null);
                echo "\" role=\"menuitem\">";
                echo $this->env->getExtension('phpbb')->lang("MEMBERLIST");
                echo "</a></li>";
            }
            // line 27
            echo "\t\t\t\t";
            if ((isset($context["U_TEAM"]) ? $context["U_TEAM"] : null)) {
                echo "<li><a href=\"";
                echo (isset($context["U_TEAM"]) ? $context["U_TEAM"] : null);
                echo "\" role=\"menuitem\">";
                echo $this->env->getExtension('phpbb')->lang("THE_TEAM");
                echo "</a></li>";
            }
            // line 28
            echo "\t\t\t";
        }
        // line 29
        echo "
\t\t\t";
        // line 30
        if ((isset($context["U_MCP"]) ? $context["U_MCP"] : null)) {
            echo "<li><a href=\"";
            echo (isset($context["U_MCP"]) ? $context["U_MCP"] : null);
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("MCP_SHORT");
            echo "\" role=\"menuitem\">";
            echo $this->env->getExtension('phpbb')->lang("MCP");
            echo "</a></li>";
        }
        // line 31
        echo "\t\t\t";
        if ((isset($context["U_ACP"]) ? $context["U_ACP"] : null)) {
            echo "<li><a href=\"";
            echo (isset($context["U_ACP"]) ? $context["U_ACP"] : null);
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("ACP_SHORT");
            echo "\" role=\"menuitem\">";
            echo $this->env->getExtension('phpbb')->lang("ACP");
            echo "</a></li>";
        }
        // line 32
        echo "
\t\t\t";
        // line 33
        // line 34
        echo "\t\t</ul>
\t</div>
</nav>
";
    }

    public function getTemplateName()
    {
        return "navbar_header.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 34,  155 => 33,  152 => 32,  141 => 31,  131 => 30,  128 => 29,  125 => 28,  116 => 27,  107 => 26,  105 => 25,  102 => 24,  94 => 23,  86 => 22,  83 => 21,  82 => 20,  75 => 15,  74 => 14,  71 => 13,  64 => 11,  57 => 10,  48 => 9,  39 => 8,  30 => 7,  28 => 6,  25 => 5,  24 => 4,  19 => 1,);
    }
}
/* <nav role="navigation">*/
/* 	<div class="inventea-posts-menu">*/
/* 		<ul class="inventea-menu" role="menubar">*/
/* 			<!-- EVENT navbar_header_quick_links_before -->*/
/* */
/* 			<!-- IF S_DISPLAY_SEARCH -->*/
/* 				<!-- IF S_REGISTERED_USER --><li><a href="{U_SEARCH_SELF}" role="menuitem">{L_SEARCH_SELF}</a></li><!-- ENDIF -->*/
/* 				<!-- IF S_USER_LOGGED_IN --><li><a href="{U_SEARCH_NEW}" role="menuitem">{L_SEARCH_NEW}</a></li><!-- ENDIF -->*/
/* 				<!-- IF S_LOAD_UNREADS --><li><a href="{U_SEARCH_UNREAD}" role="menuitem">{L_SEARCH_UNREAD}</a></li><!-- ENDIF -->*/
/* 				<li><a href="{U_SEARCH_UNANSWERED}" role="menuitem">{L_SEARCH_UNANSWERED}</a></li>*/
/* 				<li><a href="{U_SEARCH_ACTIVE_TOPICS}" role="menuitem">{L_SEARCH_ACTIVE_TOPICS}</a></li>*/
/* 			<!-- ENDIF -->*/
/* */
/* 			<!-- EVENT navbar_header_quick_links_after -->*/
/* 		</ul>*/
/* 	</div>*/
/* */
/* 	<div class="inventea-forum-menu">*/
/* 		<ul class="inventea-menu" role="menubar">*/
/* 			<!-- EVENT overall_header_navigation_prepend -->*/
/* */
/* 			<li><a href="{U_FAQ}" rel="help" title="{L_FAQ_EXPLAIN}" role="menuitem">{L_FAQ}</a></li>*/
/* 			<!-- IF S_DISPLAY_SEARCH --><li><a href="{U_SEARCH}" role="menuitem">{L_SEARCH}</a></li><!-- ENDIF -->*/
/* */
/* 			<!-- IF not S_IS_BOT -->*/
/* 				<!-- IF S_DISPLAY_MEMBERLIST --><li><a href="{U_MEMBERLIST}" role="menuitem">{L_MEMBERLIST}</a></li><!-- ENDIF -->*/
/* 				<!-- IF U_TEAM --><li><a href="{U_TEAM}" role="menuitem">{L_THE_TEAM}</a></li><!-- ENDIF -->*/
/* 			<!-- ENDIF -->*/
/* */
/* 			<!-- IF U_MCP --><li><a href="{U_MCP}" title="{L_MCP_SHORT}" role="menuitem">{L_MCP}</a></li><!-- ENDIF -->*/
/* 			<!-- IF U_ACP --><li><a href="{U_ACP}" title="{L_ACP_SHORT}" role="menuitem">{L_ACP}</a></li><!-- ENDIF -->*/
/* */
/* 			<!-- EVENT overall_header_navigation_append -->*/
/* 		</ul>*/
/* 	</div>*/
/* </nav>*/
/* */
