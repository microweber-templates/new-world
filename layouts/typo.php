<?php

/*

  type: layout
  content_type: static
  name: Typography
  position: 11
  description: Typography

*/

?>
<?php include template_dir() . "header.php"; ?>


<div class="edit main-content">
    <section class="section d-flex">
        <div class="container align-self-center align-items-center">
            <!-- Headings -->
            <div class="row bg-silver">
                <div class="col-lg-6 mx-auto text-center">
                    <h1>H1 Title</h1>
                </div>

                <div class="col-lg-6 mx-auto text-center">
                    <h1 class="hr">H1 Title</h1>
                </div>

                <div class="col-lg-6 mx-auto text-center">
                    <h2>H2 Title</h2>
                </div>

                <div class="col-lg-6 mx-auto text-center">
                    <h2 class="hr">H2 Title</h2>
                </div>

                <div class="col-lg-6 mx-auto text-center">
                    <h3>H3 Title</h3>
                </div>

                <div class="col-lg-6 mx-auto text-center">
                    <h3 class="hr">H3 Title</h3>
                </div>

                <div class="col-lg-6 mx-auto text-center">
                    <h4>H4 Title</h4>
                </div>

                <div class="col-lg-6 mx-auto text-center">
                    <h4 class="hr">H4 Title</h4>
                </div>

                <div class="col-lg-6 mx-auto text-center">
                    <h5>H5 Title</h5>
                </div>

                <div class="col-lg-6 mx-auto text-center">
                    <h5 class="hr">H5 Title</h5>
                </div>
            </div>

            <!-- Paragraphs -->
            <div class="row p-40">
                <div class="col-lg-4 mx-auto">
                    <?php include(template_dir() . 'elements' . DS . 'paragraph.php'); ?>
                    <br/><br/>
                    <small>Small text<br/>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</small>
                </div>

                <div class="col-lg-4 mx-auto">
                    <?php include(template_dir() . 'elements' . DS . 'paragraph-lead.php'); ?>
                    <br/><br/>
                    <?php include(template_dir() . 'elements' . DS . 'paragraph-highlight.php'); ?>
                </div>
            </div>

            <!-- Lists -->
            <div class="row p-40 bg-silver">
                <div class="col-lg-4 mx-auto text-center">
                    <?php include(template_dir() . 'elements' . DS . 'ordered-list.php'); ?>
                </div>

                <div class="col-lg-4 mx-auto text-center">
                    <?php include(template_dir() . 'elements' . DS . 'unordered-list.php'); ?>
                </div>
            </div>

            <!-- Blockquotes -->
            <div class="row p-40">
                <div class="col-lg-4 mx-auto text-left">
                    <?php include(template_dir() . 'elements' . DS . 'blockquote.php'); ?>
                </div>

                <div class="col-lg-4 mx-auto text-center">
                    <?php include(template_dir() . 'elements' . DS . 'blockquote.php'); ?>
                </div>
            </div>

            <!-- Buttons -->
            <div class="row p-40 bg-silver">
                <div class="col-lg-4 mx-auto text-left">
                    <div class="button-1">
                        <a href="#">LARGE BUTTON</a>
                        <div class="mask"></div>
                    </div>

                    <br/>
                    <br/>

                    <div class="button-2">
                        <a href="#">LARGE BUTTON WITH ARROW</a>
                        <div class="mask"></div>
                    </div>

                    <br/>
                    <br/>

                    <div class="button-3">
                        <a href="#">LARGE BUTTON WITH ARROW</a>
                    </div>
                </div>

                <div class="col-lg-4 mx-auto text-left">
                    <div class="button-1 button-md">
                        <a href="#">MEDIUM BUTTON</a>
                        <div class="mask"></div>
                    </div>

                    <br/>
                    <br/>

                    <div class="button-2 button-md">
                        <a href="#">MEDIUM BUTTON WITH ARROW</a>
                        <div class="mask"></div>
                    </div>

                    <br/>
                    <br/>

                    <div class="button-3 button-md">
                        <a href="#">MEDIUM BUTTON WITH ARROW</a>
                    </div>
                </div>
            </div>

            <div class="row bg-default m-t-40 p-40">
                <div class="col-lg-4 mx-auto text-left">
                    <a href="#" class="button-4"><span>White stroke</span></a>

                    <br/>
                    <br/>

                    <a href="#" class="button-5"><span>White stroke with arrow</span></a>

                    <br/>
                    <br/>

                    <div class="button-6"><a href="#">Large button with arrow</a></div>
                </div>

                <div class="col-lg-4 mx-auto text-left">

                    <a href="#" class="button-4 button-md"><span>White stroke</span></a>

                    <br/>
                    <br/>

                    <a href="#" class="button-5 button-md"><span>White stroke with arrow</span></a>

                    <br/>
                    <br/>

                    <div class="button-6 button-md"><a href="#">Medium button with arrow</a></div>
                </div>
            </div>

            <div class="row bg-default m-b-40 p-40">
                <div class="col-lg-2 mx-auto text-left">
                    <a href="#" class="button-7"><span>Read more</span></a>
                </div>

                <div class="col-lg-2 mx-auto text-left">
                    <a href="#" class="button-8"><span>Read more</span></a>
                </div>

                <div class="col-lg-2 mx-auto text-left">
                    <a href="#" class="button-8 button-red"><span>Read more</span></a>
                </div>
            </div>

            <!-- Forms -->
            <div class="row">
                <div class="col-xl-4 mx-auto">
                    <form>
                        <fieldset>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email address <i class="fas fa-question-circle" data-toggle="tooltip" data-placement="right" title="Tooltip text goes here and tells something."></i></label>
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                            </div>
                            <div class="form-group">
                                <select class="selectpicker form-control">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="exampleTextarea">Example textarea</label>
                                <textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">File input</label>
                                <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
                                <small id="fileHelp" class="form-text text-muted">This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small>
                            </div>

                        </fieldset>
                    </form>
                </div>

                <div class="col-xl-4 mx-auto">
                    <div class="form-group">
                        <fieldset disabled="">
                            <label class="control-label" for="disabledInput">Disabled input</label>
                            <input class="form-control" id="disabledInput" type="text" placeholder="Disabled input here..." disabled="">
                        </fieldset>
                    </div>

                    <div class="form-group">
                        <fieldset>
                            <label class="control-label" for="readOnlyInput">Readonly input</label>
                            <input class="form-control" id="readOnlyInput" type="text" placeholder="Readonly input here…" readonly="">
                        </fieldset>
                    </div>

                    <div class="form-group has-success">
                        <label class="form-control-label" for="inputSuccess1">Valid input</label>
                        <input type="text" value="correct value" class="form-control is-valid" id="inputValid">
                        <div class="valid-feedback">Success! You've done it.</div>
                    </div>

                    <div class="form-group has-danger">
                        <label class="form-control-label" for="inputDanger1">Invalid input</label>
                        <input type="text" value="wrong value" class="form-control is-invalid" id="inputInvalid">
                        <div class="invalid-feedback">Sorry, that username's taken. Try another?</div>
                    </div>

                    <div class="form-group">
                        <label class="col-form-label col-form-label-lg" for="inputLarge">Large input</label>
                        <input class="form-control form-control-lg" type="text" placeholder=".form-control-lg" id="inputLarge">
                    </div>

                    <div class="form-group">
                        <label class="col-form-label" for="inputDefault">Default input</label>
                        <input type="text" class="form-control" placeholder="Default input" id="inputDefault">
                    </div>

                    <div class="form-group">
                        <label class="col-form-label col-form-label-sm" for="inputSmall">Small input</label>
                        <input class="form-control form-control-sm" type="text" placeholder=".form-control-sm" id="inputSmall">
                    </div>

                    <div class="form-group">
                        <label class="control-label">Input addons</label>
                        <div class="form-group">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">$</span>
                                </div>
                                <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                                <div class="input-group-append">
                                    <span class="input-group-text">.00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row m-t-20">
                <div class="col-xl-3 offset-xl-1">
                    <h5>Display Block</h5>

                    <div class="form-group">
                        <div class="custom-control custom-radio">
                            <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input" checked="">
                            <label class="custom-control-label" for="customRadio1">Toggle this custom radio</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                            <label class="custom-control-label" for="customRadio2">Or toggle this other custom radio</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="customRadio3" name="customRadio" class="custom-control-input" disabled="">
                            <label class="custom-control-label" for="customRadio3">Disabled custom radio</label>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck1" checked="">
                            <label class="custom-control-label" for="customCheck1">Check this custom checkbox</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck2" disabled="">
                            <label class="custom-control-label" for="customCheck2">Disabled custom checkbox</label>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="customSwitch1" checked="">
                            <label class="custom-control-label" for="customSwitch1">Toggle this switch element</label>
                        </div>
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" disabled="" id="customSwitch2">
                            <label class="custom-control-label" for="customSwitch2">Disabled switch element</label>
                        </div>
                    </div>
                </div>

                <div class="col-xl-8 mx-auto">
                    <h5>Display Inline</h5>

                    <div class="form-group">
                        <div class="custom-control custom-radio d-inline-block">
                            <input type="radio" id="customRadio12" name="customRadio2" class="custom-control-input" checked="">
                            <label class="custom-control-label" for="customRadio12">Toggle this custom radio</label>
                        </div>
                        <div class="custom-control custom-radio d-inline-block">
                            <input type="radio" id="customRadio22" name="customRadio2" class="custom-control-input">
                            <label class="custom-control-label" for="customRadio22">Or toggle this other custom radio</label>
                        </div>
                        <div class="custom-control custom-radio d-inline-block">
                            <input type="radio" id="customRadio32" name="customRadio2" class="custom-control-input" disabled="">
                            <label class="custom-control-label" for="customRadio32">Disabled custom radio</label>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="custom-control custom-checkbox d-inline-block">
                            <input type="checkbox" class="custom-control-input" id="customCheck12" checked="">
                            <label class="custom-control-label" for="customCheck12">Check this custom checkbox</label>
                        </div>
                        <div class="custom-control custom-checkbox d-inline-block">
                            <input type="checkbox" class="custom-control-input" id="customCheck22" disabled="">
                            <label class="custom-control-label" for="customCheck22">Disabled custom checkbox</label>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="custom-control custom-switch d-inline-block">
                            <input type="checkbox" class="custom-control-input" id="customSwitch12" checked="">
                            <label class="custom-control-label" for="customSwitch12">Toggle this switch element</label>
                        </div>
                        <div class="custom-control custom-switch d-inline-block">
                            <input type="checkbox" class="custom-control-input" disabled="" id="customSwitch22">
                            <label class="custom-control-label" for="customSwitch22">Disabled switch element</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<?php include template_dir() . "footer.php"; ?>
