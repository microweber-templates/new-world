<?php
if ($json == false) {
    print lnotif(_e('Click to edit accordion', true));

    return;
}

if (isset($json) == false or count($json) == 0) {
    $json = array(0 => $defaults);
}
?>

<div class="row" id="mw-accordion-module-<?php print $params['id'] ?>">
    <div class="col-lg-2">
        <ul class="nav flex-column" id="accordion-<?php print $params['id']; ?>" role="tablist">
            <?php foreach ($json as $key => $slide): ?>
                <li class="nav-item">
                    <a class="nav-link <?php if ($key == 0): ?>active<?php endif; ?>" id="<?php print $params['id'] . '-' . $key; ?>-tab" data-toggle="tab" href="#tab-<?php print $params['id'] . '-' . $key; ?>" role="tab" aria-controls="home"
                       aria-selected="true"><?php print isset($slide['icon']) ? $slide['icon'] . ' ' : ''; ?><?php print isset($slide['title']) ? $slide['title'] : ''; ?></a>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>

    <div class="col-lg-10">
        <div class="tab-content" id="accordion-<?php print $params['id']; ?>-content">
            <?php foreach ($json as $key => $slide): ?>
                <div class="tab-pane fade <?php if ($key == 0): ?>show active<?php endif; ?>" id="tab-<?php print $params['id'] . '-' . $key; ?>" role="tabpanel" aria-labelledby="<?php print $params['id'] . '-' . $key; ?>-tab">
                    <div class="edit" field="accordion-item-<?php print $key ?>" rel="module-<?php print $params['id'] ?>">
                        <div class="row">
                            <div class="col-lg-12 col-xl-12">
                                <div class="description allow-drop">
                                    <div class="row menu nodrop">
                                        <div class="col-md-6 item cloneable">
                                            <div class="title"><span class="safe-element">Service 1</span></div>
                                            <div class="price">$ 23.00</div>
                                            <p>Lorem Ipsum has been the industry's standard dummy text</p>
                                        </div>

                                        <div class="col-md-6 item cloneable">
                                            <div class="title"><span class="safe-element">Service 2</span></div>
                                            <div class="price">$ 25.00</div>
                                            <p>Lorem Ipsum has been the industry's standard dummy text</p>
                                        </div>

                                        <div class="col-md-6 item cloneable">
                                            <div class="title"><span class="safe-element">Service 3</span></div>
                                            <div class="price">$ 12.00</div>
                                            <p>Lorem Ipsum has been the industry's standard dummy text</p>
                                        </div>

                                        <div class="col-md-6 item cloneable">
                                            <div class="title"><span class="safe-element">Service 4</span></div>
                                            <div class="price">$ 17.00</div>
                                            <p>Lorem Ipsum has been the industry's standard dummy text</p>
                                        </div>

                                        <div class="col-md-6 item cloneable">
                                            <div class="title"><span class="safe-element">Service 5</span></div>
                                            <div class="price">$ 10.00</div>
                                            <p>Lorem Ipsum has been the industry's standard dummy text</p>
                                        </div>

                                        <div class="col-md-6 item cloneable">
                                            <div class="title"><span class="safe-element">Service 6</span></div>
                                            <div class="price">$ 23.00</div>
                                            <p>Lorem Ipsum has been the industry's standard dummy text</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>