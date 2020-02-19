<?php

/*

  type: layout

  name: Default

  description: Default template


*/

?>
<?php
if ($json == false) {
    print lnotif(_e('Click to edit accordion', true));

    return;
}

if (isset($json) == false or count($json) == 0) {
    $json = array(0 => $defaults);
}
?>

<script>

    $(document).ready(function () {
        var root = $("#mw-accordion-module-<?php print $params['id'] ?>");
        $('.accordion__title', root).on('click', function () {
            $('li.active', root).removeClass('active');
            $(this).parent().addClass('active');
        })
    })

</script>

<div id="mw-accordion-module-<?php print $params['id'] ?>">
    <?php foreach ($json as $key => $slide): ?>
        <?php
        $edit_field_key = $key;
        if (isset($slide['id'])) {
            $edit_field_key = $slide['id'];
        }

        ?>

        <div class="card">
            <div class="card-header" id="header-item-<?php print $edit_field_key ?>">
                <h5 class="mb-0">
                    <button class="btn btn-link" data-toggle="collapse" data-target="#collapse-accordion-item-<?php print $edit_field_key . '-' . $key ?>" aria-expanded="true" aria-controls="collapse-accordion-item-<?php print $edit_field_key . '-' . $key ?>">
                        <?php print isset($slide['icon']) ? $slide['icon'] . ' ' : ''; ?><?php print isset($slide['title']) ? $slide['title'] : ''; ?>
                    </button>
                </h5>
            </div>

            <div id="collapse-accordion-item-<?php print $edit_field_key . '-' . $key ?>" class="collapse <?php if ($key == 0): ?>show<?php endif; ?>" aria-labelledby="header-item-<?php print $edit_field_key ?>" data-parent="#mw-accordion-module-<?php print $params['id'] ?>">
                <div class="card-body">
                    <div class="edit allow-drop" field="accordion-item-<?php print $edit_field_key ?>" rel="module-<?php print $params['id'] ?>">
                        <div class="element"> <?php print isset($slide['content']) ? $slide['content'] : 'Accordion content' ?></div>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>