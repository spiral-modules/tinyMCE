<extends:spiral:element/>

<block:resources>
    <resource:script href="resources/scripts/spiral/tinymce/tinymce.min.js"/>
    <resource:script href="resources/scripts/spiral/sf.js"/>
    <resource:script href="resources/scripts/spiral/sf.tinymce.min.js"/>
</block:resources>

<block:body>
    <?php #compiled
    //Receiving label content as evaluator variable
    $this->evaluatorVariable('label', '${label}');
    $this->runtimeVariable('config', '${config}');
    if (!empty($label) && $label != "''") {
        ?>
        <block:input-label>
            <span class="${label-class} item-label" node:attributes="prefix:label">${label}</span>
        </block:input-label>
        <?php #compiled
    }
    ?>
    <block:input-body>
        <textarea name="${name}" data-base-url="${base-url}" class="js-sf-tinymce"
            <? if (!empty($config) && $config != "''") { ?>
                data-config="<?= htmlentities($config, ENT_QUOTES, 'UTF-8') ?>"
            <? } ?>
                  node:attributes>${value}</textarea>
    </block:input-body>
</block:body>
