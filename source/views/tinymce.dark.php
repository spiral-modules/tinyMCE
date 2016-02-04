<extends:spiral:element/>

<block:resources>
    <resource:script href="resources/scripts/spiral/sf.js"/>
    <resource:script href="resources/scripts/spiral/sf.tinymce.js"/>
</block:resources>

<block:body>
    <?php #compiled
    //Receiving label content as evaluator variable
    $this->evaluatorVariable('label', '${label}');
    if (!empty($label) && $label != "''") {
        ?>
        <block:input-label>
            <span class="${label-class} item-label" node:attributes="prefix:label">${label}</span>
        </block:input-label>
        <?php #compiled
    }
    ?>
    <block:input-body>
        <textarea name="${name}" data-base-url="${base-url}" data-config="${config}" class="js-sf-tinymce" node:attributes>${value}</textarea>
    </block:input-body>
</block:body>