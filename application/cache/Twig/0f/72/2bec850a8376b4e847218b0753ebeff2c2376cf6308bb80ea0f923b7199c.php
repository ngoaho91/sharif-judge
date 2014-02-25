<?php

/* pages/admin/add_assignment.twig */
class __TwigTemplate_0f722bec850a8376b4e847218b0753ebeff2c2376cf6308bb80ea0f923b7199c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("templates/base.twig");

        $this->blocks = array(
            'icon' => array($this, 'block_icon'),
            'title' => array($this, 'block_title'),
            'head_title' => array($this, 'block_head_title'),
            'other_assets' => array($this, 'block_other_assets'),
            'title_menu' => array($this, 'block_title_menu'),
            'main_content' => array($this, 'block_main_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "templates/base.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 6
        $context["selected"] = "assignments";
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    public function block_icon($context, array $blocks = array())
    {
        if (isset($context["edit"])) { $_edit_ = $context["edit"]; } else { $_edit_ = null; }
        echo (($_edit_) ? ("fa-edit") : ("fa-plus-square"));
    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        if (isset($context["edit"])) { $_edit_ = $context["edit"]; } else { $_edit_ = null; }
        echo (($_edit_) ? ("Edit") : ("Add"));
        echo " Assignment";
    }

    // line 10
    public function block_head_title($context, array $blocks = array())
    {
        if (isset($context["edit"])) { $_edit_ = $context["edit"]; } else { $_edit_ = null; }
        echo (($_edit_) ? ("Edit") : ("Add"));
        echo " Assignment";
    }

    // line 14
    public function block_other_assets($context, array $blocks = array())
    {
        // line 15
        echo "<script type='text/javascript' src=\"";
        echo base_url("assets/js/taboverride.min.js");
        echo "\"></script>
<script>
\t\$(document).ready(function(){
\t\ttabOverride.set(document.getElementsByTagName('textarea'));
\t});
</script>
<script type=\"text/javascript\" src=\"";
        // line 21
        echo base_url("assets/js/jquery-ui-timepicker-addon.js");
        echo "\"></script>
<script>
\tshj.num_of_problems=";
        // line 23
        if (isset($context["problems"])) { $_problems_ = $context["problems"]; } else { $_problems_ = null; }
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $_problems_), "html", null, true);
        echo ";
\tshj.row='<tr><td>PID</td>\\
\t<td><input type=\"text\" name=\"name[]\" class=\"sharif_input short\" value=\"Problem \"/></td>\\
\t<td><input type=\"text\" name=\"score[]\" class=\"sharif_input tiny2\" value=\"100\"/></td>\\
\t<td><input type=\"text\" name=\"c_time_limit[]\" class=\"sharif_input tiny2\" value=\"500\"/></td>\\
\t<td><input type=\"text\" name=\"python_time_limit[]\" class=\"sharif_input tiny2\" value=\"1500\"/></td>\\
\t<td><input type=\"text\" name=\"java_time_limit[]\" class=\"sharif_input tiny2\" value=\"2000\"/></td>\\
\t<td><input type=\"text\" name=\"memory_limit[]\" class=\"sharif_input tiny\" value=\"50000\"/></td>\\
\t<td><input type=\"text\" name=\"languages[]\" class=\"sharif_input short2\" value=\"C,C++,Python 2,Python 3,Java\"/></td>\\
\t<td><input type=\"text\" name=\"diff_cmd[]\" class=\"sharif_input tiny\" value=\"diff\"/></td>\\
\t<td><input type=\"text\" name=\"diff_arg[]\" class=\"sharif_input tiny\" value=\"-bB\"/></td>\\
\t<td><input type=\"checkbox\" name=\"is_upload_only[]\" class=\"check\" value=\"PID\"/><td><i class=\"fa fa-times-circle fa-lg color1 delete_problem pointer\"></i></td></td>\\
</tr>';
\t\$(document).ready(function(){
\t\t\$(\"#add\").click(function(){
\t\t\t\$('#problems_table>tbody').append(shj.row.replace(/PID/g, (shj.num_of_problems+1)));
\t\t\tshj.num_of_problems++;
\t\t\t\$('#nop').attr('value', shj.num_of_problems);
\t\t});
\t\t\$(document).on('click', '.delete_problem', function(){
\t\t\tif (shj.num_of_problems==1) return;
\t\t\tvar row = \$(this).parents('tr');
\t\t\trow.remove();
\t\t\tvar i = 0;
\t\t\t\$('#problems_table>tbody').children('tr').each(function(){
\t\t\t\ti++;
\t\t\t\t\$(this).children(':first').html(i);
\t\t\t\t\$(this).find('[type=\"checkbox\"]').attr('value',i);
\t\t\t});
\t\t\tshj.num_of_problems--;
\t\t\t\$('#nop').attr('value',shj.num_of_problems);
\t\t});
\t\t\$('#start_time').datetimepicker();
\t\t\$('#finish_time').datetimepicker();
\t});
</script>
";
    }

    // line 63
    public function block_title_menu($context, array $blocks = array())
    {
        // line 64
        echo "<span class=\"title_menu_item\">
\t<a href=\"http://docs.sharifjudge.ir/add_assignment\" target=\"_blank\"><i class=\"fa fa-question-circle color1\"></i> Help</a>
</span>
";
    }

    // line 71
    public function block_main_content($context, array $blocks = array())
    {
        // line 72
        if (isset($context["success_messages"])) { $_success_messages_ = $context["success_messages"]; } else { $_success_messages_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_success_messages_);
        foreach ($context['_seq'] as $context["_key"] => $context["success_message"]) {
            // line 73
            echo "\t<p class=\"shj_ok\">";
            if (isset($context["success_message"])) { $_success_message_ = $context["success_message"]; } else { $_success_message_ = null; }
            echo twig_escape_filter($this->env, $_success_message_, "html", null, true);
            echo "</p>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['success_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        if (isset($context["error_messages"])) { $_error_messages_ = $context["error_messages"]; } else { $_error_messages_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_error_messages_);
        foreach ($context['_seq'] as $context["_key"] => $context["error_message"]) {
            // line 76
            echo "\t<p class=\"shj_error\">";
            if (isset($context["error_message"])) { $_error_message_ = $context["error_message"]; } else { $_error_message_ = null; }
            echo twig_escape_filter($this->env, $_error_message_, "html", null, true);
            echo "</p>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        echo "
";
        // line 79
        if (isset($context["edit"])) { $_edit_ = $context["edit"]; } else { $_edit_ = null; }
        if ($_edit_) {
            // line 80
            echo "<p>
\t<i class=\"fa fa-info-circle fa-lg color8\"></i> If you don't want to change tests, just do not upload any file.
</p>
";
        }
        // line 84
        echo "
";
        // line 85
        if (isset($context["edit"])) { $_edit_ = $context["edit"]; } else { $_edit_ = null; }
        if (isset($context["edit_assignment"])) { $_edit_assignment_ = $context["edit_assignment"]; } else { $_edit_assignment_ = null; }
        echo form_open_multipart((($_edit_) ? (("assignments/edit/" . $this->getAttribute($_edit_assignment_, "id"))) : ("assignments/add")));
        echo "
<div class=\"panel_left\">
\t<input type=\"hidden\" name=\"number_of_problems\" id=\"nop\" value=\"";
        // line 87
        if (isset($context["edit"])) { $_edit_ = $context["edit"]; } else { $_edit_ = null; }
        if (isset($context["edit_assignment"])) { $_edit_assignment_ = $context["edit_assignment"]; } else { $_edit_assignment_ = null; }
        if (isset($context["problems"])) { $_problems_ = $context["problems"]; } else { $_problems_ = null; }
        echo twig_escape_filter($this->env, (($_edit_) ? ($this->getAttribute($_edit_assignment_, "problems")) : (twig_length_filter($this->env, $_problems_))), "html", null, true);
        echo "\"/>
\t<p class=\"input_p\">
\t\t<label for=\"form_a_name\">Assignment Name</label>
\t\t<input id=\"form_a_name\" type=\"text\" name=\"assignment_name\" class=\"sharif_input medium\" value=\"";
        // line 90
        if (isset($context["edit"])) { $_edit_ = $context["edit"]; } else { $_edit_ = null; }
        if (isset($context["edit_assignment"])) { $_edit_assignment_ = $context["edit_assignment"]; } else { $_edit_assignment_ = null; }
        echo twig_escape_filter($this->env, (($_edit_) ? ($this->getAttribute($_edit_assignment_, "name")) : (set_value("assignment_name"))), "html", null, true);
        echo "\"/>
\t\t";
        // line 91
        echo form_error("assignment_name", "<div class=\"shj_error\">", "</div>");
        echo "
\t</p>
\t<p class=\"input_p\">
\t\t<label for=\"start_time\">Start Time</label>
\t\t<input id=\"start_time\" type=\"text\" name=\"start_time\" class=\"sharif_input medium\" value=\"";
        // line 95
        if (isset($context["edit"])) { $_edit_ = $context["edit"]; } else { $_edit_ = null; }
        if (isset($context["edit_assignment"])) { $_edit_assignment_ = $context["edit_assignment"]; } else { $_edit_assignment_ = null; }
        echo twig_escape_filter($this->env, (($_edit_) ? (twig_date_format_filter($this->env, $this->getAttribute($_edit_assignment_, "start_time"), "m/d/Y H:i")) : (set_value("start_time"))), "html", null, true);
        echo "\" />
\t\t";
        // line 96
        echo form_error("start_time", "<div class=\"shj_error\">", "</div>");
        echo "
\t</p>
\t<p class=\"input_p\">
\t\t<label for=\"finish_time\">Finish Time</label>
\t\t<input id=\"finish_time\" type=\"text\" name=\"finish_time\" class=\"sharif_input medium\" value=\"";
        // line 100
        if (isset($context["edit"])) { $_edit_ = $context["edit"]; } else { $_edit_ = null; }
        if (isset($context["edit_assignment"])) { $_edit_assignment_ = $context["edit_assignment"]; } else { $_edit_assignment_ = null; }
        echo twig_escape_filter($this->env, (($_edit_) ? (twig_date_format_filter($this->env, $this->getAttribute($_edit_assignment_, "finish_time"), "m/d/Y H:i")) : (set_value("finish_time"))), "html", null, true);
        echo "\" />
\t\t";
        // line 101
        echo form_error("finish_time", "<div class=\"shj_error\">", "</div>");
        echo "
\t</p>
\t<p class=\"input_p clear\">
\t\t<label for=\"form_extra_time\">
\t\t\tExtra Time (minutes)<br>
\t\t\t<span class=\"form_comment\">Extra time for late submissions.</span>
\t\t</label>
\t\t<input id=\"form_extra_time\" type=\"text\" name=\"extra_time\" id=\"extra_time\" class=\"sharif_input medium\" value=\"";
        // line 108
        if (isset($context["edit"])) { $_edit_ = $context["edit"]; } else { $_edit_ = null; }
        if (isset($context["edit_assignment"])) { $_edit_assignment_ = $context["edit_assignment"]; } else { $_edit_assignment_ = null; }
        echo twig_escape_filter($this->env, (($_edit_) ? (call_user_func_array($this->env->getFilter('extra_time_formatter')->getCallable(), array($this->getAttribute($_edit_assignment_, "extra_time")))) : (set_value("extra_time"))), "html", null, true);
        echo "\" />
\t\t";
        // line 109
        echo form_error("extra_time", "<div class=\"shj_error\">", "</div>");
        echo "
\t</p>
\t<p class=\"input_p clear\">
\t\t<label for=\"form_participants\">Participants<br>
\t\t\t<span class=\"form_comment\">Enter username of participants here (comma separated).
\t\t\t\tOnly these users are able to submit. You can use keyword \"ALL\".</span>
\t\t</label>
\t\t<textarea id=\"form_participants\" name=\"participants\" rows=\"5\" class=\"sharif_input medium\">";
        // line 116
        if (isset($context["edit"])) { $_edit_ = $context["edit"]; } else { $_edit_ = null; }
        if (isset($context["edit_assignment"])) { $_edit_assignment_ = $context["edit_assignment"]; } else { $_edit_assignment_ = null; }
        echo twig_escape_filter($this->env, (($_edit_) ? ($this->getAttribute($_edit_assignment_, "participants")) : (set_value("participants", "ALL"))), "html", null, true);
        echo "</textarea>
\t</p>
\t<p class=\"input_p clear\">
\t\t<label for=\"form_tests_desc\">Tests and Descriptions (zip file)<br>
\t\t\t<span class=\"form_comment\">
\t\t\t\t<a href=\"http://docs.sharifjudge.ir/tests_structure\" target=\"_blank\">Use this structure</a>
\t\t\t</span>
\t\t</label>

\t\t<input id=\"form_tests_desc\" type=\"file\" name=\"tests_desc\" class=\"sharif_input medium\"/>
\t\t";
        // line 126
        if (isset($context["edit"])) { $_edit_ = $context["edit"]; } else { $_edit_ = null; }
        if (isset($context["upload_error"])) { $_upload_error_ = $context["upload_error"]; } else { $_upload_error_ = null; }
        if (((!$_edit_) && $_upload_error_)) {
            // line 127
            echo "\t\t\t<div class=\"shj_error\">";
            if (isset($context["upload_error"])) { $_upload_error_ = $context["upload_error"]; } else { $_upload_error_ = null; }
            echo twig_escape_filter($this->env, $_upload_error_, "html", null, true);
            echo "</div>
\t\t";
        }
        // line 129
        echo "\t</p>
</div>
<div class=\"panel_right\">
\t<p class=\"input_p\">
\t\t<input id=\"form_a_open\" type=\"checkbox\" name=\"open\" value=\"1\" ";
        // line 133
        if (isset($context["edit"])) { $_edit_ = $context["edit"]; } else { $_edit_ = null; }
        if (isset($context["edit_assignment"])) { $_edit_assignment_ = $context["edit_assignment"]; } else { $_edit_assignment_ = null; }
        echo twig_escape_filter($this->env, (($_edit_) ? ((($this->getAttribute($_edit_assignment_, "open")) ? ("checked") : (""))) : (set_checkbox("open", "1"))), "html", null, true);
        echo " />
\t\t<label for=\"form_a_open\" class=\"default\">Open</label><br>
\t\t<span class=\"form_comment\">Open or close this assignment.</span>
\t\t";
        // line 136
        echo form_error("open", "<div class=\"shj_error\">", "</div>");
        echo "
\t</p>
\t<p class=\"input_p\">
\t\t<input id=\"form_a_scoreboard\" type=\"checkbox\" name=\"scoreboard\" value=\"1\" ";
        // line 139
        if (isset($context["edit"])) { $_edit_ = $context["edit"]; } else { $_edit_ = null; }
        if (isset($context["edit_assignment"])) { $_edit_assignment_ = $context["edit_assignment"]; } else { $_edit_assignment_ = null; }
        echo twig_escape_filter($this->env, (($_edit_) ? ((($this->getAttribute($_edit_assignment_, "scoreboard")) ? ("checked") : (""))) : (set_checkbox("scoreboard", "1"))), "html", null, true);
        echo " />
\t\t<label for=\"form_a_scoreboard\" class=\"default\">Scoreboard</label><br>
\t\t<span class=\"form_comment\">Check this to enable scoreboard.</span>
\t\t";
        // line 142
        echo form_error("scoreboard", "<div class=\"shj_error\">", "</div>");
        echo "
\t</p>
\t<p class=\"input_p\">
\t\t<label for=\"form_late_rule\">Coefficient rule (<a target=\"_blank\" href=\"http://docs.sharifjudge.ir/add_assignment#coefficient_rule\">?</a>)</label><br>
\t\t<span class=\"form_comment medium clear\" style=\"display: block;\">PHP script without &lt;?php ?&gt; tags</span>
\t\t<textarea id=\"form_late_rule\" name=\"late_rule\" rows=\"14\" class=\"sharif_input add_text\">";
        // line 147
        if (isset($context["edit"])) { $_edit_ = $context["edit"]; } else { $_edit_ = null; }
        if (isset($context["edit_assignment"])) { $_edit_assignment_ = $context["edit_assignment"]; } else { $_edit_assignment_ = null; }
        if (isset($context["default_late_rule"])) { $_default_late_rule_ = $context["default_late_rule"]; } else { $_default_late_rule_ = null; }
        echo twig_escape_filter($this->env, (($_edit_) ? ($this->getAttribute($_edit_assignment_, "late_rule")) : (set_value("late_rule", $_default_late_rule_))), "html", null, true);
        echo "</textarea>
\t\t";
        // line 148
        echo form_error("late_rule", "<div class=\"shj_error\">", "</div>");
        echo "
\t</p>
</div>
<p class=\"input_p\" id=\"add_problems\">Problems <i class=\"fa fa-plus-circle fa-lg color11 pointer\" id=\"add\"></i>
<table id=\"problems_table\">
\t<thead>
\t<tr>
\t\t<th rowspan=\"2\"></th>
\t\t<th rowspan=\"2\">Name</th>
\t\t<th rowspan=\"2\">Score</th>
\t\t<th colspan=\"3\" style=\"border-bottom: 1px solid #BDBDBD\">Time Limit (ms)</th>
\t\t<th rowspan=\"2\">Memory<br>Limit (kB)</th>
\t\t<th rowspan=\"2\">Allowed<br>Languages (<a target=\"_blank\" href=\"http://docs.sharifjudge.ir/add_assignment#allowed_languages\">?</a>)</th>
\t\t<th rowspan=\"2\">Diff<br>Command (<a target=\"_blank\" href=\"http://docs.sharifjudge.ir/add_assignment#diff_command\">?</a>)</th>
\t\t<th rowspan=\"2\">Diff<br>Argument (<a target=\"_blank\" href=\"http://docs.sharifjudge.ir/add_assignment#diff_arguments\">?</a>)</th>
\t\t<th rowspan=\"2\">Upload<br>Only (<a target=\"_blank\" href=\"http://docs.sharifjudge.ir/add_assignment#upload_only\">?</a>)</th>
\t\t<th rowspan=\"2\"></th>
\t</tr>
\t<tr>
\t\t<th>C/C++</th><th>Python</th><th>Java</th>
\t</tr>
\t</thead>
\t<tbody>
\t";
        // line 171
        if (isset($context["problems"])) { $_problems_ = $context["problems"]; } else { $_problems_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_problems_);
        foreach ($context['_seq'] as $context["_key"] => $context["problem"]) {
            // line 172
            echo "\t\t<tr>
\t\t\t<td>";
            // line 173
            if (isset($context["problem"])) { $_problem_ = $context["problem"]; } else { $_problem_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_problem_, "id"), "html", null, true);
            echo "</td>
\t\t\t<td><input type=\"text\" name=\"name[]\" class=\"sharif_input short\" value=\"";
            // line 174
            if (isset($context["problem"])) { $_problem_ = $context["problem"]; } else { $_problem_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_problem_, "name"), "html", null, true);
            echo "\"/></td>
\t\t\t<td><input type=\"text\" name=\"score[]\" class=\"sharif_input tiny2\" value=\"";
            // line 175
            if (isset($context["problem"])) { $_problem_ = $context["problem"]; } else { $_problem_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_problem_, "score"), "html", null, true);
            echo "\"/></td>
\t\t\t<td><input type=\"text\" name=\"c_time_limit[]\" class=\"sharif_input tiny2\" value=\"";
            // line 176
            if (isset($context["problem"])) { $_problem_ = $context["problem"]; } else { $_problem_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_problem_, "c_time_limit"), "html", null, true);
            echo "\"/></td>
\t\t\t<td><input type=\"text\" name=\"python_time_limit[]\" class=\"sharif_input tiny2\" value=\"";
            // line 177
            if (isset($context["problem"])) { $_problem_ = $context["problem"]; } else { $_problem_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_problem_, "python_time_limit"), "html", null, true);
            echo "\"/></td>
\t\t\t<td><input type=\"text\" name=\"java_time_limit[]\" class=\"sharif_input tiny2\" value=\"";
            // line 178
            if (isset($context["problem"])) { $_problem_ = $context["problem"]; } else { $_problem_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_problem_, "java_time_limit"), "html", null, true);
            echo "\"/></td>
\t\t\t<td><input type=\"text\" name=\"memory_limit[]\" class=\"sharif_input tiny\" value=\"";
            // line 179
            if (isset($context["problem"])) { $_problem_ = $context["problem"]; } else { $_problem_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_problem_, "memory_limit"), "html", null, true);
            echo "\"/></td>
\t\t\t<td><input type=\"text\" name=\"languages[]\" class=\"sharif_input short2\" value=\"";
            // line 180
            if (isset($context["problem"])) { $_problem_ = $context["problem"]; } else { $_problem_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_problem_, "allowed_languages"), "html", null, true);
            echo "\"/></td>
\t\t\t<td><input type=\"text\" name=\"diff_cmd[]\" class=\"sharif_input tiny\" value=\"";
            // line 181
            if (isset($context["problem"])) { $_problem_ = $context["problem"]; } else { $_problem_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_problem_, "diff_cmd"), "html", null, true);
            echo "\"/></td>
\t\t\t<td><input type=\"text\" name=\"diff_arg[]\" class=\"sharif_input tiny\" value=\"";
            // line 182
            if (isset($context["problem"])) { $_problem_ = $context["problem"]; } else { $_problem_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_problem_, "diff_arg"), "html", null, true);
            echo "\"/></td>
\t\t\t<td><input type=\"checkbox\" name=\"is_upload_only[]\" class=\"check\" value=\"";
            // line 183
            if (isset($context["problem"])) { $_problem_ = $context["problem"]; } else { $_problem_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_problem_, "id"), "html", null, true);
            echo "\" ";
            if (isset($context["problem"])) { $_problem_ = $context["problem"]; } else { $_problem_ = null; }
            echo (($this->getAttribute($_problem_, "is_upload_only")) ? ("checked") : (""));
            echo "/></td>
\t\t\t<td><i class=\"fa fa-times-circle fa-lg color1 delete_problem pointer\"></i></td>
\t\t</tr>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['problem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 187
        echo "\t</tbody>
</table>
</p>
";
        // line 190
        echo form_error("name[]", "<div class=\"shj_error\">", "</div>");
        echo "
";
        // line 191
        echo form_error("score[]", "<div class=\"shj_error\">", "</div>");
        echo "
";
        // line 192
        echo form_error("c_time_limit[]", "<div class=\"shj_error\">", "</div>");
        echo "
";
        // line 193
        echo form_error("python_time_limit[]", "<div class=\"shj_error\">", "</div>");
        echo "
";
        // line 194
        echo form_error("java_time_limit[]", "<div class=\"shj_error\">", "</div>");
        echo "
";
        // line 195
        echo form_error("memory_limit[]", "<div class=\"shj_error\">", "</div>");
        echo "
";
        // line 196
        echo form_error("languages[]", "<div class=\"shj_error\">", "</div>");
        echo "
";
        // line 197
        echo form_error("diff_cmd[]", "<div class=\"shj_error\">", "</div>");
        echo "
";
        // line 198
        echo form_error("diff_arg[]", "<div class=\"shj_error\">", "</div>");
        echo "
<p class=\"input_p\">
\t<input type=\"submit\" value=\"";
        // line 200
        if (isset($context["edit"])) { $_edit_ = $context["edit"]; } else { $_edit_ = null; }
        echo (($_edit_) ? ("Edit") : ("Add"));
        echo " Assignment\" class=\"sharif_input\"/>
</p>
</form>
";
    }

    public function getTemplateName()
    {
        return "pages/admin/add_assignment.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  459 => 200,  454 => 198,  450 => 197,  446 => 196,  442 => 195,  438 => 194,  434 => 193,  430 => 192,  426 => 191,  422 => 190,  417 => 187,  403 => 183,  398 => 182,  393 => 181,  388 => 180,  383 => 179,  378 => 178,  373 => 177,  368 => 176,  363 => 175,  358 => 174,  353 => 173,  350 => 172,  345 => 171,  319 => 148,  312 => 147,  304 => 142,  296 => 139,  290 => 136,  282 => 133,  276 => 129,  269 => 127,  265 => 126,  250 => 116,  240 => 109,  234 => 108,  224 => 101,  218 => 100,  211 => 96,  205 => 95,  198 => 91,  192 => 90,  183 => 87,  176 => 85,  173 => 84,  167 => 80,  164 => 79,  161 => 78,  151 => 76,  146 => 75,  136 => 73,  131 => 72,  128 => 71,  121 => 64,  118 => 63,  76 => 23,  71 => 21,  61 => 15,  58 => 14,  50 => 10,  42 => 9,  35 => 8,  30 => 6,);
    }
}