
<?php

    $call = function ($fn) {
        return $fn();
    };



    $default_content =  array(
        array(
            "title" => "Awesome Quality",
            "icon" => "<i class='material-icons'>important_devices</i>",
            "content" =>  <<<EOT
            <div class="row flexbox-container">
                <div class="col-md-6 img-holder">
                    <img src="{$call('template_url')}assets/img/section-10/mockup.png"/>
                </div>

                <div class="col-md-6 left-side">
                    <h3>Awesome Quality</h3>
                    <p>
                        It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.It is a long
                        established fact that a reader will be distracted by the readable content of a page when looking at its layout.It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.
                        <br/><br/>
                    </p>

                    <p><a href="" class="btn btn-default btn-lg">Download</a></p>
                </div>
            </div>
EOT

        ),
        array(
            "title" => "Color Scheme",
            "icon" => "<i class='material-icons'>invert_colors</i>",
            "content" =>  <<<EOT
            <div class="row">
                            <div class="col-md-6">
                                <div class="styled-lists">
                                    <ul>
                                        <li>
                                            <strong>Awesome Quality</strong>
                                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                                        </li>
                                        <li>
                                            <strong>Awesome Quality</strong>
                                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                                        </li>
                                        <li>
                                            <strong>Awesome Quality</strong>
                                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                                        </li>
                                        <li>
                                            <strong>Awesome Quality</strong>
                                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="styled-lists">
                                    <ul>
                                        <li>
                                            <strong>Awesome Quality</strong>
                                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                                        </li>
                                        <li>
                                            <strong>Awesome Quality</strong>
                                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                                        </li>
                                        <li>
                                            <strong>Awesome Quality</strong>
                                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                                        </li>
                                        <li>
                                            <strong>Awesome Quality</strong>
                                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
EOT

        ),
        array(
            "title" => "Google Fonts",
            "icon" => "<i class='material-icons'>font_download</i>",
            "content" =>  '31'
        ),
        array(
            "title" => "Drag and Drop",
            "icon" => "<i class='material-icons'>touch_app</i>",
            "content" =>  '42'
        ),
    );


 ?>